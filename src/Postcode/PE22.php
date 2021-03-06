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
final class PE22
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005417',
        '0AB' => 'E02005417',
        '0AD' => 'E02005417',
        '0AE' => 'E02005417',
        '0AG' => 'E02005417',
        '0AJ' => 'E02005417',
        '0AL' => 'E02005417',
        '0AN' => 'E02005417',
        '0AP' => 'E02005417',
        '0AQ' => 'E02005417',
        '0AR' => 'E02005417',
        '0AS' => 'E02005417',
        '0AT' => 'E02005417',
        '0AU' => 'E02005417',
        '0AW' => 'E02005417',
        '0AX' => 'E02005417',
        '0AY' => 'E02005417',
        '0AZ' => 'E02005417',
        '0BA' => 'E02005417',
        '0BB' => 'E02005417',
        '0BD' => 'E02005417',
        '0BE' => 'E02005417',
        '0BG' => 'E02005417',
        '0BH' => 'E02005417',
        '0BJ' => 'E02005417',
        '0BL' => 'E02005417',
        '0BN' => 'E02005417',
        '0BT' => 'E02005417',
        '0BU' => 'E02005417',
        '0BW' => 'E02005419',
        '0BX' => 'E02005417',
        '0BY' => 'E02005417',
        '0BZ' => 'E02005417',
        '0DA' => 'E02005417',
        '0DB' => 'E02005417',
        '0DD' => 'E02005417',
        '0DE' => 'E02005417',
        '0DF' => 'E02005417',
        '0DG' => 'E02005417',
        '0DH' => 'E02005417',
        '0DJ' => 'E02005417',
        '0DL' => 'E02005417',
        '0DN' => 'E02005417',
        '0DP' => 'E02005417',
        '0DQ' => 'E02005417',
        '0DR' => 'E02005417',
        '0DS' => 'E02005417',
        '0DT' => 'E02005417',
        '0DU' => 'E02005417',
        '0DW' => 'E02005417',
        '0DX' => 'E02005417',
        '0DZ' => 'E02005417',
        '0EB' => 'E02005417',
        '0ED' => 'E02005417',
        '0EE' => 'E02005417',
        '0EF' => 'E02005417',
        '0EG' => 'E02005417',
        '0EH' => 'E02005417',
        '0EJ' => 'E02005417',
        '0EL' => 'E02005417',
        '0EQ' => 'E02005417',
        '0ER' => 'E02005417',
        '0ES' => 'E02005417',
        '0ET' => 'E02005417',
        '0EU' => 'E02005417',
        '0EX' => 'E02005417',
        '0EY' => 'E02005417',
        '0HA' => 'E02005417',
        '0HB' => 'E02005417',
        '0HD' => 'E02005417',
        '0HE' => 'E02005417',
        '0HF' => 'E02005417',
        '0HG' => 'E02005417',
        '0HH' => 'E02005417',
        '0HJ' => 'E02005417',
        '0HL' => 'E02005417',
        '0HN' => 'E02005417',
        '0HP' => 'E02005417',
        '0HQ' => 'E02005417',
        '0HR' => 'E02005417',
        '0HS' => 'E02005417',
        '0HT' => 'E02005417',
        '0HU' => 'E02005417',
        '0HW' => 'E02005417',
        '0HX' => 'E02005417',
        '0HY' => 'E02005417',
        '0HZ' => 'E02005417',
        '0JA' => 'E02005417',
        '0JB' => 'E02005417',
        '0JD' => 'E02005417',
        '0JE' => 'E02005417',
        '0JF' => 'E02005417',
        '0JG' => 'E02005417',
        '0JH' => 'E02005417',
        '0JJ' => 'E02005417',
        '0JL' => 'E02005417',
        '0JN' => 'E02005417',
        '0JP' => 'E02005417',
        '0JQ' => 'E02005417',
        '0JR' => 'E02005417',
        '0JS' => 'E02005417',
        '0JT' => 'E02005417',
        '0JU' => 'E02005417',
        '0JW' => 'E02005417',
        '0JX' => 'E02005417',
        '0JY' => 'E02005417',
        '0JZ' => 'E02005417',
        '0LA' => 'E02005417',
        '0LB' => 'E02005417',
        '0LD' => 'E02005417',
        '0LE' => 'E02005417',
        '0LF' => 'E02005417',
        '0LG' => 'E02005417',
        '0LH' => 'E02005417',
        '0LJ' => 'E02005417',
        '0LL' => 'E02005417',
        '0LN' => 'E02005417',
        '0LP' => 'E02005417',
        '0LQ' => 'E02005417',
        '0LR' => 'E02005417',
        '0LS' => 'E02005417',
        '0LT' => 'E02005417',
        '0LU' => 'E02005417',
        '0LW' => 'E02005417',
        '0LX' => 'E02005417',
        '0LY' => 'E02005417',
        '0LZ' => 'E02005417',
        '0NA' => 'E02005417',
        '0NB' => 'E02005417',
        '0ND' => 'E02005417',
        '0NE' => 'E02005417',
        '0NF' => 'E02005417',
        '0NG' => 'E02005417',
        '0NH' => 'E02005417',
        '0NJ' => 'E02006864',
        '0NL' => 'E02005419',
        '0NN' => 'E02005419',
        '0NP' => 'E02005417',
        '0NQ' => 'E02005417',
        '0NR' => 'E02005417',
        '0NS' => 'E02005417',
        '0NT' => 'E02005417',
        '0NU' => 'E02005417',
        '0NX' => 'E02005417',
        '0NY' => 'E02005417',
        '0NZ' => 'E02005417',
        '0PA' => 'E02005417',
        '0PB' => 'E02005417',
        '0PD' => 'E02005419',
        '0PE' => 'E02005417',
        '0PF' => 'E02005417',
        '0PG' => 'E02005417',
        '0PH' => 'E02005417',
        '0PJ' => 'E02005417',
        '0PL' => 'E02005417',
        '0PN' => 'E02005417',
        '0PQ' => 'E02005417',
        '0PR' => 'E02005417',
        '0PS' => 'E02005417',
        '0PT' => 'E02005417',
        '0PU' => 'E02005417',
        '0PX' => 'E02005417',
        '0PY' => 'E02005417',
        '0PZ' => 'E02005417',
        '0QA' => 'E02005417',
        '0QB' => 'E02005417',
        '0QD' => 'E02005417',
        '0QE' => 'E02005417',
        '0QJ' => 'E02005417',
        '0QL' => 'E02005417',
        '0QN' => 'E02005417',
        '0QP' => 'E02005417',
        '0QR' => 'E02005417',
        '0QS' => 'E02005417',
        '0QT' => 'E02005417',
        '0QU' => 'E02005417',
        '0QW' => 'E02005417',
        '0QX' => 'E02005417',
        '0QY' => 'E02005417',
        '0QZ' => 'E02006864',
        '0RA' => 'E02006864',
        '0RB' => 'E02006864',
        '0RF' => 'E02005441',
        '0RG' => 'E02005417',
        '0RH' => 'E02006864',
        '0RJ' => 'E02006864',
        '0RL' => 'E02006864',
        '0RN' => 'E02005441',
        '0RP' => 'E02005441',
        '0RQ' => 'E02006864',
        '0RR' => 'E02005441',
        '0RS' => 'E02005441',
        '0RT' => 'E02005441',
        '0RU' => 'E02005441',
        '0RW' => 'E02005441',
        '0RX' => 'E02005441',
        '0RY' => 'E02005441',
        '0RZ' => 'E02005441',
        '0SA' => 'E02005441',
        '0SB' => 'E02005441',
        '0SD' => 'E02005441',
        '0SE' => 'E02005441',
        '0SF' => 'E02005441',
        '0SG' => 'E02005441',
        '0SH' => 'E02005441',
        '0SJ' => 'E02005441',
        '0SL' => 'E02005441',
        '0SN' => 'E02005441',
        '0SP' => 'E02005441',
        '0SQ' => 'E02005441',
        '0SR' => 'E02005441',
        '0SS' => 'E02005441',
        '0ST' => 'E02005441',
        '0SU' => 'E02005441',
        '0SW' => 'E02005441',
        '0SX' => 'E02005441',
        '0SY' => 'E02005441',
        '0SZ' => 'E02005441',
        '0TA' => 'E02005441',
        '0TB' => 'E02005441',
        '0TD' => 'E02005441',
        '0TE' => 'E02005441',
        '0TF' => 'E02005441',
        '0TG' => 'E02005441',
        '0TJ' => 'E02005441',
        '0TL' => 'E02005441',
        '0TN' => 'E02005441',
        '0TP' => 'E02005441',
        '0TQ' => 'E02005441',
        '0TR' => 'E02005441',
        '0TS' => 'E02005441',
        '0TT' => 'E02005441',
        '0TU' => 'E02005441',
        '0TW' => 'E02005441',
        '0TX' => 'E02005419',
        '0TY' => 'E02005441',
        '0TZ' => 'E02005441',
        '0UA' => 'E02005441',
        '0UB' => 'E02005441',
        '0UD' => 'E02005441',
        '0UE' => 'E02005441',
        '0UF' => 'E02005441',
        '0UG' => 'E02005441',
        '0UH' => 'E02005441',
        '0UJ' => 'E02005441',
        '0UL' => 'E02005441',
        '0UN' => 'E02005441',
        '0UP' => 'E02005441',
        '0UQ' => 'E02005441',
        '0UR' => 'E02005417',
        '0UT' => 'E02005441',
        '0UW' => 'E02005417',
        '0XA' => 'E02005417',
        '0YA' => 'E02005441',
        '0YB' => 'E02005441',
        '0YD' => 'E02005441',
        '0YE' => 'E02005441',
        '0YF' => 'E02005441',
        '0YG' => 'E02005441',
        '0YH' => 'E02005419',
        '0YQ' => 'E02005419',
        '0YR' => 'E02005419',
        '0YT' => 'E02005419',
        '0ZG' => 'E02005419',
        '0ZP' => 'E02005419',
        '0ZT' => 'E02005419',
        '0ZW' => 'E02005419',
        '0ZZ' => 'E02005441',
        '7AA' => 'E02005441',
        '7AB' => 'E02005441',
        '7AD' => 'E02005441',
        '7AE' => 'E02005441',
        '7AF' => 'E02005441',
        '7AG' => 'E02005441',
        '7AH' => 'E02005441',
        '7AJ' => 'E02005441',
        '7AL' => 'E02005441',
        '7AN' => 'E02005441',
        '7AP' => 'E02005441',
        '7AQ' => 'E02005441',
        '7AR' => 'E02005441',
        '7AW' => 'E02005441',
        '7AX' => 'E02006864',
        '7AY' => 'E02006864',
        '7BA' => 'E02005441',
        '7BB' => 'E02005441',
        '7BD' => 'E02005441',
        '7BE' => 'E02005441',
        '7BG' => 'E02005441',
        '7BH' => 'E02005441',
        '7BJ' => 'E02005419',
        '7BL' => 'E02005441',
        '7BN' => 'E02005441',
        '7BP' => 'E02005441',
        '7BQ' => 'E02005441',
        '7BS' => 'E02005441',
        '7BT' => 'E02005441',
        '7BU' => 'E02005441',
        '7BW' => 'E02005441',
        '7BX' => 'E02005441',
        '7BY' => 'E02005441',
        '7BZ' => 'E02005441',
        '7DA' => 'E02005441',
        '7DB' => 'E02005441',
        '7DD' => 'E02005419',
        '7DH' => 'E02005441',
        '7DJ' => 'E02005441',
        '7DL' => 'E02005441',
        '7DN' => 'E02005441',
        '7DP' => 'E02005441',
        '7DR' => 'E02005441',
        '7DS' => 'E02005441',
        '7DT' => 'E02005441',
        '7DU' => 'E02005441',
        '7DX' => 'E02005441',
        '7DY' => 'E02005441',
        '7DZ' => 'E02005441',
        '7EA' => 'E02005441',
        '7EB' => 'E02005441',
        '7ED' => 'E02005441',
        '7EE' => 'E02005441',
        '7EG' => 'E02005441',
        '7EH' => 'E02005441',
        '7EJ' => 'E02005441',
        '7EL' => 'E02005441',
        '7EN' => 'E02005441',
        '7EP' => 'E02005441',
        '7EQ' => 'E02005441',
        '7ES' => 'E02005441',
        '7ET' => 'E02005441',
        '7EU' => 'E02005441',
        '7EW' => 'E02005441',
        '7EX' => 'E02005441',
        '7EY' => 'E02005419',
        '7HA' => 'E02005441',
        '7HD' => 'E02005441',
        '7HE' => 'E02005441',
        '7HF' => 'E02005441',
        '7HG' => 'E02005441',
        '7HJ' => 'E02005441',
        '7HL' => 'E02005441',
        '7HN' => 'E02005441',
        '7HP' => 'E02005441',
        '7HQ' => 'E02005441',
        '7HR' => 'E02005441',
        '7HT' => 'E02005441',
        '7HU' => 'E02005441',
        '7HW' => 'E02005441',
        '7HX' => 'E02005441',
        '7HZ' => 'E02005441',
        '7JA' => 'E02005441',
        '7JB' => 'E02005441',
        '7JD' => 'E02005441',
        '7JE' => 'E02005441',
        '7JF' => 'E02005441',
        '7JG' => 'E02005441',
        '7JH' => 'E02005441',
        '7JJ' => 'E02005441',
        '7JL' => 'E02005441',
        '7JN' => 'E02005441',
        '7JQ' => 'E02005441',
        '7JU' => 'E02005441',
        '7JW' => 'E02005441',
        '7JX' => 'E02005441',
        '7JY' => 'E02005441',
        '7JZ' => 'E02005441',
        '7LB' => 'E02005441',
        '7LD' => 'E02005441',
        '7LE' => 'E02005441',
        '7LF' => 'E02005441',
        '7LG' => 'E02005441',
        '7LN' => 'E02005441',
        '7LP' => 'E02005441',
        '7LQ' => 'E02005441',
        '7LR' => 'E02005441',
        '7LS' => 'E02005441',
        '7LT' => 'E02005441',
        '7LU' => 'E02005441',
        '7LW' => 'E02005441',
        '7NA' => 'E02005441',
        '7NB' => 'E02005441',
        '7ND' => 'E02005441',
        '7NE' => 'E02005441',
        '7NF' => 'E02005441',
        '7NG' => 'E02005441',
        '7NH' => 'E02005441',
        '7NJ' => 'E02005441',
        '7NL' => 'E02005441',
        '7NN' => 'E02005441',
        '7NQ' => 'E02005441',
        '7NU' => 'E02005441',
        '7NW' => 'E02005441',
        '7NX' => 'E02005441',
        '7NY' => 'E02005441',
        '7NZ' => 'E02005441',
        '7PA' => 'E02005441',
        '7PB' => 'E02005441',
        '7PD' => 'E02005441',
        '7PE' => 'E02005441',
        '7PF' => 'E02005441',
        '7PG' => 'E02005441',
        '7PH' => 'E02005441',
        '7PJ' => 'E02005441',
        '7PL' => 'E02005441',
        '7PN' => 'E02005441',
        '7PP' => 'E02005441',
        '7PQ' => 'E02005441',
        '7PR' => 'E02005441',
        '7PW' => 'E02005441',
        '7PY' => 'E02005441',
        '7PZ' => 'E02005441',
        '7QA' => 'E02005441',
        '7QB' => 'E02005441',
        '7QD' => 'E02005441',
        '7QE' => 'E02005441',
        '7QF' => 'E02005441',
        '7QG' => 'E02005441',
        '7QH' => 'E02005441',
        '7QJ' => 'E02005441',
        '7QL' => 'E02005441',
        '7QN' => 'E02005441',
        '7QP' => 'E02005441',
        '7QQ' => 'E02005441',
        '7QR' => 'E02005441',
        '7QS' => 'E02005441',
        '7QT' => 'E02005441',
        '7QU' => 'E02005441',
        '7QW' => 'E02005441',
        '7QX' => 'E02005441',
        '7QY' => 'E02005441',
        '7QZ' => 'E02005441',
        '7RA' => 'E02005441',
        '7RB' => 'E02005441',
        '7RD' => 'E02005441',
        '7RE' => 'E02005441',
        '7RF' => 'E02005441',
        '7RJ' => 'E02005441',
        '7RL' => 'E02005441',
        '7RN' => 'E02005441',
        '7RP' => 'E02005441',
        '7RR' => 'E02005441',
        '7RS' => 'E02005441',
        '7RT' => 'E02005441',
        '7RU' => 'E02005441',
        '7RW' => 'E02005441',
        '7RX' => 'E02005441',
        '7RY' => 'E02005441',
        '7RZ' => 'E02005441',
        '7SA' => 'E02005441',
        '7SB' => 'E02005441',
        '7SD' => 'E02005441',
        '7SE' => 'E02005441',
        '7SF' => 'E02005441',
        '7SL' => 'E02005441',
        '7SN' => 'E02005441',
        '7SP' => 'E02005441',
        '7SR' => 'E02005441',
        '7SS' => 'E02005439',
        '7ST' => 'E02005441',
        '7SU' => 'E02005439',
        '7SW' => 'E02005441',
        '7SY' => 'E02005439',
        '7SZ' => 'E02005439',
        '7TA' => 'E02005441',
        '7TB' => 'E02005441',
        '7TD' => 'E02005441',
        '7TE' => 'E02005441',
        '7UA' => 'E02005441',
        '7UB' => 'E02005419',
        '7WB' => 'E02005419',
        '7WL' => 'E02005419',
        '7WP' => 'E02005419',
        '7WQ' => 'E02005419',
        '7WZ' => 'E02005419',
        '7ZE' => 'E02005419',
        '7ZG' => 'E02005419',
        '7ZJ' => 'E02005419',
        '8AA' => 'E02005441',
        '8AB' => 'E02005441',
        '8AD' => 'E02005441',
        '8AE' => 'E02005441',
        '8AF' => 'E02005441',
        '8AG' => 'E02005441',
        '8AH' => 'E02005441',
        '8AJ' => 'E02005441',
        '8AL' => 'E02005441',
        '8AN' => 'E02005441',
        '8AP' => 'E02005441',
        '8AQ' => 'E02005441',
        '8AR' => 'E02005419',
        '8AS' => 'E02005441',
        '8AU' => 'E02005441',
        '8AW' => 'E02005441',
        '8AX' => 'E02005441',
        '8AY' => 'E02005441',
        '8AZ' => 'E02005441',
        '8BA' => 'E02005441',
        '8BB' => 'E02005441',
        '8BD' => 'E02005441',
        '8BE' => 'E02005441',
        '8BF' => 'E02005441',
        '8BG' => 'E02005441',
        '8BH' => 'E02005441',
        '8BJ' => 'E02005441',
        '8BL' => 'E02005441',
        '8BN' => 'E02005441',
        '8BP' => 'E02005441',
        '8BQ' => 'E02005441',
        '8BS' => 'E02005441',
        '8BU' => 'E02005441',
        '8BW' => 'E02005441',
        '8BX' => 'E02005441',
        '8BY' => 'E02005441',
        '8BZ' => 'E02005441',
        '8DA' => 'E02005441',
        '8DE' => 'E02005441',
        '8DG' => 'E02005441',
        '8DJ' => 'E02005441',
        '8DL' => 'E02005441',
        '8DN' => 'E02005441',
        '8DP' => 'E02005441',
        '8DQ' => 'E02005441',
        '8DR' => 'E02005441',
        '8DS' => 'E02005441',
        '8DT' => 'E02005441',
        '8DU' => 'E02005441',
        '8DW' => 'E02005441',
        '8DX' => 'E02005441',
        '8DY' => 'E02005441',
        '8DZ' => 'E02005440',
        '8EA' => 'E02005441',
        '8EE' => 'E02005441',
        '8EF' => 'E02005441',
        '8EG' => 'E02005441',
        '8EH' => 'E02005441',
        '8EJ' => 'E02005441',
        '8EL' => 'E02005441',
        '8EN' => 'E02005441',
        '8EP' => 'E02005441',
        '8EQ' => 'E02005441',
        '8ER' => 'E02005441',
        '8ES' => 'E02005441',
        '8ET' => 'E02005441',
        '8EU' => 'E02005441',
        '8EW' => 'E02005441',
        '8EX' => 'E02005441',
        '8EY' => 'E02005441',
        '8EZ' => 'E02005441',
        '8HA' => 'E02005441',
        '8HB' => 'E02005441',
        '8HD' => 'E02005441',
        '8HE' => 'E02005441',
        '8HF' => 'E02005441',
        '8HG' => 'E02005441',
        '8HH' => 'E02005441',
        '8HJ' => 'E02005441',
        '8HL' => 'E02005441',
        '8HN' => 'E02005441',
        '8HP' => 'E02005441',
        '8HQ' => 'E02005441',
        '8HR' => 'E02005441',
        '8HS' => 'E02005441',
        '8HW' => 'E02005441',
        '8JA' => 'E02005441',
        '8JB' => 'E02005441',
        '8JD' => 'E02005441',
        '8JE' => 'E02005441',
        '8JF' => 'E02005417',
        '8JG' => 'E02005441',
        '8JH' => 'E02005441',
        '8JJ' => 'E02005441',
        '8JL' => 'E02005419',
        '8JQ' => 'E02005441',
        '8JR' => 'E02005441',
        '8JT' => 'E02005441',
        '8JU' => 'E02005441',
        '8JX' => 'E02005441',
        '8JY' => 'E02005441',
        '8JZ' => 'E02005441',
        '8LA' => 'E02005441',
        '8LB' => 'E02005441',
        '8LD' => 'E02005441',
        '8LE' => 'E02005441',
        '8LF' => 'E02005441',
        '8LG' => 'E02005441',
        '8LH' => 'E02005441',
        '8LJ' => 'E02005441',
        '8LL' => 'E02005441',
        '8LQ' => 'E02005441',
        '8LS' => 'E02005441',
        '8LT' => 'E02005441',
        '8LU' => 'E02005441',
        '8LX' => 'E02005441',
        '8LY' => 'E02005441',
        '8NA' => 'E02005440',
        '8NB' => 'E02005440',
        '8ND' => 'E02005441',
        '8NE' => 'E02005440',
        '8NF' => 'E02005440',
        '8NG' => 'E02005440',
        '8NH' => 'E02005440',
        '8NJ' => 'E02005440',
        '8NL' => 'E02005440',
        '8NP' => 'E02005440',
        '8NQ' => 'E02005440',
        '8NR' => 'E02005440',
        '8NS' => 'E02005440',
        '8NT' => 'E02005440',
        '8NU' => 'E02005440',
        '8NW' => 'E02005440',
        '8NX' => 'E02005440',
        '8NY' => 'E02005440',
        '8NZ' => 'E02005440',
        '8PA' => 'E02005440',
        '8PD' => 'E02005440',
        '8PE' => 'E02005440',
        '8PF' => 'E02005440',
        '8PG' => 'E02005440',
        '8PH' => 'E02005440',
        '8PJ' => 'E02005440',
        '8PL' => 'E02005440',
        '8PN' => 'E02005440',
        '8PP' => 'E02005440',
        '8PQ' => 'E02005440',
        '8PR' => 'E02005440',
        '8PS' => 'E02005440',
        '8PT' => 'E02005440',
        '8PU' => 'E02005440',
        '8PW' => 'E02005440',
        '8QB' => 'E02005440',
        '8QD' => 'E02005440',
        '8QF' => 'E02005440',
        '8QG' => 'E02005440',
        '8QH' => 'E02005440',
        '8QJ' => 'E02005440',
        '8QL' => 'E02005440',
        '8QN' => 'E02005440',
        '8QP' => 'E02005440',
        '8QQ' => 'E02005440',
        '8QR' => 'E02005440',
        '8QS' => 'E02005440',
        '8QT' => 'E02005440',
        '8QU' => 'E02005440',
        '8QW' => 'E02005440',
        '8QX' => 'E02005440',
        '8RD' => 'E02005440',
        '8RF' => 'E02005440',
        '8RG' => 'E02005440',
        '8RH' => 'E02005440',
        '8RJ' => 'E02005440',
        '8RL' => 'E02005440',
        '8RN' => 'E02005440',
        '8RP' => 'E02005440',
        '8RQ' => 'E02005419',
        '8RR' => 'E02005440',
        '8RS' => 'E02005440',
        '8RT' => 'E02005440',
        '8RU' => 'E02005440',
        '8RW' => 'E02005440',
        '8RX' => 'E02005440',
        '8RY' => 'E02005440',
        '8SA' => 'E02005440',
        '8SD' => 'E02005440',
        '8SE' => 'E02005440',
        '8SF' => 'E02005440',
        '8SG' => 'E02005440',
        '8SQ' => 'E02005440',
        '8WA' => 'E02005440',
        '8WF' => 'E02005419',
        '8WL' => 'E02005419',
        '8WZ' => 'E02005419',
        '8ZZ' => 'E02005440',
        '9AA' => 'E02005417',
        '9AB' => 'E02005417',
        '9AD' => 'E02005417',
        '9AE' => 'E02005417',
        '9AF' => 'E02005417',
        '9AG' => 'E02005417',
        '9AH' => 'E02005417',
        '9AJ' => 'E02005417',
        '9AL' => 'E02005417',
        '9AN' => 'E02005417',
        '9AP' => 'E02005417',
        '9AQ' => 'E02005417',
        '9AR' => 'E02005417',
        '9AS' => 'E02005417',
        '9AT' => 'E02005417',
        '9AU' => 'E02005417',
        '9AW' => 'E02005417',
        '9AX' => 'E02005417',
        '9AZ' => 'E02005417',
        '9BA' => 'E02005417',
        '9BB' => 'E02005417',
        '9BD' => 'E02005417',
        '9BE' => 'E02005417',
        '9BG' => 'E02005417',
        '9BH' => 'E02005417',
        '9BJ' => 'E02005417',
        '9BL' => 'E02005417',
        '9BN' => 'E02005417',
        '9BP' => 'E02005417',
        '9BQ' => 'E02005417',
        '9BT' => 'E02005417',
        '9BU' => 'E02005417',
        '9BW' => 'E02005417',
        '9BX' => 'E02005417',
        '9BY' => 'E02005417',
        '9BZ' => 'E02005417',
        '9DA' => 'E02005417',
        '9DB' => 'E02005417',
        '9DD' => 'E02005417',
        '9DE' => 'E02005417',
        '9DF' => 'E02005417',
        '9DG' => 'E02005417',
        '9DH' => 'E02005417',
        '9DJ' => 'E02005417',
        '9DL' => 'E02005417',
        '9DP' => 'E02005417',
        '9DQ' => 'E02005417',
        '9DR' => 'E02005417',
        '9DS' => 'E02005417',
        '9DT' => 'E02005417',
        '9DU' => 'E02005417',
        '9DW' => 'E02005417',
        '9DX' => 'E02005417',
        '9DY' => 'E02005417',
        '9DZ' => 'E02005417',
        '9EA' => 'E02005417',
        '9EB' => 'E02005417',
        '9EH' => 'E02005417',
        '9EJ' => 'E02005417',
        '9EL' => 'E02005417',
        '9EP' => 'E02005417',
        '9ER' => 'E02005419',
        '9ES' => 'E02005417',
        '9ET' => 'E02005417',
        '9EU' => 'E02005417',
        '9EW' => 'E02005417',
        '9EX' => 'E02005417',
        '9EY' => 'E02005417',
        '9EZ' => 'E02005417',
        '9GA' => 'E02005417',
        '9GB' => 'E02005417',
        '9HA' => 'E02005417',
        '9HB' => 'E02005417',
        '9HD' => 'E02005417',
        '9HE' => 'E02005417',
        '9HF' => 'E02005417',
        '9HG' => 'E02005417',
        '9HH' => 'E02005417',
        '9HJ' => 'E02005417',
        '9HL' => 'E02005417',
        '9HN' => 'E02005417',
        '9HQ' => 'E02005417',
        '9HR' => 'E02005417',
        '9HS' => 'E02005417',
        '9HT' => 'E02005417',
        '9HU' => 'E02005417',
        '9HW' => 'E02005417',
        '9HX' => 'E02005417',
        '9HY' => 'E02005417',
        '9HZ' => 'E02005417',
        '9JA' => 'E02005417',
        '9JB' => 'E02005417',
        '9JD' => 'E02005417',
        '9JE' => 'E02005417',
        '9JF' => 'E02005417',
        '9JG' => 'E02005417',
        '9JH' => 'E02005417',
        '9JJ' => 'E02005417',
        '9JL' => 'E02005417',
        '9JN' => 'E02005417',
        '9JP' => 'E02005417',
        '9JQ' => 'E02005417',
        '9JR' => 'E02005417',
        '9JS' => 'E02005417',
        '9JT' => 'E02005417',
        '9JU' => 'E02005419',
        '9JW' => 'E02005417',
        '9LA' => 'E02005417',
        '9LB' => 'E02005417',
        '9LD' => 'E02005417',
        '9LE' => 'E02005417',
        '9LF' => 'E02005417',
        '9LG' => 'E02005417',
        '9LH' => 'E02005417',
        '9LJ' => 'E02005417',
        '9LL' => 'E02005417',
        '9LN' => 'E02005417',
        '9LP' => 'E02005417',
        '9LQ' => 'E02005417',
        '9LR' => 'E02005417',
        '9LS' => 'E02005417',
        '9LT' => 'E02005417',
        '9LU' => 'E02005417',
        '9LW' => 'E02005417',
        '9LX' => 'E02005417',
        '9LY' => 'E02005417',
        '9LZ' => 'E02005417',
        '9NA' => 'E02005417',
        '9NB' => 'E02005417',
        '9ND' => 'E02005417',
        '9NE' => 'E02005417',
        '9NF' => 'E02005417',
        '9NG' => 'E02005417',
        '9NH' => 'E02005417',
        '9NJ' => 'E02005417',
        '9NL' => 'E02005417',
        '9NN' => 'E02005417',
        '9NP' => 'E02005417',
        '9NQ' => 'E02005417',
        '9NR' => 'E02005417',
        '9NS' => 'E02005417',
        '9NT' => 'E02005417',
        '9NU' => 'E02005417',
        '9NW' => 'E02005417',
        '9NX' => 'E02005417',
        '9NY' => 'E02005417',
        '9NZ' => 'E02005417',
        '9PA' => 'E02005417',
        '9PB' => 'E02005417',
        '9PD' => 'E02005417',
        '9PE' => 'E02005417',
        '9PF' => 'E02005417',
        '9PG' => 'E02005417',
        '9PH' => 'E02005417',
        '9PJ' => 'E02005417',
        '9PL' => 'E02005417',
        '9PN' => 'E02005417',
        '9PP' => 'E02005417',
        '9PQ' => 'E02005417',
        '9PR' => 'E02005417',
        '9PS' => 'E02005417',
        '9PU' => 'E02005417',
        '9PW' => 'E02005417',
        '9PX' => 'E02005417',
        '9PY' => 'E02005417',
        '9PZ' => 'E02005417',
        '9QA' => 'E02005417',
        '9QB' => 'E02005417',
        '9QD' => 'E02005417',
        '9QE' => 'E02005417',
        '9QF' => 'E02005417',
        '9QG' => 'E02005419',
        '9QH' => 'E02005417',
        '9QJ' => 'E02005417',
        '9QL' => 'E02005419',
        '9QN' => 'E02005419',
        '9QP' => 'E02005417',
        '9QQ' => 'E02005417',
        '9QR' => 'E02005417',
        '9QS' => 'E02005417',
        '9QT' => 'E02005417',
        '9QU' => 'E02005417',
        '9QX' => 'E02005417',
        '9QY' => 'E02005417',
        '9QZ' => 'E02005417',
        '9RA' => 'E02005417',
        '9RB' => 'E02005417',
        '9RD' => 'E02005417',
        '9RF' => 'E02005417',
        '9RG' => 'E02005417',
        '9RH' => 'E02005417',
        '9RJ' => 'E02005417',
        '9RL' => 'E02005417',
        '9RN' => 'E02005417',
        '9RP' => 'E02005417',
        '9RQ' => 'E02005417',
        '9RR' => 'E02005417',
        '9RS' => 'E02005417',
        '9RT' => 'E02005417',
        '9RU' => 'E02005417',
        '9RW' => 'E02005417',
        '9RX' => 'E02005417',
        '9RY' => 'E02005417',
        '9RZ' => 'E02005417',
        '9SA' => 'E02005417',
        '9SB' => 'E02005417',
        '9SD' => 'E02005417',
        '9WA' => 'E02005419',
        '9ZZ' => 'E02005419',
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
