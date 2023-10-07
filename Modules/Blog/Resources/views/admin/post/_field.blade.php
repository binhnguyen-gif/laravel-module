<div class="row">
    <div class="col-9">
        <x-form-input-slug type="text" name="name" :item="$item" label="Name"></x-form-input-slug>
        <x-form-textarea name="description" :item="$item" label="Description"></x-form-textarea>
        <x-form-editor modelUpload="//Modules//Blog//Entities//Post" name="content" :item="$item" label="Content"></x-form-editor>

    </div>
    <div class="col-3">
        <x-form-select-multiple name="categories" placeholder="Select category" :multiple="false" label="Categories" :item="$item" :options="_get_parent_blog_category()"></x-form-select-multiple>
        <x-form-image name="image" :item="$item" label="Image"></x-form-image>
        <x-form-hashtag type="text" name="hashtag" :item="$item" label="Hashtag"></x-form-hashtag>
        <x-form-switch default="true" name="is_published" :item="$item" label="Publish" ></x-form-switch>
    </div>
</div>
