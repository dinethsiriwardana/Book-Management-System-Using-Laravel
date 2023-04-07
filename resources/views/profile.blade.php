@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    {{-- <div class="row">
                        <div class="col-2">ID</div>
                        <div class="col">{{Auth::user()->id}}</div>
                    </div>
                    <div class="row">
                        <div class="col-2">Name</div>
                        <div class="col">{{ Auth::user()->name }}</div>
                    </div>
                    <div class="row">
                        <div class="col-2">Email</div>
                        <div class="col">{{ Auth::user()->email }}</div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
