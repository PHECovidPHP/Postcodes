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
final class ST2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002967',
        '0AB' => 'E02002967',
        '0AD' => 'E02002967',
        '0AE' => 'E02002967',
        '0AF' => 'E02002967',
        '0AG' => 'E02002967',
        '0AH' => 'E02002967',
        '0AJ' => 'E02002967',
        '0AL' => 'E02002967',
        '0AN' => 'E02002967',
        '0AP' => 'E02002967',
        '0AQ' => 'E02002967',
        '0AR' => 'E02002967',
        '0AS' => 'E02002967',
        '0AT' => 'E02002967',
        '0AU' => 'E02002967',
        '0AW' => 'E02002967',
        '0AX' => 'E02002964',
        '0AY' => 'E02002964',
        '0AZ' => 'E02002967',
        '0BA' => 'E02002964',
        '0BB' => 'E02002964',
        '0BD' => 'E02002967',
        '0BE' => 'E02002967',
        '0BF' => 'E02002967',
        '0BG' => 'E02002967',
        '0BH' => 'E02002967',
        '0BJ' => 'E02002967',
        '0BL' => 'E02002967',
        '0BN' => 'E02002967',
        '0BP' => 'E02002967',
        '0BQ' => 'E02002967',
        '0BS' => 'E02002967',
        '0BT' => 'E02002967',
        '0BU' => 'E02002967',
        '0BW' => 'E02002967',
        '0BX' => 'E02002967',
        '0BY' => 'E02002967',
        '0BZ' => 'E02002967',
        '0DA' => 'E02002967',
        '0DB' => 'E02002967',
        '0DD' => 'E02002967',
        '0DE' => 'E02002967',
        '0DF' => 'E02002967',
        '0DG' => 'E02002967',
        '0DH' => 'E02002967',
        '0DJ' => 'E02002967',
        '0DL' => 'E02002967',
        '0DN' => 'E02002967',
        '0DP' => 'E02002967',
        '0DQ' => 'E02002967',
        '0DR' => 'E02002967',
        '0DS' => 'E02002967',
        '0DT' => 'E02002967',
        '0DU' => 'E02002967',
        '0DW' => 'E02002967',
        '0DX' => 'E02002967',
        '0DY' => 'E02002967',
        '0DZ' => 'E02002964',
        '0EA' => 'E02002967',
        '0EB' => 'E02002967',
        '0ED' => 'E02002967',
        '0EE' => 'E02002967',
        '0EF' => 'E02002967',
        '0EG' => 'E02002967',
        '0EH' => 'E02002967',
        '0EJ' => 'E02002967',
        '0EL' => 'E02002967',
        '0EN' => 'E02002967',
        '0EP' => 'E02002967',
        '0EQ' => 'E02002967',
        '0ER' => 'E02002967',
        '0ES' => 'E02002967',
        '0ET' => 'E02002967',
        '0EU' => 'E02002967',
        '0EW' => 'E02002967',
        '0EX' => 'E02002967',
        '0EY' => 'E02002967',
        '0EZ' => 'E02002967',
        '0GA' => 'E02002967',
        '0GH' => 'E02002967',
        '0GX' => 'E02002967',
        '0HA' => 'E02002967',
        '0HB' => 'E02002967',
        '0HD' => 'E02002967',
        '0HE' => 'E02002967',
        '0HF' => 'E02002967',
        '0HG' => 'E02002967',
        '0HH' => 'E02002967',
        '0HJ' => 'E02002967',
        '0HL' => 'E02002967',
        '0HN' => 'E02002967',
        '0HP' => 'E02002967',
        '0HQ' => 'E02002967',
        '0HR' => 'E02002967',
        '0HS' => 'E02002967',
        '0HT' => 'E02002967',
        '0HU' => 'E02002967',
        '0HW' => 'E02002967',
        '0HX' => 'E02002967',
        '0HY' => 'E02002967',
        '0HZ' => 'E02002967',
        '0JA' => 'E02002967',
        '0JB' => 'E02002967',
        '0JD' => 'E02002964',
        '0JE' => 'E02002964',
        '0JF' => 'E02002964',
        '0JG' => 'E02002964',
        '0JH' => 'E02002967',
        '0JJ' => 'E02002964',
        '0JL' => 'E02002967',
        '0JN' => 'E02002967',
        '0JP' => 'E02002967',
        '0JQ' => 'E02002964',
        '0JR' => 'E02002967',
        '0JS' => 'E02002967',
        '0JT' => 'E02002967',
        '0JU' => 'E02002967',
        '0JW' => 'E02002967',
        '0JX' => 'E02002967',
        '0JY' => 'E02002967',
        '0JZ' => 'E02002967',
        '0LA' => 'E02002967',
        '0LB' => 'E02002967',
        '0LD' => 'E02002967',
        '0LE' => 'E02002967',
        '0LF' => 'E02002967',
        '0LG' => 'E02002967',
        '0LH' => 'E02002967',
        '0LJ' => 'E02002967',
        '0LL' => 'E02002967',
        '0LN' => 'E02002967',
        '0LP' => 'E02002967',
        '0LQ' => 'E02002967',
        '0LR' => 'E02002967',
        '0LS' => 'E02002967',
        '0LT' => 'E02002967',
        '0LU' => 'E02002967',
        '0LW' => 'E02002967',
        '0LX' => 'E02002967',
        '0LY' => 'E02002967',
        '0LZ' => 'E02002967',
        '0NA' => 'E02002967',
        '0NB' => 'E02002967',
        '0ND' => 'E02002967',
        '0NE' => 'E02002967',
        '0NF' => 'E02002967',
        '0NG' => 'E02002967',
        '0NH' => 'E02002967',
        '0NJ' => 'E02002967',
        '0NL' => 'E02002967',
        '0NN' => 'E02002967',
        '0NP' => 'E02002967',
        '0NQ' => 'E02002967',
        '0NR' => 'E02002967',
        '0NS' => 'E02002967',
        '0NT' => 'E02002967',
        '0NU' => 'E02002967',
        '0NW' => 'E02002967',
        '0NX' => 'E02002967',
        '0NY' => 'E02002967',
        '0NZ' => 'E02002967',
        '0PA' => 'E02002967',
        '0PB' => 'E02002967',
        '0PD' => 'E02002967',
        '0PE' => 'E02002967',
        '0PF' => 'E02002967',
        '0PG' => 'E02002967',
        '0PH' => 'E02002967',
        '0PJ' => 'E02002967',
        '0PL' => 'E02002967',
        '0PN' => 'E02002967',
        '0PP' => 'E02002967',
        '0PQ' => 'E02002967',
        '0PR' => 'E02002967',
        '0PS' => 'E02002967',
        '0PT' => 'E02002967',
        '0PU' => 'E02002967',
        '0PW' => 'E02002967',
        '0PX' => 'E02002967',
        '0PY' => 'E02002967',
        '0PZ' => 'E02002967',
        '0QA' => 'E02002967',
        '0QB' => 'E02002967',
        '0QD' => 'E02002967',
        '0QE' => 'E02002967',
        '0QF' => 'E02002967',
        '0QG' => 'E02002967',
        '0QH' => 'E02002967',
        '0QJ' => 'E02002967',
        '0QL' => 'E02002967',
        '0QN' => 'E02002967',
        '0QP' => 'E02002967',
        '0QQ' => 'E02002967',
        '0QR' => 'E02002967',
        '0QS' => 'E02002967',
        '0QT' => 'E02002967',
        '0QU' => 'E02002967',
        '0QW' => 'E02002967',
        '0QX' => 'E02002967',
        '0QY' => 'E02002967',
        '0QZ' => 'E02002967',
        '0RA' => 'E02002967',
        '0RB' => 'E02002967',
        '0RD' => 'E02002967',
        '0RE' => 'E02002967',
        '0RF' => 'E02002967',
        '0RG' => 'E02002967',
        '0RH' => 'E02002967',
        '0RJ' => 'E02002967',
        '0RL' => 'E02002967',
        '0RN' => 'E02002967',
        '0RP' => 'E02002967',
        '0RQ' => 'E02002967',
        '0RR' => 'E02002967',
        '0RS' => 'E02002967',
        '0RT' => 'E02002967',
        '0RU' => 'E02002967',
        '0RW' => 'E02002967',
        '0RX' => 'E02002967',
        '0RY' => 'E02002967',
        '0RZ' => 'E02002967',
        '0SA' => 'E02002967',
        '0SB' => 'E02002967',
        '0SD' => 'E02002967',
        '0SE' => 'E02002967',
        '0SF' => 'E02002967',
        '0SG' => 'E02002966',
        '0SH' => 'E02002967',
        '0SJ' => 'E02002967',
        '0SL' => 'E02002966',
        '0SN' => 'E02002967',
        '0SP' => 'E02002967',
        '0SQ' => 'E02002967',
        '0SR' => 'E02002967',
        '0SS' => 'E02002967',
        '0ST' => 'E02002967',
        '0SU' => 'E02002967',
        '0SW' => 'E02002967',
        '0SX' => 'E02002967',
        '0SY' => 'E02002967',
        '0SZ' => 'E02002967',
        '0TA' => 'E02002967',
        '0TB' => 'E02002967',
        '0TD' => 'E02002967',
        '0TE' => 'E02002967',
        '0TF' => 'E02002966',
        '0TG' => 'E02002966',
        '0TH' => 'E02002967',
        '0TJ' => 'E02002967',
        '0TL' => 'E02002967',
        '0TN' => 'E02002967',
        '0TQ' => 'E02002966',
        '0TR' => 'E02002967',
        '0TS' => 'E02002967',
        '0TT' => 'E02002967',
        '0TU' => 'E02002967',
        '0TW' => 'E02002967',
        '0TX' => 'E02002967',
        '0TY' => 'E02002967',
        '0TZ' => 'E02002967',
        '0WR' => 'E02002966',
        '0WZ' => 'E02002966',
        '7AA' => 'E02002957',
        '7AB' => 'E02002962',
        '7AD' => 'E02002957',
        '7AE' => 'E02002957',
        '7AF' => 'E02002957',
        '7AG' => 'E02002957',
        '7AH' => 'E02002957',
        '7AJ' => 'E02002957',
        '7AL' => 'E02002957',
        '7AN' => 'E02002957',
        '7AP' => 'E02002957',
        '7AQ' => 'E02002957',
        '7AR' => 'E02002957',
        '7AS' => 'E02002957',
        '7AT' => 'E02002957',
        '7AU' => 'E02002957',
        '7AW' => 'E02002957',
        '7AX' => 'E02002957',
        '7AY' => 'E02002957',
        '7AZ' => 'E02002957',
        '7BA' => 'E02002962',
        '7BB' => 'E02002962',
        '7BD' => 'E02002962',
        '7BE' => 'E02002962',
        '7BF' => 'E02002962',
        '7BG' => 'E02002962',
        '7BH' => 'E02002962',
        '7BJ' => 'E02002957',
        '7BL' => 'E02002957',
        '7BN' => 'E02002957',
        '7BP' => 'E02002957',
        '7BQ' => 'E02002962',
        '7BS' => 'E02002957',
        '7BT' => 'E02002957',
        '7BU' => 'E02002957',
        '7BW' => 'E02002957',
        '7BX' => 'E02002957',
        '7BY' => 'E02002957',
        '7BZ' => 'E02002957',
        '7DA' => 'E02002957',
        '7DB' => 'E02002957',
        '7DD' => 'E02002957',
        '7DE' => 'E02002957',
        '7DF' => 'E02002957',
        '7DG' => 'E02002957',
        '7DH' => 'E02002957',
        '7DJ' => 'E02002957',
        '7DL' => 'E02002957',
        '7DN' => 'E02002957',
        '7DP' => 'E02002957',
        '7DQ' => 'E02002957',
        '7DR' => 'E02002957',
        '7DS' => 'E02002957',
        '7DT' => 'E02002957',
        '7DU' => 'E02002957',
        '7DW' => 'E02002957',
        '7DX' => 'E02002957',
        '7DY' => 'E02002957',
        '7DZ' => 'E02002957',
        '7EA' => 'E02002957',
        '7EB' => 'E02002957',
        '7ED' => 'E02002957',
        '7EE' => 'E02002954',
        '7EF' => 'E02002957',
        '7EG' => 'E02002957',
        '7EH' => 'E02002957',
        '7EJ' => 'E02002957',
        '7EL' => 'E02002957',
        '7EN' => 'E02002957',
        '7EP' => 'E02002957',
        '7EQ' => 'E02002957',
        '7ER' => 'E02002957',
        '7ES' => 'E02002957',
        '7ET' => 'E02002957',
        '7EU' => 'E02002957',
        '7EW' => 'E02002957',
        '7EX' => 'E02002957',
        '7EY' => 'E02002957',
        '7EZ' => 'E02002957',
        '7HA' => 'E02002957',
        '7HB' => 'E02002957',
        '7HD' => 'E02002957',
        '7HE' => 'E02002957',
        '7HF' => 'E02002957',
        '7HG' => 'E02002957',
        '7HH' => 'E02002957',
        '7HJ' => 'E02002957',
        '7HL' => 'E02002957',
        '7HN' => 'E02002957',
        '7HP' => 'E02002957',
        '7HQ' => 'E02002957',
        '7HR' => 'E02002957',
        '7HS' => 'E02002957',
        '7HT' => 'E02002957',
        '7HU' => 'E02002957',
        '7HW' => 'E02002957',
        '7HX' => 'E02002957',
        '7HY' => 'E02002957',
        '7HZ' => 'E02002957',
        '7JA' => 'E02002957',
        '7JB' => 'E02002957',
        '7JD' => 'E02002957',
        '7JE' => 'E02002957',
        '7JF' => 'E02002957',
        '7JG' => 'E02002957',
        '7JH' => 'E02002957',
        '7JJ' => 'E02002957',
        '7JL' => 'E02002957',
        '7JN' => 'E02002957',
        '7JP' => 'E02002957',
        '7JQ' => 'E02002957',
        '7JR' => 'E02002957',
        '7JS' => 'E02002957',
        '7JT' => 'E02002957',
        '7JU' => 'E02002957',
        '7JW' => 'E02002957',
        '7JX' => 'E02002957',
        '7JY' => 'E02002957',
        '7JZ' => 'E02002957',
        '7LA' => 'E02002957',
        '7LB' => 'E02002957',
        '7LD' => 'E02002957',
        '7LE' => 'E02002957',
        '7LF' => 'E02002957',
        '7LG' => 'E02002957',
        '7LH' => 'E02002957',
        '7LJ' => 'E02002957',
        '7LL' => 'E02002957',
        '7LN' => 'E02002957',
        '7LP' => 'E02002957',
        '7LQ' => 'E02002957',
        '7LR' => 'E02002957',
        '7LS' => 'E02002957',
        '7LT' => 'E02002957',
        '7LU' => 'E02002957',
        '7LW' => 'E02002957',
        '7LX' => 'E02002957',
        '7LY' => 'E02002957',
        '7LZ' => 'E02002957',
        '7NA' => 'E02002957',
        '7NB' => 'E02002957',
        '7ND' => 'E02002957',
        '7NE' => 'E02002957',
        '7NF' => 'E02002957',
        '7NG' => 'E02002957',
        '7NH' => 'E02006211',
        '7NJ' => 'E02002958',
        '7NL' => 'E02002957',
        '7NN' => 'E02002957',
        '7NP' => 'E02002957',
        '7NQ' => 'E02002957',
        '7NR' => 'E02002957',
        '7NS' => 'E02002957',
        '7NT' => 'E02002957',
        '7NU' => 'E02002957',
        '7NW' => 'E02002957',
        '7NX' => 'E02002957',
        '7NY' => 'E02002957',
        '7NZ' => 'E02002957',
        '7PA' => 'E02002957',
        '7PB' => 'E02002957',
        '7PD' => 'E02002957',
        '7PE' => 'E02002957',
        '7PF' => 'E02002957',
        '7PG' => 'E02002957',
        '7PH' => 'E02002957',
        '7PJ' => 'E02002957',
        '7PL' => 'E02002957',
        '7PN' => 'E02002957',
        '7PP' => 'E02002957',
        '7PQ' => 'E02002957',
        '7PR' => 'E02002957',
        '7PS' => 'E02002957',
        '7PT' => 'E02002957',
        '7PU' => 'E02002957',
        '7PW' => 'E02002958',
        '7PX' => 'E02002954',
        '7PY' => 'E02002957',
        '7PZ' => 'E02002957',
        '7QA' => 'E02002966',
        '7QB' => 'E02002957',
        '7QD' => 'E02002957',
        '7QE' => 'E02002957',
        '7QF' => 'E02002957',
        '7QG' => 'E02002957',
        '7QH' => 'E02002957',
        '7QJ' => 'E02002957',
        '7QL' => 'E02002957',
        '7QN' => 'E02002957',
        '7QP' => 'E02002966',
        '7QQ' => 'E02002966',
        '7QR' => 'E02002966',
        '7QS' => 'E02002966',
        '7QT' => 'E02002957',
        '7QU' => 'E02002957',
        '7QW' => 'E02002957',
        '7QX' => 'E02002957',
        '7QY' => 'E02002957',
        '7WA' => 'E02002966',
        '7WB' => 'E02002966',
        '7WD' => 'E02002966',
        '7WE' => 'E02002966',
        '7WG' => 'E02002966',
        '7WQ' => 'E02002966',
        '7WS' => 'E02002966',
        '7XR' => 'E02002966',
        '7ZD' => 'E02002966',
        '8AA' => 'E02002964',
        '8AB' => 'E02002964',
        '8AD' => 'E02002964',
        '8AE' => 'E02002964',
        '8AF' => 'E02002964',
        '8AG' => 'E02002964',
        '8AH' => 'E02002962',
        '8AJ' => 'E02002962',
        '8AL' => 'E02002962',
        '8AN' => 'E02002962',
        '8AP' => 'E02002962',
        '8AQ' => 'E02002964',
        '8AR' => 'E02002962',
        '8AS' => 'E02002962',
        '8AT' => 'E02002962',
        '8AU' => 'E02002962',
        '8AW' => 'E02002962',
        '8AX' => 'E02002962',
        '8AY' => 'E02002962',
        '8AZ' => 'E02002962',
        '8BA' => 'E02002962',
        '8BB' => 'E02002962',
        '8BD' => 'E02002962',
        '8BE' => 'E02002962',
        '8BF' => 'E02002962',
        '8BG' => 'E02002962',
        '8BH' => 'E02002962',
        '8BJ' => 'E02002962',
        '8BL' => 'E02002962',
        '8BN' => 'E02002962',
        '8BP' => 'E02002962',
        '8BQ' => 'E02002962',
        '8BS' => 'E02002962',
        '8BT' => 'E02002962',
        '8BU' => 'E02002962',
        '8BW' => 'E02002962',
        '8BX' => 'E02002962',
        '8BY' => 'E02002962',
        '8BZ' => 'E02002962',
        '8DA' => 'E02002962',
        '8DB' => 'E02002962',
        '8DD' => 'E02002957',
        '8DE' => 'E02002962',
        '8DF' => 'E02002962',
        '8DG' => 'E02002962',
        '8DH' => 'E02002962',
        '8DJ' => 'E02002962',
        '8DL' => 'E02002962',
        '8DN' => 'E02002962',
        '8DP' => 'E02002962',
        '8DQ' => 'E02002962',
        '8DR' => 'E02002962',
        '8DS' => 'E02002962',
        '8DT' => 'E02002962',
        '8DU' => 'E02002962',
        '8DW' => 'E02002962',
        '8DX' => 'E02002962',
        '8DY' => 'E02002962',
        '8DZ' => 'E02002962',
        '8EA' => 'E02002962',
        '8EB' => 'E02002962',
        '8ED' => 'E02002962',
        '8EE' => 'E02002962',
        '8EF' => 'E02002962',
        '8EG' => 'E02002962',
        '8EH' => 'E02002962',
        '8EJ' => 'E02002962',
        '8EL' => 'E02002962',
        '8EN' => 'E02002962',
        '8EP' => 'E02002962',
        '8EQ' => 'E02002962',
        '8ER' => 'E02002962',
        '8ES' => 'E02002962',
        '8ET' => 'E02002962',
        '8EU' => 'E02002962',
        '8EW' => 'E02002962',
        '8EX' => 'E02002962',
        '8EY' => 'E02002962',
        '8EZ' => 'E02002962',
        '8FA' => 'E02002962',
        '8FB' => 'E02002962',
        '8FD' => 'E02002962',
        '8HA' => 'E02002962',
        '8HB' => 'E02002962',
        '8HD' => 'E02002962',
        '8HE' => 'E02002962',
        '8HF' => 'E02002962',
        '8HG' => 'E02002962',
        '8HH' => 'E02002962',
        '8HJ' => 'E02002962',
        '8HL' => 'E02002962',
        '8HN' => 'E02002962',
        '8HP' => 'E02002962',
        '8HQ' => 'E02002962',
        '8HR' => 'E02002962',
        '8HS' => 'E02002962',
        '8HT' => 'E02002962',
        '8HU' => 'E02002962',
        '8HW' => 'E02002962',
        '8HX' => 'E02002962',
        '8HY' => 'E02002962',
        '8HZ' => 'E02002962',
        '8JA' => 'E02002962',
        '8JB' => 'E02002962',
        '8JD' => 'E02002962',
        '8JE' => 'E02002962',
        '8JF' => 'E02002962',
        '8JG' => 'E02002962',
        '8JH' => 'E02002962',
        '8JJ' => 'E02002962',
        '8JL' => 'E02002962',
        '8JN' => 'E02002962',
        '8JP' => 'E02002962',
        '8JQ' => 'E02002962',
        '8JR' => 'E02002962',
        '8JS' => 'E02002962',
        '8JT' => 'E02002964',
        '8JU' => 'E02002964',
        '8JW' => 'E02002962',
        '8JX' => 'E02002964',
        '8JY' => 'E02002964',
        '8JZ' => 'E02002964',
        '8LA' => 'E02002964',
        '8LB' => 'E02002964',
        '8LD' => 'E02002962',
        '8LE' => 'E02002962',
        '8LF' => 'E02002962',
        '8LG' => 'E02002962',
        '8LH' => 'E02002962',
        '8LJ' => 'E02002962',
        '8LL' => 'E02002962',
        '8LN' => 'E02002962',
        '8LP' => 'E02002962',
        '8LQ' => 'E02002962',
        '8LR' => 'E02002962',
        '8LS' => 'E02002962',
        '8LT' => 'E02002962',
        '8LU' => 'E02002962',
        '8LW' => 'E02002962',
        '8LX' => 'E02002962',
        '8LY' => 'E02006212',
        '8LZ' => 'E02002962',
        '8NA' => 'E02006212',
        '8NB' => 'E02002962',
        '8ND' => 'E02006212',
        '8NE' => 'E02002964',
        '8NF' => 'E02002964',
        '8NG' => 'E02002964',
        '8NH' => 'E02002964',
        '8NJ' => 'E02002964',
        '8NL' => 'E02002964',
        '8NN' => 'E02002964',
        '8NP' => 'E02002962',
        '8NQ' => 'E02002964',
        '8NR' => 'E02002964',
        '8NS' => 'E02002962',
        '8NT' => 'E02002962',
        '8NU' => 'E02002964',
        '8NW' => 'E02002962',
        '8NX' => 'E02002962',
        '8NY' => 'E02002962',
        '8NZ' => 'E02002962',
        '8PA' => 'E02002962',
        '8PB' => 'E02002964',
        '8PD' => 'E02002964',
        '8PE' => 'E02002964',
        '8PF' => 'E02002962',
        '8PG' => 'E02002962',
        '8PH' => 'E02002962',
        '8PJ' => 'E02002962',
        '8PL' => 'E02002962',
        '8PN' => 'E02002962',
        '8PQ' => 'E02002962',
        '8WA' => 'E02002966',
        '8WP' => 'E02002966',
        '8WZ' => 'E02002966',
        '9AA' => 'E02002964',
        '9AB' => 'E02002964',
        '9AD' => 'E02002964',
        '9AE' => 'E02002964',
        '9AF' => 'E02002964',
        '9AG' => 'E02002964',
        '9AH' => 'E02002964',
        '9AJ' => 'E02002964',
        '9AL' => 'E02002964',
        '9AN' => 'E02002964',
        '9AP' => 'E02002964',
        '9AQ' => 'E02002964',
        '9AR' => 'E02002964',
        '9AS' => 'E02002964',
        '9AT' => 'E02002964',
        '9AU' => 'E02002964',
        '9AW' => 'E02002964',
        '9AX' => 'E02002964',
        '9AY' => 'E02002964',
        '9AZ' => 'E02002964',
        '9BA' => 'E02002964',
        '9BB' => 'E02002964',
        '9BD' => 'E02002964',
        '9BE' => 'E02002964',
        '9BF' => 'E02002964',
        '9BG' => 'E02002964',
        '9BH' => 'E02002964',
        '9BJ' => 'E02002964',
        '9BL' => 'E02002964',
        '9BN' => 'E02002964',
        '9BP' => 'E02002964',
        '9BQ' => 'E02002964',
        '9BS' => 'E02002964',
        '9BT' => 'E02002964',
        '9BU' => 'E02002964',
        '9BW' => 'E02002964',
        '9BX' => 'E02002964',
        '9BY' => 'E02002964',
        '9BZ' => 'E02002964',
        '9DA' => 'E02002964',
        '9DB' => 'E02002964',
        '9DD' => 'E02002964',
        '9DE' => 'E02002964',
        '9DF' => 'E02002964',
        '9DG' => 'E02002964',
        '9DH' => 'E02002964',
        '9DJ' => 'E02002964',
        '9DL' => 'E02002964',
        '9DN' => 'E02002964',
        '9DP' => 'E02002964',
        '9DQ' => 'E02002964',
        '9DR' => 'E02006212',
        '9DS' => 'E02006212',
        '9DT' => 'E02006215',
        '9DU' => 'E02006212',
        '9DW' => 'E02002964',
        '9DX' => 'E02006212',
        '9DY' => 'E02006212',
        '9DZ' => 'E02006212',
        '9EA' => 'E02002964',
        '9EB' => 'E02006212',
        '9ED' => 'E02006212',
        '9EE' => 'E02006212',
        '9EF' => 'E02006212',
        '9EG' => 'E02006212',
        '9EH' => 'E02002964',
        '9EJ' => 'E02002964',
        '9EL' => 'E02002964',
        '9EN' => 'E02002964',
        '9EP' => 'E02002964',
        '9ER' => 'E02002964',
        '9ES' => 'E02002964',
        '9ET' => 'E02002964',
        '9EU' => 'E02002964',
        '9EW' => 'E02002964',
        '9EX' => 'E02002964',
        '9EY' => 'E02002964',
        '9EZ' => 'E02002964',
        '9HA' => 'E02002964',
        '9HB' => 'E02002964',
        '9HD' => 'E02002964',
        '9HE' => 'E02002964',
        '9HF' => 'E02002964',
        '9HG' => 'E02002964',
        '9HH' => 'E02002964',
        '9HJ' => 'E02002964',
        '9HL' => 'E02002964',
        '9HN' => 'E02002964',
        '9HP' => 'E02002964',
        '9HQ' => 'E02002964',
        '9HR' => 'E02002964',
        '9HS' => 'E02002964',
        '9HT' => 'E02002964',
        '9HU' => 'E02002964',
        '9HW' => 'E02002964',
        '9HX' => 'E02002964',
        '9HY' => 'E02002964',
        '9HZ' => 'E02002964',
        '9JA' => 'E02002964',
        '9JB' => 'E02002964',
        '9JD' => 'E02002964',
        '9JE' => 'E02002964',
        '9JF' => 'E02002964',
        '9JG' => 'E02002964',
        '9JH' => 'E02002964',
        '9JJ' => 'E02002964',
        '9JL' => 'E02002964',
        '9JN' => 'E02002964',
        '9JP' => 'E02002964',
        '9JQ' => 'E02002964',
        '9JR' => 'E02002964',
        '9JS' => 'E02002964',
        '9JT' => 'E02002964',
        '9JU' => 'E02002964',
        '9JW' => 'E02002964',
        '9JX' => 'E02002964',
        '9JY' => 'E02002964',
        '9JZ' => 'E02002964',
        '9LA' => 'E02002964',
        '9LB' => 'E02002964',
        '9LD' => 'E02002964',
        '9LE' => 'E02002964',
        '9LF' => 'E02002964',
        '9LG' => 'E02002964',
        '9LH' => 'E02002964',
        '9LJ' => 'E02002964',
        '9LL' => 'E02002964',
        '9LN' => 'E02002964',
        '9LP' => 'E02002964',
        '9LQ' => 'E02002964',
        '9LR' => 'E02002964',
        '9LS' => 'E02002964',
        '9LT' => 'E02002964',
        '9LU' => 'E02002964',
        '9LW' => 'E02002964',
        '9LX' => 'E02002964',
        '9LY' => 'E02002964',
        '9LZ' => 'E02002964',
        '9NA' => 'E02002964',
        '9NB' => 'E02002964',
        '9ND' => 'E02002964',
        '9NE' => 'E02002964',
        '9NF' => 'E02002964',
        '9NG' => 'E02002964',
        '9NH' => 'E02002964',
        '9NJ' => 'E02002964',
        '9NL' => 'E02002964',
        '9NN' => 'E02002964',
        '9NP' => 'E02002964',
        '9NQ' => 'E02002964',
        '9NR' => 'E02002964',
        '9NS' => 'E02002964',
        '9NT' => 'E02002964',
        '9NU' => 'E02002964',
        '9NW' => 'E02002964',
        '9NX' => 'E02002964',
        '9NY' => 'E02002964',
        '9NZ' => 'E02002964',
        '9PA' => 'E02002964',
        '9PB' => 'E02002964',
        '9PD' => 'E02002964',
        '9PE' => 'E02002964',
        '9PF' => 'E02002964',
        '9PG' => 'E02002964',
        '9PH' => 'E02002966',
        '9PJ' => 'E02002966',
        '9PL' => 'E02002966',
        '9PN' => 'E02002966',
        '9PP' => 'E02002966',
        '9PQ' => 'E02002964',
        '9PR' => 'E02002966',
        '9PS' => 'E02002964',
        '9PT' => 'E02002964',
        '9PU' => 'E02002964',
        '9PW' => 'E02002966',
        '9PX' => 'E02002966',
        '9PY' => 'E02002964',
        '9PZ' => 'E02002964',
        '9QA' => 'E02002966',
        '9QB' => 'E02002966',
        '9QD' => 'E02006212',
        '9QE' => 'E02002964',
        '9QF' => 'E02002964',
        '9QG' => 'E02006212',
        '9QH' => 'E02006212',
        '9QJ' => 'E02006212',
        '9QL' => 'E02006212',
        '9QN' => 'E02006212',
        '9QP' => 'E02002964',
        '9QQ' => 'E02006212',
        '9QR' => 'E02002964',
        '9QS' => 'E02002964',
        '9QT' => 'E02002964',
        '9QU' => 'E02002964',
        '9QW' => 'E02002964',
        '9QX' => 'E02002964',
        '9QY' => 'E02002964',
        '9RB' => 'E02002964',
        '9RD' => 'E02002964',
        '9RE' => 'E02002966',
        '9RF' => 'E02002964',
        '9RG' => 'E02002964',
        '9RH' => 'E02002964',
        '9RJ' => 'E02002964',
        '9RL' => 'E02002966',
        '9RN' => 'E02002966',
        '9RQ' => 'E02002964',
        '9WA' => 'E02002966',
        '9WB' => 'E02002966',
        '9WE' => 'E02002966',
        '9WZ' => 'E02002966',
        '9XA' => 'E02002966',
        '9YP' => 'E02002966',
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