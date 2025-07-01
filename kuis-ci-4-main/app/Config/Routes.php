<?php

$routes->get('/', 'Main::index');
$routes->match(['get'], 'home/tambah', 'Home::tambah');


