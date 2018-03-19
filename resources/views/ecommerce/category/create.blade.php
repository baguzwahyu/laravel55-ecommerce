@extends('layouts.app') @section('title','Dashboard') @section('content')
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
        <form action="{{route('category.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>CategoryName</label>
                <input type="text" class="form-control" name="CategoryName">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="Description" placeholder="Description"></textarea>
            </div>
            {{--  <div class="form-group">
                <label>Picture</label>
                <input type="text" class="form-control" name="Picture">
            </div>
            <div class="form-group">
                <label>Active</label>
                <input type="text" class="form-control" name="Active">
            </div>  --}}
            <button type="submit" class="btn btn-primary"><span class="fa fa-send" aria-hidden="true"></span> Submit</button>
        </form>
    </div>
</div>
@endsection