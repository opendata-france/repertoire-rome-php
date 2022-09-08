<?php

namespace OpendataFrance\RepertoireRome;

use OpendataFrance\RepertoireRome\Entity\GrandDomaine;

class GrandDomaineRepository implements GrandDomaineRepositoryInterface
{
    use JsonRepositoryTrait;

    protected static function path(): string
    {
        return __DIR__ . '/../etc/db/grand-domaine.json';
    }

    public static function find(string $code): ?GrandDomaine
    {
        $results = \array_filter(self::instance(), function(array $item) use ($code) {
            return $item['code'] === $code;
        });
        return \count($results) ? self::map(\reset($results)) : null;
    }

    public static function all(): array
    {
        return \array_map(function(array $item) {
            return self::map($item);
        }, self::instance());
    }

    private static function map(array $item): GrandDomaine
    {
        return new GrandDomaine($item['code'], $item['libelle']);
    }
}
