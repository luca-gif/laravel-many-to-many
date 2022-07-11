@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 text-center">
                <div class="card p-3">
                    <h4>Title: {{ $post->title }}</h4>
                    <p><b>Content:</b> {{ $post->content }}</p>
                    <p>
                        @if ($post->category)
                            <b>Categoria:</b> {{ $post->category->name }}
                        @endif
                    </p>
                    @if ($post->tags)
                        @foreach ($post->tags as $tag)
                            <div class="badge badge-warning">{{ $tag->name }}</div>
                        @endforeach
                    @endif
                </div>
                <a class="btn btn-primary m-2" href="{{ route('admin.posts.index') }}">Back</a>
                <a class="btn btn-success m-2" href="{{ route('admin.posts.edit', $post) }}">Edit</a>
            </div>
        </div>

    </div>
@endsection
