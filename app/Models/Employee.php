<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // protected $table = 'tbl_Employee';
    // protected $primaryKey = emp_id;
    // public $timestamps = false;

    protected $fillable = [
        'fullname',
        'gender',
        'email',
        'tel',
        'age',
        'address',
        'avatar',
        'status'
    ];
}
