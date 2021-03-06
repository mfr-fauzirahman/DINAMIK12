<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home/welcome';
$route['404_override'] = 'msg/message_404';
$route['translate_uri_dashes'] = FALSE;
$route['acara'] = 'home/acara'; 
$route['lomba'] = 'home/lomba'; 
$route['berita'] = 'home/berita'; 
$route['galeri'] = 'home/galeri';
$route['akun'] = 'home/akun'; 
$route['info'] = 'home/info';
$route['berita/detail/(:num)']='home/berita/detail/$1';
$route['berita/page/(:num)']='home/berita/page/$1';
$route['berita/category/(:any)']='home/berita/category/$1';
$route['akun/failedlog'] = 'home/akun/index/1';
$route['akun/success'] = 'home/akun/index/2';
$route['akun/success2'] = 'home/akun/index/5';
$route['akun/success3'] = 'home/akun/index/6';
$route['akun/failedreg'] = 'home/akun/index/3';
$route['akun/failedact'] = 'home/akun/index/4';
$route['akun/masuk'] = 'home/akun/index/0/masuk';
$route['akun/daftar/sekolah'] = 'home/akun/index/0/daftarsekolah';
$route['akun/daftar/umum'] = 'home/akun/index/0/daftarumum';
$route['akun/lupa/sandi'] = 'home/akun/index/0/lupapass';
$route['info/success'] = '/home/info/index/1';
$route['pendaftaran'] = 'home/pendaftaran'; 
$route['maintenance'] = 'msg/maintenance';
$route['info/view/lokasi'] = 'msg/message_404';
$route['info/view/sponsor'] = 'msg/message_404';
$route['lomba/view/(:any)'] = 'home/lomba/view/$1'; 
$route['acara/view/(:any)'] = 'home/acara/view/$1'; 
$route['info/view/(:any)'] = 'home/info/view/$1'; 
