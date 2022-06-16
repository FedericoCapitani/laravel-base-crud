@extends('layouts.app')

@section('content')
<div class="container">
  <h1> Create a new Game</h1>
  <!-- Puntare il form alla rotta POST store -->
  <form action="{{route('comics.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Comic title" aria-describeby="titleHelper">
        <small id="titleHelper" class="text-muted">Type the comic title here</small>
    </div>

    <div class="form-group">
        <label for="thumb">Thumbnail</label>
        <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Comic thumb" aria-describeby="thumbHelper">
        <small id="thumbHelper" class="text-muted">Put the comic thumbnail link here</small>
    </div>
    
    <button type="submit" class="btn btn-primary">Add Comic</button>
  </form>
</div>
@endsection