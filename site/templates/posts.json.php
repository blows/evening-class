<?php

$html = '';

foreach($posts as $post) {

  // reuse the post snippet to create the HTML for each post
  // we need to set the third parameter to true, to return the
  // snippet content instead of echoing it
  $html .= snippet('post', compact('post'), true);

}

// add $html and $more to the $data array
$data['html'] = $html;
$data['more'] = $more;

// JSON encode the $data array
echo json_encode($data);
