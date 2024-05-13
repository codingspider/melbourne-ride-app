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
    <form action="{{ route('static-page.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-6 col-form-label">Page<span class="text-danger">*</span></label>
                            <div class="col-sm-12">
                                <select name="page" class="form-control" required>
                                    <option value="">Choose Page </option>
                                    @foreach (getStaticPage() as $page)
                                        <option {{ $page == $post->page ? 'selected' : '' }} value="{{ $page }}"> {{ $page }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-6 col-form-label">Page URL </label>
                            <div class="col-sm-12">
                                <input type="text" name="slug" class="form-control" value="{{ $post->slug }}" required>
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-6 col-form-label">Content </label>
                            <div class="col-sm-12">
                                <textarea class="form-control editor" id='editor' name="page_content" style="height: 100px">{{ $post->page_content }}</textarea>
                            </div>
                        </div>
                        

                        <div class="row mb-3 mt-5">
                            <label for="inputText" class="col-sm-6 col-form-label">Meta Title </label>
                            <div class="col-sm-12">
                                <input type="text" name="meta_title" class="form-control" value="{{ $post->meta_title }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-6 col-form-label">Meta Keywords </label>
                            <div class="col-sm-12">
                                <input type="text" name="meta_keywords" value="{{ $post->meta_keywords }}" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-6 col-form-label">Meta Description </label>
                            <div class="col-sm-12">
                                <textarea class="form-control" name="meta_description" style="height: 100px">{{ $post->meta_description }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                            <button class="btn btn-info" type="submit">Submit</button>
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