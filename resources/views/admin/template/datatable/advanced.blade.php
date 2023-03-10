@extends("admin.layout")
@section("title","Admin Template empty")

{{--css--}}
@section('after-css')
    <!--This page CSS -->
    <link href="../../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <style>
        td.details-control {
            background: url("../../dist/js/pages/datatable/details_open.png")
            no-repeat center center;
            cursor: pointer;
        }

        tr.shown td.details-control {
            background: url("../../dist/js/pages/datatable/details_close.png")
            no-repeat center center;
        }
    </style>
@endsection


{{-- main--}}
@section("main-content")
    <!-- Bread crumb and right sidebar toggle -->
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">dvanced Initialisation</h3>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">dvanced Initialisation</li>
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
    </div>
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- -------------------------------------------------------------- -->
        <!-- Start Page Content -->
        <!-- -------------------------------------------------------------- -->
        <!-- File export -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">File export</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            Exporting data from a table can often be a key part of a
                            complex application. The Buttons extension for DataTables
                            provides three plug-ins that provide overlapping
                            functionality for data export. You can refer full
                            documentation from here
                            <a href="https://datatables.net/">Datatables</a>
                        </h6>
                        <div class="table-responsive">
                            <div id="file_export_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="dt-buttons">          <button class="dt-button buttons-copy buttons-html5 btn btn-primary mr-1" tabindex="0" aria-controls="file_export"><span>Copy</span></button> <button class="dt-button buttons-csv buttons-html5 btn btn-primary mr-1" tabindex="0" aria-controls="file_export"><span>CSV</span></button> <button class="dt-button buttons-excel buttons-html5 btn btn-primary mr-1" tabindex="0" aria-controls="file_export"><span>Excel</span></button> <button class="dt-button buttons-pdf buttons-html5 btn btn-primary mr-1" tabindex="0" aria-controls="file_export"><span>PDF</span></button> <button class="dt-button buttons-print btn btn-primary mr-1" tabindex="0" aria-controls="file_export"><span>Print</span></button> </div><div id="file_export_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="file_export"></label></div><table id="file_export" class="table table-striped table-bordered display dataTable" role="grid" aria-describedby="file_export_info">
                                    <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 0px;">Name</th><th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 0px;">Position</th><th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 0px;">Office</th><th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 0px;">Age</th><th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 0px;">Start date</th><th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 0px;">Salary</th></tr>
                                    </thead>
                                    <tbody>

























































                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr></tbody>
                                    <tfoot>
                                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                    </tfoot>
                                </table><div class="dataTables_info" id="file_export_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="file_export_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="file_export_previous"><a href="#" aria-controls="file_export" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="file_export" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="file_export" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="file_export" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="file_export" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="file_export" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="file_export" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="file_export_next"><a href="#" aria-controls="file_export" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Show / hide columns dynamically -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">
                            Show / hide columns dynamically
                        </h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            Each column has an optional rendering control called
                            <code> columns.render</code> which can be used to process
                            the content of each cell before the data is used.
                            <code> columns.render</code> has a wide array of options
                            available to it for rendering different types of data
                            orthogonally (ordering, searching, display etc), but it can
                            be used very simply to manipulate the content of a cell, as
                            shown here.
                        </h6>
                        <div>
                            Toggle column:
                            <a href="#!" class="toggle-vis" data-column="0">Name</a> -
                            <a href="#!" class="toggle-vis" data-column="1">Position</a>
                            -
                            <a href="#!" class="toggle-vis" data-column="2">Office</a> -
                            <a href="#!" class="toggle-vis" data-column="3">Age</a> -
                            <a href="#!" class="toggle-vis" data-column="4">Start date</a>
                            -
                            <a href="#!" class="toggle-vis" data-column="5">Salary</a>
                        </div>
                        <div class="table-responsive">
                            <div id="show_hide_col_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"><div id="show_hide_col_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="show_hide_col"></label></div></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1132px; padding-right: 17px;"><table class="table table-striped table-bordered display dataTable" style="width: 1132px; margin-left: 0px;" role="grid"><thead>
                                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="show_hide_col" rowspan="1" colspan="1" style="width: 183.531px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="show_hide_col" rowspan="1" colspan="1" style="width: 282.219px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="show_hide_col" rowspan="1" colspan="1" style="width: 135.688px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="show_hide_col" rowspan="1" colspan="1" style="width: 58.875px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="show_hide_col" rowspan="1" colspan="1" style="width: 121.781px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="show_hide_col" rowspan="1" colspan="1" style="width: 92.9062px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                                        </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; height: 200px; width: 100%;"><table id="show_hide_col" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="show_hide_col_info"><thead>
                                                    <tr role="row" style="height: 2px;"><th class="sorting_asc" aria-controls="show_hide_col" rowspan="1" colspan="1" style="width: 183.531px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th class="sorting" aria-controls="show_hide_col" rowspan="1" colspan="1" style="width: 282.219px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Position: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Position</div></th><th class="sorting" aria-controls="show_hide_col" rowspan="1" colspan="1" style="width: 135.688px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Office: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Office</div></th><th class="sorting" aria-controls="show_hide_col" rowspan="1" colspan="1" style="width: 58.875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Age: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Age</div></th><th class="sorting" aria-controls="show_hide_col" rowspan="1" colspan="1" style="width: 121.781px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Start date: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Start date</div></th><th class="sorting" aria-controls="show_hide_col" rowspan="1" colspan="1" style="width: 92.9062px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Salary: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Salary</div></th></tr>
                                                    </thead><tfoot>
                                                    <tr style="height: 2px;"><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 201.531px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 300.219px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Position</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 153.688px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Office</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 76.875px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Age</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 139.781px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Start date</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 110.906px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Salary</div></th></tr>
                                                    </tfoot>

                                                    <tbody>

























































                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">Airi Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008/11/28</td>
                                                        <td>$162,700</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Angelica Ramos</td>
                                                        <td>Chief Executive Officer (CEO)</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2009/10/09</td>
                                                        <td>$1,200,000</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Bradley Greer</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>41</td>
                                                        <td>2012/10/13</td>
                                                        <td>$132,000</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Brenden Wagner</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>28</td>
                                                        <td>2011/06/07</td>
                                                        <td>$206,850</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Brielle Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2012/12/02</td>
                                                        <td>$372,000</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Bruno Nash</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>38</td>
                                                        <td>2011/05/03</td>
                                                        <td>$163,500</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Caesar Vance</td>
                                                        <td>Pre-Sales Support</td>
                                                        <td>New York</td>
                                                        <td>21</td>
                                                        <td>2011/12/12</td>
                                                        <td>$106,450</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Cara Stevens</td>
                                                        <td>Sales Assistant</td>
                                                        <td>New York</td>
                                                        <td>46</td>
                                                        <td>2011/12/06</td>
                                                        <td>$145,600</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Cedric Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2012/03/29</td>
                                                        <td>$433,060</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Charde Marshall</td>
                                                        <td>Regional Director</td>
                                                        <td>San Francisco</td>
                                                        <td>36</td>
                                                        <td>2008/10/16</td>
                                                        <td>$470,600</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Colleen Hurst</td>
                                                        <td>Javascript Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>39</td>
                                                        <td>2009/09/15</td>
                                                        <td>$205,500</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Dai Rios</td>
                                                        <td>Personnel Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>35</td>
                                                        <td>2012/09/26</td>
                                                        <td>$217,500</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Donna Snider</td>
                                                        <td>Customer Support</td>
                                                        <td>New York</td>
                                                        <td>27</td>
                                                        <td>2011/01/25</td>
                                                        <td>$112,000</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Doris Wilder</td>
                                                        <td>Sales Assistant</td>
                                                        <td>Sidney</td>
                                                        <td>23</td>
                                                        <td>2010/09/20</td>
                                                        <td>$85,600</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Finn Camacho</td>
                                                        <td>Support Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/07/07</td>
                                                        <td>$87,500</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Fiona Green</td>
                                                        <td>Chief Operating Officer (COO)</td>
                                                        <td>San Francisco</td>
                                                        <td>48</td>
                                                        <td>2010/03/11</td>
                                                        <td>$850,000</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Gavin Cortez</td>
                                                        <td>Team Leader</td>
                                                        <td>San Francisco</td>
                                                        <td>22</td>
                                                        <td>2008/10/26</td>
                                                        <td>$235,500</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Gavin Joyce</td>
                                                        <td>Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>42</td>
                                                        <td>2010/12/22</td>
                                                        <td>$92,575</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Gloria Little</td>
                                                        <td>Systems Administrator</td>
                                                        <td>New York</td>
                                                        <td>59</td>
                                                        <td>2009/04/10</td>
                                                        <td>$237,500</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Haley Kennedy</td>
                                                        <td>Senior Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>43</td>
                                                        <td>2012/12/18</td>
                                                        <td>$313,500</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Hermione Butler</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2011/03/21</td>
                                                        <td>$356,250</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Herrod Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td>59</td>
                                                        <td>2012/08/06</td>
                                                        <td>$137,500</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Hope Fuentes</td>
                                                        <td>Secretary</td>
                                                        <td>San Francisco</td>
                                                        <td>41</td>
                                                        <td>2010/02/12</td>
                                                        <td>$109,850</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Howard Hatfield</td>
                                                        <td>Office Manager</td>
                                                        <td>San Francisco</td>
                                                        <td>51</td>
                                                        <td>2008/12/16</td>
                                                        <td>$164,500</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Jackson Bradshaw</td>
                                                        <td>Director</td>
                                                        <td>New York</td>
                                                        <td>65</td>
                                                        <td>2008/09/26</td>
                                                        <td>$645,750</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Jena Gaines</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>30</td>
                                                        <td>2008/12/19</td>
                                                        <td>$90,560</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Jenette Caldwell</td>
                                                        <td>Development Lead</td>
                                                        <td>New York</td>
                                                        <td>30</td>
                                                        <td>2011/09/03</td>
                                                        <td>$345,000</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Jennifer Acosta</td>
                                                        <td>Junior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>43</td>
                                                        <td>2013/02/01</td>
                                                        <td>$75,650</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Jennifer Chang</td>
                                                        <td>Regional Director</td>
                                                        <td>Singapore</td>
                                                        <td>28</td>
                                                        <td>2010/11/14</td>
                                                        <td>$357,650</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Jonas Alexander</td>
                                                        <td>Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>30</td>
                                                        <td>2010/07/14</td>
                                                        <td>$86,500</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Lael Greer</td>
                                                        <td>Systems Administrator</td>
                                                        <td>London</td>
                                                        <td>21</td>
                                                        <td>2009/02/27</td>
                                                        <td>$103,500</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Martena Mccray</td>
                                                        <td>Post-Sales support</td>
                                                        <td>Edinburgh</td>
                                                        <td>46</td>
                                                        <td>2011/03/09</td>
                                                        <td>$324,050</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Michael Bruce</td>
                                                        <td>Javascript Developer</td>
                                                        <td>Singapore</td>
                                                        <td>29</td>
                                                        <td>2011/06/27</td>
                                                        <td>$183,000</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Michael Silva</td>
                                                        <td>Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>66</td>
                                                        <td>2012/11/27</td>
                                                        <td>$198,500</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Michelle House</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Sidney</td>
                                                        <td>37</td>
                                                        <td>2011/06/02</td>
                                                        <td>$95,400</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Olivia Liang</td>
                                                        <td>Support Engineer</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2011/02/03</td>
                                                        <td>$234,500</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Paul Byrd</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td>New York</td>
                                                        <td>64</td>
                                                        <td>2010/06/09</td>
                                                        <td>$725,000</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Prescott Bartlett</td>
                                                        <td>Technical Author</td>
                                                        <td>London</td>
                                                        <td>27</td>
                                                        <td>2011/05/07</td>
                                                        <td>$145,000</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Quinn Flynn</td>
                                                        <td>Support Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2013/03/03</td>
                                                        <td>$342,000</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Rhona Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td>55</td>
                                                        <td>2010/10/14</td>
                                                        <td>$327,900</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Sakura Yamamoto</td>
                                                        <td>Support Engineer</td>
                                                        <td>Tokyo</td>
                                                        <td>37</td>
                                                        <td>2009/08/19</td>
                                                        <td>$139,575</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Serge Baldwin</td>
                                                        <td>Data Coordinator</td>
                                                        <td>Singapore</td>
                                                        <td>64</td>
                                                        <td>2012/04/09</td>
                                                        <td>$138,575</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Shad Decker</td>
                                                        <td>Regional Director</td>
                                                        <td>Edinburgh</td>
                                                        <td>51</td>
                                                        <td>2008/11/13</td>
                                                        <td>$183,000</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Shou Itou</td>
                                                        <td>Regional Marketing</td>
                                                        <td>Tokyo</td>
                                                        <td>20</td>
                                                        <td>2011/08/14</td>
                                                        <td>$163,000</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Sonya Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td>Edinburgh</td>
                                                        <td>23</td>
                                                        <td>2008/12/13</td>
                                                        <td>$103,600</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Suki Burks</td>
                                                        <td>Developer</td>
                                                        <td>London</td>
                                                        <td>53</td>
                                                        <td>2009/10/22</td>
                                                        <td>$114,500</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Tatyana Fitzpatrick</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>19</td>
                                                        <td>2010/03/17</td>
                                                        <td>$385,750</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Thor Walton</td>
                                                        <td>Developer</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2013/08/11</td>
                                                        <td>$98,540</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Timothy Mooney</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>37</td>
                                                        <td>2008/12/11</td>
                                                        <td>$136,200</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Unity Butler</td>
                                                        <td>Marketing Designer</td>
                                                        <td>San Francisco</td>
                                                        <td>47</td>
                                                        <td>2009/12/09</td>
                                                        <td>$85,675</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Vivian Harrell</td>
                                                        <td>Financial Controller</td>
                                                        <td>San Francisco</td>
                                                        <td>62</td>
                                                        <td>2009/02/14</td>
                                                        <td>$452,500</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Yuri Berry</td>
                                                        <td>Chief Marketing Officer (CMO)</td>
                                                        <td>New York</td>
                                                        <td>40</td>
                                                        <td>2009/06/25</td>
                                                        <td>$675,000</td>
                                                    </tr><tr role="row" class="even">
                                                        <td class="sorting_1">Zenaida Frank</td>
                                                        <td>Software Engineer</td>
                                                        <td>New York</td>
                                                        <td>63</td>
                                                        <td>2010/01/04</td>
                                                        <td>$125,250</td>
                                                    </tr><tr role="row" class="odd">
                                                        <td class="sorting_1">Zorita Serrano</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>56</td>
                                                        <td>2012/06/01</td>
                                                        <td>$115,000</td>
                                                    </tr></tbody>

                                                </table></div><div class="dataTables_scrollFoot" style="overflow: hidden; border: 0px; width: 100%;"><div class="dataTables_scrollFootInner" style="width: 1132px; padding-right: 17px;"><table class="table table-striped table-bordered display dataTable" style="width: 1132px; margin-left: 0px;" role="grid"><tfoot>
                                                        <tr><th rowspan="1" colspan="1" style="width: 201.531px;">Name</th><th rowspan="1" colspan="1" style="width: 300.219px;">Position</th><th rowspan="1" colspan="1" style="width: 153.688px;">Office</th><th rowspan="1" colspan="1" style="width: 76.875px;">Age</th><th rowspan="1" colspan="1" style="width: 139.781px;">Start date</th><th rowspan="1" colspan="1" style="width: 110.906px;">Salary</th></tr>
                                                        </tfoot></table></div></div></div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="show_hide_col_info" role="status" aria-live="polite">Showing 1 to 57 of 57 entries</div></div><div class="col-sm-12 col-md-7"></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column rendering -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">Column rendering</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            Each column has an optional rendering control called
                            <code> columns.render</code> which can be used to process
                            the content of each cell before the data is used.
                            <code> columns.render</code> has a wide array of options
                            available to it for rendering different types of data
                            orthogonally (ordering, searching, display etc), but it can
                            be used very simply to manipulate the content of a cell, as
                            shown here.
                        </h6>
                        <div class="table-responsive">
                            <div id="col_render_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="col_render_length"><label>Show <select name="col_render_length" aria-controls="col_render" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="col_render_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="col_render"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="col_render" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="col_render_info">
                                            <thead>
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="col_render" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 246px;">Name</th><th class="sorting" tabindex="0" aria-controls="col_render" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 306px;">Position</th><th class="sorting" tabindex="0" aria-controls="col_render" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 149px;">Office</th><th class="sorting" tabindex="0" aria-controls="col_render" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 133px;">Start date</th><th class="sorting" tabindex="0" aria-controls="col_render" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 104px;">Salary</th></tr>
                                            </thead>
                                            <tbody>

























































                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Airi Satou (33)</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>

                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Angelica Ramos (47)</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>

                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Ashton Cox (66)</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>

                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Bradley Greer (41)</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>

                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Brenden Wagner (28)</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>

                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Brielle Williamson (61)</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>

                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Bruno Nash (38)</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>

                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Caesar Vance (21)</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>

                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Cara Stevens (46)</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>

                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Cedric Kelly (22)</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>

                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr></tbody>
                                            <tfoot>
                                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                            </tfoot>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="col_render_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="col_render_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="col_render_previous"><a href="#" aria-controls="col_render" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="col_render" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="col_render" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="col_render" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="col_render" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="col_render" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="col_render" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="col_render_next"><a href="#" aria-controls="col_render" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row grouping -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">Row grouping</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            In the example below the 'group' is the office location,
                            which is based on the information in the third column (which
                            is set to hidden). The grouping indicator is added by the
                            <code> drawCallback</code> function, which will parse
                            through the rows which are displayed, and enter a grouping
                            TR element where a new group is found. A click event handler
                            is added for the grouping rows to allow the grouping order
                            to be restored as well as ordering by any other column.
                        </h6>
                        <div class="table-responsive">
                            <div id="row_group_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="row_group_length"><label>Show <select name="row_group_length" aria-controls="row_group" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="row_group_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="row_group"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="row_group" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="row_group_info">
                                            <thead>
                                            <tr role="row"><th class="sorting" tabindex="0" aria-controls="row_group" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 231px;">Name</th><th class="sorting" tabindex="0" aria-controls="row_group" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 350px;">Position</th><th class="sorting" tabindex="0" aria-controls="row_group" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 79px;">Age</th><th class="sorting" tabindex="0" aria-controls="row_group" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 155px;">Start date</th><th class="sorting" tabindex="0" aria-controls="row_group" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 121px;">Salary</th></tr>
                                            </thead>
                                            <tbody>

























































                                            <tr class="group"><td colspan="5">London</td></tr><tr role="row" class="odd">
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>

                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr><tr class="group"><td colspan="5">New York</td></tr><tr role="row" class="even">
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>

                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>

                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr><tr role="row" class="even">
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>

                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr><tr role="row" class="odd">
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>

                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr><tr role="row" class="even">
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>

                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>

                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr><tr role="row" class="even">
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>

                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr><tr role="row" class="odd">
                                                <td>Thor Walton</td>
                                                <td>Developer</td>

                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr><tr role="row" class="even">
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>

                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr></tbody>
                                            <tfoot>
                                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                            </tfoot>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="row_group_info" role="status" aria-live="polite">Showing 21 to 30 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="row_group_paginate"><ul class="pagination"><li class="paginate_button page-item previous" id="row_group_previous"><a href="#" aria-controls="row_group" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row_group" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row_group" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="row_group" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row_group" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row_group" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row_group" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="row_group_next"><a href="#" aria-controls="row_group" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Multiple table control element -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">
                            Multiple table control element
                        </h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            As is described by the basic DOM positioning example you can
                            use the <code> dom</code> initialisation parameter to move
                            DataTables features around the table to where you want them.
                        </h6>
                        <div class="table-responsive">
                            <div id="multi_control_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="top"><div class="dataTables_info" id="multi_control_info" role="status" aria-live="polite">Showing 21 to 30 of 57 entries</div><div id="multi_control_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="multi_control"></label></div><div class="dataTables_length" id="multi_control_length"><label>Show <select name="multi_control_length" aria-controls="multi_control" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div class="dataTables_paginate paging_simple_numbers" id="multi_control_paginate"><ul class="pagination"><li class="paginate_button page-item previous" id="multi_control_previous"><a href="#" aria-controls="multi_control" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi_control" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi_control" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="multi_control" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi_control" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi_control" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi_control" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="multi_control_next"><a href="#" aria-controls="multi_control" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div><div class="clear"></div></div><table id="multi_control" class="table table-striped table-bordered display dataTable" style="width: 100%;" aria-describedby="multi_control_info" role="grid">
                                    <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="multi_control" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 188px;">Name</th><th class="sorting" tabindex="0" aria-controls="multi_control" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 288px;">Position</th><th class="sorting" tabindex="0" aria-controls="multi_control" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 139px;">Office</th><th class="sorting" tabindex="0" aria-controls="multi_control" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60px;">Age</th><th class="sorting" tabindex="0" aria-controls="multi_control" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 124px;">Start date</th><th class="sorting" tabindex="0" aria-controls="multi_control" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 95px;">Salary</th></tr>
                                    </thead>
                                    <tbody>

























































                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Hermione Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2011/03/21</td>
                                        <td>$356,250</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>2010/02/12</td>
                                        <td>$109,850</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>2008/12/16</td>
                                        <td>$164,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>2008/09/26</td>
                                        <td>$645,750</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Jennifer Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>43</td>
                                        <td>2013/02/01</td>
                                        <td>$75,650</td>
                                    </tr></tbody>
                                    <tfoot>
                                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                    </tfoot>
                                </table><div class="bottom"><div class="dataTables_info">Showing 21 to 30 of 57 entries</div><div class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="multi_control"></label></div><div class="dataTables_length"><label>Show <select name="multi_control_length" aria-controls="multi_control" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div class="dataTables_paginate paging_simple_numbers"><ul class="pagination"><li class="paginate_button page-item previous"><a href="#" aria-controls="multi_control" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi_control" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi_control" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="multi_control" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi_control" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi_control" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi_control" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next"><a href="#" aria-controls="multi_control" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div><div class="clear"></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DOM / jQuery events -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">DOM / jQuery events</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            Events assigned to the table can be exceptionally useful for
                            user interaction, however you must be aware that DataTables
                            will add and remove rows from the DOM as they are needed
                            (i.e. when paging only the visible elements are actually
                            available in the DOM). As such, this can lead to the odd
                            hiccup when working with events.
                        </h6>
                        <div class="table-responsive">
                            <div id="dom_jq_event_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dom_jq_event_length"><label>Show <select name="dom_jq_event_length" aria-controls="dom_jq_event" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dom_jq_event_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="dom_jq_event"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="dom_jq_event" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="dom_jq_event_info">
                                            <thead>
                                            <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="dom_jq_event" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 188px;" aria-sort="descending">Name</th><th class="sorting" tabindex="0" aria-controls="dom_jq_event" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 288px;">Position</th><th class="sorting" tabindex="0" aria-controls="dom_jq_event" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 139px;">Office</th><th class="sorting" tabindex="0" aria-controls="dom_jq_event" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60px;">Age</th><th class="sorting" tabindex="0" aria-controls="dom_jq_event" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 124px;">Start date</th><th class="sorting" tabindex="0" aria-controls="dom_jq_event" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 95px;">Salary</th></tr>
                                            </thead>
                                            <tbody>

























































                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr></tbody>
                                            <tfoot>
                                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                            </tfoot>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dom_jq_event_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dom_jq_event_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dom_jq_event_previous"><a href="#" aria-controls="dom_jq_event" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dom_jq_event" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dom_jq_event" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dom_jq_event" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dom_jq_event" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dom_jq_event" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dom_jq_event" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dom_jq_event_next"><a href="#" aria-controls="dom_jq_event" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Complex headers with column visibility -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">
                            Complex headers with column visibility
                        </h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            Complex headers (using colspan / rowspan) can be used to
                            group columns of similar information in DataTables, creating
                            a very powerful visual effect.In addition to the basic
                            behaviour, DataTables can also take colspan and rowspan into
                            account when working with hidden columns. The colspan and
                            rowspan attributes for each cell are automatically
                            calculated and rendered on the page for you. This allows the
                            columns.visible option and <code> column().visible()</code>
                            method to take into account rowspan / colspan cells, drawing
                            the header correctly.
                        </h6>
                        <div class="table-responsive">
                            <div id="complex_head_col_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="complex_head_col_length"><label>Show <select name="complex_head_col_length" aria-controls="complex_head_col" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="complex_head_col_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="complex_head_col"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="complex_head_col" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="complex_head_col_info">
                                            <thead>
                                            <tr role="row"><th rowspan="2" class="sorting_asc" tabindex="0" aria-controls="complex_head_col" colspan="1" aria-label="Name: activate to sort column descending" style="width: 225px;" aria-sort="ascending">Name</th><th colspan="2" rowspan="1">HR Information</th><th colspan="2" rowspan="1">Contact</th></tr>
                                            <tr role="row"><th class="sorting" tabindex="0" aria-controls="complex_head_col" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 341px;">Position</th><th class="sorting" tabindex="0" aria-controls="complex_head_col" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 118px;">Salary</th><th class="sorting" tabindex="0" aria-controls="complex_head_col" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 168px;">Office</th><th class="sorting" tabindex="0" aria-controls="complex_head_col" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 83px;">Extn.</th></tr>
                                            </thead>
                                            <tbody>

























































                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Airi Satou</td>
                                                <td class="">Accountant</td>
                                                <td class="">$162,700</td>
                                                <td class="">Tokyo</td>
                                                <td class="">5407</td>

                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Angelica Ramos</td>
                                                <td class="">Chief Executive Officer (CEO)</td>
                                                <td class="">$1,200,000</td>
                                                <td class="">London</td>
                                                <td class="">5797</td>

                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Ashton Cox</td>
                                                <td class="">Junior Technical Author</td>
                                                <td class="">$86,000</td>
                                                <td class="">San Francisco</td>
                                                <td class="">1562</td>

                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Bradley Greer</td>
                                                <td class="">Software Engineer</td>
                                                <td class="">$132,000</td>
                                                <td class="">London</td>
                                                <td class="">2558</td>

                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Brenden Wagner</td>
                                                <td class="">Software Engineer</td>
                                                <td class="">$206,850</td>
                                                <td class="">San Francisco</td>
                                                <td class="">1314</td>

                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Brielle Williamson</td>
                                                <td class="">Integration Specialist</td>
                                                <td class="">$372,000</td>
                                                <td class="">New York</td>
                                                <td class="">4804</td>

                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Bruno Nash</td>
                                                <td class="">Software Engineer</td>
                                                <td class="">$163,500</td>
                                                <td class="">London</td>
                                                <td class="">6222</td>

                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Caesar Vance</td>
                                                <td class="">Pre-Sales Support</td>
                                                <td class="">$106,450</td>
                                                <td class="">New York</td>
                                                <td class="">8330</td>

                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Cara Stevens</td>
                                                <td class="">Sales Assistant</td>
                                                <td class="">$145,600</td>
                                                <td class="">New York</td>
                                                <td class="">3990</td>

                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Cedric Kelly</td>
                                                <td class="">Senior Javascript Developer</td>
                                                <td class="">$433,060</td>
                                                <td class="">Edinburgh</td>
                                                <td class="">6224</td>

                                            </tr></tbody>
                                            <tfoot>
                                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Salary</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Extn.</th></tr>
                                            </tfoot>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="complex_head_col_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="complex_head_col_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="complex_head_col_previous"><a href="#" aria-controls="complex_head_col" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="complex_head_col" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex_head_col" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex_head_col" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex_head_col" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex_head_col" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex_head_col" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="complex_head_col_next"><a href="#" aria-controls="complex_head_col" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- language file -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">Language file</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            As well as being able to pass language information to
                            DataTables through the <code> language</code> initialisation
                            option, you can also store the language information in a
                            file, which DataTables can load by Ajax using the
                            language.url option.
                        </h6>
                        <div class="table-responsive">
                            <div id="lang_file_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="lang_file_length"><label><select name="lang_file_length" aria-controls="lang_file" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> Einträge anzeigen</label></div></div><div class="col-sm-12 col-md-6"><div id="lang_file_filter" class="dataTables_filter"><label>Suchen<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="lang_file"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="lang_file" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="lang_file_info">
                                            <thead>
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="lang_file" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: aktivieren, um Spalte absteigend zu sortieren" style="width: 188px;">Name</th><th class="sorting" tabindex="0" aria-controls="lang_file" rowspan="1" colspan="1" aria-label="Position: aktivieren, um Spalte aufsteigend zu sortieren" style="width: 288px;">Position</th><th class="sorting" tabindex="0" aria-controls="lang_file" rowspan="1" colspan="1" aria-label="Office: aktivieren, um Spalte aufsteigend zu sortieren" style="width: 139px;">Office</th><th class="sorting" tabindex="0" aria-controls="lang_file" rowspan="1" colspan="1" aria-label="Age: aktivieren, um Spalte aufsteigend zu sortieren" style="width: 60px;">Age</th><th class="sorting" tabindex="0" aria-controls="lang_file" rowspan="1" colspan="1" aria-label="Start date: aktivieren, um Spalte aufsteigend zu sortieren" style="width: 124px;">Start date</th><th class="sorting" tabindex="0" aria-controls="lang_file" rowspan="1" colspan="1" aria-label="Salary: aktivieren, um Spalte aufsteigend zu sortieren" style="width: 95px;">Salary</th></tr>
                                            </thead>
                                            <tbody>

























































                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr></tbody>
                                            <tfoot>
                                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                            </tfoot>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="lang_file_info" role="status" aria-live="polite">1 bis 10 von 57 Einträgen</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="lang_file_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="lang_file_previous"><a href="#" aria-controls="lang_file" data-dt-idx="0" tabindex="0" class="page-link">Zurück</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="lang_file" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang_file" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang_file" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang_file" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang_file" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang_file" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="lang_file_next"><a href="#" aria-controls="lang_file" data-dt-idx="7" tabindex="0" class="page-link">Nächste</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Setting defaults -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">Setting defaults</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            When working with DataTables over multiple pages it is often
                            useful to set the initialisation defaults to common values
                            (for example you might want to set dom to a common value so
                            all tables get the same layout). This can be done using the
                            <code> $.fn.dataTable.defaults</code> object. This object
                            will take all of the same parameters as the DataTables
                            initialisation object, but in this case you are setting the
                            default for all future initialisations of DataTables.
                        </h6>
                        <div class="table-responsive">
                            <div id="setting_defaults_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="setting_defaults_length"><label>Show <select name="setting_defaults_length" aria-controls="setting_defaults" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="setting_defaults" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="setting_defaults_info">
                                            <thead>
                                            <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 216px;">Name</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 321px;">Position</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 165px;">Office</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 56px;">Age</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 124px;">Start date</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 120px;">Salary</th></tr>
                                            </thead>
                                            <tbody>

























































                                            <tr role="row" class="odd">
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr><tr role="row" class="even">
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr><tr role="row" class="odd">
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr><tr role="row" class="even">
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr><tr role="row" class="odd">
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr><tr role="row" class="even">
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr><tr role="row" class="even">
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr><tr role="row" class="odd">
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr><tr role="row" class="even">
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr></tbody>
                                            <tfoot>
                                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                            </tfoot>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="setting_defaults_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="setting_defaults_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="setting_defaults_previous"><a href="#" aria-controls="setting_defaults" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="setting_defaults" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="setting_defaults" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="setting_defaults" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="setting_defaults" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="setting_defaults" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="setting_defaults" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="setting_defaults_next"><a href="#" aria-controls="setting_defaults" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer callback -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">Footer callback</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            Through the use of the header and footer callback
                            manipulation functions provided by DataTables
                            <code> headerCallback</code> and
                            <code> footerCallback</code>, it is possible to perform some
                            powerful and useful data manipulation functions, such as
                            summarising data in the table.
                        </h6>
                        <div class="table-responsive">
                            <div id="footer_callback_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="footer_callback_length"><label>Show <select name="footer_callback_length" aria-controls="footer_callback" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="footer_callback_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="footer_callback"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="footer_callback" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="footer_callback_info">
                                            <thead>
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="footer_callback" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First name: activate to sort column descending" style="width: 125px;">First name</th><th class="sorting" tabindex="0" aria-controls="footer_callback" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending" style="width: 125px;">Last name</th><th class="sorting" tabindex="0" aria-controls="footer_callback" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 280px;">Position</th><th class="sorting" tabindex="0" aria-controls="footer_callback" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 135px;">Office</th><th class="sorting" tabindex="0" aria-controls="footer_callback" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 271px;">Salary</th></tr>
                                            </thead>
                                            <tbody>

























































                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Airi</td>
                                                <td>Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>$162,700</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Angelica</td>
                                                <td>Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>$1,200,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Ashton</td>
                                                <td>Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>$86,000</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Bradley</td>
                                                <td>Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>$132,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Brenden</td>
                                                <td>Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>$206,850</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Brielle</td>
                                                <td>Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>$372,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Bruno</td>
                                                <td>Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>$163,500</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Caesar</td>
                                                <td>Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>$106,450</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Cara</td>
                                                <td>Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>$145,600</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Cedric</td>
                                                <td>Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>$433,060</td>
                                            </tr></tbody>
                                            <tfoot>
                                            <tr><th colspan="4" style="text-align: right" rowspan="1">Total:</th><th rowspan="1" colspan="1">$3008160 ( $14371710 total)</th></tr>
                                            </tfoot>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="footer_callback_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="footer_callback_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="footer_callback_previous"><a href="#" aria-controls="footer_callback" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="footer_callback" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="footer_callback" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="footer_callback" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="footer_callback" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="footer_callback" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="footer_callback" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="footer_callback_next"><a href="#" aria-controls="footer_callback" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row created callback -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">Row created callback</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            The following example shows how a callback function can be
                            used to format a particular row at draw time. For each row
                            that is generated for display, the
                            <code> createdRow</code> function is called once and once
                            only. It is passed the create row node which can then be
                            modified.
                        </h6>
                        <div class="table-responsive">
                            <div id="row_create_call_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="row_create_call_length"><label>Show <select name="row_create_call_length" aria-controls="row_create_call" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="row_create_call_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="row_create_call"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="row_create_call" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="row_create_call_info">
                                            <thead>
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="row_create_call" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 188px;">Name</th><th class="sorting" tabindex="0" aria-controls="row_create_call" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 288px;">Position</th><th class="sorting" tabindex="0" aria-controls="row_create_call" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 139px;">Office</th><th class="sorting" tabindex="0" aria-controls="row_create_call" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60px;">Age</th><th class="sorting" tabindex="0" aria-controls="row_create_call" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 124px;">Start date</th><th class="sorting" tabindex="0" aria-controls="row_create_call" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 95px;">Salary</th></tr>
                                            </thead>
                                            <tbody>

























































                                            <tr role="row" class="odd">
                                                <td class="sorting_1">Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td class="highlight">$162,700</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td class="highlight">$1,200,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td class="highlight">$206,850</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td class="highlight">$372,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td class="highlight">$163,500</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td class="highlight">$433,060</td>
                                            </tr></tbody>
                                            <tfoot>
                                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                            </tfoot>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="row_create_call_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="row_create_call_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="row_create_call_previous"><a href="#" aria-controls="row_create_call" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="row_create_call" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row_create_call" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row_create_call" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row_create_call" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row_create_call" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row_create_call" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="row_create_call_next"><a href="#" aria-controls="row_create_call" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Custom toolbar elements -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">Custom toolbar elements</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            DataTables inserts DOM elements around the table to control
                            DataTables features, and you can make use of this mechanism
                            as well to insert your own custom elements. In this example
                            a div with a class of '-string toolbar' is created using
                            <code> dom</code>, and jQuery then used to insert HTML into
                            that element to create the toolbar. You could put whatever
                            HTML you want into the toolbar!
                        </h6>
                        <div class="table-responsive">
                            <div id="custom_tool_ele_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="toolbar"><b>Custom tool bar! Text/images etc.</b></div><div id="custom_tool_ele_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="custom_tool_ele"></label></div><table id="custom_tool_ele" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="custom_tool_ele_info">
                                    <thead>
                                    <tr role="row"><th class="sorting" tabindex="0" aria-controls="custom_tool_ele" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 188px;">Name</th><th class="sorting_desc" tabindex="0" aria-controls="custom_tool_ele" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 288px;" aria-sort="descending">Position</th><th class="sorting" tabindex="0" aria-controls="custom_tool_ele" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 139px;">Office</th><th class="sorting" tabindex="0" aria-controls="custom_tool_ele" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60px;">Age</th><th class="sorting" tabindex="0" aria-controls="custom_tool_ele" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 124px;">Start date</th><th class="sorting" tabindex="0" aria-controls="custom_tool_ele" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 95px;">Salary</th></tr>
                                    </thead>
                                    <tbody>

























































                                    <tr role="row" class="odd">
                                        <td class="">Prescott Bartlett</td>
                                        <td class="sorting_1">Technical Author</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>2011/05/07</td>
                                        <td>$145,000</td>
                                    </tr><tr role="row" class="even">
                                        <td class="">Gavin Cortez</td>
                                        <td class="sorting_1">Team Leader</td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>2008/10/26</td>
                                        <td>$235,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="">Gloria Little</td>
                                        <td class="sorting_1">Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr><tr role="row" class="even">
                                        <td class="">Lael Greer</td>
                                        <td class="sorting_1">Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009/02/27</td>
                                        <td>$103,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="">Tiger Nixon</td>
                                        <td class="sorting_1">System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr><tr role="row" class="even">
                                        <td class="">Quinn Flynn</td>
                                        <td class="sorting_1">Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="">Finn Camacho</td>
                                        <td class="sorting_1">Support Engineer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/07/07</td>
                                        <td>$87,500</td>
                                    </tr><tr role="row" class="even">
                                        <td class="">Olivia Liang</td>
                                        <td class="sorting_1">Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2011/02/03</td>
                                        <td>$234,500</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="">Sakura Yamamoto</td>
                                        <td class="sorting_1">Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>37</td>
                                        <td>2009/08/19</td>
                                        <td>$139,575</td>
                                    </tr><tr role="row" class="even">
                                        <td class="">Bradley Greer</td>
                                        <td class="sorting_1">Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr></tbody>
                                    <tfoot>
                                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                    </tfoot>
                                </table><div class="dataTables_info" id="custom_tool_ele_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="custom_tool_ele_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="custom_tool_ele_previous"><a href="#" aria-controls="custom_tool_ele" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="custom_tool_ele" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="custom_tool_ele" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="custom_tool_ele" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="custom_tool_ele" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="custom_tool_ele" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="custom_tool_ele" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="custom_tool_ele_next"><a href="#" aria-controls="custom_tool_ele" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End PAge Content -->
        <!-- -------------------------------------------------------------- -->
    </div>
@endsection

{{--js--}}
@section('after-js')
    <!--This page JavaScript -->
    <script src="../../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="../../dist/js/pages/datatable/datatable-advanced.init.js"></script>
@endsection


