@extends('layout')
<div class="container">
    <div class="row mt-5 mx-auto align-items-center">
        <div class="col-12 text-center">
            <h1>Dashboard</h1>
            <h3>Welcome, {{ Auth::user()->name }}</h3>
            <div class=" btn-group" role="group" aria-label="Basic mixed styles example">
                <a type="button" href="{{ route('profile') }}" class="btn btn-success">Profile</a>
                <a type="button" href="{{ route('logout') }}" class="btn btn-warning">Logout</a>
            </div>
        </div>
    </div>
</div>
