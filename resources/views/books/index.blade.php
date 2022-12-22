@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="float-left">
                <h2>Books</h2>
            </div>
            <div class="float-right">
                <div class="btn btn-success">
                    <a href="{{ route('books.create') }}" class="text-white text-decoration-none">Add New</a>
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
            <th>Title</th>
            <th>Content</th>
            <th>Price</th>
            <th>Pushlisher</th>
            <th>Nickname</th>
            <th class="text-center">Action</th>
        </tr>

        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->content }}</td>
                <td>{{ $book->price }}</td>
                <td>{{ $book->pushlisher }}</td>
                <td>{{ $book->nickname }}</td>
                <td class="text-center align-middle">
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                        <a class="btn btn-success btn-sm" href="{{ route('books.show', $book->id) }}">Show</a>
                        <a class="btn btn-info mx-3 btn-sm" href="{{ route('books.edit', $book->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure, you want to delete this data ?');">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
