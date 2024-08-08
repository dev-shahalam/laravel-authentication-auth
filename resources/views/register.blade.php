
@extends('layout')
<div class="container">
    <div class="row">
        <div class="card col-12 w-50 mt-5">
            <div class=" card-header text-center bg-dark text-white border-0 rounded ">
                <h1>Register</h1>
            </div>
            <div class="card-body">
            <form action="{{route('registerUserData')}}" method="post">
                @csrf
                <div class="my-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{old('name')}}" type="text" id="name" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input  value="{{old('email')}}" type="email" id="email" class="form-control" name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" id="confirm_password" class="form-control" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <a type="button" href="{{ route('home') }}" class="btn btn-primary">Back</a>
            </form>

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger mt-2" role="alert">
                        {{$error}}
                    </div>
                @endforeach
            @endif
            </div>
        </div>
    </div>
</div>


