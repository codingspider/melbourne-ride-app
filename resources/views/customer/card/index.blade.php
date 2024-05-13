@extends('admin.layouts.app')
@section('title', 'Card List')
@section('content')
@include('modal.common')
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Card List </li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12">
                    <div class="card top-selling overflow-auto">

                        <div class="filter" style="padding-right: 25px;">
                            <a href="{{ route('credit-cards.create') }}" class="btn-sm btn btn-info btn_modal"><i class="bi bi-file-plus-fill"></i> Add New Card </a>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Card List </h5>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Card Holder </th>
                                        <th>Card Number </th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                    <tr>
                                        <th>{{ $loop->index +1 }}</th>
                                        <td>{{ $item->card_holder }}</td>
                                        <td>{{ $item->card_number }}</td>
                                        <td>{{ dateFormat($item->created_at) }}</td>
                                        <td>
                                            <div class="d-flex">
                                            <a href="{{ route('credit-cards.edit', $item->id) }}" class="btn-sm btn btn-secondary btn_modal me-2"><i class="bi bi-pencil"></i></a>
                                            <form action="{{ route('credit-cards.destroy', $item->id) }}" method="post" class="delete-form">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="show_confirm btn-sm btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </form>
                               
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div><!-- End Top Selling -->
            </div>
        </div>
    </div>
</section>
@endsection

