<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class _isi_pulsa_ extends Model
{
    protected $table = '_isi__pulsa_';
    protected $fillable = ['No_Telp', 'Nm_Rek', 'Nm_Pemilik', 'Nm_Paket', 'Hrg_Paket'];
}
