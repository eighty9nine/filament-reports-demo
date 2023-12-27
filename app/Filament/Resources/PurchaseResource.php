<?php

namespace App\Filament\Resources;

use App\Models\Purchase;
use Faker\Provider\Text;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Miguilim\FilamentAutoPanel\AutoResource;

class PurchaseResource extends AutoResource
{
    protected static ?string $model = Purchase::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

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
                TextColumn::make("id")->hidden(),
                TextColumn::make("created_at")->hidden(),
                TextColumn::make("updated_at")->hidden(),
            ],
            'form' => [
                //
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
