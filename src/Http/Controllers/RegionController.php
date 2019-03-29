<?php

namespace Yiche\Region\Http\Controllers;

use App\Http\Controllers\Controller;

class RegionController extends Controller
{
    public function all(\Yiche\Region\Region $region)
    {
        return $region->getAllFormatTree();
    }
}