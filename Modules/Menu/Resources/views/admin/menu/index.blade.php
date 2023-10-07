@extends('core::layouts.vertical')

@section('css')

<link href="{{ URL::asset('/assets/libs/nestable2/jquery.nestable.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .dd-handle{
            /*height: 40px;*/
        }
    </style>
@endsection
{{--@include("menu::style")--}}
@section('breadcrumb')
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Menus</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Menus</h4>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <label class="font-weight-bold d-inline mr-2"><i
                                    class="icon-dual icon-xs mr-2" data-feather="hard-drive"></i>
                                Select a menu to edit: </label>
                            <div class="dropdown d-inline">
                                <a class="font-weight-bold dropdown-toggle" href="#" role="button"
                                   id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    {{ $activeOneMenu != null ? $activeOneMenu->name : 'Menus' }}
                                    <i class='uil uil-angle-down font-size-16 align-middle'></i>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    @foreach($items as $item)
                                        <a class="dropdown-item" href="?active_menu={{$item->id}}">
                                            <i class="icon-dual icon-xs mr-2"
                                               data-feather="hard-drive"></i>{{ $item->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col text-right">
                            @if($activeOneMenu !== null)
                                <a href="{{ route('menu.admin.menu.edit', $activeOneMenu->id) }}" class="btn btn-success">
                                   <i class="fa fa-pen"></i> Edit menu</a>
                            @endif
                            <a href="{{ route('menu.admin.menu.create') }}" class="btn btn-primary" id="btn-new-event"><i
                                    class="uil-plus mr-1"></i>Add New</a>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <input type="text" hidden name="menu_id" value=" {{ $activeOneMenu != null ? $activeOneMenu->id : null }}">
                    <h4 class="header-title mt-0 mb-1">Add menu item</h4>
                    <p class="sub-header">
                    </p>
                    @include("menu::admin.builder.custom-link", [
                                'item' => null,
                                'menuId' =>  $activeOneMenu != null ? $activeOneMenu->id : null
                                ])
                    {!! MenuBuilder::renderMenuItem($activeOneMenu != null ? $activeOneMenu->id : null) !!}
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body" id="menu-structure">
                    <h4 class="header-title mt-0 mb-1">Menu structure</h4>
                    <p class="sub-header">
                    </p>
                    <div class="dd" id="menuNestable"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var menuItems = @json($menuItem);
        var menuId = '{{ $activeOneMenu ? $activeOneMenu->id : null }}';
    </script>
    <script src="{{ URL::asset('/assets/libs/nestable2/jquery.nestable.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            "use strict";
            var adminPath = window.location.origin+'/admin'
            var token = $('meta[name="csrf-token"]').attr('content');
            function saveMenuItem() {
                var data = $('#menuNestable').nestable('asNestedSet');

                $.ajax({
                    url: '/admin/menu/item/update-tree',
                    type: 'POST',
                    data: {
                        menu: data,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (e) {
                        if (e.success) {
                            // toastr.success(e.message || 'Updated');
                        } else {
                            // toastr.error(e.message || 'Error');
                        }
                    },
                    error: function (e) {
                        // toastr.error(e.responseJSON.message || e.statusText);
                    }
                })
            }
            $('#menuNestable').nestable({
                json: menuItems,
                expandBtnHTML: '',
                collapseBtnHTML: '',
                contentCallback: function (item) {
                    return item.name;
                },
                itemRenderer: function(item_attrs, content, children, options, item) {
                    var Temp = `<div class="accordion custom-accordionwitharrow" id="accordion-menu-item-${item.id}">
                            <a style=" position: absolute;
                                right: 0;
                                top: 3px;" href="" class="text-dark" data-toggle="collapse"
                               data-target="#collapseOne-customlink-${item.id}" aria-expanded="true"
                               aria-controls="collapseOne-customlink-${item.id}">
                              <small>${item.menu_item_label}</small> <i class="uil uil-angle-down float-right accordion-arrow"></i>
                            </a>
                            <div id="collapseOne-customlink-${item.id}" class="collapse"
                                 data-parent="#accordion-menu-item-${item.id}">
                                <div class="card-body text-muted border">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="">Name <span class="text-danger">*</span></label>
                                            <input id="name-menu-item-${item.id}" required class="form-control" name="name" type="text" value="${item.name}">
                                        </div>
                                        <div class="form-group mb-3" style="display: ${item.builder_type == null ? "block" : "none" }">
                                            <label for="">Url <span class="text-danger">*</span></label>
                                            <input id="url-menu-item-${item.id}" class="form-control"
                                             required
                                            name="url" type="text" value="${item.url == null ? '' : item.url}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Target</label>
                                            <select id="target-menu-item-${item.id}" class="form-control" name="target">
                                                <option ${item.target == "_self" ? "selected" : ""} value="_self">_self</option>
                                                <option ${item.target == "_blank" ? "selected" : ""} value="_blank">_blank</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Icon</label>
                                            <input id="icon-menu-item-${item.id}" class="form-control" name="icon" type="text" value="${item.icon == null ? '' : item.icon}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Class</label>
                                            <input id="class-menu-item-${item.id}" class="form-control" name="class" type="text" value="${item.class == null ? '' : item.class}">
                                        </div>
                                    </div>
                                    <button onclick="deleteMenuItem('${item.id}')" class="btn btn-danger btn-sm">Delete</button>
                                    <button onclick="saveMenuItem('${item.id}')"  class="btn btn-success btn-sm">Save</button>
                                </div>
                            </div>
                        </div>
                        `
                    var item_attrs_string = $.map(item_attrs, function(value, key) {
                        return ' ' + key + '="' + value + '"';
                    }).join(' ');

                    var html = '<' + options.itemNodeName + item_attrs_string + '>';
                    html += '<div class="dd-handle-group">';
                    html += '<' + options.handleNodeName + ' class="' + options.handleClass + '">';
                    html += '<' + options.contentNodeName + ' class="' + options.contentClass + '">';
                    html += content;
                    html += '</' + options.contentNodeName + '>';
                    html += '</' + options.handleNodeName + '>';
                    html += '<div class="dd-handle-tool">';
                    html += Temp;
                    html += '</div>';
                    html += '</div>';
                    html += children;
                    html += '</' + options.itemNodeName + '>';

                    return html;
                }
            }).on('change', function () {
                saveMenuItem();
            })
        });

    </script>

    <script>
        $(document).ready(function () {
            "use strict";
            var labelValChange = false;
            $('#label').on('keyup', function () {
                labelValChange = true;
            }).on('change', function () {
                if (!$(this).val()) {
                    labelValChange = false;
                }
            });

            $('#menu_builder_class').on('change', function () {
                var classId = $(this).val().replace(/\\/g, '');

                $('.menu-item-panel').hide();
                $('.menu-item-panel').find('input,textarea,select').prop('disabled', true);
                $(`[data-class-name="${classId}"]`).show();
                $(`[data-class-name="${classId}"]`).find('input,textarea,select').prop('disabled', false);
            });

            $('.menu-builder-wrap').on('change', '.menu-item-panel:visible select[name^="menu_builder_args"]', function (e) {
                if (!labelValChange || !$('#label').val()) {
                    $('#label').val($(this).find('option:selected').text().replace(/[-]+/g, '').trim());
                }
            });

            setTimeout(function () {
                $('#menu_builder_class').trigger('change');
            }, 100);
        });
        function deleteMenuItem(ids){
            $.ajax({
                url: `/admin/menu/item/${ids}/destroy`,
                type: 'POST',
                data: {
                    _method: 'DELETE',
                    _token: '{{ csrf_token() }}',
                },
                success: function (r) {
                    location.reload()
                },
                error: function (e) {

                },
            });
        }

        function saveMenuItem(ids){
            let name = document.getElementById(`name-menu-item-${ids}`).value
            let url = document.getElementById(`url-menu-item-${ids}`).value
            let target = document.getElementById(`target-menu-item-${ids}`).value
            let icon = document.getElementById(`icon-menu-item-${ids}`).value
            let className = document.getElementById(`class-menu-item-${ids}`).value
            $.ajax({
                url: `/admin/menu/item/${ids}/update`,
                type: 'POST',
                data: {
                    _method: 'PUT',
                    _token: '{{ csrf_token() }}',
                    name: name,
                    url: url,
                    target: target,
                    icon: icon,
                    class: className
                },
                success: function (r) {
                    location.reload()
                },
                error: function (e) {

                },
            });
        }

    </script>

@endsection
