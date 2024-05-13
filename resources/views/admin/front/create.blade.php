@extends('admin.layouts.app')
@section('title', 'Page Create')
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Page Create </li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Page Title <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Page Slug <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="slug" id="slug" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Meta Title <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="meta_title" id="meta_title" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Meta Description <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="meta_description" id="meta_description"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Meta Keywords <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="meta_keywords" id="meta_keywords" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Page Content </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control wysiwyg" id='wysiwyg' name="content"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section One Heading </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_1_heading" id="section_1_heading"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section One SubHeading </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_1_subheading" id="section_1_subheading"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section One Background Image </label>
                                <div class="col-sm-10">
                                    <input type="file" name="section_1_image" id="section_1_image" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Image Alt Tag </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_1_image_alt_tag" id="" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section One Book Button Title </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_1_book_button_title" id="section_1_book_button_title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section One Book Button URL </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_1_book_button_url" id="section_1_book_button_url"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section One Qoute Button URL
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_1_qoute_button_url"
                                        id="section_1_qoute_button_url" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section One Qoute Button Title
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_1_qoute_button_title"
                                        id="section_1_qoute_button_title" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Two Title </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_2_title" id="section_2_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Section Two Content </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control wysiwyg" id='wysiwyg' name="section_2_content"></textarea>
                                </div>
                            </div>


                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Three Title </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_3_title" id="section_3_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Three Image </label>
                                <div class="col-sm-10">
                                    <input type="file" name="section_3_image" id="section_3_image"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Image Alt Tag </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_3_image_alt_tag" id="" class="form-control">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Section Three Content </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control wysiwyg" id='wysiwyg' name="section_3_content"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Four Title </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_4_title" id="section_4_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Four Image </label>
                                <div class="col-sm-10">
                                    <input type="file" name="section_4_image" id="section_4_image"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Image Alt Tag </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_4_image_alt_tag" id="" class="form-control">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Section Four Content </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control wysiwyg" id='wysiwyg' name="section_4_content"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Five Title </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_5_title" id="section_5_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Five Image </label>
                                <div class="col-sm-10">
                                    <input type="file" name="section_5_image" id="section_5_image"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Image Alt Tag </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_5_image_alt_tag" id="" class="form-control">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Section Five Content </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control wysiwyg" id='wysiwyg' name="section_5_content"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Six Title </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_6_title" id="section_6_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Section Six Content </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control wysiwyg" id='wysiwyg' name="section_6_content"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Seven Heading </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_7_heading" id="section_7_heading"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Seven SubHeading </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_7_subheading" id="section_7_subheading"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Seven Background Image
                                </label>
                                <div class="col-sm-10">
                                    <input type="file" name="section_7_image" id="section_7_image"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Image Alt Tag </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_7_image_alt_tag" id="" class="form-control">
                                </div>
                            </div>


                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Seven Book Button Title
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_7_book_button_title" id="section_7_book_button_title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Seven Book Button URL
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_7_book_button_url" id="section_7_book_button_url"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Seven Qoute Button Title
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_7_qoute_button_title"
                                        id="section_7_qoute_button_title" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Seven Qoute Button URL
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_7_qoute_button_url"
                                        id="section_7_qoute_button_url" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Eight One Heading </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_8_1_heading" id="section_8_1_heading"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Section Eight One Content
                                </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control wysiwyg" id='wysiwyg' name="section_8_1_text"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Eight Two Heading </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_8_2_heading" id="section_8_2_heading"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Section Eight Two Content
                                </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control wysiwyg" id='wysiwyg' name="section_8_2_text"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Eight Three Heading
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_8_3_heading" id="section_8_3_heading"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Section Eight Three Content
                                </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control wysiwyg" id='wysiwyg' name="section_8_3_text"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Eight Four Heading </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_8_4_heading" id="section_8_4_heading"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Section Eight Four Content
                                </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control wysiwyg" id='wysiwyg' name="section_8_4_text"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Section Nine Heading </label>
                                <div class="col-sm-10">
                                    <input type="text" name="section_9_heading" id="section_9_heading"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Section Nine Content </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control wysiwyg" id='wysiwyg' name="section_9_text"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Why choose us </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control wysiwyg" id='wysiwyg' name="why_choose_us"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Why choose us button </label>
                                <div class="col-sm-10">
                                    <input type="text" name="why_choose_button_title" id="why_choose_button_title"
                                        class="form-control">
                                </div>
                            </div>
                            
                            
                            <div class="row mb-3 mt-5">
                                <label for="inputText" class="col-sm-2 col-form-label">Why choose us button URL </label>
                                <div class="col-sm-10">
                                    <input type="text" name="why_choose_button_url" id="why_choose_button_url"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-5 mt-5">
                                <label for="inputPassword" class="col-sm-2 col-form-label"> </label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <a class="btn btn-danger" style="margin-right: 10px"
                                            href="{{ route('pages.index') }}">Cancel </a>
                                        <button class="btn btn-info" type="submit">Save </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </section>

@endsection

@push('custom-script')
    <script>
        $(function() {
            $(document).ready(function() {
                // Select the title input field
                var $title = $('#title');

                // Select the slug input field
                var $slug = $('#slug');

                // Add a change event listener to the title field
                $title.on('input', function() {
                    // Get the value of the title field
                    var titleValue = $title.val();

                    // Convert the title to a slug
                    var slugValue = titleValue.toLowerCase().replace(/[^a-z0-9 -]/g, '').replace(
                        /\s+/g, '-');

                    // Update the value of the slug field
                    $slug.val(slugValue);
                });
            });
            $(document).ready(function() {
                $('.wysiwyg').summernote({
                    height: 00,
                    callbacks: {
                        onImageUpload: function(image) {
                            uploadImage(image[0]);
                        }
                    }
                });

                function uploadImage(image) {
                    var data = new FormData();
                    data.append("upload", image);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '/editor-upload-image',
                        method: 'POST',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: data,
                        success: function(data) {
                            var imageUrl = data.url;
                            var image = $('<img>').attr('src', imageUrl);
                            $('.wysiwyg').summernote("insertNode", image[0]);
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });
                }
            });
        });
    </script>
@endpush
