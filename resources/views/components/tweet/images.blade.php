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
    <div x-data="{ imgModal :false, imgModalSrc : '' }">
        <div class="modal1" @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc;"
            x-cloak 
            x-show="imgModal">
            <div class="modal2" @click.away="imgModal" =''">
                <div class="modal3">
                    <button @click="imgModal = ''"></button>
                </div>
                <div class="modal4">
                    <img :alt="imgModalSrc" :src="imgModalSrc">
                </div>
            </div>    
        </div>
    </div>        
@endonce    