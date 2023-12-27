<?php

namespace App\Filament\Resources;

use App\Models\Product;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Miguilim\FilamentAutoPanel\AutoResource;

class ProductResource extends AutoResource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static array $enumDictionary = [];

    protected static array $visibleColumns = [
        "name",
        "sku",
        "slug",
        "price",
        "sale_price",
        "description"
    ];

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
                TextColumn::make("description")->limit(20),
                TextColumn::make("price")->money("USD"),
                TextColumn::make("sale_price")->money("USD")
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
