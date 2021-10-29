<?php
namespace App\Helpers;

use Ramsey\Uuid\Uuid;

class Gen
{
    public static function uuid()
    {
        $uuid = Uuid::uuid4()->toString();

        return $uuid;
    }
}
