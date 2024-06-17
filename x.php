<?php declare(strict_types=1);

final class Aaa
{
    protected function foo(): void
    {
        $arr = [];
        $key = self::getRandomString();

        $arr[$key] = self::getRandomBool();
        if ($arr[$key]) {
            var_dump($arr);
        }
    }

    private static function getRandomString(): string
    {
        return "asd";
    }

    private static function getRandomBool(): bool
    {
        return false;
    }
}
