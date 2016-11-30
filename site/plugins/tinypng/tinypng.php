<?php
kirby()->hook('panel.file.upload', function( $page ) {
	$path = kirby()->roots()->content();

	$key = "bh5rj0TmE2mx48SwyMyD-G1S3cOtDjUC";
	$input = $page->dir() . '/' . $page->filename();
	$output = $page->dir() . '/' . $page->name() . '-min' . '.' . $page->extension();

	tinypng_image_compressor( $key, $input, $input );
});


function tinypng_image_compressor( $key, $input, $output ) {
	$request = curl_init();
	curl_setopt_array($request, array(
		CURLOPT_URL => "https://api.tinify.com/shrink",
		CURLOPT_USERPWD => "api:" . $key,
		CURLOPT_POSTFIELDS => file_get_contents($input),
		CURLOPT_BINARYTRANSFER => true,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_HEADER => true,
		CURLOPT_CAINFO => __DIR__ . "/cacert.pem",
		CURLOPT_SSL_VERIFYPEER => true
	));

	$response = curl_exec($request);
	if (curl_getinfo($request, CURLINFO_HTTP_CODE) === 201) {
		$headers = substr($response, 0, curl_getinfo($request, CURLINFO_HEADER_SIZE));
		foreach (explode("\r\n", $headers) as $header) {
			if (strtolower(substr($header, 0, 10)) === "location: ") {
				$request = curl_init();
				curl_setopt_array($request, array(
					CURLOPT_URL => substr($header, 10),
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_CAINFO => __DIR__ . "/cacert.pem",
					CURLOPT_SSL_VERIFYPEER => true
				));
				file_put_contents($output, curl_exec($request));
			}
		}
	} else {
		print(curl_error($request));
		print("Compression failed");
	}
}
