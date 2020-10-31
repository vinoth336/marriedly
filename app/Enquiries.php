<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enquiries extends Model
{
    use SoftDeletes;

    protected $table = 'enquiries';

    protected $fillable = ['name', 'phone_no', 'email', 'subject', 'message', 'status'];


    public function getCreatedAtAttribute($value)
    {
        return date('Y-m-d H:i', strtotime($value));
    }

}
