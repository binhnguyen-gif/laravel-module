<style>
    #file-input-{{$name}} {
        display: none;
    }
    #multiple-preview-{{$name}}{
        display: flex;
        flex-wrap: wrap;
        width: 100%;
    }
    #multiple-preview-{{$name}} img{
        min-width: 100px;
        max-width: 150px;
        height: 100px;
        object-fit: cover;
        width: 50%;
    }

    .preview.preview-image {
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 100%;
        max-width: 350px;
        /*margin: auto;*/
        /*border: 1px dashed #CCCCCC;*/
        /*height: 250px;*/
        /*background-color: rgb(255, 255, 255);*/
        /*box-shadow: 0 0 20px rgba(170, 170, 170, 0.2);*/
    }

    .preview-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border: 1px dashed #CCCCCC;

    }

    .preview-image label {
        cursor: pointer;
        /*color: #fff;*/
        border-radius: 5px;
        padding: 10px 20px;
        /*background-color: rgb(101, 101, 255);*/
        margin-top: 20px;
        width: 100%;
        text-align: center;
    }
</style>
<div class="mb-3">
    <label for="">{{ $label }}</label>
    <div class="preview preview-image">
        <div id="multiple-preview-{{$name}}">
            @if(!empty($item) && $item->hasMedia($name))
                @foreach($item->getMedia($name) as $img)
                    <img src="{{ $img->getUrl() }}" />
                @endforeach
            @endif
        </div>
        <input name="{{ $name }}[]" accept="image/*" type="file" multiple id="file-input-{{$name}}" />
        <label class="btn btn-soft-primary" for="file-input-{{$name}}">{{ $label }}</label>
    </div>
</div>



@push('scripts')
    <script>

        document.getElementById("file-input-{{$name}}").addEventListener("change", (e) => {
            if (e.target.files.length) {
                let previewImage = document.getElementById('multiple-preview-{{$name}}')
                for(let i = 0; i < e.target.files.length; i++){
                    let src = URL.createObjectURL(e.target.files[i]);
                    var elem = document.createElement("img");
                    elem.setAttribute('src', src)
                    previewImage.appendChild(elem)
                }
            }
        });
    </script>
@endpush
