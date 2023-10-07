<div class="row">
    <div class="col-9">
        <x-form-input-slug type="text" name="name" :item="$item" label="Name"></x-form-input-slug>
        <x-form-textarea name="description" :item="$item" label="Description"></x-form-textarea>
        <x-form-editor name="content" :item="$item" label="Content"></x-form-editor>

    </div>
    <div class="col-3">
        <x-form-select name="parent_id" :item="$item" label="Parent" :options="_get_parent_blog_category()"></x-form-select>
        <x-form-image name="image" :item="$item" label="Image"></x-form-image>
        <x-form-switch default="true" name="is_published" :item="$item" label="Publish" ></x-form-switch>
    </div>
</div>
