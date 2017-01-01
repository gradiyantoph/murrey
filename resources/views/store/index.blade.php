@extends('layouts.master')

@section('title') Data Lokasi @endsection

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            Data Lokasi
        </div>
        <div class="panel-body">
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <td>#</td>
                    <td>Nama</td>
                </thead>
                <tbody>
                    @php
                    $num = 1;
                    @endphp
                    @foreach($stores as $store)
                        <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $store->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
