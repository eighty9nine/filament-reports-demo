<?php

namespace App\Filament\Reports;

use App\Library\Traits\HasReportHeader;
use App\Models\Sale;
use EightyNine\Reports\Report;
use EightyNine\Reports\Components\Body;
use EightyNine\Reports\Components\Footer;
use EightyNine\Reports\Components\Header;
use Filament\Forms\Form;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Malzariey\FilamentDaterangepickerFilter\Fields\DateRangePicker;

class SalesReport extends Report
{
    use HasReportHeader;

    public ?string $heading = "Sales Report";
    public ?string $subHeading = "Periodic sales report";

    public ?string $reportTitle = "Sales Report";
    public ?string $reportSubTitle = "General summarised sales report for the selected period";

    public function body(Body $body): Body
    {
        return $body
            ->schema([
                Body\Layout\BodyColumn::make()
                    ->schema([
                        Body\Table::make()
                            ->columns([
                                Body\TextColumn::make("date")
                                    ->label("Date"),
                                Body\TextColumn::make("value")
                                    ->money("USD")
                                    ->label("amount")
                                    ->alignRight()
                                    ->sum(),
                            ])
                            ->data(fn(?array $filters) => $this->getData($filters)),
                    ]),
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
                DateRangePicker::make("created_at")
                ->label("Date Range")
                ->placeholder("Select a date range")
            ]);
    }

    private function getData(?array $filters): Collection
    {
        [$from, $to, $range] = getCarbonInstancesFromDateString($filters["created_at"] ?? null);
        $trend = Trend::model(Sale::class)
            ->dateColumn("date")
            ->between($from ?? now()->subDays(7), $to ?? now())
            ->{$range}()
            ->sum("grand_total");

        return $trend->map(fn(TrendValue $value) => [
            "date" => match ($range) {
                "perMonth" => Carbon::parse($value->date)->format("M, Y"),
                "perYear" => Carbon::parse($value->date)->format("Y"),
                default => Carbon::parse($value->date)->format("d/m/Y"),
            },
            "value" => (float)$value->aggregate
        ]);
    }
}
