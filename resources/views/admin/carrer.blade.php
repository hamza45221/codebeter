@extends('layout.mainadmin')




@section('content')

    <div class="row px-3">
        <div class="card">

            <div class="card-body">

                <h4>Carrer</h4>

                <form action="{{ route('carrer.store') }}" method="post" enctype="multipart/form-data" style="">
                    @csrf
                    <div class="row">
                        {{-- Titles Section --}}
                        <div class="col-md-6 mb-3">
                            <label for="title1" class="form-label">Title 1</label>
                            <input type="text" class="form-control" id="title1" name="title1" value="{{ old('title1', $carr->title1 ?? '') }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="title2" class="form-label">Title 2</label>
                            <input type="text" class="form-control" id="title2" name="title2" value="{{ old('title2', $carr->title2 ?? '') }}">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="desc" class="form-label">Description</label>
                            <textarea class="form-control" id="desc" name="desc" rows="3">{!! old('desc', $carr->desc ?? '')  !!}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="promote_title" class="form-label">Promote Title</label>
                            <input type="text" class="form-control" id="promote_title" name="promote_title" value="{{ old('promote_title', $carr->promote_title ?? '') }}">
                        </div>

                        {{-- Improving Section --}}
                        <div class="col-md-6 mb-3">
                            <label for="improving_title" class="form-label">Improving Title</label>
                            <input type="text" class="form-control" id="improving_title" name="improving_title" value="{{ old('improving_title', $carr->improving_title ?? '') }}">
                        </div>

{{--                        <div class="col-md-6 mb-3">--}}
{{--                            <label for="improving_icon" class="form-label">Improving Icon</label>--}}
{{--                            <input type="text" class="form-control" id="improving_icon" name="improving_icon" value="{{ old('improving_icon', $carr->improving_icon ?? '') }}">--}}
{{--                        </div>--}}

                        <div class="col-md-12 mb-3">
                            <label for="improving_desc" class="form-label">Improving Description</label>
                            <textarea class="form-control" id="improving_desc" name="improving_desc" rows="3">{{ old('improving_desc', $carr->improving_desc ?? '') }}</textarea>
                        </div>

                        {{-- Working Section --}}
                        <div class="col-md-6 mb-3">
                            <label for="working_title" class="form-label">Working Title</label>
                            <input type="text" class="form-control" id="working_title" name="working_title" value="{{ old('working_title', $carr->working_title ?? '') }}">
                        </div>

{{--                        <div class="col-md-6 mb-3">--}}
{{--                            <label for="working_icon" class="form-label">Working Icon</label>--}}
{{--                            <input type="text" class="form-control" id="working_icon" name="working_icon" value="{{ old('working_icon', $carr->working_icon ?? '') }}">--}}
{{--                        </div>--}}

                        <div class="col-md-12 mb-3">
                            <label for="working_desc" class="form-label">Working Description</label>
                            <textarea class="form-control" id="working_desc" name="working_desc" rows="3">{{ old('working_desc', $carr->working_desc ?? '') }}</textarea>
                        </div>

                        {{-- Developing Section --}}
                        <div class="col-md-6 mb-3">
                            <label for="developing_title" class="form-label">Developing Title</label>
                            <input type="text" class="form-control" id="developing_title" name="developing_title" value="{{ old('developing_title', $carr->developing_title ?? '') }}">
                        </div>

{{--                        <div class="col-md-6 mb-3">--}}
{{--                            <label for="developing_icon" class="form-label">Developing Icon</label>--}}
{{--                            <input type="text" class="form-control" id="developing_icon" name="developing_icon" value="{{ old('developing_icon', $carr->developing_icon ?? '') }}">--}}
{{--                        </div>--}}

                        <div class="col-md-12 mb-3">
                            <label for="developing_desc" class="form-label">Developing Description</label>
                            <textarea class="form-control" id="developing_desc" name="developing_desc" rows="3">{{ old('developing_desc', $carr->developing_desc ?? '') }}</textarea>
                        </div>

                        {{-- Job Section --}}
                        <div class="col-md-6 mb-3">
                            <label for="job_title" class="form-label">Job Title</label>
                            <input type="text" class="form-control" id="job_title" name="job_title" value="{{ old('job_title', $carr->job_title ?? '') }}">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="job_desc" class="form-label">Job Description</label>
                            <textarea class="form-control" id="job_desc" name="job_desc" rows="3">{{ old('job_desc', $carr->job_desc ?? '') }}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="requirement_title" class="form-label">Requirement Title</label>
                            <input type="text" class="form-control" id="requirement_title" name="requirement_title" value="{{ old('requirement_title', $carr->requirement_title ?? '') }}">
                        </div>


                        <div id="requirement_repeater">
                            <div data-repeater-list="requirement_details">
                                @php
                                    $details = old('requirement_details', $carr->requirement_details ?? []);
                                @endphp

                                @foreach($details as $detail)
                                    <div data-repeater-item class="row mb-3 align-items-end">

                                        <div class="col-md-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" name="title" class="form-control"
                                                   value="{{ $detail['title'] ?? '' }}">
                                        </div>

                                        <div class="col-md-3">
                                            <label class="form-label">Heading</label>
                                            <input type="text" name="heading" class="form-control"
                                                   value="{{ $detail['heading'] ?? '' }}">
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label">Description</label>
                                            <textarea name="desc" class="form-control" rows="2">{{ $detail['desc'] ?? '' }}</textarea>
                                        </div>

                                        <div class="col-md-2">
                                            <label class="form-label">Image</label>
                                            <input type="file" name="image" class="form-control">
                                            @if(!empty($detail['image']))
                                                <img src="{{ asset($detail['image']) }}" class="mt-2" width="100">
                                                <input type="hidden" name="old_image" value="{{ $detail['image'] }}">
                                            @endif
                                        </div>

                                        <div class="col-md-12 mt-2">
                                            <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-danger">
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <a href="javascript:;" data-repeater-create class="btn btn-sm btn-primary mt-3">
                                Add Step
                            </a>
                        </div>



                    </div>


                    <div class="modal-footer mt-4">
                        <button type="submit" class="btn btn-primary">Update Carrer</button>
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

        <!-- jQuery (required) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery Repeater -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#requirement_repeater').repeater({
                initEmpty: false,

                show: function () {
                    $(this).slideDown();
                },

                hide: function (deleteElement) {
                    if(confirm('Are you sure you want to delete this step?')) {
                        $(this).slideUp(deleteElement);
                    }
                }
            });
        });
    </script>

@endsection
