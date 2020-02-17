<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class metode_lelangs extends Model
{

    protected $table = "metode_lelang";
    public $timestamps= false;
    protected $primaryKey = 'id_metode';
    protected $fillable = ['id_metode','no_rks','no_rab','nama_pekerjaan','metode','vendor'];



}
