<?php if(!defined('KIRBY')) exit ?>

title: Posts
options:
  preview: true
  status: false
  template: false
  url: false
  delete: false
pages:
  template: post
  num: date
  sort: flip
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Description
    type: textarea
    required: true
