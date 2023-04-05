@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Book</div>

                    <div class="card-body">
                        <form method="POST" action="/addbook">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-5">
                                    <label for="bookname" class="col-md-4 col-form-label text-md-end">Book Name</label>
                                </div>
                                <div class="col">
                                    <input id="bookname" type="text" class="form-control" name="bookname" value=""
                                        required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-5">
                                    <label for="bookname" class="col-md-4 col-form-label text-md-end">Author Name</label>
                                </div>
                                <div class="col">
                                    <input id="authorname" type="text" class="form-control" name="authorname"
                                        value="" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-5">
                                    <label for="bookname" class="col-md-4 col-form-label text-md-end">Price</label>
                                </div>
                                <div class="col">
                                    <input id="price" type="text" class="form-control" name="price" value=""
                                        required autofocus>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add Book
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Book</div>

                    <div class="card-body">
                        @foreach ($bookdata as $book)
                        <div class="row">
                            <div class="col mt-2">{{ $book->bookname }}</div>
                            <div class="col mt-2">{{ $book->authorname }}</div>
                            <div class="col-2 mt-2">{{ $book->price }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
