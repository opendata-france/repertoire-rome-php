<?php

namespace OpendataFrance\RepertoireRome;

use OpendataFrance\RepertoireRome\Entity\GrandDomaine;

interface GrandDomaineRepositoryInterface
{
    public static function find(string $code): ?GrandDomaine;
    public static function all(): array;
}
