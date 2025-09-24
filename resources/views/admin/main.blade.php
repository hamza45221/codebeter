@extends('layout.mainadmin')

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="usercreate" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Add Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post" class="p-4 " style=" margin: 10px;">
                    @csrf
                    <div class="">
                        <!-- Personal Details -->
                        <div class="row g-4 mb-3">
                            <div class="col-md-12 mb-0">
                                <label for="tag_line" class="form-label">Tag Line</label>
                                <input type="text" name="tag_line" id="tag_line" class="form-control" placeholder=""  />
                            </div>
                            <div class="col-md-12 mb-0">
                                <label for="hero_heading" class="form-label">Hero Heading</label>
                                <input type="text" name="hero_heading" id="hero_heading" class="form-control" placeholder="" />
                            </div>

                            <div class="col-md-12 mb-0">
                                <label for="happy_clients" class="form-label">Happy Clients</label>
                                <input type="text" name="happy_clients" id="happy_clients" class="form-control" placeholder="" />
                            </div>

                            <div class="col-md-12 mb-0">
                                <label for="whatsapp_num" class="form-label">Whats App Number</label>
                                <input type="text" name="whatsapp_num" id="whatsapp_num" class="form-control" placeholder="" />
                            </div>

                            <div class="col-md-12 mb-0">
                                <label for="middle_name" class="form-label">Happy clients iages</label>
                                <input type="text" name="happy_clients_img" id="middle_name" class="form-control" placeholder="" />
                            </div>
                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer mt-4"> <!-- Added mt-4 for top margin -->
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create User</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-header flex-column flex-md-row">
                <div class="dt-action-buttons text-end pt-6 pt-md-0">
                    <div class="dt-buttons btn-group">
                        <button class="btn btn-secondary create-new btn-primary waves-effect waves-light" data-bs-toggle="modal"
                                data-bs-target="#usercreate" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Add New Record</span></span></button>
                    </div>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
{{--                    @foreach($employeeData as  $employee)--}}
{{--                        <tr>--}}
{{--                            <td>{{$employee->id}}</td>--}}
{{--                            <td>--}}
{{--                                <i class="ti ti-user ti-md text-danger me-4"></i>--}}
{{--                                <span class="fw-medium">{{$employee->first_name}}</span>--}}
{{--                            </td>--}}
{{--                            <td>{{$employee->email}}</td>--}}
{{--                            <td>{{ $employee->created_at->format('M d, Y') }}</td>--}}
{{--                            <td><span class="badge bg-label-primary me-1">{{$employee->role}}</span></td>--}}
{{--                            <td>--}}
{{--                                <div class="dropdown">--}}
{{--                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">--}}
{{--                                        <i class="ti ti-dots-vertical"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu">--}}
{{--                                        <a class="dropdown-item waves-effect" data-bs-toggle="modal"--}}
{{--                                           data-bs-target="#useredit{{$employee->id}}"><i class="ti ti-pencil me-1"></i> Edit</a>--}}
{{--                                        <a class="dropdown-item waves-effect" data-bs-toggle="modal"--}}
{{--                                           data-bs-target="#userview{{$employee->id}}"><i class="fa-regular fa-eye me-1"></i> View</a>--}}
{{--                                        <a class="dropdown-item waves-effect" href="{{ route('employee-delete', ['id' => $employee->id]) }}"><i class="ti ti-trash me-1"></i> Delete</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <!-- Update Modal -->--}}
{{--                        <div class="modal fade" id="useredit{{$employee->id}}" tabindex="-1" aria-hidden="true">--}}
{{--                            <div class="modal-dialog" role="document">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <h5 class="modal-title" id="exampleModalLabel1">Update Employee</h5>--}}
{{--                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                    </div>--}}
{{--                                    <form action="{{ route('employee-update', ['id' => $employee->id])}}" method="post" class="p-4 border rounded shadow" style="max-width: 900px; margin: auto;">--}}
{{--                                        @csrf--}}
{{--                                        <div class="modal-body">--}}
{{--                                            <!-- Personal Details -->--}}
{{--                                            <div class="row g-4 mb-3">--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="nameBasic" class="form-label">First Name</label>--}}
{{--                                                    <input type="text" name="first_name" value="{{$employee->first_name}}" id="nameBasic" class="form-control" placeholder="Enter First Name" />--}}
{{--                                                </div>--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="middle_name" class="form-label">Middle Name</label>--}}
{{--                                                    <input type="text" name="middle_name" value="{{ $employee->middle_name }}" id="middle_name" class="form-control" placeholder="Enter Middle Name" />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row g-4 mb-3">--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="last_name" class="form-label">Last Name</label>--}}
{{--                                                    <input type="text" name="last_name" value="{{ $employee->last_name }}" id="last_name" class="form-control" placeholder="Enter Last Name" />--}}
{{--                                                </div>--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="known_as" class="form-label">Known as</label>--}}
{{--                                                    <input type="text" name="known_as" value="{{ $employee->known_as }}" id="known_as" class="form-control" placeholder="Enter Known as" />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row g-4 mb-3">--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="id_number" class="form-label">ID Number</label>--}}
{{--                                                    <input type="text" name="id_number" value="{{ $employee->id_number }}" id="id_number" class="form-control" placeholder="Enter ID Number" required minlength="13" maxlength="13" pattern="\d{13}" />--}}
{{--                                                    <small class="form-text text-muted">Must be exactly 13 digits.</small>--}}
{{--                                                </div>--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="primary_phone" class="form-label">Primary Phone</label>--}}
{{--                                                    <input type="text" name="primary_phone" value="{{ $employee->primary_phone }}" id="primary_phone" class="form-control" placeholder="Enter Primary Phone" required pattern="(\+27\d{9}|0\d{9})" maxlength="12" />--}}
{{--                                                    <small class="form-text text-muted">Format: +27XXXXXXXXX (9 digits) or 0XXXXXXXXX (10 digits)</small>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row g-4 mb-3">--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="secondary_phone" class="form-label">Secondary Phone</label>--}}
{{--                                                    <input type="text" name="secondary_phone" value="{{ $employee->secondary_phone }}" id="secondary_phone" class="form-control" placeholder="Enter Secondary Phone" required pattern="(\+27\d{9}|0\d{9})" maxlength="12" />--}}
{{--                                                    <small class="form-text text-muted">Format: +27XXXXXXXXX (9 digits) or 0XXXXXXXXX (10 digits)</small>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row mb-3">--}}
{{--                                                <div class="col">--}}
{{--                                                    <label for="address" class="form-label">Address</label>--}}
{{--                                                    <textarea id="address" name="address" class="form-control" placeholder="Enter Your Address">{{ $employee->address }}</textarea>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row g-4 mb-3">--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="next_of_kin" class="form-label">Next Of Kin</label>--}}
{{--                                                    <input type="text" name="next_of_kin" value="{{ $employee->next_of_kin }}" id="next_of_kin" class="form-control" placeholder="Enter Next Of Kin" />--}}
{{--                                                </div>--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="next_of_kin_phone" class="form-label">Next Of Kin Phone</label>--}}
{{--                                                    <input type="text" name="next_of_kin_phone" value="{{ $employee->next_of_kin_phone }}" id="next_of_kin_phone" class="form-control" placeholder="Enter Next Of Kin Phone" required pattern="(\+27\d{9}|0\d{9})" maxlength="12" />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Email -->--}}
{{--                                            <div class="row g-4 mb-3">--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="emailBasic" class="form-label">Email</label>--}}
{{--                                                    <input type="email" name="email" value="{{ $employee->email }}" id="emailBasic" class="form-control" placeholder="xxxx@xxx.xx" />--}}
{{--                                                </div>--}}

{{--                                                <!-- Role Selection -->--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="role" class="form-label">Role</label>--}}
{{--                                                    <select class="form-control" name="role" id="role" required>--}}
{{--                                                        <option value="">Select Role</option>--}}
{{--                                                        <option value="driver" {{ $employee->role == 'driver' ? 'selected' : '' }}>Driver</option>--}}
{{--                                                        <option value="driver_assistant" {{ $employee->role == 'driver_assistant' ? 'selected' : '' }}>Driver Assistant</option>--}}
{{--                                                        <option value="rank_marshal" {{ $employee->role == 'rank_marshal' ? 'selected' : '' }}>Rank Marshal</option>--}}
{{--                                                        <option value="route_patrol" {{ $employee->role == 'route_patrol' ? 'selected' : '' }}>Route Patrol</option>--}}
{{--                                                        <option value="hlokomela" {{ $employee->role == 'hlokomela' ? 'selected' : '' }}>Law Enforcement (Hlokomela)</option>--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- License-related fields (Hidden initially, only shown for drivers) -->--}}
{{--                                            <div id="driver-fields" style="display:none;">--}}
{{--                                                <div class="row g-4 mb-3">--}}
{{--                                                    <div class="col mb-0">--}}
{{--                                                        <label for="license_number" class="form-label">License Number</label>--}}
{{--                                                        <input type="text" name="license_number" value="{{ $employee->license_number }}" id="license_number" class="form-control" placeholder="Enter License Number" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col mb-0">--}}
{{--                                                        <label for="license_first_issue" class="form-label">License First Issue</label>--}}
{{--                                                        <input type="date" name="license_first_issue" value="{{ $employee->license_first_issue }}" id="license_first_issue" class="form-control" />--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row g-4 mb-3">--}}
{{--                                                    <div class="col mb-0">--}}
{{--                                                        <label for="license_code" class="form-label">License Code</label>--}}
{{--                                                        <input type="text" name="license_code" value="{{ $employee->license_code }}" id="license_code" class="form-control" placeholder="Enter License Code" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col mb-0">--}}
{{--                                                        <label for="license_expiry" class="form-label">License Expiry</label>--}}
{{--                                                        <input type="date" name="license_expiry" value="{{ $employee->license_expiry }}" id="license_expiry" class="form-control" />--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row g-4 mb-3">--}}
{{--                                                    <div class="col mb-0">--}}
{{--                                                        <label for="pdpr_first_issue" class="form-label">PDPR First Issue</label>--}}
{{--                                                        <input type="date" name="pdpr_first_issue" value="{{ $employee->pdpr_first_issue }}" id="pdpr_first_issue" class="form-control" />--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col mb-0">--}}
{{--                                                        <label for="pdpr_expiry" class="form-label">PDPR Expiry</label>--}}
{{--                                                        <input type="date" name="pdpr_expiry" value="{{ $employee->pdpr_expiry }}" id="pdpr_expiry" class="form-control" />--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Modal Footer -->--}}
{{--                                            <div class="modal-footer mt-4"> <!-- Added mt-4 for top margin -->--}}
{{--                                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                                                <button type="submit" class="btn btn-primary">Update User</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        --}}{{--  View Model  --}}
{{--                        <div class="modal fade" id="userview{{$employee->id}}" tabindex="-1" aria-hidden="true">--}}
{{--                            <div class="modal-dialog" role="document">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <h5 class="modal-title" id="exampleModalLabel1">View Employee</h5>--}}
{{--                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                    </div>--}}
{{--                                    <form action="{{ route('employee-update', ['id' => $employee->id]) }}" method="post" class="p-4 border rounded shadow" style="max-width: 900px; margin: auto;">--}}
{{--                                        @csrf--}}
{{--                                        <div class="modal-body">--}}
{{--                                            <!-- Display the last 3 digits of the last name and 5 random numbers in the center -->--}}
{{--                                            <div class="text-center mb-3">--}}
{{--                                                <strong>User Info:</strong>--}}
{{--                                                <span>{{ substr($employee->last_name, -3) . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT) }}</span>--}}
{{--                                            </div>--}}

{{--                                            <!-- Personal Details -->--}}
{{--                                            <div class="row g-4 mb-3">--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="nameBasic" class="form-label">First Name</label>--}}
{{--                                                    <input type="text" name="first_name" value="{{ $employee->first_name }}" id="nameBasic" class="form-control" placeholder="Enter First Name" readonly />--}}
{{--                                                </div>--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="middle_name" class="form-label">Middle Name</label>--}}
{{--                                                    <input type="text" name="middle_name" value="{{ $employee->middle_name }}" id="middle_name" class="form-control" placeholder="Enter Middle Name" readonly />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row g-4 mb-3">--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="last_name" class="form-label">Last Name</label>--}}
{{--                                                    <input type="text" name="last_name" value="{{ $employee->last_name }}" id="last_name" class="form-control" placeholder="Enter Last Name" readonly />--}}
{{--                                                </div>--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="known_as" class="form-label">Known as</label>--}}
{{--                                                    <input type="text" name="known_as" value="{{ $employee->known_as }}" id="known_as" class="form-control" placeholder="Enter Known as" readonly />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row g-4 mb-3">--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="id_number" class="form-label">ID Number</label>--}}
{{--                                                    <input type="text" name="id_number" value="{{ $employee->id_number }}" id="id_number" class="form-control" placeholder="Enter ID Number" readonly />--}}
{{--                                                </div>--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="primary_phone" class="form-label">Primary Phone</label>--}}
{{--                                                    <input type="text" name="primary_phone" value="{{ $employee->primary_phone }}" id="primary_phone" class="form-control" placeholder="Enter Primary Phone" readonly />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row g-4 mb-3">--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="secondary_phone" class="form-label">Secondary Phone</label>--}}
{{--                                                    <input type="text" name="secondary_phone" value="{{ $employee->secondary_phone }}" id="secondary_phone" class="form-control" placeholder="Enter Secondary Phone" readonly />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row mb-3">--}}
{{--                                                <div class="col">--}}
{{--                                                    <label for="address" class="form-label">Address</label>--}}
{{--                                                    <textarea id="address" name="address" class="form-control" placeholder="Enter Your Address" readonly>{{ $employee->address }}</textarea>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row g-4 mb-3">--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="next_of_kin" class="form-label">Next Of Kin</label>--}}
{{--                                                    <input type="text" name="next_of_kin" value="{{ $employee->next_of_kin }}" id="next_of_kin" class="form-control" placeholder="Enter Next Of Kin" readonly />--}}
{{--                                                </div>--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="next_of_kin_phone" class="form-label">Next Of Kin Phone</label>--}}
{{--                                                    <input type="text" name="next_of_kin_phone" value="{{ $employee->next_of_kin_phone }}" id="next_of_kin_phone" class="form-control" placeholder="Enter Next Of Kin Phone" readonly />--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- Email -->--}}
{{--                                            <div class="row g-4 mb-3">--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="emailBasic" class="form-label">Email</label>--}}
{{--                                                    <input type="email" name="email" value="{{ $employee->email }}" id="emailBasic" class="form-control" placeholder="xxxx@xxx.xx" readonly />--}}
{{--                                                </div>--}}

{{--                                                <!-- Role Selection -->--}}
{{--                                                <div class="col mb-0">--}}
{{--                                                    <label for="role" class="form-label">Role</label>--}}
{{--                                                    <select class="form-control" name="role" id="role" required disabled>--}}
{{--                                                        <option value="">Select Role</option>--}}
{{--                                                        <option value="driver" {{ $employee->role == 'driver' ? 'selected' : '' }}>Driver</option>--}}
{{--                                                        <option value="driver_assistant" {{ $employee->role == 'driver_assistant' ? 'selected' : '' }}>Driver Assistant</option>--}}
{{--                                                        <option value="rank_marshal" {{ $employee->role == 'rank_marshal' ? 'selected' : '' }}>Rank Marshal</option>--}}
{{--                                                        <option value="route_patrol" {{ $employee->role == 'route_patrol' ? 'selected' : '' }}>Route Patrol</option>--}}
{{--                                                        <option value="hlokomela" {{ $employee->role == 'hlokomela' ? 'selected' : '' }}>Law Enforcement (Hlokomela)</option>--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- License-related fields -->--}}
{{--                                            @if($employee->role == 'driver')--}}
{{--                                                <div id="driver-fields">--}}
{{--                                                    <div class="row g-4 mb-3">--}}
{{--                                                        <div class="col mb-0">--}}
{{--                                                            <label for="license_number" class="form-label">License Number</label>--}}
{{--                                                            <input type="text" name="license_number" value="{{ $employee->license_number }}" id="license_number" class="form-control" placeholder="Enter License Number" readonly />--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col mb-0">--}}
{{--                                                            <label for="license_first_issue" class="form-label">License First Issue</label>--}}
{{--                                                            <input type="date" name="license_first_issue" value="{{ $employee->license_first_issue }}" id="license_first_issue" class="form-control" readonly />--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="row g-4 mb-3">--}}
{{--                                                        <div class="col mb-0">--}}
{{--                                                            <label for="license_code" class="form-label">License Code</label>--}}
{{--                                                            <input type="text" name="license_code" value="{{ $employee->license_code }}" id="license_code" class="form-control" placeholder="Enter License Code" readonly />--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col mb-0">--}}
{{--                                                            <label for="license_expiry" class="form-label">License Expiry</label>--}}
{{--                                                            <input type="date" name="license_expiry" value="{{ $employee->license_expiry }}" id="license_expiry" class="form-control" readonly />--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="row g-4 mb-3">--}}
{{--                                                        <div class="col mb-0">--}}
{{--                                                            <label for="pdpr_first_issue" class="form-label">PDPR First Issue</label>--}}
{{--                                                            <input type="date" name="pdpr_first_issue" value="{{ $employee->pdpr_first_issue }}" id="pdpr_first_issue" class="form-control" readonly />--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col mb-0">--}}
{{--                                                            <label for="pdpr_expiry" class="form-label">PDPR Expiry</label>--}}
{{--                                                            <input type="date" name="pdpr_expiry" value="{{ $employee->pdpr_expiry }}" id="pdpr_expiry" class="form-control" readonly />--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}

{{--                                            <!-- Modal Footer -->--}}
{{--                                            <div class="modal-footer mt-4"> <!-- Added mt-4 for top margin -->--}}
{{--                                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src={{ asset('admin/assets/js/tables-datatables-advanced.js') }}"></script>
@endsection
