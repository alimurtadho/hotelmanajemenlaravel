<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       
         $check_table = Schema::hasTable('hotel-vue');
         if($check_table){
             $set = $hotel-vue::find(1);
            config(['settings.nama_hotel' => $set->nama_hotel,
                    'settings.nama_perusahaan' => $set->nama_perusahaan,
                    'settings.alamat_jalan' => $set->alamat_jalan,
                    'settings.alamat_kabupaten' => $set->alamat_kabupaten,
                    'settings.alamat_provinsi' => $set->alamat_provinsi,
                    'settings.nomor_telp' => $set->nomor_telp,
                    'settings.nomor_fax' => $set->nomor_fax,
                    'settings.website' => $set->website,
                    'settings.email' => $set->email]);
        }

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
