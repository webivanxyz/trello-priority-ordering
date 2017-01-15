<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCardPriority extends Model
{
	protected $table = 'user_card_priority';
	protected $fillable = ['user_id', 'card_id', 'priority'];
}
