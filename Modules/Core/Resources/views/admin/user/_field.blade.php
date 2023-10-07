
<div class="row">
    <div class="col-9">
        <x-form-input type="text" name="name" :item="$item" label="Full name" required="true"></x-form-input>
        <x-form-input type="email" name="email" :item="$item" label="Email" required="true"></x-form-input>
        <x-form-input type="text" name="phone" :item="$item" label="Phone"></x-form-input>
        <x-form-input type="password" name="password" :item="null" label="Password"></x-form-input>
        <x-form-input type="password" name="re-password" :item="null" label="Re Password"></x-form-input>
        <x-form-select-multiple name="roles" label="Roles" :item="$item" :options="admin_roles()"></x-form-select-multiple>
    </div>
    <div class="col-3">
        <x-form-switch name="is_admin" :item="$item" label="Is Admin"></x-form-switch>
        <x-form-image name="avatar" :item="$item" label="Avatar"></x-form-image>
    </div>
</div>

@push('styles')
    <link href="{{ URL::asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/multiselect/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('scripts')
    <script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/multiselect/jquery.multi-select.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>

@endpush
