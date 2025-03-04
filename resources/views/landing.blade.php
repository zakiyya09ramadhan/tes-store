@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Selamat Datang di Sistem Inventaris</h1>
    @auth
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Ke Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    @endauth
</div>
@endsection
