@extends('layouts.app')

@section('title', 'Home — DevOps Demo')

@section('content')
    <h1>Hello, I'm <span class="highlight">learning DevOps</span> 👋</h1>
    <p>A simple Laravel app deployed on Laravel Cloud — no database, no fuss. Just clean code in the cloud.</p>
    <p>This project is my sandbox for learning DevOps concepts: deployments, environments, CI/CD pipelines, and more.</p>

    <div class="card">
        <h2>What is this?</h2>
        <p>This app demonstrates a zero-database Laravel deployment. It serves static content via Blade templates — perfect for learning how hosting, environment variables, and cloud deployments work.</p>
        <a href="{{ route('skills') }}" class="btn">View My Skills →</a>
    </div>

    <div class="card">
        <h2>Current Environment</h2>
        <p>App Environment: <span class="highlight">{{ app()->environment() }}</span></p>
        <p>PHP Version: <span class="highlight">{{ PHP_VERSION }}</span></p>
        <p>Laravel Version: <span class="highlight">{{ app()->version() }}</span></p>
    </div>
@endsection
