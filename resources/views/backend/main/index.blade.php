@extends('mainlayout.index')
@section('main')

        <div class="page-wrapper">
            <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body p-30">
                            <div class="d-flex pt-3 pb-2 no-block">
                                <div class="align-self-center mr-5 ml-4"><img src="assets/imgs/icon/note.svg" alt="" title="" width="55"></div>
                                <div class="align-slef-center mr-auto">
                                    <h2 class="m-b-2 text-uppercase font-30 font-medium lp-5 text-pink">458</h2>
                                    <h6 class="text-light m-b-0">Daily orders</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body p-30">
                            <div class="d-flex pt-3 pb-2 no-block">
                                <div class="align-self-center mr-5 ml-4"><img src="assets/imgs/icon/badge.svg" alt="" title="" width="55"></div>
                                <div class="align-slef-center mr-auto">
                                    <h2 class="m-b-2 text-uppercase font-30 font-medium lp-5 text-primary">$1 756</h2>
                                    <h6 class="text-light m-b-0">Daily sales</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body p-30">
                            <div class="d-flex pt-3 pb-2 no-block">
                                <div class="align-self-center mr-5 ml-4"><img src="assets/imgs/icon/users.svg" alt="" title="" width="55"></div>
                                <div class="align-slef-center mr-auto">
                                    <h2 class="m-b-2 text-uppercase font-30 font-medium lp-5 text-orange">21 067</h2>
                                    <h6 class="text-light m-b-0">Total users</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Column -->
            </div>
            <!-- ============================================================== -->
            <!-- End Info box -->
            <!-- chart box one -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-12 col-md-12">
                    <div class="card panel-main o-income panel-refresh">
                        <div class="refresh-container">
                            <div class="preloader">
                                <div class="loader">
                                    <div class="loader__figure"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body panel-wrapper">
                            <div class="d-flex m-b-10 no-block">
                                <h5 class="card-title m-b-0 align-self-center text-uppercase">activity</h5>
                                <div class="ml-auto">
                                    <ul class="list-inline m-b-30 text-uppercase lp-5 font-medium font-13">
                                        <li class="text-light-blue">Last year</li>
                                        <li class="text-light">Last month</li>
                                        <li class="text-light">Last week</li>
                                        <li class="text-light"><i class="flaticon-calendar"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline m-b-30 text-uppercase lp-5 font-medium font-14">
                                <li><i class="fa fa-square m-r-5 text-primary"></i> Sales</li>
                                <li><i class="fa fa-square m-r-5 text-pink"></i> Orders</li>
                                <li><i class="fa fa-square m-r-5 text-blue"></i> New visitors </li>
                            </ul>
                            <div id="extra-area-chart-last-week"></div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-6 col-md-12">
                    <div class="card panel-main o-income panel-refresh">
                        <div class="refresh-container">
                            <div class="preloader">
                                <div class="loader">
                                    <div class="loader__figure"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-body panel-wrapper">
                                <div class="d-flex m-b-10 no-block">
                                    <h5 class="card-title m-b-3 mt-3 align-self-center">Popular categories</h5>
                                    <div class="ml-auto text-light-blue mt-3"> <a href="#" class="pull-left text-light-blue inline-block refresh mr-15"> <i class="fas fa-sync"></i> Update </a> </div>
                                </div>
                                <div  id="slimtest4" style="height:460px;">
                                    <div class="table-responsive">
                                        <table class="table color-table m-b-0">
                                            <thead class="bg-transparent">
                                            <tr>
                                                <th>Customer</th>
                                                <th>Delivery type</th>
                                                <th>QTV</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold">Alice Brodwain</td>
                                                <td>American Express</td>
                                                <td>15</td>
                                                <td>$85</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card panel-main o-income panel-refresh">
                        <div class="refresh-container">
                            <div class="preloader">
                                <div class="loader">
                                    <div class="loader__figure"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-body panel-wrapper">
                                <div class="d-flex m-b-10 no-block">
                                    <h5 class="card-title m-b-3 mt-3  align-self-center">Top product sales</h5>
                                    <div class="ml-auto text-light-blue mt-3"> <a href="#" class="pull-left text-light-blue inline-block refresh mr-15"> <i class="fas fa-sync"></i> Update </a> </div>
                                </div>
                                <div  id="slimtest2" style="height:460px;">
                                    <div class="table-responsive">
                                        <div class="table-responsive">
                                            <table class="table color-table">
                                                <tbody>
                                                <tr>
                                                    <td ><img src="assets/imgs/pro.jpg" alt="" title=""></td>
                                                    <td>Notebook Asus Aspire <br>
                                                        $375</td>
                                                    <td><span class="font-24 text-primary">$9 375</span> <br>
                                                        25 sales</td>
                                                </tr>
                                                <tr>
                                                    <td ><img src="assets/imgs/pro2.jpg" alt="" title=""></td>
                                                    <td>Notebook Asus Aspire <br>
                                                        $375</td>
                                                    <td><span class="font-24 text-primary">$5 612</span><br>
                                                        25 sales</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/imgs/pro3.jpg" alt="" title=""></td>
                                                    <td>Notebook Asus Aspire <br>
                                                        $375</td>
                                                    <td><span class="font-24 text-primary">$3 800</span><br>
                                                        25 sales</td>
                                                </tr>
                                                <tr>
                                                    <td ><img src="assets/imgs/pro4.jpg" alt="" title=""></td>
                                                    <td>Notebook Asus Aspire <br>
                                                        $375</td>
                                                    <td><span class="font-24 text-primary">$3 024</span><br>
                                                        25 sales</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/imgs/pro5.jpg" alt="" title=""></td>
                                                    <td>Notebook Asus Aspire <br>
                                                        $375</td>
                                                    <td><span class="font-24 text-primary">$1 200</span><br>
                                                        25 sales</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- End chart box one -->
                <!-- chart box two -->
                <!-- ============================================================== -->
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <!-- Column -->
                <div class="col-lg-12 col-md-12">
                    <div class="card panel-main o-income panel-refresh">
                        <div class="refresh-container">
                            <div class="preloader">
                                <div class="loader">
                                    <div class="loader__figure"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body panel-wrapper">
                            <div class="d-flex m-b-10 no-block">
                                <h5 class="card-title m-b-0 align-self-center">Top 5 of customers countries</h5>
                                <div class="ml-auto text-light-blue"> <a href="#" class="pull-left text-light-blue inline-block refresh mr-15"> <i class="fas fa-sync"></i> Update </a> </div>
                            </div>
                            <ul class="list-inline m-t-30 m-b-20 weight-500 text-dark text-uppercase lp-5 font-medium font-12">
                                <li>1. Ukraine <span class="text-pink">29.5%</span></li>
                                <li>2. USA <span class="text-primary">29.5%</span></li>
                                <li>3. Canada <span class="text-warning">29.5%</span></li>
                                <li>4. Australia <span class="text-turqoise">29.5%</span></li>
                                <li>5. Russia <span class="text-purple">29.5%</span></li>
                            </ul>
                            <div id="world-map-markers" style="height: 400px"></div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>
    @endsection



