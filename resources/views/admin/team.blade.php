@extends('layout.mainadmin')

@section('content')
    <!-- Modal for Adding User -->
    <div class="modal fade" id="usercreate" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Add Team Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-4">

                            <!-- Name -->
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                       placeholder="Enter Name">
                            </div>

                            <!-- Title -->
                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control"
                                       placeholder="Enter Title">
                            </div>



                            <!-- Year -->
                            <div class="col-md-6 mb-3">
                                <label for="desc" class="form-label">Description</label>
                                <input type="text" name="desc" id="desc" class="form-control"
                                       placeholder="Enter Description ...">
                            </div>

                            <!-- Image -->
                            <div class="col-md-6 mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                            <!-- Link -->
                            <div class="col-md-6 mb-3">
                                <label for="facebook_link" class="form-label">Facebook Link</label>
                                <input type="url" name="facebook_link" id="facebook_link" class="form-control"
                                       placeholder="Enter FaceBook Link">
                            </div>

                            <!-- Link -->
                            <div class="col-md-6 mb-3">
                                <label for="linkedIn_link" class="form-label">LinkedIn Link</label>
                                <input type="url" name="linkedIn_link" id="linkedIn_link" class="form-control"
                                       placeholder="Enter LinkedIn Link">
                            </div>

                        </div>




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Team</button>
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
                        <th>Image</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>desc</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($team as $index => $t)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                @if(!empty($t->image))
                                    <img src="{{ asset($t->image) }}"
                                         alt="Team Image"
                                         style="max-width: 100px; height: auto; border-radius: 6px;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td><span class="fw-medium">{{ $t->name }}</span></td>
                            <td>{{ $t->title }}</td>
                            <!-- Image Column -->



                            <td>{{ $t->desc }}</td>
{{--                            <td>{{ $t->facebook_link }}</td>--}}
{{--                            <td>{{ $t->linkedIn_link }}</td>--}}


                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item waves-effect" data-bs-toggle="modal" data-bs-target="#useredit{{ $t->id }}"><i class="ti ti-pencil me-1"></i> Edit</a>
                                        <a class="dropdown-item waves-effect" href="{{ route('team.delete', ['id' => $t->id]) }}"><i class="ti ti-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <!-- Update Modal -->
                        <div class="modal fade" id="useredit{{ $t->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Edit Team</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('team.update', ['id' => $t->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row mb-4">

                                                <!-- Name -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" name="name" id="name" class="form-control"
                                                           placeholder="Enter Name" value="{{ old('name', $t->name) }}">
                                                </div>

                                                <!-- Title -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input type="text" name="title" id="title" class="form-control"
                                                           placeholder="Enter Title" value="{{ old('title', $t->title) }}">
                                                </div>

                                                <!-- Description -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="desc" class="form-label">Description</label>
                                                    <input type="text" name="desc" id="desc" class="form-control"
                                                           placeholder="Enter Description ..." value="{{ old('desc', $t->desc) }}">
                                                </div>

                                                <!-- Image -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="image" class="form-label">Image</label>
                                                    <input type="file" name="image" id="image" class="form-control">
                                                    @if($t->image)
                                                        <img src="{{ asset($t->image) }}" alt="Image" class="mt-2" width="120">
                                                    @endif
                                                </div>

                                                <!-- Facebook Link -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="facebook_link" class="form-label">Facebook Link</label>
                                                    <input type="url" name="facebook_link" id="facebook_link" class="form-control"
                                                           placeholder="Enter FaceBook Link" value="{{ old('facebook_link', $t->facebook_link) }}">
                                                </div>

                                                <!-- LinkedIn Link -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="linkedIn_link" class="form-label">LinkedIn Link</label>
                                                    <input type="url" name="linkedIn_link" id="linkedIn_link" class="form-control"
                                                           placeholder="Enter LinkedIn Link" value="{{ old('linkedIn_link', $t->linkedIn_link) }}">
                                                </div>

                                            </div>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update Team</button>
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
