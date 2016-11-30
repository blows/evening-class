<?php if(!defined('KIRBY')) exit ?>

title: Post
pages: false
files:
  sortable: true
  size: 102400
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type: date
    default: today
    width: 1/2
    required: true
  author:
    label: Author
    type: user
    width: 1/2
  coverimage:
    label: Cover Image
    type: select
    options: images
    width: 1/2
    required: true
  category:
    label: Category
    type: select
    width: 1/2
    options:
      reading: Reading
      project: Project
      reference: Reference
      event: Event
    required: true
  tags:
    label: Tags
    type: tags
    lowercase: true
  text:
    label: Text
    type: textarea
    required: true
