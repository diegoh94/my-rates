<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithStartRow;


use App\Models\Rate;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Contract;

class RatesImport implements ToModel, WithStartRow
{
    private $contractId;

    const COLUMN_POL_INDEX = 0;
    const COLUMN_POD_INDEX = 1;
    const COLUMN_CURR_INDEX = 4;
    const COLUMN_20GP_INDEX = 5;
    const COLUMN_40GP_INDEX = 6;
    const COLUMN_40HC_INDEX = 7;

    public function __construct($contractId)
    {
        $this->contractId = $contractId;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Rate([
            'origin'      => $row[self::COLUMN_POL_INDEX],
            'destination' => $row[self::COLUMN_POD_INDEX],
            'currency'    => $row[self::COLUMN_CURR_INDEX],
            'twenty'      => $row[self::COLUMN_20GP_INDEX],
            'forty'       => $row[self::COLUMN_40GP_INDEX],
            'fortyhc'     => $row[self::COLUMN_40HC_INDEX],
            'contract_id' => $this->contractId,
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
