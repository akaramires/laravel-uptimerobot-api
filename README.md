## Laravel 5 UptimeRobot API

## Installation

Please check the system requirements before installing Laravel UptimeRobot API.

To get the latest version of Laravel UptimeRobot API, simply require `"akaramires/laravel-uptimerobot-api": "*"` in your `composer.json` file.

Open up `app/config/app.php` and add the following to the `providers` key.

* `Akaramires\Monitors\MonitorsServiceProvider::class`

Also add the following to the `aliases` key:

* `'Monitors' => Akaramires\Monitors\Facades\Monitors::class`

## Configuration

Laravel UptimeRobot API requires configuration.

To get started, first publish the package config file:

    php artisan vendor:publish --provider="Akaramires\Monitors\MonitorsServiceProvider"
