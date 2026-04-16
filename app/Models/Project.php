<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'site_id',
        'site_name',
        'lattitude',
        'longitude',
        'sow_id',
        'assign_date',
        'employee_id',
        'progress',
        'permit_start_date',
        'permit_end_date',
        'start_action_date',
        'end_action_date',
        'foto_ba_outbound',
        'foto_ba_inbound'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function sow()
    {
        return $this->belongsTo(Sow::class, 'sow_id');
    }
}
