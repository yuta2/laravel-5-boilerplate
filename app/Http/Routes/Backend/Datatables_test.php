<?php
/*
 * Change Route:: from controller to get
 */
Route::get('datatables_test', 'Datatables_testController@getIndex')->name('datatables_test.data');
Route::get('datatables_test.data', 'Datatables_testController@anyData')->name('datatables_test');

//Route::controller('datatables_test', 'Datatables_testController', [
//    'anyData'  => 'datatables_test',
//    'getIndex' => 'datatables_test.data',
//]);
