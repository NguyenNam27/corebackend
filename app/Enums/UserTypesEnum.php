<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;
use App\Traits\EnumUpperCase;

/**
 * @method static self admin()
 * @method static self staff()
 * @method static self shop()
 * @method static self customer()
 * @method static self delivery_hero()
 * @method static self walk_in()
 */
final class UserTypesEnum extends Enum
{
    use EnumUpperCase;
}
