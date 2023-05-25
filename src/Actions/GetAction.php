<?php

namespace Codeholic\Advertisement\Actions;

use App\Core\Actions\CoreAction;
use Codeholic\Advertisement\Models\Advertisement;

class GetAction extends CoreAction
{
    public function handle()
    {
        return Advertisement::get();
    }
}
