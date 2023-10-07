
<div class="form-group mb-3">
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea name="{{ $name  }}"
           class="form-control"
           id="{{ $name }}"
           placeholder="{{ isset($placeholder) ? $placeholder : $label }}"
            >{{ !empty($item->$name) ? $item->$name : old($name) }}</textarea>

    @if($errors->has($name))
        <div class="invalid-feedback" style="display: block">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>
