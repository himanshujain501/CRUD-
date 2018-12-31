<!DOCTYPE HTML>
<html>
<head>
<title>Admin : Gallery</title>
</head> 
<body>
@include('theme.main')
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">

	<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashborad">Home</a><i class="fa fa-angle-right"></i>Gallery</li>
    </ol>
<div class="agile3-grids">
		
			<div class="gallery-grids">
				<div class="col-md-6 gallery-grids-left">
					<div class="gallery-grid">
						<a class="example-image-link" href="{{ url('/')}}/images/g1.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
							<img src="{{ url('/')}}/images/g1.jpg" alt="">
						</a>
					</div>
					<div class="gallery-grids-left-sub">
						<div class="col-md-6 gallery-grids-left-subl">
							<div class="gallery-grid"><a class="example-image-link" href="{{ url('/')}}/images/g2.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
									<img src="{{ url('/')}}/images/g2.jpg" alt="">
								</a>
							</div>
							<div class="gallery-grid gallery-grid-sub">
								<a class="example-image-link" href="{{ url('/')}}/images/g3.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
									<img src="{{ url('/')}}/images/g3.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="col-md-6 gallery-grids-left-subr">
							<div class="gallery-grid">
								<a class="example-image-link" href="{{ url('/')}}/images/g4.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
									<img src="{{ url('/')}}/images/g4.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 gallery-grids-left">
					<div class="col-md-6 gallery-grids-right">
						<div class="gallery-grid">
							<a class="example-image-link" href="{{ url('/')}}/images/g5.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="{{ url('/')}}/images/g5.jpg" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-6 gallery-grids-right">
						<div class="gallery-grid">
							<a class="example-image-link" href="{{ url('/')}}/images/g6.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="{{ url('/')}}/images/g6.jpg" alt="">
							</a>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="gallery-grids-right1">
						<div class="gallery-grid">
							<a class="example-image-link" href="{{ url('/')}}/images/g7.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="{{ url('/')}}/images/g7.jpg" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-6 gallery-grids-right">
						<div class="gallery-grid">
							<a class="example-image-link" href="{{ url('/')}}/images/g8.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="{{ url('/')}}/images/g8.jpg" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-6 gallery-grids-right">
						<div class="gallery-grid">
							<a class="example-image-link" href="{{ url('/')}}/images/g9.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="{{ url('/')}}/images/g9.jpg" alt="">
							</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		
	</div>				
@include('theme.footer')
</div></div></div>
</body>
</html>