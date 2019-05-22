<?php

namespace Laravel\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Modules\Commands\CommandMakeCommand;
use Laravel\Modules\Commands\ControllerMakeCommand;
use Laravel\Modules\Commands\DisableCommand;
use Laravel\Modules\Commands\DumpCommand;
use Laravel\Modules\Commands\EnableCommand;
use Laravel\Modules\Commands\EventMakeCommand;
use Laravel\Modules\Commands\FactoryMakeCommand;
use Laravel\Modules\Commands\InstallCommand;
use Laravel\Modules\Commands\JobMakeCommand;
use Laravel\Modules\Commands\ListCommand;
use Laravel\Modules\Commands\ListenerMakeCommand;
use Laravel\Modules\Commands\MailMakeCommand;
use Laravel\Modules\Commands\MiddlewareMakeCommand;
use Laravel\Modules\Commands\MigrateCommand;
use Laravel\Modules\Commands\MigrateRefreshCommand;
use Laravel\Modules\Commands\MigrateResetCommand;
use Laravel\Modules\Commands\MigrateRollbackCommand;
use Laravel\Modules\Commands\MigrateStatusCommand;
use Laravel\Modules\Commands\MigrationMakeCommand;
use Laravel\Modules\Commands\ModelMakeCommand;
use Laravel\Modules\Commands\ModuleMakeCommand;
use Laravel\Modules\Commands\NotificationMakeCommand;
use Laravel\Modules\Commands\PolicyMakeCommand;
use Laravel\Modules\Commands\ProviderMakeCommand;
use Laravel\Modules\Commands\PublishCommand;
use Laravel\Modules\Commands\PublishConfigurationCommand;
use Laravel\Modules\Commands\PublishMigrationCommand;
use Laravel\Modules\Commands\PublishTranslationCommand;
use Laravel\Modules\Commands\RequestMakeCommand;
use Laravel\Modules\Commands\ResourceMakeCommand;
use Laravel\Modules\Commands\RouteProviderMakeCommand;
use Laravel\Modules\Commands\RuleMakeCommand;
use Laravel\Modules\Commands\SeedCommand;
use Laravel\Modules\Commands\SeedMakeCommand;
use Laravel\Modules\Commands\SetupCommand;
use Laravel\Modules\Commands\TestMakeCommand;
use Laravel\Modules\Commands\UnUseCommand;
use Laravel\Modules\Commands\UpdateCommand;
use Laravel\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        CommandMakeCommand::class,
        ControllerMakeCommand::class,
        DisableCommand::class,
        DumpCommand::class,
        EnableCommand::class,
        EventMakeCommand::class,
        JobMakeCommand::class,
        ListenerMakeCommand::class,
        MailMakeCommand::class,
        MiddlewareMakeCommand::class,
        NotificationMakeCommand::class,
        ProviderMakeCommand::class,
        RouteProviderMakeCommand::class,
        InstallCommand::class,
        ListCommand::class,
        ModuleMakeCommand::class,
        FactoryMakeCommand::class,
        PolicyMakeCommand::class,
        RequestMakeCommand::class,
        RuleMakeCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrateStatusCommand::class,
        MigrationMakeCommand::class,
        ModelMakeCommand::class,
        PublishCommand::class,
        PublishConfigurationCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UnUseCommand::class,
        UpdateCommand::class,
        UseCommand::class,
        ResourceMakeCommand::class,
        TestMakeCommand::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
