@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="float-left">
                <h2>Edit</h2>
            </div>
            <div class="float-right">
                <div class="btn btn-danger">
                    <a href="{{ route('books.index') }}" class="text-white text-decoration-none">Back</a>
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops</strong> some error occurred <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('books.update', $book->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Author</label>
                <select name="nickname" id="" class="form-control">
                    @foreach ($authors as $author)
                        <option  value="{{ $author->nickname }}" {{ $author->nickname == $book->nickname ? 'selected' : '' }}>{{ $author->nickname }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Title</label>
                <input type="text" value="{{$book->title}}" name="title" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Content</label>
                <textarea name="content"  rows="4" class="form-control">{{$book->content}}</textarea>
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Price</label>
                <input type="text" value="{{$book->price}}" name="price" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Pushlisher</label>
                <input type="text" value="{{$book->pushlisher}}" name="pushlisher" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </div>
        </div>
    </form>


@endsection
