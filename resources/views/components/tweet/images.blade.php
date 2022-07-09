@props([
    'images' => []
])

<link rel="stylesheet" href="{{ asset('css/images.css') }}">
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
                    <button @click="imgModal = ''">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 
                            8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 
                            1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 
                            10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div class="modal4">
                    <img :alt="imgModalSrc" :src="imgModalSrc">
                </div>
            </div>    
        </div>
    </div>        
@endonce    