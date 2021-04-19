<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleats extends Model
{
    public $timestamps = false; //solución para el error Column not found: 1054 Unknown column updated_at in ‘field list’
    use HasFactory;

    protected $primaryKey = 'id';
    protected $guarded = [''];
}
