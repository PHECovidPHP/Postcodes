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
final class IP13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02006288',
        '0AB' => 'E02006288',
        '0AD' => 'E02006288',
        '0AE' => 'E02006288',
        '0AF' => 'E02006291',
        '0AG' => 'E02006288',
        '0AH' => 'E02006288',
        '0AJ' => 'E02006288',
        '0AL' => 'E02006288',
        '0AN' => 'E02006288',
        '0AP' => 'E02006288',
        '0AQ' => 'E02006291',
        '0AR' => 'E02006288',
        '0AS' => 'E02006288',
        '0AT' => 'E02006288',
        '0AU' => 'E02006288',
        '0AW' => 'E02006288',
        '0AX' => 'E02006288',
        '0AY' => 'E02006288',
        '0AZ' => 'E02006288',
        '0BA' => 'E02006288',
        '0BB' => 'E02006288',
        '0BD' => 'E02006288',
        '0BE' => 'E02006288',
        '0BF' => 'E02006291',
        '0BG' => 'E02006288',
        '0BH' => 'E02006288',
        '0BJ' => 'E02006288',
        '0BL' => 'E02006288',
        '0BN' => 'E02006288',
        '0BP' => 'E02006293',
        '0BQ' => 'E02006288',
        '0BS' => 'E02006288',
        '0BT' => 'E02006288',
        '0BU' => 'E02006292',
        '0BW' => 'E02006288',
        '0BX' => 'E02006288',
        '0BY' => 'E02006288',
        '0BZ' => 'E02006288',
        '0DA' => 'E02006288',
        '0DB' => 'E02006291',
        '0DD' => 'E02006288',
        '0DE' => 'E02006291',
        '0DF' => 'E02006291',
        '0DG' => 'E02006291',
        '0DH' => 'E02006288',
        '0DJ' => 'E02006288',
        '0DL' => 'E02006288',
        '0DN' => 'E02006288',
        '0DP' => 'E02006288',
        '0DQ' => 'E02006288',
        '0DR' => 'E02006288',
        '0DS' => 'E02006288',
        '0DT' => 'E02006288',
        '0DU' => 'E02006288',
        '0DW' => 'E02006288',
        '0DX' => 'E02006288',
        '0DY' => 'E02006288',
        '0DZ' => 'E02006288',
        '0EA' => 'E02006288',
        '0EB' => 'E02006288',
        '0ED' => 'E02006288',
        '0EE' => 'E02006288',
        '0EF' => 'E02006288',
        '0EG' => 'E02006288',
        '0EH' => 'E02006288',
        '0EJ' => 'E02006288',
        '0EL' => 'E02006288',
        '0EN' => 'E02006288',
        '0EP' => 'E02006288',
        '0EQ' => 'E02006288',
        '0ER' => 'E02006288',
        '0ES' => 'E02006288',
        '0ET' => 'E02006288',
        '0EU' => 'E02006288',
        '0EW' => 'E02006288',
        '0EX' => 'E02006288',
        '0EY' => 'E02006288',
        '0EZ' => 'E02006291',
        '0FA' => 'E02006288',
        '0FG' => 'E02006291',
        '0GA' => 'E02006291',
        '0GZ' => 'E02006291',
        '0HA' => 'E02006288',
        '0HB' => 'E02006288',
        '0HD' => 'E02006291',
        '0HE' => 'E02006291',
        '0HF' => 'E02006291',
        '0HG' => 'E02006291',
        '0HH' => 'E02006291',
        '0HJ' => 'E02006292',
        '0HL' => 'E02006291',
        '0HN' => 'E02006291',
        '0HP' => 'E02006291',
        '0HQ' => 'E02006291',
        '0HR' => 'E02006291',
        '0HS' => 'E02006291',
        '0HT' => 'E02006291',
        '0HU' => 'E02006291',
        '0HW' => 'E02006291',
        '0HX' => 'E02006291',
        '0HY' => 'E02006291',
        '0HZ' => 'E02006291',
        '0JA' => 'E02006291',
        '0JB' => 'E02006291',
        '0JD' => 'E02006291',
        '0JE' => 'E02006291',
        '0JF' => 'E02006291',
        '0JG' => 'E02006291',
        '0JH' => 'E02006291',
        '0JJ' => 'E02006291',
        '0JL' => 'E02006291',
        '0JN' => 'E02006292',
        '0JP' => 'E02006292',
        '0JQ' => 'E02006291',
        '0JR' => 'E02006292',
        '0JS' => 'E02006292',
        '0JT' => 'E02006292',
        '0JU' => 'E02006292',
        '0JW' => 'E02006292',
        '0JX' => 'E02006292',
        '0JY' => 'E02006292',
        '0JZ' => 'E02006292',
        '0LA' => 'E02006292',
        '0LB' => 'E02006294',
        '0LD' => 'E02006292',
        '0LE' => 'E02006292',
        '0LF' => 'E02006292',
        '0LG' => 'E02006292',
        '0LH' => 'E02006292',
        '0LJ' => 'E02006292',
        '0LL' => 'E02006292',
        '0LN' => 'E02006292',
        '0LP' => 'E02006292',
        '0LQ' => 'E02006292',
        '0LR' => 'E02006292',
        '0LS' => 'E02006292',
        '0LT' => 'E02006292',
        '0LU' => 'E02006292',
        '0LW' => 'E02006292',
        '0LX' => 'E02006288',
        '0LY' => 'E02006288',
        '0LZ' => 'E02006288',
        '0NA' => 'E02006288',
        '0NB' => 'E02006288',
        '0ND' => 'E02006291',
        '0NE' => 'E02006291',
        '0NF' => 'E02006291',
        '0NG' => 'E02006291',
        '0NH' => 'E02006291',
        '0NJ' => 'E02006291',
        '0NL' => 'E02006291',
        '0NN' => 'E02006291',
        '0NP' => 'E02006291',
        '0NQ' => 'E02006291',
        '0NR' => 'E02006291',
        '0NS' => 'E02006291',
        '0NT' => 'E02006291',
        '0NU' => 'E02006291',
        '0NW' => 'E02006291',
        '0NX' => 'E02006291',
        '0NY' => 'E02006291',
        '0NZ' => 'E02006293',
        '0PA' => 'E02006288',
        '0PB' => 'E02006288',
        '0PD' => 'E02006288',
        '0PE' => 'E02006288',
        '0PF' => 'E02006293',
        '0PG' => 'E02006293',
        '0PH' => 'E02006293',
        '0PJ' => 'E02006293',
        '0PL' => 'E02006293',
        '0PN' => 'E02006293',
        '0PP' => 'E02006293',
        '0PQ' => 'E02006293',
        '0PR' => 'E02006293',
        '0PS' => 'E02006293',
        '0PT' => 'E02006293',
        '0PU' => 'E02006293',
        '0PW' => 'E02006293',
        '0PX' => 'E02006293',
        '0PY' => 'E02006293',
        '0PZ' => 'E02006293',
        '0QA' => 'E02006293',
        '0QB' => 'E02006293',
        '0QD' => 'E02006293',
        '0QE' => 'E02006293',
        '0QF' => 'E02006293',
        '0QG' => 'E02006293',
        '0QH' => 'E02006293',
        '0QJ' => 'E02006293',
        '0QL' => 'E02006293',
        '0QN' => 'E02006288',
        '0QP' => 'E02006293',
        '0QQ' => 'E02006293',
        '0QR' => 'E02006291',
        '0QS' => 'E02006291',
        '0QT' => 'E02006291',
        '0QU' => 'E02006291',
        '0QW' => 'E02006291',
        '0QX' => 'E02006291',
        '0QY' => 'E02006291',
        '0QZ' => 'E02006291',
        '0RA' => 'E02006291',
        '0RB' => 'E02006291',
        '0RD' => 'E02006291',
        '0RE' => 'E02006291',
        '0RF' => 'E02006291',
        '0RG' => 'E02006288',
        '0RH' => 'E02006291',
        '0RJ' => 'E02006291',
        '0RL' => 'E02006291',
        '0RN' => 'E02006291',
        '0RP' => 'E02006291',
        '0RQ' => 'E02006291',
        '0RR' => 'E02006291',
        '0RS' => 'E02006291',
        '0RT' => 'E02006291',
        '0RU' => 'E02006291',
        '0RW' => 'E02006291',
        '0RX' => 'E02006291',
        '0RY' => 'E02006291',
        '0RZ' => 'E02006291',
        '0SA' => 'E02006291',
        '0SB' => 'E02006291',
        '0SD' => 'E02006291',
        '0SE' => 'E02006291',
        '0SF' => 'E02006291',
        '0SG' => 'E02006291',
        '0SH' => 'E02006291',
        '0SJ' => 'E02006291',
        '0SL' => 'E02006291',
        '0SN' => 'E02006291',
        '0SP' => 'E02006291',
        '0SQ' => 'E02006291',
        '0SR' => 'E02006291',
        '0SS' => 'E02006291',
        '0ST' => 'E02006291',
        '0SU' => 'E02006291',
        '0SW' => 'E02006291',
        '0SX' => 'E02006291',
        '0SY' => 'E02006291',
        '0SZ' => 'E02006291',
        '0TA' => 'E02006291',
        '0TB' => 'E02006291',
        '0TD' => 'E02006291',
        '0TE' => 'E02006293',
        '0TF' => 'E02006291',
        '0TG' => 'E02006291',
        '0TH' => 'E02006293',
        '0TJ' => 'E02006291',
        '0TL' => 'E02006291',
        '0TN' => 'E02006291',
        '0TZ' => 'E02006294',
        '0UA' => 'E02006291',
        '0UB' => 'E02006291',
        '0UD' => 'E02006291',
        '0UQ' => 'E02006291',
        '0WA' => 'E02006291',
        '0WB' => 'E02006291',
        '0WD' => 'E02006291',
        '0WE' => 'E02006291',
        '0WH' => 'E02006291',
        '0WP' => 'E02006291',
        '0WQ' => 'E02006291',
        '0WR' => 'E02006291',
        '0WS' => 'E02006291',
        '0WT' => 'E02006291',
        '0WU' => 'E02006291',
        '0WX' => 'E02006291',
        '0WY' => 'E02006291',
        '0WZ' => 'E02006291',
        '0XA' => 'E02006291',
        '0XB' => 'E02006291',
        '6AA' => 'E02006292',
        '6AB' => 'E02006292',
        '6AD' => 'E02006292',
        '6AE' => 'E02006292',
        '6AF' => 'E02006292',
        '6AG' => 'E02006292',
        '6AH' => 'E02006292',
        '6AJ' => 'E02006292',
        '6AL' => 'E02006292',
        '6AN' => 'E02006292',
        '6AP' => 'E02006292',
        '6AQ' => 'E02006292',
        '6AR' => 'E02006292',
        '6AS' => 'E02006291',
        '6AT' => 'E02006291',
        '6AU' => 'E02006292',
        '6AW' => 'E02006292',
        '6AX' => 'E02006292',
        '6AY' => 'E02006292',
        '6AZ' => 'E02006292',
        '6BA' => 'E02006292',
        '6BB' => 'E02006292',
        '6BD' => 'E02006292',
        '6BE' => 'E02006292',
        '6BF' => 'E02006291',
        '6BG' => 'E02006292',
        '6BH' => 'E02006292',
        '6BJ' => 'E02006292',
        '6BL' => 'E02006292',
        '6BN' => 'E02006292',
        '6BP' => 'E02006292',
        '6BQ' => 'E02006292',
        '6BS' => 'E02006292',
        '6BT' => 'E02006292',
        '6BU' => 'E02006292',
        '6BW' => 'E02006292',
        '6BX' => 'E02006292',
        '6BY' => 'E02006292',
        '6BZ' => 'E02006292',
        '6DA' => 'E02006291',
        '6DB' => 'E02006291',
        '6DD' => 'E02006292',
        '6DE' => 'E02006292',
        '6DF' => 'E02006292',
        '6DG' => 'E02006291',
        '6DH' => 'E02006291',
        '6DJ' => 'E02006294',
        '6DL' => 'E02006291',
        '6DN' => 'E02006291',
        '6DP' => 'E02006291',
        '6DQ' => 'E02006291',
        '6DR' => 'E02006291',
        '6DS' => 'E02006291',
        '6DT' => 'E02006291',
        '6DU' => 'E02006291',
        '6DW' => 'E02006291',
        '6DX' => 'E02006291',
        '6DY' => 'E02006291',
        '6DZ' => 'E02006291',
        '6EA' => 'E02006291',
        '6EB' => 'E02006291',
        '6ED' => 'E02006291',
        '6EE' => 'E02006291',
        '6EF' => 'E02006291',
        '6EG' => 'E02006291',
        '6EH' => 'E02006291',
        '6EJ' => 'E02006291',
        '6EL' => 'E02006291',
        '6EN' => 'E02006291',
        '6EP' => 'E02006291',
        '6EQ' => 'E02006291',
        '6ER' => 'E02006291',
        '6ES' => 'E02006291',
        '6ET' => 'E02006291',
        '6EU' => 'E02006291',
        '6EW' => 'E02006292',
        '6EX' => 'E02006291',
        '6EY' => 'E02006291',
        '6EZ' => 'E02006291',
        '6FA' => 'E02006292',
        '6FB' => 'E02006291',
        '6FD' => 'E02006291',
        '6GA' => 'E02006292',
        '6GB' => 'E02006292',
        '6GZ' => 'E02006294',
        '6HA' => 'E02006292',
        '6HB' => 'E02006292',
        '6HD' => 'E02006292',
        '6HE' => 'E02006292',
        '6HF' => 'E02006291',
        '6HG' => 'E02006292',
        '6HH' => 'E02006292',
        '6HJ' => 'E02006292',
        '6HL' => 'E02006292',
        '6HN' => 'E02006292',
        '6HP' => 'E02006292',
        '6HQ' => 'E02006292',
        '6HR' => 'E02006292',
        '6HS' => 'E02006292',
        '6HT' => 'E02006292',
        '6HU' => 'E02006292',
        '6HW' => 'E02006292',
        '6HX' => 'E02006294',
        '6HY' => 'E02006294',
        '6HZ' => 'E02006292',
        '6JA' => 'E02006292',
        '6JB' => 'E02006292',
        '6JD' => 'E02006292',
        '6JE' => 'E02006292',
        '6JF' => 'E02006292',
        '6JG' => 'E02006292',
        '6JH' => 'E02006292',
        '6JJ' => 'E02006292',
        '6JL' => 'E02006292',
        '6JN' => 'E02006292',
        '6JP' => 'E02006292',
        '6JQ' => 'E02006292',
        '6JR' => 'E02006292',
        '6JS' => 'E02006292',
        '6JT' => 'E02006292',
        '6JU' => 'E02006292',
        '6JW' => 'E02006292',
        '6JX' => 'E02006292',
        '6JY' => 'E02006292',
        '6JZ' => 'E02006292',
        '6LA' => 'E02006292',
        '6LB' => 'E02006294',
        '6LD' => 'E02006292',
        '6LE' => 'E02006292',
        '6LF' => 'E02006292',
        '6LG' => 'E02006292',
        '6LH' => 'E02006292',
        '6LJ' => 'E02006292',
        '6LL' => 'E02006292',
        '6LN' => 'E02006292',
        '6LP' => 'E02006292',
        '6LQ' => 'E02006294',
        '6LR' => 'E02006292',
        '6LS' => 'E02006292',
        '6LT' => 'E02006292',
        '6LU' => 'E02006292',
        '6LW' => 'E02006292',
        '6LX' => 'E02006292',
        '6LY' => 'E02006296',
        '6LZ' => 'E02006292',
        '6NA' => 'E02006292',
        '6NB' => 'E02006292',
        '6ND' => 'E02006292',
        '6NE' => 'E02006292',
        '6NF' => 'E02006292',
        '6NG' => 'E02006292',
        '6NH' => 'E02006292',
        '6NJ' => 'E02006292',
        '6NL' => 'E02006292',
        '6NN' => 'E02006292',
        '6NP' => 'E02006292',
        '6NQ' => 'E02006294',
        '6NR' => 'E02006292',
        '6NS' => 'E02006292',
        '6NT' => 'E02006292',
        '6NU' => 'E02006292',
        '6NW' => 'E02006292',
        '6NX' => 'E02006292',
        '6NY' => 'E02006292',
        '6NZ' => 'E02006292',
        '6PA' => 'E02006292',
        '6PB' => 'E02006292',
        '6PD' => 'E02006292',
        '6PE' => 'E02006292',
        '6PF' => 'E02006292',
        '6PG' => 'E02006292',
        '6PH' => 'E02006292',
        '6PJ' => 'E02006292',
        '6PL' => 'E02006292',
        '6PN' => 'E02006292',
        '6PP' => 'E02006292',
        '6PQ' => 'E02006292',
        '6PR' => 'E02006294',
        '6PS' => 'E02006292',
        '6PT' => 'E02006292',
        '6PU' => 'E02006292',
        '6PW' => 'E02006292',
        '6PX' => 'E02006292',
        '6PY' => 'E02006292',
        '6PZ' => 'E02006292',
        '6QA' => 'E02006292',
        '6QB' => 'E02006292',
        '6QD' => 'E02006292',
        '6QE' => 'E02006292',
        '6QF' => 'E02006292',
        '6QG' => 'E02006292',
        '6QH' => 'E02006292',
        '6QJ' => 'E02006292',
        '6QL' => 'E02006292',
        '6QN' => 'E02006292',
        '6QP' => 'E02006292',
        '6QQ' => 'E02006292',
        '6QR' => 'E02006292',
        '6QS' => 'E02006292',
        '6QT' => 'E02006292',
        '6QU' => 'E02006292',
        '6QW' => 'E02006292',
        '6QX' => 'E02006292',
        '6QY' => 'E02006294',
        '6QZ' => 'E02006292',
        '6RA' => 'E02006292',
        '6RB' => 'E02006292',
        '6RD' => 'E02006292',
        '6RE' => 'E02006292',
        '6RF' => 'E02006292',
        '6RG' => 'E02006292',
        '6RH' => 'E02006292',
        '6RJ' => 'E02006292',
        '6RL' => 'E02006292',
        '6RN' => 'E02006292',
        '6RP' => 'E02006292',
        '6RQ' => 'E02006292',
        '6RR' => 'E02006292',
        '6RS' => 'E02006292',
        '6RT' => 'E02006292',
        '6RU' => 'E02006292',
        '6RW' => 'E02006292',
        '6RX' => 'E02006292',
        '6RY' => 'E02006292',
        '6RZ' => 'E02006292',
        '6SA' => 'E02006292',
        '6SB' => 'E02006292',
        '6SD' => 'E02006292',
        '6SE' => 'E02006292',
        '6SF' => 'E02006292',
        '6SG' => 'E02006292',
        '6SH' => 'E02006292',
        '6SJ' => 'E02006292',
        '6SL' => 'E02006292',
        '6SN' => 'E02006292',
        '6SP' => 'E02006292',
        '6SQ' => 'E02006292',
        '6SR' => 'E02006292',
        '6SS' => 'E02006292',
        '6ST' => 'E02006292',
        '6SU' => 'E02006292',
        '6SW' => 'E02006292',
        '6SX' => 'E02006292',
        '6SY' => 'E02006292',
        '6SZ' => 'E02006292',
        '6TA' => 'E02006292',
        '6TB' => 'E02006292',
        '6TD' => 'E02006292',
        '6TE' => 'E02006292',
        '6TF' => 'E02006292',
        '6TG' => 'E02006292',
        '6TH' => 'E02006292',
        '6TJ' => 'E02006292',
        '6TL' => 'E02006292',
        '6TN' => 'E02006292',
        '6TP' => 'E02006292',
        '6TQ' => 'E02006292',
        '6TR' => 'E02006292',
        '6TS' => 'E02006292',
        '6TT' => 'E02006292',
        '6TU' => 'E02006292',
        '6TW' => 'E02006292',
        '6TX' => 'E02006292',
        '6TY' => 'E02006292',
        '6TZ' => 'E02006292',
        '6UA' => 'E02006292',
        '6UB' => 'E02006292',
        '6UD' => 'E02006292',
        '6UE' => 'E02006292',
        '6UF' => 'E02006292',
        '6UG' => 'E02006292',
        '6UH' => 'E02006292',
        '6UJ' => 'E02006292',
        '6UL' => 'E02006292',
        '6UN' => 'E02006292',
        '6UP' => 'E02006292',
        '6UQ' => 'E02006292',
        '6UR' => 'E02006292',
        '6US' => 'E02006292',
        '6UT' => 'E02006292',
        '6UU' => 'E02006292',
        '6UW' => 'E02006292',
        '6UX' => 'E02006292',
        '6UY' => 'E02006292',
        '6UZ' => 'E02006292',
        '6WA' => 'E02006292',
        '6WB' => 'E02006294',
        '6WD' => 'E02006294',
        '6WE' => 'E02006294',
        '6WF' => 'E02006294',
        '6WG' => 'E02006294',
        '6WH' => 'E02006294',
        '6WJ' => 'E02006294',
        '6WL' => 'E02006294',
        '6WN' => 'E02006294',
        '6WP' => 'E02006294',
        '6WQ' => 'E02006294',
        '6WR' => 'E02006292',
        '6WT' => 'E02006294',
        '6WU' => 'E02006294',
        '6WY' => 'E02006294',
        '6WZ' => 'E02006294',
        '6XA' => 'E02006292',
        '6XB' => 'E02006292',
        '6XD' => 'E02006292',
        '6XE' => 'E02006292',
        '6XH' => 'E02006292',
        '6XJ' => 'E02006292',
        '6XL' => 'E02006292',
        '6ZP' => 'E02006292',
        '6ZR' => 'E02006292',
        '6ZU' => 'E02006294',
        '6ZY' => 'E02006294',
        '7AA' => 'E02006288',
        '7AB' => 'E02006288',
        '7AD' => 'E02006288',
        '7AE' => 'E02006288',
        '7AF' => 'E02006288',
        '7AG' => 'E02006288',
        '7AH' => 'E02006288',
        '7AJ' => 'E02006288',
        '7AL' => 'E02006288',
        '7AN' => 'E02006288',
        '7AP' => 'E02006288',
        '7AQ' => 'E02006288',
        '7AR' => 'E02006288',
        '7AS' => 'E02006288',
        '7AT' => 'E02006288',
        '7AU' => 'E02006288',
        '7AW' => 'E02006288',
        '7AX' => 'E02006288',
        '7AY' => 'E02006288',
        '7AZ' => 'E02006288',
        '7BA' => 'E02006288',
        '7BB' => 'E02006288',
        '7BD' => 'E02006288',
        '7BE' => 'E02006263',
        '7BF' => 'E02006263',
        '7BG' => 'E02006288',
        '7BH' => 'E02006288',
        '7BJ' => 'E02006288',
        '7BL' => 'E02006288',
        '7BN' => 'E02006288',
        '7BP' => 'E02006288',
        '7BQ' => 'E02006288',
        '7BS' => 'E02006288',
        '7BT' => 'E02006288',
        '7BU' => 'E02006288',
        '7BW' => 'E02006288',
        '7BX' => 'E02006288',
        '7BY' => 'E02006288',
        '7BZ' => 'E02006288',
        '7DA' => 'E02006288',
        '7DB' => 'E02006288',
        '7DD' => 'E02006288',
        '7DE' => 'E02006288',
        '7DF' => 'E02006288',
        '7DG' => 'E02006288',
        '7DH' => 'E02006288',
        '7DJ' => 'E02006288',
        '7DL' => 'E02006288',
        '7DN' => 'E02006288',
        '7DP' => 'E02006288',
        '7DQ' => 'E02006288',
        '7DR' => 'E02006288',
        '7DS' => 'E02006288',
        '7DT' => 'E02006288',
        '7DU' => 'E02006288',
        '7DW' => 'E02006288',
        '7DX' => 'E02006288',
        '7DY' => 'E02006263',
        '7DZ' => 'E02006294',
        '7EA' => 'E02006263',
        '7EB' => 'E02006263',
        '7ED' => 'E02006263',
        '7EE' => 'E02006263',
        '7EF' => 'E02006263',
        '7EG' => 'E02006263',
        '7EH' => 'E02006263',
        '7EJ' => 'E02006263',
        '7EL' => 'E02006263',
        '7EN' => 'E02006263',
        '7EP' => 'E02006263',
        '7EQ' => 'E02006263',
        '7ER' => 'E02006263',
        '7ES' => 'E02006263',
        '7ET' => 'E02006263',
        '7EU' => 'E02006263',
        '7EW' => 'E02006263',
        '7EX' => 'E02006263',
        '7EY' => 'E02006263',
        '7EZ' => 'E02006263',
        '7FA' => 'E02006288',
        '7FD' => 'E02006263',
        '7GX' => 'E02006263',
        '7GY' => 'E02006288',
        '7GZ' => 'E02006288',
        '7HA' => 'E02006263',
        '7HB' => 'E02006263',
        '7HD' => 'E02006263',
        '7HE' => 'E02006263',
        '7HF' => 'E02006263',
        '7HG' => 'E02006263',
        '7HH' => 'E02006263',
        '7HJ' => 'E02006263',
        '7HL' => 'E02006263',
        '7HN' => 'E02006263',
        '7HP' => 'E02006263',
        '7HR' => 'E02006263',
        '7HS' => 'E02006263',
        '7HT' => 'E02006263',
        '7HU' => 'E02006263',
        '7HW' => 'E02006263',
        '7HX' => 'E02006263',
        '7HY' => 'E02006263',
        '7HZ' => 'E02006263',
        '7JA' => 'E02006263',
        '7JB' => 'E02006263',
        '7JD' => 'E02006263',
        '7JE' => 'E02006263',
        '7JF' => 'E02006263',
        '7JG' => 'E02006263',
        '7JH' => 'E02006263',
        '7JJ' => 'E02006263',
        '7JL' => 'E02006263',
        '7JN' => 'E02006263',
        '7JP' => 'E02006288',
        '7JQ' => 'E02006263',
        '7JR' => 'E02006288',
        '7JS' => 'E02006288',
        '7JT' => 'E02006288',
        '7JU' => 'E02006288',
        '7JW' => 'E02006263',
        '7JX' => 'E02006288',
        '7JY' => 'E02006288',
        '7JZ' => 'E02006288',
        '7LA' => 'E02006288',
        '7LB' => 'E02006288',
        '7LD' => 'E02006288',
        '7LE' => 'E02006288',
        '7LF' => 'E02006288',
        '7LG' => 'E02006288',
        '7LH' => 'E02006288',
        '7LJ' => 'E02006288',
        '7LL' => 'E02006288',
        '7LN' => 'E02006288',
        '7LP' => 'E02006263',
        '7LQ' => 'E02006288',
        '7LR' => 'E02006263',
        '7LS' => 'E02006263',
        '7LT' => 'E02006263',
        '7LU' => 'E02006263',
        '7LW' => 'E02006288',
        '7LX' => 'E02006263',
        '7LY' => 'E02006263',
        '7LZ' => 'E02006263',
        '7NA' => 'E02006263',
        '7NB' => 'E02006288',
        '7ND' => 'E02006288',
        '7NE' => 'E02006263',
        '7NF' => 'E02006263',
        '7NG' => 'E02006263',
        '7NH' => 'E02006263',
        '7NJ' => 'E02006263',
        '7NL' => 'E02006263',
        '7NN' => 'E02006263',
        '7NP' => 'E02006263',
        '7NQ' => 'E02006263',
        '7NR' => 'E02006263',
        '7NS' => 'E02006263',
        '7NT' => 'E02006263',
        '7NU' => 'E02006263',
        '7NW' => 'E02006263',
        '7NX' => 'E02006263',
        '7NY' => 'E02006263',
        '7NZ' => 'E02006263',
        '7PA' => 'E02006263',
        '7PB' => 'E02006263',
        '7PD' => 'E02006263',
        '7PE' => 'E02006263',
        '7PF' => 'E02006263',
        '7PG' => 'E02006263',
        '7PH' => 'E02006263',
        '7PJ' => 'E02006288',
        '7PL' => 'E02006288',
        '7PN' => 'E02006288',
        '7PP' => 'E02006288',
        '7PQ' => 'E02006263',
        '7PR' => 'E02006288',
        '7PS' => 'E02006288',
        '7PT' => 'E02006288',
        '7PU' => 'E02006288',
        '7PW' => 'E02006288',
        '7PX' => 'E02006288',
        '7PY' => 'E02006288',
        '7PZ' => 'E02006288',
        '7QA' => 'E02006288',
        '7QB' => 'E02006288',
        '7QD' => 'E02006288',
        '7QE' => 'E02006288',
        '7QF' => 'E02006288',
        '7QG' => 'E02006288',
        '7QH' => 'E02006288',
        '7QJ' => 'E02006288',
        '7QL' => 'E02006288',
        '7QN' => 'E02006288',
        '7QP' => 'E02006288',
        '7QQ' => 'E02006288',
        '7QR' => 'E02006288',
        '7QS' => 'E02006288',
        '7QT' => 'E02006288',
        '7QU' => 'E02006288',
        '7QW' => 'E02006288',
        '7QX' => 'E02006288',
        '7QY' => 'E02006288',
        '7QZ' => 'E02006288',
        '7RA' => 'E02006288',
        '7RB' => 'E02006288',
        '7RD' => 'E02006288',
        '7RE' => 'E02006288',
        '7RF' => 'E02006288',
        '7RG' => 'E02006288',
        '7RH' => 'E02006288',
        '7RJ' => 'E02006288',
        '7RL' => 'E02006288',
        '7RN' => 'E02006288',
        '7RP' => 'E02006288',
        '7RQ' => 'E02006263',
        '7RR' => 'E02006288',
        '7RS' => 'E02006288',
        '7RT' => 'E02006288',
        '7RU' => 'E02006288',
        '7RW' => 'E02006288',
        '7RX' => 'E02006288',
        '7RY' => 'E02006288',
        '7RZ' => 'E02006288',
        '7SA' => 'E02006288',
        '7SB' => 'E02006288',
        '7SD' => 'E02006288',
        '7SE' => 'E02006288',
        '7SF' => 'E02006288',
        '7SG' => 'E02006288',
        '7SH' => 'E02006288',
        '7SJ' => 'E02006288',
        '7SL' => 'E02006288',
        '7SN' => 'E02006288',
        '7SP' => 'E02006288',
        '7SQ' => 'E02006288',
        '7SR' => 'E02006288',
        '7SS' => 'E02006288',
        '7ST' => 'E02006263',
        '7SU' => 'E02006294',
        '7SW' => 'E02006288',
        '7SY' => 'E02006288',
        '7SZ' => 'E02006288',
        '7TZ' => 'E02006294',
        '7WA' => 'E02006294',
        '7WB' => 'E02006294',
        '7WY' => 'E02006294',
        '7WZ' => 'E02006288',
        '8AA' => 'E02006288',
        '8AB' => 'E02006288',
        '8AD' => 'E02006288',
        '8AE' => 'E02006288',
        '8AF' => 'E02006288',
        '8AG' => 'E02006288',
        '8AH' => 'E02006288',
        '8AJ' => 'E02006288',
        '8AL' => 'E02006288',
        '8AN' => 'E02006288',
        '8AP' => 'E02006288',
        '8AQ' => 'E02006288',
        '8AR' => 'E02006288',
        '8AS' => 'E02006288',
        '8AT' => 'E02006288',
        '8AU' => 'E02006288',
        '8AW' => 'E02006288',
        '8AX' => 'E02006263',
        '8AY' => 'E02006263',
        '8AZ' => 'E02006263',
        '8BA' => 'E02006263',
        '8BB' => 'E02006263',
        '8BD' => 'E02006263',
        '8BE' => 'E02006263',
        '8BF' => 'E02006263',
        '8BG' => 'E02006263',
        '8BH' => 'E02006263',
        '8BJ' => 'E02006263',
        '8BL' => 'E02006263',
        '8BN' => 'E02006263',
        '8BP' => 'E02006263',
        '8BQ' => 'E02006263',
        '8BS' => 'E02006288',
        '8BT' => 'E02006288',
        '8BU' => 'E02006263',
        '8BW' => 'E02006263',
        '8BX' => 'E02006288',
        '8BY' => 'E02006288',
        '8BZ' => 'E02006288',
        '8DA' => 'E02006263',
        '8DB' => 'E02006288',
        '8DD' => 'E02006288',
        '8DE' => 'E02006288',
        '8DF' => 'E02006263',
        '8DG' => 'E02006263',
        '8DH' => 'E02006263',
        '8DJ' => 'E02006263',
        '8DL' => 'E02006263',
        '8DN' => 'E02006263',
        '8DP' => 'E02006263',
        '8DQ' => 'E02006263',
        '8DR' => 'E02006263',
        '8DS' => 'E02006263',
        '8DT' => 'E02006263',
        '8DU' => 'E02006263',
        '8DW' => 'E02006263',
        '8DX' => 'E02006263',
        '8DY' => 'E02006263',
        '8DZ' => 'E02006263',
        '8EA' => 'E02006263',
        '8EB' => 'E02006263',
        '8ED' => 'E02006263',
        '8EE' => 'E02006263',
        '8EF' => 'E02006288',
        '8EG' => 'E02006263',
        '8EH' => 'E02006263',
        '8EJ' => 'E02006263',
        '8EL' => 'E02006263',
        '8EN' => 'E02006263',
        '8EP' => 'E02006263',
        '8EQ' => 'E02006263',
        '8ER' => 'E02006263',
        '8ES' => 'E02006263',
        '8ET' => 'E02006263',
        '8EU' => 'E02006263',
        '8EW' => 'E02006263',
        '8EX' => 'E02006263',
        '8EY' => 'E02006287',
        '8EZ' => 'E02006263',
        '8FA' => 'E02006263',
        '8FB' => 'E02006263',
        '8FD' => 'E02006263',
        '8FE' => 'E02006288',
        '8FF' => 'E02006263',
        '8HA' => 'E02006263',
        '8HB' => 'E02006263',
        '8HD' => 'E02006263',
        '8HE' => 'E02006263',
        '8HF' => 'E02006263',
        '8HG' => 'E02006263',
        '8HH' => 'E02006263',
        '8HJ' => 'E02006263',
        '8HL' => 'E02006263',
        '8HN' => 'E02006263',
        '8HP' => 'E02006263',
        '8HQ' => 'E02006263',
        '8HR' => 'E02006263',
        '8HS' => 'E02006263',
        '8HT' => 'E02006263',
        '8HU' => 'E02006263',
        '8HW' => 'E02006263',
        '8HX' => 'E02006263',
        '8HY' => 'E02006263',
        '8HZ' => 'E02006263',
        '8JA' => 'E02006263',
        '8JB' => 'E02006288',
        '8JE' => 'E02006288',
        '8JF' => 'E02006288',
        '8JG' => 'E02006288',
        '8JH' => 'E02006288',
        '8JJ' => 'E02006288',
        '8JL' => 'E02006288',
        '8JN' => 'E02006288',
        '8JP' => 'E02006288',
        '8JQ' => 'E02006288',
        '8JR' => 'E02006288',
        '8JS' => 'E02006288',
        '8JT' => 'E02006288',
        '8JU' => 'E02006288',
        '8JW' => 'E02006288',
        '8JX' => 'E02006288',
        '8JY' => 'E02006288',
        '8JZ' => 'E02006288',
        '8LA' => 'E02006288',
        '8LB' => 'E02006288',
        '8LD' => 'E02006288',
        '8LE' => 'E02006288',
        '8LF' => 'E02006288',
        '8LG' => 'E02006288',
        '8LH' => 'E02006288',
        '8LJ' => 'E02006288',
        '8LL' => 'E02006288',
        '8LN' => 'E02006288',
        '8LP' => 'E02006288',
        '8LQ' => 'E02006288',
        '8LR' => 'E02006288',
        '8LS' => 'E02006288',
        '8LT' => 'E02006288',
        '8LU' => 'E02006288',
        '8LW' => 'E02006288',
        '8LX' => 'E02006288',
        '8LY' => 'E02006288',
        '8LZ' => 'E02006288',
        '8NA' => 'E02006288',
        '8NB' => 'E02006288',
        '8ND' => 'E02006288',
        '8NE' => 'E02006288',
        '8NF' => 'E02006288',
        '8NG' => 'E02006294',
        '8NH' => 'E02006294',
        '8NJ' => 'E02006294',
        '8WA' => 'E02006294',
        '8WE' => 'E02006288',
        '8WQ' => 'E02006294',
        '8WX' => 'E02006294',
        '8WY' => 'E02006294',
        '8WZ' => 'E02006288',
        '8YQ' => 'E02006294',
        '8YR' => 'E02006294',
        '9AA' => 'E02006288',
        '9AB' => 'E02006288',
        '9AD' => 'E02006288',
        '9AE' => 'E02006288',
        '9AF' => 'E02006288',
        '9AG' => 'E02006288',
        '9AH' => 'E02006288',
        '9AJ' => 'E02006288',
        '9AL' => 'E02006288',
        '9AN' => 'E02006288',
        '9AP' => 'E02006288',
        '9AQ' => 'E02006288',
        '9AR' => 'E02006288',
        '9AS' => 'E02006288',
        '9AT' => 'E02006288',
        '9AU' => 'E02006288',
        '9AW' => 'E02006288',
        '9AX' => 'E02006288',
        '9AY' => 'E02006288',
        '9AZ' => 'E02006288',
        '9BA' => 'E02006288',
        '9BB' => 'E02006288',
        '9BD' => 'E02006288',
        '9BE' => 'E02006288',
        '9BF' => 'E02006288',
        '9BG' => 'E02006288',
        '9BH' => 'E02006288',
        '9BJ' => 'E02006288',
        '9BL' => 'E02006288',
        '9BN' => 'E02006288',
        '9BP' => 'E02006288',
        '9BQ' => 'E02006288',
        '9BS' => 'E02006288',
        '9BT' => 'E02006288',
        '9BU' => 'E02006288',
        '9BW' => 'E02006288',
        '9BX' => 'E02006288',
        '9BY' => 'E02006288',
        '9BZ' => 'E02006288',
        '9DA' => 'E02006288',
        '9DB' => 'E02006288',
        '9DD' => 'E02006288',
        '9DE' => 'E02006288',
        '9DF' => 'E02006288',
        '9DG' => 'E02006288',
        '9DH' => 'E02006288',
        '9DJ' => 'E02006288',
        '9DL' => 'E02006288',
        '9DN' => 'E02006288',
        '9DP' => 'E02006288',
        '9DQ' => 'E02006288',
        '9DR' => 'E02006288',
        '9DS' => 'E02006288',
        '9DT' => 'E02006288',
        '9DU' => 'E02006288',
        '9DW' => 'E02006288',
        '9DX' => 'E02006288',
        '9DY' => 'E02006288',
        '9DZ' => 'E02006288',
        '9EA' => 'E02006288',
        '9EB' => 'E02006288',
        '9ED' => 'E02006288',
        '9EE' => 'E02006288',
        '9EF' => 'E02006288',
        '9EG' => 'E02006288',
        '9EH' => 'E02006288',
        '9EJ' => 'E02006288',
        '9EL' => 'E02006288',
        '9EN' => 'E02006288',
        '9EP' => 'E02006288',
        '9EQ' => 'E02006288',
        '9ER' => 'E02006288',
        '9ES' => 'E02006288',
        '9ET' => 'E02006288',
        '9EU' => 'E02006288',
        '9EW' => 'E02006288',
        '9EX' => 'E02006288',
        '9EY' => 'E02006288',
        '9EZ' => 'E02006288',
        '9FA' => 'E02006288',
        '9FB' => 'E02006288',
        '9FD' => 'E02006288',
        '9FE' => 'E02006288',
        '9FF' => 'E02006288',
        '9FG' => 'E02006288',
        '9FH' => 'E02006288',
        '9FJ' => 'E02006288',
        '9FL' => 'E02006288',
        '9FN' => 'E02006288',
        '9FP' => 'E02006288',
        '9FQ' => 'E02006288',
        '9FR' => 'E02006288',
        '9FS' => 'E02006288',
        '9FT' => 'E02006288',
        '9FU' => 'E02006288',
        '9FW' => 'E02006288',
        '9FX' => 'E02006288',
        '9FY' => 'E02006288',
        '9FZ' => 'E02006288',
        '9GA' => 'E02006288',
        '9GB' => 'E02006288',
        '9GD' => 'E02006288',
        '9HA' => 'E02006288',
        '9HB' => 'E02006288',
        '9HD' => 'E02006288',
        '9HE' => 'E02006288',
        '9HF' => 'E02006288',
        '9HG' => 'E02006288',
        '9HH' => 'E02006288',
        '9HJ' => 'E02006288',
        '9HL' => 'E02006288',
        '9HN' => 'E02006288',
        '9HP' => 'E02006288',
        '9HQ' => 'E02006288',
        '9HR' => 'E02006288',
        '9HS' => 'E02006288',
        '9HT' => 'E02006288',
        '9HU' => 'E02006288',
        '9HW' => 'E02006288',
        '9HX' => 'E02006288',
        '9HY' => 'E02006288',
        '9HZ' => 'E02006288',
        '9JA' => 'E02006288',
        '9JB' => 'E02006288',
        '9JD' => 'E02006288',
        '9JE' => 'E02006288',
        '9JF' => 'E02006288',
        '9JG' => 'E02006288',
        '9JH' => 'E02006288',
        '9JJ' => 'E02006288',
        '9JL' => 'E02006288',
        '9JN' => 'E02006288',
        '9JP' => 'E02006288',
        '9JQ' => 'E02006288',
        '9JR' => 'E02006288',
        '9JS' => 'E02006288',
        '9JT' => 'E02006288',
        '9JU' => 'E02006288',
        '9JW' => 'E02006288',
        '9JX' => 'E02006288',
        '9JY' => 'E02006288',
        '9JZ' => 'E02006288',
        '9LA' => 'E02006288',
        '9LB' => 'E02006288',
        '9LD' => 'E02006288',
        '9LE' => 'E02006288',
        '9LF' => 'E02006288',
        '9LG' => 'E02006288',
        '9LH' => 'E02006288',
        '9LJ' => 'E02006288',
        '9LL' => 'E02006288',
        '9LN' => 'E02006288',
        '9LP' => 'E02006288',
        '9LQ' => 'E02006288',
        '9LR' => 'E02006288',
        '9LS' => 'E02006288',
        '9LT' => 'E02006288',
        '9LU' => 'E02006288',
        '9LW' => 'E02006288',
        '9LX' => 'E02006288',
        '9LY' => 'E02006288',
        '9LZ' => 'E02006288',
        '9NA' => 'E02006288',
        '9NB' => 'E02006288',
        '9ND' => 'E02006288',
        '9NE' => 'E02006288',
        '9NF' => 'E02006288',
        '9NG' => 'E02006288',
        '9NH' => 'E02006288',
        '9NJ' => 'E02006288',
        '9NL' => 'E02006288',
        '9NN' => 'E02006288',
        '9NP' => 'E02006288',
        '9NQ' => 'E02006288',
        '9NR' => 'E02006288',
        '9NS' => 'E02006288',
        '9NT' => 'E02006288',
        '9NU' => 'E02006288',
        '9NW' => 'E02006288',
        '9NX' => 'E02006288',
        '9NY' => 'E02006288',
        '9NZ' => 'E02006288',
        '9PA' => 'E02006288',
        '9PB' => 'E02006288',
        '9PD' => 'E02006288',
        '9PE' => 'E02006288',
        '9PF' => 'E02006288',
        '9PG' => 'E02006288',
        '9PH' => 'E02006288',
        '9PJ' => 'E02006288',
        '9PL' => 'E02006288',
        '9PP' => 'E02006288',
        '9PQ' => 'E02006288',
        '9PR' => 'E02006288',
        '9PS' => 'E02006288',
        '9PT' => 'E02006288',
        '9PU' => 'E02006288',
        '9PW' => 'E02006288',
        '9PX' => 'E02006288',
        '9PY' => 'E02006288',
        '9PZ' => 'E02006288',
        '9QA' => 'E02006288',
        '9QB' => 'E02006288',
        '9QD' => 'E02006288',
        '9QE' => 'E02006288',
        '9QF' => 'E02006288',
        '9QG' => 'E02006288',
        '9QH' => 'E02006288',
        '9QJ' => 'E02006288',
        '9QL' => 'E02006288',
        '9QN' => 'E02006288',
        '9QP' => 'E02006288',
        '9QQ' => 'E02006288',
        '9QR' => 'E02006288',
        '9QS' => 'E02006288',
        '9QT' => 'E02006288',
        '9QU' => 'E02006288',
        '9QW' => 'E02006288',
        '9QX' => 'E02006288',
        '9QY' => 'E02006288',
        '9QZ' => 'E02006288',
        '9RA' => 'E02006288',
        '9RB' => 'E02006288',
        '9RD' => 'E02006288',
        '9RE' => 'E02006288',
        '9RF' => 'E02006288',
        '9RG' => 'E02006288',
        '9RH' => 'E02006288',
        '9RJ' => 'E02006288',
        '9RL' => 'E02006288',
        '9RN' => 'E02006288',
        '9RP' => 'E02006288',
        '9RQ' => 'E02006288',
        '9RR' => 'E02006288',
        '9RS' => 'E02006288',
        '9RT' => 'E02006288',
        '9RU' => 'E02006288',
        '9RW' => 'E02006288',
        '9RX' => 'E02006288',
        '9RY' => 'E02006288',
        '9RZ' => 'E02006288',
        '9SA' => 'E02006288',
        '9SB' => 'E02006288',
        '9SD' => 'E02006288',
        '9SE' => 'E02006288',
        '9SF' => 'E02006288',
        '9SG' => 'E02006288',
        '9SH' => 'E02006288',
        '9SJ' => 'E02006288',
        '9SL' => 'E02006288',
        '9SN' => 'E02006288',
        '9SP' => 'E02006288',
        '9SQ' => 'E02006288',
        '9SR' => 'E02006288',
        '9SS' => 'E02006288',
        '9ST' => 'E02006288',
        '9SU' => 'E02006288',
        '9SW' => 'E02006294',
        '9SX' => 'E02006288',
        '9SY' => 'E02006294',
        '9SZ' => 'E02006288',
        '9TA' => 'E02006288',
        '9TB' => 'E02006288',
        '9TD' => 'E02006288',
        '9TE' => 'E02006288',
        '9TF' => 'E02006288',
        '9WA' => 'E02006294',
        '9WD' => 'E02006294',
        '9WT' => 'E02006294',
        '9WU' => 'E02006288',
        '9WW' => 'E02006288',
        '9WX' => 'E02006288',
        '9WY' => 'E02006288',
        '9WZ' => 'E02006294',
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
