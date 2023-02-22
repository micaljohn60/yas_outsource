<?php

namespace App\Enums;

enum UserAccessType: string
{
    case FREE = 'FREE';
    case PREMIUM = 'PREMIUM';
    case PREMIUM_EXPENSIVE = 'PREMIUM_EXPENSIVE';
}
