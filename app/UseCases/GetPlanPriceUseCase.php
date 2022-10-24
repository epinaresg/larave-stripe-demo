<?php

namespace App\UseCases;

use App\Enums\PlanEnum;

class GetPlanPriceUseCase
{
    public function __invoke(string $plan): string
    {
        return match ($plan) {
            'bronze' => PlanEnum::BRONZE_MONTH,
            'silver' => PlanEnum::SILVER_MONTH,
            'gold' => PlanEnum::GOLD_MONTH,
            'bronze_subscription' => PlanEnum::BRONZE_SUBSCRIPTION,
            'silver_subscription' => PlanEnum::SILVER_SUBSCRIPTION,
            'gold_subscription' => PlanEnum::GOLD_SUBSCRIPTION
        };
    }
}
