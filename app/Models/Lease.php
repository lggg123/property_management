<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    use HasFactory;

    protected $fillable = ["start date", "end date", "monthly_rent", "property_id", "tenant_id"];

    public function property() {
        return $this->belongsTo(Property::class);
    }

    public function tenant() {
        return $this->belongsto(Tenant::class);
    }
}
