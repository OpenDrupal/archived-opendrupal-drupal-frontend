<?php
/**
 * @file
 * Contains node data for Our Team nodes.
 *
 * @see opendrupal_agency_content_create_nodes
 */

$nodes = array();
$nodes[] = array(
  'title' => 'Kay Garland',
  'status' => 1,
  'promote' => 0,
  'sticky' => 0,
  'type' => 'team',
  'field__subtitle' => 'Lead Designer',
  'field_team_image' => $files['team/1.jpg'],
  'field__font' => array(
    'value' => '<ul class="list-inline social-buttons">
  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
</ul>',
    'format' => 'raw',
  ),
  'uid' => 1,
);

$nodes[] = array(
  'title' => 'Larry Parker',
  'status' => 1,
  'promote' => 0,
  'sticky' => 0,
  'type' => 'team',
  'field__subtitle' => 'Lead Marketer',
  'field_team_image' => $files['team/2.jpg'],
  'field__font' => array(
    'value' => '<ul class="list-inline social-buttons">
  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
</ul>',
    'format' => 'raw',
  ),
  'uid' => 1,
);

$nodes[] = array(
  'title' => 'Diana Pertersen',
  'status' => 1,
  'promote' => 0,
  'sticky' => 0,
  'type' => 'team',
  'field__subtitle' => 'Lead Developer',
  'field_team_image' => $files['team/3.jpg'],
  'field__font' => array(
    'value' => '<ul class="list-inline social-buttons">
  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
</ul>',
    'format' => 'raw',
  ),
  'uid' => 1,
);
