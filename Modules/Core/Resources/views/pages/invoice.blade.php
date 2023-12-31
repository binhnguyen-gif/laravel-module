@extends('core::layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title d-print-none">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Invoice</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Invoice</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Logo & title -->
                <div class="clearfix">
                    <div class="float-sm-right">
                        <img src="/assets/images/logo.png" alt="" height="48" />
                        <h4 class="m-0 d-inline align-middle">Shreyu</h4>
                        <address class="pl-2 mt-2">
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                    </div>
                    <div class="float-sm-left">
                        <h4 class="m-0 d-print-none">Invoice</h4>
                        <dl class="row mb-2 mt-3">
                            <dt class="col-sm-3 font-weight-normal">Invoice Number :</dt>
                            <dd class="col-sm-9 font-weight-normal">#sh1001</dd>

                            <dt class="col-sm-3 font-weight-normal">Invoice Date :</dt>
                            <dd class="col-sm-9 font-weight-normal">Jul 17, 2019</dd>

                            <dt class="col-sm-3 font-weight-normal">Due Date :</dt>
                            <dd class="col-sm-9 font-weight-normal">Jul 27, 2019</dd>
                        </dl>
                    </div>

                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <h6 class="font-weight-normal">Invoice For:</h6>
                        <h6 class="font-size-16">Greeva Navadiya</h6>
                        <address>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                    </div> <!-- end col -->

                    <div class="col-md-6">
                        <div class="text-md-right">
                            <h6 class="font-weight-normal">Total</h6>
                            <h2>$4137.75</h2>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table mt-4 table-centered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Item</th>
                                        <th style="width: 10%">Hours</th>
                                        <th style="width: 10%">Hours Rate</th>
                                        <th style="width: 10%" class="text-right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h5 class="font-size-16 mt-0 mb-2">Web Design</h5>
                                            <p class="text-muted mb-0">2 Pages static website -
                                                my
                                                website</p>
                                        </td>
                                        <td>22</td>
                                        <td>$30</td>
                                        <td class="text-right">$660.00</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <h5 class="font-size-16 mt-0 mb-2">Software Development</h5>
                                            <p class="text-muted mb-0">Invoice editor software -
                                                AB'c
                                                Software</p>
                                        </td>
                                        <td>112.5</td>
                                        <td>$35</td>
                                        <td class="text-right">$3937.50</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div> <!-- end table-responsive -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-6">
                        <div class="clearfix pt-5">
                            <h6 class="text-muted">Notes:</h6>

                            <small class="text-muted">
                                All accounts are to be paid within 7 days from receipt of
                                invoice. To be paid by cheque or credit card or direct payment
                                online. If account is not paid within 7 days the credits details
                                supplied as confirmation of work undertaken will be charged the
                                agreed quoted fee noted above.
                            </small>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-sm-6">
                        <div class="float-right mt-4">
                            <p><span class="font-weight-medium">Sub-total:</span> <span
                                    class="float-right">$4597.50</span></p>
                            <p><span class="font-weight-medium">Discount (10%):</span> <span class="float-right">
                                    &nbsp;&nbsp;&nbsp; $459.75</span></p>
                            <h3>$4137.75 USD</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="mt-5 mb-1">
                    <div class="text-right d-print-none">
                        <a href="javascript:window.print()" class="btn btn-primary"><i class="uil uil-print mr-1"></i>
                            Print</a>
                        <a href="#" class="btn btn-info">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection