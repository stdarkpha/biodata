@extends('layout')

@section('content')
<div class="flex flex-row items-center justify-between mb-8">
    <h1 class="text-2xl font-semibold">Edit Biodata</h1>
    <a class="btn btn-error" href="{{ route('biodatas.index') }}">Kembali ke Daftar Biodata</a>
</div>
<form class="max-w-screen-md mx-auto flex flex-col" action="{{ route('biodatas.update', $biodata->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label class="input input-bordered flex items-center gap-2">
        Nama Depan
        <input type="text" class="grow" placeholder="nama mu.." name="first_name" id="first_name" value="{{ $biodata->first_name }}" required />
    </label>

    <br>
    <label class="input input-bordered flex items-center gap-2">
        Nama Belakang
        <input type="text" class="grow" placeholder="nama belakang mu.." name="last_name" id="last_name" value="{{ $biodata->last_name }}" required />
    </label>
    <br>
    <label class="form-control w-full">
        <div class="label">
            <span class="label-text">Jenis Kelamin</span>
        </div>
        <select class="select select-bordered w-full" name="gender" id="gender" required>
            <option value="male" {{ $biodata->gender == 'male' ? 'selected' : '' }}>Laki-Laki</option>
            <option value="female" {{ $biodata->gender == 'female' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </label>
    <br>
    <button class="btn btn-primary mx-auto" type="submit">Simpan Perubahan</button>
</form>
@endsection