@extends('core::layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Basic</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Basic Forms</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">Input Types</h4>
                <p class="sub-header">
                    Most common form control, text-based input fields. Includes support for all HTML5 types:
                    <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>,
                    <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>,
                    <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                </p>

                <form class="form-horizontal">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="simpleinput">Text</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="simpleinput" value="Some text value...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-email">Email</label>
                                <div class="col-lg-10">
                                    <input type="email" id="example-email" name="example-email" class="form-control"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-password">Password</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" id="example-password" value="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-placeholder">Placeholder</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="placeholder"
                                        id="example-placeholder">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">Text area</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="5" id="example-textarea"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Readonly</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" readonly="" value="Readonly value">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Disabled</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" disabled="" value="Disabled value">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-static">Static control</label>
                                <div class="col-lg-10">
                                    <input type="text" readonly class="form-control-plaintext" id="example-static"
                                        value="email@example.com">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-helping">Helping text</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="example-helping"
                                        placeholder="Helping text">
                                    <span class="help-block"><small>A block of help text that
                                            breaks onto a new line and may extend beyond one
                                            line.</small></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Input Select</label>
                                <div class="col-lg-10">
                                    <select class="form-control custom-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-fileinput">Default file
                                    input</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" id="example-fileinput">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-date">Date</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="example-date" type="date" name="date">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-month">Month</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="example-month" type="month" name="month">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-time">Time</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="example-time" type="time" name="time">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-week">Week</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="example-week" type="week" name="week">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-number">Number</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="example-number" type="number" name="number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">URL</label>
                                <div class="col-lg-10">
                                    <input class="form-control" type="url" name="url">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Search</label>
                                <div class="col-lg-10">
                                    <input class="form-control" type="search" name="search">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Tel</label>
                                <div class="col-lg-10">
                                    <input class="form-control" type="tel" name="tel">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-color">Color</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="example-color" type="color" name="color"
                                        value="#5369f8">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <label class="col-lg-2 col-form-label" for="example-range">Range</label>
                                <div class="col-lg-10">
                                    <input class="custom-range mt-1" id="example-range" type="range" name="range"
                                        min="0" max="10">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">Select menu</h4>
                <p class="sub-header">
                    Custom <code>&lt;select&gt;</code> menus need only a custom class,
                    <code>.custom-select</code> to trigger the custom styles.
                </p>

                <select class="custom-select mb-2">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="custom-select custom-select-lg mb-2">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="custom-select custom-select-sm">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>


                <div class="mt-4">
                    <h4 class="header-title">Switches</h4>
                    <p class="sub-header">
                        A switch has the markup of a custom checkbox but uses the
                        <code>.custom-switch</code> class to render a toggle switch. Switches
                        also support the <code>disabled</code> attribute.
                    </p>

                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Toggle this
                            switch element</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2">Disabled switch
                            element</label>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">Checkboxes</h4>
                <div class="mt-3">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                        <label class="custom-control-label" for="customCheck1">Check this
                            custom checkbox</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Check this
                            custom checkbox</label>
                    </div>
                </div>

                <h4 class="font-size-15 mt-3">Radios</h4>
                <div class="">
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">Toggle this
                            custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" checked>
                        <label class="custom-control-label" for="customRadio2">Or toggle
                            this other custom radio</label>
                    </div>
                </div>

                <h4 class="font-size-15 mt-3">Disabled</h4>
                <div class="">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheckDisabled1" disabled>
                        <label class="custom-control-label" for="customCheckDisabled1">Check
                            this custom checkbox</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" name="radioDisabled" id="customRadioDisabled2" class="custom-control-input"
                            disabled>
                        <label class="custom-control-label" for="customRadioDisabled2">Toggle
                            this custom radio</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title mt-0">Basic Example</h4>

                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkmeout0">
                            <label class="custom-control-label" for="checkmeout0">Check me out !</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title mt-0">Horizontal Form</h4>

                <form class="form-horizontal">
                    <div class="form-group row mb-3">
                        <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                        <div class="col-9">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                        <div class="col-9">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
                        <div class="col-9">
                            <input type="password" class="form-control" id="inputPassword5"
                                placeholder="Retype Password">
                        </div>
                    </div>
                    <div class="form-group row mb-3 justify-content-end">
                        <div class="col-9">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkmeout">
                                <label class="custom-control-label" for="checkmeout">Check me out !</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-9">
                            <button type="submit" class="btn btn-info">Sign in</button>
                        </div>
                    </div>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->

</div>
<!-- end row -->

<!-- Inline Form -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-1 header-title mt-0">Inline Form</h4>

                <p class="sub-header">
                    Use the <code>.form-inline</code> class to display a series of labels, form controls, and buttons on
                    a single horizontal row. Form controls within inline forms vary slightly from their default states.
                    Controls only appear inline in viewports that are at least 576px wide to account for narrow
                    viewports on mobile devices.
                </p>

                <form class="form-inline">
                    <div class="form-group mr-3">
                        <label for="staticEmail2" class="sr-only">Email</label>
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2"
                            value="email@example.com">
                    </div>
                    <div class="form-group mr-3">
                        <label for="inputPassword2" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Confirm identity</button>
                </form>

                <h6 class="font-13 mt-3 font-weight-semibold">Auto-sizing</h6>

                <form>
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput">Name</label>
                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                    placeholder="Username">
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="autoSizingCheck">
                                <label class="custom-control-label" for="autoSizingCheck">Remember me</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                        </div>
                    </div>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection