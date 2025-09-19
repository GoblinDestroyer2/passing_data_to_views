<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showroom - FutureDrive</title>
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
        .car-list { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
            gap: 20px; 
            margin-top: 20px;
        }
        .car-item { 
            border: 1px solid #ccc; 
            padding: 15px; 
            border-radius: 5px; 
            background-color: #f9f9f9;
        }
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

@section('title', 'Showroom')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-center">De showroom:</h1>

<div class="grid gap-6 
            grid-cols-1 
            sm:grid-cols-2 
            md:grid-cols-3 
            lg:grid-cols-4">

    @foreach($showroom as $car)
        {{-- Card --}}
        <div class="bg-white rounded-xl shadow-md overflow-hidden relative group hover:shadow-xl transition">

            {{-- Auto naam --}}
            <div class="p-4 flex justify-between items-center">
                <h2 class="text-lg font-semibold">
                    {{ $car['brand'] }} - {{ $car['model'] }}
                </h2>
            </div>

            {{-- Afbeelding --}}
            <div class="relative">
                <img src="https://via.placeholder.com/400x250" 
                     alt="Auto" 
                     class="w-full h-48 object-cover">
                
                {{-- Mobiel: prijs in afbeelding rechtsonder --}}
                <div class="absolute bottom-2 right-2 bg-white/80 px-2 py-1 rounded text-sm font-bold md:hidden">
                    €{{ number_format($car['price'], 0, ',', '.') }},-
                </div>
            </div>

            {{-- Desktop & tablet: prijs + knop --}}
            <div class="p-4 flex justify-between items-center">
                <span class="font-bold hidden md:inline">
                    €{{ number_format($car['price'], 0, ',', '.') }},-
                </span>

                {{-- Desktop: knop zichtbaar --}}
                <a href="{{ url('/contact') }}" 
                   class="hidden lg:inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Bekijk details
                </a>
            </div>

            {{-- Tablet & mobiel: hele card klikbaar --}}
            <a href="{{ url('/contact') }}" class="absolute inset-0 md:block lg:hidden"></a>
        </div>
    @endforeach
</div>
@endsection
    </div>
</body>
</html>