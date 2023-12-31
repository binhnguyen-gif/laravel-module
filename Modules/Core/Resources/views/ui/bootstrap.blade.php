@extends('core::layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="">Components</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bootstrap UI</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Bootstrap UI</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="header-title mb-1 mt-0">Alerts</h5>
                    <p class="sub-header">
                        Provide contextual feedback messages for typical user actions with the handful of available and
                        flexible alert messages.
                    </p>

                    <div class="alert alert-primary" role="alert">
                        A simple primary alert—check it out!
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        A simple secondary alert—check it out!
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        A simple success alert—check it out!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        A simple danger alert—check it out!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        A simple warning alert—check it out!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-info mb-0" role="alert">
                        A simple info alert—check it out!
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="header-title mb-1 mt-0">Toasts</h5>
                    <p class="sub-header">
                        Push notifications to your visitors with a toast, a lightweight and easily customizable alert
                        message
                    </p>

                    <div class="pt-4 px-3">
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"
                            data-toggle="toast">
                            <div class="toast-header">
                                <img src="/assets/images/logo.svg" alt="brand-logo" height="18" class="mr-1" />
                                <strong class="mr-auto">Shreyu</strong>
                                <small>11 mins ago</small>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                        <!--end toast-->

                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"
                            data-toggle="toast">
                            <div class="toast-header">
                                <img src="/assets/images/logo.svg" alt="brand-logo" height="18" class="mr-1" />
                                <strong class="mr-auto">Shreyu</strong>
                                <small>12 mins ago</small>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                        <!--end toast-->
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"
                            data-toggle="toast">
                            <div class="toast-header">
                                <img src="/assets/images/logo.svg" alt="brand-logo" height="18" class="mr-1" />
                                <strong class="mr-auto">Shreyu</strong>
                                <small>15 mins ago</small>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                        <!--end toast-->
                        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true"
                            data-toggle="toast" data-autohide="false">
                            <div class="toast-header">
                                <img src="/assets/images/logo.svg" alt="brand-logo" height="18" class="mr-1" />
                                <strong class="mr-auto">Shreyu</strong>
                                <small>21 mins ago</small>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                        <!--end toast-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- buttons -->
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="header-title mb-1 mt-0">Buttons</h5>
                    <p class="sub-header">Use the button classes on an
                        <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or
                        <code>&lt;input&gt;</code> element.</p>

                    <div class="button-list">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-light">Light</button>
                        <button type="button" class="btn btn-dark">Dark</button>
                        <button type="button" class="btn btn-link">Link</button>
                    </div>
                </div>
                <div class="mt-4 pt-1">
                    <h5 class="font-size-16 mb-1">Outline buttons </h5>
                    <p class="sub-header">Use a classes <code>.btn-outline-**</code> to
                        quickly create a bordered buttons.</p>

                    <div class="button-list">
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                        <button type="button" class="btn btn-outline-success">Success</button>
                        <button type="button" class="btn btn-outline-danger">Danger</button>
                        <button type="button" class="btn btn-outline-warning">Warning</button>
                        <button type="button" class="btn btn-outline-info">Info</button>
                        <button type="button" class="btn btn-outline-dark">Dark</button>
                    </div>
                </div>

                <div class="mt-4 pt-1">
                    <h5 class="font-size-16 mb-1">Soft buttons </h5>
                    <p class="sub-header">Use a classes <code>.btn-soft-**</code> to
                        quickly create buttons with soft background.</p>

                    <div class="button-list">
                        <button type="button" class="btn btn-soft-primary">Primary</button>
                        <button type="button" class="btn btn-soft-secondary">Secondary</button>
                        <button type="button" class="btn btn-soft-success">Success</button>
                        <button type="button" class="btn btn-soft-danger">Danger</button>
                        <button type="button" class="btn btn-soft-warning">Warning</button>
                        <button type="button" class="btn btn-soft-info">Info</button>
                        <button type="button" class="btn btn-soft-dark">Dark</button>
                    </div>
                </div>

                <div class="mt-4 pt-1">
                    <h5 class="font-size-16 mb-1">Button-Rounded </h5>
                    <p class="sub-header">Add <code>.btn-rounded</code> to default
                        button to get rounded corners.</p>

                    <div class="button-list">
                        <button type="button" class="btn btn-primary btn-rounded">Primary</button>
                        <button type="button" class="btn btn-secondary btn-rounded">Secondary</button>
                        <button type="button" class="btn btn-success btn-rounded">Success</button>
                        <button type="button" class="btn btn-danger btn-rounded">Danger</button>
                        <button type="button" class="btn btn-warning btn-rounded">Warning</button>
                        <button type="button" class="btn btn-info btn-rounded">Info</button>
                        <button type="button" class="btn btn-dark btn-rounded">Dark</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="mt-4 mt-xl-0">
                    <h5 class="font-size-16 mb-1 mt-0">Button Width</h5>
                    <p class="sub-header">
                        Create buttons with minimum width by adding add
                        <code>.width-xs</code>, <code>.width-sm</code>,
                        <code>.width-md</code> or <code>.width-lg</code>.
                    </p>

                    <div class="button-list">
                        <button type="button" class="btn btn-primary width-xs">Xs</button>
                        <button type="button" class="btn btn-success width-sm">Small</button>
                        <button type="button" class="btn btn-info width-md">Middle</button>
                        <button type="button" class="btn btn-warning width-lg">Large</button>
                    </div>
                </div>

                <div class="mt-4 pt-1">
                    <h5 class="font-size-16 mb-1">Button Sizes</h5>
                    <p class="sub-header">
                        Add <code>.btn-lg</code>, <code>.btn-sm</code> for additional
                        sizes.
                    </p>


                    <div class="button-list">
                        <button class="btn btn-primary btn-lg">Large button</button>
                        <button class="btn btn-danger">Normal button</button>
                        <button class="btn btn-success btn-sm">Small button</button>
                        <button type="button" class="btn btn-block btn--md btn-primary">Block Button</button>
                    </div>

                </div>

                <div class="mt-4 pt-1">
                    <h5 class="font-size-16 mb-1">Button Group</h5>
                    <p class="sub-header">
                        Wrap a series of buttons with <code>.btn</code> in
                        <code>.btn-group</code>.
                    </p>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-info">Left</button>
                                <button type="button" class="btn btn-info">Middle</button>
                                <button type="button" class="btn btn-info">Right</button>
                            </div>
                            <br>
                            <div class="btn-group mb-2 mr-1">
                                <button type="button" class="btn btn-primary">1</button>
                                <button type="button" class="btn btn-primary">2</button>
                                <button type="button" class="btn btn-primary">3</button>
                                <button type="button" class="btn btn-primary">4</button>
                            </div>
                            <div class="btn-group mb-2 mr-1">
                                <button type="button" class="btn btn-danger">5</button>
                                <button type="button" class="btn btn-danger">6</button>
                                <button type="button" class="btn btn-danger">7</button>
                            </div>
                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-success">8</button>
                            </div>
                            <br>
                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-info">1</button>
                                <button type="button" class="btn btn-info">2</button>
                                <button type="button" class="btn btn-info">3</button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false">
                                        Dropdown <i class="uil uil-angle-down"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Dropdown
                                            link</a>
                                        <a class="dropdown-item" href="#">Dropdown
                                            link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="btn-group-vertical mb-2">
                                        <button type="button" class="btn btn-primary">Top</button>
                                        <button type="button" class="btn btn-primary">Middle</button>
                                        <button type="button" class="btn btn-primary">Bottom</button>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="btn-group-vertical mb-2">
                                        <button type="button" class="btn btn-info">Button
                                            1</button>
                                        <button type="button" class="btn btn-info">Button
                                            2</button>
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                            data-toggle="dropdown" aria-expanded="false"> Button
                                            3 <i class="uil uil-angle-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Dropdown
                                                link</a>
                                            <a class="dropdown-item" href="#">Dropdown
                                                link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 mt-0 header-title">Badges</h4>

                <div class="row">
                    <div class="col-xl-4">
                        <div>
                            <h5 class="font-size-15 mb-1">Default</h5>
                            <p class="sub-header">
                                Badges scale to match the size of the immediate parent element by using relative font
                                sizing and <code class="highlighter-rouge">em</code> units.
                            </p>
                            <span class="badge badge-primary">Primary</span>
                            <span class="badge badge-secondary">Secondary</span>
                            <span class="badge badge-success">Success</span>
                            <span class="badge badge-danger">Danger</span>
                            <span class="badge badge-warning">Warning</span>
                            <span class="badge badge-info">Info</span>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="mt-4 mt-xl-0">
                            <h5 class="font-size-15 mb-1">Pill Badges</h5>
                            <p class="sub-header">
                                Use the <code>.badge-pill</code> modifier class to make badges more rounded.
                            </p>

                            <span class="badge badge-primary badge-pill">Primary</span>
                            <span class="badge badge-secondary badge-pill">Secondary</span>
                            <span class="badge badge-success badge-pill">Success</span>
                            <span class="badge badge-danger badge-pill">Danger</span>
                            <span class="badge badge-warning badge-pill">Warning</span>
                            <span class="badge badge-info badge-pill">Info</span>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="mt-4 mt-xl-0">
                            <h5 class="font-size-15 mb-1">Badges Lighten</h5>
                            <p class="sub-header">
                                Use the <code>.badge-soft-*</code> for a badge lighten.
                            </p>

                            <span class="badge badge-soft-primary">Primary</span>
                            <span class="badge badge-soft-secondary">Secondary</span>
                            <span class="badge badge-soft-success">Success</span>
                            <span class="badge badge-soft-danger">Danger</span>
                            <span class="badge badge-soft-warning">Warning</span>
                            <span class="badge badge-soft-info">Info</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 mt-0 header-title">Cards</h4>
                <div class="row bg-light p-3">
                    <div class="col-lg-6 col-xl-3">
                        <!-- Simple card -->
                        <div class="card mb-4 mb-xl-0">
                            <img class="card-img-top img-fluid" src="/assets/images/small/img-1.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title font-size-16">Card title</h5>
                                <p class="card-text text-muted">Some quick example text to build on the card title and
                                    make
                                    up the bulk of the card's content. With supporting text below as a natural lead-in
                                    to additional content.</p>
                                <a href="javascript:void(0);" class="btn btn-primary">Button</a>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-6 col-xl-3">
                        <div class="card mb-4 mb-xl-0">
                            <img class="card-img-top img-fluid" src="/assets/images/small/img-2.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title font-size-16">Card title</h5>
                                <p class="card-text text-muted">Some quick example text to build on the card title.</p>
                            </div>
                            <ul class="list-group list-group-flush  text-muted">
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                            </ul>
                            <div class="card-body">
                                <a href="javascript:void(0);" class="card-link text-custom">Card link</a>
                                <a href="javascript:void(0);" class="card-link text-custom">Another link</a>
                            </div>
                        </div>
                    </div><!-- end col -->


                    <div class="col-xl-6">
                        <div class="card">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-5">
                                    <img src="/assets/images/small/img-6.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title font-size-16">Card title</h5>
                                        <p class="card-text text-muted">This is a wider card with supporting text
                                            lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row no-gutters align-items-center">
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title font-size-16">Card title</h5>
                                        <p class="card-text text-muted">This is a wider card with supporting text
                                            lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="/assets/images/small/img-4.jpg" class="card-img" alt="...">
                                </div>

                            </div>
                        </div>

                    </div><!-- end col -->
                </div>
                <!-- end row -->

            </div>
        </div>
        <!-- end card -->
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="header-title mb-1 mt-0">Dropdown Examples</h5>
                <p class="sub-header">
                    The best part is you can do this with any button variant, too:
                </p>

                <div class="btn-group mt-2 mr-1">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Primary <i class="icon"><span
                                data-feather="chevron-down"></span></i></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div><!-- /btn-group -->
                <div class="btn-group mt-2 mr-1">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Secondary <i class="icon"><span
                                data-feather="chevron-down"></span></i></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div><!-- /btn-group -->
                <div class="btn-group mt-2 mr-1">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Success <i class="icon"><span
                                data-feather="chevron-down"></span></i></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div><!-- /btn-group -->
                <div class="btn-group mt-2 mr-1">
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon"><span data-feather="chevron-down"></span></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div><!-- /btn-group -->
                <div class="btn-group mt-2 mr-1">
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon"><span data-feather="chevron-down"></span></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div><!-- /btn-group -->
                <div class="btn-group mt-2 mr-1">
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon"><span data-feather="chevron-down"></span></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div><!-- /btn-group -->
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="header-title mb-1 mt-0">Dropdown - More Examples</h5>
                <p class="sub-header">
                    You can put a form or simple text within a dropdown menu or set the different position
                </p>

                <div class="btn-group dropdown mt-2 mr-1">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenutext"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Simple text <i class="icon"><span data-feather="chevron-down"></span></i>
                    </button>
                    <div class="dropdown-menu dropdown-lg p-3" aria-labelledby="dropdownMenutext">
                        <div class="text-muted">
                            <p>
                                Some example text that's free-flowing within the dropdown menu.
                            </p>
                            <p class="mb-0">
                                And this is more example text.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="btn-group dropdown mt-2 mr-1">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Dropdown menu Forms <i class="icon"><span data-feather="chevron-down"></span></i>
                    </button>
                    <form class="dropdown-menu dropdown-lg p-3">
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail2">Email address</label>
                            <input type="email" class="form-control" id="exampleDropdownFormEmail2"
                                placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword2">Password</label>
                            <input type="password" class="form-control" id="exampleDropdownFormPassword2"
                                placeholder="Password">
                        </div>
                        <div class="form-group">

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="dropdownCheck">
                                <label class="custom-control-label" for="dropdownCheck">Remember
                                    me</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div>

                <div class="btn-group mt-2 mr-1">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Right Align <i class="icon"><span data-feather="chevron-down"></span></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>

                <div class="btn-group mt-2 mr-1 dropright">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Drop Right <i class="icon"><span data-feather="chevron-right"></span></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>

                <div class="btn-group mt-2 dropleft mr-1">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="icon"><span data-feather="chevron-left"></span></i> Drop Left
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h5 class="header-title mb-3 mt-0">Nav Tabs</h5>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                            <span class="d-none d-sm-block">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#profile" data-toggle="tab" aria-expanded="true" class="nav-link active">
                            <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                            <span class="d-none d-sm-block">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#messages" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-block d-sm-none"><i class="uil-envelope"></i></span>
                            <span class="d-none d-sm-block">Messages</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane" id="home">
                        <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                            penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                            Nulla consequat massa quis enim.</p>
                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate
                            eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                            justo. Nullam dictum felis eu pede mollis pretium. Integer
                            tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean
                            vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                            consequat vitae, eleifend ac, enim.</p>
                    </div>
                    <div class="tab-pane show active" id="profile">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                            Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                            dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                            tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                            ac, enim.</p>
                        <p class="mb-0">Vakal text here dolor sit amet, consectetuer adipiscing
                            elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                            natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                            pretium quis, sem. Nulla consequat massa quis enim.</p>
                    </div>
                    <div class="tab-pane" id="messages">
                        <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                            penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                            Nulla consequat massa quis enim.</p>
                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate
                            eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                            justo. Nullam dictum felis eu pede mollis pretium. Integer
                            tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean
                            vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                            consequat vitae, eleifend ac, enim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h5 class="header-title mb-4 mt-0">Nav Pills</h5>

                <ul class="nav nav-pills navtab-bg nav-justified">
                    <li class="nav-item">
                        <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                            <span class="d-none d-sm-block">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#profile1" data-toggle="tab" aria-expanded="true" class="nav-link active">
                            <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                            <span class="d-none d-sm-block">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#messages1" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-block d-sm-none"><i class="uil-envelope"></i></span>
                            <span class="d-none d-sm-block">Messages</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content text-muted">
                    <div class="tab-pane" id="home1">
                        <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                            penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                            Nulla consequat massa quis enim.</p>
                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate
                            eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                            justo. Nullam dictum felis eu pede mollis pretium. Integer
                            tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean
                            vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                            consequat vitae, eleifend ac, enim.</p>
                    </div>
                    <div class="tab-pane show active" id="profile1">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                            Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                            dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                            tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                            ac, enim.</p>
                        <p class="mb-0">Vakal text here dolor sit amet, consectetuer adipiscing
                            elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                            natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                            pretium quis, sem. Nulla consequat massa quis enim.</p>
                    </div>
                    <div class="tab-pane" id="messages1">
                        <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                            penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                            Nulla consequat massa quis enim.</p>
                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate
                            eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                            justo. Nullam dictum felis eu pede mollis pretium. Integer
                            tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean
                            vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                            consequat vitae, eleifend ac, enim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="header-title mb-3 mt-0">Accordions Example</h5>

                <div class="accordion custom-accordionwitharrow" id="accordionExample">
                    <div class="card mb-1 shadow-none border">

                        <a href="" class="text-dark" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            <div class="card-header" id="headingOne">
                                <h5 class="m-0 font-size-16">
                                    What is Lorem Ipsum? <i class="uil uil-angle-down float-right accordion-arrow"></i>
                                </h5>
                            </div>
                        </a>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body text-muted">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably
                                haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card mb-1 shadow-none border">
                        <a href="" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <div class="card-header" id="headingTwo">
                                <h5 class="m-0 font-size-16">
                                    Why do we use it? <i class="uil uil-angle-down float-right accordion-arrow"></i>
                                </h5>
                            </div>
                        </a>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body text-muted">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably
                                haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0 shadow-none border">

                        <a href="" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            <div class="card-header" id="headingThree">
                                <h5 class="m-0 font-size-16">
                                    Where does it come from? <i
                                        class="uil uil-angle-down float-right accordion-arrow"></i>
                                </h5>
                            </div>
                        </a>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body text-muted">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably
                                haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="header-title mb-4 mt-0">Custom Accordion</h5>
                <div class="custom-accordion accordion ml-4" id="customaccordion_exa">
                    <div class="card mb-1">
                        <a href="" class="text-dark" data-toggle="collapse" data-target="#customaccorcollapseOne"
                            aria-expanded="true" aria-controls="customaccorcollapseOne">
                            <div class="card-header" id="customaccorheadingOne">
                                <h5 class="m-0 font-size-14">
                                    <i class="uil uil-question-circle h3 text-primary icon"></i>
                                    What is Anim text here?
                                </h5>
                            </div>
                        </a>

                        <div id="customaccorcollapseOne" class="collapse show" aria-labelledby="customaccorheadingOne"
                            data-parent="#customaccordion_exa">
                            <div class="card-body text-muted">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                wes. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card mb-1">
                        <a href="" class="text-dark collapsed" data-toggle="collapse"
                            data-target="#customaccorcollapseTwo" aria-expanded="false"
                            aria-controls="customaccorcollapseTwo">
                            <div class="card-header" id="customaccorheadingTwo">
                                <h5 class="m-0 font-size-14">
                                    <i class="uil uil-question-circle h3 text-primary icon"></i>
                                    Why use Anim text here?
                                </h5>
                            </div>
                        </a>

                        <div id="customaccorcollapseTwo" class="collapse" aria-labelledby="customaccorheadingTwo"
                            data-parent="#customaccordion_exa">
                            <div class="card-body text-muted">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica craft beer. Ad
                                vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably
                                haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <a href="" class="text-dark collapsed" data-toggle="collapse"
                            data-target="#customaccorcollapseThree" aria-expanded="false"
                            aria-controls="customaccorcollapseThree">
                            <div class="card-header" id="customaccorheadingThree">
                                <h5 class="m-0 font-size-14">
                                    <i class="uil uil-question-circle h3 text-primary icon"></i>
                                    How many variations exist?
                                </h5>
                            </div>
                        </a>

                        <div id="customaccorcollapseThree" class="collapse" aria-labelledby="customaccorheadingThree"
                            data-parent="#customaccordion_exa">
                            <div class="card-body text-muted">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                put a bird on it squid single-origin coffee nulla assumenda
                                shoreditch et. Nihil anim keffiyeh helvetica craft beer. Ad
                                vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably
                                haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 mb-1 header-title">Modals</h4>

                <p class="sub-header">
                    A rendered modal with header, body, and set of actions in the footer.
                </p>

                <!-- sample modal content -->
                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Modal Heading</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6>Text in a modal</h6>
                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                <hr>
                                <h6>Overflowing text to show scroll behavior</h6>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                    facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                    vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                    lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                    scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                    metus auctor fringilla.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->



                <div class="modal fade" id="bs-example-modal-xl" tabindex="-1" role="dialog"
                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myExtraLargeModalLabel">Extra large modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                        </div>
                    </div>
                </div>

                <!--  Modal content for the above example -->
                <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog"
                    aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mySmallModalLabel">Small modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->


                <div class="modal fade" id="centermodal" tabindex="-1" role="dialog"
                    aria-labelledby="myCenterModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myCenterModalLabel">Center modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Overflowing text to show scroll behavior</h5>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                    facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                    vestibulum at eros.</p>
                                <p class="mb-0">Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Long Content Scroll Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                    facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                    vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                    lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                    scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                    metus auctor fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                    facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                    vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                    lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                    scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                    metus auctor fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                    facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                    vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                    lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                    scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                    metus auctor fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                    facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                    vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                    lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                    scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                    metus auctor fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                    facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                    vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                    lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                    scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                    metus auctor fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                    facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                    vestibulum at eros.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                    lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                    scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                    metus auctor fringilla.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal-error" tabindex="-1" role="dialog" aria-labelledby="modal-errorLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal-errorLabel">Error modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <i class="uil-no-entry text-warning display-3"></i>
                                <h4 class="text-danger mt-4">Page not Found</h4>
                                <p class="w-75 mx-auto text-muted">Praesent commodo cursus magna, vel scelerisque nisl
                                    consectetur et.</p>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-outline-primary btn-rounded width-md"
                                        data-dismiss="modal"><i class="uil uil-arrow-left mr-1"></i> Back</a>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="row">
                    <div class="col-xl-4">
                        <h5 class="font-size-16 mb-3">Examples</h5>
                        <div class="button-list">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#myModal">Standard modal</button>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="mt-4 mt-xl-0">
                            <h5 class="font-size-16 mb-3">Modal sizes</h5>
                            <div class="button-list">
                                <!-- Extra large modal -->
                                <button type="button" class="btn btn-secondary" data-toggle="modal"
                                    data-target="#bs-example-modal-xl">Extra large modal</button>
                                <!-- Large modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#bs-example-modal-lg">Large modal</button>
                                <!-- Small modal -->
                                <button type="button" class="btn btn-info" data-toggle="modal"
                                    data-target="#bs-example-modal-sm">Small modal</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="mt-4 mt-xl-0">
                            <h5 class="font-size-16 mb-3">Other exmaples</h5>
                            <div class="button-list">
                                <!-- Center modal -->
                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                    data-target="#centermodal">Center modal</button>
                                <!-- Scrollable -->
                                <button type="button" class="btn btn-dark" data-toggle="modal"
                                    data-target="#exampleModalScrollable">Scrollable</button>
                                <!-- Scrollable -->
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#modal-error">Error</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end card -->
    </div>
</div>
<!-- end row -->


<!-- progress -->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="header-title mb-1 mt-0">Progressbars</h5>
                <p class="sub-header">Simple examples of progressbar</p>
                <div>
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                </div>

                <div class="mt-5">
                    <h5 class="font-size-16 mb-1 mt-0">Striped Progressbars</h5>
                    <p class="sub-header">
                        Uses a gradient to create a striped effect.
                    </p>
                    <div>
                        <div class="progress mb-3">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%"
                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="mt-4 mt-xl-0">
                    <h5 class="font-size-16 mb-1 mt-0">Contextual Progressbars</h5>
                    <p class="sub-header">
                        Progress bars use some of the same button and alert classes for
                        consistent styles.
                    </p>
                    <div>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 30%"
                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h5 class="font-size-16 mb-1 mt-0">Progressbars Size</h5>
                        <p class="sub-header">
                            We can set a <code>height</code> value on the
                            <code>.progress</code>. The inner <code>.progress-bar</code> will automatically resize
                            accordingly.
                        </p>
                        <div>
                            <div class="progress mb-3" style="height: 1px;">
                                <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <div class="progress mb-3 progress-sm">
                                <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30"
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <div class="progress mb-3 progress-md">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mb-3 progress-lg">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress mb-3 progress-xl">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xxl">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 38%"
                                    aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- tooltip -->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="header-title mb-1 mt-0">Popovers</h5>
                <p class="sub-header">Add small overlays of content, like those on
                    the iPad, to any element for housing secondary information.</p>

                <div class="button-list">
                    <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover"
                        data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                        data-original-title="">
                        Popover on top
                    </button>

                    <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover"
                        data-placement="bottom" data-content="Vivamus
                                            sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                        Popover on bottom
                    </button>

                    <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover"
                        data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                        data-original-title="">
                        Popover on right
                    </button>

                    <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover"
                        data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                        data-original-title="Popover title">
                        Popover on left
                    </button>

                    <button type="button" tabindex="0" class="btn btn-primary" data-toggle="popover"
                        data-trigger="focus" title=""
                        data-content="And here's some amazing content. It's very engaging. Right?"
                        data-original-title="Dismissible popover">
                        Dismissible popover
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="header-title mb-1 mt-0">Tooltips</h5>
                <p class="sub-header">Four options are available: top, right,
                    bottom,
                    and left aligned.</p>

                <div class="button-list">

                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title=""
                        data-original-title="Tooltip on top">Tooltip on top</button>

                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="Tooltip on bottom">Tooltip on
                        bottom</button>

                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left"
                        title="Tooltip on left">Tooltip on left</button>

                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title=""
                        data-original-title="Tooltip on right">Tooltip on
                        right</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 mt-0 header-title">Spinners</h4>

                <div class="row">
                    <div class="col-xl-6">
                        <div>
                            <h5 class="font-size-15 mb-1">Border spinner</h5>
                            <p class="sub-header">Use the border spinners for a lightweight loading indicator.</p>

                            <div>
                                <div class="spinner-border text-primary m-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-border text-secondary m-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-border text-success m-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-border text-danger m-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-border text-warning m-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-border text-info m-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="mt-4 mt-lg-0">
                            <h5 class="font-size-15 mb-1">Growing spinner</h5>
                            <p class="sub-header">
                                If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t
                                technically spin, it does repeatedly grow!
                            </p>

                            <div>
                                <div class="spinner-grow text-primary m-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-secondary m-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-success m-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-danger m-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-warning m-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-info m-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection