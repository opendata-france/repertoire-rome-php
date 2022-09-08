<?php

namespace OpendataFrance\RepertoireRome\Entity;

class GrandDomaine
{
    public function __construct(public readonly string $code, public readonly string $libelle) {}
}
