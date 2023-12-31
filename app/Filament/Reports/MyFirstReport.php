<?php

namespace App\Filament\Reports;

use App\Models\User;
use EightyNine\Reports\Components\Image;
use EightyNine\Reports\Components\Text;
use EightyNine\Reports\Components\VerticalSpace;
use EightyNine\Reports\Report;
use EightyNine\Reports\Components\Body;
use EightyNine\Reports\Components\Footer;
use EightyNine\Reports\Components\Header;
use Filament\Forms\Form;
use Malzariey\FilamentDaterangepickerFilter\Fields\DateRangePicker;

class MyFirstReport extends Report
{
//    public ?string $heading = "Report";

    // public ?string $subHeading = "A great report";

    public function header(Header $header): Header
    {
        $imagePath = asset('img/fr-logo.png');
        return $header
            ->schema([
                Header\Layout\HeaderRow::make()
                    ->schema([
                        Header\Layout\HeaderColumn::make()
                            ->schema([
                                Image::make($imagePath)
                                    ->width9Xl(),
                            ])->alignLeft(),
                        Header\Layout\HeaderColumn::make()
                            ->schema([
                                Text::make("My first report")
                                    ->title()
                                    ->primary(),
                                Text::make("This report is from the docs, and shows a quick start report")
                                    ->subtitle()
                            ])->alignRight()
                    ]),
            ]);
    }

    public function body(Body $body): Body
    {
        return $body
            ->schema([
                Body\Layout\BodyColumn::make()
                    ->schema([
                        Text::make("Registered Users")
                            ->fontXl()
                            ->fontBold()
                            ->primary(),
                        Text::make("This is a list of registered users from the specified date range")
                            ->fontSm()
                            ->secondary(),
                        Body\Table::make()
                            ->columns([
                                Body\TextColumn::make("name")
                                    ->label("Name"),
                                Body\TextColumn::make("email")
                                    ->label("Email"),
                                Body\TextColumn::make("created_at")
                                    ->label("Registration date")
                                    ->dateTime(),
                            ])
                            ->data(
                                function (?array $filters) {
                                    [$from, $to] = getCarbonInstancesFromDateString(
                                        $filters['registration_date'] ?? null
                                    );
                                    return User::query()
                                        ->when($from, function ($query, $date) {
                                            return $query->whereDate('created_at', '>=', $date);
                                        })
                                        ->when($to, function ($query, $date) {
                                            return $query->whereDate('created_at', '<=', $date);
                                        })
                                        ->select("name", "email", "created_at")
                                        ->take(10)
                                        ->get();
                                }
                            ),
                        VerticalSpace::make(),
                        Text::make("Verified Users")
                            ->fontXl()
                            ->fontBold()
                            ->primary(),
                        Text::make("This is a list of verified users from the specified date range")
                            ->fontSm()
                            ->secondary(),
                        Body\Table::make()
                            ->columns([
                                Body\TextColumn::make("name")
                                    ->label("Name"),
                                Body\TextColumn::make("email")
                                    ->label("Email"),
                                Body\TextColumn::make("email_verified_at")
                                    ->label("Verification date")
                                    ->dateTime(),
                            ])
                            ->data(
                                function (?array $filters) {
                                    [$from, $to] = getCarbonInstancesFromDateString($filters['registration_date'] ?? null);
                                    return User::query()
                                        ->when($from, function ($query, $date) {
                                            return $query->whereDate('created_at', '>=', $date);
                                        })
                                        ->when($to, function ($query, $date) {
                                            return $query->whereDate('created_at', '<=', $date);
                                        })
                                        ->select("name", "email", "email_verified_at")
                                        ->take(10)
                                        ->get();
                                }
                            ),
                    ]),
            ]);
    }

    public
    function footer(Footer $footer): Footer
    {
        return $footer
            ->schema([
                Text::make("Generated on: " . now()->format("d/m/Y H:i:s"))
                    ->subtitle(),
            ]);
    }

    public
    function filterForm(Form $form): Form
    {
        return $form
            ->schema([
                DateRangePicker::make("registration_date")
                    ->label("Registration date")
                    ->placeholder("Select a date range"),
                DateRangePicker::make("verification_date")
                    ->label("Verification date")
                    ->placeholder("Select a date range"),
            ]);
    }
}
