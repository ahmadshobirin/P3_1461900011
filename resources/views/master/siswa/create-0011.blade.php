@extends('layouts.app')
@section('title', 'Siswa')
@section('menu_siswa', 'active')


@section('content')
<h2 class="mt-2">Form Siswa</h2>
<p class="lead">Form Siswa</p>
<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="jhon dhoe...">
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Address...">
    </div>

    <div class="form-group">
        <input type="submit" value="Save" class="btn btn-success btn-md">
    </div>
</form>
@endsection
