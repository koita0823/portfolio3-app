<link rel="stylesheet" href="{{ asset('css/create.css') }}"> 
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<x-layout>
    <x-layout.single>
        <h1>投稿ページ</h1>
        <form "action="{{ route('tweet.create') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div style="margin-top: 0.25rem;">
                <textarea type="text" name="tweet" rows="3" 
                    class="focus:ring-blue-400 focus:border-blue-400"
                    placeholder="どんなことがありましたか？出来事や感じたとこを書いてみましょう。">
                </textarea>
            </div> 
            @error('tweet')
            <p>{{ $message }}</p>
            @enderror 
            <x-tweet.form.image></x-tweet.form.image>
            <x-element.button>投稿</x-element.button>
        </form> 
    </x-layout.single>      
</x-layout>
      