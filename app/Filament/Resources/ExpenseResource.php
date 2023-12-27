<?php

namespace App\Filament\Resources;

use App\Models\Expense;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Miguilim\FilamentAutoPanel\AutoResource;

class ExpenseResource extends AutoResource
{
    protected static ?string $model = Expense::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                TextColumn::make("amount")->money('USD'),
                TextColumn::make("description")->limit(20),
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
