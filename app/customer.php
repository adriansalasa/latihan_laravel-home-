<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
 	protected $fillable = ['Nic', 'nama_lengkap', 'nama_panggilan', 'email', 'alamat', 'createUser', 'updateUser'];
}
