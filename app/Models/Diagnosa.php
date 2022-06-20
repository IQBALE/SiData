<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;

    protected $table = 'diagnosas';

    protected $fillable = ['skor_1', 'skor_2','skor_3', 'skor_4','skor_5', 'skor_6', 'skor_7','skor_8', 'skor_9','skor_10', 'skor_11', 'skor_12','skor_13', 'skor_14','skor_15', 'skor_16', 'skor_17','skor_18', 'skor_19','skor_20','skor_21','skor_22','skor_23','skor_24','hasil', 'persentase','diagnosa', 'id_user'];
}
