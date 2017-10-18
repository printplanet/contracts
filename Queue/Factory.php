<?php

namespace Printplanet\Component\Contracts\Queue;

use Printplanet\Component\Queue\Type\QueueInterface;

interface Factory
{

    const CLASSNAME = __CLASS__;

    /**
     * Resolve a queue connection instance.
     *
     * @param  string  $name
     * @return QueueInterface
     */
    public function connection($name = null);

}