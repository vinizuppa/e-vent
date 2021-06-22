<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

    const TYPE_SEMINARIO = 'Seminário';
    const TYPE_CURSO = 'Curso';
    const TYPE_PALESTRA = 'Palestra';

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

}
