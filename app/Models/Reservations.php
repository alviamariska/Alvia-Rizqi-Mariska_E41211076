<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;

    protected $table = 'reservations';
    protected $primaryKey = 'id_pelanggan';

    public $incrementing = false;
    public $timastamps = true;
}
