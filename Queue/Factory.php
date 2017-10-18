<?php

namespace PP\Component\Contracts\Queue;

use PP\Component\Queue\Type\QueueInterface;

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