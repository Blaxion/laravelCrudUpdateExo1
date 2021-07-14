@extends('layout.index')
@section('main')
<div class="container w-25">
    <form method="POST" action="/postAnimal">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Species</label>
            <input type="texte" name='species'class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Age</label>
            <input type="number" name='age'class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection