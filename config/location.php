<?php

use Stevebauman\Location\Drivers\GeoPlugin;
use Stevebauman\Location\Drivers\Ip2locationio;
use Stevebauman\Location\Drivers\IpApi;
use Stevebauman\Location\Drivers\IpInfo;
use Stevebauman\Location\Drivers\MaxMind;
use Stevebauman\Location\Position;

return [
    'driver' => IpApi::class,

    'fallbacks' => [
        Ip2locationio::class,
        IpInfo::class,
        GeoPlugin::class,
        MaxMind::class,
    ],

    'position' => Position::class,

    'http' => [
        'timeout' => 3,
        'connect_timeout' => 3,
    ],

    'testing' => [
        'enabled' => false,
    ],

    'maxmind' => [
        'license_key' => env('MAXMIND_LICENSE_KEY'),
        'web' => [
            'enabled' => false,
            'user_id' => env('MAXMIND_USER_ID'),
            'locales' => ['en'],
            'options' => ['host' => 'geoip.maxmind.com'],
        ],
        'local' => [
            'type' => 'city',
            'path' => database_path('maxmind/GeoLite2-City.mmdb'),
            'url' => sprintf(
                'https://download.maxmind.com/app/geoip_download_by_token?edition_id=GeoLite2-City&license_key=%s&suffix=tar.gz',
                env('MAXMIND_LICENSE_KEY')
            ),
        ],
    ],

    'ip_api' => [
        'token' => env('IP_API_TOKEN'),
    ],
    'ipinfo' => [
        'token' => env('IPINFO_TOKEN'),
    ],
    'ipdata' => [
        'token' => env('IPDATA_TOKEN'),
    ],
    'ip2locationio' => [
        'token' => env('IP2LOCATIONIO_TOKEN'),
    ],
    'kloudend' => [
        'token' => env('KLOUDEND_TOKEN'),
    ],
];
