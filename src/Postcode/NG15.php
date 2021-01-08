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
final class NG15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005828',
        '0AB' => 'E02005828',
        '0AD' => 'E02005827',
        '0AE' => 'E02005828',
        '0AF' => 'E02005828',
        '0AG' => 'E02005828',
        '0AH' => 'E02005828',
        '0AJ' => 'E02005828',
        '0AL' => 'E02005828',
        '0AN' => 'E02005828',
        '0AP' => 'E02005828',
        '0AQ' => 'E02005828',
        '0AR' => 'E02005828',
        '0AS' => 'E02005828',
        '0AT' => 'E02005828',
        '0AU' => 'E02005828',
        '0AW' => 'E02005828',
        '0AX' => 'E02005828',
        '0AY' => 'E02005828',
        '0AZ' => 'E02005828',
        '0BA' => 'E02005828',
        '0BB' => 'E02005865',
        '0BD' => 'E02005865',
        '0BE' => 'E02005865',
        '0BF' => 'E02005865',
        '0BG' => 'E02005865',
        '0BH' => 'E02005865',
        '0BJ' => 'E02005865',
        '0BL' => 'E02005865',
        '0BN' => 'E02005865',
        '0BP' => 'E02005865',
        '0BQ' => 'E02005865',
        '0BS' => 'E02005865',
        '0BT' => 'E02005865',
        '0BU' => 'E02005865',
        '0BW' => 'E02005865',
        '0BX' => 'E02005865',
        '0BY' => 'E02005865',
        '0BZ' => 'E02005865',
        '0DA' => 'E02005828',
        '0DB' => 'E02005865',
        '0DD' => 'E02005865',
        '0DE' => 'E02005828',
        '0DF' => 'E02005828',
        '0DG' => 'E02005828',
        '0DH' => 'E02005828',
        '0DJ' => 'E02005828',
        '0DL' => 'E02005832',
        '0DN' => 'E02005832',
        '0DP' => 'E02005828',
        '0DQ' => 'E02005865',
        '0DR' => 'E02005828',
        '0DS' => 'E02005828',
        '0DT' => 'E02005828',
        '0DU' => 'E02005832',
        '0DW' => 'E02005828',
        '0DX' => 'E02005828',
        '0DY' => 'E02005832',
        '0DZ' => 'E02005832',
        '0EA' => 'E02005828',
        '0EB' => 'E02005828',
        '0ED' => 'E02005828',
        '0EE' => 'E02005828',
        '0EF' => 'E02005828',
        '0EG' => 'E02005828',
        '0EH' => 'E02005828',
        '0EJ' => 'E02005828',
        '0EL' => 'E02005828',
        '0EN' => 'E02005828',
        '0FE' => 'E02005828',
        '0HT' => 'E02005828',
        '0RS' => 'E02005828',
        '0WA' => 'E02005832',
        '0WB' => 'E02005832',
        '0WD' => 'E02005832',
        '0WE' => 'E02005832',
        '0WF' => 'E02005832',
        '0WJ' => 'E02005832',
        '0WP' => 'E02005832',
        '0WR' => 'E02005832',
        '0WU' => 'E02005832',
        '0WW' => 'E02005832',
        '0XA' => 'E02005832',
        '0XU' => 'E02005832',
        '0XW' => 'E02005832',
        '0YU' => 'E02005832',
        '0YW' => 'E02005832',
        '0ZP' => 'E02005832',
        '0ZU' => 'E02005832',
        '0ZW' => 'E02005832',
        '0ZZ' => 'E02005832',
        '5AA' => 'E02005832',
        '5AB' => 'E02005832',
        '5AD' => 'E02005832',
        '5AE' => 'E02005832',
        '5AF' => 'E02005832',
        '5AG' => 'E02005832',
        '5AH' => 'E02005832',
        '5AJ' => 'E02005832',
        '5AL' => 'E02005832',
        '5AN' => 'E02005832',
        '5AP' => 'E02005832',
        '5AQ' => 'E02005832',
        '5AR' => 'E02005832',
        '5AS' => 'E02005832',
        '5AT' => 'E02005832',
        '5AU' => 'E02005832',
        '5AW' => 'E02005832',
        '5AX' => 'E02005832',
        '5AY' => 'E02005832',
        '5AZ' => 'E02005832',
        '5BA' => 'E02005832',
        '5BB' => 'E02005832',
        '5BD' => 'E02005832',
        '5BE' => 'E02005832',
        '5BF' => 'E02005832',
        '5BG' => 'E02005832',
        '5BH' => 'E02005832',
        '5BJ' => 'E02005832',
        '5BL' => 'E02005832',
        '5BN' => 'E02005832',
        '5BP' => 'E02005832',
        '5BQ' => 'E02005832',
        '5BR' => 'E02005832',
        '5BS' => 'E02005832',
        '5BT' => 'E02005832',
        '5BU' => 'E02005832',
        '5BW' => 'E02005832',
        '5BX' => 'E02005832',
        '5BY' => 'E02005832',
        '5BZ' => 'E02005832',
        '5DA' => 'E02005832',
        '5DB' => 'E02005832',
        '5DD' => 'E02005832',
        '5DE' => 'E02005832',
        '5DF' => 'E02005832',
        '5DG' => 'E02005832',
        '5DH' => 'E02005832',
        '5DJ' => 'E02005832',
        '5DL' => 'E02005832',
        '5DN' => 'E02005832',
        '5DP' => 'E02005832',
        '5DQ' => 'E02005832',
        '5DR' => 'E02005832',
        '5DS' => 'E02005832',
        '5DT' => 'E02005832',
        '5DU' => 'E02005832',
        '5DW' => 'E02005832',
        '5DX' => 'E02005832',
        '5DY' => 'E02005832',
        '5DZ' => 'E02005832',
        '5EA' => 'E02005832',
        '5EB' => 'E02005832',
        '5ED' => 'E02005832',
        '5EE' => 'E02005832',
        '5EF' => 'E02005832',
        '5EG' => 'E02005832',
        '5EH' => 'E02005832',
        '5EJ' => 'E02005832',
        '5EL' => 'E02005832',
        '5EN' => 'E02005832',
        '5EP' => 'E02005832',
        '5EQ' => 'E02005832',
        '5ER' => 'E02005832',
        '5ES' => 'E02005832',
        '5ET' => 'E02005832',
        '5EU' => 'E02005832',
        '5WY' => 'E02005832',
        '5WZ' => 'E02005832',
        '6AA' => 'E02005834',
        '6AB' => 'E02005834',
        '6AD' => 'E02005834',
        '6AE' => 'E02005834',
        '6AF' => 'E02005834',
        '6AG' => 'E02005834',
        '6AH' => 'E02005834',
        '6AJ' => 'E02005834',
        '6AL' => 'E02005834',
        '6AN' => 'E02005834',
        '6AP' => 'E02005834',
        '6AQ' => 'E02005834',
        '6AR' => 'E02005834',
        '6AS' => 'E02005834',
        '6AT' => 'E02005834',
        '6AU' => 'E02005834',
        '6AW' => 'E02005834',
        '6AX' => 'E02005834',
        '6AY' => 'E02005834',
        '6AZ' => 'E02005834',
        '6BA' => 'E02005834',
        '6BB' => 'E02005834',
        '6BD' => 'E02005834',
        '6BE' => 'E02005834',
        '6BF' => 'E02005834',
        '6BG' => 'E02005834',
        '6BH' => 'E02005834',
        '6BJ' => 'E02005834',
        '6BL' => 'E02005834',
        '6BN' => 'E02005834',
        '6BP' => 'E02005834',
        '6BQ' => 'E02005832',
        '6BS' => 'E02005834',
        '6BT' => 'E02005834',
        '6BU' => 'E02005834',
        '6BW' => 'E02005832',
        '6BX' => 'E02005834',
        '6BY' => 'E02005832',
        '6BZ' => 'E02005832',
        '6DA' => 'E02005834',
        '6DB' => 'E02005834',
        '6DD' => 'E02005834',
        '6DE' => 'E02005834',
        '6DF' => 'E02005834',
        '6DG' => 'E02005834',
        '6DH' => 'E02005834',
        '6DJ' => 'E02005834',
        '6DL' => 'E02005834',
        '6DN' => 'E02005834',
        '6DP' => 'E02005834',
        '6DQ' => 'E02005834',
        '6DR' => 'E02005834',
        '6DS' => 'E02005834',
        '6DT' => 'E02005834',
        '6DU' => 'E02005834',
        '6DW' => 'E02005834',
        '6DX' => 'E02005832',
        '6DY' => 'E02005832',
        '6DZ' => 'E02005834',
        '6EA' => 'E02005834',
        '6EB' => 'E02005834',
        '6ED' => 'E02005834',
        '6EE' => 'E02005834',
        '6EF' => 'E02005832',
        '6EG' => 'E02005834',
        '6EH' => 'E02005832',
        '6EJ' => 'E02005834',
        '6EL' => 'E02005832',
        '6EN' => 'E02005834',
        '6EP' => 'E02005834',
        '6EQ' => 'E02005834',
        '6ER' => 'E02005834',
        '6ES' => 'E02005832',
        '6ET' => 'E02005832',
        '6EU' => 'E02005834',
        '6EW' => 'E02005832',
        '6EX' => 'E02005832',
        '6EY' => 'E02005834',
        '6EZ' => 'E02005833',
        '6FA' => 'E02005832',
        '6FB' => 'E02005833',
        '6FD' => 'E02005832',
        '6FE' => 'E02005834',
        '6FF' => 'E02005834',
        '6FG' => 'E02005834',
        '6FH' => 'E02005833',
        '6FJ' => 'E02005834',
        '6FL' => 'E02005834',
        '6FN' => 'E02005834',
        '6FP' => 'E02005834',
        '6FQ' => 'E02005834',
        '6FR' => 'E02005833',
        '6FS' => 'E02005834',
        '6FT' => 'E02005834',
        '6FU' => 'E02005834',
        '6FW' => 'E02005834',
        '6FX' => 'E02005834',
        '6FY' => 'E02005834',
        '6FZ' => 'E02005834',
        '6GA' => 'E02005834',
        '6GB' => 'E02005834',
        '6GD' => 'E02005834',
        '6GE' => 'E02005834',
        '6GF' => 'E02005834',
        '6GG' => 'E02005834',
        '6GH' => 'E02005834',
        '6GJ' => 'E02005834',
        '6GL' => 'E02005833',
        '6GN' => 'E02005833',
        '6GP' => 'E02005833',
        '6GQ' => 'E02005834',
        '6GR' => 'E02005834',
        '6GS' => 'E02005834',
        '6GT' => 'E02005834',
        '6GU' => 'E02005834',
        '6GW' => 'E02005832',
        '6GX' => 'E02005833',
        '6GY' => 'E02005833',
        '6GZ' => 'E02005833',
        '6HA' => 'E02005834',
        '6HB' => 'E02005834',
        '6HD' => 'E02005834',
        '6HE' => 'E02005834',
        '6HF' => 'E02005834',
        '6HG' => 'E02005834',
        '6HH' => 'E02005834',
        '6HJ' => 'E02005834',
        '6HL' => 'E02005834',
        '6HN' => 'E02005834',
        '6HP' => 'E02005834',
        '6HQ' => 'E02005834',
        '6HR' => 'E02005834',
        '6HS' => 'E02005834',
        '6HT' => 'E02005834',
        '6HU' => 'E02005834',
        '6HW' => 'E02005834',
        '6HX' => 'E02005834',
        '6HY' => 'E02005833',
        '6HZ' => 'E02005833',
        '6JA' => 'E02005833',
        '6JB' => 'E02005834',
        '6JD' => 'E02005834',
        '6JE' => 'E02005834',
        '6JF' => 'E02005834',
        '6JG' => 'E02005834',
        '6JH' => 'E02005834',
        '6JJ' => 'E02005834',
        '6JL' => 'E02005834',
        '6JN' => 'E02005834',
        '6JP' => 'E02005833',
        '6JQ' => 'E02005833',
        '6JR' => 'E02005833',
        '6JS' => 'E02005833',
        '6JT' => 'E02005833',
        '6JU' => 'E02005853',
        '6JW' => 'E02005833',
        '6JX' => 'E02005833',
        '6JY' => 'E02005834',
        '6JZ' => 'E02005833',
        '6LA' => 'E02005833',
        '6LB' => 'E02005833',
        '6LD' => 'E02005833',
        '6LE' => 'E02005833',
        '6LF' => 'E02005833',
        '6LG' => 'E02005833',
        '6LH' => 'E02005833',
        '6LJ' => 'E02005833',
        '6LL' => 'E02005833',
        '6LN' => 'E02005833',
        '6LP' => 'E02005833',
        '6LQ' => 'E02005833',
        '6LR' => 'E02005833',
        '6LS' => 'E02005833',
        '6LT' => 'E02005833',
        '6LU' => 'E02005833',
        '6LW' => 'E02005833',
        '6LX' => 'E02005833',
        '6LY' => 'E02005833',
        '6LZ' => 'E02005833',
        '6NA' => 'E02005833',
        '6NB' => 'E02005833',
        '6ND' => 'E02005833',
        '6NE' => 'E02005833',
        '6NF' => 'E02005833',
        '6NG' => 'E02005833',
        '6NH' => 'E02005833',
        '6NJ' => 'E02005833',
        '6NL' => 'E02005833',
        '6NN' => 'E02005833',
        '6NP' => 'E02005833',
        '6NQ' => 'E02005833',
        '6NR' => 'E02005833',
        '6NS' => 'E02005833',
        '6NT' => 'E02005833',
        '6NU' => 'E02005833',
        '6NW' => 'E02005833',
        '6NX' => 'E02005833',
        '6NY' => 'E02005833',
        '6NZ' => 'E02005833',
        '6PA' => 'E02005833',
        '6PB' => 'E02005833',
        '6PD' => 'E02005833',
        '6PE' => 'E02005833',
        '6PF' => 'E02005833',
        '6PG' => 'E02005833',
        '6PH' => 'E02005833',
        '6PJ' => 'E02005833',
        '6PL' => 'E02005833',
        '6PN' => 'E02005833',
        '6PP' => 'E02005833',
        '6PQ' => 'E02005833',
        '6PR' => 'E02005833',
        '6PS' => 'E02005833',
        '6PT' => 'E02005833',
        '6PU' => 'E02005833',
        '6PW' => 'E02005833',
        '6PX' => 'E02005833',
        '6PY' => 'E02005833',
        '6PZ' => 'E02005833',
        '6QA' => 'E02005833',
        '6QB' => 'E02005833',
        '6QD' => 'E02005833',
        '6QE' => 'E02005833',
        '6QF' => 'E02005833',
        '6QG' => 'E02005833',
        '6QH' => 'E02005833',
        '6QJ' => 'E02005833',
        '6QL' => 'E02005833',
        '6QN' => 'E02005833',
        '6QP' => 'E02005833',
        '6QQ' => 'E02005833',
        '6QR' => 'E02005833',
        '6QS' => 'E02005833',
        '6QT' => 'E02005834',
        '6QU' => 'E02005834',
        '6QW' => 'E02005834',
        '6QX' => 'E02005834',
        '6QY' => 'E02005834',
        '6QZ' => 'E02005833',
        '6RA' => 'E02005833',
        '6RB' => 'E02005833',
        '6RD' => 'E02005833',
        '6RE' => 'E02005833',
        '6RF' => 'E02005833',
        '6RG' => 'E02005833',
        '6RH' => 'E02005834',
        '6RJ' => 'E02005834',
        '6RL' => 'E02005833',
        '6RN' => 'E02005833',
        '6RP' => 'E02005833',
        '6RQ' => 'E02005833',
        '6RR' => 'E02005833',
        '6RS' => 'E02005833',
        '6RT' => 'E02005833',
        '6RU' => 'E02005833',
        '6RW' => 'E02005833',
        '6RX' => 'E02005833',
        '6RY' => 'E02005833',
        '6RZ' => 'E02005832',
        '6SA' => 'E02005834',
        '6SB' => 'E02005834',
        '6SD' => 'E02005834',
        '6SE' => 'E02005834',
        '6SF' => 'E02005834',
        '6SG' => 'E02005834',
        '6SH' => 'E02005834',
        '6SJ' => 'E02005834',
        '6SL' => 'E02005834',
        '6SN' => 'E02005834',
        '6SP' => 'E02005834',
        '6SQ' => 'E02005834',
        '6SR' => 'E02005833',
        '6SS' => 'E02005834',
        '6ST' => 'E02005834',
        '6SU' => 'E02005834',
        '6SW' => 'E02005833',
        '6SX' => 'E02005833',
        '6SY' => 'E02005833',
        '6SZ' => 'E02005832',
        '6TA' => 'E02005833',
        '6TB' => 'E02005833',
        '6TD' => 'E02005833',
        '6TE' => 'E02005833',
        '6TF' => 'E02005833',
        '6TG' => 'E02005833',
        '6TH' => 'E02005833',
        '6TJ' => 'E02005833',
        '6TL' => 'E02005833',
        '6TN' => 'E02005833',
        '6TP' => 'E02005833',
        '6TQ' => 'E02005833',
        '6TR' => 'E02005833',
        '6TS' => 'E02005833',
        '6TT' => 'E02005833',
        '6TU' => 'E02005833',
        '6TW' => 'E02005833',
        '6TX' => 'E02005833',
        '6TY' => 'E02005833',
        '6TZ' => 'E02005834',
        '6UA' => 'E02005832',
        '6UB' => 'E02005833',
        '6UD' => 'E02005833',
        '6UE' => 'E02005832',
        '6UF' => 'E02005834',
        '6UG' => 'E02005834',
        '6UH' => 'E02005832',
        '6UJ' => 'E02005834',
        '6UL' => 'E02005834',
        '6UN' => 'E02005833',
        '6UP' => 'E02005834',
        '6UQ' => 'E02005832',
        '6UR' => 'E02005834',
        '6US' => 'E02005834',
        '6UT' => 'E02005833',
        '6UU' => 'E02005832',
        '6UW' => 'E02005833',
        '6UX' => 'E02005833',
        '6UY' => 'E02005833',
        '6UZ' => 'E02005833',
        '6WA' => 'E02005832',
        '6WB' => 'E02005832',
        '6WD' => 'E02005834',
        '6WE' => 'E02005832',
        '6WF' => 'E02005834',
        '6WG' => 'E02005834',
        '6WH' => 'E02005834',
        '6WJ' => 'E02005834',
        '6WL' => 'E02005834',
        '6WN' => 'E02005834',
        '6WP' => 'E02005834',
        '6WQ' => 'E02005834',
        '6WR' => 'E02005834',
        '6WS' => 'E02005834',
        '6WT' => 'E02005834',
        '6WU' => 'E02005834',
        '6WW' => 'E02005834',
        '6WX' => 'E02005834',
        '6WY' => 'E02005834',
        '6WZ' => 'E02005834',
        '6XA' => 'E02005832',
        '6YP' => 'E02005832',
        '6YU' => 'E02005832',
        '6ZZ' => 'E02005832',
        '7AA' => 'E02005832',
        '7AB' => 'E02005832',
        '7AD' => 'E02005832',
        '7AE' => 'E02005832',
        '7AF' => 'E02005832',
        '7AG' => 'E02005832',
        '7AH' => 'E02005832',
        '7AJ' => 'E02005832',
        '7AL' => 'E02005832',
        '7AN' => 'E02005832',
        '7AP' => 'E02005832',
        '7AQ' => 'E02005832',
        '7AR' => 'E02005832',
        '7AS' => 'E02005832',
        '7AT' => 'E02005832',
        '7AU' => 'E02005832',
        '7AW' => 'E02005832',
        '7AX' => 'E02005832',
        '7AY' => 'E02005832',
        '7AZ' => 'E02005832',
        '7BA' => 'E02005832',
        '7BB' => 'E02005832',
        '7BD' => 'E02005832',
        '7BE' => 'E02005832',
        '7BF' => 'E02005832',
        '7BG' => 'E02005832',
        '7BH' => 'E02005832',
        '7BJ' => 'E02005832',
        '7BL' => 'E02005832',
        '7BN' => 'E02005832',
        '7BP' => 'E02005831',
        '7BQ' => 'E02005832',
        '7BS' => 'E02005832',
        '7BT' => 'E02005832',
        '7BU' => 'E02005832',
        '7BW' => 'E02005832',
        '7BX' => 'E02005832',
        '7BY' => 'E02005832',
        '7BZ' => 'E02005833',
        '7DA' => 'E02005833',
        '7DB' => 'E02005833',
        '7DD' => 'E02005831',
        '7DE' => 'E02005832',
        '7DF' => 'E02005832',
        '7DG' => 'E02005832',
        '7DH' => 'E02005832',
        '7DJ' => 'E02005832',
        '7DL' => 'E02005832',
        '7DN' => 'E02005832',
        '7DP' => 'E02005832',
        '7DQ' => 'E02005832',
        '7DR' => 'E02005832',
        '7DS' => 'E02005832',
        '7DT' => 'E02005832',
        '7DU' => 'E02005832',
        '7DW' => 'E02005832',
        '7DX' => 'E02005832',
        '7DY' => 'E02005832',
        '7DZ' => 'E02005832',
        '7EA' => 'E02005832',
        '7EB' => 'E02005832',
        '7ED' => 'E02005832',
        '7EE' => 'E02005831',
        '7EF' => 'E02005832',
        '7EG' => 'E02005832',
        '7EH' => 'E02005832',
        '7EJ' => 'E02005831',
        '7EL' => 'E02005831',
        '7EN' => 'E02005832',
        '7EP' => 'E02005831',
        '7EQ' => 'E02005831',
        '7ER' => 'E02005831',
        '7ES' => 'E02005831',
        '7ET' => 'E02005831',
        '7EU' => 'E02005831',
        '7EW' => 'E02005831',
        '7EX' => 'E02005831',
        '7EY' => 'E02005831',
        '7EZ' => 'E02005831',
        '7FB' => 'E02005832',
        '7FD' => 'E02005832',
        '7FE' => 'E02005833',
        '7FF' => 'E02005833',
        '7FG' => 'E02005832',
        '7FH' => 'E02005832',
        '7FJ' => 'E02005832',
        '7FL' => 'E02005832',
        '7FN' => 'E02005832',
        '7FP' => 'E02005832',
        '7FQ' => 'E02005832',
        '7FR' => 'E02005832',
        '7FS' => 'E02005832',
        '7FT' => 'E02005833',
        '7FU' => 'E02005833',
        '7FW' => 'E02005832',
        '7FX' => 'E02005832',
        '7FY' => 'E02005832',
        '7GA' => 'E02005832',
        '7GB' => 'E02005832',
        '7GD' => 'E02005832',
        '7GE' => 'E02005832',
        '7GF' => 'E02005832',
        '7GG' => 'E02005832',
        '7GH' => 'E02005832',
        '7GJ' => 'E02005832',
        '7GL' => 'E02005832',
        '7GN' => 'E02005832',
        '7GP' => 'E02005832',
        '7GQ' => 'E02005832',
        '7GR' => 'E02005832',
        '7GS' => 'E02005832',
        '7GT' => 'E02005832',
        '7GU' => 'E02005831',
        '7GW' => 'E02005832',
        '7HA' => 'E02005832',
        '7HB' => 'E02005832',
        '7HD' => 'E02005832',
        '7HE' => 'E02005831',
        '7HF' => 'E02005832',
        '7HG' => 'E02005832',
        '7HH' => 'E02005832',
        '7HJ' => 'E02005832',
        '7HL' => 'E02005832',
        '7HN' => 'E02005832',
        '7HP' => 'E02005832',
        '7HQ' => 'E02005832',
        '7HR' => 'E02005832',
        '7HS' => 'E02005832',
        '7HT' => 'E02005832',
        '7HW' => 'E02005832',
        '7JA' => 'E02005832',
        '7JB' => 'E02005832',
        '7JD' => 'E02005832',
        '7JE' => 'E02005832',
        '7JF' => 'E02005832',
        '7JG' => 'E02005832',
        '7JH' => 'E02005832',
        '7JJ' => 'E02005832',
        '7JL' => 'E02005832',
        '7JN' => 'E02005832',
        '7JP' => 'E02005832',
        '7JQ' => 'E02005832',
        '7JR' => 'E02005832',
        '7JS' => 'E02005832',
        '7JT' => 'E02005832',
        '7JU' => 'E02005832',
        '7JW' => 'E02005832',
        '7JX' => 'E02005832',
        '7JY' => 'E02005832',
        '7JZ' => 'E02005832',
        '7LA' => 'E02005832',
        '7LB' => 'E02005832',
        '7LD' => 'E02005832',
        '7LE' => 'E02005832',
        '7LF' => 'E02005832',
        '7LG' => 'E02005832',
        '7LH' => 'E02005832',
        '7LJ' => 'E02005832',
        '7LL' => 'E02005834',
        '7LN' => 'E02005834',
        '7LP' => 'E02005834',
        '7LQ' => 'E02005832',
        '7LR' => 'E02005832',
        '7LS' => 'E02005832',
        '7LT' => 'E02005832',
        '7LU' => 'E02005834',
        '7LW' => 'E02005832',
        '7LX' => 'E02005832',
        '7LY' => 'E02005832',
        '7LZ' => 'E02005832',
        '7NA' => 'E02005832',
        '7NB' => 'E02005832',
        '7ND' => 'E02005832',
        '7NE' => 'E02005832',
        '7NF' => 'E02005832',
        '7NG' => 'E02005832',
        '7NH' => 'E02005832',
        '7NJ' => 'E02005832',
        '7NL' => 'E02005832',
        '7NN' => 'E02005832',
        '7NP' => 'E02005832',
        '7NQ' => 'E02005832',
        '7NR' => 'E02005832',
        '7NS' => 'E02005832',
        '7NT' => 'E02005832',
        '7NU' => 'E02005832',
        '7NW' => 'E02005832',
        '7NX' => 'E02005832',
        '7NY' => 'E02005832',
        '7NZ' => 'E02005832',
        '7PA' => 'E02005831',
        '7PB' => 'E02005831',
        '7PD' => 'E02005831',
        '7PE' => 'E02005831',
        '7PF' => 'E02005831',
        '7PG' => 'E02005831',
        '7PH' => 'E02005831',
        '7PJ' => 'E02005831',
        '7PL' => 'E02005831',
        '7PN' => 'E02005831',
        '7PP' => 'E02005831',
        '7PQ' => 'E02005831',
        '7PR' => 'E02005831',
        '7PS' => 'E02005831',
        '7PT' => 'E02005831',
        '7PU' => 'E02005831',
        '7PW' => 'E02005831',
        '7PX' => 'E02005831',
        '7PY' => 'E02005831',
        '7PZ' => 'E02005832',
        '7QA' => 'E02005831',
        '7QB' => 'E02005831',
        '7QD' => 'E02005831',
        '7QE' => 'E02005831',
        '7QF' => 'E02005831',
        '7QG' => 'E02005831',
        '7QH' => 'E02005834',
        '7QJ' => 'E02005832',
        '7QL' => 'E02005832',
        '7QN' => 'E02005831',
        '7QP' => 'E02005831',
        '7QQ' => 'E02005831',
        '7QR' => 'E02005831',
        '7QS' => 'E02005831',
        '7QT' => 'E02005831',
        '7QU' => 'E02005832',
        '7QW' => 'E02005831',
        '7QX' => 'E02005832',
        '7QY' => 'E02005831',
        '7QZ' => 'E02005832',
        '7RA' => 'E02005832',
        '7RB' => 'E02005832',
        '7RD' => 'E02005832',
        '7RE' => 'E02005832',
        '7RF' => 'E02005832',
        '7RG' => 'E02005832',
        '7RH' => 'E02005831',
        '7RJ' => 'E02005832',
        '7RL' => 'E02005832',
        '7RN' => 'E02005832',
        '7RP' => 'E02005832',
        '7RQ' => 'E02005832',
        '7RR' => 'E02005831',
        '7RS' => 'E02005832',
        '7RT' => 'E02005831',
        '7RU' => 'E02005831',
        '7RW' => 'E02005831',
        '7RX' => 'E02005832',
        '7RY' => 'E02005832',
        '7RZ' => 'E02005832',
        '7SA' => 'E02005832',
        '7SB' => 'E02005831',
        '7SD' => 'E02005831',
        '7SE' => 'E02005831',
        '7SF' => 'E02005832',
        '7SG' => 'E02005831',
        '7SH' => 'E02005831',
        '7SJ' => 'E02005832',
        '7SL' => 'E02005832',
        '7SN' => 'E02005832',
        '7SP' => 'E02005832',
        '7SQ' => 'E02005831',
        '7SR' => 'E02005831',
        '7SS' => 'E02005831',
        '7ST' => 'E02005831',
        '7SU' => 'E02005831',
        '7SW' => 'E02005831',
        '7SX' => 'E02005831',
        '7SY' => 'E02005831',
        '7SZ' => 'E02005831',
        '7TA' => 'E02005831',
        '7TB' => 'E02005831',
        '7TD' => 'E02005831',
        '7TE' => 'E02005831',
        '7TF' => 'E02005831',
        '7TG' => 'E02005831',
        '7TH' => 'E02005831',
        '7TJ' => 'E02005831',
        '7TL' => 'E02005831',
        '7TN' => 'E02005832',
        '7TP' => 'E02005831',
        '7TQ' => 'E02005832',
        '7TR' => 'E02005831',
        '7TS' => 'E02005832',
        '7TT' => 'E02005832',
        '7TU' => 'E02005832',
        '7TW' => 'E02005831',
        '7TX' => 'E02005831',
        '7TY' => 'E02005832',
        '7TZ' => 'E02005832',
        '7UA' => 'E02005832',
        '7UB' => 'E02005832',
        '7UD' => 'E02005832',
        '7UE' => 'E02005832',
        '7UF' => 'E02005832',
        '7UG' => 'E02005832',
        '7UH' => 'E02005832',
        '7UJ' => 'E02005832',
        '7UL' => 'E02005832',
        '7UN' => 'E02005832',
        '7UP' => 'E02005832',
        '7UQ' => 'E02005832',
        '7UR' => 'E02005832',
        '7US' => 'E02005832',
        '7UT' => 'E02005832',
        '7UU' => 'E02005832',
        '7UW' => 'E02005832',
        '7UX' => 'E02005832',
        '7UY' => 'E02005831',
        '7UZ' => 'E02005834',
        '7WA' => 'E02005832',
        '7WB' => 'E02005832',
        '7WD' => 'E02005832',
        '7WE' => 'E02005831',
        '7WS' => 'E02005832',
        '7WZ' => 'E02005832',
        '7XA' => 'E02005832',
        '8AA' => 'E02005831',
        '8AB' => 'E02005865',
        '8AD' => 'E02005831',
        '8AE' => 'E02005865',
        '8AF' => 'E02005865',
        '8AG' => 'E02005865',
        '8AH' => 'E02005865',
        '8AJ' => 'E02005831',
        '8AL' => 'E02005831',
        '8AN' => 'E02005831',
        '8AP' => 'E02005831',
        '8AQ' => 'E02005831',
        '8AR' => 'E02005831',
        '8AS' => 'E02005831',
        '8AT' => 'E02005831',
        '8AU' => 'E02005831',
        '8AW' => 'E02005831',
        '8AX' => 'E02005831',
        '8AY' => 'E02005831',
        '8AZ' => 'E02005865',
        '8BA' => 'E02005831',
        '8BB' => 'E02005831',
        '8BD' => 'E02005833',
        '8BE' => 'E02005832',
        '8BF' => 'E02005832',
        '8BG' => 'E02005831',
        '8BH' => 'E02005831',
        '8BJ' => 'E02005831',
        '8BL' => 'E02005831',
        '8BN' => 'E02005831',
        '8BP' => 'E02005831',
        '8BQ' => 'E02005831',
        '8BS' => 'E02005831',
        '8BT' => 'E02005831',
        '8BU' => 'E02005831',
        '8BW' => 'E02005831',
        '8BX' => 'E02005831',
        '8BY' => 'E02005831',
        '8BZ' => 'E02005831',
        '8DA' => 'E02005831',
        '8DB' => 'E02005831',
        '8DD' => 'E02005831',
        '8DE' => 'E02005831',
        '8DF' => 'E02005831',
        '8DG' => 'E02005831',
        '8DH' => 'E02005831',
        '8DJ' => 'E02005831',
        '8DL' => 'E02005831',
        '8DN' => 'E02005831',
        '8DP' => 'E02005831',
        '8DQ' => 'E02005831',
        '8DR' => 'E02005831',
        '8DS' => 'E02005831',
        '8DT' => 'E02005831',
        '8DU' => 'E02005831',
        '8DW' => 'E02005831',
        '8DX' => 'E02005831',
        '8DY' => 'E02005832',
        '8DZ' => 'E02005831',
        '8EA' => 'E02005831',
        '8EB' => 'E02005831',
        '8ED' => 'E02005831',
        '8EE' => 'E02005832',
        '8EF' => 'E02005831',
        '8EG' => 'E02005831',
        '8EH' => 'E02005831',
        '8EJ' => 'E02005831',
        '8EL' => 'E02005865',
        '8EN' => 'E02005865',
        '8EP' => 'E02005865',
        '8EQ' => 'E02005831',
        '8ER' => 'E02005831',
        '8ES' => 'E02005831',
        '8ET' => 'E02005831',
        '8EU' => 'E02005832',
        '8EW' => 'E02005831',
        '8EX' => 'E02005831',
        '8EY' => 'E02005865',
        '8EZ' => 'E02005831',
        '8FA' => 'E02005831',
        '8FB' => 'E02005865',
        '8FD' => 'E02005865',
        '8FE' => 'E02005865',
        '8FF' => 'E02005865',
        '8FG' => 'E02005865',
        '8FH' => 'E02005865',
        '8FJ' => 'E02005865',
        '8FL' => 'E02005865',
        '8FN' => 'E02005832',
        '8FP' => 'E02005865',
        '8FQ' => 'E02005831',
        '8FR' => 'E02005865',
        '8FS' => 'E02005831',
        '8FT' => 'E02005831',
        '8FW' => 'E02005865',
        '8FX' => 'E02005831',
        '8FY' => 'E02005831',
        '8FZ' => 'E02005865',
        '8GA' => 'E02005865',
        '8GB' => 'E02005865',
        '8GD' => 'E02005865',
        '8GE' => 'E02005865',
        '8GF' => 'E02005832',
        '8GG' => 'E02005831',
        '8GH' => 'E02005831',
        '8GJ' => 'E02005831',
        '8GL' => 'E02005831',
        '8GN' => 'E02005831',
        '8GP' => 'E02005831',
        '8GQ' => 'E02005831',
        '8GR' => 'E02005831',
        '8GS' => 'E02005831',
        '8GT' => 'E02005831',
        '8GU' => 'E02005831',
        '8GW' => 'E02005831',
        '8GX' => 'E02005831',
        '8GY' => 'E02005831',
        '8GZ' => 'E02005831',
        '8HA' => 'E02005831',
        '8HB' => 'E02005831',
        '8HD' => 'E02005831',
        '8HE' => 'E02005831',
        '8HF' => 'E02005831',
        '8HG' => 'E02005831',
        '8HH' => 'E02005831',
        '8HJ' => 'E02005831',
        '8HL' => 'E02005831',
        '8HN' => 'E02005831',
        '8HP' => 'E02005831',
        '8HQ' => 'E02005831',
        '8HR' => 'E02005831',
        '8HS' => 'E02005831',
        '8HT' => 'E02005831',
        '8HU' => 'E02005831',
        '8HW' => 'E02005831',
        '8HX' => 'E02005831',
        '8HY' => 'E02005831',
        '8HZ' => 'E02005831',
        '8JA' => 'E02005831',
        '8JB' => 'E02005831',
        '8JD' => 'E02005831',
        '8JE' => 'E02005831',
        '8JF' => 'E02005831',
        '8JG' => 'E02005831',
        '8JH' => 'E02005831',
        '8JJ' => 'E02005831',
        '8JL' => 'E02005865',
        '8JN' => 'E02005865',
        '8JP' => 'E02005865',
        '8JQ' => 'E02005865',
        '8JR' => 'E02005865',
        '8JS' => 'E02005831',
        '8JT' => 'E02005865',
        '8JU' => 'E02005865',
        '8JW' => 'E02005865',
        '8JX' => 'E02005865',
        '8JY' => 'E02005865',
        '8JZ' => 'E02005865',
        '8NA' => 'E02005865',
        '8WB' => 'E02005832',
        '8WJ' => 'E02005832',
        '8WL' => 'E02005832',
        '8WS' => 'E02005832',
        '9AA' => 'E02005865',
        '9AB' => 'E02005865',
        '9AD' => 'E02005865',
        '9AE' => 'E02005865',
        '9AF' => 'E02005865',
        '9AG' => 'E02005865',
        '9AH' => 'E02005865',
        '9AJ' => 'E02005866',
        '9AL' => 'E02005865',
        '9AN' => 'E02005865',
        '9AP' => 'E02005865',
        '9AQ' => 'E02005865',
        '9AR' => 'E02005865',
        '9AS' => 'E02005865',
        '9AT' => 'E02005865',
        '9AU' => 'E02005865',
        '9AW' => 'E02005865',
        '9AX' => 'E02005865',
        '9AY' => 'E02005865',
        '9AZ' => 'E02005865',
        '9BA' => 'E02005865',
        '9BB' => 'E02005865',
        '9BD' => 'E02005865',
        '9BE' => 'E02005865',
        '9BF' => 'E02005865',
        '9BG' => 'E02005865',
        '9BH' => 'E02005865',
        '9BJ' => 'E02005865',
        '9BL' => 'E02005865',
        '9BN' => 'E02005865',
        '9BP' => 'E02005865',
        '9BQ' => 'E02005865',
        '9BS' => 'E02005865',
        '9BT' => 'E02005865',
        '9BU' => 'E02005865',
        '9BW' => 'E02005865',
        '9BX' => 'E02005865',
        '9BY' => 'E02005865',
        '9BZ' => 'E02005865',
        '9DA' => 'E02005865',
        '9DB' => 'E02005865',
        '9DD' => 'E02005865',
        '9DE' => 'E02005865',
        '9DF' => 'E02005865',
        '9DG' => 'E02005865',
        '9DH' => 'E02005865',
        '9DJ' => 'E02005865',
        '9DL' => 'E02005865',
        '9DN' => 'E02005865',
        '9DP' => 'E02005865',
        '9DQ' => 'E02005865',
        '9DR' => 'E02005865',
        '9DS' => 'E02005832',
        '9DT' => 'E02005865',
        '9DU' => 'E02005832',
        '9DW' => 'E02005865',
        '9DX' => 'E02005865',
        '9DY' => 'E02005865',
        '9DZ' => 'E02005865',
        '9EA' => 'E02005865',
        '9EB' => 'E02005865',
        '9ED' => 'E02005865',
        '9EE' => 'E02005865',
        '9EF' => 'E02005865',
        '9EG' => 'E02005865',
        '9EH' => 'E02005865',
        '9EJ' => 'E02005865',
        '9EL' => 'E02005865',
        '9EN' => 'E02005865',
        '9EP' => 'E02005865',
        '9EQ' => 'E02005865',
        '9ER' => 'E02005865',
        '9ES' => 'E02005865',
        '9ET' => 'E02005865',
        '9EU' => 'E02005865',
        '9EW' => 'E02005865',
        '9EX' => 'E02005865',
        '9EY' => 'E02005865',
        '9EZ' => 'E02005865',
        '9FA' => 'E02005865',
        '9FB' => 'E02005865',
        '9FD' => 'E02005865',
        '9FE' => 'E02005865',
        '9FF' => 'E02005865',
        '9FG' => 'E02005865',
        '9FH' => 'E02005865',
        '9FJ' => 'E02005865',
        '9FL' => 'E02005865',
        '9FN' => 'E02005865',
        '9FP' => 'E02005865',
        '9FQ' => 'E02005865',
        '9FR' => 'E02005865',
        '9FS' => 'E02005865',
        '9FT' => 'E02005865',
        '9FU' => 'E02005865',
        '9FW' => 'E02005865',
        '9FX' => 'E02005865',
        '9FY' => 'E02005865',
        '9FZ' => 'E02005865',
        '9GA' => 'E02005865',
        '9GB' => 'E02005865',
        '9GD' => 'E02005865',
        '9GE' => 'E02005865',
        '9GF' => 'E02005865',
        '9GG' => 'E02005865',
        '9GH' => 'E02005865',
        '9GJ' => 'E02005865',
        '9GL' => 'E02005865',
        '9GN' => 'E02005865',
        '9GP' => 'E02005865',
        '9GQ' => 'E02005865',
        '9GR' => 'E02005865',
        '9GS' => 'E02005865',
        '9GT' => 'E02005865',
        '9GU' => 'E02005865',
        '9GW' => 'E02005865',
        '9GX' => 'E02005865',
        '9GY' => 'E02005865',
        '9GZ' => 'E02005865',
        '9HA' => 'E02005865',
        '9HB' => 'E02005865',
        '9HD' => 'E02005865',
        '9HE' => 'E02005865',
        '9HF' => 'E02005865',
        '9HG' => 'E02005865',
        '9HH' => 'E02005865',
        '9HJ' => 'E02005865',
        '9HL' => 'E02005865',
        '9HN' => 'E02005865',
        '9HP' => 'E02005865',
        '9HQ' => 'E02005865',
        '9HR' => 'E02005865',
        '9HS' => 'E02005865',
        '9HT' => 'E02005865',
        '9HU' => 'E02005865',
        '9HW' => 'E02005832',
        '9HX' => 'E02005865',
        '9HY' => 'E02005865',
        '9HZ' => 'E02005832',
        '9JA' => 'E02005865',
        '9JB' => 'E02005832',
        '9JD' => 'E02005865',
        '9JE' => 'E02005832',
        '9JF' => 'E02005865',
        '9JG' => 'E02005865',
        '9JH' => 'E02005865',
        '9JJ' => 'E02005865',
        '9JL' => 'E02005865',
        '9JN' => 'E02005865',
        '9JP' => 'E02005865',
        '9JQ' => 'E02005865',
        '9JR' => 'E02005865',
        '9JS' => 'E02005865',
        '9JT' => 'E02005865',
        '9WA' => 'E02005832',
        '9WB' => 'E02005832',
        '9WD' => 'E02005865',
        '9WE' => 'E02005865',
        '9WF' => 'E02005865',
        '9WG' => 'E02005865',
        '9WH' => 'E02005865',
        '9WJ' => 'E02005865',
        '9WL' => 'E02005865',
        '9WN' => 'E02005865',
        '9WP' => 'E02005865',
        '9WQ' => 'E02005865',
        '9WR' => 'E02005865',
        '9WS' => 'E02005865',
        '9WT' => 'E02005832',
        '9WU' => 'E02005865',
        '9WW' => 'E02005865',
        '9WX' => 'E02005865',
        '9WY' => 'E02005865',
        '9WZ' => 'E02005865',
        '9XA' => 'E02005865',
        '9XB' => 'E02005865',
        '9XD' => 'E02005865',
        '9XE' => 'E02005865',
        '9XF' => 'E02005865',
        '9YG' => 'E02005865',
        '9ZR' => 'E02005865',
        '9ZS' => 'E02005865',
        '9ZZ' => 'E02005832',
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
