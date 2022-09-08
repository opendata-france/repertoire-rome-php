<?php

namespace OpendataFrance\RepertoireRome;

use OpendataFrance\RepertoireRome\Entity\Fiche;

class FicheRepository implements FicheRepositoryInterface
{
    use JsonRepositoryTrait;

    protected static function path(): string
    {
        return __DIR__ . '/../db/fiche.json';
    }

    public static function find(string $code): ?Fiche
    {
        $results = \array_filter(self::instance(), function(array $item) use ($code) {
            return $item['code'] === $code;
        });
        return \count($results) ? self::map(\reset($results)) : null;
    }

    public static function all(string $codeDomaine): array
    {
        return \array_map(function(array $item) {
            return self::map($item);
        }, \array_filter(self::instance(), function(array $item) use ($codeDomaine) {
            return $codeDomaine === $item['domaine_code'];
        }));
    }

    private static function map(array $item): Fiche
    {
        return new Fiche($item['code'], $item['libelle'], $item['domaine_code']);
    }
}
