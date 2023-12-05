<?php

// use Slim\App;
use Slim\Routing\RouteCollectorProxy;

// Controllers
use App\Controllers\Admin\CentinelaController;
use App\Controllers\Admin\DashboardController;
use App\Controllers\Admin\DataBaseController;
use App\Controllers\Admin\LoginAdminController;
use App\Controllers\Admin\MenusController;
use App\Controllers\Admin\PermisosController;
use App\Controllers\Admin\SubmenusController;
use App\Controllers\LogoutController;
use App\Middleware\AdminMiddleware;

// Middlewares
use App\Middleware\LoginAdminMiddleware;
use App\Middleware\PermissionMiddleware;
use App\Middleware\RemoveCsrfMiddleware;

$app->get('/admin/login', LoginAdminController::class . ':index')->add(new AdminMiddleware)->add(new RemoveCsrfMiddleware());
$app->post('/admin/login', LoginAdminController::class . ':sessionUser');

$app->group('/admin', function (RouteCollectorProxy $group) {
    $group->get("", DashboardController::class . ':index')->add(new RemoveCsrfMiddleware());
    $group->get("/logout", LogoutController::class . ':admin')->add(new RemoveCsrfMiddleware());

    $group->group('/menus', function (RouteCollectorProxy $group) {
        $group->get('', MenusController::class . ':index')->add(new RemoveCsrfMiddleware());
        $group->post('', MenusController::class . ':list');
        $group->post('/save', MenusController::class . ':store');
        $group->post('/update', MenusController::class . ':update');
        $group->post('/search', MenusController::class . ':search');
        $group->post('/delete', MenusController::class . ':delete');
    });


    $group->group('/submenus', function (RouteCollectorProxy $group) {
        $group->get('', SubmenusController::class . ':index')->add(new RemoveCsrfMiddleware());
        $group->post('', SubmenusController::class . ':list');
        $group->post('/save', SubmenusController::class . ':store');
        $group->post('/update', SubmenusController::class . ':update');
        $group->post('/menus', SubmenusController::class . ':menus');
        $group->post('/search', SubmenusController::class . ':search');
        $group->post('/delete', SubmenusController::class . ':delete');
    });

    $group->group('/permisos', function (RouteCollectorProxy $group) {
        $group->get('', PermisosController::class . ':index')->add(new RemoveCsrfMiddleware());
        $group->post('', PermisosController::class . ':list');
        $group->post('/save', PermisosController::class . ':store');
        $group->post('/delete', PermisosController::class . ':delete');
        $group->post('/active', PermisosController::class . ':active');
        $group->post('/roles', PermisosController::class . ':roles');
        $group->post('/menus', PermisosController::class . ':menus');
        $group->post('/submenus', PermisosController::class . ':submenus');
    });

    $group->group('/database', function (RouteCollectorProxy $group) {
        $group->get('', DataBaseController::class . ':index')->add(new RemoveCsrfMiddleware());
        $group->post('', DataBaseController::class . ':list');
        $group->post('/save', DataBaseController::class . ':store');
        $group->post('/update', DataBaseController::class . ':update');
        $group->post('/search', DataBaseController::class . ':search');
        $group->post('/delete', DataBaseController::class . ':delete');
        $group->post('/execute', DataBaseController::class . ':execute');
    })->add(PermissionMiddleware::class);

    $group->group("/centinela", function (RouteCollectorProxy $group) {
        $group->get("", CentinelaController::class . ":index")->add(new RemoveCsrfMiddleware());

        $group->post("", CentinelaController::class . ":list");
        $group->post("/save", CentinelaController::class . ":store");
        $group->post("/search", CentinelaController::class . ":search");
        $group->post("/update", CentinelaController::class . ":update");
        $group->post("/delete", CentinelaController::class . ":delete");
    })->add(PermissionMiddleware::class);
    
})->add(new LoginAdminMiddleware());
