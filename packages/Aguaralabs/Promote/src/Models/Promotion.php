<?php

namespace Aguaralabs\Promote\Models;

use Illuminate\Database\Eloquent\Model;
use Aguaralabs\Promote\Contracts\Promotion as PromotionContract;

class Promotion extends Model implements PromotionContract
{
    protected $fillable = [];
}