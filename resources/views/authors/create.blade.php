@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="float-left">
                <h2>Add New Author</h2>
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

    <form action="{{ route('authors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">NickName</label>
                <input type="text" name="nickname" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Full Name</label>
                <input type="text" name="fullname" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Address</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </div>
        </div>
    </form>


@endsection
