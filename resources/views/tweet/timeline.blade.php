<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<script src="{{ mix('/js/app.js') }}"></script>
<x-layout>
    <x-layout.single>
        <x-tweet.list :tweets="$tweets"></x-tweet.list>
    </x-layout.single>        
</x-layout>