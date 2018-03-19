@extends('layouts.app') @section('title','Shipper') @section('content')
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
<div class="row">
    <div class="col-sm-6">
        <form action="{{route('shipper.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>CompanyName</label>
                <input type="text" class="form-control" name="CompanyName">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="Phone">
            </div>
            <button type="submit" class="btn btn-primary"><span class="fa fa-send" aria-hidden="true"></span> Submit</button>
        </form>
    </div>
</div>
@endsection