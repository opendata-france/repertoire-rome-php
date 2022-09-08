<?php

namespace OpendataFrance\RepertoireRome;

trait JsonRepositoryTrait
{
    protected static ?array $db = null;

    abstract protected static function path(): string;

    protected static function instance(): array
    {
        if (null === self::$db) {
            $json = \file_get_contents(self::path());
            self::$db = \json_decode($json, true);
        }
        return self::$db;
    }
}
