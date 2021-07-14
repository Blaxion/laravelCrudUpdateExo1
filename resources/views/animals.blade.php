@extends('layout.index')
@section('main')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Species</th>
                <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animals as $animal)
                <tr>
                    <th scope="row">{{ $animal->id }}</th>
                    <td><a href="/showAnimal/{{ $animal->id }}">{{ $animal->species }}</a></td>
                    <td>{{ $animal->age }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
