<?php

namespace App\Enums;

enum UserType: string
{
    case BUYER = 'buyer';
    case SELLER = 'seller';
    case ADMIN = 'admin';
}
