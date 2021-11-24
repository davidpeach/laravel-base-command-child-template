<?php

namespace DavidPeach\LaravelBaseCommandChildTemplate;

use DavidPeach\BaseCommand\Commands\BaseCommand;
use DavidPeach\LaravelBaseCommandChildTemplate\Steps\TestBinaryStep;

class Command extends BaseCommand
{
    /**
     * The signature for your own Base Command.
     */
    protected $signature = 'namespace:command';

    /**
     * The title that will appear at the start of your
     * own Base Command.
     */
    protected string $startTitle = 'Your custom base command';

    /**
     * The small description that will appear
     * beneath your Base Command title.
     */
    protected string $startSubtitle = 'The only limit is your imagination';

    /**
     * The message to display when steps have finished running.
     */
    protected string $finalSuccessMessage = 'All finished!';

    /**
     * The steps to run when running your Base Command.
     * In the order that they should run.
     */
    protected array $commands = [
        TestBinaryStep::class
    ];
}
