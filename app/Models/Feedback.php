<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    public function aspiration()
    {
        return  $this->belongsTo(Aspiration::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
