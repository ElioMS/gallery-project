<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\SeoRoutes;

class SeoController extends Controller
{

	static function saveNewRoute($path) {
		SeoRoutes::create([
			'path' => $path
		]);

	}

    static function checkIfRouteExists($path) {
    	$route = SeoRoutes::wherePath($path)->first();

    	if (!$route) {
    		self::saveNewRoute($path);
    		return true;
    	} else {
    		return false;
    	}
    }
}
