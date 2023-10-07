@foreach($menuBuilder as $builderBlock)
    <div class="accordion custom-accordionwitharrow" id="accordion-{{ $builderBlock['builder_id'] }}">
        <div class="card mb-1 shadow-none border">
            <a href="" class="text-dark" data-toggle="collapse"
               data-target="#collapseOne-{{ $builderBlock['builder_id'] }}" aria-expanded="true"
               aria-controls="collapseOne-{{ $builderBlock['builder_id'] }}">
                <div class="card-header" id="headingOne-{{ $builderBlock['builder_id'] }}">
                    <h5 class="m-0 font-size-16">{{ $builderBlock['name'] }} <i
                            class="uil uil-angle-down float-right accordion-arrow"></i>
                    </h5>
                </div>
            </a>
            <div id="collapseOne-{{ $builderBlock['builder_id'] }}" class="collapse"
                 aria-labelledby="headingOne-{{ $builderBlock['builder_id'] }}"
                 data-parent="#accordion-{{ $builderBlock['builder_id'] }}">
                <div class="card-body text-muted">
                    <form action="{{ route('menu.admin.menu_item.store') }}" method="POST"
                          id="submitDefault-{{ $builderBlock['builder_id'] }}">
                        @csrf
                        <input type="text" hidden name="menu_id" value="{{ $menuId }}">
                        <input type="text" hidden name="menu_builder_type" value="link_builder">
                        <input type="text" hidden name="class_name" value="{{ $builderBlock['class'] }}">
                        <input type="text" hidden name="menu_item_label" value="{{ $builderBlock['name'] }}">

                        <div class="form-group mb-3">
                            <label for="">Select {{ $builderBlock['name'] }} <span class="text-danger">*</span></label>
                            <select onchange="changeSelectType('{{ $builderBlock['builder_id'] }}', event)" required class="custom-select mb-2" name="class_id">
                                <option value="" selected>-- Select --</option>
                                @foreach($builderBlock['options'] as $option)
                                    <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Name <span class="text-danger">*</span>

                            </label>
                            <input name="name" type="text"
                                   required
                                   class="form-control"
                                   id="label-name-{{$builderBlock['builder_id']}}"
                                   placeholder="Name">

                        </div>

                        <x-form-select name="target" :item="null" label="Target"
                                       :options="get_target_menu()"></x-form-select>
                        <x-form-input type="text" name="icon" :item="null" label="Icon"></x-form-input>
                        <x-form-input type="text" name="class" :item="null" label="Class"></x-form-input>

                        <div class="action text-right">
                            <button type="submit" class="btn btn-primary">Add to menu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
@push('scripts')
    <script>
        function changeSelectType(idBlock, event){
            var selectElement = event.target;
            var text = selectElement.options[selectElement.selectedIndex].text
            document.getElementById(`label-name-${idBlock}`).value = text;
        }
    </script>
    @foreach($menuBuilder as $builderBlock)
        <script>
            $(document).ready(function () {
                $("#submitDefault-{{ $builderBlock['builder_id'] }}").on('submit', function (e) {
                    e.preventDefault();
                    var form = $(this);
                    var actionUrl = form.attr('action');
                    $.ajax({
                        type: "POST",
                        url: actionUrl,
                        data: form.serialize(),
                        success: function (data) {
                            location.reload()
                        }
                    });

                });
            })
        </script>
    @endforeach

@endpush
