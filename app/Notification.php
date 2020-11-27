<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'to', 'subject', 'text', 'is_read'
    ];
}
