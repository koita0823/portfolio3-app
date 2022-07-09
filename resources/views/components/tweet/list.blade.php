@props([
    'tweets' => []
])
<link rel="stylesheet" href="{{ asset('css/list.css') }}"> 
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<script src="{{ mix('js/app.js') }}"></script>
<div class="list">
    <ul>
        @foreach($tweets as $tweet)
            <li class="border-b last:border-b-0">
                <div>    
                    <span>
                        {{ $tweet->user->name }}
                    </span>
                    <p>{!! nl2br(e($tweet->content)) !!}</p>
                    <x-tweet.images :images="$tweet->images"></x-tweet.images>
                </div>    
                <div>
                    <x-tweet.options :tweetId="$tweet->id" :userId="$tweet->user_id"></x-tweet.options>
                </div>
            </li>
        @endforeach    
    </ul>
</div>    