<div class="form-group mb-3">
    <label for="{{ $name }}">{{ $label }}
        @if($required)
        <span class="text-danger">*</span>
        @endif
    </label>
    <input name="{{ $name  }}" type="{{ isset($type) ? $type : 'text' }}"
           {{ $required ? 'required' : '' }}
           class="form-control"
           id="{{ $name }}"
           placeholder="{{ isset($placeholder) ? $placeholder : $label }}"
           value="{{ !empty($item->$name) ? $item->$name : old($name) }}">

    @if($errors->has($name))
        <div class="invalid-feedback" style="display: block">
            {{ $errors->first($name) }}
        </div>
    @endif

</div>
