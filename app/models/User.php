<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{

    public $name;

    public $otherName;

    public $timestamps = [];

    protected $filltable = ['username', 'email'];

}