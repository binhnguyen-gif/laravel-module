<div class="row">
    <div class="col-9">
        <x-form-input type="text" name="name" :item="$item" label="Name"></x-form-input>
        <x-form-input type="email" name="email" :item="$item" label="Email"></x-form-input>

    </div>
    <div class="col-3">
        <x-form-select name="type" :item="$item" label="Type" :options="config('account.type')"></x-form-select>
    </div>
</div>
