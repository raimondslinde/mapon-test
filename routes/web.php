<?php

use App\Models\AVLData;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
//    $hexDataService = new \App\Services\HexDataService();
//    $lastOffset = \App\Models\SchedulerLog::lastOffset();
//    $array = $hexDataService->getEndpointData('https://mapon.com/integration/', '6BD030BBB9E0E34C63672757DC065B8B', $lastOffset >= 99 ? 0 : $lastOffset + 1);
//
//    foreach ($array as $data) {
//        echo $data;
//        $decoder = new \App\Services\TeltonikaDecoder($data);
//        $decoder->decodeAndSaveData();
//        dd($decoder->getArrayOfAllData());
//    }

//    $item = \App\Models\AVLData::first();
//    return implode(', ', array_map(fn ($x) => array_keys($x)[0] . ":" . $x[array_keys($x)[0]], $item->io_data));

    return view('app');
});
