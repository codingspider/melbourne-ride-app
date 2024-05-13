@extends('admin.layouts.app')
@section('title', 'Post List')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Post Create </li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <form action="{{ route('post-update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-6 col-form-label">Post Title <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="title" value="{{ $post->title }}" id="title" class="form-control">
                            </div>
                        </div>
                        
                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-6 col-form-label">Post Slug <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="slug" value="{{ $post->slug }}" id="slug" readonly class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-6 col-form-label">Description </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" style="height: 100px">{{ $post->description }}</textarea>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-6 col-form-label">Content </label>
                            <div class="col-sm-10">
                                <textarea class="form-control editor" id='editor' name="content" style="height: 100px">{{ $post->content }}</textarea>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-6 col-form-label">Gallery Images  </label>
                            <div class="col-sm-10">
                                <input type="file" name="gallery_images[]" multiple class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-6 col-form-label">SEO Title </label>
                            <div class="col-sm-10">
                                <input type="text" name="seo_title" value="{{ $post->seo_title }}" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-6 col-form-label">SEP Description </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="seo_description" style="height: 100px">{{ $post->seo_description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">

                <div class="card">
                    <div class="card-body">
                        <div class="row mb-5 mt-5">
                            <label class="col-sm-6 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <select name="status" class="form-control" id="">
                                        <option {{ $post->status == 1 ? "selected" : '' }} value="1">Publish</option>
                                        <option {{ $post->status == 0 ? "selected" : '' }} value="0">Archive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-5">
                            <label class="col-sm-6 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <select name="category_id" class="form-control" id="category_id">
                                        <option value="">Select Category </option>
                                        @foreach($categories as $category)
                                        <option {{ $post->category_id == $category->id ? "selected" : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-5">
                            <label class="col-sm-6 col-form-label">Sub Category</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <select name="sub_category_id" class="form-control" id="sub_category_id">
                                        @foreach ($sub_categories as $subcat)
                                            <option {{ $post->sub_category_id == $subcat->id ? 'selected' : '' }} value="{{ $subcat->id }}">{{ $subcat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <label class="col-sm-6 col-form-label">Tags </label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <select name="tag_id[]" class="form-control tag-input" multiple id="tag_id">
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'selected' : '' }}>
                                            {{ $tag->name }}
                                        </option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-5">
                            <label class="col-sm-6 col-form-label"> Thumbnail Image <span class="text-danger">*</span> </label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <input type="file" name="thumb_image" class="form-control" id="">
                                    <br>
                                    <img src="{{ asset('assets/images/thumbimage/'.$post->thumb_image) }}" style="height: 50px" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-5">
                            <label class="col-sm-6 col-form-label"> Banner Image </label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <input type="file" name="banner_image" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-5 mt-5">
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <a class="btn btn-danger" style="margin-right: 10px" href="{{ route('post-list') }}">Cancel </a>
                                    <button class="btn btn-info" type="submit">Save Post </button>
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
    $(function(){
        $(document).ready(function () {
            // Select the title input field
            var $title = $('#title');

            // Select the slug input field
            var $slug = $('#slug');

            // Add a change event listener to the title field
            $title.on('input', function () {
                // Get the value of the title field
                var titleValue = $title.val();

                // Convert the title to a slug
                var slugValue = titleValue.toLowerCase().replace(/[^a-z0-9 -]/g, '').replace(/\s+/g, '-');

                // Update the value of the slug field
                $slug.val(slugValue);
            });
        });

        $('#category_id').on('change', function () {
                var id = this.value;
                $("#state-dropdown").html('');
                $.ajax({
                    url: "{{url('get-subcategories')}}",
                    type: "POST",
                    data: {
                        category_id: id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#sub_category_id').html('<option value="">-- Select Subcategory --</option>');
                        $.each(result.subcategories, function (key, value) {
                            $("#sub_category_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
        $(document).ready(function() {
            $('.tag-input').select2({
                tags: true,
            });
        });
</script>

@endpush