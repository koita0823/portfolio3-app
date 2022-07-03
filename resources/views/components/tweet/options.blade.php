<div>
    <form action="{{ route('tweet.delete', ['tweetId' => $tweetId]) }}"
        method="post" onclick="return confirm('削除してもよろしいですか？');">
        @method('DELETE')
        @csrf
        <button type="submit" style="display: flex; align-items:center;">削除</button>
    </form>
</div>