@props([
    'images' => []
])

<link rel="stylesheet" href="{{ asset('css/images.css') }}"> 
@if(count($images) > 0)
<div class="image" x-data="{}">
    <div class="image2">
        @foreach($images as $image)
        <div class="image3">
            <div class="image4">
                <a @click="$dispatch('img-modal', { imgModalSrc: 
                    '{{ asset('storage/images/' . $image->name) }}' })">               
                    <img alt="{{ $image->name }}" style="object-fit: cover;" 
                    src="{{ asset('storage/images/' . $image->name) }}">
                </a>    
            </div>    
        </div>
        @endforeach
    </div>
</div>    
@endif

@once 
    <div x-data="{ imgModal :false, imgModalSrc : '' }"></div>