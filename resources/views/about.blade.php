@extends('layouts.app')

@section('title', 'About — DevOps Demo')

@section('content')
    <h1>About <span class="highlight">Me</span></h1>
    <p>A Laravel & PHP developer with 6+ years of experience, now expanding into the DevOps world.</p>

    <div class="card">
        <h2>Background</h2>
        <p>I've been building web applications with Laravel for years. Now I'm learning how to deploy, monitor, and scale them — because a developer who understands infrastructure is 10x more effective.</p>
    </div>

    <div class="card">
        <h2>Why DevOps?</h2>
        <p>I got tired of relying on someone else to deploy my code. I want to own the full lifecycle — from writing the feature to shipping it to production confidently.</p>
    </div>

    <div class="card">
        <h2>Goals</h2>
        <p>
            ✅ Containerize apps with Docker<br>
            ✅ Set up CI/CD with GitHub Actions<br>
            🔄 Deploy to cloud (AWS / Laravel Cloud)<br>
            🔄 Learn Terraform for infrastructure as code<br>
            🔄 Monitor apps with Prometheus + Grafana
        </p>
    </div>
@endsection
