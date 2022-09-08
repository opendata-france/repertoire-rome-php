<?php

namespace OpendataFrance\RepertoireRome\Entity;

class Domaine
{
    public function __construct(
        public readonly string $code,
        public readonly string $libelle,
        public readonly string $codeGrandDomaine
    ) {}
}
