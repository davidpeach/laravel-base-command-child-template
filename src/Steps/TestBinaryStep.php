<?php

declare(strict_types=1);

namespace DavidPeach\LaravelBaseCommandChildTemplate\Steps;

use DavidPeach\BaseCommand\IO;
use DavidPeach\BaseCommand\StepBinary;

class TestBinaryStep extends StepBinary
{
    public function handle(IO $io)
    {
        $io->note(message: [
            'TestBinaryStep handle method called.',
            'You can generate a new binary step class with <comment>php artisan base-command:make:step YourStepName</comment>.',
            'Then select Binary from the options.',
        ]);
    }

    public function question(): string
    {
        // Return your question here.
        // i.e. return 'Would you like to run this step?';
        return "my test question";
    }
}
