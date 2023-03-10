@extends("admin.layout")
@section("title","Admin Template empty")

{{--css--}}
@section('after-css')
    <!--This page CSS -->
    <link href="../../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css">
@endsection


{{-- main--}}
@section("main-content")
{{--    head--}}
<div class="row page-titles">
    <div class="col-md-5 col-12 align-self-center">
        <h3 class="text-themecolor mb-0">Basic Initialisation</h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="javascript:void(0)">Home</a>
            </li>
            <li class="breadcrumb-item active">Basic Initialisation</li>
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
{{--    container--}}
<div class="container-fluid">
    <!-- -------------------------------------------------------------- -->
    <!-- Start Page Content -->
{{--    api --}}
    <div class="row">
        <div class="col-12">
            <!-- ---------------------
                          start Individual column searching (text inputs)
                      ---------------- -->
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">
                        Individual column searching (text inputs)
                    </h4>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-3">
                        DataTables has the ability to apply searching to a specific
                        column through the <code> column().search()</code> method
                        (note that the name of the method is search not filter,
                        since <code> filter()</code> is used to apply a filter to a
                        result set).
                    </h6>
                    <div class="table-responsive">
                        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_1_length"><label>Show <select name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="DataTables_Table_1"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered text-inputs-searching text-nowrap dataTable" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                        <thead>
                                        <!-- start row -->
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 0px;" aria-sort="ascending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 0px;">Position</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 0px;">Office</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 0px;">Age</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 0px;">Start date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 0px;">Salary</th></tr>
                                        <!-- end row -->
                                        </thead>
                                        <tbody>
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
                                        <!-- start row -->

                                        <!-- end row -->
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
                                        <!-- start row -->
                                        <tr><th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Name"></th><th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Position"></th><th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Office"></th><th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Age"></th><th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Start date"></th><th rowspan="1" colspan="1"><input type="text" class="form-control" placeholder="Search Salary"></th></tr>
                                        <!-- end row -->
                                        </tfoot>
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_1_previous"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="DataTables_Table_1_next"><a href="#" aria-controls="DataTables_Table_1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
            <!-- ---------------------
                          end Individual column searching (text inputs)
                      ---------------- -->
        </div>
    </div>
{{--    detail infomation--}}
    <div class="row">
        <div class="col-12">
            <!-- ---------------------
                          start Child rows (show extra / detailed information)
                      ---------------- -->
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">
                        Child rows (show extra / detailed information)
                    </h4>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-3">
                        The DataTables API has a number of methods for attaching
                        child rows to a parent row in the DataTable. This can be
                        used to show additional information about a row, useful for
                        cases where you wish to convey more information about a row
                        than there is space for in the host table.
                    </h6>
                    <div class="table-responsive">
                        <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_2_length"><label>Show <select name="DataTables_Table_2_length" aria-controls="DataTables_Table_2" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_2_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="DataTables_Table_2"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered show-child-rows text-nowrap dataTable" id="DataTables_Table_2" role="grid" aria-describedby="DataTables_Table_2_info" style="width: 1203px;">
                                        <thead>
                                        <!-- start row -->
                                        <tr role="row"><th class="details-control sorting_disabled" rowspan="1" colspan="1" style="width: 21px;" aria-label=""></th><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" style="width: 260px;" aria-label="Name: activate to sort column descending" aria-sort="ascending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" style="width: 391px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" style="width: 196px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" style="width: 138px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                        <!-- end row -->
                                        </thead>
                                        <tfoot>
                                        <!-- start row -->
                                        <tr><th class="details-control" rowspan="1" colspan="1"></th><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Salary</th></tr>
                                        <!-- end row -->
                                        </tfoot>
                                        <tbody><tr role="row" class="odd"><td class=" details-control"></td><td class="sorting_1">Airi Satou</td><td>Accountant</td><td>Tokyo</td><td>$162,700</td></tr><tr role="row" class="even"><td class=" details-control"></td><td class="sorting_1">Angelica Ramos</td><td>Chief Executive Officer (CEO)</td><td>London</td><td>$1,200,000</td></tr><tr role="row" class="odd"><td class=" details-control"></td><td class="sorting_1">Ashton Cox</td><td>Junior Technical Author</td><td>San Francisco</td><td>$86,000</td></tr><tr role="row" class="even"><td class=" details-control"></td><td class="sorting_1">Bradley Greer</td><td>Software Engineer</td><td>London</td><td>$132,000</td></tr><tr role="row" class="odd"><td class=" details-control"></td><td class="sorting_1">Brenden Wagner</td><td>Software Engineer</td><td>San Francisco</td><td>$206,850</td></tr><tr role="row" class="even"><td class=" details-control"></td><td class="sorting_1">Brielle Williamson</td><td>Integration Specialist</td><td>New York</td><td>$372,000</td></tr><tr role="row" class="odd"><td class=" details-control"></td><td class="sorting_1">Bruno Nash</td><td>Software Engineer</td><td>London</td><td>$163,500</td></tr><tr role="row" class="even"><td class=" details-control"></td><td class="sorting_1">Caesar Vance</td><td>Pre-Sales Support</td><td>New York</td><td>$106,450</td></tr><tr role="row" class="odd"><td class=" details-control"></td><td class="sorting_1">Cara Stevens</td><td>Sales Assistant</td><td>New York</td><td>$145,600</td></tr><tr role="row" class="even"><td class=" details-control"></td><td class="sorting_1">Cedric Kelly</td><td>Senior Javascript Developer</td><td>Edinburgh</td><td>$433,060</td></tr></tbody></table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_2_previous"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="DataTables_Table_2_next"><a href="#" aria-controls="DataTables_Table_2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
            <!-- ---------------------
                          end Child rows (show extra / detailed information)
                      ---------------- -->
        </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- basic table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">Zero Configuration</h4>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-3">
                        DataTables has most features enabled by default, so all you
                        need to do to use it with your own tables is to call the
                        construction function:<code> $().DataTable();</code>. You
                        can refer full documentation from here
                        <a href="https://datatables.net/">Datatables</a>
                    </h6>
                    <div class="table-responsive">
                        <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="zero_config_length"><label>Show <select name="zero_config_length" aria-controls="zero_config" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="zero_config_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="zero_config"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info">
                                        <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 0px;">Name</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 0px;">Position</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 0px;">Office</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 0px;">Age</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 0px;">Start date</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 0px;">Salary</th></tr>
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
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="zero_config_previous"><a href="#" aria-controls="zero_config" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="zero_config" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="zero_config_next"><a href="#" aria-controls="zero_config" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- order table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">Default Ordering</h4>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-3">
                        With DataTables you can alter the ordering characteristics
                        of the table at initialisation time. Using the<code>
                            order | option</code>
                        order initialisation parameter, you can set the table to
                        display the data in exactly the order that you want.
                    </h6>
                    <div class="table-responsive">
                        <div id="default_order_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="default_order_length"><label>Show <select name="default_order_length" aria-controls="default_order" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="default_order_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="default_order"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="default_order" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="default_order_info">
                                        <thead>
                                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 188px;">Name</th><th class="sorting" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 289px;">Position</th><th class="sorting" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 139px;">Office</th><th class="sorting_desc" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-sort="descending" aria-label="Age: activate to sort column ascending" style="width: 60px;">Age</th><th class="sorting" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 124px;">Start date</th><th class="sorting" tabindex="0" aria-controls="default_order" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 97px;">Salary</th></tr>
                                        </thead>
                                        <tbody>

























































                                        <tr role="row" class="odd">
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td class="sorting_1">66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr><tr role="row" class="even">
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td class="sorting_1">66</td>
                                            <td>2012/11/27</td>
                                            <td>$198,500</td>
                                        </tr><tr role="row" class="odd">
                                            <td>Jackson Bradshaw</td>
                                            <td>Director</td>
                                            <td>New York</td>
                                            <td class="sorting_1">65</td>
                                            <td>2008/09/26</td>
                                            <td>$645,750</td>
                                        </tr><tr role="row" class="even">
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td class="sorting_1">64</td>
                                            <td>2010/06/09</td>
                                            <td>$725,000</td>
                                        </tr><tr role="row" class="odd">
                                            <td>Olivia Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td class="sorting_1">64</td>
                                            <td>2011/02/03</td>
                                            <td>$234,500</td>
                                        </tr><tr role="row" class="even">
                                            <td>Serge Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td class="sorting_1">64</td>
                                            <td>2012/04/09</td>
                                            <td>$138,575</td>
                                        </tr><tr role="row" class="odd">
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td class="sorting_1">63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr><tr role="row" class="even">
                                            <td>Zenaida Frank</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td class="sorting_1">63</td>
                                            <td>2010/01/04</td>
                                            <td>$125,250</td>
                                        </tr><tr role="row" class="odd">
                                            <td>Vivian Harrell</td>
                                            <td>Financial Controller</td>
                                            <td>San Francisco</td>
                                            <td class="sorting_1">62</td>
                                            <td>2009/02/14</td>
                                            <td>$452,500</td>
                                        </tr><tr role="row" class="even">
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td class="sorting_1">61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr></tbody>
                                        <tfoot>
                                        <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                        </tfoot>
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="default_order_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="default_order_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="default_order_previous"><a href="#" aria-controls="default_order" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="default_order" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="default_order" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="default_order" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="default_order" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="default_order" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="default_order" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="default_order_next"><a href="#" aria-controls="default_order" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- multi-column ordering -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">Multi-column ordering</h4>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-3">
                        On a per-column basis (i.e. order by a specific column and
                        then a secondary column if the data in the first column is
                        identical), through the
                        <code> columns.orderData</code> option.
                    </h6>
                    <div class="table-responsive">
                        <div id="multi_col_order_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="multi_col_order_length"><label>Show <select name="multi_col_order_length" aria-controls="multi_col_order" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="multi_col_order_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="multi_col_order"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="multi_col_order" class="table table-striped table-bordered display dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="multi_col_order_info">
                                        <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="multi_col_order" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First name: activate to sort column descending" style="width: 157px;">First name</th><th class="sorting" tabindex="0" aria-controls="multi_col_order" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending" style="width: 157px;">Last name</th><th class="sorting" tabindex="0" aria-controls="multi_col_order" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 340px;">Position</th><th class="sorting" tabindex="0" aria-controls="multi_col_order" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 168px;">Office</th><th class="sorting" tabindex="0" aria-controls="multi_col_order" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 117px;">Salary</th></tr>
                                        </thead>
                                        <tbody>

























































                                        <tr role="row" class="odd">
                                            <td class="sorting_1 sorting_2">Airi</td>
                                            <td>Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>$162,700</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1 sorting_2">Angelica</td>
                                            <td>Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>$1,200,000</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1 sorting_2">Ashton</td>
                                            <td>Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>$86,000</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1 sorting_2">Bradley</td>
                                            <td>Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>$132,000</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1 sorting_2">Brenden</td>
                                            <td>Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>$206,850</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1 sorting_2">Brielle</td>
                                            <td>Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>$372,000</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1 sorting_2">Bruno</td>
                                            <td>Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>$163,500</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1 sorting_2">Caesar</td>
                                            <td>Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>$106,450</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1 sorting_2">Cara</td>
                                            <td>Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>$145,600</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1 sorting_2">Cedric</td>
                                            <td>Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>$433,060</td>
                                        </tr></tbody>
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="multi_col_order_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="multi_col_order_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="multi_col_order_previous"><a href="#" aria-controls="multi_col_order" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="multi_col_order" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi_col_order" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi_col_order" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi_col_order" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi_col_order" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="multi_col_order" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="multi_col_order_next"><a href="#" aria-controls="multi_col_order" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- complex headers -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">
                        Complex headers (rowspan and colspan)
                    </h4>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-3">
                        When using tables to display data, you will often wish to
                        display column information in groups. DataTables fully
                        supports <code> colspan</code> and <code> rowspan</code> in
                        the table's header, assigning the required order listeners
                        to the TH element suitable for that column.
                    </h6>
                    <div class="table-responsive">
                        <div id="complex_header_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="complex_header_length"><label>Show <select name="complex_header_length" aria-controls="complex_header" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="complex_header_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="complex_header"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="complex_header" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="complex_header_info">
                                        <thead>
                                        <tr role="row"><th rowspan="2" class="sorting_asc" tabindex="0" aria-controls="complex_header" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 160px;">Name</th><th colspan="2" rowspan="1">HR Information</th><th colspan="3" rowspan="1">Contact</th></tr>
                                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="complex_header" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 248px;">Position</th><th class="sorting" tabindex="0" aria-controls="complex_header" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Salary</th><th class="sorting" tabindex="0" aria-controls="complex_header" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 117px;">Office</th><th class="sorting" tabindex="0" aria-controls="complex_header" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 53px;">Extn.</th><th class="sorting" tabindex="0" aria-controls="complex_header" rowspan="1" colspan="1" aria-label="E-mail: activate to sort column ascending" style="width: 239px;">E-mail</th></tr>
                                        </thead>
                                        <tbody>

























































                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>$162,700</td>
                                            <td>Tokyo</td>
                                            <td>5407</td>
                                            <td>a.satou@datatables.net</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>$1,200,000</td>
                                            <td>London</td>
                                            <td>5797</td>
                                            <td>a.ramos@datatables.net</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>$86,000</td>
                                            <td>San Francisco</td>
                                            <td>1562</td>
                                            <td>a.cox@datatables.net</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>$132,000</td>
                                            <td>London</td>
                                            <td>2558</td>
                                            <td>b.greer@datatables.net</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>$206,850</td>
                                            <td>San Francisco</td>
                                            <td>1314</td>
                                            <td>b.wagner@datatables.net</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>$372,000</td>
                                            <td>New York</td>
                                            <td>4804</td>
                                            <td>b.williamson@datatables.net</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>$163,500</td>
                                            <td>London</td>
                                            <td>6222</td>
                                            <td>b.nash@datatables.net</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>$106,450</td>
                                            <td>New York</td>
                                            <td>8330</td>
                                            <td>c.vance@datatables.net</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>$145,600</td>
                                            <td>New York</td>
                                            <td>3990</td>
                                            <td>c.stevens@datatables.net</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>$433,060</td>
                                            <td>Edinburgh</td>
                                            <td>6224</td>
                                            <td>c.kelly@datatables.net</td>
                                        </tr></tbody>
                                        <tfoot>
                                        <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Salary</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Extn.</th><th rowspan="1" colspan="1">E-mail</th></tr>
                                        </tfoot>
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="complex_header_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="complex_header_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="complex_header_previous"><a href="#" aria-controls="complex_header" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="complex_header" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex_header" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex_header" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex_header" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex_header" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex_header" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="complex_header_next"><a href="#" aria-controls="complex_header" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DOM Positioning -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">DOM Positioning</h4>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-3">
                        When customising DataTables for your own usage, you might
                        find that the default position of the feature elements
                        (filter input etc) is not quite to your liking. To address
                        this issue DataTables takes inspiration from the CSS 3
                        Advanced Layout Module and provides the
                        <code> dom</code> initialisation parameter which can be set
                        to indicate where you wish particular features to appear in
                        the DOM. You can also specify div wrapping containers (with
                        an id and / or class) to provide complete layout
                        flexibility.
                    </h6>
                    <div class="table-responsive">
                        <div id="DOM_pos_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="top"><div class="dataTables_info" id="DOM_pos_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><table id="DOM_pos" class="table table-striped table-bordered display dataTable" style="width: 100%;" aria-describedby="DOM_pos_info" role="grid">
                                <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DOM_pos" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 188px;">Name</th><th class="sorting" tabindex="0" aria-controls="DOM_pos" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 289px;">Position</th><th class="sorting" tabindex="0" aria-controls="DOM_pos" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 139px;">Office</th><th class="sorting" tabindex="0" aria-controls="DOM_pos" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60px;">Age</th><th class="sorting" tabindex="0" aria-controls="DOM_pos" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 124px;">Start date</th><th class="sorting" tabindex="0" aria-controls="DOM_pos" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 97px;">Salary</th></tr>
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
                            </table><div class="bottom"><div id="DOM_pos_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="DOM_pos"></label></div><div class="dataTables_length" id="DOM_pos_length"><label>Show <select name="DOM_pos_length" aria-controls="DOM_pos" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div class="dataTables_paginate paging_simple_numbers" id="DOM_pos_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DOM_pos_previous"><a href="#" aria-controls="DOM_pos" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DOM_pos" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DOM_pos" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DOM_pos" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DOM_pos" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DOM_pos" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DOM_pos" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="DOM_pos_next"><a href="#" aria-controls="DOM_pos" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div><div class="clear"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- alternative pagination -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">Alternative Pagination</h4>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-3">
                        The default page control presented by DataTables (forward
                        and backward buttons with up to 7 page numbers in-between)
                        is fine for most situations, but there are cases where you
                        may wish to customise the options presented to the end user.
                        This is done through DataTables' extensible pagination
                        mechanism, the <code> pagingType</code> option.
                    </h6>
                    <div class="table-responsive">
                        <div id="alt_pagination_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="alt_pagination_length"><label>Show <select name="alt_pagination_length" aria-controls="alt_pagination" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="alt_pagination_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="alt_pagination"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="alt_pagination" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="alt_pagination_info">
                                        <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="alt_pagination" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 188px;">Name</th><th class="sorting" tabindex="0" aria-controls="alt_pagination" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 289px;">Position</th><th class="sorting" tabindex="0" aria-controls="alt_pagination" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 139px;">Office</th><th class="sorting" tabindex="0" aria-controls="alt_pagination" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60px;">Age</th><th class="sorting" tabindex="0" aria-controls="alt_pagination" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 124px;">Start date</th><th class="sorting" tabindex="0" aria-controls="alt_pagination" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 97px;">Salary</th></tr>
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
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="alt_pagination_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_full_numbers" id="alt_pagination_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="alt_pagination_first"><a href="#" aria-controls="alt_pagination" data-dt-idx="0" tabindex="0" class="page-link">First</a></li><li class="paginate_button page-item previous disabled" id="alt_pagination_previous"><a href="#" aria-controls="alt_pagination" data-dt-idx="1" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="alt_pagination" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="alt_pagination" data-dt-idx="3" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="alt_pagination" data-dt-idx="4" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="alt_pagination" data-dt-idx="5" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="alt_pagination" data-dt-idx="6" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="alt_pagination" data-dt-idx="7" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="alt_pagination_next"><a href="#" aria-controls="alt_pagination" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li><li class="paginate_button page-item last" id="alt_pagination_last"><a href="#" aria-controls="alt_pagination" data-dt-idx="9" tabindex="0" class="page-link">Last</a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- scroll-vertical -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">Scroll - Vertical</h4>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-3">
                        This example shows the DataTables table body scrolling in
                        the vertical direction. This can generally be seen as an
                        alternative method to pagination for displaying a large
                        table in a fairly small vertical area, and as such
                        pagination has been disabled here (note that this is not
                        mandatory, it will work just fine with pagination enabled as
                        well!).
                    </h6>
                    <div class="table-responsive">
                        <div id="scroll_ver_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"><div id="scroll_ver_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="scroll_ver"></label></div></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1135px; padding-right: 17px;"><table class="table table-striped table-bordered display dataTable" style="width: 1135px; margin-left: 0px;" role="grid"><thead>
                                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="scroll_ver" rowspan="1" colspan="1" style="width: 184.078px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="scroll_ver" rowspan="1" colspan="1" style="width: 282.453px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="scroll_ver" rowspan="1" colspan="1" style="width: 136.391px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="scroll_ver" rowspan="1" colspan="1" style="width: 58.7656px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="scroll_ver" rowspan="1" colspan="1" style="width: 121.578px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="scroll_ver" rowspan="1" colspan="1" style="width: 94.7344px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                                    </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; max-height: 300px; width: 100%;"><table id="scroll_ver" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="scroll_ver_info"><thead>
                                                <tr role="row" style="height: 2px;"><th class="sorting_asc" aria-controls="scroll_ver" rowspan="1" colspan="1" style="width: 184.078px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th class="sorting" aria-controls="scroll_ver" rowspan="1" colspan="1" style="width: 282.453px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Position: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Position</div></th><th class="sorting" aria-controls="scroll_ver" rowspan="1" colspan="1" style="width: 136.391px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Office: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Office</div></th><th class="sorting" aria-controls="scroll_ver" rowspan="1" colspan="1" style="width: 58.7656px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Age: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Age</div></th><th class="sorting" aria-controls="scroll_ver" rowspan="1" colspan="1" style="width: 121.578px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Start date: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Start date</div></th><th class="sorting" aria-controls="scroll_ver" rowspan="1" colspan="1" style="width: 94.7344px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Salary: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Salary</div></th></tr>
                                                </thead><tfoot>
                                                <tr style="height: 2px;"><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 202.078px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 300.453px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Position</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 154.391px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Office</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 76.7656px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Age</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 139.578px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Start date</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 112.734px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Salary</div></th></tr>
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

                                            </table></div><div class="dataTables_scrollFoot" style="overflow: hidden; border: 0px; width: 100%;"><div class="dataTables_scrollFootInner" style="width: 1135px; padding-right: 17px;"><table class="table table-striped table-bordered display dataTable" style="width: 1135px; margin-left: 0px;" role="grid"><tfoot>
                                                    <tr><th rowspan="1" colspan="1" style="width: 202.078px;">Name</th><th rowspan="1" colspan="1" style="width: 300.453px;">Position</th><th rowspan="1" colspan="1" style="width: 154.391px;">Office</th><th rowspan="1" colspan="1" style="width: 76.7656px;">Age</th><th rowspan="1" colspan="1" style="width: 139.578px;">Start date</th><th rowspan="1" colspan="1" style="width: 112.734px;">Salary</th></tr>
                                                    </tfoot></table></div></div></div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="scroll_ver_info" role="status" aria-live="polite">Showing 1 to 57 of 57 entries</div></div><div class="col-sm-12 col-md-7"></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- scroll-vetical-dynamic height -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">
                        Scroll - Vertical, Dynamic Height
                    </h4>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-3">
                        This example shows a vertically scrolling DataTable that
                        makes use of the CSS3 <code> vh</code> unit in order to
                        dynamically resize the viewport based on the browser window
                        height. The vh unit is effectively a percentage of the
                        browser window height. So the <code> 50vh</code> used in
                        this example is 50% of the window height. The viewport size
                        will update dynamically as the window is resized.
                    </h6>
                    <div class="table-responsive">
                        <div id="scroll_ver_dynamic_hei_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"><div id="scroll_ver_dynamic_hei_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="scroll_ver_dynamic_hei"></label></div></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1135px; padding-right: 17px;"><table class="table table-striped table-bordered display dataTable" style="width: 1135px; margin-left: 0px;" role="grid"><thead>
                                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="scroll_ver_dynamic_hei" rowspan="1" colspan="1" style="width: 184.078px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="scroll_ver_dynamic_hei" rowspan="1" colspan="1" style="width: 282.453px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="scroll_ver_dynamic_hei" rowspan="1" colspan="1" style="width: 136.391px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="scroll_ver_dynamic_hei" rowspan="1" colspan="1" style="width: 58.7656px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="scroll_ver_dynamic_hei" rowspan="1" colspan="1" style="width: 121.578px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="scroll_ver_dynamic_hei" rowspan="1" colspan="1" style="width: 94.7344px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                                    </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; max-height: 50vh; width: 100%;"><table id="scroll_ver_dynamic_hei" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="scroll_ver_dynamic_hei_info"><thead>
                                                <tr role="row" style="height: 2px;"><th class="sorting_asc" aria-controls="scroll_ver_dynamic_hei" rowspan="1" colspan="1" style="width: 184.078px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-sort="ascending" aria-label="Name: activate to sort column descending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th class="sorting" aria-controls="scroll_ver_dynamic_hei" rowspan="1" colspan="1" style="width: 282.453px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Position: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Position</div></th><th class="sorting" aria-controls="scroll_ver_dynamic_hei" rowspan="1" colspan="1" style="width: 136.391px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Office: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Office</div></th><th class="sorting" aria-controls="scroll_ver_dynamic_hei" rowspan="1" colspan="1" style="width: 58.7656px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Age: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Age</div></th><th class="sorting" aria-controls="scroll_ver_dynamic_hei" rowspan="1" colspan="1" style="width: 121.578px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Start date: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Start date</div></th><th class="sorting" aria-controls="scroll_ver_dynamic_hei" rowspan="1" colspan="1" style="width: 94.7344px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Salary: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Salary</div></th></tr>
                                                </thead><tfoot>
                                                <tr style="height: 2px;"><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 202.078px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Name</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 300.453px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Position</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 154.391px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Office</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 76.7656px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Age</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 139.578px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Start date</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 112.734px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Salary</div></th></tr>
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

                                            </table></div><div class="dataTables_scrollFoot" style="overflow: hidden; border: 0px; width: 100%;"><div class="dataTables_scrollFootInner" style="width: 1135px; padding-right: 17px;"><table class="table table-striped table-bordered display dataTable" style="width: 1135px; margin-left: 0px;" role="grid"><tfoot>
                                                    <tr><th rowspan="1" colspan="1" style="width: 202.078px;">Name</th><th rowspan="1" colspan="1" style="width: 300.453px;">Position</th><th rowspan="1" colspan="1" style="width: 154.391px;">Office</th><th rowspan="1" colspan="1" style="width: 76.7656px;">Age</th><th rowspan="1" colspan="1" style="width: 139.578px;">Start date</th><th rowspan="1" colspan="1" style="width: 112.734px;">Salary</th></tr>
                                                    </tfoot></table></div></div></div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="scroll_ver_dynamic_hei_info" role="status" aria-live="polite">Showing 1 to 57 of 57 entries</div></div><div class="col-sm-12 col-md-7"></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- scroll horizontal -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">Scroll - Horizontal</h4>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-3">
                        DataTables has the ability to show tables with horizontal
                        scrolling, which is very useful for when you have a wide
                        table, but want to constrain it to a limited horizontal
                        display area. To enable x-scrolling simply set the
                        <code> scrollX</code> parameter to be whatever you want the
                        container wrapper's width to be (this should be 100% in
                        almost all cases with the width being constrained by the
                        container element).
                    </h6>
                    <div class="table-responsive">
                        <div id="scroll_hor_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="scroll_hor_length"><label>Show <select name="scroll_hor_length" aria-controls="scroll_hor" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="scroll_hor_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="scroll_hor"></label></div></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1216.36px; padding-right: 0px;"><table class="table table-striped table-bordered display nowrap dataTable no-footer" style="width: 1216.36px; margin-left: 0px;" role="grid"><thead>
                                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 79.6875px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">First name</th><th class="sorting" tabindex="0" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 79.0781px;" aria-label="Last name: activate to sort column ascending">Last name</th><th class="sorting" tabindex="0" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 194.297px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 85.875px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 29.8906px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 75.2344px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 55.3125px;" aria-label="Salary: activate to sort column ascending">Salary</th><th class="sorting" tabindex="0" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 34.2812px;" aria-label="Extn.: activate to sort column ascending">Extn.</th><th class="sorting" tabindex="0" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 196.703px;" aria-label="E-mail: activate to sort column ascending">E-mail</th></tr>
                                                    </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table id="scroll_hor" class="table table-striped table-bordered display nowrap dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="scroll_hor_info"><thead>
                                                <tr role="row" style="height: 2px;"><th class="sorting_asc" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 79.6875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-sort="ascending" aria-label="First name: activate to sort column descending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">First name</div></th><th class="sorting" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 79.0781px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Last name: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Last name</div></th><th class="sorting" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 194.297px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Position: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Position</div></th><th class="sorting" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 85.875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Office: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Office</div></th><th class="sorting" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 29.8906px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Age: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Age</div></th><th class="sorting" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 75.2344px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Start date: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Start date</div></th><th class="sorting" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 55.3125px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Salary: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Salary</div></th><th class="sorting" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 34.2812px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Extn.: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Extn.</div></th><th class="sorting" aria-controls="scroll_hor" rowspan="1" colspan="1" style="width: 196.703px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="E-mail: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">E-mail</div></th></tr>
                                                </thead>

                                                <tbody>

























































                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">Airi</td>
                                                    <td>Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                    <td>5407</td>
                                                    <td>a.satou@datatables.net</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                    <td>5797</td>
                                                    <td>a.ramos@datatables.net</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">Ashton</td>
                                                    <td>Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                    <td>1562</td>
                                                    <td>a.cox@datatables.net</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Bradley</td>
                                                    <td>Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                    <td>2558</td>
                                                    <td>b.greer@datatables.net</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                    <td>1314</td>
                                                    <td>b.wagner@datatables.net</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Brielle</td>
                                                    <td>Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                    <td>4804</td>
                                                    <td>b.williamson@datatables.net</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>6222</td>
                                                    <td>b.nash@datatables.net</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Caesar</td>
                                                    <td>Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                    <td>8330</td>
                                                    <td>c.vance@datatables.net</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">Cara</td>
                                                    <td>Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                    <td>3990</td>
                                                    <td>c.stevens@datatables.net</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Cedric</td>
                                                    <td>Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                    <td>6224</td>
                                                    <td>c.kelly@datatables.net</td>
                                                </tr></tbody>
                                            </table></div></div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="scroll_hor_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="scroll_hor_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="scroll_hor_previous"><a href="#" aria-controls="scroll_hor" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="scroll_hor" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="scroll_hor" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="scroll_hor" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="scroll_hor" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="scroll_hor" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="scroll_hor" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="scroll_hor_next"><a href="#" aria-controls="scroll_hor" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- scroll horizontal & vertical -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">
                        Scroll - Vertical &amp; Horizontal
                    </h4>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-3">
                        In this example you can see DataTables doing both horizontal
                        and vertical scrolling at the same time. Note also that
                        pagination is enabled in this example, and the scrolling
                        accounts for this.
                    </h6>
                    <div class="table-responsive">
                        <div id="scroll_ver_hor_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="scroll_ver_hor_length"><label>Show <select name="scroll_ver_hor_length" aria-controls="scroll_ver_hor" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="scroll_ver_hor_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="scroll_ver_hor"></label></div></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1216.36px; padding-right: 17px;"><table class="table table-striped table-bordered display nowrap dataTable no-footer" style="width: 1216.36px; margin-left: 0px;" role="grid"><thead>
                                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 79.6875px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">First name</th><th class="sorting" tabindex="0" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 79.0781px;" aria-label="Last name: activate to sort column ascending">Last name</th><th class="sorting" tabindex="0" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 194.297px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 85.875px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 29.8906px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 75.2344px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 55.3125px;" aria-label="Salary: activate to sort column ascending">Salary</th><th class="sorting" tabindex="0" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 34.2812px;" aria-label="Extn.: activate to sort column ascending">Extn.</th><th class="sorting" tabindex="0" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 196.703px;" aria-label="E-mail: activate to sort column ascending">E-mail</th></tr>
                                                    </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%; height: 300px;"><table id="scroll_ver_hor" class="table table-striped table-bordered display nowrap dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="scroll_ver_hor_info"><thead>
                                                <tr role="row" style="height: 2px;"><th class="sorting_asc" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 79.6875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-sort="ascending" aria-label="First name: activate to sort column descending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">First name</div></th><th class="sorting" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 79.0781px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Last name: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Last name</div></th><th class="sorting" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 194.297px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Position: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Position</div></th><th class="sorting" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 85.875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Office: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Office</div></th><th class="sorting" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 29.8906px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Age: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Age</div></th><th class="sorting" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 75.2344px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Start date: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Start date</div></th><th class="sorting" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 55.3125px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Salary: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Salary</div></th><th class="sorting" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 34.2812px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Extn.: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Extn.</div></th><th class="sorting" aria-controls="scroll_ver_hor" rowspan="1" colspan="1" style="width: 196.703px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="E-mail: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">E-mail</div></th></tr>
                                                </thead>

                                                <tbody>

























































                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">Airi</td>
                                                    <td>Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                    <td>5407</td>
                                                    <td>a.satou@datatables.net</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Angelica</td>
                                                    <td>Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                    <td>5797</td>
                                                    <td>a.ramos@datatables.net</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">Ashton</td>
                                                    <td>Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                    <td>1562</td>
                                                    <td>a.cox@datatables.net</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Bradley</td>
                                                    <td>Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                    <td>2558</td>
                                                    <td>b.greer@datatables.net</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">Brenden</td>
                                                    <td>Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                    <td>1314</td>
                                                    <td>b.wagner@datatables.net</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Brielle</td>
                                                    <td>Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                    <td>4804</td>
                                                    <td>b.williamson@datatables.net</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">Bruno</td>
                                                    <td>Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                    <td>6222</td>
                                                    <td>b.nash@datatables.net</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Caesar</td>
                                                    <td>Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                    <td>8330</td>
                                                    <td>c.vance@datatables.net</td>
                                                </tr><tr role="row" class="odd">
                                                    <td class="sorting_1">Cara</td>
                                                    <td>Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                    <td>3990</td>
                                                    <td>c.stevens@datatables.net</td>
                                                </tr><tr role="row" class="even">
                                                    <td class="sorting_1">Cedric</td>
                                                    <td>Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                    <td>6224</td>
                                                    <td>c.kelly@datatables.net</td>
                                                </tr></tbody>
                                            </table></div></div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="scroll_ver_hor_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="scroll_ver_hor_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="scroll_ver_hor_previous"><a href="#" aria-controls="scroll_ver_hor" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="scroll_ver_hor" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="scroll_ver_hor" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="scroll_ver_hor" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="scroll_ver_hor" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="scroll_ver_hor" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="scroll_ver_hor" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="scroll_ver_hor_next"><a href="#" aria-controls="scroll_ver_hor" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Language - Comma decimal place  -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">
                        Language - Comma decimal place
                    </h4>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-3">
                        A dot (.) is used to mark the decimal place in Javascript,
                        however, many parts of the world use a comma (,) and other
                        characters such as the Unicode decimal separator (⎖) or a
                        dash (-) are often used to show the decimal place in a
                        displayed number.
                    </h6>
                    <div class="table-responsive">
                        <div id="lang_comma_deci_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="lang_comma_deci_length"><label>Show <select name="lang_comma_deci_length" aria-controls="lang_comma_deci" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="lang_comma_deci_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="lang_comma_deci"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="lang_comma_deci" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="lang_comma_deci_info">
                                        <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="lang_comma_deci" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 182px;">Name</th><th class="sorting" tabindex="0" aria-controls="lang_comma_deci" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 280px;">Position</th><th class="sorting" tabindex="0" aria-controls="lang_comma_deci" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 135px;">Office</th><th class="sorting" tabindex="0" aria-controls="lang_comma_deci" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 58px;">Age</th><th class="sorting" tabindex="0" aria-controls="lang_comma_deci" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 120px;">Start date</th><th class="sorting" tabindex="0" aria-controls="lang_comma_deci" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 123px;">Salary</th></tr>
                                        </thead>
                                        <tbody>

























































                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162.700,00</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1.200.000,00</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86.000,00</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132.000,00</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206.850,00</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372.000,00</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163.500,00</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106.450,00</td>
                                        </tr><tr role="row" class="odd">
                                            <td class="sorting_1">Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145.600,00</td>
                                        </tr><tr role="row" class="even">
                                            <td class="sorting_1">Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433.060,00</td>
                                        </tr></tbody>
                                        <tfoot>
                                        <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                        </tfoot>
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="lang_comma_deci_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="lang_comma_deci_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="lang_comma_deci_previous"><a href="#" aria-controls="lang_comma_deci" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="lang_comma_deci" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang_comma_deci" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang_comma_deci" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang_comma_deci" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang_comma_deci" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang_comma_deci" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="lang_comma_deci_next"><a href="#" aria-controls="lang_comma_deci" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- language options -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">Language Options</h4>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-3">
                        Changing the language information displayed by DataTables is
                        as simple as passing in a <code> language</code> object to
                        the DataTable constructor.
                    </h6>
                    <div class="table-responsive">
                        <div id="lang_opt_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="lang_opt_length"><label>Display <select name="lang_opt_length" aria-controls="lang_opt" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-sm-12 col-md-6"><div id="lang_opt_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="lang_opt"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="lang_opt" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="lang_opt_info">
                                        <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="lang_opt" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 188px;">Name</th><th class="sorting" tabindex="0" aria-controls="lang_opt" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 289px;">Position</th><th class="sorting" tabindex="0" aria-controls="lang_opt" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 139px;">Office</th><th class="sorting" tabindex="0" aria-controls="lang_opt" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60px;">Age</th><th class="sorting" tabindex="0" aria-controls="lang_opt" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 124px;">Start date</th><th class="sorting" tabindex="0" aria-controls="lang_opt" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 97px;">Salary</th></tr>
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
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="lang_opt_info" role="status" aria-live="polite">Showing page 1 of 6</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="lang_opt_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="lang_opt_previous"><a href="#" aria-controls="lang_opt" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="lang_opt" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang_opt" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang_opt" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang_opt" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang_opt" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="lang_opt" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="lang_opt_next"><a href="#" aria-controls="lang_opt" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- table responsive -->
    <div class="card">
        <div class="border-bottom title-part-padding">
            <h4 class="card-title mb-0">Table Responsive</h4>
        </div>
        <div class="card-body">
            <h6 class="card-subtitle mb-3">Data table example</h6>
            <div class="table-responsive m-t-40">
                <div id="config-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="config-table_length"><label>Show <select name="config-table_length" aria-controls="config-table" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="config-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="config-table"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="config-table" class="table display table-bordered table-striped no-wrap dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="config-table_info" style="width: 1157px;">
                                <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="config-table" rowspan="1" colspan="1" style="width: 102px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">First name</th><th class="sorting" tabindex="0" aria-controls="config-table" rowspan="1" colspan="1" style="width: 102px;" aria-label="Last name: activate to sort column ascending">Last name</th><th class="sorting" tabindex="0" aria-controls="config-table" rowspan="1" colspan="1" style="width: 235px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="config-table" rowspan="1" colspan="1" style="width: 110px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="config-table" rowspan="1" colspan="1" style="width: 44px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="config-table" rowspan="1" colspan="1" style="width: 97px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="config-table" rowspan="1" colspan="1" style="width: 74px;" aria-label="Salary: activate to sort column ascending">Salary</th><th class="sorting" tabindex="0" aria-controls="config-table" rowspan="1" colspan="1" style="width: 49px;" aria-label="Extn.: activate to sort column ascending">Extn.</th><th class="sorting" tabindex="0" aria-controls="config-table" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="E-mail: activate to sort column ascending">E-mail</th></tr>
                                </thead>
                                <tbody>

























































                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">Airi</td>
                                    <td>Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                    <td>5407</td>
                                    <td style="display: none;">a.satou@datatables.net</td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0">Angelica</td>
                                    <td>Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                    <td>5797</td>
                                    <td style="display: none;">a.ramos@datatables.net</td>
                                </tr><tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">Ashton</td>
                                    <td>Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                    <td>1562</td>
                                    <td style="display: none;">a.cox@datatables.net</td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0">Bradley</td>
                                    <td>Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                    <td>2558</td>
                                    <td style="display: none;">b.greer@datatables.net</td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0">Brenden</td>
                                    <td>Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                    <td>1314</td>
                                    <td style="display: none;">b.wagner@datatables.net</td>
                                </tr><tr role="row" class="even">
                                    <td tabindex="0" class="sorting_1">Brielle</td>
                                    <td>Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                    <td>4804</td>
                                    <td style="display: none;">b.williamson@datatables.net</td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0">Bruno</td>
                                    <td>Nash</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>38</td>
                                    <td>2011/05/03</td>
                                    <td>$163,500</td>
                                    <td>6222</td>
                                    <td style="display: none;">b.nash@datatables.net</td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0">Caesar</td>
                                    <td>Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                    <td>8330</td>
                                    <td style="display: none;">c.vance@datatables.net</td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0">Cara</td>
                                    <td>Stevens</td>
                                    <td>Sales Assistant</td>
                                    <td>New York</td>
                                    <td>46</td>
                                    <td>2011/12/06</td>
                                    <td>$145,600</td>
                                    <td>3990</td>
                                    <td style="display: none;">c.stevens@datatables.net</td>
                                </tr><tr role="row" class="even">
                                    <td tabindex="0" class="sorting_1">Cedric</td>
                                    <td>Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                    <td>6224</td>
                                    <td style="display: none;">c.kelly@datatables.net</td>
                                </tr></tbody>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="config-table_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="config-table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="config-table_previous"><a href="#" aria-controls="config-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="config-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="config-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="config-table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="config-table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="config-table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="config-table" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="config-table_next"><a href="#" aria-controls="config-table" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
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
    <script src="../../assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <script src="../../dist/js/pages/datatable/datatable-basic.init.js"></script>
@endsection


