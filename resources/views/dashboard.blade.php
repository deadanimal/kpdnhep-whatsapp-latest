@extends('layouts.base')

@section('title', 'Page Title')

@section('content')
<!-- dashboard -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">KPDNHEP</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">New User</h5>
                                <h3 class="my-2 py-1">9,184</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <div id="campaign-sent-chart" data-colors="#727cf5"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">Interaction</h5>
                                <h3 class="my-2 py-1">3,254</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 5.38%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <div id="new-leads-chart" data-colors="#0acf97"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Deals">Total User</h5>
                                <h3 class="my-2 py-1">861</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <div id="deals-chart" data-colors="#727cf5"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">Total Engagement</h5>
                                <h3 class="my-2 py-1">253</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <div id="booked-revenue-chart" data-colors="#0acf97"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-12">
                <div class="card card-h-100">
                    <div class="card-body">
                        <div class="alert alert-warning alert-dismissible fade show mb-3" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            Property HY1xx is not receiving hits. Either your site is not receiving any sessions or it is not tagged correctly.
                        </div>
                        <ul class="nav float-end d-none d-lg-flex">
                            <li class="nav-item">
                                <a class="nav-link text-muted" href="#">Today</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-muted" href="#">7d</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">15d</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-muted" href="#">1m</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-muted" href="#">1y</a>
                            </li>
                        </ul>
                        <h4 class="header-title mb-3">Sessions Overview</h4>

                        <div dir="ltr">
                            <div id="sessions-overview" class="apex-charts mt-3" data-colors="#0acf97"></div>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="" class="p-0 float-end">Export <i class="mdi mdi-download ms-1"></i></a>
                        <h4 class="header-title mt-1 mb-3">Engagement Overview</h4>

                        <div class="table-responsive">
                            <table class="table table-sm table-centered mb-0 font-14">
                                <thead class="table-light">
                                    <tr>
                                        <th>Duration (Secs)</th>
                                        <th style="width: 30%;">Sessions</th>
                                        <th style="width: 30%;">Views</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>0-30</td>
                                        <td>2,250</td>
                                        <td>4,250</td>
                                    </tr>
                                    <tr>
                                        <td>31-60</td>
                                        <td>1,501</td>
                                        <td>2,050</td>
                                    </tr>
                                    <tr>
                                        <td>61-120</td>
                                        <td>750</td>
                                        <td>1,600</td>
                                    </tr>
                                    <tr>
                                        <td>121-240</td>
                                        <td>540</td>
                                        <td>1,040</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
        </div>
    </div>


@stop