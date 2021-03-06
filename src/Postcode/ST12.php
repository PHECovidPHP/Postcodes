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
final class ST12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02006189',
        '9AB' => 'E02006189',
        '9AD' => 'E02006189',
        '9AE' => 'E02006189',
        '9AF' => 'E02006189',
        '9AG' => 'E02006189',
        '9AH' => 'E02006189',
        '9AJ' => 'E02006189',
        '9AL' => 'E02006189',
        '9AN' => 'E02006189',
        '9AP' => 'E02006189',
        '9AQ' => 'E02006189',
        '9AR' => 'E02006189',
        '9AS' => 'E02006189',
        '9AT' => 'E02006189',
        '9AU' => 'E02006189',
        '9AW' => 'E02006189',
        '9AX' => 'E02006189',
        '9AY' => 'E02006189',
        '9AZ' => 'E02006189',
        '9BA' => 'E02006189',
        '9BB' => 'E02006189',
        '9BD' => 'E02006189',
        '9BE' => 'E02006189',
        '9BF' => 'E02002982',
        '9BG' => 'E02006189',
        '9BH' => 'E02006189',
        '9BJ' => 'E02006189',
        '9BL' => 'E02006189',
        '9BN' => 'E02006189',
        '9BP' => 'E02006189',
        '9BQ' => 'E02006189',
        '9BS' => 'E02006189',
        '9BT' => 'E02006189',
        '9BU' => 'E02006189',
        '9BW' => 'E02006189',
        '9BX' => 'E02002966',
        '9BY' => 'E02002982',
        '9BZ' => 'E02002966',
        '9DA' => 'E02006189',
        '9DB' => 'E02006189',
        '9DD' => 'E02006189',
        '9DE' => 'E02006189',
        '9DF' => 'E02006189',
        '9DG' => 'E02006189',
        '9DH' => 'E02006189',
        '9DJ' => 'E02006189',
        '9DL' => 'E02006189',
        '9DN' => 'E02006189',
        '9DP' => 'E02006189',
        '9DQ' => 'E02006189',
        '9DR' => 'E02006189',
        '9DS' => 'E02006189',
        '9DT' => 'E02006189',
        '9DU' => 'E02006189',
        '9DW' => 'E02006189',
        '9DX' => 'E02006189',
        '9DY' => 'E02006189',
        '9DZ' => 'E02006189',
        '9EA' => 'E02006189',
        '9EB' => 'E02006189',
        '9ED' => 'E02006189',
        '9EE' => 'E02006189',
        '9EF' => 'E02006189',
        '9EG' => 'E02006189',
        '9EH' => 'E02006189',
        '9EJ' => 'E02006189',
        '9EL' => 'E02006189',
        '9EN' => 'E02006189',
        '9EP' => 'E02006189',
        '9EQ' => 'E02006189',
        '9ER' => 'E02002982',
        '9ES' => 'E02006189',
        '9ET' => 'E02006189',
        '9EU' => 'E02006189',
        '9EW' => 'E02002984',
        '9EX' => 'E02002984',
        '9EY' => 'E02006189',
        '9EZ' => 'E02006189',
        '9FA' => 'E02002984',
        '9FB' => 'E02002982',
        '9FD' => 'E02002982',
        '9FE' => 'E02002982',
        '9FF' => 'E02002982',
        '9FG' => 'E02002982',
        '9FH' => 'E02002982',
        '9FL' => 'E02002982',
        '9FN' => 'E02002982',
        '9FP' => 'E02002982',
        '9FQ' => 'E02002982',
        '9FR' => 'E02002982',
        '9FS' => 'E02006189',
        '9HA' => 'E02006189',
        '9HB' => 'E02006189',
        '9HD' => 'E02006189',
        '9HE' => 'E02006189',
        '9HF' => 'E02006189',
        '9HG' => 'E02006189',
        '9HH' => 'E02006189',
        '9HJ' => 'E02006189',
        '9HL' => 'E02006189',
        '9HN' => 'E02006189',
        '9HP' => 'E02006189',
        '9HQ' => 'E02006189',
        '9HR' => 'E02006189',
        '9HS' => 'E02002984',
        '9HT' => 'E02006189',
        '9HU' => 'E02006189',
        '9HW' => 'E02006189',
        '9HX' => 'E02006189',
        '9HY' => 'E02006189',
        '9HZ' => 'E02006189',
        '9JA' => 'E02006189',
        '9JB' => 'E02006189',
        '9JD' => 'E02006189',
        '9JE' => 'E02006189',
        '9JF' => 'E02006189',
        '9JG' => 'E02006189',
        '9JH' => 'E02006189',
        '9JJ' => 'E02006189',
        '9JL' => 'E02006189',
        '9JN' => 'E02006189',
        '9JP' => 'E02006189',
        '9JQ' => 'E02006189',
        '9JR' => 'E02006189',
        '9JS' => 'E02002966',
        '9JT' => 'E02002966',
        '9JU' => 'E02002984',
        '9JX' => 'E02002984',
        '9JY' => 'E02006189',
        '9JZ' => 'E02002966',
        '9PA' => 'E02006189',
        '9WA' => 'E02002966',
        '9WN' => 'E02002966',
        '9WP' => 'E02002966',
        '9WQ' => 'E02002966',
        '9WR' => 'E02002966',
        '9WS' => 'E02006208',
        '9WT' => 'E02002966',
        '9WU' => 'E02002966',
        '9WY' => 'E02002966',
        '9WZ' => 'E02002966',
        '9YQ' => 'E02002966',
        '9ZY' => 'E02002966',
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
