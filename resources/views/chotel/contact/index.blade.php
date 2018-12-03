@extends('templates.chotel.master')
@section('title')
	CHOTEL | LIÊN HỆ
@stop
@section('content')
<!---header--->		
		<div class="content">
			<!---contact--->
			<div class="contact">
				<div class="container">
					<h2 class="tittle">Liên hệ với chúng tôi</h2>
					<div class="contact-bottom">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.0034292292135!2d108.14750574996418!3d16.065311843756707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219294fa8b50d%3A0x491e7e44a5a42ea6!2zMTU0IFBo4bqhbSBOaMawIFjGsMahbmcsIEhvw6AgS2jDoW5oIE5hbSwgTGnDqm4gQ2hp4buDdSwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1536728883617" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-4 contact-left">
						<h4>Địa chỉ</h4>
						<p>Est eligendi optio cumque nihil impedit quo minus id quod maxime
							<span>26 56D Rescue,US</span></p>
						<ul>
							<li>Free Phone :+1 078 4589 2456</li>
							<li>Telephone :+1 078 4589 2456</li>
							<li>Fax :+1 078 4589 2456</li>
							<li><a href="mailto:info@example.com">info@example.com</a></li>
						</ul>
					</div>
					<div class="col-md-8 contact-left cont">
						<h4>Form liên hệ</h4>
						<form action="{{ route('chotel.contact.add') }}" method="POST">
							{{ csrf_field() }}
							<input type="text" name="fullname" value="Fullname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
							<input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<input type="text" name="subject" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
							<textarea type="text" name="content"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Content...</textarea>
							<input type="submit" value="Gửi" >
							<input type="reset" value="Reset" >
						</form>
						@if (Session::has('msg'))
							<h4 style="color: red; margin-top: 20px ">{{ Session::get('msg') }}</h4>
						@endif
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!---contact--->
		</div>
@stop