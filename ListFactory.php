<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'Item_name' => $faker ->Itemname,
        'Description' => $faker ->Description,
        'Creation_Date' => $faker ->Creationdate,
        'Due_Date' => $faker ->DueDate,
        'completion_flag' => $faker ->Completion,
    ];
});
