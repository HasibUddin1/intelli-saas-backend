<?php

namespace Database\Seeders;

use App\Models\PricingPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PricingPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PricingPlan::create([
            'name' => 'Basic',
            'price_monthly' => 9.99,
            'price_yearly' => 99.99,
            'description' => 'Perfect for individuals',
            'features' => [
                "Unlimited Chats",
                "Basic Analytics",
                "Community Support"
            ],
            'is_popular' => false,
        ]);

        PricingPlan::create([
            'name' => 'Pro',
            'price_monthly' => 29.99,
            'price_yearly' => 299.99,
            'description' => 'Best for small businesses',
            'features' => [
                "AI Automation",
                "Advanced Analytics",
                "Priority Support"
            ],
            'is_popular' => true,
        ]);
    }
}
