<?php

use App\Jobs\CompanyCreatedJob;
use Illuminate\Support\Facades\Route;

Route::get('/teste', function () {
    CompanyCreatedJob::dispatch('testestestes@email.com')->onQueue('queue_email');

    return response()->json(['message' => 'success']);
});

Route::get('/', function () {
    return response()->json(['message' => 'success']);
});
