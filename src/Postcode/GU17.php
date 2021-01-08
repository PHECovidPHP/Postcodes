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
final class GU17
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004753',
        '0AB' => 'E02004753',
        '0AD' => 'E02004753',
        '0AE' => 'E02004753',
        '0AF' => 'E02004753',
        '0AG' => 'E02004753',
        '0AH' => 'E02004753',
        '0AJ' => 'E02004753',
        '0AL' => 'E02004753',
        '0AN' => 'E02004753',
        '0AP' => 'E02004753',
        '0AR' => 'E02004753',
        '0AS' => 'E02004753',
        '0AT' => 'E02004753',
        '0AU' => 'E02004753',
        '0AW' => 'E02004753',
        '0AX' => 'E02004753',
        '0AY' => 'E02004753',
        '0AZ' => 'E02004753',
        '0BA' => 'E02004753',
        '0BB' => 'E02004753',
        '0BD' => 'E02004753',
        '0BE' => 'E02004753',
        '0BF' => 'E02006423',
        '0BG' => 'E02006423',
        '0BH' => 'E02004753',
        '0BJ' => 'E02004753',
        '0BL' => 'E02004753',
        '0BN' => 'E02004753',
        '0BP' => 'E02004753',
        '0BQ' => 'E02004753',
        '0BS' => 'E02004753',
        '0BT' => 'E02004753',
        '0BU' => 'E02004753',
        '0BW' => 'E02006423',
        '0BX' => 'E02004753',
        '0BY' => 'E02004753',
        '0BZ' => 'E02004753',
        '0DB' => 'E02004753',
        '0DD' => 'E02004753',
        '0DE' => 'E02004753',
        '0DF' => 'E02004753',
        '0DG' => 'E02004753',
        '0DH' => 'E02004753',
        '0DJ' => 'E02004753',
        '0DL' => 'E02004753',
        '0DN' => 'E02004753',
        '0DP' => 'E02004753',
        '0DQ' => 'E02004753',
        '0DR' => 'E02004751',
        '0DS' => 'E02004753',
        '0DT' => 'E02004753',
        '0DU' => 'E02004753',
        '0DW' => 'E02004753',
        '0DX' => 'E02004753',
        '0DY' => 'E02004753',
        '0DZ' => 'E02004753',
        '0EA' => 'E02004753',
        '0EB' => 'E02004753',
        '0ED' => 'E02004753',
        '0EE' => 'E02004753',
        '0EF' => 'E02004753',
        '0EG' => 'E02004753',
        '0EH' => 'E02004753',
        '0EJ' => 'E02004753',
        '0EL' => 'E02004753',
        '0EN' => 'E02004753',
        '0EP' => 'E02004753',
        '0EQ' => 'E02004753',
        '0ER' => 'E02004753',
        '0ES' => 'E02004753',
        '0ET' => 'E02004753',
        '0EU' => 'E02004753',
        '0EW' => 'E02004753',
        '0EX' => 'E02004753',
        '0EY' => 'E02004753',
        '0EZ' => 'E02004753',
        '0HA' => 'E02004753',
        '0HB' => 'E02004753',
        '0HD' => 'E02004753',
        '0HE' => 'E02004753',
        '0HF' => 'E02004753',
        '0HG' => 'E02004753',
        '0HH' => 'E02004753',
        '0HJ' => 'E02004753',
        '0HL' => 'E02004753',
        '0HN' => 'E02004753',
        '0HP' => 'E02004753',
        '0HQ' => 'E02004753',
        '0HR' => 'E02006423',
        '0HS' => 'E02004753',
        '0HW' => 'E02004753',
        '0HY' => 'E02004753',
        '0HZ' => 'E02004753',
        '0JA' => 'E02004753',
        '0JB' => 'E02004753',
        '0JD' => 'E02004753',
        '0JE' => 'E02004753',
        '0JF' => 'E02004753',
        '0JG' => 'E02004753',
        '0JH' => 'E02004753',
        '0JJ' => 'E02004753',
        '0JL' => 'E02004753',
        '0JN' => 'E02004753',
        '0JP' => 'E02004753',
        '0JQ' => 'E02004753',
        '0JS' => 'E02004753',
        '0JT' => 'E02004753',
        '0JU' => 'E02004753',
        '0JW' => 'E02004753',
        '0JX' => 'E02004753',
        '0JY' => 'E02004753',
        '0JZ' => 'E02004753',
        '0LA' => 'E02004753',
        '0LB' => 'E02004753',
        '0LD' => 'E02004753',
        '0LE' => 'E02004753',
        '0LF' => 'E02004753',
        '0LG' => 'E02004753',
        '0LH' => 'E02004753',
        '0LJ' => 'E02004753',
        '0LL' => 'E02004753',
        '0LP' => 'E02004753',
        '0LQ' => 'E02004753',
        '0LS' => 'E02004753',
        '0LT' => 'E02004753',
        '0LU' => 'E02004753',
        '0LX' => 'E02004753',
        '0LY' => 'E02004753',
        '0LZ' => 'E02004753',
        '0NA' => 'E02004753',
        '0NB' => 'E02004753',
        '0ND' => 'E02006423',
        '0NE' => 'E02004753',
        '0NF' => 'E02004753',
        '0NG' => 'E02004753',
        '0NH' => 'E02004753',
        '0NJ' => 'E02004753',
        '0NL' => 'E02004753',
        '0NN' => 'E02004753',
        '0NP' => 'E02004753',
        '0NQ' => 'E02004753',
        '0NR' => 'E02004753',
        '0NS' => 'E02004753',
        '0NT' => 'E02004753',
        '0NU' => 'E02004753',
        '0NW' => 'E02004753',
        '0NX' => 'E02004753',
        '0NY' => 'E02004753',
        '0NZ' => 'E02004753',
        '0PA' => 'E02004753',
        '0PB' => 'E02006423',
        '0PD' => 'E02004753',
        '0PG' => 'E02004753',
        '0PH' => 'E02004753',
        '0PJ' => 'E02004753',
        '0PL' => 'E02004753',
        '0PN' => 'E02004753',
        '0PP' => 'E02004753',
        '0PQ' => 'E02004753',
        '0PR' => 'E02004753',
        '0PS' => 'E02004753',
        '0PT' => 'E02004753',
        '0PU' => 'E02004753',
        '0PW' => 'E02004753',
        '0PX' => 'E02004753',
        '0PZ' => 'E02004753',
        '0QA' => 'E02004753',
        '0QB' => 'E02004753',
        '0QD' => 'E02006423',
        '0QE' => 'E02004753',
        '0QF' => 'E02004753',
        '0QG' => 'E02006423',
        '0QH' => 'E02004753',
        '0QJ' => 'E02004753',
        '0QL' => 'E02006423',
        '0QN' => 'E02006423',
        '0QP' => 'E02004753',
        '0QQ' => 'E02004753',
        '0QR' => 'E02004753',
        '0QS' => 'E02004753',
        '0QT' => 'E02004753',
        '0QU' => 'E02006423',
        '0QW' => 'E02004753',
        '0QX' => 'E02004753',
        '0QY' => 'E02004753',
        '0QZ' => 'E02006423',
        '0RA' => 'E02006423',
        '0RB' => 'E02004753',
        '0RD' => 'E02004753',
        '0RE' => 'E02004753',
        '0RF' => 'E02004753',
        '0RG' => 'E02006423',
        '0RH' => 'E02004753',
        '0RJ' => 'E02006423',
        '0RL' => 'E02004753',
        '0RN' => 'E02006423',
        '0RP' => 'E02006423',
        '0RQ' => 'E02004753',
        '0RR' => 'E02006423',
        '0RS' => 'E02006423',
        '0RT' => 'E02006423',
        '0RU' => 'E02006423',
        '0RW' => 'E02006423',
        '0RX' => 'E02006423',
        '0RY' => 'E02006423',
        '0SA' => 'E02004753',
        '0SB' => 'E02004753',
        '0SD' => 'E02004753',
        '0SE' => 'E02004753',
        '0SF' => 'E02004753',
        '0WA' => 'E02006423',
        '0WB' => 'E02006423',
        '0WD' => 'E02006423',
        '0WF' => 'E02006423',
        '0WX' => 'E02006423',
        '0WY' => 'E02006423',
        '0WZ' => 'E02006423',
        '0XJ' => 'E02006423',
        '0XN' => 'E02006423',
        '0XQ' => 'E02006423',
        '0ZJ' => 'E02006423',
        '0ZN' => 'E02006423',
        '0ZQ' => 'E02006423',
        '0ZR' => 'E02006423',
        '0ZW' => 'E02006423',
        '0ZX' => 'E02006423',
        '3WQ' => 'E02003366',
        '7AA' => 'E02004751',
        '7AB' => 'E02004751',
        '7AD' => 'E02004751',
        '7AE' => 'E02004751',
        '7AF' => 'E02004751',
        '7AG' => 'E02004751',
        '7AH' => 'E02004751',
        '7AJ' => 'E02004751',
        '7AL' => 'E02004751',
        '7AN' => 'E02004751',
        '7AP' => 'E02004751',
        '7AQ' => 'E02004751',
        '7AR' => 'E02004751',
        '7AS' => 'E02004751',
        '7AT' => 'E02004751',
        '7AU' => 'E02004751',
        '7AW' => 'E02004751',
        '7AX' => 'E02004751',
        '7AY' => 'E02004751',
        '7AZ' => 'E02004751',
        '7BA' => 'E02004751',
        '7BB' => 'E02004751',
        '7BD' => 'E02004751',
        '7BE' => 'E02004751',
        '7BG' => 'E02004751',
        '7BH' => 'E02004751',
        '7BJ' => 'E02004751',
        '7BL' => 'E02004751',
        '7BN' => 'E02004751',
        '7BP' => 'E02004751',
        '7BQ' => 'E02004751',
        '7BS' => 'E02004752',
        '7BT' => 'E02004751',
        '7BU' => 'E02004752',
        '7BW' => 'E02004751',
        '7BX' => 'E02004752',
        '7BY' => 'E02004752',
        '7BZ' => 'E02004752',
        '7DA' => 'E02004752',
        '7DB' => 'E02004752',
        '7DD' => 'E02004752',
        '7DE' => 'E02004752',
        '7DF' => 'E02004752',
        '7DG' => 'E02004752',
        '7DH' => 'E02004752',
        '7DJ' => 'E02004752',
        '7DL' => 'E02004752',
        '7DN' => 'E02004752',
        '7DP' => 'E02004752',
        '7DQ' => 'E02004752',
        '7DR' => 'E02004752',
        '7DS' => 'E02004752',
        '7DT' => 'E02004752',
        '7DU' => 'E02004752',
        '7DW' => 'E02004752',
        '7DX' => 'E02004752',
        '7DY' => 'E02004752',
        '7DZ' => 'E02004752',
        '7EA' => 'E02004752',
        '7EB' => 'E02004752',
        '7ED' => 'E02004752',
        '7EE' => 'E02004752',
        '7EF' => 'E02004752',
        '7EG' => 'E02004752',
        '7EH' => 'E02004752',
        '7EJ' => 'E02004752',
        '7EL' => 'E02004752',
        '7EN' => 'E02004752',
        '7EP' => 'E02004752',
        '7EQ' => 'E02004752',
        '7ER' => 'E02004752',
        '7ES' => 'E02004752',
        '7ET' => 'E02004752',
        '7EU' => 'E02004752',
        '7EW' => 'E02004752',
        '7EX' => 'E02004752',
        '7EY' => 'E02004752',
        '7EZ' => 'E02004752',
        '7FA' => 'E02004752',
        '7FB' => 'E02004752',
        '7FD' => 'E02004752',
        '7FE' => 'E02004752',
        '7FF' => 'E02004752',
        '7FG' => 'E02004752',
        '7FH' => 'E02004752',
        '7FJ' => 'E02004752',
        '7FL' => 'E02004752',
        '7FN' => 'E02004752',
        '7FQ' => 'E02004752',
        '7FR' => 'E02004752',
        '7FS' => 'E02004752',
        '7FT' => 'E02004752',
        '7FU' => 'E02004752',
        '7FW' => 'E02004751',
        '7GA' => 'E02004751',
        '7GE' => 'E02004752',
        '7GP' => 'E02004751',
        '7GR' => 'E02004751',
        '7GT' => 'E02004751',
        '7GU' => 'E02004751',
        '7GX' => 'E02004751',
        '7GY' => 'E02004751',
        '7GZ' => 'E02004751',
        '7HA' => 'E02004752',
        '7HB' => 'E02004752',
        '7HD' => 'E02004752',
        '7HE' => 'E02004752',
        '7HF' => 'E02004751',
        '7HG' => 'E02004751',
        '7HH' => 'E02004751',
        '7HJ' => 'E02004752',
        '7HL' => 'E02004752',
        '7HN' => 'E02004751',
        '7HP' => 'E02004751',
        '7HQ' => 'E02004751',
        '7HR' => 'E02004752',
        '7HS' => 'E02004751',
        '7HT' => 'E02004751',
        '7HU' => 'E02004751',
        '7HW' => 'E02004751',
        '7HX' => 'E02004751',
        '7HY' => 'E02004752',
        '7HZ' => 'E02004751',
        '7JA' => 'E02004751',
        '7JB' => 'E02004751',
        '7JD' => 'E02004751',
        '7JE' => 'E02004751',
        '7JF' => 'E02004751',
        '7JG' => 'E02004751',
        '7JH' => 'E02004751',
        '7JJ' => 'E02004752',
        '7JL' => 'E02004751',
        '7JN' => 'E02004751',
        '7JP' => 'E02004751',
        '7JQ' => 'E02004751',
        '7JR' => 'E02004751',
        '7JS' => 'E02004751',
        '7JT' => 'E02004751',
        '7JU' => 'E02004751',
        '7JW' => 'E02004751',
        '7JX' => 'E02004751',
        '7JY' => 'E02004751',
        '7JZ' => 'E02004751',
        '7LA' => 'E02004751',
        '7LB' => 'E02004751',
        '7LD' => 'E02004751',
        '7LE' => 'E02004751',
        '7LF' => 'E02004751',
        '7LG' => 'E02004751',
        '7LH' => 'E02004751',
        '7LJ' => 'E02004751',
        '7LL' => 'E02004752',
        '7LN' => 'E02004751',
        '7LP' => 'E02004751',
        '7LQ' => 'E02004751',
        '7LR' => 'E02004751',
        '7LS' => 'E02004751',
        '7LT' => 'E02004752',
        '7LU' => 'E02004752',
        '7LW' => 'E02004751',
        '7LX' => 'E02004752',
        '7LY' => 'E02004752',
        '7LZ' => 'E02004752',
        '7NA' => 'E02004752',
        '7NB' => 'E02004752',
        '7ND' => 'E02004752',
        '7NE' => 'E02004752',
        '7NF' => 'E02004752',
        '7NG' => 'E02004751',
        '7NH' => 'E02004752',
        '7NJ' => 'E02004752',
        '7NL' => 'E02004752',
        '7NN' => 'E02004752',
        '7NP' => 'E02004752',
        '7NQ' => 'E02004751',
        '7NR' => 'E02004752',
        '7NS' => 'E02004752',
        '7NT' => 'E02004752',
        '7NU' => 'E02004752',
        '7NW' => 'E02004752',
        '7NX' => 'E02004752',
        '7NY' => 'E02004752',
        '7NZ' => 'E02004752',
        '7PA' => 'E02004752',
        '7PB' => 'E02004752',
        '7PD' => 'E02004752',
        '7PE' => 'E02004752',
        '7PF' => 'E02004752',
        '7PG' => 'E02004752',
        '7PH' => 'E02004751',
        '7PL' => 'E02004752',
        '7PN' => 'E02004751',
        '7PP' => 'E02004751',
        '7PQ' => 'E02004752',
        '7PR' => 'E02004752',
        '7PS' => 'E02004751',
        '7PT' => 'E02004751',
        '7PU' => 'E02004752',
        '7PW' => 'E02004751',
        '7PX' => 'E02004751',
        '7PY' => 'E02004752',
        '7PZ' => 'E02004751',
        '7QA' => 'E02004751',
        '7QB' => 'E02004751',
        '7QD' => 'E02004751',
        '7QE' => 'E02004751',
        '7QF' => 'E02004752',
        '7QG' => 'E02004751',
        '7QH' => 'E02004751',
        '7QJ' => 'E02004752',
        '7QL' => 'E02004752',
        '7QN' => 'E02004751',
        '7QP' => 'E02004751',
        '7QQ' => 'E02004752',
        '7QR' => 'E02004751',
        '7QS' => 'E02004751',
        '7QT' => 'E02004751',
        '7QU' => 'E02004751',
        '7QW' => 'E02004751',
        '7QX' => 'E02004751',
        '7QY' => 'E02004751',
        '7QZ' => 'E02004751',
        '7RA' => 'E02004751',
        '7RB' => 'E02004751',
        '7RD' => 'E02004751',
        '7RE' => 'E02004751',
        '7RF' => 'E02004751',
        '7RG' => 'E02004751',
        '7RH' => 'E02004751',
        '7RJ' => 'E02004751',
        '7RL' => 'E02004751',
        '7RN' => 'E02004751',
        '7RP' => 'E02004751',
        '7RQ' => 'E02004751',
        '7RR' => 'E02004751',
        '7RS' => 'E02004751',
        '7RT' => 'E02004752',
        '7RU' => 'E02004751',
        '7RW' => 'E02004751',
        '7RX' => 'E02004751',
        '7RY' => 'E02004751',
        '7RZ' => 'E02004751',
        '7SA' => 'E02004751',
        '7SB' => 'E02004751',
        '7SD' => 'E02004751',
        '7SE' => 'E02004751',
        '7SF' => 'E02004751',
        '7SG' => 'E02004751',
        '7SH' => 'E02004751',
        '7SJ' => 'E02004751',
        '7SL' => 'E02004751',
        '7SN' => 'E02004751',
        '7SP' => 'E02004751',
        '7SQ' => 'E02004751',
        '7SR' => 'E02004751',
        '7SS' => 'E02004751',
        '7ST' => 'E02004751',
        '7SU' => 'E02004751',
        '7SW' => 'E02004751',
        '7SX' => 'E02004751',
        '7SY' => 'E02004751',
        '7SZ' => 'E02004753',
        '7TA' => 'E02004751',
        '7TD' => 'E02004751',
        '7TE' => 'E02004751',
        '7TF' => 'E02004751',
        '7TG' => 'E02004751',
        '7TH' => 'E02004751',
        '7TJ' => 'E02004751',
        '7TL' => 'E02004751',
        '7TN' => 'E02004751',
        '7TP' => 'E02004751',
        '7TQ' => 'E02004751',
        '7TR' => 'E02004751',
        '7TS' => 'E02004751',
        '7TT' => 'E02004751',
        '7TU' => 'E02004751',
        '7TW' => 'E02004751',
        '7TX' => 'E02004751',
        '7TY' => 'E02004752',
        '7TZ' => 'E02004752',
        '7UA' => 'E02004751',
        '7UD' => 'E02004751',
        '7UE' => 'E02004751',
        '7UF' => 'E02004751',
        '7UG' => 'E02004751',
        '7UH' => 'E02004751',
        '7UJ' => 'E02004751',
        '7UL' => 'E02004751',
        '7UN' => 'E02004751',
        '7UP' => 'E02004751',
        '7UQ' => 'E02004751',
        '7UR' => 'E02004751',
        '7UT' => 'E02004751',
        '7UU' => 'E02004751',
        '7UW' => 'E02004751',
        '7UX' => 'E02004751',
        '7UY' => 'E02004751',
        '7UZ' => 'E02004751',
        '7WA' => 'E02004751',
        '7WB' => 'E02004751',
        '7WD' => 'E02004751',
        '7WE' => 'E02004751',
        '7WF' => 'E02004751',
        '7WG' => 'E02004752',
        '7WH' => 'E02004751',
        '7WJ' => 'E02004751',
        '7WL' => 'E02004751',
        '7WN' => 'E02004751',
        '7WP' => 'E02004751',
        '7WQ' => 'E02004751',
        '7WR' => 'E02004751',
        '7WS' => 'E02004751',
        '7WT' => 'E02004751',
        '7WU' => 'E02004751',
        '7WW' => 'E02004751',
        '7WX' => 'E02004751',
        '7WY' => 'E02004752',
        '7WZ' => 'E02004751',
        '7XA' => 'E02004751',
        '7XB' => 'E02004751',
        '7XD' => 'E02004751',
        '7XE' => 'E02004751',
        '7XF' => 'E02004751',
        '7XG' => 'E02004751',
        '7XH' => 'E02004751',
        '7XJ' => 'E02004751',
        '7XL' => 'E02004751',
        '7XN' => 'E02004751',
        '7XP' => 'E02004751',
        '7XQ' => 'E02004751',
        '7XR' => 'E02004751',
        '7XS' => 'E02004752',
        '7XT' => 'E02004752',
        '7XU' => 'E02004752',
        '7XW' => 'E02004751',
        '7XX' => 'E02004752',
        '7XY' => 'E02004752',
        '7XZ' => 'E02004752',
        '7YA' => 'E02004752',
        '7YB' => 'E02004752',
        '7YD' => 'E02004752',
        '7YE' => 'E02004752',
        '7YF' => 'E02004752',
        '7YG' => 'E02004752',
        '7YH' => 'E02004752',
        '7YJ' => 'E02004752',
        '7YL' => 'E02004752',
        '7YN' => 'E02004752',
        '7YP' => 'E02004752',
        '7YQ' => 'E02004752',
        '7YR' => 'E02004752',
        '7YS' => 'E02004752',
        '7YT' => 'E02004752',
        '7YU' => 'E02004752',
        '7YW' => 'E02004752',
        '7YX' => 'E02004754',
        '7YY' => 'E02004752',
        '7YZ' => 'E02004751',
        '7ZA' => 'E02004755',
        '7ZD' => 'E02004755',
        '7ZE' => 'E02004752',
        '7ZF' => 'E02004751',
        '7ZG' => 'E02004755',
        '7ZH' => 'E02004751',
        '7ZJ' => 'E02004755',
        '7ZL' => 'E02004752',
        '7ZN' => 'E02004751',
        '7ZP' => 'E02004751',
        '7ZQ' => 'E02004752',
        '7ZR' => 'E02004752',
        '7ZW' => 'E02004755',
        '8AA' => 'E02003365',
        '8AB' => 'E02003365',
        '8AD' => 'E02003365',
        '8AE' => 'E02003365',
        '8AF' => 'E02003365',
        '8AG' => 'E02003365',
        '8AH' => 'E02003365',
        '8AJ' => 'E02003365',
        '8AL' => 'E02003365',
        '8AN' => 'E02003365',
        '8AP' => 'E02003365',
        '8AQ' => 'E02003365',
        '8AR' => 'E02003365',
        '8AS' => 'E02003365',
        '8AT' => 'E02003365',
        '8AU' => 'E02003365',
        '8AW' => 'E02003365',
        '8AX' => 'E02003365',
        '8AY' => 'E02003365',
        '8AZ' => 'E02003365',
        '8BA' => 'E02003365',
        '8BB' => 'E02003365',
        '8BD' => 'E02003365',
        '8BE' => 'E02003365',
        '8BH' => 'E02003365',
        '8BJ' => 'E02003365',
        '8BL' => 'E02003365',
        '8BN' => 'E02003365',
        '8BP' => 'E02003365',
        '8BS' => 'E02003365',
        '8BT' => 'E02003365',
        '8BU' => 'E02003365',
        '8BW' => 'E02003365',
        '8BX' => 'E02003365',
        '8BY' => 'E02003365',
        '8BZ' => 'E02003365',
        '8DA' => 'E02003365',
        '8DB' => 'E02003365',
        '8DD' => 'E02003365',
        '8DE' => 'E02003365',
        '8DF' => 'E02003365',
        '8DG' => 'E02003365',
        '8DH' => 'E02003365',
        '8DJ' => 'E02003365',
        '8DL' => 'E02003365',
        '8DN' => 'E02003365',
        '8DP' => 'E02003365',
        '8DQ' => 'E02003365',
        '8DR' => 'E02003365',
        '8DT' => 'E02003365',
        '8DU' => 'E02003365',
        '8DX' => 'E02003365',
        '8DY' => 'E02003365',
        '8DZ' => 'E02003365',
        '8EA' => 'E02003365',
        '8EB' => 'E02003365',
        '8ED' => 'E02003365',
        '8EE' => 'E02003365',
        '8EF' => 'E02003363',
        '8EG' => 'E02003363',
        '8EH' => 'E02003365',
        '8EJ' => 'E02003365',
        '8EL' => 'E02003365',
        '8EN' => 'E02003365',
        '8EP' => 'E02003365',
        '8EQ' => 'E02003365',
        '8ER' => 'E02003365',
        '8ES' => 'E02003365',
        '8ET' => 'E02003365',
        '8EW' => 'E02003365',
        '8GH' => 'E02003366',
        '8HA' => 'E02003365',
        '8HB' => 'E02003363',
        '8HD' => 'E02003363',
        '8HE' => 'E02003363',
        '8HF' => 'E02003363',
        '8HG' => 'E02003365',
        '8HH' => 'E02003363',
        '8HJ' => 'E02003363',
        '8HL' => 'E02003363',
        '8HN' => 'E02003363',
        '8HP' => 'E02003363',
        '8HQ' => 'E02003363',
        '8HR' => 'E02003363',
        '8HS' => 'E02003363',
        '8HT' => 'E02003363',
        '8HU' => 'E02003363',
        '8HW' => 'E02003363',
        '8HX' => 'E02003363',
        '8HY' => 'E02003363',
        '8HZ' => 'E02003363',
        '8JA' => 'E02003363',
        '8JB' => 'E02003363',
        '8JD' => 'E02003363',
        '8JE' => 'E02003363',
        '8JF' => 'E02003363',
        '8JG' => 'E02003363',
        '8JH' => 'E02003363',
        '8JJ' => 'E02003363',
        '8JL' => 'E02003365',
        '8JN' => 'E02003365',
        '8JP' => 'E02003365',
        '8JQ' => 'E02003363',
        '8JR' => 'E02003365',
        '8JS' => 'E02003365',
        '8JT' => 'E02003365',
        '8JU' => 'E02003365',
        '8JX' => 'E02003365',
        '8JY' => 'E02003365',
        '8JZ' => 'E02003365',
        '8LA' => 'E02003365',
        '8LB' => 'E02003365',
        '8LD' => 'E02003365',
        '8LE' => 'E02003365',
        '8LF' => 'E02003365',
        '8LG' => 'E02003365',
        '8LH' => 'E02003365',
        '8LJ' => 'E02003365',
        '8LL' => 'E02003365',
        '8LN' => 'E02003363',
        '8LP' => 'E02003363',
        '8LQ' => 'E02003365',
        '8LR' => 'E02003363',
        '8LS' => 'E02003365',
        '8LT' => 'E02003363',
        '8LU' => 'E02003363',
        '8LW' => 'E02003363',
        '8LX' => 'E02003363',
        '8LY' => 'E02003363',
        '8NA' => 'E02003363',
        '8NB' => 'E02003363',
        '8ND' => 'E02003365',
        '8NE' => 'E02003365',
        '8NF' => 'E02003365',
        '8NG' => 'E02003363',
        '8NH' => 'E02003365',
        '8NJ' => 'E02003365',
        '8NL' => 'E02003363',
        '8NN' => 'E02003365',
        '8NP' => 'E02003365',
        '8NQ' => 'E02003365',
        '8NW' => 'E02003365',
        '8PA' => 'E02003365',
        '8PB' => 'E02003365',
        '8PD' => 'E02003365',
        '8PE' => 'E02003365',
        '8PF' => 'E02003365',
        '8PG' => 'E02003365',
        '8PH' => 'E02003365',
        '8PJ' => 'E02003365',
        '8PL' => 'E02003365',
        '8PN' => 'E02003365',
        '8PP' => 'E02003365',
        '8PR' => 'E02003365',
        '8PS' => 'E02003365',
        '8PT' => 'E02003365',
        '8PU' => 'E02003365',
        '8PW' => 'E02003365',
        '8PX' => 'E02003365',
        '8QA' => 'E02003365',
        '8QG' => 'E02003365',
        '8QH' => 'E02003365',
        '8QJ' => 'E02003365',
        '8QL' => 'E02003365',
        '8QN' => 'E02003365',
        '8QP' => 'E02003365',
        '8QQ' => 'E02003365',
        '8QS' => 'E02003365',
        '8QT' => 'E02003365',
        '8QU' => 'E02003365',
        '8QW' => 'E02003365',
        '8QX' => 'E02003365',
        '8RB' => 'E02003365',
        '8RD' => 'E02003365',
        '8RE' => 'E02003366',
        '8RF' => 'E02003365',
        '8RG' => 'E02003366',
        '8RH' => 'E02003365',
        '8RJ' => 'E02003365',
        '8RL' => 'E02003365',
        '8RN' => 'E02003365',
        '8RP' => 'E02003365',
        '8RQ' => 'E02003366',
        '8RR' => 'E02003365',
        '8RS' => 'E02003365',
        '8RT' => 'E02003365',
        '8RU' => 'E02003365',
        '8RW' => 'E02003365',
        '8RX' => 'E02003365',
        '8RY' => 'E02003365',
        '8SB' => 'E02003365',
        '8SD' => 'E02003365',
        '8SE' => 'E02003365',
        '8SF' => 'E02003365',
        '8XX' => 'E02003365',
        '8YH' => 'E02003365',
        '8YJ' => 'E02003365',
        '8YN' => 'E02003365',
        '8YP' => 'E02003365',
        '8YQ' => 'E02003365',
        '8YR' => 'E02003365',
        '8YS' => 'E02003365',
        '8YT' => 'E02003365',
        '8YU' => 'E02003365',
        '8YW' => 'E02003365',
        '8YX' => 'E02003365',
        '8YY' => 'E02003365',
        '8YZ' => 'E02003365',
        '9AA' => 'E02004753',
        '9AB' => 'E02004753',
        '9AD' => 'E02004753',
        '9AE' => 'E02004753',
        '9AF' => 'E02004753',
        '9AG' => 'E02004753',
        '9AH' => 'E02004753',
        '9AJ' => 'E02004753',
        '9AL' => 'E02004753',
        '9AN' => 'E02004753',
        '9AP' => 'E02004753',
        '9AQ' => 'E02004753',
        '9AR' => 'E02004753',
        '9AS' => 'E02004753',
        '9AT' => 'E02004753',
        '9AU' => 'E02004753',
        '9AW' => 'E02004753',
        '9AX' => 'E02004753',
        '9AY' => 'E02004753',
        '9AZ' => 'E02004753',
        '9BA' => 'E02004753',
        '9BB' => 'E02004753',
        '9BD' => 'E02004753',
        '9BE' => 'E02004753',
        '9BF' => 'E02003365',
        '9BG' => 'E02004753',
        '9BH' => 'E02004753',
        '9BJ' => 'E02004753',
        '9BL' => 'E02004753',
        '9BN' => 'E02004753',
        '9BP' => 'E02004753',
        '9BQ' => 'E02004753',
        '9BS' => 'E02004753',
        '9BT' => 'E02004753',
        '9BU' => 'E02004753',
        '9BW' => 'E02004753',
        '9BX' => 'E02004753',
        '9BY' => 'E02004753',
        '9BZ' => 'E02004753',
        '9DA' => 'E02004753',
        '9DB' => 'E02004753',
        '9DD' => 'E02004753',
        '9DE' => 'E02004753',
        '9DF' => 'E02004753',
        '9DG' => 'E02004753',
        '9DH' => 'E02004753',
        '9DJ' => 'E02004753',
        '9DL' => 'E02004753',
        '9DN' => 'E02004753',
        '9DP' => 'E02004753',
        '9DQ' => 'E02004753',
        '9DR' => 'E02004753',
        '9DS' => 'E02004753',
        '9DT' => 'E02004753',
        '9DU' => 'E02004753',
        '9DW' => 'E02004753',
        '9DX' => 'E02004753',
        '9DY' => 'E02004753',
        '9DZ' => 'E02004753',
        '9EA' => 'E02004753',
        '9EB' => 'E02004753',
        '9ED' => 'E02004753',
        '9EE' => 'E02004753',
        '9EF' => 'E02004753',
        '9EG' => 'E02004753',
        '9EH' => 'E02004753',
        '9EJ' => 'E02004753',
        '9EL' => 'E02004753',
        '9EN' => 'E02004753',
        '9EP' => 'E02004802',
        '9EQ' => 'E02004802',
        '9ER' => 'E02004802',
        '9ES' => 'E02004802',
        '9ET' => 'E02004802',
        '9EU' => 'E02004802',
        '9EW' => 'E02004753',
        '9EX' => 'E02004802',
        '9EY' => 'E02004753',
        '9EZ' => 'E02004753',
        '9FA' => 'E02004802',
        '9FE' => 'E02004753',
        '9FF' => 'E02004753',
        '9FG' => 'E02004753',
        '9FH' => 'E02004753',
        '9FL' => 'E02004753',
        '9HA' => 'E02004802',
        '9HB' => 'E02004802',
        '9HD' => 'E02004802',
        '9HE' => 'E02004753',
        '9HF' => 'E02004802',
        '9HG' => 'E02004802',
        '9HH' => 'E02004802',
        '9HJ' => 'E02004753',
        '9HL' => 'E02004802',
        '9HN' => 'E02004802',
        '9HP' => 'E02004802',
        '9HQ' => 'E02004802',
        '9HR' => 'E02004802',
        '9HS' => 'E02004802',
        '9HT' => 'E02004753',
        '9HU' => 'E02004753',
        '9HX' => 'E02004753',
        '9HY' => 'E02004802',
        '9HZ' => 'E02004802',
        '9JA' => 'E02004753',
        '9JB' => 'E02004753',
        '9JD' => 'E02004753',
        '9JE' => 'E02004753',
        '9JF' => 'E02004753',
        '9JG' => 'E02004753',
        '9JH' => 'E02004753',
        '9JJ' => 'E02004753',
        '9JL' => 'E02004753',
        '9JN' => 'E02004753',
        '9JP' => 'E02004753',
        '9JQ' => 'E02004753',
        '9JR' => 'E02004753',
        '9JS' => 'E02004753',
        '9JT' => 'E02004753',
        '9JU' => 'E02004753',
        '9JW' => 'E02004753',
        '9JX' => 'E02004753',
        '9JY' => 'E02004753',
        '9JZ' => 'E02004753',
        '9LA' => 'E02004754',
        '9LB' => 'E02004752',
        '9LD' => 'E02004754',
        '9LE' => 'E02004753',
        '9LG' => 'E02004752',
        '9LH' => 'E02004752',
        '9LJ' => 'E02004751',
        '9LL' => 'E02004752',
        '9LN' => 'E02004751',
        '9LP' => 'E02004753',
        '9LQ' => 'E02004752',
        '9LR' => 'E02004753',
        '9LS' => 'E02004752',
        '9LT' => 'E02004753',
        '9LW' => 'E02004753',
        '9LX' => 'E02004753',
        '9LY' => 'E02004753',
        '9LZ' => 'E02004753',
        '9NB' => 'E02004753',
        '9ND' => 'E02004753',
        '9NE' => 'E02004753',
        '9PD' => 'E02004753',
        '9QG' => 'E02004753',
        '9UA' => 'E02004753',
        '9UB' => 'E02004753',
        '9UD' => 'E02004753',
        '9UE' => 'E02004753',
        '9UF' => 'E02004753',
        '9WA' => 'E02004753',
        '9WB' => 'E02004753',
        '9WD' => 'E02004753',
        '9WE' => 'E02004753',
        '9WF' => 'E02004753',
        '9WG' => 'E02004753',
        '9WX' => 'E02006423',
        '9XA' => 'E02006423',
        '9XB' => 'E02006423',
        '9XJ' => 'E02006423',
        '9XN' => 'E02006423',
        '9XP' => 'E02006423',
        '9XQ' => 'E02006423',
        '9XR' => 'E02004753',
        '9XS' => 'E02006423',
        '9XU' => 'E02006423',
        '9XX' => 'E02004753',
        '9XY' => 'E02004753',
        '9YA' => 'E02004753',
        '9YB' => 'E02004753',
        '9YD' => 'E02004753',
        '9YE' => 'E02006423',
        '9YF' => 'E02004753',
        '9YG' => 'E02004753',
        '9YH' => 'E02006423',
        '9YJ' => 'E02006423',
        '9YL' => 'E02004753',
        '9YN' => 'E02006423',
        '9YP' => 'E02006423',
        '9YQ' => 'E02004753',
        '9YR' => 'E02004753',
        '9YS' => 'E02004753',
        '9YT' => 'E02003365',
        '9YU' => 'E02006423',
        '9YW' => 'E02004753',
        '9YX' => 'E02004753',
        '9YY' => 'E02006423',
        '9YZ' => 'E02004753',
        '9ZF' => 'E02006423',
        '9ZJ' => 'E02006423',
        '9ZX' => 'E02006423',
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