@extends('core::layouts.vertical')

@section('css')
{{--    <link href="{{ URL::asset('/assets/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />--}}
{{--    <link href="{{ URL::asset('/assets/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />--}}
{{--    <link href="{{ URL::asset('/assets/libs/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />--}}
{{--    <link href="{{ URL::asset('/assets/libs/datatables/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />--}}
@endsection

@section('breadcrumb')
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Posts</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Blog</h4>
        </div>
    </div>
@endsection

@section('content')
{{--    @dd(\Menu::get('admin_menu_primary')->siblingMenu())--}}
{{--    {!! \Menu::get('admin_menu_primary')->siblingMenu() !!}--}}
    <div class="row">
        <div class="col-12">
            <div class="action mb-3 d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ route('blog.admin.post.create') }}"> Add</a>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Posts</h4>
                    <p class="sub-header">
                    </p>

                    <table  class="table m-0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Published</th>
                            <th>Created at</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <a target="_blank" href="{{ $item->url }}">
                                        {{ $item->name }}
                                        <i class="fa fa-external-link-alt"></i>
                                    </a>
                                </td>
                                <td>
                                    @if($item->hasMedia('image'))
                                        <img width="35" height="35"
                                             src="{{ $item->getMedia('image')->last()->getUrl() }}" alt="">
                                    @endif
                                </td>

                                <td>
                                    <x-form-is-publish :item="$item" name="is_published" />
                                </td>
                                <td>{{ $item->created_at }}</td>
                                <td class="text-right">
                                    <a class="btn btn-soft-primary btn-sm" href="{{ route('blog.admin.post.edit', $item->id) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <x-form-delete :item="$item" url="{{ route('blog.admin.post.destroy', $item->id) }}"></x-form-delete>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-lg-end mt-3">
                        {!! $items->appends(Request::all())->render() !!}
                    </div>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
@endsection


@section('script')

@endsection

@section('script-bottom')

{{--    <script src="{{ URL::asset('/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>--}}
{{--    <script src="{{ URL::asset('/assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>--}}
{{--    <script src="{{ URL::asset('/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>--}}
{{--    <script src="{{ URL::asset('/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>--}}

{{--    <script src="{{ URL::asset('/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>--}}
{{--    <script src="{{ URL::asset('/assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>--}}
{{--    <script src="{{ URL::asset('/assets/libs/datatables/buttons.html5.min.js') }}"></script>--}}
{{--    <script src="{{ URL::asset('/assets/libs/datatables/buttons.flash.min.js') }}"></script>--}}
{{--    <script src="{{ URL::asset('/assets/libs/datatables/buttons.print.min.js') }}"></script>--}}

{{--    <script src="{{ URL::asset('/assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>--}}
{{--    <script src="{{ URL::asset('/assets/libs/datatables/dataTables.select.min.js') }}"></script>--}}
{{--    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>--}}

@endsection
