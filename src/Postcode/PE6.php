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
final class PE6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005475',
        '0AB' => 'E02003239',
        '0AD' => 'E02003239',
        '0AE' => 'E02005475',
        '0AF' => 'E02005475',
        '0AG' => 'E02005475',
        '0AH' => 'E02005475',
        '0AJ' => 'E02005475',
        '0AL' => 'E02005475',
        '0AN' => 'E02005475',
        '0AP' => 'E02005475',
        '0AQ' => 'E02005475',
        '0AR' => 'E02005475',
        '0AS' => 'E02005475',
        '0AT' => 'E02005475',
        '0AU' => 'E02005475',
        '0AW' => 'E02005475',
        '0AX' => 'E02005475',
        '0AY' => 'E02005475',
        '0AZ' => 'E02005475',
        '0BA' => 'E02005475',
        '0BB' => 'E02005475',
        '0BD' => 'E02005475',
        '0BE' => 'E02005475',
        '0BF' => 'E02005475',
        '0BG' => 'E02005475',
        '0BH' => 'E02005475',
        '0BJ' => 'E02005475',
        '0BL' => 'E02005475',
        '0BN' => 'E02005475',
        '0BP' => 'E02005475',
        '0BQ' => 'E02005475',
        '0BS' => 'E02005475',
        '0BT' => 'E02005475',
        '0BU' => 'E02005475',
        '0BW' => 'E02005475',
        '0BX' => 'E02005475',
        '0BY' => 'E02005475',
        '0BZ' => 'E02005475',
        '0DA' => 'E02005475',
        '0DB' => 'E02005475',
        '0DD' => 'E02005475',
        '0DE' => 'E02005475',
        '0DF' => 'E02005475',
        '0DG' => 'E02005475',
        '0DH' => 'E02005475',
        '0DJ' => 'E02005475',
        '0DL' => 'E02005475',
        '0DN' => 'E02005475',
        '0DP' => 'E02005475',
        '0DQ' => 'E02005475',
        '0DR' => 'E02003241',
        '0DS' => 'E02005475',
        '0DT' => 'E02005475',
        '0DW' => 'E02005475',
        '0DX' => 'E02005475',
        '0DY' => 'E02005475',
        '0DZ' => 'E02005475',
        '0EA' => 'E02005475',
        '0EB' => 'E02005475',
        '0ED' => 'E02005475',
        '0EE' => 'E02005475',
        '0EF' => 'E02005475',
        '0EG' => 'E02005475',
        '0EH' => 'E02005475',
        '0EJ' => 'E02005475',
        '0EL' => 'E02005475',
        '0EN' => 'E02005475',
        '0EP' => 'E02005475',
        '0EQ' => 'E02005475',
        '0ER' => 'E02005475',
        '0ES' => 'E02005475',
        '0ET' => 'E02005475',
        '0EU' => 'E02005475',
        '0EW' => 'E02005475',
        '0EX' => 'E02005475',
        '0EY' => 'E02005475',
        '0EZ' => 'E02005475',
        '0FA' => 'E02005475',
        '0FB' => 'E02005475',
        '0FD' => 'E02005475',
        '0FE' => 'E02005475',
        '0FF' => 'E02003241',
        '0FG' => 'E02005475',
        '0FH' => 'E02003241',
        '0FJ' => 'E02005475',
        '0FL' => 'E02005475',
        '0FR' => 'E02003241',
        '0GA' => 'E02005475',
        '0GB' => 'E02005475',
        '0GD' => 'E02005475',
        '0GE' => 'E02005475',
        '0GF' => 'E02003241',
        '0HA' => 'E02005475',
        '0HB' => 'E02005475',
        '0HD' => 'E02005475',
        '0HE' => 'E02005475',
        '0HG' => 'E02005475',
        '0HJ' => 'E02005475',
        '0HL' => 'E02005475',
        '0HN' => 'E02005475',
        '0HP' => 'E02005475',
        '0HQ' => 'E02005475',
        '0HY' => 'E02005475',
        '0JA' => 'E02005475',
        '0JB' => 'E02005475',
        '0JD' => 'E02005475',
        '0JE' => 'E02005475',
        '0JF' => 'E02005475',
        '0JG' => 'E02005475',
        '0JH' => 'E02005475',
        '0JJ' => 'E02005475',
        '0JL' => 'E02005475',
        '0JN' => 'E02005475',
        '0JP' => 'E02005475',
        '0JQ' => 'E02005475',
        '0JR' => 'E02005475',
        '0JS' => 'E02005475',
        '0JT' => 'E02005475',
        '0JU' => 'E02005475',
        '0JW' => 'E02005475',
        '0JX' => 'E02005475',
        '0JY' => 'E02005475',
        '0LA' => 'E02005475',
        '0LD' => 'E02005475',
        '0LE' => 'E02005475',
        '0LF' => 'E02005475',
        '0LG' => 'E02003239',
        '0LH' => 'E02005475',
        '0LJ' => 'E02005475',
        '0LL' => 'E02005475',
        '0LN' => 'E02005475',
        '0LP' => 'E02005475',
        '0LQ' => 'E02005475',
        '0LR' => 'E02005474',
        '0LS' => 'E02005475',
        '0LT' => 'E02005475',
        '0LU' => 'E02005475',
        '0LW' => 'E02005475',
        '0LX' => 'E02005475',
        '0LY' => 'E02005475',
        '0LZ' => 'E02005475',
        '0NA' => 'E02005475',
        '0NB' => 'E02005475',
        '0ND' => 'E02005475',
        '0NE' => 'E02005475',
        '0NF' => 'E02005474',
        '0NG' => 'E02005474',
        '0NH' => 'E02005475',
        '0NJ' => 'E02005475',
        '0NL' => 'E02005475',
        '0NN' => 'E02005475',
        '0NP' => 'E02005475',
        '0NQ' => 'E02005474',
        '0NR' => 'E02005475',
        '0NS' => 'E02005475',
        '0NT' => 'E02005475',
        '0NU' => 'E02005475',
        '0NW' => 'E02005475',
        '0PA' => 'E02003241',
        '0PB' => 'E02003241',
        '0PD' => 'E02003241',
        '0PE' => 'E02003241',
        '0PF' => 'E02003241',
        '0PG' => 'E02003241',
        '0PH' => 'E02003241',
        '0PJ' => 'E02003241',
        '0PL' => 'E02003241',
        '0PN' => 'E02003241',
        '0PP' => 'E02003241',
        '0PQ' => 'E02003241',
        '0PR' => 'E02005475',
        '0PS' => 'E02003242',
        '0PT' => 'E02005475',
        '0PU' => 'E02005475',
        '0PW' => 'E02003241',
        '0PX' => 'E02003239',
        '0PY' => 'E02003242',
        '0QA' => 'E02003241',
        '0QB' => 'E02003241',
        '0QD' => 'E02003241',
        '0QE' => 'E02003241',
        '0QF' => 'E02003241',
        '0QG' => 'E02003241',
        '0QH' => 'E02003241',
        '0QJ' => 'E02003241',
        '0QL' => 'E02003241',
        '0QN' => 'E02003241',
        '0QP' => 'E02003241',
        '0QQ' => 'E02003241',
        '0QR' => 'E02003241',
        '0QS' => 'E02003241',
        '0QT' => 'E02003241',
        '0QU' => 'E02003241',
        '0QW' => 'E02003241',
        '0QX' => 'E02003241',
        '0QY' => 'E02003241',
        '0RA' => 'E02003241',
        '0RB' => 'E02003241',
        '0RE' => 'E02003241',
        '0RF' => 'E02003241',
        '0RG' => 'E02003241',
        '0RH' => 'E02003241',
        '0RJ' => 'E02003241',
        '0RL' => 'E02003241',
        '0RP' => 'E02003241',
        '0RQ' => 'E02003241',
        '0RR' => 'E02003241',
        '0RS' => 'E02003241',
        '0RT' => 'E02003241',
        '0RW' => 'E02003241',
        '0RY' => 'E02003241',
        '0RZ' => 'E02003241',
        '0SA' => 'E02003241',
        '0SB' => 'E02003241',
        '0SD' => 'E02003241',
        '0SE' => 'E02003241',
        '0SF' => 'E02003241',
        '0SG' => 'E02003241',
        '0SH' => 'E02003241',
        '0SJ' => 'E02003241',
        '0SL' => 'E02003241',
        '0SN' => 'E02003241',
        '0SP' => 'E02003241',
        '0SQ' => 'E02003241',
        '0SR' => 'E02003241',
        '0SS' => 'E02003241',
        '0ST' => 'E02003241',
        '0SU' => 'E02003241',
        '0SW' => 'E02003241',
        '0SX' => 'E02003241',
        '0SY' => 'E02003241',
        '0SZ' => 'E02003241',
        '0TA' => 'E02003241',
        '0TB' => 'E02003241',
        '0TD' => 'E02003241',
        '0TE' => 'E02003241',
        '0TF' => 'E02003241',
        '0TG' => 'E02003241',
        '0TH' => 'E02003241',
        '0TJ' => 'E02003241',
        '0TL' => 'E02003241',
        '0TN' => 'E02003241',
        '0TP' => 'E02003241',
        '0TQ' => 'E02003241',
        '0TR' => 'E02003241',
        '0TS' => 'E02003241',
        '0TT' => 'E02003241',
        '0TU' => 'E02003241',
        '0TW' => 'E02003241',
        '0TX' => 'E02003241',
        '0TY' => 'E02003241',
        '0TZ' => 'E02003241',
        '0UA' => 'E02003241',
        '0UB' => 'E02003241',
        '0UD' => 'E02003241',
        '0UE' => 'E02003241',
        '0UG' => 'E02003241',
        '0UQ' => 'E02003242',
        '0WA' => 'E02003242',
        '0WB' => 'E02003242',
        '0WD' => 'E02003242',
        '0WH' => 'E02003241',
        '0WN' => 'E02003242',
        '0WR' => 'E02003242',
        '0WS' => 'E02003242',
        '4LQ' => 'E02005487',
        '6AA' => 'E02005488',
        '6AB' => 'E02005488',
        '6AD' => 'E02005488',
        '6AE' => 'E02003242',
        '6AF' => 'E02005488',
        '6AG' => 'E02005488',
        '6AH' => 'E02005488',
        '6AJ' => 'E02005488',
        '6AL' => 'E02005488',
        '6AN' => 'E02005488',
        '6AP' => 'E02005488',
        '6AQ' => 'E02003242',
        '6AR' => 'E02005488',
        '6AS' => 'E02005488',
        '6AT' => 'E02005488',
        '6AU' => 'E02005488',
        '6AW' => 'E02005488',
        '6AX' => 'E02005488',
        '6AY' => 'E02005488',
        '6AZ' => 'E02005488',
        '6BA' => 'E02005488',
        '6BB' => 'E02005488',
        '6BD' => 'E02005488',
        '6BE' => 'E02005488',
        '6BF' => 'E02005488',
        '6BG' => 'E02005488',
        '7AA' => 'E02003254',
        '7AB' => 'E02003254',
        '7AD' => 'E02003254',
        '7AE' => 'E02003254',
        '7AF' => 'E02003254',
        '7AG' => 'E02003254',
        '7AH' => 'E02003251',
        '7AJ' => 'E02003239',
        '7AL' => 'E02003242',
        '7AN' => 'E02003239',
        '7AP' => 'E02003240',
        '7AQ' => 'E02003242',
        '7AR' => 'E02003239',
        '7AS' => 'E02003241',
        '7AT' => 'E02003241',
        '7AW' => 'E02003237',
        '7AX' => 'E02003241',
        '7AY' => 'E02003240',
        '7AZ' => 'E02003237',
        '7BA' => 'E02003254',
        '7BB' => 'E02003254',
        '7BD' => 'E02003254',
        '7BE' => 'E02003254',
        '7BF' => 'E02003240',
        '7BG' => 'E02003254',
        '7BJ' => 'E02003241',
        '7BL' => 'E02003240',
        '7DA' => 'E02003237',
        '7DB' => 'E02003237',
        '7DD' => 'E02003237',
        '7DE' => 'E02003237',
        '7DF' => 'E02003240',
        '7DG' => 'E02003240',
        '7DH' => 'E02003240',
        '7DJ' => 'E02003240',
        '7DL' => 'E02003240',
        '7DN' => 'E02003240',
        '7DP' => 'E02003240',
        '7DQ' => 'E02003240',
        '7DR' => 'E02003240',
        '7DS' => 'E02003240',
        '7DT' => 'E02003240',
        '7DU' => 'E02003240',
        '7DW' => 'E02003240',
        '7DX' => 'E02003240',
        '7DY' => 'E02003240',
        '7DZ' => 'E02003240',
        '7EA' => 'E02003240',
        '7EB' => 'E02003242',
        '7ED' => 'E02003240',
        '7EE' => 'E02003240',
        '7EF' => 'E02003240',
        '7EG' => 'E02003240',
        '7EH' => 'E02003239',
        '7EJ' => 'E02003240',
        '7EL' => 'E02003240',
        '7EN' => 'E02003240',
        '7EP' => 'E02003239',
        '7EQ' => 'E02003240',
        '7ER' => 'E02003240',
        '7ES' => 'E02003242',
        '7ET' => 'E02003240',
        '7EU' => 'E02003240',
        '7EW' => 'E02003242',
        '7EX' => 'E02003240',
        '7EY' => 'E02003241',
        '7EZ' => 'E02003254',
        '7FA' => 'E02003239',
        '7FB' => 'E02003239',
        '7FD' => 'E02003242',
        '7FE' => 'E02003254',
        '7FF' => 'E02003242',
        '7FG' => 'E02003242',
        '7FH' => 'E02003242',
        '7FJ' => 'E02003242',
        '7FL' => 'E02003242',
        '7FP' => 'E02003237',
        '7GA' => 'E02003239',
        '7GB' => 'E02003254',
        '7GH' => 'E02003241',
        '7GR' => 'E02003239',
        '7HA' => 'E02003237',
        '7HB' => 'E02003237',
        '7HD' => 'E02003239',
        '7HF' => 'E02003239',
        '7HG' => 'E02003237',
        '7HH' => 'E02003237',
        '7HJ' => 'E02003237',
        '7HL' => 'E02003254',
        '7HN' => 'E02003237',
        '7HP' => 'E02003237',
        '7HQ' => 'E02003242',
        '7HR' => 'E02003237',
        '7HS' => 'E02003254',
        '7HT' => 'E02003254',
        '7HU' => 'E02003254',
        '7HW' => 'E02003237',
        '7HX' => 'E02003254',
        '7HY' => 'E02003254',
        '7HZ' => 'E02003254',
        '7JA' => 'E02003254',
        '7JB' => 'E02003254',
        '7JD' => 'E02003254',
        '7JE' => 'E02003254',
        '7JF' => 'E02003239',
        '7JG' => 'E02003254',
        '7JH' => 'E02003237',
        '7JJ' => 'E02003239',
        '7JL' => 'E02003237',
        '7JN' => 'E02003237',
        '7JP' => 'E02003237',
        '7JQ' => 'E02003237',
        '7JR' => 'E02003237',
        '7JS' => 'E02003237',
        '7JT' => 'E02003237',
        '7JU' => 'E02003237',
        '7JW' => 'E02003237',
        '7JX' => 'E02003237',
        '7JY' => 'E02003237',
        '7JZ' => 'E02003237',
        '7LA' => 'E02003237',
        '7LB' => 'E02003237',
        '7LD' => 'E02003237',
        '7LE' => 'E02003237',
        '7LF' => 'E02003237',
        '7LG' => 'E02003237',
        '7LH' => 'E02003237',
        '7LJ' => 'E02003237',
        '7LL' => 'E02003237',
        '7LN' => 'E02003237',
        '7LP' => 'E02003237',
        '7LQ' => 'E02003237',
        '7LR' => 'E02003237',
        '7LS' => 'E02003237',
        '7LT' => 'E02003237',
        '7LU' => 'E02003237',
        '7LW' => 'E02003237',
        '7LX' => 'E02003237',
        '7LY' => 'E02003237',
        '7LZ' => 'E02003237',
        '7NA' => 'E02003237',
        '7NB' => 'E02003237',
        '7ND' => 'E02003239',
        '7NE' => 'E02003237',
        '7NF' => 'E02003239',
        '7NG' => 'E02003239',
        '7NH' => 'E02003239',
        '7NJ' => 'E02003239',
        '7NL' => 'E02003239',
        '7NN' => 'E02003239',
        '7NP' => 'E02003239',
        '7NQ' => 'E02003239',
        '7NR' => 'E02003239',
        '7NS' => 'E02003239',
        '7NT' => 'E02003239',
        '7NU' => 'E02003237',
        '7NW' => 'E02003239',
        '7NX' => 'E02003239',
        '7NY' => 'E02003239',
        '7NZ' => 'E02003239',
        '7PA' => 'E02003239',
        '7PE' => 'E02003242',
        '7PF' => 'E02003242',
        '7PG' => 'E02003242',
        '7PH' => 'E02003239',
        '7PJ' => 'E02003239',
        '7PL' => 'E02003239',
        '7PN' => 'E02003239',
        '7PP' => 'E02003239',
        '7PQ' => 'E02003239',
        '7PR' => 'E02003239',
        '7PS' => 'E02003239',
        '7PT' => 'E02003239',
        '7PU' => 'E02003239',
        '7PW' => 'E02003241',
        '7PX' => 'E02003242',
        '7PY' => 'E02003241',
        '7PZ' => 'E02003241',
        '7QA' => 'E02003239',
        '7QB' => 'E02003239',
        '7QD' => 'E02003239',
        '7QE' => 'E02003239',
        '7QF' => 'E02003239',
        '7QG' => 'E02003239',
        '7QH' => 'E02003242',
        '7QJ' => 'E02003255',
        '7QL' => 'E02003239',
        '7QN' => 'E02003239',
        '7QP' => 'E02003239',
        '7QQ' => 'E02003239',
        '7QR' => 'E02003239',
        '7QS' => 'E02003239',
        '7QT' => 'E02003239',
        '7QU' => 'E02003239',
        '7QW' => 'E02003239',
        '7QX' => 'E02003239',
        '7QY' => 'E02003239',
        '7QZ' => 'E02003239',
        '7RA' => 'E02003239',
        '7RB' => 'E02003239',
        '7RD' => 'E02003239',
        '7RE' => 'E02003239',
        '7RF' => 'E02003239',
        '7RG' => 'E02003239',
        '7RH' => 'E02003239',
        '7RJ' => 'E02003239',
        '7RL' => 'E02003239',
        '7RN' => 'E02003239',
        '7RP' => 'E02003239',
        '7RQ' => 'E02003239',
        '7RR' => 'E02003239',
        '7RS' => 'E02003239',
        '7RT' => 'E02003239',
        '7RU' => 'E02003239',
        '7RW' => 'E02003239',
        '7RX' => 'E02003239',
        '7RY' => 'E02003239',
        '7RZ' => 'E02003239',
        '7SA' => 'E02003239',
        '7SB' => 'E02003239',
        '7SD' => 'E02003239',
        '7SE' => 'E02003239',
        '7SF' => 'E02003239',
        '7SG' => 'E02003239',
        '7SH' => 'E02003239',
        '7SJ' => 'E02003239',
        '7SL' => 'E02003241',
        '7SN' => 'E02003239',
        '7SP' => 'E02003241',
        '7SQ' => 'E02003239',
        '7SR' => 'E02003239',
        '7SS' => 'E02003239',
        '7ST' => 'E02003239',
        '7SU' => 'E02003239',
        '7SW' => 'E02003239',
        '7SX' => 'E02003241',
        '7SY' => 'E02003239',
        '7SZ' => 'E02003239',
        '7TA' => 'E02003241',
        '7TB' => 'E02003241',
        '7TD' => 'E02003241',
        '7TE' => 'E02003241',
        '7TF' => 'E02003241',
        '7TG' => 'E02003241',
        '7TH' => 'E02003241',
        '7TJ' => 'E02003241',
        '7TL' => 'E02003249',
        '7TN' => 'E02003239',
        '7TP' => 'E02003239',
        '7TQ' => 'E02003241',
        '7TR' => 'E02003239',
        '7TS' => 'E02003239',
        '7TT' => 'E02003239',
        '7TU' => 'E02003239',
        '7TW' => 'E02003239',
        '7TX' => 'E02003241',
        '7TY' => 'E02003239',
        '7TZ' => 'E02003241',
        '7UA' => 'E02003241',
        '7UB' => 'E02003241',
        '7UD' => 'E02003241',
        '7UE' => 'E02003241',
        '7UF' => 'E02003241',
        '7UG' => 'E02003241',
        '7UH' => 'E02003239',
        '7UJ' => 'E02003241',
        '7UL' => 'E02003241',
        '7UN' => 'E02003241',
        '7UP' => 'E02003241',
        '7UQ' => 'E02003241',
        '7UR' => 'E02003241',
        '7US' => 'E02003241',
        '7UT' => 'E02003241',
        '7UU' => 'E02003241',
        '7UW' => 'E02003241',
        '7UX' => 'E02003241',
        '7UY' => 'E02003241',
        '7UZ' => 'E02003241',
        '7WA' => 'E02003242',
        '7WB' => 'E02003242',
        '7WD' => 'E02003241',
        '7WE' => 'E02003241',
        '7WF' => 'E02003242',
        '7WG' => 'E02003241',
        '7WH' => 'E02003241',
        '7WJ' => 'E02003242',
        '7WL' => 'E02003241',
        '7WN' => 'E02003242',
        '7WP' => 'E02003242',
        '7WQ' => 'E02003242',
        '7WR' => 'E02003242',
        '7WS' => 'E02003242',
        '7WT' => 'E02003242',
        '7WU' => 'E02003242',
        '7WW' => 'E02003242',
        '7WX' => 'E02003242',
        '7WY' => 'E02003242',
        '7WZ' => 'E02003242',
        '7XA' => 'E02003241',
        '7XB' => 'E02003241',
        '7XD' => 'E02003241',
        '7XE' => 'E02003241',
        '7XF' => 'E02003241',
        '7XG' => 'E02003241',
        '7XH' => 'E02003241',
        '7XJ' => 'E02003241',
        '7XL' => 'E02003241',
        '7XN' => 'E02003241',
        '7XP' => 'E02003241',
        '7XQ' => 'E02003241',
        '7XR' => 'E02003241',
        '7XS' => 'E02003241',
        '7XT' => 'E02003241',
        '7XU' => 'E02003241',
        '7XW' => 'E02003241',
        '7XX' => 'E02003241',
        '7XY' => 'E02003241',
        '7XZ' => 'E02003241',
        '7YA' => 'E02003241',
        '7YB' => 'E02003241',
        '7YD' => 'E02003241',
        '7YE' => 'E02003241',
        '7YF' => 'E02003241',
        '7YG' => 'E02003241',
        '7YH' => 'E02003241',
        '7YJ' => 'E02003241',
        '7YL' => 'E02003241',
        '7YN' => 'E02003239',
        '7YP' => 'E02003239',
        '7YQ' => 'E02003241',
        '7YR' => 'E02003239',
        '7YS' => 'E02003241',
        '7YT' => 'E02003241',
        '7YU' => 'E02003241',
        '7YW' => 'E02003241',
        '7YX' => 'E02003241',
        '7YY' => 'E02003241',
        '7YZ' => 'E02003241',
        '7ZA' => 'E02003241',
        '7ZB' => 'E02003241',
        '7ZD' => 'E02003239',
        '7ZE' => 'E02003242',
        '7ZF' => 'E02003242',
        '7ZG' => 'E02003242',
        '7ZH' => 'E02003241',
        '7ZJ' => 'E02003241',
        '7ZU' => 'E02003242',
        '7ZW' => 'E02003242',
        '7ZZ' => 'E02003241',
        '8AA' => 'E02005488',
        '8AB' => 'E02005488',
        '8AD' => 'E02005488',
        '8AE' => 'E02005488',
        '8AF' => 'E02005488',
        '8AG' => 'E02005488',
        '8AH' => 'E02005488',
        '8AJ' => 'E02005488',
        '8AL' => 'E02005488',
        '8AN' => 'E02005488',
        '8AP' => 'E02005488',
        '8AQ' => 'E02005489',
        '8AR' => 'E02005488',
        '8AS' => 'E02005488',
        '8AT' => 'E02005488',
        '8AU' => 'E02005488',
        '8AW' => 'E02005488',
        '8AX' => 'E02005488',
        '8AY' => 'E02005488',
        '8AZ' => 'E02005488',
        '8BA' => 'E02005488',
        '8BB' => 'E02005488',
        '8BD' => 'E02005488',
        '8BE' => 'E02005488',
        '8BF' => 'E02005489',
        '8BG' => 'E02005488',
        '8BH' => 'E02005488',
        '8BJ' => 'E02005488',
        '8BL' => 'E02005488',
        '8BN' => 'E02005488',
        '8BP' => 'E02005488',
        '8BQ' => 'E02005488',
        '8BS' => 'E02005488',
        '8BT' => 'E02005488',
        '8BU' => 'E02005488',
        '8BW' => 'E02005488',
        '8BX' => 'E02005488',
        '8BY' => 'E02005488',
        '8BZ' => 'E02005488',
        '8DA' => 'E02005488',
        '8DB' => 'E02005488',
        '8DD' => 'E02005488',
        '8DE' => 'E02005488',
        '8DF' => 'E02005488',
        '8DG' => 'E02005488',
        '8DH' => 'E02005488',
        '8DJ' => 'E02005488',
        '8DL' => 'E02005488',
        '8DN' => 'E02005488',
        '8DP' => 'E02005488',
        '8DQ' => 'E02005488',
        '8DR' => 'E02005488',
        '8DS' => 'E02005488',
        '8DT' => 'E02005488',
        '8DU' => 'E02005488',
        '8DW' => 'E02005488',
        '8DX' => 'E02005488',
        '8DY' => 'E02005488',
        '8DZ' => 'E02005488',
        '8EA' => 'E02005488',
        '8EB' => 'E02005488',
        '8ED' => 'E02005488',
        '8EE' => 'E02005488',
        '8EF' => 'E02005489',
        '8EG' => 'E02005489',
        '8EH' => 'E02005489',
        '8EJ' => 'E02005489',
        '8EL' => 'E02005489',
        '8EN' => 'E02005489',
        '8EP' => 'E02005489',
        '8EQ' => 'E02005488',
        '8ER' => 'E02005489',
        '8ES' => 'E02005489',
        '8ET' => 'E02005489',
        '8EU' => 'E02005489',
        '8EW' => 'E02005489',
        '8EX' => 'E02005489',
        '8EY' => 'E02005489',
        '8EZ' => 'E02005489',
        '8FA' => 'E02005489',
        '8FB' => 'E02005488',
        '8FD' => 'E02005488',
        '8FE' => 'E02005488',
        '8FF' => 'E02005489',
        '8FG' => 'E02005488',
        '8FH' => 'E02005488',
        '8FJ' => 'E02005488',
        '8FL' => 'E02005488',
        '8FN' => 'E02005488',
        '8FP' => 'E02005488',
        '8FQ' => 'E02005488',
        '8FR' => 'E02005488',
        '8FS' => 'E02005488',
        '8FT' => 'E02005488',
        '8FU' => 'E02005488',
        '8FW' => 'E02005488',
        '8FX' => 'E02005488',
        '8FY' => 'E02005489',
        '8FZ' => 'E02005488',
        '8GA' => 'E02005488',
        '8GB' => 'E02005488',
        '8GD' => 'E02005488',
        '8GE' => 'E02005488',
        '8GF' => 'E02005488',
        '8GG' => 'E02005488',
        '8GH' => 'E02005488',
        '8GJ' => 'E02005488',
        '8GL' => 'E02005489',
        '8GN' => 'E02005489',
        '8GP' => 'E02005489',
        '8GQ' => 'E02005488',
        '8GT' => 'E02005488',
        '8GW' => 'E02005488',
        '8GX' => 'E02005488',
        '8GY' => 'E02005488',
        '8HA' => 'E02005489',
        '8HB' => 'E02005489',
        '8HD' => 'E02005489',
        '8HE' => 'E02005489',
        '8HF' => 'E02005489',
        '8HG' => 'E02005489',
        '8HH' => 'E02005489',
        '8HJ' => 'E02005489',
        '8HL' => 'E02005489',
        '8HN' => 'E02005489',
        '8HP' => 'E02005489',
        '8HQ' => 'E02005489',
        '8HR' => 'E02005489',
        '8HS' => 'E02005489',
        '8HT' => 'E02005488',
        '8HU' => 'E02005488',
        '8HW' => 'E02005489',
        '8HX' => 'E02005488',
        '8HY' => 'E02005488',
        '8HZ' => 'E02005488',
        '8JA' => 'E02005488',
        '8JB' => 'E02005488',
        '8JD' => 'E02005488',
        '8JE' => 'E02005488',
        '8JF' => 'E02005488',
        '8JG' => 'E02005488',
        '8JH' => 'E02005488',
        '8JJ' => 'E02005488',
        '8JL' => 'E02005489',
        '8JN' => 'E02005488',
        '8JP' => 'E02005488',
        '8JQ' => 'E02005488',
        '8JR' => 'E02005488',
        '8JS' => 'E02005488',
        '8JT' => 'E02005488',
        '8JU' => 'E02005488',
        '8JW' => 'E02005489',
        '8JX' => 'E02005488',
        '8JY' => 'E02005488',
        '8JZ' => 'E02005488',
        '8LA' => 'E02005488',
        '8LB' => 'E02005488',
        '8LD' => 'E02005488',
        '8LE' => 'E02005488',
        '8LF' => 'E02005488',
        '8LG' => 'E02005488',
        '8LH' => 'E02005488',
        '8LJ' => 'E02005488',
        '8LL' => 'E02005488',
        '8LN' => 'E02005488',
        '8LP' => 'E02005488',
        '8LQ' => 'E02005488',
        '8LR' => 'E02005488',
        '8LS' => 'E02005488',
        '8LT' => 'E02005488',
        '8LU' => 'E02005488',
        '8LW' => 'E02005488',
        '8LX' => 'E02005488',
        '8LY' => 'E02005488',
        '8LZ' => 'E02005488',
        '8NA' => 'E02005489',
        '8NB' => 'E02005489',
        '8ND' => 'E02005489',
        '8NE' => 'E02005488',
        '8NF' => 'E02005489',
        '8NG' => 'E02005489',
        '8NH' => 'E02005489',
        '8NJ' => 'E02005489',
        '8NL' => 'E02005489',
        '8NN' => 'E02005489',
        '8NP' => 'E02005489',
        '8NQ' => 'E02005489',
        '8NR' => 'E02005489',
        '8NS' => 'E02005489',
        '8NT' => 'E02005489',
        '8NU' => 'E02005489',
        '8NW' => 'E02005489',
        '8NX' => 'E02005489',
        '8NY' => 'E02005489',
        '8NZ' => 'E02005489',
        '8PA' => 'E02005488',
        '8PB' => 'E02005488',
        '8PD' => 'E02005488',
        '8PE' => 'E02005488',
        '8PF' => 'E02005488',
        '8PG' => 'E02005488',
        '8PH' => 'E02005488',
        '8PJ' => 'E02005489',
        '8PL' => 'E02005489',
        '8PN' => 'E02005489',
        '8PP' => 'E02005489',
        '8PQ' => 'E02005488',
        '8PR' => 'E02005489',
        '8PS' => 'E02005489',
        '8PT' => 'E02005489',
        '8PU' => 'E02005489',
        '8PW' => 'E02005489',
        '8PX' => 'E02005489',
        '8PY' => 'E02005489',
        '8PZ' => 'E02005489',
        '8QA' => 'E02005489',
        '8QB' => 'E02005489',
        '8QD' => 'E02005489',
        '8QE' => 'E02005489',
        '8QF' => 'E02005489',
        '8QG' => 'E02005489',
        '8QH' => 'E02005489',
        '8QJ' => 'E02005489',
        '8QL' => 'E02005489',
        '8QN' => 'E02005489',
        '8QP' => 'E02005489',
        '8QQ' => 'E02005489',
        '8QR' => 'E02005489',
        '8QS' => 'E02005489',
        '8QT' => 'E02005489',
        '8QU' => 'E02003242',
        '8QW' => 'E02005489',
        '8QX' => 'E02005489',
        '8QY' => 'E02005489',
        '8QZ' => 'E02005489',
        '8RA' => 'E02005489',
        '8RB' => 'E02005489',
        '8RD' => 'E02005489',
        '8RE' => 'E02005489',
        '8RF' => 'E02005489',
        '8RG' => 'E02005489',
        '8RH' => 'E02005489',
        '8RJ' => 'E02005489',
        '8RL' => 'E02005489',
        '8RN' => 'E02005489',
        '8RP' => 'E02005489',
        '8RQ' => 'E02005489',
        '8RR' => 'E02005489',
        '8RS' => 'E02005489',
        '8RT' => 'E02005489',
        '8RU' => 'E02005488',
        '8RW' => 'E02005469',
        '8RX' => 'E02005488',
        '8RY' => 'E02005489',
        '8RZ' => 'E02005489',
        '8SA' => 'E02005489',
        '8SB' => 'E02005489',
        '8SD' => 'E02005489',
        '8SE' => 'E02005489',
        '8SF' => 'E02005489',
        '8SG' => 'E02005489',
        '8SH' => 'E02005489',
        '8SJ' => 'E02005489',
        '8SL' => 'E02005489',
        '8SN' => 'E02005489',
        '8SP' => 'E02003242',
        '8SQ' => 'E02005489',
        '8SR' => 'E02005489',
        '8SS' => 'E02005488',
        '8ST' => 'E02005488',
        '8SU' => 'E02005488',
        '8SW' => 'E02005489',
        '8SX' => 'E02005488',
        '8SY' => 'E02005489',
        '8SZ' => 'E02005489',
        '8TA' => 'E02005489',
        '8TB' => 'E02005489',
        '8TD' => 'E02005489',
        '8TE' => 'E02005489',
        '8TF' => 'E02005489',
        '8TG' => 'E02005489',
        '8TH' => 'E02005489',
        '8TJ' => 'E02005489',
        '8TL' => 'E02005489',
        '8TN' => 'E02005489',
        '8TP' => 'E02005488',
        '8TQ' => 'E02005489',
        '8TR' => 'E02005488',
        '8TS' => 'E02003242',
        '8TT' => 'E02005489',
        '8TU' => 'E02005489',
        '8TW' => 'E02005488',
        '8TX' => 'E02005488',
        '8TY' => 'E02003242',
        '8TZ' => 'E02005489',
        '8UA' => 'E02005489',
        '8UB' => 'E02005488',
        '8UD' => 'E02005488',
        '8UE' => 'E02005488',
        '8UF' => 'E02005488',
        '8UG' => 'E02005488',
        '8UH' => 'E02005489',
        '8UJ' => 'E02005489',
        '8UL' => 'E02005489',
        '8UN' => 'E02005488',
        '8UP' => 'E02005488',
        '8UQ' => 'E02005489',
        '8WA' => 'E02003242',
        '8WJ' => 'E02003242',
        '8WX' => 'E02003242',
        '8WY' => 'E02005488',
        '8WZ' => 'E02003242',
        '8XA' => 'E02003242',
        '8XB' => 'E02003242',
        '8XD' => 'E02005488',
        '8XE' => 'E02003242',
        '8XF' => 'E02005488',
        '8XG' => 'E02003242',
        '8XH' => 'E02005488',
        '8XJ' => 'E02003242',
        '8XL' => 'E02005488',
        '8XN' => 'E02003242',
        '8XP' => 'E02005488',
        '8XQ' => 'E02003242',
        '8XR' => 'E02005488',
        '8XS' => 'E02003242',
        '8XT' => 'E02005488',
        '8XU' => 'E02003242',
        '8XW' => 'E02005488',
        '8XY' => 'E02005488',
        '8XZ' => 'E02003242',
        '8YB' => 'E02005489',
        '8YD' => 'E02005488',
        '8YE' => 'E02005488',
        '8YF' => 'E02003242',
        '8YN' => 'E02003242',
        '8YQ' => 'E02003242',
        '8YR' => 'E02005489',
        '8YU' => 'E02003242',
        '8ZA' => 'E02003242',
        '8ZF' => 'E02003242',
        '8ZH' => 'E02003242',
        '8ZL' => 'E02005489',
        '8ZP' => 'E02005489',
        '8ZR' => 'E02003242',
        '8ZS' => 'E02005489',
        '8ZT' => 'E02005489',
        '8ZU' => 'E02005489',
        '8ZW' => 'E02003242',
        '8ZZ' => 'E02005488',
        '9AA' => 'E02003237',
        '9AB' => 'E02003237',
        '9AD' => 'E02003237',
        '9AE' => 'E02003237',
        '9AF' => 'E02003237',
        '9AG' => 'E02003237',
        '9AH' => 'E02003237',
        '9AJ' => 'E02003237',
        '9AL' => 'E02003237',
        '9AN' => 'E02005487',
        '9AP' => 'E02003237',
        '9AQ' => 'E02005487',
        '9AR' => 'E02003237',
        '9AS' => 'E02003237',
        '9AT' => 'E02003237',
        '9AU' => 'E02005487',
        '9AW' => 'E02003242',
        '9AX' => 'E02005487',
        '9AY' => 'E02003237',
        '9AZ' => 'E02005487',
        '9BA' => 'E02003237',
        '9BB' => 'E02003237',
        '9BD' => 'E02003237',
        '9BE' => 'E02003237',
        '9BF' => 'E02003237',
        '9BG' => 'E02003237',
        '9BH' => 'E02003237',
        '9BJ' => 'E02003237',
        '9BL' => 'E02003237',
        '9BN' => 'E02003237',
        '9BP' => 'E02003237',
        '9BQ' => 'E02003237',
        '9BS' => 'E02003237',
        '9BT' => 'E02003237',
        '9BU' => 'E02005487',
        '9BW' => 'E02003237',
        '9BX' => 'E02003237',
        '9DA' => 'E02003237',
        '9DB' => 'E02003237',
        '9DE' => 'E02003237',
        '9DF' => 'E02003237',
        '9DG' => 'E02003237',
        '9DH' => 'E02003242',
        '9DJ' => 'E02003237',
        '9DL' => 'E02003237',
        '9DN' => 'E02003237',
        '9DP' => 'E02003237',
        '9DQ' => 'E02003237',
        '9DR' => 'E02003237',
        '9DS' => 'E02003237',
        '9DT' => 'E02003237',
        '9DU' => 'E02003237',
        '9DW' => 'E02003237',
        '9DX' => 'E02003242',
        '9EA' => 'E02003237',
        '9EB' => 'E02003237',
        '9ED' => 'E02003237',
        '9EE' => 'E02003237',
        '9EF' => 'E02003237',
        '9EG' => 'E02003237',
        '9EH' => 'E02003237',
        '9EJ' => 'E02003237',
        '9EL' => 'E02003237',
        '9EN' => 'E02003237',
        '9EP' => 'E02003237',
        '9EQ' => 'E02003237',
        '9ER' => 'E02003237',
        '9ES' => 'E02003237',
        '9ET' => 'E02003237',
        '9EU' => 'E02003237',
        '9EW' => 'E02003237',
        '9EX' => 'E02003237',
        '9EY' => 'E02003237',
        '9EZ' => 'E02003237',
        '9GP' => 'E02005488',
        '9HA' => 'E02003237',
        '9HB' => 'E02003242',
        '9HD' => 'E02003237',
        '9HE' => 'E02003237',
        '9HF' => 'E02003237',
        '9HG' => 'E02003237',
        '9HH' => 'E02005488',
        '9HJ' => 'E02003237',
        '9HL' => 'E02003242',
        '9HN' => 'E02003237',
        '9HP' => 'E02005488',
        '9HQ' => 'E02003237',
        '9HR' => 'E02005488',
        '9HS' => 'E02005488',
        '9HT' => 'E02005488',
        '9HU' => 'E02005488',
        '9HW' => 'E02003242',
        '9HX' => 'E02005488',
        '9HY' => 'E02003237',
        '9HZ' => 'E02005487',
        '9JA' => 'E02005488',
        '9JB' => 'E02005487',
        '9JD' => 'E02005488',
        '9JE' => 'E02005488',
        '9LA' => 'E02005487',
        '9LB' => 'E02005487',
        '9LD' => 'E02005487',
        '9LE' => 'E02005487',
        '9LF' => 'E02005487',
        '9LG' => 'E02005487',
        '9LH' => 'E02005487',
        '9LJ' => 'E02005487',
        '9LL' => 'E02005487',
        '9LN' => 'E02005487',
        '9LP' => 'E02005487',
        '9LQ' => 'E02005487',
        '9LR' => 'E02005487',
        '9LS' => 'E02005487',
        '9LT' => 'E02005487',
        '9LU' => 'E02005487',
        '9LW' => 'E02005487',
        '9LX' => 'E02005487',
        '9LY' => 'E02005487',
        '9LZ' => 'E02005488',
        '9NA' => 'E02005487',
        '9NB' => 'E02005487',
        '9ND' => 'E02005487',
        '9NE' => 'E02005487',
        '9NF' => 'E02005487',
        '9NG' => 'E02005487',
        '9NH' => 'E02005487',
        '9NJ' => 'E02005487',
        '9NL' => 'E02005487',
        '9NN' => 'E02005487',
        '9NP' => 'E02005487',
        '9NQ' => 'E02005487',
        '9NR' => 'E02005487',
        '9NS' => 'E02005487',
        '9NT' => 'E02005487',
        '9NU' => 'E02005487',
        '9NW' => 'E02005487',
        '9NX' => 'E02005487',
        '9NY' => 'E02005487',
        '9NZ' => 'E02005487',
        '9PA' => 'E02005487',
        '9PB' => 'E02005487',
        '9PD' => 'E02005487',
        '9PE' => 'E02005487',
        '9PF' => 'E02005487',
        '9PG' => 'E02005487',
        '9PH' => 'E02005487',
        '9PJ' => 'E02005487',
        '9PL' => 'E02005487',
        '9PN' => 'E02005487',
        '9PP' => 'E02005487',
        '9PQ' => 'E02005487',
        '9PR' => 'E02005487',
        '9PS' => 'E02005487',
        '9PT' => 'E02005487',
        '9PU' => 'E02005487',
        '9PW' => 'E02005487',
        '9PX' => 'E02005469',
        '9PY' => 'E02005487',
        '9PZ' => 'E02005487',
        '9QA' => 'E02005487',
        '9QB' => 'E02005487',
        '9QD' => 'E02005469',
        '9QE' => 'E02005488',
        '9QF' => 'E02005488',
        '9QG' => 'E02005487',
        '9QH' => 'E02005487',
        '9QJ' => 'E02005487',
        '9QL' => 'E02005487',
        '9QN' => 'E02005488',
        '9QP' => 'E02005488',
        '9QQ' => 'E02005487',
        '9QR' => 'E02005487',
        '9QS' => 'E02005487',
        '9QT' => 'E02005487',
        '9QU' => 'E02005487',
        '9QW' => 'E02005487',
        '9QX' => 'E02005487',
        '9QY' => 'E02005487',
        '9RA' => 'E02005487',
        '9RB' => 'E02005487',
        '9RD' => 'E02005487',
        '9RE' => 'E02005487',
        '9RF' => 'E02005487',
        '9RG' => 'E02005487',
        '9RH' => 'E02005487',
        '9RJ' => 'E02005487',
        '9RL' => 'E02005487',
        '9RN' => 'E02005487',
        '9RP' => 'E02003242',
        '9RQ' => 'E02005488',
        '9RR' => 'E02005487',
        '9RS' => 'E02005488',
        '9RT' => 'E02005487',
        '9RU' => 'E02005487',
        '9RW' => 'E02003242',
        '9SF' => 'E02005487',
        '9TA' => 'E02005487',
        '9TB' => 'E02005487',
        '9TD' => 'E02003242',
        '9WA' => 'E02003242',
        '9WB' => 'E02005488',
        '9WD' => 'E02003242',
        '9WJ' => 'E02003242',
        '9WQ' => 'E02005488',
        '9WS' => 'E02003242',
        '9WU' => 'E02003242',
        '9WY' => 'E02003242',
        '9WZ' => 'E02003242',
        '9XR' => 'E02003242',
        '9ZE' => 'E02005488',
        '9ZW' => 'E02003242',
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
