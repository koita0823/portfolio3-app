@props([
    'images' => []
])

@if(count($images) > 0)
    <div>
        @foreach($images as $image) 
            @if(file_exists(public_path().'/storage/images/'. $image->name))            
                <img src="{{ asset('storage/images/'.$image->name) }}"> 
            @endif      
        @endforeach
    </div>     
@endif

