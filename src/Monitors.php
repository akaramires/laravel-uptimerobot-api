<?php
    /**
     * Created by Elmar <e.abdurayimov@gmail.com> Abdurayimov
     *
     * @copyright (C)Copyright 2016 elmar.eatech.org
     *               Date: 1/11/16
     *               Time: 2:32 PM
     */

    namespace Akaramires\Monitors;

    use Akaramires\Monitors\Drivers\BaseDriver;
    use Exception;

    class Monitors
    {
        /**
         * @param $driver
         * @param $params
         *
         * @return mixed|BaseDriver
         */
        public function createDriver($driver, $params)
        {
            try {
                $driverName = '\Akaramires\Monitors\Drivers\\' . ucfirst(strtolower($driver)) . "Driver";

                return new $driverName($params['api_key']);
            } catch (Exception $e) {
                throw new \InvalidArgumentException('Invalid Monitor driver');
            }
        }

    }