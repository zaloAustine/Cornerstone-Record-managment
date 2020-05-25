@extends('layouts.app')

@section('content')
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="assets/img/logo-small.png">
                    </div>
                    <!-- <p>CT</p> -->
                </a>
                <a href="" class="simple-text logo-normal">
                    Zalo@Coders
                    <!-- <div class="logo-image-big">
                      <img src="../assets/img/logo-big.png">
                    </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="{{route('home')}}">
                            <i class="nc-icon nc-bank"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('sermons')}}">
                            <i class="nc-icon nc-diamond"></i>
                            <p>Sermons</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('events')}}">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Events</p>
                        </a>
                    </li>
                    <li>

                        <a href="{{route('records')}}">
                            <i class="nc-icon nc-money-coins"></i>
                            <p>Payment Records</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                </div>
            </nav>

            <div class="content">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-globe text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Total Amount Collected</p>
                                            <p class="card-title">{{$sum}}<p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-refresh"></i>
                                    Update
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5 col-md-4">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-globe text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Total Tithe Collected</p>
                                            <p class="card-title">{{$tithe}}<p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-refresh"></i>
                                    Update
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5 col-md-4">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-globe text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Total Combined Offering Collected</p>
                                            <p class="card-title">{{$offeringCombined}}<p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-refresh"></i>
                                    Update
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!DOCTYPE html>
            <html lang="en-US">
            <body>


            <h2 class="text-center">Graph Summary of members giving</h2>

            <div id="piechart"></div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <script type="text/javascript">
                // Load google charts
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                // Draw the chart and set the chart values
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Giving', 'Amount'],
                        ['Gods Tithe', 200],
                        ['Combine Offering', 800],
                        ['Development', 600],
                        ['Mission', 2500],
                        ['Youth Kitty', 850],
                        ['Building Development', 700],
                        ['Combine Offering', 300],
                        ['Evangelism Local Church', 650],
                        ['Evangelism Conference', 920],
                        ['Recurrent Expenditure', 85],
                        ['Station Dvelopment', 890],
                        ['Camp meeting Expenses', 250],
                        ['Camp meeting Offering', 860],
                        ['Benevolence', 670],
                        ['Children Kitty', 2600],
                    ]);


                    // Optional; add a title and set the width and height of the chart
                    var options = {'title':'Memebers Giving ', 'width':1000, 'height':500,is3D:true};

                    // Display the chart inside the <div> element with id="piechart"
                    var chart = new google.visualization.ColumnChart(document.getElementById('piechart'));
                    chart.draw(data, options);
                }

            </script>


            <div id="piechart" style="width: 900px; height: 500px;"></div>


            </body>
            </html>







            <footer class="footer footer-black  footer-white ">
                <div class="container-fluid">
                    <div class="row">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
                            </ul>
                        </nav>
                        <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, EasyTech<i class="fa fa-heart heart"></i> Developers
              </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

@endsection
