@extends('layouts.base')

@section('title', 'Page Title')

@section('content')
<!-- isi -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">KPDNHEP</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                        <li class="breadcrumb-item active">Chat</li>
                    </ol>
                </div>
                <h4 class="page-title">Chat</h4>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-xxl-4 col-xl-4 order-xl-1">
            <div class="d-grid mb-2">
                <button type="button" class="btn btn-success btn-rounded" data-bs-toggle="modal" data-bs-target="#chat_baru">Start conversation</button>
                <!-- modal new chat -->
                <div id="chat_baru" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="standard-modalLabel">New conversation</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                            </div>

                            <div class="modal-body">
                                <form action="/message" method="POST">
                                @csrf
                                    <h5>Template:</h5>
                                    <p>Hi NAME, we received your support ticket #TICKET NUMBER about your ISSUE. You asked us to contact you via WhatsApp. Would you like us to ship the replacement to ADDRESS?</p>
                                    <div class="mb-3">
                                        <label for="example-readonly" class="form-label">Phone number</label>
                                        <input type="text" id="example-readonly" class="form-control" readonly="" value="60122263479">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Name</label>
                                        <input type="text" id="simpleinput" name="nama" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Ticket number</label>
                                        <input type="text" id="simpleinput" name="tix" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Issue</label>
                                        <input type="text" id="simpleinput" name="isu" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Address</label>
                                        <input type="text" id="simpleinput" name="alamat" class="form-control">
                                    </div>
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </form>
                            </div>
                            <!-- <div class="modal-footer">
                                    
                                </div> -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- list chat -->
            <div class="card">
                <div class="card-body p-0">
                    <ul class="nav nav-tabs nav-bordered">
                        <li class="nav-item">
                            <a href="#allUsers" data-bs-toggle="tab" aria-expanded="false" class="nav-link active py-2">
                                All
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#favUsers" data-bs-toggle="tab" aria-expanded="true" class="nav-link py-2">
                                Unread
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#friendUsers" data-bs-toggle="tab" aria-expanded="true" class="nav-link py-2">
                                Important
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active p-3" id="allUsers">


                            <div class="app-search">
                                <form>
                                    <div class="mb-2 position-relative">
                                        <input type="text" class="form-control" placeholder="People, groups & messages...">
                                        <span class="mdi mdi-magnify search-icon"></span>
                                    </div>
                                </form>
                            </div>



                            <div class="row">
                                <div class="col">
                                    <div data-simplebar style="height: 550px">
                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex align-items-start mt-1 p-2">
                                                <img src="/images/users/avatar-2.jpg" class="me-2 rounded-circle" height="48" alt="Brandon Smith">
                                                <div class="w-100 overflow-hidden">
                                                    <h5 class="mt-0 mb-0 font-14">
                                                        <span class="float-end text-muted font-12">4:30am</span>
                                                        Brandon Smith
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-14">
                                                        <span class="w-25 float-end text-end"><span class="badge badge-danger-lighten">3</span></span>
                                                        <span class="w-75">How are you today?</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex align-items-start bg-light p-2">
                                                <img src="/images/users/avatar-5.jpg" class="me-2 rounded-circle" height="48" alt="Shreyu N">
                                                <div class="w-100 overflow-hidden">
                                                    <h5 class="mt-0 mb-0 font-14">
                                                        <span class="float-end text-muted font-12">5:30am</span>
                                                        Shreyu N
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-14">
                                                        <span class="w-75">Hey! a reminder for tomorrow's meeting...</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex align-items-start mt-1 p-2">
                                                <img src="/images/users/avatar-7.jpg" class="me-2 rounded-circle" height="48" alt="Maria C">
                                                <div class="w-100 overflow-hidden">
                                                    <h5 class="mt-0 mb-0 font-14">
                                                        <span class="float-end text-muted font-12">Thu</span>
                                                        Maria C
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-14">
                                                        <span class="w-25 float-end text-end"><span class="badge badge-danger-lighten">2</span></span>
                                                        <span class="w-75">Are we going to have this week's planning meeting today?</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex align-items-start mt-1 p-2">
                                                <img src="/images/users/avatar-10.jpg" class="me-2 rounded-circle" height="48" alt="Rhonda D">
                                                <div class="w-100 overflow-hidden">
                                                    <h5 class="mt-0 mb-0 font-14">
                                                        <span class="float-end text-muted font-12">Wed</span>
                                                        Rhonda D
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-14">
                                                        <span class="w-75">Please check these design assets...</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex align-items-start mt-1 p-2">
                                                <img src="/images/users/avatar-3.jpg" class="me-2 rounded-circle" height="48" alt="Michael H">
                                                <div class="w-100 overflow-hidden">
                                                    <h5 class="mt-0 mb-0 font-14">
                                                        <span class="float-end text-muted font-12">Tue</span>
                                                        Michael H
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-14">
                                                        <span class="w-25 float-end text-end"><span class="badge badge-danger-lighten">6</span></span>
                                                        <span class="w-75">Are you free for 15 min? I would like to discuss something...</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex align-items-start mt-1 p-2">
                                                <img src="/images/users/avatar-6.jpg" class="me-2 rounded-circle" height="48" alt="Thomas R">
                                                <div class="w-100 overflow-hidden">
                                                    <h5 class="mt-0 mb-0 font-14">
                                                        <span class="float-end text-muted font-12">Tue</span>
                                                        Thomas R
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-14">
                                                        <span class="w-75">Let's have meeting today between me, you and Tony...</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex align-items-start mt-1 p-2">
                                                <img src="/images/users/avatar-8.jpg" class="me-2 rounded-circle" height="48" alt="Thomas J">
                                                <div class="w-100 overflow-hidden">
                                                    <h5 class="mt-0 mb-0 font-14">
                                                        <span class="float-end text-muted font-12">Tue</span>
                                                        Thomas J
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-14">
                                                        <span class="w-75">Howdy?</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex align-items-start mt-1 p-2">
                                                <img src="/images/users/avatar-1.jpg" class="me-2 rounded-circle" height="48" alt="Ricky J">
                                                <div class="w-100 overflow-hidden">
                                                    <h5 class="mt-0 mb-0 font-14">
                                                        <span class="float-end text-muted font-12">Mon</span>
                                                        Ricky J
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-14">
                                                        <span class="w-25 float-end text-end"><span class="badge badge-danger-lighten">28</span></span>
                                                        <span class="w-75">Are you interested in learning?</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane show p-3" id="favUsers">


                            <div class="app-search">
                                <form>
                                    <div class="mb-2 position-relative">
                                        <input type="text" class="form-control" placeholder="People, groups & messages...">
                                        <span class="mdi mdi-magnify search-icon"></span>
                                    </div>
                                </form>
                            </div>



                            <div class="row">
                                <div class="col">
                                    <div data-simplebar style="height: 550px">
                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex align-items-start mt-1 p-2">
                                                <img src="/images/users/avatar-2.jpg" class="me-2 rounded-circle" height="48" alt="Brandon Smith">
                                                <div class="w-100 overflow-hidden">
                                                    <h5 class="mt-0 mb-0 font-14">
                                                        <span class="float-end text-muted font-12">4:30am</span>
                                                        Brandon Smith
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-14">
                                                        <span class="w-25 float-end text-end"><span class="badge badge-danger-lighten">3</span></span>
                                                        <span class="w-75">How are you today?</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex align-items-start mt-1 p-2">
                                                <img src="/images/users/avatar-7.jpg" class="me-2 rounded-circle" height="48" alt="Maria C">
                                                <div class="w-100 overflow-hidden">
                                                    <h5 class="mt-0 mb-0 font-14">
                                                        <span class="float-end text-muted font-12">Thu</span>
                                                        Maria C
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-14">
                                                        <span class="w-25 float-end text-end"><span class="badge badge-danger-lighten">2</span></span>
                                                        <span class="w-75">Are we going to have this week's planning meeting today?</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex align-items-start mt-1 p-2">
                                                <img src="/images/users/avatar-3.jpg" class="me-2 rounded-circle" height="48" alt="Michael H">
                                                <div class="w-100 overflow-hidden">
                                                    <h5 class="mt-0 mb-0 font-14">
                                                        <span class="float-end text-muted font-12">Tue</span>
                                                        Michael H
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-14">
                                                        <span class="w-25 float-end text-end"><span class="badge badge-danger-lighten">6</span></span>
                                                        <span class="w-75">Are you free for 15 min? I would like to discuss something...</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex align-items-start mt-1 p-2">
                                                <img src="/images/users/avatar-1.jpg" class="me-2 rounded-circle" height="48" alt="Ricky J">
                                                <div class="w-100 overflow-hidden">
                                                    <h5 class="mt-0 mb-0 font-14">
                                                        <span class="float-end text-muted font-12">Mon</span>
                                                        Ricky J
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-14">
                                                        <span class="w-25 float-end text-end"><span class="badge badge-danger-lighten">28</span></span>
                                                        <span class="w-75">Are you interested in learning?</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane show p-3" id="friendUsers">


                            <div class="app-search">
                                <form>
                                    <div class="mb-2 position-relative">
                                        <input type="text" class="form-control" placeholder="People, groups & messages...">
                                        <span class="mdi mdi-magnify search-icon"></span>
                                    </div>
                                </form>
                            </div>



                            <div class="row">
                                <div class="col">
                                    <div data-simplebar style="height: 550px">
                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex align-items-start mt-1 p-2">
                                                <img src="/images/users/avatar-2.jpg" class="me-2 rounded-circle" height="48" alt="Brandon Smith">
                                                <div class="w-100 overflow-hidden">
                                                    <h5 class="mt-0 mb-0 font-14">
                                                        <span class="float-end text-muted font-12">4:30am</span>
                                                        Brandon Smith
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-14">
                                                        <span class="w-25 float-end text-end"><span class="badge badge-danger-lighten">3</span></span>
                                                        <span class="w-75">How are you today?</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex align-items-start bg-light p-2">
                                                <img src="/images/users/avatar-5.jpg" class="me-2 rounded-circle" height="48" alt="Shreyu N">
                                                <div class="w-100 overflow-hidden">
                                                    <h5 class="mt-0 mb-0 font-14">
                                                        <span class="float-end text-muted font-12">5:30am</span>
                                                        Shreyu N
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted font-14">
                                                        <span class="w-75">Hey! a reminder for tomorrow's meeting...</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="col-xxl-8 col-xl-8 order-xl-2">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body py-2">

                            <div class="dropdown  float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#standard-modal">View full</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-contact">Edit Contact Info</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Remove</a>
                                </div>

                                <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="standard-modalLabel">Shreyu N</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mt-3 text-center">
                                                    <img src="/images/users/avatar-5.jpg" alt="shreyu" class="img-thumbnail avatar-lg rounded-circle" />
                                                    <h4>Shreyu N</h4>
                                                    <p class="text-muted mt-2 font-14">Last Interacted: <strong>Few hours back</strong>
                                                    </p>
                                                </div>

                                                <div class="mt-3 mx-4">
                                                    <hr class="" />

                                                    <p class="mt-4 mb-1"><strong><i class='uil uil-at'></i> Email:</strong></p>
                                                    <p>support@coderthemes.com</p>

                                                    <p class="mt-3 mb-1"><strong><i class='uil uil-phone'></i> Phone Number:</strong>
                                                    </p>
                                                    <p>+1 456 9595 9594</p>

                                                    <p class="mt-3 mb-1"><strong><i class='uil uil-location'></i> Location:</strong></p>
                                                    <p>California, USA</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                                <div id="edit-contact" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="standard-modalLabel">Edit Contact</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="nama_ws" class="form-label">Name</label>
                                                        <input type="text" id="nama_ws" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="text" id="email" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="lokasi" class="form-label">Location</label>
                                                        <input type="text" id="lokasi" class="form-control">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                            </div>

                            <div class="mt-0">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="/images/users/avatar-5.jpg" alt="shreyu" class="img-thumbnail avatar-lg rounded-circle" />
                                    </div>
                                    <div class="col">
                                        <h4>Shreyu N</h4>
                                        <p class="text-muted mb-0 font-14">Last Interacted: <strong>Few hours back</strong>
                                        </p>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1" checked>
                                            <label class="form-check-label" for="customCheck1">Important</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <ul class="conversation-list" data-simplebar style="height: 367px">
                        @foreach ($try as $try)
                        @if ($jenis == "sent")
                        <li class="clearfix odd">
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>10:05 - Dominic</i>
                                    <p>
                                        {{$try}}
                                    </p>
                                </div>
                            </div>
                            <div class="conversation-actions dropdown">
                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown" aria-expanded="false"><i class="uil uil-ellipsis-v"></i></button>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Copy Message</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </li>
                        @else
                        <li class="clearfix">
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Shreyu N - 10:01</i>
                                    <p>
                                        {{$try}}
                                    </p>
                                </div>
                            </div>
                            <div class="conversation-actions dropdown">
                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown" aria-expanded="false"><i class='uil uil-ellipsis-v'></i></button>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Copy Message</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </li>
                        @endif
                        @endforeach
                    </ul>

                    <div class="row">
                        <div class="col">
                            <div class="mt-2 bg-light p-3 rounded">
                                <form action="/tingting" method="POST" class="needs-validation" novalidate="" name="chat-form" id="chat-form">
                                    <!-- <form action="/message" method="POST"> -->
                                    @csrf
                                    <div class="row">
                                        <div class="col mb-2 mb-sm-0">
                                            <input type="text" class="form-control border-0" placeholder="Enter your text" name="testsat">
                                            <div class="invalid-feedback">
                                                Please enter your messsage
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="btn-group">
                                                <a class="btn btn-light" data-bs-toggle="modal" data-bs-target="#hantar-fail"><i class="uil uil-paperclip"></i></a>
                                                <a href="#" class="btn btn-light"> <i class="uil uil-smile"></i> </a>
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-success chat-send">
                                                        <i class="uil uil-message"></i></button>
                                                </div>
                                            </div>
                                            <div id="hantar-fail" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="standard-modalLabel">Send files</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                                                <div class="fallback">
                                                                    <input name="file" type="file" multiple />
                                                                </div>

                                                                <div class="dz-message needsclick">
                                                                    <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                                    <!-- <h3>Drop files here or click to upload.</h3> -->
                                                                </div>
                                                            </form>

                                                            <!-- Preview -->
                                                            <div class="dropzone-previews mt-3" id="file-previews"></div>

                                                            <!-- file preview template -->
                                                            <div class="d-none" id="uploadPreviewTemplate">
                                                                <div class="card mt-1 mb-0 shadow-none border">
                                                                    <div class="p-2">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-auto">
                                                                                <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                                                            </div>
                                                                            <div class="col ps-0">
                                                                                <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                                                                <p class="mb-0" data-dz-size></p>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <!-- Button -->
                                                                                <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                                                    <i class="dripicons-cross"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Send</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- </form> -->
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- 
    <form method="POST" action="/message">
        @csrf
        <div class="mb-3">
            <label for="sembang" class="form-label">Task description</label>
            <textarea class="form-control" name="sembang" rows="5"></textarea>
        </div>
        <button type="submit">try</button>
    </form> -->

</div>
@stop