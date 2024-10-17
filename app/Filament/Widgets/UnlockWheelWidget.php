<?php

namespace App\Filament\Widgets;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Http;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;

class UnlockWheelWidget extends Widget implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'filament.widgets.unlock-wheel-widget';

    // Form state
    public $formData = [];

    public function submit()
    {
        // Post the form data to a specific URL
        Http::post('http://api.uqbike.com/terControl/sendControl.do?token=E4A663AD4406DA768300D4EA20BCC4CF&paramName=11&controlType=control', $this->formData);

        // Optionally, add a success notification

    }

    public function getFormSchema(): array
    {
        return [
            TextInput::make('machineNO')
                ->required()
                ->label('Serial Number'),
        ];
    }

}
