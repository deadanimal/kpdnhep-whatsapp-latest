@extends('layouts.base')

@section('title', 'Page Title')

@section('content')

<div class="container-fluid">


    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">KPDNHEP</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                        <li class="breadcrumb-item active">Reports</li>
                    </ol>
                </div>
                <h4 class="page-title">Reports</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Tasks Overview</h4>

                    <div dir="ltr">
                        <div class="mt-3 chartjs-chart" style="height: 320px;">
                            <canvas id="task-area-chart" data-bgColor="#727cf5" data-borderColor="#727cf5"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">


        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="page-aside-left">

                        <div class="mb-2">
                            <!-- upload files -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal">New Report</button>
                            <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="standard-modalLabel">New report</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="tajuk_fail" class="form-label">Report's name</label>
                                                    <input type="text" id="Tajuk_fail" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-textarea" class="form-label">Report</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                </div>
                                                <form action="\fails" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @if ($message = Session::get('success'))
                                                    <div class="alert alert-success">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                    @endif

                                                    @if (count($errors) > 0)
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif

                                                    <div class="custom-file">
                                                        <input type="file" name="file" class="custom-file-input" id="chooseFile">
                                                        <!-- <label class="custom-file-label" for="chooseFile">Select file</label> -->
                                                    </div>
                                                </form>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>
                            <!-- <form action="\fails" method="post" enctype="multipart/form-data">
                                <h3 class="text-center mb-5">Upload Report</h3>
                                @csrf
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endif

                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="chooseFile">
                                    <label class="custom-file-label" for="chooseFile">Select file</label>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                                    Upload Files
                                </button>
                            </form> -->
                        </div>
                        <div class="email-menu-list mt-3">
                            <a href="#" class="list-group-item border-0"><i class="mdi mdi-folder-outline font-18 align-middle me-2"></i>My Files</a>
                            <!-- <a href="#" class="list-group-item border-0"><i class="mdi mdi-share-variant font-18 align-middle me-2"></i>Share with me</a> -->
                            <a href="#" class="list-group-item border-0"><i class="mdi mdi-clock-outline font-18 align-middle me-2"></i>Recent</a>
                            <!-- <a href="#" class="list-group-item border-0"><i class="mdi mdi-star-outline font-18 align-middle me-2"></i>Starred</a> -->
                            <a href="#" class="list-group-item border-0"><i class="mdi mdi-delete font-18 align-middle me-2"></i>Deleted Files</a>
                        </div>

                        <div class="mt-5">
                            <h4><span class="badge rounded-pill p-1 px-2 badge-secondary-lighten">FREE</span></h4>
                            <h6 class="text-uppercase mt-3">Storage</h6>
                            <div class="progress my-2 progress-sm">
                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 46%" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-muted font-12 mb-0">7.02 GB (46%) of 15 GB used</p>
                        </div>

                    </div>


                    <div class="page-aside-right">

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="app-search">
                                <form>
                                    <div class="mb-2 position-relative">
                                        <input type="text" class="form-control" placeholder="Search reports...">
                                        <span class="mdi mdi-magnify search-icon"></span>
                                    </div>
                                </form>
                            </div>
                            <!-- <div>
                                <button type="submit" class="btn btn-sm btn-light"><i class="mdi mdi-format-list-bulleted"></i></button>
                                <button type="submit" class="btn btn-sm"><i class="mdi mdi-view-grid"></i></button>
                                <button type="submit" class="btn btn-sm"><i class="mdi mdi-information-outline"></i></button>
                            </div> -->
                        </div>

                        <div class="mt-3">
                            <h5 class="mb-2">List of reports</h5>

                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="border-0">Name</th>
                                            <th class="border-0">Report</th>
                                            <th class="border-0" style="width: 80px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Danielle Thompson
                                            </td>
                                            <td>
                                                <span class="ms-2 fw-semibold"><a href="javascript: void(0);" class="text-reset">App Design & Development</a></span>
                                            </td>
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="#" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-xs" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-share-variant me-2 text-muted vertical-middle"></i>Share</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-link me-2 text-muted vertical-middle"></i>Get Sharable Link</a> -->
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted vertical-middle"></i>Rename</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-download me-2 text-muted vertical-middle"></i>Download</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted vertical-middle"></i>Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Coder Themes
                                            </td>
                                            <td>
                                                <span class="ms-2 fw-semibold"><a href="javascript: void(0);" class="text-reset">Hyper-sketch-design.zip</a></span>
                                            </td>
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="#" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-xs" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-share-variant me-2 text-muted vertical-middle"></i>Share</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-link me-2 text-muted vertical-middle"></i>Get Sharable Link</a> -->
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted vertical-middle"></i>Rename</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-download me-2 text-muted vertical-middle"></i>Download</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted vertical-middle"></i>Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Gary Coley
                                            </td>
                                            <td>
                                                <span class="ms-2 fw-semibold"><a href="javascript: void(0);" class="text-reset">Annualreport.pdf</a></span>
                                            </td>
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="#" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-xs" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-share-variant me-2 text-muted vertical-middle"></i>Share</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-link me-2 text-muted vertical-middle"></i>Get Sharable Link</a> -->
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted vertical-middle"></i>Rename</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-download me-2 text-muted vertical-middle"></i>Download</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted vertical-middle"></i>Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="mt-3">
                            <h5 class="mb-2">List of files</h5>

                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="border-0">Name</th>
                                            <th class="border-0">Last Modified</th>
                                            <th class="border-0">Size</th>
                                            <th class="border-0">Owner</th>
                                            <th class="border-0" style="width: 80px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="ms-2 fw-semibold"><a href="javascript: void(0);" class="text-reset">App Design & Development</a></span>
                                            </td>
                                            <td>
                                                <p class="mb-0">Jan 03, 2020</p>
                                            </td>
                                            <td>128 MB</td>
                                            <td>
                                                Danielle Thompson
                                            </td>
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="#" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-xs" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-share-variant me-2 text-muted vertical-middle"></i>Share</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-link me-2 text-muted vertical-middle"></i>Get Sharable Link</a> -->
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted vertical-middle"></i>Rename</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-download me-2 text-muted vertical-middle"></i>Download</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted vertical-middle"></i>Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="ms-2 fw-semibold"><a href="javascript: void(0);" class="text-reset">Hyper-sketch-design.zip</a></span>
                                            </td>
                                            <td>
                                                <p class="mb-0">Feb 13, 2020</p>
                                            </td>
                                            <td>521 MB</td>
                                            <td>
                                                Coder Themes
                                            </td>
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="#" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-xs" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-share-variant me-2 text-muted vertical-middle"></i>Share</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-link me-2 text-muted vertical-middle"></i>Get Sharable Link</a> -->
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted vertical-middle"></i>Rename</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-download me-2 text-muted vertical-middle"></i>Download</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted vertical-middle"></i>Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="ms-2 fw-semibold"><a href="javascript: void(0);" class="text-reset">Annualreport.pdf</a></span>
                                            </td>
                                            <td>
                                                <p class="mb-0">Dec 18, 2019</p>
                                            </td>
                                            <td>7.2 MB</td>
                                            <td>
                                                Gary Coley
                                            </td>
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="#" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-xs" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-share-variant me-2 text-muted vertical-middle"></i>Share</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-link me-2 text-muted vertical-middle"></i>Get Sharable Link</a> -->
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil me-2 text-muted vertical-middle"></i>Rename</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-download me-2 text-muted vertical-middle"></i>Download</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete me-2 text-muted vertical-middle"></i>Remove</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="clearfix"></div>
            </div>

        </div>
    </div>

</div>


@stop