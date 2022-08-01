<?php

namespace App\Exports;

use App\Counter;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportCounter implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Counter::select('number', 'position_number', 'subscription_number',
        'subscriber', 'address', 'counter_number', 'previous_read','current_read', 
        'cups_consumption', 'shekels_consumption', 'counter_status', 'notes')->get();
    }
}