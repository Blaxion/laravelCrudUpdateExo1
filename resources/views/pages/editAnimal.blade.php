@extends('layout.index')
@section('main')
<div class="container w-25">
    <form method="POST" action="/putAnimal/{{$edit->id}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Species</label>
            <input type="texte" name='species' value='{{$edit->species}}'class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Age</label>
            <input type="number" name='age' value='{{$edit->age}}' class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection