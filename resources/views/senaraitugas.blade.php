@extends('layouts.base')

@section('title', 'Page Title')

@section('content')
<!-- tasks -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
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
                                @foreach ($senaraitugas as $senaraitugas)
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end .mt-2-->
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
                            <form method="POST" action="/senaraitugas" class="my-3 mx-3">
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
                                            <label for="tarikh" class="form-label">Date</label>
                                            <input class="form-control" name="tarikh" type="date" name="tarikh">
                                        </div>
                                    </div>
                                </div>

                                <!-- 2nd -->
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="kerja" class="form-label">Task description</label>
                                            <textarea class="form-control" name="kerja" rows="5"></textarea>
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