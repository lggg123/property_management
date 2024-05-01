<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceRequest extends Model
{
    use HasFactory;
    protected $fillable = ["title", "description", "status", "property_id"];

    public function property() {
        return $this->belongsTo(Property::class);
    }
}
