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
                        <img src="images/img.jpg" alt=""><span><?php echo $this->session->userdata('nama'); ?></span>
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
                    <a class="dropdown-item" href="#">age &lt; 20 year</a>
                    <a class="dropdown-item" href="#">20 years &lt; age &le; 25 year</a>
                    <a class="dropdown-item" href="#">25 years &lt; age &le; 30 year</a>
                    <a class="dropdown-item" href="#">30 years &lt; age &le; 35 year</a>
                    <a class="dropdown-item" href="#">35 years &lt; age &le; 40 year</a>
                    <a class="dropdown-item" href="#">40 years &lt; age &le; 45 year</a>
                    <a class="dropdown-item" href="#">45 years &lt; age &le; 50 year</a>
                    <a class="dropdown-item" href="#">50 years &lt; age &le; 55 year</a>
                    <a class="dropdown-item" href="#">55 years &lt; age</a>
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
    </div><! --/row -->
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
      $(document).ready(function(){  
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
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
    </script>
</body>
</html>
