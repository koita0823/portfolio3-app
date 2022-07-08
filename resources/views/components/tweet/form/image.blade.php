<link rel="stylesheet" href="{{ asset('css/image.css') }}">
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<script src="{{ mix('js/app.js') }}"></script>

<div class="imageForm" x-data="inputFormHandler()">
    <template x-for"(field, i) in fields" :key="i">
        <div class="imageForm2">
            <label for="field.id">
                <input type="file" accept="image/*" :id="field.id" name="images[]" 
                @change="fields[i].file = $event.target.files[0]">
                <span x-text="field.file ? field.file.name : '画像を選択'"></span>
            </label> 
        </div>
    </template>

    <template x-if="fields.length < 2">
        <button type="button" @click="addField()" class="hover:bg-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" 
                viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
            </svg>
            <span>画像を追加</span>
        </button>
    </template>
</div>

<script>
    function inputFormHandler() {
        return {
            fields: [],
            addField() {
                const i = this.fields.length;
                this.fields.push({
                    file: '',
                    id: 'input-image-${i}'
                });
            },
        }
    }
</script>