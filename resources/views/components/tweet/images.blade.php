@props([
    'images' => []
])

@if(count($images) > 0)
        @foreach($images as $image)             
                <img src="{{ asset('storage/images/'.$image->name) }}">   
        @endforeach
    </div>  
@endif

