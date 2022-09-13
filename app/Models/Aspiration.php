<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspiration extends Model
{
    protected $fillable = [
        'senders_id',
        'categories_id',
        'title',
        'aspiration',
        'location',
        'status'
    ];
    public function feedback()
    {
        return $this->hasOne(Feedback::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // public function images()
    // {
    //     return $this->hasMany(Category::class);
    // }

    public function author()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
