<?php

namespace App\Server\Entities;

use App\Server\Traits\UUIDFilter;
use Illuminate\Support\Collection;

class Prizes extends Collection
{
    use UUIDFilter;

    /**
     * Filter prizes to those which have not yet been awarded.
     *
     * @return self
     */
    public function available()
    {
        return $this->filter(function ($prize) {
            return ! $prize->winner();
        });
    }
}
