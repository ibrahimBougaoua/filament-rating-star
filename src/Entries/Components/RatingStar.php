<?php

namespace IbrahimBougaoua\FilamentRatingStar\Entries\Components;

use Filament\Forms\Components\Concerns\HasToggleColors;
use Filament\Forms\Components\Concerns\HasToggleIcons;
use Filament\Infolists\Components\Entry;

class RatingStar extends Entry
{
    use HasToggleColors;
    use HasToggleIcons;

    protected string $view = 'filament-rating-star::entries.components.rating-star';

    protected string $size = 'lg';

    protected bool $inline = false;

    public function size(string $size): static
    {
        $this->size = $size;

        return $this;
    }

    public function inline(): static
    {
        $this->inline = true;

        return $this;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getInline(): bool
    {
        return $this->inline;
    }
}
