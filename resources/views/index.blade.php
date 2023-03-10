@extends('default')

@section('content')

        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{$data['blogtitle']}}</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">{{$data['bio']}}</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{$data['webdes']}}</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{$data['freebies']}}</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{{$data['p1']}}</p>
                            <p class="fs-5 mb-4">{{$data['p2']}}</p>
                            <p class="fs-5 mb-4">{{$data['p3']}}</p>
                            <h2 class="fw-bolder mb-4 mt-5">{{$data['p4']}}</h2>
                            <p class="fs-5 mb-4">{{$data['p5']}}</p>
                            <p class="fs-5 mb-4">{{$data['p6']}}</p>
                        </section>
                    </article>
                    <!-- Comments section-->
                    <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->
                                <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>
                                <!-- Comment with nested comments-->
                                <div class="d-flex mb-4">
                                    <!-- Parent comment-->
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">{{$data['commentername']}}</div>
                                       {{$data['cc1']}}
                                        <!-- Child comment 1-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">{{$data['commentername']}}</div>
                                                {{$data['cc2']}}
                                            </div>
                                        </div>
                                        <!-- Child comment 2-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">{{$data['commentername']}}</div>
                                               {{$data['cc3']}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single comment-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">{{$data['commentername']}}</div>
                                        {{$data['cc4']}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">{{$data['search']}}</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">{{$data['go']}}</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">{{$data['category']}}</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">{{$data['webdesign']}}</a></li>
                                        <li><a href="#!">{{$data['html']}}</a></li>
                                        <li><a href="#!">{{$data['freebies']}}</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!"></a>{{$data['javascr']}}</li>
                                        <li><a href="#!">{{$data['csss']}}</a></li>
                                        <li><a href="#!">{{$data['tutorials']}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">{{$data['wiiidget']}}</div>
                        <div class="card-body">{{$data['cardbody']}}</div>
                    </div>
                </div>
            </div>
        </div>
     @endsection
