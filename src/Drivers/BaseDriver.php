<?php

    /**
     * Created by Elmar <e.abdurayimov@gmail.com> Abdurayimov
     *
     * @copyright (C)Copyright 2016 elmar.eatech.org
     *               Date: 1/11/16
     *               Time: 2:35 PM
     */

    namespace Akaramires\Monitors\Drivers;

    use Exception;
    use GuzzleHttp\Client;
    use GuzzleHttp\Exception\RequestException;
    use Psr\Http\Message\RequestInterface;

    abstract class BaseDriver
    {
        const API_TYPE = 'none';

        const API_HOST = 'none';

        protected $__apiKey;

        protected $__config;

        public function __construct($apiKey)
        {
            $this->__config = config('monitors.' . static::API_TYPE);
            $this->__apiKey = $apiKey;
        }

        protected function __request($endpoint, $method = 'GET', $data = [])
        {
            $client = new Client();

            $options = [];
            $method = strtolower($method);

            if ($method == 'post') {
                $options['body'] = $data;
            }

            /** @var RequestInterface $response */
            $response = $client->request($method, static::API_HOST . $endpoint, $options);

            $body = json_decode($response->getBody(), true);

            if (is_array($body)) {
                return $body;
            }

            throw new Exception('Error Communicating with Server');
        }

        public static function getTypes()
        {
            return [
                UptimerobotDriver::API_TYPE => 'Uptime Robot',
            ];
        }

        public function getCurrentType()
        {
            return static::API_TYPE;
        }

        abstract function getAccountDetails();

        abstract function getMonitors($params = []);
    }