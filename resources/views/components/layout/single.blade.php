<link rel="stylesheet" href="{{ asset('css/single.css') }}">
<div class="container">
    <div class="container2">
        @auth
        <form method="post" action="{{ route('logout') }}">
            @csrf
            <div class="logout">
                <button>ログアウト</button>
            </div>
        </form>
        @endauth

        {{ $slot }}
    </div>
</div>