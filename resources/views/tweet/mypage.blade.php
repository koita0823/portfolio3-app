<link rel="stylesheet" href="{{ asset('css/mypage.css') }}"> 
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<x-layout>
    <h1>マイページ</h1>
    <x-layout.single>
        @auth  
            <a href="/create">
                <x-element.button>投稿する</x-element.button>
                <x-tweet.list :tweets="$tweets"></x-tweet.list>
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