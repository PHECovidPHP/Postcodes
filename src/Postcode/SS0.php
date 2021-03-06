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
final class SS0
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003283',
        '0AB' => 'E02003282',
        '0AD' => 'E02003282',
        '0AE' => 'E02003282',
        '0AF' => 'E02003282',
        '0AG' => 'E02003282',
        '0AH' => 'E02003282',
        '0AJ' => 'E02003282',
        '0AL' => 'E02003282',
        '0AN' => 'E02003283',
        '0AP' => 'E02003282',
        '0AQ' => 'E02003282',
        '0AR' => 'E02003282',
        '0AS' => 'E02003282',
        '0AT' => 'E02003283',
        '0AU' => 'E02003283',
        '0AW' => 'E02003283',
        '0AX' => 'E02003283',
        '0AY' => 'E02003283',
        '0AZ' => 'E02003283',
        '0BA' => 'E02003283',
        '0BB' => 'E02003283',
        '0BD' => 'E02003282',
        '0BE' => 'E02003282',
        '0BF' => 'E02003283',
        '0BG' => 'E02003282',
        '0BH' => 'E02003282',
        '0BJ' => 'E02003282',
        '0BL' => 'E02003282',
        '0BN' => 'E02003282',
        '0BP' => 'E02003283',
        '0BQ' => 'E02003282',
        '0BS' => 'E02003283',
        '0BT' => 'E02003283',
        '0BU' => 'E02003283',
        '0BW' => 'E02003283',
        '0BX' => 'E02003283',
        '0BY' => 'E02003283',
        '0BZ' => 'E02003283',
        '0DA' => 'E02003282',
        '0DD' => 'E02003282',
        '0DE' => 'E02003282',
        '0DF' => 'E02003282',
        '0DG' => 'E02003282',
        '0DH' => 'E02003282',
        '0DJ' => 'E02003282',
        '0DL' => 'E02003282',
        '0DN' => 'E02003282',
        '0DP' => 'E02003282',
        '0DR' => 'E02003282',
        '0DS' => 'E02003283',
        '0DT' => 'E02003283',
        '0DU' => 'E02003282',
        '0DW' => 'E02003282',
        '0DX' => 'E02003283',
        '0DY' => 'E02003282',
        '0DZ' => 'E02003282',
        '0EA' => 'E02003282',
        '0EB' => 'E02003282',
        '0ED' => 'E02003282',
        '0EE' => 'E02003282',
        '0EF' => 'E02003282',
        '0EG' => 'E02003282',
        '0EH' => 'E02003288',
        '0EJ' => 'E02003280',
        '0EL' => 'E02003285',
        '0EN' => 'E02003282',
        '0EP' => 'E02003283',
        '0EQ' => 'E02003282',
        '0ER' => 'E02003282',
        '0ES' => 'E02003283',
        '0ET' => 'E02003288',
        '0EU' => 'E02003283',
        '0EW' => 'E02003282',
        '0EX' => 'E02003283',
        '0EY' => 'E02003283',
        '0EZ' => 'E02003283',
        '0FF' => 'E02003282',
        '0FZ' => 'E02003288',
        '0GG' => 'E02003288',
        '0GS' => 'E02003288',
        '0HA' => 'E02003283',
        '0HB' => 'E02003283',
        '0HD' => 'E02003283',
        '0HE' => 'E02003283',
        '0HF' => 'E02003283',
        '0HG' => 'E02003283',
        '0HH' => 'E02003283',
        '0HJ' => 'E02003283',
        '0HL' => 'E02003283',
        '0HN' => 'E02003283',
        '0HP' => 'E02003282',
        '0HQ' => 'E02003283',
        '0HR' => 'E02003282',
        '0HS' => 'E02003282',
        '0HT' => 'E02003283',
        '0HU' => 'E02003282',
        '0HW' => 'E02003283',
        '0JA' => 'E02003280',
        '0JB' => 'E02003280',
        '0JD' => 'E02003280',
        '0JE' => 'E02003280',
        '0JF' => 'E02003280',
        '0JG' => 'E02003280',
        '0JH' => 'E02003280',
        '0JJ' => 'E02003280',
        '0JL' => 'E02003282',
        '0JN' => 'E02003282',
        '0JP' => 'E02003280',
        '0JQ' => 'E02003280',
        '0JR' => 'E02003280',
        '0JS' => 'E02003280',
        '0JT' => 'E02003280',
        '0JU' => 'E02003280',
        '0JW' => 'E02003282',
        '0JX' => 'E02003280',
        '0JY' => 'E02003280',
        '0JZ' => 'E02003280',
        '0LA' => 'E02003280',
        '0LB' => 'E02003280',
        '0LD' => 'E02003280',
        '0LE' => 'E02003280',
        '0LF' => 'E02003280',
        '0LG' => 'E02003280',
        '0LH' => 'E02003280',
        '0LJ' => 'E02003282',
        '0LL' => 'E02003280',
        '0LQ' => 'E02003280',
        '0NA' => 'E02003282',
        '0NB' => 'E02003282',
        '0ND' => 'E02003282',
        '0NE' => 'E02003282',
        '0NF' => 'E02003282',
        '0NG' => 'E02003282',
        '0NH' => 'E02003282',
        '0NJ' => 'E02003282',
        '0NL' => 'E02003282',
        '0NN' => 'E02003282',
        '0NP' => 'E02003282',
        '0NQ' => 'E02003282',
        '0NR' => 'E02003282',
        '0NS' => 'E02003282',
        '0NT' => 'E02003282',
        '0NU' => 'E02003282',
        '0NW' => 'E02003282',
        '0NX' => 'E02003282',
        '0NY' => 'E02003282',
        '0NZ' => 'E02003282',
        '0PA' => 'E02003282',
        '0PB' => 'E02003282',
        '0PD' => 'E02003282',
        '0PE' => 'E02003282',
        '0PL' => 'E02003282',
        '0PN' => 'E02003283',
        '0PP' => 'E02003282',
        '0PR' => 'E02003283',
        '0PS' => 'E02003283',
        '0PT' => 'E02003282',
        '0PU' => 'E02003282',
        '0PW' => 'E02003282',
        '0PX' => 'E02003282',
        '0PY' => 'E02003282',
        '0PZ' => 'E02003282',
        '0QA' => 'E02003282',
        '0QB' => 'E02003282',
        '0QD' => 'E02003282',
        '0QE' => 'E02003282',
        '0QF' => 'E02003282',
        '0QG' => 'E02003282',
        '0QH' => 'E02003282',
        '0QJ' => 'E02003282',
        '0QL' => 'E02003282',
        '0QN' => 'E02003282',
        '0QP' => 'E02003282',
        '0QQ' => 'E02003282',
        '0QS' => 'E02003282',
        '0QT' => 'E02003282',
        '0QU' => 'E02003288',
        '0QW' => 'E02003282',
        '0QX' => 'E02003282',
        '0QY' => 'E02003282',
        '0RA' => 'E02003282',
        '0RB' => 'E02003282',
        '0RD' => 'E02003282',
        '0RE' => 'E02003282',
        '0RF' => 'E02003288',
        '0RG' => 'E02003282',
        '0RH' => 'E02003282',
        '0RJ' => 'E02003282',
        '0RL' => 'E02003282',
        '0RN' => 'E02003282',
        '0RP' => 'E02003282',
        '0RQ' => 'E02003282',
        '0RR' => 'E02003282',
        '0RS' => 'E02003282',
        '0RT' => 'E02003282',
        '0RU' => 'E02003282',
        '0RW' => 'E02003282',
        '0RX' => 'E02003282',
        '0RY' => 'E02003282',
        '0RZ' => 'E02003282',
        '0SA' => 'E02003282',
        '0SB' => 'E02003282',
        '0SD' => 'E02003282',
        '0SE' => 'E02003282',
        '0SF' => 'E02003282',
        '0SG' => 'E02003282',
        '0SH' => 'E02003282',
        '0SJ' => 'E02003282',
        '0SL' => 'E02003282',
        '0SN' => 'E02003282',
        '0SQ' => 'E02003288',
        '0SR' => 'E02003282',
        '0SS' => 'E02003282',
        '0ST' => 'E02003282',
        '0SU' => 'E02003282',
        '0SW' => 'E02003282',
        '0SX' => 'E02003282',
        '0SY' => 'E02003282',
        '0TA' => 'E02003282',
        '0TB' => 'E02003282',
        '0TD' => 'E02003282',
        '0TE' => 'E02003282',
        '0TF' => 'E02003282',
        '0TG' => 'E02003282',
        '0TH' => 'E02003288',
        '0TR' => 'E02003280',
        '0TX' => 'E02003288',
        '0WA' => 'E02003288',
        '0WB' => 'E02003288',
        '0WG' => 'E02003288',
        '0WQ' => 'E02003288',
        '0WX' => 'E02003288',
        '0WY' => 'E02003288',
        '0WZ' => 'E02003288',
        '0XQ' => 'E02003288',
        '0XY' => 'E02003288',
        '0YA' => 'E02003288',
        '0YE' => 'E02003288',
        '0YP' => 'E02003288',
        '0YS' => 'E02003285',
        '0YX' => 'E02003288',
        '0YY' => 'E02003282',
        '0YZ' => 'E02003288',
        '0ZQ' => 'E02003288',
        '0ZR' => 'E02003288',
        '7AA' => 'E02003288',
        '7AB' => 'E02003288',
        '7AD' => 'E02003288',
        '7AE' => 'E02003288',
        '7AF' => 'E02003288',
        '7AG' => 'E02003288',
        '7AH' => 'E02003288',
        '7AJ' => 'E02003288',
        '7AL' => 'E02003288',
        '7AN' => 'E02003293',
        '7AP' => 'E02003293',
        '7AQ' => 'E02003288',
        '7AS' => 'E02003293',
        '7AT' => 'E02003288',
        '7AU' => 'E02003288',
        '7AW' => 'E02003293',
        '7AX' => 'E02003288',
        '7AY' => 'E02003288',
        '7AZ' => 'E02003288',
        '7BA' => 'E02003288',
        '7BB' => 'E02003288',
        '7BD' => 'E02003288',
        '7BE' => 'E02003288',
        '7BF' => 'E02003290',
        '7BG' => 'E02003293',
        '7BH' => 'E02003288',
        '7BJ' => 'E02003288',
        '7BL' => 'E02003293',
        '7BN' => 'E02003293',
        '7BP' => 'E02003288',
        '7BQ' => 'E02003288',
        '7BS' => 'E02003288',
        '7BT' => 'E02003288',
        '7BU' => 'E02003293',
        '7BW' => 'E02003293',
        '7BX' => 'E02003288',
        '7BY' => 'E02003293',
        '7BZ' => 'E02003293',
        '7DA' => 'E02003288',
        '7DB' => 'E02003288',
        '7DD' => 'E02003288',
        '7DE' => 'E02003288',
        '7DF' => 'E02003288',
        '7DG' => 'E02003288',
        '7DH' => 'E02003288',
        '7DJ' => 'E02003288',
        '7DL' => 'E02003288',
        '7DN' => 'E02003288',
        '7DP' => 'E02003288',
        '7DQ' => 'E02003288',
        '7DR' => 'E02003288',
        '7DS' => 'E02003288',
        '7DT' => 'E02003288',
        '7DU' => 'E02003288',
        '7DW' => 'E02003288',
        '7DX' => 'E02003288',
        '7DY' => 'E02003288',
        '7DZ' => 'E02003288',
        '7EA' => 'E02003288',
        '7EB' => 'E02003293',
        '7ED' => 'E02003293',
        '7EE' => 'E02003293',
        '7EF' => 'E02003293',
        '7EG' => 'E02003293',
        '7EH' => 'E02003293',
        '7EJ' => 'E02003293',
        '7EL' => 'E02003293',
        '7EN' => 'E02003293',
        '7EP' => 'E02003293',
        '7EQ' => 'E02003288',
        '7ER' => 'E02003293',
        '7ES' => 'E02003293',
        '7ET' => 'E02003293',
        '7EU' => 'E02003293',
        '7EW' => 'E02003293',
        '7EX' => 'E02003293',
        '7EY' => 'E02003293',
        '7EZ' => 'E02003293',
        '7FA' => 'E02003288',
        '7FB' => 'E02003288',
        '7FD' => 'E02003288',
        '7FE' => 'E02003288',
        '7FF' => 'E02003293',
        '7FG' => 'E02003288',
        '7FJ' => 'E02003290',
        '7FL' => 'E02003288',
        '7FN' => 'E02003293',
        '7FP' => 'E02003288',
        '7FR' => 'E02003288',
        '7FT' => 'E02003288',
        '7FX' => 'E02003288',
        '7FZ' => 'E02003293',
        '7GA' => 'E02003288',
        '7GB' => 'E02003288',
        '7GD' => 'E02003288',
        '7GE' => 'E02003288',
        '7GL' => 'E02003288',
        '7GR' => 'E02003288',
        '7GW' => 'E02003288',
        '7GX' => 'E02003288',
        '7GY' => 'E02003288',
        '7GZ' => 'E02003288',
        '7HA' => 'E02003288',
        '7HB' => 'E02003293',
        '7HD' => 'E02003293',
        '7HE' => 'E02003293',
        '7HF' => 'E02003293',
        '7HG' => 'E02003293',
        '7HH' => 'E02003293',
        '7HJ' => 'E02003293',
        '7HL' => 'E02003293',
        '7HN' => 'E02003293',
        '7HP' => 'E02003293',
        '7HQ' => 'E02003293',
        '7HR' => 'E02003293',
        '7HS' => 'E02003293',
        '7HT' => 'E02003288',
        '7HU' => 'E02003288',
        '7HW' => 'E02003288',
        '7HX' => 'E02003288',
        '7HY' => 'E02003288',
        '7HZ' => 'E02003293',
        '7JA' => 'E02003288',
        '7JB' => 'E02003288',
        '7JD' => 'E02003288',
        '7JE' => 'E02003293',
        '7JF' => 'E02003293',
        '7JG' => 'E02003293',
        '7JH' => 'E02003288',
        '7JJ' => 'E02003293',
        '7JL' => 'E02003293',
        '7JN' => 'E02003293',
        '7JP' => 'E02003293',
        '7JQ' => 'E02003293',
        '7JR' => 'E02003293',
        '7JS' => 'E02003293',
        '7JT' => 'E02003293',
        '7JU' => 'E02003293',
        '7JW' => 'E02003293',
        '7JX' => 'E02003293',
        '7JY' => 'E02003293',
        '7JZ' => 'E02003293',
        '7LA' => 'E02003293',
        '7LB' => 'E02003293',
        '7LD' => 'E02003293',
        '7LE' => 'E02003293',
        '7LF' => 'E02003293',
        '7LG' => 'E02003293',
        '7LH' => 'E02003288',
        '7LJ' => 'E02003293',
        '7LL' => 'E02003293',
        '7LN' => 'E02003293',
        '7LP' => 'E02003293',
        '7LQ' => 'E02003293',
        '7LR' => 'E02003293',
        '7LS' => 'E02003293',
        '7LT' => 'E02003288',
        '7LU' => 'E02003288',
        '7LW' => 'E02003293',
        '7LX' => 'E02003293',
        '7LY' => 'E02003293',
        '7LZ' => 'E02003293',
        '7NA' => 'E02003293',
        '7NB' => 'E02003293',
        '7ND' => 'E02003293',
        '7NE' => 'E02003293',
        '7NF' => 'E02003293',
        '7NG' => 'E02003293',
        '7NH' => 'E02003288',
        '7NJ' => 'E02003293',
        '7NL' => 'E02003293',
        '7NN' => 'E02003293',
        '7NP' => 'E02003293',
        '7NQ' => 'E02003293',
        '7NR' => 'E02003293',
        '7NS' => 'E02003293',
        '7NT' => 'E02003293',
        '7NW' => 'E02003293',
        '7NY' => 'E02003293',
        '7NZ' => 'E02003293',
        '7PA' => 'E02003293',
        '7PB' => 'E02003293',
        '7PD' => 'E02003293',
        '7PE' => 'E02003293',
        '7PF' => 'E02003293',
        '7PG' => 'E02003293',
        '7PH' => 'E02003293',
        '7PJ' => 'E02003293',
        '7PL' => 'E02003293',
        '7PN' => 'E02003293',
        '7PP' => 'E02003293',
        '7PQ' => 'E02003293',
        '7PR' => 'E02003293',
        '7PS' => 'E02003293',
        '7PT' => 'E02003293',
        '7PU' => 'E02003293',
        '7PW' => 'E02003293',
        '7PX' => 'E02003293',
        '7PY' => 'E02003293',
        '7PZ' => 'E02003293',
        '7QA' => 'E02003293',
        '7QB' => 'E02003293',
        '7QD' => 'E02003293',
        '7QE' => 'E02003293',
        '7QF' => 'E02003293',
        '7QG' => 'E02003293',
        '7QH' => 'E02003293',
        '7QJ' => 'E02003293',
        '7QL' => 'E02003293',
        '7QN' => 'E02003293',
        '7QP' => 'E02003293',
        '7QQ' => 'E02003293',
        '7QR' => 'E02003293',
        '7QS' => 'E02003293',
        '7QT' => 'E02003293',
        '7QU' => 'E02003293',
        '7QW' => 'E02003293',
        '7QX' => 'E02003293',
        '7QY' => 'E02003293',
        '7QZ' => 'E02003293',
        '7RA' => 'E02003293',
        '7RB' => 'E02003293',
        '7RD' => 'E02003293',
        '7RE' => 'E02003293',
        '7RF' => 'E02003293',
        '7RG' => 'E02003293',
        '7RH' => 'E02003293',
        '7RJ' => 'E02003293',
        '7RL' => 'E02003293',
        '7RN' => 'E02003293',
        '7RP' => 'E02003293',
        '7RQ' => 'E02003293',
        '7RR' => 'E02003293',
        '7RS' => 'E02003293',
        '7RT' => 'E02003293',
        '7RU' => 'E02003293',
        '7RW' => 'E02003293',
        '7RX' => 'E02003288',
        '7RY' => 'E02003293',
        '7RZ' => 'E02003293',
        '7SA' => 'E02003293',
        '7SB' => 'E02003293',
        '7SD' => 'E02003290',
        '7SE' => 'E02003293',
        '7SF' => 'E02003293',
        '7SG' => 'E02003293',
        '7SH' => 'E02003293',
        '7SJ' => 'E02003293',
        '7SL' => 'E02003293',
        '7SN' => 'E02003293',
        '7SP' => 'E02003293',
        '7SQ' => 'E02003293',
        '7SR' => 'E02003293',
        '7SS' => 'E02003293',
        '7ST' => 'E02003290',
        '7SU' => 'E02003293',
        '7SW' => 'E02003293',
        '7SX' => 'E02003290',
        '7SY' => 'E02003290',
        '7SZ' => 'E02003293',
        '7TA' => 'E02003290',
        '7TB' => 'E02003293',
        '7TD' => 'E02003293',
        '7TE' => 'E02003293',
        '7TF' => 'E02003293',
        '7TG' => 'E02003290',
        '7TH' => 'E02003290',
        '7TJ' => 'E02003293',
        '7TL' => 'E02003293',
        '7TP' => 'E02003293',
        '7TS' => 'E02003293',
        '7TT' => 'E02003293',
        '7TW' => 'E02003288',
        '7TX' => 'E02003288',
        '7TY' => 'E02003293',
        '7UA' => 'E02003288',
        '7UF' => 'E02003293',
        '7WD' => 'E02003288',
        '7WE' => 'E02003288',
        '7WF' => 'E02003288',
        '7WG' => 'E02003288',
        '7WH' => 'E02003288',
        '7WJ' => 'E02003288',
        '7WL' => 'E02003288',
        '7WN' => 'E02003288',
        '7WP' => 'E02003288',
        '7WQ' => 'E02003288',
        '7WR' => 'E02003288',
        '7WS' => 'E02003288',
        '7WT' => 'E02003288',
        '7WU' => 'E02003288',
        '7WW' => 'E02003288',
        '7WX' => 'E02003288',
        '7WY' => 'E02003288',
        '7WZ' => 'E02003288',
        '7XA' => 'E02003288',
        '7XE' => 'E02003288',
        '7XF' => 'E02003288',
        '7XX' => 'E02003293',
        '7XY' => 'E02003288',
        '7XZ' => 'E02003288',
        '7YB' => 'E02003288',
        '7YG' => 'E02003288',
        '7YH' => 'E02003288',
        '7YQ' => 'E02003288',
        '7YW' => 'E02003288',
        '7YX' => 'E02003293',
        '7YY' => 'E02003293',
        '7YZ' => 'E02003288',
        '8AA' => 'E02003290',
        '8AB' => 'E02003290',
        '8AD' => 'E02003290',
        '8AE' => 'E02003290',
        '8AF' => 'E02003290',
        '8AG' => 'E02003290',
        '8AH' => 'E02003290',
        '8AJ' => 'E02003290',
        '8AL' => 'E02003290',
        '8AN' => 'E02003290',
        '8AP' => 'E02003293',
        '8AQ' => 'E02003290',
        '8AR' => 'E02003293',
        '8AS' => 'E02003293',
        '8AT' => 'E02003290',
        '8AU' => 'E02003293',
        '8AW' => 'E02003290',
        '8AX' => 'E02003293',
        '8AY' => 'E02003290',
        '8AZ' => 'E02003290',
        '8BA' => 'E02003290',
        '8BB' => 'E02003290',
        '8BD' => 'E02003290',
        '8BE' => 'E02003290',
        '8BF' => 'E02003290',
        '8BG' => 'E02003290',
        '8BH' => 'E02003290',
        '8BJ' => 'E02003290',
        '8BL' => 'E02003290',
        '8BN' => 'E02003290',
        '8BP' => 'E02003290',
        '8BQ' => 'E02003290',
        '8BS' => 'E02003290',
        '8BT' => 'E02003293',
        '8BU' => 'E02003293',
        '8BW' => 'E02003290',
        '8BX' => 'E02003293',
        '8BY' => 'E02003290',
        '8BZ' => 'E02003290',
        '8DA' => 'E02003290',
        '8DB' => 'E02003290',
        '8DD' => 'E02003290',
        '8DE' => 'E02003290',
        '8DF' => 'E02003290',
        '8DG' => 'E02003290',
        '8DH' => 'E02003290',
        '8DJ' => 'E02003290',
        '8DL' => 'E02003290',
        '8DN' => 'E02003290',
        '8DP' => 'E02003288',
        '8DQ' => 'E02003290',
        '8DR' => 'E02003288',
        '8DS' => 'E02003290',
        '8DT' => 'E02003290',
        '8DU' => 'E02003290',
        '8DW' => 'E02003290',
        '8DX' => 'E02003290',
        '8DY' => 'E02003290',
        '8DZ' => 'E02003290',
        '8EA' => 'E02003290',
        '8EB' => 'E02003290',
        '8ED' => 'E02003290',
        '8EE' => 'E02003290',
        '8EF' => 'E02003290',
        '8EG' => 'E02003290',
        '8EH' => 'E02003290',
        '8EJ' => 'E02003290',
        '8EL' => 'E02003290',
        '8EN' => 'E02003290',
        '8EP' => 'E02003290',
        '8EQ' => 'E02003288',
        '8ER' => 'E02003290',
        '8ES' => 'E02003290',
        '8ET' => 'E02003290',
        '8EU' => 'E02003290',
        '8EW' => 'E02003290',
        '8EX' => 'E02003290',
        '8EY' => 'E02003290',
        '8EZ' => 'E02003290',
        '8FA' => 'E02003288',
        '8FB' => 'E02003288',
        '8FD' => 'E02003288',
        '8FE' => 'E02003293',
        '8FF' => 'E02003290',
        '8FG' => 'E02003290',
        '8FH' => 'E02003290',
        '8FJ' => 'E02003290',
        '8FL' => 'E02003290',
        '8FN' => 'E02003290',
        '8FZ' => 'E02003288',
        '8GG' => 'E02003288',
        '8HA' => 'E02003288',
        '8HB' => 'E02003290',
        '8HE' => 'E02003290',
        '8HF' => 'E02003290',
        '8HH' => 'E02003290',
        '8HL' => 'E02003290',
        '8HN' => 'E02003290',
        '8HP' => 'E02003290',
        '8HQ' => 'E02003288',
        '8HR' => 'E02003290',
        '8HS' => 'E02003290',
        '8HT' => 'E02003290',
        '8HU' => 'E02003290',
        '8HW' => 'E02003290',
        '8HX' => 'E02003290',
        '8HY' => 'E02003290',
        '8JA' => 'E02003290',
        '8JB' => 'E02003290',
        '8JD' => 'E02003290',
        '8JE' => 'E02003290',
        '8JF' => 'E02003290',
        '8JH' => 'E02003290',
        '8JJ' => 'E02003290',
        '8JL' => 'E02003290',
        '8JN' => 'E02003290',
        '8JP' => 'E02003290',
        '8JQ' => 'E02003290',
        '8JR' => 'E02003290',
        '8JS' => 'E02003288',
        '8JT' => 'E02003290',
        '8LA' => 'E02003290',
        '8LB' => 'E02003290',
        '8LD' => 'E02003290',
        '8LE' => 'E02003290',
        '8LF' => 'E02003290',
        '8LG' => 'E02003290',
        '8LH' => 'E02003290',
        '8LJ' => 'E02003290',
        '8LL' => 'E02003290',
        '8LN' => 'E02003288',
        '8LP' => 'E02003290',
        '8LQ' => 'E02003290',
        '8LR' => 'E02003290',
        '8LS' => 'E02003290',
        '8LT' => 'E02003290',
        '8LU' => 'E02003290',
        '8LW' => 'E02003290',
        '8LX' => 'E02003290',
        '8LY' => 'E02003290',
        '8LZ' => 'E02003290',
        '8NA' => 'E02003290',
        '8NB' => 'E02003290',
        '8ND' => 'E02003290',
        '8NE' => 'E02003290',
        '8NF' => 'E02003290',
        '8NG' => 'E02003290',
        '8NH' => 'E02003290',
        '8NJ' => 'E02003290',
        '8NL' => 'E02003290',
        '8NN' => 'E02003290',
        '8NP' => 'E02003290',
        '8NQ' => 'E02003290',
        '8NR' => 'E02003290',
        '8NS' => 'E02003290',
        '8NT' => 'E02003290',
        '8NU' => 'E02003290',
        '8NW' => 'E02003288',
        '8NX' => 'E02003290',
        '8NY' => 'E02003290',
        '8NZ' => 'E02003290',
        '8PA' => 'E02003290',
        '8PB' => 'E02003290',
        '8PD' => 'E02003290',
        '8PH' => 'E02003290',
        '8PJ' => 'E02003290',
        '8PL' => 'E02003290',
        '8PN' => 'E02003290',
        '8PP' => 'E02003290',
        '8PQ' => 'E02003290',
        '8PR' => 'E02003290',
        '8PS' => 'E02003290',
        '8PT' => 'E02003290',
        '8PU' => 'E02003290',
        '8PX' => 'E02003290',
        '8PY' => 'E02003290',
        '8PZ' => 'E02003290',
        '8QA' => 'E02003290',
        '8QB' => 'E02003290',
        '8QD' => 'E02003290',
        '8QQ' => 'E02003290',
        '8QT' => 'E02003290',
        '8RA' => 'E02003288',
        '8SP' => 'E02003290',
        '8TB' => 'E02003290',
        '8TD' => 'E02003288',
        '8WA' => 'E02003288',
        '8WE' => 'E02003288',
        '8WF' => 'E02003288',
        '8WG' => 'E02003288',
        '8WH' => 'E02003288',
        '8WR' => 'E02003288',
        '8WY' => 'E02003288',
        '8WZ' => 'E02003288',
        '8YA' => 'E02003290',
        '8YB' => 'E02003290',
        '8YD' => 'E02003288',
        '8YE' => 'E02003288',
        '8YF' => 'E02003290',
        '8YG' => 'E02003288',
        '8YJ' => 'E02003288',
        '8YQ' => 'E02003288',
        '8YT' => 'E02003288',
        '9AA' => 'E02003282',
        '9AB' => 'E02003282',
        '9AD' => 'E02003282',
        '9AE' => 'E02003282',
        '9AF' => 'E02003282',
        '9AG' => 'E02003282',
        '9AH' => 'E02003282',
        '9AJ' => 'E02003282',
        '9AL' => 'E02003282',
        '9AN' => 'E02003282',
        '9AP' => 'E02003290',
        '9AQ' => 'E02003285',
        '9AR' => 'E02003282',
        '9AS' => 'E02003288',
        '9AT' => 'E02003282',
        '9AU' => 'E02003285',
        '9AW' => 'E02003285',
        '9AX' => 'E02003288',
        '9AY' => 'E02003285',
        '9AZ' => 'E02003285',
        '9BA' => 'E02003285',
        '9BB' => 'E02003285',
        '9BD' => 'E02003285',
        '9BE' => 'E02003285',
        '9BF' => 'E02003285',
        '9BG' => 'E02003285',
        '9BH' => 'E02003282',
        '9BJ' => 'E02003285',
        '9BL' => 'E02003285',
        '9BN' => 'E02003285',
        '9BP' => 'E02003282',
        '9BQ' => 'E02003285',
        '9BS' => 'E02003282',
        '9BT' => 'E02003285',
        '9BU' => 'E02003288',
        '9BW' => 'E02003282',
        '9BX' => 'E02003285',
        '9BY' => 'E02003288',
        '9BZ' => 'E02003285',
        '9DA' => 'E02003288',
        '9DB' => 'E02003288',
        '9DD' => 'E02003288',
        '9DE' => 'E02003282',
        '9DF' => 'E02003288',
        '9DG' => 'E02003288',
        '9DH' => 'E02003282',
        '9DJ' => 'E02003285',
        '9DL' => 'E02003285',
        '9DN' => 'E02003285',
        '9DP' => 'E02003285',
        '9DQ' => 'E02003285',
        '9DR' => 'E02003282',
        '9DS' => 'E02003285',
        '9DT' => 'E02003285',
        '9DU' => 'E02003285',
        '9DW' => 'E02003285',
        '9DX' => 'E02003285',
        '9DY' => 'E02003285',
        '9DZ' => 'E02003285',
        '9EA' => 'E02003285',
        '9EB' => 'E02003285',
        '9ED' => 'E02003285',
        '9EE' => 'E02003285',
        '9EF' => 'E02003285',
        '9EG' => 'E02003285',
        '9EH' => 'E02003285',
        '9EJ' => 'E02003285',
        '9EL' => 'E02003285',
        '9EN' => 'E02003285',
        '9EP' => 'E02003285',
        '9EQ' => 'E02003285',
        '9ER' => 'E02003285',
        '9ES' => 'E02003285',
        '9ET' => 'E02003285',
        '9EU' => 'E02003285',
        '9EW' => 'E02003285',
        '9EX' => 'E02003285',
        '9EY' => 'E02003285',
        '9EZ' => 'E02003285',
        '9FA' => 'E02003283',
        '9FB' => 'E02003285',
        '9FD' => 'E02003285',
        '9FE' => 'E02003288',
        '9FF' => 'E02003288',
        '9FG' => 'E02003285',
        '9FH' => 'E02003282',
        '9FJ' => 'E02003282',
        '9FR' => 'E02003282',
        '9GA' => 'E02003288',
        '9GB' => 'E02003288',
        '9GD' => 'E02003288',
        '9GE' => 'E02003288',
        '9GG' => 'E02003285',
        '9GH' => 'E02003285',
        '9GJ' => 'E02003285',
        '9GL' => 'E02003285',
        '9GR' => 'E02003288',
        '9GW' => 'E02003288',
        '9GX' => 'E02003288',
        '9GY' => 'E02003288',
        '9GZ' => 'E02003285',
        '9HA' => 'E02003285',
        '9HB' => 'E02003285',
        '9HD' => 'E02003290',
        '9HF' => 'E02003285',
        '9HH' => 'E02003288',
        '9HJ' => 'E02003290',
        '9HL' => 'E02003290',
        '9HN' => 'E02003285',
        '9HP' => 'E02003290',
        '9HQ' => 'E02003290',
        '9HR' => 'E02003290',
        '9HS' => 'E02003290',
        '9HT' => 'E02003290',
        '9HU' => 'E02003290',
        '9HW' => 'E02003290',
        '9HX' => 'E02003290',
        '9HZ' => 'E02003290',
        '9JA' => 'E02003285',
        '9JB' => 'E02003285',
        '9JD' => 'E02003285',
        '9JE' => 'E02003285',
        '9JF' => 'E02003285',
        '9JG' => 'E02003285',
        '9JH' => 'E02003285',
        '9JJ' => 'E02003285',
        '9JL' => 'E02003285',
        '9JN' => 'E02003285',
        '9JP' => 'E02003285',
        '9JQ' => 'E02003285',
        '9JR' => 'E02003285',
        '9JS' => 'E02003285',
        '9JT' => 'E02003285',
        '9JU' => 'E02003285',
        '9JW' => 'E02003285',
        '9JY' => 'E02003288',
        '9JZ' => 'E02003285',
        '9LA' => 'E02003290',
        '9LB' => 'E02003285',
        '9LD' => 'E02003290',
        '9LE' => 'E02003290',
        '9LF' => 'E02003285',
        '9LG' => 'E02003285',
        '9LH' => 'E02003285',
        '9LJ' => 'E02003285',
        '9LL' => 'E02003290',
        '9LN' => 'E02003285',
        '9LP' => 'E02003285',
        '9LQ' => 'E02003285',
        '9LR' => 'E02003285',
        '9LS' => 'E02003285',
        '9LT' => 'E02003285',
        '9LU' => 'E02003285',
        '9LW' => 'E02003285',
        '9LX' => 'E02003285',
        '9LY' => 'E02003285',
        '9LZ' => 'E02003285',
        '9NA' => 'E02003285',
        '9NB' => 'E02003285',
        '9ND' => 'E02003285',
        '9NE' => 'E02003285',
        '9NF' => 'E02003285',
        '9NG' => 'E02003285',
        '9NH' => 'E02003285',
        '9NJ' => 'E02003285',
        '9NL' => 'E02003285',
        '9NN' => 'E02003285',
        '9NP' => 'E02003285',
        '9NQ' => 'E02003285',
        '9NR' => 'E02003290',
        '9NS' => 'E02003285',
        '9NT' => 'E02003290',
        '9NU' => 'E02003290',
        '9NW' => 'E02003285',
        '9NX' => 'E02003285',
        '9NY' => 'E02003290',
        '9NZ' => 'E02003285',
        '9PA' => 'E02003285',
        '9PB' => 'E02003285',
        '9PD' => 'E02003285',
        '9PE' => 'E02003285',
        '9PF' => 'E02003285',
        '9PG' => 'E02003290',
        '9PH' => 'E02003290',
        '9PJ' => 'E02003285',
        '9PL' => 'E02003290',
        '9PN' => 'E02003290',
        '9PP' => 'E02003285',
        '9PQ' => 'E02003285',
        '9PR' => 'E02003285',
        '9PS' => 'E02003285',
        '9PT' => 'E02003285',
        '9PU' => 'E02003285',
        '9PW' => 'E02003285',
        '9PX' => 'E02003285',
        '9PY' => 'E02003285',
        '9PZ' => 'E02003285',
        '9QA' => 'E02003285',
        '9QB' => 'E02003285',
        '9QD' => 'E02003285',
        '9QE' => 'E02003285',
        '9QF' => 'E02003285',
        '9QG' => 'E02003285',
        '9QH' => 'E02003285',
        '9QJ' => 'E02003285',
        '9QL' => 'E02003285',
        '9QN' => 'E02003285',
        '9QP' => 'E02003285',
        '9QQ' => 'E02003285',
        '9QR' => 'E02003285',
        '9QS' => 'E02003285',
        '9QT' => 'E02003285',
        '9QU' => 'E02003285',
        '9QW' => 'E02003285',
        '9QX' => 'E02003285',
        '9QY' => 'E02003285',
        '9RA' => 'E02003285',
        '9RB' => 'E02003285',
        '9RD' => 'E02003285',
        '9RE' => 'E02003285',
        '9RF' => 'E02003285',
        '9RG' => 'E02003285',
        '9RH' => 'E02003285',
        '9RJ' => 'E02003285',
        '9RL' => 'E02003285',
        '9RN' => 'E02003285',
        '9RP' => 'E02003285',
        '9RQ' => 'E02003285',
        '9RR' => 'E02003285',
        '9RS' => 'E02003285',
        '9RT' => 'E02003285',
        '9RU' => 'E02003285',
        '9RW' => 'E02003285',
        '9RX' => 'E02003285',
        '9RY' => 'E02003285',
        '9RZ' => 'E02003285',
        '9SA' => 'E02003285',
        '9SB' => 'E02003285',
        '9SD' => 'E02003285',
        '9SE' => 'E02003285',
        '9SF' => 'E02003285',
        '9SG' => 'E02003285',
        '9SH' => 'E02003285',
        '9SJ' => 'E02003285',
        '9SL' => 'E02003285',
        '9SN' => 'E02003285',
        '9SP' => 'E02003285',
        '9SQ' => 'E02003285',
        '9SR' => 'E02003290',
        '9SS' => 'E02003290',
        '9ST' => 'E02003285',
        '9SU' => 'E02003285',
        '9SW' => 'E02003285',
        '9SX' => 'E02003290',
        '9SY' => 'E02003283',
        '9SZ' => 'E02003283',
        '9TA' => 'E02003285',
        '9TB' => 'E02003285',
        '9TD' => 'E02003285',
        '9TE' => 'E02003283',
        '9TF' => 'E02003290',
        '9TG' => 'E02003285',
        '9TH' => 'E02003285',
        '9TJ' => 'E02003285',
        '9TL' => 'E02003285',
        '9TN' => 'E02003285',
        '9TP' => 'E02003285',
        '9TQ' => 'E02003285',
        '9TR' => 'E02003285',
        '9TS' => 'E02003285',
        '9TT' => 'E02003285',
        '9TU' => 'E02003285',
        '9TW' => 'E02003285',
        '9TX' => 'E02003285',
        '9TY' => 'E02003285',
        '9TZ' => 'E02003285',
        '9UA' => 'E02003285',
        '9UB' => 'E02003285',
        '9UD' => 'E02003285',
        '9UE' => 'E02003285',
        '9UF' => 'E02003285',
        '9UG' => 'E02003285',
        '9UN' => 'E02003285',
        '9UQ' => 'E02003285',
        '9UR' => 'E02003285',
        '9UT' => 'E02003285',
        '9UU' => 'E02003285',
        '9UW' => 'E02003285',
        '9UY' => 'E02003288',
        '9UZ' => 'E02003288',
        '9WA' => 'E02003288',
        '9WB' => 'E02003288',
        '9WD' => 'E02003288',
        '9WE' => 'E02003288',
        '9WF' => 'E02003288',
        '9WG' => 'E02003288',
        '9WH' => 'E02003288',
        '9WJ' => 'E02003288',
        '9WL' => 'E02003288',
        '9WP' => 'E02003288',
        '9WQ' => 'E02003288',
        '9WR' => 'E02003288',
        '9WS' => 'E02003288',
        '9WT' => 'E02003288',
        '9WU' => 'E02003288',
        '9WW' => 'E02003288',
        '9WX' => 'E02003288',
        '9WY' => 'E02003288',
        '9WZ' => 'E02003288',
        '9XA' => 'E02003283',
        '9XB' => 'E02003283',
        '9XD' => 'E02003283',
        '9XE' => 'E02003283',
        '9XF' => 'E02003283',
        '9XG' => 'E02003283',
        '9XH' => 'E02003283',
        '9XJ' => 'E02003283',
        '9XL' => 'E02003283',
        '9XN' => 'E02003283',
        '9XP' => 'E02003283',
        '9XQ' => 'E02003283',
        '9XR' => 'E02003283',
        '9XS' => 'E02003283',
        '9XT' => 'E02003283',
        '9XU' => 'E02003283',
        '9XW' => 'E02003283',
        '9XX' => 'E02003283',
        '9XY' => 'E02003283',
        '9XZ' => 'E02003288',
        '9YA' => 'E02003283',
        '9YB' => 'E02003283',
        '9YD' => 'E02003285',
        '9YE' => 'E02003288',
        '9YF' => 'E02003283',
        '9YG' => 'E02003285',
        '9YH' => 'E02003288',
        '9YJ' => 'E02003285',
        '9YL' => 'E02003285',
        '9YN' => 'E02003288',
        '9YP' => 'E02003285',
        '9YQ' => 'E02003288',
        '9YR' => 'E02003288',
        '9YS' => 'E02003288',
        '9YT' => 'E02003288',
        '9YU' => 'E02003288',
        '9YW' => 'E02003285',
        '9YX' => 'E02003288',
        '9YY' => 'E02003285',
        '9YZ' => 'E02003288',
        '9ZT' => 'E02003288',
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
