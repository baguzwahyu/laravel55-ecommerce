@push('header-scripts')
    <link href="{{asset('css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap333.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/datatables.min.css')}}" rel="stylesheet">
{{--  
    <link href="{{ URL::asset('css/bootstrap333.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">  --}}
    
    

    {{--  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  --}}
    {{--  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  --}}
@endpush
@extends('layouts.app')
@section('title','Supplier')
@section('content')
  <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th value="{{$i=1}}">NO</th>
                <th>CompanyName</th>
                <th>Email</th>
                <th>Address</th>
                <th>Description</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
            <tr>
                <td>{{$i++}}</td>
                <td>{{ $supplier->CompanyName }}</td>
                <td>{{ $supplier->Email }}</td>
                <td>{{ $supplier->Address }}</td>
                <td>{{ $supplier->Description }}</td>
                <td>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</a>
                    <a href="{{ route('supplier.destroy', 'supplier->id') }}" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@push('scripts')
  <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
  {{--  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  --}}
    <script>
        $(document).ready(function(){
            $('#tabel-data').DataTable();
        });
    </script>
@endpush