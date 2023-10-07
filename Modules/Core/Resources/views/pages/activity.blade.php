@extends('core::layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Activity</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Activity Page</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row mt-3">
    <div class="col-lg-12">
        <h5 class="mb-5">Left Timeline</h5>
        <div class="left-timeline pl-4">
            <ul class="list-unstyled events">
                <li class="event-list">
                    <div>
                        <div class="media">
                            <div class="event-date text-center mr-4">
                                <div class=" avatar-sm rounded-circle bg-soft-primary">
                                    <span class="font-size-16 avatar-title text-primary font-weight-semibold">
                                        02
                                    </span>
                                </div>
                                <p class="mt-2">Jun</p>
                            </div>
                            <div class="media-body">
                                <div class="card d-inline-block">
                                    <div class="card-body">
                                        <h5 class="mt-0">Event One</h5>
                                        <p class="text-muted">It will be as simple as occidental in fact it will be
                                            Occidental Cambridge friend</p>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="event-list">
                    <div>
                        <div class="media">
                            <div class="event-date text-center mr-4">
                                <div class=" avatar-sm rounded-circle bg-soft-primary">
                                    <span class="font-size-16 avatar-title text-primary font-weight-semibold">
                                        03
                                    </span>
                                </div>
                                <p class="mt-2">Jun</p>
                            </div>
                            <div class="media-body">
                                <div class="card d-inline-block">
                                    <div class="card-body">
                                        <h5 class="mt-0">Event Two</h5>
                                        <p class="text-muted">To an English person, it will seem like simplified
                                            English, as a skeptical Cambridge friend of mine told me what Occidental</p>

                                        <ul class="text-muted">
                                            <li class="py-1">Sed ut perspiciatis unde</li>
                                            <li class="py-1">Nemo enim ipsam</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="event-list">
                    <div>
                        <div class="media">
                            <div class="event-date text-center mr-4">
                                <div class=" avatar-sm rounded-circle bg-soft-primary">
                                    <span class="font-size-16 avatar-title text-primary font-weight-semibold">
                                        04
                                    </span>
                                </div>
                                <p class="mt-2">Jun</p>
                            </div>
                            <div class="media-body">
                                <div class="card d-inline-block">
                                    <div class="card-body">
                                        <h5 class="mt-0">Event Three</h5>
                                        <p class="text-muted mb-4">At vero eos et accusamus et iusto odio dignissimos
                                            ducimus qui blanditiis praesentium deleniti</p>
                                        <div class="album">
                                            <a href="#" class="mr-1">
                                                <img alt="" src="/assets/images/small/img-1.jpg">
                                            </a>
                                            <a href="#" class="mr-1">
                                                <img alt="" src="/assets/images/small/img-2.jpg">
                                            </a>
                                            <a href="#" class="mr-1">
                                                <img alt="" src="/assets/images/small/img-3.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="event-list">
                    <div>
                        <div class="media">
                            <div class="event-date text-center mr-4">
                                <div class=" avatar-sm rounded-circle bg-soft-primary">
                                    <span class="font-size-16 avatar-title text-primary font-weight-semibold">
                                        05
                                    </span>
                                </div>
                                <p class="mt-2">Jun</p>
                            </div>
                            <div class="media-body">
                                <div class="card d-inline-block">
                                    <div class="card-body">
                                        <h5 class="mt-0">Event Four</h5>
                                        <p class="text-muted mb-0">For science, music, sport, etc, Europe uses the same
                                            vocabulary their pronunciation and their most common words.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>

</div>
<!-- end row -->

<div class="row mt-5">
    <div class="col-12">
        <h5 class="text-center mb-5">Center Timeline</h5>
        <div class="timeline" dir="ltr">

            <article class="timeline-item">
                <h2 class="m-0 d-none">&nbsp;</h2>
                <div class="time-show mt-0">
                    <a href="#" class="btn btn-primary width-lg">Today</a>
                </div>
            </article>


            <article class="timeline-item timeline-item-left">
                <div class="timeline-desk">
                    <div class="timeline-box clearfix">
                        <span class="timeline-icon"></span>
                        <div class="event-date float-right text-center ml-4">
                            <div class=" avatar-sm rounded-circle bg-soft-primary">
                                <span class="font-size-16 avatar-title text-primary font-weight-semibold">
                                    02
                                </span>
                            </div>
                            <p class="mt-2">Jun</p>
                        </div>
                        <div class="overflow-hidden">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0">Event One</h5>
                                    <p class="text-muted">At solmen va esser necessi far uniform grammatica,
                                        pronunciation e plu sommun paroles. Ma quande lingues coalesce li del resultant.
                                    </p>
                                    <p class="text-muted">It will be as simple as in fact, it will be Occidental.</p>
                                    <div>
                                        <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="timeline-item">
                <div class="timeline-desk">
                    <div class="timeline-box clearfix">
                        <span class="timeline-icon"></span>
                        <div class="event-date float-left text-center mr-4">
                            <div class=" avatar-sm rounded-circle bg-soft-primary">
                                <span class="font-size-16 avatar-title text-primary font-weight-semibold">
                                    03
                                </span>
                            </div>
                            <p class="mt-2">Jun</p>
                        </div>
                        <div class="overflow-hidden">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0">Event Two</h5>
                                    <p class="text-muted">If several languages coalesce, the grammar of the resulting
                                        language is more simple and regular than that of the individual languages</p>
                                    <ul class="text-muted mb-0">
                                        <li class="py-1">Sed ut perspiciatis unde</li>
                                        <li class="py-1">Nemo enim ipsam</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="timeline-item timeline-item-left">
                <div class="timeline-desk">
                    <div class="timeline-box clearfix">
                        <span class="timeline-icon"></span>
                        <div class="event-date float-right text-center ml-4">
                            <div class=" avatar-sm rounded-circle bg-soft-primary">
                                <span class="font-size-16 avatar-title text-primary font-weight-semibold">
                                    04
                                </span>
                            </div>
                            <p class="mt-2">Jun</p>
                        </div>
                        <div class="overflow-hidden">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0">Event Three</h5>
                                    <p class="text-muted mb-4">Everyone realizes why a new common language would be
                                        desirable: one could refuse to pay expensive translators.</p>
                                    <div class="timeline-album">
                                        <a href="#" class="mr-1">
                                            <img alt="" src="/assets/images/small/img-1.jpg">
                                        </a>
                                        <a href="#" class="mr-1">
                                            <img alt="" src="/assets/images/small/img-2.jpg">
                                        </a>
                                        <a href="#" class="mr-1">
                                            <img alt="" src="/assets/images/small/img-3.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="timeline-item">
                <div class="timeline-desk">
                    <div class="timeline-box clearfix">
                        <span class="timeline-icon"></span>
                        <div class="event-date float-left text-center mr-4">
                            <div class=" avatar-sm rounded-circle bg-soft-primary">
                                <span class="font-size-16 avatar-title text-primary font-weight-semibold">
                                    04
                                </span>
                            </div>
                            <p class="mt-2">Jun</p>
                        </div>
                        <div class="overflow-hidden">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0">Event One</h5>
                                    <p class="text-muted">Their separate existence is a myth. For science, music, sport,
                                        etc, Europe uses the same vocabulary. The languages only differ their
                                        pronunciation</p>
                                    <p class="text-muted mb-0">To an English person, it will seem like simplified
                                        English as a skeptical Cambridge friend of mine told me what occidental</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </article>

        </div>
    </div>
</div>
<!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection