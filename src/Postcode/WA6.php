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
final class WA6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003877',
        '0AB' => 'E02003877',
        '0AD' => 'E02003877',
        '0AE' => 'E02003877',
        '0AF' => 'E02003794',
        '0AG' => 'E02003877',
        '0AH' => 'E02003877',
        '0AJ' => 'E02003877',
        '0AL' => 'E02003877',
        '0AN' => 'E02003877',
        '0AP' => 'E02003877',
        '0AQ' => 'E02003877',
        '0AR' => 'E02003877',
        '0AS' => 'E02003877',
        '0AT' => 'E02003877',
        '0AU' => 'E02003877',
        '0AW' => 'E02003877',
        '0AX' => 'E02003877',
        '0AY' => 'E02003877',
        '0AZ' => 'E02003877',
        '0BA' => 'E02003877',
        '0BB' => 'E02003877',
        '0BD' => 'E02003877',
        '0BE' => 'E02003877',
        '0BF' => 'E02003877',
        '0BG' => 'E02003877',
        '0BH' => 'E02003877',
        '0BJ' => 'E02003877',
        '0BL' => 'E02003877',
        '0BN' => 'E02003877',
        '0BP' => 'E02003877',
        '0BQ' => 'E02003877',
        '0BS' => 'E02003877',
        '0BT' => 'E02003877',
        '0BU' => 'E02003877',
        '0BW' => 'E02003877',
        '0BX' => 'E02003877',
        '0BY' => 'E02003877',
        '0BZ' => 'E02003877',
        '0DA' => 'E02003877',
        '0DB' => 'E02003877',
        '0DD' => 'E02003877',
        '0DE' => 'E02003877',
        '0DF' => 'E02003877',
        '0DG' => 'E02003877',
        '0DH' => 'E02003877',
        '0DJ' => 'E02003877',
        '0DL' => 'E02003877',
        '0DN' => 'E02003877',
        '0DP' => 'E02003877',
        '0DQ' => 'E02003877',
        '0DR' => 'E02003877',
        '0DS' => 'E02003877',
        '0DT' => 'E02003877',
        '0DU' => 'E02003877',
        '0DW' => 'E02003877',
        '0DX' => 'E02003877',
        '0DY' => 'E02003877',
        '0DZ' => 'E02003877',
        '0EA' => 'E02003877',
        '0EB' => 'E02003877',
        '0ED' => 'E02003877',
        '0EE' => 'E02003877',
        '0EF' => 'E02003877',
        '0EG' => 'E02003877',
        '0EH' => 'E02003877',
        '0EJ' => 'E02003794',
        '0EL' => 'E02003877',
        '0EN' => 'E02003877',
        '0EP' => 'E02003877',
        '0EQ' => 'E02003877',
        '0ER' => 'E02003877',
        '0ES' => 'E02003877',
        '0ET' => 'E02003877',
        '0EU' => 'E02003877',
        '0EW' => 'E02003877',
        '0EX' => 'E02003877',
        '0EY' => 'E02003877',
        '0EZ' => 'E02003877',
        '0FA' => 'E02003874',
        '0FB' => 'E02003874',
        '0FD' => 'E02003877',
        '0FE' => 'E02003874',
        '0FF' => 'E02003877',
        '0FG' => 'E02003877',
        '0FH' => 'E02003877',
        '0FJ' => 'E02003877',
        '0FL' => 'E02003877',
        '0FN' => 'E02003877',
        '0FP' => 'E02003877',
        '0FQ' => 'E02003877',
        '0FR' => 'E02003877',
        '0FS' => 'E02003877',
        '0FT' => 'E02003877',
        '0FU' => 'E02003877',
        '0FW' => 'E02003877',
        '0FX' => 'E02003877',
        '0FY' => 'E02003877',
        '0GB' => 'E02003877',
        '0HA' => 'E02003794',
        '0HF' => 'E02003877',
        '0HH' => 'E02003877',
        '0HJ' => 'E02003877',
        '0HR' => 'E02003877',
        '0HS' => 'E02003877',
        '0HT' => 'E02003877',
        '0HU' => 'E02003877',
        '0HX' => 'E02003877',
        '0HY' => 'E02003877',
        '0HZ' => 'E02003877',
        '0JA' => 'E02003794',
        '0JB' => 'E02003877',
        '0JD' => 'E02003877',
        '0JE' => 'E02003794',
        '0JF' => 'E02003794',
        '0JG' => 'E02003794',
        '0JH' => 'E02003794',
        '0JJ' => 'E02003794',
        '0JL' => 'E02003794',
        '0JN' => 'E02003794',
        '0JP' => 'E02003794',
        '0JQ' => 'E02003794',
        '0JR' => 'E02003794',
        '0JS' => 'E02003794',
        '0JT' => 'E02003794',
        '0JU' => 'E02003794',
        '0JW' => 'E02003794',
        '0JX' => 'E02003794',
        '0JY' => 'E02003794',
        '0JZ' => 'E02003794',
        '0LA' => 'E02003794',
        '0LG' => 'E02003877',
        '0LJ' => 'E02003877',
        '0LL' => 'E02003794',
        '0LN' => 'E02003794',
        '0LP' => 'E02003794',
        '0LQ' => 'E02003877',
        '0LR' => 'E02003794',
        '0LS' => 'E02003794',
        '0LT' => 'E02003794',
        '0LU' => 'E02003794',
        '0LW' => 'E02003794',
        '0LX' => 'E02003794',
        '0LY' => 'E02003794',
        '0LZ' => 'E02003794',
        '0NA' => 'E02003794',
        '0NB' => 'E02003794',
        '0ND' => 'E02003794',
        '0NE' => 'E02003794',
        '0NF' => 'E02003794',
        '0NG' => 'E02003794',
        '0NH' => 'E02003794',
        '0NJ' => 'E02003794',
        '0NL' => 'E02003794',
        '0NN' => 'E02003794',
        '0NP' => 'E02003794',
        '0NQ' => 'E02003794',
        '0NR' => 'E02003794',
        '0NS' => 'E02003794',
        '0NT' => 'E02003794',
        '0NU' => 'E02003794',
        '0NW' => 'E02003794',
        '0NX' => 'E02003794',
        '0NY' => 'E02003794',
        '0NZ' => 'E02003794',
        '0PA' => 'E02003877',
        '0PB' => 'E02003877',
        '0PD' => 'E02003877',
        '0PE' => 'E02003877',
        '0PF' => 'E02003877',
        '0PG' => 'E02003877',
        '0PH' => 'E02003877',
        '0PJ' => 'E02003877',
        '0PL' => 'E02003877',
        '0PN' => 'E02003877',
        '0PP' => 'E02003877',
        '0PQ' => 'E02003877',
        '0PR' => 'E02003877',
        '0PS' => 'E02003877',
        '0PT' => 'E02003877',
        '0PU' => 'E02003877',
        '0PW' => 'E02003877',
        '0PX' => 'E02003877',
        '0PY' => 'E02003877',
        '0PZ' => 'E02003877',
        '0QA' => 'E02003877',
        '0QB' => 'E02003877',
        '0QD' => 'E02003877',
        '0QE' => 'E02003877',
        '0QF' => 'E02003877',
        '0QG' => 'E02003877',
        '0QH' => 'E02003877',
        '0QJ' => 'E02003877',
        '0QL' => 'E02003877',
        '0QP' => 'E02003877',
        '0QQ' => 'E02003877',
        '0QS' => 'E02003877',
        '0QT' => 'E02003877',
        '0QU' => 'E02003877',
        '0QW' => 'E02003877',
        '0QX' => 'E02003877',
        '0QY' => 'E02003877',
        '0QZ' => 'E02003877',
        '0TZ' => 'E02003794',
        '0WA' => 'E02003874',
        '0WP' => 'E02003874',
        '0WQ' => 'E02003874',
        '0WR' => 'E02003874',
        '0WS' => 'E02003874',
        '0WT' => 'E02003874',
        '0WU' => 'E02003874',
        '0WW' => 'E02003877',
        '0WX' => 'E02003877',
        '0WY' => 'E02003874',
        '0WZ' => 'E02003877',
        '0XA' => 'E02003874',
        '1AA' => 'E02003874',
        '1AB' => 'E02003874',
        '1AE' => 'E02003874',
        '1AH' => 'E02003874',
        '1AQ' => 'E02003874',
        '1AU' => 'E02003874',
        '1AW' => 'E02003874',
        '1AY' => 'E02003874',
        '1AZ' => 'E02003874',
        '1BA' => 'E02003874',
        '1BB' => 'E02003874',
        '1BD' => 'E02003874',
        '1BE' => 'E02003874',
        '1BF' => 'E02003874',
        '1BH' => 'E02003874',
        '1BJ' => 'E02003874',
        '1BL' => 'E02003874',
        '1BN' => 'E02003874',
        '1BP' => 'E02003874',
        '1BQ' => 'E02003874',
        '1BR' => 'E02003874',
        '1BS' => 'E02003874',
        '1BT' => 'E02003874',
        '1BW' => 'E02003874',
        '1BX' => 'E02003874',
        '1BY' => 'E02003874',
        '1BZ' => 'E02003874',
        '1DA' => 'E02003874',
        '1DB' => 'E02003874',
        '1DD' => 'E02003874',
        '1DE' => 'E02003874',
        '1DF' => 'E02003874',
        '1DG' => 'E02003874',
        '6AB' => 'E02003874',
        '6AD' => 'E02003874',
        '6AE' => 'E02003874',
        '6AF' => 'E02003874',
        '6AG' => 'E02003874',
        '6AH' => 'E02003874',
        '6AJ' => 'E02003874',
        '6AL' => 'E02003874',
        '6AN' => 'E02003874',
        '6AP' => 'E02003874',
        '6AQ' => 'E02003874',
        '6AR' => 'E02003874',
        '6AS' => 'E02003874',
        '6AT' => 'E02003874',
        '6AU' => 'E02003874',
        '6AW' => 'E02003874',
        '6AX' => 'E02003874',
        '6AY' => 'E02003874',
        '6AZ' => 'E02003874',
        '6BA' => 'E02003874',
        '6BB' => 'E02003874',
        '6BD' => 'E02003874',
        '6BE' => 'E02003874',
        '6BG' => 'E02003874',
        '6BH' => 'E02003874',
        '6BJ' => 'E02003874',
        '6BL' => 'E02003874',
        '6BN' => 'E02003874',
        '6BP' => 'E02003874',
        '6BQ' => 'E02003874',
        '6BS' => 'E02003874',
        '6BT' => 'E02003874',
        '6BU' => 'E02003874',
        '6BW' => 'E02003874',
        '6BX' => 'E02003874',
        '6BY' => 'E02003874',
        '6BZ' => 'E02003874',
        '6DA' => 'E02003874',
        '6DB' => 'E02003874',
        '6DD' => 'E02003874',
        '6DE' => 'E02003874',
        '6DF' => 'E02003874',
        '6DG' => 'E02003874',
        '6DH' => 'E02003874',
        '6DJ' => 'E02003874',
        '6DL' => 'E02003874',
        '6DN' => 'E02003874',
        '6DP' => 'E02003874',
        '6DQ' => 'E02003874',
        '6DR' => 'E02003874',
        '6DS' => 'E02003874',
        '6DT' => 'E02003874',
        '6DU' => 'E02003874',
        '6DW' => 'E02003874',
        '6DX' => 'E02003874',
        '6DY' => 'E02003874',
        '6DZ' => 'E02003874',
        '6EA' => 'E02003874',
        '6EB' => 'E02003874',
        '6ED' => 'E02003874',
        '6EE' => 'E02003874',
        '6EF' => 'E02003874',
        '6EG' => 'E02003874',
        '6EH' => 'E02003877',
        '6EJ' => 'E02003877',
        '6EL' => 'E02003874',
        '6EN' => 'E02003874',
        '6EP' => 'E02003874',
        '6EQ' => 'E02003874',
        '6ER' => 'E02003874',
        '6ES' => 'E02003874',
        '6ET' => 'E02003874',
        '6EU' => 'E02003874',
        '6EW' => 'E02003874',
        '6EX' => 'E02003874',
        '6EY' => 'E02003874',
        '6EZ' => 'E02003874',
        '6FA' => 'E02003874',
        '6FB' => 'E02003874',
        '6FD' => 'E02003874',
        '6FE' => 'E02003874',
        '6FF' => 'E02003874',
        '6FG' => 'E02003874',
        '6FH' => 'E02003874',
        '6FJ' => 'E02003874',
        '6FL' => 'E02003874',
        '6FN' => 'E02003874',
        '6FP' => 'E02003874',
        '6FQ' => 'E02003874',
        '6FR' => 'E02003874',
        '6FS' => 'E02003874',
        '6FT' => 'E02003874',
        '6FU' => 'E02003874',
        '6GX' => 'E02003877',
        '6HA' => 'E02003874',
        '6HB' => 'E02003874',
        '6HD' => 'E02003874',
        '6HE' => 'E02003874',
        '6HF' => 'E02003874',
        '6HG' => 'E02003874',
        '6HH' => 'E02003874',
        '6HJ' => 'E02003874',
        '6HL' => 'E02003874',
        '6HN' => 'E02003874',
        '6HP' => 'E02003874',
        '6HQ' => 'E02003874',
        '6HR' => 'E02003874',
        '6HS' => 'E02003874',
        '6HT' => 'E02003877',
        '6HU' => 'E02003877',
        '6HW' => 'E02003874',
        '6HX' => 'E02003877',
        '6HY' => 'E02003877',
        '6HZ' => 'E02003877',
        '6JA' => 'E02003877',
        '6JB' => 'E02003877',
        '6JD' => 'E02003877',
        '6JE' => 'E02003877',
        '6JF' => 'E02003877',
        '6JG' => 'E02003877',
        '6JH' => 'E02003877',
        '6JJ' => 'E02003877',
        '6JL' => 'E02003877',
        '6JN' => 'E02003877',
        '6JP' => 'E02003877',
        '6JQ' => 'E02003877',
        '6JR' => 'E02003877',
        '6JS' => 'E02003877',
        '6JT' => 'E02003877',
        '6JU' => 'E02003877',
        '6JW' => 'E02003877',
        '6JX' => 'E02003877',
        '6JY' => 'E02003877',
        '6JZ' => 'E02003877',
        '6LA' => 'E02003874',
        '6LB' => 'E02003877',
        '6LD' => 'E02003877',
        '6LE' => 'E02003877',
        '6LF' => 'E02003877',
        '6LG' => 'E02003877',
        '6LH' => 'E02003877',
        '6LJ' => 'E02003877',
        '6LL' => 'E02003877',
        '6LN' => 'E02003877',
        '6LP' => 'E02003877',
        '6LQ' => 'E02003877',
        '6LR' => 'E02003877',
        '6LS' => 'E02003877',
        '6LT' => 'E02003877',
        '6LU' => 'E02003877',
        '6LW' => 'E02003877',
        '6LX' => 'E02003877',
        '6LY' => 'E02003877',
        '6LZ' => 'E02003877',
        '6NA' => 'E02003877',
        '6NB' => 'E02003877',
        '6ND' => 'E02003877',
        '6NE' => 'E02003877',
        '6NF' => 'E02003877',
        '6NG' => 'E02003877',
        '6NH' => 'E02003877',
        '6NJ' => 'E02003877',
        '6NL' => 'E02003877',
        '6NN' => 'E02003877',
        '6NP' => 'E02003877',
        '6NQ' => 'E02003877',
        '6NR' => 'E02003877',
        '6NS' => 'E02003877',
        '6NT' => 'E02003877',
        '6NU' => 'E02003877',
        '6NW' => 'E02003877',
        '6NX' => 'E02003877',
        '6NY' => 'E02003877',
        '6NZ' => 'E02003877',
        '6PA' => 'E02003877',
        '6PB' => 'E02003877',
        '6PD' => 'E02003877',
        '6PE' => 'E02003877',
        '6PF' => 'E02003877',
        '6PG' => 'E02003874',
        '6PH' => 'E02003874',
        '6PJ' => 'E02003874',
        '6PL' => 'E02003874',
        '6PN' => 'E02003874',
        '6PP' => 'E02003874',
        '6PQ' => 'E02003874',
        '6PR' => 'E02003874',
        '6PS' => 'E02003874',
        '6PT' => 'E02003874',
        '6PU' => 'E02003874',
        '6PW' => 'E02003874',
        '6PX' => 'E02003874',
        '6PY' => 'E02003874',
        '6PZ' => 'E02003874',
        '6QA' => 'E02003874',
        '6QB' => 'E02003874',
        '6QD' => 'E02003874',
        '6QE' => 'E02003874',
        '6QF' => 'E02003874',
        '6QG' => 'E02003874',
        '6QH' => 'E02003874',
        '6QJ' => 'E02003874',
        '6QL' => 'E02003874',
        '6QN' => 'E02003874',
        '6QP' => 'E02003874',
        '6QQ' => 'E02003874',
        '6QR' => 'E02003874',
        '6QS' => 'E02003874',
        '6QT' => 'E02003874',
        '6QU' => 'E02003874',
        '6QW' => 'E02003874',
        '6QX' => 'E02003874',
        '6QY' => 'E02003874',
        '6QZ' => 'E02003874',
        '6RA' => 'E02003874',
        '6RB' => 'E02003874',
        '6RD' => 'E02003874',
        '6RE' => 'E02003874',
        '6RF' => 'E02003874',
        '6RG' => 'E02003874',
        '6RH' => 'E02003874',
        '6RJ' => 'E02003874',
        '6RL' => 'E02003874',
        '6RN' => 'E02003874',
        '6RP' => 'E02003874',
        '6RQ' => 'E02003874',
        '6RR' => 'E02003874',
        '6RS' => 'E02003874',
        '6RT' => 'E02003874',
        '6RU' => 'E02003874',
        '6RW' => 'E02003874',
        '6RX' => 'E02003874',
        '6RY' => 'E02003874',
        '6RZ' => 'E02003874',
        '6SA' => 'E02003874',
        '6SB' => 'E02003874',
        '6SD' => 'E02003874',
        '6SE' => 'E02003874',
        '6SF' => 'E02003877',
        '6SG' => 'E02003874',
        '6SH' => 'E02003874',
        '6SJ' => 'E02003874',
        '6SL' => 'E02003874',
        '6SN' => 'E02003874',
        '6SP' => 'E02003874',
        '6SQ' => 'E02003877',
        '6SR' => 'E02003874',
        '6SS' => 'E02003874',
        '6ST' => 'E02003874',
        '6SU' => 'E02003877',
        '6SW' => 'E02003874',
        '6SX' => 'E02003877',
        '6SY' => 'E02003877',
        '6SZ' => 'E02003877',
        '6TA' => 'E02003877',
        '6TB' => 'E02003877',
        '6TD' => 'E02003877',
        '6TE' => 'E02003877',
        '6TF' => 'E02003874',
        '6TG' => 'E02003877',
        '6TH' => 'E02003877',
        '6TJ' => 'E02003877',
        '6TL' => 'E02003877',
        '6TN' => 'E02003877',
        '6TP' => 'E02003877',
        '6TQ' => 'E02003877',
        '6TR' => 'E02003877',
        '6TS' => 'E02003877',
        '6TT' => 'E02003877',
        '6TU' => 'E02003877',
        '6TW' => 'E02003877',
        '6TX' => 'E02003877',
        '6TY' => 'E02003877',
        '6TZ' => 'E02003877',
        '6UA' => 'E02003877',
        '6UB' => 'E02003877',
        '6UD' => 'E02003877',
        '6UE' => 'E02003877',
        '6UF' => 'E02003877',
        '6UG' => 'E02003877',
        '6UH' => 'E02003877',
        '6UJ' => 'E02003874',
        '6UL' => 'E02003874',
        '6UN' => 'E02003874',
        '6UP' => 'E02003874',
        '6UQ' => 'E02003877',
        '6UR' => 'E02003874',
        '6US' => 'E02003874',
        '6UT' => 'E02003874',
        '6UU' => 'E02003874',
        '6UW' => 'E02003874',
        '6UX' => 'E02003874',
        '6UY' => 'E02003874',
        '6UZ' => 'E02003874',
        '6WA' => 'E02003877',
        '6WB' => 'E02003874',
        '6WQ' => 'E02003874',
        '6WR' => 'E02003874',
        '6WS' => 'E02003874',
        '6WT' => 'E02003874',
        '6WU' => 'E02003874',
        '6WW' => 'E02003874',
        '6WX' => 'E02003874',
        '6WY' => 'E02003874',
        '6WZ' => 'E02003874',
        '6XA' => 'E02003874',
        '6XB' => 'E02003874',
        '6XD' => 'E02003874',
        '6XE' => 'E02003874',
        '6XF' => 'E02003874',
        '6XG' => 'E02003877',
        '6XH' => 'E02003877',
        '6XJ' => 'E02003877',
        '6XL' => 'E02003877',
        '6XN' => 'E02003874',
        '6XP' => 'E02003874',
        '6XQ' => 'E02003874',
        '6XR' => 'E02003874',
        '6XS' => 'E02003877',
        '6XT' => 'E02003874',
        '6XU' => 'E02003874',
        '6XW' => 'E02003874',
        '6XX' => 'E02003874',
        '6XY' => 'E02003874',
        '6XZ' => 'E02003874',
        '6YA' => 'E02003877',
        '6YB' => 'E02003877',
        '6YD' => 'E02003877',
        '6YE' => 'E02003877',
        '6YF' => 'E02003877',
        '6YZ' => 'E02003874',
        '7AB' => 'E02003874',
        '7AD' => 'E02003874',
        '7AE' => 'E02003874',
        '7AF' => 'E02003874',
        '7AG' => 'E02003874',
        '7AH' => 'E02003874',
        '7AJ' => 'E02003874',
        '7AL' => 'E02003874',
        '7AN' => 'E02003874',
        '7AP' => 'E02003874',
        '7AQ' => 'E02003874',
        '7AR' => 'E02003874',
        '7AS' => 'E02003874',
        '7AT' => 'E02003874',
        '7AU' => 'E02003874',
        '7AW' => 'E02003874',
        '7AX' => 'E02003874',
        '7AY' => 'E02003874',
        '7AZ' => 'E02003874',
        '7BA' => 'E02003874',
        '7BB' => 'E02003874',
        '7BD' => 'E02003874',
        '7BE' => 'E02003874',
        '7BF' => 'E02003874',
        '7BG' => 'E02003874',
        '7BH' => 'E02003874',
        '7BJ' => 'E02003874',
        '7BL' => 'E02003874',
        '7BN' => 'E02003874',
        '7BP' => 'E02003874',
        '7BQ' => 'E02003874',
        '7BS' => 'E02003874',
        '7BT' => 'E02003874',
        '7BU' => 'E02003874',
        '7BW' => 'E02003874',
        '7BX' => 'E02003874',
        '7BY' => 'E02003874',
        '7BZ' => 'E02003874',
        '7DA' => 'E02003874',
        '7DB' => 'E02003874',
        '7DD' => 'E02003874',
        '7DE' => 'E02003874',
        '7DF' => 'E02003874',
        '7DG' => 'E02003874',
        '7DH' => 'E02003874',
        '7DJ' => 'E02003874',
        '7DL' => 'E02003874',
        '7DN' => 'E02003874',
        '7DP' => 'E02003874',
        '7DR' => 'E02003874',
        '7DS' => 'E02003874',
        '7DT' => 'E02003874',
        '7DU' => 'E02003874',
        '7DW' => 'E02003874',
        '7DX' => 'E02003874',
        '7DY' => 'E02003874',
        '7EB' => 'E02003874',
        '7EE' => 'E02003874',
        '7EH' => 'E02003877',
        '7EJ' => 'E02003877',
        '7EL' => 'E02003874',
        '7EN' => 'E02003874',
        '7EP' => 'E02003874',
        '7EQ' => 'E02003877',
        '7ER' => 'E02003874',
        '7ES' => 'E02003874',
        '7ET' => 'E02003874',
        '7EU' => 'E02003877',
        '7EW' => 'E02003874',
        '7EX' => 'E02003877',
        '7EY' => 'E02003877',
        '7EZ' => 'E02003874',
        '7FA' => 'E02003874',
        '7FB' => 'E02003874',
        '7FD' => 'E02003874',
        '7FE' => 'E02003874',
        '7FF' => 'E02003874',
        '7FG' => 'E02003874',
        '7FH' => 'E02003874',
        '7FJ' => 'E02003874',
        '7FZ' => 'E02003874',
        '7GA' => 'E02003874',
        '7GB' => 'E02003874',
        '7GY' => 'E02003874',
        '7HA' => 'E02003874',
        '7HB' => 'E02003874',
        '7HD' => 'E02003874',
        '7HE' => 'E02003874',
        '7HF' => 'E02003874',
        '7HG' => 'E02003874',
        '7HH' => 'E02003874',
        '7HJ' => 'E02003874',
        '7HL' => 'E02003874',
        '7HN' => 'E02003874',
        '7HP' => 'E02003874',
        '7HQ' => 'E02003874',
        '7HR' => 'E02003874',
        '7HS' => 'E02003874',
        '7HT' => 'E02003874',
        '7HU' => 'E02003874',
        '7HW' => 'E02003874',
        '7HX' => 'E02003874',
        '7HY' => 'E02003874',
        '7HZ' => 'E02003874',
        '7JA' => 'E02003875',
        '7JB' => 'E02003875',
        '7JD' => 'E02003874',
        '7JE' => 'E02003874',
        '7JF' => 'E02003874',
        '7JG' => 'E02003874',
        '7JH' => 'E02003875',
        '7JJ' => 'E02003874',
        '7JL' => 'E02003874',
        '7JN' => 'E02003874',
        '7JP' => 'E02003874',
        '7JQ' => 'E02003874',
        '7JR' => 'E02003874',
        '7JS' => 'E02003875',
        '7JT' => 'E02003875',
        '7JY' => 'E02003874',
        '7LA' => 'E02003874',
        '7LB' => 'E02003874',
        '7LD' => 'E02003874',
        '7LE' => 'E02003874',
        '7LF' => 'E02003874',
        '7LG' => 'E02003874',
        '7LH' => 'E02003874',
        '7LJ' => 'E02003874',
        '7LL' => 'E02003874',
        '7LN' => 'E02003874',
        '7LP' => 'E02003874',
        '7LQ' => 'E02003874',
        '7LR' => 'E02003874',
        '7LS' => 'E02003874',
        '7LT' => 'E02003874',
        '7LU' => 'E02003874',
        '7LW' => 'E02003874',
        '7LX' => 'E02003874',
        '7LY' => 'E02003874',
        '7LZ' => 'E02003874',
        '7NA' => 'E02003874',
        '7NB' => 'E02003874',
        '7ND' => 'E02003874',
        '7NE' => 'E02003874',
        '7NF' => 'E02003874',
        '7NG' => 'E02003874',
        '7NH' => 'E02003874',
        '7NJ' => 'E02003874',
        '7NL' => 'E02003874',
        '7NN' => 'E02003874',
        '7NP' => 'E02003874',
        '7NQ' => 'E02003874',
        '7NR' => 'E02003874',
        '7NS' => 'E02003874',
        '7NU' => 'E02003874',
        '7NW' => 'E02003874',
        '7NX' => 'E02003874',
        '7NY' => 'E02003874',
        '7NZ' => 'E02003874',
        '7PA' => 'E02003874',
        '7PB' => 'E02003874',
        '7PD' => 'E02003874',
        '7PE' => 'E02003874',
        '7PF' => 'E02003874',
        '7PG' => 'E02003874',
        '7PH' => 'E02003874',
        '7PJ' => 'E02003874',
        '7PL' => 'E02003874',
        '7PN' => 'E02003874',
        '7PP' => 'E02003874',
        '7PQ' => 'E02003874',
        '7PR' => 'E02003874',
        '7PS' => 'E02003874',
        '7PT' => 'E02003874',
        '7PU' => 'E02003874',
        '7PW' => 'E02003874',
        '7PX' => 'E02003874',
        '7PY' => 'E02003874',
        '7PZ' => 'E02003874',
        '7QA' => 'E02003874',
        '7QB' => 'E02003874',
        '7QD' => 'E02003874',
        '7QE' => 'E02003874',
        '7QG' => 'E02003874',
        '7QH' => 'E02003874',
        '7QJ' => 'E02003874',
        '7QL' => 'E02003874',
        '7QN' => 'E02003874',
        '7QP' => 'E02003874',
        '7QQ' => 'E02003874',
        '7QR' => 'E02003874',
        '7QS' => 'E02003874',
        '7QT' => 'E02003874',
        '7QU' => 'E02003874',
        '7QW' => 'E02003874',
        '7QX' => 'E02003874',
        '7QY' => 'E02003874',
        '7QZ' => 'E02003874',
        '7RA' => 'E02003874',
        '7RB' => 'E02003874',
        '7RD' => 'E02003874',
        '7RE' => 'E02003874',
        '7RF' => 'E02003874',
        '7RG' => 'E02003874',
        '7RH' => 'E02003874',
        '7RJ' => 'E02003874',
        '7RL' => 'E02003874',
        '7RN' => 'E02003874',
        '7RQ' => 'E02003874',
        '7RT' => 'E02003874',
        '7RU' => 'E02003874',
        '7RX' => 'E02003874',
        '7RY' => 'E02003874',
        '7RZ' => 'E02003874',
        '7SA' => 'E02003874',
        '7SB' => 'E02003874',
        '7SN' => 'E02003874',
        '7SW' => 'E02003875',
        '7WA' => 'E02003874',
        '7WB' => 'E02003874',
        '7WD' => 'E02003874',
        '7WP' => 'E02003874',
        '7WQ' => 'E02003874',
        '7WR' => 'E02003874',
        '7WS' => 'E02003874',
        '7WT' => 'E02003874',
        '7WU' => 'E02003874',
        '7WW' => 'E02003874',
        '7WX' => 'E02003874',
        '7WY' => 'E02003874',
        '7WZ' => 'E02003874',
        '7YY' => 'E02003874',
        '7YZ' => 'E02003874',
        '8AB' => 'E02003877',
        '8AD' => 'E02003877',
        '8AE' => 'E02003877',
        '8AF' => 'E02003877',
        '8AG' => 'E02003877',
        '8AH' => 'E02003877',
        '8AJ' => 'E02003877',
        '8AL' => 'E02003877',
        '8AN' => 'E02003877',
        '8AP' => 'E02003877',
        '8AQ' => 'E02003877',
        '8AR' => 'E02003877',
        '8AS' => 'E02003877',
        '8AT' => 'E02003877',
        '8AU' => 'E02003877',
        '8AW' => 'E02003877',
        '8AX' => 'E02003877',
        '8AY' => 'E02003877',
        '8AZ' => 'E02003877',
        '8BA' => 'E02003877',
        '8BB' => 'E02003877',
        '8BD' => 'E02003877',
        '8BE' => 'E02003877',
        '8BF' => 'E02003875',
        '8BG' => 'E02003877',
        '8BH' => 'E02003877',
        '8BJ' => 'E02003877',
        '8BL' => 'E02003877',
        '8BN' => 'E02003877',
        '8BP' => 'E02003877',
        '8BQ' => 'E02003877',
        '8BS' => 'E02003877',
        '8BT' => 'E02003877',
        '8BU' => 'E02003877',
        '8BW' => 'E02003877',
        '8BX' => 'E02003877',
        '8BY' => 'E02003877',
        '8BZ' => 'E02003877',
        '8DA' => 'E02003877',
        '8DB' => 'E02003877',
        '8DD' => 'E02003877',
        '8DE' => 'E02003877',
        '8DF' => 'E02003877',
        '8DG' => 'E02003877',
        '8DJ' => 'E02003877',
        '8DN' => 'E02003874',
        '8DQ' => 'E02003877',
        '8DR' => 'E02003874',
        '8DS' => 'E02003877',
        '8DT' => 'E02003877',
        '8DU' => 'E02003877',
        '8DX' => 'E02003877',
        '8DY' => 'E02003877',
        '8DZ' => 'E02003877',
        '8EA' => 'E02003877',
        '8EB' => 'E02003877',
        '8ED' => 'E02003877',
        '8EE' => 'E02003877',
        '8EF' => 'E02003877',
        '8EG' => 'E02003877',
        '8EH' => 'E02003877',
        '8EJ' => 'E02003877',
        '8EL' => 'E02003877',
        '8EN' => 'E02003877',
        '8EP' => 'E02003877',
        '8EQ' => 'E02003877',
        '8ER' => 'E02003877',
        '8ES' => 'E02003877',
        '8ET' => 'E02003877',
        '8EU' => 'E02003877',
        '8EW' => 'E02003877',
        '8EX' => 'E02003877',
        '8EY' => 'E02003877',
        '8EZ' => 'E02003877',
        '8FA' => 'E02003877',
        '8FB' => 'E02003877',
        '8FD' => 'E02003874',
        '8FE' => 'E02003877',
        '8FF' => 'E02003877',
        '8FG' => 'E02003877',
        '8FH' => 'E02003874',
        '8FJ' => 'E02003874',
        '8FL' => 'E02003874',
        '8FN' => 'E02003874',
        '8FQ' => 'E02003877',
        '8GZ' => 'E02003874',
        '8HA' => 'E02003877',
        '8HB' => 'E02003877',
        '8HD' => 'E02003877',
        '8HE' => 'E02003877',
        '8HF' => 'E02003877',
        '8HG' => 'E02003877',
        '8HH' => 'E02003877',
        '8HJ' => 'E02003877',
        '8HL' => 'E02003877',
        '8HN' => 'E02003877',
        '8HP' => 'E02003877',
        '8HQ' => 'E02003877',
        '8HR' => 'E02003875',
        '8HS' => 'E02003875',
        '8HT' => 'E02003875',
        '8HU' => 'E02003875',
        '8HW' => 'E02003877',
        '8HX' => 'E02003877',
        '8HY' => 'E02003875',
        '8HZ' => 'E02003877',
        '8JA' => 'E02003877',
        '8JB' => 'E02003877',
        '8JD' => 'E02003877',
        '8JE' => 'E02003874',
        '8JH' => 'E02003877',
        '8JJ' => 'E02003877',
        '8JL' => 'E02003877',
        '8JN' => 'E02003877',
        '8JP' => 'E02003877',
        '8JQ' => 'E02003877',
        '8JR' => 'E02003877',
        '8JS' => 'E02003877',
        '8JT' => 'E02003877',
        '8JU' => 'E02003877',
        '8JW' => 'E02003877',
        '8JX' => 'E02003877',
        '8JY' => 'E02003877',
        '8JZ' => 'E02003877',
        '8LA' => 'E02003877',
        '8LB' => 'E02003877',
        '8LD' => 'E02003877',
        '8LE' => 'E02003877',
        '8LF' => 'E02003877',
        '8LG' => 'E02003874',
        '8LH' => 'E02003884',
        '8LJ' => 'E02003877',
        '8LL' => 'E02003877',
        '8LN' => 'E02003877',
        '8LP' => 'E02003877',
        '8LQ' => 'E02003884',
        '8LR' => 'E02003877',
        '8LS' => 'E02003877',
        '8LT' => 'E02003877',
        '8LU' => 'E02003874',
        '8LW' => 'E02003877',
        '8NA' => 'E02003877',
        '8NB' => 'E02003877',
        '8ND' => 'E02003877',
        '8NE' => 'E02003877',
        '8NF' => 'E02003877',
        '8NG' => 'E02003877',
        '8NH' => 'E02003877',
        '8NJ' => 'E02003877',
        '8NL' => 'E02003877',
        '8NN' => 'E02003877',
        '8NP' => 'E02003877',
        '8NQ' => 'E02003877',
        '8NR' => 'E02003877',
        '8NS' => 'E02003877',
        '8NT' => 'E02003877',
        '8NU' => 'E02003877',
        '8NW' => 'E02003877',
        '8NX' => 'E02003877',
        '8NY' => 'E02003877',
        '8NZ' => 'E02003875',
        '8PA' => 'E02003875',
        '8PD' => 'E02003875',
        '8PE' => 'E02003877',
        '8PF' => 'E02003875',
        '8PG' => 'E02003875',
        '8PH' => 'E02003877',
        '8PJ' => 'E02003877',
        '8PL' => 'E02003877',
        '8PN' => 'E02003877',
        '8PQ' => 'E02003877',
        '8PR' => 'E02003877',
        '8PW' => 'E02003877',
        '8PX' => 'E02003877',
        '8PY' => 'E02003877',
        '8PZ' => 'E02003877',
        '8WS' => 'E02003874',
        '8WT' => 'E02003874',
        '8WU' => 'E02003874',
        '8WW' => 'E02003874',
        '8WX' => 'E02003874',
        '8WY' => 'E02003877',
        '8WZ' => 'E02003874',
        '8XA' => 'E02003874',
        '8XB' => 'E02003874',
        '9AB' => 'E02003877',
        '9AD' => 'E02003877',
        '9AE' => 'E02003877',
        '9AF' => 'E02003877',
        '9AG' => 'E02003877',
        '9AH' => 'E02003877',
        '9AJ' => 'E02003877',
        '9AL' => 'E02003877',
        '9AN' => 'E02003877',
        '9AP' => 'E02003877',
        '9AQ' => 'E02003877',
        '9AR' => 'E02003877',
        '9AS' => 'E02003877',
        '9AT' => 'E02003877',
        '9AU' => 'E02003877',
        '9AW' => 'E02003877',
        '9AX' => 'E02003877',
        '9AY' => 'E02003877',
        '9BA' => 'E02003877',
        '9BB' => 'E02003877',
        '9BD' => 'E02003877',
        '9BE' => 'E02003877',
        '9BG' => 'E02003877',
        '9BJ' => 'E02003877',
        '9BL' => 'E02003877',
        '9BN' => 'E02003877',
        '9BP' => 'E02003877',
        '9BQ' => 'E02003877',
        '9BS' => 'E02003877',
        '9BT' => 'E02003877',
        '9BU' => 'E02003877',
        '9BW' => 'E02003877',
        '9BX' => 'E02003877',
        '9BY' => 'E02003877',
        '9BZ' => 'E02003877',
        '9DA' => 'E02003877',
        '9DB' => 'E02003877',
        '9DD' => 'E02003877',
        '9DE' => 'E02003877',
        '9DF' => 'E02003877',
        '9DG' => 'E02003877',
        '9DH' => 'E02003877',
        '9DJ' => 'E02003877',
        '9DL' => 'E02003877',
        '9DN' => 'E02003877',
        '9DP' => 'E02003877',
        '9DQ' => 'E02003877',
        '9DR' => 'E02003877',
        '9DS' => 'E02003877',
        '9DT' => 'E02003877',
        '9DU' => 'E02003877',
        '9DW' => 'E02003877',
        '9DX' => 'E02003877',
        '9DY' => 'E02003877',
        '9DZ' => 'E02003877',
        '9EA' => 'E02003877',
        '9EB' => 'E02003877',
        '9ED' => 'E02003877',
        '9EE' => 'E02003877',
        '9EF' => 'E02003877',
        '9EG' => 'E02003877',
        '9EH' => 'E02003877',
        '9EJ' => 'E02003877',
        '9EL' => 'E02003877',
        '9EN' => 'E02003877',
        '9EP' => 'E02003877',
        '9EQ' => 'E02003877',
        '9ER' => 'E02003877',
        '9ES' => 'E02003877',
        '9ET' => 'E02003877',
        '9EU' => 'E02003877',
        '9EW' => 'E02003877',
        '9EX' => 'E02003877',
        '9EY' => 'E02003877',
        '9EZ' => 'E02003877',
        '9FA' => 'E02003874',
        '9FB' => 'E02003877',
        '9FD' => 'E02003874',
        '9FE' => 'E02003877',
        '9FF' => 'E02003874',
        '9FH' => 'E02003877',
        '9FQ' => 'E02003874',
        '9HA' => 'E02003877',
        '9HB' => 'E02003877',
        '9HD' => 'E02003877',
        '9HH' => 'E02003877',
        '9HJ' => 'E02003877',
        '9HL' => 'E02003877',
        '9HN' => 'E02003877',
        '9HP' => 'E02003877',
        '9HR' => 'E02003877',
        '9HS' => 'E02003877',
        '9HT' => 'E02003877',
        '9HU' => 'E02003877',
        '9HW' => 'E02003877',
        '9HX' => 'E02003877',
        '9HY' => 'E02003877',
        '9HZ' => 'E02003877',
        '9JA' => 'E02003877',
        '9JB' => 'E02003877',
        '9JD' => 'E02003877',
        '9JE' => 'E02003877',
        '9JF' => 'E02003877',
        '9JG' => 'E02003877',
        '9JH' => 'E02003877',
        '9JJ' => 'E02003877',
        '9JL' => 'E02003877',
        '9JN' => 'E02003877',
        '9JQ' => 'E02003877',
        '9JW' => 'E02003877',
        '9JX' => 'E02003877',
        '9JY' => 'E02003877',
        '9JZ' => 'E02003877',
        '9LA' => 'E02003877',
        '9LB' => 'E02003877',
        '9LD' => 'E02003877',
        '9LE' => 'E02003877',
        '9LF' => 'E02003877',
        '9LG' => 'E02003877',
        '9LH' => 'E02003877',
        '9LJ' => 'E02003877',
        '9LL' => 'E02003877',
        '9LN' => 'E02003877',
        '9LP' => 'E02003877',
        '9LQ' => 'E02003877',
        '9LR' => 'E02003877',
        '9LW' => 'E02003877',
        '9LX' => 'E02003877',
        '9LY' => 'E02003877',
        '9LZ' => 'E02003877',
        '9NA' => 'E02003877',
        '9NB' => 'E02003877',
        '9ND' => 'E02003877',
        '9NE' => 'E02003877',
        '9NF' => 'E02003877',
        '9NG' => 'E02003877',
        '9NH' => 'E02003877',
        '9NJ' => 'E02003877',
        '9NL' => 'E02003877',
        '9NN' => 'E02003877',
        '9NP' => 'E02003877',
        '9NQ' => 'E02003877',
        '9NR' => 'E02003877',
        '9NS' => 'E02003877',
        '9NT' => 'E02003877',
        '9NW' => 'E02003877',
        '9PA' => 'E02003877',
        '9PD' => 'E02003877',
        '9PE' => 'E02003877',
        '9PF' => 'E02003877',
        '9PG' => 'E02003877',
        '9PH' => 'E02003877',
        '9PJ' => 'E02003877',
        '9PL' => 'E02003877',
        '9PN' => 'E02003877',
        '9PP' => 'E02003874',
        '9PQ' => 'E02003877',
        '9PS' => 'E02003877',
        '9PT' => 'E02003877',
        '9PU' => 'E02003877',
        '9PW' => 'E02003877',
        '9PX' => 'E02003877',
        '9PY' => 'E02003877',
        '9QA' => 'E02003877',
        '9QD' => 'E02003877',
        '9QE' => 'E02003877',
        '9QF' => 'E02003877',
        '9QG' => 'E02003877',
        '9QH' => 'E02003877',
        '9QJ' => 'E02003877',
        '9QL' => 'E02003877',
        '9QN' => 'E02003877',
        '9QQ' => 'E02003877',
        '9QW' => 'E02003877',
        '9WA' => 'E02003874',
        '9WU' => 'E02003874',
        '9WW' => 'E02003874',
        '9WX' => 'E02003877',
        '9WY' => 'E02003874',
        '9WZ' => 'E02003874',
        '9XA' => 'E02003877',
        '9XB' => 'E02003877',
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