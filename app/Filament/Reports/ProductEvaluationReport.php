<?php

namespace App\Filament\Reports;

use App\Library\Traits\HasReportHeader;
use App\Models\Product;
use App\Models\Sale;
use EightyNine\Reports\Report;
use EightyNine\Reports\Components\Body;
use EightyNine\Reports\Components\Footer;
use EightyNine\Reports\Components\Header;
use Filament\Forms\Form;
use Illuminate\Support\Collection;
use Malzariey\FilamentDaterangepickerFilter\Fields\DateRangePicker;

class ProductEvaluationReport extends Report
{
    use HasReportHeader;

    public ?string $heading = "Product Evaluation Report";
    public ?string $subHeading = "Evaluate product performance in terms of sales";

    protected string $reportTitle = "Product Evaluation Report";

    protected string $reportSubTitle = "Evaluate product performance in terms of sales";

    public function body(Body $body): Body
    {
        return $body
            ->schema([
                Body\Layout\BodyColumn::make()
                    ->schema([
                        Body\Table::make()
                            ->data(fn(?array $filters) => $this->getData($filters))
                            ->columns([
                                Body\TextColumn::make("product_name")
                                    ->label("Product Name"),
                                Body\TextColumn::make("total_quantity")
                                    ->label("Total Quantity")
                                    ->sum()
                                    ->numeric()
                                    ->alignRight(),
                                Body\TextColumn::make("total_sales")
                                    ->label("Total Sales")
                                    ->money("USD")
                                    ->alignRight()
                                    ->sum(),
                            ])
                    ])
            ]);
    }

    public function footer(Footer $footer): Footer
    {
        return $footer
            ->schema([
                // ...
            ]);
    }

    public function filterForm(Form $form): Form
    {
        return $form
            ->schema([
                DateRangePicker::make("date_range")
                    ->label("Date Range")
                    ->placeholder("Select Date Range")
            ]);
    }

    private function getData(?array $filters): Collection
    {
        [$from, $to] = getCarbonInstancesFromDateString($filters['date_range'] ?? null);
        return Sale::query()
            ->selectRaw("product_id, SUM(quantity) as total_quantity, SUM(total) as total_sales")
            ->when($from, fn($query) => $query->whereDate('date', '>=', $from))
            ->when($to, fn($query) => $query->whereDate('date', '<=', $to))
            ->groupBy('product_id')
            ->get()
            ->map(function ($item) {
                $product = Product::find($item->product_id);
                return [
                    'product_name' => $product->name,
                    'total_quantity' => $item->total_quantity,
                    'total_sales' => $item->total_sales,
                ];
            });
    }
}
