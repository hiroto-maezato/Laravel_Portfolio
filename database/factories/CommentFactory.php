<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Comment;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body' => 'それは気の毒でしたね。',
        'post_id' => 2,
        'user_id' => 2,
    ];
});
