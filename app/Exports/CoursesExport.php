<?php

namespace App\Exports;

use App\Models\Course;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CoursesExport implements FromCollection, WithMapping, WithHeadings
{
    public function collection()
    {
        return Course::all();
    }

    public function headings(): array
    {
        return [
            "#",
            "Title In Arabic",
            "Title In English",
            "Description In Arabic",
            "Description In English",
            "Section ID",
            "Category ID",
            "Price",
            "Created at",
            "Updated at",
        ];
    }

    public function map($course): array
    {
        return [
            $course->id,
            $course->translate("ar")->title,
            $course->translate("en")->title,
            $course->translate("ar")->description,
            $course->translate("en")->description,
            $course->section_id,
            $course->category_id,
            $course->price,
            formatDate($course->created_at),
            formatDate($course->updated_at),
        ];
    }
}
