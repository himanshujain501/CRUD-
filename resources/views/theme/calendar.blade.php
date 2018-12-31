<!DOCTYPE HTML>
<html>
<head>
<title>Admin : Calendar</title>

<!-- calendar -->
<link rel="stylesheet" href="{{ url('/')}}/css/monthly.css">
<!-- //calendar -->
</head> 
<body>
	@include('theme.main')
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
		<ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard">Home</a><i class="fa fa-angle-right"></i>Calendar</li>
        </ol>
<!-- grids -->
				<div class="grids">
					<div class="agile-calendar-grid">
						<div class="page">
							
							<div class="w3l-calendar-left">
								<div class="calendar-heading">
									
								</div>
								<div class="monthly" id="mycalendar"></div>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!-- //grids -->
@include('theme.footer')
</div></div></div>
   
<!-- calendar -->
	<script type="text/javascript" src="{{ url('/')}}/js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>