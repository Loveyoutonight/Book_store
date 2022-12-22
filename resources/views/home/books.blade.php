@extends('layout')
@section('content')
<div class="py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4">Books List of {{$author->nickname}}</h4>
            </div>

            @forelse ($books as $book)
                <div class="card col-md-3 m-2">
                    <div class="card-body">
                      <h5 class="card-title">{{$book->title}}</h5>
                      <p class="card-text">{{$book->content}}</p>
                      <p class="card-text">{{$book->price}}$</p>
                      <a href="#" class="btn btn-primary">Detail Book</a>
                    </div>
                  </div>
            @empty
            <div class="col-md-12">
                <h5>No Books Available</h5>
            </div>
            @endforelse

        </div>
    </div>
</div>
@endsection