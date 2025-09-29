@extends('layout.mainadmin')




@section('content')

    <div class="row px-3">
        <div class="card">

            <div class="card-body">

                <h4>Main</h4>

                <form action="{{ route('contactus.store') }}" method="post" enctype="multipart/form-data" style="">
                    @csrf
                    <!-- Personal Details -->
                    <div class="row mb-4">
                        <!-- Title 1 -->
                        <div class="col-md-6 mb-3">
                            <label for="title1" class="form-label">Title 1</label>
                            <input type="text" name="title1" id="title1"
                                   class="form-control"
                                   placeholder="Enter Title 1"
                                   value="{{ old('title1', $contact->title1 ?? '') }}">
                        </div>

                        <!-- Title 2 -->
                        <div class="col-md-6 mb-3">
                            <label for="title2" class="form-label">Title 2</label>
                            <input type="text" name="title2" id="title2"
                                   class="form-control"
                                   placeholder="Enter Title 2"
                                   value="{{ old('title2', $contact->title2 ?? '') }}">
                        </div>

                        <!-- Heading -->
                        <div class="col-md-6 mb-3">
                            <label for="heading" class="form-label">Heading</label>
                            <input type="text" name="heading" id="heading"
                                   class="form-control"
                                   placeholder="Enter Heading"
                                   value="{{ old('heading', $contact->heading ?? '') }}">
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="banner_img" class="form-label">Banner Image</label>
                            <input type="file" name="banner_img" id="banner_img" class="form-control">
                            @if(!empty($contact->banner_img))
                                <div class="mt-2">
                                    <img src="{{ asset($contact->banner_img) }}" width="100" alt="Banner Image">
                                </div>
                            @endif
                        </div>

                        <!-- Description -->
                        <div class="col-md-12 mb-3">
                            <label for="descritpion" class="form-label">Description</label>
                            <textarea name="descritpion" id="descritpion" rows="5"
                                      class="form-control"
                                      placeholder="Write description...">{{ old('descritpion', $contact->descritpion ?? '') }}</textarea>
                        </div>

                        <!-- In Touch -->
                        <div class="col-md-6 mb-3">
                            <label for="in_touch" class="form-label">In Touch</label>
                            <input type="text" name="in_touch" id="in_touch"
                                   class="form-control"
                                   placeholder="Enter In Touch Text"
                                   value="{{ old('in_touch', $contact->in_touch ?? '') }}">
                        </div>

                        <!-- Call Title -->
                        <div class="col-md-6 mb-3">
                            <label for="call_title" class="form-label">Call Title</label>
                            <input type="text" name="call_title" id="call_title"
                                   class="form-control"
                                   placeholder="Enter Call Title"
                                   value="{{ old('call_title', $contact->call_title ?? '') }}">
                        </div>

                        <!-- Call Number -->
                        <div class="col-md-6 mb-3">
                            <label for="call_num" class="form-label">Call Number</label>
                            <input type="text" name="call_num" id="call_num"
                                   class="form-control"
                                   placeholder="Enter Call Number"
                                   value="{{ old('call_num', $contact->call_num ?? '') }}">
                        </div>

                        <!-- Email Title -->
                        <div class="col-md-6 mb-3">
                            <label for="email_title" class="form-label">Email Title</label>
                            <input type="text" name="email_title" id="email_title"
                                   class="form-control"
                                   placeholder="Enter Email Title"
                                   value="{{ old('email_title', $contact->email_title ?? '') }}">
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email"
                                   class="form-control"
                                   placeholder="Enter Email"
                                   value="{{ old('email', $contact->email ?? '') }}">
                        </div>

                        <!-- Facebook Link -->
                        <div class="col-md-6 mb-3">
                            <label for="facebook_link" class="form-label">Facebook Link</label>
                            <input type="url" name="facebook_link" id="facebook_link"
                                   class="form-control"
                                   placeholder="Enter Facebook Link"
                                   value="{{ old('facebook_link', $contact->facebook_link ?? '') }}">
                        </div>

                        <!-- Twitter Link -->
                        <div class="col-md-6 mb-3">
                            <label for="twitter_link" class="form-label">Twitter Link</label>
                            <input type="url" name="twitter_link" id="twitter_link"
                                   class="form-control"
                                   placeholder="Enter Twitter Link"
                                   value="{{ old('twitter_link', $contact->twitter_link ?? '') }}">
                        </div>

                        <!-- LinkedIn Link -->
                        <div class="col-md-6 mb-3">
                            <label for="linkedin_link" class="form-label">LinkedIn Link</label>
                            <input type="url" name="linkedin_link" id="linkedin_link"
                                   class="form-control"
                                   placeholder="Enter LinkedIn Link"
                                   value="{{ old('linkedin_link', $contact->linkedin_link ?? '') }}">
                        </div>

                        <!-- Map Location -->
                        <div class="col-md-12 mb-3">
                            <label for="map_location" class="form-label">Map Location (Embed URL)</label>
                            <textarea name="map_location" id="map_location" rows="5"
                                      class="form-control"
                                      placeholder="Enter Map Embed Link">{{ old('map_location', $contact->map_location ?? '') }}</textarea>
                        </div>
                    </div>


                    <div class="modal-footer mt-4">
                        <button type="submit" class="btn btn-primary">Update Contact</button>
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
