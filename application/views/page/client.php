<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/home.png">
    <title>happyscope</title>
    
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/style_client.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> 
    
    <!--  Datatables  -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.bootstrap.min.css"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>

<body>
<!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
            <div class="container">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="" alt=""><span><?php echo $nama; ?></span>
                        <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="#">Contract</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li><a href="<?php echo base_url();?>login/do_logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">3</span>
                    </a>
                        <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                            <li>
                                <a>
                                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                                        <span>John Smith</span>
                                        <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                                        <span>John Smith</span>
                                        <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                                        <span>John Smith</span>
                                        <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                </a>
                            </li>
                            <li>
                                <div class="text-center">
                                    <a>
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="clearfix"></div>
        <div style="margin-top: 48px; margin-bottom: 48px" class="col-md-12">
            <div style="font-size: 23px; font-family: 'Open Sans', sans-serif;">
                Hi, <b><?php echo $nama; ?></b>
            </div>
            <div style="font-size: 23px; font-family: 'Open Sans', sans-serif;">
                Welcome to <span style="color: rgb(76,141,53); font-weight: bold;">Happyscope</span>
            </div>
            <br/>
            <br/>
        <div/>
        <!-- Menampilkan chart per hari selama seminggu terakhir -->
        <div class="col-md-12" style="padding-left: 0; padding-right: 0;">
            <div class="x_panel" style="background: rgba(0, 0, 0, .05);">
                <div class="x_content">
                    <!-- <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                    <br/><br/> -->
                    <div id="echart_line" style="height:350px;">Daily Charts</div>
                </div>
            </div>
        </div>
        

        <style type="text/css">
            .input-date{
                border: solid 1px rgba(0, 0, 0, .5);
            }
            #div_from{
                padding-right: 0 !important;
            }
            #div_to{
                padding-left: 1;
                padding-right: 0 !important;
            }
        </style>




        <div style="margin-top: 48px;margin-left: 0 !important; padding-left: 0 !important" class="col-md-12">
            <div style="font-size: 23px; font-family: 'Open Sans', sans-serif;">
                Find your data below!
            </div>
            <br/>
            <br/>
        </div>

        <!-- Menampilkan pilihan tampilan sesuai pilihan (hari ini, kemarin, seminggu kemarin, sebulan kemarin) -->
        <!-- Di dalam kotak ini, nilainya akan berubah sesuai pemilihan -->
        <!-- NB : Masih ada conflict jQuery -->
        <div class="x_panel" style="padding-top: 30px;background: rgba(0, 0, 0, .05); margin-top: -12px;"> 
            <div class="col-md-3" id="div_from">  
                 <input type="text" name="from_date" id="from_date" class="form-control input-date" placeholder="Choose from date"
                 style="border: solid 1px rgba(0, 0, 0, .2)" />  
            </div>  
            <div class="col-md-3" id="div_to">  
                 <input type="text" name="to_date" id="to_date" class="form-control input-date" placeholder="Choose to date"
                 style="border: solid 1px rgba(0, 0, 0, .2)" />  
            </div> 
            <div class="col-md-4">  
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" style="color: white; background: rgba(0, 0, 0, .5);">Filter
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu" id="dropdown-age">
                        <li class="dropdown-header" style="font-size:1.3em;">Ages</li>
                        <li>
                            <div class="form-check" style="padding: 0px 20px;">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="age-radio" id="exampleRadios1" value="age-all" checked>&nbsp;&nbsp;All
                                </label>
                            </div>
                        </li>
                        <li id="age-range">
                            <div class="form-check" style="padding: 0px 20px;">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="age-radio" id="exampleRadios2" value="age-range">
                                </label>
                                &nbsp;&nbsp;<input id="age-range-min" type="number" name="quantity" min="17" max="100"> s.d. <input id="age-range-max" type="number" name="quantity" min="17" max="100"><br>
                            </div>
                        </li>
                        
                        <li class="divider"></li>
                        
                        <li class="dropdown-header" style="font-size:1.3em;">Gender</li>
                        <li>
                            <div class="checkbox">
                                <label><input type="checkbox" id="filter-male" value="" checked>Male</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <label><input type="checkbox" id="filter-female" value="" checked>Female</label>
                            </div>
                        </li>
                    </ul>
                </div>  
            </div> 
            <div class="col-md-2">  
                 <input type="button button-primar" name="filter" id="filter" value="Find!" class="btn button-primary" style="position: absolute; right: 15px; color: white; background: rgb(76,141,53)" />  
            </div>  
            <div style="clear:both"></div>   
            
            
            
            <div class="col-md-12">&nbsp;</div>
            <div class="col-md-12">
                <div class="x_panel" style=" border: none; border-radius: 8px">
                    <div class="x_content">
                        <div id="desc_chart" style="position: absolute; left: 0; width: 100%; text-align: center; top: 165px; font-size: 20px; font-family: 'Open Sans', sans-serif; color: rgb(76,141,53)">
                            Your chart will be shown here!
                        </div>
                        <div id="mainb" style="height:350px;"></div>
                    </div>
                </div>
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a data-toggle="tab" href="#home">Happy</a></li>
                    <li><a data-toggle="tab" href="#menuX">Normal</a></li>
                    <li><a data-toggle="tab" href="#menu2">Angry</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="col-md-12 col-sm-12 col-xs-12" style="overflow: auto; max-height:80vh;" id="table_image_audio_m2_happy"></div>
                        <table id="example" class="table table-striped table-bordered" style="width:100%"></table>
                    </div>
                    <div id="menuX" class="tab-pane fade">
                        <div class="col-md-12 col-sm-12 col-xs-12" style="overflow: auto; max-height:80vh;" id="table_image_audio_m2_normal"></div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="col-md-12 col-sm-12 col-xs-12" style="overflow: auto; max-height:80vh;" id="table_image_audio_m2_angry"></div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12" style="overflow: auto; max-height:80vh;" id="table_image_audio_m2"></div>
            </div>
            <div class="col-md-12 text-danger" style="font-size: 1.2em; font-family: 'Open Sans', sans-serif; padding: 24px">
                <center id="select_data">Select your data first!</center>
            </div>
            
        </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <div class="footer">
        <div class="col-lg-12 text-center">
            <p>happyscope @ 2017. ENIGMA TEKNO SOLUSI</p>
        </div>
    </div><!--/row -->
    <!-- /footer content -->

    <!-- jQuery -->
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ECharts -->
    <script src="assets/vendors/echarts/dist/echarts.min.js"></script>
    <!-- Custom Theme Scripts -->
    

    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     
    <!--  Datatables  -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js" type="text/javascript"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
   
   
    <script>  
        window.onload = function () {

            var dps = []; // dataPoints
            var dps2 = []; // dataPoints
            var dps3 = []; // dataPoints
            var chart = new CanvasJS.Chart("chartContainer", {
                exportEnabled: true,
                animationEnabled: true,
                title :{
                    text: "Live Happyscope Data"
                },
                axisY: {
                    includeZero: true
                },
                data: [{
                    type: "spline",
                    dataPoints: dps,
                    xValueType: "dateTime",
                    xValueFormatString: "hh:mm:ss TT"
                },{
                    type: "spline",
                    dataPoints: dps2,
                    xValueType: "dateTime",
                    xValueFormatString: "hh:mm:ss TT"
                },{
                    type: "spline",
                    dataPoints: dps3,
                    xValueType: "dateTime",
                    xValueFormatString: "hh:mm:ss TT"
                }]
            });

            var xVal = 0;
            var yVal = 100; 
            var xVal2 = 0;
            var yVal2 = 100; 
            var xVal3 = 0;
            var yVal3 = 100; 
            var updateInterval = 1000;
            var dataLength = 20; // number of dataPoints visible at any point

            // var updateChart = function (count) {
            //     d = new Date();

            //     count = count || 1;

            //     for (var j = 0; j < count; j++) {
            //         yVal = yVal +  Math.round(5 + Math.random() *(-5-5));
            //         yVal2 = yVal2 +  Math.round(5 + Math.random() *(-5-5));
            //         yVal3 = yVal3 +  Math.round(5 + Math.random() *(-5-5));
            //         dps.push({
            //             x: d.getTime(),
            //             y: yVal
            //         });
            //         dps2.push({
            //             x: d.getTime(),
            //             y: yVal2
            //         });
            //         dps3.push({
            //             x: d.getTime(),
            //             y: yVal3
            //         });
            //         xVal++;
            //         xVal2++;
            //         xVal3++;
            //     }

            //     if (dps.length > dataLength) {
            //         dps.shift();
            //     }
            //     if (dps2.length > dataLength) {
            //         dps2.shift();
            //     }
            //     if (dps3.length > dataLength) {
            //         dps3.shift();
            //     }

            //     chart.render();
            // };

            // updateChart(dataLength);
            // setInterval(function(){updateChart()}, updateInterval);

        }

        var filterParam = {};
        var CONST_AGE_RANGE = "age-range";
        var CONST_AGE_ALL = "age-all";
        var CONST_AGE_RADIO = "age-radio";

        (() => {
            filterParam.datax = $('#dropdown-age input[name=' + CONST_AGE_RADIO + ']:checked').val();
            filterParam.minAge = $('#age-range-min').val();
            filterParam.maxAge = $('#age-range-max').val();
            filterParam.filterFemale = $('#filter-female:checked').val() != undefined;
            filterParam.filterMale = $('#filter-male:checked').val() != undefined;
        })();

        $('#age-range-min').click(() => {
            $('#dropdown-age input').filter('[value=' + CONST_AGE_RANGE + ']').prop('checked', true);
        })
        $('#age-range-max').click(() => {
            $('#dropdown-age input').filter('[value=' + CONST_AGE_RANGE + ']').prop('checked', true);
        })
        $('#dropdown-age li').click(() => {
            filterParam.datax = $('#dropdown-age input[name=' + CONST_AGE_RADIO + ']:checked').val();
            filterParam.minAge = $('#age-range-min').val();
            filterParam.maxAge = $('#age-range-max').val();
            filterParam.filterFemale = $('#filter-female:checked').val() != undefined;
            filterParam.filterMale = $('#filter-male:checked').val() != undefined;
        });

        var dataSet1 = [];
        var showData1 = () => {
            var table = $('#example').DataTable( {
                data: dataSet1,
                columns: [
                    { title: "Image" },
                    { title: "Audio" }
                ],
                bDestroy: true,
                buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
            } );

            table.buttons().container()
                .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
        };

        var allData = <?php echo $data; ?>;
        console.log(allData);

        // from date to date
        function getDataFromRangeDate(a, b, paramFilter){
            // Init global
            var totalHappy = [];
            var totalNormal = [];
            var totalAngry = [];
            var filesx = {
                happy: [],
                normal: [],
                angry: []
            }
            for(var i = 0; i < 2; i++){
                totalHappy[i] = 0;
                totalNormal[i] = 0;
                totalAngry[i] = 0;
            }
            // Classify all data
            for(x in allData.happyscope){
                var insDataX = allData.happyscope[x];
                var date = insDataX.timestamp * 1000;
                if(a < date && date < b){
                    console.log(a, b, date);
                    totalSementaraHappy = 0;
                    totalSementaraNormal = 0;
                    totalSementaraAngry = 0;
                    for(y in insDataX.face_data){
                        var insDataY = insDataX.face_data[y];
                        var gender = insDataY.gender.gender;
                        var age = insDataY.age.age;
                        var genderIndex = gender == "Male" ? 1 : 0;
                        var happy = insDataY.expression.happiness;
                        var normal = insDataY.expression.neutral;
                        var angry = insDataY.expression.anger;

                        if(paramFilter.datax == CONST_AGE_RANGE && !(paramFilter.minAge < age && age < paramFilter.maxAge)){
                            // console.log("1");
                            continue;
                        }

                        if(!paramFilter.filterMale && !paramFilter.filterFemale){
                            // console.log("2");
                            continue;
                        }

                        if(paramFilter.filterMale && !paramFilter.filterFemale && genderIndex != 1){
                            // console.log("3");
                            continue;
                        }

                        if(!paramFilter.filterMale && paramFilter.filterFemale && genderIndex == 1){
                            // console.log("4");
                            continue;
                        }

                        // console.log("5");

                        totalSementaraHappy += happy;
                        totalSementaraNormal += normal;
                        totalSementaraAngry += angry;

                        totalHappy[genderIndex] += happy;
                        totalNormal[genderIndex] += normal;
                        totalAngry[genderIndex] += angry;
                    }

                    moment.locale('id');
                    if(insDataX.status_audio){
                        if(totalSementaraHappy > totalSementaraAngry && totalSementaraHappy > totalSementaraNormal)
                            filesx.happy.push({
                                'image': insDataX.status_image ? insDataX.image : null,
                                'audio': insDataX.status_audio ? insDataX.audio : null,
                                'ts': insDataX.timestamp,
                                'date': moment(new Date(insDataX.timestamp * 1000)).format('DD MMMM YYYY HH:mm:ss')
                            });
                        else if (totalSementaraAngry > totalSementaraHappy && totalSementaraAngry > totalSementaraNormal) {
                            filesx.angry.push({
                                'image': insDataX.status_image ? insDataX.image : null,
                                'audio': insDataX.status_audio ? insDataX.audio : null,
                                'ts': insDataX.timestamp,
                                'date': moment(new Date(insDataX.timestamp * 1000)).format('DD MMMM YYYY HH:mm:ss')
                            });
                        }else{
                            filesx.normal.push({
                                'image': insDataX.status_image ? insDataX.image : null,
                                'audio': insDataX.status_audio ? insDataX.audio : null,
                                'ts': insDataX.timestamp,
                                'date': moment(new Date(insDataX.timestamp * 1000)).format('DD MMMM YYYY HH:mm:ss')
                            });
                        }
                    }
                }
            }
            var female = [totalHappy[0], totalNormal[0], totalAngry[0]];
            var male = [totalHappy[1], totalNormal[1], totalAngry[1]];
            return {
                'male': male,
                'female': female,
                'files': filesx
            }
        }

        $(document).ready(function(){
            var nowTime = new Date();
            // Init global
            var totalHappy = [];
            var totalNormal = [];
            var totalAngry = [];
            for(var i = 0; i < 7; i++){
                totalHappy[i] = 0;
                totalNormal[i] = 0;
                totalAngry[i] = 0;
            }
            // Classify all data
            for(x in allData.happyscope){
                var insDataX = allData.happyscope[x];
                var date = new Date(insDataX.timestamp * 1000);
                for(y in insDataX.face_data){
                    var insDataY = insDataX.face_data[y];
                    var happy = insDataY.expression.happiness;
                    var normal = insDataY.expression.neutral;
                    var angry = insDataY.expression.anger;
                    totalHappy[date.getDay()] += happy;
                    totalNormal[date.getDay()] += normal;
                    totalAngry[date.getDay()] += angry;
                }
            }
            console.log(totalHappy + " " + totalNormal + " " + totalAngry);
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });

           function filterClicekd(dateA, dateB){
                var from_date = dateA;
                var to_date = dateB;
                if(from_date != '' && to_date != '')  
                {  
                    var aDate = new Date(from_date).getTime();
                    var bDate = new Date(to_date).getTime();
                    var data = getDataFromRangeDate(aDate, bDate, filterParam);
                    console.log(new Date(aDate), new Date(bDate), data);
                    showMelFemaleChart(data['male'], data['female']);
                    console.log(data['files']);
                    showMelFemaleDataFiles(data['files']);
                    $('#select_data').hide();
                    $('#desc_chart').hide();
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           }
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                filterClicekd(from_date, to_date);
           });

           if ($('#echart_line').length ){ 
              var theme = {
                  color: [
                      '#26B99A', '#BDC3C7', '#FF0000',
//                    '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
//                    '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
                  ],
                  title: {
                      itemGap: 8,
                      textStyle: {
                          fontWeight: 'normal',
                          color: '#408829'
                      }
                  },
                  dataRange: {
                      color: ['#1f610a', '#97b58d']
                  },
                  toolbox: {
                      color: ['#408829', '#408829', '#408829', '#408829']
                  },
                  tooltip: {
                      backgroundColor: 'rgba(0,0,0,0.5)',
                      axisPointer: {
                          type: 'line',
                          lineStyle: {
                              color: '#408829',
                              type: 'dashed'
                          },
                          crossStyle: {
                              color: '#408829'
                          },
                          shadowStyle: {
                              color: 'rgba(200,200,200,0.3)'
                          }
                      }
                  },
                  dataZoom: {
                      dataBackgroundColor: '#eee',
                      fillerColor: 'rgba(64,136,41,0.2)',
                      handleColor: '#408829'
                  },
                  grid: {
                      borderWidth: 0
                  },
                  categoryAxis: {
                      axisLine: {
                          lineStyle: {
                              color: '#408829'
                          }
                      },
                      splitLine: {
                          lineStyle: {
                              color: ['#eee']
                          }
                      }
                  },
                  valueAxis: {
                      axisLine: {
                          lineStyle: {
                              color: '#408829'
                          }
                      },
                      splitArea: {
                          show: true,
                          areaStyle: {
                              color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                          }
                      },
                      splitLine: {
                          lineStyle: {
                              color: ['#eee']
                          }
                      }
                  },
                  timeline: {
                      lineStyle: {
                          color: '#408829'
                      },
                      controlStyle: {
                          normal: {color: '#408829'},
                          emphasis: {color: '#408829'}
                      }
                  },
                  k: {
                      itemStyle: {
                          normal: {
                              color: '#68a54a',
                              color0: '#a9cba2',
                              lineStyle: {
                                  width: 1,
                                  color: '#408829',
                                  color0: '#86b379'
                              }
                          }
                      }
                  },
                  map: {
                      itemStyle: {
                          normal: {
                              areaStyle: {
                                  color: '#ddd'
                              },
                              label: {
                                  textStyle: {
                                      color: '#c12e34'
                                  }
                              }
                          },
                          emphasis: {
                              areaStyle: {
                                  color: '#99d2dd'
                              },
                              label: {
                                  textStyle: {
                                      color: '#c12e34'
                                  }
                              }
                          }
                      }
                  },
                  force: {
                      itemStyle: {
                          normal: {
                              linkStyle: {
                                  strokeColor: '#408829'
                              }
                          }
                      }
                  },
                  chord: {
                      padding: 4,
                      itemStyle: {
                          normal: {
                              lineStyle: {
                                  width: 1,
                                  color: 'rgba(128, 128, 128, 0.5)'
                              },
                              chordStyle: {
                                  lineStyle: {
                                      width: 1,
                                      color: 'rgba(128, 128, 128, 0.5)'
                                  }
                              }
                          },
                          emphasis: {
                              lineStyle: {
                                  width: 1,
                                  color: 'rgba(128, 128, 128, 0.5)'
                              },
                              chordStyle: {
                                  lineStyle: {
                                      width: 1,
                                      color: 'rgba(128, 128, 128, 0.5)'
                                  }
                              }
                          }
                      }
                  },
                  gauge: {
                      startAngle: 225,
                      endAngle: -45,
                      axisLine: {
                          show: true,
                          lineStyle: {
                              color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                              width: 8
                          }
                      },
                      axisTick: {
                          splitNumber: 10,
                          length: 12,
                          lineStyle: {
                              color: 'auto'
                          }
                      },
                      axisLabel: {
                          textStyle: {
                              color: 'auto'
                          }
                      },
                      splitLine: {
                          length: 18,
                          lineStyle: {
                              color: 'auto'
                          }
                      },
                      pointer: {
                          length: '90%',
                          color: 'auto'
                      },
                      title: {
                          textStyle: {
                              color: '#333'
                          }
                      },
                      detail: {
                          textStyle: {
                              color: 'auto'
                          }
                      }
                  },
                  textStyle: {
                      fontFamily: 'Arial, Verdana, sans-serif'
                  }
              };
              var echartLine = echarts.init(document.getElementById('echart_line'), theme);
              echartLine.setOption({
                title: {
                  text: 'Chart Per hari',
                  subtext: 'Man & Woman'
                },
                tooltip: {
                  trigger: 'axis'
                },
                legend: {
                  x: 220,
                  y: 40,
                  data: ['Happy', 'Normal', 'Angry']
                },
                toolbox: {
                  show: true,
                  feature: {
                    magicType: {
                      show: true,
                      title: {
                        line: 'Line',
                        bar: 'Bar',
                        stack: 'Stack',
                        tiled: 'Tiled'
                      },
                      type: ['line', 'bar', 'stack', 'tiled']
                    },
                    restore: {
                      show: true,
                      title: "Restore"
                    },
                    saveAsImage: {
                      show: true,
                      title: "Save Image"
                    }
                  }
                },
                calculable: true,
                xAxis: [{
                  type: 'category',
                  boundaryGap: false,
                  data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                }],
                yAxis: [{
                  type: 'value'
                }],
                series: [{
                  name: 'Happy',
                  type: 'line',
                  smooth: true,
                  itemStyle: {
                    normal: {
                      areaStyle: {
                        type: 'default'
                      }
                    }
                  },
                  data: totalHappy
                }, {
                  name: 'Normal',
                  type: 'line',
                  smooth: true,
                  itemStyle: {
                    normal: {
                      areaStyle: {
                        type: 'default'
                      }
                    }
                  },
                  data: totalNormal
                }, {
                  name: 'Angry',
                  type: 'line',
                  smooth: true,
                  itemStyle: {
                    normal: {
                      areaStyle: {
                        type: 'default'
                      }
                    }
                  },
                  data: totalAngry
                }]
              });
            } 

            function showMelFemaleDataFiles(files){

                var counterZ = 0;
                // console.log(files);
                // return;
                $('#table_image_audio_m2_happy').html("");
                $('#table_image_audio_m2_normal').html("");
                $('#table_image_audio_m2_angry').html("");
                var base_url_public = "http://happyscope.co:3002";
                $('#table_image_audio_m2_happy').append("<br/>");
                if(files.happy.length == 0)
                    $('#table_image_audio_m2_happy').append("tidak ada berkas <br/> <br/> <br/>")
                files.happy.forEach(function(data){
                    dataSet1.push({
                        image: base_url_public + '/public/' + data.image,
                        audio: base_url_public + '/public/' + data.audio
                    });
                    $('#table_image_audio_m2_happy').append('\
                        <tr>\
                          <td><a href="' + base_url_public + '/public/' + data.image + '" target="_blank"><img src="' + base_url_public + '/public/' + data.image + '" width="32" height="32"/></a></td>\
                          <td><a href="' + base_url_public + '/public/' + data.audio + '" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-play" style="color: #44CC33; font-size: 2em;" aria-hidden="true"> PLAY</i></a>&nbsp;&nbsp;&nbsp;&nbsp;' + data.date + '</td>\
                        </tr>');
                    counterZ++;
                });
                showData1();

                $('#table_image_audio_m2_normal').append("<br/>");
                if(files.normal.length == 0)
                    $('#table_image_audio_m2_normal').append("tidak ada berkas <br/> <br/> <br/>")
                files.normal.forEach(function(data){
                    $('#table_image_audio_m2_normal').append('\
                        <table>\
                              <thead>\
                                  <!--<td>' + "Image: " + data.image + '</td>-->\
                                  <!--<td>' + "Audio: " + data.audio + '</td>-->\
                              </thead>\
                              <tbody>\
                                  <td><a href="' + base_url_public + '/public/' + data.image + '" target="_blank"><img src="' + base_url_public + '/public/' + data.image + '" width="32" height="32"/></a></td>\
                                  <td>' + (data.audio ? '<a href="' + base_url_public + '/public/' + data.audio + '" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-play" style="color: #44CC33; font-size: 2em;" aria-hidden="true"> PLAY</i></a>' : '') + '&nbsp;&nbsp;&nbsp;&nbsp;' + data.date + '</td>\
                              </tbody>\
                          </table>\
                          <hr>');
                    counterZ++;
                });
                $('#table_image_audio_m2_angry').append("<br/>");
                if(files.angry.length == 0)
                    $('#table_image_audio_m2_angry').append("tidak ada berkas <br/> <br/> <br/>")
                files.angry.forEach(function(data){
                    $('#table_image_audio_m2_angry').append('\
                        <table>\
                              <thead>\
                                  <!--<td>' + "Image: " + data.image + '</td>-->\
                                  <!--<td>' + "Audio: " + data.audio + '</td>-->\
                              </thead>\
                              <tbody>\
                                  <td><a href="' + base_url_public + '/public/' + data.image + '" target="_blank"><img src="' + base_url_public + '/public/' + data.image + '" width="32" height="32"/></a></td>\
                                  <td>' + (data.audio ? '<a href="' + base_url_public + '/public/' + data.audio + '" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-play" style="color: #44CC33; font-size: 2em;" aria-hidden="true"> PLAY</i></a>' : '') + '&nbsp;&nbsp;&nbsp;&nbsp;' + data.date + '</td>\
                              </tbody>\
                          </table>\
                          <hr>');
                    counterZ++;
                });
            }
            function showMelFemaleChart(male, female){
                if ($('#mainb').length ){
                  
                      var echartBar = echarts.init(document.getElementById('mainb'), theme);
                      echartBar.setOption({
                        title: {
                          text: 'Index Happiness',
//                          subtext: 'Man - Woman'
                        },
                          
                        itemStyle: {
                            normal: {
                                color: function(params) {
                                    // build a color map as your need.
                                    var colorList = ['#26B99A', '#BDC3C7', '#FF0000'];
                                    return colorList[params.dataIndex]
                                },
                                label: {
                                    show: true,
                                    position: 'top',
                                    formatter: '{b}\n{c}'
                                }
                            }
                        },
                          
                        tooltip: {
                          trigger: 'axis'
                        },
                        legend: {
                          data: ['sales', 'purchases']
                        },
                        toolbox: {
                          show: false
                        },
                        calculable: false,
                        xAxis: [{
                          type: 'category',
                          data: ['Happy', 'Normal', 'Angry']
                        }],
                        yAxis: [{
                          type: 'value'
                        }],
                        series: [{
//                          name: 'Man',
                          type: 'bar',
                          data: male,
    //                    markPoint: {
    //                      data: [{
    //                        type: 'max',
    //                        name: '???'
    //                      }, {
    //                        type: 'min',
    //                        name: '???'
    //                      }]
    //                    },
    //                    markLine: {
    //                      data: [{
    //                        type: 'average',
    //                        name: '???'
    //                      }]
    //                    }
//                        }, {
//                          name: 'Woman',
//                          type: 'bar',
//                          data: female,
    //                    markPoint: {
    //                      data: [{
    //                        name: 'sales',
    //                        value: 182.2,
    //                        xAxis: 7,
    //                        yAxis: 183,
    //                      }, {
    //                        name: 'purchases',
    //                        value: 2.3,
    //                        xAxis: 11,
    //                        yAxis: 3
    //                      }]
    //                    },
    //                    markLine: {
    //                      data: [{
    //                        type: 'average',
    //                        name: '???'
    //                      }]
    //                    }
                        }]
                      });
                }
            }
            function showByAgeChart(dataMale, dataFemale){
                //custom female
                if ($('#echart_pie_f').length ){  
                  
                  var echartPieF = echarts.init(document.getElementById('echart_pie_f'), theme);
                  echartPieF.setOption({
                    tooltip: {
                      trigger: 'item',
                      formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },
                    legend: {
                      x: 'center',
                      y: 'bottom',
                      data: ['Happy', 'Normal', 'Angry']
                    },
                    toolbox: {
                      show: true,
                      feature: {
                        magicType: {
                          show: true,
                          type: ['pie', 'funnel'],
                          option: {
                            funnel: {
                              x: '25%',
                              width: '50%',
                              funnelAlign: 'left',
                              max: 1548
                            }
                          }
                        },
                        restore: {
                          show: true,
                          title: "Restore"
                        },
                        saveAsImage: {
                          show: true,
                          title: "Save Image"
                        }
                      }
                    },
                    calculable: true,
                    series: [{
                      name: 'female',
                      type: 'pie',
                      radius: '55%',
                      center: ['50%', '48%'],
                      data: [{
                        value: dataMale['happy'],
                        name: 'Happy'
                      }, {
                        value: dataMale['normal'],
                        name: 'Normal'
                      }, {
                        value: dataMale['angry'],
                        name: 'Angry'
                      }]
                    }]
                  });
                  var dataStyle = {
                    normal: {
                      label: {
                        show: false
                      },
                      labelLine: {
                        show: false
                      }
                    }
                  };
                  var placeHolderStyle = {
                    normal: {
                      color: 'rgba(0,0,0,0)',
                      label: {
                        show: false
                      },
                      labelLine: {
                        show: false
                      }
                    },
                    emphasis: {
                      color: 'rgba(0,0,0,0)'
                    }
                  };
                }
                //custom male
                if ($('#echart_pie_m').length ){  
                  
                  var echartPieM = echarts.init(document.getElementById('echart_pie_m'), theme);
                  echartPieM.setOption({
                    tooltip: {
                      trigger: 'item',
                      formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },
                    legend: {
                      x: 'center',
                      y: 'bottom',
                      data: ['Happy', 'Normal', 'Angry']
                    },
                    toolbox: {
                      show: true,
                      feature: {
                        magicType: {
                          show: true,
                          type: ['pie', 'funnel'],
                          option: {
                            funnel: {
                              x: '25%',
                              width: '50%',
                              funnelAlign: 'left',
                              max: 1548
                            }
                          }
                        },
                        restore: {
                          show: true,
                          title: "Restore"
                        },
                        saveAsImage: {
                          show: true,
                          title: "Save Image"
                        }
                      }
                    },
                    calculable: true,
                    series: [{
                      name: 'male',
                      type: 'pie',
                      radius: '55%',
                      center: ['50%', '48%'],
                      data: [{
                        value: dataFemale['happy'],
                        name: 'Happy'
                      }, {
                        value: dataFemale['normal'],
                        name: 'Normal'
                      }, {
                        value: dataFemale['angry'],
                        name: 'Angry'
                      }]
                    }]
                  });
                  var dataStyle = {
                    normal: {
                      label: {
                        show: false
                      },
                      labelLine: {
                        show: false
                      }
                    }
                  };
                  var placeHolderStyle = {
                    normal: {
                      color: 'rgba(0,0,0,0)',
                      label: {
                        show: false
                      },
                      labelLine: {
                        show: false
                      }
                    },
                    emphasis: {
                      color: 'rgba(0,0,0,0)'
                    }
                  };
                }
            }
              
               
      });  
    </script>
</body>
</html>