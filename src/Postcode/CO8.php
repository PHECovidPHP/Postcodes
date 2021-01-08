<?php

declare(strict_types=1);

/*
 * This file is part of the PHE Postcode to MSOA.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHECovid\Postcodes\Postcode;

/**
 * @internal
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
final class CO8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02006232',
        '5AB' => 'E02006232',
        '5AD' => 'E02004447',
        '5AE' => 'E02004447',
        '5AF' => 'E02006232',
        '5AG' => 'E02004447',
        '5AH' => 'E02004515',
        '5AJ' => 'E02004515',
        '5AL' => 'E02004515',
        '5AN' => 'E02004515',
        '5AP' => 'E02004447',
        '5AQ' => 'E02006232',
        '5AR' => 'E02004515',
        '5AS' => 'E02004515',
        '5AT' => 'E02004515',
        '5AU' => 'E02004515',
        '5AW' => 'E02004515',
        '5AX' => 'E02004515',
        '5AY' => 'E02004515',
        '5AZ' => 'E02004515',
        '5BA' => 'E02004515',
        '5BB' => 'E02004515',
        '5BD' => 'E02004447',
        '5BE' => 'E02004447',
        '5BG' => 'E02004447',
        '5BH' => 'E02004515',
        '5BJ' => 'E02006232',
        '5BL' => 'E02006232',
        '5BN' => 'E02006232',
        '5BP' => 'E02006232',
        '5BQ' => 'E02004447',
        '5BS' => 'E02006232',
        '5BT' => 'E02006232',
        '5BU' => 'E02004447',
        '5BW' => 'E02006235',
        '5BX' => 'E02006232',
        '5BY' => 'E02006232',
        '5BZ' => 'E02006232',
        '5DA' => 'E02006232',
        '5DB' => 'E02006232',
        '5DD' => 'E02004447',
        '5DE' => 'E02004447',
        '5DF' => 'E02004447',
        '5DG' => 'E02004447',
        '5DH' => 'E02004447',
        '5DJ' => 'E02004447',
        '5DL' => 'E02004447',
        '5DN' => 'E02004447',
        '5DP' => 'E02004447',
        '5DQ' => 'E02004447',
        '5DR' => 'E02004447',
        '5DS' => 'E02004447',
        '5DT' => 'E02004447',
        '5DU' => 'E02004447',
        '5DW' => 'E02004447',
        '5DX' => 'E02004447',
        '5DY' => 'E02004447',
        '5DZ' => 'E02004447',
        '5EA' => 'E02004447',
        '5EB' => 'E02004447',
        '5ED' => 'E02006232',
        '5EE' => 'E02004447',
        '5EF' => 'E02006232',
        '5EG' => 'E02006232',
        '5EH' => 'E02004447',
        '5EJ' => 'E02004447',
        '5EL' => 'E02004447',
        '5EN' => 'E02004447',
        '5EP' => 'E02004447',
        '5EQ' => 'E02006232',
        '5ER' => 'E02004447',
        '5ES' => 'E02004447',
        '5ET' => 'E02004447',
        '5EU' => 'E02004447',
        '5EW' => 'E02004447',
        '5EX' => 'E02004447',
        '5EY' => 'E02004447',
        '5EZ' => 'E02004447',
        '5FA' => 'E02004447',
        '5FB' => 'E02004447',
        '5FD' => 'E02004447',
        '5FL' => 'E02006232',
        '5HA' => 'E02004447',
        '5HB' => 'E02004447',
        '5HD' => 'E02004447',
        '5HE' => 'E02004447',
        '5HF' => 'E02004447',
        '5HG' => 'E02004447',
        '5HH' => 'E02004447',
        '5HJ' => 'E02004447',
        '5HL' => 'E02004447',
        '5HN' => 'E02004447',
        '5HP' => 'E02004447',
        '5HQ' => 'E02004447',
        '5HR' => 'E02004447',
        '5HS' => 'E02004447',
        '5HT' => 'E02004447',
        '5HU' => 'E02006232',
        '5HW' => 'E02004447',
        '5HX' => 'E02006232',
        '5HY' => 'E02004447',
        '5HZ' => 'E02006232',
        '5JA' => 'E02006232',
        '5JB' => 'E02006232',
        '5JD' => 'E02006232',
        '5JE' => 'E02006232',
        '5JF' => 'E02004447',
        '5JG' => 'E02006232',
        '5JH' => 'E02006232',
        '5JJ' => 'E02006232',
        '5JL' => 'E02006232',
        '5JN' => 'E02006232',
        '5JP' => 'E02006232',
        '5JQ' => 'E02006232',
        '5JR' => 'E02006232',
        '5JS' => 'E02006232',
        '5JT' => 'E02006232',
        '5JU' => 'E02006232',
        '5JW' => 'E02006232',
        '5JX' => 'E02006232',
        '5JY' => 'E02006235',
        '5JZ' => 'E02006232',
        '5LA' => 'E02006232',
        '5LB' => 'E02006232',
        '5LD' => 'E02006232',
        '5LF' => 'E02006232',
        '5LG' => 'E02006232',
        '5LH' => 'E02006232',
        '5LJ' => 'E02006232',
        '5LL' => 'E02006232',
        '5LN' => 'E02006232',
        '5LS' => 'E02006232',
        '5LW' => 'E02006232',
        '5WA' => 'E02006232',
        '5WB' => 'E02004447',
        '5WE' => 'E02006232',
        '5WF' => 'E02006232',
        '5WY' => 'E02004447',
        '5WZ' => 'E02006232',
        '5XF' => 'E02006232',
        '5ZB' => 'E02006232',
    ];

    /**
     * @param string $inwardCode
     *
     * @return string
     */
    public static function lookup(string $inwardCode): string
    {
        $msoaCode = self::MAP[$inwardCode] ?? null;

        if (null === $msoaCode) {
            throw new \InvalidArgumentException('Unknown inward code.');
        }

        return $msoaCode;
    }
}
