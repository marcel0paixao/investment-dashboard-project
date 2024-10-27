<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Laravel\Scout\Searchable;

class Asset extends Model
{
    use HasFactory, SoftDeletes;
    // use HasFactory, SoftDeletes, Searchable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'assets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ticker',
        'name',
        'type_id',
        'price'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function toSearchableArray(): array
    {
	      // All model attributes are made searchable
        $array = $this->toArray();

		    // Then we add some additional fields
        $array['id'] = $this->id;
        $array['ticker'] = $this->ticker;
        $array['name'] = $this->name;

        return $array;
    }
}
