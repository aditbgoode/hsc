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
    
</head>

<body>
<!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
            <div class="container">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="images/img.jpg" alt=""><span><?php echo $nama; ?></span>
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
        
        <!-- Menampilkan chart per hari selama seminggu terakhir -->
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_content">
                    <div id="echart_line" style="height:350px;">Chart Per hari</div>
                </div>
            </div>
        </div>
        
        <!-- Menampilkan pilihan tampilan sesuai pilihan (hari ini, kemarin, seminggu kemarin, sebulan kemarin) -->
        <!-- Di dalam kotak ini, nilainya akan berubah sesuai pemilihan -->
        <!-- NB : Masih ada conflict jQuery -->
        <div class="x_panel"> 
            <div class="col-md-3">  
                 <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
            </div>  
            <div class="col-md-3">  
                 <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
            </div> 
            <div class="col-md-5">  
                 <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
            </div>  
            <div style="clear:both"></div>   
            
            <div class="col-md-12">&nbsp;</div>        
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div id="mainb" style="height:350px;">Index Happiness</div>
                    </div>
                </div>
            </div>
            
            <!-- Select Age, memilih umur, untuk male-female -->
            <div class="dropdown text-center">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select Age
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" id="age0020" href="#">age &lt; 20 year</a>
                    <a class="dropdown-item" id="age2125" href="#">20 years &lt; age &le; 25 year</a>
                    <a class="dropdown-item" id="age2630" href="#">25 years &lt; age &le; 30 year</a>
                    <a class="dropdown-item" id="age3135" href="#">30 years &lt; age &le; 35 year</a>
                    <a class="dropdown-item" id="age3640" href="#">35 years &lt; age &le; 40 year</a>
                    <a class="dropdown-item" id="age4145" href="#">40 years &lt; age &le; 45 year</a>
                    <a class="dropdown-item" id="age4650" href="#">45 years &lt; age &le; 50 year</a>
                    <a class="dropdown-item" id="age5155" href="#">50 years &lt; age &le; 55 year</a>
                    <a class="dropdown-item" id="age56100" href="#">55 years &lt; age</a>
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Male</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div id="echart_pie_m" style="height:350px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Female</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div id="echart_pie_f" style="height:350px;"></div>
                        </div>
                    </div>
                </div>
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
    <script src="<?php echo base_url();?>assets/build/js/custom_awal.js"></script>

     <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>  

        var allData = <?php echo $data; ?>;
        console.log(allData);

        function getDataFromRangeDate(a, b){

            // Init global
            var totalHappy = [];
            var totalNormal = [];
            var totalAngry = [];

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
                    for(y in insDataX.face_data){
                        var insDataY = insDataX.face_data[y];
                        var gender = insDataY.gender.gender;
                        var genderIndex = gender == "Male" ? 1 : 0;

                        var happy = insDataY.expression.happiness;
                        var normal = insDataY.expression.neutral;
                        var angry = insDataY.expression.anger;

                        totalHappy[genderIndex] += happy;
                        totalNormal[genderIndex] += normal;
                        totalAngry[genderIndex] += angry;
                    }
                }
            }

            var female = [totalHappy[0], totalNormal[0], totalAngry[0]];
            var male = [totalHappy[1], totalNormal[1], totalAngry[1]];

            return {
                'male': male,
                'female': female
            }
        }

        function getDataFromRangeAge(a, b){

            // Init global
            var totalHappy = [];
            var totalNormal = [];
            var totalAngry = [];

            for(var i = 0; i < 2; i++){
                totalHappy[i] = 0;
                totalNormal[i] = 0;
                totalAngry[i] = 0;
            }

            // Classify all data
            for(x in allData.happyscope){
                var insDataX = allData.happyscope[x];
                var date = insDataX.timestamp * 1000;

                for(y in insDataX.face_data){
                    var insDataY = insDataX.face_data[y];
                    var age = insDataY.age.age;

                    if(a < age && age < b){
                        var gender = insDataY.gender.gender;
                        var genderIndex = gender == "Male" ? 1 : 0;

                        var happy = insDataY.expression.happiness;
                        var normal = insDataY.expression.neutral;
                        var angry = insDataY.expression.anger;

                        totalHappy[genderIndex] += happy;
                        totalNormal[genderIndex] += normal;
                        totalAngry[genderIndex] += angry;
                    }
                }
            }

            var female = {
                'happy': totalHappy[0], 
                'normal': totalNormal[0], 
                'angry': totalAngry[0]
            };
            var male = {
                'happy': totalHappy[1], 
                'normal': totalNormal[1], 
                'angry': totalAngry[1]
            };

            return {
                'male': male,
                'female': female
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
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                    var aDate = new Date(from_date).getTime();
                    var bDate = new Date(to_date).getTime();
                    var data = getDataFromRangeDate(aDate, bDate);
                    showMelFemaleChart(data['male'], data['female']);
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
            $("#age0020").click(function(e){
                e.preventDefault();
                var data = getDataFromRangeAge(0, 20);
                showByAgeChart(data['male'], data['female']);
            });
            $("#age2125").click(function(e){
                e.preventDefault();
                var data = getDataFromRangeAge(21, 25);
                showByAgeChart(data['male'], data['female']);
            });
            $("#age2630").click(function(e){
                e.preventDefault();
                var data = getDataFromRangeAge(26, 30);
                showByAgeChart(data['male'], data['female']);
            });
            $("#age3135").click(function(e){
                e.preventDefault();
                var data = getDataFromRangeAge(31, 35);
                showByAgeChart(data['male'], data['female']);
            });
            $("#age3640").click(function(e){
                e.preventDefault();
                var data = getDataFromRangeAge(36, 40);
                showByAgeChart(data['male'], data['female']);
            });
            $("#age4145").click(function(e){
                e.preventDefault();
                var data = getDataFromRangeAge(41, 45);
                showByAgeChart(data['male'], data['female']);
            });
            $("#age4650").click(function(e){
                e.preventDefault();
                var data = getDataFromRangeAge(46, 50);
                showByAgeChart(data['male'], data['female']);
            });
            $("#age5155").click(function(e){
                e.preventDefault();
                var data = getDataFromRangeAge(51, 55);
                showByAgeChart(data['male'], data['female']);
            });
            $("#age56100").click(function(e){
                e.preventDefault();
                var data = getDataFromRangeAge(56, 100);
                showByAgeChart(data['male'], data['female']);
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

            function showMelFemaleChart(male, female){
                if ($('#mainb').length ){
                  
                      var echartBar = echarts.init(document.getElementById('mainb'), theme);

                      echartBar.setOption({
                        title: {
                          text: 'Index Happiness',
                          subtext: 'Man - Woman'
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
                          name: 'Man',
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
                        }, {
                          name: 'Woman',
                          type: 'bar',
                          data: female,
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
