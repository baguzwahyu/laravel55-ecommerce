@extends('layouts.app') @section('title','Dashboard') @section('content')
<div class="row">
    <div class="col-sm-6">
        <form action="{{route('payment.update', $payments->id)}}" method="POST">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PATCH">
            <div class="form-group">
                <label>PaymentType</label>
                <input type="text" class="form-control" name="PaymentType" value="{{$payments->PaymentType}}">
            </div>
            <div class="form-group">
                <label>Allowed</label>
                <input type="text" class="form-control" name="Allowed" value="{{$payments->Allowed}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection