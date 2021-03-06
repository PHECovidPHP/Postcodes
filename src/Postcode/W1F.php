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
final class W1F
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02000972',
        '0AB' => 'E02000972',
        '0AD' => 'E02000972',
        '0AE' => 'E02000972',
        '0AF' => 'E02000972',
        '0AG' => 'E02000972',
        '0AH' => 'E02000972',
        '0AJ' => 'E02000972',
        '0AL' => 'E02000972',
        '0AN' => 'E02000972',
        '0AP' => 'E02000972',
        '0AQ' => 'E02000972',
        '0AR' => 'E02000972',
        '0AS' => 'E02000972',
        '0AT' => 'E02000972',
        '0AU' => 'E02000972',
        '0AW' => 'E02000972',
        '0AX' => 'E02000972',
        '0AY' => 'E02000972',
        '0AZ' => 'E02000972',
        '0BA' => 'E02000972',
        '0BB' => 'E02000972',
        '0BD' => 'E02000972',
        '0BE' => 'E02000972',
        '0BF' => 'E02000972',
        '0BG' => 'E02000972',
        '0BH' => 'E02000972',
        '0BJ' => 'E02000972',
        '0BL' => 'E02000972',
        '0BN' => 'E02000972',
        '0BP' => 'E02000972',
        '0BQ' => 'E02000972',
        '0BR' => 'E02000972',
        '0BS' => 'E02000972',
        '0BT' => 'E02000972',
        '0BU' => 'E02000972',
        '0BW' => 'E02000972',
        '0BX' => 'E02000972',
        '0BY' => 'E02000972',
        '0BZ' => 'E02000972',
        '0DA' => 'E02000972',
        '0DB' => 'E02000972',
        '0DD' => 'E02000972',
        '0DE' => 'E02000972',
        '0DF' => 'E02000972',
        '0DG' => 'E02000972',
        '0DH' => 'E02000972',
        '0DJ' => 'E02000972',
        '0DL' => 'E02000972',
        '0DN' => 'E02000972',
        '0DP' => 'E02000972',
        '0DQ' => 'E02000972',
        '0DR' => 'E02000972',
        '0DS' => 'E02000972',
        '0DT' => 'E02000972',
        '0DU' => 'E02000972',
        '0DW' => 'E02000972',
        '0DX' => 'E02000972',
        '0ED' => 'E02000972',
        '0EE' => 'E02000972',
        '0EF' => 'E02000972',
        '0EG' => 'E02000972',
        '0EH' => 'E02000972',
        '0EJ' => 'E02000972',
        '0EL' => 'E02000972',
        '0EN' => 'E02000972',
        '0EP' => 'E02000972',
        '0EQ' => 'E02000972',
        '0ER' => 'E02000972',
        '0ES' => 'E02000972',
        '0ET' => 'E02000972',
        '0EU' => 'E02000972',
        '0EW' => 'E02000972',
        '0EX' => 'E02000972',
        '0EY' => 'E02000972',
        '0HA' => 'E02000972',
        '0HB' => 'E02000972',
        '0HD' => 'E02000972',
        '0HE' => 'E02000972',
        '0HF' => 'E02000972',
        '0HG' => 'E02000972',
        '0HH' => 'E02000972',
        '0HJ' => 'E02000972',
        '0HL' => 'E02000972',
        '0HN' => 'E02000972',
        '0HP' => 'E02000972',
        '0HQ' => 'E02000972',
        '0HS' => 'E02000972',
        '0HT' => 'E02000972',
        '0HU' => 'E02000972',
        '0HX' => 'E02000972',
        '0HY' => 'E02000972',
        '0HZ' => 'E02000972',
        '0JA' => 'E02000972',
        '0JD' => 'E02000972',
        '0JE' => 'E02000972',
        '0JF' => 'E02000972',
        '0JG' => 'E02000972',
        '0JH' => 'E02000972',
        '0JJ' => 'E02000972',
        '0JL' => 'E02000972',
        '0JP' => 'E02000972',
        '0JQ' => 'E02000972',
        '0JR' => 'E02000972',
        '0JS' => 'E02000972',
        '0JT' => 'E02000972',
        '0JU' => 'E02000972',
        '0JW' => 'E02000972',
        '0JX' => 'E02000972',
        '0LA' => 'E02000972',
        '0LB' => 'E02000972',
        '0LD' => 'E02000972',
        '0LE' => 'E02000972',
        '0LF' => 'E02000972',
        '0LG' => 'E02000972',
        '0LH' => 'E02000972',
        '0LJ' => 'E02000972',
        '0LL' => 'E02000972',
        '0LN' => 'E02000972',
        '0LP' => 'E02000972',
        '0LQ' => 'E02000972',
        '0LR' => 'E02000972',
        '0LS' => 'E02000972',
        '0LW' => 'E02000972',
        '0NE' => 'E02000972',
        '0NH' => 'E02000972',
        '0NL' => 'E02000972',
        '0PA' => 'E02000972',
        '0PB' => 'E02000972',
        '0PD' => 'E02000972',
        '0PE' => 'E02000972',
        '0PF' => 'E02000972',
        '0PG' => 'E02000972',
        '0PH' => 'E02000972',
        '0PJ' => 'E02000972',
        '0PL' => 'E02000972',
        '0PN' => 'E02000972',
        '0PP' => 'E02000972',
        '0PQ' => 'E02000972',
        '0PR' => 'E02000972',
        '0PS' => 'E02000972',
        '0PT' => 'E02000972',
        '0PU' => 'E02000972',
        '0PW' => 'E02000972',
        '0PX' => 'E02000972',
        '0PY' => 'E02000972',
        '0PZ' => 'E02000972',
        '0QA' => 'E02000972',
        '0QB' => 'E02000972',
        '0QD' => 'E02000972',
        '0QE' => 'E02000972',
        '0QF' => 'E02000972',
        '0QG' => 'E02000972',
        '0QH' => 'E02000972',
        '0QJ' => 'E02000972',
        '0QL' => 'E02000972',
        '0QN' => 'E02000972',
        '0QP' => 'E02000972',
        '0QQ' => 'E02000972',
        '0QR' => 'E02000972',
        '0QS' => 'E02000972',
        '0QT' => 'E02000972',
        '0QU' => 'E02000972',
        '0QW' => 'E02000972',
        '0RB' => 'E02000972',
        '0RD' => 'E02000972',
        '0RE' => 'E02000972',
        '0RF' => 'E02000972',
        '0RG' => 'E02000972',
        '0RH' => 'E02000972',
        '0RJ' => 'E02000972',
        '0RL' => 'E02000972',
        '0RN' => 'E02000972',
        '0RP' => 'E02000972',
        '0RQ' => 'E02000972',
        '0RR' => 'E02000972',
        '0RS' => 'E02000972',
        '0RT' => 'E02000972',
        '0RU' => 'E02000972',
        '0RX' => 'E02000972',
        '0RY' => 'E02000972',
        '0SA' => 'E02000972',
        '0SB' => 'E02000972',
        '0SD' => 'E02000972',
        '0SE' => 'E02000972',
        '0SF' => 'E02000972',
        '0SG' => 'E02000972',
        '0SH' => 'E02000972',
        '0SJ' => 'E02000972',
        '0SL' => 'E02000972',
        '0SN' => 'E02000972',
        '0SP' => 'E02000972',
        '0SQ' => 'E02000972',
        '0SR' => 'E02000972',
        '0SS' => 'E02000972',
        '0ST' => 'E02000972',
        '0SU' => 'E02000972',
        '0SW' => 'E02000972',
        '0TA' => 'E02000972',
        '0TB' => 'E02000972',
        '0TD' => 'E02000972',
        '0TE' => 'E02000972',
        '0TF' => 'E02000972',
        '0TG' => 'E02000972',
        '0TH' => 'E02000972',
        '0TJ' => 'E02000972',
        '0TL' => 'E02000972',
        '0TN' => 'E02000972',
        '0TP' => 'E02000972',
        '0TQ' => 'E02000972',
        '0TR' => 'E02000972',
        '0TS' => 'E02000972',
        '0TT' => 'E02000972',
        '0TU' => 'E02000972',
        '0TW' => 'E02000972',
        '0TX' => 'E02000972',
        '0TY' => 'E02000972',
        '0UA' => 'E02000972',
        '0UB' => 'E02000972',
        '0UD' => 'E02000972',
        '0UE' => 'E02000972',
        '0UF' => 'E02000972',
        '0UG' => 'E02000972',
        '0UH' => 'E02000972',
        '0UJ' => 'E02000972',
        '0UL' => 'E02000972',
        '0UN' => 'E02000972',
        '0UP' => 'E02000972',
        '0UQ' => 'E02000972',
        '0UR' => 'E02000972',
        '0US' => 'E02000972',
        '0UT' => 'E02000972',
        '0UU' => 'E02000972',
        '0UW' => 'E02000972',
        '0ZZ' => 'E02000972',
        '7AA' => 'E02000972',
        '7AB' => 'E02000972',
        '7AD' => 'E02000972',
        '7AE' => 'E02000972',
        '7AF' => 'E02000972',
        '7AG' => 'E02000972',
        '7AH' => 'E02000972',
        '7AJ' => 'E02000972',
        '7AL' => 'E02000972',
        '7AN' => 'E02000972',
        '7AP' => 'E02000972',
        '7AQ' => 'E02000972',
        '7AR' => 'E02000972',
        '7AS' => 'E02000972',
        '7AT' => 'E02000972',
        '7AU' => 'E02000972',
        '7AW' => 'E02000972',
        '7AX' => 'E02000972',
        '7AY' => 'E02000972',
        '7AZ' => 'E02000972',
        '7BA' => 'E02000972',
        '7BB' => 'E02000972',
        '7BD' => 'E02000972',
        '7BE' => 'E02000972',
        '7BF' => 'E02000972',
        '7BG' => 'E02000972',
        '7BH' => 'E02000972',
        '7BJ' => 'E02000972',
        '7BL' => 'E02000972',
        '7BN' => 'E02000972',
        '7BP' => 'E02000972',
        '7BQ' => 'E02000972',
        '7BR' => 'E02000972',
        '7BS' => 'E02000972',
        '7BT' => 'E02000972',
        '7BU' => 'E02000972',
        '7BW' => 'E02000972',
        '7BX' => 'E02000972',
        '7BY' => 'E02000972',
        '7BZ' => 'E02000972',
        '7DA' => 'E02000972',
        '7DB' => 'E02000972',
        '7DD' => 'E02000972',
        '7DE' => 'E02000972',
        '7DF' => 'E02000972',
        '7DG' => 'E02000972',
        '7DH' => 'E02000972',
        '7DJ' => 'E02000972',
        '7DL' => 'E02000972',
        '7DN' => 'E02000972',
        '7DP' => 'E02000972',
        '7DQ' => 'E02000972',
        '7DR' => 'E02000972',
        '7DS' => 'E02000972',
        '7DT' => 'E02000972',
        '7DU' => 'E02000972',
        '7DW' => 'E02000972',
        '7DX' => 'E02000972',
        '7DY' => 'E02000972',
        '7DZ' => 'E02000972',
        '7EA' => 'E02000972',
        '7EB' => 'E02000972',
        '7ED' => 'E02000972',
        '7EE' => 'E02000972',
        '7EF' => 'E02000972',
        '7EG' => 'E02000972',
        '7EH' => 'E02000972',
        '7EJ' => 'E02000972',
        '7EL' => 'E02000972',
        '7EN' => 'E02000972',
        '7EP' => 'E02000972',
        '7EQ' => 'E02000972',
        '7ER' => 'E02000972',
        '7ES' => 'E02000972',
        '7ET' => 'E02000972',
        '7EU' => 'E02000972',
        '7EW' => 'E02000972',
        '7EX' => 'E02000972',
        '7EY' => 'E02000972',
        '7EZ' => 'E02000972',
        '7FD' => 'E02000972',
        '7HA' => 'E02000972',
        '7HB' => 'E02000972',
        '7HD' => 'E02000972',
        '7HE' => 'E02000972',
        '7HF' => 'E02000972',
        '7HG' => 'E02000972',
        '7HH' => 'E02000972',
        '7HJ' => 'E02000972',
        '7HL' => 'E02000972',
        '7HN' => 'E02000972',
        '7HP' => 'E02000972',
        '7HQ' => 'E02000972',
        '7HR' => 'E02000972',
        '7HS' => 'E02000972',
        '7HT' => 'E02000972',
        '7HU' => 'E02000972',
        '7HW' => 'E02000972',
        '7HX' => 'E02000972',
        '7HY' => 'E02000972',
        '7HZ' => 'E02000972',
        '7JA' => 'E02000972',
        '7JB' => 'E02000972',
        '7JD' => 'E02000972',
        '7JE' => 'E02000972',
        '7JF' => 'E02000972',
        '7JG' => 'E02000972',
        '7JH' => 'E02000972',
        '7JJ' => 'E02000972',
        '7JL' => 'E02000972',
        '7JN' => 'E02000972',
        '7JP' => 'E02000972',
        '7JQ' => 'E02000972',
        '7JR' => 'E02000972',
        '7JS' => 'E02000972',
        '7JT' => 'E02000972',
        '7JU' => 'E02000972',
        '7JW' => 'E02000972',
        '7JX' => 'E02000972',
        '7JY' => 'E02000972',
        '7LA' => 'E02000972',
        '7LB' => 'E02000972',
        '7LD' => 'E02000972',
        '7LE' => 'E02000972',
        '7LF' => 'E02000972',
        '7LG' => 'E02000972',
        '7LH' => 'E02000972',
        '7LJ' => 'E02000972',
        '7LL' => 'E02000972',
        '7LN' => 'E02000972',
        '7LP' => 'E02000972',
        '7LQ' => 'E02000972',
        '7LR' => 'E02000972',
        '7LS' => 'E02000972',
        '7LT' => 'E02000972',
        '7LU' => 'E02000972',
        '7LW' => 'E02000972',
        '7LX' => 'E02000972',
        '7LY' => 'E02000972',
        '7LZ' => 'E02000972',
        '7NA' => 'E02000972',
        '7NB' => 'E02000972',
        '7ND' => 'E02000972',
        '7NE' => 'E02000972',
        '7NF' => 'E02000972',
        '7NG' => 'E02000972',
        '7NH' => 'E02000972',
        '7NJ' => 'E02000972',
        '7NL' => 'E02000972',
        '7NN' => 'E02000972',
        '7NP' => 'E02000972',
        '7NQ' => 'E02000972',
        '7NR' => 'E02000972',
        '7NS' => 'E02000972',
        '7NT' => 'E02000972',
        '7NU' => 'E02000972',
        '7NW' => 'E02000972',
        '7NX' => 'E02000972',
        '7NY' => 'E02000972',
        '7NZ' => 'E02000972',
        '7PA' => 'E02000972',
        '7PB' => 'E02000972',
        '7PD' => 'E02000972',
        '7PE' => 'E02000972',
        '7PF' => 'E02000972',
        '7PG' => 'E02000972',
        '7PH' => 'E02000972',
        '7PJ' => 'E02000972',
        '7PL' => 'E02000972',
        '7PN' => 'E02000972',
        '7PP' => 'E02000972',
        '7PQ' => 'E02000972',
        '7PR' => 'E02000972',
        '7PS' => 'E02000972',
        '7PT' => 'E02000972',
        '7PU' => 'E02000972',
        '7PW' => 'E02000972',
        '7PX' => 'E02000972',
        '7PY' => 'E02000972',
        '7PZ' => 'E02000972',
        '7QA' => 'E02000972',
        '7QB' => 'E02000972',
        '7QD' => 'E02000972',
        '7QE' => 'E02000972',
        '7QF' => 'E02000972',
        '7QG' => 'E02000972',
        '7QH' => 'E02000972',
        '7QL' => 'E02000972',
        '7QN' => 'E02000972',
        '7QP' => 'E02000972',
        '7QQ' => 'E02000972',
        '7QR' => 'E02000972',
        '7QS' => 'E02000972',
        '7QT' => 'E02000972',
        '7QU' => 'E02000972',
        '7QW' => 'E02000972',
        '7QX' => 'E02000972',
        '7QY' => 'E02000972',
        '7QZ' => 'E02000972',
        '7RB' => 'E02000972',
        '7RD' => 'E02000972',
        '7RE' => 'E02000972',
        '7RF' => 'E02000972',
        '7RG' => 'E02000972',
        '7RH' => 'E02000972',
        '7RJ' => 'E02000972',
        '7RL' => 'E02000972',
        '7RN' => 'E02000972',
        '7RP' => 'E02000972',
        '7RQ' => 'E02000972',
        '7RR' => 'E02000972',
        '7RS' => 'E02000972',
        '7RT' => 'E02000972',
        '7RU' => 'E02000972',
        '7RW' => 'E02000972',
        '7RX' => 'E02000972',
        '7RY' => 'E02000972',
        '7RZ' => 'E02000972',
        '7SA' => 'E02000972',
        '7SB' => 'E02000972',
        '7SD' => 'E02000972',
        '7SE' => 'E02000972',
        '7SF' => 'E02000972',
        '7SG' => 'E02000972',
        '7SH' => 'E02000972',
        '7SJ' => 'E02000972',
        '7SL' => 'E02000972',
        '7SN' => 'E02000972',
        '7SP' => 'E02000972',
        '7SQ' => 'E02000972',
        '7SW' => 'E02000972',
        '7TA' => 'E02000972',
        '7TB' => 'E02000972',
        '7TD' => 'E02000972',
        '7TE' => 'E02000972',
        '7TF' => 'E02000972',
        '7TG' => 'E02000972',
        '7TH' => 'E02000972',
        '7TJ' => 'E02000972',
        '7TL' => 'E02000972',
        '7TN' => 'E02000972',
        '7TP' => 'E02000972',
        '7TQ' => 'E02000972',
        '7TR' => 'E02000972',
        '7TS' => 'E02000972',
        '7TT' => 'E02000972',
        '7TU' => 'E02000972',
        '7TW' => 'E02000972',
        '7TX' => 'E02000972',
        '7TY' => 'E02000972',
        '7XX' => 'E02000972',
        '8AA' => 'E02000972',
        '8AB' => 'E02000972',
        '8AD' => 'E02000972',
        '8AE' => 'E02000972',
        '8AF' => 'E02000972',
        '8AG' => 'E02000972',
        '8AH' => 'E02000972',
        '8AJ' => 'E02000972',
        '8AL' => 'E02000972',
        '8AN' => 'E02000972',
        '8AP' => 'E02000972',
        '8AQ' => 'E02000972',
        '8AR' => 'E02000972',
        '8AS' => 'E02000972',
        '8AT' => 'E02000972',
        '8AU' => 'E02000972',
        '8AW' => 'E02000972',
        '8AX' => 'E02000972',
        '8AY' => 'E02000972',
        '8AZ' => 'E02000972',
        '8BA' => 'E02000972',
        '8BE' => 'E02000972',
        '8BF' => 'E02000972',
        '8BG' => 'E02000972',
        '8BH' => 'E02000972',
        '8BN' => 'E02000972',
        '8BQ' => 'E02000972',
        '8DA' => 'E02000972',
        '8DD' => 'E02000972',
        '8DF' => 'E02000972',
        '8DG' => 'E02000972',
        '8DH' => 'E02000972',
        '8DJ' => 'E02000972',
        '8DL' => 'E02000972',
        '8DN' => 'E02000972',
        '8DP' => 'E02000972',
        '8DQ' => 'E02000972',
        '8DR' => 'E02000972',
        '8DS' => 'E02000972',
        '8DT' => 'E02000972',
        '8DU' => 'E02000972',
        '8DW' => 'E02000972',
        '8DX' => 'E02000972',
        '8DY' => 'E02000972',
        '8DZ' => 'E02000972',
        '8EA' => 'E02000972',
        '8EB' => 'E02000972',
        '8ED' => 'E02000972',
        '8EE' => 'E02000972',
        '8EF' => 'E02000972',
        '8EG' => 'E02000972',
        '8EH' => 'E02000972',
        '8EJ' => 'E02000972',
        '8EL' => 'E02000972',
        '8EN' => 'E02000972',
        '8EP' => 'E02000972',
        '8EQ' => 'E02000972',
        '8ER' => 'E02000972',
        '8ES' => 'E02000972',
        '8ET' => 'E02000972',
        '8EU' => 'E02000972',
        '8EW' => 'E02000972',
        '8EX' => 'E02000972',
        '8EY' => 'E02000972',
        '8EZ' => 'E02000972',
        '8FA' => 'E02000972',
        '8FB' => 'E02000972',
        '8FD' => 'E02000972',
        '8FE' => 'E02000972',
        '8FF' => 'E02000972',
        '8FG' => 'E02000972',
        '8FH' => 'E02000972',
        '8FJ' => 'E02000972',
        '8FL' => 'E02000972',
        '8FN' => 'E02000972',
        '8FP' => 'E02000972',
        '8FQ' => 'E02000972',
        '8FR' => 'E02000972',
        '8FS' => 'E02000972',
        '8FW' => 'E02000972',
        '8FX' => 'E02000972',
        '8FY' => 'E02000972',
        '8FZ' => 'E02000972',
        '8GA' => 'E02000972',
        '8GB' => 'E02000972',
        '8GD' => 'E02000972',
        '8GE' => 'E02000972',
        '8GF' => 'E02000972',
        '8GG' => 'E02000972',
        '8GH' => 'E02000972',
        '8GJ' => 'E02000972',
        '8GL' => 'E02000972',
        '8GN' => 'E02000972',
        '8GP' => 'E02000972',
        '8GQ' => 'E02000972',
        '8GR' => 'E02000972',
        '8GS' => 'E02000972',
        '8GT' => 'E02000972',
        '8GU' => 'E02000972',
        '8GW' => 'E02000972',
        '8GX' => 'E02000972',
        '8GY' => 'E02000972',
        '8GZ' => 'E02000972',
        '8HH' => 'E02000972',
        '8HJ' => 'E02000972',
        '8HL' => 'E02000972',
        '8HN' => 'E02000972',
        '8HP' => 'E02000972',
        '8HQ' => 'E02000972',
        '8HR' => 'E02000972',
        '8HS' => 'E02000972',
        '8HT' => 'E02000972',
        '8HU' => 'E02000972',
        '8HW' => 'E02000972',
        '8HX' => 'E02000972',
        '8HY' => 'E02000972',
        '8HZ' => 'E02000972',
        '8JA' => 'E02000972',
        '8JB' => 'E02000972',
        '8JD' => 'E02000972',
        '8JE' => 'E02000972',
        '8JF' => 'E02000972',
        '8JG' => 'E02000972',
        '8JH' => 'E02000972',
        '8JJ' => 'E02000972',
        '8JL' => 'E02000972',
        '8JN' => 'E02000972',
        '8JP' => 'E02000972',
        '8JQ' => 'E02000972',
        '8LB' => 'E02000972',
        '8LJ' => 'E02000972',
        '8LN' => 'E02000972',
        '8LX' => 'E02000972',
        '8NA' => 'E02000972',
        '8NB' => 'E02000972',
        '8NE' => 'E02000972',
        '8NN' => 'E02000972',
        '8PQ' => 'E02000972',
        '8PR' => 'E02000972',
        '8PS' => 'E02000972',
        '8PT' => 'E02000972',
        '8PU' => 'E02000972',
        '8PX' => 'E02000972',
        '8PY' => 'E02000972',
        '8PZ' => 'E02000972',
        '8QA' => 'E02000972',
        '8QB' => 'E02000972',
        '8QD' => 'E02000972',
        '8QE' => 'E02000972',
        '8QF' => 'E02000972',
        '8QG' => 'E02000972',
        '8QH' => 'E02000972',
        '8QJ' => 'E02000972',
        '8QL' => 'E02000972',
        '8QN' => 'E02000972',
        '8QP' => 'E02000972',
        '8QQ' => 'E02000972',
        '8QR' => 'E02000972',
        '8QS' => 'E02000972',
        '8QT' => 'E02000972',
        '8QU' => 'E02000972',
        '8QW' => 'E02000972',
        '8RB' => 'E02000972',
        '8RD' => 'E02000972',
        '8RE' => 'E02000972',
        '8RF' => 'E02000972',
        '8RG' => 'E02000972',
        '8RH' => 'E02000972',
        '8RJ' => 'E02000972',
        '8RL' => 'E02000972',
        '8RN' => 'E02000972',
        '8RP' => 'E02000972',
        '8RQ' => 'E02000972',
        '8RR' => 'E02000972',
        '8RS' => 'E02000972',
        '8RT' => 'E02000972',
        '8RU' => 'E02000972',
        '8RW' => 'E02000972',
        '8RX' => 'E02000972',
        '8RY' => 'E02000972',
        '8RZ' => 'E02000972',
        '8SA' => 'E02000972',
        '8SB' => 'E02000972',
        '8SD' => 'E02000972',
        '8SE' => 'E02000972',
        '8SF' => 'E02000972',
        '8SG' => 'E02000972',
        '8SH' => 'E02000972',
        '8SJ' => 'E02000972',
        '8SL' => 'E02000972',
        '8SN' => 'E02000972',
        '8SP' => 'E02000972',
        '8SQ' => 'E02000972',
        '8SR' => 'E02000972',
        '8SS' => 'E02000972',
        '8ST' => 'E02000972',
        '8SU' => 'E02000972',
        '8SW' => 'E02000972',
        '8SX' => 'E02000972',
        '8SY' => 'E02000972',
        '8SZ' => 'E02000972',
        '8TA' => 'E02000972',
        '8TB' => 'E02000972',
        '8TD' => 'E02000972',
        '8TE' => 'E02000972',
        '8TF' => 'E02000972',
        '8TG' => 'E02000972',
        '8TH' => 'E02000972',
        '8TJ' => 'E02000972',
        '8TL' => 'E02000972',
        '8TN' => 'E02000972',
        '8TP' => 'E02000972',
        '8TQ' => 'E02000972',
        '8TR' => 'E02000972',
        '8TS' => 'E02000972',
        '8TT' => 'E02000972',
        '8TU' => 'E02000972',
        '8TW' => 'E02000972',
        '8WA' => 'E02000972',
        '8WB' => 'E02000972',
        '8WD' => 'E02000972',
        '8WE' => 'E02000972',
        '8WF' => 'E02000972',
        '8WG' => 'E02000972',
        '8WH' => 'E02000972',
        '8WJ' => 'E02000972',
        '8WL' => 'E02000972',
        '8WN' => 'E02000972',
        '8WP' => 'E02000972',
        '8WQ' => 'E02000972',
        '8WR' => 'E02000972',
        '8WS' => 'E02000972',
        '8WT' => 'E02000972',
        '8WU' => 'E02000972',
        '8WW' => 'E02000972',
        '8WX' => 'E02000972',
        '8WY' => 'E02000972',
        '8WZ' => 'E02000972',
        '8YA' => 'E02000972',
        '8ZA' => 'E02000972',
        '8ZB' => 'E02000972',
        '8ZD' => 'E02000972',
        '8ZE' => 'E02000972',
        '8ZF' => 'E02000972',
        '8ZG' => 'E02000972',
        '8ZH' => 'E02000972',
        '8ZJ' => 'E02000972',
        '8ZL' => 'E02000972',
        '8ZN' => 'E02000972',
        '8ZP' => 'E02000972',
        '8ZQ' => 'E02000972',
        '8ZR' => 'E02000972',
        '8ZS' => 'E02000972',
        '8ZT' => 'E02000972',
        '8ZU' => 'E02000972',
        '8ZW' => 'E02000972',
        '8ZX' => 'E02000972',
        '8ZY' => 'E02000972',
        '8ZZ' => 'E02000972',
        '9AA' => 'E02000972',
        '9AD' => 'E02000972',
        '9AE' => 'E02000972',
        '9AF' => 'E02000972',
        '9AG' => 'E02000972',
        '9AH' => 'E02000972',
        '9AJ' => 'E02000972',
        '9AL' => 'E02000972',
        '9AN' => 'E02000972',
        '9AP' => 'E02000972',
        '9AQ' => 'E02000972',
        '9AR' => 'E02000972',
        '9AS' => 'E02000972',
        '9AU' => 'E02000972',
        '9AW' => 'E02000972',
        '9BA' => 'E02000972',
        '9BB' => 'E02000972',
        '9BD' => 'E02000972',
        '9BE' => 'E02000972',
        '9BF' => 'E02000972',
        '9BG' => 'E02000972',
        '9BH' => 'E02000972',
        '9BL' => 'E02000972',
        '9BN' => 'E02000972',
        '9BP' => 'E02000972',
        '9BQ' => 'E02000972',
        '9BS' => 'E02000972',
        '9BT' => 'E02000972',
        '9BU' => 'E02000972',
        '9BW' => 'E02000972',
        '9BX' => 'E02000972',
        '9BY' => 'E02000972',
        '9BZ' => 'E02000972',
        '9DB' => 'E02000972',
        '9DD' => 'E02000972',
        '9DE' => 'E02000972',
        '9DF' => 'E02000972',
        '9DG' => 'E02000972',
        '9DH' => 'E02000972',
        '9DJ' => 'E02000972',
        '9DL' => 'E02000972',
        '9DN' => 'E02000972',
        '9DP' => 'E02000972',
        '9DQ' => 'E02000972',
        '9DR' => 'E02000972',
        '9DS' => 'E02000972',
        '9DT' => 'E02000972',
        '9DU' => 'E02000972',
        '9DW' => 'E02000972',
        '9DX' => 'E02000972',
        '9DY' => 'E02000972',
        '9DZ' => 'E02000972',
        '9EA' => 'E02000972',
        '9EB' => 'E02000972',
        '9EE' => 'E02000972',
        '9EG' => 'E02000972',
        '9EH' => 'E02000972',
        '9EJ' => 'E02000972',
        '9EL' => 'E02000972',
        '9EN' => 'E02000972',
        '9EP' => 'E02000972',
        '9EQ' => 'E02000972',
        '9HA' => 'E02000972',
        '9HB' => 'E02000972',
        '9HD' => 'E02000972',
        '9HL' => 'E02000972',
        '9HN' => 'E02000972',
        '9HP' => 'E02000972',
        '9HR' => 'E02000972',
        '9HT' => 'E02000972',
        '9HU' => 'E02000972',
        '9HW' => 'E02000972',
        '9HX' => 'E02000972',
        '9HY' => 'E02000972',
        '9HZ' => 'E02000972',
        '9JA' => 'E02000972',
        '9JB' => 'E02000972',
        '9JD' => 'E02000972',
        '9JE' => 'E02000972',
        '9JF' => 'E02000972',
        '9JG' => 'E02000972',
        '9JH' => 'E02000972',
        '9JJ' => 'E02000972',
        '9JL' => 'E02000972',
        '9JN' => 'E02000972',
        '9JP' => 'E02000972',
        '9JQ' => 'E02000972',
        '9JR' => 'E02000972',
        '9JS' => 'E02000972',
        '9JT' => 'E02000972',
        '9JU' => 'E02000972',
        '9JW' => 'E02000972',
        '9JX' => 'E02000972',
        '9JY' => 'E02000972',
        '9JZ' => 'E02000972',
        '9LA' => 'E02000972',
        '9LB' => 'E02000972',
        '9LD' => 'E02000972',
        '9LH' => 'E02000972',
        '9LS' => 'E02000972',
        '9LT' => 'E02000972',
        '9LU' => 'E02000972',
        '9LX' => 'E02000972',
        '9LY' => 'E02000972',
        '9LZ' => 'E02000972',
        '9NA' => 'E02000972',
        '9NB' => 'E02000972',
        '9ND' => 'E02000972',
        '9NE' => 'E02000972',
        '9NF' => 'E02000972',
        '9NG' => 'E02000972',
        '9NH' => 'E02000972',
        '9NJ' => 'E02000972',
        '9NL' => 'E02000972',
        '9NN' => 'E02000972',
        '9NP' => 'E02000972',
        '9NQ' => 'E02000972',
        '9NR' => 'E02000972',
        '9NS' => 'E02000972',
        '9NT' => 'E02000972',
        '9NU' => 'E02000972',
        '9NW' => 'E02000972',
        '9NX' => 'E02000972',
        '9NY' => 'E02000972',
        '9NZ' => 'E02000972',
        '9PA' => 'E02000972',
        '9PB' => 'E02000972',
        '9PD' => 'E02000972',
        '9PE' => 'E02000972',
        '9PF' => 'E02000972',
        '9PG' => 'E02000972',
        '9PH' => 'E02000972',
        '9PJ' => 'E02000972',
        '9PL' => 'E02000972',
        '9PN' => 'E02000972',
        '9PP' => 'E02000972',
        '9PQ' => 'E02000972',
        '9PR' => 'E02000972',
        '9PS' => 'E02000972',
        '9PT' => 'E02000972',
        '9PU' => 'E02000972',
        '9PW' => 'E02000972',
        '9PX' => 'E02000972',
        '9PY' => 'E02000972',
        '9PZ' => 'E02000972',
        '9QA' => 'E02000972',
        '9QB' => 'E02000972',
        '9QD' => 'E02000972',
        '9QE' => 'E02000972',
        '9QF' => 'E02000972',
        '9QG' => 'E02000972',
        '9QH' => 'E02000972',
        '9QJ' => 'E02000972',
        '9QL' => 'E02000972',
        '9QN' => 'E02000972',
        '9QP' => 'E02000972',
        '9QQ' => 'E02000972',
        '9QR' => 'E02000972',
        '9QS' => 'E02000972',
        '9QT' => 'E02000972',
        '9QU' => 'E02000972',
        '9QW' => 'E02000972',
        '9QX' => 'E02000972',
        '9QY' => 'E02000972',
        '9QZ' => 'E02000972',
        '9RA' => 'E02000972',
        '9RB' => 'E02000972',
        '9RD' => 'E02000972',
        '9RE' => 'E02000972',
        '9RF' => 'E02000972',
        '9RG' => 'E02000972',
        '9RH' => 'E02000972',
        '9RJ' => 'E02000972',
        '9RL' => 'E02000972',
        '9RN' => 'E02000972',
        '9RP' => 'E02000972',
        '9RQ' => 'E02000972',
        '9RR' => 'E02000972',
        '9RS' => 'E02000972',
        '9RT' => 'E02000972',
        '9RU' => 'E02000972',
        '9RW' => 'E02000972',
        '9RY' => 'E02000972',
        '9RZ' => 'E02000972',
        '9SA' => 'E02000972',
        '9SB' => 'E02000972',
        '9SD' => 'E02000972',
        '9SE' => 'E02000972',
        '9SF' => 'E02000972',
        '9SG' => 'E02000972',
        '9SH' => 'E02000972',
        '9SJ' => 'E02000972',
        '9SL' => 'E02000972',
        '9SN' => 'E02000972',
        '9SP' => 'E02000972',
        '9SQ' => 'E02000972',
        '9SR' => 'E02000972',
        '9SS' => 'E02000972',
        '9ST' => 'E02000972',
        '9SU' => 'E02000972',
        '9SW' => 'E02000972',
        '9SX' => 'E02000972',
        '9TA' => 'E02000972',
        '9TB' => 'E02000972',
        '9TD' => 'E02000972',
        '9TE' => 'E02000972',
        '9TF' => 'E02000972',
        '9TG' => 'E02000972',
        '9TH' => 'E02000972',
        '9TJ' => 'E02000972',
        '9TL' => 'E02000972',
        '9TN' => 'E02000972',
        '9TP' => 'E02000972',
        '9TQ' => 'E02000972',
        '9TR' => 'E02000972',
        '9TS' => 'E02000972',
        '9TT' => 'E02000972',
        '9TU' => 'E02000972',
        '9TW' => 'E02000972',
        '9TX' => 'E02000972',
        '9TY' => 'E02000972',
        '9TZ' => 'E02000972',
        '9UA' => 'E02000972',
        '9UB' => 'E02000972',
        '9UD' => 'E02000972',
        '9UE' => 'E02000972',
        '9UF' => 'E02000972',
        '9UG' => 'E02000972',
        '9UH' => 'E02000972',
        '9UJ' => 'E02000972',
        '9UL' => 'E02000972',
        '9UN' => 'E02000972',
        '9UP' => 'E02000972',
        '9UQ' => 'E02000972',
        '9UR' => 'E02000972',
        '9US' => 'E02000972',
        '9UT' => 'E02000972',
        '9UU' => 'E02000972',
        '9UW' => 'E02000972',
        '9UX' => 'E02000972',
        '9UY' => 'E02000972',
        '9UZ' => 'E02000972',
        '9XA' => 'E02000972',
        '9XB' => 'E02000972',
        '9XD' => 'E02000972',
        '9ZN' => 'E02000972',
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
