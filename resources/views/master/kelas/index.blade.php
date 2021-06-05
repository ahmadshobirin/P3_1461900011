@extends('layouts.app')
@section('title', 'Home')

@section('content')
<h2 class="mt-5">Data Siswa</h2>
<p class="lead">Data Siswa</p>
{{-- <form action="{{ route('siswa.index') }}" method="GET"> --}}
    <div class="d-flex justify-content-between pt-2">
        <div class="d-flex">
            <div class="mr-2 mb-2">
                <select name="" id="" class="form-control">
                    <option value="">Filter</option>
                    <option value="">A</option>
                    <option value="">B</option>
                </select>
            </div>
            <div class="mr-2 mb-2">
                <input class="form-control" id="search" name="search" type="text" placeholder="Search..">
            </div>
            {{-- <div class="mr-2 mb-2">
                <button type="submit" class="btn btn-primary">Apply</button>
                <a href="{{ route('siswa.index') }}" class="btn btn-warning">Reset</a>
            </div> --}}
        </div>

        <div class="mr-2 mb-2">
            <button type="button" class="btn btn-primary">+ Create</button>
        </div>
    </div>
{{-- </form> --}}
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        {{ $data->render() }}
    </ul>
</nav>
@endsection
