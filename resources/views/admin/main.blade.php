@extends('layout.mainadmin')




@section('content')

    <div class="row px-3">
        <div class="card">

            <div class="card-body">

                <h4>Main</h4>

                                    <form action="{{ route('main.store') }}" method="post" enctype="multipart/form-data" style="">
                                        @csrf
                                            <!-- Personal Details -->
                                            <div class="row g-4 mb-3">
                                                <div class="col-md-6 mb-3">
                                                    <label for="tag_line" class="form-label">Tag Line</label>
                                                    <input type="text" name="tag_line" id="tag_line" class="form-control"
                                                           value="{{ old('tag_line', $main->tag_line ?? '') }}" placeholder="Enter tag line" />
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="hero_heading" class="form-label">Hero Heading</label>
                                                    <input type="text" name="hero_heading" id="hero_heading" class="form-control"
                                                           value="{{ old('hero_heading', $main->hero_heading ?? '') }}" placeholder="Enter hero heading" />
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="happy_clients" class="form-label">Happy Clients</label>
                                                    <input type="text" name="happy_clients" id="happy_clients" class="form-control"
                                                           value="{{ old('happy_clients', $main->happy_clients ?? '') }}" placeholder="Enter number of happy clients" />
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="whatsapp_num" class="form-label">WhatsApp Number</label>
                                                    <input type="text" name="whatsapp_num" id="whatsapp_num" class="form-control"
                                                           value="{{ old('whatsapp_num', $main->whatsapp_num ?? '') }}" placeholder="+92XXXXXXXXXX" />
                                                </div>


                                                {{-- HAPPY CLIENTS REPEATER --}}
                                                <div id="happy_clients_repeater" class="repeater">
                                                    <label class="form-label">Happy Clients Images</label>
                                                    <div data-repeater-list="happy_clients_img">
                                                        @if(!empty($main->happy_clients_img))
                                                            @foreach($main->happy_clients_img as $pair)
                                                                <div data-repeater-item class="row mb-3 align-items-center">
                                                                    <div class="col-md-6">
                                                                        <label>Upload Image</label>
                                                                        <input type="file" name="image" class="form-control" />
                                                                        <input type="hidden" name="old_image" value="{{ $pair['image'] ?? '' }}">
                                                                        @if(!empty($pair['image']))
                                                                            <img src="{{ asset($pair['image']) }}" class="img-thumbnail mt-2" width="100">
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <button type="button" data-repeater-delete class="btn btn-sm btn-danger mt-4">
                                                                            <i class="la la-trash"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <div data-repeater-item class="row mb-3 align-items-center">
                                                                <div class="col-md-6">
                                                                    <label>Upload Image</label>
                                                                    <input type="file" name="image" class="form-control" />
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <button type="button" data-repeater-delete class="btn btn-sm btn-danger mt-4">
                                                                        <i class="la la-trash"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>

                                                    <div class="mt-3">
                                                        <button type="button" data-repeater-create class="btn btn-sm btn-primary">
                                                            <i class="la la-plus"></i> Add Image
                                                        </button>
                                                    </div>
                                                </div>




                                                <div class="col-md-6 mb-3">
                                                    <label for="hero_video" class="form-label">Hero Video</label><br>



                                                    <input type="file" name="hero_video" id="hero_video" class="form-control"
                                                           value="{{ old('hero_video', $main->hero_video ?? '') }}" placeholder="Enter video path or URL" />
                                                    @if(!empty($main->hero_video))
                                                        <video width="140" controls class="my-2" autoplay>
                                                            <source src="{{ asset($main->hero_video) }}" type="video/mp4" >
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    @endif
                                                </div>



                                                <div class="col-md-6 mb-3">
                                                    <label for="call_sec_person_img" class="form-label">Call Section Person Image</label><br>

                                                    <input type="file" name="call_sec_person_img" id="call_sec_person_img" class="form-control"
                                                           value="{{ old('call_sec_person_img', $main->call_sec_person_img ?? '') }}" />
                                                    @if(!empty($main->call_sec_person_img))
                                                        <img src="{{ asset($main->call_sec_person_img) }}" alt="Person Image" class="img-thumbnail my-2 " width="100">
                                                    @endif
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="call_sec_code_img" class="form-label">Call Section Code Image</label><br>

                                                    <input type="file" name="call_sec_code_img" id="call_sec_code_img" class="form-control"
                                                           value="{{ old('call_sec_code_img', $main->call_sec_code_img ?? '') }}" />
                                                    @if(!empty($main->call_sec_code_img))
                                                        <img src="{{ asset($main->call_sec_code_img) }}" alt="Code Image" class="img-thumbnail my-2" width="100">
                                                    @endif
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="google_meet_link" class="form-label">Google Meet Link</label>
                                                    <input type="url" name="google_meet_link" id="google_meet_link" class="form-control"
                                                           value="{{ old('google_meet_link', $main->google_meet_link ?? '') }}" />
                                                </div>



                                                {{-- CLIENT SLIDER (image1 + image2) --}}
                                                <div id="client_slider_repeater" class="repeater mt-4">
                                                    <label class="form-label">Client Slider Logos</label>
                                                    <div data-repeater-list="client_slider_imgs">
                                                        @if(!empty($main->client_slider_imgs))
                                                            @foreach($main->client_slider_imgs as $pair)
                                                                <div data-repeater-item class="row mb-3 align-items-center">
                                                                    <div class="col-md-5">
                                                                        <label>Light Logo</label>
                                                                        <input type="file" name="image1" class="form-control">
                                                                        <input type="hidden" name="old_image1" value="{{ $pair['image1'] ?? '' }}">
                                                                        @if(!empty($pair['image1'])) <img src="{{ asset($pair['image1']) }}" class="img-thumbnail mt-2" width="100"> @endif
                                                                    </div>

                                                                    <div class="col-md-5">
                                                                        <label>Dark Logo</label>
                                                                        <input type="file" name="image2" class="form-control">
                                                                        <input type="hidden" name="old_image2" value="{{ $pair['image2'] ?? '' }}">
                                                                        @if(!empty($pair['image2'])) <img src="{{ asset($pair['image2']) }}" class="img-thumbnail mt-2" width="100"> @endif
                                                                    </div>

                                                                    <div class="col-md-2">
                                                                        <button type="button" data-repeater-delete class="btn btn-sm btn-danger mt-4"><i class="la la-trash"></i></button>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <div data-repeater-item class="row mb-3 align-items-center">
                                                                <div class="col-md-5"><label>Light Logo</label><input type="file" name="image1" class="form-control"></div>
                                                                <div class="col-md-5"><label>Dark Logo</label><input type="file" name="image2" class="form-control"></div>
                                                                <div class="col-md-2"><button type="button" data-repeater-delete class="btn btn-sm btn-danger mt-4"><i class="la la-trash"></i></button></div>
                                                            </div>
                                                        @endif
                                                    </div>

                                                    <div class="mt-3">
                                                        <button type="button" data-repeater-create class="btn btn-sm btn-primary"><i class="la la-plus"></i> Add Logo Pair</button>
                                                    </div>
                                                </div>



                                                <div class="col-md-6 mb-3">
                                                    <label for="services_title" class="form-label">Services Title</label>
                                                    <input type="text" name="services_title" id="services_title" class="form-control"
                                                           value="{{ old('services_title', $main->services_title ?? '') }}" />
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="about_title" class="form-label">About Title</label>
                                                    <input type="text" name="about_title" id="about_title" class="form-control"
                                                           value="{{ old('about_title', $main->about_title ?? '') }}" />
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="about_desc" class="form-label">About Description</label>
                                                    <textarea name="about_desc" id="about_desc" rows="3" class="form-control">{{ old('about_desc', $main->about_desc ?? '') }}</textarea>
                                                </div>



                                                <div id="about_list_repeater">
                                                    <label for="about_desc" class="form-label">About List</label>
                                                    <div data-repeater-list="about_list">
                                                        @if(!empty($main->about_list))
                                                            @foreach($main->about_list as $key => $item)
                                                                <div data-repeater-item class="row mb-3 align-items-center">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="item" class="form-control"
                                                                               value="{{ old('about_list.'.$key, $item) }}"
                                                                               placeholder="Enter list item" />
                                                                    </div>

                                                                </div>
                                                            @endforeach

                                                        @endif
                                                    </div>


                                                </div>


                                                <div class="col-md-6 mb-3">
                                                    <label for="consultation_btn_name" class="form-label">Consultation Button Name</label>
                                                    <input type="text" name="consultation_btn_name" id="consultation_btn_name" class="form-control"
                                                           value="{{ old('consultation_btn_name', $main->consultation_btn_name ?? '') }}" />
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="about_more_btn_name" class="form-label">About More Button Name</label>
                                                    <input type="text" name="about_more_btn_name" id="about_more_btn_name" class="form-control"
                                                           value="{{ old('about_more_btn_name', $main->about_more_btn_name ?? '') }}" />
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="about_main_img" class="form-label">About Main Image</label><br>

                                                    <input type="file" name="about_main_img" id="about_main_img" class="form-control"
                                                           value="{{ old('about_main_img', $main->about_main_img ?? '') }}" />
                                                    @if(!empty($main->about_main_img))
                                                        <img src="{{ asset($main->about_main_img) }}" alt="About Main Image" class="img-thumbnail my-2" width="100">
                                                    @endif
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="projects_title" class="form-label">Projects Title</label>
                                                    <input type="text" name="projects_title" id="projects_title" class="form-control"
                                                           value="{{ old('projects_title', $main->projects_title ?? '') }}" />
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="methodology_title" class="form-label">Methodology Title</label>
                                                    <input type="text" name="methodology_title" id="methodology_title" class="form-control"
                                                           value="{{ old('methodology_title', $main->methodology_title ?? '') }}" />
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="methodology_bg_image" class="form-label">Methodology Background Image</label><br>

                                                    <input type="file" name="methodology_bg_image" id="methodology_bg_image" class="form-control"
                                                           value="{{ old('methodology_bg_image', $main->methodology_bg_image ?? '') }}" />
                                                    @if(!empty($main->methodology_bg_image))
                                                        <img src="{{ asset($main->methodology_bg_image) }}" alt="Methodology Background" class="img-thumbnail my-2" width="100">
                                                    @endif
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="clients_say_title" class="form-label">Clients Say Title</label>
                                                    <input type="text" name="clients_say_title" id="clients_say_title" class="form-control"
                                                           value="{{ old('clients_say_title', $main->clients_say_title ?? '') }}" />
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="opportunities_title" class="form-label">Opportunities Title</label>
                                                    <input type="text" name="opportunities_title" id="opportunities_title" class="form-control"
                                                           value="{{ old('opportunities_title', $main->opportunities_title ?? '') }}" />
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="opportunities_sub_title" class="form-label">Opportunities Sub Title</label>
                                                    <input type="text" name="opportunities_sub_title" id="opportunities_sub_title" class="form-control"
                                                           value="{{ old('opportunities_sub_title', $main->opportunities_sub_title ?? '') }}" />
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="opportunities_img" class="form-label">Opportunities Image</label><br>

                                                    <input type="file" name="opportunities_img" id="opportunities_img" class="form-control"
                                                           value="{{ old('opportunities_img', $main->opportunities_img ?? '') }}" />
                                                    @if(!empty($main->opportunities_img))
                                                        <img src="{{ asset($main->opportunities_img) }}" alt="Opportunities Image" class="img-thumbnail my-2" width="100">
                                                    @endif
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="jobs_avaliable" class="form-label">Jobs Available</label>
                                                    <input type="text" name="jobs_avaliable" id="jobs_avaliable" class="form-control"
                                                           value="{{ old('jobs_avaliable', $main->jobs_avaliable ?? '') }}" />
                                                </div>



                                            </div>

                                            <div class="modal-footer mt-4">
                                                <button type="submit" class="btn btn-primary">Update User</button>
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
        $(document).ready(function(){
            $('#happy_clients_repeater').repeater({ initEmpty: false, show: function(){ $(this).slideDown(); }, hide: function(deleteElement){ $(this).slideUp(deleteElement); } });
            $('#client_slider_repeater').repeater({ initEmpty: false, show: function(){ $(this).slideDown(); }, hide: function(deleteElement){ $(this).slideUp(deleteElement); } });
            // If you have about_list or any other repeater, initialize similarly
        });






        $(document).ready(function () {
            $('#about_list_repeater').repeater({
                initEmpty: false,
                defaultValues: {
                    'item': ''
                },
                show: function () {
                    $(this).slideDown();
                },
                hide: function (deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });
        });
</script>

@endsection
