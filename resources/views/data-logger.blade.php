@extends('layouts.dashboard')

@section('container')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Logger SAMO</h1>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <form action="/data-logger" method="get" class="mb-3">
                    <label for="search" class="form-label">Pencarian</label>
                    <div class="d-flex">
                        <input type="text" class="form-control" id="search" name="search"
                            value="{{ request('search') }}" placeholder="Cari berdasarkan waktu" aria-describedby="search">
                        <button type="submit" class="btn btn-primary ml-2">Cari</button>
                    </div>
                </form>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Waktu</th>
                            <th>Partikel 0.5 Mikron</th>
                            <th>Partikel 5 Mikron</th>
                            <th>Partikel 10 Mikron</th>
                            <th>Suhu</th>
                            <th>Kelembapan</th>
                            <th>Kandungan C02</th>
                            <th>Kandungan Alcohol</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($dataLoggers) > 0)
                            @foreach ($dataLoggers as $dataLogger)
                                <tr>
                                    <td>{{ date('d-m-Y H:i', strtotime($dataLogger->created_at)) }}</td>
                                    <td>{{ $dataLogger->mikronKecil }}</td>
                                    <td>{{ $dataLogger->mikronSedang }}</td>
                                    <td>{{ $dataLogger->mikronBesar }}</td>
                                    <td>{{ $dataLogger->suhu }}</td>
                                    <td>{{ $dataLogger->kelembapan }}</td>
                                    <td>{{ $dataLogger->karbonDioksida }}</td>
                                    <td>{{ $dataLogger->alkohol }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8" class="text-center">No data found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{ $dataLoggers->links() }}
@endsection
