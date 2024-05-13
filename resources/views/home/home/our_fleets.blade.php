@extends('theme.layouts.app')
@section('title', 'Our Fleets page')
@section('content')
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12 content car-listing" id="fleets-table"></div>
    </div>
</div>
@endsection

@push('script')
<script>
$(document).ready(function() {
    $('#fleets-table').on('click', '.pagination a', function(e) {
        e.preventDefault();
        const page = $(this).attr('href').split('page=')[1];
        loadItems(page);
    });

    function loadItems(page) {
        $.ajax({
            url: '/get-our-fleets-data?page=' + page,
            type: 'get',
            datatype: 'html',
            success: function(data) {
                $('#fleets-table').html(data);
            },
        });
    }

    function findFleets() {
        $.ajax({
            url: '/get-our-fleets-data',
            type: 'GET',
            dataType: 'html',
            success: function(response) {
                $('#fleets-table').html(response);
            },
            error: function(response) {
                if (response.status === 422) {
                    // Display validation errors using Toastr
                    var errors = response.responseJSON.error;
                    $.each(errors, function(key, value) {
                        toastr.error(value[0], 'Validation Error', {
                            closeButton: true,
                            timeOut: 5000
                        });
                    });
                }
            }
        });
    };

    findFleets();
});
</script>
@endpush