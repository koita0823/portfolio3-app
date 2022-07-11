<link rel="stylesheet" href="{{ asset('css/create.css') }}"> 
<x-layout>
    <x-layout.single>
        <h2>投稿ページ</h2>
        <form "action="{{ route('tweet.timeline') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form">
                <textarea type="text" name="tweet" rows="4" 
                    class="focus:ring-blue-400 focus:border-blue-400"
                    placeholder="どんなことがありましたか？出来事や感じたとこを書いてみましょう。">
                </textarea>
            </div> 
            <input type="file" name="image[]">

            @error('tweet')
                <p>{{ $message }}</p>
            @enderror 
            <div class="button">
                <x-element.button>投稿</x-element.button>
            </div>    
        </form> 
    </x-layout.single>      
</x-layout>
      