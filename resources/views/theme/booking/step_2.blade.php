<div class="row mt-2">
    <form action="{{ route('final-step-store-booking') }}" method="POST">
        @csrf
        @include('theme.booking.flight_info')
    </form>
</div>