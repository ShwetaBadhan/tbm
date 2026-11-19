<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    // Allow mass assignment for these fields
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'ip_address',
        'is_read',
    ];

    // Optional: Cast is_read to boolean automatically
    protected $casts = [
        'is_read' => 'boolean',
    ];
}