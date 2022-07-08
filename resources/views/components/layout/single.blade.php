<div class="container" style="display:flex; justify-content: center;">
    <div style="max-width: 640px; width: 100%;">
        @auth
        <form method="post" action="{{ route('logout') }}">
            @csrf
            <div class="logout" style="display: flex; justify-content: flex-end; padding: 1rem;">
                <button style="margin-top: 0.5rem; font-size: 1rem; color: #c05621;">ログアウト</button>
            </div>
        </form>
        @endauth

        {{ $slot }}
    </div>
</div>