<?php

namespace OpendataFrance\RepertoireRome;

use OpendataFrance\RepertoireRome\Entity\Domaine;

interface DomaineRepositoryInterface
{
    public static function find(string $code): ?Domaine;
    public static function all(string $codeGrandDomaine): array;
}
