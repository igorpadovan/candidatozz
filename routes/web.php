<?php

// use App\Models\Candidate;

// $router->get('/', function() use ($router) {

//     $candidates = Candidate::query()->get()->all();

//     return view('candidate', ['candidates' => $candidates]);
// });

// $router->get('/{id}', function($id) use ($router) {
//     $candidate = Candidate::query()->findOrFail($id);

//     return view('candidate', ['candidate' => $candidate]);
// });



$router->group(['prefix' => 'api/v1'], function($router)
{
    $router->get('candidate','CandidateController@index');
    $router->get('candidate/{id}','CandidateController@getCandidate');
    $router->post('candidate','CandidateController@createCandidate');
    $router->put('candidate/{id}','CandidateController@updateCandidate');
    $router->delete('candidate/{id}','CandidateController@deleteCandidate');
});