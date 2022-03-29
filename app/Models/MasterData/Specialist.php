<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //untuk mendeklarasikan table
    public $table = 'specialist';

    //field ini harus di isi tipe data date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //mendeklarasikan fillable
    protected $fillable =[
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function doctor(){
        //mendeklarasikan tipe dari table
        return $this->hasMany('App\Models\Operational\Doctor','specialist_id');
        //memberikan parameter pertama lokasi dari tabel yang di tuju dan parameter yang kedua memerikan parameter tujuan field yang di tuju
        
    }
}
