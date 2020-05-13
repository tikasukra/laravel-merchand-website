<?php

namespace App\Exports;

use App\DataProduct;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataProduct::all();
    }
}
