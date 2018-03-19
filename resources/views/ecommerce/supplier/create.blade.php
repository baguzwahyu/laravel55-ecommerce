@extends('layouts.app') @section('title','Supplier') @section('content')
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


<form action="{{route('supplier.store')}}" method="POST">
  {{ csrf_field() }}
  <div class="form-row">
    <div class="form-group col-md-6">
        <label>CompanyName</label>
            <input type="text" class="form-control" name="CompanyName">
    </div>
    <div class="form-group col-md-6">
        <label>Email</label>
            <input type="email" class="form-control" name="Email">
    </div>
  </div>
  <div class="form-group col-md-12">
    <label for="">Address</label>
    <input type="text" class="form-control" name="Address">
  </div>
  <div class="form-group col-md-12">
    <label for="">Description</label>
    <textarea class="form-control" rows="3" name="Description"></textarea>
  </div>
<div class="form-group col-md-12">
  <button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
@endsection