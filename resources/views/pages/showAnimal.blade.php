@extends('layout.index')
@section('main')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $show->species }}</h5>
        <p class="card-text">{{ $show->age }}</p>
        <form action="/deleteAnimal/{{ $show->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
        <a href="/editAnimal/{{ $show->id }}" class="btn btn-warning">Edit</a>
    </div>
</div>
@endsection