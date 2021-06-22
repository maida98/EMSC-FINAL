<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eventos - An Event Management System</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

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

    <!-- Styles -->
    <style>
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

        /* ================================== */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        hr
{
    background-color: #4C9EDC;
    border: 3px;
    color: #4C9EDC;
    height: 3px;
}

        /* ================================== */
    </style>

</head>

<body>
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header" style="background-image: linear-gradient(#54B6EB, #3351AB);">
        <div class="top-left">
            <div class="navbar-header" style="background-image: linear-gradient(#54B6EB, #3351AB);">
            <a class="navbar-brand" href="./"><img src="images/1.png" alt="Logo" height="40px" width="70px"><span style="font-size: larger;color:#FFFFFF">Event Management System</span></a>

            </div>
        </div>
        <div class="">
            <div class="header-menu">
                <div class="header-left">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="dropdown for-notification text-white">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="dropdown for-notification text-white">Login</i> </a>
                            {{-- <a href="{{ route('register') }}" class="dropdown for-notification ml-3 mr-3">register</i> </a> --}}
                        @endif
                    @endauth
                </div>
            </div>
    </header>
    <!-- /#header -->

    <div class="clearfix"></div>

</div>
<!-- /#right-panel -->
<div class="flex-center position-ref full-height">
    <div class="content">



        <!-- =================================Register form==================================== -->
        <div class="container">
            <div class="card">
                <div class="card-header text-white" style="background-color: #3964B7;">
                   <h3> <strong class="card-title">{{$event->title}}</strong></h3>
                </div>
                <div class="card-body">
                    <!-- Credit Card -->
                    <div class="row">

                        <div class="col-md-8 offset-2">
                            <div id="pay-invoice">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center"><b>PARTICIPATION FORM</b></h3>
                                    </div>
                                    <hr>
                                    <form action="{{route('addPart')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$event}}">
                                        <!-- <div class="form-group text-center">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i
                                                        class="text-muted fa fa-cc-visa fa-2x"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa fa-cc-mastercard fa-2x"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i>
                                                </li>
                                            </ul>
                                        </div> -->

                                        <div class="form-group has-success">
                                            <label for="cc-name" class="control-label mb-1">Student Name </label>
                                            <input id="cc-name" name="stdName" type="text"
                                                   class="form-control cc-name valid" data-val="true"
                                                   data-val-required="Please enter the name on card"
                                                   autocomplete="cc-name" aria-required="true" aria-invalid="false"
                                                   aria-describedby="cc-name" required>
                                            <span class="help-block field-validation-valid"
                                                  data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="cc-id" class="control-label mb-1">Student registration ID </label>
                                            <input id="cc-id" name="stdreg" type="text"
                                                   class="form-control cc-id valid" data-val="true"
                                                   data-val-required="Please enter the name on card"
                                                   autocomplete="cc-id" aria-required="true" aria-invalid="false"
                                                   aria-describedby="cc-id" required>
                                            <span class="help-block field-validation-valid" data-valmsg-for="cc-id"
                                                  data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Phone number</label>
                                            <input id="cc-number" name="phoneNo" type="tel"
                                                   class="form-control cc-number identified visa" value=""
                                                   data-val="true" data-val-required="Please enter the phone number"
                                                   data-val-cc-number="Please enter a valid phoen number" required>
                                            <span class="help-block" data-valmsg-for="cc-number"
                                                  data-valmsg-replace="true"></span>
                                        </div>

                                        <div>
                                            <button id="payment-button" type="submit"
                                                    class="btn btn-lg btn-info btn-block" name="eventId" value="{{$event->id}}">
                                                <i class="fa fa-check fa-lg"></i>&nbsp;
                                                <span id="payment-button-amount">REGISTER</span>
                                                <span id="payment-button-sending"
                                                      style="display:none;">Sending…</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div> <!-- .card -->

        </div>
    <!-- =================================END Register form==================================== --

    </div>
</div>
{{-- @foreach($societies as $society)
{{$society->title}}  {{$society->event}} <br>
<form action="{{route('viewPartForm')}}" method="post">
    @csrf
<button type="submit" value="{{$society->id}}">part</button>
</form>
@endforeach --}}

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
    jQuery(document).ready(function () {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
    jQuery(document).ready(function ($) {
        "use strict";

        // Pie chart flotPie1
        var piedata = [
            { label: "Desktop visits", data: [[1, 32]], color: '#5c6bc0' },
            { label: "Tab visits", data: [[1, 33]], color: '#ef5350' },
            { label: "Mobile visits", data: [[1, 35]], color: '#66bb6a' }
        ];

        $.plot('#flotPie1', piedata, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0.65,
                    label: {
                        show: true,
                        radius: 2 / 3,
                        threshold: 1
                    },
                    stroke: {
                        width: 0
                    }
                }
            },
            grid: {
                hoverable: true,
                clickable: true
            }
        });
        // Pie chart flotPie1  End
        // cellPaiChart
        var cellPaiChart = [
            { label: "Direct Sell", data: [[1, 65]], color: '#5b83de' },
            { label: "Channel Sell", data: [[1, 35]], color: '#00bfa5' }
        ];
        $.plot('#cellPaiChart', cellPaiChart, {
            series: {
                pie: {
                    show: true,
                    stroke: {
                        width: 0
                    }
                }
            },
            legend: {
                show: false
            }, grid: {
                hoverable: true,
                clickable: true
            }

        });
        // cellPaiChart End
        // Line Chart  #flotLine5
        var newCust = [[0, 3], [1, 5], [2, 4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

        var plot = $.plot($('#flotLine5'), [{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
        // Line Chart  #flotLine5 End
        // Traffic Chart using chartist
        if ($('#traffic-chart').length) {
            var chart = new Chartist.Line('#traffic-chart', {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                series: [
                    [0, 18000, 35000, 25000, 22000, 0],
                    [0, 33000, 15000, 20000, 15000, 300],
                    [0, 15000, 28000, 15000, 30000, 5000]
                ]
            }, {
                low: 0,
                showArea: true,
                showLine: false,
                showPoint: false,
                fullWidth: true,
                axisX: {
                    showGrid: true
                }
            });

            chart.on('draw', function (data) {
                if (data.type === 'line' || data.type === 'area') {
                    data.element.animate({
                        d: {
                            begin: 2000 * data.index,
                            dur: 2000,
                            from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                            to: data.path.clone().stringify(),
                            easing: Chartist.Svg.Easing.easeOutQuint
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
                type: 'line',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                    datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [0, 2900, 5000, 3300, 6000, 3250, 0]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [0, 4200, 4500, 1600, 4200, 1500, 4000]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0]
                        }
                    ]
                },
                options: {
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    }

                }
            });
        }
        //Traffic chart chart-js  End
        // Bar Chart #flotBarChart
        $.plot("#flotBarChart", [{
            data: [[0, 18], [2, 8], [4, 5], [6, 13], [8, 5], [10, 7], [12, 4], [14, 6], [16, 15], [18, 9], [20, 17], [22, 7], [24, 4], [26, 9], [28, 11]],
            bars: {
                show: true,
                lineWidth: 0,
                fillColor: '#ffffff8a'
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

</html>


>
