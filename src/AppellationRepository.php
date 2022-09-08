<?php

namespace OpendataFrance\RepertoireRome;

use OpendataFrance\RepertoireRome\Entity\Appellation;

class AppellationRepository implements AppellationRepositoryInterface
{
    use JsonRepositoryTrait;

    protected static function path(): string
    {
        return __DIR__ . '/../db/appellation.json';
    }

    public static function find(int $code): ?Appellation
    {
        $results = \array_filter(self::instance(), function(array $item) use ($code) {
            return $item['code'] === $code;
        });
        return \count($results) ? self::map(\reset($results)) : null;
    }

    public static function all(string $codeFiche): array
    {
        return \array_map(function(array $item) {
            return self::map($item);
        }, \array_filter(self::instance(), function(array $item) use ($codeFiche) {
            return $codeFiche === $item['fiche_code'];
        }));
    }

    private static function map(array $item): Appellation
    {
        return new Appellation($item['code'], $item['libelle'], $item['fiche_code']);
    }
}
