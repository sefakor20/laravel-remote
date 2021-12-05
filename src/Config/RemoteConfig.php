<?php

namespace RCodes\Remote\Config;

use RCodes\Remote\Config\HostConfig;

class RemoteConfig
{
    public static function getHost($hostName): HostConfig
    {
        // Get config values from config file
        $configValues = config("remote.hosts.{$hostName}");

        // ray($configValues, $hostName);
        return new HostConfig(
            $configValues['host'],
            $configValues['port'],
            $configValues['user'],
            $configValues['path']
        );
    }
}
