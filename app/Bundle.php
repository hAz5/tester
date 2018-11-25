<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bundle extends Model
{
    const ID = 'id';
    const NAME = 'name';
    const DIR = 'dir';
    const STATUS = 'status';
    const TABLE = 'bundles';

    protected $table = self::TABLE;

    protected $guarded = [self::ID];
}
