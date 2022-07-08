@props([
    'images' => []
])

<link rel="stylesheet" href="{{ asset('css/images.css') }}">
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<script src="{{ mix('js/app.js') }}"></script>
@if(count($images) > 0)
<div class="image" x-data="{}">
    <div class="image2">
        @foreach($images as $image)
        <div class="image3">
            <div class="image4">
                <a @click="$dispatch('img-modal', { imgModalSrc: 
                    '{{ asset('storage/images/' . $image->name) }}' })">               
                    <img alt="{{ $image->name }}" 
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
            x-show="imgModal"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform"
            x-transition:enter-end="opacity-100 transform"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform"
            x-transition:leave-end="opacity-0 transform"
            x-on:click.away="imgModalSrc = ''">
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