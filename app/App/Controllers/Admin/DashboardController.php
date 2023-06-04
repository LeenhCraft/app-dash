<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class DashboardController extends Controller
{
    public function index($request, $response, $args)
    {
        // dep($_SESSION,1);
        // return $response;
        return $this->render($response, 'App.Dashboard.dashboard', [
            'titulo_web' => 'Dashboard',
            "url" => $request->getUri()->getPath()
        ]);
    }
}
