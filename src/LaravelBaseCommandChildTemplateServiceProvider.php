<?php

namespace DavidPeach\LaravelBaseCommandChildTemplate;

use DavidPeach\BaseCommand\BaseCommandServiceProvider;

class LaravelBaseCommandChildTemplateServiceProvider extends BaseCommandServiceProvider
{
    protected function getCommandClass(): string
    {
        return Command::class;
    }

    protected function getStepsDirectory(): string
    {
        return  __DIR__ . '/Steps';
    }

    protected function getStepsNamespace(): string
    {
        return 'DavidPeach\LaravelBaseCommandChildTemplate\Steps';
    }
}
