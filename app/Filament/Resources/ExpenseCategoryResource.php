<?php

namespace App\Filament\Resources;

use App\Models\ExpenseCategory;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Table;
use Miguilim\FilamentAutoPanel\AutoResource;

class ExpenseCategoryResource extends AutoResource
{
    protected static ?string $model = ExpenseCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-pie';

    protected static array $enumDictionary = [];

    protected static array $visibleColumns = ["name", "description"];

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
