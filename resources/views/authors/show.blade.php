@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12 my-5">
        <div class="float-left">
            <h2>Authors Details</h2>
        </div>
        <div class="float-right">
            <a href="{{route('authors.index')}}" class="btn btn-danger">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NickName :</strong>
            {{$author->nickname}}
        </div>
        <div class="form-group">
            <strong>Full Name : </strong>
            {{$author->fullname}}
        </div>
        <div class="form-group">
            <strong>Address :</strong>
            {{$author->address}}
        </div>
        <div class="form-group">
            <strong>Email :</strong>
            {{$author->email}}
        </div>
        <div class="form-group">
            <strong>Phone :</strong>
            {{$author->phone}}
        </div>
    </div>
</div>
@endsection