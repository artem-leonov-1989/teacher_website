<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Repositories\MenuRepository as Repository;

class MenuRepository extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Repository::class;
    }
}
