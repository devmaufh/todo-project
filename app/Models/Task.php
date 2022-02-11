<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * Returns sub tasks relation.
     *
     * @return HasMany
     */
    public function subTasks(): HasMany
    {
        return $this->hasMany(SubTask::class);
    }
}
