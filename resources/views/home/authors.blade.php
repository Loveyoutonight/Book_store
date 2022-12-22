@extends('layout')
@section('content')
<div class="py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4">Our Authors</h4>
            </div>
            @forelse ($authors as $author)
                <div class="card col-md-3">
                    <div class="card-body">
                        <h5 class="card-title">{{$author->nickname}}</h5>
                        <p class="card-text">{{$author->fullname}}</p>
                        <p class="card-text">{{$author->address}}</p>
                        <a href="{{url('/authors/'.$author->nickname)}}" class="btn btn-primary">Books</a>
                    </div>
                    </div>
            @empty
            <div class="col-md-12">
                <h5>No Authors Available</h5>
            </div>
            @endforelse

        </div>
    </div>
</div>
@endsection