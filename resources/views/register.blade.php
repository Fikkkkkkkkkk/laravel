@extends('layouts.app')
@section('title', 'Registration')
@section('content')
    <div class=container>
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <form action="{{route('register')}}" method="POST" class="ms-auto me-auto mt-5" style="width: 500px;">
        @csrf
            <div class="mb-3">
                <label class="form-label">Fullname</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection