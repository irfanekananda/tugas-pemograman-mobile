<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MahasiswaWithKelasController::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/jqm_form', 'Mahasiswa::jqm_form');

// list barang group
$routes->get('/list_barang_group', 'BarangGroupController::index');
$routes->post('/list_barang_group', 'BarangGroupController::create');
$routes->get('/edit_barang_group/(:num)', 'BarangGroupController::edit_index/$1');
$routes->post('/edit_barang_group/(:num)', 'BarangGroupController::edit_post/$1');
$routes->get('/delete_barang_group/(:num)', 'BarangGroupController::delete_post/$1');

//list kelas mhs
$routes->get('/list_kls_mhs', 'KelasMahasiswaController::index');
$routes->post('/list_kls_mhs', 'KelasMahasiswaController::create');
$routes->get('/edit_kls_mhs/(:num)', 'KelasMahasiswaController::edit_index/$1');
$routes->post('/edit_kls_mhs/(:num)', 'KelasMahasiswaController::edit_post/$1');
$routes->get('/delete_kls_mhs/(:num)', 'KelasMahasiswaController::delete/$1');

// list mahasiswa with kelas
$routes->get('/list_mhs_with_kls', 'MahasiswaWithKelasController::index');
$routes->post('/list_mhs_with_kls', 'MahasiswaWithKelasController::create');
$routes->get('/edit_mhs_with_kls/(:num)', 'MahasiswaWithKelasController::edit_index/$1');
$routes->post('/edit_mhs_with_kls/(:num)', 'MahasiswaWithKelasController::edit_post/$1');
$routes->get('/delete_mhs_with_kls/(:num)', 'MahasiswaWithKelasController::delete/$1');

// list mahasiswa old
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa/(:num)', 'Mahasiswa::read/$1');
$routes->post('/mahasiswa', 'Mahasiswa::create');
$routes->put('/mahasiswa/(:num)', 'Mahasiswa::update/$1');

$routes->get('/mahasiswa/update/(:num)', 'Mahasiswa::update_get/$1');
$routes->post('/mahasiswa/update/(:num)', 'Mahasiswa::update_post/$1');

$routes->get('/mahasiswa/delete/(:num)', 'Mahasiswa::delete_get/$1');
$routes->delete('/mahasiswa/(:num)', 'Mahasiswa::delete/$1');


// list jadwal
$routes->get('/list_jadwal','JadwalController::index');
$routes->post('/list_jadwal','JadwalController::create');
$routes->get('/list_jadwal_edit/(:num)','JadwalController::edit_index/$1');
$routes->post('/list_jadwal_edit/(:num)','JadwalController::edit_post/$1');
$routes->get('/list_jadwal_delete/(:num)','JadwalController::delete/$1');

