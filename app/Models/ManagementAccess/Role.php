<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //untuk mendeklarasikan table
    public $table = 'role';

    //field ini harus di isi tipe data date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //mendeklarasikan fillable
    protected $fillable =[
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
