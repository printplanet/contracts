<?php

namespace Printplanet\Component\Contracts\Broadcasting;

interface Factory
{

    const CLASSNAME = __CLASS__;

    /**
     * Get a broadcaster implementation by name.
     *
     * @param  string  $name
     * @return void
     */
    public function connection($name = null);
}