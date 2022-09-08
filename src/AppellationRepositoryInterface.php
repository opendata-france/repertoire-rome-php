<?php

namespace OpendataFrance\RepertoireRome;

use OpendataFrance\RepertoireRome\Entity\Appellation;

interface AppellationRepositoryInterface
{
    public static function find(int $code): ?Appellation;
    public static function all(string $codeFiche): array;
}
