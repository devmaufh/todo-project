<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $title
 * @property bool $completed
 * @property string $image_url
 * @property int $task_id
 */
class SubTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'completed', 'image_url', 'task_id'
    ];

    /**
     * Returns task relation.
     *
     * @return BelongsTo
     */
    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }
}
