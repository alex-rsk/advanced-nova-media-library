<?php

use Ebess\AdvancedNovaMediaLibrary\Http\Controllers\DownloadMediaController;
use Ebess\AdvancedNovaMediaLibrary\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;

Route::get('/download/{media}', [config('nova-media-library.download-controller-class'), 'show']);

Route::get('/media', [MediaController::class, 'index']);
