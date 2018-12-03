@extends('templates.chotel.master')
@section('title')
	CHOTEL | GIỚI THIỆU
@stop
@section('content')
<!---header--->		
		<div class="content">
			<div class="about-section">
				<div class="container">
					<h2 class="tittle">Giới thiệu về CHotel</h2>
					<div class="about-grids">
						<div class="col-md-4 about-grid">
							<h4>Vài nét về Luxury CHotel</h4>
							@php
								$preview_text = str_limit($objItem->preview_text, '200');
							@endphp
							<p>{{ $preview_text }}</p>
							<p>{{ $objItem->detail_text }}</p>
						</div>
						<div class="col-md-8 about-grid">
							<div class="about-top">
								<div class="col-md-6 about-left">
									<div class="about-img">
										<img src="/resources/assets/templates/chotel/images/s.jpg" class="img-responsive gray" alt=""/>
									</div>
								</div>
								<div class="col-md-6 about-right">
									<div class="about-img">
										<img src="/resources/assets/templates/chotel/images/ga1.jpg" class="img-responsive gray" alt=""/>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="about-top1">
								<div class="col-md-6 about-left">
									<div class="about-img">
										<img src="/resources/assets/templates/chotel/images/ga2.jpg" class="img-responsive gray" alt=""/>
									</div>
								</div>
								<div class="col-md-6 about-right">
									<div class="about-img">
										<img src="/resources/assets/templates/chotel/images/ga7.jpg" class="img-responsive gray" alt=""/>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>	
			<div class="statistics">
				<div class="container">
					<h3 class="tittle1">Hotel Statistics</h3>
					<div class="statistics-grids">
						<div class="col-md-3 statistics-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='190' data-delay='.5' data-increment="100">190</div>
							<h5>Guest Stay</h5>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='372' data-delay='.5' data-increment="100">372</div>
							<h5>Book Room</h5>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='10520' data-delay='.5' data-increment="100">10520</div>
							<h5>Members Stay</h5>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='256' data-delay='.5' data-increment="100">256</div>
							<h5>Meals Served</h5>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--team-->
	<div class="team">
		<div class="container">
			<h3 class="tittle">Our Team </h3>
			<div class="team-row">
				<div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Mark Smithy</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur</p>
					<div class="social-icons">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
					</div>
					<div class="team-img">
						<img src="/resources/assets/templates/chotel/images/ocean.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 team-grids team-mdl wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Aliquam amet</h5>
					<p>Consectetur adipi lorem ipsum dolor sit amet, est eligendi scing elit consectetur.</p>
					<div class="social-icons">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
					</div>
					<div class="team-img">
						<img src="/resources/assets/templates/chotel/images/t5.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 team-grids team-mdl1 wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Daniel Nyari</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur.</p>
					<div class="social-icons">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
					</div>
					<div class="team-img">
						<img src="/resources/assets/templates/chotel/images/t4.jpg" alt="">
					</div>
				</div>
				<div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Alan ipsum</h5>
					<p>Eligendi scing elit lorem ipsum dolor sit amet, consectetur dolore magnam aliquam</p>
					<div class="social-icons">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
					</div>
					<div class="team-img">
						<img src="/resources/assets/templates/chotel/images/t7.jpg" alt="">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!--//team-->		

		</div>
@stop