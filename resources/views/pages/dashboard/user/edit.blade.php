@extends('layouts.dashboard', [
    'breadcrumbs' => [
        'Edit User' => '#',
    ],
])
@section('title', 'Edit User')
@section('content')
	<x-card>
		<div class="relative overflow-x-auto p-5 sm:rounded-lg">
			<form action="{{ route('user.update', $user) }}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="mb-5">
                    <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
					<label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama</label>
					<input type="text" id="name" name="name" value="{{ $user->name }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500">
					@error('name')
						<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
					@enderror
				</div>
				<div class="mb-5">
					<label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email</label>
					<input type="email" id="email" name="email" value="{{$user->email }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
					@error('email')
						<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
					@enderror
				</div>
				<div class="mb-5">
					<label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Role</label>
					<select name="role_id" id="role_id" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
						<option value="">-- Pilih --</option>
					<option value="1" {{ ($user->role_id == '1' ? 'selected' :null) }}>User</option>
					<option value="2" {{ ($user->role_id == '2' ? 'selected' :null) }}>Admin</option>
					<option value="3" {{ ($user->role_id == '3' ? 'selected' :null) }}>Super Admin</option>
					</select>
					
					@error('role_id')
						<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
					@enderror
				</div>
				<div class="mb-5">
					<label for="password" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Password</label>
					<input type="password" id="password" name="password" value="" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
					@error('password')
						<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
					@enderror
				</div>
				<div class="mb-5">
					<label for="repeat_password" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Ulangi Password</label>
					<input type="password" id="repeat_password" name="repeat_password" value="" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
					@error('repeat_password')
						<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
					@enderror
				</div>
				<div class="mb-5">
					<label for="avatar" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Avatar</label>
					<input type="file" id="avatar" name="avatar" value="{{ old('avatar') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
					@error('avatar')
						<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
					@enderror
				</div>
				<div>
					<x-button.submit text="Simpan user" id="simpan-user" />
				</div>
			</form>
		</div>
	</x-card>
@endsection
