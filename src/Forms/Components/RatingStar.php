<?php

namespace IbrahimBougaoua\FilamentRatingStar\Forms\Components;

use Filament\Forms\Components\Radio;

class RatingStar extends Radio
{
    protected string $view = 'filament-rating-star::actions.rating-star';

    public static function make(?string $name = 'rating'): static
    {
        return parent::make($name);
    }
}
