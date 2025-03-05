@extends('layouts.app')

@section('header')
    @auth
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Master Barang') }}
        </h2>
    @endauth
@endsection

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
