<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //untuk mendeklarasikan table
    public $table = 'permission_role';

    //field ini harus di isi tipe data date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //mendeklarasikan fillable
    protected $fillable =[
        'permission_id',
        'role_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function permission(){
        return $this->belongsTo('App\Models\ManagementAccess\Permission','permission_id','id');
    }
    public function role(){
        return $this->belongsTo('App\Models\ManagementAccess\Role','role_id','id');
    }
}
