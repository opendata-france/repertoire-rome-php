<?php

namespace OpendataFrance\RepertoireRome\Entity;

class Fiche
{
    public function __construct(
        public readonly string $code,
        public readonly string $libelle,
        public readonly string $codeDomaine
    ) {}
}
