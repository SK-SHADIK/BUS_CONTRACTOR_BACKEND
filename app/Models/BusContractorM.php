<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusContractorM extends Model
{
    use HasFactory;
    protected $table="bus_contractor";
    protected $primaryKey="c_id";
}
