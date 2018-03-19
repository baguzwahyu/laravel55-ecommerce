@extends('layouts.app') @section('title','Category') @section('content')
<div class="row">
    <div class="col-sm-6">
        <form action="{{route('category.update', $categorys->id)}}" method="POST">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PATCH">
            <div class="form-group">
                <label>CategoryName</label>
                <input type="text" class="form-control" name="CategoryName" value="{{$categorys->CategoryName}}">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="Description">{{$categorys->Description}}</textarea>
            </div>
            <div class="form-group">
                <label>Picture</label>
                <input type="text" class="form-control" name="Picture" value="{{$categorys->Picture}}">
            </div>
            <div class="form-group">
                <label>Active</label>
                <input type="text" class="form-control" name="Active" value="{{$categorys->Active}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection