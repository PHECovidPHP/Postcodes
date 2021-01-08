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
final class NN16
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005645',
        '0AB' => 'E02005645',
        '0AD' => 'E02005645',
        '0AE' => 'E02005643',
        '0AF' => 'E02005645',
        '0AG' => 'E02005643',
        '0AH' => 'E02005645',
        '0AJ' => 'E02005645',
        '0AL' => 'E02005645',
        '0AN' => 'E02005645',
        '0AP' => 'E02005645',
        '0AQ' => 'E02005645',
        '0AR' => 'E02005645',
        '0AS' => 'E02005645',
        '0AT' => 'E02005645',
        '0AU' => 'E02005645',
        '0AW' => 'E02005645',
        '0AX' => 'E02005645',
        '0AY' => 'E02005644',
        '0AZ' => 'E02005645',
        '0BA' => 'E02005645',
        '0BB' => 'E02005645',
        '0BE' => 'E02005645',
        '0BF' => 'E02005645',
        '0BG' => 'E02005645',
        '0BH' => 'E02005645',
        '0BJ' => 'E02005645',
        '0BL' => 'E02005645',
        '0BN' => 'E02005645',
        '0BP' => 'E02005645',
        '0BQ' => 'E02005645',
        '0BS' => 'E02005645',
        '0BT' => 'E02005645',
        '0BU' => 'E02005645',
        '0BW' => 'E02005645',
        '0BX' => 'E02005644',
        '0BY' => 'E02005645',
        '0BZ' => 'E02005644',
        '0DA' => 'E02005644',
        '0DB' => 'E02005644',
        '0DD' => 'E02005644',
        '0DE' => 'E02005645',
        '0DF' => 'E02005645',
        '0DG' => 'E02005645',
        '0DH' => 'E02005645',
        '0DJ' => 'E02005645',
        '0DL' => 'E02005645',
        '0DN' => 'E02005645',
        '0DP' => 'E02005645',
        '0DQ' => 'E02005644',
        '0DR' => 'E02005645',
        '0DS' => 'E02005644',
        '0DT' => 'E02005645',
        '0DU' => 'E02005645',
        '0DW' => 'E02005644',
        '0DX' => 'E02005645',
        '0DY' => 'E02005645',
        '0DZ' => 'E02005644',
        '0EA' => 'E02005645',
        '0EB' => 'E02005644',
        '0ED' => 'E02005645',
        '0EE' => 'E02005644',
        '0EF' => 'E02005644',
        '0EG' => 'E02005645',
        '0EH' => 'E02005644',
        '0EL' => 'E02005644',
        '0EN' => 'E02005644',
        '0EP' => 'E02005644',
        '0ER' => 'E02005644',
        '0ES' => 'E02005644',
        '0EW' => 'E02005644',
        '0GL' => 'E02005645',
        '0HA' => 'E02005644',
        '0HB' => 'E02005644',
        '0HD' => 'E02005644',
        '0HE' => 'E02005644',
        '0HF' => 'E02005644',
        '0HG' => 'E02005644',
        '0HQ' => 'E02005644',
        '0HR' => 'E02005644',
        '0HS' => 'E02005644',
        '0HT' => 'E02005644',
        '0HU' => 'E02005644',
        '0HX' => 'E02005644',
        '0HY' => 'E02005644',
        '0HZ' => 'E02005644',
        '0JA' => 'E02005644',
        '0JB' => 'E02005644',
        '0JD' => 'E02005644',
        '0JE' => 'E02005644',
        '0JF' => 'E02005644',
        '0JG' => 'E02005644',
        '0JH' => 'E02005644',
        '0JJ' => 'E02005644',
        '0JL' => 'E02005644',
        '0JN' => 'E02005644',
        '0JQ' => 'E02005644',
        '0JR' => 'E02005645',
        '0JW' => 'E02005644',
        '0LA' => 'E02005643',
        '0LB' => 'E02005643',
        '0LD' => 'E02005643',
        '0LE' => 'E02005643',
        '0LF' => 'E02005643',
        '0LG' => 'E02005643',
        '0LH' => 'E02005643',
        '0LJ' => 'E02005643',
        '0LL' => 'E02005643',
        '0LN' => 'E02005643',
        '0LP' => 'E02005643',
        '0LQ' => 'E02005643',
        '0LR' => 'E02005643',
        '0LS' => 'E02005643',
        '0LT' => 'E02005643',
        '0LU' => 'E02005643',
        '0LW' => 'E02005643',
        '0LX' => 'E02005643',
        '0LY' => 'E02005643',
        '0LZ' => 'E02005643',
        '0NA' => 'E02005643',
        '0NB' => 'E02005643',
        '0ND' => 'E02005643',
        '0NE' => 'E02005643',
        '0NF' => 'E02005643',
        '0NG' => 'E02005643',
        '0NH' => 'E02005643',
        '0NJ' => 'E02005643',
        '0NL' => 'E02005643',
        '0NN' => 'E02005643',
        '0NQ' => 'E02005643',
        '0NT' => 'E02005643',
        '0NU' => 'E02005643',
        '0NW' => 'E02005643',
        '0NX' => 'E02005643',
        '0NY' => 'E02005643',
        '0NZ' => 'E02005643',
        '0PA' => 'E02005643',
        '0PB' => 'E02005643',
        '0PD' => 'E02005643',
        '0PE' => 'E02005643',
        '0PF' => 'E02005643',
        '0PG' => 'E02005643',
        '0PH' => 'E02005643',
        '0PJ' => 'E02005643',
        '0PL' => 'E02005643',
        '0PN' => 'E02005643',
        '0PP' => 'E02005643',
        '0PQ' => 'E02005643',
        '0PR' => 'E02005643',
        '0PS' => 'E02005643',
        '0PT' => 'E02005643',
        '0PU' => 'E02005643',
        '0PW' => 'E02005643',
        '0PX' => 'E02005643',
        '0PY' => 'E02005643',
        '0PZ' => 'E02005643',
        '0QA' => 'E02005643',
        '0QB' => 'E02005643',
        '0QD' => 'E02005643',
        '0QE' => 'E02005643',
        '0QF' => 'E02005643',
        '0QG' => 'E02005643',
        '0QH' => 'E02005643',
        '0QJ' => 'E02005643',
        '0QL' => 'E02005643',
        '0QN' => 'E02005643',
        '0QP' => 'E02005643',
        '0QQ' => 'E02005643',
        '0QR' => 'E02005643',
        '0QS' => 'E02005643',
        '0QT' => 'E02005643',
        '0QZ' => 'E02005645',
        '0RA' => 'E02005644',
        '0RB' => 'E02005644',
        '0RD' => 'E02005644',
        '0RE' => 'E02005644',
        '0RF' => 'E02005644',
        '0RG' => 'E02005644',
        '0RH' => 'E02005644',
        '0RJ' => 'E02005644',
        '0RL' => 'E02005644',
        '0RN' => 'E02005644',
        '0RP' => 'E02005644',
        '0RQ' => 'E02005644',
        '0RR' => 'E02005644',
        '0RS' => 'E02005644',
        '0RT' => 'E02005644',
        '0RU' => 'E02005644',
        '0RW' => 'E02005644',
        '0RX' => 'E02005644',
        '0RY' => 'E02005645',
        '0RZ' => 'E02005644',
        '0SA' => 'E02005644',
        '0SB' => 'E02005645',
        '0SD' => 'E02005644',
        '0SE' => 'E02005645',
        '0SF' => 'E02005645',
        '0SG' => 'E02005645',
        '0SH' => 'E02005645',
        '0SJ' => 'E02005645',
        '0SL' => 'E02005645',
        '0SN' => 'E02005645',
        '0SP' => 'E02005645',
        '0SQ' => 'E02005644',
        '0SR' => 'E02005645',
        '0SS' => 'E02005645',
        '0SU' => 'E02005645',
        '0SW' => 'E02005645',
        '0SX' => 'E02005645',
        '0SY' => 'E02005645',
        '0SZ' => 'E02005645',
        '0TA' => 'E02005644',
        '0TB' => 'E02005644',
        '0TD' => 'E02005644',
        '0TE' => 'E02005644',
        '0TF' => 'E02005644',
        '0TG' => 'E02005645',
        '0TH' => 'E02005644',
        '0TJ' => 'E02005644',
        '0TL' => 'E02005645',
        '0TN' => 'E02005644',
        '0TP' => 'E02005644',
        '0TQ' => 'E02005644',
        '0TS' => 'E02005644',
        '0TT' => 'E02005644',
        '0TU' => 'E02005644',
        '0TW' => 'E02005644',
        '0TY' => 'E02005645',
        '0UE' => 'E02005643',
        '0UF' => 'E02005643',
        '0UG' => 'E02005643',
        '0UQ' => 'E02005643',
        '0WA' => 'E02005645',
        '0WZ' => 'E02005645',
        '0YB' => 'E02005645',
        '0YJ' => 'E02005645',
        '0YN' => 'E02005645',
        '0YP' => 'E02005644',
        '0YQ' => 'E02005645',
        '0YR' => 'E02005644',
        '0YS' => 'E02005644',
        '0YT' => 'E02005645',
        '0YU' => 'E02005645',
        '0YW' => 'E02005645',
        '0YX' => 'E02005645',
        '0ZH' => 'E02005645',
        '6AA' => 'E02005645',
        '6AB' => 'E02005631',
        '6AD' => 'E02005645',
        '6AE' => 'E02005645',
        '6AF' => 'E02005645',
        '6AG' => 'E02005631',
        '6AH' => 'E02005645',
        '6AJ' => 'E02005645',
        '6AL' => 'E02005645',
        '6AN' => 'E02005645',
        '6AP' => 'E02005645',
        '6AQ' => 'E02005645',
        '6AR' => 'E02005631',
        '6AS' => 'E02005645',
        '6AT' => 'E02005645',
        '6AU' => 'E02005645',
        '6AW' => 'E02005645',
        '6AX' => 'E02005645',
        '6AY' => 'E02005645',
        '6AZ' => 'E02005645',
        '6BA' => 'E02005645',
        '6BB' => 'E02005645',
        '6BD' => 'E02005645',
        '6BE' => 'E02005645',
        '6BF' => 'E02005645',
        '6BG' => 'E02005631',
        '6BH' => 'E02005645',
        '6BJ' => 'E02005645',
        '6BL' => 'E02005645',
        '6BN' => 'E02005645',
        '6BP' => 'E02005631',
        '6BQ' => 'E02005645',
        '6BR' => 'E02005645',
        '6BS' => 'E02005645',
        '6BT' => 'E02005645',
        '6BU' => 'E02005645',
        '6BW' => 'E02005645',
        '6BX' => 'E02005645',
        '6BY' => 'E02005645',
        '6BZ' => 'E02005645',
        '6DA' => 'E02005645',
        '6DB' => 'E02005645',
        '6DD' => 'E02005645',
        '6DE' => 'E02005645',
        '6DF' => 'E02005645',
        '6DG' => 'E02005645',
        '6DH' => 'E02005645',
        '6DJ' => 'E02005631',
        '6DL' => 'E02005645',
        '6DN' => 'E02005645',
        '6DP' => 'E02005645',
        '6DQ' => 'E02005645',
        '6DR' => 'E02005645',
        '6DS' => 'E02005645',
        '6DT' => 'E02005645',
        '6DU' => 'E02005645',
        '6DW' => 'E02005645',
        '6DX' => 'E02005645',
        '6DY' => 'E02005645',
        '6DZ' => 'E02005645',
        '6EB' => 'E02005645',
        '6ED' => 'E02005645',
        '6EE' => 'E02005645',
        '6EF' => 'E02005645',
        '6EG' => 'E02005645',
        '6EH' => 'E02005645',
        '6EJ' => 'E02005645',
        '6EL' => 'E02005645',
        '6EN' => 'E02005645',
        '6EP' => 'E02005645',
        '6EQ' => 'E02005645',
        '6ER' => 'E02005645',
        '6ES' => 'E02005631',
        '6ET' => 'E02005645',
        '6EU' => 'E02005645',
        '6EW' => 'E02005645',
        '6EX' => 'E02005645',
        '6EY' => 'E02005645',
        '6EZ' => 'E02005645',
        '6FA' => 'E02005645',
        '6FB' => 'E02005645',
        '6FD' => 'E02005631',
        '6FE' => 'E02005645',
        '6FF' => 'E02005645',
        '6FG' => 'E02005645',
        '6FH' => 'E02005645',
        '6FJ' => 'E02005645',
        '6FL' => 'E02005645',
        '6FN' => 'E02005645',
        '6FP' => 'E02005631',
        '6FQ' => 'E02005645',
        '6FR' => 'E02005645',
        '6FS' => 'E02005645',
        '6FT' => 'E02005645',
        '6GA' => 'E02005645',
        '6GB' => 'E02005645',
        '6GD' => 'E02005645',
        '6GE' => 'E02005645',
        '6GF' => 'E02005645',
        '6GG' => 'E02005645',
        '6GH' => 'E02005645',
        '6GJ' => 'E02005645',
        '6GL' => 'E02005645',
        '6GN' => 'E02005645',
        '6GP' => 'E02005645',
        '6GQ' => 'E02005645',
        '6GR' => 'E02005645',
        '6GS' => 'E02005645',
        '6GT' => 'E02005645',
        '6GU' => 'E02005645',
        '6GW' => 'E02005645',
        '6GX' => 'E02005645',
        '6GY' => 'E02005631',
        '6GZ' => 'E02005631',
        '6HA' => 'E02005645',
        '6HB' => 'E02005631',
        '6HD' => 'E02005645',
        '6HE' => 'E02005645',
        '6HF' => 'E02005645',
        '6HG' => 'E02005631',
        '6HH' => 'E02005645',
        '6HJ' => 'E02005645',
        '6HL' => 'E02005645',
        '6HN' => 'E02005631',
        '6HP' => 'E02005645',
        '6HQ' => 'E02005645',
        '6HR' => 'E02005645',
        '6HS' => 'E02005645',
        '6HT' => 'E02005631',
        '6HU' => 'E02005631',
        '6HW' => 'E02005645',
        '6HX' => 'E02005645',
        '6HY' => 'E02005645',
        '6HZ' => 'E02005645',
        '6JA' => 'E02005631',
        '6JB' => 'E02005645',
        '6JD' => 'E02005645',
        '6JE' => 'E02005645',
        '6JF' => 'E02005631',
        '6JG' => 'E02005645',
        '6JH' => 'E02005645',
        '6JJ' => 'E02005645',
        '6JL' => 'E02005645',
        '6JN' => 'E02005645',
        '6JP' => 'E02005645',
        '6JQ' => 'E02005645',
        '6JR' => 'E02005645',
        '6JS' => 'E02005645',
        '6JT' => 'E02005645',
        '6JW' => 'E02005645',
        '6JX' => 'E02005645',
        '6JY' => 'E02005645',
        '6JZ' => 'E02005631',
        '6LA' => 'E02005645',
        '6LB' => 'E02005645',
        '6LD' => 'E02005631',
        '6LE' => 'E02005645',
        '6LF' => 'E02005645',
        '6LG' => 'E02005631',
        '6LH' => 'E02005631',
        '6LJ' => 'E02005645',
        '6LL' => 'E02005631',
        '6LN' => 'E02005631',
        '6LP' => 'E02005631',
        '6LQ' => 'E02005631',
        '6LR' => 'E02005631',
        '6LS' => 'E02005631',
        '6LT' => 'E02005631',
        '6LU' => 'E02005631',
        '6LW' => 'E02005631',
        '6LX' => 'E02005631',
        '6LY' => 'E02005631',
        '6LZ' => 'E02005631',
        '6NA' => 'E02005631',
        '6NB' => 'E02005631',
        '6ND' => 'E02005631',
        '6NE' => 'E02005631',
        '6NF' => 'E02005631',
        '6NG' => 'E02005631',
        '6NH' => 'E02005631',
        '6NJ' => 'E02005631',
        '6NL' => 'E02005631',
        '6NN' => 'E02005631',
        '6NP' => 'E02005631',
        '6NQ' => 'E02005631',
        '6NR' => 'E02005631',
        '6NS' => 'E02005631',
        '6NT' => 'E02005631',
        '6NU' => 'E02005631',
        '6NW' => 'E02005631',
        '6NX' => 'E02005631',
        '6NY' => 'E02005631',
        '6NZ' => 'E02005631',
        '6PA' => 'E02005631',
        '6PB' => 'E02005631',
        '6PD' => 'E02005631',
        '6PE' => 'E02005631',
        '6PF' => 'E02005631',
        '6PG' => 'E02005631',
        '6PH' => 'E02005631',
        '6PJ' => 'E02005631',
        '6PN' => 'E02005631',
        '6PP' => 'E02005631',
        '6PQ' => 'E02005631',
        '6PR' => 'E02005631',
        '6PS' => 'E02005631',
        '6PT' => 'E02005631',
        '6PU' => 'E02005631',
        '6PW' => 'E02005631',
        '6PX' => 'E02005631',
        '6PY' => 'E02005631',
        '6PZ' => 'E02005631',
        '6QA' => 'E02005631',
        '6QD' => 'E02005631',
        '6QE' => 'E02005631',
        '6QF' => 'E02005631',
        '6QG' => 'E02005631',
        '6QH' => 'E02005631',
        '6QJ' => 'E02005631',
        '6QL' => 'E02005631',
        '6QN' => 'E02005631',
        '6QP' => 'E02005631',
        '6QR' => 'E02005631',
        '6QS' => 'E02005631',
        '6QT' => 'E02005631',
        '6QU' => 'E02005631',
        '6QW' => 'E02005631',
        '6QX' => 'E02005631',
        '6QY' => 'E02005631',
        '6QZ' => 'E02005631',
        '6RA' => 'E02005631',
        '6RB' => 'E02005631',
        '6RD' => 'E02005631',
        '6RE' => 'E02005631',
        '6RF' => 'E02005631',
        '6RG' => 'E02005631',
        '6RH' => 'E02005631',
        '6RJ' => 'E02005631',
        '6RL' => 'E02005631',
        '6RN' => 'E02005631',
        '6RP' => 'E02005631',
        '6RQ' => 'E02005631',
        '6RX' => 'E02005631',
        '6SA' => 'E02005644',
        '6SB' => 'E02005631',
        '6SD' => 'E02005631',
        '6SE' => 'E02005631',
        '6SF' => 'E02005631',
        '6SG' => 'E02005631',
        '6SH' => 'E02005631',
        '6SJ' => 'E02005631',
        '6SL' => 'E02005631',
        '6SN' => 'E02005631',
        '6SP' => 'E02005631',
        '6SQ' => 'E02005631',
        '6SR' => 'E02005631',
        '6SS' => 'E02005631',
        '6ST' => 'E02005631',
        '6SU' => 'E02005631',
        '6SW' => 'E02005631',
        '6SX' => 'E02005631',
        '6SY' => 'E02005631',
        '6SZ' => 'E02005631',
        '6TA' => 'E02005644',
        '6TB' => 'E02005644',
        '6TD' => 'E02005644',
        '6TE' => 'E02005644',
        '6TF' => 'E02005644',
        '6TG' => 'E02005644',
        '6TH' => 'E02005644',
        '6TJ' => 'E02005644',
        '6TL' => 'E02005644',
        '6TN' => 'E02005644',
        '6TP' => 'E02005644',
        '6TQ' => 'E02005644',
        '6TR' => 'E02005644',
        '6TS' => 'E02005644',
        '6TT' => 'E02005644',
        '6TU' => 'E02005644',
        '6TW' => 'E02005644',
        '6TX' => 'E02005644',
        '6TY' => 'E02005644',
        '6TZ' => 'E02005644',
        '6UA' => 'E02005644',
        '6UB' => 'E02005644',
        '6UD' => 'E02005644',
        '6UE' => 'E02005631',
        '6UF' => 'E02005631',
        '6UG' => 'E02005631',
        '6UH' => 'E02005631',
        '6UJ' => 'E02005631',
        '6UL' => 'E02005631',
        '6UN' => 'E02005631',
        '6UP' => 'E02005631',
        '6UQ' => 'E02005631',
        '6UR' => 'E02005631',
        '6US' => 'E02005644',
        '6UT' => 'E02005644',
        '6UU' => 'E02005631',
        '6UW' => 'E02005631',
        '6UX' => 'E02005644',
        '6UY' => 'E02005644',
        '6UZ' => 'E02005644',
        '6WA' => 'E02005644',
        '6WB' => 'E02005644',
        '6WD' => 'E02005644',
        '6WE' => 'E02005644',
        '6ZY' => 'E02005645',
        '6ZZ' => 'E02005645',
        '8AA' => 'E02005645',
        '8AB' => 'E02005645',
        '8AD' => 'E02005644',
        '8AE' => 'E02005645',
        '8AF' => 'E02005645',
        '8AG' => 'E02005645',
        '8AH' => 'E02005645',
        '8AJ' => 'E02005645',
        '8AL' => 'E02005645',
        '8AN' => 'E02005645',
        '8AP' => 'E02005645',
        '8AQ' => 'E02005645',
        '8AR' => 'E02005645',
        '8AS' => 'E02005645',
        '8AT' => 'E02005644',
        '8AU' => 'E02005644',
        '8AW' => 'E02005643',
        '8AX' => 'E02005644',
        '8BA' => 'E02005645',
        '8BB' => 'E02005645',
        '8BD' => 'E02005645',
        '8BE' => 'E02005645',
        '8BG' => 'E02005645',
        '8BH' => 'E02005645',
        '8BN' => 'E02005645',
        '8BQ' => 'E02005645',
        '8DA' => 'E02005645',
        '8DB' => 'E02005645',
        '8DD' => 'E02005645',
        '8DE' => 'E02005645',
        '8DF' => 'E02005645',
        '8DG' => 'E02005645',
        '8DH' => 'E02005645',
        '8DJ' => 'E02005645',
        '8DL' => 'E02005645',
        '8DN' => 'E02005645',
        '8DP' => 'E02005645',
        '8DQ' => 'E02005645',
        '8DR' => 'E02005645',
        '8DS' => 'E02005645',
        '8DT' => 'E02005645',
        '8DU' => 'E02005645',
        '8DW' => 'E02005645',
        '8DX' => 'E02005645',
        '8DY' => 'E02005645',
        '8DZ' => 'E02005645',
        '8EA' => 'E02005645',
        '8EB' => 'E02005645',
        '8ED' => 'E02005645',
        '8EE' => 'E02005645',
        '8EF' => 'E02005645',
        '8EG' => 'E02005645',
        '8EH' => 'E02005645',
        '8EJ' => 'E02005644',
        '8EL' => 'E02005644',
        '8EN' => 'E02005644',
        '8EP' => 'E02005644',
        '8EQ' => 'E02005645',
        '8ER' => 'E02005645',
        '8ES' => 'E02005645',
        '8ET' => 'E02005644',
        '8EU' => 'E02005644',
        '8EW' => 'E02005644',
        '8EX' => 'E02005645',
        '8EY' => 'E02005645',
        '8EZ' => 'E02005645',
        '8FA' => 'E02005645',
        '8FB' => 'E02005641',
        '8FD' => 'E02005644',
        '8FE' => 'E02005645',
        '8FX' => 'E02005645',
        '8GA' => 'E02005645',
        '8GQ' => 'E02005645',
        '8GS' => 'E02005645',
        '8GT' => 'E02005645',
        '8GU' => 'E02005645',
        '8GW' => 'E02005645',
        '8GX' => 'E02005644',
        '8GY' => 'E02005645',
        '8GZ' => 'E02005644',
        '8HA' => 'E02005645',
        '8HB' => 'E02005645',
        '8HD' => 'E02005645',
        '8HE' => 'E02005644',
        '8HF' => 'E02005645',
        '8HH' => 'E02005645',
        '8HJ' => 'E02005645',
        '8HL' => 'E02005645',
        '8HN' => 'E02005645',
        '8HP' => 'E02005645',
        '8HQ' => 'E02005645',
        '8HR' => 'E02005645',
        '8HS' => 'E02005644',
        '8HU' => 'E02005644',
        '8HW' => 'E02005645',
        '8JA' => 'E02005645',
        '8JB' => 'E02005645',
        '8JD' => 'E02005644',
        '8JE' => 'E02005645',
        '8JF' => 'E02005644',
        '8JG' => 'E02005644',
        '8JH' => 'E02005644',
        '8JL' => 'E02005645',
        '8JN' => 'E02005645',
        '8JP' => 'E02005645',
        '8JQ' => 'E02005645',
        '8JR' => 'E02005645',
        '8JS' => 'E02005644',
        '8JT' => 'E02005644',
        '8JU' => 'E02005644',
        '8JW' => 'E02005645',
        '8JX' => 'E02005644',
        '8JY' => 'E02005644',
        '8JZ' => 'E02005644',
        '8LA' => 'E02005644',
        '8LB' => 'E02005645',
        '8LD' => 'E02005645',
        '8LE' => 'E02005645',
        '8LF' => 'E02005645',
        '8LG' => 'E02005644',
        '8LH' => 'E02005644',
        '8LJ' => 'E02005644',
        '8LL' => 'E02005644',
        '8LN' => 'E02005643',
        '8LP' => 'E02005643',
        '8LQ' => 'E02005644',
        '8LR' => 'E02005643',
        '8LS' => 'E02005645',
        '8LT' => 'E02005645',
        '8LU' => 'E02005645',
        '8LW' => 'E02005643',
        '8LX' => 'E02005645',
        '8LY' => 'E02005645',
        '8LZ' => 'E02005645',
        '8NA' => 'E02005644',
        '8NB' => 'E02005644',
        '8ND' => 'E02005644',
        '8NE' => 'E02005643',
        '8NF' => 'E02005644',
        '8NG' => 'E02005644',
        '8NH' => 'E02005644',
        '8NJ' => 'E02005644',
        '8NL' => 'E02005644',
        '8NN' => 'E02005645',
        '8NP' => 'E02005642',
        '8NQ' => 'E02005644',
        '8NR' => 'E02005644',
        '8NS' => 'E02005645',
        '8NT' => 'E02005645',
        '8NU' => 'E02005643',
        '8NW' => 'E02005644',
        '8NX' => 'E02005643',
        '8NY' => 'E02005643',
        '8NZ' => 'E02005643',
        '8PA' => 'E02005643',
        '8PB' => 'E02005644',
        '8PD' => 'E02005644',
        '8PE' => 'E02005643',
        '8PF' => 'E02005644',
        '8PG' => 'E02005644',
        '8PH' => 'E02005643',
        '8PJ' => 'E02005643',
        '8PL' => 'E02005643',
        '8PN' => 'E02005643',
        '8PP' => 'E02005645',
        '8PQ' => 'E02005643',
        '8PR' => 'E02005643',
        '8PS' => 'E02005645',
        '8PT' => 'E02005645',
        '8PU' => 'E02005645',
        '8PW' => 'E02005643',
        '8PX' => 'E02005645',
        '8PY' => 'E02005645',
        '8PZ' => 'E02005645',
        '8QA' => 'E02005644',
        '8QB' => 'E02005644',
        '8QD' => 'E02005643',
        '8QE' => 'E02005644',
        '8QF' => 'E02005644',
        '8QG' => 'E02005644',
        '8QH' => 'E02005644',
        '8QJ' => 'E02005644',
        '8QL' => 'E02005644',
        '8QN' => 'E02005644',
        '8QP' => 'E02005644',
        '8QQ' => 'E02005644',
        '8QR' => 'E02005644',
        '8QS' => 'E02005644',
        '8QT' => 'E02005644',
        '8QU' => 'E02005645',
        '8QW' => 'E02005644',
        '8QX' => 'E02005644',
        '8QY' => 'E02005644',
        '8QZ' => 'E02005644',
        '8RA' => 'E02005644',
        '8RB' => 'E02005644',
        '8RD' => 'E02005644',
        '8RE' => 'E02005644',
        '8RF' => 'E02005644',
        '8RG' => 'E02005644',
        '8RH' => 'E02005644',
        '8RJ' => 'E02005644',
        '8RL' => 'E02005644',
        '8RN' => 'E02005644',
        '8RP' => 'E02005644',
        '8RQ' => 'E02005644',
        '8RR' => 'E02005644',
        '8RS' => 'E02005644',
        '8RT' => 'E02005644',
        '8RU' => 'E02005645',
        '8RW' => 'E02005644',
        '8RX' => 'E02005645',
        '8RY' => 'E02005644',
        '8RZ' => 'E02005644',
        '8SA' => 'E02005645',
        '8SB' => 'E02005644',
        '8SD' => 'E02005645',
        '8SE' => 'E02005644',
        '8SF' => 'E02005644',
        '8SG' => 'E02005644',
        '8SH' => 'E02005644',
        '8SJ' => 'E02005644',
        '8SL' => 'E02005644',
        '8SN' => 'E02005645',
        '8SP' => 'E02005645',
        '8SQ' => 'E02005645',
        '8SR' => 'E02005645',
        '8SS' => 'E02005645',
        '8ST' => 'E02005645',
        '8SU' => 'E02005645',
        '8SW' => 'E02005645',
        '8SX' => 'E02005645',
        '8SY' => 'E02005645',
        '8SZ' => 'E02005645',
        '8TA' => 'E02005645',
        '8TB' => 'E02005645',
        '8TD' => 'E02005645',
        '8TE' => 'E02005645',
        '8TF' => 'E02005645',
        '8TG' => 'E02005645',
        '8TH' => 'E02005645',
        '8TJ' => 'E02005645',
        '8TL' => 'E02005645',
        '8TN' => 'E02005645',
        '8TP' => 'E02005645',
        '8TQ' => 'E02005645',
        '8TR' => 'E02005645',
        '8TT' => 'E02005645',
        '8TU' => 'E02005645',
        '8TW' => 'E02005649',
        '8TX' => 'E02005645',
        '8TY' => 'E02005645',
        '8TZ' => 'E02005645',
        '8UA' => 'E02005645',
        '8UB' => 'E02005645',
        '8UD' => 'E02005645',
        '8UE' => 'E02005645',
        '8UF' => 'E02005645',
        '8UG' => 'E02005645',
        '8UH' => 'E02005645',
        '8UJ' => 'E02005645',
        '8UL' => 'E02005645',
        '8UN' => 'E02005645',
        '8UP' => 'E02005645',
        '8UQ' => 'E02005645',
        '8UR' => 'E02005645',
        '8US' => 'E02005645',
        '8UT' => 'E02005645',
        '8UU' => 'E02005645',
        '8UW' => 'E02005645',
        '8UX' => 'E02005645',
        '8UY' => 'E02005645',
        '8UZ' => 'E02005645',
        '8WA' => 'E02005645',
        '8WB' => 'E02005645',
        '8WD' => 'E02005645',
        '8WE' => 'E02005645',
        '8WF' => 'E02005645',
        '8WG' => 'E02005645',
        '8WH' => 'E02005645',
        '8WN' => 'E02005645',
        '8WR' => 'E02005645',
        '8WS' => 'E02005645',
        '8WT' => 'E02005645',
        '8WU' => 'E02005645',
        '8XA' => 'E02005645',
        '8XB' => 'E02005645',
        '8XE' => 'E02005645',
        '8XF' => 'E02005641',
        '8XG' => 'E02005644',
        '8XH' => 'E02005644',
        '8XJ' => 'E02005644',
        '8XL' => 'E02005645',
        '8XN' => 'E02005644',
        '8XP' => 'E02005644',
        '8XQ' => 'E02005644',
        '8XR' => 'E02005644',
        '8XS' => 'E02005644',
        '8XT' => 'E02005644',
        '8XU' => 'E02005644',
        '8XW' => 'E02005644',
        '8XX' => 'E02005644',
        '8XY' => 'E02005644',
        '8XZ' => 'E02005644',
        '8YA' => 'E02005643',
        '8YB' => 'E02005644',
        '8YD' => 'E02005644',
        '8YE' => 'E02005645',
        '8YF' => 'E02005645',
        '8YH' => 'E02005644',
        '8YJ' => 'E02005644',
        '8YL' => 'E02005645',
        '8YN' => 'E02005644',
        '8YP' => 'E02005645',
        '8YQ' => 'E02005645',
        '8YR' => 'E02005645',
        '8YS' => 'E02005645',
        '8YT' => 'E02005645',
        '8YU' => 'E02005645',
        '8YW' => 'E02005645',
        '8YX' => 'E02005645',
        '8YY' => 'E02005645',
        '8YZ' => 'E02005645',
        '8ZA' => 'E02005645',
        '8ZB' => 'E02005645',
        '8ZD' => 'E02005645',
        '8ZE' => 'E02005645',
        '8ZF' => 'E02005644',
        '8ZG' => 'E02005644',
        '8ZH' => 'E02005645',
        '8ZJ' => 'E02005645',
        '8ZL' => 'E02005645',
        '8ZN' => 'E02005644',
        '8ZP' => 'E02005644',
        '8ZQ' => 'E02005644',
        '8ZR' => 'E02005644',
        '8ZS' => 'E02005645',
        '8ZT' => 'E02005645',
        '8ZU' => 'E02005645',
        '8ZW' => 'E02005644',
        '8ZX' => 'E02005645',
        '8ZY' => 'E02005644',
        '8ZZ' => 'E02005645',
        '9AA' => 'E02005644',
        '9AB' => 'E02005644',
        '9AD' => 'E02005642',
        '9AE' => 'E02005642',
        '9AF' => 'E02005642',
        '9AG' => 'E02005642',
        '9AH' => 'E02005642',
        '9AJ' => 'E02005642',
        '9AL' => 'E02005642',
        '9AN' => 'E02005642',
        '9AP' => 'E02005642',
        '9AQ' => 'E02005642',
        '9AR' => 'E02005642',
        '9AS' => 'E02005642',
        '9AT' => 'E02005642',
        '9AU' => 'E02005642',
        '9AW' => 'E02005642',
        '9AX' => 'E02005642',
        '9AY' => 'E02005642',
        '9AZ' => 'E02005642',
        '9BA' => 'E02005642',
        '9BB' => 'E02005642',
        '9BD' => 'E02005642',
        '9BE' => 'E02005642',
        '9BF' => 'E02005645',
        '9BG' => 'E02005642',
        '9BH' => 'E02005642',
        '9BJ' => 'E02005642',
        '9BL' => 'E02005642',
        '9BN' => 'E02005644',
        '9BP' => 'E02005642',
        '9BQ' => 'E02005642',
        '9BS' => 'E02005642',
        '9BT' => 'E02005642',
        '9BU' => 'E02005642',
        '9BW' => 'E02005642',
        '9BX' => 'E02005642',
        '9BY' => 'E02005642',
        '9BZ' => 'E02005642',
        '9DA' => 'E02005644',
        '9DB' => 'E02005645',
        '9DD' => 'E02005645',
        '9DE' => 'E02005645',
        '9DF' => 'E02005645',
        '9DG' => 'E02005645',
        '9DH' => 'E02005645',
        '9DJ' => 'E02005645',
        '9DL' => 'E02005645',
        '9DN' => 'E02005645',
        '9DP' => 'E02005645',
        '9DQ' => 'E02005644',
        '9DR' => 'E02005645',
        '9DS' => 'E02005645',
        '9DT' => 'E02005645',
        '9DU' => 'E02005645',
        '9DW' => 'E02005645',
        '9DX' => 'E02005645',
        '9DY' => 'E02005645',
        '9DZ' => 'E02005645',
        '9EA' => 'E02005645',
        '9EB' => 'E02005645',
        '9ED' => 'E02005645',
        '9EE' => 'E02005644',
        '9EF' => 'E02005644',
        '9EG' => 'E02005642',
        '9EH' => 'E02005644',
        '9EJ' => 'E02005644',
        '9EL' => 'E02005645',
        '9EN' => 'E02005642',
        '9EP' => 'E02005642',
        '9EQ' => 'E02005645',
        '9ER' => 'E02005642',
        '9ES' => 'E02005642',
        '9ET' => 'E02005642',
        '9EU' => 'E02005642',
        '9EW' => 'E02005642',
        '9EX' => 'E02005642',
        '9EY' => 'E02005642',
        '9EZ' => 'E02005642',
        '9FA' => 'E02005642',
        '9FB' => 'E02005642',
        '9FD' => 'E02005642',
        '9FE' => 'E02005642',
        '9FF' => 'E02005642',
        '9FG' => 'E02005642',
        '9FH' => 'E02005642',
        '9FJ' => 'E02005642',
        '9FL' => 'E02005642',
        '9FN' => 'E02005642',
        '9FP' => 'E02005642',
        '9FQ' => 'E02005642',
        '9FR' => 'E02005642',
        '9FS' => 'E02005642',
        '9FT' => 'E02005642',
        '9FU' => 'E02005642',
        '9FW' => 'E02005642',
        '9FX' => 'E02005642',
        '9FY' => 'E02005642',
        '9GR' => 'E02005642',
        '9GZ' => 'E02005643',
        '9HA' => 'E02005642',
        '9HB' => 'E02005642',
        '9HD' => 'E02005642',
        '9HE' => 'E02005642',
        '9HF' => 'E02005642',
        '9HG' => 'E02005642',
        '9HH' => 'E02005642',
        '9HJ' => 'E02005642',
        '9HL' => 'E02005642',
        '9HN' => 'E02005642',
        '9HP' => 'E02005645',
        '9HQ' => 'E02005642',
        '9HR' => 'E02005645',
        '9HS' => 'E02005645',
        '9HT' => 'E02005645',
        '9HU' => 'E02005642',
        '9HW' => 'E02005642',
        '9HX' => 'E02005644',
        '9HY' => 'E02005644',
        '9HZ' => 'E02005645',
        '9JA' => 'E02005645',
        '9JB' => 'E02005642',
        '9JD' => 'E02005642',
        '9JE' => 'E02005642',
        '9JF' => 'E02005642',
        '9JG' => 'E02005642',
        '9JH' => 'E02005642',
        '9JJ' => 'E02005642',
        '9JL' => 'E02005642',
        '9JN' => 'E02005642',
        '9JP' => 'E02005642',
        '9JQ' => 'E02005642',
        '9JR' => 'E02005642',
        '9JS' => 'E02005642',
        '9JT' => 'E02005643',
        '9JU' => 'E02005643',
        '9JW' => 'E02005642',
        '9JX' => 'E02005643',
        '9JY' => 'E02005643',
        '9JZ' => 'E02005642',
        '9LA' => 'E02005642',
        '9LB' => 'E02005642',
        '9LD' => 'E02005642',
        '9LE' => 'E02005642',
        '9LF' => 'E02005642',
        '9LG' => 'E02005642',
        '9LH' => 'E02005642',
        '9LJ' => 'E02005642',
        '9LL' => 'E02005642',
        '9LN' => 'E02005642',
        '9LP' => 'E02005643',
        '9LQ' => 'E02005642',
        '9LR' => 'E02005643',
        '9LS' => 'E02005642',
        '9LT' => 'E02005642',
        '9LU' => 'E02005642',
        '9LW' => 'E02005643',
        '9LX' => 'E02005642',
        '9LY' => 'E02005642',
        '9LZ' => 'E02005642',
        '9NA' => 'E02005642',
        '9NB' => 'E02005643',
        '9ND' => 'E02005643',
        '9NE' => 'E02005642',
        '9NF' => 'E02005642',
        '9NG' => 'E02005642',
        '9NH' => 'E02005642',
        '9NJ' => 'E02005642',
        '9NL' => 'E02005642',
        '9NN' => 'E02005642',
        '9NP' => 'E02005643',
        '9NQ' => 'E02005642',
        '9NR' => 'E02005643',
        '9NS' => 'E02005643',
        '9NT' => 'E02005643',
        '9NU' => 'E02005643',
        '9NW' => 'E02005643',
        '9NX' => 'E02005643',
        '9NY' => 'E02005643',
        '9NZ' => 'E02005642',
        '9PA' => 'E02005643',
        '9PB' => 'E02005643',
        '9PD' => 'E02005643',
        '9PE' => 'E02005643',
        '9PF' => 'E02005643',
        '9PG' => 'E02005643',
        '9PH' => 'E02005643',
        '9PJ' => 'E02005643',
        '9PL' => 'E02005643',
        '9PN' => 'E02005643',
        '9PP' => 'E02005643',
        '9PQ' => 'E02005643',
        '9PR' => 'E02005643',
        '9PS' => 'E02005643',
        '9PT' => 'E02005643',
        '9PU' => 'E02005643',
        '9PW' => 'E02005643',
        '9PX' => 'E02005643',
        '9PY' => 'E02005643',
        '9PZ' => 'E02005644',
        '9QA' => 'E02005644',
        '9QB' => 'E02005644',
        '9QD' => 'E02005643',
        '9QE' => 'E02005643',
        '9QF' => 'E02005643',
        '9QG' => 'E02005642',
        '9QH' => 'E02005643',
        '9QJ' => 'E02005645',
        '9QL' => 'E02005644',
        '9QN' => 'E02005642',
        '9QP' => 'E02005642',
        '9QQ' => 'E02005645',
        '9QR' => 'E02005642',
        '9QS' => 'E02005642',
        '9QT' => 'E02005642',
        '9QU' => 'E02005642',
        '9QW' => 'E02005642',
        '9QX' => 'E02005642',
        '9QY' => 'E02005642',
        '9QZ' => 'E02005642',
        '9RA' => 'E02005642',
        '9RB' => 'E02005642',
        '9RD' => 'E02005642',
        '9RE' => 'E02005642',
        '9RF' => 'E02005642',
        '9RG' => 'E02005642',
        '9RH' => 'E02005642',
        '9RJ' => 'E02005642',
        '9RL' => 'E02005642',
        '9RN' => 'E02005642',
        '9RP' => 'E02005642',
        '9RQ' => 'E02005642',
        '9RR' => 'E02005642',
        '9RS' => 'E02005642',
        '9RT' => 'E02005644',
        '9RU' => 'E02005644',
        '9RW' => 'E02005642',
        '9RX' => 'E02005642',
        '9RY' => 'E02005642',
        '9RZ' => 'E02005642',
        '9SA' => 'E02005644',
        '9SB' => 'E02005644',
        '9SD' => 'E02005644',
        '9SE' => 'E02005644',
        '9SF' => 'E02005644',
        '9SG' => 'E02005644',
        '9SH' => 'E02005644',
        '9SJ' => 'E02005645',
        '9SL' => 'E02005642',
        '9SN' => 'E02005644',
        '9SP' => 'E02005642',
        '9SQ' => 'E02005644',
        '9SR' => 'E02005642',
        '9SS' => 'E02005642',
        '9ST' => 'E02005643',
        '9SU' => 'E02005643',
        '9SW' => 'E02005644',
        '9SX' => 'E02005643',
        '9SY' => 'E02005643',
        '9SZ' => 'E02005643',
        '9TA' => 'E02005643',
        '9TB' => 'E02005643',
        '9TD' => 'E02005643',
        '9TE' => 'E02005643',
        '9TF' => 'E02005643',
        '9TG' => 'E02005643',
        '9TH' => 'E02005643',
        '9TJ' => 'E02005643',
        '9TL' => 'E02005643',
        '9TN' => 'E02005643',
        '9TP' => 'E02005643',
        '9TQ' => 'E02005643',
        '9TR' => 'E02005643',
        '9TS' => 'E02005645',
        '9TT' => 'E02005643',
        '9TU' => 'E02005643',
        '9TW' => 'E02005643',
        '9TX' => 'E02005643',
        '9TY' => 'E02005643',
        '9TZ' => 'E02005642',
        '9UA' => 'E02005643',
        '9UB' => 'E02005643',
        '9UD' => 'E02005643',
        '9UE' => 'E02005643',
        '9UF' => 'E02005643',
        '9UG' => 'E02005642',
        '9UH' => 'E02005643',
        '9UJ' => 'E02005642',
        '9UL' => 'E02005642',
        '9UN' => 'E02005639',
        '9UP' => 'E02005639',
        '9UQ' => 'E02005642',
        '9UR' => 'E02005639',
        '9US' => 'E02005642',
        '9UT' => 'E02005639',
        '9UU' => 'E02005639',
        '9UW' => 'E02005639',
        '9UX' => 'E02005639',
        '9UY' => 'E02005639',
        '9UZ' => 'E02005642',
        '9WA' => 'E02005643',
        '9WB' => 'E02005642',
        '9WQ' => 'E02005645',
        '9WS' => 'E02005642',
        '9WU' => 'E02005645',
        '9WY' => 'E02005645',
        '9WZ' => 'E02005645',
        '9XA' => 'E02005639',
        '9XB' => 'E02005639',
        '9XD' => 'E02005639',
        '9XE' => 'E02005645',
        '9XF' => 'E02005639',
        '9XG' => 'E02005639',
        '9XH' => 'E02005639',
        '9XJ' => 'E02005639',
        '9XL' => 'E02005639',
        '9XN' => 'E02005642',
        '9XP' => 'E02005642',
        '9XQ' => 'E02005643',
        '9XR' => 'E02005642',
        '9XS' => 'E02005642',
        '9XT' => 'E02005642',
        '9XU' => 'E02005642',
        '9XW' => 'E02005645',
        '9XZ' => 'E02005645',
        '9YB' => 'E02005645',
        '9YE' => 'E02005645',
        '9YG' => 'E02005645',
        '9YJ' => 'E02005645',
        '9YL' => 'E02005645',
        '9YN' => 'E02005645',
        '9YP' => 'E02005645',
        '9YQ' => 'E02005645',
        '9YR' => 'E02005645',
        '9YS' => 'E02005645',
        '9YT' => 'E02005645',
        '9YU' => 'E02005645',
        '9YW' => 'E02005645',
        '9YX' => 'E02005645',
        '9YY' => 'E02005645',
        '9YZ' => 'E02005645',
        '9ZA' => 'E02005645',
        '9ZB' => 'E02005645',
        '9ZD' => 'E02005645',
        '9ZE' => 'E02005645',
        '9ZF' => 'E02005645',
        '9ZG' => 'E02005645',
        '9ZH' => 'E02005645',
        '9ZJ' => 'E02005645',
        '9ZL' => 'E02005645',
        '9ZN' => 'E02005645',
        '9ZP' => 'E02005645',
        '9ZQ' => 'E02005645',
        '9ZR' => 'E02005645',
        '9ZS' => 'E02005645',
        '9ZT' => 'E02005645',
        '9ZU' => 'E02005645',
        '9ZW' => 'E02005645',
        '9ZX' => 'E02005645',
        '9ZY' => 'E02005642',
        '9ZZ' => 'E02005645',
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
