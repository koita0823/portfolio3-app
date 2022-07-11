<link rel="stylesheet" href="{{ asset('css/mypage.css') }}"> 
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<x-layout>
    <x-layout.single>
        <h1>HOME</h1> 
        @auth  
            <a href="/create">
                <x-element.button>投稿する</x-element.button>
            </a> 
        @endauth
    </x-layout.single> 
</x-layout>
@guest 
    <div class="guest1">
        <div class="guest2">
            <x-element.button-a :href="route('login')">ログイン</x-element.button-a>
            <x-element.button-a :href="route('register')" theme="secondary">会員登録</x-element.button-a>
        </div>
    </div>
@endguest