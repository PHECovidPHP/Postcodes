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
final class ST11
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '9AA' => 'E02006215',
        '9AB' => 'E02006215',
        '9AD' => 'E02006215',
        '9AE' => 'E02006215',
        '9AF' => 'E02006215',
        '9AG' => 'E02006215',
        '9AH' => 'E02006215',
        '9AJ' => 'E02006215',
        '9AL' => 'E02006215',
        '9AN' => 'E02006215',
        '9AP' => 'E02006215',
        '9AQ' => 'E02006215',
        '9AR' => 'E02006215',
        '9AS' => 'E02006215',
        '9AT' => 'E02006215',
        '9AU' => 'E02006215',
        '9AW' => 'E02006215',
        '9AX' => 'E02006215',
        '9AY' => 'E02006215',
        '9AZ' => 'E02006215',
        '9BA' => 'E02006188',
        '9BB' => 'E02006215',
        '9BD' => 'E02002979',
        '9BE' => 'E02002979',
        '9BF' => 'E02006188',
        '9BG' => 'E02006215',
        '9BH' => 'E02006215',
        '9BJ' => 'E02006215',
        '9BL' => 'E02006215',
        '9BN' => 'E02006215',
        '9BP' => 'E02006215',
        '9BQ' => 'E02006215',
        '9BS' => 'E02006215',
        '9BT' => 'E02006215',
        '9BU' => 'E02006215',
        '9BW' => 'E02006215',
        '9BX' => 'E02006215',
        '9BY' => 'E02006215',
        '9BZ' => 'E02006215',
        '9DA' => 'E02006215',
        '9DB' => 'E02006215',
        '9DD' => 'E02006215',
        '9DE' => 'E02006215',
        '9DF' => 'E02006215',
        '9DG' => 'E02006215',
        '9DH' => 'E02006215',
        '9DJ' => 'E02006215',
        '9DL' => 'E02006215',
        '9DN' => 'E02006215',
        '9DP' => 'E02006215',
        '9DQ' => 'E02006215',
        '9DR' => 'E02006215',
        '9DS' => 'E02006215',
        '9DT' => 'E02006215',
        '9DU' => 'E02006215',
        '9DW' => 'E02006215',
        '9DX' => 'E02006215',
        '9DY' => 'E02002979',
        '9DZ' => 'E02006215',
        '9EA' => 'E02006215',
        '9EB' => 'E02006215',
        '9ED' => 'E02006215',
        '9EE' => 'E02006215',
        '9EF' => 'E02006215',
        '9EG' => 'E02006215',
        '9EH' => 'E02006215',
        '9EJ' => 'E02006215',
        '9EL' => 'E02006215',
        '9EN' => 'E02006215',
        '9EP' => 'E02006215',
        '9EQ' => 'E02006215',
        '9ER' => 'E02006215',
        '9ES' => 'E02006215',
        '9ET' => 'E02006215',
        '9EU' => 'E02006215',
        '9EW' => 'E02006215',
        '9EX' => 'E02006215',
        '9EY' => 'E02006215',
        '9EZ' => 'E02006215',
        '9FA' => 'E02006215',
        '9FB' => 'E02006215',
        '9FD' => 'E02006215',
        '9FE' => 'E02006215',
        '9FF' => 'E02006188',
        '9FG' => 'E02006215',
        '9FJ' => 'E02006215',
        '9FN' => 'E02006215',
        '9GA' => 'E02006215',
        '9HA' => 'E02006215',
        '9HB' => 'E02006215',
        '9HD' => 'E02006215',
        '9HE' => 'E02006215',
        '9HF' => 'E02006188',
        '9HG' => 'E02006215',
        '9HH' => 'E02006188',
        '9HJ' => 'E02006188',
        '9HL' => 'E02006188',
        '9HN' => 'E02006188',
        '9HP' => 'E02006188',
        '9HQ' => 'E02006215',
        '9HR' => 'E02006188',
        '9HS' => 'E02006188',
        '9HT' => 'E02006188',
        '9HU' => 'E02006188',
        '9HW' => 'E02006188',
        '9HX' => 'E02006188',
        '9HY' => 'E02006188',
        '9HZ' => 'E02006188',
        '9JA' => 'E02006188',
        '9JB' => 'E02006188',
        '9JD' => 'E02006188',
        '9JE' => 'E02006188',
        '9JF' => 'E02006188',
        '9JG' => 'E02006188',
        '9JH' => 'E02006188',
        '9JJ' => 'E02006188',
        '9JL' => 'E02006188',
        '9JN' => 'E02006215',
        '9JP' => 'E02006188',
        '9JQ' => 'E02006215',
        '9JR' => 'E02006215',
        '9JS' => 'E02006188',
        '9JT' => 'E02006188',
        '9JU' => 'E02006188',
        '9JW' => 'E02006215',
        '9JX' => 'E02006188',
        '9JY' => 'E02006188',
        '9JZ' => 'E02006188',
        '9LA' => 'E02006188',
        '9LB' => 'E02006188',
        '9LD' => 'E02006188',
        '9LE' => 'E02006188',
        '9LF' => 'E02006188',
        '9LG' => 'E02006188',
        '9LH' => 'E02006188',
        '9LJ' => 'E02002979',
        '9LL' => 'E02006188',
        '9LN' => 'E02002979',
        '9LP' => 'E02006188',
        '9LQ' => 'E02006188',
        '9LR' => 'E02006188',
        '9LS' => 'E02006188',
        '9LT' => 'E02006215',
        '9LU' => 'E02006215',
        '9LW' => 'E02006188',
        '9LX' => 'E02006215',
        '9LY' => 'E02006215',
        '9LZ' => 'E02006215',
        '9NA' => 'E02006215',
        '9NB' => 'E02006215',
        '9ND' => 'E02006215',
        '9NE' => 'E02006215',
        '9NF' => 'E02006215',
        '9NG' => 'E02006215',
        '9NH' => 'E02006215',
        '9NJ' => 'E02006215',
        '9NL' => 'E02006215',
        '9NN' => 'E02006215',
        '9NP' => 'E02006188',
        '9NQ' => 'E02006215',
        '9NR' => 'E02006215',
        '9NS' => 'E02006215',
        '9NT' => 'E02006215',
        '9NU' => 'E02006215',
        '9NW' => 'E02006215',
        '9NX' => 'E02006215',
        '9NY' => 'E02006215',
        '9NZ' => 'E02006215',
        '9PA' => 'E02006188',
        '9PB' => 'E02006188',
        '9PD' => 'E02006215',
        '9PE' => 'E02006215',
        '9PF' => 'E02006215',
        '9PG' => 'E02006215',
        '9PH' => 'E02006215',
        '9PJ' => 'E02006215',
        '9PL' => 'E02006215',
        '9PN' => 'E02006215',
        '9PP' => 'E02006215',
        '9PQ' => 'E02006215',
        '9PR' => 'E02006215',
        '9PS' => 'E02006215',
        '9PT' => 'E02006215',
        '9PU' => 'E02006215',
        '9PW' => 'E02006215',
        '9PX' => 'E02006215',
        '9PY' => 'E02006215',
        '9PZ' => 'E02006215',
        '9QA' => 'E02006215',
        '9QB' => 'E02006215',
        '9QD' => 'E02006215',
        '9QE' => 'E02006188',
        '9QF' => 'E02006188',
        '9QG' => 'E02006215',
        '9QH' => 'E02006188',
        '9QJ' => 'E02006188',
        '9QL' => 'E02006188',
        '9QN' => 'E02006188',
        '9QP' => 'E02006188',
        '9QQ' => 'E02006188',
        '9QR' => 'E02006188',
        '9QS' => 'E02006188',
        '9QT' => 'E02006188',
        '9QU' => 'E02006188',
        '9QW' => 'E02006188',
        '9QX' => 'E02006188',
        '9QY' => 'E02006215',
        '9QZ' => 'E02006188',
        '9RA' => 'E02006215',
        '9RB' => 'E02006215',
        '9RD' => 'E02006215',
        '9RE' => 'E02006215',
        '9RF' => 'E02006215',
        '9RG' => 'E02006215',
        '9RH' => 'E02006215',
        '9RJ' => 'E02006215',
        '9RL' => 'E02006215',
        '9RN' => 'E02006215',
        '9RP' => 'E02006215',
        '9RQ' => 'E02006215',
        '9RR' => 'E02006215',
        '9RS' => 'E02006215',
        '9RT' => 'E02006188',
        '9RU' => 'E02006188',
        '9RW' => 'E02006215',
        '9RX' => 'E02006188',
        '9RY' => 'E02006188',
        '9RZ' => 'E02006188',
        '9SA' => 'E02006215',
        '9SB' => 'E02006188',
        '9SD' => 'E02006215',
        '9SE' => 'E02006188',
        '9SF' => 'E02006215',
        '9SG' => 'E02006215',
        '9SH' => 'E02002979',
        '9SJ' => 'E02006215',
        '9SL' => 'E02006215',
        '9SN' => 'E02006215',
        '9SP' => 'E02006215',
        '9SQ' => 'E02006215',
        '9SR' => 'E02006188',
        '9SS' => 'E02006188',
        '9ST' => 'E02006188',
        '9SU' => 'E02006215',
        '9SW' => 'E02006215',
        '9SX' => 'E02006215',
        '9SY' => 'E02006215',
        '9TA' => 'E02002979',
        '9TB' => 'E02002979',
        '9TD' => 'E02002979',
        '9TE' => 'E02002979',
        '9TF' => 'E02002979',
        '9TG' => 'E02006215',
        '9TH' => 'E02002979',
        '9TJ' => 'E02002979',
        '9TL' => 'E02006188',
        '9TN' => 'E02006188',
        '9TP' => 'E02006188',
        '9TQ' => 'E02006188',
        '9TR' => 'E02006188',
        '9TS' => 'E02006188',
        '9TT' => 'E02006188',
        '9TU' => 'E02006188',
        '9TW' => 'E02006188',
        '9TX' => 'E02006188',
        '9WA' => 'E02002979',
        '9WB' => 'E02002979',
        '9WE' => 'E02002979',
        '9WH' => 'E02002979',
        '9WL' => 'E02002979',
        '9WN' => 'E02002979',
        '9WS' => 'E02002979',
        '9WZ' => 'E02002979',
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
