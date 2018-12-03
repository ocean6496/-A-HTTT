@extends('templates.chotel.master')
@section('title')
	CHOTEL | CHI TIẾT PHÒNG
@stop
@section('content')
<!---header--->		
		<div class="content">
			<div class="restaurant">
				<div class="container">
					<h2 class="tittle">{{ $objItem->rname }}</h2>
					<div class="rest-grids">
						<div class="col-md-8 rest-grid">
							<div class="rest-top">
								<h3>Phòng khách sạn</h3>
								<img src="/storage/app/files/{{ $objItem->picture }}" class="img-responsive gray" alt=""/>
								<p>{!! $objItem->description !!}</p>
							</div>
							<div class="book">
								<button><a href="{{ route('chotel.room.book', $objItem->rid) }}">BOOK</a></button>
							</div>
						</div>
						<div class="col-md-4 rest-grid1">
							<h3>Phòng liên quan</h3>
							<div class="lastest">
								@foreach($relateItems as $relateItem)
									@php
										$preview_text = str_limit($relateItem->description, '150');
									@endphp
									<div class="lastest-top">
									<img src="/storage/app/files/{{ $relateItem->picture }}" class="img-responsive gray" alt=""/>
										<h4>{{ $relateItem->rname }}</h4>
										<p>{!! $preview_text !!}</p>
									</div>
								@endforeach
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>		
@stop