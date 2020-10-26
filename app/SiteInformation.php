<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteInformation extends Model
{
    protected $table = 'site_information';

    public $timestamps = true;

    protected $fillable = ['site_name', 'meta_description'];

}
