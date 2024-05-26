<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Indeks Kepuasan Masyarakat</title>
		<style>
			.container {
				width: 100%;
				text-align: center;
				margin: 0 auto;
			}

			.center-horizontal {
				margin-left: auto;
				margin-right: auto;
				width: 80%;
			}

			.table {
				width: 100%;
				border-collapse: collapse;
			}

			.table tr>th,
			.table tr>td {
				border: 1px solid black;
				/* padding: 0px; */
				text-align: center;
			}

			.borderless tr>td {
				text-align: left;
				border: 0;
				padding: 0;
			}

			.text-lg {
				font-size: 2rem;
				font-weight: 500;
			}

			.text-md {
				font-size: 1.1rem;
			}

			.w-50persen {
				width: 50%;
			}

			.text-left {
				text-align: left !important;
				padding-left: 5px;
			}

			.title {
				text-align: center;
				margin: 20px 0;
			}
		</style>
	</head>

	<body>
		<table style="border-bottom: 1px solid black; width: 100%; text-align: center;">
			<tr>
				<td style="vertical-align: middle; width: 15%;">
					<img src="{{ public_path('assets/logo.png') }}" alt="Logo" >
				</td>
				<td style="vertical-align: middle; line-height: 1.5;">
					<div style="text-align: center;">
						<h4 style="font-size: 1.2rem; margin: 0;">SATUAN LALU LINTAS </h4>
						<div style="margin: 5px 0;">POLRES GRESIK</div>
						<div>Jalan Raya Gresik - Babat Setingi Randuagung Kec. Kebomas 61121 Gresik Jawa Timur</div>
					</div>
				</td>
				<td style="width: 15%;"></td>
			</tr>
		</table>
		<div class="title">
			<span class="text-md">LAPORAN KRITIK DAN SARAN MASYARAKAT <br>
				SATUAN LALU LINTAS <br>
				KABUPATEN GRESIK</span>
			</span>
		</div>
		<div class="center-horizontal">
			<table class="table">
				<tr>
					<th colspan="2" class="w-50persen">MUTU PELAYANAN</th>
					<th class="w-50persen">KINERJA UNIT PELAYANAN</th>
				</tr>
				<tr>
					<td colspan="2" class="text-lg">{{ $ikm['mutu'] }}</td>
					<td class="text-lg">{{ $ikm['kinerja'] }}</td>
				</tr>
				<tr>
					<th>UNSUR SURVEY</th>
					<th>NILAI</th>
					<th>NILAI IKM</th>
				</tr>
				@foreach ($unsurSurvey as $key => $item)
					<tr>
						<td class="text-left">{{ $key }}</td>
						<td>{{ number_format($item['average'], 2) }}</td>
						@if ($loop->iteration == 1)
							<td rowspan="{{ count($unsurSurvey)+1 }}" class="text-lg">{{ $ikm['ikmUnit'] }}</td>
						@endif
					</tr>
				@endforeach
				<tr>
					<th>NRR IKM</th>
					<th>{{ $ikm['nilaiIkmTertimbang'] }}</th>
				</tr>
				<tr>
					<th colspan="2">DATA RESPONDEN</th>
					<th>PERIODE SURVEI</th>
				</tr>
				<tr>
					<td colspan="2">
						<table class="borderless">
							<tr>
								<td>Jumlah Responden: </td>
								<td>{{ $ikm['responden']->jumlah }}</td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>:Laki-laki = {{ $ikm['responden']->laki }}</td>
							</tr>
							<tr>
								<td></td>
								<td>:Perempuan = {{ $ikm['responden']->perempuan }}</td>
							</tr>
							<tr>
								<td>Pendidikan</td>
								<td>:SD = {{ $ikm['responden']->sd }}</td>
							</tr>
							<tr>
								<td></td>
								<td>:SMP = {{ $ikm['responden']->smp }}</td>
							</tr>
							<tr>
								<td></td>
								<td>:SMA = {{ $ikm['responden']->sma }}</td>
							</tr>
							<tr>
								<td></td>
								<td>:SMK = {{ $ikm['responden']->smk }}</td>
							</tr>
							<tr>
								<td></td>
								<td>:S1 = {{ $ikm['responden']->s1 }}</td>
							</tr>
							<tr>
								<td></td>
								<td>:S2 = {{ $ikm['responden']->s2 }}</td>
							</tr>
							<tr>
								<td></td>
								<td>:S3 = {{ $ikm['responden']->s3 }}</td>
							</tr>
						</table>
					</td>
					<td>
						{{ \Carbon\Carbon::createFromFormat('Y-m-d', request('start_date'))->isoFormat('DD MMMM YYYY', 'Do MMMM YYYY') }}
						-
						{{ \Carbon\Carbon::createFromFormat('Y-m-d', request('end_date'))->isoFormat('DD MMMM YYYY', 'Do MMMM YYYY') }}
				</td>
				
				</tr>
			</table>
			<table style="margin-top: 50px; width: 100%;">
				<tr>
					<td></td>
					<td style="text-align: center; width: 40%;">
						<div>Gresik, {{ now()->format('d/m/Y') }}</div>
						<div style="margin-top: 50px;">KEPALA SATLANTAS</div>
						<div></div>
					</td>
				</tr>
			</table>
		</div>
	</body>

</html>
