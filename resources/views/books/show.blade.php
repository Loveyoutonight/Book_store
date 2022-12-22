@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12 my-5">
        <div class="float-left">
            <h2>Book Details</h2>
        </div>
        <div class="float-right">
            <a href="{{route('books.index')}}" class="btn btn-danger">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title :</strong>
            {{$book->title}}
        </div>
        <div class="form-group">
            <strong>Content : </strong>
            {{$book->content}}
        </div>
        <div class="form-group">
            <strong>Price :</strong>
            {{$book->price}}
        </div>
        <div class="form-group">
            <strong>Pushlishser :</strong>
            {{$book->pushlisher}}
        </div>
        <div class="form-group">
            <strong>Nickname :</strong>
            {{$book->nickname}}
        </div>
    </div>
</div>
@endsection