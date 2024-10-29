<?php

use Ebess\AdvancedNovaMediaLibrary\Http\Controllers\DownloadMediaController;
use Ebess\AdvancedNovaMediaLibrary\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;

Route::get('/download/{media}', [config('nova_media_library.download-controller'), 'show']);

Route::get('/media', [MediaController::class, 'index']);
