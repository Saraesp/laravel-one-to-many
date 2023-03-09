@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <h2>Aggiumgi nuovo post</h2>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-12">
            <form action="{{route('admin.posts.update', $post->slug)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group my-3">
                    <label for="" class="control-label">
                        Titolo
                    </label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Titolo" value="{{ old('title') ?? $post->title }}">
                </div>
                <div class="form-group my-3">
                    <label for="" class="control-label">
                        Contenuto
                    </label>
                    <textarea name="content" id="content" class="form-control" placeholder="Contenuto" value="{{ old('content') ?? $post->content}}"> </textarea>
                </div>
                <div class="form-group my-3">
                    <button type="submit" class="btn btn-sm btn-success">Salva post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection