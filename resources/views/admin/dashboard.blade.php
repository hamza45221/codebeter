@extends('layout.mainadmin')

@section('content')

    <!-- Table to Display Rank Modules -->
    <div class="row">
        <div class="card ">

            <div class="row g-6 py-5 ">
                <!-- Card Border Shadow -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-border-shadow-warning h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-warning"
                          >
                              <i class="ti ti-user ti-md text-danger ti-28px "></i>
                              </span>
                                </div>
                                <h4 class="mb-0"></h4>
                            </div>
                            <h5 class="mb-1">Total Users</h5>
                            {{--                            <p class="mb-0">--}}
                            {{--                                <span class="text-heading fw-medium me-2">-8.7%</span>--}}
                            {{--                                <small class="text-muted">than last week</small>--}}
                            {{--                            </p>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-border-shadow-primary h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-primary"
                          ><i class="ti ti-truck ti-28px"></i
                              ></span>
                                </div>
                                <h4 class="mb-0"></h4>
                            </div>
                            <h5 class="mb-1">Applicants mails</h5>
                            {{--                            <p class="mb-0">--}}
                            {{--                                <span class="text-heading fw-medium me-2">+18.2%</span>--}}
                            {{--                                <small class="text-muted">than last week</small>--}}
                            {{--                            </p>--}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card card-border-shadow-danger h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-danger"
                          ><i class="ti ti-git-fork ti-28px"></i
                              ></span>
                                </div>
                                <h4 class="mb-0"></h4>
                            </div>
                            <h5 class="mb-1">Projects mails</h5>
                            {{--                            <p class="mb-0">--}}
                            {{--                                <span class="text-heading fw-medium me-2">+4.3%</span>--}}
                            {{--                                <small class="text-muted">than last week</small>--}}
                            {{--                            </p>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-border-shadow-info h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                    <span class="avatar-initial rounded bg-label-info">
                                         <i class="menu-icon ti ti-location ti-28px"></i>
                                    </span>
                                </div>
                                <h4 class="mb-0"></h4>
                            </div>
                            <h5 class="mb-1">Employee</h5>
                            {{--                            <p class="mb-0">--}}
                            {{--                                <span class="text-heading fw-medium me-2">-2.5%</span>--}}
                            {{--                                <small class="text-muted">than last week</small>--}}
                            {{--                            </p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
