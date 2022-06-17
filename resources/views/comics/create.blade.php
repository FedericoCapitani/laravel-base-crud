@extends('layouts.app')

@section('content')
<div class="container">
  <h1> Create a new Game</h1>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  <!-- Puntare il form alla rotta POST store -->
  <form action="{{route('comics.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Comic title" aria-describeby="titleHelper">
        <small id="titleHelper" class="text-muted">Type the comic title here</small>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="thumb">Thumbnail</label>
        <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="Comic thumb" aria-describeby="thumbHelper">
        <small id="thumbHelper" class="text-muted">Put the comic thumbnail link here</small>
    </div>
    
    <div class="mb-4">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="5"></textarea>
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="Comic price" aria-describeby="priceHelper">
        <small id="priceHelper" class="text-muted">Type the comic price here</small>
    </div>

    <div class="form-group">
        <label for="series">Series</label>
        <input type="text" name="series" id="series" class="form-control" placeholder="Comic series" aria-describeby="seriesHelper">
        <small id="seriesHelper" class="text-muted">Type the comic series here</small>
    </div>

    <div class="form-group">
        <label for="sale_date">Sale date</label>
        <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Comic sale_date" aria-describeby="sale_dateHelper">
        <small id="sale_dateHelper" class="text-muted">Type the comic sale date here</small>
    </div>

    <div class="form-group">
        <label for="type">Series</label>
        <input type="text" name="type" id="type" class="form-control" placeholder="Comic type" aria-describeby="typeHelper">
        <small id="typeHelper" class="text-muted">Type the comic type here</small>
    </div>

    <button type="submit" class="btn btn-primary">Add Comic</button>
  </form>
</div>
@endsection