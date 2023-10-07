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
                    <li class="breadcrumb-item"><a href="/admin">Account</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Account</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Account</h4>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Account</h4>
                    <form action="{{ route('account.admin.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        @include("account::admin.account._field", ['item' => $item])
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
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

