@extends("layout.app")


@section('title')
Magnifici Filmoni
@endsection

@section("content")
<div class="container flex">
    @foreach ($movies as $movie)
        <div class="card" >
            <div class="title">{{$movie->title}}</div>
            <div class="original_title">{{$movie->original_title}}</div>
            <div class="nationality">{{$movie->nationality}}</div>
            <div class="date">{{$movie->date}}</div>
            <div class="vote">{{$movie->vote}}</div>
        </div>
    @endforeach
</div>
@endsection


