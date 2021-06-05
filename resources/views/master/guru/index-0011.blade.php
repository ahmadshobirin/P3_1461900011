@extends('layouts.app')
@section('title', 'guru')
@section('menu_guru', 'active')

@section('content')
<h2 class="mt-5">Data guru</h2>
<p class="lead">Data guru</p>
<div class="d-flex justify-content-between pt-2">
    <div class="d-flex"></div>

    <div class="mr-2 mb-2">
        <a href="{{ route("guru.create") }}" class="btn btn-primary">Create</a>
    </div>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Mengajar</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }} </th>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->mengajar }}</td>
            <td>
                <a href="{{ route("guru.edit", $item->id) }}" class="btn btn-primary btn-sm">edit</a>

                <form method="POST" action="{{ route("guru.destroy", $item->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger delete-guru  btn-sm" value="delete">
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
    $('.delete-guru').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>
@endsection
