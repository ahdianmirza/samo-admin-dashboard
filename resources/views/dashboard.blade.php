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
                        <div id="grafikMikronKecil"></div>
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

                    <h4 class="small font-weight-bold">Suhu <span class="float-right">{{ $dataPersentase->suhu }}%</span>
                    </h4>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: {{ $dataPersentase->suhu }}%"
                            aria-valuenow="{{ $dataPersentase->suhu }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">Kelembapan <span
                            class="float-right">{{ $dataPersentase->kelembapan }}%</span>
                    </h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar"
                            style="width: {{ $dataPersentase->kelembapan }}%"
                            aria-valuenow="{{ $dataPersentase->kelembapan }}" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>

                    <h4 class="small font-weight-bold">Alkohol <span
                            class="float-right">{{ $dataPersentase->alkohol }}%</span>
                    </h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar"
                            style="width: {{ $dataPersentase->alkohol }}%"
                            aria-valuenow="{{ $dataPersentase->alkohol }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h4 class="small font-weight-bold">CO2 <span
                            class="float-right">{{ $dataPersentase->karbonDioksida }}%</span>
                    </h4>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar"
                            style="width: {{ $dataPersentase->karbonDioksida }}%"
                            aria-valuenow="{{ $dataPersentase->karbonDioksida }}" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>

                </div>
            </div>
        </div>
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
                    <p style="text-align: justify">"SAMO" Smart Air Monitoring merupakan sebuah alat berbasis Internet of
                        things dimana memiliki fungsi
                        untuk mendeteksi kualitas udara berdasarkan 3 parameter, yaitu kuantitas partikel, suhu, kelembapan,
                        dan kadar gas alkohol dan CO2 pada udara. SAMO memiliki beberapa fitur diantaranya dapat mendeteksi
                        kuantitas partikel dengan ukuran minimal 0.5 mikron dan maksimal 10 mikron, mendeteksi suhu dan
                        kelembapan udara, serta kadar kandungan gas alkohol dan CO2. Selain itu, terdapat fitur prediksi
                        kualitas udara menggunakan sistem Fuzzy Mamdani yang berfungsi untuk mendeteksi kualitas udara
                        secara realtime dengan kategori buruk, sedang, dan baik. SAMO merupakan hasil karya ilmiah berupa
                        alat sistem IOT yang dikembangkan oleh mahasiswa sekolah vokasi IPB yaitu Muhammad Ridzky
                        Fadhlurrahman dan didukung penuh selama pengerjaan nya oleh mitra PKL Balai Pengujian Mutu dan
                        Sertifikasi Produk Hewan (BPMSPH) Bogor. SAMO generasi pertama ini difungsikan secara khusus untuk
                        mendeteksi kualitas udara secara realtime pada lingkungan indoor laboratorium BPMSPH".</p>
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
                        {!! QrCode::size(200)->generate('https://bit.ly/manual-book-samo') !!}
                        <p class="mt-2">Scan barcode di atas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="{{ $loggers->cdn() }}"></script>

    {{ $loggers->script() }} --}}

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        let mikronKecil = <?php echo json_encode($mikronKecil); ?>;
        let hour = <?php echo json_encode($hour); ?>;

        const formatDate = (myDate) => {
            const date = new Date(myDate);
            return date;
        }

        const formatter = new Intl.DateTimeFormat('id-ID', {
            hour: '2-digit',
        });

        let dataHour = [];

        hour.map(data => {
            let jam = formatter.format(formatDate(data));
            dataHour.push(`${jam}:00`);
        })

        Highcharts.chart('grafikMikronKecil', {
            title: {
                text: 'Grafik Data Mikron Kecil'
            },
            xAxis: {
                categories: dataHour
            },
            yAxis: {
                title: {
                    text: 'Data Mikron Kecil'
                }
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Data Mikron Kecil',
                data: mikronKecil
            }]
        })
    </script>

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
            }, 1000);
        });
    </script>
@endsection
