<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes, Notifiable;

    protected $table = 'employees';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = ['nik', 'name', 'email'];

}