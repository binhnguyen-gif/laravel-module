<form method="POST" action="{{ route('core.admin.setting.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-6">
            <x-form-input type="email" name="contact_email" label="Email Contact" :item="$item"></x-form-input>
            <x-form-input type="text" name="contact_phone" label="Phone Contact" :item="$item"></x-form-input>
            <x-form-input type="text" name="hotline" label="Phone Hotline" :item="$item"></x-form-input>
            <x-form-input type="text" name="contact_address" label="Address Contact" :item="$item"></x-form-input>
            <x-form-input type="text" name="link_facebook" label="Facebook link" :item="$item"></x-form-input>
        </div>
        <div class="col-6">
            <x-form-input type="text" name="link_youtube" label="Youtube link" :item="$item"></x-form-input>
            <x-form-input type="text" name="link_twitter" label="Twitter link" :item="$item"></x-form-input>
            <x-form-input type="text" name="link_linkenin" label="Linkenin link" :item="$item"></x-form-input>
            <x-form-input type="text" name="link_instagram" label="Instagram link" :item="$item"></x-form-input>
            <x-form-input type="text" name="link_instagram" label="Instagram link" :item="$item"></x-form-input>
        </div>
        <div class="col-12">
            <x-form-textarea type="text" name="style" label="Script Header" :item="$item"></x-form-textarea>
        </div>
        <div class="col-12">
            <x-form-textarea type="text" name="script" label="Script Footer" :item="$item"></x-form-textarea>
        </div>
        <div class="col-12">
            <x-form-editor type="text" name="footer_copyright" label="Footer copyright" :item="$item"></x-form-editor>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>

</form>
