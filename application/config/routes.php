<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
// Do What: Show me the messages Url:             /messages           Verb: GET         Method: index

// Do What: Show view for creating a message Url: /messages/new       Verb: GET         Method: new
// Do What: Create messages Url:                  /messages           Verb: POST        Method: create
// Do What: Show details Url:                     /messages/:id       Verb: GET         Method: show

// Do What: Show view for updating: Url:          /messages/:id/edit  Verb: GET         Method: edit
// Do What: update message Url:                   /messages/:id       Verb: PUT/PATCH   Method: update

// Do What: Destroy Url:                          /messages/:id       Verb: DELETE      Method: destroy
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['assets/(:any)'] = 'assets/$1';
$route['ajaxs']['get'] = 'main/ajaxs';
$route['restfuls']['get'] = 'main/restfuls';
$route['notes']['post'] = 'main/create';
$route['notes']['get'] = 'main/notes_index';
$route['notes/(:num)']['post'] = 'main/update/$1';
$route['notes/(:num)']['delete'] = 'main/delete/$1';
