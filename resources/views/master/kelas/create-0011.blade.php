@extends('layouts.app')
@section('title', 'Kelas')
@section('menu_kelas', 'active')

@section('content')
<h2 class="mt-2">Form Kelas</h2>
<p class="lead">Form Kelas</p>
<form action="{{ route('kelas.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="siswa">Siswa</label>
        <select name="siswa" id="siswa" class="form-control">
            <option value="">Pilih Siswa</option>
            <option value="" selected disabled>Pilih Siswa yang belum punya kelas</option>
            @foreach ($siswa as $s)
                <option value="{{ $s->id }}"> {{ $s->nama }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="guru">Guru</label>
        <select name="guru" id="guru" class="form-control">
            <option value="" selected disabled>Pilih Guru</option>
            <option value="" selected disabled>Pilih Guru yang belum punya kelas</option>
            @foreach ($guru as $g)
                <option value="{{ $g->id }}"> {{ $g->nama }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <input type="submit" value="Save" class="btn btn-success btn-md">
    </div>
</form>
@endsection
