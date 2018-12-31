<!DOCTYPE HTML>
<html>
<head>
<title>Admin : Dashboard</title>
</head> 
<body>
@include('theme.main')
<div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	  <div class="mother-grid-inner">
        
		<ol class="breadcrumb">
	        <li class="breadcrumb-item">Dashboard<i class="fa fa-angle-right"></i></li>
	    </ol>
<!--four-grids here-->
		<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>User</h3>
								<h4> 24,420  </h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Clients</h3>
								<h4>15,520</h4>

							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Projects</h3>
								<h4>12,430</h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Old Projects</h3>
								<h4>14,430</h4>
								
							</div>
							
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
<!--//four-grids here-->
<!--agileinfo-grap-->
<div class="agileinfo-grap">
<div class="agileits-box">
<header class="agileits-box-header clearfix">
<h3>Statistics</h3>
	<div class="toolbar">
		<div class="pull-left">
			<div class="btn-group">
				<a href="#" class="btn btn-default btn-xs">Daily</a>
				<a href="#" class="btn btn-default btn-xs active">Monthly</a>
				<a href="#" class="btn btn-default btn-xs">Yearly</a>
			</div>
		</div>
		<div class="pull-right">
			<div class="btn-group">
			  <a aria-expanded="false" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
				Export <i class="fa fa-angle-down"></i>
			  </a>
			  <ul class="dropdown-menu pull-right" role="menu">
				<li><a href="#">Export as PDF</a></li>
				<li><a href="#">Export as CSV</a></li>
				<li><a href="#">Export as PNG</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</div>
			<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i></a>
		</div>
	</div>
</header>
<div class="agileits-box-body clearfix">
<div id="hero-area"></div>
</div>
</div>
</div>
	<!--//agileinfo-grap-->
<!--photoday-section-->	
			
                        
                    	<div class="col-sm-4 wthree-crd">
                            <div class="card">
                                <div class="card-body">
                                    <div class="widget widget-report-table">
                                        <header class="widget-header m-b-15">
                                        </header>
                                        
                                        <div class="row m-0 md-bg-grey-100 p-l-20 p-r-20">
                                            <div class="col-md-6 col-sm-6 col-xs-6 w3layouts-aug">
                                                <h3>August 2016</h3>
                                                <p>REPORT</p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6 ">
                                                <h2 class="text-right c-teal f-300 m-t-20">$21,235</h2>
                                            </div>
                                        </div>
                                        
                                        <div class="widget-body p-15">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2356</td>
                                                        <td>dummy text </td>
                                                        <td>6,200.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4589</td>
                                                        <td>Lorem Ipsum</td>
                                                        <td>6,500.00</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>3269</td>
                                                        <td>specimen book</td>
                                                        <td>6,800.00</td>
                                                    </tr>                                                    
                                                    <tr>
                                                        <td>5126</td>
                                                        <td>Letraset sheets</td>
                                                        <td>7,200.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7425</td>
                                                        <td>PageMaker</td>
                                                        <td>5,900.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4 w3-agileits-crd">
						
                            <div class="card card-contact-list">
							<div class="agileinfo-cdr">
                                <div class="card-header">
                                    <h3>Contacts</h3>
                                </div>
                                <div class="card-body p-b-20">
                                    <div class="list-group">
                                        <a class="list-group-item media" href="">
                                             <div class="pull-left">
                                                <img class="lg-item-img" src="{{ url('/')}}/images/in1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-left">
                                                	<div class="lg-item-heading">Lorem</div>
                                                	<small class="lg-item-text">lorem@gmail.com</small>
                                                </div>
                                                <div class="pull-right">
                                                	<div class="lg-item-heading">Ceo</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item media" href="">
                                            <div class="pull-left">
                                                <img class="lg-item-img" src="{{ url('/')}}/images/in2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-left">
                                                	<div class="lg-item-heading">Ipsum</div>
                                                	<small class="lg-item-text">ipsum@hotmail.com</small>
                                                </div>
                                                <div class="pull-right">
                                                	<div class="lg-item-heading">Director</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item media" href="">
                                            <div class="pull-left">
                                                <img class="lg-item-img" src="{{ url('/')}}/images/in3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-left">
                                                	<div class="lg-item-heading">Unknown</div>
                                                	<small class="lg-item-text">unknown@gmail.com</small>
                                                </div>
                                                <div class="pull-right">
                                                	<div class="lg-item-heading">Manager</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item media" href="">
                                            <div class="pull-left">
                                                <img class="lg-item-img" src="{{ url('/')}}/images/in4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                            	<div class="pull-left">
                                                	<div class="lg-item-heading">Specimen</div>
                                                	<small class="lg-item-text">specimen@hotmail.com</small>
                                                </div>
                                                <div class="pull-right">
                                                	<div class="lg-item-heading">Assistan</div>
                                                </div>
                                            </div>
                                        </a>
                                       
                                        
                                   	</div>
                                </div>
                            </div>
							</div>
                      	</div>
                    	<div class="col-sm-4 w3-agile-crd">
                            <div class="card">
                                <div class="card-body card-padding">
                                    <div class="widget">
                                        <header class="widget-header">
                                            <h4 class="widget-title">Activities</h4>
                                        </header>
                                        <hr class="widget-separator">
                                        <div class="widget-body">
                                            <div class="streamline">
                                                <div class="sl-item sl-primary">
                                                    <div class="sl-content">
                                                        <small class="text-muted">5 mins ago</small>
                                                        <p>Williams has just joined Project X</p>
                                                    </div>
                                                </div>
                                                <div class="sl-item sl-danger">
                                                    <div class="sl-content">
                                                        <small class="text-muted">25 mins ago</small>
                                                        <p>Jane has sent a request for access</p>
                                                    </div>
                                                </div>
                                                <div class="sl-item sl-success">
                                                    <div class="sl-content">
                                                        <small class="text-muted">40 mins ago</small>
                                                        <p>Kate added you to her team</p>
                                                    </div>
                                                </div>
                                                <div class="sl-item">
                                                    <div class="sl-content">
                                                        <small class="text-muted">45 minutes ago</small>
                                                        <p>John has finished his task</p>
                                                    </div>
                                                </div>
                                                <div class="sl-item sl-warning">
                                                    <div class="sl-content">
                                                        <small class="text-muted">55 mins ago</small>
                                                        <p>Jim shared a folder with you</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="clearfix"></div>
                   
	<!--//photoday-section-->	
	<!--w3-agileits-pane-->	
	<div class="w3-agileits-pane">
		<div class="col-md-4 wthree-pan">
			<div class="panel panel-default">
			  <div class="panel-heading"> <i class="fa fa-bell fa-fw"></i> Notifications Panel </div>
			  <!-- /.panel-heading -->
			  <div class="panel-body">
				<div class="list-group"> 
					<a href="#" class="list-group-item"> <i class="fa fa-comment fa-fw"></i> New Comment <span class="pull-right text-muted small"><em>4 minutes ago</em> </span> </a> 
					<a href="#" class="list-group-item"> <i class="fa fa-twitter fa-fw"></i> 3 New Followers <span class="pull-right text-muted small"><em>12 minutes ago</em> </span> </a> 
					<a href="#" class="list-group-item"> <i class="fa fa-envelope fa-fw"></i> Message Sent <span class="pull-right text-muted small"><em>27 minutes ago</em> </span> </a> 
					<a href="#" class="list-group-item"> <i class="fa fa-tasks fa-fw"></i> New Task <span class="pull-right text-muted small"><em>43 minutes ago</em> </span> </a> 
					<a href="#" class="list-group-item"> <i class="fa fa-upload fa-fw"></i> Server Rebooted <span class="pull-right text-muted small"><em>11:32 AM</em> </span> </a>
					<a href="#" class="list-group-item"> <i class="fa fa-bolt fa-fw"></i> Server Crashed! <span class="pull-right text-muted small"><em>11:13 AM</em> </span> </a> 
					<a href="#" class="list-group-item"> <i class="fa fa-tasks fa-fw"></i> New Task <span class="pull-right text-muted small"><em>43 minutes ago</em> </span> </a> 
				</div>
				<!-- /.list-group --> 
				
			  </div>
			  <!-- /.panel-body --> 
			</div>
		  </div>
		<div class="col-md-8 agile-info-stat">
			<div class="stats-info stats-last widget-shadow">
						<table class="table stats-table ">
							<thead>
								<tr>
									<th>S.NO</th>
									<th>PRODUCT</th>
									<th>STATUS</th>
									<th>PROGRESS</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Lorem ipsum</td>
									<td><span class="label label-success">In progress</span></td>
									<td><h5>85% <i class="fa fa-level-up"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Aliquam</td>
									<td><span class="label label-warning">New</span></td>
									<td><h5>35% <i class="fa fa-level-up"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Lorem ipsum</td>
									<td><span class="label label-danger">Overdue</span></td>
									<td><h5 class="down">40% <i class="fa fa-level-down"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Aliquam</td>
									<td><span class="label label-info">Out of stock</span></td>
									<td><h5>100% <i class="fa fa-level-up"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Lorem ipsum</td>
									<td><span class="label label-success">In progress</span></td>
									<td><h5 class="down">10% <i class="fa fa-level-down"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">6</th>
									<td>Aliquam</td>
									<td><span class="label label-warning">New</span></td>
									<td><h5>38% <i class="fa fa-level-up"></i></h5></td>
								</tr>
							</tbody>
						</table>
					</div>
			</div>
		  <div class="clearfix"></div>
	  </div>
	  <!--//w3-agileits-pane-->	

	  <script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
			],
			lineColors:['#ff4a43','#a2d200','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
	
 @include('theme.footer')
</div>
</div>
</body>
</html>