
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Invoice</title>
		<style>
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 10px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 15px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 20px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
		</style>
	</head>

	<body>
		<h1>{{ $general->business_name }}</h1>
		<h3>Premium Chauffeur Service Company</h3>
		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="{{ asset('assets/images/setting/'.$general->logo) }}" alt="{{ $general->business_name }}" />
								</td>

								<td>
                                ABN: 36151360502 <br>
                                Address: {{ $general->business_address }} <br>
                                Phone: {{ $general->business_number }} <br>
                                Email: {{ $general->business_email }} <br>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
                                    Invoice No. - {{ $data->invoice_no }} <br>
                                    Melbourne Limo Link  <br>
                                    Bsb 193-879 <br>
                                    ABC 487138959 <br>
								</td>

								<td>
                                    Name: {{ $data->client_name }} <br>
                                    Mobile: {{ $data->mobile_number }} <br>
                                    Email: {{ $data->client_email }} <br>
                                    Address: {{ $data->client_address }} <br>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="item">
                    <td>Pickup Date & Time</td>
                    <td>{{ $data->pick_up_date }} {{ $data->pick_up_time }}</td>
                </tr>

				<tr class="item">
                    <td>Servie Type </td>
                    <td>{{ $data->service_type }}</td>
				</tr>

				<tr class="item">
                    <td>Pickup Location </td>
                    <td>{{ $data->pick_up_location }}</td>
                </tr>
                <tr class="item">
                    <td>Drop off Location </td>
                    <td>{{ $data->drop_off_location }}</td>
                </tr>
                <tr class="item">
                    <td>Return Pickup </td>
                    <td>{{ $data->retun_pick_up }}</td>
                </tr>
                <tr class="item">
                    <td>Return Drop Off </td>
                    <td>{{ $data->return_drop_off }}</td>
                </tr>
                <tr class="item">
                    <td>No. of Passanger</td>
                    <td>{{ $data->no_of_passangers }}</td>
                </tr>
                <tr class="item">
                    <td>Luggage</td>
                    <td>{{ $data->luggage }}</td>
                </tr>
                
                <tr class="item">
                    <td>Vehicle Name</td>
                    <td>{{ $data->vehicle_type }}</td>
                </tr>
                <tr class="item">
                    <td>Estimated Fare </td>
                    <td>{{ $data->estimated_fare }}</td>
                </tr>
                <tr class="item">
                    <td>Otder Charge </td>
                    <td>{{ $data->otder_charge }}</td>
                </tr>
                <tr class="item">
                    <td>Baby Seat </td>
                    <td>{{ $data->baby_seat }}</td>
                </tr>
                <tr class="item">
                    <td>Extra Wait </td>
                    <td>{{ $data->extra_wait }}</td>
                </tr>
                <tr class="item">
                    <td>Late Night / Early Morning Pickup </td>
                    <td>{{ $data->late_early_charge }}</td>
                </tr>
                <tr class="item">
                    <td>Return Fare </td>
                    <td>00</td>
                </tr>
                <tr class="item">
                    <td>Total Witdout GST</td>
                    <td></td>
                </tr>
                <tr class="item">
                    <td> GST</td>
                    <td>{{ $data->gst }}</td>
                </tr>
                <tr class="item">
                    <td> Total With (GST)</td>
                    <td>{{ $data->invoice_total  }}</td>
                </tr>
			</table>
		</div>
	</body>
</html>
