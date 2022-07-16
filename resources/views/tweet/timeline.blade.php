<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
<script src="{{ mix('/js/app.js') }}"></script>
<x-layout>
    <x-layout.single>
        <h2>みんなの投稿</h2>
        <x-tweet.list :tweets="$tweets"></x-tweet.list>
    </x-layout.single>        
</x-layout>
