

<section class="top-body p-5" style="background-image: url({{asset('frontEnd/images/wp11403307.jpg')}});">
    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="booking-cta mt-5 text-light">
                    <h1>{{ $data['title'] }}</h1>
                    <p>{{ $data['short_details'] }}</p>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <div class="bg-white">
                    <h2 class="text-capitalize p-3 border-bottom">Top Life Trip Transportation</h2>
                    <div class="card">
                        <div class="card-body text-left">
                            <div class="booking-form bg-white mb-5">
                                <form class="row g-3" action="{{ route('front-booking-save') }}" method="POST">
                                    @csrf
                                    <table class="table" style="border-bottom: #fff;">
                                        <tbody>
                                            <tr>
                                                <td width="33.33%">
                                                    <label class="form-label" for="">Service</label>
                                                    <select name="service_id" id="service_id" class="form-control">
                                                        <option value="">Select Service </option>
                                                        @foreach($services as $service)
                                                        <option data-fare="{{ $service->fare->base_fare ?? 0 }}"
                                                            value="{{ $service->id }}">
                                                            {{ $service->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                                <td width="33.33%">
                                                    <label class="form-label" for="">Base Fare (Per KM)</label>
                                                    <input type="text" class="form-control" name="base_fare"
                                                        id="main_fare" readonly>
                                                </td>
                                            </tr>

                                            @if(!auth()->check())
                                            <tr>
                                                <td width="33.33%">
                                                    <label class="form-label" for="">Name</label>
                                                    <input type="text" class="form-control" name="name">
                                                </td>

                                                <td width="33.33%">
                                                    <label class="form-label" for="">Email</label>
                                                    <input type="email" class="form-control" name="email">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="33.33%">
                                                    <label class="form-label" for="">Address</label>
                                                    <input type="text" class="form-control" name="address">
                                                </td>

                                                <td width="33.33%">
                                                    <label class="form-label" for="">Phone</label>
                                                    <input type="number" class="form-control" name="phone">
                                                </td>
                                            </tr>
                                            @endif 
                                        </tbody>
                                    </table>

                                    <table class="table" style="border-bottom: #fff;">
                                        <tbody id="main-div">
                                        </tbody>
                                    </table>


                                    <input type="hidden" name="total_km" id="total_km">
                                    <input type="hidden" name="final_total" id="final_total">
                                    <table class="table table-bordered" id="api_details">
                                        <thead>
                                            <tr>
                                                <th>Pick Up Location </th>
                                                <th>Drop off Location </th>
                                                <th>Distance </th>
                                                <th>Duration</th>
                                                <th>Total Fare </th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pick_up">Pick Up Location </td>
                                                <td class="drop_off">Drop off Location </td>
                                                <td class="distance">Distance </td>
                                                <td class="duration">Duration</td>
                                                <td class="fare">Total Fare </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form><!-- End No Labels Form -->
                                <div id="result-container"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================================top-body section end here=======================-->