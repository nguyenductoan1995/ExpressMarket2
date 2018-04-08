@extends('master') @section('content')
<div class="row">
	<form action="{{route('createaccount')}}" method="post">
		<input type ='hidden' name= '_token' value = "{{csrf_token()}}">
		<div class="col-lg-12 col-md-12 col-sm-12 register-account">
			<br/>
			<div class="carousel-heading no-margin">
				<h4>Register</h4>
			</div>
			<div class="page-content">
				@if(Session::has('thanhcong'))
					<div class = 'alert alert-success'>{{Session::get('thanhcong')}}</div>
				@endif
				@if(count($errors)>0)
					<div class = 'alert alert-danger'>
						@foreach($errors ->all() as $err)
						{{$err}}
						@endforeach
					</div>
				@endif
				<div class="row">

					<div class="col-lg-12 col-md-12 col-sm-12">
						<p>
							<strong>Shopper information</strong>
						</p>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4">
						<p>Email*</p>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8">
						<input name = 'email' type="text" required>
					</div>

				</div>

				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-4">
						<p>Full name*</p>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8">
						<input type="text" name = 'fullname' required>
					</div>

				</div>

				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-4">
						<p>Password</p>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8">
						<input type="password" name = 'password' required >
					</div>

				</div>

				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-4">
						<p>Confirm Password</p>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8">
						<input type="password" name = 're_password' required>
					</div>

				</div>

				<div class="row">

					<div class="col-lg-12 col-md-12 col-sm-12">
						<p>
							<strong>Bill to</strong>
						</p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<p>Company Name</p>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8">
						<input type="text" name='companyName'>
					</div>

				</div>

				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-4">
						<p>Address 1</p>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8">
						<input type="text" name='address'>
					</div>

				</div>

				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-4">
						<p>City</p>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8">
						<input type="text" name = 'city'>
					</div>

				</div>

				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-4">
						<p>Country</p>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8">
						<input type="text" name='country'>
					</div>

				</div>

				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-4">
						<p>Phone</p>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8">
						<input type="text" name='phone'>
					</div>

				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<input class="big" type="submit" value="Register">
						<input class="big" type="reset" value="Cancel">
					</div>

				</div>
			</div>

		</div>
	</form>
</div>
@endsection