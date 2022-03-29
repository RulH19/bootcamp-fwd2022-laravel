<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //untuk mendeklarasikan table
    public $table = 'type_user';

    //field ini harus di isi tipe data date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //mendeklarasikan fillable
    protected $fillable =[
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    //membuat function berdasarkan tabel yang di tuju 
    public function detail_user(){
        //mendeklarasikan tipe dari table
        return $this->hasMany('App\Models\ManagementAccess\DetailUser','type_user_id');
        //memberikan parameter pertama lokasi dari tabel yang di tuju dan parameter yang kedua memerikan parameter tujuan field yang di tuju
        
    }
}
