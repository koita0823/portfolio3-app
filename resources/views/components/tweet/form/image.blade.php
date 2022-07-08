<link rel="stylesheet" href="{{ asset('css/image.css') }}">
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