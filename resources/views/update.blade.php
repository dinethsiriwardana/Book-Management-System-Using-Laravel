@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Book</div>

                    <div class="card-body">
                        <form method="POST" action="/update/{{ $bookdata->id }}/update">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-5">
                                    <label for="bookname" class="col-md-4 col-form-label text-md-end">Book Name</label>
                                </div>
                                <div class="col">
                                    <input id="bookname" type="text" class="form-control" name="bookname" value="{{ $bookdata->bookname }}"
                                        required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-5">
                                    <label for="bookname" class="col-md-4 col-form-label text-md-end">Author Name</label>
                                </div>
                                <div class="col">
                                    <input id="authorname" type="text" class="form-control" name="authorname"
                                        value="{{ $bookdata->authorname }}" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-5">
                                    <label for="bookname" class="col-md-4 col-form-label text-md-end">Price</label>
                                </div>
                                <div class="col">
                                    <input id="price" type="text" class="form-control" name="price" value="{{ $bookdata->price }}"
                                        required autofocus>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update Book
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
