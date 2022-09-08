<?php

namespace OpendataFrance\RepertoireRome;

use OpendataFrance\RepertoireRome\Entity\Fiche;

interface FicheRepositoryInterface
{
    public static function find(string $code): ?Fiche;
    public static function all(string $codeDomaine): array;
}
