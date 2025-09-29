@extends('layout.mainadmin')

@section('content')
    <!-- Modal for Adding User -->
    <div class="modal fade" id="usercreate" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Add Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('portfolio.store') }}" method="post" enctype="multipart/form-data">
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

                            <!-- Size -->
                            <div class="col-md-6 mb-3">
                                <label for="size" class="form-label">Size</label>
                                <select class="form-control" id="size" name="size"  >
                                    <option value=""> === Select Size ===</option>
                                    <option value="Small">Small</option>
                                    <option value="Large">Large</option>
                                </select>

                            </div>

                            <!-- Year -->
                            <div class="col-md-6 mb-3">
                                <label for="year" class="form-label">Year</label>
                                <input type="text" name="year" id="year" class="form-control"
                                       placeholder="Enter Year">
                            </div>

                            <!-- Image -->
                            <div class="col-md-6 mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                            <!-- Link -->
                            <div class="col-md-6 mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input type="url" name="link" id="link" class="form-control"
                                        placeholder="Enter Link">
                            </div>

                        </div>




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Review</button>
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
                        <th>Name</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Year</th>
                        <th>Date</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($portfolio as $index => $port)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td><i class="ti ti-user ti-md text-danger me-4"></i><span class="fw-medium">{{ $port->name }}</span></td>
                            <td>{{ $port->name }}</td>
                            <td>{{ $port->title }}</td>
                            <!-- Image Column -->
                            <td>
                                @if(!empty($port->image))
                                    <img src="{{ asset($port->image) }}"
                                         alt="Review Image"
                                         style="max-width: 100px; height: auto; border-radius: 6px;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>


                            <td>{{ $port->year }}</td>
                            <td>{{ $port->link }}</td>
                            <td>{{ $port->size }}</td>


                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item waves-effect" data-bs-toggle="modal" data-bs-target="#useredit{{ $port->id }}"><i class="ti ti-pencil me-1"></i> Edit</a>
                                        <a class="dropdown-item waves-effect" href="{{ route('portfolio.delete', ['id' => $port->id]) }}"><i class="ti ti-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <!-- Update Modal -->
                        <div class="modal fade" id="useredit{{ $port->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Edit Portfolio</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('portfolio.update', ['id' => $port->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row mb-4">

                                                <!-- Name -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" name="name" id="name" class="form-control"
                                                           value="{{ old('name', $port->name ?? '') }}" placeholder="Enter Name">
                                                </div>

                                                <!-- Title -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input type="text" name="title" id="title" class="form-control"
                                                           value="{{ old('title', $port->title ?? '') }}" placeholder="Enter Title">
                                                </div>

                                                <!-- Size -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="size" class="form-label">Size</label>
                                                    <select class="form-select" id="size" name="size">
                                                        <option value="">=== Select Size ===</option>
                                                        <option value="Small" {{ old('size', $port->size ?? '') == 'Small' ? 'selected' : '' }}>Small</option>
                                                        <option value="Large" {{ old('size', $port->size ?? '') == 'Large' ? 'selected' : '' }}>Large</option>
                                                    </select>
                                                </div>

                                                <!-- Year -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="year" class="form-label">Year</label>
                                                    <input type="text" name="year" id="year" class="form-control"
                                                           value="{{ old('year', $port->year ?? '') }}" placeholder="Enter Year">
                                                </div>

                                                <!-- Image -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="image" class="form-label">Image</label>
                                                    <input type="file" name="image" id="image" class="form-control">
                                                    @if(!empty($port->image))
                                                        <div class="mt-2">
                                                            <img src="{{ asset($port->image) }}" alt="Image" width="100">
                                                        </div>
                                                    @endif
                                                </div>

                                                <!-- Link -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="link" class="form-label">Link</label>
                                                    <input type="url" name="link" id="link" class="form-control"
                                                           value="{{ old('link', $port->link ?? '') }}" placeholder="Enter Link">
                                                </div>

                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update Portfolio</button>
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
