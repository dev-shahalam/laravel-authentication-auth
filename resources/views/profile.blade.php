@extends('layout')
<div class="container">
    <div class="row mt-5 mx-auto align-items-center">
        <div class="col-12 text-center">
            <div>
                <h1>Profile </h1>
                <h3>Hello, {{ Auth::user()->name }} </h3>
            </div>
                <div class=" btn-group" role="group" aria-label="Basic mixed styles example">
                    <a type="button" href="{{ route('dashboardPage') }}" class="btn btn-success">Dashboard</a>
                    <a type="button" href="{{ route('logout') }}" class="btn btn-warning">Logout</a>
                </div>
        </div>
    </div>
</div>
