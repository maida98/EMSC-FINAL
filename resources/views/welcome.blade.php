<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Comsats Event Management System</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    chat--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery.convform.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.convform.min,css">
    <link rel="stylesheet" type="text/css" href="css/demo.css">
{{--    chat end--}}

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
        hr
{
    background-color: #4C9EDC;
    border: 3px;
    color: #4C9EDC;
    height: 3px;
}
        /*chat live button*/

        #livechat-compact-container {
            height: 153px;
            position: fixed;
            right: 0;
            top: 200px;
            top: 30vh;
            z-index: 10000;
        }
        .btn-chat a {
            font-family: arial;
            color: #fff;
            text-decoration: none;
            background: #1798F7;
            padding: 24px 20px 8px;
            display: block;
            font-weight: bold;
            font-size: 14px;
            box-shadow: 0 0 0 1px #03b2ff inset;
            border: 1px solid #144866;
            border-radius: 2px;
            -ms-transform: rotate(90deg) translate(0, -20px);
            -webkit-transform: rotate(90deg) translate(0, -20px);
            transform: rotate(90deg) translate(0, -20px);
            position: relative;
            right: -27px;
            transition: background 0.2s, right 0.2s;
        }
        .btn-chat a:hover {
            background: #47B6F5;
            right: -20px;
            transition: background 0.2s, right 0.2s;
        }
        /*end*/

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
        #foot {
    background-color: #0c0c0c;
    padding: 10px;
  }


  .box {
      position: relative;
      width: 100%;
      padding-right: 15px;
      padding-left: 15px
  }

  .our-services {
      margin-top: 75px;
      padding-bottom: 30px;
      padding: 0 60px;
      min-height: 198px;
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

        /* ================================== */

    </style>

</head>

<body>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header mb-0 bgcol" style="background-image: linear-gradient(#54B6EB, #3351AB);">
            <div class="top-left" style="background-image: linear-gradient(#54B6EB, #3351AB);">
                <div class="navbar-header " style="background-image: linear-gradient(#54B6EB, #3351AB);">
                    <a class="mt-2" href="./"><img src="images/1.png" alt="Logo" height="44px" width="70px"><span style="font-size: larger;color:#FFFFFF">Event Management System</span></a>
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

                        @endif
                        @endauth
                    </div>
                </div>
            </div>
        </header>
        <!-- /#header -->



    </div>
    <!-- /#right-panel -->
    <div class="">


            @yield('content')

    </div>

    <div class="btn-chat" id="livechat-compact-container" style="visibility: visible; opacity: 1;">
        <div class="btn-holder">
            <a onclick="parent.LC_API.open_chat_window();return false;" href="#" class="link"
               data-toggle="modal" data-target="#exampleModalLong">Live Chat</a>

                {{--            start--}}

            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #3964B7;" >

                        <h3><span style="color:#FFFFFF">Event Management System</span>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button></h3>

                        </div>

                        <div class="modal-body">

                            <div class="card no-border">
                                <div id="chat" class="conv-form-wrapper">
                                    <form action="" method="GET" class="hidden">
                                        <select data-conv-question="Hello! I'm a bot created from  Comsats University Islamabad (Event Management Team). Can I show you some features? (this question comes from a select)" name="first-question">
                                            <option value="yes">Yes</option>
                                            <option value="sure">Sure!</option>
                                        </select>
                                        <input type="text" name="name" data-conv-question="Alright! First, tell me your full name, please.|Okay! Please, tell me your name first.">
                                        <input type="text" data-conv-question="Howdy, {name}:0! It's a pleasure to meet you. (note that this question doesn't expect any answer)" data-no-answer="true">

                                        <select name="multi[]" data-conv-question="What kind of game do you like?" multiple>
                                            <option value="Rock">Cricket</option>
                                            <option value="Pop">Football</option>
                                            <option value="Country">Hockey</option>
                                            <option value="Classic">Badminton</option>
                                        </select>
                                        <select name="programmer" data-callback="storeState" data-conv-question="Do you want to know about the latest event? ">
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                        <div data-conv-fork="programmer">
                                            <div data-conv-case="yes">
                                                <input type="text" data-conv-question="Latest event is Cricket going to be held in cricket ground" data-no-answer="true">
                                            </div>
                                            <div data-conv-case="no">
                                                <select name="thought" data-conv-question=" Thank you for messaging us">
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <input type="text" data-conv-question="convForm also supports regex patterns. Look:" data-no-answer="true">
                                        <input data-conv-question="Type in your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" id="email" type="email" name="email" required placeholder="What's your e-mail?">

                                        </select>
                                        <select data-conv-question="Please keep in touch with our website for more information. Thank you." id="">

                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>



                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>

            {{--            end--}}
        </div>
    </div>
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

    <!--Local Stuff-->
    <script>

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



    <script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="js/autosize.min.js"></script>
    <script type="text/javascript" src="js/jquery.convform.js"></script>

    <script>
        function google(stateWrapper, ready) {
            window.open("https://google.com");
            ready();
        }
        function bing(stateWrapper, ready) {
            window.open("https://bing.com");
            ready();
        }
        var rollbackTo = false;
        var originalState = false;
        function storeState(stateWrapper, ready) {
            rollbackTo = stateWrapper.current;
            console.log("storeState called: ",rollbackTo);
            ready();
        }
        function rollback(stateWrapper, ready) {
            console.log("rollback called: ", rollbackTo, originalState);
            console.log("answers at the time of user input: ", stateWrapper.answers);
            if(rollbackTo!=false) {
                if(originalState==false) {
                    originalState = stateWrapper.current.next;
                    console.log('stored original state');
                }
                stateWrapper.current.next = rollbackTo;
                console.log('changed current.next to rollbackTo');
            }
            ready();
        }
        function restore(stateWrapper, ready) {
            if(originalState != false) {
                stateWrapper.current.next = originalState;
                console.log('changed current.next to originalState');
            }
            ready();
        }
    </script>
    <script>
        jQuery(function($){
            convForm = $('#chat').convform({selectInputStyle: 'disable'});
            console.log(convForm);
        });
    </script>
</body>

</html>
