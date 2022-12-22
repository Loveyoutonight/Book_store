@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="float-left">
                <h2>Authors</h2>
            </div>
            <div class="float-right">
                <div class="btn btn-success">
                    <a href="{{ route('authors.create') }}" class="text-white text-decoration-none">Add New</a>
                </div>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>Nick Name</th>
            <th>Full Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th class="text-center">Action</th>
        </tr>

        @foreach ($authors as $author)
            <tr>
                <td>{{ $author->nickname }}</td>
                <td>{{ $author->fullname }}</td>
                <td>{{ $author->address }}</td>
                <td>{{ $author->email }}</td>
                <td>{{ $author->phone }}</td>
                <td class="text-center align-middle">
                    <form action="{{ route('authors.destroy', $author->nickname) }}" method="POST">
                        <a class="btn btn-success btn-sm" href="{{ route('authors.show', $author->nickname) }}">Show</a>
                        <a class="btn btn-info mx-3 btn-sm" href="{{ route('authors.edit', $author->nickname) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure, you want to delete this data ?');"
                        class="btn btn-sm text-white btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
