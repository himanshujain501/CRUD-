<html>
<head>
</head>
<body>
<!--header start here-->
	
	<div class="header-main">
	<div class="logo-w3-agile">
		<h1><a href="dashboard">Laravel Project</a></h1>
	</div>
	<div class="profile_details">		
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<div class="profile_img">	
							<span class="prfil-img"><img src="{{ url('/') }}/images/in4.jpg" alt=""> </span> 
							<div class="user-name">
								<p>{{ strToUpper(Auth::user()->name) }}</p>
								<span>USER ADMIN</span>
							</div>
							<i class="fa fa-angle-down"></i>
							<i class="fa fa-angle-up"></i>
							<div class="clearfix"></div>	
						</div>	
					</a>
					<ul class="dropdown-menu drp-mnu">
						<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
						<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
						<li> 
							<a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}<i class="fa fa-sign-out"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </li>
					</ul>
				</li>
			</ul>
		</div>
				
	     <div class="clearfix"> </div>	
	</div>
<!--heder end here-->
<!--//content-inner-->
	<!--/sidebar-menu-->
	<div class="sidebar-menu">
	<header class="logo1">
		<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
	</header>

		<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)" class="" ></div>
	       <div class="menu">
			<ul id="menu" >

			<li><a href="{{url('/dashboard')}}"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
				
			<!-- Employee Fomr -->
			<li id="menu-academico" ><a href="#"><i class="fa fa-users" aria-hidden="true"></i><span> Employee's</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
				   <ul id="menu-academico-sub" >
				   <li id="menu-academico-avaliacoes" ><a href="{{url('/employee/create')}}">Add Employee</a></li>
					<li id="menu-academico-avaliacoes" ><a href="{{url('/employee')}}">Employee List</a></li>
				  </ul>
			</li>
			
			<li id="menu-academico" ><a href="{{url('/multiImage')}}"><i class="fa fa-image nav_icon"></i><span>Multi Image</span><div class="clearfix"></div></a></li>

			

		 <li id="menu-academico" ><a href="{{url('/inbox')}}"><i class="fa fa-envelope nav_icon"></i><span>Inbox</span><div class="clearfix"></div></a></li>

			<li><a href="{{url('/gallery')}}"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gallery</span><div class="clearfix"></div></a></li>

			<li id="menu-academico" ><a href="{{url('/charts')}}"><i class="fa fa-bar-chart"></i><span>Charts</span><div class="clearfix"></div></a></li>

			 <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Short Codes</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
				   <ul id="menu-academico-sub" >
				   <li id="menu-academico-avaliacoes" ><a href="{{url('/icons')}}">Icons</a></li>
					<li id="menu-academico-avaliacoes" ><a href="{{url('/typography')}}">Typography</a></li>
					<li id="menu-academico-avaliacoes" ><a href="{{url('/faq')}}">Faq</a></li>
				  </ul>
				</li>

			<li id="menu-academico" ><a href="{{url('/errorpage')}}"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>Error Page</span><div class="clearfix"></div></a></li>

			  <li id="menu-academico" ><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i><span> UI Components</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
				   <ul id="menu-academico-sub" >
				   <li id="menu-academico-avaliacoes" ><a href="{{url('/button')}}">Buttons</a></li>
					<li id="menu-academico-avaliacoes" ><a href="{{url('/grid')}}">Grids</a></li>
				  </ul>
				</li>
			 <li><a href="{{url('/tables')}}"><i class="fa fa-table"></i>  <span>Tables</span><div class="clearfix"></div></a></li>
			<li><a href="maps"><i class="fa fa-map-marker" aria-hidden="true"></i>  <span>Maps</span><div class="clearfix"></div></a></li>
	        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i>  <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
				 <ul id="menu-academico-sub" >
					<li id="menu-academico-boletim" ><a href="{{url('/calendar')}}">Calendar</a></li>
					<li id="menu-academico-avaliacoes" ><a href="{{url('/signin')}}">Sign In</a></li>
					<li id="menu-academico-avaliacoes" ><a href="{{url('/signup')}}">Sign Up</a></li>
					
				  </ul>
			 </li>
			<li><a href="#"><i class="fa fa-check-square-o nav_icon"></i><span>Forms</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
			  <ul>
				<li><a href="{{url('/input')}}"> Input</a></li>
				<li><a href="{{url('/validation')}}">Validation</a></li>
			</ul>
			</li>
		  </ul>

		</div>
	  </div>
	  <div class="clearfix"></div>		
	</div>
<script>
var toggle = true;
			
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
	$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
	$("#menu span").css({"position":"absolute"});
  }
  else
  {
	$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
	setTimeout(function() {
	  $("#menu span").css({"position":"relative"});
	}, 400);
  }
				
				toggle = !toggle;
			});
</script>

<!-- script-for sticky-nav -->
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
</body>
</html>