@extends('layout')

@section('content')
<div class="flex flex-row items-center justify-between mb-8">
    <h1 class="text-2xl font-semibold">Daftar Biodata</h1>
    <a class="btn btn-primary" href="{{ route('biodatas.create') }}">Tambah Biodata</a>
</div>
<div class="overflow-x-auto">
    <table class="table table-zebra">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($biodatas as $biodata)
            <tr>
                <td class="capitalize">{{ $loop->iteration }}</td>
                <td class="capitalize">{{ $biodata->first_name }}</td>
                <td class="capitalize">{{ $biodata->last_name }}</td>
                <td class="capitalize">{{ $biodata->gender }}</td>
                <td>
                    <a class="btn mr-2 btn-warning" href="{{ route('biodatas.edit', $biodata->id)}}">Edit</a>
                    <form
                        class="inline"
                        action="{{ route('biodatas.destroy', $biodata->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class=" btn btn-error" type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection