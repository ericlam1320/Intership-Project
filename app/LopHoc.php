<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
	protected $table = 'lophoc';
	public $incrementing = false;
	public $timestamps = false;
	public $primaryKey = 'MaLop';

    public function GiangVien(){
    	return $this->belongsTo('App\GiangVien', 'MaGV', 'id');
    }
}
