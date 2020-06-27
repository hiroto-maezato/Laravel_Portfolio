<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => 'インパクトのあるタイトルです',
        'body' => '本文です。いかがでしょうか。楽しんでいただけたら幸いです。やはり、夏はクーラーがないと暑いですね。僕、2週間前に頭痛がしたんです。前日にお酒を飲んでたこともあって
                   「どうせ二日酔いだろう」とたかをくくっていましたら、日に日に悪化していきまして、眠れぬほどの頭痛になったのですよ。',
         'user_id' => 2,

    ];
});
