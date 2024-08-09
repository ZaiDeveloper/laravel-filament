<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'first_name',
    //     'last_name',
    //     'middle_name',
    //     'address',
    //     'zip_code',
    //     'date_of_birth',
    //     'date_hired',
    //     'country_id',
    //     'state_id',
    //     'city_id',
    //     'department_id',
    // ];

    protected $guarded = [];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
