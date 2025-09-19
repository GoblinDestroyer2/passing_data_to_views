<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - FutureDrive</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; }
        .menu-row { background-color: #f0f0f0; padding: 20px; }
        .content-row { background-color: #ffffff; padding: 20px; }
        .menu { display: flex; gap: 20px; }
        .menu a { 
            text-decoration: none; 
            color: #333; 
            padding: 10px 20px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            background-color: #fff;
        }
        .menu a:hover { background-color: #ddd; }
        .contact-info { 
            margin-top: 20px; 
            background-color: #f9f9f9; 
            padding: 20px; 
            border-radius: 5px; 
            border: 1px solid #ddd;
        }
        .contact-info p { margin: 10px 0; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <!-- Eerste rij - Menu -->
    <div class="menu-row">
        <div class="menu">
            <a href="/">Showroom</a>
            <a href="/contact">Contact</a>
        </div>
    </div>

    <!-- Tweede rij - Content -->
    <div class="content-row">
        @extends('layout')

@section('title', 'Contact')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-center">Contact:</h1>

<div class="bg-white p-6 rounded-xl shadow-md max-w-lg mx-auto">
    <p class="mb-2"><strong>Bedrijf:</strong> {{ $company->name }}</p>
    <p class="mb-2"><strong>Adres:</strong> {{ $company->address }}</p>
    <p class="mb-2"><strong>Telefoon:</strong> {{ $company->phone }}</p>
    <p class="mb-2"><strong>Email:</strong> {{ $company->email }}</p>
</div>
@endsection

    </div>
</body>
</html>