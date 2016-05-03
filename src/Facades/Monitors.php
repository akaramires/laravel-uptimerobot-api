<?php
    /**
     * Created by Elmar <e.abdurayimov@gmail.com> Abdurayimov
     *
     * @copyright (C)Copyright 2016 elmar.eatech.org
     *               Date: 1/11/16
     *               Time: 2:33 PM
     */

    namespace Akaramires\Monitors\Facades;

    use Illuminate\Support\Facades\Facade;

    class Monitors extends Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
            return 'uptimerobot';
        }
    }
