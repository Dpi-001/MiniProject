<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','banner_id','photopath','status'];

    public function banner()
    {
    return $this->belongsTo(Banner::class);
    }
}
