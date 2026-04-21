<?php

namespace App\Exports;

use App\Models\Project;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProjectExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Project::with(['employee','sow'])
            ->get()
            ->map(function ($e) {
                return [
                    'site_id' => $e->site_id,
                    'site_name' => $e->site_name,
                    'lattitude' => $e->lattitude,
                    'longitude' => $e->longitude,
                    'sow_id' => $e->sow?->title,
                    'employee_id' => $e->employee?->fullname,
                    'progress' => $e->progress
                ];
            });
    }

    public function headings(): array
    {
        return ['site_id', 'site_name', 'lattitude', 'longitude', 'sow_id', 'employee_id', 'progress'];
    }
}
