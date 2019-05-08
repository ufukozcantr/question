<?php

namespace ufukozcantr\Question\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use ufukozcantr\Question\Traits\CudSupport;

class Question extends Model
{
    use SoftDeletes, CudSupport;
    protected $fillable = ['content', 'data'];
    protected $guard_name = 'web';

    public function getDataAttribute()
    {
        if (isset($this->attributes['data']))
            return json_decode($this->attributes['data']);
        else
            return null;
    }
}
