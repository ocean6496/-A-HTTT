@extends('templates.chotel.master')
@section('title')
	CHOTEL | CÁC PHÒNG
@stop
@section('content')
<!---header--->		
		<div class="content">
			<!---Rooms--->
			<div class="welcome">
				<div class="container">
					<h2 class="tittle">LOẠI PHÒNG CỦA KHÁCH SẠN</h2>
					<div class="wel-grids">
						@foreach ($roomTypes as $roomType)
							@php
								$id = $roomType->type_id;
								$slug = str_slug($roomType->tname);
							@endphp
							<div class="col-md-3 wel-grid">
								<a href="{{ route('chotel.room.cat', ['slug' => $slug, 'cid' => $id]) }}"><img src="/resources/assets/templates/chotel/images/ga6.jpg" class="img-responsive gray" alt=""/></a>
								<a href=""><h4>{{ $roomType->tname }}</h4></a>
							</div>
						@endforeach
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!---Rooms--->
			<div class="rooms-rates">
				<div class="container">
					<h3 class="tittle">CÁC PHÒNG</h3>
					@php
						$tmp = 1;
					@endphp
					@foreach ($objItems as $objItem)
						@php
							$id = $objItem->rid;
							$slug = str_slug($objItem->rname);
							$preview_text = str_limit($objItem->description, '135');
							$urlImg = '/storage/app/files/'.$objItem->picture;
						@endphp
						@if ($tmp % 2 != 0)
							<div class="rates-grids">
								<div class="rates-grid">
									@if ($objItem->picture != '')
										<a href="{{ route('chotel.room.detail', ['slug' => $slug, 'id' => $id]) }}">
											<img src="{{ $urlImg }}" class="img-responsive gray" alt=""/>
										</a>
									@else
										<a href="{{ route('chotel.room.detail', ['slug' => $slug, 'id' => $id]) }}">
											<img src="/resources/assets/templates/chotel/images/ga2.jpg" class="img-responsive gray" alt=""/>
										</a>
									@endif
								</div>
								<div class="rates-text">
									<a href="{{ route('chotel.room.detail', ['slug' => $slug, 'id' => $id]) }}"><h4>{{ $objItem->rname }}</h4></a>
									<p>{{ $preview_text }}</p>
									<h5>${{ $objItem->cost }}.00 <span class="small">/ Night</span></h5>
								</div>
							</div>
						@else
							<div class="rates-grids rate1">
								<div class="rates-grid1">
									@if ($objItem->picture != '')
										<a href="{{ route('chotel.room.detail', ['slug' => $slug, 'id' => $id]) }}">
											<img src="{{ $urlImg }}" class="img-responsive gray" alt=""/>
										</a>
									@else
										<a href="{{ route('chotel.room.detail', ['slug' => $slug, 'id' => $id]) }}">
											<img src="/resources/assets/templates/chotel/images/ga2.jpg" class="img-responsive gray" alt=""/>
										</a>
									@endif
								</div>
								<div class="rates-text1">
									<a href="{{ route('chotel.room.detail', ['slug' => $slug, 'id' => $id]) }}"><h4>{{ $objItem->rname }}</h4></a>
									<p>{{ $preview_text }}</p>
									<h5>${{ $objItem->cost }}.00 <span class="small">/ Night</span></h5>
								</div>
								<div class="clearfix"></div>
							</div>
						@endif
						@php
							$tmp =$tmp + 1;
						@endphp
					@endforeach
					<p>{{ $objItems->links() }}</p>
				</div>
			</div>
		</div>
@stop