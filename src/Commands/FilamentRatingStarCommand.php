<?php

namespace IbrahimBougaoua\FilamentRatingStar\Commands;

use Illuminate\Console\Command;

class FilamentRatingStarCommand extends Command
{
    public $signature = 'filament-rating-star';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
