<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prk extends Model
{
protected $table = "prk";
public $timestamps= false;
protected $fillable = ['no_prk','nama_prk','pagu','id_fungsi','nilai_investasi','nilai_disbursement'];
}
