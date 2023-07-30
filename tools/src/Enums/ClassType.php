<?php

declare(strict_types=1);

namespace Tools\Enums;

enum ClassType: string
{
    case MODEL = 'Model';

    case COLLECTION = 'Collection';
}
