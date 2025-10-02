@extends('layout.mainadmin')

@section('content')
    <!-- Modal for Adding User -->
    <div class="modal fade" id="usercreate" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Add Job Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('job.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Type</label>

                                <select name="type" class="form-control form-select" >
                                    <option value="">== Select Type ==</option>
                                    <option value="Full time">Full time</option>
                                    <option value="Part time">Part time</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control form-select" >
                                    <option value="">== Select Status ==</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="desc" class="form-control" rows="3" placeholder="Enter description"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">End Date</label>
                                <input type="date" name="end_date" class="form-control">
                            </div>
                        </div>




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Job</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Table to Display User Data -->
    <div class="row px-3">
        <div class="card">
            <div class="card-header flex-column flex-md-row">
                <div class="dt-action-buttons text-end pt-6 pt-md-0">
                    <div class="dt-buttons btn-group">
                        <button class="btn btn-secondary create-new btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#usercreate" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                            <span>
                                <i class="ti ti-plus me-sm-1"></i>
                                <span class="d-none d-sm-inline-block">Add New Record</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>type</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>End Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($job as $index => $j)
                        <tr>
                            <td>{{ $index + 1 }}</td>

                            <td>
                                <span class="fw-medium">{{ $j->title }}</span></td>
                            <td>{{ $j->type }}</td>
                            <td>{{ $j->desc }}</td>
                            <td>{{ $j->status }}</td>
                            <td>{{ $j->end_date }}</td>
                            {{--                            <td>{{ $j->facebook_link }}</td>--}}
                            {{--                            <td>{{ $j->linkedIn_link }}</td>--}}


                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item waves-effect" data-bs-toggle="modal" data-bs-target="#useredit{{ $j->id }}"><i class="ti ti-pencil me-1"></i> Edit</a>
                                        <a class="dropdown-item waves-effect" href="{{ route('job.delete', ['id' => $j->id]) }}"><i class="ti ti-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <!-- Update Modal -->
                        <div class="modal fade" id="useredit{{ $j->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Edit Job</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('job.update', ['id' => $j->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Title</label>
                                                    <input type="text" name="title" class="form-control"
                                                           value="{{ old('title', $j->title ?? '') }}"
                                                           placeholder="Enter title">
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Type</label>
                                                    <select name="type" class="form-control form-select">
                                                        <option value="">== Select Type ==</option>
                                                        <option value="Full time" {{ old('type', $j->type ?? '') == 'Full time' ? 'selected' : '' }}>Full time</option>
                                                        <option value="Part time" {{ old('type', $j->type ?? '') == 'Part time' ? 'selected' : '' }}>Part time</option>
                                                    </select>

                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Status</label>
                                                    <select name="status" class="form-control form-select">
                                                        <option value="">== Select Status ==</option>
                                                        <option value="Available" {{ old('status', $j->status ?? '') == 'Available' ? 'selected' : '' }}>Available</option>
                                                        <option value="Not Available" {{ old('status', $j->status ?? '') == 'Not Available' ? 'selected' : '' }}>Not Available</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label class="form-label">Description</label>
                                                    <textarea name="desc" class="form-control" rows="3" placeholder="Enter description">{{ old('desc', $j->desc ?? '') }}</textarea>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">End Date</label>
                                                    <input type="date" name="end_date" class="form-control"
                                                           value="{{ old('end_date', $j->end_date ?? '') }}">
                                                </div>
                                            </div>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update Job</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="public/assets/js/tables-datatables-advanced.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const roleSelect = document.getElementById('role');
            const checkboxes = document.querySelectorAll('.permission-checkbox');

            function togglePermissions() {
                if (roleSelect.value === 'super_admin') {
                    checkboxes.forEach(checkbox => {
                        checkbox.checked = true;
                        checkbox.parentElement.parentElement.style.display = 'none';
                    });
                } else {
                    checkboxes.forEach(checkbox => {
                        checkbox.checked = false;
                        checkbox.parentElement.parentElement.style.display = 'block';
                    });
                }
            }

            roleSelect.addEventListener('change', togglePermissions);
            togglePermissions();
        });
    </script>
@endsection
