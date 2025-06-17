@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Statistik Guru</h5>
                        <div id="lineChart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Statistik Siswa</h5>
                        <div id="lineChart2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection