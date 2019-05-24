<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $table = 'trainers';
    protected $primaryKey = 'id';
    public $timestamps = 'true';
}
