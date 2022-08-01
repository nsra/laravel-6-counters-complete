<?php

namespace App\Imports;

use App\Counter;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportCounter implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Counter([
            'number' => $row[0],
            'position_number' => $row[1],
            'subscription_number' => $row[2],
            'subscriber' => $row[3],
            'address' => $row[4],
            'counter_number' => $row[5],
            'previous_read' => $row[6],
            'current_read' => $row[7],
            'cups_consumption' => $row[8],
            'shekels_consumption' => $row[9],
            'counter_status' => $row[10],
            'notes' => $row[11],
        ]);
    }
}