@extends('frontend.inner-pages.layout.inner-layout')

@section('content')
{{-- @dd(old()) --}}
{{-- @dd(in_array(1,[1,2])) --}}

    <div id="upload-post">
        <section class="section main-content-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="rounded shadow bg-white p-4">
                            <div class="custom-form">
                                <div id="message3"></div>
                                <form method="POST" action="{{ route('frontend.upload.temp-post') }}" id="contact-form3"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h4 class="text-dark mb-3 text-center">Content Submission</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group app-label mt-2">
                                                <label class="text-muted">First Name</label>
                                                <input id="fname" type="text"
                                                    class="form-control resume @error('first_name') is-invalid @enderror"
                                                    placeholder="First Name" name="first_name" value="{{ old('first_name', '') }}" />
                                                @error('first_name')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group app-label mt-2">
                                                <label class="text-muted">Last Name</label>
                                                <input id="lname" type="text"
                                                    class="form-control resume @error('last_name') is-invalid @enderror"
                                                    placeholder="Last Name" name="last_name" value="{{ old('last_name', '') }}" />
                                                @error('last_name')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group app-label mt-2">
                                                <label class="text-muted">Email</label>
                                                <input id="email" type="email"
                                                    class="form-control resume @error('email') is-invalid @enderror"
                                                    placeholder="Enter Your Email" name="email" value="{{ old('email', '') }}" />
                                                @error('email')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group app-label mt-2">
                                                <label class="text-muted">Phone Number</label>
                                                <input id="number" type="number"
                                                    class="form-control resume @error('phone_no') is-invalid @enderror"
                                                    placeholder="Enter Your Phone Number" name="phone_no" value="{{ old('phone_no', '') }}" />
                                                @error('phone_no')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group app-label mt-2">
                                                <label class="text-muted">Post Type</label>
                                                <div class="form-button">
                                                    <select class="selectpicker @error('type_id') is-invalid @enderror "
                                                        data-live-search="true" tabindex="null" name="type_id"  >
                                                        <option selected disabled>Select Post Type</option>
                                                        @foreach ($types as $type)
                                                            <option value={{ $type->id }} @if($type->id == old('type_id')) selected @endif>{{ $type->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('type_id')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group app-label mt-2">
                                                <label class="text-muted">Post Category</label>
                                                <div class="form-button">
                                                    <select class="selectpicker @error('category_id') is-invalid @enderror "
                                                        multiple="" data-live-search="true" tabindex="null"
                                                        name="category_id[]">
                                                        @foreach ($categories as $category)
                                                            <option value={{ $category->id }} {{ collect(old('category_id'))->contains($category->id) ? 'selected' : ''  }} >{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group app-label mt-2">
                                                <label class="text-muted">Address</label>
                                                <input id="Address" type="text"
                                                    class="form-control resume @error('address') is-invalid @enderror"
                                                    placeholder="" name="address" value="{{ old('address', '') }}" />
                                                @error('address')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group app-label mt-2">
                                                <label class="text-muted">Title</label>
                                                <input id="Title " type="text"
                                                    class="form-control resume @error('title') is-invalid @enderror"
                                                    placeholder="" name="title" value="{{ old('title', '') }}" />
                                                @error('title')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group app-label mt-2">
                                                <label class="text-muted">Description</label>
                                                <textarea id="description" rows="6" class="form-control resume @error('description') is-invalid @enderror"
                                                    placeholder="" name="description"> {{ old('description', '') }}</textarea>
                                                @error('description')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="custom-checkbox word-limit-control pl-3 mb-3">
                                                <input type="checkbox" id="word-limiter" name="is_over_words"
                                                    class="custom-control-input @error('is_over_words') is-invalid @enderror"
                                                    value='1' value="{{ old('is_over_words', '') }}" >
                                                <label class="custom-control-label ml-1 text-muted" for="word-limiter">IF
                                                    MY SUBMISSION IS OVER 25,000 WORDS, I AM WILLING TO WORK WITH THE
                                                    EDITORS TO SHORTEN MY ARTICLE.</label>
                                                @error('is_over_words')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group app-label mt-2">
                                                <label class="text-muted">IS THIS AN EXCLUSIVE SUBMISSION?</label>
                                                <div class="d-flex">
                                                    <div class="form-check @error('is_exclusive') is-invalid @enderror">
                                                        <input class="form-check-input " type="radio"
                                                            name="is_exclusive" id="yes" value="1" checked>
                                                        <label class="form-check-label" for="yes">
                                                            Yes
                                                        </label>

                                                    </div>
                                                    <div
                                                        class="form-check ml-3 @error('is_exclusive') is-invalid @enderror ">
                                                        <input class="form-check-input" type="radio"
                                                            name="is_exclusive" id="no" value="0">
                                                        <label class="form-check-label" for="no">
                                                            No
                                                        </label>
                                                    </div>
                                                    @error('is_exclusive')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="file-upload-wrapper">
                                        <div class="card card-body view file-upload">
                                            <div class="mask rgba-stylish-slight" style=""></div>
                                            <div class="file-upload-errors-container">
                                                <ul></ul>
                                            </div><input type="file" id="input-file-now-custom-1" class="file_upload"
                                                name="file" accept=".pdf,.docx,.doc"><button type="button"
                                                class="btn btn-sm btn-danger waves-effect waves-light"><i
                                                    class="fa fa-trash ml-1"></i></button>
                                            <div class="file-upload-preview" style="display: none;"><span
                                                    class="file-upload-render"></span>
                                                <div class="file-upload-infos">
                                                    <div class="file-upload-infos-inner">
                                                        <p class="file-upload-filename"><span
                                                                class="file-upload-filename-inner"></span></p>
                                                        <p class="file-upload-infos-message">Drag and drop or click to
                                                            replace</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @error('file')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="pt-4">
                                        <p><strong>Note :</strong> The Citiations Should Be In Footnotes And The Table Of
                                            Content Should Be Define Properly.</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-post-upload">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

{{-- @push('custom-scripts')
    <script>
        $(document).ready(function () {
            $.ajax({
                type: "GET",
                url: "{{ route('frontend.upload-post') }}",
                success: function (response) {
                    // $('#upload-post').html(response.html);

                }
            });
        });

    </script>

@endpush --}}
