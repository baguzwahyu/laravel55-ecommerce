@push('header-scripts')
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@endpush
@extends('layouts.app')
@section('title','Customer')
@section('content')
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th value="{{$i=1}}">NO</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Class</th>
                <th>Room</th>
                <th>Building</th>
                <th>Address1</th>
                <th>Address2</th>
                <th>City</th>
                <th>State</th>
                <th>PostalCode</th>
                <th>Country</th>
                <th>Phone</th>
                <th>Email</th>
                <th>VoiceMail</th>
                <th>Password</th>
                <th>CreditCard</th>
                <th>CreditCardTypeID</th>
                <th>CardExpMo</th>
                <th>CardExpYr</th>
                <th>BillingAddress</th>
                <th>BillingCity</th>
                <th>BillingRegion</th>
                <th>BillingPostalCode</th>
                <th>BillingCountry</th>
                <th>ShipAddress</th>
                <th>ShipCity</th>
                <th>ShipRegion</th>
                <th>ShipPostalCode</th>
                <th>ShipCountry</th>
                <th>DateEntered</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td>{{$i++}}</td>
                <td>{{ $customer->FirstName }}</td>
                <td>{{ $customer->LastName }}</td>
                <td>{{ $customer->Class }}</td>
                <td>{{ $customer->Room }}</td>
                <td>{{ $customer->Building }}</td>
                <td>{{ $customer->Address1 }}</td>
                <td>{{ $customer->Address2 }}</td>
                <td>{{ $customer->City }}</td>
                <td>{{ $customer->State }}</td>
                <td>{{ $customer->PostalCode }}</td>
                <td>{{ $customer->Country }}</td>
                <td>{{ $customer->Phone }}</td>
                <td>{{ $customer->Email }}</td>
                <td>{{ $customer->VoiceMail }}</td>
                <td>{{ $customer->Password }}</td>
                <td>{{ $customer->CreditCard }}</td>
                <td>{{ $customer->CreditCardTypeID }}</td>
                <td>{{ $customer->CardExpMo }}</td>
                <td>{{ $customer->CardExpYr }}</td>
                <td>{{ $customer->BillingAddress }}</td>
                <td>{{ $customer->BillingCity }}</td>
                <td>{{ $customer->BillingRegion }}</td>
                <td>{{ $customer->BillingPostalCode }}</td>
                <td>{{ $customer->BillingCountry }}</td>
                <td>{{ $customer->ShipAddress }}</td>
                <td>{{ $customer->ShipCity }}</td>
                <td>{{ $customer->ShipRegion }}</td>
                <td>{{ $customer->ShipPostalCode }}</td>
                <td>{{ $customer->ShipCountry }}</td>
                <td>{{ $customer->DateEntered }}</td>
                <td>
                    <form action="{{ route('customer.destroy', $customer->id) }}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Delete</button>
                        <a href="{{route('customer.edit', $customer->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
@push('scripts')
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#tabel-data').DataTable();
        });
    </script>
@endpush