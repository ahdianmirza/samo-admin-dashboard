@extends('layouts.dashboard')

@section('container')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Logger SAMO</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Waktu</th>
                            <th>Partikel 0.5 Mikron</th>
                            <th>Partikel 10 Mikron</th>
                            <th>Suhu</th>
                            <th>Kelembapan</th>
                            <th>Kandungan C02</th>
                            <th>Kandungan Alcohol</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataLoggers as $dataLogger)
                            <tr>
                                <td>{{ $dataLogger->created_at }}</td>
                                <td>{{ $dataLogger->mikronKecil }}</td>
                                <td>{{ $dataLogger->mikronBesar }}</td>
                                <td>{{ $dataLogger->suhu }}</td>
                                <td>{{ $dataLogger->kelembapan }}</td>
                                <td>{{ $dataLogger->karbonDioksida }}</td>
                                <td>{{ $dataLogger->alkohol }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
