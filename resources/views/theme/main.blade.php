<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>


<!-- Bootstrap Core CSS -->
<link href="{{ url('/')}}/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ url('/')}}/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="{{ url('/')}}/css/morris.css" type="text/css"/>
<link rel="stylesheet" href="{{ url('/')}}/css/lightbox.css">
<link rel="stylesheet" href="{{ url('/')}}/css/jquery-ui.css">
<!-- Graph CSS -->
<link href="{{ url('/')}}/css/font-awesome.css" rel="stylesheet"> 

<!-- jQuery -->
<script src="{{ url('/')}}/js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="{{ url('/')}}/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->

<!-- tables -->
<link rel="stylesheet" type="text/css" href="{{ url('/')}}/css/table-style.css" />
<link rel="stylesheet" type="text/css" href="{{ url('/')}}/css/basictable.css" />
<script type="text/javascript" src="{{ url('/')}}/js/jquery.basictable.min.js"></script>

<!--------------------------------------------------------------------------------------->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!----------------------------------------------------------------------------------------->

<!--js -->
<script src="{{ url('/')}}/js/jquery.nicescroll.js"></script>
<script src="{{ url('/')}}/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="{{ url('/')}}/js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="{{ url('/')}}/js/raphael-min.js"></script>
<script src="{{ url('/')}}/js/morris.js"></script>


<!--lightbox-plus-jquery -->
<script src="{{ url('/')}}/js/lightbox-plus-jquery.min.js"></script>

<!-- chart -->
<script src="{{ url('/')}}/js/Chart.js"></script>
<!-- //chart -->

<!--------------------------------------------------------------->
<script>
	$(document).ready(function() {
		 var navoffeset=$(".header-main").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".header-main").addClass("fixed");
			}else{
				$(".header-main").removeClass("fixed");
			}
		 });
	});
</script>
</head>
<body>
<div class="page-container">
	<!--/content-inner-->
	<div class="left-content">
		<div class="mother-grid-inner">
		@include('theme.header')
		</div>				
	</div>
</div>
</body>
</html>