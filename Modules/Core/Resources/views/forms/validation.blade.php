@extends('core::layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Validation</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Forms Validation</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Bootstrap Validation - Normal</h4>
                <p class="sub-header">Provide valuable, actionable feedback to your users with HTML5 form
                    validation–available in all our supported browsers.</p>

                <form class="needs-validation" novalidate>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">First name</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name"
                            value="Mark" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"
                            value="Otto" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustomUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                            </div>
                            <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username"
                                aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom03">City</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom04">State</label>
                        <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Zip</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="custom-control custom-checkbox form-check">
                            <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                            <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->


    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Bootstrap Validation (Tooltips)</h4>
                <p class="sub-header">If your form layout allows it, you can swap the
                    <code>.{valid|invalid}-feedback</code>
                    classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback
                    in a styled tooltip.</p>

                <form class="needs-validation" novalidate>
                    <div class="form-group position-relative mb-3">
                        <label for="validationTooltip01">First name</label>
                        <input type="text" class="form-control" id="validationTooltip01" placeholder="First name"
                            value="Mark" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                        <div class="invalid-tooltip">
                            Please enter first name.
                        </div>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <label for="validationTooltip02">Last name</label>
                        <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name"
                            value="Otto" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                        <div class="invalid-tooltip">
                            Please enter last name.
                        </div>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <label for="validationTooltipUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                            </div>
                            <input type="text" class="form-control" id="validationTooltipUsername"
                                placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                            <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                            </div>
                        </div>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <label for="validationTooltip03">City</label>
                        <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                        <div class="invalid-tooltip">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <label for="validationTooltip04">State</label>
                        <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                        <div class="invalid-tooltip">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <label for="validationTooltip05">Zip</label>
                        <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                        <div class="invalid-tooltip">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Basic Form</h4>
                <p class="sub-header">
                    Parsley is a javascript form validation library. It helps you provide your users with feedback on
                    their form submission before sending it to your server.
                </p>

                <form action="#" class="parsley-examples">
                    <div class="form-group">
                        <label for="userName">User Name<span class="text-danger">*</span></label>
                        <input type="text" name="nick" parsley-trigger="change" required placeholder="Enter user name"
                            class="form-control" id="userName">
                    </div>
                    <div class="form-group">
                        <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                        <input type="email" name="email" parsley-trigger="change" required placeholder="Enter email"
                            class="form-control" id="emailAddress">
                    </div>
                    <div class="form-group">
                        <label for="pass1">Password<span class="text-danger">*</span></label>
                        <input id="pass1" type="password" placeholder="Password" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                        <input data-parsley-equalto="#pass1" type="password" required placeholder="Password"
                            class="form-control" id="passWord2">
                    </div>
                    <div class="form-group">
                        <div class="checkbox checkbox-success">
                            <input id="checkbox6a" type="checkbox">
                            <label for="checkbox6a">
                                Remember me
                            </label>
                        </div>

                    </div>

                    <div class="form-group text-right mb-0">
                        <button class="btn btn-primary mr-1" type="submit">
                            Submit
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            Cancel
                        </button>
                    </div>

                </form>
            </div>
        </div> <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Horizontal Form</h4>
                <p class="sub-header">
                    Parsley is a javascript form validation library. It helps you provide your users with feedback on
                    their form submission before sending it to your server.
                </p>

                <form role="form" class="parsley-examples">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-md-4 col-form-label">Email<span
                                class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="email" required parsley-type="email" class="form-control" id="inputEmail3"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hori-pass1" class="col-md-4 col-form-label">Password<span
                                class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input id="hori-pass1" type="password" placeholder="Password" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hori-pass2" class="col-md-4 col-form-label">Confirm Password
                            <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input data-parsley-equalto="#hori-pass1" type="password" required placeholder="Password"
                                class="form-control" id="hori-pass2">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="webSite" class="col-md-4 col-form-label">Web Site<span
                                class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="url" required parsley-type="url" class="form-control" id="webSite"
                                placeholder="URL">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 offset-4">
                            <div class="checkbox checkbox-success">
                                <input id="checkbox6" type="checkbox">
                                <label for="checkbox6">
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary mr-1">
                                Register
                            </button>
                            <button type="reset" class="btn btn-secondary">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- end card -->

    </div> <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Validation type</h4>
                <p class="sub-header">
                    Parsley is a javascript form validation library. It helps you provide your users with feedback on
                    their form submission before sending it to your server.
                </p>

                <form action="#" class="parsley-examples">
                    <div class="form-group">
                        <label>Required</label>
                        <input type="text" class="form-control" required placeholder="Type something" />
                    </div>

                    <div class="form-group">
                        <label>Equal To</label>
                        <div>
                            <input type="password" id="pass2" class="form-control" required placeholder="Password" />
                        </div>
                        <div class="mt-2">
                            <input type="password" class="form-control" required data-parsley-equalto="#pass2"
                                placeholder="Re-Type Password" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label>E-Mail</label>
                        <div>
                            <input type="email" class="form-control" required parsley-type="email"
                                placeholder="Enter a valid e-mail" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>URL</label>
                        <div>
                            <input parsley-type="url" type="url" class="form-control" required placeholder="URL" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Digits</label>
                        <div>
                            <input data-parsley-type="digits" type="text" class="form-control" required
                                placeholder="Enter only digits" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Number</label>
                        <div>
                            <input data-parsley-type="number" type="text" class="form-control" required
                                placeholder="Enter only numbers" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alphanumeric</label>
                        <div>
                            <input data-parsley-type="alphanum" type="text" class="form-control" required
                                placeholder="Enter alphanumeric value" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Textarea</label>
                        <div>
                            <textarea required class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div>
                            <button type="submit" class="btn btn-primary mr-1">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- end card -->
    </div> <!-- end col-->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Range validation</h4>
                <p class="sub-header">
                    Parsley is a javascript form validation library. It helps you provide your users with feedback on
                    their form submission before sending it to your server.
                </p>

                <form action="#" class="parsley-examples">

                    <div class="form-group">
                        <label>Min Length</label>
                        <div>
                            <input type="text" class="form-control" required data-parsley-minlength="6"
                                placeholder="Min 6 chars." />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Max Length</label>
                        <div>
                            <input type="text" class="form-control" required data-parsley-maxlength="6"
                                placeholder="Max 6 chars." />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Range Length</label>
                        <div>
                            <input type="text" class="form-control" required data-parsley-length="[5,10]"
                                placeholder="Text between 5 - 10 chars length" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Min Value</label>
                        <div>
                            <input type="text" class="form-control" required data-parsley-min="6"
                                placeholder="Min value is 6" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Max Value</label>
                        <div>
                            <input type="text" class="form-control" required data-parsley-max="6"
                                placeholder="Max value is 6" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Range Value</label>
                        <div>
                            <input class="form-control" required type="text" min="6" max="100"
                                placeholder="Number between 6 - 100" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Regular Exp</label>
                        <div>
                            <input type="text" class="form-control" required data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                placeholder="Hex. Color" />
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <div>
                            <button type="submit" class="btn btn-primary mr-1">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('script')
<!-- Plugin js-->
<script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- Validation init js-->
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
@endsection