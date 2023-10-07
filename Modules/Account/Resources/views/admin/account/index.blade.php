@extends('core::layouts.vertical')

@section('css')
    {{--    <link href="{{ URL::asset('/assets/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />--}}
    {{--    <link href="{{ URL::asset('/assets/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />--}}
    {{--    <link href="{{ URL::asset('/assets/libs/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />--}}
    {{--    <link href="{{ URL::asset('/assets/libs/datatables/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />--}}
@endsection

@push('styles')
    <style>
        .page-next {
            display: flex;
            justify-content: center;
            align-content: center;
        }
    </style>
@endpush

@section('breadcrumb')
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Account</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Account</h4>
        </div>
    </div>
@endsection

@section('content')
    {{--    @dd(\Menu::get('admin_menu_primary')->siblingMenu())--}}
    {{--    {!! \Menu::get('admin_menu_primary')->siblingMenu() !!}--}}
    <div class="row">
        <div class="col-12">
            <div class="action mb-3 d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ route('account.admin.create') }}"> Add</a>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Account</h4>
                    <p class="sub-header">
                    </p>

                    <table  class="table m-0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    {{ $item->name }}
                                </td>
                                <td>
                                    @foreach(config('account.type') as $type)
                                        @if($type['value'] == $item->type)
                                            {{ $type['name'] }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    {{ $item->email }}
                                </td>
                                <td>
                                    {{ $item->created_at }}
                                </td>
                                <td>
                                    {{ $item->updated_at }}
                                </td>
                                <td class="text-right">
                                    <a class="btn btn-soft-primary btn-sm" href="{{ route('account.admin.edit', $item->id) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <x-form-delete :item="$item" url="{{ route('account.admin.destroy', $item->id) }}"></x-form-delete>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <div class="page-next">
        {!! $items->appends($_GET)->links() !!}
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
