<div class="accordion custom-accordionwitharrow" id="accordion-customerlink">
    <div class="card mb-1 shadow-none border">
        <a href="" class="text-dark" data-toggle="collapse"
           data-target="#collapseOne-customlink" aria-expanded="true"
           aria-controls="collapseOne-customlink">
            <div class="card-header" id="headingOne-customlink">
                <h5 class="m-0 font-size-16">Custom link <i class="uil uil-angle-down float-right accordion-arrow"></i>
                </h5>
            </div>
        </a>
        <div id="collapseOne-customlink" class="collapse" aria-labelledby="headingOne-customlink"
             data-parent="#accordion-customerlink">
            <div class="card-body text-muted">
                <form action="{{ route('menu.admin.menu_item.store') }}" method="POST" id="submitDefault">
                    @csrf
                    <input type="text" hidden name="menu_builder_type" value="custom_link">
                    <input type="text" hidden name="menu_id" value="{{ $menuId }}">
                    <x-form-input type="text" name="name" :item="$item" label="Name" required="true"></x-form-input>
                    <x-form-input type="text" name="url" :item="$item" label="Url" required="true"></x-form-input>
                    <x-form-select name="target" :item="$item" label="Target" :options="get_target_menu()"></x-form-select>
                    <x-form-input type="text" name="icon" :item="$item" label="Icon"></x-form-input>
                    <x-form-input type="text" name="class" :item="$item" label="Class"></x-form-input>

                    <div class="action text-right">
                        <button type="submit" class="btn btn-primary">Add to menu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function (){
            $("#submitDefault").on('submit',function(e) {
                e.preventDefault();
                var form = $(this);
                var actionUrl = form.attr('action');
                console.log(form.serialize())
                $.ajax({
                    type: "POST",
                    url: actionUrl,
                    data: form.serialize(),
                    success: function(data)
                    {
                        location.reload()
                    }
                });

            });
        })
    </script>

@endpush
