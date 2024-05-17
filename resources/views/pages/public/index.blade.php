@extends('layouts.public')
@section('title', 'Index Kepuasan Masyarakat')
@section('content')
<div class=""></div>
<section class="bg-bottom bg-no-repeat  dark:bg-gray-900" style="background-image: url({{ asset('assets/subtle-prism.svg') }}); height: calc(100vh - 115px);">
	<div class="mx-auto grid h-full max-w-screen-lg rounded-xl border-2 bg-white px-4  shadow lg:h-auto lg:grid-cols-12 lg:gap-8 lg:py-12 xl:gap-0">
		<div class="mr-auto md:pl-10 place-self-center text-center lg:col-span-7 lg:place-self-start lg:text-start">
			<h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none tracking-tight dark:text-white md:text-5xl xl:text-6xl" style="font-family: Georgia, 'Times New Roman', Times, serif">
			Survey Kepuasan Masyarakat</h1>
			<p class="mb-2">
				ini bertujuan untuk mengukur tingkat kepuasan masyarakat terhadap pelayanan publik yang diberikan 
				<b>SATUAN LALU LINTAS POLRES GRESIK</b>
				</p>
				<p class="mb-6">
					Dengan setiap penilaian yang Anda berikan adalah suara yang berarti bagi kami, dan kami
			sangat menghargai kontribusi Anda dalam meningkatkan kualitas layanan kami
				</p>
			<a href="{{ route('kuesioner') }}" class="mr-3 inline-flex items-center justify-center rounded-lg bg-primary-700 px-5 py-3 text-center text-base font-medium text-white hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
				Beri Penilaian
			</a>
		</div>
		<div class="hidden lg:col-span-5 lg:mt-0 lg:flex">
			<div class="dark:bg-gray-800">
				<img src="{{ asset('/assets/foto-polri.jpg') }}" alt="" class="rounded-xl" width="350">
				{{-- <x-chart.donut :answers="$answers" /> --}}
				<h5 class="mt-2 text-center uppercase text-gray-500 dark:text-gray-400 font-extrabold">KEPALA SATLANTAS</h5>
				<h5 class="mt-2 text-center uppercase text-gray-500 dark:text-gray-400 font-extrabold">Nama Kasatlantas</h5>
			</div>
		</div>
	</div>
</section>

@endsection
