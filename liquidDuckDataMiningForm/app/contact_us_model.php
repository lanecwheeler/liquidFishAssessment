<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact_us_model extends Model {
    public $table = 'contact_us';
    public $fillable = ['name', 'email', 'company', 'phone', 'subject', 'message'];
}
