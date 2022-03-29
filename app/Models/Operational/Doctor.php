<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //untuk mendeklarasikan table
    public $table = 'doctor';

    //field ini harus di isi tipe data date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //mendeklarasikan fillable
    protected $fillable =[
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
     //membuat function berdasarkan tabel yang berhubungan dengan hasmany
     public function specialist(){
        //mendeklarasikan tipe dari table
        return $this->belongsTo('App\Models\MasterData\Specialist','specialist_id','id');
        //mendeklarasikan belongsto sebagai hubungan dengan hasmay dengan 3 paramater
        // 1. lokasi path tabel berada, 2. field dari path tujuan, 3. field yang akan di hubungkan dengan field path
        

    }
    public function appointment(){
        return $this->hasMany('App\Models\Operational\Appointment','doctor_id');
    }
}
