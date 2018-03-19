@extends('layouts.app') @section('title','Customer') @section('content')
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
        <form action="{{route('customer.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>FirstName</label>
                <input type="text" class="form-control" name="FirstName">
            </div>
            <div class="form-group">
                <label>LastName</label>
                <input type="text" class="form-control" name="LastName">
            </div>
            <div class="form-group">
                <label>Class</label>
                <input type="text" class="form-control" name="Class">
            </div>
            <div class="form-group">
                <label>Room</label>
                <input type="text" class="form-control" name="Room">
            </div>
            <div class="form-group">
                <label>Building</label>
                <input type="text" class="form-control" name="Building">
            </div>
            <div class="form-group">
                <label>Address1</label>
                <input type="text" class="form-control" name="Address1">
            </div>
            <div class="form-group">
                <label>Address2</label>
                <input type="text" class="form-control" name="Address2">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" name="City">
            </div>
            <div class="form-group">
                <label>State</label>
                <input type="text" class="form-control" name="State">
            </div>
            <div class="form-group">
                <label>PostalCode</label>
                <input type="text" class="form-control" name="PostalCode">
            </div>
            <div class="form-group">
                <label>Country</label>
                <input type="text" class="form-control" name="Country">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="Phone">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="Email">
            </div>
            <div class="form-group">
                <label>VoiceMail</label>
                <input type="text" class="form-control" name="VoiceMail">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="Password">
            </div>
            <div class="form-group">
                <label>CreditCard</label>
                <input type="text" class="form-control" name="CreditCard">
            </div>
            <div class="form-group">
                <label>CreditCardTypeID</label>
                <input type="text" class="form-control" name="CreditCardTypeID">
            </div>
            <div class="form-group">
                <label>CardExpMo</label>
                <input type="text" class="form-control" name="CardExpMo">
            </div>
            <div class="form-group">
                <label>CardExpYr</label>
                <input type="text" class="form-control" name="CardExpYr">
            </div>
            <div class="form-group">
                <label>BillingAddress</label>
                <input type="text" class="form-control" name="BillingAddress">
            </div>
            <div class="form-group">
                <label>BillingCity</label>
                <input type="text" class="form-control" name="BillingCity">
            </div>
            <div class="form-group">
                <label>BillingRegion</label>
                <input type="text" class="form-control" name="BillingRegion">
            </div>
            <div class="form-group">
                <label>BillingPostalCode</label>
                <input type="text" class="form-control" name="BillingPostalCode">
            </div>
            <div class="form-group">
                <label>BillingCountry</label>
                <input type="text" class="form-control" name="BillingCountry">
            </div>
            <div class="form-group">
                <label>ShipAddress</label>
                <input type="text" class="form-control" name="ShipAddress">
            </div>
            <div class="form-group">
                <label>ShipCity</label>
                <input type="text" class="form-control" name="ShipCity">
            </div>
            <div class="form-group">
                <label>ShipRegion</label>
                <input type="text" class="form-control" name="ShipRegion">
            </div>
            <div class="form-group">
                <label>ShipPostalCode</label>
                <input type="text" class="form-control" name="ShipPostalCode">
            </div>
            <div class="form-group">
                <label>ShipCountry</label>
                <input type="text" class="form-control" name="ShipCountry">
            </div>
            <div class="form-group">
                <label>DateEntered</label>
                <input type="text" class="form-control" name="DateEntered">
            </div>
            <button type="submit" class="btn btn-primary"><span class="fa fa-send" aria-hidden="true"></span> Submit</button>
        </form>
    </div>
</div>
@endsection