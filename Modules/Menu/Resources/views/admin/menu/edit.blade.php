@extends('core::layouts.vertical')

@include("menu::style")

@section('breadcrumb')
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Menu</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Menu</h4>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Menu</h4>
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('menu.admin.menu.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                @include("menu::admin.menu._field", ['item' => $item])
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')

@endsection

@section('script-bottom')
    <script>
        var menuItems = @json($item);
        var menuId = '{{ $item->id }}';
    </script>
    <script src="{{ URL::asset('/assets/libs/nestable2/jquery.nestable.min.css') }}"></script>
    <script src="{{ URL::asset('/assets/libs/nestable2/jquery.nestable.min.js') }}"></script>
    @include("menu::script")
@endsection

