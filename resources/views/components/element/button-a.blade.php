@props([
    'href' => '',
    'theme' => 'primary',
    ])
@php 
    if(!function_exists('getThemeClassForButtonA')) {
        function getThemeClassForButtonA($theme) {
            return match ($theme) {
                'primary' => 'color: #fff; background-color: #fc8181;',
                'secondary' => 'color: #fff; background-color: #d69e2e;',
                default => '',
            };
        }
    }
@endphp
<a href="{{ $href }}" style="display: inline-flex; justify-content: center;
    padding-top: 0.5rem; padding-bottom: 0.5rem;padding-left: 1rem; padding-right: 1rem; 
    font-size: 0.875rem; font-weight: 600; border-radius: 0.375rem; {{ getThemeClassForButtonA($theme) }} ">
        {{ $slot}}
</a>    