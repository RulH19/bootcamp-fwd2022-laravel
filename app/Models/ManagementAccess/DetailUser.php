<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //untuk mendeklarasikan table
    public $table = 'detail_user';

    //field ini harus di isi tipe data date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //mendeklarasikan fillable
    protected $fillable =[
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    //membuat function berdasarkan tabel yang berhubungan dengan hasmany
    public function type_user(){
        //mendeklarasikan tipe dari table
        return $this->belongsTo('App\Models\MasterData\TypeUser','type_user_id','id');
        //mendeklarasikan belongsto sebagai hubungan dengan hasmay dengan 3 paramater
        // 1. lokasi path tabel berada, 2. field dari path tujuan, 3. field yang akan di hubungkan dengan field path
    }
    public function user(){
        //mendeklarasikan tipe dari table
        return $this->belongsTo('App\Models\User','user_id','id');
        //mendeklarasikan belongsto sebagai hubungan dengan hasmay dengan 3 paramater
        // 1. lokasi path tabel berada, 2. field dari path tujuan, 3. field yang akan di hubungkan dengan field path
    }
    

}
