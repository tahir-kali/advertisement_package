<?php

namespace Codeholic\Advertisement\Actions;

use App\Core\Actions\CoreAction;
use Codeholic\Advertisement\Models\Advertisement;

class GetOneAdvertisementAction extends CoreAction
{
    public function handle(Advertisement $advertisement)
    {

        return Advertisement::where('id',$advertisement->id)->first();
    }
}
