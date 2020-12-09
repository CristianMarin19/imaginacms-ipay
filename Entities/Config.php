<?php

namespace Modules\Ipay\Entities;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Bcrud\Support\Traits\CrudTrait;
use Modules\Ipay\Entities\Category;
use Modules\Ipay\Entities\Feature;

class Config extends Model
{
    use CrudTrait;

    protected $table = 'ipay__config';

    protected $fillable = [
            'title',
            'merchantid',
            'accountid',
            'apikey',
            'gatewayurl',
            'mode',
            'replyurl',
            'confirmationurl',
            'options'
        ];

    protected $fakeColumns = ['options'];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
    */

    protected $casts = [
        'options' => 'array'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'ipay__config__category');
    }



}
