<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScooterResource\Pages;
use App\Filament\Resources\ScooterResource\RelationManagers;
use App\Models\Scooter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScooterResource extends Resource
{
    protected static ?string $model = Scooter::class;

    protected static ?string $navigationIcon = 'scooters';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('iot_id')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('machine_no')
                    ->required()
                    ->maxLength(200),
                Forms\Components\TextInput::make('token')
                    ->required()
                    ->maxLength(200),
                Forms\Components\TextInput::make('longitude')
                    ->maxLength(200)
                    ->default(null),
                Forms\Components\TextInput::make('latitude')
                    ->maxLength(200)
                    ->default(null),
                Forms\Components\TextInput::make('battary_charge')
                    ->maxLength(200)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('iot_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lastTrip.user.id')
                    ->label('Last Trip User id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lastTrip.user.name')
                    ->label('Last Trip User Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lastTrip.user.email')
                    ->label('Last Trip User email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('machine_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('token')
                    ->searchable(),
                Tables\Columns\TextColumn::make('longitude')
                    ->searchable(),
                Tables\Columns\TextColumn::make('latitude')
                    ->searchable(),
                Tables\Columns\TextColumn::make('battary_charge')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListScooters::route('/'),
            'create' => Pages\CreateScooter::route('/create'),
            'view' => Pages\ViewScooter::route('/{record}'),
            'edit' => Pages\EditScooter::route('/{record}/edit'),
        ];
    }
}
