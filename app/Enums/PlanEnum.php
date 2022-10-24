<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PlanEnum extends Enum
{
    public const BRONZE_MONTH = '9.90';
    public const SILVER_MONTH = '19.90';
    public const GOLD_MONTH = '29.90';

    public const BRONZE_SUBSCRIPTION = '106.92';
    public const SILVER_SUBSCRIPTION = '214.92';
    public const GOLD_SUBSCRIPTION = '322.92';
}
