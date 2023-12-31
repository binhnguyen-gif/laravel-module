@extends('core::layouts.vertical')


@section('css')
<!-- Plugins css -->
<link href="{{ URL::asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/multiselect/multiselect.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet"
    type="text/css" />
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Advanced</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Advanced Forms</h4>
    </div>
</div>
@endsection

@section('content')
<!-- select -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Select2</h4>
                <p class="sub-header">
                    Select2 gives you a customizable select box with support for searching, tagging, remote data sets,
                    infinite scrolling, and many other highly used options.
                </p>

                <div class="row">
                    <div class="col-xl-2 col-sm-4">
                        <div class="form-group mt-3 mt-sm-0">
                            <label>Default</label>
                            <select data-plugin="customselect" class="form-control">
                                <option value="0">Shreyu</option>
                                <option value="1">Greeva</option>
                                <option value="2">Dhyanu</option>
                                <option value="3" disabled>Disabled</option>
                                <option value="4">Mannat</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-4">
                        <div class="form-group mt-3 mt-sm-0">
                            <label>Placeholder</label>
                            <select data-plugin="customselect" class="form-control" data-placeholder="Select an option">
                                <option></option>
                                <option value="0">Shreyu</option>
                                <option value="1">Greeva</option>
                                <option value="2">Dhyanu</option>
                                <option value="3" disabled>Disabled</option>
                                <option value="4">Mannat</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-4">
                        <div class="form-group mt-3 mt-sm-0">
                            <label class="d-block">Small Size</label>
                            <select data-plugin="customselect" class="small">
                                <option value="0">Shreyu</option>
                                <option value="1">Greeva</option>
                                <option value="2">Dhyanu</option>
                                <option value="3" disabled>Disabled</option>
                                <option value="4">Mannat</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="form-group mt-3 mt-xl-0">
                            <label>Multi Select</label>
                            <select class="form-control wide" data-plugin="customselect" multiple>
                                <option value="0" selected>Shreyu</option>
                                <option value="1">Greeva</option>
                                <option value="2">Dhyanu</option>
                                <option value="3" disabled>Disabled</option>
                                <option value="4">Mannat</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Multiple Select</h4>
                <p class="sub-header">Example of multiple select.</p>

                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-1 font-weight-bold text-muted">Default</p>
                        <p class="text-muted font-13">
                            Use a <code>
                                                        &lt;select multiple /&gt;</code>
                            as your input element for a tags input, to gain true multivalue support.
                        </p>

                        <select multiple="multiple" class="multi-select" id="my_multi_select1" name="my_multi_select1[]"
                            data-plugin="multiselect">
                            <option>Dallas Cowboys</option>
                            <option>New York Giants</option>
                            <option selected>Philadelphia Eagles</option>
                            <option selected>Washington Redskins</option>
                            <option>Chicago Bears</option>
                            <option>Detroit Lions</option>
                            <option>Green Bay Packers</option>
                            <option>Minnesota Vikings</option>
                            <option selected>Atlanta Falcons</option>
                            <option>Carolina Panthers</option>
                            <option>New Orleans Saints</option>
                            <option>Tampa Bay Buccaneers</option>
                            <option>Arizona Cardinals</option>
                            <option>St. Louis Rams</option>
                            <option>San Francisco 49ers</option>
                            <option>Seattle Seahawks</option>
                        </select>

                    </div> <!-- end col -->

                    <div class="col-md-6">
                        <p class="mb-1 font-weight-bold text-muted mt-3 mt-md-0">Grouped Options</p>
                        <p class="text-muted font-13">
                            Use a <code>
                                                        &lt;select multiple /&gt;</code>
                            as your input element for a tags input, to gain true multivalue support.
                        </p>

                        <select multiple="multiple" class="multi-select" id="my_multi_select2" name="my_multi_select2[]"
                            data-plugin="multiselect" data-selectable-optgroup="true">
                            <optgroup label="NFC EAST">
                                <option>Dallas Cowboys</option>
                                <option>New York Giants</option>
                                <option>Philadelphia Eagles</option>
                                <option>Washington Redskins</option>
                            </optgroup>
                            <optgroup label="NFC NORTH">
                                <option>Chicago Bears</option>
                                <option>Detroit Lions</option>
                                <option>Green Bay Packers</option>
                                <option>Minnesota Vikings</option>
                            </optgroup>
                            <optgroup label="NFC SOUTH">
                                <option>Atlanta Falcons</option>
                                <option>Carolina Panthers</option>
                                <option>New Orleans Saints</option>
                                <option>Tampa Bay Buccaneers</option>
                            </optgroup>
                            <optgroup label="NFC WEST">
                                <option>Arizona Cardinals</option>
                                <option>St. Louis Rams</option>
                                <option>San Francisco 49ers</option>
                                <option>Seattle Seahawks</option>
                            </optgroup>
                        </select>

                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Flatpickr - Date picker</h4>
                <p class="sub-header">A lightweight and powerful datetimepicker</p>

                <div class="form-group mb-3">
                    <label>Basic</label>
                    <input type="text" id="basic-datepicker" class="form-control" placeholder="Basic datepicker">
                </div>

                <div class="form-group mb-3">
                    <label>Date & Time</label>
                    <input type="text" id="datetime-datepicker" class="form-control" placeholder="Date and Time">
                </div>

                <div class="form-group mb-3">
                    <label>Human-friendly Dates</label>
                    <input type="text" id="humanfd-datepicker" class="form-control" placeholder="October 9, 2018">
                </div>

                <div class="form-group mb-3">
                    <label>MinDate and MaxDate</label>
                    <input type="text" id="minmax-datepicker" class="form-control" placeholder="mindate - maxdate">
                </div>

                <div class="form-group mb-3">
                    <label>Disabling dates</label>
                    <input type="text" id="disable-datepicker" class="form-control" placeholder="Disabling dates">
                </div>

                <div class="form-group mb-3">
                    <label>Selecting multiple dates</label>
                    <input type="text" id="multiple-datepicker" class="form-control" placeholder="Multiple dates">
                </div>

                <div class="form-group mb-3">
                    <label>Selecting multiple dates - Conjunction</label>
                    <input type="text" id="conjunction-datepicker" class="form-control"
                        placeholder="2018-10-10 :: 2018-10-11">
                </div>

                <div class="form-group mb-3">
                    <label>Range Calendar</label>
                    <input type="text" id="range-datepicker" class="form-control"
                        placeholder="2018-10-03 to 2018-10-10">
                </div>

                <div class="form-group mb-0">
                    <label>Inline Calendar</label>
                    <input type="text" id="inline-datepicker" class="form-control" placeholder="Inline calendar">
                </div>
            </div>

        </div> <!-- end card -->
    </div> <!-- end col -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Flatpickr - Time Picker</h4>
                <p class="sub-header">A lightweight and powerful time picker</p>

                <div class="form-group mb-3">
                    <label>Basic</label>
                    <input type="text" id="basic-timepicker" class="form-control" placeholder="Basic timepicker">
                </div>

                <div class="form-group mb-3">
                    <label>24-hour Time Picker</label>
                    <input type="text" id="24hours-timepicker" class="form-control" placeholder="16:21">
                </div>

                <div class="form-group mb-3">
                    <label>Time Picker w/ Limits</label>
                    <input type="text" id="minmax-timepicker" class="form-control" placeholder="Limits">
                </div>

                <div class="form-group mb-0">
                    <label>Preloading Time</label>
                    <input type="text" id="preloading-timepicker" class="form-control" placeholder="Pick a time">
                </div>
            </div>

        </div> <!-- end card -->


        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Colorpicker</h4>
                <p class="sub-header">Bootstrap Colorpicker is a modular color picker plugin for Bootstrap 4</p>

                <div class="form-group mb-3">
                    <label>Default</label>
                    <input type="text" id="basic-colorpicker" class="form-control" placeholder="Basic colorpicker">
                </div>

                <div class="form-group mb-3">
                    <label>Hexa Color</label>
                    <input type="text" id="hexa-colorpicker" class="form-control" value="#4a81d4">
                </div>

                <div class="form-group mb-3">
                    <label>As Component</label>
                    <div id="component-colorpicker" class="input-group" title="Using format option">
                        <input type="text" class="form-control input-lg" value="#564ab1" />
                        <span class="input-group-append">
                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                        </span>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label>Horizontal</label>
                    <input type="text" id="horizontal-colorpicker" class="form-control" value="#f1b44c">
                </div>

                <div class="form-group mb-0">
                    <label>Inline</label>
                    <div id="inline-colorpicker"></div>
                </div>
            </div>

        </div> <!-- end card -->

    </div> <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Bootstrap Touchspin</h4>
                <p class="sub-header">
                    A mobile and touch friendly input spinner component for Bootstrap.
                    Specify attribute <code>data-toggle="touchspin"</code> and your input would be conveterted into
                    touch friendly spinner.
                </p>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <label>Using data attributes</label>
                            <input data-toggle="touchspin" type="text" value="55">
                        </div>

                        <div class="form-group mb-3">
                            <label>Example with postfix (large)</label>
                            <input data-toggle="touchspin" value="18.20" type="text" data-step="0.1" data-decimals="2"
                                data-bts-postfix="%">
                        </div>

                        <div class="form-group mb-0">
                            <label>With prefix</label>
                            <input data-toggle="touchspin" type="text" data-bts-prefix="$">
                        </div>

                    </div> <!-- end col -->

                    <div class="col-lg-6 mt-3 mt-lg-0">
                        <div class="form-group mb-3">
                            <label>Init with empty value:</label>
                            <input data-toggle="touchspin" type="text">
                        </div>

                        <div class="form-group mb-3">
                            <label>Max value - (Default value 100)</label>
                            <input data-toggle="touchspin" data-bts-max="500" value="128" data-btn-vertical="true"
                                type="text">
                        </div>

                        <div class="form-group mb-0">
                            <label>With prefix and postfix button</label>
                            <input data-toggle="touchspin" data-bts-prefix="A Button"
                                data-bts-prefix-extra-class="btn btn-light" data-bts-postfix="A Button"
                                data-bts-postfix-extra-class="btn btn-light" type="text">
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('script')
<!-- Plugins Js -->
<script src="{{ URL::asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/multiselect/multiselect.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
@endsection

@section('script-bottom')
<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>
@endsection