<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')    
</head>

<body class="antialiased">
    
    {{-- @include('partials.header') --}}
    {{-- @include('partials.navigation') --}}
    
    <div class="container mx-auto mt-24">
        <h1 class="text-4xl font-bold">Do your thing!</h1>
        <p class="mt-4 text-lg">
            About this build:
            <ul class="mt-4">
                <li>Laravel 9</li>
                <li>Vite JS</li>
                <li>Alpine JS</li>
                <li>Tailwind CSS</li>
            </ul>
        </p>
        <p class="mt-4 text-lg">
            This build uses Blade and not Twig: <strong>resources/views</strong>
        </p>
        <p class="mt-4 text-lg">
            You don't have to use Tailwind (but I would suggest trying it.)
        </p>
    </div>
    
    {{-- @include('partials.footer') --}}
    {{-- @include('partials.scripts') --}}

</body>

</html>
