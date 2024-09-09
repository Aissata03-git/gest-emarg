<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emargement extends Model
{
    use HasFactory;

    protected $fillable = ['person_id', 'date', 'time_in', 'time_out'];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function getHoursWorkedAttribute()
    {
        if ($this->time_out) {
            return Carbon::parse($this->time_in)->diffInHours(Carbon::parse($this->time_out));
        }
        return 0;
    }
}
