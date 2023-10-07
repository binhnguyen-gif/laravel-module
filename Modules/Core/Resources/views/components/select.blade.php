<label for="">{{ $label }}</label>
<select class="custom-select mb-2" name="{{ $name }}">
    <option value="" selected>-- {{ $label }} --</option>
    @foreach($options as $option)
        <option value="{{ $option['value'] }}"
        {{ isset($item) && $item->$name === $option['value'] ? 'selected' : '' }}>{{ $option['name'] }}</option>
    @endforeach
</select>
