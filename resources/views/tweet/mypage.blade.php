<link rel="stylesheet" href="{{ asset('css/list.css') }}"> 
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<x-layout>
    <x-layout.single>
        <h2 style="text-align: center; color: #dd6b20; font-size: 2.25rem; 
            font-weight: 700; margin-top: 2rem; margin-bottom: 2rem;">
            HOME
        </h2> 
        @auth  
        <a href="/create">
            <x-element.button>投稿する</x-element.button>
        </a> 
        <x-tweet.list :tweets="$tweets"></x-tweet.list>
        @endauth
    </x-layout.single> 
</x-layout>
@guest 
<div style="display: flex; flex-wrap: wrap; justify-content: center;">
    <div style="width: 50%; padding: 1rem;display: flex; flex-wrap: wrap; justify-content: space-evenly;">
        <x-element.button-a :href="route('login')">ログイン</x-element.button-a>
        <x-element.button-a :href="route('register')" theme="secondary">会員登録</x-element.button-a>
    </div>
</div>
@endguest