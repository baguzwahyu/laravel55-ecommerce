@push('header-scripts')
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@endpush
@extends('layouts.app')
@section('title','order')
@section('content')
    <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th value="{{$i=1}}">NO</th>
                <th>Order Number</th>
                <th>Shipper</th>
                <th>Payment</th>
                <th>Member</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{$i++}}</td>
                <td>{{ $order->OrderNumber }}</td>
                <td>{{ $order->CompanyName }}</td>
                <td>{{ $order->PaymentType }}</td>
                <td>{{ $order->name }}</td>
                <td>
                    <form action="{{ route('order.destroy', $order->id) }}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>Delete</button>
                        <a href="{{route('order.edit', $order->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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