<?php

namespace Youtube;


class Channel extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
