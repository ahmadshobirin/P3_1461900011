@extends('layouts.app')
@section('title', 'Guru')
@section('menu_guru', 'active')


@section('content')
<h2 class="mt-2">Form Guru</h2>
<p class="lead">Form Guru</p>
<form action="{{ route('guru.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="jhon dhoe...">
    </div>

    <div class="form-group">
        <label for="mengajar">Mengajar</label>
        <input type="text" class="form-control" id="mengajar" name="mengajar" placeholder="Mengajar...">
    </div>

    <div class="form-group">
        <input type="submit" value="Save" class="btn btn-success btn-md">
    </div>
</form>
@endsection
