@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    <!-- Navigation Links -->
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link href="{{ route('dash') }}" :active="request()->routeIs('dash')">
            {{ __('Dashboard') }}
        </x-nav-link>
        <x-nav-link href="{{ route('programas.index') }}" :active="request()->routeIs('programas.*')">
            {{ __('Programas') }}
        </x-nav-link>
        <x-nav-link href="{{ route('fichas.index') }}" :active="request()->routeIs('fichas.*')">
            {{ __('Fichas') }}
        </x-nav-link>
        <x-nav-link href="{{ route('instructors.index') }}" :active="request()->routeIs('instructors.*')">
            {{ __('Instructores') }}
        </x-nav-link>
        <x-nav-link href="{{ route('pruebas.index') }}" :active="request()->routeIs('pruebas.*')">
            {{ __('Pruebas') }}
        </x-nav-link>
        <x-nav-link href="{{ route('solicitud_comites.index') }}" :active="request()->routeIs('solicitud_comites.*')">
            {{ __('solicitud_comites') }}
        </x-nav-link>
        <x-nav-link href="{{ route('comites.index') }}" :active="request()->routeIs('comites.*')">
            {{ __('comites') }}
        </x-nav-link>
        <x-nav-link href="{{ route('aprendices_View.index') }}" :active="request()->routeIs('aprendices_View.*')">
            {{ __('aprendices_view') }}
        </x-nav-link>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
