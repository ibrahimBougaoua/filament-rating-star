<?php

namespace IbrahimBougaoua\FilamentRatingStar\Entries\Components;

use Filament\Forms\Components\Concerns\HasToggleColors;
use Filament\Forms\Components\Concerns\HasToggleIcons;
use Filament\Infolists\Components\Entry;
use Filament\Tables\Columns\Concerns\CanBeValidated;
use Filament\Tables\Columns\Concerns\CanUpdateState;
use Filament\Tables\Columns\Contracts\Editable;

class RatingStar extends Entry
{
    use HasToggleColors;
    use HasToggleIcons;

    protected string $view = 'filament-rating-star::columns.components.rating-star';

    protected string $size = 'lg';

    public function size(string $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function getSize(): string
    {
        return $this->size;
    }
}
