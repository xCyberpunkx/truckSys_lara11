@extends('layouts.app')

@section('content')
<div class="container mt-5">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Marque</th>
                <th>Couleur</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($camions as $camion)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $camion->marque }}</td>
                    <td>{{ $camion->couleur }}</td>
                    <td>
                        <form action="{{ route('destroy', $camion->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-info" href="{{ route('show', $camion->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('edit', $camion->id) }}">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
