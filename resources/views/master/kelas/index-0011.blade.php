@extends('layouts.app')
@section('title', 'Kelas')
@section('menu_kelas', 'active')

@section('content')
<h2 class="mt-5">Data Kelas</h2>
<p class="lead">Data Kelas</p>
<form action="{{ route('kelas.index') }}" method="GET">
    <div class="d-flex justify-content-between pt-2">
        <div class="d-flex">
            <div class="mr-2 mb-2">
                <input class="form-control" id="search" name="search" type="text" placeholder="Search..">
            </div>
            <div class="mr-2 mb-2">
                <button type="submit" class="btn btn-primary">Apply</button>
                <a href="{{ route('kelas.index') }}" class="btn btn-warning">Reset</a>
            </div>
        </div>

        <div class="mr-2 mb-2">
            <a href="{{ route('kelas.create') }}" class="btn btn-primary"> Create </a>
        </div>
    </div>
</form>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Siswa</th>
            <th scope="col">Guru</th>
            <th scope="col">Pelajaran</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->siswa }}</td>
                <td>{{ $item->guru }}</td>
                <td>{{ $item->pelajaran }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        {{ $data->render() }}
    </ul>
</nav>
@endsection
