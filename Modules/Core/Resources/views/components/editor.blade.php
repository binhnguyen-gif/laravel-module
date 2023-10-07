<div class="form-group mb-3">
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea name="{{ $name  }}" class="form-control tinymce-editor"
              id="{{ $name }}">{!! !empty($item->$name) ? $item->$name : old($name) !!}</textarea>

    @if($errors->has($name))
        <div class="invalid-feedback" style="display: block">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>
@push('styles')
    <link href="{{ URL::asset('assets/css/tinymce.css') }}" rel="stylesheet" />
@endpush
@push('scripts')
    <script>
        var modelUpload = '{{ $modelUpload }}'
    </script>
    <!--Summernote js-->
    <script src="{{ URL::asset('assets/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/tinymce.js') }}"></script>
@endpush
