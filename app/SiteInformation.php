<?php

namespace App;

use App\Traits\StoreImage;
use Illuminate\Database\Eloquent\Model;

class SiteInformation extends Model
{
    use StoreImage;

    protected $fileParamName = 'logo';

    protected $storeFileName = '';

    protected $storeFileNameAsUploadName = '';

    protected $storagePath = 'logo';

    protected $imageFieldName = 'logo';

    protected $table = 'site_information';

    public $timestamps = true;

    protected $fillable = ['site_name', 'meta_description'];

}
