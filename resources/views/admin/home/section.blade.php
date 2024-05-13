@extends('admin.layouts.app')
@section('title', 'Home Section')
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Home page data </li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">

                            <div class="card-body pb-5 mt-5">
                                <form action="{{ route('save-home-data') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Section 1 Title </label>
                                        <input type="text" class="form-control" name="section_title"
                                            value="{{ $data->section_title ?? '' }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Section 1 Description </label>
                                        <textarea name="section_description" class="form-control">{{ $data->section_description ?? '' }}</textarea>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Section Block 1 Title </label>
                                        <input type="text" class="form-control" name="section_block_1_title"
                                            value="{{ $data->section_block_1_title ?? '' }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Section Block 1 Description </label>
                                        <textarea name="section_block_1_description" class="form-control">{{ $data->section_block_1_description ?? '' }}</textarea>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Section Block 2 Title </label>
                                        <input type="text" class="form-control" name="section_block_2_title"
                                            value="{{ $data->section_block_2_title ?? '' }}">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Section Block 2 Description </label>
                                        <textarea name="section_block_2_description" class="form-control">{{ $data->section_block_2_description ?? '' }}</textarea>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Section Block 3 Title </label>
                                        <input type="text" class="form-control" name="section_block_3_title"
                                            value="{{ $data->section_block_3_title ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="formGroupExampleInput3">Section Block 3 Description </label>
                                        <textarea name="section_block_3_description" class="form-control">{{ $data->section_block_3_description ?? '' }}</textarea>
                                    </div>
                                    
                                    
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Section Block 4 Title </label>
                                        <input type="text" class="form-control" name="section_block_4_title"
                                            value="{{ $data->section_block_4_title ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="formGroupExampleInput3">Section Block 4 Description </label>
                                        <textarea name="section_block_4_description" class="form-control">{{ $data->section_block_4_description ?? '' }}</textarea>
                                    </div>
                                    
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Section Block 5 Title </label>
                                        <input type="text" class="form-control" name="section_block_5_title"
                                            value="{{ $data->section_block_5_title ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="formGroupExampleInput3">Section Block 5 Description </label>
                                        <textarea name="section_block_5_description" class="form-control">{{ $data->section_block_5_description ?? '' }}</textarea>
                                    </div>
                                    
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Section Block 6 Title </label>
                                        <input type="text" class="form-control" name="section_block_6_title"
                                            value="{{ $data->section_block_6_title ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="formGroupExampleInput3">Section Block 6 Description </label>
                                        <textarea name="section_block_6_description" class="form-control">{{ $data->section_block_6_description ?? '' }}</textarea>
                                    </div>
                                    
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Section Block 7 Title </label>
                                        <input type="text" class="form-control" name="section_block_7_title"
                                            value="{{ $data->section_block_7_title ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="formGroupExampleInput3">Section Block 7 Description </label>
                                        <textarea name="section_block_7_description" class="form-control">{{ $data->section_block_7_description ?? '' }}</textarea>
                                    </div>
                                    
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Section Block 8 Title </label>
                                        <input type="text" class="form-control" name="section_block_8_title"
                                            value="{{ $data->section_block_8_title ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="formGroupExampleInput3">Section Block 8 Description </label>
                                        <textarea name="section_block_8_description" class="form-control">{{ $data->section_block_8_description ?? '' }}</textarea>
                                    </div>
                                    
                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput2">Section Block 9 Title </label>
                                        <input type="text" class="form-control" name="section_block_9_title"
                                            value="{{ $data->section_block_9_title ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="formGroupExampleInput3">Section Block 9 Description </label>
                                        <textarea name="section_block_9_description" class="form-control">{{ $data->section_block_9_description ?? '' }}</textarea>
                                    </div>
                                    
                                    <div class="form-group mb-2">
                                        <label for="inputText" class="col-form-label">Vehicle categories image
                                        </label>
                                        <input type="file" class="form-control" name="vehicle_categories_image"
                                            value="">
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput">Paragraph One </label>
                                        <textarea name="stats_one_title"  cols="30" rows="10" class="form-control">{{ $data->stats_one_title ?? '' }}</textarea>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput">Paragraph Two </label>
                                        <textarea name="stats_two_title"  cols="30" rows="10" class="form-control">{{ $data->stats_two_title ?? '' }}</textarea>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput">Paragraph Three </label>
                                        <textarea name="stats_three_title"  cols="30" rows="10" class="form-control">{{ $data->stats_three_title ?? '' }}</textarea>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="formGroupExampleInput">Paragraph Four </label>
                                        <textarea name="stats_four_title"  cols="30" rows="10" class="form-control">{{ $data->stats_four_title ?? '' }}</textarea>
                                    </div>


                                    <div class="form-group mb-2">
                                        <button type="submit" class="btn btn-info">Save </button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div><!-- End Top Selling -->
                </div>
            </div>
        </div>
    </section>
@endsection
