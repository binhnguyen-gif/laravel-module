<form method="POST" action="{{ route('core.admin.setting.store') }}" enctype="multipart/form-data">
    @csrf
    <x-form-input type="text" name="site_name" :item="$item" label="Site title"></x-form-input>
    <x-form-input type="text" name="time_zone" :item="$item" label="Time Zone"></x-form-input>
    <x-form-image type="text" name="logo" :item="item_media('logo')" label="Logo"></x-form-image>
    <x-form-image type="text" name="favicon" :item="item_media('favicon')" label="Favicon"></x-form-image>
    <x-form-image type="text" name="admin_logo" :item="item_media('admin_logo')" label="Admin logo"></x-form-image>

    <button type="submit" class="btn btn-success">Submit</button>
</form>
