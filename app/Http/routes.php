<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]

);
Route::get('login', [
      'uses' => 'Auth\AuthController@getLogin',
      'as' => 'login'
]);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', [
  'uses' => 'Auth\AuthController@getLogout',
  'as' => 'logout'
]);

// Registration routes...
Route::get('register', [
    'uses'=> 'Auth\AuthController@register',
  'as' => 'register'
  ]);
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

//sello de verificacion
Route::get('sello', [
  'middleware' => 'auth',
  'uses'=>'Negocio\NegocioController@indexSello',
  'as' => 'sello'
  ]);
Route::post('sello', 'Negocio\NegocioController@confirmar');

Route::get('newpost', [
  'middleware' => 'auth',
  'uses' => 'Solicitud\SolicitudController@index',
  'as' => 'newpost'
  ]);
Route::post('newpost', 'Solicitud\SolicitudController@create');

Route::get('notices', [
  'middleware' => 'auth',
  'uses' => 'Solicitud\SolicitudController@show',
  'as' => 'notices'
  ]);


  Route::post('propuesta', 'Propuesta\PropuestaController@create');
  Route::get('propuesta', [
    'middleware' => 'auth',
    'uses' => 'Propuesta\PropuestaController@index',
    'as' => 'propuesta'
    ]);


    Route::get('subasta', [
      'middleware' => 'auth',
      'uses' => 'Propuesta\PropuestaController@show',
      'as' => 'subasta'
      ]);

      Route::get('subasta/ofertas/{id}', [
        'middleware' => 'auth',
        'uses' => 'Propuesta\PropuestaController@showPropuesta',
        'as' => 'ofertas'
        ]);


        Route::get('nuevoresiduo', [
          //'middleware' => 'auth',
          'uses' => 'Residuo\ResiduoController@index',
          'as' => 'nuevoresiduo'
          ]);
          Route::post('nuevoresiduo', 'Residuo\ResiduoController@create');

          Route::post('aceptar', 'Negocio\NegocioController@create');
          Route::get('aceptar', [
            'middleware' => 'auth',
            'uses' => 'Negocio\NegocioController@index',
            'as' => 'aceptar'
            ]);
            Route::get('negocios/{id}', [
              'middleware' => 'auth',
              'uses' => 'Negocio\NegocioController@indexN',
              'as' => 'negocio'
              ]);
              Route::get('negocios', [
                'middleware' => 'auth',
                'uses' => 'Negocio\NegocioController@index',
                'as' => 'negocios'
                ]);
                Route::get('procesos/{id}', [
                  'middleware' => 'auth',
                  'uses' => 'Negocio\NegocioController@indexP',
                  'as' => 'procesos'
                  ]);
                  Route::get('procesos', [
                    'middleware' => 'auth',
                    'uses' => 'Negocio\NegocioController@indexPr',
                    'as' => 'procesos'
                    ]);
                      Route::post('fasei', 'Negocio\NegocioController@fasei');
                      Route::get('fasei', [
                        'middleware' => 'auth',
                        'uses' => 'Negocio\NegocioController@indexP',
                        'as' => 'fasei'
                        ]);

                        Route::get('procesos/s/perfil/{id}', [
                          'middleware' => 'auth',
                          'uses' => 'Negocio\NegocioController@perfil',
                          'as' => 'perfil'
                          ]);
                Route::get('negocios/r/perfil/{id}', [
                            'middleware' => 'auth',
                            'uses' => 'Negocio\NegocioController@perfilr',
                            'as' => 'perfil'
                            ]);

                            Route::get('informe', [
                                        'middleware' => 'auth',
                                        'uses' => 'Documentos\PdfController@index',
                                        'as' => 'informe'
                                        ]);

                                        Route::get('informes/mis/{id}', [
                                                    'middleware' => 'auth',
                                                    'uses' => 'Documentos\PdfController@create',
                                                    'as' => 'informes'
                                                    ]);
