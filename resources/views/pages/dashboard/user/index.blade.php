@extends('layouts.dashboard', [
    'breadcrumbs' => [
        'User' => '#',
    ],
])
@section('title', 'User')
@section('content')
	<x-card>
		<div class="relative overflow-x-auto px-4 py-5 sm:rounded-lg">
            <a href="{{ route('user.create') }}" class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
               Tambah User
            </a>
		</div>
	</x-card>
	<x-card>
		<div class="relative overflow-x-auto p-5 sm:rounded-lg">
			<table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
				<thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
					<tr>
						<th scope="col" class="p-4">
							#
						</th>
						<th scope="col" class="px-6 py-3">
							Nama
						</th>
						<th scope="col" class="px-6 py-3">
							Email
						</th>
						<th scope="col" class="px-6 py-3">
							Role
						</th>
						<th scope="col" class="px-6 py-3">
							Avatar
						</th>
						<th scope="col" class="px-6 py-3">
							Aksi
						</th>
					</tr>
				</thead>
				<tbody>
					@if (count($user) == 0)
						<tr>
						<tr>
							<td colspan="8" class="py-5 text-center italic text-red-500">Data Kosong</td>
						</tr>
						</tr>
					@else
						@foreach ($user as $data)
							<tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
								<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
									{{ $data->iteration }}
								</td>
								<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
									{{ Str::ucfirst($data->name) }}
								</td>
								<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
								{{ $data->email }}
								</td>
								<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
								{{ ($data->role_id = '1' ? 'User': ($data->role_id = '2' ? 'Admin': 'Super Admin')) }}
								</td>
								<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
								<img src="{{ asset('assets/user/'.$data->avatar) }}" alt="" width="100px">
								</td>
								<td class="flex space-x-3 whitespace-nowrap px-6 py-4">
										
											<form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('user.destroy', Crypt::encrypt($data->id)) }}" method="POST">
                                                <a href="{{ route('user.edit', Crypt::encrypt($data->id)) }}" class="font-medium text-blue-600 hover:underline dark:text-blue-500">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="font-medium text-blue-600 hover:underline dark:text-blue-500">HAPUS</button>
                                            </form>	
								</td>
							</tr>
						@endforeach
					@endif
				</tbody>
			</table>	
			<div class="mt-5">
				{{ $user->links() }}
			</div>
		</div>
	</x-card>
@endsection
