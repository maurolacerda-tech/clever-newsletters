<?php
namespace Modules\Newsletters\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = ['name','email','phone','menu_id'];
}