@extends('front-end.master.master')
@section('content')
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    @if (\Session::get('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
      @endif
        <div class="container bb">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6" style="background-image: url('http://funtrick.com.ng/wp-content/uploads/2017/05/background.jpg');">

                    <form action="{{route('member.store')}}"  method="POST">
                        {{csrf_field()}}
					  <div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" class="form-control" id="name">
					  </div>
					  <div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" id="email">
					  </div>
					  <div class="form-group">
					    <div class="row">
						    <div class="col">
						    	<label for="password">Password</label>
						      <input type="password" class="form-control" id="password">
						    </div>
						    <div class="col">
						    	<label for="repassword">Re-Password</label>
						      <input type="password" class="form-control" id="repassword">
						    </div>
  						</div>
  						</div>
					  	<button type="submit" class="btn btn-primary">Create Account</button>
					</form>
					<p class="text-right"><strong>Already have an account ? </strong><a class="alert alert-primary" href="{{route('member.login')}}"> Login Now</a></p>

                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
@endsection
