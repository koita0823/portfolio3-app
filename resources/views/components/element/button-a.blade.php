@props([
    'href' => '',
    'theme' => 'primary',
    ])
<link rel="stylesheet" href="{{ asset('css/button-a.css') }}"> 
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
@php 
    if(!function_exists('getThemeClassForButtonA')) {
        function getThemeClassForButtonA($theme) {
            return match ($theme) {
                'primary' => 'text-white bg-blue-500 hover:bg-blue-600 focus:ring-blue-500',
                'secondary' => 'text-white bg-red-500 hover:bg-red-600 focus:ring-red-500',
                default => '',
            };
        }
    }
@endphp
<a href="{{ $href }}" class="focus:outline-none focus:ring-2 focus:ring-offset-2 
    {{ getThemeClassForButtonA($theme) }} ">{{ $slot }}
</a>    