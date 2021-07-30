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

                                        <form action="/simpan_muatnaik" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="laporan_nama" class="form-label">Report's name</label>
                                                    <input type="text" id="laporan_nama" name="laporan_nama" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="laporan_tarikh" class="form-label">Date</label>
                                                    <input class="form-control" name="laporan_tarikh" type="date" name="laporan_tarikh">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="laporan_perincian" class="form-label">Report</label>
                                                    <textarea class="form-control" id="laporan_perincian" name="laporan_perincian" rows="5"></textarea>
                                                </div>
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
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>

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
                                            <th class="border-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($laporans as $laporan)
                                        <tr>
                                            <td>
                                                {{$laporan->laporan_nama}}
                                            </td>
                                            <td>
                                                {{$laporan->laporan_perincian}}
                                            </td>
                                            <td><a href="/laporan_delete/{{$laporan->id}}" class="action-icon"> <i class="mdi mdi-delete"></i></a></td>

                                        </tr>
                                        @endforeach
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($fails as $fail)
                                        <tr>
                                            <td>
                                                <span class="ms-2 fw-semibold"><a href="javascript: void(0);" class="text-reset">{{$fail->nama}}</a></span>
                                            </td>
                                            <td>
                                                <p class="mb-0">{{$fail->created_at}}</p>
                                            </td>
                                            <td>{{$fail->saiz}}</td>
                                        </tr>
                                        @endforeach
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