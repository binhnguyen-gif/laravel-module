<label for="{{ $name }}">{{ $label }}</label>

<div class="form-group mb-3 component-{{ $name }}">
    <select name="{{ $name }}{{ !empty($multiple) ? '[]' : '' }}"
            id="{{ $name }}"
            {{ !empty($multiple) ? 'multiple' : '' }}
            class="form-control custom-select sumoselect @error(get_dot_array_form($name)) is-invalid @enderror"
            placeholder="{{ $placeholder ?? $label }}"
            data-search="{{ !empty($search) ? 'true' : 'false' }}"
            data-search-text="{{ ($searchText) ?? '' }}"
            data-select-all="{{ !empty($selectAll) ? 'true' : 'false' }}"
            data-ok-cancel-in-multi="{{ !empty($okCancelInMulti) ? 'true' : 'false' }}"
    >
        @if(!empty($allowClear ?? true))
            <option value="">{{ $placeholder ?? "--- {$label} ---" }}</option>
        @endif
        @foreach($options as $option)
            <option value="{{ $option['value'] }}"
                {{ get_selected_value($option['value'], old(get_dot_array_form($name), $value ?? object_get($item, get_dot_array_form($name)) ?? $default ?? null)) }}
            >
                {{ $option['name'] }}
            </option>
        @endforeach
    </select>
</div>
@push('styles')
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/jquery.sumoselect/sumoselect.min.css') }}">
    <style>
        .SumoSelect>.CaptionCont{
            border: 1px solid #e2e7f1;
        }
        .SumoSelect>.CaptionCont>label>i{
            top: 5px;
        }
        .SumoSelect{
            min-width: 200px;
            width: 100%;
            z-index: 1;
        }
        select.form-control[multiple], select.form-control[size]{
            height: 30px;
        }
    </style>
@endpush
@push('scripts')
    <script src="{{ URL::asset('/assets/libs/jquery.sumoselect/jquery.sumoselect.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/sumoselect.js') }}"></script>
@endpush
