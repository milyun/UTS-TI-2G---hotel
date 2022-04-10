<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Kamar as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table='kamar';
    protected $primaryKey = 'id_kamar';

    protected $fillable = [
        'no_kamar',
        'tipe',
        'fasilitas',
        'harga',
        'status',
    ];
}
