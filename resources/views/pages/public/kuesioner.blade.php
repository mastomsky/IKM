@php
	$genders = [
	    (object) [
	        'value' => 'Laki-laki',
	        'label' => 'Laki-laki',
	    ],
	    (object) [
	        'value' => 'Perempuan',
	        'label' => 'Perempuan',
	    ],
	];
	
	$educations = [
	    (object) [
	        'value' => 'SD',
	        'label' => 'Sekolah Dasar (SD)',
	    ],
	    (object) [
	        'value' => 'SMP',
	        'label' => 'Sekolah Menengah Pertama (SMP)',
	    ],
	    (object) [
	        'value' => 'SMA',
	        'label' => 'Sekolah Menengah Atas (SMA)',
	    ],
	    (object) [
	        'value' => 'SMK',
	        'label' => 'Sekolah Menengah Kejuruan (SMK)',
	    ],
	    (object) [
	        'value' => 'D3',
	        'label' => 'Diploma Tiga (D3)',
	    ],
	    (object) [
	        'value' => 'S1',
	        'label' => 'Sarjana (S1)',
	    ],
	    (object) [
	        'value' => 'S2',
	        'label' => 'Magister (S2)',
	    ],
	    (object) [
	        'value' => 'S3',
	        'label' => 'Doktor (S3)',
	    ],
	];
	
	$jobs = [
	    (object) [
	        'value' => 'Pelajar/Mahasiswa',
	        'label' => 'Pelajar/Mahasiswa',
	    ],
	    (object) [
	        'value' => 'Guru',
	        'label' => 'Guru',
	    ],
	    (object) [
	        'value' => 'PNS',
	        'label' => 'PNS',
	    ],
	    (object) [
	        'value' => 'TNI',
	        'label' => 'TNI',
	    ],
	    (object) [
	        'value' => 'Polisi',
	        'label' => 'Polisi',
	    ],
	    (object) [
	        'value' => 'Dosen',
	        'label' => 'Dosen',
	    ],
	    (object) [
	        'value' => 'Pedagang',
	        'label' => 'Pedagang',
	    ],
	    (object) [
	        'value' => 'Buruh',
	        'label' => 'Buruh',
	    ],
	    (object) [
	        'value' => 'Lainnya',
	        'label' => 'Lainnya',
	    ],
	];
@endphp
@extends('layouts.public')
@section('title', 'Kuesioner')
@section('content')
	<section class="bg-info dark:bg-gray-900" style="background-color: #405de6">
		<div class="mx-auto flex flex-col space-y-5 max-w-screen-lg px-4 py-5">
			@if ($step == 1)
				<x-form.personal-info :genders="$genders" :educations="$educations" :jobs="$jobs" :total-kuesioner="$totalKuesioner" :villages="$villages" />
			@elseif ($step == 2)
				<x-form.kuesioner :previous="$previous" :step="$step" :question="$question" :total-kuesioner="$totalKuesioner" :next="$next" :kuesioner="$kuesioner" :data="$data" />
			@elseif ($step == 3)
				<x-form.confirmation :kuesioner="$kuesioner" :data="$data" :step="$step" />
			@endif
		</div>
	</section>
@endsection
