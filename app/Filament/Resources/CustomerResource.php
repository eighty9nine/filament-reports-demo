<?php

namespace App\Filament\Resources;

use App\Models\Customer;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Table;
use Miguilim\FilamentAutoPanel\AutoResource;

class CustomerResource extends AutoResource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static array $enumDictionary = [];

    protected static array $visibleColumns = ["name", "phone", "email"];

    protected static array $searchableColumns = [];

    public static function getFilters(): array
    {
        return [
            //
        ];
    }

    public static function getActions(): array
    {
        return [
            //
        ];
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getHeaderWidgets(): array
    {
        return [
            'list' => [
                //
            ],
            'view' => [
                //
            ],
        ];
    }

    public static function getFooterWidgets(): array
    {
        return [
            'list' => [
                //
            ],
            'view' => [
                //
            ],
        ];
    }

    public static function getColumnsOverwrite(): array
    {
        return [
            'table' => [
                //
            ],
            'form' => [
                TextInput::make("id")->hidden(),
                TextInput::make("created_at")->hidden(),
                TextInput::make("updated_at")->hidden(),
            ],
            'infolist' => [
                //
            ],
        ];
    }

    public static function getExtraPages(): array
    {
        return [
            //
        ];
    }
}
