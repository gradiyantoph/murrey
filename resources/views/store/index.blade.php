@extends('layouts.master')

@section('title') Data Lokasi @endsection

@section('style')
<style>
    tbody > tr:hover {
        cursor: pointer;
    }
</style>
@endsection

@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <strong>Data Lokasi</strong>
                <div class="pull-right">
                    <a href="{{ url('/store/create') }}" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-plus"></i> Baru</a>
                </div>
            </div>
            <div class="panel-body">
                @if(Session::has('message'))
                    <div class="alert {{ Session::get('alert-type') }}">
                        {{ Session::get('message') }}
                        <div class="close">&times;</div>
                    </div>
                @endif
                <table class="table table-hover table-bordered table-striped">
                    <thead class="bg-info">
                        <td>No</td>
                        <td>Nama</td>
                    </thead>
                    <tbody>
                        @php
                        $num = 1;
                        @endphp
                        @foreach($stores as $store)
                            <tr onclick="javascript: window.location.href = '{{ url('/store/'.$store->id) }}';">
                                <td>{{ $num++ }}</td>
                                <td>{{ $store->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(".alert").click(function(){
        $(this).hide(1000);
    });
</script>
@endsection