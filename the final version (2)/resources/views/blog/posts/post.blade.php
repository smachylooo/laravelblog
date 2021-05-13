@extends('layouts.main')

@section('content')
    <div class="blog-post">
        @if ($item->exists)

                <h1 class="font-weight-bold">{{$item->title }}</h1>
                <p class="text-muted font-italic">{{$item->published_at}}</a></p>

                <h4>{{$item->excerpt}}</h4>

                <p class="mt-4">{{$item->content_raw}}</p>
        @endif
    </div>
@endsection
