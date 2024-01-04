@extends('layouts.dashboard')

@section('container')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Prediksi Kualitas Udara</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                                                                                                                                                                                                                                                                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-center font-weight-bold text-primary text-uppercase mb-1">
                                Prediksi Kualitas Udara</div>
                            @if ($dataFuzzy)
                                <div class="h5 mb-0 text-center font-weight-bold text-gray-800">
                                    {{ $dataFuzzy->dataPrediksi }}
                                </div>
                            @else
                                <div class="h5 mb-0 text-center font-weight-bold text-gray-800">
                                    Data tidak tersedia
                                </div>
                            @endif
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-star-of-life fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4" style="height: 30rem">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Prediksi Kualitas Udara</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body p-2">
                    <div class="chart-area">
                        <div id="grafikPrediksi"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Card Example -->
        {{-- <div class="col-xl-4 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Persentase Realtime</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Partikel 0.5 Mikron<span class="float-right">90%</span>
                    </h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Partikel 10 Mikron <span class="float-right">40%</span>
                    </h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Suhu <span class="float-right">60%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">kelembapan <span class="float-right">80%</span>
                    </h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Alcohol <span class="float-right">Complete!</span></h4>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- Page Heading -->
    <div class="d-sm-flex flex-column align-items-start justify-content-between">
        <h1 class="h3 mb-0 text-gray-800">Tabel Riwayat Data Prediksi</h1>
        <p>Tabel ini menyajikan riwayat data hasil prediksi kualitas udara pada Laboratorium</p>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Waktu</th>
                            <th>Hasil Prediksi</th>
                            <th>Nilai Prediksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($dataPrediksi) > 0)
                            @foreach ($dataPrediksi as $prediksi)
                                <tr>
                                    <td>{{ date('d/m/Y H:i', strtotime($prediksi->created_at)) }}</td>
                                    <td>
                                        @if ($prediksi->nilaiPrediksi < 0.5)
                                            Buruk
                                        @endif

                                        @if ($prediksi->nilaiPrediksi == 0.5)
                                            Sedang
                                        @endif

                                        @if ($prediksi->nilaiPrediksi > 0.5)
                                            Baik
                                        @endif
                                    </td>
                                    <td>{{ $prediksi->nilaiPrediksi }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center">No data found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                {{ $dataPrediksi->links() }}
            </div>
        </div>
    </div>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        let fuzzy = <?php echo json_encode($fuzzy); ?>;
        let hour = <?php echo json_encode($hour); ?>;

        Highcharts.chart('grafikPrediksi', {
            title: {
                text: 'Grafik Nilai Prediksi Fuzzy'
            },
            xAxis: {
                categories: hour
            },
            yAxis: {
                title: {
                    text: 'Nilai Prediksi Fuzzy'
                }
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Nilai Prediksi',
                data: fuzzy
            }]
        })
    </script>
@endsection
