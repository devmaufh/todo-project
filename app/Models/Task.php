<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $title
 * @property string|null $description
 * @property bool $completed
 */
class Task extends Model
{
    protected $fillable = [
        'title','description','completed'
    ];
}
