@extends('layouts.dashboard', [
    'breadcrumbs' => [
        'Responden' => route('responden.index'),
        'Detail Responden' => '#',
    ],
])
@section('title', 'Detail Responden')
@section('content')
	<x-card>
		<div class="relative overflow-x-auto p-5 sm:rounded-lg">
			<dl class="w-full divide-y divide-gray-200 text-gray-900 dark:divide-gray-700 dark:text-white mb-5">
				<div class="flex flex-col pb-3">
					<dt class="mb-1 text-gray-500 dark:text-gray-400 md:text-lg">Nama Lengkap</dt>
					<dd class="text-lg font-semibold">{{ $responden->name }}</dd>
				</div>
				<div class="flex flex-col py-3">
					<dt class="mb-1 text-gray-500 dark:text-gray-400 md:text-lg">Jenis Kelamin</dt>
					<dd class="text-lg font-semibold">{{ $responden->gender }}</dd>
				</div>
				<div class="flex flex-col py-3">
					<dt class="mb-1 text-gray-500 dark:text-gray-400 md:text-lg">Umur</dt>
					<dd class="text-lg font-semibold">{{ $responden->age }}</dd>
				</div>
				<div class="flex flex-col py-3">
					<dt class="mb-1 text-gray-500 dark:text-gray-400 md:text-lg">Pendidikan</dt>
					<dd class="text-lg font-semibold">{{ $responden->education }}</dd>
				</div>
				<div class="flex flex-col py-3">
					<dt class="mb-1 text-gray-500 dark:text-gray-400 md:text-lg">Pekerjaan</dt>
					<dd class="text-lg font-semibold">{{ $responden->job }}</dd>
				</div>
				<div class="flex flex-col py-3">
					<dt class="mb-1 text-gray-500 dark:text-gray-400 md:text-lg">Tanggal/Waktu Pengisian Kuesioner</dt>
					<dd class="text-lg font-semibold">{{ \Carbon\Carbon::parse($responden->created_at)->format('d-m-Y') }} / {{ \Carbon\Carbon::parse($responden->created_at)->format('H:i:s') }} WIB</dd>
					
					<form action="{{ route('responden.update', $responden->id) }}}" method="POST" style="display: {{ Auth::user()->role_id != 'admin' ? 'none' :''}}">
						@csrf
						@method('PUT')
			<input type="datetime-local" id="tgl_pengisian" name="tgl_pengisian" class=" rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
			<x-button.submit id="update-tanggal" text="Update Tanggal" />
					</form>
				</div>
			</dl>
			<table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
				<thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
					<tr>
						<th scope="col" class="p-4">
							#
						</th>
						<th scope="col" class="px-6 py-3">
							Pertanyaan
						</th>
						<th scope="col" class="px-6 py-3">
							Jawaban
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($responden->answers as $answer)
						<tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
							<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
								{{ $loop->iteration }}
							</td>
							<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white" id="question">
                {{ $answer->kuesioner->question }}
              </td>
              <td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
                {{ rateLabel($answer->answer) }}
              </td>
              <td scope="row" class="px-6 py-4 text-gray-900 dark:text-white" style="display: {{ Auth::user()->role_id != 'admin' ? 'none' : ''}}" style="display: ">
				<button type="button" id="ubah_jawaban" data-modal-target="modal_ubah" data-modal-toggle="modal_ubah" class="rounded-lg border border-blue-700 px-5 py-2.5 text-center text-sm font-medium text-blue-700 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800">Ubah Jawaban</button>

              </td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</x-card>
	<div id="modal_ubah" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
		<div class="relative max-h-full w-full max-w-md">
			<div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
				<button type="button" class="absolute right-2.5 top-3 ml-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal_ubah">
					<svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
					</svg>
					<span class="sr-only">Close modal</span>
				</button>
				<div class="px-6 py-6 lg:px-8">
					<h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Ubah Jawaban</h3>
					<form action="{{ route('responden.update', $responden->id) }}}" method="POST">
						@csrf
						@method('PUT')
						<div class="mb-3">
							<label for="text" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kuesioner</label>
							<input type="text" name="question" value="" readonly id="kuesioner" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400">
						</div>
						<div class="mb-3">
							<select name="select_jawaban" id="select_jawaban" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400">
								<option value="1" @php
									if ($responden->answer == '1' ? "selected" : null);
								@endphp >Tidak Baik</option>
								<option value="2"  @php
									if ($responden->answer == '2' ? "selected" : null);
								@endphp>Cukup Baik</option>
								<option value="3"  @php
									if ($responden->answer == '3' ? "selected" : null);
								@endphp>Baik</option>
								<option value="4"  @php
									if ($responden->answer == '4' ? "selected" : null);
								@endphp>Sangat Baik</option>
							</select>
						</div>
	
					<button type="submit" class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
						Update Jawaban
					</button>
				</div>
			</div>
		</div>
	</div>

@endsection
