<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Health extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function driver():BelongsTo
    {
        return $this->belongsTo(DriverInf::class);
    }
}
