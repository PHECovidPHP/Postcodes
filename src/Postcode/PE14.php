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
final class PE14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003745',
        '0AB' => 'E02003745',
        '0AD' => 'E02003745',
        '0AE' => 'E02003745',
        '0AF' => 'E02003745',
        '0AG' => 'E02003745',
        '0AH' => 'E02003745',
        '0AJ' => 'E02003745',
        '0AL' => 'E02003745',
        '0AN' => 'E02003745',
        '0AP' => 'E02003745',
        '0AQ' => 'E02003745',
        '0AR' => 'E02003745',
        '0AS' => 'E02003745',
        '0AT' => 'E02003745',
        '0AU' => 'E02003745',
        '0AW' => 'E02003745',
        '0AX' => 'E02003745',
        '0AY' => 'E02003745',
        '0AZ' => 'E02003745',
        '0BA' => 'E02003745',
        '0BB' => 'E02003744',
        '0BD' => 'E02003745',
        '0BE' => 'E02003745',
        '0BF' => 'E02003744',
        '0BG' => 'E02003745',
        '0BH' => 'E02003745',
        '0BJ' => 'E02003745',
        '0BL' => 'E02003745',
        '0BN' => 'E02003745',
        '0BP' => 'E02003745',
        '0BQ' => 'E02003745',
        '0BS' => 'E02003745',
        '0BT' => 'E02003745',
        '0BU' => 'E02003745',
        '0BW' => 'E02003745',
        '0BX' => 'E02003745',
        '0BY' => 'E02003745',
        '0BZ' => 'E02003745',
        '0DA' => 'E02003745',
        '0DB' => 'E02003745',
        '0DD' => 'E02003745',
        '0DE' => 'E02003745',
        '0DF' => 'E02003744',
        '0DG' => 'E02005566',
        '0DH' => 'E02005566',
        '0DJ' => 'E02005566',
        '0DL' => 'E02005566',
        '0DN' => 'E02005566',
        '0DP' => 'E02005566',
        '0DQ' => 'E02005566',
        '0DR' => 'E02005566',
        '0DS' => 'E02005566',
        '0DT' => 'E02003744',
        '0DU' => 'E02005566',
        '0DW' => 'E02005566',
        '0DX' => 'E02005566',
        '0DY' => 'E02005566',
        '0DZ' => 'E02005566',
        '0EA' => 'E02005566',
        '0EB' => 'E02005566',
        '0ED' => 'E02003745',
        '0EE' => 'E02003745',
        '0EF' => 'E02003745',
        '0EG' => 'E02003745',
        '0EH' => 'E02005566',
        '0EJ' => 'E02005566',
        '0EL' => 'E02003745',
        '0EN' => 'E02003744',
        '0EP' => 'E02003745',
        '0EQ' => 'E02003745',
        '0ER' => 'E02003745',
        '0ES' => 'E02003745',
        '0ET' => 'E02003745',
        '0EW' => 'E02003745',
        '0EX' => 'E02003744',
        '0EZ' => 'E02003744',
        '0HA' => 'E02003745',
        '0HB' => 'E02003745',
        '0HD' => 'E02003745',
        '0HE' => 'E02003745',
        '0HF' => 'E02003745',
        '0HG' => 'E02003745',
        '0HH' => 'E02003745',
        '0HJ' => 'E02003745',
        '0HL' => 'E02003745',
        '0HN' => 'E02003745',
        '0HP' => 'E02003745',
        '0HQ' => 'E02003745',
        '0HR' => 'E02003745',
        '0HS' => 'E02003745',
        '0HT' => 'E02003745',
        '0HU' => 'E02003745',
        '0HW' => 'E02003745',
        '0HX' => 'E02003745',
        '0HY' => 'E02003745',
        '0HZ' => 'E02003745',
        '0JA' => 'E02003745',
        '0JB' => 'E02003745',
        '0JD' => 'E02003745',
        '0JE' => 'E02003745',
        '0JF' => 'E02003745',
        '0JG' => 'E02003745',
        '0JH' => 'E02003745',
        '0JJ' => 'E02003745',
        '0JL' => 'E02003745',
        '0JN' => 'E02003745',
        '0JP' => 'E02003745',
        '0JQ' => 'E02003745',
        '0JR' => 'E02003745',
        '0LA' => 'E02003745',
        '0LB' => 'E02003745',
        '0LD' => 'E02003745',
        '0LE' => 'E02003745',
        '0LF' => 'E02003745',
        '0LG' => 'E02003745',
        '0LH' => 'E02003745',
        '0LJ' => 'E02003745',
        '0LL' => 'E02003745',
        '0LN' => 'E02003745',
        '0LP' => 'E02003745',
        '0LQ' => 'E02005566',
        '0LR' => 'E02003745',
        '0LS' => 'E02003745',
        '0LT' => 'E02003745',
        '0LU' => 'E02003745',
        '0LW' => 'E02003745',
        '0LX' => 'E02003745',
        '0LY' => 'E02003745',
        '0LZ' => 'E02003745',
        '0NA' => 'E02003745',
        '0NB' => 'E02003745',
        '0ND' => 'E02003745',
        '0NE' => 'E02003745',
        '0NF' => 'E02003745',
        '0NG' => 'E02003745',
        '0NH' => 'E02003745',
        '0NJ' => 'E02003745',
        '0NL' => 'E02003745',
        '0NP' => 'E02003745',
        '0NQ' => 'E02003745',
        '0NR' => 'E02003745',
        '0NS' => 'E02003745',
        '0NT' => 'E02003745',
        '0NU' => 'E02003745',
        '0NW' => 'E02003745',
        '0NX' => 'E02003744',
        '0RA' => 'E02003744',
        '0RB' => 'E02003744',
        '0RD' => 'E02003744',
        '0RE' => 'E02003744',
        '0RF' => 'E02003744',
        '0RG' => 'E02003744',
        '0RH' => 'E02003744',
        '0RJ' => 'E02003744',
        '0RL' => 'E02003744',
        '0RN' => 'E02003744',
        '0RP' => 'E02003744',
        '0RQ' => 'E02003744',
        '0RR' => 'E02003744',
        '0RS' => 'E02003744',
        '0RT' => 'E02003744',
        '0RU' => 'E02003744',
        '0RW' => 'E02003744',
        '0RX' => 'E02003744',
        '0RY' => 'E02003744',
        '0RZ' => 'E02003745',
        '0SA' => 'E02003745',
        '0SB' => 'E02003744',
        '0SD' => 'E02003744',
        '0SE' => 'E02003744',
        '0SF' => 'E02003744',
        '0SG' => 'E02003744',
        '0SH' => 'E02003744',
        '0SJ' => 'E02003744',
        '0SL' => 'E02003744',
        '0SN' => 'E02003744',
        '0SP' => 'E02003744',
        '0SQ' => 'E02003744',
        '0SR' => 'E02003744',
        '0SS' => 'E02003744',
        '0ST' => 'E02003744',
        '0SU' => 'E02003745',
        '0SW' => 'E02003744',
        '0SX' => 'E02003744',
        '0SY' => 'E02003744',
        '0TA' => 'E02003744',
        '0TB' => 'E02003744',
        '0TD' => 'E02003744',
        '0TE' => 'E02003744',
        '0TF' => 'E02003744',
        '0TG' => 'E02003744',
        '0WB' => 'E02003744',
        '0WX' => 'E02003744',
        '0WY' => 'E02003744',
        '0WZ' => 'E02003744',
        '0YZ' => 'E02003744',
        '0ZB' => 'E02003744',
        '0ZZ' => 'E02003744',
        '4AA' => 'E02003744',
        '4AB' => 'E02003744',
        '4AD' => 'E02003744',
        '4AE' => 'E02003744',
        '4AF' => 'E02003744',
        '4AG' => 'E02003744',
        '4AH' => 'E02003744',
        '4AJ' => 'E02003744',
        '4AL' => 'E02003744',
        '4AN' => 'E02003744',
        '4AP' => 'E02003744',
        '4AQ' => 'E02003744',
        '4AS' => 'E02003744',
        '4AT' => 'E02003744',
        '4AU' => 'E02003744',
        '4AW' => 'E02003744',
        '4AX' => 'E02003744',
        '4AY' => 'E02003744',
        '4AZ' => 'E02003744',
        '4BA' => 'E02003744',
        '4BB' => 'E02003744',
        '4BD' => 'E02003744',
        '4BF' => 'E02003744',
        '4BG' => 'E02003744',
        '4BH' => 'E02003744',
        '4BJ' => 'E02003744',
        '4BL' => 'E02003744',
        '4BN' => 'E02003744',
        '4BP' => 'E02003744',
        '4BQ' => 'E02003744',
        '4BR' => 'E02003744',
        '4BS' => 'E02003744',
        '4BT' => 'E02003744',
        '4BU' => 'E02003744',
        '4BW' => 'E02003744',
        '4BX' => 'E02003744',
        '4BY' => 'E02003744',
        '4BZ' => 'E02003744',
        '4DA' => 'E02003744',
        '4DB' => 'E02003744',
        '4DD' => 'E02003744',
        '4DE' => 'E02003744',
        '4DF' => 'E02003744',
        '4DG' => 'E02003744',
        '4DH' => 'E02003744',
        '4DJ' => 'E02003744',
        '4DL' => 'E02003744',
        '4DN' => 'E02003744',
        '4DP' => 'E02003744',
        '4DQ' => 'E02003744',
        '4DR' => 'E02003744',
        '4DS' => 'E02003744',
        '4DT' => 'E02003744',
        '4DU' => 'E02003744',
        '4DW' => 'E02003744',
        '4DX' => 'E02003744',
        '4DY' => 'E02003744',
        '4DZ' => 'E02003744',
        '4EA' => 'E02003744',
        '4EB' => 'E02003744',
        '4ED' => 'E02003744',
        '4EE' => 'E02003744',
        '4EF' => 'E02003744',
        '4EG' => 'E02003744',
        '4EH' => 'E02003744',
        '4EJ' => 'E02003744',
        '4EL' => 'E02003744',
        '4EN' => 'E02003744',
        '4EP' => 'E02003744',
        '4EQ' => 'E02003744',
        '4ER' => 'E02003744',
        '4ES' => 'E02003744',
        '4ET' => 'E02003744',
        '4EU' => 'E02003744',
        '4EW' => 'E02003744',
        '4EX' => 'E02003744',
        '4EY' => 'E02003744',
        '4EZ' => 'E02003744',
        '4FA' => 'E02003744',
        '4FB' => 'E02003744',
        '4FD' => 'E02003744',
        '4FE' => 'E02003744',
        '4FF' => 'E02003744',
        '4FG' => 'E02003744',
        '4FH' => 'E02003744',
        '4FJ' => 'E02003744',
        '7AA' => 'E02005563',
        '7AB' => 'E02005563',
        '7AD' => 'E02005563',
        '7AE' => 'E02005563',
        '7AF' => 'E02005563',
        '7AG' => 'E02005563',
        '7AH' => 'E02005563',
        '7AJ' => 'E02003743',
        '7AL' => 'E02005563',
        '7AN' => 'E02005563',
        '7AP' => 'E02005563',
        '7AQ' => 'E02005563',
        '7AR' => 'E02005563',
        '7AS' => 'E02005563',
        '7AT' => 'E02005563',
        '7AU' => 'E02005563',
        '7AW' => 'E02005563',
        '7AX' => 'E02005563',
        '7AY' => 'E02005563',
        '7AZ' => 'E02005563',
        '7BA' => 'E02005563',
        '7BB' => 'E02005563',
        '7BD' => 'E02005563',
        '7BE' => 'E02005563',
        '7BF' => 'E02005563',
        '7BG' => 'E02005563',
        '7BH' => 'E02005563',
        '7BJ' => 'E02005563',
        '7BL' => 'E02005563',
        '7BN' => 'E02005563',
        '7BP' => 'E02005563',
        '7BQ' => 'E02005563',
        '7BS' => 'E02005563',
        '7BT' => 'E02005563',
        '7BU' => 'E02005563',
        '7BX' => 'E02005563',
        '7BY' => 'E02005563',
        '7BZ' => 'E02005563',
        '7DA' => 'E02005563',
        '7DB' => 'E02005563',
        '7DD' => 'E02005563',
        '7DE' => 'E02005563',
        '7DF' => 'E02005563',
        '7DG' => 'E02005563',
        '7DH' => 'E02005563',
        '7DJ' => 'E02005563',
        '7DL' => 'E02005563',
        '7DN' => 'E02005563',
        '7DP' => 'E02005563',
        '7DQ' => 'E02005566',
        '7DR' => 'E02005563',
        '7DS' => 'E02005563',
        '7DT' => 'E02005563',
        '7DU' => 'E02005563',
        '7DW' => 'E02005563',
        '7DX' => 'E02005563',
        '7DZ' => 'E02005563',
        '7EA' => 'E02005563',
        '7EB' => 'E02005563',
        '7ED' => 'E02005563',
        '7EE' => 'E02005563',
        '7EF' => 'E02005563',
        '7EG' => 'E02005563',
        '7EH' => 'E02005563',
        '7EJ' => 'E02005563',
        '7EN' => 'E02005563',
        '7EP' => 'E02003744',
        '7EQ' => 'E02005563',
        '7ER' => 'E02005563',
        '7ES' => 'E02005563',
        '7ET' => 'E02005563',
        '7EU' => 'E02005563',
        '7EX' => 'E02005563',
        '7EY' => 'E02005563',
        '7EZ' => 'E02005563',
        '7HA' => 'E02005563',
        '7HB' => 'E02005563',
        '7HH' => 'E02005563',
        '7HJ' => 'E02005563',
        '7HL' => 'E02005563',
        '7HN' => 'E02005563',
        '7HP' => 'E02005563',
        '7HQ' => 'E02005563',
        '7HR' => 'E02005563',
        '7HS' => 'E02005563',
        '7HT' => 'E02005563',
        '7HU' => 'E02005563',
        '7HW' => 'E02005563',
        '7HX' => 'E02005563',
        '7HY' => 'E02005563',
        '7HZ' => 'E02005563',
        '7JA' => 'E02005563',
        '7JB' => 'E02005563',
        '7JD' => 'E02005563',
        '7JE' => 'E02005563',
        '7JF' => 'E02005563',
        '7JG' => 'E02005563',
        '7JH' => 'E02005472',
        '7JJ' => 'E02005472',
        '7JL' => 'E02005563',
        '7JN' => 'E02005563',
        '7JP' => 'E02005472',
        '7JQ' => 'E02005563',
        '7JR' => 'E02005563',
        '7JS' => 'E02005472',
        '7JT' => 'E02005472',
        '7JU' => 'E02005472',
        '7JW' => 'E02005563',
        '7JX' => 'E02005563',
        '7JY' => 'E02005563',
        '7JZ' => 'E02005563',
        '7LA' => 'E02005563',
        '7LB' => 'E02005563',
        '7LD' => 'E02003744',
        '7LE' => 'E02005563',
        '7LF' => 'E02005563',
        '7LG' => 'E02005563',
        '7LH' => 'E02005563',
        '7LJ' => 'E02005563',
        '7LL' => 'E02005563',
        '7LN' => 'E02005563',
        '7LP' => 'E02005563',
        '7LQ' => 'E02005563',
        '7LR' => 'E02005563',
        '7LS' => 'E02005563',
        '7LT' => 'E02005563',
        '7LU' => 'E02005563',
        '7LW' => 'E02005563',
        '7LX' => 'E02005563',
        '7LY' => 'E02005563',
        '7LZ' => 'E02005563',
        '7NA' => 'E02005563',
        '7NB' => 'E02005563',
        '7ND' => 'E02005563',
        '7NE' => 'E02003744',
        '7NG' => 'E02005563',
        '7NH' => 'E02005563',
        '7NJ' => 'E02005563',
        '7NL' => 'E02005563',
        '7NN' => 'E02005563',
        '7NP' => 'E02005563',
        '7NQ' => 'E02005563',
        '7NR' => 'E02005563',
        '7NS' => 'E02005563',
        '7NT' => 'E02005563',
        '7NU' => 'E02005563',
        '7NW' => 'E02005563',
        '7NX' => 'E02005563',
        '7NY' => 'E02005563',
        '7NZ' => 'E02003744',
        '7PA' => 'E02005563',
        '7PB' => 'E02005563',
        '7PD' => 'E02005563',
        '7PE' => 'E02005563',
        '7PF' => 'E02005563',
        '7PG' => 'E02005563',
        '7PH' => 'E02005563',
        '7PJ' => 'E02005565',
        '7PL' => 'E02005563',
        '7PN' => 'E02005563',
        '7PP' => 'E02005563',
        '7PQ' => 'E02005563',
        '7PR' => 'E02005563',
        '7PW' => 'E02005563',
        '7QA' => 'E02005563',
        '7QB' => 'E02005563',
        '7QD' => 'E02005563',
        '7QE' => 'E02005563',
        '7QF' => 'E02005563',
        '7QG' => 'E02005563',
        '7QH' => 'E02005563',
        '7QJ' => 'E02005563',
        '7QL' => 'E02005563',
        '7QN' => 'E02005563',
        '7QP' => 'E02005563',
        '7QQ' => 'E02005563',
        '7QR' => 'E02005565',
        '7QS' => 'E02005563',
        '7QT' => 'E02005565',
        '7QU' => 'E02005563',
        '7QW' => 'E02005563',
        '7QX' => 'E02005563',
        '7QY' => 'E02005563',
        '7QZ' => 'E02005563',
        '7RA' => 'E02005563',
        '7RB' => 'E02005563',
        '7RD' => 'E02005563',
        '7RE' => 'E02005563',
        '7RF' => 'E02005563',
        '7RG' => 'E02005563',
        '7RH' => 'E02005563',
        '7RN' => 'E02005563',
        '7RP' => 'E02005565',
        '7RQ' => 'E02005565',
        '7RR' => 'E02005565',
        '7RS' => 'E02005565',
        '7RT' => 'E02005565',
        '7RU' => 'E02005565',
        '7RW' => 'E02005565',
        '7RX' => 'E02005565',
        '7RY' => 'E02005565',
        '7RZ' => 'E02005565',
        '7SA' => 'E02005565',
        '7SB' => 'E02005565',
        '7SD' => 'E02005565',
        '7SE' => 'E02005565',
        '7SF' => 'E02005565',
        '7SG' => 'E02005565',
        '7SH' => 'E02005565',
        '7SJ' => 'E02005565',
        '7SL' => 'E02005565',
        '7SN' => 'E02005563',
        '7SP' => 'E02005565',
        '7SQ' => 'E02005565',
        '7SR' => 'E02005563',
        '7SS' => 'E02005565',
        '7SW' => 'E02005563',
        '7TA' => 'E02005565',
        '7TB' => 'E02005565',
        '7TD' => 'E02005565',
        '7TE' => 'E02003744',
        '7TH' => 'E02005565',
        '7TQ' => 'E02005565',
        '7UA' => 'E02005563',
        '7UB' => 'E02005563',
        '7WA' => 'E02003744',
        '7WH' => 'E02003744',
        '7WY' => 'E02003744',
        '7WZ' => 'E02003744',
        '7XA' => 'E02005565',
        '7XB' => 'E02003744',
        '7YA' => 'E02003743',
        '7YB' => 'E02003743',
        '7YQ' => 'E02003743',
        '7YR' => 'E02003744',
        '7YW' => 'E02003744',
        '7ZE' => 'E02003743',
        '7ZZ' => 'E02003744',
        '8AA' => 'E02005566',
        '8AB' => 'E02005566',
        '8AD' => 'E02005566',
        '8AE' => 'E02005566',
        '8AF' => 'E02005566',
        '8AG' => 'E02005566',
        '8AH' => 'E02005566',
        '8AJ' => 'E02005566',
        '8AL' => 'E02005566',
        '8AN' => 'E02005566',
        '8AP' => 'E02005566',
        '8AQ' => 'E02005566',
        '8AR' => 'E02005566',
        '8AS' => 'E02005566',
        '8AT' => 'E02005563',
        '8AU' => 'E02005566',
        '8AW' => 'E02005566',
        '8AX' => 'E02005566',
        '8AY' => 'E02005566',
        '8AZ' => 'E02005566',
        '8BA' => 'E02005566',
        '8BB' => 'E02005566',
        '8BD' => 'E02005566',
        '8BE' => 'E02005566',
        '8BF' => 'E02005563',
        '8BG' => 'E02005566',
        '8BH' => 'E02005566',
        '8BJ' => 'E02005566',
        '8BL' => 'E02005566',
        '8BP' => 'E02003744',
        '8BQ' => 'E02005566',
        '8BT' => 'E02005566',
        '8BU' => 'E02005566',
        '8BW' => 'E02003744',
        '8BZ' => 'E02005566',
        '8DA' => 'E02005566',
        '8DB' => 'E02005563',
        '8DD' => 'E02005566',
        '8DE' => 'E02005566',
        '8DF' => 'E02005566',
        '8DG' => 'E02005566',
        '8DH' => 'E02005563',
        '8DJ' => 'E02005563',
        '8DL' => 'E02005563',
        '8DN' => 'E02005566',
        '8DP' => 'E02005563',
        '8DQ' => 'E02005563',
        '8DR' => 'E02005563',
        '8DS' => 'E02005563',
        '8DT' => 'E02005563',
        '8DU' => 'E02005563',
        '8DW' => 'E02005566',
        '8DX' => 'E02005563',
        '8DY' => 'E02005563',
        '8DZ' => 'E02005563',
        '8EA' => 'E02005563',
        '8EB' => 'E02005566',
        '8EE' => 'E02005566',
        '8EF' => 'E02005566',
        '8EG' => 'E02005566',
        '8EH' => 'E02005566',
        '8EJ' => 'E02005566',
        '8EL' => 'E02005566',
        '8EN' => 'E02005566',
        '8EP' => 'E02005563',
        '8EQ' => 'E02005566',
        '8ER' => 'E02005563',
        '8ES' => 'E02005563',
        '8ET' => 'E02005563',
        '8EU' => 'E02005563',
        '8EW' => 'E02005563',
        '8EX' => 'E02005563',
        '8EY' => 'E02005563',
        '8EZ' => 'E02005563',
        '8HA' => 'E02005563',
        '8HB' => 'E02005563',
        '8HD' => 'E02005563',
        '8HE' => 'E02005563',
        '8HF' => 'E02005563',
        '8HG' => 'E02005563',
        '8HH' => 'E02005566',
        '8HJ' => 'E02005566',
        '8HQ' => 'E02005563',
        '8JA' => 'E02005563',
        '8JB' => 'E02005563',
        '8JD' => 'E02005563',
        '8JE' => 'E02005563',
        '8JF' => 'E02005563',
        '8JG' => 'E02005563',
        '8JH' => 'E02005565',
        '8JJ' => 'E02005563',
        '8JL' => 'E02005565',
        '8JN' => 'E02005565',
        '8JP' => 'E02005563',
        '8JQ' => 'E02005563',
        '8JR' => 'E02005563',
        '8JS' => 'E02005563',
        '8JT' => 'E02005563',
        '8JU' => 'E02005563',
        '8JW' => 'E02005563',
        '8JX' => 'E02005563',
        '8JY' => 'E02005565',
        '8JZ' => 'E02005563',
        '8LA' => 'E02005563',
        '8PA' => 'E02005566',
        '8PB' => 'E02005566',
        '8PD' => 'E02005566',
        '8PE' => 'E02005566',
        '8PF' => 'E02005566',
        '8PG' => 'E02005566',
        '8PH' => 'E02005566',
        '8PJ' => 'E02005566',
        '8PL' => 'E02005566',
        '8PN' => 'E02005566',
        '8PP' => 'E02005566',
        '8PQ' => 'E02005566',
        '8PR' => 'E02005566',
        '8PS' => 'E02005566',
        '8PT' => 'E02005566',
        '8PU' => 'E02005566',
        '8PW' => 'E02005566',
        '8PX' => 'E02005566',
        '8PY' => 'E02005566',
        '8PZ' => 'E02005566',
        '8QA' => 'E02005566',
        '8QB' => 'E02005566',
        '8QD' => 'E02005566',
        '8QE' => 'E02005566',
        '8QF' => 'E02005566',
        '8QG' => 'E02005566',
        '8QH' => 'E02005566',
        '8QJ' => 'E02005566',
        '8QL' => 'E02005566',
        '8QN' => 'E02005566',
        '8QP' => 'E02005566',
        '8QQ' => 'E02005566',
        '8QR' => 'E02005566',
        '8QS' => 'E02003744',
        '8QT' => 'E02005566',
        '8QW' => 'E02005566',
        '8QY' => 'E02005566',
        '8RA' => 'E02005566',
        '8RB' => 'E02005566',
        '8RD' => 'E02005566',
        '8RE' => 'E02005566',
        '8RF' => 'E02005566',
        '8RG' => 'E02005566',
        '8RH' => 'E02005566',
        '8RJ' => 'E02005566',
        '8RL' => 'E02005566',
        '8RN' => 'E02005566',
        '8RP' => 'E02005566',
        '8RQ' => 'E02005566',
        '8RR' => 'E02003744',
        '8RS' => 'E02005566',
        '8RT' => 'E02005566',
        '8RU' => 'E02005566',
        '8RW' => 'E02005566',
        '8RX' => 'E02005566',
        '8RY' => 'E02005566',
        '8RZ' => 'E02005566',
        '8SA' => 'E02005566',
        '8SB' => 'E02005566',
        '8SD' => 'E02005566',
        '8SE' => 'E02005566',
        '8SF' => 'E02005566',
        '8SG' => 'E02005566',
        '8SH' => 'E02005566',
        '8SJ' => 'E02005566',
        '8SL' => 'E02005566',
        '8SN' => 'E02005566',
        '8SQ' => 'E02005566',
        '8TA' => 'E02005566',
        '8TB' => 'E02005566',
        '8TD' => 'E02005566',
        '8TF' => 'E02005566',
        '8TG' => 'E02005566',
        '8TH' => 'E02005566',
        '8TJ' => 'E02005566',
        '8TL' => 'E02005566',
        '8TN' => 'E02005566',
        '8TP' => 'E02005566',
        '8TQ' => 'E02005566',
        '8TR' => 'E02005566',
        '8TS' => 'E02005566',
        '8TW' => 'E02005566',
        '8UA' => 'E02003744',
        '8UB' => 'E02005566',
        '8UD' => 'E02003744',
        '8UE' => 'E02003744',
        '8WA' => 'E02003744',
        '8WR' => 'E02003744',
        '8WS' => 'E02003744',
        '8WW' => 'E02003744',
        '8WX' => 'E02003744',
        '8WY' => 'E02003744',
        '8WZ' => 'E02003744',
        '9AA' => 'E02005566',
        '9AB' => 'E02005566',
        '9AD' => 'E02005566',
        '9AE' => 'E02005566',
        '9AF' => 'E02005566',
        '9AG' => 'E02005566',
        '9AH' => 'E02005566',
        '9AJ' => 'E02005566',
        '9AL' => 'E02005566',
        '9AN' => 'E02005566',
        '9AP' => 'E02005566',
        '9AQ' => 'E02005566',
        '9AR' => 'E02003745',
        '9AS' => 'E02003745',
        '9AT' => 'E02003745',
        '9AU' => 'E02005566',
        '9AW' => 'E02005566',
        '9AX' => 'E02003745',
        '9AY' => 'E02005566',
        '9AZ' => 'E02005566',
        '9BA' => 'E02005566',
        '9BB' => 'E02005566',
        '9BD' => 'E02005566',
        '9BE' => 'E02005566',
        '9BF' => 'E02005566',
        '9BG' => 'E02005566',
        '9BH' => 'E02005566',
        '9BJ' => 'E02005566',
        '9BL' => 'E02005566',
        '9BN' => 'E02005566',
        '9BP' => 'E02005566',
        '9BQ' => 'E02005566',
        '9BS' => 'E02005566',
        '9BT' => 'E02005566',
        '9BU' => 'E02005566',
        '9BW' => 'E02005566',
        '9BX' => 'E02005566',
        '9BY' => 'E02003744',
        '9BZ' => 'E02005566',
        '9DA' => 'E02005566',
        '9DB' => 'E02005566',
        '9DD' => 'E02005566',
        '9DE' => 'E02003745',
        '9DF' => 'E02005566',
        '9DG' => 'E02005566',
        '9DH' => 'E02005566',
        '9DJ' => 'E02005566',
        '9DN' => 'E02005566',
        '9DP' => 'E02005566',
        '9DQ' => 'E02005566',
        '9DR' => 'E02005566',
        '9DS' => 'E02005566',
        '9DT' => 'E02005566',
        '9DU' => 'E02005566',
        '9DW' => 'E02005566',
        '9DX' => 'E02005566',
        '9DY' => 'E02005566',
        '9DZ' => 'E02005566',
        '9EA' => 'E02005566',
        '9EB' => 'E02005566',
        '9ED' => 'E02005566',
        '9EH' => 'E02005566',
        '9EJ' => 'E02005566',
        '9EL' => 'E02005566',
        '9EN' => 'E02005566',
        '9EP' => 'E02005566',
        '9EQ' => 'E02005566',
        '9ER' => 'E02005566',
        '9ES' => 'E02005566',
        '9ET' => 'E02005566',
        '9EU' => 'E02005566',
        '9EW' => 'E02005566',
        '9EX' => 'E02005566',
        '9EY' => 'E02005566',
        '9EZ' => 'E02005566',
        '9HA' => 'E02005566',
        '9HB' => 'E02005566',
        '9HD' => 'E02005566',
        '9HE' => 'E02005566',
        '9HF' => 'E02005566',
        '9HG' => 'E02003745',
        '9HH' => 'E02005566',
        '9HJ' => 'E02005566',
        '9HL' => 'E02005566',
        '9HN' => 'E02005566',
        '9HP' => 'E02005566',
        '9HQ' => 'E02005566',
        '9HR' => 'E02005566',
        '9HS' => 'E02005566',
        '9HT' => 'E02003744',
        '9HW' => 'E02005566',
        '9JA' => 'E02005566',
        '9JB' => 'E02005566',
        '9JD' => 'E02003745',
        '9JE' => 'E02005566',
        '9JF' => 'E02005566',
        '9JG' => 'E02005566',
        '9JH' => 'E02005566',
        '9JJ' => 'E02005566',
        '9JL' => 'E02005566',
        '9JN' => 'E02005566',
        '9JP' => 'E02005566',
        '9JQ' => 'E02005566',
        '9JR' => 'E02005566',
        '9JS' => 'E02005566',
        '9JT' => 'E02005566',
        '9JU' => 'E02005566',
        '9JW' => 'E02005566',
        '9JX' => 'E02005566',
        '9JY' => 'E02005566',
        '9JZ' => 'E02005566',
        '9LA' => 'E02005566',
        '9LE' => 'E02003745',
        '9LF' => 'E02003745',
        '9LG' => 'E02003745',
        '9LH' => 'E02003745',
        '9LJ' => 'E02003745',
        '9LL' => 'E02003745',
        '9LN' => 'E02003745',
        '9LP' => 'E02003745',
        '9LQ' => 'E02003745',
        '9LR' => 'E02003745',
        '9LS' => 'E02003745',
        '9LT' => 'E02003745',
        '9LU' => 'E02003745',
        '9LW' => 'E02003745',
        '9LX' => 'E02005566',
        '9NA' => 'E02003745',
        '9NB' => 'E02003745',
        '9ND' => 'E02003745',
        '9NE' => 'E02003745',
        '9NF' => 'E02003745',
        '9NG' => 'E02003745',
        '9NH' => 'E02003745',
        '9NJ' => 'E02003745',
        '9NL' => 'E02003745',
        '9NN' => 'E02003745',
        '9NP' => 'E02003745',
        '9NQ' => 'E02003745',
        '9NR' => 'E02003745',
        '9NS' => 'E02003745',
        '9NT' => 'E02003745',
        '9NU' => 'E02003748',
        '9NW' => 'E02003745',
        '9NX' => 'E02003745',
        '9NY' => 'E02003745',
        '9PA' => 'E02003745',
        '9PB' => 'E02003745',
        '9PD' => 'E02003745',
        '9PE' => 'E02003745',
        '9PF' => 'E02003745',
        '9PG' => 'E02003745',
        '9PH' => 'E02003745',
        '9PJ' => 'E02003745',
        '9PL' => 'E02003745',
        '9PN' => 'E02003745',
        '9PQ' => 'E02003745',
        '9PU' => 'E02003745',
        '9PY' => 'E02003745',
        '9QA' => 'E02005566',
        '9QB' => 'E02005566',
        '9QD' => 'E02005566',
        '9QE' => 'E02005566',
        '9QF' => 'E02005566',
        '9QG' => 'E02005566',
        '9QH' => 'E02005566',
        '9QJ' => 'E02005566',
        '9QL' => 'E02005566',
        '9QN' => 'E02005566',
        '9QP' => 'E02005566',
        '9QQ' => 'E02005566',
        '9QW' => 'E02005566',
        '9RA' => 'E02005566',
        '9RB' => 'E02005566',
        '9RD' => 'E02005566',
        '9RE' => 'E02005566',
        '9RF' => 'E02005566',
        '9RG' => 'E02005566',
        '9RH' => 'E02005566',
        '9RJ' => 'E02005566',
        '9RL' => 'E02005566',
        '9RN' => 'E02005566',
        '9RQ' => 'E02005566',
        '9SA' => 'E02005566',
        '9SB' => 'E02005566',
        '9SD' => 'E02005566',
        '9SE' => 'E02005566',
        '9SF' => 'E02005566',
        '9SG' => 'E02005566',
        '9SH' => 'E02003745',
        '9SJ' => 'E02003745',
        '9SL' => 'E02003745',
        '9SN' => 'E02003745',
        '9SP' => 'E02005566',
        '9SQ' => 'E02005566',
        '9SR' => 'E02003744',
        '9SW' => 'E02005566',
        '9TA' => 'E02005566',
        '9TB' => 'E02003751',
        '9TD' => 'E02005566',
        '9TE' => 'E02005566',
        '9TF' => 'E02005566',
        '9TG' => 'E02003732',
        '9TH' => 'E02003732',
        '9TJ' => 'E02005566',
        '9TL' => 'E02005566',
        '9TN' => 'E02005566',
        '9TP' => 'E02005566',
        '9TQ' => 'E02003732',
        '9TW' => 'E02005566',
        '9UA' => 'E02005566',
        '9WA' => 'E02005566',
        '9WB' => 'E02005566',
        '9WD' => 'E02003744',
        '9WE' => 'E02003744',
        '9WW' => 'E02003744',
        '9WX' => 'E02003744',
        '9WY' => 'E02003744',
        '9WZ' => 'E02003744',
        '9ZZ' => 'E02005566',
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
