<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploadfile extends Model
{
    use HasFactory;

    protected $fillable = ['fileable_id', 'fileable_type', 'filename', 'savename'];

    /**
     * @return bool|null
     */
    public function delete()
    {
        if (Storage::exists($this->savename)) {
            Storage::delete($this->savename);
        }

        return parent::delete();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function fileable()
    {
        return $this->morphTo();
    }
}
