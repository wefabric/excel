<?php


namespace Wefabric\Excel;


interface Excellable
{

    /**
     * @return array
     */
    public function toExcelData(): array;

}
