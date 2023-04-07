<?php

namespace Rpungello\LaravelLastActivity\Commands;

use Illuminate\Console\Command;

class LaravelLastActivityCommand extends Command
{
    public $signature = 'laravel-last-activity';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
