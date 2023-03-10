@extends("admin.layout")
@section("title","Admin Template empty")

{{--css--}}
@section('after-css')
    <!--This page CSS -->
    <link href="../../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
@endsection

{{-- main--}}
@section("main-content")
    <div class="container-fluid">
        <!-- -------------------------------------------------------------- -->
        <!-- Start Page Content -->
        <!-- -------------------------------------------------------------- -->
        <!-- add row -->
        <div class="row">
            <div class="col-12">
                <!-- ---------------------
                              start Add Row
                          ---------------- -->
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">Add Row</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            New rows can be added to a DataTable using the
                            <code> row.add()</code> API method. Simply call the API
                            function with the data for the new row (be it an array or
                            object). Multiple rows can be added using the
                            <code> rows.add()</code> method (note the plural). Data can
                            likewise be updated with the <code>row().data()</code> and
                            <code> row().remove()</code> methods. You can refer full
                            documentation from here
                            <a href="https://datatables.net/">Datatables</a>
                        </h6>
                        <button id="addRow" class="btn btn-primary mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus feather-sm"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>&nbsp; Add new
                            row
                        </button>
                        <div class="table-responsive">
                            <div id="t_add_row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="t_add_row_length"><label>Show <select name="t_add_row_length" aria-controls="t_add_row" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="t_add_row_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="t_add_row"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="t_add_row" class="table table-striped table-bordered display text-nowrap dataTable" style="width: 100%;" role="grid" aria-describedby="t_add_row_info">
                                            <thead>
                                            <!-- start row -->
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="t_add_row" rowspan="1" colspan="1" style="width: 180px;" aria-label="Column 1: activate to sort column descending" aria-sort="ascending">Column 1</th><th class="sorting" tabindex="0" aria-controls="t_add_row" rowspan="1" colspan="1" style="width: 188px;" aria-label="Column 2: activate to sort column ascending">Column 2</th><th class="sorting" tabindex="0" aria-controls="t_add_row" rowspan="1" colspan="1" style="width: 189px;" aria-label="Column 3: activate to sort column ascending">Column 3</th><th class="sorting" tabindex="0" aria-controls="t_add_row" rowspan="1" colspan="1" style="width: 190px;" aria-label="Column 4: activate to sort column ascending">Column 4</th><th class="sorting" tabindex="0" aria-controls="t_add_row" rowspan="1" colspan="1" style="width: 189px;" aria-label="Column 5: activate to sort column ascending">Column 5</th></tr>
                                            <!-- end row -->
                                            </thead>
                                            <tfoot>
                                            <!-- start row -->
                                            <tr><th rowspan="1" colspan="1">Column 1</th><th rowspan="1" colspan="1">Column 2</th><th rowspan="1" colspan="1">Column 3</th><th rowspan="1" colspan="1">Column 4</th><th rowspan="1" colspan="1">Column 5</th></tr>
                                            <!-- end row -->
                                            </tfoot>
                                            <tbody><tr role="row" class="odd"><td class="sorting_1">1.1</td><td>1.2</td><td>1.3</td><td>1.4</td><td>1.5</td></tr><tr role="row" class="even"><td class="sorting_1">2.1</td><td>2.2</td><td>2.3</td><td>2.4</td><td>2.5</td></tr><tr role="row" class="odd"><td class="sorting_1">3.1</td><td>3.2</td><td>3.3</td><td>3.4</td><td>3.5</td></tr><tr role="row" class="even"><td class="sorting_1">4.1</td><td>4.2</td><td>4.3</td><td>4.4</td><td>4.5</td></tr></tbody></table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="t_add_row_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="t_add_row_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="t_add_row_previous"><a href="#" aria-controls="t_add_row" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="t_add_row" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="t_add_row_next"><a href="#" aria-controls="t_add_row" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------
                              end Add Row
                          ---------------- -->
            </div>
        </div>
        <!-- Individual column searching (select inputs) -->
        <div class="row">
            <div class="col-12">
                <!-- ---------------------
                              start Individual column searching (select inputs)
                          ---------------- -->
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">
                            Individual column searching (select inputs)
                        </h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            After the table is initialised, the API is used to build the
                            select inputs through the use of the
                            <code> column().data()</code> method to get the data for
                            each column in turn. The helper methods
                            <code>unique()</code> and <code> sort()</code> are also used
                            to reduce the data for set input to unique and ordered
                            elements. Finally the change event from the select input is
                            used to trigger a column search using the
                            <code>column().search()</code> method.
                        </h6>
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered datatable-select-inputs text-nowrap dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                            <!-- start row -->
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 0px;" aria-sort="ascending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 0px;">Position</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 0px;">Office</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 0px;">Age</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 0px;">Start date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 0px;">Salary</th></tr>
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
                                                <td class="sorting_1">Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr></tbody>
                                            <tfoot>
                                            <!-- start row -->
                                            <tr><th rowspan="1" colspan="1"><select class="form-select"><option value="">Select option</option><option value="Airi Satou">Airi Satou</option><option value="Angelica Ramos">Angelica Ramos</option><option value="Ashton Cox">Ashton Cox</option><option value="Bradley Greer">Bradley Greer</option><option value="Brenden Wagner">Brenden Wagner</option><option value="Brielle Williamson">Brielle Williamson</option><option value="Bruno Nash">Bruno Nash</option><option value="Caesar Vance">Caesar Vance</option><option value="Cara Stevens">Cara Stevens</option><option value="Cedric Kelly">Cedric Kelly</option><option value="Charde Marshall">Charde Marshall</option><option value="Colleen Hurst">Colleen Hurst</option><option value="Dai Rios">Dai Rios</option><option value="Donna Snider">Donna Snider</option><option value="Doris Wilder">Doris Wilder</option><option value="Finn Camacho">Finn Camacho</option><option value="Fiona Green">Fiona Green</option><option value="Garrett Winters">Garrett Winters</option><option value="Gavin Cortez">Gavin Cortez</option><option value="Gavin Joyce">Gavin Joyce</option><option value="Gloria Little">Gloria Little</option><option value="Haley Kennedy">Haley Kennedy</option><option value="Hermione Butler">Hermione Butler</option><option value="Herrod Chandler">Herrod Chandler</option><option value="Hope Fuentes">Hope Fuentes</option><option value="Howard Hatfield">Howard Hatfield</option><option value="Jackson Bradshaw">Jackson Bradshaw</option><option value="Jena Gaines">Jena Gaines</option><option value="Jenette Caldwell">Jenette Caldwell</option><option value="Jennifer Acosta">Jennifer Acosta</option><option value="Jennifer Chang">Jennifer Chang</option><option value="Jonas Alexander">Jonas Alexander</option><option value="Lael Greer">Lael Greer</option><option value="Martena Mccray">Martena Mccray</option><option value="Michael Bruce">Michael Bruce</option><option value="Michael Silva">Michael Silva</option><option value="Michelle House">Michelle House</option><option value="Olivia Liang">Olivia Liang</option><option value="Paul Byrd">Paul Byrd</option><option value="Prescott Bartlett">Prescott Bartlett</option><option value="Quinn Flynn">Quinn Flynn</option><option value="Rhona Davidson">Rhona Davidson</option><option value="Sakura Yamamoto">Sakura Yamamoto</option><option value="Serge Baldwin">Serge Baldwin</option><option value="Shad Decker">Shad Decker</option><option value="Shou Itou">Shou Itou</option><option value="Sonya Frost">Sonya Frost</option><option value="Suki Burks">Suki Burks</option><option value="Tatyana Fitzpatrick">Tatyana Fitzpatrick</option><option value="Thor Walton">Thor Walton</option><option value="Tiger Nixon">Tiger Nixon</option><option value="Timothy Mooney">Timothy Mooney</option><option value="Unity Butler">Unity Butler</option><option value="Vivian Harrell">Vivian Harrell</option><option value="Yuri Berry">Yuri Berry</option><option value="Zenaida Frank">Zenaida Frank</option><option value="Zorita Serrano">Zorita Serrano</option></select></th><th rowspan="1" colspan="1"><select class="form-select"><option value="">Select option</option><option value="Accountant">Accountant</option><option value="Chief Executive Officer (CEO)">Chief Executive Officer (CEO)</option><option value="Chief Financial Officer (CFO)">Chief Financial Officer (CFO)</option><option value="Chief Marketing Officer (CMO)">Chief Marketing Officer (CMO)</option><option value="Chief Operating Officer (COO)">Chief Operating Officer (COO)</option><option value="Customer Support">Customer Support</option><option value="Data Coordinator">Data Coordinator</option><option value="Developer">Developer</option><option value="Development Lead">Development Lead</option><option value="Director">Director</option><option value="Financial Controller">Financial Controller</option><option value="Integration Specialist">Integration Specialist</option><option value="Javascript Developer">Javascript Developer</option><option value="Junior Javascript Developer">Junior Javascript Developer</option><option value="Junior Technical Author">Junior Technical Author</option><option value="Marketing Designer">Marketing Designer</option><option value="Office Manager">Office Manager</option><option value="Personnel Lead">Personnel Lead</option><option value="Post-Sales support">Post-Sales support</option><option value="Pre-Sales Support">Pre-Sales Support</option><option value="Regional Director">Regional Director</option><option value="Regional Marketing">Regional Marketing</option><option value="Sales Assistant">Sales Assistant</option><option value="Secretary">Secretary</option><option value="Senior Javascript Developer">Senior Javascript Developer</option><option value="Senior Marketing Designer">Senior Marketing Designer</option><option value="Software Engineer">Software Engineer</option><option value="Support Engineer">Support Engineer</option><option value="Support Lead">Support Lead</option><option value="System Architect">System Architect</option><option value="Systems Administrator">Systems Administrator</option><option value="Team Leader">Team Leader</option><option value="Technical Author">Technical Author</option></select></th><th rowspan="1" colspan="1"><select class="form-select"><option value="">Select option</option><option value="Edinburgh">Edinburgh</option><option value="London">London</option><option value="New York">New York</option><option value="San Francisco">San Francisco</option><option value="Sidney">Sidney</option><option value="Singapore">Singapore</option><option value="Tokyo">Tokyo</option></select></th><th rowspan="1" colspan="1"><select class="form-select"><option value="">Select option</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="33">33</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="51">51</option><option value="53">53</option><option value="55">55</option><option value="56">56</option><option value="59">59</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option></select></th><th rowspan="1" colspan="1"><select class="form-select"><option value="">Select option</option><option value="2008/09/26">2008/09/26</option><option value="2008/10/16">2008/10/16</option><option value="2008/10/26">2008/10/26</option><option value="2008/11/13">2008/11/13</option><option value="2008/11/28">2008/11/28</option><option value="2008/12/11">2008/12/11</option><option value="2008/12/13">2008/12/13</option><option value="2008/12/16">2008/12/16</option><option value="2008/12/19">2008/12/19</option><option value="2009/01/12">2009/01/12</option><option value="2009/02/14">2009/02/14</option><option value="2009/02/27">2009/02/27</option><option value="2009/04/10">2009/04/10</option><option value="2009/06/25">2009/06/25</option><option value="2009/07/07">2009/07/07</option><option value="2009/08/19">2009/08/19</option><option value="2009/09/15">2009/09/15</option><option value="2009/10/09">2009/10/09</option><option value="2009/10/22">2009/10/22</option><option value="2009/12/09">2009/12/09</option><option value="2010/01/04">2010/01/04</option><option value="2010/02/12">2010/02/12</option><option value="2010/03/11">2010/03/11</option><option value="2010/03/17">2010/03/17</option><option value="2010/06/09">2010/06/09</option><option value="2010/07/14">2010/07/14</option><option value="2010/09/20">2010/09/20</option><option value="2010/10/14">2010/10/14</option><option value="2010/11/14">2010/11/14</option><option value="2010/12/22">2010/12/22</option><option value="2011/01/25">2011/01/25</option><option value="2011/02/03">2011/02/03</option><option value="2011/03/09">2011/03/09</option><option value="2011/03/21">2011/03/21</option><option value="2011/04/25">2011/04/25</option><option value="2011/05/03">2011/05/03</option><option value="2011/05/07">2011/05/07</option><option value="2011/06/02">2011/06/02</option><option value="2011/06/07">2011/06/07</option><option value="2011/06/27">2011/06/27</option><option value="2011/07/25">2011/07/25</option><option value="2011/08/14">2011/08/14</option><option value="2011/09/03">2011/09/03</option><option value="2011/12/06">2011/12/06</option><option value="2011/12/12">2011/12/12</option><option value="2012/03/29">2012/03/29</option><option value="2012/04/09">2012/04/09</option><option value="2012/06/01">2012/06/01</option><option value="2012/08/06">2012/08/06</option><option value="2012/09/26">2012/09/26</option><option value="2012/10/13">2012/10/13</option><option value="2012/11/27">2012/11/27</option><option value="2012/12/02">2012/12/02</option><option value="2012/12/18">2012/12/18</option><option value="2013/02/01">2013/02/01</option><option value="2013/03/03">2013/03/03</option><option value="2013/08/11">2013/08/11</option></select></th><th rowspan="1" colspan="1"><select class="form-select"><option value="">Select option</option><option value="$1,200,000">$1,200,000</option><option value="$103,500">$103,500</option><option value="$103,600">$103,600</option><option value="$106,450">$106,450</option><option value="$109,850">$109,850</option><option value="$112,000">$112,000</option><option value="$114,500">$114,500</option><option value="$115,000">$115,000</option><option value="$125,250">$125,250</option><option value="$132,000">$132,000</option><option value="$136,200">$136,200</option><option value="$137,500">$137,500</option><option value="$138,575">$138,575</option><option value="$139,575">$139,575</option><option value="$145,000">$145,000</option><option value="$145,600">$145,600</option><option value="$162,700">$162,700</option><option value="$163,000">$163,000</option><option value="$163,500">$163,500</option><option value="$164,500">$164,500</option><option value="$170,750">$170,750</option><option value="$183,000">$183,000</option><option value="$198,500">$198,500</option><option value="$205,500">$205,500</option><option value="$206,850">$206,850</option><option value="$217,500">$217,500</option><option value="$234,500">$234,500</option><option value="$235,500">$235,500</option><option value="$237,500">$237,500</option><option value="$313,500">$313,500</option><option value="$320,800">$320,800</option><option value="$324,050">$324,050</option><option value="$327,900">$327,900</option><option value="$342,000">$342,000</option><option value="$345,000">$345,000</option><option value="$356,250">$356,250</option><option value="$357,650">$357,650</option><option value="$372,000">$372,000</option><option value="$385,750">$385,750</option><option value="$433,060">$433,060</option><option value="$452,500">$452,500</option><option value="$470,600">$470,600</option><option value="$645,750">$645,750</option><option value="$675,000">$675,000</option><option value="$725,000">$725,000</option><option value="$75,650">$75,650</option><option value="$85,600">$85,600</option><option value="$85,675">$85,675</option><option value="$850,000">$850,000</option><option value="$86,000">$86,000</option><option value="$86,500">$86,500</option><option value="$87,500">$87,500</option><option value="$90,560">$90,560</option><option value="$92,575">$92,575</option><option value="$95,400">$95,400</option><option value="$98,540">$98,540</option></select></th></tr>
                                            <!-- end row -->
                                            </tfoot>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries (filtered from 57 total entries)</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------
                              end Individual column searching (select inputs)
                          ---------------- -->
            </div>
        </div>
        <!-- Individual column searching (text inputs) -->
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
        <!-- Child rows (show extra / detailed information) -->
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
        <!-- Row selection (multiple rows) -->
        <div class="row">
            <div class="col-12">
                <!-- ---------------------
                              start Row selection (multiple rows)
                          ---------------- -->
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">Row selection (multiple rows)</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            It can be useful to provide the user with the option to
                            select rows in a DataTable. This can be done by using a
                            click event to add / remove a class on the table rows. The
                            <code> rows().data()</code> method can then be used to get
                            the data for the selected rows. In this case it is simply
                            counting the number of selected rows, but much more complex
                            interactions can easily be developed.
                        </h6>
                        <button id="button" class="btn btn-primary mb-2">
                            <i class="ri-filter-line"></i> Row count
                        </button>
                        <div class="table-responsive">
                            <div id="row_select_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="row_select_length"><label>Show <select name="row_select_length" aria-controls="row_select" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="row_select_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="row_select"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="row_select" class="table table-striped table-bordered display text-nowrap dataTable" style="width: 100%;" role="grid" aria-describedby="row_select_info">
                                            <thead>
                                            <!-- start row -->
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="row_select" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 188px;" aria-sort="ascending">Name</th><th class="sorting" tabindex="0" aria-controls="row_select" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 288px;">Position</th><th class="sorting" tabindex="0" aria-controls="row_select" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 139px;">Office</th><th class="sorting" tabindex="0" aria-controls="row_select" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60px;">Age</th><th class="sorting" tabindex="0" aria-controls="row_select" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 124px;">Start date</th><th class="sorting" tabindex="0" aria-controls="row_select" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 95px;">Salary</th></tr>
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
                                            <tr role="row" class="odd selected">
                                                <td class="sorting_1">Airi Satou</td>
                                                <td class="">Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Angelica Ramos</td>
                                                <td class="">Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Ashton Cox</td>
                                                <td class="">Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Bradley Greer</td>
                                                <td class="">Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Brenden Wagner</td>
                                                <td class="">Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Brielle Williamson</td>
                                                <td class="">Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Bruno Nash</td>
                                                <td class="">Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Caesar Vance</td>
                                                <td class="">Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Cara Stevens</td>
                                                <td class="">Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Cedric Kelly</td>
                                                <td class="">Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr></tbody>
                                            <tfoot>
                                            <!-- start row -->
                                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                            <!-- end row -->
                                            </tfoot>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="row_select_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="row_select_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="row_select_previous"><a href="#" aria-controls="row_select" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="row_select" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row_select" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row_select" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row_select" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row_select" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="row_select" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="row_select_next"><a href="#" aria-controls="row_select" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------
                              end Row selection (multiple rows)
                          ---------------- -->
            </div>
        </div>
        <!-- Form inputs -->
        <div class="row">
            <div class="col-12">
                <!-- ---------------------
                              start Form Inputs
                          ---------------- -->
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">Form Inputs</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            In order to perform paging, ordering, searching etc,
                            DataTables can remove rows and cells from the document (i.e.
                            those rows / cells which are not needed are not inserted
                            into the document). This increases performance and
                            compatibility, however, it means that submitting forms which
                            span multiple pages requires a little bit of additional work
                            to get the information that is not in the document any
                            longer.
                        </h6>
                        <button class="btn btn-primary me-1 inputs-submit">
                            <i class="ri-file-fill align-middle"></i> Submit form
                        </button>
                        <div class="table-responsive mt-3">
                            <div id="form_inputs_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="form_inputs_length"><label>Show <select name="form_inputs_length" aria-controls="form_inputs" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="form_inputs_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="form_inputs"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="form_inputs" class="table table-striped table-bordered display text-nowrap dataTable" style="width: 100%;" role="grid" aria-describedby="form_inputs_info">
                                            <thead>
                                            <!-- start row -->
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="form_inputs" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 204px;">Name</th><th class="sorting" tabindex="0" aria-controls="form_inputs" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 310px;">Age</th><th class="sorting" tabindex="0" aria-controls="form_inputs" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 310px;">Position</th><th class="sorting" tabindex="0" aria-controls="form_inputs" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 157px;">Office</th></tr>
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
                                                <td>
                                                    <input type="text" class="form-control" id="row-5-age" name="row-5-age" value="33">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-5-position" name="row-5-position" value="Accountant">
                                                </td>
                                                <td>
                                                    <select size="1" class="custom-select" id="row-5-office" name="row-5-office">
                                                        <option value="Edinburgh">Edinburgh</option>
                                                        <option value="London">London</option>
                                                        <option value="New York">New York</option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo" selected="selected">
                                                            Tokyo
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Angelica Ramos</td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-25-age" name="row-25-age" value="47">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-25-position" name="row-25-position" value="Chief Executive Officer (CEO)">
                                                </td>
                                                <td>
                                                    <select size="1" class="custom-select" id="row-25-office" name="row-25-office">
                                                        <option value="Edinburgh">Edinburgh</option>
                                                        <option value="London" selected="selected">
                                                            London
                                                        </option>
                                                        <option value="New York">New York</option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">Tokyo</option>
                                                    </select>
                                                </td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Ashton Cox</td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-3-age" name="row-3-age" value="66">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-3-position" name="row-3-position" value="Junior Technical Author">
                                                </td>
                                                <td>
                                                    <select size="1" class="custom-select" id="row-3-office" name="row-3-office">
                                                        <option value="Edinburgh">Edinburgh</option>
                                                        <option value="London">London</option>
                                                        <option value="New York">New York</option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">Tokyo</option>
                                                    </select>
                                                </td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Bradley Greer</td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-19-age" name="row-19-age" value="41">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-19-position" name="row-19-position" value="Software Engineer">
                                                </td>
                                                <td>
                                                    <select size="1" class="custom-select" id="row-19-office" name="row-19-office">
                                                        <option value="Edinburgh">Edinburgh</option>
                                                        <option value="London" selected="selected">
                                                            London
                                                        </option>
                                                        <option value="New York">New York</option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">Tokyo</option>
                                                    </select>
                                                </td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Brenden Wagner</td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-28-age" name="row-28-age" value="28">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-28-position" name="row-28-position" value="Software Engineer">
                                                </td>
                                                <td>
                                                    <select size="1" class="custom-select" id="row-28-office" name="row-28-office">
                                                        <option value="Edinburgh">Edinburgh</option>
                                                        <option value="London">London</option>
                                                        <option value="New York">New York</option>
                                                        <option value="San Francisco" selected="selected">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">Tokyo</option>
                                                    </select>
                                                </td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Brielle Williamson</td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-6-age" name="row-6-age" value="61">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-6-position" name="row-6-position" value="Integration Specialist">
                                                </td>
                                                <td>
                                                    <select size="1" class="custom-select" id="row-6-office" name="row-6-office">
                                                        <option value="Edinburgh">Edinburgh</option>
                                                        <option value="London">London</option>
                                                        <option value="New York" selected="selected">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">Tokyo</option>
                                                    </select>
                                                </td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Bruno Nash</td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-43-age" name="row-43-age" value="38">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-43-position" name="row-43-position" value="Software Engineer">
                                                </td>
                                                <td>
                                                    <select size="1" class="custom-select" id="row-43-office" name="row-43-office">
                                                        <option value="Edinburgh">Edinburgh</option>
                                                        <option value="London" selected="selected">
                                                            London
                                                        </option>
                                                        <option value="New York">New York</option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">Tokyo</option>
                                                    </select>
                                                </td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Caesar Vance</td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-23-age" name="row-23-age" value="21">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-23-position" name="row-23-position" value="Pre-Sales Support">
                                                </td>
                                                <td>
                                                    <select size="1" class="custom-select" id="row-23-office" name="row-23-office">
                                                        <option value="Edinburgh">Edinburgh</option>
                                                        <option value="London">London</option>
                                                        <option value="New York" selected="selected">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">Tokyo</option>
                                                    </select>
                                                </td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Cara Stevens</td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-51-age" name="row-51-age" value="46">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-51-position" name="row-51-position" value="Sales Assistant">
                                                </td>
                                                <td>
                                                    <select size="1" class="custom-select" id="row-51-office" name="row-51-office">
                                                        <option value="Edinburgh">Edinburgh</option>
                                                        <option value="London">London</option>
                                                        <option value="New York" selected="selected">
                                                            New York
                                                        </option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">Tokyo</option>
                                                    </select>
                                                </td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Cedric Kelly</td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-4-age" name="row-4-age" value="22">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="row-4-position" name="row-4-position" value="Senior Javascript Developer">
                                                </td>
                                                <td>
                                                    <select size="1" class="custom-select" id="row-4-office" name="row-4-office">
                                                        <option value="Edinburgh" selected="selected">
                                                            Edinburgh
                                                        </option>
                                                        <option value="London">London</option>
                                                        <option value="New York">New York</option>
                                                        <option value="San Francisco">
                                                            San Francisco
                                                        </option>
                                                        <option value="Tokyo">Tokyo</option>
                                                    </select>
                                                </td>
                                            </tr></tbody>
                                            <tfoot>
                                            <!-- start row -->
                                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th></tr>
                                            <!-- end row -->
                                            </tfoot>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="form_inputs_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="form_inputs_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="form_inputs_previous"><a href="#" aria-controls="form_inputs" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="form_inputs" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="form_inputs" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="form_inputs" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="form_inputs" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="form_inputs" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="form_inputs" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="form_inputs_next"><a href="#" aria-controls="form_inputs" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------
                              end Form Inputs
                          ---------------- -->
            </div>
        </div>
        <!-- row selection & deletion -->
        <div class="row">
            <div class="col-12">
                <!-- ---------------------
                              start Row selection and deletion (single row)
                          ---------------- -->
                <div class="card">
                    <div class="border-bottom title-part-padding">
                        <h4 class="card-title mb-0">
                            Row selection and deletion (single row)
                        </h4>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-3">
                            This example modifies the multiple row selection example by
                            only allowing the selection of a single row. This is done by
                            checking to see if the row already has a selected class, and
                            if so removing it, but if not then the class is removed from
                            all other rows in the table and then applied to the row
                            being selected.
                        </h6>
                        <button id="delete-row" class="btn btn-primary me-1">
                            <i class="ri-delete-bin-line fs-5 align-middle"></i> Delete
                            selected row
                        </button>
                        <div class="table-responsive mt-3">
                            <div id="sing_row_del_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="sing_row_del_length"><label>Show <select name="sing_row_del_length" aria-controls="sing_row_del" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="sing_row_del_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="sing_row_del"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="sing_row_del" class="table table-striped table-bordered display text-nowrap dataTable" style="width: 100%;" role="grid" aria-describedby="sing_row_del_info">
                                            <thead>
                                            <!-- start row -->
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="sing_row_del" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 190px;" aria-sort="ascending">Name</th><th class="sorting" tabindex="0" aria-controls="sing_row_del" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 291px;">Position</th><th class="sorting" tabindex="0" aria-controls="sing_row_del" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 141px;">Office</th><th class="sorting" tabindex="0" aria-controls="sing_row_del" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 61px;">Age</th><th class="sorting" tabindex="0" aria-controls="sing_row_del" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 126px;">Start date</th><th class="sorting" tabindex="0" aria-controls="sing_row_del" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 86px;">Salary</th></tr>
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
                                                <td class="sorting_1">Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr><tr role="row" class="odd">
                                                <td class="sorting_1">Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr><tr role="row" class="even">
                                                <td class="sorting_1">Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr></tbody>
                                            <tfoot>
                                            <!-- start row -->
                                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                            <!-- end row -->
                                            </tfoot>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="sing_row_del_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="sing_row_del_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="sing_row_del_previous"><a href="#" aria-controls="sing_row_del" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="sing_row_del" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="sing_row_del" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="sing_row_del" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="sing_row_del" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="sing_row_del" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item next" id="sing_row_del_next"><a href="#" aria-controls="sing_row_del" data-dt-idx="6" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------
                              end Row selection and deletion (single row)
                          ---------------- -->
            </div>
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End PAge Content -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- Right sidebar -->
        <!-- -------------------------------------------------------------- -->
        <!-- .right-sidebar -->
        <!-- -------------------------------------------------------------- -->
        <!-- End Right sidebar -->
        <!-- -------------------------------------------------------------- -->
    </div>
@endsection

{{--js--}}
@section('after-js')
    <!--This page JavaScript -->
    <script src="../../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../dist/js/pages/datatable/datatable-basic.init.js"></script>
@endsection


