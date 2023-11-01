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
                        <tr>
                            <td>07:30, 11/10/2023</td>
                            <td>10000</td>
                            <td>4</td>
                            <td>25</td>
                            <td>90</td>
                            <td>1.54</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>07:30, 11/10/2023</td>
                            <td>4567</td>
                            <td>2</td>
                            <td>20</td>
                            <td>60</td>
                            <td>4.50</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>07:30, 11/10/2023</td>
                            <td>3245</td>
                            <td>6</td>
                            <td>28</td>
                            <td>66</td>
                            <td>4.3</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>07:30, 11/10/2023</td>
                            <td>4567</td>
                            <td>2</td>
                            <td>20</td>
                            <td>60</td>
                            <td>4.50</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>07:30, 11/10/2023</td>
                            <td>4567</td>
                            <td>2</td>
                            <td>20</td>
                            <td>60</td>
                            <td>4.50</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>07:30, 11/10/2023</td>
                            <td>4567</td>
                            <td>2</td>
                            <td>20</td>
                            <td>60</td>
                            <td>4.50</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
