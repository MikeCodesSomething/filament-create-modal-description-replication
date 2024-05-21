<?php

namespace App\Filament\Resources\SheetResource\Pages;

use App\Filament\Resources\SheetResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateSheet extends CreateRecord
{
    protected static string $resource = SheetResource::class;

    protected function getCreateFormAction(): Action
    {
        return Action::make('create')
            ->modalHeading('TEST')
            ->modalDescription('TEST2')
            ->requiresConfirmation()
            ->action(fn () => $this->create());
    }
}
