<div class="custom-control custom-switch mb-2">
    <input value="0" checked
           type="text" name="{{ $name }}"
           hidden>
    <input
        name="{{ $name }}" {{ (isset($item) && $item->$name == true) ? 'checked' : (!isset($item) && $default == true ? 'checked' : '') }}
        value="1"
        type="checkbox"
        class="custom-control-input"
        id="customSwitch-{{ $name }}">
    <label class="custom-control-label" for="customSwitch-{{ $name }}">{{ $label }}</label>
</div>
