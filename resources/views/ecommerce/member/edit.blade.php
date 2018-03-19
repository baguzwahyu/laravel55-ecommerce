@extends('layouts.app') @section('title','Customer') @section('content')
<div class="row">
    <div class="col-sm-6">
        <form action="{{route('customer.update', $customers->id)}}" method="POST">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PATCH">
            <div class="form-group">
                <label>FirstName</label>
                <input type="text" class="form-control" name="FirstName" value="{{$customers->FirstName}}">
            </div>
            <div class="form-group">
                <label>LastName</label>
                <input type="text" class="form-control" name="LastName" value="{{$customers->LastName}}">
            </div>
            <div class="form-group">
                <label>Class</label>
                <input type="text" class="form-control" name="Class" value="{{$customers->Class}}">
            </div>
            <div class="form-group">
                <label>Room</label>
                <input type="text" class="form-control" name="Room" value="{{$customers->Room}}">
            </div>
            <div class="form-group">
                <label>Building</label>
                <input type="text" class="form-control" name="Building" value="{{$customers->Building}}">
            </div>
            <div class="form-group">
                <label>Address1</label>
                <input type="text" class="form-control" name="Address1" value="{{$customers->Address1}}">
            </div>
            <div class="form-group">
                <label>Address2</label>
                <input type="text" class="form-control" name="Address2" value="{{$customers->Address2}}">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" name="City" value="{{$customers->City}}">
            </div>
            <div class="form-group">
                <label>State</label>
                <input type="text" class="form-control" name="State" value="{{$customers->State}}">
            </div>
            <div class="form-group">
                <label>PostalCode</label>
                <input type="text" class="form-control" name="PostalCode" value="{{$customers->PostalCode}}">
            </div>
            <div class="form-group">
                <label>Country</label>
                <input type="text" class="form-control" name="Country" value="{{$customers->Country}}">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="Phone" value="{{$customers->Phone}}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="Email" value="{{$customers->Email}}">
            </div>
            <div class="form-group">
                <label>VoiceMail</label>
                <input type="text" class="form-control" name="VoiceMail" value="{{$customers->VoiceMail}}">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="Password" value="{{$customers->Password}}">
            </div>
            <div class="form-group">
                <label>CreditCard</label>
                <input type="text" class="form-control" name="CreditCard" value="{{$customers->CreditCard}}">
            </div>
            <div class="form-group">
                <label>CreditCardTypeID</label>
                <input type="text" class="form-control" name="CreditCardTypeID" value="{{$customers->CreditCardTypeID}}">
            </div>
            <div class="form-group">
                <label>CardExpMo</label>
                <input type="text" class="form-control" name="CardExpMo" value="{{$customers->CardExpMo}}">
            </div>
            <div class="form-group">
                <label>CardExpYr</label>
                <input type="text" class="form-control" name="CardExpYr" value="{{$customers->CardExpYr}}">
            </div>
            <div class="form-group">
                <label>BillingAddress</label>
                <input type="text" class="form-control" name="BillingAddress" value="{{$customers->BillingAddress}}">
            </div>
            <div class="form-group">
                <label>BillingCity</label>
                <input type="text" class="form-control" name="BillingCity" value="{{$customers->BillingCity}}">
            </div>
            <div class="form-group">
                <label>BillingRegion</label>
                <input type="text" class="form-control" name="BillingRegion" value="{{$customers->BillingRegion}}">
            </div>
            <div class="form-group">
                <label>BillingPostalCode</label>
                <input type="text" class="form-control" name="BillingPostalCode" value="{{$customers->BillingPostalCode}}">
            </div>
            <div class="form-group">
                <label>BillingCountry</label>
                <input type="text" class="form-control" name="BillingCountry" value="{{$customers->BillingCountry}}">
            </div>
            <div class="form-group">
                <label>ShipAddress</label>
                <input type="text" class="form-control" name="ShipAddress" value="{{$customers->ShipAddress}}">
            </div>
            <div class="form-group">
                <label>ShipCity</label>
                <input type="text" class="form-control" name="ShipCity" value="{{$customers->ShipCity}}">
            </div>
            <div class="form-group">
                <label>ShipRegion</label>
                <input type="text" class="form-control" name="ShipRegion" value="{{$customers->ShipRegion}}">
            </div>
            <div class="form-group">
                <label>ShipPostalCode</label>
                <input type="text" class="form-control" name="ShipPostalCode" value="{{$customers->ShipPostalCode}}">
            </div>
            <div class="form-group">
                <label>ShipCountry</label>
                <input type="text" class="form-control" name="ShipCountry" value="{{$customers->ShipCountry}}">
            </div>
            <div class="form-group">
                <label>DateEntered</label>
                <input type="text" class="form-control" name="DateEntered" value="{{$customers->DateEntered}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection