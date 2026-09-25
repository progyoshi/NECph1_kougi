<?php

namespace Database\Factories;

// 🔽 2行追加
use App\Models\Tweet;
use App\Models\User;

// use App\Models\Comment; // デフォで入ってた行、資料にはない
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // 🔽 追加
        return [
            'comment' => fake()->sentence(),
            'user_id' => User::factory(),
            'tweet_id' => Tweet::factory(),
        ];
    }
}
