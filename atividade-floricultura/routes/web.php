<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


  Route::get('servicos/{id}/{cidade}', function ($id,$cidade) {
    return "O serviço do ".$id." é muito bom. Ele vive em ".$cidade.".";
  });
  Route::get('dados/{nome}/{cpf}/{rg}/{cep}', function ($nome,$cpf,$rg,$cep) {
    return nl2br("O nome dela é ".$nome.".\nEstá registrada sob o cpf: ".$cpf.".
    Seu rg é ".$rg.".\nE reside no cep: ".$cep.".");
  });
  Route::get('hi', function () {
    return "Hello World!";
  });

  // Route::get('/', function () {
  //     return view('welcome');
  // });
