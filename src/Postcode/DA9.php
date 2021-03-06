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
final class DA9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02005029',
        '9AB' => 'E02005029',
        '9AD' => 'E02005033',
        '9AE' => 'E02005029',
        '9AF' => 'E02005033',
        '9AG' => 'E02005033',
        '9AH' => 'E02005029',
        '9AJ' => 'E02005033',
        '9AL' => 'E02005033',
        '9AN' => 'E02005033',
        '9AP' => 'E02005033',
        '9AQ' => 'E02005033',
        '9AR' => 'E02005033',
        '9AS' => 'E02005033',
        '9AT' => 'E02005033',
        '9AU' => 'E02005033',
        '9AW' => 'E02005033',
        '9AX' => 'E02005033',
        '9AY' => 'E02005033',
        '9AZ' => 'E02005033',
        '9BA' => 'E02005033',
        '9BB' => 'E02005033',
        '9BD' => 'E02005029',
        '9BE' => 'E02005033',
        '9BF' => 'E02005033',
        '9BG' => 'E02005033',
        '9BH' => 'E02005033',
        '9BJ' => 'E02005033',
        '9BL' => 'E02005033',
        '9BN' => 'E02005033',
        '9BP' => 'E02005033',
        '9BQ' => 'E02005033',
        '9BT' => 'E02005029',
        '9BW' => 'E02005033',
        '9BX' => 'E02005029',
        '9BZ' => 'E02005033',
        '9DA' => 'E02005033',
        '9DB' => 'E02005033',
        '9DD' => 'E02005033',
        '9DE' => 'E02005033',
        '9DF' => 'E02005033',
        '9DG' => 'E02005033',
        '9DH' => 'E02005033',
        '9DJ' => 'E02005033',
        '9DL' => 'E02005033',
        '9DN' => 'E02005033',
        '9DP' => 'E02005033',
        '9DQ' => 'E02005033',
        '9DR' => 'E02005033',
        '9DS' => 'E02005033',
        '9DT' => 'E02005033',
        '9DU' => 'E02005033',
        '9DW' => 'E02005033',
        '9DX' => 'E02005033',
        '9DY' => 'E02005033',
        '9DZ' => 'E02005033',
        '9EA' => 'E02005033',
        '9EB' => 'E02005033',
        '9ED' => 'E02005033',
        '9EE' => 'E02005031',
        '9EF' => 'E02005033',
        '9EG' => 'E02005031',
        '9EH' => 'E02005033',
        '9EJ' => 'E02005031',
        '9EL' => 'E02005031',
        '9EN' => 'E02005031',
        '9EP' => 'E02005031',
        '9EQ' => 'E02005031',
        '9ER' => 'E02005031',
        '9ES' => 'E02005029',
        '9ET' => 'E02005031',
        '9EU' => 'E02005031',
        '9EW' => 'E02005031',
        '9EX' => 'E02005031',
        '9EY' => 'E02005029',
        '9EZ' => 'E02005029',
        '9FA' => 'E02005031',
        '9FB' => 'E02005031',
        '9FD' => 'E02005031',
        '9FE' => 'E02005031',
        '9FF' => 'E02005031',
        '9FG' => 'E02005031',
        '9FH' => 'E02005029',
        '9FJ' => 'E02005031',
        '9FL' => 'E02005031',
        '9FN' => 'E02005029',
        '9FP' => 'E02005029',
        '9FQ' => 'E02005029',
        '9FR' => 'E02005031',
        '9FS' => 'E02005031',
        '9FT' => 'E02005031',
        '9FU' => 'E02005031',
        '9FW' => 'E02005031',
        '9FX' => 'E02005031',
        '9FY' => 'E02005031',
        '9FZ' => 'E02005031',
        '9GA' => 'E02005029',
        '9GB' => 'E02005029',
        '9GD' => 'E02005029',
        '9GE' => 'E02005029',
        '9GF' => 'E02005029',
        '9GJ' => 'E02005029',
        '9GL' => 'E02005029',
        '9GN' => 'E02005029',
        '9GP' => 'E02005029',
        '9GQ' => 'E02005029',
        '9GR' => 'E02005029',
        '9GS' => 'E02005029',
        '9GT' => 'E02005029',
        '9GU' => 'E02005029',
        '9GW' => 'E02005029',
        '9GX' => 'E02005031',
        '9GY' => 'E02005029',
        '9GZ' => 'E02005031',
        '9HA' => 'E02005029',
        '9HB' => 'E02005031',
        '9HD' => 'E02005029',
        '9HE' => 'E02005029',
        '9HF' => 'E02005029',
        '9HG' => 'E02005029',
        '9HH' => 'E02005031',
        '9HJ' => 'E02005031',
        '9HL' => 'E02005031',
        '9HN' => 'E02005031',
        '9HP' => 'E02005031',
        '9HQ' => 'E02005029',
        '9HR' => 'E02005029',
        '9HS' => 'E02005029',
        '9HT' => 'E02005029',
        '9HU' => 'E02005029',
        '9HW' => 'E02005031',
        '9HX' => 'E02005031',
        '9HY' => 'E02005031',
        '9HZ' => 'E02005031',
        '9JA' => 'E02005033',
        '9JB' => 'E02005029',
        '9JD' => 'E02005029',
        '9JE' => 'E02005031',
        '9JF' => 'E02005029',
        '9JG' => 'E02005029',
        '9JH' => 'E02005029',
        '9JJ' => 'E02005033',
        '9JL' => 'E02005029',
        '9JN' => 'E02005029',
        '9JP' => 'E02005029',
        '9JQ' => 'E02005029',
        '9JR' => 'E02005033',
        '9JS' => 'E02005033',
        '9JT' => 'E02005033',
        '9JU' => 'E02005033',
        '9JW' => 'E02005033',
        '9JX' => 'E02005033',
        '9JY' => 'E02005033',
        '9JZ' => 'E02005033',
        '9LA' => 'E02005033',
        '9LB' => 'E02005029',
        '9LD' => 'E02005033',
        '9LE' => 'E02005031',
        '9LF' => 'E02005033',
        '9LG' => 'E02005033',
        '9LH' => 'E02005033',
        '9LJ' => 'E02005029',
        '9LL' => 'E02005029',
        '9LN' => 'E02005029',
        '9LP' => 'E02005029',
        '9LQ' => 'E02005033',
        '9LR' => 'E02005031',
        '9LS' => 'E02005029',
        '9LT' => 'E02005029',
        '9LU' => 'E02005029',
        '9LW' => 'E02005029',
        '9LX' => 'E02005029',
        '9LY' => 'E02005029',
        '9LZ' => 'E02005029',
        '9NA' => 'E02005029',
        '9NB' => 'E02005029',
        '9ND' => 'E02005031',
        '9NE' => 'E02005029',
        '9NF' => 'E02005029',
        '9NG' => 'E02005029',
        '9NH' => 'E02005029',
        '9NJ' => 'E02005029',
        '9NL' => 'E02005029',
        '9NN' => 'E02005029',
        '9NP' => 'E02005029',
        '9NQ' => 'E02005029',
        '9NR' => 'E02005029',
        '9NS' => 'E02005029',
        '9NT' => 'E02005029',
        '9NU' => 'E02005029',
        '9NW' => 'E02005029',
        '9NX' => 'E02005029',
        '9NY' => 'E02005029',
        '9NZ' => 'E02005029',
        '9PA' => 'E02005029',
        '9PB' => 'E02005029',
        '9PD' => 'E02005029',
        '9PE' => 'E02005029',
        '9PF' => 'E02005029',
        '9PG' => 'E02005029',
        '9PH' => 'E02005029',
        '9PJ' => 'E02005029',
        '9PL' => 'E02005029',
        '9PN' => 'E02005033',
        '9PP' => 'E02005033',
        '9PQ' => 'E02005029',
        '9PR' => 'E02005033',
        '9PS' => 'E02005033',
        '9PT' => 'E02005033',
        '9PU' => 'E02005033',
        '9PW' => 'E02005033',
        '9PX' => 'E02005033',
        '9PY' => 'E02005031',
        '9PZ' => 'E02005029',
        '9QA' => 'E02005029',
        '9QB' => 'E02005029',
        '9QD' => 'E02005029',
        '9QE' => 'E02005029',
        '9QF' => 'E02005029',
        '9QG' => 'E02005029',
        '9QH' => 'E02005029',
        '9QJ' => 'E02005029',
        '9QL' => 'E02005029',
        '9QN' => 'E02005029',
        '9QP' => 'E02005029',
        '9QQ' => 'E02005029',
        '9QR' => 'E02005029',
        '9QS' => 'E02005029',
        '9QT' => 'E02005029',
        '9QU' => 'E02005029',
        '9QW' => 'E02005029',
        '9QX' => 'E02005029',
        '9QY' => 'E02005029',
        '9QZ' => 'E02005029',
        '9RA' => 'E02005029',
        '9RB' => 'E02005029',
        '9RD' => 'E02005029',
        '9RE' => 'E02005029',
        '9RF' => 'E02005031',
        '9RG' => 'E02005029',
        '9RH' => 'E02005031',
        '9RJ' => 'E02005029',
        '9RL' => 'E02005029',
        '9RN' => 'E02005029',
        '9RP' => 'E02005029',
        '9RQ' => 'E02005029',
        '9RR' => 'E02005033',
        '9RS' => 'E02005029',
        '9RT' => 'E02005029',
        '9RU' => 'E02005029',
        '9RW' => 'E02005029',
        '9RX' => 'E02005029',
        '9RY' => 'E02005029',
        '9RZ' => 'E02005029',
        '9SA' => 'E02005033',
        '9SB' => 'E02005033',
        '9SD' => 'E02005033',
        '9SE' => 'E02005033',
        '9SF' => 'E02005033',
        '9SG' => 'E02005033',
        '9SH' => 'E02005033',
        '9SJ' => 'E02005033',
        '9SL' => 'E02005033',
        '9SN' => 'E02005033',
        '9SP' => 'E02005033',
        '9SQ' => 'E02005033',
        '9SR' => 'E02005033',
        '9SS' => 'E02005033',
        '9ST' => 'E02005033',
        '9SU' => 'E02005033',
        '9SW' => 'E02005033',
        '9SX' => 'E02005033',
        '9SY' => 'E02005031',
        '9SZ' => 'E02005031',
        '9TA' => 'E02005029',
        '9TB' => 'E02005029',
        '9TD' => 'E02005031',
        '9TE' => 'E02005029',
        '9TF' => 'E02005029',
        '9TG' => 'E02005029',
        '9TH' => 'E02005029',
        '9TJ' => 'E02005029',
        '9TL' => 'E02005029',
        '9TN' => 'E02005029',
        '9TP' => 'E02005029',
        '9TQ' => 'E02005029',
        '9TR' => 'E02005029',
        '9TS' => 'E02005029',
        '9TT' => 'E02005029',
        '9TU' => 'E02005029',
        '9TW' => 'E02005029',
        '9TX' => 'E02005029',
        '9TY' => 'E02005029',
        '9TZ' => 'E02005029',
        '9UA' => 'E02005029',
        '9UB' => 'E02005029',
        '9UD' => 'E02005029',
        '9UE' => 'E02005029',
        '9UF' => 'E02005029',
        '9UG' => 'E02005029',
        '9UH' => 'E02005029',
        '9UJ' => 'E02005029',
        '9UL' => 'E02005033',
        '9UN' => 'E02005029',
        '9UP' => 'E02005029',
        '9UQ' => 'E02005029',
        '9UR' => 'E02005029',
        '9US' => 'E02005033',
        '9UT' => 'E02005031',
        '9UU' => 'E02005031',
        '9UW' => 'E02005031',
        '9UX' => 'E02005029',
        '9UY' => 'E02005031',
        '9UZ' => 'E02005031',
        '9WA' => 'E02005029',
        '9WB' => 'E02005029',
        '9WD' => 'E02005029',
        '9WE' => 'E02005029',
        '9WF' => 'E02005029',
        '9WG' => 'E02005029',
        '9WH' => 'E02005029',
        '9WJ' => 'E02005029',
        '9WL' => 'E02005029',
        '9WN' => 'E02005029',
        '9WP' => 'E02005029',
        '9WQ' => 'E02005029',
        '9WR' => 'E02005029',
        '9WS' => 'E02005029',
        '9WT' => 'E02005029',
        '9WU' => 'E02005029',
        '9WW' => 'E02005029',
        '9WX' => 'E02005029',
        '9WY' => 'E02005029',
        '9WZ' => 'E02005029',
        '9XA' => 'E02005029',
        '9XB' => 'E02005029',
        '9XD' => 'E02005029',
        '9XE' => 'E02005029',
        '9XG' => 'E02005029',
        '9XH' => 'E02005029',
        '9XJ' => 'E02005029',
        '9XL' => 'E02005029',
        '9XN' => 'E02005031',
        '9XP' => 'E02005029',
        '9XQ' => 'E02005029',
        '9XR' => 'E02005033',
        '9XS' => 'E02005029',
        '9XT' => 'E02005029',
        '9XU' => 'E02005029',
        '9XW' => 'E02005029',
        '9XX' => 'E02005029',
        '9XY' => 'E02005029',
        '9XZ' => 'E02005029',
        '9YA' => 'E02005029',
        '9YB' => 'E02005029',
        '9YD' => 'E02005029',
        '9YE' => 'E02005029',
        '9YF' => 'E02005033',
        '9YG' => 'E02005033',
        '9YH' => 'E02005033',
        '9YJ' => 'E02005029',
        '9YQ' => 'E02005029',
        '9YT' => 'E02005029',
        '9YZ' => 'E02005029',
        '9ZE' => 'E02005029',
        '9ZF' => 'E02005029',
        '9ZG' => 'E02005030',
        '9ZH' => 'E02005029',
        '9ZJ' => 'E02005029',
        '9ZL' => 'E02005029',
        '9ZN' => 'E02005029',
        '9ZP' => 'E02005029',
        '9ZQ' => 'E02005029',
        '9ZR' => 'E02005029',
        '9ZS' => 'E02005029',
        '9ZT' => 'E02005029',
        '9ZU' => 'E02005029',
        '9ZW' => 'E02005029',
        '9ZX' => 'E02005029',
        '9ZY' => 'E02005029',
        '9ZZ' => 'E02005029',
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
