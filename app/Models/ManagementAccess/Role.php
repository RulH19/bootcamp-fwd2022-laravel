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
    public function role_user(){
        return $this->hasMany('App\Models\ManagementAccess\RoleUser','role_id');
    }
    public function permision_role(){
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole','role_id');
    }
}
