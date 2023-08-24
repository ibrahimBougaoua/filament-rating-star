<?php

namespace IbrahimBougaoua\FilamentRatingStar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IbrahimBougaoua\FilamentRatingStar\FilamentRatingStar
 */
class FilamentRatingStar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \IbrahimBougaoua\FilamentRatingStar\FilamentRatingStar::class;
    }
}
