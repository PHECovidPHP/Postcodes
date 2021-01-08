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
final class BN9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004386',
        '0AB' => 'E02004386',
        '0AD' => 'E02004386',
        '0AE' => 'E02004387',
        '0AF' => 'E02004387',
        '0AG' => 'E02004386',
        '0AH' => 'E02004386',
        '0AJ' => 'E02004386',
        '0AL' => 'E02004386',
        '0AN' => 'E02004387',
        '0AP' => 'E02004386',
        '0AQ' => 'E02004387',
        '0AR' => 'E02004386',
        '0AS' => 'E02004386',
        '0AT' => 'E02004386',
        '0AU' => 'E02004386',
        '0AW' => 'E02004382',
        '0AX' => 'E02004387',
        '0AY' => 'E02004386',
        '0AZ' => 'E02004386',
        '0BA' => 'E02004386',
        '0BB' => 'E02004386',
        '0BD' => 'E02004386',
        '0BE' => 'E02004386',
        '0BF' => 'E02004386',
        '0BG' => 'E02004386',
        '0BH' => 'E02004386',
        '0BJ' => 'E02004386',
        '0BL' => 'E02004386',
        '0BN' => 'E02004386',
        '0BP' => 'E02004386',
        '0BQ' => 'E02004386',
        '0BS' => 'E02004387',
        '0BT' => 'E02004386',
        '0BU' => 'E02004386',
        '0BW' => 'E02004386',
        '0BX' => 'E02004386',
        '0BY' => 'E02004386',
        '0BZ' => 'E02004386',
        '0DA' => 'E02004386',
        '0DB' => 'E02004386',
        '0DD' => 'E02004386',
        '0DE' => 'E02004386',
        '0DF' => 'E02004386',
        '0DG' => 'E02004386',
        '0DH' => 'E02004386',
        '0DJ' => 'E02004386',
        '0DL' => 'E02004386',
        '0DN' => 'E02004386',
        '0DP' => 'E02004386',
        '0DQ' => 'E02004386',
        '0DR' => 'E02004386',
        '0DS' => 'E02004386',
        '0DT' => 'E02004386',
        '0DU' => 'E02004386',
        '0DW' => 'E02004386',
        '0DX' => 'E02004386',
        '0DY' => 'E02004386',
        '0DZ' => 'E02004386',
        '0EA' => 'E02004387',
        '0EB' => 'E02004386',
        '0ED' => 'E02004386',
        '0EE' => 'E02004386',
        '0EF' => 'E02004386',
        '0EG' => 'E02004386',
        '0EH' => 'E02004386',
        '0EJ' => 'E02004386',
        '0EL' => 'E02004386',
        '0EN' => 'E02004386',
        '0EP' => 'E02004386',
        '0EQ' => 'E02004386',
        '0ER' => 'E02004386',
        '0ES' => 'E02004386',
        '0ET' => 'E02004386',
        '0EU' => 'E02004386',
        '0EW' => 'E02004386',
        '0EX' => 'E02004386',
        '0EY' => 'E02004386',
        '0EZ' => 'E02004387',
        '0FA' => 'E02004386',
        '0FB' => 'E02004386',
        '0FN' => 'E02004386',
        '0HD' => 'E02004386',
        '0HE' => 'E02004386',
        '0HF' => 'E02004382',
        '0HG' => 'E02004382',
        '0HH' => 'E02004382',
        '0HJ' => 'E02004382',
        '0HL' => 'E02004382',
        '0HN' => 'E02004382',
        '0HP' => 'E02004382',
        '0HQ' => 'E02004382',
        '0HR' => 'E02004386',
        '0HS' => 'E02004382',
        '0HT' => 'E02004382',
        '0HU' => 'E02004382',
        '0HW' => 'E02004382',
        '0HX' => 'E02004386',
        '0HY' => 'E02004386',
        '0JA' => 'E02004382',
        '0JB' => 'E02004382',
        '0JD' => 'E02004382',
        '0JE' => 'E02004382',
        '0JF' => 'E02004386',
        '0JG' => 'E02004386',
        '0JH' => 'E02004382',
        '0JJ' => 'E02004382',
        '0JL' => 'E02004382',
        '0JN' => 'E02004382',
        '0JP' => 'E02004382',
        '0JR' => 'E02004382',
        '0JS' => 'E02004382',
        '0JT' => 'E02004382',
        '0JU' => 'E02004386',
        '0JX' => 'E02004386',
        '0JY' => 'E02004382',
        '0JZ' => 'E02004382',
        '0LA' => 'E02004386',
        '0LJ' => 'E02004386',
        '0LL' => 'E02004386',
        '0LN' => 'E02004386',
        '0LP' => 'E02004386',
        '0LR' => 'E02004386',
        '0LS' => 'E02004386',
        '0LT' => 'E02004386',
        '0LU' => 'E02004386',
        '0LX' => 'E02004386',
        '0LY' => 'E02004386',
        '0LZ' => 'E02004386',
        '0NA' => 'E02004386',
        '0NB' => 'E02004386',
        '0ND' => 'E02004386',
        '0NF' => 'E02004386',
        '0NG' => 'E02004386',
        '0NH' => 'E02004386',
        '0NJ' => 'E02004386',
        '0NL' => 'E02004386',
        '0NN' => 'E02004386',
        '0NP' => 'E02004386',
        '0NQ' => 'E02004386',
        '0NR' => 'E02004386',
        '0NS' => 'E02004386',
        '0NT' => 'E02004386',
        '0NU' => 'E02004386',
        '0NW' => 'E02004386',
        '0NX' => 'E02004386',
        '0NY' => 'E02004386',
        '0NZ' => 'E02004386',
        '0PA' => 'E02004386',
        '0PB' => 'E02004386',
        '0PD' => 'E02004386',
        '0PE' => 'E02004387',
        '0PF' => 'E02004387',
        '0PG' => 'E02004382',
        '0PH' => 'E02004382',
        '0PJ' => 'E02004386',
        '0PL' => 'E02004386',
        '0PN' => 'E02004386',
        '0PP' => 'E02004386',
        '0PQ' => 'E02004386',
        '0PR' => 'E02004386',
        '0PS' => 'E02004386',
        '0PT' => 'E02004386',
        '0PU' => 'E02004386',
        '0PW' => 'E02004382',
        '0PX' => 'E02004386',
        '0PY' => 'E02004386',
        '0PZ' => 'E02004382',
        '0QA' => 'E02004386',
        '0QB' => 'E02004386',
        '0QD' => 'E02004386',
        '0QE' => 'E02004386',
        '0QF' => 'E02004382',
        '0QG' => 'E02004386',
        '0QH' => 'E02004386',
        '0QJ' => 'E02004386',
        '0QL' => 'E02004386',
        '0QN' => 'E02004386',
        '0QP' => 'E02004382',
        '0QQ' => 'E02004386',
        '0QR' => 'E02004382',
        '0QS' => 'E02004382',
        '0QT' => 'E02004382',
        '0QU' => 'E02004382',
        '0QW' => 'E02004386',
        '0QX' => 'E02004382',
        '0QY' => 'E02004386',
        '0RA' => 'E02004386',
        '0RB' => 'E02004386',
        '0RD' => 'E02004386',
        '0RE' => 'E02004386',
        '0RF' => 'E02004386',
        '0RG' => 'E02004386',
        '0RH' => 'E02004386',
        '0RJ' => 'E02004386',
        '0RL' => 'E02004386',
        '0RN' => 'E02004386',
        '0RP' => 'E02004386',
        '0RR' => 'E02004386',
        '0RS' => 'E02004386',
        '0RT' => 'E02004386',
        '0RU' => 'E02004386',
        '0RW' => 'E02004386',
        '0RX' => 'E02004386',
        '0RY' => 'E02004386',
        '0RZ' => 'E02004386',
        '0SA' => 'E02004386',
        '0SB' => 'E02004386',
        '0SD' => 'E02004386',
        '0SE' => 'E02004386',
        '0TP' => 'E02004382',
        '0WA' => 'E02004387',
        '0WB' => 'E02004387',
        '0WD' => 'E02004387',
        '0WE' => 'E02004387',
        '0WF' => 'E02004387',
        '0WR' => 'E02004387',
        '0WS' => 'E02004387',
        '0WZ' => 'E02004387',
        '0YZ' => 'E02004387',
        '0ZP' => 'E02004386',
        '0ZQ' => 'E02004386',
        '0ZS' => 'E02004387',
        '1AB' => 'E02004387',
        '1AD' => 'E02004387',
        '1AE' => 'E02004387',
        '1AF' => 'E02004387',
        '1AG' => 'E02004387',
        '1AH' => 'E02004387',
        '1AJ' => 'E02004387',
        '1AL' => 'E02004387',
        '1AN' => 'E02004387',
        '1AP' => 'E02004387',
        '1AQ' => 'E02004387',
        '1AR' => 'E02004387',
        '1AS' => 'E02004387',
        '1AT' => 'E02004387',
        '1AU' => 'E02004387',
        '1AW' => 'E02004387',
        '1AX' => 'E02004387',
        '1AY' => 'E02004387',
        '1AZ' => 'E02004387',
        '1BA' => 'E02004387',
        '1BB' => 'E02004387',
        '1BD' => 'E02004387',
        '1BE' => 'E02004387',
        '1BF' => 'E02004387',
        '1BG' => 'E02004387',
        '1BH' => 'E02004387',
        '1BJ' => 'E02004387',
        '1BL' => 'E02004387',
        '1BN' => 'E02004387',
        '1BP' => 'E02004387',
        '1BQ' => 'E02004387',
        '1BR' => 'E02004387',
        '7AA' => 'E02004384',
        '7AB' => 'E02004384',
        '7AD' => 'E02004384',
        '7AE' => 'E02004384',
        '7AF' => 'E02004384',
        '7AG' => 'E02004384',
        '7AH' => 'E02004384',
        '7AJ' => 'E02004384',
        '7AL' => 'E02004384',
        '7AN' => 'E02004384',
        '7AP' => 'E02004384',
        '7AQ' => 'E02004384',
        '7AR' => 'E02004384',
        '7AS' => 'E02004384',
        '7AT' => 'E02004384',
        '7AU' => 'E02004384',
        '7AX' => 'E02004384',
        '7AY' => 'E02004384',
        '7AZ' => 'E02004384',
        '7BA' => 'E02004384',
        '7BB' => 'E02004384',
        '7BD' => 'E02004384',
        '7BE' => 'E02004384',
        '7BG' => 'E02004384',
        '7BL' => 'E02004384',
        '7BN' => 'E02004384',
        '7BP' => 'E02004384',
        '7BQ' => 'E02004384',
        '7BS' => 'E02004384',
        '7BT' => 'E02004384',
        '7BU' => 'E02004384',
        '7BX' => 'E02004384',
        '7BY' => 'E02004384',
        '7BZ' => 'E02004384',
        '7DA' => 'E02004384',
        '7DB' => 'E02004384',
        '7DD' => 'E02004384',
        '7DE' => 'E02004384',
        '7DF' => 'E02004384',
        '7DG' => 'E02004384',
        '7DH' => 'E02004384',
        '7DJ' => 'E02004384',
        '7DL' => 'E02004384',
        '7DN' => 'E02004384',
        '7DP' => 'E02004384',
        '7DQ' => 'E02004384',
        '7DR' => 'E02004384',
        '7DS' => 'E02004384',
        '7DT' => 'E02004384',
        '7DU' => 'E02004384',
        '7DW' => 'E02004384',
        '7DX' => 'E02004384',
        '7DY' => 'E02004384',
        '7DZ' => 'E02004384',
        '7EA' => 'E02004384',
        '7EB' => 'E02004384',
        '7ED' => 'E02004384',
        '7EE' => 'E02004384',
        '7EF' => 'E02004384',
        '7EG' => 'E02004384',
        '7EH' => 'E02004384',
        '7EJ' => 'E02004385',
        '7EL' => 'E02004385',
        '7EN' => 'E02004384',
        '7EP' => 'E02004384',
        '7EQ' => 'E02004384',
        '7ER' => 'E02004384',
        '7ES' => 'E02004384',
        '7ET' => 'E02004384',
        '7EU' => 'E02004384',
        '7EW' => 'E02004384',
        '7EX' => 'E02004384',
        '7EY' => 'E02004384',
        '7HA' => 'E02004384',
        '7HB' => 'E02004384',
        '7HD' => 'E02004385',
        '7HE' => 'E02004384',
        '7HF' => 'E02004384',
        '7HG' => 'E02004384',
        '7HH' => 'E02004384',
        '7HJ' => 'E02004385',
        '7HL' => 'E02004385',
        '7HN' => 'E02004385',
        '7HP' => 'E02004385',
        '7HQ' => 'E02004384',
        '7HR' => 'E02004385',
        '7HT' => 'E02004384',
        '7HU' => 'E02004384',
        '7HW' => 'E02004385',
        '7HX' => 'E02004385',
        '7HY' => 'E02004385',
        '7JA' => 'E02004385',
        '7JB' => 'E02004384',
        '7JD' => 'E02004385',
        '7JE' => 'E02004385',
        '7JF' => 'E02004384',
        '7JG' => 'E02004384',
        '7JH' => 'E02004384',
        '7JP' => 'E02004384',
        '7JQ' => 'E02004384',
        '7JR' => 'E02004385',
        '7JS' => 'E02004385',
        '7JT' => 'E02004385',
        '7JU' => 'E02004385',
        '7JX' => 'E02004385',
        '7JY' => 'E02004385',
        '7LA' => 'E02004385',
        '7LB' => 'E02004385',
        '7LD' => 'E02004385',
        '7LE' => 'E02004384',
        '7LF' => 'E02004384',
        '7LG' => 'E02004384',
        '7LH' => 'E02004384',
        '7LJ' => 'E02004384',
        '7LL' => 'E02004384',
        '7LN' => 'E02004384',
        '7LP' => 'E02004384',
        '7LQ' => 'E02004384',
        '7LR' => 'E02004384',
        '7LS' => 'E02004384',
        '7LT' => 'E02004384',
        '7LU' => 'E02004384',
        '7LW' => 'E02004384',
        '7LX' => 'E02004384',
        '7LY' => 'E02004384',
        '7NA' => 'E02004384',
        '7NB' => 'E02004384',
        '7ND' => 'E02004384',
        '7NE' => 'E02004384',
        '7NF' => 'E02004384',
        '7NG' => 'E02004384',
        '7NH' => 'E02004385',
        '7NJ' => 'E02004385',
        '7NL' => 'E02004385',
        '7NN' => 'E02004385',
        '7NP' => 'E02004385',
        '7NQ' => 'E02004385',
        '7NR' => 'E02004385',
        '7NS' => 'E02004385',
        '7NT' => 'E02004385',
        '7NU' => 'E02004385',
        '7NW' => 'E02004385',
        '7NX' => 'E02004385',
        '7NY' => 'E02004385',
        '7NZ' => 'E02004385',
        '7PA' => 'E02004385',
        '7PD' => 'E02004385',
        '7PE' => 'E02004385',
        '7PF' => 'E02004385',
        '7PG' => 'E02004385',
        '7PH' => 'E02004385',
        '7PJ' => 'E02004385',
        '7PL' => 'E02004385',
        '7PN' => 'E02004385',
        '7PP' => 'E02004385',
        '7PQ' => 'E02004385',
        '7PR' => 'E02004385',
        '7PS' => 'E02004385',
        '7PT' => 'E02004385',
        '7PU' => 'E02004385',
        '7PW' => 'E02004385',
        '7PX' => 'E02004385',
        '7PY' => 'E02004385',
        '7QB' => 'E02004385',
        '7QD' => 'E02004385',
        '7QE' => 'E02004385',
        '7QF' => 'E02004385',
        '7QG' => 'E02004385',
        '7QH' => 'E02004385',
        '7QJ' => 'E02004385',
        '7QL' => 'E02004385',
        '7QN' => 'E02004385',
        '7QP' => 'E02004385',
        '7QQ' => 'E02004385',
        '7QR' => 'E02004385',
        '7QS' => 'E02004385',
        '7QT' => 'E02004385',
        '7QU' => 'E02004385',
        '7QW' => 'E02004385',
        '7QX' => 'E02004385',
        '7QY' => 'E02004385',
        '7QZ' => 'E02004385',
        '7RA' => 'E02004385',
        '7RB' => 'E02004385',
        '7RD' => 'E02004385',
        '7RE' => 'E02004385',
        '7RG' => 'E02004385',
        '7RH' => 'E02004385',
        '7RJ' => 'E02004384',
        '7RL' => 'E02004385',
        '7RN' => 'E02004385',
        '7RP' => 'E02004385',
        '7RQ' => 'E02004385',
        '7RR' => 'E02004385',
        '7RS' => 'E02004385',
        '7RT' => 'E02004385',
        '7RU' => 'E02004385',
        '7RW' => 'E02004385',
        '7RX' => 'E02004385',
        '7RY' => 'E02004384',
        '7RZ' => 'E02004384',
        '7SA' => 'E02004385',
        '7SB' => 'E02004385',
        '7SD' => 'E02004385',
        '7SE' => 'E02004385',
        '7SF' => 'E02004385',
        '7SG' => 'E02004385',
        '7SH' => 'E02004385',
        '7SJ' => 'E02004385',
        '7SL' => 'E02004385',
        '7SN' => 'E02004385',
        '7SP' => 'E02004385',
        '7SQ' => 'E02004385',
        '7SR' => 'E02004385',
        '7SS' => 'E02004385',
        '7ST' => 'E02004385',
        '7SU' => 'E02004385',
        '7SW' => 'E02004385',
        '7SX' => 'E02004385',
        '7SY' => 'E02004385',
        '7SZ' => 'E02004385',
        '7TA' => 'E02004385',
        '7UA' => 'E02004385',
        '7UB' => 'E02004385',
        '7UD' => 'E02004384',
        '7UE' => 'E02004385',
        '7UF' => 'E02004385',
        '7UG' => 'E02004385',
        '7UH' => 'E02004385',
        '7UJ' => 'E02004385',
        '7UL' => 'E02004385',
        '7UN' => 'E02004385',
        '7UQ' => 'E02004385',
        '7UW' => 'E02004385',
        '8AA' => 'E02004385',
        '8AB' => 'E02004385',
        '8AD' => 'E02004385',
        '8AE' => 'E02004385',
        '8AF' => 'E02004385',
        '8AG' => 'E02004385',
        '8AH' => 'E02004385',
        '8AJ' => 'E02004380',
        '8AL' => 'E02004385',
        '8AN' => 'E02004388',
        '8AP' => 'E02004388',
        '8AQ' => 'E02004385',
        '8AR' => 'E02004380',
        '8AS' => 'E02004388',
        '8AT' => 'E02004388',
        '8AU' => 'E02004385',
        '8AW' => 'E02004385',
        '8AX' => 'E02004385',
        '8AY' => 'E02004385',
        '8AZ' => 'E02004388',
        '8BA' => 'E02004388',
        '8BB' => 'E02004385',
        '8BD' => 'E02004385',
        '8BE' => 'E02004388',
        '8BG' => 'E02004388',
        '8BH' => 'E02004388',
        '8BJ' => 'E02004385',
        '8BL' => 'E02004385',
        '8BN' => 'E02004385',
        '8BP' => 'E02004385',
        '8BQ' => 'E02004388',
        '8BS' => 'E02004385',
        '8BT' => 'E02004385',
        '8BU' => 'E02004385',
        '8BW' => 'E02004388',
        '8BX' => 'E02004385',
        '8BY' => 'E02004385',
        '8BZ' => 'E02004385',
        '8DA' => 'E02004388',
        '8DB' => 'E02004388',
        '8DD' => 'E02004388',
        '8DE' => 'E02004388',
        '8DF' => 'E02004385',
        '8DG' => 'E02004385',
        '8DH' => 'E02004385',
        '8DJ' => 'E02004385',
        '8DL' => 'E02004385',
        '8DN' => 'E02004385',
        '8DP' => 'E02004385',
        '8DQ' => 'E02004385',
        '8DR' => 'E02004385',
        '8DS' => 'E02004385',
        '8DT' => 'E02004385',
        '8DU' => 'E02004385',
        '8DW' => 'E02004385',
        '8DX' => 'E02004385',
        '8DY' => 'E02004385',
        '8DZ' => 'E02004388',
        '8EA' => 'E02004385',
        '8EB' => 'E02004385',
        '8ED' => 'E02004385',
        '8EE' => 'E02004385',
        '8EF' => 'E02004385',
        '8EG' => 'E02004385',
        '8EH' => 'E02004385',
        '8EJ' => 'E02004385',
        '8EL' => 'E02004388',
        '8EN' => 'E02004388',
        '8EP' => 'E02004388',
        '8EQ' => 'E02004385',
        '8ER' => 'E02004388',
        '8ES' => 'E02004388',
        '8ET' => 'E02004388',
        '8EU' => 'E02004388',
        '8EW' => 'E02004388',
        '8EX' => 'E02004388',
        '8EY' => 'E02004388',
        '8EZ' => 'E02004385',
        '8HA' => 'E02004388',
        '8HB' => 'E02004388',
        '8HD' => 'E02004388',
        '8HE' => 'E02004388',
        '8HF' => 'E02004388',
        '8HG' => 'E02004388',
        '8HH' => 'E02004388',
        '8HJ' => 'E02004388',
        '8HL' => 'E02004388',
        '8HN' => 'E02004388',
        '8HP' => 'E02004385',
        '8HQ' => 'E02004388',
        '8HR' => 'E02004385',
        '8HS' => 'E02004385',
        '8HT' => 'E02004385',
        '8HU' => 'E02004385',
        '8HW' => 'E02004388',
        '8HX' => 'E02004385',
        '8HY' => 'E02004385',
        '8HZ' => 'E02004385',
        '8JA' => 'E02004385',
        '8JB' => 'E02004385',
        '8JD' => 'E02004385',
        '8JE' => 'E02004385',
        '8JF' => 'E02004385',
        '8JG' => 'E02004385',
        '8JH' => 'E02004388',
        '8JJ' => 'E02004388',
        '8JL' => 'E02004385',
        '8JN' => 'E02004385',
        '8JP' => 'E02004385',
        '8JR' => 'E02004385',
        '8JS' => 'E02004385',
        '8JT' => 'E02004385',
        '8JU' => 'E02004385',
        '8JW' => 'E02004385',
        '8JX' => 'E02004385',
        '8JY' => 'E02004385',
        '8JZ' => 'E02004385',
        '8LA' => 'E02004385',
        '8LB' => 'E02004385',
        '8LD' => 'E02004385',
        '8LE' => 'E02004385',
        '8LF' => 'E02004385',
        '8LG' => 'E02004385',
        '8LH' => 'E02004385',
        '8LJ' => 'E02004385',
        '8LL' => 'E02004385',
        '8LN' => 'E02004385',
        '8LP' => 'E02004385',
        '8LQ' => 'E02004385',
        '8LR' => 'E02004388',
        '8LS' => 'E02004388',
        '8LT' => 'E02004388',
        '8LU' => 'E02004388',
        '8LW' => 'E02004385',
        '8LX' => 'E02004388',
        '8LY' => 'E02004388',
        '8LZ' => 'E02004388',
        '8NA' => 'E02004388',
        '8NB' => 'E02004388',
        '8ND' => 'E02004388',
        '8NE' => 'E02004388',
        '8NF' => 'E02004388',
        '8NG' => 'E02004388',
        '8NH' => 'E02004388',
        '8NJ' => 'E02004388',
        '8NL' => 'E02004388',
        '8NN' => 'E02004388',
        '8NP' => 'E02004388',
        '8NR' => 'E02004388',
        '8NS' => 'E02004388',
        '8NT' => 'E02004385',
        '8NU' => 'E02004385',
        '8NW' => 'E02004388',
        '8NX' => 'E02004385',
        '8PA' => 'E02004388',
        '8PB' => 'E02004388',
        '8PD' => 'E02004388',
        '8PE' => 'E02004388',
        '8PF' => 'E02004388',
        '8PG' => 'E02004388',
        '8PH' => 'E02004388',
        '8PJ' => 'E02004388',
        '8PL' => 'E02004388',
        '8PN' => 'E02004388',
        '8PP' => 'E02004388',
        '8PQ' => 'E02004388',
        '8PR' => 'E02004388',
        '8PS' => 'E02004388',
        '8PT' => 'E02004388',
        '8PU' => 'E02004388',
        '8PX' => 'E02004388',
        '8PY' => 'E02004388',
        '8QA' => 'E02004388',
        '8QB' => 'E02004388',
        '8QD' => 'E02004388',
        '8QE' => 'E02004388',
        '8QF' => 'E02004388',
        '8QG' => 'E02004388',
        '8QH' => 'E02004388',
        '8QJ' => 'E02004388',
        '8QL' => 'E02004388',
        '8QN' => 'E02004388',
        '8QP' => 'E02004388',
        '8QR' => 'E02004388',
        '8QS' => 'E02004388',
        '8QT' => 'E02004388',
        '8QU' => 'E02004388',
        '8QW' => 'E02004388',
        '8QX' => 'E02004388',
        '8RD' => 'E02004388',
        '8RE' => 'E02004388',
        '8RG' => 'E02004388',
        '8RH' => 'E02004388',
        '8RJ' => 'E02004388',
        '8RL' => 'E02004388',
        '8RN' => 'E02004388',
        '8RP' => 'E02004388',
        '8RR' => 'E02004388',
        '8RS' => 'E02004388',
        '8RT' => 'E02004388',
        '8RU' => 'E02004388',
        '8RX' => 'E02004388',
        '8RY' => 'E02004388',
        '8SA' => 'E02004388',
        '8SB' => 'E02004388',
        '8SD' => 'E02004388',
        '8SE' => 'E02004388',
        '8SG' => 'E02004388',
        '8SH' => 'E02004388',
        '8SJ' => 'E02004388',
        '8SL' => 'E02004388',
        '8SN' => 'E02004388',
        '8SP' => 'E02004388',
        '8SS' => 'E02004388',
        '8ST' => 'E02004388',
        '8SU' => 'E02004388',
        '8SX' => 'E02004388',
        '8SY' => 'E02004388',
        '8SZ' => 'E02004388',
        '8TA' => 'E02004388',
        '8TB' => 'E02004388',
        '8TD' => 'E02004388',
        '8TE' => 'E02004388',
        '8TF' => 'E02004388',
        '8TG' => 'E02004388',
        '8TH' => 'E02004388',
        '8TJ' => 'E02004388',
        '8TL' => 'E02004388',
        '8TN' => 'E02004388',
        '8TP' => 'E02004388',
        '8TQ' => 'E02004388',
        '8TR' => 'E02004388',
        '8TS' => 'E02004388',
        '8TT' => 'E02004388',
        '8TU' => 'E02004388',
        '8TW' => 'E02004388',
        '8TX' => 'E02004388',
        '8TY' => 'E02004388',
        '8UA' => 'E02004388',
        '8UB' => 'E02004388',
        '8UD' => 'E02004388',
        '8UE' => 'E02004388',
        '8UG' => 'E02004388',
        '8UH' => 'E02004388',
        '8UR' => 'E02004388',
        '8UT' => 'E02004388',
        '8UU' => 'E02004388',
        '8UX' => 'E02004388',
        '8UY' => 'E02004388',
        '8XA' => 'E02004388',
        '8XB' => 'E02004388',
        '8XE' => 'E02004388',
        '8XG' => 'E02004388',
        '8XH' => 'E02004388',
        '8XJ' => 'E02004388',
        '8XL' => 'E02004388',
        '8XN' => 'E02004388',
        '9AA' => 'E02004387',
        '9AB' => 'E02004387',
        '9AD' => 'E02004387',
        '9AE' => 'E02004380',
        '9AF' => 'E02004380',
        '9AG' => 'E02004380',
        '9AH' => 'E02004380',
        '9AJ' => 'E02004380',
        '9AL' => 'E02004380',
        '9AN' => 'E02004380',
        '9AP' => 'E02004380',
        '9AQ' => 'E02004387',
        '9AR' => 'E02004380',
        '9AS' => 'E02004380',
        '9AT' => 'E02004380',
        '9AU' => 'E02004380',
        '9AW' => 'E02004380',
        '9AX' => 'E02004380',
        '9AY' => 'E02004380',
        '9AZ' => 'E02004387',
        '9BA' => 'E02004387',
        '9BB' => 'E02004387',
        '9BD' => 'E02004387',
        '9BE' => 'E02004386',
        '9BF' => 'E02004387',
        '9BG' => 'E02004387',
        '9BH' => 'E02004387',
        '9BJ' => 'E02004387',
        '9BL' => 'E02004387',
        '9BN' => 'E02004387',
        '9BP' => 'E02004386',
        '9BQ' => 'E02004386',
        '9BS' => 'E02004386',
        '9BT' => 'E02004386',
        '9BU' => 'E02004386',
        '9BW' => 'E02004386',
        '9BX' => 'E02004386',
        '9BY' => 'E02004386',
        '9BZ' => 'E02004387',
        '9DA' => 'E02004386',
        '9DB' => 'E02004386',
        '9DD' => 'E02004386',
        '9DE' => 'E02004386',
        '9DF' => 'E02004387',
        '9DG' => 'E02004386',
        '9DH' => 'E02004386',
        '9DJ' => 'E02004386',
        '9DL' => 'E02004386',
        '9DN' => 'E02004386',
        '9DP' => 'E02004386',
        '9DQ' => 'E02004386',
        '9DR' => 'E02004386',
        '9DS' => 'E02004386',
        '9DT' => 'E02004387',
        '9DU' => 'E02004386',
        '9DW' => 'E02004386',
        '9DX' => 'E02004387',
        '9DY' => 'E02004387',
        '9DZ' => 'E02004387',
        '9EA' => 'E02004386',
        '9EB' => 'E02004386',
        '9ED' => 'E02004386',
        '9EE' => 'E02004386',
        '9EF' => 'E02004386',
        '9EG' => 'E02004386',
        '9EH' => 'E02004386',
        '9EJ' => 'E02004386',
        '9EL' => 'E02004386',
        '9EN' => 'E02004386',
        '9EP' => 'E02004386',
        '9EQ' => 'E02004387',
        '9ER' => 'E02004386',
        '9ES' => 'E02004387',
        '9ET' => 'E02004387',
        '9EU' => 'E02004387',
        '9EW' => 'E02004386',
        '9EX' => 'E02004387',
        '9EY' => 'E02004387',
        '9EZ' => 'E02004386',
        '9FA' => 'E02004387',
        '9FB' => 'E02004386',
        '9FD' => 'E02004387',
        '9GA' => 'E02004386',
        '9GB' => 'E02004386',
        '9GD' => 'E02004386',
        '9GE' => 'E02004386',
        '9GF' => 'E02004386',
        '9GG' => 'E02004386',
        '9HA' => 'E02004386',
        '9HB' => 'E02004387',
        '9HD' => 'E02004386',
        '9HE' => 'E02004386',
        '9HF' => 'E02004386',
        '9HG' => 'E02004387',
        '9HH' => 'E02004387',
        '9HJ' => 'E02004387',
        '9HL' => 'E02004386',
        '9HN' => 'E02004386',
        '9HP' => 'E02004386',
        '9HR' => 'E02004386',
        '9HS' => 'E02004386',
        '9HT' => 'E02004386',
        '9HU' => 'E02004386',
        '9HX' => 'E02004386',
        '9HY' => 'E02004386',
        '9HZ' => 'E02004387',
        '9JA' => 'E02004386',
        '9JB' => 'E02004387',
        '9JD' => 'E02004387',
        '9JE' => 'E02004387',
        '9JF' => 'E02004387',
        '9JG' => 'E02004387',
        '9JH' => 'E02004387',
        '9JJ' => 'E02004387',
        '9JL' => 'E02004387',
        '9JN' => 'E02004387',
        '9JP' => 'E02004386',
        '9JQ' => 'E02004387',
        '9JR' => 'E02004386',
        '9JS' => 'E02004386',
        '9JT' => 'E02004387',
        '9JU' => 'E02004387',
        '9JW' => 'E02004386',
        '9JX' => 'E02004386',
        '9JY' => 'E02004387',
        '9JZ' => 'E02004387',
        '9LA' => 'E02004386',
        '9LB' => 'E02004386',
        '9LD' => 'E02004386',
        '9LE' => 'E02004386',
        '9LF' => 'E02004386',
        '9LG' => 'E02004386',
        '9LH' => 'E02004386',
        '9LJ' => 'E02004386',
        '9LL' => 'E02004386',
        '9LN' => 'E02004386',
        '9LP' => 'E02004386',
        '9LQ' => 'E02004386',
        '9LR' => 'E02004386',
        '9LS' => 'E02004387',
        '9LT' => 'E02004386',
        '9LU' => 'E02004386',
        '9LW' => 'E02004386',
        '9LX' => 'E02004387',
        '9LY' => 'E02004386',
        '9LZ' => 'E02004387',
        '9NA' => 'E02004387',
        '9NB' => 'E02004387',
        '9ND' => 'E02004387',
        '9NE' => 'E02004387',
        '9NF' => 'E02004387',
        '9NG' => 'E02004387',
        '9NH' => 'E02004387',
        '9NJ' => 'E02004387',
        '9NL' => 'E02004387',
        '9NN' => 'E02004387',
        '9NP' => 'E02004387',
        '9NQ' => 'E02004387',
        '9NR' => 'E02004387',
        '9NS' => 'E02004387',
        '9NT' => 'E02004387',
        '9NU' => 'E02004387',
        '9NW' => 'E02004387',
        '9NX' => 'E02004387',
        '9NY' => 'E02004387',
        '9NZ' => 'E02004387',
        '9PA' => 'E02004387',
        '9PB' => 'E02004387',
        '9PD' => 'E02004387',
        '9PE' => 'E02004387',
        '9PF' => 'E02004387',
        '9PG' => 'E02004387',
        '9PH' => 'E02004387',
        '9PJ' => 'E02004387',
        '9PL' => 'E02004380',
        '9PN' => 'E02004387',
        '9PP' => 'E02004387',
        '9PQ' => 'E02004387',
        '9PR' => 'E02004387',
        '9PS' => 'E02004387',
        '9PT' => 'E02004387',
        '9PU' => 'E02004387',
        '9PW' => 'E02004386',
        '9PX' => 'E02004387',
        '9PZ' => 'E02004387',
        '9QA' => 'E02004386',
        '9QB' => 'E02004386',
        '9QD' => 'E02004386',
        '9QE' => 'E02004386',
        '9QF' => 'E02004386',
        '9QG' => 'E02004386',
        '9QH' => 'E02004386',
        '9QJ' => 'E02004386',
        '9QL' => 'E02004386',
        '9QN' => 'E02004387',
        '9QP' => 'E02004387',
        '9QQ' => 'E02004386',
        '9QR' => 'E02004387',
        '9QS' => 'E02004387',
        '9QT' => 'E02004387',
        '9QU' => 'E02004387',
        '9QW' => 'E02004387',
        '9QX' => 'E02004387',
        '9QY' => 'E02004387',
        '9QZ' => 'E02004387',
        '9RA' => 'E02004387',
        '9RB' => 'E02004387',
        '9RD' => 'E02004386',
        '9RE' => 'E02004387',
        '9RF' => 'E02004387',
        '9RG' => 'E02004386',
        '9RH' => 'E02004386',
        '9RJ' => 'E02004386',
        '9RL' => 'E02004386',
        '9RN' => 'E02004387',
        '9RP' => 'E02004387',
        '9RQ' => 'E02004387',
        '9RR' => 'E02004387',
        '9RS' => 'E02004387',
        '9RT' => 'E02004387',
        '9RU' => 'E02004387',
        '9RW' => 'E02004387',
        '9RX' => 'E02004387',
        '9RY' => 'E02004387',
        '9RZ' => 'E02004387',
        '9SA' => 'E02004387',
        '9SB' => 'E02004387',
        '9SD' => 'E02004387',
        '9SE' => 'E02004387',
        '9SF' => 'E02004387',
        '9SG' => 'E02004387',
        '9SH' => 'E02004387',
        '9SJ' => 'E02004387',
        '9SL' => 'E02004387',
        '9SN' => 'E02004387',
        '9SP' => 'E02004387',
        '9SQ' => 'E02004387',
        '9SR' => 'E02004387',
        '9SS' => 'E02004387',
        '9ST' => 'E02004387',
        '9SU' => 'E02004387',
        '9SW' => 'E02004387',
        '9SX' => 'E02004387',
        '9SY' => 'E02004387',
        '9SZ' => 'E02004387',
        '9TA' => 'E02004387',
        '9TB' => 'E02004387',
        '9TD' => 'E02004387',
        '9TE' => 'E02004387',
        '9TF' => 'E02004387',
        '9TG' => 'E02004387',
        '9TH' => 'E02004387',
        '9TJ' => 'E02004387',
        '9TL' => 'E02004387',
        '9TN' => 'E02004387',
        '9TP' => 'E02004387',
        '9TQ' => 'E02004387',
        '9TR' => 'E02004387',
        '9TS' => 'E02004387',
        '9TT' => 'E02004387',
        '9TU' => 'E02004387',
        '9TW' => 'E02004387',
        '9TX' => 'E02004387',
        '9TY' => 'E02004387',
        '9TZ' => 'E02004387',
        '9UA' => 'E02004387',
        '9UB' => 'E02004387',
        '9UD' => 'E02004387',
        '9UE' => 'E02004387',
        '9UF' => 'E02004387',
        '9UG' => 'E02004387',
        '9UH' => 'E02004387',
        '9UJ' => 'E02004388',
        '9UL' => 'E02004388',
        '9UP' => 'E02004387',
        '9UR' => 'E02004387',
        '9UT' => 'E02004387',
        '9UX' => 'E02004387',
        '9UY' => 'E02004387',
        '9UZ' => 'E02004387',
        '9WA' => 'E02004387',
        '9WB' => 'E02004387',
        '9WD' => 'E02004387',
        '9WE' => 'E02004387',
        '9WF' => 'E02004387',
        '9WL' => 'E02004387',
        '9WQ' => 'E02004387',
        '9WT' => 'E02004387',
        '9WY' => 'E02004387',
        '9WZ' => 'E02004387',
        '9XA' => 'E02004387',
        '9XB' => 'E02004387',
        '9XD' => 'E02004387',
        '9XE' => 'E02004387',
        '9XF' => 'E02004387',
        '9XG' => 'E02004387',
        '9XH' => 'E02004387',
        '9XJ' => 'E02004387',
        '9XL' => 'E02004387',
        '9XN' => 'E02004387',
        '9XP' => 'E02004387',
        '9XQ' => 'E02004387',
        '9XR' => 'E02004387',
        '9XS' => 'E02004387',
        '9XT' => 'E02004387',
        '9XU' => 'E02004387',
        '9XX' => 'E02004387',
        '9XY' => 'E02004387',
        '9XZ' => 'E02004387',
        '9YA' => 'E02004387',
        '9YB' => 'E02004387',
        '9YE' => 'E02004387',
        '9YF' => 'E02004387',
        '9YP' => 'E02004387',
        '9YQ' => 'E02004387',
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