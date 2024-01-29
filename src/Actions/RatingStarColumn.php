<?php

namespace IbrahimBougaoua\FilamentRatingStar\Actions;

use Filament\Forms\Components\Concerns\HasToggleColors;
use Filament\Forms\Components\Concerns\HasToggleIcons;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\Concerns\CanBeValidated;
use Filament\Tables\Columns\Concerns\CanUpdateState;
use Filament\Tables\Columns\Contracts\Editable;

class RatingStarColumn extends Column implements Editable
{
    use CanBeValidated;
    use CanUpdateState;
    use HasToggleColors;
    use HasToggleIcons;

    protected string $view = 'filament-rating-star::actions.rating-star-column';

    protected function setUp(): void
    {
        parent::setUp();

        $this->disabledClick();

        $this->rules(['boolean']);
    }
}
