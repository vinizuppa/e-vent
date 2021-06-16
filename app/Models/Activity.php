<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'type',
        'place',
        'vacancies',
        'instructions',
        'responsible'
    ];

    protected $dates = [
        'start_date',
        'end_date'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function startDate()
    {
        return date('d/m/Y H:i', strtotime($this->start_date));
    }

    public function endDate()
    {
        return date('d/m/Y H:i', strtotime($this->end_date));
    }

    public function activityDuration()
    {
        return date_diff(date_create($this->start_date), date_create($this->end_date))->format('%d dias');
    }
}
