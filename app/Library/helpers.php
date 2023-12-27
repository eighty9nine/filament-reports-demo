<?php

if (!function_exists("getCarbonInstancesFromDateString")) {
    function getCarbonInstancesFromDateString(?string $dateString): array
    {
        if (!$dateString) {
            return [null, null, "perDay"];
        }

        $dates = explode(" - ", $dateString);

        [$from, $to] = $dates;

        $from = \Illuminate\Support\Carbon::createFromFormat("d/m/Y", $from);
        $to = \Illuminate\Support\Carbon::createFromFormat("d/m/Y", $to);

        $diff = $from->diffInDays($to);
        if ($diff >= 365) {
            $range = "perYear";
        } else if ($diff >= 31) {
            $range = "perMonth";
        } else {
            $range = "perDay";
        }

        return [$from, $to, $range];
    }
}
