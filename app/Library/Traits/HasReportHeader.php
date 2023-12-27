<?php

namespace App\Library\Traits;

use EightyNine\Reports\Components\Header;
use EightyNine\Reports\Components\Text;

trait HasReportHeader
{
    public function header(Header $header): Header
    {
        return $header
            ->schema([
                Header\Layout\HeaderColumn::make()
                    ->schema([
                        Text::make($this->reportTitle ?? "Report")
                            ->title()
                            ->primary(),
                        Text::make("Generated on " . now()->format("d/m/Y H:i"))
                            ->fontXs(),
                        Text::make($this->reportSubTitle ?? "")
                            ->subtitle(),
                    ]),
            ]);
    }
}
