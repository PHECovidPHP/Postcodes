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
final class BD4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002234',
        '0AB' => 'E02002234',
        '0AD' => 'E02002234',
        '0AE' => 'E02002234',
        '0AF' => 'E02002234',
        '0AG' => 'E02002234',
        '0AH' => 'E02002234',
        '0AJ' => 'E02002234',
        '0AL' => 'E02002234',
        '0AN' => 'E02002234',
        '0AP' => 'E02002234',
        '0AQ' => 'E02002234',
        '0AR' => 'E02002234',
        '0AS' => 'E02002239',
        '0AT' => 'E02002234',
        '0AU' => 'E02002234',
        '0AW' => 'E02002234',
        '0AX' => 'E02002234',
        '0AY' => 'E02002234',
        '0AZ' => 'E02002234',
        '0BA' => 'E02002239',
        '0BB' => 'E02002234',
        '0BD' => 'E02002234',
        '0BE' => 'E02002234',
        '0BG' => 'E02002234',
        '0BH' => 'E02002234',
        '0BJ' => 'E02002234',
        '0BL' => 'E02002234',
        '0BN' => 'E02002405',
        '0BQ' => 'E02002234',
        '0BS' => 'E02002234',
        '0BT' => 'E02002234',
        '0BU' => 'E02002234',
        '0BX' => 'E02002234',
        '0BY' => 'E02002234',
        '0BZ' => 'E02002234',
        '0DA' => 'E02002234',
        '0DB' => 'E02002234',
        '0DD' => 'E02002405',
        '0DE' => 'E02002234',
        '0DF' => 'E02002234',
        '0DG' => 'E02002234',
        '0DH' => 'E02002234',
        '0DJ' => 'E02002234',
        '0DL' => 'E02002234',
        '0DN' => 'E02002234',
        '0DP' => 'E02002234',
        '0DQ' => 'E02002234',
        '0DR' => 'E02002234',
        '0DS' => 'E02002234',
        '0DW' => 'E02002234',
        '0DX' => 'E02002234',
        '0DY' => 'E02002234',
        '0DZ' => 'E02002234',
        '0EA' => 'E02002234',
        '0EB' => 'E02002234',
        '0ED' => 'E02002234',
        '0EE' => 'E02002234',
        '0EF' => 'E02002234',
        '0EG' => 'E02002234',
        '0EH' => 'E02002234',
        '0EJ' => 'E02002234',
        '0EL' => 'E02002234',
        '0EN' => 'E02002234',
        '0EP' => 'E02002234',
        '0EQ' => 'E02002234',
        '0ER' => 'E02002234',
        '0ES' => 'E02002234',
        '0ET' => 'E02002234',
        '0EU' => 'E02002234',
        '0EW' => 'E02002234',
        '0EX' => 'E02002234',
        '0EY' => 'E02002234',
        '0EZ' => 'E02002234',
        '0FB' => 'E02002405',
        '0FD' => 'E02002405',
        '0FE' => 'E02002405',
        '0FF' => 'E02002405',
        '0FG' => 'E02002405',
        '0FH' => 'E02002405',
        '0FJ' => 'E02002405',
        '0FL' => 'E02002239',
        '0HA' => 'E02002234',
        '0HB' => 'E02002234',
        '0HG' => 'E02002234',
        '0HH' => 'E02002234',
        '0HJ' => 'E02002234',
        '0HL' => 'E02002234',
        '0HN' => 'E02002234',
        '0HP' => 'E02002234',
        '0HQ' => 'E02002234',
        '0HR' => 'E02002234',
        '0HS' => 'E02002234',
        '0HT' => 'E02002234',
        '0HU' => 'E02002234',
        '0HW' => 'E02002234',
        '0HX' => 'E02002234',
        '0HY' => 'E02002234',
        '0HZ' => 'E02002234',
        '0JA' => 'E02002234',
        '0JB' => 'E02002234',
        '0JD' => 'E02002239',
        '0JE' => 'E02002234',
        '0JF' => 'E02002234',
        '0JG' => 'E02002234',
        '0JH' => 'E02002239',
        '0JJ' => 'E02002239',
        '0JL' => 'E02002239',
        '0JN' => 'E02002234',
        '0JP' => 'E02002234',
        '0JQ' => 'E02002234',
        '0JR' => 'E02002234',
        '0JS' => 'E02002234',
        '0JT' => 'E02002234',
        '0JU' => 'E02002234',
        '0JW' => 'E02002234',
        '0JX' => 'E02002234',
        '0JY' => 'E02002234',
        '0JZ' => 'E02002234',
        '0LA' => 'E02002234',
        '0LB' => 'E02002234',
        '0LD' => 'E02002234',
        '0LE' => 'E02002234',
        '0LF' => 'E02002234',
        '0LG' => 'E02002234',
        '0LH' => 'E02002234',
        '0LJ' => 'E02002234',
        '0LL' => 'E02002234',
        '0LN' => 'E02002234',
        '0LP' => 'E02002239',
        '0LQ' => 'E02002234',
        '0LR' => 'E02002239',
        '0LS' => 'E02002234',
        '0LT' => 'E02002234',
        '0LU' => 'E02002234',
        '0LW' => 'E02002234',
        '0LX' => 'E02002234',
        '0LY' => 'E02002234',
        '0LZ' => 'E02002234',
        '0NA' => 'E02002234',
        '0NB' => 'E02002234',
        '0ND' => 'E02002234',
        '0NE' => 'E02002234',
        '0NF' => 'E02002234',
        '0NG' => 'E02002234',
        '0NH' => 'E02002234',
        '0NJ' => 'E02002234',
        '0NL' => 'E02002234',
        '0NN' => 'E02002234',
        '0NP' => 'E02002234',
        '0NQ' => 'E02002234',
        '0NR' => 'E02002234',
        '0NS' => 'E02002234',
        '0NT' => 'E02002234',
        '0NU' => 'E02002234',
        '0NW' => 'E02002234',
        '0NX' => 'E02002234',
        '0NY' => 'E02002234',
        '0NZ' => 'E02002234',
        '0PA' => 'E02002234',
        '0PB' => 'E02002234',
        '0PD' => 'E02002234',
        '0PE' => 'E02002234',
        '0PF' => 'E02002234',
        '0PG' => 'E02002234',
        '0PH' => 'E02002234',
        '0PJ' => 'E02002234',
        '0PL' => 'E02002234',
        '0PN' => 'E02002234',
        '0PP' => 'E02002239',
        '0PQ' => 'E02002234',
        '0PR' => 'E02002239',
        '0PS' => 'E02002239',
        '0PT' => 'E02002239',
        '0PU' => 'E02002239',
        '0PW' => 'E02002234',
        '0PX' => 'E02002239',
        '0PY' => 'E02002239',
        '0PZ' => 'E02002239',
        '0QA' => 'E02002239',
        '0QB' => 'E02002239',
        '0QD' => 'E02002239',
        '0QE' => 'E02002234',
        '0QF' => 'E02002234',
        '0QG' => 'E02002239',
        '0QH' => 'E02002239',
        '0QJ' => 'E02002239',
        '0QL' => 'E02002239',
        '0QN' => 'E02002239',
        '0QP' => 'E02002239',
        '0QQ' => 'E02002234',
        '0QR' => 'E02002239',
        '0QS' => 'E02002239',
        '0QT' => 'E02002239',
        '0QU' => 'E02002234',
        '0QW' => 'E02002234',
        '0QX' => 'E02002234',
        '0QY' => 'E02002234',
        '0QZ' => 'E02002234',
        '0RA' => 'E02002234',
        '0RB' => 'E02002234',
        '0RD' => 'E02002234',
        '0RE' => 'E02002405',
        '0RF' => 'E02002405',
        '0RG' => 'E02002234',
        '0RH' => 'E02002234',
        '0RJ' => 'E02002239',
        '0RL' => 'E02002239',
        '0RN' => 'E02002239',
        '0RP' => 'E02002239',
        '0RQ' => 'E02002234',
        '0RR' => 'E02002239',
        '0RS' => 'E02002239',
        '0RT' => 'E02002239',
        '0RU' => 'E02002239',
        '0RW' => 'E02002239',
        '0RX' => 'E02002239',
        '0RY' => 'E02002239',
        '0RZ' => 'E02002425',
        '0SA' => 'E02002239',
        '0SB' => 'E02002239',
        '0SD' => 'E02002239',
        '0SE' => 'E02002239',
        '0SF' => 'E02002239',
        '0SG' => 'E02002239',
        '0SH' => 'E02002271',
        '0SJ' => 'E02002239',
        '0SL' => 'E02002239',
        '0SN' => 'E02002239',
        '0SP' => 'E02002239',
        '0SQ' => 'E02002239',
        '0SR' => 'E02002239',
        '0SS' => 'E02002239',
        '0ST' => 'E02002239',
        '0SU' => 'E02002230',
        '0SW' => 'E02002239',
        '0SX' => 'E02002239',
        '0SY' => 'E02002239',
        '0SZ' => 'E02002234',
        '0TE' => 'E02002239',
        '0TF' => 'E02002234',
        '0TG' => 'E02002234',
        '0TJ' => 'E02002234',
        '0TL' => 'E02002234',
        '0TN' => 'E02002234',
        '0TP' => 'E02002234',
        '0TQ' => 'E02002234',
        '0TR' => 'E02002239',
        '0TS' => 'E02002239',
        '0TT' => 'E02002239',
        '0TU' => 'E02002239',
        '0TW' => 'E02002234',
        '0TX' => 'E02002239',
        '0TY' => 'E02002239',
        '0TZ' => 'E02002239',
        '0WA' => 'E02002230',
        '0WB' => 'E02002230',
        '0WU' => 'E02002230',
        '0WW' => 'E02002230',
        '0WX' => 'E02002239',
        '0WY' => 'E02002239',
        '0WZ' => 'E02002239',
        '0YL' => 'E02002230',
        '0YN' => 'E02002230',
        '0YP' => 'E02002234',
        '0YQ' => 'E02002230',
        '0YR' => 'E02002234',
        '0YS' => 'E02002234',
        '0YT' => 'E02002234',
        '0YU' => 'E02002234',
        '0YW' => 'E02002230',
        '0YX' => 'E02002230',
        '0YY' => 'E02002234',
        '0YZ' => 'E02002234',
        '6AA' => 'E02002239',
        '6AB' => 'E02002239',
        '6AD' => 'E02002239',
        '6AE' => 'E02002239',
        '6AF' => 'E02002239',
        '6AG' => 'E02002239',
        '6AH' => 'E02002239',
        '6AJ' => 'E02002239',
        '6AL' => 'E02002239',
        '6AN' => 'E02002239',
        '6AP' => 'E02002239',
        '6AQ' => 'E02002239',
        '6AR' => 'E02002239',
        '6AS' => 'E02002239',
        '6AT' => 'E02002239',
        '6AU' => 'E02002239',
        '6AW' => 'E02002239',
        '6AX' => 'E02002239',
        '6AY' => 'E02002239',
        '6AZ' => 'E02002239',
        '6BA' => 'E02002239',
        '6BB' => 'E02002239',
        '6BD' => 'E02002239',
        '6BE' => 'E02002239',
        '6BG' => 'E02002239',
        '6BH' => 'E02002239',
        '6BJ' => 'E02002239',
        '6BL' => 'E02002239',
        '6BN' => 'E02002239',
        '6BP' => 'E02002239',
        '6BQ' => 'E02002239',
        '6BS' => 'E02002239',
        '6BT' => 'E02002239',
        '6BU' => 'E02002239',
        '6BW' => 'E02002239',
        '6BX' => 'E02002239',
        '6BY' => 'E02002239',
        '6DA' => 'E02002239',
        '6DB' => 'E02002239',
        '6DD' => 'E02002239',
        '6DE' => 'E02002239',
        '6DF' => 'E02002239',
        '6DG' => 'E02002239',
        '6DH' => 'E02002239',
        '6DJ' => 'E02002239',
        '6DL' => 'E02002239',
        '6DN' => 'E02002239',
        '6DP' => 'E02002239',
        '6DQ' => 'E02002239',
        '6DR' => 'E02002239',
        '6DS' => 'E02002239',
        '6DT' => 'E02002239',
        '6DU' => 'E02002239',
        '6DW' => 'E02002239',
        '6DX' => 'E02002239',
        '6DY' => 'E02002239',
        '6DZ' => 'E02002239',
        '6EA' => 'E02002239',
        '6EB' => 'E02002239',
        '6ED' => 'E02002239',
        '6EE' => 'E02002239',
        '6EF' => 'E02002239',
        '6EG' => 'E02002239',
        '6EH' => 'E02002239',
        '6EJ' => 'E02002239',
        '6EL' => 'E02002239',
        '6EN' => 'E02002239',
        '6EP' => 'E02002239',
        '6EQ' => 'E02002239',
        '6ER' => 'E02002239',
        '6ES' => 'E02002239',
        '6ET' => 'E02002239',
        '6EU' => 'E02002239',
        '6EW' => 'E02002239',
        '6EX' => 'E02002239',
        '6EY' => 'E02002239',
        '6EZ' => 'E02002239',
        '6FA' => 'E02002239',
        '6FB' => 'E02002239',
        '6FD' => 'E02002239',
        '6FE' => 'E02002239',
        '6FF' => 'E02002239',
        '6FG' => 'E02002239',
        '6FH' => 'E02002239',
        '6FJ' => 'E02002239',
        '6FL' => 'E02002239',
        '6FN' => 'E02002239',
        '6FP' => 'E02002239',
        '6HA' => 'E02002239',
        '6HB' => 'E02002239',
        '6HD' => 'E02002239',
        '6HE' => 'E02002239',
        '6HF' => 'E02002239',
        '6HG' => 'E02002239',
        '6HH' => 'E02002239',
        '6HJ' => 'E02002239',
        '6HL' => 'E02002239',
        '6HN' => 'E02002239',
        '6HP' => 'E02002239',
        '6HQ' => 'E02002239',
        '6HR' => 'E02002239',
        '6HS' => 'E02002239',
        '6HT' => 'E02002239',
        '6HU' => 'E02002239',
        '6HW' => 'E02002230',
        '6HX' => 'E02002239',
        '6HY' => 'E02002239',
        '6HZ' => 'E02002239',
        '6JA' => 'E02002239',
        '6JB' => 'E02002239',
        '6JD' => 'E02002239',
        '6JE' => 'E02002239',
        '6JF' => 'E02002239',
        '6JG' => 'E02002239',
        '6JH' => 'E02002239',
        '6JJ' => 'E02002239',
        '6JL' => 'E02002239',
        '6JN' => 'E02002239',
        '6JP' => 'E02002239',
        '6JQ' => 'E02002239',
        '6JR' => 'E02002239',
        '6JS' => 'E02002239',
        '6JT' => 'E02002239',
        '6JU' => 'E02002239',
        '6JW' => 'E02002239',
        '6JX' => 'E02002239',
        '6JY' => 'E02002239',
        '6JZ' => 'E02002239',
        '6LA' => 'E02002239',
        '6LB' => 'E02002239',
        '6LD' => 'E02002239',
        '6LE' => 'E02002239',
        '6LG' => 'E02002239',
        '6LH' => 'E02002239',
        '6LJ' => 'E02002239',
        '6LN' => 'E02002239',
        '6LP' => 'E02002239',
        '6LR' => 'E02002239',
        '6LW' => 'E02002239',
        '6LX' => 'E02002239',
        '6LY' => 'E02002239',
        '6NA' => 'E02002239',
        '6NB' => 'E02002239',
        '6ND' => 'E02002239',
        '6NE' => 'E02002271',
        '6NG' => 'E02002239',
        '6NH' => 'E02002239',
        '6NJ' => 'E02002239',
        '6NL' => 'E02002239',
        '6NN' => 'E02002239',
        '6NP' => 'E02002271',
        '6NQ' => 'E02002239',
        '6NR' => 'E02002239',
        '6NS' => 'E02002271',
        '6NT' => 'E02002271',
        '6NU' => 'E02002271',
        '6NX' => 'E02002271',
        '6PA' => 'E02002271',
        '6PB' => 'E02002271',
        '6PD' => 'E02002271',
        '6PE' => 'E02002271',
        '6PF' => 'E02002271',
        '6PG' => 'E02002271',
        '6PH' => 'E02002271',
        '6PJ' => 'E02002271',
        '6PL' => 'E02002271',
        '6PN' => 'E02002271',
        '6PP' => 'E02002271',
        '6PQ' => 'E02002271',
        '6PR' => 'E02002271',
        '6PS' => 'E02002271',
        '6PT' => 'E02002271',
        '6PU' => 'E02002271',
        '6PW' => 'E02002271',
        '6PX' => 'E02002271',
        '6PY' => 'E02002271',
        '6PZ' => 'E02002271',
        '6QA' => 'E02002239',
        '6QB' => 'E02002239',
        '6QD' => 'E02002239',
        '6QE' => 'E02002239',
        '6QF' => 'E02002239',
        '6QG' => 'E02002239',
        '6QH' => 'E02002239',
        '6QJ' => 'E02002239',
        '6QL' => 'E02002239',
        '6QN' => 'E02002239',
        '6QP' => 'E02002239',
        '6QQ' => 'E02002239',
        '6QR' => 'E02002239',
        '6QS' => 'E02002271',
        '6QT' => 'E02002239',
        '6QU' => 'E02002239',
        '6QW' => 'E02002239',
        '6QX' => 'E02002239',
        '6QY' => 'E02002239',
        '6RA' => 'E02002271',
        '6RB' => 'E02002239',
        '6RD' => 'E02002271',
        '6RE' => 'E02002271',
        '6RF' => 'E02002239',
        '6RG' => 'E02002271',
        '6RH' => 'E02002271',
        '6RJ' => 'E02002271',
        '6RL' => 'E02002271',
        '6RN' => 'E02002271',
        '6RP' => 'E02002271',
        '6RQ' => 'E02002271',
        '6RR' => 'E02002271',
        '6RS' => 'E02002239',
        '6RT' => 'E02002239',
        '6RU' => 'E02002239',
        '6RW' => 'E02002242',
        '6RX' => 'E02002239',
        '6RY' => 'E02002239',
        '6RZ' => 'E02002239',
        '6SA' => 'E02002239',
        '6SB' => 'E02002239',
        '6SD' => 'E02002239',
        '6SE' => 'E02002239',
        '6SF' => 'E02002242',
        '6SG' => 'E02002239',
        '6SH' => 'E02002239',
        '6SJ' => 'E02002239',
        '6SL' => 'E02002239',
        '6SN' => 'E02002242',
        '6SP' => 'E02002239',
        '6SQ' => 'E02002242',
        '6SR' => 'E02002239',
        '6SS' => 'E02002239',
        '6ST' => 'E02002230',
        '6SU' => 'E02002239',
        '6SW' => 'E02002239',
        '6SX' => 'E02002239',
        '6SY' => 'E02002239',
        '6SZ' => 'E02002239',
        '6TA' => 'E02002239',
        '6TD' => 'E02002239',
        '6TE' => 'E02002239',
        '6TF' => 'E02002239',
        '6TG' => 'E02002239',
        '6TQ' => 'E02002239',
        '6WA' => 'E02002230',
        '6WB' => 'E02002230',
        '6WR' => 'E02002230',
        '6WS' => 'E02002230',
        '6WT' => 'E02002230',
        '6WU' => 'E02002230',
        '6WW' => 'E02002230',
        '6WX' => 'E02002230',
        '6WY' => 'E02002230',
        '6WZ' => 'E02002230',
        '6XA' => 'E02002239',
        '6XB' => 'E02002239',
        '6YP' => 'E02002230',
        '6YR' => 'E02002239',
        '6YS' => 'E02002239',
        '6YT' => 'E02002230',
        '6YU' => 'E02002230',
        '6YX' => 'E02002239',
        '6YY' => 'E02002239',
        '6YZ' => 'E02002239',
        '6ZW' => 'E02002230',
        '6ZX' => 'E02002230',
        '7AA' => 'E02002227',
        '7AB' => 'E02002227',
        '7AD' => 'E02002227',
        '7AE' => 'E02002227',
        '7AF' => 'E02002227',
        '7AG' => 'E02002227',
        '7AH' => 'E02002227',
        '7AJ' => 'E02002227',
        '7AL' => 'E02002227',
        '7AN' => 'E02002227',
        '7AP' => 'E02002227',
        '7AQ' => 'E02002227',
        '7AS' => 'E02002227',
        '7AT' => 'E02002227',
        '7AU' => 'E02002227',
        '7AW' => 'E02002227',
        '7AY' => 'E02002227',
        '7AZ' => 'E02002227',
        '7BA' => 'E02002227',
        '7BB' => 'E02002227',
        '7BD' => 'E02002227',
        '7BG' => 'E02002227',
        '7BH' => 'E02002227',
        '7BJ' => 'E02002227',
        '7BL' => 'E02002227',
        '7BN' => 'E02002227',
        '7BP' => 'E02002227',
        '7BQ' => 'E02002227',
        '7BS' => 'E02002227',
        '7BT' => 'E02002227',
        '7BU' => 'E02002227',
        '7BW' => 'E02002227',
        '7BX' => 'E02002227',
        '7BY' => 'E02002227',
        '7BZ' => 'E02002227',
        '7DA' => 'E02002227',
        '7DB' => 'E02002227',
        '7DD' => 'E02002227',
        '7DE' => 'E02002227',
        '7DF' => 'E02002227',
        '7DG' => 'E02002227',
        '7DH' => 'E02002227',
        '7DJ' => 'E02002227',
        '7DL' => 'E02002227',
        '7DN' => 'E02002227',
        '7DP' => 'E02002227',
        '7DQ' => 'E02002227',
        '7DS' => 'E02002227',
        '7DT' => 'E02002227',
        '7DU' => 'E02002227',
        '7DW' => 'E02002227',
        '7DX' => 'E02002227',
        '7DY' => 'E02002227',
        '7DZ' => 'E02002227',
        '7EA' => 'E02002227',
        '7EB' => 'E02002227',
        '7ED' => 'E02002227',
        '7EE' => 'E02002227',
        '7EF' => 'E02002230',
        '7EG' => 'E02002227',
        '7EH' => 'E02002230',
        '7EJ' => 'E02002227',
        '7EL' => 'E02002227',
        '7EN' => 'E02002227',
        '7EP' => 'E02002227',
        '7EQ' => 'E02002227',
        '7ER' => 'E02002227',
        '7ES' => 'E02002227',
        '7ET' => 'E02002235',
        '7EU' => 'E02002227',
        '7EW' => 'E02002227',
        '7EX' => 'E02002230',
        '7EZ' => 'E02002227',
        '7HF' => 'E02002227',
        '7HG' => 'E02002227',
        '7HH' => 'E02002230',
        '7HJ' => 'E02002227',
        '7HL' => 'E02002230',
        '7HN' => 'E02002227',
        '7HP' => 'E02002227',
        '7HR' => 'E02002227',
        '7HS' => 'E02002227',
        '7HT' => 'E02002227',
        '7HX' => 'E02002227',
        '7HY' => 'E02002227',
        '7HZ' => 'E02002228',
        '7JB' => 'E02002228',
        '7JD' => 'E02002227',
        '7JE' => 'E02002227',
        '7JF' => 'E02002228',
        '7JG' => 'E02002227',
        '7JH' => 'E02002227',
        '7JJ' => 'E02002227',
        '7JL' => 'E02002227',
        '7JN' => 'E02002227',
        '7JP' => 'E02002227',
        '7JQ' => 'E02002227',
        '7JR' => 'E02002227',
        '7JS' => 'E02002227',
        '7JT' => 'E02002227',
        '7JU' => 'E02002227',
        '7JW' => 'E02002227',
        '7JX' => 'E02002227',
        '7JY' => 'E02002227',
        '7JZ' => 'E02002227',
        '7LA' => 'E02002227',
        '7LB' => 'E02002227',
        '7LD' => 'E02002227',
        '7LE' => 'E02002227',
        '7LF' => 'E02002227',
        '7LG' => 'E02002227',
        '7LH' => 'E02002227',
        '7LJ' => 'E02002227',
        '7LL' => 'E02002227',
        '7LN' => 'E02002227',
        '7LP' => 'E02002227',
        '7LQ' => 'E02002227',
        '7LR' => 'E02002227',
        '7LS' => 'E02002227',
        '7LT' => 'E02002227',
        '7LU' => 'E02002227',
        '7LW' => 'E02002227',
        '7LX' => 'E02002227',
        '7LY' => 'E02002227',
        '7LZ' => 'E02002227',
        '7NB' => 'E02002227',
        '7ND' => 'E02002227',
        '7NE' => 'E02002227',
        '7NF' => 'E02002227',
        '7NG' => 'E02002227',
        '7NH' => 'E02002227',
        '7NJ' => 'E02002227',
        '7NL' => 'E02002227',
        '7NN' => 'E02002227',
        '7NP' => 'E02002227',
        '7NQ' => 'E02002227',
        '7NU' => 'E02002227',
        '7NW' => 'E02002227',
        '7PE' => 'E02002227',
        '7PF' => 'E02002227',
        '7PG' => 'E02002227',
        '7PL' => 'E02002227',
        '7PN' => 'E02002227',
        '7PP' => 'E02002228',
        '7PQ' => 'E02002227',
        '7PR' => 'E02002228',
        '7PS' => 'E02002228',
        '7PT' => 'E02002228',
        '7PU' => 'E02002228',
        '7PW' => 'E02002227',
        '7PZ' => 'E02002228',
        '7QA' => 'E02002228',
        '7QE' => 'E02002228',
        '7QH' => 'E02002235',
        '7QJ' => 'E02002235',
        '7QN' => 'E02002235',
        '7QP' => 'E02002235',
        '7QQ' => 'E02002235',
        '7QR' => 'E02002235',
        '7QS' => 'E02002235',
        '7QT' => 'E02002235',
        '7QU' => 'E02002227',
        '7QX' => 'E02002228',
        '7QY' => 'E02002228',
        '7QZ' => 'E02002228',
        '7RA' => 'E02002228',
        '7RB' => 'E02002228',
        '7RD' => 'E02002228',
        '7RE' => 'E02002228',
        '7RF' => 'E02002228',
        '7RG' => 'E02002228',
        '7RH' => 'E02002227',
        '7RL' => 'E02002228',
        '7RN' => 'E02002228',
        '7RP' => 'E02002228',
        '7RQ' => 'E02002228',
        '7RS' => 'E02002239',
        '7RT' => 'E02002228',
        '7RW' => 'E02002228',
        '7RX' => 'E02002228',
        '7RY' => 'E02002228',
        '7SA' => 'E02002235',
        '7SB' => 'E02002235',
        '7SD' => 'E02002235',
        '7SE' => 'E02002235',
        '7SH' => 'E02002239',
        '7SJ' => 'E02002239',
        '7SP' => 'E02002235',
        '7SQ' => 'E02002235',
        '7SR' => 'E02002235',
        '7SS' => 'E02002235',
        '7ST' => 'E02002235',
        '7SU' => 'E02002235',
        '7SX' => 'E02002235',
        '7SY' => 'E02002235',
        '7TA' => 'E02002235',
        '7TB' => 'E02002235',
        '7TD' => 'E02002235',
        '7TE' => 'E02002235',
        '7TF' => 'E02002230',
        '7TG' => 'E02002235',
        '7TH' => 'E02002235',
        '7TJ' => 'E02002235',
        '7TL' => 'E02002227',
        '7TP' => 'E02002230',
        '7TR' => 'E02002227',
        '7TS' => 'E02002227',
        '7TT' => 'E02002227',
        '7TU' => 'E02002227',
        '7TY' => 'E02002227',
        '7UA' => 'E02002227',
        '7UB' => 'E02002227',
        '7UD' => 'E02002230',
        '7UE' => 'E02002230',
        '7UG' => 'E02002227',
        '7UH' => 'E02002227',
        '7WA' => 'E02002230',
        '7WL' => 'E02002230',
        '7WN' => 'E02002230',
        '7WP' => 'E02002230',
        '7WQ' => 'E02002230',
        '7WR' => 'E02002230',
        '7WS' => 'E02002230',
        '7WT' => 'E02002230',
        '7WU' => 'E02002230',
        '7WW' => 'E02002230',
        '7WX' => 'E02002230',
        '7WY' => 'E02002227',
        '7WZ' => 'E02002230',
        '7XA' => 'E02002230',
        '7XB' => 'E02002230',
        '7XD' => 'E02002230',
        '7XE' => 'E02002227',
        '7XF' => 'E02002227',
        '7XG' => 'E02002227',
        '7XH' => 'E02002227',
        '7XJ' => 'E02002227',
        '7XL' => 'E02002227',
        '7XN' => 'E02002230',
        '7XP' => 'E02002230',
        '7XQ' => 'E02002227',
        '7XR' => 'E02002230',
        '7XS' => 'E02002230',
        '7XT' => 'E02002230',
        '7YH' => 'E02002230',
        '7YJ' => 'E02002230',
        '7YL' => 'E02002230',
        '7ZY' => 'E02002230',
        '8AA' => 'E02002228',
        '8AB' => 'E02002228',
        '8AD' => 'E02002228',
        '8AE' => 'E02002228',
        '8AF' => 'E02002228',
        '8AG' => 'E02002228',
        '8AH' => 'E02002228',
        '8AJ' => 'E02002228',
        '8AL' => 'E02002228',
        '8AN' => 'E02002228',
        '8AP' => 'E02002228',
        '8AQ' => 'E02002228',
        '8AR' => 'E02002224',
        '8AS' => 'E02002228',
        '8AT' => 'E02002224',
        '8AU' => 'E02002224',
        '8AW' => 'E02002228',
        '8AY' => 'E02002228',
        '8AZ' => 'E02002224',
        '8BA' => 'E02002228',
        '8BB' => 'E02002228',
        '8BD' => 'E02002230',
        '8BE' => 'E02002228',
        '8BG' => 'E02002228',
        '8BH' => 'E02002228',
        '8BJ' => 'E02002228',
        '8BL' => 'E02002228',
        '8BN' => 'E02002228',
        '8BP' => 'E02002228',
        '8BQ' => 'E02002228',
        '8BS' => 'E02002224',
        '8BT' => 'E02002228',
        '8BU' => 'E02002228',
        '8BW' => 'E02002228',
        '8BX' => 'E02002224',
        '8BY' => 'E02002228',
        '8BZ' => 'E02002228',
        '8DA' => 'E02002228',
        '8DB' => 'E02002228',
        '8DD' => 'E02002228',
        '8DE' => 'E02002228',
        '8DF' => 'E02002228',
        '8DG' => 'E02002228',
        '8DH' => 'E02002228',
        '8DJ' => 'E02002228',
        '8DL' => 'E02002228',
        '8DN' => 'E02002228',
        '8DP' => 'E02002228',
        '8DQ' => 'E02002228',
        '8DR' => 'E02002228',
        '8DS' => 'E02002228',
        '8DT' => 'E02002228',
        '8DU' => 'E02002228',
        '8DW' => 'E02002228',
        '8DX' => 'E02002228',
        '8DY' => 'E02002228',
        '8DZ' => 'E02002228',
        '8EA' => 'E02002228',
        '8EB' => 'E02002228',
        '8ED' => 'E02002228',
        '8EE' => 'E02002228',
        '8EF' => 'E02002228',
        '8EG' => 'E02002228',
        '8EH' => 'E02002228',
        '8EJ' => 'E02002228',
        '8EL' => 'E02002405',
        '8EN' => 'E02002405',
        '8EP' => 'E02002405',
        '8EQ' => 'E02002228',
        '8ER' => 'E02002405',
        '8ES' => 'E02002405',
        '8ET' => 'E02002405',
        '8EU' => 'E02002405',
        '8EW' => 'E02002405',
        '8EX' => 'E02002405',
        '8EY' => 'E02002405',
        '8EZ' => 'E02002405',
        '8FA' => 'E02002405',
        '8HA' => 'E02002405',
        '8HB' => 'E02002405',
        '8HD' => 'E02002405',
        '8HE' => 'E02002405',
        '8HF' => 'E02002405',
        '8HG' => 'E02002405',
        '8HH' => 'E02002405',
        '8HJ' => 'E02002405',
        '8HL' => 'E02002405',
        '8HN' => 'E02002405',
        '8HP' => 'E02002405',
        '8HQ' => 'E02002405',
        '8HR' => 'E02002405',
        '8HS' => 'E02002405',
        '8HT' => 'E02002405',
        '8HU' => 'E02002228',
        '8HW' => 'E02002405',
        '8HX' => 'E02002228',
        '8HY' => 'E02002228',
        '8HZ' => 'E02002228',
        '8JA' => 'E02002228',
        '8JB' => 'E02002228',
        '8JD' => 'E02002228',
        '8JE' => 'E02002228',
        '8JF' => 'E02002228',
        '8JG' => 'E02002228',
        '8JH' => 'E02002228',
        '8JJ' => 'E02002228',
        '8JL' => 'E02002228',
        '8JN' => 'E02002228',
        '8JP' => 'E02002405',
        '8JQ' => 'E02002228',
        '8JR' => 'E02002228',
        '8JS' => 'E02002228',
        '8JW' => 'E02002228',
        '8LA' => 'E02002228',
        '8LB' => 'E02002228',
        '8LF' => 'E02002228',
        '8LJ' => 'E02002228',
        '8LL' => 'E02002228',
        '8LN' => 'E02002228',
        '8LP' => 'E02002228',
        '8LR' => 'E02002228',
        '8LS' => 'E02002228',
        '8LT' => 'E02002228',
        '8LU' => 'E02002405',
        '8LW' => 'E02002228',
        '8LX' => 'E02002228',
        '8LY' => 'E02002228',
        '8LZ' => 'E02002228',
        '8NA' => 'E02002228',
        '8NB' => 'E02002228',
        '8ND' => 'E02002228',
        '8NE' => 'E02002228',
        '8NF' => 'E02002228',
        '8NG' => 'E02002228',
        '8NH' => 'E02002228',
        '8NJ' => 'E02002228',
        '8NL' => 'E02002228',
        '8NN' => 'E02002228',
        '8NP' => 'E02002228',
        '8NQ' => 'E02002228',
        '8NR' => 'E02002228',
        '8NS' => 'E02002228',
        '8NT' => 'E02002228',
        '8NU' => 'E02002228',
        '8NW' => 'E02002228',
        '8NX' => 'E02002228',
        '8NY' => 'E02002228',
        '8NZ' => 'E02002228',
        '8PA' => 'E02002228',
        '8PB' => 'E02002228',
        '8PD' => 'E02002228',
        '8PE' => 'E02002228',
        '8PF' => 'E02002228',
        '8PG' => 'E02002228',
        '8PH' => 'E02002228',
        '8PJ' => 'E02002228',
        '8PL' => 'E02002228',
        '8PN' => 'E02002228',
        '8PP' => 'E02002228',
        '8PQ' => 'E02002228',
        '8PR' => 'E02002228',
        '8PS' => 'E02002228',
        '8PT' => 'E02002228',
        '8PU' => 'E02002228',
        '8PW' => 'E02002228',
        '8PX' => 'E02002228',
        '8PY' => 'E02002228',
        '8PZ' => 'E02002228',
        '8QA' => 'E02002228',
        '8QB' => 'E02002228',
        '8QD' => 'E02002228',
        '8QE' => 'E02002228',
        '8QF' => 'E02002228',
        '8QG' => 'E02002228',
        '8QH' => 'E02002228',
        '8QJ' => 'E02002228',
        '8QL' => 'E02002228',
        '8QN' => 'E02002228',
        '8QP' => 'E02002228',
        '8QQ' => 'E02002228',
        '8QR' => 'E02002228',
        '8QS' => 'E02002228',
        '8QT' => 'E02002228',
        '8QU' => 'E02002228',
        '8QW' => 'E02002228',
        '8QX' => 'E02002228',
        '8QY' => 'E02002228',
        '8QZ' => 'E02002228',
        '8RA' => 'E02002228',
        '8RB' => 'E02002228',
        '8RD' => 'E02002228',
        '8RE' => 'E02002228',
        '8RF' => 'E02002230',
        '8RG' => 'E02002228',
        '8RH' => 'E02002228',
        '8RJ' => 'E02002228',
        '8RL' => 'E02002228',
        '8RN' => 'E02002228',
        '8RP' => 'E02002228',
        '8RQ' => 'E02002228',
        '8RR' => 'E02002228',
        '8RS' => 'E02002228',
        '8RT' => 'E02002228',
        '8RU' => 'E02002228',
        '8RW' => 'E02002228',
        '8RX' => 'E02002228',
        '8RY' => 'E02002228',
        '8RZ' => 'E02002228',
        '8SA' => 'E02002227',
        '8SB' => 'E02002227',
        '8SD' => 'E02002227',
        '8SE' => 'E02002227',
        '8SF' => 'E02002227',
        '8SG' => 'E02002227',
        '8SH' => 'E02002228',
        '8SJ' => 'E02002228',
        '8SL' => 'E02002227',
        '8SN' => 'E02002228',
        '8SP' => 'E02002227',
        '8SQ' => 'E02002227',
        '8SR' => 'E02002227',
        '8SS' => 'E02002228',
        '8ST' => 'E02002228',
        '8SU' => 'E02002228',
        '8SW' => 'E02002228',
        '8SX' => 'E02002228',
        '8SY' => 'E02002228',
        '8SZ' => 'E02002228',
        '8TA' => 'E02002228',
        '8TB' => 'E02002228',
        '8TD' => 'E02002228',
        '8TE' => 'E02002228',
        '8TF' => 'E02002228',
        '8TG' => 'E02002228',
        '8TJ' => 'E02002228',
        '8TL' => 'E02002228',
        '8TN' => 'E02002228',
        '8TP' => 'E02002228',
        '8TQ' => 'E02002228',
        '8TR' => 'E02002228',
        '8TS' => 'E02002228',
        '8TT' => 'E02002228',
        '8TU' => 'E02002227',
        '8TW' => 'E02002230',
        '8TY' => 'E02002228',
        '8TZ' => 'E02002228',
        '8UA' => 'E02002227',
        '8UB' => 'E02002228',
        '8UE' => 'E02002228',
        '8UF' => 'E02002228',
        '8UG' => 'E02002228',
        '8UJ' => 'E02002228',
        '8UL' => 'E02002228',
        '8UQ' => 'E02002228',
        '8UX' => 'E02002227',
        '8WP' => 'E02002230',
        '8WQ' => 'E02002230',
        '8WR' => 'E02002230',
        '8WS' => 'E02002230',
        '8WT' => 'E02002230',
        '8WW' => 'E02002230',
        '8WX' => 'E02002230',
        '8XF' => 'E02002230',
        '8XZ' => 'E02002230',
        '8YA' => 'E02002230',
        '8YB' => 'E02002230',
        '8YD' => 'E02002230',
        '8YE' => 'E02002230',
        '8YF' => 'E02002228',
        '8YG' => 'E02002228',
        '8YH' => 'E02002228',
        '8YJ' => 'E02002228',
        '8YL' => 'E02002228',
        '8YN' => 'E02002230',
        '8YP' => 'E02002230',
        '8YQ' => 'E02002230',
        '8YR' => 'E02002230',
        '8YS' => 'E02002228',
        '8YW' => 'E02002228',
        '8YX' => 'E02002228',
        '8YY' => 'E02002230',
        '8YZ' => 'E02002228',
        '9AA' => 'E02002234',
        '9AB' => 'E02002234',
        '9AD' => 'E02002234',
        '9AE' => 'E02002234',
        '9AF' => 'E02002234',
        '9AG' => 'E02002234',
        '9AH' => 'E02002234',
        '9AJ' => 'E02002234',
        '9AL' => 'E02002234',
        '9AN' => 'E02002234',
        '9AP' => 'E02002234',
        '9AQ' => 'E02002234',
        '9AR' => 'E02002234',
        '9AS' => 'E02002234',
        '9AT' => 'E02002234',
        '9AU' => 'E02002234',
        '9AW' => 'E02002228',
        '9AX' => 'E02002234',
        '9AY' => 'E02002234',
        '9AZ' => 'E02002234',
        '9BA' => 'E02002234',
        '9BB' => 'E02002234',
        '9BD' => 'E02002234',
        '9BE' => 'E02002234',
        '9BG' => 'E02002234',
        '9BH' => 'E02002239',
        '9BJ' => 'E02002234',
        '9BL' => 'E02002234',
        '9BN' => 'E02002234',
        '9BS' => 'E02002234',
        '9BT' => 'E02002234',
        '9BU' => 'E02002234',
        '9BX' => 'E02002234',
        '9BY' => 'E02002234',
        '9DA' => 'E02002234',
        '9DB' => 'E02002234',
        '9DD' => 'E02002234',
        '9DE' => 'E02002234',
        '9DG' => 'E02002234',
        '9DH' => 'E02002234',
        '9DJ' => 'E02002234',
        '9DL' => 'E02002234',
        '9DN' => 'E02002234',
        '9DP' => 'E02002234',
        '9DR' => 'E02002234',
        '9DS' => 'E02002234',
        '9DT' => 'E02002234',
        '9DU' => 'E02002234',
        '9DW' => 'E02002234',
        '9DX' => 'E02002234',
        '9DY' => 'E02002234',
        '9DZ' => 'E02002234',
        '9EA' => 'E02002234',
        '9EB' => 'E02002234',
        '9ED' => 'E02002234',
        '9EE' => 'E02002234',
        '9EF' => 'E02002234',
        '9EG' => 'E02002234',
        '9EH' => 'E02002234',
        '9EJ' => 'E02002234',
        '9EL' => 'E02002234',
        '9EN' => 'E02002234',
        '9EP' => 'E02002234',
        '9EQ' => 'E02002234',
        '9ER' => 'E02002234',
        '9ES' => 'E02002234',
        '9ET' => 'E02002234',
        '9EU' => 'E02002234',
        '9EW' => 'E02002234',
        '9EX' => 'E02002234',
        '9EY' => 'E02002234',
        '9EZ' => 'E02002228',
        '9HA' => 'E02002228',
        '9HB' => 'E02002234',
        '9HD' => 'E02002234',
        '9HE' => 'E02002234',
        '9HG' => 'E02002234',
        '9HH' => 'E02002234',
        '9HJ' => 'E02002234',
        '9HL' => 'E02002234',
        '9HN' => 'E02002234',
        '9HP' => 'E02002228',
        '9HR' => 'E02002228',
        '9HS' => 'E02002228',
        '9HT' => 'E02002228',
        '9HU' => 'E02002228',
        '9HX' => 'E02002228',
        '9HY' => 'E02002228',
        '9HZ' => 'E02002228',
        '9JA' => 'E02002228',
        '9JB' => 'E02002228',
        '9JD' => 'E02002228',
        '9JE' => 'E02002228',
        '9JF' => 'E02002228',
        '9JG' => 'E02002228',
        '9JH' => 'E02002228',
        '9JJ' => 'E02002228',
        '9JL' => 'E02002228',
        '9JN' => 'E02002228',
        '9JP' => 'E02002228',
        '9JQ' => 'E02002228',
        '9JR' => 'E02002228',
        '9JS' => 'E02002228',
        '9JT' => 'E02002228',
        '9JU' => 'E02002228',
        '9JW' => 'E02002216',
        '9JY' => 'E02002228',
        '9JZ' => 'E02002228',
        '9LB' => 'E02002234',
        '9LE' => 'E02002228',
        '9LF' => 'E02002228',
        '9LH' => 'E02002228',
        '9LJ' => 'E02002228',
        '9LL' => 'E02002228',
        '9LN' => 'E02002228',
        '9LP' => 'E02002228',
        '9LR' => 'E02002228',
        '9LS' => 'E02002228',
        '9LT' => 'E02002235',
        '9LU' => 'E02002235',
        '9LX' => 'E02002239',
        '9LY' => 'E02002239',
        '9NA' => 'E02002235',
        '9NB' => 'E02002235',
        '9NE' => 'E02002235',
        '9NF' => 'E02002239',
        '9NG' => 'E02002235',
        '9NJ' => 'E02002239',
        '9NL' => 'E02002239',
        '9NN' => 'E02002235',
        '9NP' => 'E02002235',
        '9NQ' => 'E02002239',
        '9NR' => 'E02002235',
        '9NT' => 'E02002235',
        '9NU' => 'E02002239',
        '9NW' => 'E02002235',
        '9PB' => 'E02002228',
        '9PD' => 'E02002228',
        '9PE' => 'E02002228',
        '9PF' => 'E02002228',
        '9PG' => 'E02002228',
        '9PH' => 'E02002228',
        '9PL' => 'E02002228',
        '9PN' => 'E02002228',
        '9PP' => 'E02002239',
        '9PQ' => 'E02002228',
        '9PR' => 'E02002239',
        '9PT' => 'E02002239',
        '9PU' => 'E02002239',
        '9PW' => 'E02002228',
        '9PX' => 'E02002239',
        '9PY' => 'E02002234',
        '9PZ' => 'E02002228',
        '9QA' => 'E02002239',
        '9QE' => 'E02002239',
        '9QH' => 'E02002239',
        '9QJ' => 'E02002239',
        '9QL' => 'E02002239',
        '9QN' => 'E02002239',
        '9QP' => 'E02002239',
        '9QR' => 'E02002239',
        '9QS' => 'E02002239',
        '9QT' => 'E02002239',
        '9QU' => 'E02002239',
        '9QX' => 'E02002239',
        '9QY' => 'E02002239',
        '9QZ' => 'E02002239',
        '9RA' => 'E02002239',
        '9RB' => 'E02002228',
        '9RD' => 'E02002239',
        '9RE' => 'E02002239',
        '9RF' => 'E02002239',
        '9RG' => 'E02002239',
        '9RH' => 'E02002239',
        '9RJ' => 'E02002239',
        '9RL' => 'E02002239',
        '9RN' => 'E02002239',
        '9RP' => 'E02002239',
        '9RQ' => 'E02002239',
        '9RR' => 'E02002239',
        '9RS' => 'E02002239',
        '9RT' => 'E02002239',
        '9RU' => 'E02002239',
        '9RW' => 'E02002239',
        '9RX' => 'E02002239',
        '9RY' => 'E02002239',
        '9RZ' => 'E02002239',
        '9SA' => 'E02002234',
        '9SH' => 'E02002234',
        '9SJ' => 'E02002239',
        '9SN' => 'E02002234',
        '9SW' => 'E02002228',
        '9TE' => 'E02002230',
        '9TF' => 'E02002230',
        '9TG' => 'E02002235',
        '9WX' => 'E02002230',
        '9WY' => 'E02002230',
        '9WZ' => 'E02002230',
        '9YJ' => 'E02002234',
        '9YL' => 'E02002234',
        '9YN' => 'E02002235',
        '9YP' => 'E02002230',
        '9YR' => 'E02002230',
        '9YS' => 'E02002234',
        '9YT' => 'E02002234',
        '9YU' => 'E02002230',
        '9YW' => 'E02002230',
        '9YX' => 'E02002235',
        '9YY' => 'E02002235',
        '9YZ' => 'E02002230',
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
