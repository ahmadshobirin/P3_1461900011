@extends('layouts.app')
@section('title', 'Siswa')
@section('menu_siswa', 'active')

@section('content')
<h2 class="mt-5">Data Siswa</h2>
<p class="lead">Data Siswa</p>
<form action="{{ route('siswa.index') }}" method="GET">
    <div class="d-flex justify-content-between pt-2">
        <div class="d-flex">
            <div class="mr-2 mb-2">
                <input class="form-control" id="search" name="search" type="text" placeholder="Search..">
            </div>
            <div class="mr-2 mb-2">
                <button type="submit" class="btn btn-primary">Apply</button>
                <a href="{{ route('siswa.index') }}" class="btn btn-warning">Reset</a>
            </div>
        </div>

        <div class="mr-2 mb-2">
            <a href="{{ route("siswa.create") }}" class="btn btn-primary">Create</a>
        </div>
    </div>
</form>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }} </th>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->alamat }}</td>
            <td>
                <a href="{{ route("siswa.edit", $item->id) }}" class="btn btn-primary btn-sm">edit</a>

                <form method="POST" action="{{ route("siswa.destroy", $item->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger delete-siswa  btn-sm" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        {{ $data->render() }}
    </ul>
</nav>

<script>
    $('.delete-siswa').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>
@endsection
