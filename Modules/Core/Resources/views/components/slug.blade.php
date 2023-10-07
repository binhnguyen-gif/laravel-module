<style>
    #slug-input-{{$name}}{
        width: 50%;
        border: 1px solid #ccc;
    }
    .slug-generate a{
        color: #5369f8 !important;
    }
</style>
<div class="form-group mb-3">
    <label for="{{ $name }}">{{ $label }}</label>
    <input name="{{ $name  }}" type="{{ isset($type) ? $type : 'text' }}"
           class="form-control"
           id="{{ $name }}"
           placeholder="{{ isset($placeholder) ? $placeholder : $label }}"
           value="{{ !empty($item->$name) ? $item->$name : old($name) }}">

    @if($errors->has($name))
        <div class="invalid-feedback" style="display: block">
            {{ $errors->first($name) }}
        </div>
    @endif
    <div class="mt-2 slug-generate">
        <a id="slug-generate-{{$name}}" >
            {{ env('APP_URL').'/' }}<span id="slug-{{$name}}">
                {{ !empty($item->seoUrl->slug) ? $item->seoUrl->slug : '' }}
            </span>
            <span class="btn btn-soft-info btn-sm" onclick="editSlug()"> Edit</span>
        </a>
        <a style="display: none" id="slug-edit-{{$name}}">
            {{ env('APP_URL').'/' }}<input type="text"
                                           id="slug-input-{{$name}}"
                                           value="{{ !empty($item->seoUrl->slug) ? $item->seoUrl->slug : '' }}"
                                           name="url">
            <span class="btn btn-soft-info btn-sm" onclick="submitSlug()"> Submit</span>
            <span class="btn btn-soft-danger btn-sm" onclick="cancelSlug()"> Cancel</span>
        </a>
    </div>

</div>


<script>
    function convert(str) {
        str = str.replace(/^\s+|\s+$/g, ''); // trim
        str = str.toLowerCase();
        var from = "àáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ·/_,:;";
        var to = "aaaaaaaaaaaaaaaaaeeeeeeeeeeeiiiiiooooooooooooooooouuuuuuuuuuuyyyyyd------";
        for (var i = 0, l = from.length; i < l; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }

        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes

        return str;
    };
    function convertToSlug() {
        var input = document.getElementById('{{ $name }}')
        input.addEventListener('focusout', function (){
            var inputSlug = document.getElementById('slug-input-{{$name}}')
            if (inputSlug.value == "" || inputSlug.value == null){
                let text = input.value
                var slug = document.getElementById('slug-{{$name}}')
                slug.innerText =  convert(text)
                inputSlug.value =  convert(text)
            }

        })
    }
    function editSlug(){
        var edit = document.getElementById('slug-edit-{{$name}}')
        var generate = document.getElementById('slug-generate-{{$name}}')
        edit.style.display = 'block'
        generate.style.display = 'none'
    }
    function cancelSlug(){
        var edit = document.getElementById('slug-edit-{{$name}}')
        var generate = document.getElementById('slug-generate-{{$name}}')
        edit.style.display = 'none'
        generate.style.display = 'block'
    }
    function submitSlug(){
        var edit = document.getElementById('slug-edit-{{$name}}')
        var generate = document.getElementById('slug-generate-{{$name}}')
        var inputSlug = document.getElementById('slug-input-{{$name}}')
        var slug = document.getElementById('slug-{{$name}}')
        slug.innerText = inputSlug.value

        edit.style.display = 'none'
        generate.style.display = 'block'
    }
    convertToSlug()
</script>
