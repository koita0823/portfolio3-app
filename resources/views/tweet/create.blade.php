
<x-layout>
    <x-layout.single>
        <h1 style="text-align: center;">投稿ページ</h1>
        <form "action="{{ route('tweet.create') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div style="margin-top: 0.25rem;">
                <textarea type="text" name="tweet" rows="3" 
                    style="margin-top: 0.25rem; display: block; width: 100%; font-size: 0.875rem; 
                    border-color: #e2e8f0; padding: 0.5rem; border-radius: 0.375rem;"
                    placeholder="どんなことがありましたか？出来事や感じたとこを書いてみましょう。">
                </textarea>
            </div> 
            <x-tweet.form.image></x-tweet.form.image>   
            @error('tweet')
            <p style="color: red;">{{ $message }}</p>
            @enderror 
            <input type="file" name="imgPath">
            <x-element.button>投稿</x-element.button>
        </form> 
    </x-layout.single>      
</x-layout>
      