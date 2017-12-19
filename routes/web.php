<?php

$router->get('/', function() use ($router) {


    return view('candidate');
});



$router->group(['prefix' => 'api/v1'], function($router)
{
    $router->get('candidate','CandidateController@index');
    $router->get('candidate/{id}','CandidateController@getCandidate');
    $router->post('candidate','CandidateController@createCandidate');
    $router->put('candidate/{id}','CandidateController@updateCandidate');
    $router->delete('candidate/{id}','CandidateController@deleteCandidate');
});