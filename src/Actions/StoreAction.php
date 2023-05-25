<?php

namespace Codeholic\Advertisement\Actions;

use App\Http\Requests\Params\StoreRequestParams;
use Codeholic\Advertisement\Models\Advertisement;

class StoreAction extends CoreAction
{
    public function handle(StoreRequestParams $params)
    {

       $ad = Advertisement::create([
           "title"=>$params->title,
           "description"=>$params->description,
           "price"=>$params->price,
           "category"=>$params->category,
           "is_active"=>$params->is_active
       ]);
       return $ad;
    }
}
