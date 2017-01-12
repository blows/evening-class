<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: true
  template: bulletin
files:
  sortable: true
  size: 153600
info:
  label: Info
  type: info
  text: >
    Select an image in Home Image to change the background image of the Home page.

    To create a bulletin, click the **+** by **Pages**. All visible Bulletin Pages will appear on the Home page.
fields:
  title:
    label: Title
    type:  text
  homeImage:
    label: Home Image
    type: image
