<?php


namespace Wefabric\Excel;

use Illuminate\Database\Eloquent\Model;

class AbstractExcel implements Excellable
{
    public static array $headings;
    public Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function toExcelData(): array
    {
        return $this->model->toArray();
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
