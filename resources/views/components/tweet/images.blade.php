@props([
    'images' => []
])

@if(count($images) > 0)
    <div class="image1">
        @foreach($images as $image)
            <div class="image2"> 
                <div class="image3">
                    @if(file_exists(public_path().'/storage/images/'. $image->name))            
                        <img src="{{ asset('storage/images/'.$image->name) }}"> 
                    @endif
                </div> 
            </div>             
        @endforeach
    </div>     
@endif

