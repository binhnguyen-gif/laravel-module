<div class="row">
    <div class="col-12">
        <x-form-input type="text" name="name" :item="$item" label="Menu name"></x-form-input>
        <x-form-input type="text" name="key" :item="$item" label="Menu key"></x-form-input>
        @if(!empty($item))
            <div class="mb-3 p-3 bg-light">
                {!! $item->code  !!}
            </div>
        @endif
    </div>
</div>
