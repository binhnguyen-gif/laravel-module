<style>
    #file-input-{{$name}} {
        display: none;
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
        @if(!empty($item) && $item->hasMedia($name))
            <img id="img-preview-{{$name}}" src="{{ isset($item) && $item->hasMedia($name) ? $item->getMedia($name)->last()->getUrl() : null }}" />
        @else
            <img id="img-preview-{{$name}}"  />
        @endif
        <input name="{{ $name }}" accept="image/*" type="file" id="file-input-{{$name}}" />
        <label class="btn btn-soft-primary" for="file-input-{{$name}}">{{ $label }}</label>
    </div>
</div>



@push('scripts')
    <script>
        {{--let input = document.getElementById("file-input-{{$name}}");--}}
        {{--let image = document.getElementById("img-preview-{{$name}}");--}}

        document.getElementById("file-input-{{$name}}").addEventListener("change", (e) => {
            if (e.target.files.length) {
                let src = URL.createObjectURL(e.target.files[0]);
                document.getElementById("img-preview-{{$name}}").src = src;
            }
        });
    </script>
@endpush
