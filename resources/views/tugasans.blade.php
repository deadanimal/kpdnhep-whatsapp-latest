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
                <h4 class="page-title">Tasks <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Add New</button></h4>
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
                                    <th>Assignee</th>
                                    <th>Tasks</th>
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
                                    <td>{{$tugasan->petugas}}</td>
                                    <td>{{$tugasan->kerja}}</td>
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

                            <!-- comments -->
                            <div class="row mt-3">
                                <div class="col">
                                    <h5 class="mb-2 font-16">Comments</h5>

                                    <div data-simplebar style="max-height: 300px">
                                        <a href="javascript:void(0);" class="text-body">
                                        @foreach ($komens as $komen)
                                            <div class="d-flex mt-3 p-1">
                                                <img src="/images/users/avatar-9.jpg" class="me-2 rounded-circle" height="36" alt="Arya Stark" />
                                                <div class="w-100">
                                                    <h5 class="mt-0 mb-0">
                                                        <span class="float-end text-muted font-12">{{$komen->timestamp}}</span>
                                                        {{$komen->user_id}}
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted">
                                                        {{$komen->isi}}
                                                    </p>
                                                </div>
                                            </div>

                                            <hr /> 
                                        @endforeach<!-- end comment-->
                                        </a>
                                    </div>
                                    <!-- end comment -->



                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row mt-2">
                            <form action="/komen" method="POST"></form>
                                <div class="col">
                                    <div class="border rounded">
                                        <form action="#" class="comment-area-box">
                                            <textarea rows="3" class="form-control border-0 resize-none" name="komen" placeholder="Your comment..."></textarea>
                                            <div class="p-2 bg-light">
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-sm btn-success"><i class='uil uil-message me-1'></i>Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> <!-- end .border-->
                                </div> <!-- end col-->
                            </div> <!-- end row-->
                            <!-- end comments -->
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row-->

    <div class="tab-content">
        <div class="tab-pane show active" id="bs-modals-preview">
            <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">New Task</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="/tugasans" class="my-3 mx-3">
                                @csrf
                                <!-- 1st row -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="tajuk" class="form-label">Title</label>
                                            <input type="text" name="tajuk" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="petugas" class="form-label">Assigned to</label>
                                            <select class="form-select" name="petugas">
                                                <option value="Najhan">Najhan</option>
                                                <option value="Israa">Israa</option>
                                                <option value="Afiq">Afiq</option>
                                                <option value="Wani">Wani</option>
                                                <option value="Mael">Mael</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2nd -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="kerja" class="form-label">Task description</label>
                                            <textarea class="form-control" name="kerja" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="tarikh" class="form-label">Date</label>
                                            <input class="form-control" name="tarikh" type="date" name="tarikh">
                                        </div>
                                    </div>
                                </div>

                                <!-- 3rd -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="tahap" class="form-label">Level</label>
                                            <div class="mt-2">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="tinggi" name="tahap" class="form-check-input" value="High">
                                                    <label class="form-check-label" for="tinggi">High</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="biasa" name="tahap" class="form-check-input" value="Medium">
                                                    <label class="form-check-label" for="biasa">Medium</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="rendah" name="tahap" class="form-check-input" value="Low">
                                                    <label class="form-check-label" for="rendah">Low</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row d-flex justify-content-end">
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">close</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
    </div>
</div>
@stop