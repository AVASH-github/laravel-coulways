<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table= 'contact_table';

    public $timestamps=false; //Disable automatic timestamps

    protected $fillable=['name','email','message'];

}
