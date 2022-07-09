<link rel="stylesheet" href="{{ asset('css/create.css') }}"> 
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<script src="{{ mix('/js/app.js') }}"></script>
<x-layout>
    <x-layout.single>
        <h1>投稿ページ</h1>
        <form "action="{{ route('tweet.mypage') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div style="margin-top: 0.25rem;">
                <textarea type="text" name="tweet" rows="4" 
                    class="focus:ring-blue-400 focus:border-blue-400"
                    placeholder="どんなことがありましたか？出来事や感じたとこを書いてみましょう。">
                </textarea>
            </div> 
            <input type="file" name="image[]">

            @error('tweet')
            <p>{{ $message }}</p>
            @enderror 
            
            <x-element.button>投稿</x-element.button>
        </form> 
    </x-layout.single>      
</x-layout>
      