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
final class PL18
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02003892',
        '9AB' => 'E02003892',
        '9AD' => 'E02003892',
        '9AE' => 'E02003892',
        '9AF' => 'E02003892',
        '9AG' => 'E02003892',
        '9AH' => 'E02003892',
        '9AJ' => 'E02003892',
        '9AL' => 'E02003892',
        '9AN' => 'E02003892',
        '9AP' => 'E02003892',
        '9AQ' => 'E02003892',
        '9AR' => 'E02003892',
        '9AS' => 'E02003892',
        '9AT' => 'E02003892',
        '9AU' => 'E02003892',
        '9AW' => 'E02003892',
        '9AX' => 'E02003892',
        '9AY' => 'E02003892',
        '9AZ' => 'E02003892',
        '9BA' => 'E02003892',
        '9BB' => 'E02003892',
        '9BD' => 'E02003892',
        '9BE' => 'E02003892',
        '9BG' => 'E02003892',
        '9BH' => 'E02003892',
        '9BJ' => 'E02003892',
        '9BL' => 'E02003892',
        '9BN' => 'E02003892',
        '9BP' => 'E02003892',
        '9BQ' => 'E02003892',
        '9BS' => 'E02003892',
        '9BT' => 'E02003892',
        '9BU' => 'E02003892',
        '9BW' => 'E02003892',
        '9BX' => 'E02003892',
        '9BY' => 'E02003892',
        '9BZ' => 'E02003892',
        '9DA' => 'E02003892',
        '9DB' => 'E02003892',
        '9DD' => 'E02003892',
        '9DE' => 'E02003892',
        '9DF' => 'E02003892',
        '9DG' => 'E02003892',
        '9DH' => 'E02003892',
        '9DJ' => 'E02003892',
        '9DL' => 'E02003892',
        '9DN' => 'E02003892',
        '9DP' => 'E02003892',
        '9DQ' => 'E02003892',
        '9DR' => 'E02003892',
        '9DS' => 'E02003892',
        '9DT' => 'E02003892',
        '9DU' => 'E02003892',
        '9DW' => 'E02003892',
        '9DX' => 'E02003892',
        '9DY' => 'E02003892',
        '9DZ' => 'E02003892',
        '9EA' => 'E02003892',
        '9EB' => 'E02003892',
        '9ED' => 'E02003892',
        '9EE' => 'E02003892',
        '9EF' => 'E02003892',
        '9EG' => 'E02003892',
        '9EH' => 'E02003892',
        '9EJ' => 'E02003892',
        '9EL' => 'E02003892',
        '9EN' => 'E02003892',
        '9EP' => 'E02003892',
        '9EQ' => 'E02003892',
        '9ER' => 'E02003892',
        '9ES' => 'E02003892',
        '9ET' => 'E02003892',
        '9EU' => 'E02003892',
        '9EW' => 'E02003892',
        '9EX' => 'E02003892',
        '9EY' => 'E02003892',
        '9EZ' => 'E02003892',
        '9FA' => 'E02003892',
        '9FB' => 'E02003892',
        '9FD' => 'E02003892',
        '9FE' => 'E02003892',
        '9FF' => 'E02003892',
        '9FG' => 'E02003892',
        '9FH' => 'E02003892',
        '9FJ' => 'E02003892',
        '9FL' => 'E02003892',
        '9FQ' => 'E02003892',
        '9FR' => 'E02003892',
        '9FS' => 'E02003892',
        '9FT' => 'E02003892',
        '9FU' => 'E02003892',
        '9GJ' => 'E02003892',
        '9GZ' => 'E02003892',
        '9HA' => 'E02003892',
        '9HB' => 'E02003892',
        '9HD' => 'E02003892',
        '9HE' => 'E02003892',
        '9HF' => 'E02003892',
        '9HG' => 'E02003892',
        '9HH' => 'E02003892',
        '9HJ' => 'E02003892',
        '9HL' => 'E02003892',
        '9HN' => 'E02003892',
        '9HP' => 'E02003892',
        '9HQ' => 'E02003892',
        '9HR' => 'E02003892',
        '9HS' => 'E02003892',
        '9HT' => 'E02003892',
        '9HU' => 'E02003892',
        '9HW' => 'E02003892',
        '9HX' => 'E02003892',
        '9HY' => 'E02003892',
        '9HZ' => 'E02003892',
        '9JA' => 'E02003892',
        '9JB' => 'E02003892',
        '9JD' => 'E02003892',
        '9JE' => 'E02003892',
        '9JF' => 'E02003892',
        '9JG' => 'E02003892',
        '9JH' => 'E02003892',
        '9JJ' => 'E02003892',
        '9JL' => 'E02003892',
        '9JN' => 'E02003892',
        '9JP' => 'E02003892',
        '9JQ' => 'E02003892',
        '9JR' => 'E02003892',
        '9JS' => 'E02003892',
        '9JT' => 'E02003892',
        '9JU' => 'E02003892',
        '9JW' => 'E02003892',
        '9JX' => 'E02003892',
        '9JZ' => 'E02003892',
        '9LA' => 'E02003892',
        '9LB' => 'E02003892',
        '9LD' => 'E02003892',
        '9LE' => 'E02003892',
        '9LF' => 'E02003892',
        '9LG' => 'E02004232',
        '9LH' => 'E02003892',
        '9LJ' => 'E02003892',
        '9LL' => 'E02003892',
        '9LN' => 'E02003892',
        '9LP' => 'E02003892',
        '9LQ' => 'E02003892',
        '9LR' => 'E02003892',
        '9LS' => 'E02003892',
        '9LT' => 'E02003892',
        '9LU' => 'E02003892',
        '9LW' => 'E02003892',
        '9LX' => 'E02003892',
        '9LZ' => 'E02003892',
        '9NA' => 'E02003892',
        '9NB' => 'E02003892',
        '9ND' => 'E02003892',
        '9NE' => 'E02003892',
        '9NF' => 'E02003892',
        '9NG' => 'E02003892',
        '9NH' => 'E02003892',
        '9NJ' => 'E02003892',
        '9NL' => 'E02003892',
        '9NN' => 'E02003892',
        '9NP' => 'E02003892',
        '9NQ' => 'E02003892',
        '9NR' => 'E02003892',
        '9NS' => 'E02003892',
        '9NT' => 'E02003892',
        '9NU' => 'E02003892',
        '9NW' => 'E02003892',
        '9NX' => 'E02003892',
        '9NY' => 'E02003892',
        '9NZ' => 'E02003892',
        '9PA' => 'E02003892',
        '9PB' => 'E02003892',
        '9PD' => 'E02003892',
        '9PG' => 'E02003892',
        '9PH' => 'E02003892',
        '9PJ' => 'E02003892',
        '9PQ' => 'E02003892',
        '9QA' => 'E02003892',
        '9QB' => 'E02003892',
        '9QD' => 'E02003892',
        '9QE' => 'E02003892',
        '9QF' => 'E02003892',
        '9QG' => 'E02003892',
        '9QH' => 'E02003892',
        '9QJ' => 'E02003892',
        '9QL' => 'E02003892',
        '9QN' => 'E02003892',
        '9QP' => 'E02003892',
        '9QQ' => 'E02003892',
        '9QR' => 'E02003892',
        '9QS' => 'E02003892',
        '9QT' => 'E02003892',
        '9QU' => 'E02003892',
        '9QW' => 'E02003892',
        '9QX' => 'E02003892',
        '9QY' => 'E02003892',
        '9QZ' => 'E02003892',
        '9RA' => 'E02003892',
        '9RB' => 'E02003892',
        '9RD' => 'E02003892',
        '9RE' => 'E02003892',
        '9RF' => 'E02003892',
        '9RG' => 'E02003892',
        '9RH' => 'E02003892',
        '9RJ' => 'E02003892',
        '9RN' => 'E02003892',
        '9RP' => 'E02003892',
        '9RQ' => 'E02003892',
        '9RR' => 'E02003892',
        '9RS' => 'E02003892',
        '9RT' => 'E02003892',
        '9RU' => 'E02003892',
        '9RW' => 'E02003892',
        '9RX' => 'E02003892',
        '9RY' => 'E02003892',
        '9RZ' => 'E02003892',
        '9SA' => 'E02003892',
        '9SB' => 'E02003892',
        '9SD' => 'E02003892',
        '9SE' => 'E02003892',
        '9SF' => 'E02003892',
        '9SG' => 'E02003892',
        '9SH' => 'E02003892',
        '9SJ' => 'E02003892',
        '9SL' => 'E02003892',
        '9SQ' => 'E02003892',
        '9TA' => 'E02003892',
        '9TB' => 'E02003892',
        '9TD' => 'E02003892',
        '9TE' => 'E02003892',
        '9TF' => 'E02003892',
        '9TG' => 'E02003892',
        '9WA' => 'E02003894',
        '9WB' => 'E02003894',
        '9WD' => 'E02003892',
        '9WG' => 'E02003892',
        '9WT' => 'E02003894',
        '9WU' => 'E02003894',
        '9WW' => 'E02003894',
        '9WX' => 'E02003894',
        '9WY' => 'E02003894',
        '9WZ' => 'E02003894',
        '9YR' => 'E02004233',
        '9YS' => 'E02003894',
        '9YT' => 'E02003892',
        '9YX' => 'E02003892',
        '9YY' => 'E02004233',
        '9YZ' => 'E02003892',
        '9ZN' => 'E02004233',
        '9ZQ' => 'E02004233',
        '9ZX' => 'E02003894',
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