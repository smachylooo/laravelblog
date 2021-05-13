@extends('layouts.main')

@section('content')
    <table>
        @foreach ($items as $item)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$item->user->name}}&nbsp;&nbsp;&nbsp;</td>
                <td><a href="{{ route('blog.posts.show', $item->id) }}">{{ $item->title }}</a></td>
                <td>{{$item->created_at}}</td>
            </tr>
        @endforeach
    </table>
@endsection

