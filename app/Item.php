<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Item
 * @package App
 */
class Item extends Model
{
    use SoftDeletes;

    /**
     * @var string[]
     */
    protected $fillable = [
        'code',
        'description',
        'status_id',
        'project_id',
        'nature_id',
        'type_id'
    ];

    /**
     * @return BelongsTo
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    /**
     * @return BelongsTo
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    /**
     * @return HasMany
     */
    public function steps(): HasMany
    {
        return $this->hasMany(Step::class);
    }

    /**
     * @param $step_map_id
     * @return Model|HasMany|object|null
     */
    public function step($step_map_id)
    {
        return $this->steps()->where('step_map_id', $step_map_id)->first();
    }

    /**
     * @return BelongsTo
     */
    public function nature()
    {
        return $this->belongsTo(Nature::class, 'nature_id');
    }

    /**
     * @return BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
