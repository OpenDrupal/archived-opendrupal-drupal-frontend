<?php

/**
 * @file
 * Content definition for blocks.
 * @see opendrupal_agency_content_create_blocks()
 */

$blocks[] = array(
  'content' => array(
    'info' => 'Footer',
    'type' => 'basic',
    'body' => array(
      'value' => '<div class="row">
  <div class="col-md-4">
    <span class="copyright">Copyright © Your Website 2015</span>
  </div>
  <div class="col-md-4">
    <ul class="list-inline social-buttons">
      <li><a href="#"><i class="fa fa-twitter"></i></a>
      </li>
      <li><a href="#"><i class="fa fa-facebook"></i></a>
      </li>
      <li><a href="#"><i class="fa fa-linkedin"></i></a>
      </li>
    </ul>
  </div>
  <div class="col-md-4">
    <ul class="list-inline quicklinks">
      <li><a href="#">Privacy Policy</a>
      </li>
      <li><a href="#">Terms of Use</a>
      </li>
    </ul>
  </div>
</div>',
      'format' => 'raw',
    ),
  ),
  'instance' => array(
    'id' => 'opendrupal_agency_agency_footer',
    'region' => 'footer',
    'theme' => 'opendrupal_agency',
    'weight' => 0,
    'settings' => array(
      'label' => 'Footer',
      'label_display' => 0,
      'status' => 1,
    ),
  ),
);
