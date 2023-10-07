@extends('core::layouts.vertical')


@section('css')
    <link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .media-block{
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            width: 100%;
        }
        .media-block .__item{
            width: 10%;
            margin-right: 1%;
            border: 1px solid #ccc;
            height: 150px;
        }
        .media-block .__item img{
            width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>
@endsection

@section('breadcrumb')
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Media</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">File Upload</h4>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Dropzone File Upload</h4>
                    <p class="sub-header">
                        DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.
                    </p>

                    <form action="{{ route('core.admin.media.store') }}" method="post" class="dropzone" id="myAwesomeDropzone">
                        @csrf
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>

                        <div class="dz-message needsclick">
                            <i class="h1 text-muted  uil-cloud-upload"></i>
                            <h3>Drop files here or click to upload.</h3>
                            <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                            <strong>not</strong> actually uploaded.)</span>
                        </div>
                    </form>
                    <div class="clearfix text-right mt-3">
                        <button type="button" class="btn btn-danger"> <i class="uil uil-arrow-right mr-1"></i>
                            Submit</button>
                    </div>
                </div> <!-- end card-body -->
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="media-block">
                        @foreach($items as $item)
                            <div class="__item">
                                <img src="{{ $item->getUrl() }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script type="text/javascript">
        Dropzone.options.dropzone =
            {
                maxFilesize: 10,
                renameFile: function (file) {
                    var dt = new Date();
                    var time = dt.getTime();
                    return time + file.name;
                },
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 60000,
                success: function (file, response) {
                    console.log(response);
                },
                error: function (file, response) {
                    return false;
                }
            };
    </script>
@endsection

@section('script-bottom')
@endsection
