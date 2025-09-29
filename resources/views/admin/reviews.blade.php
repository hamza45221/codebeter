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
                <form action="{{ route('reviews.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-4">
                            <div class="col-12">
                                <label for="nameBasic" class="form-label">Name</label>
                                <input type="text" name="name" id="nameBasic" class="form-control" placeholder="Enter Name" required />
                            </div>

                            <div class="col-12 mb-3">
                                <label for="emailBasic" class="form-label">Email</label>
                                <input type="email" id="emailBasic" class="form-control" name="email" placeholder="Enter E-mail"  />
                            </div>

                            <div class="col-12 mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" id="title" class="form-control" name="title" placeholder="Enter Title"  />
                            </div>

                            <div class="col-12 mb-3">
                                <label for="description"  class="form-label">Description</label>
                                <textarea type="text" id="description" rows ="5" class="form-control" name="description" placeholder="Write a  Description..." ></textarea>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" id="image" class="form-control" name="image" placeholder="Select Image"  />
                            </div>

                            <div class="col-12 mb-3">
                                <label for="video" class="form-label">Video</label>
                                <input type="file" id="video" class="form-control" name="video" placeholder="Select Video"  />
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
                        <th>Email</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Video</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reviews as $index => $review)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td><i class="ti ti-user ti-md text-danger me-4"></i><span class="fw-medium">{{ $review->name }}</span></td>
                            <td>{{ $review->email }}</td>
                            <td>{{ $review->description }}</td>
                            <!-- Image Column -->
                            <td>
                                @if(!empty($review->image))
                                    <img src="{{ asset($review->image) }}"
                                         alt="Review Image"
                                         style="max-width: 100px; height: auto; border-radius: 6px;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>

                            <!-- Video Column -->
                            <td>
                                @if(!empty($review->video))
                                    <video width="150" height="100" controls>
                                        <source src="{{ asset( $review->video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @else
                                    <span class="text-muted">No Video</span>
                                @endif
                            </td>

                            <td>{{ $review->created_at->format('M d, Y') }}</td>


                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item waves-effect" data-bs-toggle="modal" data-bs-target="#useredit{{ $review->id }}"><i class="ti ti-pencil me-1"></i> Edit</a>
                                        <a class="dropdown-item waves-effect" href="{{ route('reviews.delete', ['id' => $review->id]) }}"><i class="ti ti-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <!-- Update Modal -->
                        <div class="modal fade" id="useredit{{ $review->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Edit Reviews</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('reviews.update', ['id' => $review->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row mb-4">
                                                <!-- Name -->
                                                <div class="col-12 mb-3">
                                                    <label for="nameBasic" class="form-label">Name</label>
                                                    <input type="text"
                                                           name="name"
                                                           id="nameBasic"
                                                           class="form-control"
                                                           placeholder="Enter Name"
                                                           value="{{ old('name', $review->name ?? '') }}"
                                                           required />
                                                </div>

                                                <!-- Email -->
                                                <div class="col-12 mb-3">
                                                    <label for="emailBasic" class="form-label">Email</label>
                                                    <input type="email"
                                                           name="email"
                                                           id="emailBasic"
                                                           class="form-control"
                                                           placeholder="Enter E-mail"
                                                           value="{{ old('email', $review->email ?? '') }}" />
                                                </div>

                                                <!-- Title -->
                                                <div class="col-12 mb-3">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input type="text"
                                                           name="title"
                                                           id="title"
                                                           class="form-control"
                                                           placeholder="Enter Title"
                                                           value="{{ old('title', $review->title ?? '') }}" />
                                                </div>

                                                <!-- Description -->
                                                <div class="col-12 mb-3">
                                                    <label for="description" class="form-label">Description</label>
                                                    <textarea name="description"
                                                              id="description"
                                                              rows="5"
                                                              class="form-control"
                                                              placeholder="Write a Description...">{{ old('description', $review->description ?? '') }}</textarea>
                                                </div>

                                                <!-- Image -->
                                                <div class="col-12 mb-3">
                                                    <label for="image" class="form-label">Image</label>
                                                    <input type="file" name="image" id="image" class="form-control" />

                                                    @if(!empty($review->image))
                                                        <div class="mt-2">
                                                            <p class="text-muted mb-1">Current Image:</p>
                                                            <img src="{{ asset( $review->image) }}"
                                                                 alt="Current Image"
                                                                 class="img-fluid rounded"
                                                                 style="max-width: 200px; height: auto;">
                                                        </div>
                                                    @endif
                                                </div>

                                                <!-- Video -->
                                                <div class="col-12 mb-3">
                                                    <label for="video" class="form-label">Video</label>
                                                    <input type="file" name="video" id="video" class="form-control" />

                                                    @if(!empty($review->video))
                                                        <div class="mt-2">
                                                            <p class="text-muted mb-1">Current Video:</p>
                                                            <video width="320" height="240" controls>
                                                                <source src="{{ asset( $review->video) }}" type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        </div>
                                                    @endif
                                                </div>

                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update Review</button>
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
