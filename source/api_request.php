<?
	// function get bookings by id
	$generated_token = "xnzAmiMWDSMg2yfJv6Zj7Ro0oT5Qjk94OVJvjf0u";
	$booking_id = 13;
	$base_url = "http://staging.api.hng.tech/bookings/?booking_id=";
	function getBookingApi($id, $token)
	{
		$curl = $curl_init();

		$endpoint = $base_url + $id + "&" + $access_token + '=' + $token;
		$response = file_get_contents($endpoint);

		$response = json_decode($response);

		var_dump($response);
	}	

	getBookingApi($booking_id, $generated_token);

?>