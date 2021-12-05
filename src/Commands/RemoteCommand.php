<?php

namespace RCodes\Remote\Commands;

use Spatie\Ssh\Ssh;
use Illuminate\Console\Command;
use RCodes\Remote\Config\HostConfig;
use RCodes\Remote\Config\RemoteConfig;

class RemoteCommand extends Command
{
    public $signature = 'remote {rawCommand} {--host=default}';

    public $description = 'Execute commands on a remote server';

    public function handle()
    {
        // Get the Remote Configuration
        $hostConfig = RemoteConfig::getHost($this->option('host'));

        $process = Ssh::create($hostConfig->user, $hostConfig->host)
                ->onOutput(function($type, $line) {
                    echo $line;
                })
                ->usePort($hostConfig->port)
                ->execute($this->getCommandToExecute($hostConfig));
    }


    // command to execute
    protected function getCommandToExecute(HostConfig $hostConfig): array
    {
        return [
            "cd {$hostConfig->path}",
            $this->argument('rawCommand')
        ];
    }
}
