@extends('front-end.master.master')
@section('content')
        <div class="container bb">
          <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6" style="background-image: url('http://funtrick.com.ng/wp-content/uploads/2017/05/background.jpg');">
              <form>
                  <div class="form-group">
                    <label for="email"><strong>Email</strong></label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="password"><strong>Password</strong></label>
                    <input type="password" class="form-control" id="password" >
                  </div>
                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Keep me logged in
                          </label>
                        </div>
                    </div>
                  <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            <p class="text-right"><strong>Don't have an account yet ? </strong><a class="alert alert-primary" href="{{route('member.create')}}">Sign Up Now</a></p>
            </div>
            <div class="col-sm-3"></div>
          </div>
        </div>
@endsection