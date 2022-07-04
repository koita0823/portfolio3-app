<link rel="stylesheet" href="{{ asset('css/image.css') }}">
<div class="imageForm" x-data="inputFormHandler()">
    <template x-for"(field, i) in fields" :key="i">
        <div class="imageForm2">
            <label for="field.id">
                <input type="file" accept="image/*" name="images[]" :id="field.id">
                <span x-text="field.file ? field.file.name : '画像を選択'"></span>
            </label> 
            <button type="reset"></button>
        </div>
    </template>
</div>