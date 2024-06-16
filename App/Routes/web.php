<?php
$cms->router->get('/','Home@index');

//Login Page
$cms->router->get('/giris','Auth@Index');
//Login Post
$cms->router->post('/giris','Auth@Login');
//LogOut Page
$cms->router->get('/cikis','Auth@Logout');

//Müşteriler

$cms->router->mount('/musteri',function() use ($cms){
    $cms->router->get('/', 'Customer@Index');
    $cms->router->get('/ekle', 'Customer@Add');
    $cms->router->get('/guncelle/([0-9]+)', 'Customer@Edit');
});

//Projeler
$cms->router->mount('/proje',function() use ($cms){
    $cms->router->get('/', 'Projects@Index');
    $cms->router->get('/ekle', 'Projects@Add');
    $cms->router->get('/guncelle/([0-9]+)', 'Projects@Edit');
});
