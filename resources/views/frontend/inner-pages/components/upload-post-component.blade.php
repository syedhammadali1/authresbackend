
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
                                            placeholder="First Name" name="first_name" />
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
                                            placeholder="Last Name" name="last_name" />
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
                                            placeholder="Enter Your Email" name="email" />
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
                                            placeholder="Enter Your Phone Number" name="phone_no" />
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
                                                data-live-search="true" tabindex="null" name="type_id">
                                                <option selected disabled>Select Post Type</option>
                                                <option value="Articles">Articles</option>
                                                <option value="Journals">Journals</option>
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
                                                <option value="Editorial">Editorial</option>
                                                <option value="Essay">Essay</option>
                                                <option value="Hypothesis">Hypothesis</option>
                                                <option value="Technical Note">Technical Note</option>
                                                <option value="Systematic Review">Systematic Review</option>
                                                <option value="Trade journals">Trade journals</option>
                                                <option value="Popular magazines">Popular magazines</option>
                                                <option value="Newspapers">Newspapers</option>
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
                                            placeholder="" name="address" />
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
                                            placeholder="" name="title" />
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
                                            placeholder="" name="description"></textarea>
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
                                            value='1'>
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
                                                <input class="form-check-input " type="radio" name="is_exclusive"
                                                    id="yes" value="1" checked>
                                                <label class="form-check-label" for="yes">
                                                    Yes
                                                </label>

                                            </div>
                                            <div class="form-check ml-3 @error('is_exclusive') is-invalid @enderror ">
                                                <input class="form-check-input" type="radio" name="is_exclusive"
                                                    id="no" value="0">
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

                            @error('file')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <div class="file-upload-wrapper">
                                <div class="card card-body view file-upload">
                                    <div class="mask rgba-stylish-slight" style=""></div>
                                    <div class="file-upload-errors-container">
                                        <ul></ul>
                                    </div><input type="file" id="input-file-now-custom-1" class="file_upload"
                                        name="file"><button type="button"
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

@once
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>

@endonce

