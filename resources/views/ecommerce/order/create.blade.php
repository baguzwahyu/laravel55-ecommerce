@extends('layouts.app') @section('title','Order') @section('content')
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
        <form action="{{route('order.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>OrderNumber</label>
                <input type="text" class="form-control" name="OrderNumber">
            </div>
            <div class="form-group">
                <label>shippers_id</label>
                <select class="form-control" name="shippers_id">
                    @foreach($shippers as $row)
                    <option value="{{$row->id}}">{{$row->CompanyName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>payments_id</label>
                <select class="form-control" name="payments_id">
                    @foreach($payments as $row)
                    <option value="{{$row->id}}">{{$row->PaymentType}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Member</label>
                <select class="form-control" name="members_id">
                    @foreach($members as $row)
                    <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>OrderDate</label>
                <input type="date" class="form-control" name="OrderDate">
            </div>
            <div class="form-group">
                <label>ShipDate</label>
                <input type="date" class="form-control" name="ShipDate">
            </div>
            <button type="submit" class="btn btn-primary"><span class="fa fa-send" aria-hidden="true"></span> Submit</button>
        </form>
    </div>
</div>
@endsection