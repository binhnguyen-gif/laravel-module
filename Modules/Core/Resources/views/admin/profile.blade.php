@extends('core::layouts.vertical')


@section('css')
    <link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Profile</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="text-center mt-3">
                    @if(admin_user()->hasMedia('avatar'))
                    <img src="{{ admin_user()->getMedia('avatar')->last()->getUrl() }}" alt="" class="avatar-lg rounded-circle" />
                    @endif
                    <h5 class="mt-2 mb-0">{{ admin_user()->name }}</h5>
                    <h6 class="text-muted font-weight-normal mt-2 mb-0">{{ admin_user()->email }}</h6>
                    <br>
                    <button type="button" class="btn btn-primary btn-sm mr-1">Follow</button>
                    <button type="button" class="btn btn-white btn-sm">Message</button>
                </div>
            </div>
        </div>
        <!-- end card -->

    </div>

    <div class="col-lg-9">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('core.admin.login.profile.update') }}" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row mb-3">
                        <label for="inputName" class="col-3 col-form-label">Name</label>
                        <div class="col-9">
                            <input name="avatar" type="file" />
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputName" class="col-3 col-form-label">Name</label>
                        <div class="col-9">
                            <input name="name" type="text" class="form-control" value="{{ admin_user()->name }}" id="inputName" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                        <div class="col-9">
                            <input name="email" type="email" class="form-control" id="inputEmail3" value="{{ admin_user()->email }}" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                        <div class="col-9">
                            <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
                        <div class="col-9">
                            <input name="re-password" type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
                        </div>
                    </div>
                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-9">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </div>
                </form>

            </div>  <!-- end card-body -->
        </div>        <!-- end card -->
    </div>
</div>
<!-- end row -->
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
