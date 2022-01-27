<?php


namespace Wefabric\Excel;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class AbstractExcel implements Excellable, WithColumnFormatting
{

    CONST EUR_CURRENCY_FORMAT = '_("€"* #,##0.00_)';
    CONST EUR_CURRENCY_FORMAT_PRECISE = '_("€"* #,##0.0000_)';

    public static array $headings;
    public array $columnFormats = [];

    public Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function toExcelData(): array
    {
        return $this->model->toArray();
    }

    public function columnFormats(): array
    {
        return $this->columnFormats;
    }


    /**
     * @param Model $model
     * @param $key
     * @return float|int|mixed
     */
    protected function getDate(Model $model, $key)
    {
        if($value = $model->getAttribute($key)) {
            $value = $value;
        }
        return $value;
    }
}
