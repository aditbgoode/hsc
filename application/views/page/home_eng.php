<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/home.png">
    
    <title>happyscope</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

    <body data-spy="scroll" data-offset="0" data-target="#theMenu">
		
	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
		    <div style="float: left">
                <a href="<?php echo base_url();?>home"><img src="assets/img/ind.png" alt="" style="width: 30px"></a>
            </div>
            <div style="float: left">
                <a href="<?php echo base_url();?>home/eng"><img src="assets/img/eng.jpg" alt="" style="width: 30px"></a>
			</div>
			<h1 class="logo"><a href="/index#home">happyscope</a></h1>
			<i class="fa fa-times menu-close"></i>
			<a href="#home" class="smoothScroll">Home</a>
			<a href="#about" class="smoothScroll">About</a>
			<a href="#portfolio" class="smoothScroll">Our Product</a>
			<a href="#services" class="smoothScroll">Services</a>
			<a href="#contact" class="smoothScroll">Contact Us</a>
			<a href="login.html" target="_blank" class="smoothScroll">Login</a>
<!--			<a data-toggle="modal" data-target="#myModal">Login</a>-->
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-dribbble"></i></a>
			<a href="#"><i class="fa fa-envelope"></i></a>
		</div>
		
		<!-- Menu button -->
		<div id="menuToggle"><i class="fa fa-bars"></i></div>
	</nav>
	
	<!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Login</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="#" class="form-horizontal">
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="pwd" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2"></label>
                            <div class="col-sm-10">
                                <a href="">lupa password ?</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="s" class="btn btn-primary" >LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <section id="home" name="home"></section>
	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-2">
					<h1>HAPPYSCOPE</h1>
				</div>
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/headerwrap -->
	
	<section id="about" name="about"></section>
	<div id="aboutwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 name">
					<img class="img-responsive" src="assets/img/home.png">
<!--					<p>DANIEL PRATT</p>-->
<!--					<div class="name-label"></div>-->
				</div><! --/col-lg-4-->
				<div class="col-lg-9 name-desc">
					<h2 class="text-center">DESCRIPTION AND PHILOSOPHY</h2>
					<div class="name-zig"></div>
					<div class="col-md-12" style="font-size:1.2em;">
						<p>Departure from happyscope product, that is to conduct user satisfaction survey which is designed so as not to be seen by user as a satisfaction survey tool, hence taken sign (chameleon sign) as this happyscope icon.</p>
                        <p>Appropriate character, chameleon is an animal that can do camouflage (mimicry) with the surrounding environment, so that match with the main product of this brand.</p>
                        <p>In the eye section, describes the scopelens that are targeting something, in accordance with the products of this brand who want to get accurate data from the user.</p>
                        <p>The twisted line on its tail illustrates the actual long process, but it can be compacted according to technological developments that are getting more and more compact. This sign is very implied because the image of technological sophistication deliberately obscured in this logo.</p>
                        <p>The upward curved line of the mouth is drawn from a smile icon that is marked as commonly understood as an image happiness that gives the impression of being friendly, non-threatening, and unlike being spied.</p>
                        <p>Deformation of chameleon form to line composition gives simple, fresh, and modern impression. In addition, with such deformations also amplify the camouflage image, it does not clearly represent the lens-edged chameleon.</p>
					</div>
					
				</div><! --/col-lg-8-->
		
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /aboutwrap -->
	
	<! -- ABOUT SEPARATOR -->
	<div class="sep about" data-stellar-background-ratio="0.5"></div>
	
	<! -- PORTFOLIO SECTION -->
	<section id="portfolio" name="portfolio"></section>
	<div id="portfoliowrap">
		<div class="container">
			<div class="row">
				<h1>OUR PRODUCT</h1>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="assets/img/produk/1.jpeg"><img class="img-responsive" src="assets/img/produk/1.jpeg" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div><!-- col-lg-4 -->
				
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 desc">
					<div class="project-wrapper">
	                    <div class="project">
	                        <div class="photo-wrapper">
	                            <div class="photo">
	                            	<a class="fancybox" href="assets/img/produk/4.jpeg"><img class="img-responsive" src="assets/img/produk/4.jpeg" alt=""></a>
	                            </div>
	                            <div class="overlay"></div>
	                        </div>
	                    </div>
	                </div>
				</div><!-- col-lg-4 -->
				
			</div><!-- /row -->
		</div><! --/container -->
		
	</div><! --/Portfoliowrap -->

	
	
	
	<! -- SERVICE SECTION -->
	<section id="services" name="services"></section>
	<div id="servicewrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8-offset-2 centered">
					<h1>AN OVERVIEW OF HAPPYSCOPE SERVICES</h1>
<!--					<h3>I'll do all the work for you</h3>-->
<!--					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
				</div><!-- /col-lg-8 -->
			</div><! --/row -->
        </div>
    </div>
			
<!--			<div class="sep1 portfolio" data-stellar-background-ratio="0.03"></div>   -->
			
    <div class="container">
        <div class="row">
			<div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Male</h2>
                    <div id="chart-male"></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Female</h2>
                    <div id="chart-female"></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              </div>
              </div>
			

    <script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
<script type="text/javascript">
        FusionCharts.ready(function () {
    var ageGroupChart = new FusionCharts({
        type: 'pie2d',
        renderAt: 'chart-female',
        width: '450',
        height: '300',
        dataFormat: 'json',
        dataSource: {
            "chart": {
//                "caption": "Split of Visitors by Age Group",
//                "subCaption": "Last year",
                "paletteColors": "#15F9CF,#FF3933,#f2c500,#f45b00,#8e0000",
                "bgColor": "#ffffff",
                "showBorder": "0",
                "use3DLighting": "0",
                "showShadow": "0",
                "enableSmartLabels": "0",
                "startingAngle": "0",
                "showPercentValues": "1",
                "showPercentInTooltip": "0",
                "decimals": "1",
                "captionFontSize": "14",
                "subcaptionFontSize": "14",
                "subcaptionFontBold": "0",
                "toolTipColor": "#ffffff",
                "toolTipBorderThickness": "0",
                "toolTipBgColor": "#000000",
                "toolTipBgAlpha": "80",
                "toolTipBorderRadius": "2",
                "toolTipPadding": "5",
                "showHoverEffect":"1",
                "showLegend": "1",
                "legendBgColor": "#ffffff",
                "legendBorderAlpha": '0',
                "legendShadow": '0',
                "legendItemFontSize": '10',
                "legendItemFontColor": '#666666'
            },
            "data": [
                {
                    "label": "Happy",
                    "value": "400"
                }, 
                {
                    "label": "Angry",
                    "value": "146"
                }, 
                {
                    "label": "Neutral",
                    "value": "150"
                }
            ]
        }
    }).render();
});
    
    FusionCharts.ready(function () {
    var ageGroupChart = new FusionCharts({
        type: 'pie2d',
        renderAt: 'chart-male',
        width: '450',
        height: '300',
        dataFormat: 'json',
        dataSource: {
            "chart": {
//                "caption": "Split of Visitors by Age Group",
//                "subCaption": "Last year",
                "paletteColors": "#15F9CF,#FF3933,#f2c500,#f45b00,#8e0000",
                "bgColor": "#ffffff",
                "showBorder": "0",
                "use3DLighting": "0",
                "showShadow": "0",
                "enableSmartLabels": "0",
                "startingAngle": "0",
                "showPercentValues": "1",
                "showPercentInTooltip": "0",
                "decimals": "1",
                "captionFontSize": "14",
                "subcaptionFontSize": "14",
                "subcaptionFontBold": "0",
                "toolTipColor": "#ffffff",
                "toolTipBorderThickness": "0",
                "toolTipBgColor": "#000000",
                "toolTipBgAlpha": "80",
                "toolTipBorderRadius": "2",
                "toolTipPadding": "5",
                "showHoverEffect":"1",
                "showLegend": "1",
                "legendBgColor": "#ffffff",
                "legendBorderAlpha": '0',
                "legendShadow": '0',
                "legendItemFontSize": '10',
                "legendItemFontColor": '#666666'
            },
            "data": [
                {
                    "label": "Happy",
                    "value": "1250400"
                }, 
                {
                    "label": "Angry",
                    "value": "1463300"
                }, 
                {
                    "label": "Neutral",
                    "value": "1050700"
                }
            ]
        }
    }).render();
});
    </script>

			
    <div class="testimonials">
		<div class="container">
        	<div class="row mt" style="font-size:1.1em;">
				<div class="col-lg-3 service">
					<i class="fa fa-star"></i><p>EXPRESSION<br/><small>&nbsp;</small></p>
					<p class="text">Happyscope capture your clients expressions with smart technology which are : happy expression, angry expression, & normal expression. We will give you expression chart by gender and age as a decision system for you.</p>
				</div>
				<div class="col-lg-3 service">
					<i class="fa fa-cloud"></i><p>IMAGES CAPTURE<br/><small>&nbsp;</small></p>
					<p class="text">Happyscope also capture face images of your client with smart technology and support your analytical process.</p>
				</div>
				<div class="col-lg-3 service">
					<i class="fa fa-shield"></i><p>VOICE RECOGNITION<br/><small>&nbsp;</small></p>
					<p class="text">Happyscope also capture sound especially when the system capture anger expression so you could be more detailed in information for doing decision or making strategic plan.</p>
				</div>
				<div class="col-lg-3 service">
					<i class="fa fa-heart"></i><p>DATA REPORT<br/><small>WITH GRAPH</small></p>
					<p class="text">Happyscope also have a full report of every place and provides data mining of every single data that captured.</p>
				</div>
			</div><! --/row -->
			
		</div><! --/container -->
	</div><! --/servicewrap -->
	
	
	<! -- PORTFOLIO SEPARATOR -->
<!--
	<div class="testimonials">
        <div class="sep portfolio" data-stellar-background-ratio="0.1"></div>    
	</div>
			
-->
	
	<! -- SERVICE SECTION -->
<!--	<section id="contact" name="contact"></section>-->
	<! -- CONTACT SEPARATOR -->
<!--	<div class="sep contact" data-stellar-background-ratio="0.5"></div>-->
	<br>
	<br>
	<div class="testimonials">
			<div class="row">
        <div class="container">
            <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.219179708355!2d107.58343231513928!3d-6.864316869068194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6a32e86eec9%3A0xa7a648c3b4d1a6e!2sJl.+Abadi+Raya+No.12%2C+Gegerkalong%2C+Sukasari%2C+Kota+Bandung%2C+Jawa+Barat+40153!5e0!3m2!1sen!2sid!4v1500170990666" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        </div>
        </div>
    </div>
	
	<! -- SERVICE SECTION -->
	<section id="contact" name="contact"><br></section>

	<div id="contactwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<p>CONTACT ME RIGHT NOW!</p>
					<p>
						<small>Jl. Abadi Raya No 12<br/>
						Bandung<br/>
						Indonesia</small>
					</p>
				</div>
				
				<div class="col-lg-6">
					<form role="form">
					  <div class="form-group">
					    <label for="exampleInputName1">Your Name</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					    <label for="exampleInputText1">Message</label>
					    <textarea class="form-control" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			
			</div><! --/row -->
		</div><!-- /container -->
	</div>
	
	<div id="contactwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p>happyscope @ 2017. ENIGMA TEKNO SOLUSI</p>
				</div>
				
				
			</div><! --/row -->
		</div><!-- /container -->
	</div>
		
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/1.11.0-jquery.min.js"></script>
	<script src="assets/js/classie.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/fancybox/jquery.fancybox.js"></script>    
	<script src="assets/js/main.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
    <script>
		$(function(){
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 40
			});
		});
    </script>
		
		<!-- jQuery -->
<!--    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>-->
    <!-- Bootstrap -->
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
<!--    <script src="vendors/nprogress/nprogress.js"></script>-->
		
		<!-- ECharts -->
    <script src="assets/vendors/echarts/dist/echarts.min.js"></script>
<!--    <script src="vendors/echarts/map/js/world.js"></script>-->

    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.js"></script>
		
    <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });
    </script>
  </body>
</html>
