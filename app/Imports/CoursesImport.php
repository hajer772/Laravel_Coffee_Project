<?php

namespace App\Imports;

use App\Models\Course;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CoursesImport implements ToModel, WithHeadingRow, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Course([
            "section_id" => $row['section_id'],
            "category_id" => $row['category_id'],
            "price" => $row['price'],
            "ar" => [
                'title' => $row['title_ar'],
                'description' => $row['description_ar'],
            ],
            "en" => [
                'title' => $row['title_en'],
                'description' => $row['description_en'],
            ],

        ]);
    }
}
