@extends('layout.mainadmin')




@section('content')

    <div class="row px-3">
        <div class="card">

            <div class="card-body">

                <h4>About</h4>

                <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data" style="">
                    @csrf

                        <div class="row">
                            <!-- Titles -->
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Title 1</label>
                                <input type="text" name="title1" class="form-control" value="{{ old('title1', $about->title1) }}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Title 2</label>
                                <input type="text" name="title2" class="form-control" value="{{ old('title2', $about->title2) }}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Title 3</label>
                                <input type="text" name="title3" class="form-control" value="{{ old('title3', $about->title3) }}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Title 4</label>
                                <input type="text" name="title4" class="form-control" value="{{ old('title4', $about->title4) }}">
                            </div>

                            <!-- User -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">User Title</label>
                                <input type="text" name="user_title" class="form-control" value="{{ old('user_title', $about->user_title) }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">User Count</label>
                                <input type="number" name="user_count" class="form-control" value="{{ old('user_count', $about->user_count) }}">
                            </div>

                            <!-- Project -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Project Title</label>
                                <input type="text" name="project_title" class="form-control" value="{{ old('project_title', $about->project_title) }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Project Count</label>
                                <input type="number" name="project_count" class="form-control" value="{{ old('project_count', $about->project_count) }}">
                            </div>

                            <!-- Members -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Members Title</label>
                                <input type="text" name="members_title" class="form-control" value="{{ old('members_title', $about->members_title) }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Members Count</label>
                                <input type="number" name="members_count" class="form-control" value="{{ old('members_count', $about->members_count) }}">
                            </div>

                            <!-- Satisfaction -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Satisfaction Title</label>
                                <input type="text" name="satisfaction_title" class="form-control" value="{{ old('satisfaction_title', $about->satisfaction_title) }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Satisfaction Count</label>
                                <input type="number" name="satisfaction_count" class="form-control" value="{{ old('satisfaction_count', $about->satisfaction_count) }}">
                            </div>

                            <!-- About -->
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Heading</label>
                                <input type="text" name="heading" class="form-control" value="{{ old('heading', $about->heading) }}">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="3">{{ old('description', $about->description) }}</textarea>
                            </div>

                            <!-- Images -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">About Image 1</label>
                                <input type="file" name="about_image1" class="form-control">
                                @if($about->about_image1)
                                    <img src="{{ asset($about->about_image1) }}" alt="" class="mt-2" width="120">
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">About Image 2</label>
                                <input type="file" name="about_image2" class="form-control">
                                @if($about->about_image2)
                                    <img src="{{ asset($about->about_image2) }}" alt="" class="mt-2" width="120">
                                @endif
                            </div>

                            <!-- Adviser -->
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Adviser Heading</label>
                                <input type="text" name="adviser_heading" class="form-control" value="{{ old('adviser_heading', $about->adviser_heading) }}">
                            </div>

                            <!-- Mission -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Our Mission Title</label>
                                <input type="text" name="our_mission_title" class="form-control" value="{{ old('our_mission_title', $about->our_mission_title) }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Our Mission Description</label>
                                <textarea name="our_mission_description" class="form-control" rows="3">{{ old('our_mission_description', $about->our_mission_description) }}</textarea>
                            </div>

                            <!-- Vision -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Our Vision Title</label>
                                <input type="text" name="our_vision_title" class="form-control" value="{{ old('our_vision_title', $about->our_vision_title) }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Our Vision Description</label>
                                <textarea name="our_vision_description" class="form-control" rows="3">{{ old('our_vision_description', $about->our_vision_description) }}</textarea>
                            </div>

                            <!-- Professionals -->
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Professionals Heading</label>
                                <input type="text" name="our_professionals_heading" class="form-control" value="{{ old('our_professionals_heading', $about->our_professionals_heading) }}">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Professionals Description</label>
                                <textarea name="our_professionals_desc" class="form-control" rows="3">{{ old('our_professionals_desc', $about->our_professionals_desc) }}</textarea>
                            </div>
                        </div>

                    <div class="modal-footer mt-4">
                        <button type="submit" class="btn btn-primary">Update About</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>

    <script>


    </script>

@endsection
