@extends('layouts.dashboard')

@section('container')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><iclass="fas fa-download fa-sm text-white-50"></iclass=> Generate Report</a> -->
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Partikel 0.5 Mikron</div>
                            <div id="mikronKecil" class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-star-of-life fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Suhu Ruangan</div>
                            <div id="suhu" class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-temperature-high fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Kelembapan
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div id="kelembapan" class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                </div>
                                {{-- <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tint fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Kadar Gas CO2</div>
                            <div id="karbonDioksida" class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Kadar Gas Alcohol</div>
                            <div id="alkohol" class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Area Chart Mikron Kecil -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Monitoring Partikel 0.5 Mikron
                    </h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Pilih Grafik:</div>
                            <a class="dropdown-item" href="index.php">Grafik Partikel 0.5 Mikron</a>
                            <a class="dropdown-item" href="partikel10mikron.php">Grafik Partikel 10
                                Mikron</a>
                            <a class="dropdown-item" href="dht22.php">Grafik Suhu dan Kelembapan</a>
                            <a class="dropdown-item" href="mq-135.php">Grafik Kandungan Alcohol dan
                                CO2</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area" style="height: fit-content">
                        <div class="col">
                            {!! $loggers->container() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Card Example -->
        <div class="col-xl-4 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Persentase Realtime</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Partikel 0.5 Mikron<span
                            class="float-right">{{ $dataPersentase->mikronKecil }}%</span>
                    </h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar"
                            style="width: {{ $dataPersentase->mikronKecil }}%"
                            aria-valuenow="{{ $dataPersentase->mikronKecil }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">Partikel 5 Mikron<span
                            class="float-right">{{ $dataPersentase->mikronSedang }}%</span>
                    </h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success" role="progressbar"
                            style="width: {{ $dataPersentase->mikronSedang }}%"
                            aria-valuenow="{{ $dataPersentase->mikronSedang }}" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>

                    <h4 class="small font-weight-bold">Partikel 10 Mikron <span
                            class="float-right">{{ $dataPersentase->mikronBesar }}%</span>
                    </h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar"
                            style="width: {{ $dataPersentase->mikronBesar }}%"
                            aria-valuenow="{{ $dataPersentase->mikronBesar }}" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>

                    <h4 class="small font-weight-bold">Suhu <span class="float-right">60%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">Kelembapan <span class="float-right">80%</span>
                    </h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">Alkohol <span class="float-right">80%</span>
                    </h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">CO2 <span class="float-right">100%</span>
                    </h4>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Area Chart Suhu Ruangan -->
        {{-- <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Monitoring Suhu Ruangan
                    </h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Pilih Grafik:</div>
                            <a class="dropdown-item" href="index.php">Grafik Partikel 0.5 Mikron</a>
                            <a class="dropdown-item" href="partikel10mikron.php">Grafik Partikel 10
                                Mikron</a>
                            <a class="dropdown-item" href="dht22.php">Grafik Suhu dan Kelembapan</a>
                            <a class="dropdown-item" href="mq-135.php">Grafik Kandungan Alcohol dan
                                CO2</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area" style="height: fit-content">
                        <div class="col">
                            {!! $chartSuhu->container() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Area Chart Suhu Ruangan -->
        {{-- <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Monitoring Kelembapan Ruangan
                    </h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Pilih Grafik:</div>
                            <a class="dropdown-item" href="index.php">Grafik Partikel 0.5 Mikron</a>
                            <a class="dropdown-item" href="partikel10mikron.php">Grafik Partikel 10
                                Mikron</a>
                            <a class="dropdown-item" href="dht22.php">Grafik Suhu dan Kelembapan</a>
                            <a class="dropdown-item" href="mq-135.php">Grafik Kandungan Alcohol dan
                                CO2</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area" style="height: fit-content">
                        <div class="col">
                            {!! $chartKelembapan->container() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Area Chart Suhu Ruangan -->
        {{-- <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Monitoring Kelembapan Ruangan
                    </h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Pilih Grafik:</div>
                            <a class="dropdown-item" href="index.php">Grafik Partikel 0.5 Mikron</a>
                            <a class="dropdown-item" href="partikel10mikron.php">Grafik Partikel 10
                                Mikron</a>
                            <a class="dropdown-item" href="dht22.php">Grafik Suhu dan Kelembapan</a>
                            <a class="dropdown-item" href="mq-135.php">Grafik Kandungan Alcohol dan
                                CO2</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area" style="height: fit-content">
                        <div class="col">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">About SAMO</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="{{ asset('img/SAMO.png') }}" alt="...">
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam rem vero illum, nemo eius omnis
                        nostrum, corporis harum tempora beatae sint aspernatur voluptatum. Magnam nesciunt id quibusdam?
                        Architecto, provident nostrum.</p>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="  card shadow mb-4 ">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Cara Penggunaan SAMO</h6>
                </div>
                <div class="card-body">
                    <div class="visible-print text-center">
                        <h4 class="mb-2">Buku Panduan Penggunaan Samo</h4>
                        {!! QrCode::size(200)->generate('https://github.com/ahdianmirza') !!}
                        <p class="mt-2">Scan barcode di atas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ $loggers->cdn() }}"></script>
    <script src="{{ $chartSuhu->cdn() }}"></script>
    <script src="{{ $chartKelembapan->cdn() }}"></script>

    {{ $loggers->script() }}
    {{ $chartSuhu->script() }}
    {{ $chartKelembapan->script() }}

    <script>
        function ambilDataUdara() {
            const request = new Request("api/data-udara", {
                method: "GET",
            });

            const response = fetch(request);
            console.info(response);

            response
                .then(response => response.json())
                .then(json => {
                    document.getElementById("mikronKecil").textContent = json.mikronKecil;
                    document.getElementById("suhu").textContent = json.suhu;
                    document.getElementById("kelembapan").textContent = json.kelembapan;
                    document.getElementById("karbonDioksida").textContent = json.karbonDioksida;
                    document.getElementById("alkohol").textContent = json.alkohol;
                })
                .catch(error => {
                    document.getElementById("mikronKecil").textContent = error;
                    document.getElementById("suhu").textContent = error;
                    document.getElementById("kelembapan").textContent = error;
                    document.getElementById("karbonDioksida").textContent = error;
                    document.getElementById("alkohol").textContent = error;
                })
        }

        $(document).ready(function() {
            setInterval(() => {
                ambilDataUdara();
            }, 5000);
        });
    </script>

    <script>
        const chartjs = document.getElementById('myChart');

        new Chart(chartjs, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
