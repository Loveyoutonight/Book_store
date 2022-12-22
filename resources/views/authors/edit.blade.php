@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="float-left">
                <h2>Edit Author</h2>
            </div>
            <div class="float-right">
                <div class="btn btn-danger">
                    <a href="{{ route('authors.index') }}" class="text-white text-decoration-none">Back</a>
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

    <form action="{{route('authors.update', $author->nickname)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">NickName</label>
                <input type="text" value="{{$author->nickname}}" readonly name="nickname" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Full Name</label>
                <input type="text" value="{{$author->fullname}}" name="fullname" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Address</label>
                <input type="text" value="{{$author->address}}" name="address" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Email</label>
                <input type="text" value="{{$author->email}}" name="email" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Phone</label>
                <input type="text" value="{{$author->phone}}" name="phone" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </div>
        </div>
    </form>


@endsection
