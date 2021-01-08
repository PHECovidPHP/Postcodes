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
final class SR4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02001802',
        '0AB' => 'E02001802',
        '0AD' => 'E02001802',
        '0AE' => 'E02001802',
        '0AF' => 'E02001802',
        '0AG' => 'E02001802',
        '0AH' => 'E02001804',
        '0AJ' => 'E02001802',
        '0AL' => 'E02001802',
        '0AN' => 'E02001802',
        '0AP' => 'E02001804',
        '0AQ' => 'E02001802',
        '0AR' => 'E02001804',
        '0AS' => 'E02001804',
        '0AT' => 'E02001802',
        '0AU' => 'E02001802',
        '0AW' => 'E02001802',
        '0AX' => 'E02001802',
        '0AY' => 'E02001802',
        '0AZ' => 'E02001802',
        '0BA' => 'E02001802',
        '0BB' => 'E02001802',
        '0BD' => 'E02001802',
        '0BE' => 'E02001802',
        '0BF' => 'E02001802',
        '0BG' => 'E02001802',
        '0BH' => 'E02001802',
        '0BJ' => 'E02001802',
        '0BL' => 'E02001802',
        '0BN' => 'E02001802',
        '0BP' => 'E02001802',
        '0BQ' => 'E02001802',
        '0BS' => 'E02001802',
        '0BT' => 'E02001802',
        '0BU' => 'E02001802',
        '0BW' => 'E02001802',
        '0BX' => 'E02001802',
        '0BY' => 'E02001802',
        '0BZ' => 'E02001802',
        '0DA' => 'E02001802',
        '0DB' => 'E02001802',
        '0DD' => 'E02001802',
        '0DE' => 'E02001802',
        '0DF' => 'E02001802',
        '0DG' => 'E02001802',
        '0DH' => 'E02001802',
        '0DJ' => 'E02001802',
        '0DL' => 'E02001802',
        '0DN' => 'E02001802',
        '0DP' => 'E02001802',
        '0DQ' => 'E02001802',
        '0DR' => 'E02001802',
        '0DS' => 'E02001802',
        '0DT' => 'E02001802',
        '0DU' => 'E02001802',
        '0DW' => 'E02001802',
        '0DX' => 'E02001802',
        '0DY' => 'E02001802',
        '0DZ' => 'E02001802',
        '0EA' => 'E02001802',
        '0EB' => 'E02001802',
        '0ED' => 'E02001802',
        '0EE' => 'E02001802',
        '0EF' => 'E02001802',
        '0EG' => 'E02001802',
        '0EH' => 'E02001802',
        '0EJ' => 'E02001802',
        '0EL' => 'E02001802',
        '0EN' => 'E02001802',
        '0EP' => 'E02001802',
        '0EQ' => 'E02001802',
        '0ER' => 'E02001802',
        '0ES' => 'E02001802',
        '0ET' => 'E02001802',
        '0EU' => 'E02001802',
        '0EW' => 'E02001802',
        '0EX' => 'E02001802',
        '0EY' => 'E02001802',
        '0EZ' => 'E02001802',
        '0FA' => 'E02001802',
        '0FB' => 'E02001802',
        '0FD' => 'E02001802',
        '0FE' => 'E02001802',
        '0HA' => 'E02001802',
        '0HB' => 'E02001804',
        '0HD' => 'E02001802',
        '0HE' => 'E02001802',
        '0HF' => 'E02001802',
        '0HG' => 'E02001802',
        '0HH' => 'E02001802',
        '0HJ' => 'E02001804',
        '0HL' => 'E02001811',
        '0HN' => 'E02001811',
        '0HP' => 'E02001811',
        '0HQ' => 'E02001804',
        '0HR' => 'E02001811',
        '0HS' => 'E02001811',
        '0HT' => 'E02001811',
        '0HU' => 'E02001811',
        '0HW' => 'E02001811',
        '0HX' => 'E02001811',
        '0HY' => 'E02001811',
        '0HZ' => 'E02001811',
        '0JA' => 'E02001811',
        '0JB' => 'E02001804',
        '0JJ' => 'E02001804',
        '0JL' => 'E02001804',
        '0JN' => 'E02001804',
        '0JP' => 'E02001804',
        '0JR' => 'E02001804',
        '0JS' => 'E02001804',
        '0JT' => 'E02001804',
        '0JU' => 'E02001804',
        '0JW' => 'E02001804',
        '0JX' => 'E02001804',
        '0JY' => 'E02001804',
        '0JZ' => 'E02001804',
        '0LA' => 'E02001804',
        '0LB' => 'E02001804',
        '0LD' => 'E02001804',
        '0LE' => 'E02001811',
        '0LF' => 'E02001804',
        '0LG' => 'E02001804',
        '0LH' => 'E02001811',
        '0LJ' => 'E02001804',
        '0LL' => 'E02001804',
        '0LN' => 'E02001804',
        '0LP' => 'E02001804',
        '0LQ' => 'E02001804',
        '0LR' => 'E02001804',
        '0LS' => 'E02001804',
        '0LT' => 'E02001804',
        '0LU' => 'E02001804',
        '0LW' => 'E02001804',
        '0LX' => 'E02001804',
        '0LY' => 'E02001804',
        '0LZ' => 'E02001804',
        '0NA' => 'E02001804',
        '0NB' => 'E02001804',
        '0ND' => 'E02001804',
        '0NE' => 'E02001804',
        '0NF' => 'E02001804',
        '0NG' => 'E02001804',
        '0NH' => 'E02001822',
        '0NJ' => 'E02001804',
        '0NL' => 'E02001804',
        '0NN' => 'E02001804',
        '0NP' => 'E02001804',
        '0NQ' => 'E02001822',
        '0NW' => 'E02001804',
        '0PA' => 'E02001804',
        '0PB' => 'E02001804',
        '0PD' => 'E02001804',
        '0PE' => 'E02001804',
        '0PF' => 'E02001804',
        '0PG' => 'E02001804',
        '0PH' => 'E02001804',
        '0PJ' => 'E02001804',
        '0PL' => 'E02001804',
        '0PN' => 'E02001804',
        '0PP' => 'E02001804',
        '0PQ' => 'E02001804',
        '0PR' => 'E02001804',
        '0PS' => 'E02001804',
        '0PT' => 'E02001804',
        '0PU' => 'E02001804',
        '0PW' => 'E02001804',
        '0PX' => 'E02001804',
        '0PY' => 'E02001804',
        '0PZ' => 'E02001804',
        '0QA' => 'E02001804',
        '0QB' => 'E02001804',
        '0QD' => 'E02001804',
        '0QE' => 'E02001804',
        '0QF' => 'E02001804',
        '0QG' => 'E02001804',
        '0QH' => 'E02001804',
        '0QJ' => 'E02001804',
        '0QL' => 'E02001804',
        '0QP' => 'E02001804',
        '0QQ' => 'E02001804',
        '0QR' => 'E02001804',
        '0QT' => 'E02001804',
        '0QU' => 'E02001804',
        '0QW' => 'E02001804',
        '0QX' => 'E02001804',
        '0QY' => 'E02001804',
        '0QZ' => 'E02001804',
        '0RA' => 'E02001804',
        '0RB' => 'E02001804',
        '0RD' => 'E02001804',
        '0RE' => 'E02001804',
        '0RF' => 'E02001804',
        '0RG' => 'E02001804',
        '0RJ' => 'E02001804',
        '0RL' => 'E02001804',
        '0RN' => 'E02001804',
        '0RP' => 'E02001804',
        '0RQ' => 'E02001804',
        '0RR' => 'E02001804',
        '0RS' => 'E02001804',
        '0RT' => 'E02001804',
        '0RU' => 'E02001804',
        '0RW' => 'E02001804',
        '0RX' => 'E02001802',
        '0WY' => 'E02001795',
        '0WZ' => 'E02001802',
        '0YT' => 'E02001795',
        '0YU' => 'E02001802',
        '0YW' => 'E02001795',
        '0YX' => 'E02001802',
        '0YY' => 'E02001802',
        '0YZ' => 'E02001802',
        '0ZW' => 'E02001795',
        '6AA' => 'E02001803',
        '6AB' => 'E02001803',
        '6AD' => 'E02001802',
        '6AE' => 'E02001803',
        '6AF' => 'E02001803',
        '6AG' => 'E02001803',
        '6AH' => 'E02001803',
        '6AJ' => 'E02001801',
        '6AL' => 'E02001803',
        '6AN' => 'E02001801',
        '6AP' => 'E02001801',
        '6AQ' => 'E02001803',
        '6AR' => 'E02001803',
        '6AS' => 'E02001803',
        '6AT' => 'E02001803',
        '6AU' => 'E02001803',
        '6AW' => 'E02001801',
        '6AX' => 'E02001803',
        '6AY' => 'E02001803',
        '6AZ' => 'E02001803',
        '6BA' => 'E02001803',
        '6BB' => 'E02001803',
        '6BD' => 'E02001803',
        '6BE' => 'E02001803',
        '6BG' => 'E02001803',
        '6BH' => 'E02001803',
        '6BJ' => 'E02001803',
        '6BL' => 'E02001803',
        '6BN' => 'E02001803',
        '6BP' => 'E02001803',
        '6BQ' => 'E02001803',
        '6BS' => 'E02001803',
        '6BT' => 'E02001803',
        '6BU' => 'E02001803',
        '6BW' => 'E02001803',
        '6BX' => 'E02001803',
        '6BY' => 'E02001803',
        '6DA' => 'E02001803',
        '6DB' => 'E02001803',
        '6DD' => 'E02001803',
        '6DE' => 'E02001803',
        '6DF' => 'E02001803',
        '6DG' => 'E02001801',
        '6DH' => 'E02001803',
        '6DJ' => 'E02001803',
        '6DN' => 'E02001803',
        '6DP' => 'E02001803',
        '6DQ' => 'E02001803',
        '6DR' => 'E02001803',
        '6DS' => 'E02001803',
        '6DT' => 'E02001803',
        '6DU' => 'E02001803',
        '6DW' => 'E02001803',
        '6DX' => 'E02001803',
        '6DY' => 'E02001803',
        '6EA' => 'E02001803',
        '6EB' => 'E02001803',
        '6ED' => 'E02001803',
        '6EE' => 'E02001803',
        '6EF' => 'E02001803',
        '6EG' => 'E02001803',
        '6EH' => 'E02001803',
        '6EJ' => 'E02001803',
        '6EL' => 'E02001801',
        '6EN' => 'E02001801',
        '6EP' => 'E02001801',
        '6EQ' => 'E02001803',
        '6ER' => 'E02001801',
        '6ES' => 'E02001801',
        '6ET' => 'E02001803',
        '6EU' => 'E02001801',
        '6EW' => 'E02001801',
        '6EX' => 'E02001801',
        '6EY' => 'E02001801',
        '6EZ' => 'E02001801',
        '6FB' => 'E02001803',
        '6HA' => 'E02001803',
        '6HB' => 'E02001801',
        '6HD' => 'E02001801',
        '6HE' => 'E02001801',
        '6HH' => 'E02001801',
        '6HJ' => 'E02001801',
        '6HL' => 'E02001801',
        '6HN' => 'E02001801',
        '6HP' => 'E02001801',
        '6HR' => 'E02001801',
        '6HS' => 'E02001801',
        '6HT' => 'E02001801',
        '6HU' => 'E02001801',
        '6HW' => 'E02001801',
        '6HX' => 'E02001801',
        '6HY' => 'E02001801',
        '6JA' => 'E02001801',
        '6JB' => 'E02001801',
        '6JD' => 'E02001801',
        '6JE' => 'E02001801',
        '6JF' => 'E02001801',
        '6JG' => 'E02001801',
        '6JH' => 'E02001801',
        '6JJ' => 'E02001801',
        '6JL' => 'E02001801',
        '6JQ' => 'E02001801',
        '6JR' => 'E02001801',
        '6LA' => 'E02001805',
        '6LB' => 'E02001801',
        '6LD' => 'E02001801',
        '6LE' => 'E02001801',
        '6LF' => 'E02001801',
        '6LG' => 'E02001805',
        '6LH' => 'E02001805',
        '6LJ' => 'E02001801',
        '6LL' => 'E02001803',
        '6LN' => 'E02001801',
        '6LP' => 'E02001805',
        '6LQ' => 'E02001801',
        '6LR' => 'E02001801',
        '6LS' => 'E02001801',
        '6LT' => 'E02001805',
        '6LU' => 'E02001805',
        '6LW' => 'E02001801',
        '6LX' => 'E02001805',
        '6LY' => 'E02001805',
        '6LZ' => 'E02001805',
        '6NA' => 'E02001805',
        '6NB' => 'E02001805',
        '6ND' => 'E02001805',
        '6NE' => 'E02001805',
        '6NF' => 'E02001805',
        '6NG' => 'E02001801',
        '6NH' => 'E02001805',
        '6NJ' => 'E02001805',
        '6NL' => 'E02001805',
        '6NN' => 'E02001805',
        '6NP' => 'E02001805',
        '6NQ' => 'E02001801',
        '6NR' => 'E02001805',
        '6NS' => 'E02001802',
        '6NT' => 'E02001802',
        '6NU' => 'E02001802',
        '6NW' => 'E02001805',
        '6NX' => 'E02001805',
        '6NY' => 'E02001805',
        '6PA' => 'E02001802',
        '6PB' => 'E02001802',
        '6PD' => 'E02001802',
        '6PE' => 'E02001802',
        '6PF' => 'E02001802',
        '6PG' => 'E02001802',
        '6PH' => 'E02001802',
        '6PL' => 'E02001803',
        '6PQ' => 'E02001802',
        '6PR' => 'E02001801',
        '6PS' => 'E02001803',
        '6PT' => 'E02001803',
        '6PU' => 'E02001801',
        '6PX' => 'E02001801',
        '6PY' => 'E02001801',
        '6PZ' => 'E02001801',
        '6QA' => 'E02001801',
        '6QB' => 'E02001801',
        '6QD' => 'E02001801',
        '6QE' => 'E02001801',
        '6QF' => 'E02001801',
        '6QG' => 'E02001801',
        '6QH' => 'E02001801',
        '6QJ' => 'E02001801',
        '6QL' => 'E02001801',
        '6QN' => 'E02001801',
        '6QP' => 'E02001801',
        '6QQ' => 'E02001801',
        '6QR' => 'E02001801',
        '6QS' => 'E02001801',
        '6QT' => 'E02001801',
        '6QU' => 'E02001805',
        '6QW' => 'E02001801',
        '6QX' => 'E02001805',
        '6QY' => 'E02001805',
        '6QZ' => 'E02001805',
        '6RA' => 'E02001805',
        '6RB' => 'E02001805',
        '6RD' => 'E02001805',
        '6RE' => 'E02001802',
        '6RF' => 'E02001802',
        '6RG' => 'E02001802',
        '6RH' => 'E02001802',
        '6RJ' => 'E02001802',
        '6RL' => 'E02001802',
        '6RN' => 'E02001802',
        '6RP' => 'E02001805',
        '6RQ' => 'E02001802',
        '6RR' => 'E02001805',
        '6RS' => 'E02001805',
        '6RT' => 'E02001802',
        '6RU' => 'E02001805',
        '6RW' => 'E02001802',
        '6RX' => 'E02001805',
        '6SD' => 'E02001801',
        '6SE' => 'E02001801',
        '6SF' => 'E02001801',
        '6SG' => 'E02001802',
        '6SH' => 'E02001802',
        '6SJ' => 'E02001804',
        '6SL' => 'E02001802',
        '6SN' => 'E02001802',
        '6SP' => 'E02001802',
        '6SQ' => 'E02001802',
        '6SR' => 'E02001802',
        '6SS' => 'E02001802',
        '6ST' => 'E02001802',
        '6SU' => 'E02001802',
        '6SW' => 'E02001802',
        '6SX' => 'E02001802',
        '6SY' => 'E02001802',
        '6SZ' => 'E02001802',
        '6TA' => 'E02001802',
        '6TB' => 'E02001802',
        '6TD' => 'E02001801',
        '6TE' => 'E02001801',
        '6TF' => 'E02001801',
        '6TG' => 'E02001803',
        '6TH' => 'E02001801',
        '6TJ' => 'E02001801',
        '6TL' => 'E02001801',
        '6TN' => 'E02001801',
        '6TP' => 'E02001801',
        '6TQ' => 'E02001803',
        '6TR' => 'E02001802',
        '6TS' => 'E02001802',
        '6TT' => 'E02001802',
        '6TU' => 'E02001803',
        '6TW' => 'E02001801',
        '6TX' => 'E02001801',
        '6TY' => 'E02001802',
        '6TZ' => 'E02001802',
        '6UA' => 'E02001803',
        '6UB' => 'E02001804',
        '6UD' => 'E02001805',
        '6UE' => 'E02001802',
        '6UF' => 'E02001802',
        '6UG' => 'E02001802',
        '6UH' => 'E02001801',
        '6UJ' => 'E02001803',
        '6UL' => 'E02001805',
        '6UN' => 'E02001805',
        '6UP' => 'E02001805',
        '6UQ' => 'E02001802',
        '6UR' => 'E02001805',
        '6US' => 'E02001801',
        '6UT' => 'E02001805',
        '6UU' => 'E02001805',
        '6UW' => 'E02001805',
        '6UX' => 'E02001802',
        '6UY' => 'E02001802',
        '6UZ' => 'E02001805',
        '6WD' => 'E02001801',
        '6WE' => 'E02001803',
        '6WX' => 'E02001801',
        '6WY' => 'E02001801',
        '6WZ' => 'E02001801',
        '6XA' => 'E02001805',
        '6XB' => 'E02001805',
        '6XD' => 'E02001802',
        '6XE' => 'E02001802',
        '6XF' => 'E02001802',
        '6XG' => 'E02001802',
        '6XH' => 'E02001802',
        '6XJ' => 'E02001802',
        '6XL' => 'E02001802',
        '6XN' => 'E02001802',
        '6XP' => 'E02001802',
        '6XQ' => 'E02001802',
        '6XR' => 'E02001795',
        '6XS' => 'E02001795',
        '6XT' => 'E02001795',
        '6XW' => 'E02001802',
        '6XX' => 'E02001795',
        '6XY' => 'E02001795',
        '6XZ' => 'E02001795',
        '6YA' => 'E02001802',
        '6YB' => 'E02001801',
        '6YD' => 'E02001801',
        '6YE' => 'E02001801',
        '6YF' => 'E02001801',
        '6YG' => 'E02001801',
        '6YH' => 'E02001802',
        '6YJ' => 'E02001801',
        '6YL' => 'E02001801',
        '6YN' => 'E02001801',
        '6YP' => 'E02001801',
        '6YQ' => 'E02001801',
        '6YS' => 'E02001802',
        '6YT' => 'E02001802',
        '6YU' => 'E02001801',
        '6YW' => 'E02001801',
        '6YY' => 'E02001802',
        '6YZ' => 'E02001802',
        '7AA' => 'E02001803',
        '7AB' => 'E02001803',
        '7AD' => 'E02001801',
        '7AF' => 'E02001803',
        '7AG' => 'E02001803',
        '7AH' => 'E02001803',
        '7AL' => 'E02001808',
        '7AP' => 'E02001801',
        '7AQ' => 'E02001803',
        '7AR' => 'E02001803',
        '7AS' => 'E02001801',
        '7AX' => 'E02001801',
        '7AZ' => 'E02001801',
        '7BA' => 'E02001803',
        '7BB' => 'E02001803',
        '7BE' => 'E02001801',
        '7BG' => 'E02001801',
        '7BH' => 'E02001801',
        '7BL' => 'E02001801',
        '7BN' => 'E02001801',
        '7BP' => 'E02001801',
        '7BQ' => 'E02001801',
        '7BS' => 'E02001801',
        '7BT' => 'E02001801',
        '7BU' => 'E02001801',
        '7BW' => 'E02001801',
        '7BX' => 'E02001801',
        '7DA' => 'E02001801',
        '7DB' => 'E02001801',
        '7DD' => 'E02001801',
        '7DE' => 'E02001801',
        '7DF' => 'E02001801',
        '7DG' => 'E02001801',
        '7DH' => 'E02001801',
        '7DJ' => 'E02001801',
        '7DL' => 'E02001801',
        '7DN' => 'E02001801',
        '7DP' => 'E02001801',
        '7DQ' => 'E02001801',
        '7DR' => 'E02001801',
        '7DS' => 'E02001801',
        '7DT' => 'E02001801',
        '7DU' => 'E02001801',
        '7DW' => 'E02001801',
        '7DX' => 'E02001801',
        '7DY' => 'E02001801',
        '7DZ' => 'E02001801',
        '7EA' => 'E02001801',
        '7EB' => 'E02001801',
        '7ED' => 'E02001801',
        '7EE' => 'E02001801',
        '7EF' => 'E02001801',
        '7EG' => 'E02001801',
        '7EH' => 'E02001801',
        '7EJ' => 'E02001801',
        '7EL' => 'E02001801',
        '7EN' => 'E02001801',
        '7EP' => 'E02001801',
        '7EQ' => 'E02001801',
        '7EW' => 'E02001801',
        '7EY' => 'E02001801',
        '7EZ' => 'E02001808',
        '7GA' => 'E02001808',
        '7GB' => 'E02001808',
        '7GD' => 'E02001808',
        '7GE' => 'E02001795',
        '7GF' => 'E02001808',
        '7GG' => 'E02001795',
        '7GH' => 'E02001795',
        '7GQ' => 'E02001795',
        '7HA' => 'E02001808',
        '7HB' => 'E02001808',
        '7HD' => 'E02001808',
        '7HE' => 'E02001801',
        '7HF' => 'E02001801',
        '7HG' => 'E02001808',
        '7HH' => 'E02001808',
        '7HL' => 'E02001808',
        '7HN' => 'E02001808',
        '7HP' => 'E02001808',
        '7HQ' => 'E02001808',
        '7HR' => 'E02001801',
        '7HS' => 'E02001808',
        '7HT' => 'E02001808',
        '7HU' => 'E02001808',
        '7HW' => 'E02001808',
        '7HX' => 'E02001808',
        '7HY' => 'E02001801',
        '7HZ' => 'E02001801',
        '7JA' => 'E02001808',
        '7JB' => 'E02001808',
        '7JD' => 'E02001808',
        '7JE' => 'E02001808',
        '7JF' => 'E02001808',
        '7JG' => 'E02001808',
        '7JH' => 'E02001808',
        '7JJ' => 'E02001808',
        '7JL' => 'E02001808',
        '7JN' => 'E02001808',
        '7JP' => 'E02001808',
        '7JQ' => 'E02001808',
        '7JR' => 'E02001808',
        '7JS' => 'E02001808',
        '7JT' => 'E02001808',
        '7JU' => 'E02001808',
        '7JW' => 'E02001808',
        '7LB' => 'E02001808',
        '7LD' => 'E02001808',
        '7LE' => 'E02001808',
        '7LF' => 'E02001808',
        '7LG' => 'E02001812',
        '7LH' => 'E02001812',
        '7LJ' => 'E02001812',
        '7LL' => 'E02001812',
        '7LN' => 'E02001808',
        '7LP' => 'E02001808',
        '7LQ' => 'E02001812',
        '7LR' => 'E02001808',
        '7LS' => 'E02001808',
        '7LT' => 'E02001808',
        '7LU' => 'E02001808',
        '7LW' => 'E02001812',
        '7LX' => 'E02001808',
        '7LY' => 'E02001808',
        '7LZ' => 'E02001808',
        '7NA' => 'E02001808',
        '7NB' => 'E02001808',
        '7ND' => 'E02001808',
        '7NF' => 'E02001808',
        '7NG' => 'E02001808',
        '7NH' => 'E02001808',
        '7NJ' => 'E02001808',
        '7NL' => 'E02001808',
        '7NN' => 'E02001808',
        '7NP' => 'E02001808',
        '7NQ' => 'E02001808',
        '7NR' => 'E02001808',
        '7NS' => 'E02001808',
        '7NT' => 'E02001808',
        '7NU' => 'E02001808',
        '7NW' => 'E02001808',
        '7PE' => 'E02001812',
        '7PH' => 'E02001808',
        '7PJ' => 'E02001808',
        '7PL' => 'E02001808',
        '7PN' => 'E02001808',
        '7PP' => 'E02001808',
        '7PR' => 'E02001808',
        '7PS' => 'E02001805',
        '7PT' => 'E02001808',
        '7PU' => 'E02001805',
        '7PW' => 'E02001808',
        '7PX' => 'E02001808',
        '7PY' => 'E02001808',
        '7PZ' => 'E02001808',
        '7QA' => 'E02001808',
        '7QB' => 'E02001808',
        '7QD' => 'E02001808',
        '7QE' => 'E02001808',
        '7QF' => 'E02001808',
        '7QG' => 'E02001805',
        '7QH' => 'E02001805',
        '7QJ' => 'E02001808',
        '7QL' => 'E02001808',
        '7QN' => 'E02001808',
        '7QP' => 'E02001805',
        '7QQ' => 'E02001808',
        '7QR' => 'E02001805',
        '7QS' => 'E02001805',
        '7QT' => 'E02001805',
        '7QU' => 'E02001805',
        '7QW' => 'E02001805',
        '7RA' => 'E02001808',
        '7RB' => 'E02001808',
        '7RD' => 'E02001808',
        '7RE' => 'E02001808',
        '7RG' => 'E02001808',
        '7RH' => 'E02001808',
        '7RJ' => 'E02001808',
        '7RL' => 'E02001808',
        '7RN' => 'E02001808',
        '7RP' => 'E02001805',
        '7RQ' => 'E02001808',
        '7RR' => 'E02001805',
        '7RS' => 'E02001805',
        '7RT' => 'E02001805',
        '7RU' => 'E02001808',
        '7RW' => 'E02001805',
        '7RX' => 'E02001808',
        '7RY' => 'E02001808',
        '7RZ' => 'E02001805',
        '7SA' => 'E02001805',
        '7SB' => 'E02001805',
        '7SD' => 'E02001805',
        '7SE' => 'E02001805',
        '7SJ' => 'E02001805',
        '7SL' => 'E02001805',
        '7SN' => 'E02001805',
        '7SP' => 'E02001805',
        '7SR' => 'E02001805',
        '7SS' => 'E02001805',
        '7ST' => 'E02001805',
        '7SU' => 'E02001805',
        '7SW' => 'E02001805',
        '7SX' => 'E02001805',
        '7SY' => 'E02001805',
        '7SZ' => 'E02001805',
        '7TA' => 'E02001805',
        '7TB' => 'E02001805',
        '7TD' => 'E02001805',
        '7TE' => 'E02001805',
        '7TF' => 'E02001805',
        '7TG' => 'E02001805',
        '7TH' => 'E02001805',
        '7TJ' => 'E02001805',
        '7TL' => 'E02001805',
        '7TN' => 'E02001805',
        '7TP' => 'E02001801',
        '7TQ' => 'E02001805',
        '7TR' => 'E02001808',
        '7TS' => 'E02001808',
        '7TT' => 'E02001808',
        '7TU' => 'E02001808',
        '7TW' => 'E02001805',
        '7TX' => 'E02001808',
        '7UE' => 'E02001805',
        '7UF' => 'E02001801',
        '7UH' => 'E02001801',
        '7UJ' => 'E02001801',
        '7UP' => 'E02001801',
        '7UR' => 'E02001801',
        '7UT' => 'E02001801',
        '7UU' => 'E02001801',
        '7UX' => 'E02001801',
        '7UY' => 'E02001801',
        '7UZ' => 'E02001801',
        '7WS' => 'E02001795',
        '7WT' => 'E02001795',
        '7WU' => 'E02001795',
        '7WW' => 'E02001795',
        '7WX' => 'E02001795',
        '7WY' => 'E02001795',
        '7WZ' => 'E02001795',
        '7XA' => 'E02001801',
        '7XB' => 'E02001801',
        '7XD' => 'E02001801',
        '7XF' => 'E02001801',
        '7XH' => 'E02001801',
        '7XJ' => 'E02001801',
        '7XQ' => 'E02001801',
        '7XR' => 'E02001795',
        '7XS' => 'E02001803',
        '7XT' => 'E02001801',
        '7XU' => 'E02001801',
        '7XW' => 'E02001801',
        '7XX' => 'E02001795',
        '7XY' => 'E02001795',
        '7XZ' => 'E02001795',
        '7YA' => 'E02001801',
        '7YB' => 'E02001801',
        '7YD' => 'E02001801',
        '7YE' => 'E02001801',
        '7YF' => 'E02001801',
        '7YG' => 'E02001801',
        '7YH' => 'E02001808',
        '7YJ' => 'E02001808',
        '7YL' => 'E02001808',
        '7YN' => 'E02001801',
        '7YP' => 'E02001808',
        '7YQ' => 'E02001801',
        '7YR' => 'E02001808',
        '7YS' => 'E02001795',
        '7YT' => 'E02001808',
        '7YU' => 'E02001808',
        '7YW' => 'E02001801',
        '7YX' => 'E02001801',
        '7YY' => 'E02001801',
        '7YZ' => 'E02001795',
        '7ZA' => 'E02001795',
        '7ZR' => 'E02001795',
        '7ZT' => 'E02001795',
        '8AA' => 'E02001802',
        '8AB' => 'E02001802',
        '8AD' => 'E02001802',
        '8AE' => 'E02001804',
        '8AF' => 'E02001802',
        '8AG' => 'E02001802',
        '8AH' => 'E02001802',
        '8AJ' => 'E02001802',
        '8AL' => 'E02001804',
        '8AN' => 'E02001802',
        '8AP' => 'E02001802',
        '8AQ' => 'E02001802',
        '8AR' => 'E02001802',
        '8AS' => 'E02001804',
        '8AT' => 'E02001804',
        '8AU' => 'E02001804',
        '8AW' => 'E02001804',
        '8AX' => 'E02001804',
        '8AY' => 'E02001804',
        '8AZ' => 'E02001804',
        '8BA' => 'E02001804',
        '8BB' => 'E02001804',
        '8BD' => 'E02001804',
        '8BE' => 'E02001804',
        '8BG' => 'E02001804',
        '8BH' => 'E02001804',
        '8BJ' => 'E02001805',
        '8BL' => 'E02001804',
        '8BN' => 'E02001805',
        '8BP' => 'E02001805',
        '8BQ' => 'E02001804',
        '8BS' => 'E02001805',
        '8BT' => 'E02001802',
        '8BU' => 'E02001805',
        '8BW' => 'E02001805',
        '8BX' => 'E02001802',
        '8BY' => 'E02001805',
        '8BZ' => 'E02001802',
        '8DA' => 'E02001802',
        '8DB' => 'E02001802',
        '8DD' => 'E02001802',
        '8DE' => 'E02001802',
        '8DF' => 'E02001802',
        '8DG' => 'E02001802',
        '8DH' => 'E02001802',
        '8DJ' => 'E02001802',
        '8DL' => 'E02001802',
        '8DN' => 'E02001802',
        '8DP' => 'E02001804',
        '8DQ' => 'E02001802',
        '8DR' => 'E02001804',
        '8DS' => 'E02001804',
        '8DT' => 'E02001804',
        '8DU' => 'E02001804',
        '8DW' => 'E02001802',
        '8DX' => 'E02001804',
        '8DY' => 'E02001804',
        '8DZ' => 'E02001804',
        '8EA' => 'E02001804',
        '8EB' => 'E02001804',
        '8ED' => 'E02001804',
        '8EE' => 'E02001804',
        '8EF' => 'E02001804',
        '8EG' => 'E02001804',
        '8EH' => 'E02001804',
        '8EJ' => 'E02001804',
        '8EL' => 'E02001804',
        '8EN' => 'E02001804',
        '8EP' => 'E02001804',
        '8EQ' => 'E02001804',
        '8ER' => 'E02001804',
        '8ES' => 'E02001811',
        '8ET' => 'E02001802',
        '8EU' => 'E02001802',
        '8EW' => 'E02001804',
        '8EX' => 'E02001804',
        '8HA' => 'E02001811',
        '8HB' => 'E02001811',
        '8HD' => 'E02001811',
        '8HE' => 'E02001811',
        '8HF' => 'E02001811',
        '8HG' => 'E02001811',
        '8HH' => 'E02001811',
        '8HP' => 'E02001811',
        '8HQ' => 'E02001811',
        '8HR' => 'E02001811',
        '8HS' => 'E02001811',
        '8HT' => 'E02001811',
        '8HU' => 'E02001811',
        '8HW' => 'E02001811',
        '8HX' => 'E02001811',
        '8HY' => 'E02001811',
        '8HZ' => 'E02001811',
        '8JA' => 'E02001811',
        '8JB' => 'E02001811',
        '8JD' => 'E02001811',
        '8JE' => 'E02001811',
        '8JF' => 'E02001811',
        '8JG' => 'E02001811',
        '8JH' => 'E02001811',
        '8JJ' => 'E02001811',
        '8JL' => 'E02001811',
        '8JN' => 'E02001811',
        '8JP' => 'E02001811',
        '8JQ' => 'E02001811',
        '8JR' => 'E02001811',
        '8JS' => 'E02001811',
        '8JT' => 'E02001811',
        '8JU' => 'E02001811',
        '8JW' => 'E02001811',
        '8JX' => 'E02001811',
        '8JY' => 'E02001811',
        '8JZ' => 'E02001811',
        '8LA' => 'E02001811',
        '8LB' => 'E02001811',
        '8LD' => 'E02001811',
        '8LE' => 'E02001811',
        '8LF' => 'E02001811',
        '8LG' => 'E02001811',
        '8LH' => 'E02001811',
        '8LN' => 'E02001805',
        '8LP' => 'E02001805',
        '8LQ' => 'E02001811',
        '8LR' => 'E02001805',
        '8LS' => 'E02001805',
        '8LT' => 'E02001805',
        '8LU' => 'E02001805',
        '8LW' => 'E02001805',
        '8LX' => 'E02001805',
        '8LY' => 'E02001805',
        '8LZ' => 'E02001805',
        '8NA' => 'E02001805',
        '8NB' => 'E02001805',
        '8ND' => 'E02001805',
        '8NE' => 'E02001805',
        '8NF' => 'E02001805',
        '8NG' => 'E02001805',
        '8NH' => 'E02001805',
        '8NJ' => 'E02001805',
        '8NL' => 'E02001805',
        '8NN' => 'E02001805',
        '8NP' => 'E02001811',
        '8NQ' => 'E02001805',
        '8NR' => 'E02001811',
        '8NS' => 'E02001804',
        '8NT' => 'E02001804',
        '8NU' => 'E02001804',
        '8NW' => 'E02001811',
        '8NX' => 'E02001804',
        '8PA' => 'E02001811',
        '8PB' => 'E02001804',
        '8PD' => 'E02001804',
        '8PE' => 'E02001804',
        '8PF' => 'E02001804',
        '8PG' => 'E02001804',
        '8PH' => 'E02001804',
        '8PJ' => 'E02001804',
        '8PL' => 'E02001804',
        '8PQ' => 'E02001804',
        '8PT' => 'E02001805',
        '8PU' => 'E02001805',
        '8PX' => 'E02001805',
        '8PY' => 'E02001805',
        '8PZ' => 'E02001805',
        '8QA' => 'E02001805',
        '8QB' => 'E02001805',
        '8QD' => 'E02001805',
        '8QE' => 'E02001805',
        '8QF' => 'E02001805',
        '8QG' => 'E02001805',
        '8QH' => 'E02001805',
        '8QJ' => 'E02001805',
        '8QL' => 'E02001805',
        '8QN' => 'E02001805',
        '8QP' => 'E02001805',
        '8QQ' => 'E02001805',
        '8QR' => 'E02001805',
        '8QS' => 'E02001805',
        '8QT' => 'E02001805',
        '8QU' => 'E02001805',
        '8QW' => 'E02001805',
        '8QX' => 'E02001805',
        '8QY' => 'E02001805',
        '8QZ' => 'E02001805',
        '8RA' => 'E02001805',
        '8RB' => 'E02001805',
        '8RD' => 'E02001805',
        '8RE' => 'E02001805',
        '8RF' => 'E02001805',
        '8RG' => 'E02001805',
        '8RH' => 'E02001805',
        '8RJ' => 'E02001811',
        '8RL' => 'E02001811',
        '8RN' => 'E02001811',
        '8RP' => 'E02001811',
        '8RQ' => 'E02001805',
        '8RR' => 'E02001811',
        '8RS' => 'E02001811',
        '8RT' => 'E02001811',
        '8RU' => 'E02001811',
        '8RW' => 'E02001811',
        '8WW' => 'E02001795',
        '8WX' => 'E02001805',
        '8WY' => 'E02001805',
        '8WZ' => 'E02001805',
        '8YP' => 'E02001795',
        '8YR' => 'E02001795',
        '8YS' => 'E02001805',
        '8YT' => 'E02001795',
        '8YU' => 'E02001804',
        '8YW' => 'E02001804',
        '8YX' => 'E02001795',
        '8YZ' => 'E02001805',
        '9AA' => 'E02001804',
        '9AB' => 'E02001804',
        '9AD' => 'E02001811',
        '9AE' => 'E02001811',
        '9AF' => 'E02001811',
        '9AG' => 'E02001811',
        '9AH' => 'E02001811',
        '9AJ' => 'E02001811',
        '9AQ' => 'E02001811',
        '9AR' => 'E02001804',
        '9AS' => 'E02001804',
        '9AT' => 'E02001804',
        '9AU' => 'E02001804',
        '9AX' => 'E02001804',
        '9AY' => 'E02001811',
        '9AZ' => 'E02001811',
        '9BA' => 'E02001811',
        '9BB' => 'E02001811',
        '9BD' => 'E02001811',
        '9BE' => 'E02001811',
        '9BF' => 'E02001811',
        '9BG' => 'E02001811',
        '9BH' => 'E02001811',
        '9BJ' => 'E02001811',
        '9BL' => 'E02001811',
        '9BN' => 'E02001811',
        '9BP' => 'E02001811',
        '9BQ' => 'E02001811',
        '9BS' => 'E02001811',
        '9BT' => 'E02001811',
        '9BU' => 'E02001811',
        '9BW' => 'E02001811',
        '9BX' => 'E02001811',
        '9BY' => 'E02001811',
        '9BZ' => 'E02001811',
        '9DA' => 'E02001811',
        '9DB' => 'E02001811',
        '9DD' => 'E02001811',
        '9DE' => 'E02001811',
        '9DF' => 'E02001811',
        '9DG' => 'E02001811',
        '9DH' => 'E02001811',
        '9DJ' => 'E02001811',
        '9DL' => 'E02001811',
        '9DN' => 'E02001811',
        '9DP' => 'E02001811',
        '9DQ' => 'E02001811',
        '9DR' => 'E02001811',
        '9DS' => 'E02001811',
        '9DT' => 'E02001811',
        '9DU' => 'E02001811',
        '9DW' => 'E02001811',
        '9DX' => 'E02001811',
        '9DY' => 'E02001811',
        '9DZ' => 'E02001811',
        '9EA' => 'E02001811',
        '9EB' => 'E02001811',
        '9ED' => 'E02001811',
        '9EE' => 'E02001811',
        '9EF' => 'E02001811',
        '9EG' => 'E02001811',
        '9EH' => 'E02001811',
        '9EJ' => 'E02001811',
        '9EL' => 'E02001811',
        '9EN' => 'E02001811',
        '9EP' => 'E02001811',
        '9EQ' => 'E02001811',
        '9ER' => 'E02001811',
        '9ES' => 'E02001795',
        '9ET' => 'E02001795',
        '9EU' => 'E02001795',
        '9EW' => 'E02001811',
        '9EX' => 'E02001795',
        '9FA' => 'E02001811',
        '9HA' => 'E02001811',
        '9HB' => 'E02001811',
        '9HD' => 'E02001811',
        '9HE' => 'E02001811',
        '9HF' => 'E02001811',
        '9HG' => 'E02001811',
        '9HH' => 'E02001811',
        '9HJ' => 'E02001811',
        '9HL' => 'E02001811',
        '9HN' => 'E02001811',
        '9HP' => 'E02001811',
        '9HQ' => 'E02001811',
        '9HR' => 'E02001811',
        '9HS' => 'E02001811',
        '9HT' => 'E02001811',
        '9HU' => 'E02001804',
        '9HW' => 'E02001811',
        '9HX' => 'E02001811',
        '9HY' => 'E02001811',
        '9HZ' => 'E02001811',
        '9JA' => 'E02001811',
        '9JB' => 'E02001811',
        '9JL' => 'E02001822',
        '9JN' => 'E02001822',
        '9JP' => 'E02001822',
        '9JR' => 'E02001822',
        '9JS' => 'E02001822',
        '9JT' => 'E02001822',
        '9JU' => 'E02001822',
        '9JW' => 'E02001822',
        '9JX' => 'E02001822',
        '9JY' => 'E02001822',
        '9JZ' => 'E02001822',
        '9LA' => 'E02001822',
        '9LB' => 'E02001811',
        '9LP' => 'E02001811',
        '9LR' => 'E02001811',
        '9LS' => 'E02001811',
        '9LT' => 'E02001811',
        '9LU' => 'E02001811',
        '9LX' => 'E02001811',
        '9LY' => 'E02001811',
        '9LZ' => 'E02001811',
        '9NE' => 'E02001811',
        '9NF' => 'E02001811',
        '9NG' => 'E02001811',
        '9NH' => 'E02001811',
        '9NJ' => 'E02001811',
        '9NL' => 'E02001811',
        '9NN' => 'E02001811',
        '9NP' => 'E02001811',
        '9NQ' => 'E02001811',
        '9NR' => 'E02001811',
        '9NS' => 'E02001811',
        '9NT' => 'E02001811',
        '9NU' => 'E02001811',
        '9NW' => 'E02001811',
        '9NX' => 'E02001811',
        '9PA' => 'E02001811',
        '9PP' => 'E02001811',
        '9PR' => 'E02001811',
        '9PS' => 'E02001811',
        '9PT' => 'E02001811',
        '9PU' => 'E02001811',
        '9PW' => 'E02001811',
        '9PX' => 'E02001811',
        '9PY' => 'E02001811',
        '9PZ' => 'E02001811',
        '9QA' => 'E02001811',
        '9QB' => 'E02001811',
        '9QD' => 'E02001811',
        '9QE' => 'E02001811',
        '9QF' => 'E02001811',
        '9QG' => 'E02001811',
        '9QH' => 'E02001811',
        '9QJ' => 'E02001811',
        '9QL' => 'E02001811',
        '9QN' => 'E02001811',
        '9QP' => 'E02001811',
        '9QQ' => 'E02001811',
        '9QR' => 'E02001811',
        '9QS' => 'E02001811',
        '9QT' => 'E02001811',
        '9QU' => 'E02001811',
        '9QW' => 'E02001811',
        '9QX' => 'E02001811',
        '9QY' => 'E02001811',
        '9QZ' => 'E02001811',
        '9RA' => 'E02001811',
        '9RB' => 'E02001811',
        '9RD' => 'E02001811',
        '9RE' => 'E02001811',
        '9RF' => 'E02001811',
        '9RG' => 'E02001811',
        '9RH' => 'E02001811',
        '9RJ' => 'E02001811',
        '9RL' => 'E02001811',
        '9RN' => 'E02001811',
        '9RP' => 'E02001811',
        '9RQ' => 'E02001811',
        '9RR' => 'E02001811',
        '9RS' => 'E02001811',
        '9RT' => 'E02001811',
        '9RU' => 'E02001811',
        '9RW' => 'E02001811',
        '9RX' => 'E02001811',
        '9RY' => 'E02001811',
        '9RZ' => 'E02001811',
        '9SA' => 'E02001811',
        '9SB' => 'E02001811',
        '9SD' => 'E02001811',
        '9SE' => 'E02001811',
        '9SF' => 'E02001811',
        '9SG' => 'E02001811',
        '9SQ' => 'E02001811',
        '9WD' => 'E02001795',
        '9WY' => 'E02001795',
        '9WZ' => 'E02001811',
        '9YS' => 'E02001795',
        '9YT' => 'E02001811',
        '9YU' => 'E02001811',
        '9YX' => 'E02001811',
        '9YY' => 'E02001795',
        '9YZ' => 'E02001811',
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
