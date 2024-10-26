<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAssets extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_assets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'asset_id',
        'user_id',
        'message_count',
        'average_cost'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    public function asset() {
        return $this->BelongsTo(Asset::class);
    }

    public function user() {
        return $this->BelongsTo(User::class);
    }
}
