<?php

namespace App\Imports;

use App\Models\Category;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class CategoryImport implements ToModel, WithHeadingRow,WithBatchInserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Category([
            'id' => (int) $row['id'],
            'title'=>[
                'pl'=>$row['name'],
                'en'=>$row['name'].'En'
            ],
            'parent_id'=>(int) $row['parent'] == 0 ? NULL : (int) $row['parent'],
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s')
        ]);
    }

    public function batchSize(): int
    {
        return 10;
    }

}
