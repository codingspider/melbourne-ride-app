@extends('admin.layouts.app')
@section('title', 'Front Web Section')
@section('content')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Front Web Section </li>
        </ol>
    </nav>
</div>

@if(@$section->content)
<div class="row">
    <div class="col-lg-12 col-md-12 mb-30">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('frontend-content', $key)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="type" value="content">
                    <div class="row">
                        @php
                        $imgCount = 0;
                        @endphp
                        @foreach($section->content as $k => $item)
                            @if($item == 'textarea')

                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label>{{ keyToTitle($k) }}</label>
                                    <textarea rows="10" class="form-control" name="{{$k}}"
                                        required>{{ $content->data_values ? json_decode($content->data_values, true)[$k] : '' }}</textarea>
                                </div>
                            </div>

                            @elseif($item == 'editor')
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label>{{ keyToTitle($k) }}</label>
                                    <textarea rows="10" class="form-control wysiwyg"
                                        name="{{$k}}">{{ @$content->data_values ? json_decode(@$content->data_values, true)[$k] : ''  }}</textarea>
                                </div>
                            </div>
                            @else
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label>{{ keyToTitle($k) }}</label>
                                    <input type="text" class="form-control" name="{{$k}}"
                                        value="{{ @$content->data_values ? json_decode(@$content->data_values, true)[$k] : ''  }}"
                                        required />
                                </div>
                            </div>

                            @endif
                        @endforeach
                        @stack('divend')
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary h-45">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

@push('custom-script')
<script>
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
</script>

@endpush