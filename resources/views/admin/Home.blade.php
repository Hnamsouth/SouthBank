@extends("admin.layout")
@section("title","Admin Home")

@section('center-css')
    <link rel="stylesheet" href="../../assets/libs/apexcharts/dist/apexcharts.css">
    <style > {{-- type="text/css"--}}
    .apexcharts-canvas {
            position: relative;
            user-select: none;
            /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
        }


        /* scrollbar is not visible by default for legend, hence forcing the visibility */
        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px;
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        }


        .apexcharts-inner {
            position: relative;
        }

        .apexcharts-text tspan {
            font-family: inherit;
        }

        .legend-mouseover-inactive {
            transition: 0.15s ease all;
            opacity: 0.20;
        }

        .apexcharts-series-collapsed {
            opacity: 0;
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, 0.96);
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, 0.8);
        }

        .apexcharts-tooltip * {
            font-family: inherit;
        }


        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px;
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #ECEFF1;
            border-bottom: 1px solid #ddd;
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, 0.7);
            border-bottom: 1px solid #333;
        }

        .apexcharts-tooltip-text-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            font-weight: 600;
            margin-left: 5px;
        }

        .apexcharts-tooltip-text-z-label:empty,
        .apexcharts-tooltip-text-z-value:empty {
            display: none;
        }

        .apexcharts-tooltip-text-value,
        .apexcharts-tooltip-text-z-value {
            font-weight: 600;
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center;
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1;
        }

        .apexcharts-tooltip-series-group.apexcharts-active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px;
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important;
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px;
        }

        .apexcharts-tooltip-candlestick {
            padding: 4px 8px;
        }

        .apexcharts-tooltip-candlestick>div {
            margin: 4px 0;
        }

        .apexcharts-tooltip-candlestick span.value {
            font-weight: bold;
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px;
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777;
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .apexcharts-xaxistooltip {
            opacity: 0;
            padding: 9px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
            transition: 0.15s ease all;
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-xaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-left: -6px;
        }

        .apexcharts-xaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-left: -7px;
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%;
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%;
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #ECEFF1;
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #ECEFF1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
            border-top-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-yaxistooltip {
            opacity: 0;
            padding: 4px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-yaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-top: -6px;
        }

        .apexcharts-yaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-top: -7px;
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%;
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%;
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1;
        }

        .apexcharts-yaxistooltip-hidden {
            display: none;
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: 0.15s ease all;
        }

        .apexcharts-xcrosshairs.apexcharts-active,
        .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0;
        }

        .apexcharts-selection-rect {
            cursor: move;
        }

        .svg_select_boundingRect, .svg_select_points_rot {
            pointer-events: none;
            opacity: 0;
            visibility: hidden;
        }
        .apexcharts-selection-rect + g .svg_select_boundingRect,
        .apexcharts-selection-rect + g .svg_select_points_rot {
            opacity: 0;
            visibility: hidden;
        }

        .apexcharts-selection-rect + g .svg_select_points_l,
        .apexcharts-selection-rect + g .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible;
        }

        .svg_select_points {
            fill: #efefef;
            stroke: #333;
            rx: 2;
        }

        .apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-canvas.apexcharts-zoomable .hovering-pan {
            cursor: move
        }

        .apexcharts-zoom-icon,
        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon,
        .apexcharts-reset-icon,
        .apexcharts-pan-icon,
        .apexcharts-selection-icon,
        .apexcharts-menu-icon,
        .apexcharts-toolbar-custom-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6E8192;
            text-align: center;
        }

        .apexcharts-zoom-icon svg,
        .apexcharts-zoomin-icon svg,
        .apexcharts-zoomout-icon svg,
        .apexcharts-reset-icon svg,
        .apexcharts-menu-icon svg {
            fill: #6E8192;
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(0.76)
        }

        .apexcharts-theme-dark .apexcharts-zoom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
        .apexcharts-theme-dark .apexcharts-reset-icon svg,
        .apexcharts-theme-dark .apexcharts-pan-icon svg,
        .apexcharts-theme-dark .apexcharts-selection-icon svg,
        .apexcharts-theme-dark .apexcharts-menu-icon svg,
        .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
            fill: #f3f4f5;
        }

        .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
            fill: #008FFB;
        }

        .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
        .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
        .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
        .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
            fill: #333;
        }

        .apexcharts-selection-icon,
        .apexcharts-menu-icon {
            position: relative;
        }

        .apexcharts-reset-icon {
            margin-left: 5px;
        }

        .apexcharts-zoom-icon,
        .apexcharts-reset-icon,
        .apexcharts-menu-icon {
            transform: scale(0.85);
        }

        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            transform: scale(0.7)
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px;
        }

        .apexcharts-pan-icon {
            transform: scale(0.62);
            position: relative;
            left: 1px;
            top: 0px;
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6E8192;
            stroke-width: 2;
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008FFB;
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333;
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0px 6px 2px 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: 0.15s ease all;
            pointer-events: none;
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: 0.15s ease all;
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer;
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee;
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
        }

        @media screen and (min-width: 768px) {
            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1;
            }
        }

        .apexcharts-datalabel.apexcharts-element-hidden {
            opacity: 0;
        }

        .apexcharts-pie-label,
        .apexcharts-datalabels,
        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value {
            cursor: default;
            pointer-events: none;
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: 0.3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease;
        }

        .apexcharts-canvas .apexcharts-element-hidden {
            opacity: 0;
        }

        .apexcharts-hide .apexcharts-series-points {
            opacity: 0;
        }

        .apexcharts-gridline,
        .apexcharts-annotation-rect,
        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-line,
        .apexcharts-zoom-rect,
        .apexcharts-toolbar svg,
        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-radar-series path,
        .apexcharts-radar-series polygon {
            pointer-events: none;
        }


        /* markers */

        .apexcharts-marker {
            transition: 0.15s ease all;
        }

        @keyframes opaque {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }


        /* Resize generated styles */

        @keyframes resizeanim {
            from {
                opacity: 0;
            }
            to {
                opacity: 0;
            }
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
        }

        .resize-triggers,
        .resize-triggers>div,
        .contract-trigger:before {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .resize-triggers>div {
            background: #eee;
            overflow: auto;
        }

        .contract-trigger:before {
            width: 200%;
            height: 200%;
        }</style>


@endsection



@section("main-content")


    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Dashboard</h3>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <div class="d-flex mt-2 justify-content-end">
                <div class="d-flex me-3 ms-2">
                    <div class="chart-text me-2">
                        <h6 class="mb-0"><small>THIS MONTH</small></h6>
                        <h4 class="mt-0 text-info">$58,356</h4>
                    </div>
                    <div class="spark-chart">
                        <div id="monthchart"><canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
                <div class="d-flex ms-2">
                    <div class="chart-text me-2">
                        <h6 class="mb-0"><small>LAST MONTH</small></h6>
                        <h4 class="mt-0 text-primary">$48,356</h4>
                    </div>
                    <div class="spark-chart">
                        <div id="lastmonthchart"><canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
{{--        pusher test --}}
        <button id="pusher" class="btn btn-primary">Pusher</button>

    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex flex-wrap">
                                    <div>
                                        <h3 class="card-title">Sales Overview</h3>
                                        <h6 class="card-subtitle">
                                            Ample Admin Vs Pixel Admin
                                        </h6>
                                    </div>
                                    <div class="ms-auto">
                                        <ul class="list-inline">
                                            <li class="list-inline-item px-2">
                                                <h6 class="text-success">
                                                    <i class="fa fa-circle font-10 me-2"></i>Ample
                                                </h6>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <h6 class="text-info">
                                                    <i class="fa fa-circle font-10 me-2"></i>Pixel
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" style="position: relative;">
                                <div id="sales-overview" style="height: 360px; min-height: 345px;"><div id="apexchartsflbwqea6" class="apexcharts-canvas apexchartsflbwqea6 apexcharts-theme-light" style="width: 516px; height: 330px;"><svg id="SvgjsSvg2636" width="516" height="330" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 10)" style="background: transparent;"><g id="SvgjsG2638" class="apexcharts-inner apexcharts-graphical" transform="translate(37.21199035644531, 30)"><defs id="SvgjsDefs2637"><linearGradient id="SvgjsLinearGradient2642" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2643" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop2644" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop2645" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskflbwqea6"><rect id="SvgjsRect2647" width="477.7880096435547" height="262.494" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskflbwqea6"><rect id="SvgjsRect2648" width="472.7880096435547" height="261.494" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect2646" width="10.045457349504742" height="257.494" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2642)" class="apexcharts-xcrosshairs" y2="257.494" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG2668" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2669" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2671" font-family="Poppins,sans-serif" x="33.484857831682476" y="286.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2672">Mon</tspan><title>Mon</title></text><text id="SvgjsText2674" font-family="Poppins,sans-serif" x="100.45457349504743" y="286.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2675">Tue</tspan><title>Tue</title></text><text id="SvgjsText2677" font-family="Poppins,sans-serif" x="167.42428915841236" y="286.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2678">Wed</tspan><title>Wed</title></text><text id="SvgjsText2680" font-family="Poppins,sans-serif" x="234.39400482177734" y="286.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2681">Thu</tspan><title>Thu</title></text><text id="SvgjsText2683" font-family="Poppins,sans-serif" x="301.36372048514227" y="286.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2684">Fri</tspan><title>Fri</title></text><text id="SvgjsText2686" font-family="Poppins,sans-serif" x="368.3334361485072" y="286.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2687">Sat</tspan><title>Sat</title></text><text id="SvgjsText2689" font-family="Poppins,sans-serif" x="435.3031518118721" y="286.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2690">Sun</tspan><title>Sun</title></text></g></g><g id="SvgjsG2703" class="apexcharts-grid"><g id="SvgjsG2704" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2706" x1="0" y1="0" x2="468.7880096435547" y2="0" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2707" x1="0" y1="64.3735" x2="468.7880096435547" y2="64.3735" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2708" x1="0" y1="128.747" x2="468.7880096435547" y2="128.747" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2709" x1="0" y1="193.12050000000002" x2="468.7880096435547" y2="193.12050000000002" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2710" x1="0" y1="257.494" x2="468.7880096435547" y2="257.494" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line></g><g id="SvgjsG2705" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2712" x1="0" y1="257.494" x2="468.7880096435547" y2="257.494" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2711" x1="0" y1="1" x2="0" y2="257.494" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2649" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG2650" class="apexcharts-series" rel="1" seriesName="Pixelx" data:realIndex="0"><path id="SvgjsPath2652" d="M 23.43940048217773 257.494L 23.43940048217773 64.3735L 28.484857831682476 64.3735L 28.484857831682476 64.3735L 28.484857831682476 257.494L 28.484857831682476 257.494z" fill="rgba(30,136,229,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskflbwqea6)" pathTo="M 23.43940048217773 257.494L 23.43940048217773 64.3735L 28.484857831682476 64.3735L 28.484857831682476 64.3735L 28.484857831682476 257.494L 28.484857831682476 257.494z" pathFrom="M 23.43940048217773 257.494L 23.43940048217773 257.494L 28.484857831682476 257.494L 28.484857831682476 257.494L 28.484857831682476 257.494L 23.43940048217773 257.494" cy="64.3735" cx="87.90911614554268" j="0" val="9" barHeight="193.12050000000002" barWidth="10.045457349504742"></path><path id="SvgjsPath2653" d="M 90.40911614554268 257.494L 90.40911614554268 150.20483333333334L 95.45457349504743 150.20483333333334L 95.45457349504743 150.20483333333334L 95.45457349504743 257.494L 95.45457349504743 257.494z" fill="rgba(30,136,229,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskflbwqea6)" pathTo="M 90.40911614554268 257.494L 90.40911614554268 150.20483333333334L 95.45457349504743 150.20483333333334L 95.45457349504743 150.20483333333334L 95.45457349504743 257.494L 95.45457349504743 257.494z" pathFrom="M 90.40911614554268 257.494L 90.40911614554268 257.494L 95.45457349504743 257.494L 95.45457349504743 257.494L 95.45457349504743 257.494L 90.40911614554268 257.494" cy="150.20483333333334" cx="154.87883180890765" j="1" val="5" barHeight="107.28916666666669" barWidth="10.045457349504742"></path><path id="SvgjsPath2654" d="M 157.37883180890765 257.494L 157.37883180890765 193.12050000000002L 162.4242891584124 193.12050000000002L 162.4242891584124 193.12050000000002L 162.4242891584124 257.494L 162.4242891584124 257.494z" fill="rgba(30,136,229,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskflbwqea6)" pathTo="M 157.37883180890765 257.494L 157.37883180890765 193.12050000000002L 162.4242891584124 193.12050000000002L 162.4242891584124 193.12050000000002L 162.4242891584124 257.494L 162.4242891584124 257.494z" pathFrom="M 157.37883180890765 257.494L 157.37883180890765 257.494L 162.4242891584124 257.494L 162.4242891584124 257.494L 162.4242891584124 257.494L 157.37883180890765 257.494" cy="193.12050000000002" cx="221.8485474722726" j="2" val="3" barHeight="64.3735" barWidth="10.045457349504742"></path><path id="SvgjsPath2655" d="M 224.3485474722726 257.494L 224.3485474722726 107.28916666666666L 229.39400482177734 107.28916666666666L 229.39400482177734 107.28916666666666L 229.39400482177734 257.494L 229.39400482177734 257.494z" fill="rgba(30,136,229,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskflbwqea6)" pathTo="M 224.3485474722726 257.494L 224.3485474722726 107.28916666666666L 229.39400482177734 107.28916666666666L 229.39400482177734 107.28916666666666L 229.39400482177734 257.494L 229.39400482177734 257.494z" pathFrom="M 224.3485474722726 257.494L 224.3485474722726 257.494L 229.39400482177734 257.494L 229.39400482177734 257.494L 229.39400482177734 257.494L 224.3485474722726 257.494" cy="107.28916666666666" cx="288.81826313563755" j="3" val="7" barHeight="150.20483333333337" barWidth="10.045457349504742"></path><path id="SvgjsPath2656" d="M 291.31826313563755 257.494L 291.31826313563755 150.20483333333334L 296.36372048514227 150.20483333333334L 296.36372048514227 150.20483333333334L 296.36372048514227 257.494L 296.36372048514227 257.494z" fill="rgba(30,136,229,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskflbwqea6)" pathTo="M 291.31826313563755 257.494L 291.31826313563755 150.20483333333334L 296.36372048514227 150.20483333333334L 296.36372048514227 150.20483333333334L 296.36372048514227 257.494L 296.36372048514227 257.494z" pathFrom="M 291.31826313563755 257.494L 291.31826313563755 257.494L 296.36372048514227 257.494L 296.36372048514227 257.494L 296.36372048514227 257.494L 291.31826313563755 257.494" cy="150.20483333333334" cx="355.78797879900253" j="4" val="5" barHeight="107.28916666666669" barWidth="10.045457349504742"></path><path id="SvgjsPath2657" d="M 358.28797879900253 257.494L 358.28797879900253 42.91566666666665L 363.33343614850725 42.91566666666665L 363.33343614850725 42.91566666666665L 363.33343614850725 257.494L 363.33343614850725 257.494z" fill="rgba(30,136,229,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskflbwqea6)" pathTo="M 358.28797879900253 257.494L 358.28797879900253 42.91566666666665L 363.33343614850725 42.91566666666665L 363.33343614850725 42.91566666666665L 363.33343614850725 257.494L 363.33343614850725 257.494z" pathFrom="M 358.28797879900253 257.494L 358.28797879900253 257.494L 363.33343614850725 257.494L 363.33343614850725 257.494L 363.33343614850725 257.494L 358.28797879900253 257.494" cy="42.91566666666665" cx="422.75769446236745" j="5" val="10" barHeight="214.57833333333338" barWidth="10.045457349504742"></path><path id="SvgjsPath2658" d="M 425.25769446236745 257.494L 425.25769446236745 193.12050000000002L 430.30315181187217 193.12050000000002L 430.30315181187217 193.12050000000002L 430.30315181187217 257.494L 430.30315181187217 257.494z" fill="rgba(30,136,229,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskflbwqea6)" pathTo="M 425.25769446236745 257.494L 425.25769446236745 193.12050000000002L 430.30315181187217 193.12050000000002L 430.30315181187217 193.12050000000002L 430.30315181187217 257.494L 430.30315181187217 257.494z" pathFrom="M 425.25769446236745 257.494L 425.25769446236745 257.494L 430.30315181187217 257.494L 430.30315181187217 257.494L 430.30315181187217 257.494L 425.25769446236745 257.494" cy="193.12050000000002" cx="489.7274101257324" j="6" val="3" barHeight="64.3735" barWidth="10.045457349504742"></path></g><g id="SvgjsG2659" class="apexcharts-series" rel="2" seriesName="Amplex" data:realIndex="1"><path id="SvgjsPath2661" d="M 33.484857831682476 257.494L 33.484857831682476 128.747L 38.53031518118722 128.747L 38.53031518118722 128.747L 38.53031518118722 257.494L 38.53031518118722 257.494z" fill="rgba(33,193,214,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskflbwqea6)" pathTo="M 33.484857831682476 257.494L 33.484857831682476 128.747L 38.53031518118722 128.747L 38.53031518118722 128.747L 38.53031518118722 257.494L 38.53031518118722 257.494z" pathFrom="M 33.484857831682476 257.494L 33.484857831682476 257.494L 38.53031518118722 257.494L 38.53031518118722 257.494L 38.53031518118722 257.494L 33.484857831682476 257.494" cy="128.747" cx="97.95457349504743" j="0" val="6" barHeight="128.747" barWidth="10.045457349504742"></path><path id="SvgjsPath2662" d="M 100.45457349504743 257.494L 100.45457349504743 193.12050000000002L 105.50003084455217 193.12050000000002L 105.50003084455217 193.12050000000002L 105.50003084455217 257.494L 105.50003084455217 257.494z" fill="rgba(33,193,214,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskflbwqea6)" pathTo="M 100.45457349504743 257.494L 100.45457349504743 193.12050000000002L 105.50003084455217 193.12050000000002L 105.50003084455217 193.12050000000002L 105.50003084455217 257.494L 105.50003084455217 257.494z" pathFrom="M 100.45457349504743 257.494L 100.45457349504743 257.494L 105.50003084455217 257.494L 105.50003084455217 257.494L 105.50003084455217 257.494L 100.45457349504743 257.494" cy="193.12050000000002" cx="164.9242891584124" j="1" val="3" barHeight="64.3735" barWidth="10.045457349504742"></path><path id="SvgjsPath2663" d="M 167.4242891584124 257.494L 167.4242891584124 64.3735L 172.46974650791714 64.3735L 172.46974650791714 64.3735L 172.46974650791714 257.494L 172.46974650791714 257.494z" fill="rgba(33,193,214,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskflbwqea6)" pathTo="M 167.4242891584124 257.494L 167.4242891584124 64.3735L 172.46974650791714 64.3735L 172.46974650791714 64.3735L 172.46974650791714 257.494L 172.46974650791714 257.494z" pathFrom="M 167.4242891584124 257.494L 167.4242891584124 257.494L 172.46974650791714 257.494L 172.46974650791714 257.494L 172.46974650791714 257.494L 167.4242891584124 257.494" cy="64.3735" cx="231.89400482177734" j="2" val="9" barHeight="193.12050000000002" barWidth="10.045457349504742"></path><path id="SvgjsPath2664" d="M 234.39400482177734 257.494L 234.39400482177734 150.20483333333334L 239.4394621712821 150.20483333333334L 239.4394621712821 150.20483333333334L 239.4394621712821 257.494L 239.4394621712821 257.494z" fill="rgba(33,193,214,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskflbwqea6)" pathTo="M 234.39400482177734 257.494L 234.39400482177734 150.20483333333334L 239.4394621712821 150.20483333333334L 239.4394621712821 150.20483333333334L 239.4394621712821 257.494L 239.4394621712821 257.494z" pathFrom="M 234.39400482177734 257.494L 234.39400482177734 257.494L 239.4394621712821 257.494L 239.4394621712821 257.494L 239.4394621712821 257.494L 234.39400482177734 257.494" cy="150.20483333333334" cx="298.86372048514227" j="3" val="5" barHeight="107.28916666666669" barWidth="10.045457349504742"></path><path id="SvgjsPath2665" d="M 301.36372048514227 257.494L 301.36372048514227 171.66266666666667L 306.409177834647 171.66266666666667L 306.409177834647 171.66266666666667L 306.409177834647 257.494L 306.409177834647 257.494z" fill="rgba(33,193,214,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskflbwqea6)" pathTo="M 301.36372048514227 257.494L 301.36372048514227 171.66266666666667L 306.409177834647 171.66266666666667L 306.409177834647 171.66266666666667L 306.409177834647 257.494L 306.409177834647 257.494z" pathFrom="M 301.36372048514227 257.494L 301.36372048514227 257.494L 306.409177834647 257.494L 306.409177834647 257.494L 306.409177834647 257.494L 301.36372048514227 257.494" cy="171.66266666666667" cx="365.83343614850725" j="4" val="4" barHeight="85.83133333333335" barWidth="10.045457349504742"></path><path id="SvgjsPath2666" d="M 368.33343614850725 257.494L 368.33343614850725 128.747L 373.37889349801196 128.747L 373.37889349801196 128.747L 373.37889349801196 257.494L 373.37889349801196 257.494z" fill="rgba(33,193,214,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskflbwqea6)" pathTo="M 368.33343614850725 257.494L 368.33343614850725 128.747L 373.37889349801196 128.747L 373.37889349801196 128.747L 373.37889349801196 257.494L 373.37889349801196 257.494z" pathFrom="M 368.33343614850725 257.494L 368.33343614850725 257.494L 373.37889349801196 257.494L 373.37889349801196 257.494L 373.37889349801196 257.494L 368.33343614850725 257.494" cy="128.747" cx="432.80315181187217" j="5" val="6" barHeight="128.747" barWidth="10.045457349504742"></path><path id="SvgjsPath2667" d="M 435.30315181187217 257.494L 435.30315181187217 171.66266666666667L 440.3486091613769 171.66266666666667L 440.3486091613769 171.66266666666667L 440.3486091613769 257.494L 440.3486091613769 257.494z" fill="rgba(33,193,214,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="5" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskflbwqea6)" pathTo="M 435.30315181187217 257.494L 435.30315181187217 171.66266666666667L 440.3486091613769 171.66266666666667L 440.3486091613769 171.66266666666667L 440.3486091613769 257.494L 440.3486091613769 257.494z" pathFrom="M 435.30315181187217 257.494L 435.30315181187217 257.494L 440.3486091613769 257.494L 440.3486091613769 257.494L 440.3486091613769 257.494L 435.30315181187217 257.494" cy="171.66266666666667" cx="499.7728674752371" j="6" val="4" barHeight="85.83133333333335" barWidth="10.045457349504742"></path><g id="SvgjsG2660" class="apexcharts-datalabels" data:realIndex="1"></g></g><g id="SvgjsG2651" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2713" x1="0" y1="0" x2="468.7880096435547" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2714" x1="0" y1="0" x2="468.7880096435547" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2715" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2716" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2717" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2691" class="apexcharts-yaxis" rel="0" transform="translate(7.2119903564453125, 0)"><g id="SvgjsG2692" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2693" font-family="Poppins,sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2694">12</tspan></text><text id="SvgjsText2695" font-family="Poppins,sans-serif" x="20" y="95.77350000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2696">9</tspan></text><text id="SvgjsText2697" font-family="Poppins,sans-serif" x="20" y="160.14700000000002" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2698">6</tspan></text><text id="SvgjsText2699" font-family="Poppins,sans-serif" x="20" y="224.52050000000003" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2700">3</tspan></text><text id="SvgjsText2701" font-family="Poppins,sans-serif" x="20" y="288.894" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2702">0</tspan></text></g></g><g id="SvgjsG2639" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-title" style="font-family: Poppins, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(30, 136, 229);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(33, 193, 214);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 547px; height: 361px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body" style="position: relative;">
                        <h3 class="card-title">Our Visitors</h3>
                        <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                        <div id="our-visitors" class="mt-4" style="min-height: 274.8px;">
                            <div id="apexchartswk1shnih" class="apexcharts-canvas apexchartswk1shnih apexcharts-theme-light" style="width: 353px; height: 274.8px;">
                                <svg id="SvgjsSvg2953" width="353" height="274.8" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2955" class="apexcharts-inner apexcharts-graphical" transform="translate(136, 0)"><defs id="SvgjsDefs2954"><clipPath id="gridRectMaskwk1shnih"><rect id="SvgjsRect2957" width="250" height="268" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskwk1shnih"><rect id="SvgjsRect2958" width="250" height="272" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2959" class="apexcharts-pie"><g id="SvgjsG2960" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle2961" r="105.18731707317075" cx="123" cy="134" fill="transparent"></circle><g id="SvgjsG2962" class="apexcharts-slices"><g id="SvgjsG2963" class="apexcharts-series apexcharts-pie-series" seriesName="Mobile" rel="1" data:realIndex="0"><path id="SvgjsPath2964" d="M 123.00000000000001 7.268292682926813 A 126.73170731707319 126.73170731707319 0 0 1 207.03866663949202 228.86004506090347 L 192.75209331077838 212.73383740054987 A 105.18731707317075 105.18731707317075 0 0 0 123 28.812682926829254 L 123.00000000000001 7.268292682926813 z" fill="rgba(30,136,229,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="138.46153846153845" data:startAngle="0" data:strokeWidth="0" data:value="50" data:pathOrig="M 123.00000000000001 7.268292682926813 A 126.73170731707319 126.73170731707319 0 0 1 207.03866663949202 228.86004506090347 L 192.75209331077838 212.73383740054987 A 105.18731707317075 105.18731707317075 0 0 0 123 28.812682926829254 L 123.00000000000001 7.268292682926813 z"></path></g><g id="SvgjsG2965" class="apexcharts-series apexcharts-pie-series" seriesName="Tablet" rel="2" data:realIndex="1"><path id="SvgjsPath2966" d="M 207.03866663949202 228.86004506090347 A 126.73170731707319 126.73170731707319 0 0 1 4.5037951952825495 178.93968275787844 L 24.648150012084514 171.2999366890391 A 105.18731707317075 105.18731707317075 0 0 0 192.75209331077838 212.73383740054987 L 207.03866663949202 228.86004506090347 z" fill="rgba(38,198,218,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="110.76923076923077" data:startAngle="138.46153846153845" data:strokeWidth="0" data:value="40" data:pathOrig="M 207.03866663949202 228.86004506090347 A 126.73170731707319 126.73170731707319 0 0 1 4.5037951952825495 178.93968275787844 L 24.648150012084514 171.2999366890391 A 105.18731707317075 105.18731707317075 0 0 0 192.75209331077838 212.73383740054987 L 207.03866663949202 228.86004506090347 z"></path></g><g id="SvgjsG2967" class="apexcharts-series apexcharts-pie-series" seriesName="Other" rel="3" data:realIndex="2"><path id="SvgjsPath2968" d="M 4.5037951952825495 178.93968275787844 A 126.73170731707319 126.73170731707319 0 0 1 64.10483897708721 21.784646114778596 L 74.11701635098238 40.86125627526623 A 105.18731707317075 105.18731707317075 0 0 0 24.648150012084514 171.2999366890391 L 4.5037951952825495 178.93968275787844 z" fill="rgba(236,239,241,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="83.0769230769231" data:startAngle="249.23076923076923" data:strokeWidth="0" data:value="30" data:pathOrig="M 4.5037951952825495 178.93968275787844 A 126.73170731707319 126.73170731707319 0 0 1 64.10483897708721 21.784646114778596 L 74.11701635098238 40.86125627526623 A 105.18731707317075 105.18731707317075 0 0 0 24.648150012084514 171.2999366890391 L 4.5037951952825495 178.93968275787844 z"></path></g><g id="SvgjsG2969" class="apexcharts-series apexcharts-pie-series" seriesName="Desktop" rel="4" data:realIndex="3"><path id="SvgjsPath2970" d="M 64.10483897708721 21.784646114778596 A 126.73170731707319 126.73170731707319 0 0 1 122.9778811445187 7.268294613161089 L 122.98164134995052 28.812684528923697 A 105.18731707317075 105.18731707317075 0 0 0 74.11701635098238 40.86125627526623 L 64.10483897708721 21.784646114778596 z" fill="rgba(116,90,242,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="27.69230769230768" data:startAngle="332.3076923076923" data:strokeWidth="0" data:value="10" data:pathOrig="M 64.10483897708721 21.784646114778596 A 126.73170731707319 126.73170731707319 0 0 1 122.9778811445187 7.268294613161089 L 122.98164134995052 28.812684528923697 A 105.18731707317075 105.18731707317075 0 0 0 74.11701635098238 40.86125627526623 L 64.10483897708721 21.784646114778596 z"></path></g></g></g><g id="SvgjsG2971" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText2972" font-family="Poppins,sans-serif" x="123" y="141" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Poppins, sans-serif;">Our Visitor</text></g></g><line id="SvgjsLine2973" x1="0" y1="0" x2="246" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2974" x1="0" y1="0" x2="246" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2956" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(30, 136, 229);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(38, 198, 218);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(236, 239, 241);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(116, 90, 242);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 557px; height: 384px;"></div></div><div class="contract-trigger"></div></div></div>
                    <div class="card-body text-center border-top">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item px-2">
                                <h6 class="text-info">
                                    <i class="fa fa-circle font-10 me-2"></i>Mobile
                                </h6>
                            </li>
                            <li class="list-inline-item px-2">
                                <h6 class="text-primary">
                                    <i class="fa fa-circle font-10 me-2"></i>Desktop
                                </h6>
                            </li>
                            <li class="list-inline-item px-2">
                                <h6 class="text-success">
                                    <i class="fa fa-circle font-10 me-2"></i>Tablet
                                </h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card blog-widget w-100">
                    <div class="card-body">
                        <div class="blog-image">
                            <img src="../../assets/images/background/img5.jpg" alt="img" class="img-fluid blog-img-height w-100">
                        </div>
                        <h3>Business development new rules for 2021</h3>
                        <label class="
                      badge badge-pill
                      bg-light-success
                      text-success
                      font-weight-medium
                      py-1
                      px-2
                    ">Technology</label>
                        <p class="my-3">
                            Lorem ipsum dolor sit amet, this is a consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="read">
                                <a href="javascript:void(0)" class="link font-weight-medium">Read More</a>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0)" class="link me-2" data-bs-toggle="tooltip" aria-label="Like" data-bs-original-title="Like"><i class="mdi mdi-heart-outline"></i></a>
                                <a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" aria-label="Share" data-bs-original-title="Share"><i class="mdi mdi-share-variant"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body" style="position: relative;">
                        <div class="d-flex flex-wrap">
                            <div>
                                <h3 class="card-title">Newsletter Campaign</h3>
                                <h6 class="card-subtitle">
                                    Overview of Newsletter Campaign
                                </h6>
                            </div>
                            <div class="ms-auto align-self-center">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item px-2">
                                        <h6 class="text-success">
                                            <i class="fa fa-circle font-10 me-2"></i>Open Rate
                                        </h6>
                                    </li>
                                    <li class="list-inline-item px-2">
                                        <h6 class="text-info">
                                            <i class="fa fa-circle font-10 me-2"></i>Recurring
                                            Payments
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="newsletter-campaign" style="min-height: 285px;"><div id="apexchartsdrzxizf6" class="apexcharts-canvas apexchartsdrzxizf6 apexcharts-theme-light apexcharts-zoomable" style="width: 777px; height: 270px;"><svg id="SvgjsSvg2740" width="777" height="270" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2742" class="apexcharts-inner apexcharts-graphical" transform="translate(40.43499755859375, 30)"><defs id="SvgjsDefs2741"><clipPath id="gridRectMaskdrzxizf6"><rect id="SvgjsRect2748" width="471.56500244140625" height="199.494" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskdrzxizf6"><rect id="SvgjsRect2749" width="481.56500244140625" height="213.494" x="-8" y="-8" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2769" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2770" stop-opacity="0.5" stop-color="rgba(33,193,214,0.5)" offset="0"></stop><stop id="SvgjsStop2771" stop-opacity="0.5" stop-color="rgba(255,255,255,0.5)" offset="0.9"></stop><stop id="SvgjsStop2772" stop-opacity="0.5" stop-color="rgba(255,255,255,0.5)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2793" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2794" stop-opacity="0.5" stop-color="rgba(30,136,229,0.5)" offset="0"></stop><stop id="SvgjsStop2795" stop-opacity="0.5" stop-color="rgba(255,255,255,0.5)" offset="0.9"></stop><stop id="SvgjsStop2796" stop-opacity="0.5" stop-color="rgba(255,255,255,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine2747" x1="0" y1="0" x2="0" y2="197.494" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="197.494" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2799" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2800" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2802" font-family="Poppins,sans-serif" x="0" y="226.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2803">1</tspan><title>1</title></text><text id="SvgjsText2805" font-family="Poppins,sans-serif" x="66.50928606305806" y="226.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2806">2</tspan><title>2</title></text><text id="SvgjsText2808" font-family="Poppins,sans-serif" x="133.01857212611608" y="226.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2809">3</tspan><title>3</title></text><text id="SvgjsText2811" font-family="Poppins,sans-serif" x="199.5278581891741" y="226.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2812">4</tspan><title>4</title></text><text id="SvgjsText2814" font-family="Poppins,sans-serif" x="266.0371442522321" y="226.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2815">5</tspan><title>5</title></text><text id="SvgjsText2817" font-family="Poppins,sans-serif" x="332.54643031529014" y="226.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2818">6</tspan><title>6</title></text><text id="SvgjsText2820" font-family="Poppins,sans-serif" x="399.05571637834817" y="226.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2821">7</tspan><title>7</title></text><text id="SvgjsText2823" font-family="Poppins,sans-serif" x="465.5650024414062" y="226.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2824">8</tspan><title>8</title></text></g><line id="SvgjsLine2825" x1="0" y1="198.494" x2="465.56500244140625" y2="198.494" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG2840" class="apexcharts-grid"><g id="SvgjsG2841" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2859" x1="0" y1="0" x2="465.56500244140625" y2="0" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2860" x1="0" y1="39.4988" x2="465.56500244140625" y2="39.4988" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2861" x1="0" y1="78.9976" x2="465.56500244140625" y2="78.9976" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2862" x1="0" y1="118.49640000000001" x2="465.56500244140625" y2="118.49640000000001" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2863" x1="0" y1="157.9952" x2="465.56500244140625" y2="157.9952" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2864" x1="0" y1="197.49400000000003" x2="465.56500244140625" y2="197.49400000000003" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line></g><g id="SvgjsG2842" class="apexcharts-gridlines-vertical"><line id="SvgjsLine2843" x1="0" y1="0" x2="0" y2="197.494" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2845" x1="66.50928606305804" y1="0" x2="66.50928606305804" y2="197.494" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2847" x1="133.01857212611608" y1="0" x2="133.01857212611608" y2="197.494" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2849" x1="199.52785818917414" y1="0" x2="199.52785818917414" y2="197.494" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2851" x1="266.03714425223217" y1="0" x2="266.03714425223217" y2="197.494" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2853" x1="332.5464303152902" y1="0" x2="332.5464303152902" y2="197.494" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2855" x1="399.0557163783482" y1="0" x2="399.0557163783482" y2="197.494" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line><line id="SvgjsLine2857" x1="465.56500244140625" y1="0" x2="465.56500244140625" y2="197.494" stroke="rgba(0,0,0,.1)" stroke-dasharray="3" class="apexcharts-gridline"></line></g><line id="SvgjsLine2844" x1="0" y1="198.494" x2="0" y2="204.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2846" x1="66.50928606305804" y1="198.494" x2="66.50928606305804" y2="204.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2848" x1="133.01857212611608" y1="198.494" x2="133.01857212611608" y2="204.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2850" x1="199.52785818917414" y1="198.494" x2="199.52785818917414" y2="204.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2852" x1="266.03714425223217" y1="198.494" x2="266.03714425223217" y2="204.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2854" x1="332.5464303152902" y1="198.494" x2="332.5464303152902" y2="204.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2856" x1="399.0557163783482" y1="198.494" x2="399.0557163783482" y2="204.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2858" x1="465.56500244140625" y1="198.494" x2="465.56500244140625" y2="204.494" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2866" x1="0" y1="197.494" x2="465.56500244140625" y2="197.494" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2865" x1="0" y1="1" x2="0" y2="197.494" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2750" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2775" class="apexcharts-series" seriesName="RecurringxxPaymentsx" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath2797" d="M 0 197.494L 0 197.494C 23.278250122070308 197.494 43.231035940987724 177.7446 66.50928606305803 177.7446C 89.78753618512833 177.7446 109.74032200404575 190.91086666666666 133.01857212611606 190.91086666666666C 156.29682224818637 190.91086666666666 176.2496080671038 184.32773333333333 199.5278581891741 184.32773333333333C 222.8061083112444 184.32773333333333 242.75889413016182 144.82893333333334 266.0371442522321 144.82893333333334C 289.3153943743024 144.82893333333334 309.26818019321985 190.91086666666666 332.54643031529014 190.91086666666666C 355.8246804373605 190.91086666666666 375.7774662562779 164.57833333333332 399.0557163783482 164.57833333333332C 422.3339665004185 164.57833333333332 442.28675231933596 190.91086666666666 465.56500244140625 190.91086666666666C 465.56500244140625 190.91086666666666 465.56500244140625 190.91086666666666 465.56500244140625 197.494M 465.56500244140625 190.91086666666666z" fill="url(#SvgjsLinearGradient2793)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskdrzxizf6)" pathTo="M 0 197.494L 0 197.494C 23.278250122070308 197.494 43.231035940987724 177.7446 66.50928606305803 177.7446C 89.78753618512833 177.7446 109.74032200404575 190.91086666666666 133.01857212611606 190.91086666666666C 156.29682224818637 190.91086666666666 176.2496080671038 184.32773333333333 199.5278581891741 184.32773333333333C 222.8061083112444 184.32773333333333 242.75889413016182 144.82893333333334 266.0371442522321 144.82893333333334C 289.3153943743024 144.82893333333334 309.26818019321985 190.91086666666666 332.54643031529014 190.91086666666666C 355.8246804373605 190.91086666666666 375.7774662562779 164.57833333333332 399.0557163783482 164.57833333333332C 422.3339665004185 164.57833333333332 442.28675231933596 190.91086666666666 465.56500244140625 190.91086666666666C 465.56500244140625 190.91086666666666 465.56500244140625 190.91086666666666 465.56500244140625 197.494M 465.56500244140625 190.91086666666666z" pathFrom="M -1 197.494L -1 197.494L 66.50928606305803 197.494L 133.01857212611606 197.494L 199.5278581891741 197.494L 266.0371442522321 197.494L 332.54643031529014 197.494L 399.0557163783482 197.494L 465.56500244140625 197.494"></path><path id="SvgjsPath2798" d="M 0 197.494C 23.278250122070308 197.494 43.231035940987724 177.7446 66.50928606305803 177.7446C 89.78753618512833 177.7446 109.74032200404575 190.91086666666666 133.01857212611606 190.91086666666666C 156.29682224818637 190.91086666666666 176.2496080671038 184.32773333333333 199.5278581891741 184.32773333333333C 222.8061083112444 184.32773333333333 242.75889413016182 144.82893333333334 266.0371442522321 144.82893333333334C 289.3153943743024 144.82893333333334 309.26818019321985 190.91086666666666 332.54643031529014 190.91086666666666C 355.8246804373605 190.91086666666666 375.7774662562779 164.57833333333332 399.0557163783482 164.57833333333332C 422.3339665004185 164.57833333333332 442.28675231933596 190.91086666666666 465.56500244140625 190.91086666666666" fill="none" fill-opacity="1" stroke="#1e88e5" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskdrzxizf6)" pathTo="M 0 197.494C 23.278250122070308 197.494 43.231035940987724 177.7446 66.50928606305803 177.7446C 89.78753618512833 177.7446 109.74032200404575 190.91086666666666 133.01857212611606 190.91086666666666C 156.29682224818637 190.91086666666666 176.2496080671038 184.32773333333333 199.5278581891741 184.32773333333333C 222.8061083112444 184.32773333333333 242.75889413016182 144.82893333333334 266.0371442522321 144.82893333333334C 289.3153943743024 144.82893333333334 309.26818019321985 190.91086666666666 332.54643031529014 190.91086666666666C 355.8246804373605 190.91086666666666 375.7774662562779 164.57833333333332 399.0557163783482 164.57833333333332C 422.3339665004185 164.57833333333332 442.28675231933596 190.91086666666666 465.56500244140625 190.91086666666666" pathFrom="M -1 197.494L -1 197.494L 66.50928606305803 197.494L 133.01857212611606 197.494L 199.5278581891741 197.494L 266.0371442522321 197.494L 332.54643031529014 197.494L 399.0557163783482 197.494L 465.56500244140625 197.494"></path><g id="SvgjsG2776" class="apexcharts-series-markers-wrap" data:realIndex="1"><g id="SvgjsG2778" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdrzxizf6)"><circle id="SvgjsCircle2779" r="3" cx="0" cy="197.494" class="apexcharts-marker no-pointer-events w16xtb0a5" stroke="transparent" fill="#1e88e5" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="3"></circle><circle id="SvgjsCircle2780" r="3" cx="66.50928606305803" cy="177.7446" class="apexcharts-marker no-pointer-events wdjhoc3le" stroke="transparent" fill="#1e88e5" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="3"></circle></g><g id="SvgjsG2781" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdrzxizf6)"><circle id="SvgjsCircle2782" r="3" cx="133.01857212611606" cy="190.91086666666666" class="apexcharts-marker no-pointer-events wvx9zajumj" stroke="transparent" fill="#1e88e5" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="3"></circle></g><g id="SvgjsG2783" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdrzxizf6)"><circle id="SvgjsCircle2784" r="3" cx="199.5278581891741" cy="184.32773333333333" class="apexcharts-marker no-pointer-events we7xke4kh" stroke="transparent" fill="#1e88e5" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="3"></circle></g><g id="SvgjsG2785" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdrzxizf6)"><circle id="SvgjsCircle2786" r="3" cx="266.0371442522321" cy="144.82893333333334" class="apexcharts-marker no-pointer-events w4tkdcan7" stroke="transparent" fill="#1e88e5" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="3"></circle></g><g id="SvgjsG2787" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdrzxizf6)"><circle id="SvgjsCircle2788" r="3" cx="332.54643031529014" cy="190.91086666666666" class="apexcharts-marker no-pointer-events w5soi9edg" stroke="transparent" fill="#1e88e5" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="3"></circle></g><g id="SvgjsG2789" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdrzxizf6)"><circle id="SvgjsCircle2790" r="3" cx="399.0557163783482" cy="164.57833333333332" class="apexcharts-marker no-pointer-events wl7wluayw" stroke="transparent" fill="#1e88e5" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="1" default-marker-size="3"></circle></g><g id="SvgjsG2791" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdrzxizf6)"><circle id="SvgjsCircle2792" r="3" cx="465.56500244140625" cy="190.91086666666666" class="apexcharts-marker no-pointer-events wxx0089jy" stroke="transparent" fill="#1e88e5" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="7" j="7" index="1" default-marker-size="3"></circle></g></g></g><g id="SvgjsG2751" class="apexcharts-series" seriesName="OpenxRatex" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2773" d="M 0 197.494L 0 197.494C 23.278250122070308 197.494 43.231035940987724 164.57833333333332 66.50928606305803 164.57833333333332C 89.78753618512833 164.57833333333332 109.74032200404575 157.9952 133.01857212611606 157.9952C 156.29682224818637 157.9952 176.2496080671038 144.82893333333334 199.5278581891741 144.82893333333334C 222.8061083112444 144.82893333333334 242.75889413016182 32.91566666666668 266.0371442522321 32.91566666666668C 289.3153943743024 32.91566666666668 309.26818019321985 138.2458 332.54643031529014 138.2458C 355.8246804373605 138.2458 375.7774662562779 144.82893333333334 399.0557163783482 144.82893333333334C 422.3339665004185 144.82893333333334 442.28675231933596 39.49879999999999 465.56500244140625 39.49879999999999C 465.56500244140625 39.49879999999999 465.56500244140625 39.49879999999999 465.56500244140625 197.494M 465.56500244140625 39.49879999999999z" fill="url(#SvgjsLinearGradient2769)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskdrzxizf6)" pathTo="M 0 197.494L 0 197.494C 23.278250122070308 197.494 43.231035940987724 164.57833333333332 66.50928606305803 164.57833333333332C 89.78753618512833 164.57833333333332 109.74032200404575 157.9952 133.01857212611606 157.9952C 156.29682224818637 157.9952 176.2496080671038 144.82893333333334 199.5278581891741 144.82893333333334C 222.8061083112444 144.82893333333334 242.75889413016182 32.91566666666668 266.0371442522321 32.91566666666668C 289.3153943743024 32.91566666666668 309.26818019321985 138.2458 332.54643031529014 138.2458C 355.8246804373605 138.2458 375.7774662562779 144.82893333333334 399.0557163783482 144.82893333333334C 422.3339665004185 144.82893333333334 442.28675231933596 39.49879999999999 465.56500244140625 39.49879999999999C 465.56500244140625 39.49879999999999 465.56500244140625 39.49879999999999 465.56500244140625 197.494M 465.56500244140625 39.49879999999999z" pathFrom="M -1 197.494L -1 197.494L 66.50928606305803 197.494L 133.01857212611606 197.494L 199.5278581891741 197.494L 266.0371442522321 197.494L 332.54643031529014 197.494L 399.0557163783482 197.494L 465.56500244140625 197.494"></path><path id="SvgjsPath2774" d="M 0 197.494C 23.278250122070308 197.494 43.231035940987724 164.57833333333332 66.50928606305803 164.57833333333332C 89.78753618512833 164.57833333333332 109.74032200404575 157.9952 133.01857212611606 157.9952C 156.29682224818637 157.9952 176.2496080671038 144.82893333333334 199.5278581891741 144.82893333333334C 222.8061083112444 144.82893333333334 242.75889413016182 32.91566666666668 266.0371442522321 32.91566666666668C 289.3153943743024 32.91566666666668 309.26818019321985 138.2458 332.54643031529014 138.2458C 355.8246804373605 138.2458 375.7774662562779 144.82893333333334 399.0557163783482 144.82893333333334C 422.3339665004185 144.82893333333334 442.28675231933596 39.49879999999999 465.56500244140625 39.49879999999999" fill="none" fill-opacity="1" stroke="#21c1d6" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskdrzxizf6)" pathTo="M 0 197.494C 23.278250122070308 197.494 43.231035940987724 164.57833333333332 66.50928606305803 164.57833333333332C 89.78753618512833 164.57833333333332 109.74032200404575 157.9952 133.01857212611606 157.9952C 156.29682224818637 157.9952 176.2496080671038 144.82893333333334 199.5278581891741 144.82893333333334C 222.8061083112444 144.82893333333334 242.75889413016182 32.91566666666668 266.0371442522321 32.91566666666668C 289.3153943743024 32.91566666666668 309.26818019321985 138.2458 332.54643031529014 138.2458C 355.8246804373605 138.2458 375.7774662562779 144.82893333333334 399.0557163783482 144.82893333333334C 422.3339665004185 144.82893333333334 442.28675231933596 39.49879999999999 465.56500244140625 39.49879999999999" pathFrom="M -1 197.494L -1 197.494L 66.50928606305803 197.494L 133.01857212611606 197.494L 199.5278581891741 197.494L 266.0371442522321 197.494L 332.54643031529014 197.494L 399.0557163783482 197.494L 465.56500244140625 197.494"></path><g id="SvgjsG2752" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG2754" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdrzxizf6)"><circle id="SvgjsCircle2755" r="3" cx="0" cy="197.494" class="apexcharts-marker no-pointer-events wvi7lij3ff" stroke="transparent" fill="#21c1d6" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="3"></circle><circle id="SvgjsCircle2756" r="3" cx="66.50928606305803" cy="164.57833333333332" class="apexcharts-marker no-pointer-events wak94e8y" stroke="transparent" fill="#21c1d6" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="3"></circle></g><g id="SvgjsG2757" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdrzxizf6)"><circle id="SvgjsCircle2758" r="3" cx="133.01857212611606" cy="157.9952" class="apexcharts-marker no-pointer-events w255axnd5" stroke="transparent" fill="#21c1d6" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="3"></circle></g><g id="SvgjsG2759" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdrzxizf6)"><circle id="SvgjsCircle2760" r="3" cx="199.5278581891741" cy="144.82893333333334" class="apexcharts-marker no-pointer-events weahzc4qwk" stroke="transparent" fill="#21c1d6" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="3"></circle></g><g id="SvgjsG2761" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdrzxizf6)"><circle id="SvgjsCircle2762" r="3" cx="266.0371442522321" cy="32.91566666666668" class="apexcharts-marker no-pointer-events wkrjub68g" stroke="transparent" fill="#21c1d6" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="3"></circle></g><g id="SvgjsG2763" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdrzxizf6)"><circle id="SvgjsCircle2764" r="3" cx="332.54643031529014" cy="138.2458" class="apexcharts-marker no-pointer-events wlkw7l1nf" stroke="transparent" fill="#21c1d6" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="3"></circle></g><g id="SvgjsG2765" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdrzxizf6)"><circle id="SvgjsCircle2766" r="3" cx="399.0557163783482" cy="144.82893333333334" class="apexcharts-marker no-pointer-events wxnk11zzt" stroke="transparent" fill="#21c1d6" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="3"></circle></g><g id="SvgjsG2767" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdrzxizf6)"><circle id="SvgjsCircle2768" r="3" cx="465.56500244140625" cy="39.49879999999999" class="apexcharts-marker no-pointer-events w853bbu0b" stroke="transparent" fill="#21c1d6" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="7" j="7" index="0" default-marker-size="3"></circle></g></g><g id="SvgjsG2753" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG2777" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine2867" x1="0" y1="0" x2="465.56500244140625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2868" x1="0" y1="0" x2="465.56500244140625" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2869" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2870" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2871" class="apexcharts-point-annotations"></g><rect id="SvgjsRect2872" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect2873" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect2746" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2826" class="apexcharts-yaxis" rel="0" transform="translate(10.43499755859375, 0)"><g id="SvgjsG2827" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2828" font-family="Poppins,sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2829">30</tspan></text><text id="SvgjsText2830" font-family="Poppins,sans-serif" x="20" y="70.9988" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2831">24</tspan></text><text id="SvgjsText2832" font-family="Poppins,sans-serif" x="20" y="110.4976" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2833">18</tspan></text><text id="SvgjsText2834" font-family="Poppins,sans-serif" x="20" y="149.9964" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2835">12</tspan></text><text id="SvgjsText2836" font-family="Poppins,sans-serif" x="20" y="189.4952" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2837">6</tspan></text><text id="SvgjsText2838" font-family="Poppins,sans-serif" x="20" y="228.99400000000003" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#a1aab2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;"><tspan id="SvgjsTspan2839">0</tspan></text></g></g><g id="SvgjsG2743" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-title" style="font-family: Poppins, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(33, 193, 214);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(30, 136, 229);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-dark"><div class="apexcharts-xaxistooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                        <div class="row text-center">
                            <div class="col-lg-4 col-md-4 mt-3">
                                <h1 class="mb-0 fw-light">5098</h1>
                                <small>Total Sent</small>
                            </div>
                            <div class="col-lg-4 col-md-4 mt-3">
                                <h1 class="mb-0 fw-light">4156</h1>
                                <small>Mail Open Rate</small>
                            </div>
                            <div class="col-lg-4 col-md-4 mt-3">
                                <h1 class="mb-0 fw-light">1369</h1>
                                <small>Click Rate</small>
                            </div>
                        </div>
                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 557px; height: 485px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card bg-primary w-100">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="me-3 align-self-center">
                                <h1 class="text-white"><i class="ti-pie-chart"></i></h1>
                            </div>
                            <div>
                                <h3 class="card-title text-white">Bandwidth usage</h3>
                                <h6 class="card-subtitle text-white op-5">March 2021</h6>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-4 col-xl-7 align-self-center">
                                <h2 class="fw-light text-white text-nowrap">50 GB</h2>
                            </div>
                            <div class="col-8 col-xl-5 pb-3 pt-2 align-self-center" style="position: relative;">
                                <div id="bandwidth-usage" style="min-height: 70px;"><div id="apexchartspqxihbur" class="apexcharts-canvas apexchartspqxihbur apexcharts-theme-light" style="width: 334px; height: 70px;"><svg id="SvgjsSvg2875" width="334" height="70" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2877" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2876"><clipPath id="gridRectMaskpqxihbur"><rect id="SvgjsRect2882" width="342" height="74" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskpqxihbur"><rect id="SvgjsRect2883" width="338" height="74" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine2881" x1="0" y1="0" x2="0" y2="70" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="70" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2889" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2890" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2892" class="apexcharts-grid"><g id="SvgjsG2893" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2895" x1="0" y1="0" x2="334" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2896" x1="0" y1="17.5" x2="334" y2="17.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2897" x1="0" y1="35" x2="334" y2="35" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2898" x1="0" y1="52.5" x2="334" y2="52.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2899" x1="0" y1="70" x2="334" y2="70" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2894" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2901" x1="0" y1="70" x2="334" y2="70" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2900" x1="0" y1="1" x2="0" y2="70" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2884" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2885" class="apexcharts-series" seriesName="" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2888" d="M 0 48.125C 16.7 48.125 31.014285714285716 70 47.714285714285715 70C 64.41428571428571 70 78.72857142857143 17.5 95.42857142857143 17.5C 112.12857142857143 17.5 126.44285714285715 65.625 143.14285714285714 65.625C 159.84285714285716 65.625 174.15714285714284 35 190.85714285714286 35C 207.55714285714288 35 221.87142857142857 56.875 238.57142857142858 56.875C 255.27142857142857 56.875 269.5857142857143 17.5 286.2857142857143 17.5C 302.98571428571427 17.5 317.3 4.375 334 4.375" fill="none" fill-opacity="1" stroke="rgba(255,255,255,1)" stroke-opacity="1" stroke-linecap="square" stroke-width="4" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskpqxihbur)" pathTo="M 0 48.125C 16.7 48.125 31.014285714285716 70 47.714285714285715 70C 64.41428571428571 70 78.72857142857143 17.5 95.42857142857143 17.5C 112.12857142857143 17.5 126.44285714285715 65.625 143.14285714285714 65.625C 159.84285714285716 65.625 174.15714285714284 35 190.85714285714286 35C 207.55714285714288 35 221.87142857142857 56.875 238.57142857142858 56.875C 255.27142857142857 56.875 269.5857142857143 17.5 286.2857142857143 17.5C 302.98571428571427 17.5 317.3 4.375 334 4.375" pathFrom="M -1 70L -1 70L 47.714285714285715 70L 95.42857142857143 70L 143.14285714285714 70L 190.85714285714286 70L 238.57142857142858 70L 286.2857142857143 70L 334 70"></path><g id="SvgjsG2886" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><rect id="SvgjsRect2907" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="2" stroke="transparent" stroke-dasharray="0" fill="#ffffff" cx="0" cy="0" class="apexcharts-marker wxnz62meu no-pointer-events" fill-opacity="1" stroke-opacity="0.9" default-marker-size="0"></rect></g></g></g><g id="SvgjsG2887" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2902" x1="0" y1="0" x2="334" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2903" x1="0" y1="0" x2="334" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2904" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2905" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2906" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2880" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2891" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2878" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 10px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 365px; height: 95px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card bg-success w-100">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="me-3 align-self-center">
                                <h1 class="text-white">
                                    <i class="icon-cloud-download"></i>
                                </h1>
                            </div>
                            <div>
                                <h3 class="card-title text-white">Download count</h3>
                                <h6 class="card-subtitle text-white op-5">March 2021</h6>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-4 col-xl-7 align-self-center">
                                <h2 class="fw-light text-white text-nowrap text-truncate">
                                    35487
                                </h2>
                            </div>
                            <div class="col-8 col-xl-5 pb-3 pt-2 text-end" style="position: relative;">
                                <div id="download-count" style="height: 65px; min-height: 70px;"><div id="apexchartsd1i5k6jjj" class="apexcharts-canvas apexchartsd1i5k6jjj apexcharts-theme-light" style="width: 334px; height: 70px;"><svg id="SvgjsSvg2908" width="334" height="70" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2910" class="apexcharts-inner apexcharts-graphical" transform="translate(21.14545454545454, 0)"><defs id="SvgjsDefs2909"><linearGradient id="SvgjsLinearGradient2913" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2914" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop2915" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop2916" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskd1i5k6jjj"><rect id="SvgjsRect2918" width="344" height="76" x="-22.14545454545454" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskd1i5k6jjj"><rect id="SvgjsRect2919" width="303.70909090909095" height="74" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect2917" width="16.347768595041323" height="70" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2913)" class="apexcharts-xcrosshairs" y2="70" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG2935" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2936" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2938" class="apexcharts-grid"><g id="SvgjsG2939" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2941" x1="-17.14545454545454" y1="0" x2="316.8545454545455" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2942" x1="-17.14545454545454" y1="17.5" x2="316.8545454545455" y2="17.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2943" x1="-17.14545454545454" y1="35" x2="316.8545454545455" y2="35" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2944" x1="-17.14545454545454" y1="52.5" x2="316.8545454545455" y2="52.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2945" x1="-17.14545454545454" y1="70" x2="316.8545454545455" y2="70" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2940" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2947" x1="0" y1="70" x2="299.70909090909095" y2="70" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2946" x1="0" y1="1" x2="0" y2="70" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2920" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG2921" class="apexcharts-series" rel="1" seriesName="" data:realIndex="0"><path id="SvgjsPath2923" d="M -8.173884297520662 70L -8.173884297520662 46.66666666666667L 2.1738842975206616 46.66666666666667L 2.1738842975206616 46.66666666666667L 2.1738842975206616 70L 2.1738842975206616 70z" fill="rgba(255, 255, 255, 0.5)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd1i5k6jjj)" pathTo="M -8.173884297520662 70L -8.173884297520662 46.66666666666667L 2.1738842975206616 46.66666666666667L 2.1738842975206616 46.66666666666667L 2.1738842975206616 70L 2.1738842975206616 70z" pathFrom="M -8.173884297520662 70L -8.173884297520662 70L 2.1738842975206616 70L 2.1738842975206616 70L 2.1738842975206616 70L -8.173884297520662 70" cy="46.66666666666667" cx="5.173884297520662" j="0" val="4" barHeight="23.333333333333332" barWidth="16.347768595041323"></path><path id="SvgjsPath2924" d="M 19.072396694214877 70L 19.072396694214877 40.83333333333333L 29.420165289256204 40.83333333333333L 29.420165289256204 40.83333333333333L 29.420165289256204 70L 29.420165289256204 70z" fill="rgba(255, 255, 255, 0.5)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd1i5k6jjj)" pathTo="M 19.072396694214877 70L 19.072396694214877 40.83333333333333L 29.420165289256204 40.83333333333333L 29.420165289256204 40.83333333333333L 29.420165289256204 70L 29.420165289256204 70z" pathFrom="M 19.072396694214877 70L 19.072396694214877 70L 29.420165289256204 70L 29.420165289256204 70L 29.420165289256204 70L 19.072396694214877 70" cy="40.83333333333333" cx="32.420165289256204" j="1" val="5" barHeight="29.166666666666668" barWidth="16.347768595041323"></path><path id="SvgjsPath2925" d="M 46.31867768595042 70L 46.31867768595042 58.333333333333336L 56.66644628099174 58.333333333333336L 56.66644628099174 58.333333333333336L 56.66644628099174 70L 56.66644628099174 70z" fill="rgba(255, 255, 255, 0.5)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd1i5k6jjj)" pathTo="M 46.31867768595042 70L 46.31867768595042 58.333333333333336L 56.66644628099174 58.333333333333336L 56.66644628099174 58.333333333333336L 56.66644628099174 70L 56.66644628099174 70z" pathFrom="M 46.31867768595042 70L 46.31867768595042 70L 56.66644628099174 70L 56.66644628099174 70L 56.66644628099174 70L 46.31867768595042 70" cy="58.333333333333336" cx="59.66644628099174" j="2" val="2" barHeight="11.666666666666666" barWidth="16.347768595041323"></path><path id="SvgjsPath2926" d="M 73.56495867768596 70L 73.56495867768596 11.666666666666664L 83.9127272727273 11.666666666666664L 83.9127272727273 11.666666666666664L 83.9127272727273 70L 83.9127272727273 70z" fill="rgba(255, 255, 255, 0.5)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd1i5k6jjj)" pathTo="M 73.56495867768596 70L 73.56495867768596 11.666666666666664L 83.9127272727273 11.666666666666664L 83.9127272727273 11.666666666666664L 83.9127272727273 70L 83.9127272727273 70z" pathFrom="M 73.56495867768596 70L 73.56495867768596 70L 83.9127272727273 70L 83.9127272727273 70L 83.9127272727273 70L 73.56495867768596 70" cy="11.666666666666664" cx="86.9127272727273" j="3" val="10" barHeight="58.333333333333336" barWidth="16.347768595041323"></path><path id="SvgjsPath2927" d="M 100.8112396694215 70L 100.8112396694215 17.5L 111.15900826446281 17.5L 111.15900826446281 17.5L 111.15900826446281 70L 111.15900826446281 70z" fill="rgba(255, 255, 255, 0.5)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd1i5k6jjj)" pathTo="M 100.8112396694215 70L 100.8112396694215 17.5L 111.15900826446281 17.5L 111.15900826446281 17.5L 111.15900826446281 70L 111.15900826446281 70z" pathFrom="M 100.8112396694215 70L 100.8112396694215 70L 111.15900826446281 70L 111.15900826446281 70L 111.15900826446281 70L 100.8112396694215 70" cy="17.5" cx="114.15900826446281" j="4" val="9" barHeight="52.5" barWidth="16.347768595041323"></path><path id="SvgjsPath2928" d="M 128.05752066115704 70L 128.05752066115704 0L 138.40528925619836 0L 138.40528925619836 0L 138.40528925619836 70L 138.40528925619836 70z" fill="rgba(255, 255, 255, 0.5)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd1i5k6jjj)" pathTo="M 128.05752066115704 70L 128.05752066115704 0L 138.40528925619836 0L 138.40528925619836 0L 138.40528925619836 70L 138.40528925619836 70z" pathFrom="M 128.05752066115704 70L 128.05752066115704 70L 138.40528925619836 70L 138.40528925619836 70L 138.40528925619836 70L 128.05752066115704 70" cy="0" cx="141.40528925619836" j="5" val="12" barHeight="70" barWidth="16.347768595041323"></path><path id="SvgjsPath2929" d="M 155.3038016528926 70L 155.3038016528926 46.66666666666667L 165.6515702479339 46.66666666666667L 165.6515702479339 46.66666666666667L 165.6515702479339 70L 165.6515702479339 70z" fill="rgba(255, 255, 255, 0.5)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd1i5k6jjj)" pathTo="M 155.3038016528926 70L 155.3038016528926 46.66666666666667L 165.6515702479339 46.66666666666667L 165.6515702479339 46.66666666666667L 165.6515702479339 70L 165.6515702479339 70z" pathFrom="M 155.3038016528926 70L 155.3038016528926 70L 165.6515702479339 70L 165.6515702479339 70L 165.6515702479339 70L 155.3038016528926 70" cy="46.66666666666667" cx="168.6515702479339" j="6" val="4" barHeight="23.333333333333332" barWidth="16.347768595041323"></path><path id="SvgjsPath2930" d="M 182.5500826446281 70L 182.5500826446281 17.5L 192.89785123966942 17.5L 192.89785123966942 17.5L 192.89785123966942 70L 192.89785123966942 70z" fill="rgba(255, 255, 255, 0.5)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd1i5k6jjj)" pathTo="M 182.5500826446281 70L 182.5500826446281 17.5L 192.89785123966942 17.5L 192.89785123966942 17.5L 192.89785123966942 70L 192.89785123966942 70z" pathFrom="M 182.5500826446281 70L 182.5500826446281 70L 192.89785123966942 70L 192.89785123966942 70L 192.89785123966942 70L 182.5500826446281 70" cy="17.5" cx="195.89785123966942" j="7" val="9" barHeight="52.5" barWidth="16.347768595041323"></path><path id="SvgjsPath2931" d="M 209.79636363636365 70L 209.79636363636365 46.66666666666667L 220.14413223140497 46.66666666666667L 220.14413223140497 46.66666666666667L 220.14413223140497 70L 220.14413223140497 70z" fill="rgba(255, 255, 255, 0.5)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd1i5k6jjj)" pathTo="M 209.79636363636365 70L 209.79636363636365 46.66666666666667L 220.14413223140497 46.66666666666667L 220.14413223140497 46.66666666666667L 220.14413223140497 70L 220.14413223140497 70z" pathFrom="M 209.79636363636365 70L 209.79636363636365 70L 220.14413223140497 70L 220.14413223140497 70L 220.14413223140497 70L 209.79636363636365 70" cy="46.66666666666667" cx="223.14413223140497" j="8" val="4" barHeight="23.333333333333332" barWidth="16.347768595041323"></path><path id="SvgjsPath2932" d="M 237.0426446280992 70L 237.0426446280992 40.83333333333333L 247.3904132231405 40.83333333333333L 247.3904132231405 40.83333333333333L 247.3904132231405 70L 247.3904132231405 70z" fill="rgba(255, 255, 255, 0.5)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd1i5k6jjj)" pathTo="M 237.0426446280992 70L 237.0426446280992 40.83333333333333L 247.3904132231405 40.83333333333333L 247.3904132231405 40.83333333333333L 247.3904132231405 70L 247.3904132231405 70z" pathFrom="M 237.0426446280992 70L 237.0426446280992 70L 247.3904132231405 70L 247.3904132231405 70L 247.3904132231405 70L 237.0426446280992 70" cy="40.83333333333333" cx="250.3904132231405" j="9" val="5" barHeight="29.166666666666668" barWidth="16.347768595041323"></path><path id="SvgjsPath2933" d="M 264.28892561983474 70L 264.28892561983474 52.5L 274.63669421487606 52.5L 274.63669421487606 52.5L 274.63669421487606 70L 274.63669421487606 70z" fill="rgba(255, 255, 255, 0.5)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd1i5k6jjj)" pathTo="M 264.28892561983474 70L 264.28892561983474 52.5L 274.63669421487606 52.5L 274.63669421487606 52.5L 274.63669421487606 70L 274.63669421487606 70z" pathFrom="M 264.28892561983474 70L 264.28892561983474 70L 274.63669421487606 70L 274.63669421487606 70L 274.63669421487606 70L 264.28892561983474 70" cy="52.5" cx="277.63669421487606" j="10" val="3" barHeight="17.5" barWidth="16.347768595041323"></path><path id="SvgjsPath2934" d="M 291.5352066115703 70L 291.5352066115703 11.666666666666664L 301.8829752066116 11.666666666666664L 301.8829752066116 11.666666666666664L 301.8829752066116 70L 301.8829752066116 70z" fill="rgba(255, 255, 255, 0.5)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="6" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd1i5k6jjj)" pathTo="M 291.5352066115703 70L 291.5352066115703 11.666666666666664L 301.8829752066116 11.666666666666664L 301.8829752066116 11.666666666666664L 301.8829752066116 70L 301.8829752066116 70z" pathFrom="M 291.5352066115703 70L 291.5352066115703 70L 301.8829752066116 70L 301.8829752066116 70L 301.8829752066116 70L 291.5352066115703 70" cy="11.666666666666664" cx="304.8829752066116" j="11" val="10" barHeight="58.333333333333336" barWidth="16.347768595041323"></path></g><g id="SvgjsG2922" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2948" x1="-17.14545454545454" y1="0" x2="316.8545454545455" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2949" x1="-17.14545454545454" y1="0" x2="316.8545454545455" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2950" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2951" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2952" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2937" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2911" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgba(255, 255, 255, 0.5);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 365px; height: 95px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <img class="rounded-top" src="../../assets/images/background/weatherbg.jpg" alt="Card image cap" style="max-height: 105px">
                    <div class="card-img-overlay" style="height: 110px">
                        <div class="d-flex align-items-center">
                            <h3 class="card-title text-white mb-0 d-inline-block">
                                New Delhi
                            </h3>
                            <div class="ms-auto">
                                <small class="card-text text-white fw-light">Sunday 15 march</small>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 weather-small">
                        <div class="row">
                            <div class="col-8 border-end align-self-center">
                                <div class="d-flex">
                                    <div class="display-6 text-info">
                                        <i class="wi wi-day-rain-wind"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h1 class="fw-light text-info mb-0">
                                            32<sup>0</sup>
                                        </h1>
                                        <small>Sunny Rainy day</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <h1 class="fw-light mb-0">25<sup>0</sup></h1>
                                <small>Tonight</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-5 col-xl-4">
                <!-- Column -->
                <div class="card">
                    <img class="card-img-top w-100 profile-bg-height" src="../../assets/images/background/profile-bg.jpg" alt="Card image cap">
                    <div class="card-body little-profile text-center">
                        <div class="pro-img">
                            <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle shadow-sm" width="128">
                        </div>
                        <h3 class="mb-0">Angela Dominic</h3>
                        <p>Web Designer &amp; Developer</p>
                        <a href="javascript:void(0)" class="
                      mt-2
                      waves-effect waves-dark
                      btn btn-primary btn-md btn-rounded
                    ">Follow</a>
                        <div class="row text-center mt-3 justify-content-center">
                            <div class="col-6 col-md-4 mt-3">
                                <h3 class="mb-0 fw-light">1099</h3>
                                <small class="text-muted">Articles</small>
                            </div>
                            <div class="col-6 col-md-4 mt-3">
                                <h3 class="mb-0 fw-light">23,469</h3>
                                <small class="text-muted">Followers</small>
                            </div>
                            <div class="col-6 col-md-4 mt-3">
                                <h3 class="mb-0 fw-light">6035</h3>
                                <small class="text-muted">Following</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="card">
                    <div class="card-body bg-info rounded-top">
                        <h4 class="text-white card-title">My Contacts</h4>
                        <h6 class="card-subtitle text-white mb-0 op-5">
                            Checkout my contacts here
                        </h6>
                    </div>
                    <div class="message-box contact-box position-relative">
                        <div class="message-widget contact-widget position-relative">
                            <!-- contact -->
                            <a href="#" class="p-3 d-flex align-items-start rounded-3">
                                <div class="user-img position-relative d-inline-block me-2">
                                    <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100">
                                    <span class="
                            profile-status
                            pull-right
                            d-inline-block
                            position-absolute
                            bg-success
                            rounded-circle
                          "></span>
                                </div>
                                <div class="ps-2 v-middle d-md-flex align-items-center w-100">
                                    <div>
                                        <h5 class="my-1 text-dark font-weight-medium">
                                            James Smith
                                        </h5>
                                        <span class="text-muted fs-2">you were in video call</span>
                                        <span class="text-muted fs-2 d-block">45 mins ago</span>
                                    </div>
                                    <div class="ms-auto d-flex button-group mt-3 mt-md-0">
                                        <button type="button" href="#" class="btn btn-sm btn-light-danger text-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-sm"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                        </button>
                                        <button type="button" href="#" class="btn btn-sm btn-light-primary text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-incoming feather-sm"><polyline points="16 2 16 8 22 8"></polyline><line x1="23" y1="1" x2="16" y2="8"></line><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <!-- contact -->
                            <a href="#" class="p-3 d-flex align-items-start rounded-3">
                                <div class="user-img position-relative d-inline-block me-2">
                                    <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100">
                                    <span class="
                            profile-status
                            pull-right
                            d-inline-block
                            position-absolute
                            bg-success
                            rounded-circle
                          "></span>
                                </div>
                                <div class="ps-2 v-middle d-md-flex align-items-center w-100">
                                    <div>
                                        <h5 class="my-1 text-dark font-weight-medium">
                                            Joseph Garciar
                                        </h5>
                                        <span class="text-muted fs-2">you were in video call</span>
                                        <span class="text-muted fs-2 d-block">2 mins ago</span>
                                    </div>
                                    <div class="ms-auto d-flex button-group mt-3 mt-md-0">
                                        <button type="button" href="#" class="btn btn-sm btn-light-danger text-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-sm"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                        </button>
                                        <button type="button" href="#" class="btn btn-sm btn-light-success text-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-outgoing feather-sm"><polyline points="23 7 23 1 17 1"></polyline><line x1="16" y1="8" x2="23" y2="1"></line><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <!-- contact -->
                            <a href="#" class="p-3 d-flex align-items-start rounded-3">
                                <div class="user-img position-relative d-inline-block me-2">
                                    <img src="../../assets/images/users/6.jpg" alt="user" class="rounded-circle w-100">
                                    <span class="
                            profile-status
                            pull-right
                            d-inline-block
                            position-absolute
                            bg-success
                            rounded-circle
                          "></span>
                                </div>
                                <div class="ps-2 v-middle d-md-flex align-items-center w-100">
                                    <div>
                                        <h5 class="my-1 text-dark font-weight-medium">
                                            Maria Rodriguez
                                        </h5>
                                        <span class="text-muted fs-2">you missed john call</span>
                                        <span class="text-muted fs-2 d-block">1 hour ago</span>
                                    </div>
                                    <div class="ms-auto d-flex button-group mt-3 mt-md-0">
                                        <button type="button" href="#" class="btn btn-sm btn-light-danger text-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-sm"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                        </button>
                                        <button type="button" href="#" class="btn btn-sm btn-light-info text-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-missed feather-sm"><line x1="23" y1="1" x2="17" y2="7"></line><line x1="17" y1="1" x2="23" y2="7"></line><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <!-- contact -->
                            <a href="#" class="p-3 d-flex align-items-start rounded-3">
                                <div class="user-img position-relative d-inline-block me-2">
                                    <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100">
                                    <span class="
                            profile-status
                            pull-right
                            d-inline-block
                            position-absolute
                            bg-success
                            rounded-circle
                          "></span>
                                </div>
                                <div class="ps-2 v-middle d-md-flex align-items-center w-100">
                                    <div>
                                        <h5 class="my-1 text-dark font-weight-medium">
                                            Henry Hernandez
                                        </h5>
                                        <span class="text-muted fs-2">you were in phone call</span>
                                        <span class="text-muted fs-2 d-block">2 days ago</span>
                                    </div>
                                    <div class="ms-auto d-flex button-group mt-3 mt-md-0">
                                        <button type="button" href="#" class="btn btn-sm btn-light-danger text-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-sm"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                        </button>
                                        <button type="button" href="#" class="btn btn-sm btn-light-success text-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-outgoing feather-sm"><polyline points="23 7 23 1 17 1"></polyline><line x1="16" y1="8" x2="23" y2="1"></line><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <!-- contact -->
                            <a href="#" class="p-3 d-flex align-items-start rounded-3">
                                <div class="user-img position-relative d-inline-block me-2">
                                    <img src="../../assets/images/users/5.jpg" alt="user" class="rounded-circle w-100">
                                    <span class="
                            profile-status
                            pull-right
                            d-inline-block
                            position-absolute
                            bg-success
                            rounded-circle
                          "></span>
                                </div>
                                <div class="ps-2 v-middle d-md-flex align-items-center w-100">
                                    <div>
                                        <h5 class="my-1 text-dark font-weight-medium">
                                            James Johnson
                                        </h5>
                                        <span class="text-muted fs-2">you were call forwarded</span>
                                        <span class="text-muted fs-2 d-block">55 mins ago</span>
                                    </div>
                                    <div class="ms-auto d-flex button-group mt-3 mt-md-0">
                                        <button type="button" href="#" class="btn btn-sm btn-light-danger text-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-sm"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                        </button>
                                        <button type="button" href="#" class="btn btn-sm btn-light-warning text-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-forwarded feather-sm"><polyline points="19 1 23 5 19 9"></polyline><line x1="15" y1="5" x2="23" y2="5"></line><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab nav-justified" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active text-center" data-bs-toggle="tab" href="#home" role="tab" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity fill-white feather-sm"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                                <span class="d-none d-md-inline-block fw-normal">Activity</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-center" data-bs-toggle="tab" href="#profile" role="tab" aria-selected="false" tabindex="-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users fill-white feather-sm"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span class="d-none d-md-inline-block fw-normal">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-center" data-bs-toggle="tab" href="#settings" role="tab" aria-selected="false" tabindex="-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings fill-white feather-sm"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                <span class="d-none d-md-inline-block fw-normal">Settings</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="card-body">
                                <div class="profiletimeline position-relative">
                                    <div class="sl-item mt-2 mb-3">
                                        <div class="sl-left float-left me-3">
                                            <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle">
                                        </div>
                                        <div class="sl-right">
                                            <div>
                                                <div class="d-md-flex align-items-center">
                                                    <h5 class="mb-0 font-weight-medium">
                                                        <a href="#" class="link">John Doe</a>
                                                    </h5>
                                                    <span class="sl-date text-muted ms-1">5 minutes ago</span>
                                                </div>

                                                <p>
                                                    assign a new task
                                                    <a href="#"> Design weblayout</a>
                                                </p>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 mb-3">
                                                        <img src="../../assets/images/big/img1.jpg" alt="user" class="img-fluid rounded-3">
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 mb-3">
                                                        <img src="../../assets/images/big/img2.jpg" alt="user" class="img-fluid rounded-3">
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 mb-3">
                                                        <img src="../../assets/images/big/img3.jpg" alt="user" class="img-fluid rounded-3">
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 mb-3">
                                                        <img src="../../assets/images/big/img4.jpg" alt="user" class="img-fluid rounded-3">
                                                    </div>
                                                </div>
                                                <div class="text-nowrap">
                                                    <a href="javascript:void(0)" class="link me-2 font-weight-medium"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle fill-white feather-sm text-info"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                                        comments</a>
                                                    <a href="javascript:void(0)" class="link me-2 font-weight-medium"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart fill-white feather-sm text-danger"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                        5 Likes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item my-4 border-top pt-4">
                                        <div class="sl-left float-left me-3">
                                            <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle">
                                        </div>
                                        <div class="sl-right">
                                            <div>
                                                <div class="d-md-flex align-items-center">
                                                    <h5 class="mb-0 font-weight-medium">
                                                        <a href="#" class="link">James Smith</a>
                                                    </h5>
                                                    <span class="sl-date text-muted ms-1">5 minutes ago</span>
                                                </div>
                                                <div class="mt-3 row">
                                                    <div class="col-md-3 col-xs-12">
                                                        <img src="../../assets/images/big/img1.jpg" alt="user" class="img-fluid rounded-3">
                                                    </div>
                                                    <div class="col-md-9 mt-3 mt-md-0">
                                                        <p class="fs-3">
                                                            Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit. Integer nec odio. Praesent
                                                            libero. Sed cursus ante dapibus diam.
                                                        </p>
                                                        <a href="#" class="btn btn-success">
                                                            Design weblayout</a>
                                                    </div>
                                                </div>
                                                <div class="text-nowrap mt-3">
                                                    <a href="javascript:void(0)" class="link me-2 font-weight-medium"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle fill-white feather-sm text-info"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                                        comments</a>
                                                    <a href="javascript:void(0)" class="link me-2 font-weight-medium"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart fill-white feather-sm text-danger"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                        5 Likes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item my-4 border-top pt-4">
                                        <div class="sl-left float-left me-3">
                                            <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle">
                                        </div>
                                        <div class="sl-right">
                                            <div>
                                                <div class="d-md-flex align-items-center">
                                                    <h5 class="mb-0 font-weight-medium">
                                                        <a href="#" class="link">Maria Hernandez</a>
                                                    </h5>
                                                    <span class="sl-date text-muted ms-1">5 minutes ago</span>
                                                </div>
                                                <p class="mt-2 fs-3">
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Integer nec odio. Praesent
                                                    libero. Sed cursus ante dapibus diam. Sed nisi.
                                                    Nulla quis sem at nibh elementum imperdiet. Duis
                                                    sagittis ipsum. Praesent mauris. Fusce nec
                                                    tellus sed augue semper
                                                </p>
                                            </div>
                                            <div class="text-nowrap mt-3">
                                                <a href="javascript:void(0)" class="link me-2 font-weight-medium"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle fill-white feather-sm text-info"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                                    comments</a>
                                                <a href="javascript:void(0)" class="link me-2 font-weight-medium"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart fill-white feather-sm text-danger"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                    5 Likes</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item my-4 border-top pt-4">
                                        <div class="sl-left float-left me-3">
                                            <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle">
                                        </div>
                                        <div class="sl-right">
                                            <div>
                                                <div class="d-md-flex">
                                                    <h5 class="mb-0 font-weight-medium">
                                                        <a href="#" class="link">John Doe</a>
                                                    </h5>
                                                    <span class="sl-date text-muted ms-1">5 minutes ago</span>
                                                </div>
                                                <blockquote class="mt-2 fs-3">
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit, sed do eiusmod tempor
                                                    incididunt
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--second tab-->
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 border-end">
                                        <strong>Full Name</strong>
                                        <br>
                                        <p class="text-muted">Johnathan Deo</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 border-end">
                                        <strong>Mobile</strong>
                                        <br>
                                        <p class="text-muted">(123) 456 7890</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 border-end">
                                        <strong>Email</strong>
                                        <br>
                                        <p class="text-muted">johnathan@admin.com</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <strong>Location</strong>
                                        <br>
                                        <p class="text-muted">London</p>
                                    </div>
                                </div>
                                <hr>
                                <p class="mt-4">
                                    Donec pede justo, fringilla vel, aliquet nec, vulputate
                                    eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                                    venenatis vitae, justo. Nullam dictum felis eu pede
                                    mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                    elementum semper nisi. Aenean vulputate eleifend tellus.
                                    Aenean leo ligula, porttitor eu, consequat vitae,
                                    eleifend ac, enim.
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has
                                    survived not only five centuries
                                </p>
                                <p>
                                    It was popularised in the 1960s with the release of
                                    Letraset sheets containing Lorem Ipsum passages, and
                                    more recently with desktop publishing software like
                                    Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                                <h4 class="font-medium mt-4">Skill Set</h4>
                                <hr>
                                <h5 class="mt-4">
                                    Wordpress <span class="pull-right">80%</span>
                                </h5>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%; height: 6px">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>
                                <h5 class="mt-4">
                                    HTML 5 <span class="pull-right">90%</span>
                                </h5>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%; height: 6px">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>
                                <h5 class="mt-4">
                                    jQuery <span class="pull-right">50%</span>
                                </h5>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%; height: 6px">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>
                                <h5 class="mt-4">
                                    Photoshop <span class="pull-right">70%</span>
                                </h5>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%; height: 6px">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group mb-3">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-md-12">Message</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-sm-12">Select Country</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>Usa</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">
                                                Update Profile
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        All Rights Reserved by Materialpro admin.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
@endsection
@section('after-js')
    <!--This page JavaScript -->
    <script src="../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <!-- Chart JS -->
    <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>

    <script>
        $('#pusher').click(()=>{
            $.ajax({
                type:'post',
                url:'/template/pusher',
                data:{
                    '_token':'{{ csrf_token() }}',
                    data:{
                        'name':'helloasdfas',
                    }
                },
                success: function(response){
                    console.log(response);
                }
            })
        });
    </script>
@endsection



