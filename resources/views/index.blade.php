
@extends('layout')
<div class="container">
    <div class="row mt-5 mx-auto align-items-center">
        <div class="col-12 text-center">
            <div class=" btn-group" role="group" aria-label="Basic mixed styles example">
                <a type="button" href="{{ route('register') }}" class="btn btn-success">Register</a>
                <a type="button" href="{{ route('login') }}" class="btn btn-warning">Login</a>
                </div>
        </div>
    </div>
</div>

