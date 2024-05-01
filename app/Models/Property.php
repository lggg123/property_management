<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = ["title", "address", "description", "price"];

    public function leases() {
        return $this->hasMany(Lease::class);
    }

    public function maintenanceRequests() {
        return $this->hasMany(MaintenanceRequest::class);
    }
}
