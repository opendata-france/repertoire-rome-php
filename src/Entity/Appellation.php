<?php

namespace OpendataFrance\RepertoireRome\Entity;

class Appellation
{
    public function __construct(
        public readonly int $code,
        public readonly string $libelle,
        public readonly string $codeFiche
    ) {}
}
