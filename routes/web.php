<?php

Route::get('/', 'HomeController@index')->name('dashboard');
Route::resource('penduduk', 'PendudukController');
Route::resource('bantuan', 'BantuanController');
Route::get('bantuan/{bantuan}/tambah-peserta', 'BantuanController@tambahPeserta')->name('bantuan.tambah_peserta');
Route::get('bantuan/{data}/hapus-data-bantuan', 'BantuanController@hapusDataBantuan')->name('bantuan.hapus_data');
Route::get('backup', 'BackupController@index')->name('backup.index');
Route::post('backup/download', 'BackupController@download')->name('backup.download');
Route::post('backup/restore', 'BackupController@restore')->name('backup.restore');
