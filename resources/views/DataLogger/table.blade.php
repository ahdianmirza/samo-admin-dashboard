<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Waktu</th>
                <th>Partikel 0.5 Mikron (μm)</th>
                <th>Partikel 5 Mikron (μm)</th>
                <th>Partikel 10 Mikron (μm)</th>
                <th>Suhu (°C)</th>
                <th>Kelembapan (%)</th>
                <th>Kandungan CO2 (ppm)</th>
                <th>Kandungan Alkohol (ppm)</th>
                <th>Prediksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataLogger as $logger)
                <tr class="py-2">
                    <td class="py-2">{{ date('m-d-Y H:i', strtotime($logger->created_at)) }}</td>
                    <td class="py-2">{{ $logger->mikronKecil }}</td>
                    <td class="py-2">{{ $logger->mikronSedang }}</td>
                    <td class="py-2">{{ $logger->mikronBesar }}</td>
                    <td class="py-2">{{ $logger->suhu }}</td>
                    <td class="py-2">{{ $logger->kelembapan }}</td>
                    <td class="py-2">{{ $logger->karbonDioksida }}</td>
                    <td class="py-2">{{ $logger->alkohol }}</td>
                    <td class="py-2">{{ $logger->dataPrediksi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
