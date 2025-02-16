<?php

namespace Shoronovivan\OtusPackage;

class Rounder
{
    /**
     * Округляет число с заданной точностью и типом округления.
     *
     * @param float $number Число для округления.
     * @param int $precision Количество знаков после запятой.
     * @param int $mode Тип округления (PHP_ROUND_HALF_UP, PHP_ROUND_HALF_DOWN и т. д.).
     * @return float Округлённое число.
     */
    public static function roundNumber(float $number, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float {
        return round($number, $precision, $mode);
    }
}