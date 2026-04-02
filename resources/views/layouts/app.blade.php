<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DevOps Demo')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #0f172a; color: #e2e8f0; min-height: 100vh; }
        nav { background: #1e293b; padding: 1rem 2rem; display: flex; align-items: center; gap: 2rem; border-bottom: 1px solid #334155; }
        nav a { color: #94a3b8; text-decoration: none; font-weight: 500; transition: color .2s; }
        nav a:hover, nav a.active { color: #38bdf8; }
        nav .brand { color: #38bdf8; font-weight: 700; font-size: 1.2rem; margin-right: auto; }
        main { max-width: 900px; margin: 4rem auto; padding: 0 2rem; }
        h1 { font-size: 2.5rem; font-weight: 700; color: #f8fafc; margin-bottom: 1rem; }
        h2 { font-size: 1.5rem; color: #38bdf8; margin-bottom: .75rem; }
        p { color: #94a3b8; line-height: 1.8; margin-bottom: 1rem; }
        .badge { display: inline-block; background: #1e3a5f; color: #38bdf8; border: 1px solid #1d4ed8; padding: .25rem .75rem; border-radius: 999px; font-size: .85rem; margin: .25rem; }
        .card { background: #1e293b; border: 1px solid #334155; border-radius: .75rem; padding: 1.5rem; margin-bottom: 1.5rem; }
        .highlight { color: #38bdf8; }
        .btn { display: inline-block; background: #0ea5e9; color: #fff; padding: .6rem 1.4rem; border-radius: .5rem; text-decoration: none; font-weight: 600; margin-top: 1rem; transition: background .2s; }
        .btn:hover { background: #0284c7; }
    </style>
</head>
<body>
    <nav>
        <span class="brand">&lt;DevOps Demo /&gt;</span>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('skills') }}" class="{{ request()->routeIs('skills') ? 'active' : '' }}">Skills</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
