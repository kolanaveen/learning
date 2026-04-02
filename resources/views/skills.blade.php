@extends('layouts.app')

@section('title', 'Skills — DevOps Demo')

@section('content')
    <h1>My <span class="highlight">Skills</span></h1>
    <p>A mix of what I already know and what I'm actively learning.</p>

    <div class="card">
        <h2>Development</h2>
        @foreach(['PHP', 'Laravel', 'MySQL', 'REST APIs', 'Vue.js', 'Git'] as $skill)
            <span class="badge">{{ $skill }}</span>
        @endforeach
    </div>

    <div class="card">
        <h2>DevOps (Learning)</h2>
        @foreach(['Docker', 'GitHub Actions', 'Linux', 'Nginx', 'AWS', 'Terraform', 'Laravel Cloud'] as $skill)
            <span class="badge">{{ $skill }}</span>
        @endforeach
    </div>

    <div class="card">
        <h2>Tools</h2>
        @foreach(['VS Code', 'Postman', 'TablePlus', 'GitHub', 'Composer', 'NPM'] as $skill)
            <span class="badge">{{ $skill }}</span>
        @endforeach
    </div>
@endsection
