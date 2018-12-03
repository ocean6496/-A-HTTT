<ul>
	@foreach($roomTypes as $roomType)
	@php
		$id = $roomType->type_id;
		$slug = str_slug($roomType->tname);
	@endphp
	<li class="selected">
		<a href="{{ route('chotel.room.cat', ['slug' => $slug, 'id' => $id]) }}">{{ $roomType->tname }}</a>
	</li>
	@endforeach
</ul>