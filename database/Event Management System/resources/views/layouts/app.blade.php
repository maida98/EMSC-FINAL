<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Event managment system</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">
<!-- table css -->
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <!-- table css end -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <style>
    /* card */
    .box {
      position: relative;
      width: 100%;
      padding-right: 15px;
      padding-left: 15px
  }
.gra {
    background-image: linear-gradient(#F7BEEA, #AA92D4);
    color: white;
}
.gra1 {
    background-image: linear-gradient(#19C9E9,#2980b9);
    color: white;
}

.gra2 {
    background-image: linear-gradient(#08B48F, #92C442);
    color: white;
}
  .our-services {
      margin-top: 45px;
      padding-bottom: 30px;
      padding: 0 60px;
      min-height: 100px;
      text-align: center;
      border-radius: 10px;
      background-color: #fff;
      transition: all .4s ease-in-out;
      box-shadow: 0 0 25px 0 rgba(20, 27, 202, .17)
      
  }

  .our-services .icon {
      margin-bottom: -21px;
      transform: translateY(-50%);
      text-align: center
  }

  .our-services:hover h4,
  .our-services:hover p {

  }
    /* card end */
    /* card back */
    /* .card-back {
        background-image: linear-gradient( #fff,#34495e);
    } */
    /* card back end */
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }
hr
{
    background-color: #4C9EDC;
    border: 3px;
    color: #4C9EDC;
    height: 3px;
}
    </style>
</head>

<body>
    @auth
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel printHide" style="background-color: #4C9EDC;">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse" style="background-color: #4C9EDC;">
                <ul class="nav navbar-nav">
                    <li class="active" style="background-color: #3964B7;">
                        <a href="{{route('home')}}" class="text-white"><i class="menu-icon fa fa-laptop text-white"></i>Dashboard </a>
                    </li>
                    

                    <!-- /.menu-title -->
                    <!-- <li class="menu-title">Icons</li> -->

                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font
                                    Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a>
                            </li>
                        </ul>
                    </li> -->
                    @role('society_head')
                    <li>
                        <a href="{{route('view')}}" class="text-white"> <i class="menu-icon ti-plus text-white"></i>Add Event </a>
                    </li>
                    <li>
                        <a href="{{route('eventList')}}" class="text-white"> <i class="menu-icon ti-eye text-white"></i>View Events</a>
                    </li>
                    <li>
                        <a href="{{route('demandList')}}" class="text-white"> <i class="menu-icon ti-list text-white"></i> Demand Lists </a>
                    </li>
                    <li>
                        <a href="{{ route('organiserList') }}" class="text-white"> <i class="menu-icon ti-list text-white"></i> Organizers List </a>
                    </li>
                    <li>
                        <a href="{{ route('societiesList') }}" class="text-white"> <i class="menu-icon ti-list text-white"></i> Societies List </a>
                    </li>
                    @endrole
                    @role('student_affairs')
                    <li>
                        <a href="{{route('eventList')}}" class="text-white"> <i class="menu-icon ti-eye text-white"></i>View Events</a>
                    </li>
                    <li>
                        <a href="{{route('demandList')}}" class="text-white"> <i class="menu-icon ti-list text-white"></i> Demand Lists </a>
                    </li>
                    <li>
                        <a href="{{ route('organiserList') }}" class="text-white"> <i class="menu-icon ti-list text-white"></i> Organizers List </a>
                    </li>
                    <li>
                        <a href="{{ route('societiesList') }}" class="text-white"> <i class="menu-icon ti-list text-white"></i> Societies List </a>
                    </li>
                    @endrole
                    @role('organiser')
                    <li>
                        <a href="{{ route('demandList') }}" class="text-white"> <i class="menu-icon ti-list text-white"></i>Demand List </a>
                    </li>
                    <li>
                        <a href="{{ route('participantsList') }}" class="text-white"> <i class="menu-icon ti-list text-white"></i>Participants </a>
                    </li>
                    @endrole

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    @endauth
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel bg-white " >
        <!-- Header-->
        <header id="header" class="header printHide" style="background-image: linear-gradient(#54B6EB, #3351AB);">
            <div class="top-left " style="background-image: linear-gradient(#54B6EB, #3351AB);">
            
                <div class="navbar-header" style="background-image: linear-gradient(#54B6EB, #3351AB);">
                
                    <a class="navbar-brand" href="./"><img src="images/1.png" alt="Logo" height="40px" width="70px"><span style="font-size: larger;color:#FFFFFF">Event Management System</span></a>
                            <!--  <a class="mt-2" </a> -->
                            
                </div>
               
            </div>
            <!-- <div class="top-right">
                <div class="header-menu">


                    @auth
                        @foreach(auth()->user()->notifications as $notification)
                        <p>{{$notification}}</p>
                        @endforeach

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 50%;width: 40px;height: 40px; margin :
                            20%;">
                            <strong><i class="ti-user" style="color: brown;"></i></strong>
                        </a>


                        <div class="user-menu dropdown-menu">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                    @endauth
                </div>
            </div> -->
            <div class="top-right" style="background-image: linear-gradient(#54B6EB, #3351AB);">
                <div class="header-menu" >
                    <div class="header-left">
                        @auth




                        <div class="dropdown for-notification" style="background-image: linear-gradient(#54B6EB, #3351AB);">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell text-white"></i>
                                <span class="count bg-danger">{{auth()->user()->notifications()->count()}}</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification"
                                style="overflow-y: scroll;height: 50vh">
                                <p class="red">You have {{auth()->user()->notifications()->count()}} Notification</p>
                                @foreach(auth()->user()->notifications as $notification)
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <div class="">
                                        <p style="text-transform: uppercase;"><b>{{$notification->data['event']}}</b>
                                        </p>
                                        <p>{{$notification->data['message']}}</p>
                                        <hr>
                                    </div>
                                </a>
                                @endforeach
                                <!-- <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a> -->
                            </div>
                        </div>


                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/men.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"><i
                                    class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">

            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>

    </div>
    <!-- /#right-panel -->
    <!-- my script -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <!-- dshjk -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>
    <!--Local Stuff-->
    <script>
 
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10
                , no_results_text: "Oops, nothing found!"
                , width: "100%"
            });
        });
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [{
                    label: "Desktop visits"
                    , data: [
                        [1, 32]
                    ]
                    , color: '#5c6bc0'
                }
                , {
                    label: "Tab visits"
                    , data: [
                        [1, 33]
                    ]
                    , color: '#ef5350'
                }
                , {
                    label: "Mobile visits"
                    , data: [
                        [1, 35]
                    ]
                    , color: '#66bb6a'
                }
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true
                        , radius: 1
                        , innerRadius: 0.65
                        , label: {
                            show: true
                            , radius: 2 / 3
                            , threshold: 1
                        }
                        , stroke: {
                            width: 0
                        }
                    }
                }
                , grid: {
                    hoverable: true
                    , clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [{
                    label: "Direct Sell"
                    , data: [
                        [1, 65]
                    ]
                    , color: '#5b83de'
                }
                , {
                    label: "Channel Sell"
                    , data: [
                        [1, 35]
                    ]
                    , color: '#00bfa5'
                }
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true
                        , stroke: {
                            width: 0
                        }
                    }
                }
                , legend: {
                    show: false
                }
                , grid: {
                    hoverable: true
                    , clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [
                [0, 3]
                , [1, 5]
                , [2, 4]
                , [3, 7]
                , [4, 9]
                , [5, 3]
                , [6, 6]
                , [7, 4]
                , [8, 10]
            ];

            var plot = $.plot($('#flotLine5'), [{
                data: newCust
                , label: 'New Data Flow'
                , color: '#fff'
            }], {
                series: {
                    lines: {
                        show: true
                        , lineColor: '#fff'
                        , lineWidth: 2
                    }
                    , points: {
                        show: true
                        , fill: true
                        , fillColor: "#ffffff"
                        , symbol: "circle"
                        , radius: 3
                    }
                    , shadowSize: 0
                }
                , points: {
                    show: true
                , }
                , legend: {
                    show: false
                }
                , grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
                    , series: [
                        [0, 18000, 35000, 25000, 22000, 0]
                        , [0, 33000, 15000, 20000, 15000, 300]
                        , [0, 15000, 28000, 15000, 30000, 5000]
                    ]
                }, {
                    low: 0
                    , showArea: true
                    , showLine: false
                    , showPoint: false
                    , fullWidth: true
                    , axisX: {
                        showGrid: true
                    }
                });

                chart.on('draw', function(data) {
                    if (data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index
                                , dur: 2000
                                , from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify()
                                , to: data.path.clone().stringify()
                                , easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById("TrafficChart");
                ctx.height = 150;
                var myChart = new Chart(ctx, {
                    type: 'line'
                    , data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"]
                        , datasets: [{
                                label: "Visit"
                                , borderColor: "rgba(4, 73, 203,.09)"
                                , borderWidth: "1"
                                , backgroundColor: "rgba(4, 73, 203,.5)"
                                , data: [0, 2900, 5000, 3300, 6000, 3250, 0]
                            }
                            , {
                                label: "Bounce"
                                , borderColor: "rgba(245, 23, 66, 0.9)"
                                , borderWidth: "1"
                                , backgroundColor: "rgba(245, 23, 66,.5)"
                                , pointHighlightStroke: "rgba(245, 23, 66,.5)"
                                , data: [0, 4200, 4500, 1600, 4200, 1500, 4000]
                            }
                            , {
                                label: "Targeted"
                                , borderColor: "rgba(40, 169, 46, 0.9)"
                                , borderWidth: "1"
                                , backgroundColor: "rgba(40, 169, 46, .5)"
                                , pointHighlightStroke: "rgba(40, 169, 46,.5)"
                                , data: [1000, 5200, 3600, 2600, 4200, 5300, 0]
                            }
                        ]
                    }
                    , options: {
                        responsive: true
                        , tooltips: {
                            mode: 'index'
                            , intersect: false
                        }
                        , hover: {
                            mode: 'nearest'
                            , intersect: true
                        }

                    }
                });
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [
                    [0, 18]
                    , [2, 8]
                    , [4, 5]
                    , [6, 13]
                    , [8, 5]
                    , [10, 7]
                    , [12, 4]
                    , [14, 6]
                    , [16, 15]
                    , [18, 9]
                    , [20, 17]
                    , [22, 7]
                    , [24, 4]
                    , [26, 9]
                    , [28, 11]
                ]
                , bars: {
                    show: true
                    , lineWidth: 0
                    , fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });

    </script>
    
</body>


<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>


</html>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script> -->