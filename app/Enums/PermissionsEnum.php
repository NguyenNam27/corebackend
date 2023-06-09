<?php

namespace App\Enums;

use App\Traits\EnumUpperCase;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self user_create()
 * @method static self user_read()
 * @method static self user_update()
 * @method static self user_delete()
 */
final class PermissionsEnum extends Enum
{
    use EnumUpperCase;
}
