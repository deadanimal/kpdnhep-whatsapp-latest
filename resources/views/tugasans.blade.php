@extends('layouts.base')

@section('title', 'Page Title')

@section('content')
<!-- tasks -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xxl-8">
            <!-- start page title -->
            <div class="page-title-box">
                <div class="page-title-right">
                    <div class="app-search">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." />
                                <span class="mdi mdi-magnify search-icon"></span>
                                <button class="input-group-text btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='uil uil-sort-amount-down'></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Due Date</a>
                                    <a class="dropdown-item" href="#">Added Date</a>
                                    <a class="dropdown-item" href="#">Assignee</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <h4 class="page-title">
                    My Tasks
                    <!-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Add New</button> -->
                </h4>
            </div>
            <!-- end page title -->

            <!-- tasks panel -->
            <div class="mt-2">
                <h5 class="m-0 pb-2">
                    <a class="text-dark" data-bs-toggle="collapse" href="#todayTasks" role="button" aria-expanded="false" aria-controls="todayTasks">
                        List of tasks
                        <!-- <span class="text-muted">(10)</span> -->
                    </a>
                </h5>

                <div class="card">
                    <div class="card-body">
                        <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Due date</th>
                                    <th>Level</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($tugasans as $tugasan)
                                <tr>
                                    <td>{{$tugasan->tajuk}}</td>
                                    <td>{{$tugasan->tarikh}}</td>
                                    <td>{{$tugasan->tahap}}</td>
                                    <td>
                                        @if ($tugasan->status == "Done")
                                        <span class="badge bg-success">Done</span>
                                        @else
                                        <span class="badge bg-danger">Underdone</span>
                                        @endif
                                        <!-- {{$tugasan->status}} -->
                                    </td>
                                    <td>
                                        <a href="/tugasan_delete/{{$tugasan->id}}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        <a href="/hantar/{{$tugasan->id}}" class="action-icon"> <i class="uil uil-arrow-circle-right"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Assignee</th>
                                    <th>Tasks</th>
                                    <th>Due date</th>
                                    <th>Level</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>{{$senaraitugas->tajuk}}</td>
                                    <td>{{$senaraitugas->petugas}}</td>
                                    <td>{{$senaraitugas->kerja}}</td>
                                    <td>{{$senaraitugas->tarikh}}</td>
                                    <td>{{$senaraitugas->tahap}}</td>
                                    <td>
                                        @if ($senaraitugas->status == "Done")
                                        <span class="badge bg-success">Done</span>
                                        @else
                                        <span class="badge bg-danger">Underdone</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/delete_list/{{$senaraitugas->id}}" class="action-icon text-danger"> <i class="mdi mdi-delete"></i></a>
                                        <a href="/terimakerja/{{$senaraitugas->id}}" class="action-icon text-success"> <i class="mdi mdi-check-circle"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end .mt-2-->
        </div> <!-- end col -->

        <!-- task details -->
        <div class="col-xxl-4">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown card-widgets">
                        <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='uil uil-ellipsis-h'></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class='uil uil-file-upload me-1'></i>Attachment
                            </a>
                            <div class="dropdown-divider"></div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item text-danger">
                                <i class='uil uil-trash-alt me-1'></i>Delete
                            </a>
                        </div> <!-- end dropdown menu-->
                    </div> <!-- end dropdown-->

                    <form action="/semak/{{$tugasan_selected->id}}" method="POST">
                        @csrf
                        @if ($tugasan_selected->status == "Done")
                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="completedCheck" name="status" value="Done" checked>
                            <label class="form-check-label" for="completedCheck">
                                Mark as completed
                            </label>
                        </div>
                        @else
                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="completedCheck" name="status" value="Done">
                            <label class="form-check-label" for="completedCheck">
                                Mark as completed
                            </label>
                        </div>
                        @endif
                        <button class="btn btn-primary btn-sm float-start" type="submit">Confirm</button>
                    </form>
                    <!-- end forms-check-->

                    <hr class="mt-4 mb-2" />

                    <div class="row">
                        <div class="col">

                            <h4>{{$tugasan_selected->tajuk}}</h4>

                            <div class="row">
                                <div class="col-6">
                                    <!-- assignee -->
                                    <p class="mt-2 mb-1 text-muted">Assigned To</p>
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mt-1 font-14">
                                                {{$tugasan_selected->petugas}}
                                            </h5>
                                        </div>
                                    </div>
                                    <!-- end assignee -->
                                </div> <!-- end col -->

                                <div class="col-6">
                                    <!-- start due date -->
                                    <p class="mt-2 mb-1 text-muted">Due Date</p>
                                    <div class="d-flex">
                                        <i class='uil uil-schedule font-18 text-success me-1'></i>
                                        <div>
                                            <h5 class="mt-1 font-14">
                                                {{$tugasan_selected->tarikh}}
                                            </h5>
                                        </div>
                                    </div>
                                    <!-- end due date -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <!-- task description -->
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="border rounded">
                                        <div id="bubble-editor" style="height: 130px;">
                                            <h3>{{$tugasan_selected->tajuk}}</h3>
                                            <p><br></p>
                                            {{$tugasan_selected->kerja}}
                                            <p><br></p>
                                        </div> <!-- end Snow-editor-->
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end task description -->
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> 
        <!-- end col -->
    </div>
    <!-- end row-->
</div>
@stop