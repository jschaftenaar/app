<?php

namespace App\Server;

use App\Server\Contracts\Prize as PrizeInterface;
use App\Server\Traits\DynamicProperties;
use Ramsey\Uuid\Uuid;

class Prize implements PrizeInterface
{
    use DynamicProperties;

    protected $name;
    protected $sponsor;
    protected $uuid;

    /**
     * Instantiate the prize with the name and sponsor.
     *
     * @param string $name    of prize
     * @param string $sponsor of prize
     */
    public function __construct($name, $sponsor)
    {
        $this->uuid(Uuid::uuid4()->toString());
        $this->name($name);
        $this->sponsor($sponsor);
    }

    /**
     * Get or set the UUID of the connection.
     *
     * @example uuid() ==> string
     *          uuid($uuid) ==> self
     *
     * @param string $uuid
     *
     * @return string|self
     */
    public function uuid($uuid = null)
    {
        return $this->dynamic('uuid', $uuid);
    }

    /**
     * Get or set the name of the prize.
     *
     * @example name() ==> string
     *          name($name) ==> self
     *
     * @param string $name
     *
     * @return string|self
     */
    public function name($name = null)
    {
        return $this->dynamic('name', $name);
    }

    /**
     * Get or set the sponsor of the prize.
     *
     * @example sponsor() ==> string
     *          sponsor($sponsor) ==> self
     *
     * @param string $sponsor
     *
     * @return string|self
     */
    public function sponsor($sponsor = null)
    {
        return $this->dynamic('sponsor', $sponsor);
    }
}
