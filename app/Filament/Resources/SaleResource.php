<?php

namespace App\Filament\Resources;

use App\Models\Sale;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Miguilim\FilamentAutoPanel\AutoResource;

class SaleResource extends AutoResource
{
    protected static ?string $model = Sale::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static array $enumDictionary = [];

    protected static array $visibleColumns = [];

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
                TextColumn::make("price")->money("USD"),
                TextColumn::make("total")->money("USD"),
                TextColumn::make("discount")->money("USD"),
                TextColumn::make("grand_total")->money("USD"),
                TextColumn::make("id")->hidden(),
                TextColumn::make("created_at")->hidden(),
                TextColumn::make("updated_at")->hidden(),
            ],
            'form' => [
                TextInput::make("id")->hidden(),
                TextInput::make("created_at")->hidden(),
                TextInput::make("updated_at")->hidden(),
            ],
            'infolist' => [
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
