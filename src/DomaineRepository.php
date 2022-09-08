<?php

namespace OpendataFrance\RepertoireRome;

use OpendataFrance\RepertoireRome\Entity\Domaine;

class DomaineRepository implements DomaineRepositoryInterface
{
    use JsonRepositoryTrait;

    protected static function path(): string
    {
        return __DIR__ . '/../db/domaine.json';
    }

    public static function find(string $code): ?Domaine
    {
        $results = \array_filter(self::instance(), function(array $item) use ($code) {
            return $item['code'] === $code;
        });
        return \count($results) ? self::map(\reset($results)) : null;
    }

    public static function all(string $codeGrandDomaine): array
    {
        return \array_map(function(array $item) {
            return self::map($item);
        }, \array_filter(self::instance(), function(array $item) use ($codeGrandDomaine) {
            return $codeGrandDomaine === $item['grand_domaine_code'];
        }));
    }

    private static function map(array $item): Domaine
    {
        return new Domaine($item['code'], $item['libelle'], $item['grand_domaine_code']);
    }
}
