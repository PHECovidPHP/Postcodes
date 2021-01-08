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
final class ST20
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006202',
        '0AB' => 'E02006202',
        '0AD' => 'E02006202',
        '0AE' => 'E02006202',
        '0AF' => 'E02006202',
        '0AG' => 'E02006202',
        '0AH' => 'E02006202',
        '0AJ' => 'E02006202',
        '0AL' => 'E02006202',
        '0AN' => 'E02006202',
        '0AP' => 'E02006202',
        '0AQ' => 'E02006202',
        '0AR' => 'E02006202',
        '0AS' => 'E02006202',
        '0AT' => 'E02006202',
        '0AU' => 'E02006202',
        '0AW' => 'E02006202',
        '0AX' => 'E02006202',
        '0AY' => 'E02006202',
        '0AZ' => 'E02006202',
        '0BA' => 'E02006202',
        '0BB' => 'E02006202',
        '0BD' => 'E02006202',
        '0BE' => 'E02006202',
        '0BF' => 'E02006202',
        '0BG' => 'E02006202',
        '0BH' => 'E02006202',
        '0BJ' => 'E02006202',
        '0BL' => 'E02006202',
        '0BN' => 'E02006202',
        '0BP' => 'E02006202',
        '0BQ' => 'E02006199',
        '0BS' => 'E02006202',
        '0BT' => 'E02006202',
        '0BU' => 'E02006202',
        '0BW' => 'E02006202',
        '0BX' => 'E02006202',
        '0BY' => 'E02006202',
        '0BZ' => 'E02006202',
        '0DA' => 'E02006202',
        '0DB' => 'E02006202',
        '0DD' => 'E02006202',
        '0DE' => 'E02006202',
        '0DF' => 'E02006202',
        '0DG' => 'E02006202',
        '0DH' => 'E02006202',
        '0DJ' => 'E02006202',
        '0DL' => 'E02006202',
        '0DN' => 'E02006202',
        '0DP' => 'E02006202',
        '0DQ' => 'E02006202',
        '0DR' => 'E02006202',
        '0DS' => 'E02006202',
        '0DT' => 'E02006202',
        '0DU' => 'E02006202',
        '0DW' => 'E02006202',
        '0DX' => 'E02006202',
        '0DY' => 'E02006202',
        '0DZ' => 'E02006202',
        '0EA' => 'E02006202',
        '0EB' => 'E02006202',
        '0ED' => 'E02006202',
        '0EE' => 'E02006202',
        '0EF' => 'E02006202',
        '0EG' => 'E02006202',
        '0EH' => 'E02006202',
        '0EJ' => 'E02006202',
        '0EL' => 'E02006202',
        '0EN' => 'E02006202',
        '0EP' => 'E02006202',
        '0EQ' => 'E02006202',
        '0ER' => 'E02006202',
        '0ES' => 'E02006202',
        '0ET' => 'E02006202',
        '0EU' => 'E02006202',
        '0EW' => 'E02006202',
        '0EX' => 'E02006202',
        '0EY' => 'E02006202',
        '0EZ' => 'E02006202',
        '0FA' => 'E02006202',
        '0FB' => 'E02006202',
        '0FD' => 'E02006202',
        '0FE' => 'E02006202',
        '0FF' => 'E02006202',
        '0FG' => 'E02006202',
        '0FH' => 'E02006202',
        '0FJ' => 'E02006202',
        '0FN' => 'E02006202',
        '0FP' => 'E02006202',
        '0GA' => 'E02006199',
        '0GG' => 'E02006199',
        '0GP' => 'E02006202',
        '0GQ' => 'E02006202',
        '0GR' => 'E02006202',
        '0HA' => 'E02006202',
        '0HB' => 'E02006202',
        '0HD' => 'E02006202',
        '0HE' => 'E02006202',
        '0HF' => 'E02006202',
        '0HG' => 'E02006202',
        '0HH' => 'E02006202',
        '0HJ' => 'E02006202',
        '0HL' => 'E02006202',
        '0HN' => 'E02006202',
        '0HP' => 'E02006202',
        '0HQ' => 'E02006202',
        '0HR' => 'E02006202',
        '0HS' => 'E02006202',
        '0HT' => 'E02006202',
        '0HU' => 'E02006202',
        '0HW' => 'E02006202',
        '0HX' => 'E02006202',
        '0HY' => 'E02006202',
        '0HZ' => 'E02006202',
        '0JA' => 'E02006202',
        '0JB' => 'E02006202',
        '0JD' => 'E02006202',
        '0JE' => 'E02006202',
        '0JF' => 'E02006202',
        '0JG' => 'E02006199',
        '0JH' => 'E02006202',
        '0JJ' => 'E02006202',
        '0JL' => 'E02006202',
        '0JN' => 'E02006202',
        '0JP' => 'E02006202',
        '0JQ' => 'E02006199',
        '0JR' => 'E02006202',
        '0JS' => 'E02006202',
        '0JT' => 'E02006202',
        '0JU' => 'E02006202',
        '0JW' => 'E02006202',
        '0JX' => 'E02006202',
        '0JY' => 'E02006202',
        '0JZ' => 'E02006199',
        '0LA' => 'E02006202',
        '0LB' => 'E02006202',
        '0LD' => 'E02006202',
        '0LE' => 'E02006202',
        '0LF' => 'E02006202',
        '0LG' => 'E02006202',
        '0LH' => 'E02006202',
        '0LJ' => 'E02006202',
        '0LL' => 'E02006202',
        '0LN' => 'E02006202',
        '0LP' => 'E02006202',
        '0LQ' => 'E02006202',
        '0LR' => 'E02006202',
        '0LS' => 'E02006202',
        '0LT' => 'E02006202',
        '0LU' => 'E02006202',
        '0LW' => 'E02006202',
        '0LX' => 'E02006202',
        '0LY' => 'E02006202',
        '0LZ' => 'E02006202',
        '0NA' => 'E02006202',
        '0NB' => 'E02006202',
        '0ND' => 'E02006202',
        '0NE' => 'E02006202',
        '0NF' => 'E02006202',
        '0NG' => 'E02006202',
        '0NH' => 'E02006192',
        '0NJ' => 'E02006202',
        '0NL' => 'E02006202',
        '0NN' => 'E02006202',
        '0NP' => 'E02006202',
        '0NQ' => 'E02006202',
        '0NR' => 'E02006202',
        '0NS' => 'E02006202',
        '0NT' => 'E02006202',
        '0NU' => 'E02006202',
        '0NW' => 'E02006202',
        '0NX' => 'E02006202',
        '0NY' => 'E02006202',
        '0NZ' => 'E02006202',
        '0PA' => 'E02006202',
        '0PB' => 'E02006202',
        '0PD' => 'E02006202',
        '0PE' => 'E02006202',
        '0PF' => 'E02006202',
        '0PG' => 'E02006202',
        '0PH' => 'E02006202',
        '0PJ' => 'E02006199',
        '0PL' => 'E02006202',
        '0PN' => 'E02006202',
        '0PP' => 'E02006202',
        '0PQ' => 'E02006202',
        '0PR' => 'E02006202',
        '0PS' => 'E02006199',
        '0PT' => 'E02006202',
        '0PU' => 'E02006202',
        '0PW' => 'E02006202',
        '0PX' => 'E02006202',
        '0PY' => 'E02006202',
        '0PZ' => 'E02006202',
        '0QA' => 'E02006202',
        '0QB' => 'E02006202',
        '0QD' => 'E02006192',
        '0QE' => 'E02006192',
        '0QF' => 'E02006192',
        '0QG' => 'E02006192',
        '0QH' => 'E02006192',
        '0QJ' => 'E02006192',
        '0QL' => 'E02006202',
        '0QN' => 'E02006202',
        '0QP' => 'E02006202',
        '0QQ' => 'E02006192',
        '0QR' => 'E02006202',
        '0QS' => 'E02006202',
        '0QT' => 'E02006202',
        '0QU' => 'E02006202',
        '0QW' => 'E02006192',
        '0QX' => 'E02006192',
        '0QY' => 'E02006202',
        '0QZ' => 'E02006202',
        '0RA' => 'E02006192',
        '0RB' => 'E02006192',
        '0RD' => 'E02006192',
        '0RE' => 'E02006192',
        '0RF' => 'E02006192',
        '0RG' => 'E02006192',
        '0RH' => 'E02006192',
        '0RJ' => 'E02006202',
        '0RL' => 'E02006202',
        '0RN' => 'E02006202',
        '0RP' => 'E02006202',
        '0RQ' => 'E02006192',
        '0RR' => 'E02006202',
        '0RS' => 'E02006202',
        '0RT' => 'E02006202',
        '0RU' => 'E02006202',
        '0RW' => 'E02006202',
        '0RX' => 'E02006202',
        '0RY' => 'E02006202',
        '0RZ' => 'E02006199',
        '0SA' => 'E02006199',
        '0SB' => 'E02006202',
        '0SD' => 'E02006199',
        '0SE' => 'E02006199',
        '0SF' => 'E02006199',
        '0SG' => 'E02006199',
        '0SH' => 'E02006202',
        '0SJ' => 'E02006199',
        '0SL' => 'E02006199',
        '0SN' => 'E02006199',
        '0SQ' => 'E02006199',
        '0UZ' => 'E02006202',
        '0WA' => 'E02006199',
        '0WB' => 'E02006199',
        '0WD' => 'E02006199',
        '0WE' => 'E02006199',
        '0WG' => 'E02006199',
        '0WH' => 'E02006199',
        '0WJ' => 'E02006199',
        '0WL' => 'E02006199',
        '0WN' => 'E02006199',
        '0WP' => 'E02006199',
        '0WQ' => 'E02006199',
        '0WR' => 'E02006199',
        '0WS' => 'E02006199',
        '0WT' => 'E02006199',
        '0WU' => 'E02006199',
        '0WY' => 'E02006199',
        '0WZ' => 'E02006199',
        '0XA' => 'E02006199',
        '0XB' => 'E02006199',
        '0XD' => 'E02006199',
        '0YP' => 'E02006199',
        '0YR' => 'E02006199',
        '0YZ' => 'E02006199',
        '0ZH' => 'E02006199',
        '0ZX' => 'E02006199',
        '0ZY' => 'E02006199',
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
