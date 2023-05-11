<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverInf extends Model
{
    use HasFactory;

    protected $guarded = [];
    // public function photos()
    // {
    //     $photos = [];
    //     if ($this->filename1) {
    //         $photos['filename1'] = asset('storage/' . $this->filename1);
    //     }
    //     if ($this->filename2) {
    //         $photos['filename2'] = asset('storage/' . $this->filename2);
    //     }
    //     if ($this->filename3) {
    //         $photos['filename3'] = asset('storage/' . $this->filename3);
    //     }
    //     return $photos;
    // }
}
