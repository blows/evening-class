<?php

return function($site, $pages, $page) {

  // get all posts
  $posts = $page->children()
                ->visible()
                ->flip();
  $count = $posts->count();

  // check if the request is an Ajax request and if the limit and offset keys are set
  if(r::ajax() && get('offset') && get('limit')) {

    // convert limit and offset values to integer
    $offset = intval(get('offset'));
    $limit  = intval(get('limit'));

    // limit projects using offset and limit values
    $posts = $posts->offset($offset)->limit($limit);

    // check if there are more projects left
    $more = $count > $offset + 1;

  // otherwise set the number of projects initially displayed
  } else {

    $offset   = 0;
    $limit    = 8;
    $posts = $posts->limit($limit);

  }

  return compact('offset', 'limit', 'posts', 'more');

};
