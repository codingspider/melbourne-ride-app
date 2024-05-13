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
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Sl</th>
                    <td>{{ $page->id }}</td>
                </tr>
                <tr>
                    <th>Slug</th>
                    <td>{{ $page->slug }}</td>
                </tr>
                <tr>
                    <th>Meta Title</th>
                    <td>{{ $page->meta_title }}</td>
                </tr>
                <tr>
                    <th>Meta Description</th>
                    <td>{!! $page->meta_description !!}</td>
                </tr>
                <tr>
                    <th>Meta Keywords</th>
                    <td>{{ $page->meta_keywords }}</td>
                </tr>
                <tr>
                    <th>Section One Heading</th>
                    <td>{{ $page->section_1_heading }}</td>
                </tr>
                <tr>
                    <th>Section One Subheading</th>
                    <td>{{ $page->section_1_subheading }}</td>
                </tr>
                <tr>
                    <th>Section One Image</th>
                    <td>
                        <img src="{{ asset('assets/images/page/' . $page->section_1_image) }}" alt="">
                    </td>
                </tr>
                <tr>
                    <th>Section One Book Button Url</th>
                    <td>{{ $page->section_1_book_button_url }}</td>
                </tr>
                <tr>
                    <th>section One Qoute Button Url</th>
                    <td>{{ $page->section_1_qoute_button_url }}</td>
                </tr>
                <tr>
                    <th>section Two Title</th>
                    <td>{{ $page->section_2_title }}</td>
                </tr>
                <tr>
                    <th>Section Two Content</th>
                    <td>{!! $page->section_2_content !!}</td>
                </tr>

                <tr>
                    <th>Section_Three Title</th>
                    <td>{{ $page->section_3_title }}</td>
                </tr>

                <tr>
                    <th>Section_Three Image</th>
                    <td>
                        <img class="w-50" src="{{ asset('assets/images/page/' . $page?->section_3_image) }}"
                            alt="{{ $page->section_3_title }}">
                    </td>
                </tr>
                <tr>
                    <th>Section Three Content</th>
                    <td>{!! $page->section_3_content !!}</td>
                </tr>
                <tr>
                    <th>Section Three Button Url</th>
                    <td>{{ $page->section_3_button_url }}</td>
                </tr>
                <tr>
                    <th>Section Four Title</th>
                    <td>{{ $page->section_4_title }}</td>
                </tr>
                <tr>
                    <th>Section Four Image</th>
                    <td>
                        <img class="w-50" src="{{ asset('assets/images/page/' . $page?->section_4_image) }}"
                            alt="{{ $page->section_4_title }}">
                    </td>
                </tr>
                <tr>
                    <th>Section Four Content</th>
                    <td>{!! $page->section_4_content !!} </td>
                </tr>
                <tr>
                    <th>Section Four Button Url</th>
                    <td>{{ $page->section_4_button_url }} </td>
                </tr>

                <tr>
                    <th>Section Five Title</th>
                    <td>{{ $page->section_5_title }} </td>
                </tr>
                <tr>
                    <th>Section Five Image</th>
                    <td>
                        <img class="w-50" src="{{ asset('assets/images/page/' . $page?->section_5_image) }}"
                            alt="{{ $page->section_5_image }}">
                    </td>
                </tr>
                <tr>
                    <th>Section Five Content</th>
                    <td>{!! $page->section_5_content !!} </td>
                </tr>
                <tr>
                    <th>Section Seven Heading</th>
                    <td>{{ $page->section_7_heading }} </td>
                </tr>

                <tr>
                    <th>Section Seven Subheading</th>
                    <td>{{ $page->section_7_subheading }} </td>
                </tr>

                <tr>
                    <th>Section Six Content</th>
                    <td>{!! $page->section_6_content !!} </td>
                </tr>
                <tr>
                    <th>Section Seven Image</th>
                    <td>
                        <img src="{{ asset('assets/images/page/' . $page?->section_7_image) }}"
                            alt="{{ $page->section_7_image }}">
                    </td>
                </tr>
                <tr>
                    <th>Section Seven Button Url</th>
                    <td>{{ $page->section_7_book_button_url }} </td>
                </tr>
                <tr>
                    <th>Section Seven Qoute Button Url</th>
                    <td>{{ $page->section_7_qoute_button_url }} </td>
                </tr>

                <tr>
                    <th>section_8_1_heading</th>
                    <td>{{ $page->section_8_1_heading }} </td>
                </tr>
                <tr>
                    <th>section_8_1_text</th>
                    <td>{!! $page->section_8_1_text !!} </td>
                </tr>

                <tr>
                    <th>section_8_2_heading</th>
                    <td>{{ $page->section_8_2_heading }} </td>
                </tr>
                <tr>
                    <th>section_8_2_text</th>
                    <td>{!! $page->section_8_2_text !!} </td>
                </tr>

                <tr>
                    <th>section_8_3_heading</th>
                    <td>{{ $page->section_8_3_heading }} </td>
                </tr>
                <tr>
                    <th>section_8_3_text</th>
                    <td>{!! $page->section_8_3_text !!} </td>
                </tr>

                <tr>
                    <th>section_8_4_heading</th>
                    <td>{{ $page->section_8_4_heading }} </td>
                </tr>
                <tr>
                    <th>section_8_4_text</th>
                    <td>{!! $page->section_8_4_text !!} </td>
                </tr>

                <tr>
                    <th>section_9_heading</th>
                    <td>{{ $page->section_9_heading }} </td>
                </tr>
                <tr>
                    <th>section_9_text</th>
                    <td>{!! $page->section_9_text !!} </td>
                </tr>
                <tr>
                    <th>why_choose_us</th>
                    <td>{!! $page->why_choose_us !!} </td>
                </tr>

                <tr>
                    <th>why_choose_button_url</th>
                    <td>{{ $page->why_choose_button_url }} </td>
                </tr>

                <tr>
                    <th>content</th>
                    <td>{!! $page->content !!} </td>
                </tr>

                <tr>
                    <th>created_at</th>
                    <td>{{ Carbon\Carbon::parse($page->created_at)->format('d-M-Y') }} </td>
                </tr>

                <tr>
                    <th>updated_at</th>
                    <td>{{ $page->created_at == $page->updated_at ? 'Not updated yet' : Carbon\Carbon::parse($page->updated_at)->format('d-M-Y') }}
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

@endsection
