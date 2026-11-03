<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['judul', 'artis', 'album', 'genre', 'durasi'])]

class Lagu extends Model
{
    /** @use HasFactory<\Database\Factories\LaguFactory> */
    use HasFactory;
}
