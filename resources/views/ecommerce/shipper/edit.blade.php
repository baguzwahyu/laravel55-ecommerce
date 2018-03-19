@extends('layouts.app') @section('title','Dashboard') @section('content')
<div class="row">
    <div class="col-sm-6">
        <form action="{{route('shipper.update', $shippers->id)}}" method="POST">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PATCH">
            <div class="form-group">
                <label>CompanyName</label>
                <input type="text" class="form-control" name="CompanyName" value="{{$shippers->CompanyName}}">
            </div>
            <div class="form-group">
                <label>Picture</label>
                <input type="text" class="form-control" name="Phone" value="{{$shippers->Phone}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection