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
final class BD8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002212',
        '0AB' => 'E02002222',
        '0AD' => 'E02002212',
        '0AE' => 'E02002219',
        '0AF' => 'E02002222',
        '0AG' => 'E02002219',
        '0AH' => 'E02002222',
        '0AJ' => 'E02002222',
        '0AL' => 'E02002222',
        '0AN' => 'E02002219',
        '0AP' => 'E02002222',
        '0AQ' => 'E02002222',
        '0AS' => 'E02002222',
        '0AT' => 'E02002222',
        '0AU' => 'E02002222',
        '0AW' => 'E02002219',
        '0AX' => 'E02002222',
        '0AY' => 'E02002222',
        '0AZ' => 'E02002222',
        '0BA' => 'E02002222',
        '0BB' => 'E02002219',
        '0BD' => 'E02002219',
        '0BE' => 'E02002219',
        '0BG' => 'E02002219',
        '0BH' => 'E02002219',
        '0BJ' => 'E02002219',
        '0BL' => 'E02002222',
        '0BN' => 'E02002219',
        '0BQ' => 'E02002219',
        '0BR' => 'E02002222',
        '0BS' => 'E02002222',
        '0BT' => 'E02002222',
        '0BU' => 'E02002222',
        '0BW' => 'E02002219',
        '0BX' => 'E02002222',
        '0BY' => 'E02002222',
        '0BZ' => 'E02002222',
        '0DA' => 'E02002222',
        '0DB' => 'E02002222',
        '0DD' => 'E02002222',
        '0DE' => 'E02002222',
        '0DF' => 'E02002222',
        '0DG' => 'E02002222',
        '0DH' => 'E02002222',
        '0DJ' => 'E02002222',
        '0DL' => 'E02002222',
        '0DN' => 'E02002222',
        '0DP' => 'E02002222',
        '0DQ' => 'E02002222',
        '0DR' => 'E02002222',
        '0DS' => 'E02002222',
        '0DT' => 'E02002222',
        '0DU' => 'E02002222',
        '0DW' => 'E02002222',
        '0DX' => 'E02002222',
        '0DY' => 'E02002222',
        '0DZ' => 'E02002222',
        '0EA' => 'E02002222',
        '0EB' => 'E02002222',
        '0ED' => 'E02002222',
        '0EE' => 'E02002222',
        '0EF' => 'E02002222',
        '0EG' => 'E02002225',
        '0EH' => 'E02002222',
        '0EJ' => 'E02002222',
        '0EL' => 'E02002222',
        '0EN' => 'E02002222',
        '0EP' => 'E02002222',
        '0EQ' => 'E02002222',
        '0ER' => 'E02002222',
        '0ES' => 'E02002222',
        '0ET' => 'E02002222',
        '0EU' => 'E02002222',
        '0EW' => 'E02002222',
        '0EX' => 'E02002222',
        '0EY' => 'E02002222',
        '0EZ' => 'E02002225',
        '0FB' => 'E02002222',
        '0FD' => 'E02002222',
        '0HA' => 'E02002222',
        '0HG' => 'E02002221',
        '0HH' => 'E02002222',
        '0HJ' => 'E02002222',
        '0HL' => 'E02002222',
        '0HN' => 'E02002222',
        '0HP' => 'E02002222',
        '0HR' => 'E02002222',
        '0HS' => 'E02002222',
        '0HT' => 'E02002222',
        '0HU' => 'E02002222',
        '0HW' => 'E02002222',
        '0HX' => 'E02002221',
        '0HY' => 'E02002222',
        '0HZ' => 'E02002221',
        '0JA' => 'E02002222',
        '0JB' => 'E02002222',
        '0JD' => 'E02002222',
        '0JE' => 'E02002222',
        '0JF' => 'E02002222',
        '0JG' => 'E02002222',
        '0JH' => 'E02002222',
        '0JJ' => 'E02002222',
        '0JL' => 'E02002222',
        '0JN' => 'E02002222',
        '0JP' => 'E02002222',
        '0JQ' => 'E02002222',
        '0JR' => 'E02002222',
        '0JS' => 'E02002222',
        '0JT' => 'E02002222',
        '0JU' => 'E02002222',
        '0JW' => 'E02002222',
        '0JZ' => 'E02002222',
        '0LA' => 'E02002222',
        '0LB' => 'E02002222',
        '0LE' => 'E02002222',
        '0LF' => 'E02002222',
        '0LG' => 'E02002222',
        '0LH' => 'E02002222',
        '0LJ' => 'E02002222',
        '0LL' => 'E02002222',
        '0LN' => 'E02002222',
        '0LP' => 'E02002222',
        '0LQ' => 'E02002222',
        '0LR' => 'E02002222',
        '0LS' => 'E02002222',
        '0LT' => 'E02002222',
        '0LU' => 'E02002222',
        '0LW' => 'E02002222',
        '0LX' => 'E02002222',
        '0LY' => 'E02002222',
        '0LZ' => 'E02002222',
        '0NA' => 'E02002222',
        '0NB' => 'E02002222',
        '0ND' => 'E02002222',
        '0NE' => 'E02002222',
        '0NF' => 'E02002222',
        '0NG' => 'E02002222',
        '0NH' => 'E02002222',
        '0NJ' => 'E02002222',
        '0NL' => 'E02002222',
        '0NN' => 'E02002222',
        '0NP' => 'E02002222',
        '0NQ' => 'E02002222',
        '0NR' => 'E02002222',
        '0NS' => 'E02002222',
        '0NT' => 'E02002222',
        '0NU' => 'E02002222',
        '0NW' => 'E02002222',
        '0NX' => 'E02002222',
        '0PA' => 'E02002222',
        '0PB' => 'E02002222',
        '0PD' => 'E02002222',
        '0PE' => 'E02002222',
        '0PF' => 'E02002222',
        '0PG' => 'E02002222',
        '0PH' => 'E02002222',
        '0PJ' => 'E02002222',
        '0PL' => 'E02002222',
        '0PN' => 'E02002222',
        '0PP' => 'E02002222',
        '0PQ' => 'E02002222',
        '0PR' => 'E02002222',
        '0PS' => 'E02002222',
        '0PT' => 'E02002222',
        '0PU' => 'E02002222',
        '0PW' => 'E02002222',
        '0PX' => 'E02002222',
        '0PY' => 'E02002222',
        '0PZ' => 'E02002222',
        '0QA' => 'E02002222',
        '0QB' => 'E02002222',
        '0QD' => 'E02002222',
        '0QE' => 'E02002222',
        '0QF' => 'E02002225',
        '0QG' => 'E02002225',
        '0QH' => 'E02002222',
        '0QJ' => 'E02002222',
        '0QL' => 'E02002222',
        '0QN' => 'E02002222',
        '0QP' => 'E02002225',
        '0QQ' => 'E02002225',
        '0QR' => 'E02002222',
        '0QS' => 'E02002222',
        '0QT' => 'E02002222',
        '0QU' => 'E02002222',
        '0QW' => 'E02002222',
        '0RA' => 'E02002222',
        '0RB' => 'E02002222',
        '0RD' => 'E02002222',
        '0RE' => 'E02002222',
        '0RF' => 'E02002222',
        '0RG' => 'E02002222',
        '0RH' => 'E02002222',
        '0RJ' => 'E02002222',
        '0RL' => 'E02002222',
        '0UA' => 'E02002221',
        '0UB' => 'E02002221',
        '0UD' => 'E02002221',
        '0UE' => 'E02002222',
        '0UF' => 'E02002222',
        '0UG' => 'E02002221',
        '0UH' => 'E02002222',
        '0UJ' => 'E02002221',
        '0UL' => 'E02002222',
        '0UN' => 'E02002222',
        '0UP' => 'E02002222',
        '0UQ' => 'E02002222',
        '0UR' => 'E02002221',
        '0UT' => 'E02002222',
        '0UU' => 'E02002222',
        '0UW' => 'E02002222',
        '0UX' => 'E02002222',
        '0UY' => 'E02002222',
        '0UZ' => 'E02002222',
        '0WW' => 'E02002221',
        '0WX' => 'E02002221',
        '0WY' => 'E02002221',
        '0WZ' => 'E02002221',
        '0XA' => 'E02002221',
        '0XB' => 'E02002221',
        '7AA' => 'E02002216',
        '7AB' => 'E02002221',
        '7AD' => 'E02002216',
        '7AE' => 'E02002216',
        '7AF' => 'E02002216',
        '7AG' => 'E02002216',
        '7AH' => 'E02002216',
        '7AJ' => 'E02002216',
        '7AL' => 'E02002216',
        '7AN' => 'E02002216',
        '7AP' => 'E02002216',
        '7AQ' => 'E02002216',
        '7AR' => 'E02002216',
        '7AS' => 'E02002216',
        '7AT' => 'E02002216',
        '7AU' => 'E02002216',
        '7AW' => 'E02002216',
        '7AX' => 'E02002216',
        '7AY' => 'E02002216',
        '7AZ' => 'E02002216',
        '7BA' => 'E02002221',
        '7BB' => 'E02002221',
        '7BD' => 'E02002216',
        '7BE' => 'E02002216',
        '7BG' => 'E02002216',
        '7BH' => 'E02002216',
        '7BJ' => 'E02002216',
        '7BL' => 'E02002221',
        '7BN' => 'E02002216',
        '7BP' => 'E02002221',
        '7BQ' => 'E02002221',
        '7BS' => 'E02002221',
        '7BT' => 'E02002221',
        '7BU' => 'E02002221',
        '7BX' => 'E02002221',
        '7BY' => 'E02002221',
        '7BZ' => 'E02002221',
        '7DA' => 'E02002221',
        '7DB' => 'E02002221',
        '7DD' => 'E02002221',
        '7DE' => 'E02002221',
        '7DF' => 'E02002216',
        '7DG' => 'E02002221',
        '7DH' => 'E02002221',
        '7DJ' => 'E02002221',
        '7DL' => 'E02002221',
        '7DN' => 'E02002216',
        '7DP' => 'E02002216',
        '7DQ' => 'E02002221',
        '7DR' => 'E02002221',
        '7DS' => 'E02002221',
        '7DT' => 'E02002221',
        '7DU' => 'E02002221',
        '7DW' => 'E02002221',
        '7DX' => 'E02002221',
        '7DY' => 'E02002221',
        '7DZ' => 'E02002221',
        '7EA' => 'E02002221',
        '7ED' => 'E02002216',
        '7EE' => 'E02002221',
        '7EF' => 'E02002221',
        '7EG' => 'E02002221',
        '7EH' => 'E02002216',
        '7EJ' => 'E02002216',
        '7EN' => 'E02002216',
        '7EP' => 'E02002216',
        '7ER' => 'E02002216',
        '7ET' => 'E02002216',
        '7EW' => 'E02002216',
        '7EX' => 'E02002216',
        '7EY' => 'E02002216',
        '7EZ' => 'E02002216',
        '7GA' => 'E02002221',
        '7HB' => 'E02002216',
        '7HD' => 'E02002216',
        '7HE' => 'E02002216',
        '7HH' => 'E02002216',
        '7HL' => 'E02002216',
        '7HN' => 'E02002221',
        '7HP' => 'E02002221',
        '7HQ' => 'E02002216',
        '7HR' => 'E02002216',
        '7HS' => 'E02002221',
        '7HT' => 'E02002216',
        '7HU' => 'E02002221',
        '7HW' => 'E02002216',
        '7HX' => 'E02002216',
        '7HY' => 'E02002221',
        '7HZ' => 'E02002221',
        '7JA' => 'E02002221',
        '7JB' => 'E02002221',
        '7JD' => 'E02002221',
        '7JE' => 'E02002221',
        '7JF' => 'E02002221',
        '7JH' => 'E02002221',
        '7JJ' => 'E02002221',
        '7JL' => 'E02002221',
        '7JN' => 'E02002221',
        '7JP' => 'E02002221',
        '7JR' => 'E02002221',
        '7JS' => 'E02002221',
        '7JT' => 'E02002221',
        '7JW' => 'E02002221',
        '7JX' => 'E02002216',
        '7JY' => 'E02002216',
        '7JZ' => 'E02002216',
        '7LA' => 'E02002216',
        '7LD' => 'E02002216',
        '7LE' => 'E02002216',
        '7LF' => 'E02002201',
        '7LG' => 'E02002216',
        '7LH' => 'E02002216',
        '7LJ' => 'E02002216',
        '7LL' => 'E02002216',
        '7LN' => 'E02002216',
        '7LP' => 'E02002216',
        '7LQ' => 'E02002216',
        '7LR' => 'E02002216',
        '7LS' => 'E02002216',
        '7LU' => 'E02002216',
        '7LW' => 'E02002221',
        '7LX' => 'E02002216',
        '7LY' => 'E02002216',
        '7LZ' => 'E02002216',
        '7NA' => 'E02002216',
        '7NB' => 'E02002216',
        '7ND' => 'E02002216',
        '7NE' => 'E02002216',
        '7NG' => 'E02002221',
        '7NH' => 'E02002221',
        '7NL' => 'E02002216',
        '7NN' => 'E02002216',
        '7NP' => 'E02002216',
        '7NR' => 'E02002216',
        '7NS' => 'E02002216',
        '7NW' => 'E02002216',
        '7NX' => 'E02002216',
        '7PA' => 'E02002216',
        '7PD' => 'E02002216',
        '7PF' => 'E02002216',
        '7PH' => 'E02002216',
        '7PJ' => 'E02002216',
        '7PL' => 'E02002216',
        '7PN' => 'E02002216',
        '7PP' => 'E02002216',
        '7PQ' => 'E02002216',
        '7PR' => 'E02002216',
        '7PS' => 'E02002216',
        '7PT' => 'E02002216',
        '7PU' => 'E02002216',
        '7PW' => 'E02002216',
        '7PY' => 'E02002216',
        '7QA' => 'E02002216',
        '7QB' => 'E02002216',
        '7QD' => 'E02002216',
        '7QE' => 'E02002216',
        '7QF' => 'E02002216',
        '7QG' => 'E02002216',
        '7QH' => 'E02002216',
        '7QL' => 'E02002216',
        '7QN' => 'E02002216',
        '7QP' => 'E02002221',
        '7QQ' => 'E02002221',
        '7QR' => 'E02002216',
        '7QS' => 'E02002221',
        '7QT' => 'E02002221',
        '7QU' => 'E02002221',
        '7QW' => 'E02002216',
        '7QZ' => 'E02002221',
        '7RB' => 'E02002221',
        '7RE' => 'E02002221',
        '7RF' => 'E02002221',
        '7RH' => 'E02002221',
        '7RJ' => 'E02002221',
        '7RL' => 'E02002221',
        '7RN' => 'E02002221',
        '7RP' => 'E02002221',
        '7RQ' => 'E02002221',
        '7RR' => 'E02002221',
        '7RS' => 'E02002221',
        '7RT' => 'E02002221',
        '7RU' => 'E02002221',
        '7RW' => 'E02002221',
        '7RX' => 'E02002221',
        '7RY' => 'E02002221',
        '7RZ' => 'E02002216',
        '7SA' => 'E02002216',
        '7SB' => 'E02002216',
        '7SD' => 'E02002216',
        '7SE' => 'E02002216',
        '7SF' => 'E02002216',
        '7SG' => 'E02002216',
        '7SJ' => 'E02002216',
        '7SL' => 'E02002216',
        '7SN' => 'E02002216',
        '7SP' => 'E02002221',
        '7SR' => 'E02002221',
        '7SS' => 'E02002221',
        '7ST' => 'E02002221',
        '7SU' => 'E02002221',
        '7SW' => 'E02002216',
        '7SX' => 'E02002221',
        '7SY' => 'E02002216',
        '7SZ' => 'E02002221',
        '7TA' => 'E02002221',
        '7TD' => 'E02002221',
        '7TG' => 'E02002221',
        '7TH' => 'E02002216',
        '7TJ' => 'E02002221',
        '7TL' => 'E02002221',
        '7TN' => 'E02002216',
        '7TP' => 'E02002216',
        '7TQ' => 'E02002221',
        '7TR' => 'E02002216',
        '7TS' => 'E02002216',
        '7TT' => 'E02002221',
        '7TU' => 'E02002221',
        '7TW' => 'E02002216',
        '7TX' => 'E02002216',
        '7TY' => 'E02002221',
        '7TZ' => 'E02002216',
        '7UA' => 'E02002216',
        '7UB' => 'E02002221',
        '7UD' => 'E02002216',
        '7UE' => 'E02002216',
        '7UG' => 'E02002221',
        '7UH' => 'E02002216',
        '7UJ' => 'E02002216',
        '7UN' => 'E02002216',
        '7UP' => 'E02002221',
        '7UQ' => 'E02002216',
        '7UR' => 'E02002216',
        '7UT' => 'E02002216',
        '7UU' => 'E02002216',
        '7UW' => 'E02002216',
        '7UX' => 'E02002216',
        '7UY' => 'E02002216',
        '7UZ' => 'E02002216',
        '7WW' => 'E02002221',
        '7WX' => 'E02002221',
        '7WY' => 'E02002221',
        '7WZ' => 'E02002221',
        '7YX' => 'E02002221',
        '7YY' => 'E02002221',
        '7YZ' => 'E02002221',
        '7ZJ' => 'E02002221',
        '7ZW' => 'E02002221',
        '8AA' => 'E02002216',
        '8AB' => 'E02002216',
        '8AD' => 'E02002216',
        '8AE' => 'E02002216',
        '8AF' => 'E02002216',
        '8AG' => 'E02002221',
        '8AH' => 'E02002216',
        '8AJ' => 'E02002216',
        '8AL' => 'E02002216',
        '8AN' => 'E02002216',
        '8AQ' => 'E02002216',
        '8AR' => 'E02002216',
        '8AS' => 'E02002216',
        '8AT' => 'E02002216',
        '8AU' => 'E02002216',
        '8AW' => 'E02002216',
        '8AX' => 'E02002216',
        '8AY' => 'E02002216',
        '8AZ' => 'E02002216',
        '8BA' => 'E02002216',
        '8BB' => 'E02002216',
        '8BD' => 'E02002216',
        '8BE' => 'E02002216',
        '8BG' => 'E02002221',
        '8BH' => 'E02002221',
        '8BJ' => 'E02002221',
        '8BL' => 'E02002216',
        '8BN' => 'E02002221',
        '8BQ' => 'E02002221',
        '8BS' => 'E02002216',
        '8BT' => 'E02002216',
        '8BU' => 'E02002221',
        '8BW' => 'E02002223',
        '8BX' => 'E02002216',
        '8BY' => 'E02002216',
        '8BZ' => 'E02002216',
        '8DA' => 'E02002216',
        '8DB' => 'E02002216',
        '8DD' => 'E02002216',
        '8DG' => 'E02002216',
        '8DH' => 'E02002223',
        '8DJ' => 'E02002216',
        '8DL' => 'E02002223',
        '8DN' => 'E02002216',
        '8DP' => 'E02002221',
        '8DQ' => 'E02002216',
        '8DR' => 'E02002221',
        '8DS' => 'E02002223',
        '8DT' => 'E02002223',
        '8DU' => 'E02002223',
        '8DW' => 'E02002223',
        '8DX' => 'E02002223',
        '8DZ' => 'E02002223',
        '8EA' => 'E02002223',
        '8EB' => 'E02002221',
        '8ED' => 'E02002221',
        '8EE' => 'E02002221',
        '8EF' => 'E02002221',
        '8EG' => 'E02002221',
        '8EH' => 'E02002221',
        '8EJ' => 'E02002221',
        '8EN' => 'E02002221',
        '8EP' => 'E02002221',
        '8EQ' => 'E02002221',
        '8ER' => 'E02002221',
        '8ES' => 'E02002221',
        '8ET' => 'E02002221',
        '8EW' => 'E02002221',
        '8EX' => 'E02002221',
        '8EY' => 'E02002223',
        '8HA' => 'E02002221',
        '8HB' => 'E02002221',
        '8HD' => 'E02002221',
        '8HE' => 'E02002221',
        '8HF' => 'E02002221',
        '8HG' => 'E02002221',
        '8HH' => 'E02002221',
        '8HJ' => 'E02002221',
        '8HL' => 'E02002221',
        '8HN' => 'E02002221',
        '8HP' => 'E02002221',
        '8HQ' => 'E02002221',
        '8HR' => 'E02002221',
        '8HS' => 'E02002221',
        '8HT' => 'E02002221',
        '8HU' => 'E02002221',
        '8HW' => 'E02002221',
        '8HX' => 'E02002221',
        '8HY' => 'E02002221',
        '8HZ' => 'E02002221',
        '8JA' => 'E02002221',
        '8JB' => 'E02002221',
        '8JD' => 'E02002221',
        '8JE' => 'E02002221',
        '8JF' => 'E02002221',
        '8JG' => 'E02002221',
        '8JJ' => 'E02002226',
        '8JL' => 'E02002223',
        '8JN' => 'E02002223',
        '8JP' => 'E02002221',
        '8JR' => 'E02002223',
        '8JS' => 'E02002221',
        '8JT' => 'E02002221',
        '8JU' => 'E02002223',
        '8JW' => 'E02002221',
        '8JX' => 'E02002221',
        '8JY' => 'E02002221',
        '8JZ' => 'E02002223',
        '8LA' => 'E02002223',
        '8LB' => 'E02002223',
        '8LD' => 'E02002223',
        '8LE' => 'E02002223',
        '8LF' => 'E02002223',
        '8LG' => 'E02002223',
        '8LH' => 'E02002223',
        '8LJ' => 'E02002223',
        '8LL' => 'E02002221',
        '8LN' => 'E02002223',
        '8LP' => 'E02002223',
        '8LQ' => 'E02002223',
        '8LR' => 'E02002221',
        '8LU' => 'E02002223',
        '8LW' => 'E02002223',
        '8LX' => 'E02002215',
        '8LY' => 'E02002215',
        '8LZ' => 'E02002216',
        '8NA' => 'E02002216',
        '8NB' => 'E02002223',
        '8ND' => 'E02002223',
        '8NE' => 'E02002223',
        '8NF' => 'E02002223',
        '8NG' => 'E02002223',
        '8NH' => 'E02002223',
        '8NJ' => 'E02002223',
        '8NL' => 'E02002223',
        '8NN' => 'E02002223',
        '8NP' => 'E02002223',
        '8NQ' => 'E02002223',
        '8NR' => 'E02002223',
        '8NS' => 'E02002223',
        '8NT' => 'E02002223',
        '8NU' => 'E02002223',
        '8NW' => 'E02002223',
        '8NX' => 'E02002223',
        '8PA' => 'E02002223',
        '8PB' => 'E02002223',
        '8PD' => 'E02002223',
        '8PE' => 'E02002223',
        '8PF' => 'E02002223',
        '8PG' => 'E02002223',
        '8PH' => 'E02002223',
        '8PJ' => 'E02002223',
        '8PL' => 'E02002223',
        '8PN' => 'E02002223',
        '8PP' => 'E02002223',
        '8PQ' => 'E02002223',
        '8PR' => 'E02002223',
        '8PS' => 'E02002223',
        '8PT' => 'E02002223',
        '8PU' => 'E02002223',
        '8PW' => 'E02002223',
        '8QA' => 'E02002215',
        '8QB' => 'E02002215',
        '8QD' => 'E02002215',
        '8QE' => 'E02002215',
        '8QH' => 'E02002216',
        '8QJ' => 'E02002216',
        '8QL' => 'E02002216',
        '8QN' => 'E02002216',
        '8QP' => 'E02002216',
        '8QQ' => 'E02002215',
        '8QR' => 'E02002216',
        '8QS' => 'E02002216',
        '8QT' => 'E02002216',
        '8QU' => 'E02002216',
        '8QW' => 'E02002216',
        '8QX' => 'E02002216',
        '8QY' => 'E02002216',
        '8QZ' => 'E02002216',
        '8RA' => 'E02002216',
        '8RB' => 'E02002216',
        '8RD' => 'E02002216',
        '8RE' => 'E02002216',
        '8RG' => 'E02002216',
        '8RH' => 'E02002216',
        '8RJ' => 'E02002216',
        '8RL' => 'E02002216',
        '8RQ' => 'E02002216',
        '8RX' => 'E02002221',
        '8RY' => 'E02002221',
        '8RZ' => 'E02002221',
        '8WQ' => 'E02002221',
        '8WR' => 'E02002221',
        '8WS' => 'E02002221',
        '8WT' => 'E02002221',
        '8WU' => 'E02002221',
        '8WW' => 'E02002221',
        '8WX' => 'E02002221',
        '8WY' => 'E02002221',
        '8WZ' => 'E02002221',
        '8YP' => 'E02002221',
        '8YR' => 'E02002223',
        '8YS' => 'E02002223',
        '8YU' => 'E02002221',
        '8YW' => 'E02002221',
        '8YX' => 'E02002221',
        '8YY' => 'E02002223',
        '8YZ' => 'E02002221',
        '9AA' => 'E02002223',
        '9AB' => 'E02002215',
        '9AD' => 'E02002223',
        '9AE' => 'E02002223',
        '9AF' => 'E02002223',
        '9AH' => 'E02002223',
        '9AJ' => 'E02002223',
        '9AL' => 'E02002223',
        '9AN' => 'E02002223',
        '9AP' => 'E02002223',
        '9AQ' => 'E02002223',
        '9AR' => 'E02002223',
        '9AS' => 'E02002223',
        '9AT' => 'E02002223',
        '9AU' => 'E02002223',
        '9AX' => 'E02002223',
        '9AY' => 'E02002223',
        '9AZ' => 'E02002223',
        '9BA' => 'E02002223',
        '9BG' => 'E02002223',
        '9BH' => 'E02002223',
        '9BJ' => 'E02002223',
        '9BL' => 'E02002223',
        '9BN' => 'E02002223',
        '9BP' => 'E02002223',
        '9BQ' => 'E02002223',
        '9BR' => 'E02002219',
        '9BS' => 'E02002219',
        '9BU' => 'E02002223',
        '9BW' => 'E02002219',
        '9BY' => 'E02002215',
        '9BZ' => 'E02002215',
        '9DA' => 'E02002215',
        '9DB' => 'E02002215',
        '9DD' => 'E02002215',
        '9DE' => 'E02002215',
        '9DF' => 'E02002215',
        '9DH' => 'E02002223',
        '9DJ' => 'E02002223',
        '9DL' => 'E02002223',
        '9DN' => 'E02002223',
        '9DP' => 'E02002215',
        '9DR' => 'E02002223',
        '9DS' => 'E02002223',
        '9DT' => 'E02002223',
        '9DU' => 'E02002223',
        '9DW' => 'E02002223',
        '9DX' => 'E02002223',
        '9DY' => 'E02002223',
        '9DZ' => 'E02002223',
        '9EA' => 'E02002223',
        '9EB' => 'E02002223',
        '9ED' => 'E02002215',
        '9EE' => 'E02002215',
        '9EF' => 'E02002215',
        '9EG' => 'E02002219',
        '9EH' => 'E02002219',
        '9EJ' => 'E02002221',
        '9EL' => 'E02002219',
        '9EN' => 'E02002219',
        '9EP' => 'E02002219',
        '9EQ' => 'E02002223',
        '9ER' => 'E02002223',
        '9ES' => 'E02002223',
        '9ET' => 'E02002223',
        '9EU' => 'E02002223',
        '9EW' => 'E02002219',
        '9EX' => 'E02002223',
        '9EY' => 'E02002223',
        '9EZ' => 'E02002223',
        '9FX' => 'E02002223',
        '9HA' => 'E02002223',
        '9HB' => 'E02002223',
        '9HD' => 'E02002223',
        '9HE' => 'E02002223',
        '9HF' => 'E02002219',
        '9HG' => 'E02002223',
        '9HH' => 'E02002215',
        '9HL' => 'E02002215',
        '9HN' => 'E02002215',
        '9HP' => 'E02002215',
        '9HQ' => 'E02002223',
        '9HR' => 'E02002215',
        '9HS' => 'E02002219',
        '9HT' => 'E02002219',
        '9HU' => 'E02002219',
        '9HW' => 'E02002215',
        '9HX' => 'E02002219',
        '9HY' => 'E02002219',
        '9HZ' => 'E02002219',
        '9JA' => 'E02002219',
        '9JB' => 'E02002219',
        '9JD' => 'E02002219',
        '9JE' => 'E02002219',
        '9JF' => 'E02002219',
        '9JG' => 'E02002219',
        '9JH' => 'E02002219',
        '9JJ' => 'E02002219',
        '9JL' => 'E02002219',
        '9JN' => 'E02002219',
        '9JP' => 'E02002219',
        '9JQ' => 'E02002215',
        '9JR' => 'E02002215',
        '9JS' => 'E02002215',
        '9JT' => 'E02002215',
        '9JU' => 'E02002215',
        '9JW' => 'E02002215',
        '9JX' => 'E02002219',
        '9JY' => 'E02002215',
        '9LA' => 'E02002215',
        '9LB' => 'E02002219',
        '9LH' => 'E02002219',
        '9LJ' => 'E02002215',
        '9LL' => 'E02002219',
        '9LN' => 'E02002219',
        '9LP' => 'E02002219',
        '9LR' => 'E02002219',
        '9LS' => 'E02002219',
        '9LT' => 'E02002219',
        '9LU' => 'E02002219',
        '9LW' => 'E02002219',
        '9LX' => 'E02002219',
        '9LY' => 'E02002219',
        '9LZ' => 'E02002219',
        '9NA' => 'E02002219',
        '9NB' => 'E02002219',
        '9ND' => 'E02002219',
        '9NE' => 'E02002219',
        '9NF' => 'E02002219',
        '9NG' => 'E02002219',
        '9NH' => 'E02002219',
        '9NJ' => 'E02002219',
        '9NL' => 'E02002219',
        '9NN' => 'E02002219',
        '9NP' => 'E02002219',
        '9NQ' => 'E02002219',
        '9NR' => 'E02002219',
        '9NS' => 'E02002219',
        '9NT' => 'E02002219',
        '9NU' => 'E02002219',
        '9NW' => 'E02002219',
        '9NX' => 'E02002219',
        '9NY' => 'E02002219',
        '9PA' => 'E02002219',
        '9PB' => 'E02002219',
        '9PD' => 'E02002219',
        '9PE' => 'E02002219',
        '9PF' => 'E02002219',
        '9PG' => 'E02002219',
        '9PJ' => 'E02002219',
        '9PL' => 'E02002219',
        '9PN' => 'E02002219',
        '9PP' => 'E02002219',
        '9PQ' => 'E02002219',
        '9PR' => 'E02002219',
        '9PS' => 'E02002219',
        '9PT' => 'E02002219',
        '9PU' => 'E02002219',
        '9PW' => 'E02002219',
        '9PX' => 'E02002219',
        '9PY' => 'E02002219',
        '9PZ' => 'E02002219',
        '9QA' => 'E02002219',
        '9QB' => 'E02002219',
        '9QD' => 'E02002219',
        '9QE' => 'E02002219',
        '9QF' => 'E02002219',
        '9QG' => 'E02002219',
        '9QH' => 'E02002219',
        '9QJ' => 'E02002219',
        '9QL' => 'E02002219',
        '9QN' => 'E02002219',
        '9QP' => 'E02002219',
        '9QQ' => 'E02002219',
        '9QR' => 'E02002219',
        '9QS' => 'E02002219',
        '9QT' => 'E02002219',
        '9QW' => 'E02002219',
        '9RA' => 'E02002223',
        '9RB' => 'E02002223',
        '9RE' => 'E02002223',
        '9RF' => 'E02002223',
        '9RG' => 'E02002223',
        '9RL' => 'E02002223',
        '9RP' => 'E02002223',
        '9RQ' => 'E02002223',
        '9RR' => 'E02002223',
        '9RS' => 'E02002223',
        '9RU' => 'E02002222',
        '9RX' => 'E02002222',
        '9RY' => 'E02002222',
        '9RZ' => 'E02002222',
        '9SA' => 'E02002222',
        '9SB' => 'E02002223',
        '9SD' => 'E02002223',
        '9SE' => 'E02002219',
        '9SF' => 'E02002219',
        '9SG' => 'E02002219',
        '9SH' => 'E02002219',
        '9SJ' => 'E02002219',
        '9SL' => 'E02002219',
        '9SN' => 'E02002219',
        '9SP' => 'E02002219',
        '9SQ' => 'E02002219',
        '9SR' => 'E02002219',
        '9SS' => 'E02002219',
        '9ST' => 'E02002219',
        '9SU' => 'E02002219',
        '9SW' => 'E02002219',
        '9SX' => 'E02002223',
        '9SY' => 'E02002223',
        '9SZ' => 'E02002221',
        '9TA' => 'E02002222',
        '9TB' => 'E02002223',
        '9TD' => 'E02002223',
        '9TE' => 'E02002222',
        '9TF' => 'E02002222',
        '9TG' => 'E02002223',
        '9TJ' => 'E02002222',
        '9TP' => 'E02002223',
        '9TQ' => 'E02002222',
        '9TX' => 'E02002222',
        '9WA' => 'E02002223',
        '9WT' => 'E02002223',
        '9WU' => 'E02002221',
        '9WW' => 'E02002221',
        '9WX' => 'E02002223',
        '9WY' => 'E02002223',
        '9WZ' => 'E02002223',
        '9XU' => 'E02002221',
        '9XW' => 'E02002221',
        '9XX' => 'E02002221',
        '9XY' => 'E02002221',
        '9XZ' => 'E02002219',
        '9YA' => 'E02002221',
        '9YB' => 'E02002219',
        '9YD' => 'E02002221',
        '9YE' => 'E02002219',
        '9YF' => 'E02002221',
        '9YG' => 'E02002221',
        '9YH' => 'E02002221',
        '9YJ' => 'E02002221',
        '9YL' => 'E02002221',
        '9YN' => 'E02002222',
        '9YP' => 'E02002219',
        '9YQ' => 'E02002221',
        '9YR' => 'E02002219',
        '9YS' => 'E02002222',
        '9YT' => 'E02002222',
        '9YU' => 'E02002219',
        '9YW' => 'E02002222',
        '9YX' => 'E02002219',
        '9YY' => 'E02002222',
        '9YZ' => 'E02002222',
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
