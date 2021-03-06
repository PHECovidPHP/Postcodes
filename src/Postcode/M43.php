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
final class M43
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AB' => 'E02001238',
        '0AL' => 'E02001238',
        '0AN' => 'E02001238',
        '0AP' => 'E02001238',
        '0AQ' => 'E02001238',
        '0AR' => 'E02001238',
        '0AS' => 'E02001238',
        '0AT' => 'E02001238',
        '0AU' => 'E02001238',
        '0AW' => 'E02001238',
        '0AX' => 'E02001238',
        '0AY' => 'E02001238',
        '0AZ' => 'E02001238',
        '0BA' => 'E02001238',
        '0BB' => 'E02001238',
        '0BD' => 'E02001238',
        '0BE' => 'E02001238',
        '0BF' => 'E02001238',
        '0BG' => 'E02001238',
        '6AB' => 'E02001239',
        '6AD' => 'E02001238',
        '6AE' => 'E02001239',
        '6AF' => 'E02001239',
        '6AG' => 'E02001239',
        '6AH' => 'E02001061',
        '6AJ' => 'E02001239',
        '6AL' => 'E02001239',
        '6AN' => 'E02001239',
        '6AP' => 'E02001239',
        '6AQ' => 'E02001239',
        '6AR' => 'E02001239',
        '6AS' => 'E02001061',
        '6AT' => 'E02001061',
        '6AU' => 'E02001056',
        '6AW' => 'E02001239',
        '6AX' => 'E02001239',
        '6AY' => 'E02001239',
        '6AZ' => 'E02001239',
        '6BA' => 'E02001240',
        '6BB' => 'E02001240',
        '6BD' => 'E02001240',
        '6BE' => 'E02001240',
        '6BF' => 'E02001240',
        '6BG' => 'E02001240',
        '6BH' => 'E02001240',
        '6BJ' => 'E02001240',
        '6BL' => 'E02001240',
        '6BN' => 'E02001240',
        '6BP' => 'E02001240',
        '6BQ' => 'E02001240',
        '6BR' => 'E02001056',
        '6BS' => 'E02001240',
        '6BT' => 'E02001239',
        '6BU' => 'E02001056',
        '6BW' => 'E02001240',
        '6BX' => 'E02001240',
        '6BY' => 'E02001061',
        '6BZ' => 'E02001240',
        '6DD' => 'E02001238',
        '6DE' => 'E02001238',
        '6DF' => 'E02001238',
        '6DG' => 'E02001242',
        '6DH' => 'E02001238',
        '6DJ' => 'E02001238',
        '6DL' => 'E02001239',
        '6DP' => 'E02001238',
        '6DQ' => 'E02001238',
        '6DR' => 'E02001238',
        '6DS' => 'E02001239',
        '6DT' => 'E02001239',
        '6DU' => 'E02001239',
        '6DW' => 'E02001238',
        '6DX' => 'E02001238',
        '6DY' => 'E02001238',
        '6DZ' => 'E02001238',
        '6EA' => 'E02001238',
        '6EB' => 'E02001239',
        '6ED' => 'E02001239',
        '6EE' => 'E02001238',
        '6EF' => 'E02001238',
        '6EG' => 'E02001239',
        '6EH' => 'E02001238',
        '6EJ' => 'E02001242',
        '6EL' => 'E02001238',
        '6EN' => 'E02001240',
        '6EP' => 'E02001238',
        '6EQ' => 'E02001239',
        '6ER' => 'E02001239',
        '6ES' => 'E02001239',
        '6ET' => 'E02001239',
        '6EU' => 'E02001240',
        '6EW' => 'E02001238',
        '6EX' => 'E02001239',
        '6EY' => 'E02001239',
        '6EZ' => 'E02001240',
        '6FA' => 'E02001239',
        '6FB' => 'E02001239',
        '6FD' => 'E02001239',
        '6FE' => 'E02001238',
        '6FF' => 'E02001238',
        '6FG' => 'E02001239',
        '6FH' => 'E02001238',
        '6FJ' => 'E02001238',
        '6FL' => 'E02001238',
        '6FN' => 'E02001238',
        '6FP' => 'E02001239',
        '6FQ' => 'E02001239',
        '6FR' => 'E02001239',
        '6FS' => 'E02001239',
        '6FT' => 'E02001240',
        '6FU' => 'E02001240',
        '6FW' => 'E02001238',
        '6FX' => 'E02001239',
        '6FY' => 'E02001240',
        '6FZ' => 'E02001239',
        '6GA' => 'E02001239',
        '6GB' => 'E02001239',
        '6GD' => 'E02001240',
        '6GE' => 'E02001240',
        '6GF' => 'E02001239',
        '6GG' => 'E02001239',
        '6GH' => 'E02001239',
        '6GJ' => 'E02001240',
        '6GL' => 'E02001239',
        '6GN' => 'E02001239',
        '6GP' => 'E02001239',
        '6GQ' => 'E02001240',
        '6GR' => 'E02001239',
        '6GS' => 'E02001239',
        '6GT' => 'E02001239',
        '6GU' => 'E02001239',
        '6GW' => 'E02001239',
        '6GX' => 'E02001239',
        '6GY' => 'E02001239',
        '6GZ' => 'E02001238',
        '6HA' => 'E02001240',
        '6HB' => 'E02001240',
        '6HD' => 'E02001240',
        '6HE' => 'E02001239',
        '6HF' => 'E02001240',
        '6HG' => 'E02001240',
        '6HH' => 'E02001240',
        '6HJ' => 'E02001240',
        '6HL' => 'E02001240',
        '6HN' => 'E02001240',
        '6HP' => 'E02001240',
        '6HQ' => 'E02001240',
        '6HR' => 'E02001240',
        '6HS' => 'E02001240',
        '6HT' => 'E02001240',
        '6HU' => 'E02001239',
        '6HW' => 'E02001240',
        '6HX' => 'E02001239',
        '6HY' => 'E02001239',
        '6HZ' => 'E02001239',
        '6JA' => 'E02001240',
        '6JB' => 'E02001240',
        '6JD' => 'E02001240',
        '6JE' => 'E02001240',
        '6JF' => 'E02001240',
        '6JG' => 'E02001240',
        '6JH' => 'E02001240',
        '6JJ' => 'E02001240',
        '6JL' => 'E02001240',
        '6JN' => 'E02001240',
        '6JP' => 'E02001056',
        '6JQ' => 'E02001240',
        '6JR' => 'E02001240',
        '6JS' => 'E02001240',
        '6JT' => 'E02001240',
        '6JU' => 'E02001240',
        '6JW' => 'E02001240',
        '6JX' => 'E02001240',
        '6JY' => 'E02001240',
        '6JZ' => 'E02001240',
        '6LA' => 'E02001240',
        '6LB' => 'E02001240',
        '6LD' => 'E02001240',
        '6LE' => 'E02001240',
        '6LF' => 'E02001240',
        '6LG' => 'E02001240',
        '6LH' => 'E02001240',
        '6LJ' => 'E02001240',
        '6LL' => 'E02001240',
        '6LN' => 'E02001240',
        '6LP' => 'E02001240',
        '6LQ' => 'E02001239',
        '6LR' => 'E02001240',
        '6LS' => 'E02001240',
        '6LT' => 'E02001240',
        '6LU' => 'E02001240',
        '6LW' => 'E02001240',
        '6LX' => 'E02001056',
        '6LY' => 'E02001240',
        '6LZ' => 'E02001240',
        '6NA' => 'E02001240',
        '6NB' => 'E02001240',
        '6ND' => 'E02001240',
        '6NE' => 'E02001240',
        '6NF' => 'E02001240',
        '6NG' => 'E02001240',
        '6NH' => 'E02001240',
        '6NJ' => 'E02001240',
        '6NL' => 'E02001240',
        '6NN' => 'E02001240',
        '6NP' => 'E02001240',
        '6NQ' => 'E02001240',
        '6NR' => 'E02001240',
        '6NS' => 'E02001240',
        '6NT' => 'E02001238',
        '6NU' => 'E02001239',
        '6NW' => 'E02001240',
        '6NX' => 'E02001239',
        '6NY' => 'E02001251',
        '6NZ' => 'E02001240',
        '6PA' => 'E02001238',
        '6PB' => 'E02001240',
        '6PD' => 'E02001240',
        '6PE' => 'E02001238',
        '6PF' => 'E02001239',
        '6PG' => 'E02001239',
        '6PJ' => 'E02001240',
        '6PL' => 'E02001240',
        '6PN' => 'E02001239',
        '6PP' => 'E02001240',
        '6PQ' => 'E02001239',
        '6PR' => 'E02001240',
        '6PS' => 'E02001239',
        '6PT' => 'E02001239',
        '6PU' => 'E02001239',
        '6PW' => 'E02001239',
        '6PX' => 'E02001239',
        '6PY' => 'E02001239',
        '6PZ' => 'E02001239',
        '6QA' => 'E02001239',
        '6QB' => 'E02001239',
        '6QD' => 'E02001239',
        '6QE' => 'E02001240',
        '6QF' => 'E02001240',
        '6QG' => 'E02001239',
        '6QH' => 'E02001240',
        '6QJ' => 'E02001240',
        '6QL' => 'E02001240',
        '6QN' => 'E02001239',
        '6QP' => 'E02001239',
        '6QQ' => 'E02001239',
        '6QR' => 'E02001239',
        '6QS' => 'E02001239',
        '6QT' => 'E02001239',
        '6QU' => 'E02001239',
        '6QW' => 'E02001239',
        '6QX' => 'E02001240',
        '6QZ' => 'E02001240',
        '6RA' => 'E02001238',
        '6RB' => 'E02001061',
        '6RF' => 'E02001239',
        '6RJ' => 'E02001239',
        '6RL' => 'E02001239',
        '6RN' => 'E02001239',
        '6RP' => 'E02001239',
        '6RQ' => 'E02001239',
        '6RW' => 'E02001239',
        '6SF' => 'E02001238',
        '6SH' => 'E02001239',
        '6SJ' => 'E02001240',
        '6SL' => 'E02001238',
        '6SN' => 'E02001239',
        '6SP' => 'E02001239',
        '6SQ' => 'E02001239',
        '6SR' => 'E02001239',
        '6ST' => 'E02001239',
        '6SW' => 'E02001239',
        '6TA' => 'E02001239',
        '6TB' => 'E02001239',
        '6TD' => 'E02001061',
        '6TE' => 'E02001239',
        '6TF' => 'E02001239',
        '6TG' => 'E02001239',
        '6TH' => 'E02001061',
        '6TJ' => 'E02001239',
        '6TL' => 'E02001238',
        '6TP' => 'E02001238',
        '6TQ' => 'E02001239',
        '6TR' => 'E02001238',
        '6TS' => 'E02001238',
        '6TT' => 'E02001239',
        '6TU' => 'E02001239',
        '6TW' => 'E02001238',
        '6TX' => 'E02001238',
        '6TY' => 'E02001242',
        '6TZ' => 'E02001238',
        '6UA' => 'E02001239',
        '6UB' => 'E02001240',
        '6UD' => 'E02001240',
        '6UE' => 'E02001239',
        '6UF' => 'E02001239',
        '6UG' => 'E02001239',
        '6UJ' => 'E02001239',
        '6WA' => 'E02001240',
        '6WB' => 'E02001240',
        '6WD' => 'E02001240',
        '6WE' => 'E02001240',
        '6WF' => 'E02001240',
        '6WG' => 'E02001240',
        '6WH' => 'E02001240',
        '6WJ' => 'E02001240',
        '6WL' => 'E02001240',
        '6WN' => 'E02001240',
        '6WP' => 'E02001240',
        '6WQ' => 'E02001240',
        '6WR' => 'E02001240',
        '6WS' => 'E02001240',
        '6WT' => 'E02001240',
        '6WU' => 'E02001238',
        '6WW' => 'E02001240',
        '6WX' => 'E02001238',
        '6WY' => 'E02001240',
        '6WZ' => 'E02001240',
        '6XA' => 'E02001239',
        '6XB' => 'E02001240',
        '6XD' => 'E02001240',
        '6XE' => 'E02001238',
        '6XF' => 'E02001238',
        '6XG' => 'E02001240',
        '6XH' => 'E02001238',
        '6XJ' => 'E02001239',
        '6XL' => 'E02001238',
        '6XP' => 'E02001238',
        '6XQ' => 'E02001238',
        '6XR' => 'E02001238',
        '6XS' => 'E02001238',
        '6XT' => 'E02001238',
        '6XU' => 'E02001238',
        '6XW' => 'E02001239',
        '6XX' => 'E02001238',
        '6XY' => 'E02001238',
        '6XZ' => 'E02001238',
        '6ZZ' => 'E02001238',
        '7AA' => 'E02001238',
        '7AB' => 'E02001238',
        '7AD' => 'E02001238',
        '7AE' => 'E02001238',
        '7AF' => 'E02001238',
        '7AG' => 'E02001238',
        '7AH' => 'E02001238',
        '7AJ' => 'E02001238',
        '7AL' => 'E02001238',
        '7AN' => 'E02001238',
        '7AP' => 'E02001238',
        '7AQ' => 'E02001238',
        '7AR' => 'E02001238',
        '7AS' => 'E02001238',
        '7AT' => 'E02001238',
        '7AU' => 'E02001238',
        '7AW' => 'E02001238',
        '7AX' => 'E02001238',
        '7AY' => 'E02001238',
        '7AZ' => 'E02001238',
        '7BA' => 'E02001238',
        '7BB' => 'E02001238',
        '7BD' => 'E02001238',
        '7BE' => 'E02001242',
        '7BF' => 'E02001242',
        '7BG' => 'E02001238',
        '7BH' => 'E02001238',
        '7BJ' => 'E02001238',
        '7BL' => 'E02001238',
        '7BN' => 'E02001238',
        '7BP' => 'E02001238',
        '7BQ' => 'E02001238',
        '7BR' => 'E02001238',
        '7BS' => 'E02001238',
        '7BT' => 'E02001238',
        '7BU' => 'E02001238',
        '7BW' => 'E02001238',
        '7BX' => 'E02001238',
        '7BY' => 'E02001242',
        '7BZ' => 'E02001239',
        '7DA' => 'E02001238',
        '7DB' => 'E02001238',
        '7DD' => 'E02001238',
        '7DE' => 'E02001238',
        '7DF' => 'E02001238',
        '7DG' => 'E02001238',
        '7DH' => 'E02001238',
        '7DJ' => 'E02001238',
        '7DL' => 'E02001238',
        '7DN' => 'E02001238',
        '7DP' => 'E02001238',
        '7DQ' => 'E02001238',
        '7DR' => 'E02001238',
        '7DS' => 'E02001238',
        '7DT' => 'E02001238',
        '7DU' => 'E02001238',
        '7DW' => 'E02001238',
        '7DX' => 'E02001238',
        '7DY' => 'E02001238',
        '7DZ' => 'E02001238',
        '7EA' => 'E02001238',
        '7EB' => 'E02001238',
        '7ED' => 'E02001238',
        '7EE' => 'E02001238',
        '7EF' => 'E02001238',
        '7EG' => 'E02001238',
        '7EH' => 'E02001238',
        '7EJ' => 'E02001238',
        '7EL' => 'E02001238',
        '7EN' => 'E02001238',
        '7EP' => 'E02001238',
        '7EQ' => 'E02001238',
        '7ER' => 'E02001238',
        '7ES' => 'E02001238',
        '7ET' => 'E02001238',
        '7EU' => 'E02001238',
        '7EW' => 'E02001239',
        '7EX' => 'E02001238',
        '7EY' => 'E02001238',
        '7EZ' => 'E02001238',
        '7FA' => 'E02001238',
        '7FB' => 'E02001238',
        '7FD' => 'E02001238',
        '7FE' => 'E02001238',
        '7FF' => 'E02001238',
        '7FG' => 'E02001238',
        '7FH' => 'E02001238',
        '7FJ' => 'E02001238',
        '7FL' => 'E02001238',
        '7FN' => 'E02001238',
        '7FP' => 'E02001238',
        '7FQ' => 'E02001238',
        '7FR' => 'E02001239',
        '7FS' => 'E02001238',
        '7FT' => 'E02001238',
        '7FW' => 'E02001239',
        '7FX' => 'E02001239',
        '7FY' => 'E02001238',
        '7FZ' => 'E02001238',
        '7GA' => 'E02001239',
        '7GB' => 'E02001239',
        '7GD' => 'E02001239',
        '7GE' => 'E02001239',
        '7GF' => 'E02001239',
        '7GG' => 'E02001239',
        '7GH' => 'E02001239',
        '7GJ' => 'E02001239',
        '7GL' => 'E02001238',
        '7GN' => 'E02001238',
        '7GP' => 'E02001238',
        '7GQ' => 'E02001238',
        '7GR' => 'E02001238',
        '7GS' => 'E02001238',
        '7GT' => 'E02001238',
        '7GU' => 'E02001238',
        '7GW' => 'E02001238',
        '7GX' => 'E02001239',
        '7GY' => 'E02001239',
        '7GZ' => 'E02001239',
        '7HA' => 'E02001238',
        '7HB' => 'E02001238',
        '7HD' => 'E02001238',
        '7HE' => 'E02001238',
        '7HF' => 'E02001238',
        '7HG' => 'E02001238',
        '7HH' => 'E02001238',
        '7HJ' => 'E02001238',
        '7HL' => 'E02001238',
        '7HN' => 'E02001238',
        '7HP' => 'E02001238',
        '7HQ' => 'E02001238',
        '7HR' => 'E02001238',
        '7HS' => 'E02001238',
        '7HT' => 'E02001238',
        '7HU' => 'E02001238',
        '7HW' => 'E02001238',
        '7HX' => 'E02001238',
        '7HY' => 'E02001238',
        '7HZ' => 'E02001238',
        '7JA' => 'E02001238',
        '7JB' => 'E02001238',
        '7JD' => 'E02001238',
        '7JE' => 'E02001238',
        '7JF' => 'E02001238',
        '7JG' => 'E02001238',
        '7JH' => 'E02001238',
        '7JJ' => 'E02001238',
        '7JL' => 'E02001238',
        '7JN' => 'E02001238',
        '7JP' => 'E02001238',
        '7JQ' => 'E02001238',
        '7JR' => 'E02001238',
        '7JS' => 'E02001238',
        '7JT' => 'E02001238',
        '7JU' => 'E02001238',
        '7JW' => 'E02001238',
        '7JX' => 'E02001238',
        '7JY' => 'E02001238',
        '7JZ' => 'E02001238',
        '7LA' => 'E02001238',
        '7LB' => 'E02001238',
        '7LD' => 'E02001238',
        '7LE' => 'E02001238',
        '7LF' => 'E02001238',
        '7LG' => 'E02001238',
        '7LH' => 'E02001238',
        '7LJ' => 'E02001238',
        '7LL' => 'E02001238',
        '7LN' => 'E02001238',
        '7LP' => 'E02001238',
        '7LQ' => 'E02001238',
        '7LR' => 'E02001238',
        '7LS' => 'E02001238',
        '7LT' => 'E02001238',
        '7LU' => 'E02001238',
        '7LW' => 'E02001238',
        '7LY' => 'E02001238',
        '7LZ' => 'E02001238',
        '7NA' => 'E02001239',
        '7NB' => 'E02001239',
        '7ND' => 'E02001239',
        '7NE' => 'E02001239',
        '7NF' => 'E02001239',
        '7NG' => 'E02001239',
        '7NH' => 'E02001239',
        '7NJ' => 'E02001239',
        '7NL' => 'E02001239',
        '7NN' => 'E02001239',
        '7NP' => 'E02001239',
        '7NQ' => 'E02001239',
        '7NR' => 'E02001239',
        '7NS' => 'E02001239',
        '7NT' => 'E02001239',
        '7NU' => 'E02001239',
        '7NW' => 'E02001239',
        '7NX' => 'E02001239',
        '7NY' => 'E02001238',
        '7NZ' => 'E02001238',
        '7PA' => 'E02001239',
        '7PB' => 'E02001239',
        '7PD' => 'E02001239',
        '7PE' => 'E02001239',
        '7PF' => 'E02001239',
        '7PG' => 'E02001239',
        '7PH' => 'E02001239',
        '7PJ' => 'E02001239',
        '7PL' => 'E02001239',
        '7PN' => 'E02001239',
        '7PP' => 'E02001239',
        '7PQ' => 'E02001239',
        '7PR' => 'E02001239',
        '7PS' => 'E02001239',
        '7PT' => 'E02001239',
        '7PU' => 'E02001239',
        '7PW' => 'E02001239',
        '7PX' => 'E02001239',
        '7PY' => 'E02001239',
        '7PZ' => 'E02001239',
        '7QA' => 'E02001239',
        '7QB' => 'E02001239',
        '7QD' => 'E02001239',
        '7QE' => 'E02001239',
        '7QF' => 'E02001239',
        '7QG' => 'E02001239',
        '7QH' => 'E02001240',
        '7QJ' => 'E02001239',
        '7QL' => 'E02001239',
        '7QN' => 'E02001239',
        '7QP' => 'E02001239',
        '7QQ' => 'E02001239',
        '7QR' => 'E02001239',
        '7QS' => 'E02001239',
        '7QT' => 'E02001239',
        '7QU' => 'E02001239',
        '7QW' => 'E02001238',
        '7QX' => 'E02001239',
        '7QY' => 'E02001239',
        '7QZ' => 'E02001239',
        '7RA' => 'E02001239',
        '7RB' => 'E02001239',
        '7RD' => 'E02001239',
        '7RE' => 'E02001239',
        '7RF' => 'E02001239',
        '7RG' => 'E02001240',
        '7RH' => 'E02001239',
        '7RJ' => 'E02001239',
        '7RL' => 'E02001239',
        '7RN' => 'E02001239',
        '7RP' => 'E02001240',
        '7RQ' => 'E02001240',
        '7RR' => 'E02001240',
        '7RS' => 'E02001240',
        '7RT' => 'E02001240',
        '7RU' => 'E02001240',
        '7RW' => 'E02001239',
        '7RX' => 'E02001240',
        '7RY' => 'E02001240',
        '7RZ' => 'E02001240',
        '7SA' => 'E02001240',
        '7SB' => 'E02001239',
        '7SD' => 'E02001239',
        '7SE' => 'E02001239',
        '7SF' => 'E02001239',
        '7SG' => 'E02001240',
        '7SH' => 'E02001240',
        '7SJ' => 'E02001240',
        '7SL' => 'E02001239',
        '7SN' => 'E02001240',
        '7SP' => 'E02001238',
        '7SQ' => 'E02001240',
        '7SR' => 'E02001240',
        '7SS' => 'E02001240',
        '7ST' => 'E02001238',
        '7SU' => 'E02001240',
        '7SW' => 'E02001238',
        '7SX' => 'E02001239',
        '7SY' => 'E02001239',
        '7SZ' => 'E02001238',
        '7TA' => 'E02001238',
        '7TB' => 'E02001238',
        '7TD' => 'E02001238',
        '7TE' => 'E02001238',
        '7TF' => 'E02001238',
        '7TG' => 'E02001238',
        '7TH' => 'E02001238',
        '7TL' => 'E02001238',
        '7TN' => 'E02001238',
        '7TP' => 'E02001238',
        '7TQ' => 'E02001238',
        '7TR' => 'E02001238',
        '7TS' => 'E02001238',
        '7TT' => 'E02001238',
        '7TU' => 'E02001238',
        '7TW' => 'E02001238',
        '7TX' => 'E02001238',
        '7TY' => 'E02001238',
        '7TZ' => 'E02001238',
        '7UA' => 'E02001238',
        '7UB' => 'E02001238',
        '7UD' => 'E02001238',
        '7UE' => 'E02001238',
        '7UF' => 'E02001238',
        '7UG' => 'E02001238',
        '7UH' => 'E02001238',
        '7UJ' => 'E02001238',
        '7UL' => 'E02001238',
        '7UN' => 'E02001238',
        '7UP' => 'E02001238',
        '7UQ' => 'E02001239',
        '7UR' => 'E02001239',
        '7US' => 'E02001239',
        '7UT' => 'E02001239',
        '7UU' => 'E02001239',
        '7UW' => 'E02001239',
        '7UX' => 'E02001239',
        '7UY' => 'E02001239',
        '7UZ' => 'E02001239',
        '7WA' => 'E02001239',
        '7WB' => 'E02001239',
        '7WD' => 'E02001239',
        '7WE' => 'E02001239',
        '7WF' => 'E02001239',
        '7WG' => 'E02001239',
        '7WH' => 'E02001239',
        '7WJ' => 'E02001239',
        '7WL' => 'E02001239',
        '7WN' => 'E02001239',
        '7WP' => 'E02001239',
        '7WQ' => 'E02001239',
        '7WR' => 'E02001239',
        '7WS' => 'E02001239',
        '7WT' => 'E02001239',
        '7WU' => 'E02001238',
        '7WW' => 'E02001239',
        '7WX' => 'E02001238',
        '7WY' => 'E02001238',
        '7WZ' => 'E02001238',
        '7XA' => 'E02001238',
        '7XB' => 'E02001238',
        '7XD' => 'E02001238',
        '7XE' => 'E02001238',
        '7XF' => 'E02001238',
        '7XG' => 'E02001238',
        '7XH' => 'E02001238',
        '7XJ' => 'E02001238',
        '7XL' => 'E02001239',
        '7XN' => 'E02001239',
        '7XP' => 'E02001238',
        '7XQ' => 'E02001238',
        '7XR' => 'E02001238',
        '7XS' => 'E02001238',
        '7XT' => 'E02001238',
        '7XU' => 'E02001238',
        '7XW' => 'E02001238',
        '7XX' => 'E02001238',
        '7XY' => 'E02001239',
        '7XZ' => 'E02001239',
        '7YA' => 'E02001238',
        '7YB' => 'E02001238',
        '7YD' => 'E02001239',
        '7YE' => 'E02001239',
        '7YF' => 'E02001239',
        '7YG' => 'E02001239',
        '7YH' => 'E02001239',
        '7YJ' => 'E02001239',
        '7YL' => 'E02001239',
        '7YN' => 'E02001239',
        '7YP' => 'E02001239',
        '7YQ' => 'E02001239',
        '7YR' => 'E02001239',
        '7YS' => 'E02001239',
        '7YT' => 'E02001238',
        '7YU' => 'E02001239',
        '7YW' => 'E02001238',
        '7YY' => 'E02001238',
        '7YZ' => 'E02001238',
        '7ZA' => 'E02001238',
        '7ZB' => 'E02001238',
        '7ZD' => 'E02001238',
        '7ZF' => 'E02001239',
        '7ZH' => 'E02001238',
        '7ZJ' => 'E02001239',
        '7ZP' => 'E02001238',
        '7ZR' => 'E02001238',
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
