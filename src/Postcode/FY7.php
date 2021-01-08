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
final class FY7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02005319',
        '6AB' => 'E02005319',
        '6AD' => 'E02005319',
        '6AE' => 'E02005323',
        '6AF' => 'E02005319',
        '6AG' => 'E02005319',
        '6AH' => 'E02005319',
        '6AJ' => 'E02005319',
        '6AL' => 'E02005319',
        '6AN' => 'E02005319',
        '6AP' => 'E02005319',
        '6AQ' => 'E02005319',
        '6AR' => 'E02005319',
        '6AS' => 'E02005319',
        '6AT' => 'E02005319',
        '6AU' => 'E02005319',
        '6AW' => 'E02005319',
        '6AX' => 'E02005319',
        '6AY' => 'E02005319',
        '6AZ' => 'E02005319',
        '6BA' => 'E02005319',
        '6BB' => 'E02005319',
        '6BD' => 'E02005319',
        '6BE' => 'E02005319',
        '6BF' => 'E02005319',
        '6BG' => 'E02005319',
        '6BH' => 'E02005319',
        '6BJ' => 'E02005319',
        '6BL' => 'E02005319',
        '6BN' => 'E02005319',
        '6BP' => 'E02005319',
        '6BQ' => 'E02005319',
        '6BR' => 'E02005319',
        '6BS' => 'E02005319',
        '6BT' => 'E02005319',
        '6BU' => 'E02005319',
        '6BW' => 'E02005319',
        '6BX' => 'E02005319',
        '6BY' => 'E02005319',
        '6BZ' => 'E02005319',
        '6DA' => 'E02005319',
        '6DB' => 'E02005319',
        '6DD' => 'E02005319',
        '6DE' => 'E02005319',
        '6DF' => 'E02005319',
        '6DG' => 'E02005319',
        '6DH' => 'E02005319',
        '6DJ' => 'E02005319',
        '6DL' => 'E02005319',
        '6DN' => 'E02005319',
        '6DP' => 'E02005319',
        '6DQ' => 'E02005319',
        '6DR' => 'E02005319',
        '6DS' => 'E02005319',
        '6DT' => 'E02005319',
        '6DU' => 'E02005319',
        '6DW' => 'E02005319',
        '6DX' => 'E02005319',
        '6DY' => 'E02005319',
        '6DZ' => 'E02005319',
        '6EA' => 'E02005319',
        '6EB' => 'E02005319',
        '6ED' => 'E02005319',
        '6EE' => 'E02005319',
        '6EF' => 'E02005319',
        '6EG' => 'E02005319',
        '6EH' => 'E02005319',
        '6EJ' => 'E02005319',
        '6EL' => 'E02005319',
        '6EN' => 'E02005319',
        '6EP' => 'E02005319',
        '6EQ' => 'E02005319',
        '6ER' => 'E02005319',
        '6ES' => 'E02005319',
        '6ET' => 'E02005319',
        '6EU' => 'E02005319',
        '6EW' => 'E02005319',
        '6EX' => 'E02005319',
        '6EY' => 'E02005319',
        '6EZ' => 'E02005319',
        '6FA' => 'E02005319',
        '6FB' => 'E02005323',
        '6FD' => 'E02005319',
        '6FE' => 'E02005323',
        '6FF' => 'E02005323',
        '6FG' => 'E02005323',
        '6FH' => 'E02005323',
        '6FJ' => 'E02005323',
        '6FL' => 'E02005323',
        '6FN' => 'E02005323',
        '6FP' => 'E02005323',
        '6FQ' => 'E02005323',
        '6FR' => 'E02005323',
        '6FS' => 'E02005323',
        '6FT' => 'E02005323',
        '6FU' => 'E02005323',
        '6FW' => 'E02005323',
        '6FX' => 'E02005323',
        '6FY' => 'E02005323',
        '6FZ' => 'E02005323',
        '6GA' => 'E02005319',
        '6GB' => 'E02005319',
        '6GD' => 'E02005319',
        '6GE' => 'E02005319',
        '6GF' => 'E02005319',
        '6GG' => 'E02005319',
        '6GH' => 'E02005319',
        '6GJ' => 'E02005319',
        '6GL' => 'E02005319',
        '6GN' => 'E02005319',
        '6GP' => 'E02005319',
        '6GQ' => 'E02005319',
        '6GR' => 'E02005319',
        '6GS' => 'E02005319',
        '6GT' => 'E02005319',
        '6GU' => 'E02005323',
        '6GW' => 'E02005323',
        '6GX' => 'E02005323',
        '6GY' => 'E02005323',
        '6GZ' => 'E02005323',
        '6HA' => 'E02005323',
        '6HB' => 'E02005323',
        '6HD' => 'E02005319',
        '6HE' => 'E02005319',
        '6HF' => 'E02005319',
        '6HG' => 'E02005319',
        '6HH' => 'E02005319',
        '6HJ' => 'E02005319',
        '6HL' => 'E02005319',
        '6HN' => 'E02005319',
        '6HP' => 'E02005319',
        '6HQ' => 'E02005319',
        '6HR' => 'E02005319',
        '6HS' => 'E02005323',
        '6HT' => 'E02005319',
        '6HU' => 'E02005319',
        '6HW' => 'E02005319',
        '6HX' => 'E02005319',
        '6HY' => 'E02005319',
        '6HZ' => 'E02005319',
        '6JA' => 'E02005319',
        '6JB' => 'E02005319',
        '6JD' => 'E02005319',
        '6JE' => 'E02005319',
        '6JF' => 'E02005319',
        '6JG' => 'E02005319',
        '6JH' => 'E02005319',
        '6JJ' => 'E02005319',
        '6JL' => 'E02005319',
        '6JN' => 'E02005319',
        '6JP' => 'E02005319',
        '6JQ' => 'E02005319',
        '6JR' => 'E02005319',
        '6JS' => 'E02005319',
        '6JT' => 'E02005319',
        '6JU' => 'E02005319',
        '6JW' => 'E02005319',
        '6JX' => 'E02005319',
        '6JY' => 'E02005319',
        '6JZ' => 'E02005319',
        '6LA' => 'E02005319',
        '6LB' => 'E02005319',
        '6LD' => 'E02005319',
        '6LE' => 'E02005319',
        '6LF' => 'E02005319',
        '6LG' => 'E02005319',
        '6LH' => 'E02005319',
        '6LJ' => 'E02005319',
        '6LL' => 'E02005319',
        '6LN' => 'E02005319',
        '6LP' => 'E02005319',
        '6LQ' => 'E02005319',
        '6LR' => 'E02005319',
        '6LS' => 'E02005319',
        '6LT' => 'E02005319',
        '6LU' => 'E02005319',
        '6LW' => 'E02005319',
        '6LX' => 'E02005319',
        '6LY' => 'E02005319',
        '6LZ' => 'E02005319',
        '6NA' => 'E02005319',
        '6NB' => 'E02005323',
        '6ND' => 'E02005323',
        '6NE' => 'E02005323',
        '6NF' => 'E02005323',
        '6NG' => 'E02005323',
        '6NN' => 'E02005323',
        '6NP' => 'E02005319',
        '6NQ' => 'E02005323',
        '6NR' => 'E02005319',
        '6NS' => 'E02005319',
        '6NT' => 'E02005319',
        '6NU' => 'E02005319',
        '6NW' => 'E02005319',
        '6NX' => 'E02005319',
        '6NY' => 'E02005319',
        '6NZ' => 'E02005323',
        '6PA' => 'E02005319',
        '6PB' => 'E02005319',
        '6PD' => 'E02005323',
        '6PF' => 'E02005323',
        '6PH' => 'E02005319',
        '6PJ' => 'E02005323',
        '6PN' => 'E02005323',
        '6PP' => 'E02005323',
        '6PQ' => 'E02005323',
        '6PR' => 'E02005319',
        '6PS' => 'E02005323',
        '6PW' => 'E02005323',
        '6PX' => 'E02005319',
        '6PY' => 'E02005319',
        '6PZ' => 'E02005319',
        '6QA' => 'E02005319',
        '6QB' => 'E02005319',
        '6QD' => 'E02005319',
        '6QE' => 'E02005319',
        '6QF' => 'E02005319',
        '6QG' => 'E02005319',
        '6QH' => 'E02005319',
        '6QJ' => 'E02005319',
        '6QL' => 'E02005319',
        '6QN' => 'E02005319',
        '6QP' => 'E02005319',
        '6QQ' => 'E02005319',
        '6QR' => 'E02005319',
        '6QS' => 'E02005319',
        '6QT' => 'E02005319',
        '6QU' => 'E02005319',
        '6QW' => 'E02005319',
        '6QX' => 'E02005319',
        '6QY' => 'E02005319',
        '6QZ' => 'E02005319',
        '6RA' => 'E02005319',
        '6RB' => 'E02005319',
        '6RD' => 'E02005319',
        '6RE' => 'E02005319',
        '6RF' => 'E02005319',
        '6RG' => 'E02005319',
        '6RH' => 'E02005319',
        '6RJ' => 'E02005323',
        '6RL' => 'E02005319',
        '6RN' => 'E02005319',
        '6RP' => 'E02005319',
        '6RQ' => 'E02005319',
        '6RR' => 'E02005319',
        '6RS' => 'E02005319',
        '6RT' => 'E02005319',
        '6RU' => 'E02005319',
        '6RW' => 'E02005319',
        '6RX' => 'E02005319',
        '6RY' => 'E02005319',
        '6RZ' => 'E02005319',
        '6SA' => 'E02005319',
        '6SB' => 'E02005319',
        '6SD' => 'E02005319',
        '6SE' => 'E02005319',
        '6SF' => 'E02005319',
        '6SG' => 'E02005319',
        '6SH' => 'E02005319',
        '6SJ' => 'E02005319',
        '6SL' => 'E02005319',
        '6SN' => 'E02005319',
        '6SP' => 'E02005319',
        '6SQ' => 'E02005319',
        '6SR' => 'E02005319',
        '6SS' => 'E02005319',
        '6ST' => 'E02005319',
        '6SU' => 'E02005319',
        '6SW' => 'E02005319',
        '6SX' => 'E02005319',
        '6SY' => 'E02005319',
        '6SZ' => 'E02005319',
        '6TA' => 'E02005319',
        '6TB' => 'E02005319',
        '6TD' => 'E02005319',
        '6TE' => 'E02005319',
        '6TF' => 'E02005319',
        '6TG' => 'E02005319',
        '6TH' => 'E02005319',
        '6TJ' => 'E02005319',
        '6TL' => 'E02005319',
        '6TN' => 'E02005319',
        '6TP' => 'E02005319',
        '6TQ' => 'E02005319',
        '6TR' => 'E02005319',
        '6TS' => 'E02005319',
        '6TT' => 'E02005319',
        '6TU' => 'E02005319',
        '6TW' => 'E02005319',
        '6TX' => 'E02005319',
        '6TY' => 'E02005319',
        '6TZ' => 'E02005319',
        '6UA' => 'E02005319',
        '6UB' => 'E02005319',
        '6UD' => 'E02005319',
        '6UE' => 'E02005319',
        '6UF' => 'E02005319',
        '6UG' => 'E02005319',
        '6UH' => 'E02005319',
        '6UJ' => 'E02005319',
        '6UL' => 'E02005319',
        '6UN' => 'E02005319',
        '6UP' => 'E02005319',
        '6UQ' => 'E02005319',
        '6UR' => 'E02005319',
        '6US' => 'E02005319',
        '6UU' => 'E02005319',
        '6UW' => 'E02005319',
        '6UX' => 'E02005319',
        '6UY' => 'E02005319',
        '6UZ' => 'E02005319',
        '6WL' => 'E02005319',
        '6WN' => 'E02005319',
        '6WP' => 'E02005319',
        '6WQ' => 'E02005319',
        '6WR' => 'E02005319',
        '6WS' => 'E02005319',
        '6WT' => 'E02005319',
        '6WU' => 'E02005319',
        '6WW' => 'E02005319',
        '6WX' => 'E02005319',
        '6WY' => 'E02005319',
        '6WZ' => 'E02005319',
        '6YJ' => 'E02005319',
        '6YL' => 'E02005319',
        '6YZ' => 'E02005319',
        '6ZA' => 'E02005319',
        '6ZB' => 'E02005319',
        '6ZD' => 'E02005319',
        '6ZT' => 'E02005319',
        '6ZZ' => 'E02005319',
        '7AA' => 'E02005320',
        '7AB' => 'E02005319',
        '7AD' => 'E02005319',
        '7AE' => 'E02005319',
        '7AF' => 'E02005319',
        '7AG' => 'E02005319',
        '7AH' => 'E02005319',
        '7AJ' => 'E02005319',
        '7AL' => 'E02005319',
        '7AN' => 'E02005319',
        '7AP' => 'E02005319',
        '7AQ' => 'E02005319',
        '7AR' => 'E02005319',
        '7AS' => 'E02005320',
        '7AT' => 'E02005320',
        '7AU' => 'E02005320',
        '7AW' => 'E02005319',
        '7AX' => 'E02005320',
        '7AY' => 'E02005320',
        '7AZ' => 'E02005320',
        '7BA' => 'E02005320',
        '7BB' => 'E02005320',
        '7BD' => 'E02005320',
        '7BE' => 'E02005320',
        '7BF' => 'E02005323',
        '7BG' => 'E02005320',
        '7BH' => 'E02005320',
        '7BJ' => 'E02005320',
        '7BL' => 'E02005320',
        '7BN' => 'E02005320',
        '7BP' => 'E02005320',
        '7BQ' => 'E02005320',
        '7BR' => 'E02005323',
        '7BS' => 'E02005320',
        '7BT' => 'E02005320',
        '7BU' => 'E02005320',
        '7BW' => 'E02005320',
        '7BX' => 'E02005320',
        '7BY' => 'E02005320',
        '7BZ' => 'E02005320',
        '7DA' => 'E02005319',
        '7DB' => 'E02005319',
        '7DD' => 'E02005319',
        '7DE' => 'E02005319',
        '7DF' => 'E02005319',
        '7DG' => 'E02005319',
        '7DH' => 'E02005320',
        '7DJ' => 'E02005319',
        '7DL' => 'E02005319',
        '7DN' => 'E02005320',
        '7DP' => 'E02005319',
        '7DQ' => 'E02005319',
        '7DR' => 'E02005319',
        '7DS' => 'E02005319',
        '7DT' => 'E02005323',
        '7DU' => 'E02005323',
        '7DW' => 'E02005320',
        '7DX' => 'E02005319',
        '7DY' => 'E02005319',
        '7DZ' => 'E02005323',
        '7EA' => 'E02005319',
        '7EB' => 'E02005319',
        '7ED' => 'E02005319',
        '7EE' => 'E02005319',
        '7EF' => 'E02005319',
        '7EG' => 'E02005319',
        '7EH' => 'E02005319',
        '7EJ' => 'E02005319',
        '7EL' => 'E02005319',
        '7EN' => 'E02005319',
        '7EP' => 'E02005319',
        '7EQ' => 'E02005319',
        '7ER' => 'E02005319',
        '7ES' => 'E02005319',
        '7ET' => 'E02005319',
        '7EU' => 'E02005319',
        '7EW' => 'E02005319',
        '7EX' => 'E02005319',
        '7EY' => 'E02005319',
        '7EZ' => 'E02005323',
        '7FA' => 'E02005323',
        '7FB' => 'E02005323',
        '7FD' => 'E02005323',
        '7FE' => 'E02005323',
        '7FF' => 'E02005320',
        '7FG' => 'E02005320',
        '7FH' => 'E02005323',
        '7GA' => 'E02005323',
        '7GB' => 'E02005323',
        '7GD' => 'E02005323',
        '7GE' => 'E02005323',
        '7GF' => 'E02005319',
        '7GG' => 'E02005319',
        '7GH' => 'E02005319',
        '7GJ' => 'E02005323',
        '7GL' => 'E02005319',
        '7GN' => 'E02005319',
        '7GP' => 'E02005319',
        '7GQ' => 'E02005319',
        '7GR' => 'E02005319',
        '7HA' => 'E02005319',
        '7HB' => 'E02005323',
        '7HD' => 'E02005319',
        '7HE' => 'E02005319',
        '7HG' => 'E02005320',
        '7HH' => 'E02005320',
        '7HJ' => 'E02005320',
        '7HL' => 'E02005320',
        '7HN' => 'E02005320',
        '7HP' => 'E02005323',
        '7HQ' => 'E02005320',
        '7HR' => 'E02005320',
        '7HS' => 'E02005320',
        '7HT' => 'E02005320',
        '7HU' => 'E02005320',
        '7HW' => 'E02005320',
        '7HX' => 'E02005320',
        '7HY' => 'E02005320',
        '7HZ' => 'E02005320',
        '7JA' => 'E02005320',
        '7JB' => 'E02005320',
        '7JD' => 'E02005320',
        '7JE' => 'E02005320',
        '7JF' => 'E02005320',
        '7JG' => 'E02005320',
        '7JH' => 'E02005320',
        '7JJ' => 'E02005320',
        '7JL' => 'E02005320',
        '7JN' => 'E02005320',
        '7JP' => 'E02005320',
        '7JQ' => 'E02005320',
        '7JR' => 'E02005320',
        '7JT' => 'E02005320',
        '7JU' => 'E02005320',
        '7JW' => 'E02005320',
        '7JX' => 'E02005320',
        '7JY' => 'E02005320',
        '7JZ' => 'E02005320',
        '7LA' => 'E02005320',
        '7LB' => 'E02005320',
        '7LD' => 'E02005320',
        '7LE' => 'E02005320',
        '7LF' => 'E02005320',
        '7LG' => 'E02005320',
        '7LH' => 'E02005320',
        '7LJ' => 'E02005320',
        '7LL' => 'E02005320',
        '7LN' => 'E02005320',
        '7LP' => 'E02005323',
        '7LQ' => 'E02005320',
        '7LR' => 'E02005323',
        '7LS' => 'E02005323',
        '7LT' => 'E02005323',
        '7LU' => 'E02005323',
        '7LW' => 'E02005320',
        '7LX' => 'E02005323',
        '7LY' => 'E02005323',
        '7LZ' => 'E02005323',
        '7NA' => 'E02005323',
        '7NB' => 'E02005323',
        '7ND' => 'E02005323',
        '7NE' => 'E02005323',
        '7NF' => 'E02005323',
        '7NG' => 'E02005323',
        '7NH' => 'E02005323',
        '7NJ' => 'E02005323',
        '7NL' => 'E02005323',
        '7NN' => 'E02005323',
        '7NP' => 'E02005323',
        '7NQ' => 'E02005323',
        '7NR' => 'E02005323',
        '7NS' => 'E02005323',
        '7NT' => 'E02005323',
        '7NU' => 'E02005323',
        '7NW' => 'E02005323',
        '7NX' => 'E02005323',
        '7NY' => 'E02005319',
        '7NZ' => 'E02005320',
        '7PA' => 'E02005323',
        '7PB' => 'E02005323',
        '7PD' => 'E02005323',
        '7PE' => 'E02005323',
        '7PF' => 'E02005323',
        '7PG' => 'E02005323',
        '7PH' => 'E02005323',
        '7PJ' => 'E02005323',
        '7PL' => 'E02005323',
        '7PN' => 'E02005323',
        '7PP' => 'E02005323',
        '7PQ' => 'E02005323',
        '7PR' => 'E02005323',
        '7PS' => 'E02005323',
        '7PT' => 'E02005323',
        '7PU' => 'E02005323',
        '7PW' => 'E02005323',
        '7PX' => 'E02005323',
        '7PY' => 'E02005323',
        '7PZ' => 'E02005323',
        '7QA' => 'E02005319',
        '7QB' => 'E02005323',
        '7QE' => 'E02005323',
        '7QF' => 'E02005323',
        '7QG' => 'E02005323',
        '7QH' => 'E02005319',
        '7QJ' => 'E02005323',
        '7WA' => 'E02005323',
        '7WW' => 'E02005323',
        '7WX' => 'E02005323',
        '7WY' => 'E02005319',
        '7WZ' => 'E02005319',
        '7YX' => 'E02005323',
        '7YZ' => 'E02005319',
        '7ZZ' => 'E02005323',
        '8AA' => 'E02005320',
        '8AB' => 'E02005320',
        '8AD' => 'E02005320',
        '8AE' => 'E02005320',
        '8AF' => 'E02005320',
        '8AG' => 'E02005320',
        '8AH' => 'E02005320',
        '8AJ' => 'E02005320',
        '8AL' => 'E02005320',
        '8AN' => 'E02005320',
        '8AP' => 'E02005321',
        '8AQ' => 'E02005320',
        '8AR' => 'E02005323',
        '8AS' => 'E02005323',
        '8AT' => 'E02005323',
        '8AU' => 'E02005323',
        '8AW' => 'E02005320',
        '8AX' => 'E02005323',
        '8AY' => 'E02005323',
        '8AZ' => 'E02005323',
        '8BA' => 'E02005321',
        '8BB' => 'E02005323',
        '8BD' => 'E02005323',
        '8BE' => 'E02005321',
        '8BF' => 'E02005321',
        '8BG' => 'E02005321',
        '8BH' => 'E02005320',
        '8BJ' => 'E02005320',
        '8BL' => 'E02005320',
        '8BN' => 'E02005320',
        '8BP' => 'E02005320',
        '8BQ' => 'E02005321',
        '8BR' => 'E02005320',
        '8BS' => 'E02005320',
        '8BT' => 'E02005320',
        '8BU' => 'E02005320',
        '8BW' => 'E02005320',
        '8BX' => 'E02005320',
        '8BY' => 'E02005320',
        '8BZ' => 'E02005321',
        '8DA' => 'E02005321',
        '8DB' => 'E02005321',
        '8DD' => 'E02005320',
        '8DE' => 'E02005321',
        '8DF' => 'E02005321',
        '8DG' => 'E02005321',
        '8DH' => 'E02005321',
        '8DJ' => 'E02005321',
        '8DL' => 'E02005321',
        '8DN' => 'E02005321',
        '8DP' => 'E02005321',
        '8DQ' => 'E02005321',
        '8DR' => 'E02005321',
        '8DS' => 'E02005321',
        '8DT' => 'E02005321',
        '8DU' => 'E02005320',
        '8DW' => 'E02005321',
        '8DX' => 'E02005321',
        '8DY' => 'E02005321',
        '8DZ' => 'E02005321',
        '8EA' => 'E02005321',
        '8EB' => 'E02005321',
        '8ED' => 'E02005321',
        '8EE' => 'E02005321',
        '8EF' => 'E02005321',
        '8EG' => 'E02005321',
        '8EH' => 'E02005321',
        '8EJ' => 'E02005321',
        '8EL' => 'E02005321',
        '8EN' => 'E02005321',
        '8EP' => 'E02005321',
        '8EQ' => 'E02005321',
        '8ER' => 'E02005321',
        '8ES' => 'E02005321',
        '8ET' => 'E02005321',
        '8EU' => 'E02005321',
        '8EW' => 'E02005321',
        '8EX' => 'E02005321',
        '8EY' => 'E02005321',
        '8EZ' => 'E02005321',
        '8FA' => 'E02005321',
        '8FB' => 'E02005321',
        '8FD' => 'E02005321',
        '8FE' => 'E02005319',
        '8FF' => 'E02005321',
        '8FG' => 'E02005321',
        '8FH' => 'E02005321',
        '8FJ' => 'E02005321',
        '8FL' => 'E02005321',
        '8GA' => 'E02005319',
        '8GB' => 'E02005319',
        '8GD' => 'E02005319',
        '8GE' => 'E02005321',
        '8GF' => 'E02005321',
        '8GG' => 'E02005319',
        '8GH' => 'E02005321',
        '8GJ' => 'E02005321',
        '8GL' => 'E02005321',
        '8GN' => 'E02005319',
        '8GP' => 'E02005319',
        '8GQ' => 'E02005319',
        '8GR' => 'E02005319',
        '8GS' => 'E02005321',
        '8GT' => 'E02005323',
        '8GU' => 'E02005323',
        '8GX' => 'E02005323',
        '8HA' => 'E02005321',
        '8HB' => 'E02005321',
        '8HD' => 'E02005321',
        '8HE' => 'E02005321',
        '8HF' => 'E02005323',
        '8HG' => 'E02005323',
        '8HH' => 'E02005323',
        '8HJ' => 'E02005323',
        '8HL' => 'E02005323',
        '8HN' => 'E02005323',
        '8HP' => 'E02005323',
        '8HQ' => 'E02005323',
        '8HR' => 'E02005323',
        '8HS' => 'E02005323',
        '8HT' => 'E02005323',
        '8HU' => 'E02005323',
        '8HW' => 'E02005323',
        '8HX' => 'E02005323',
        '8HY' => 'E02005323',
        '8HZ' => 'E02005323',
        '8JA' => 'E02005321',
        '8JB' => 'E02005321',
        '8JD' => 'E02005321',
        '8JE' => 'E02005321',
        '8JF' => 'E02005321',
        '8JG' => 'E02005321',
        '8JH' => 'E02005321',
        '8JJ' => 'E02005321',
        '8JL' => 'E02005321',
        '8JN' => 'E02005323',
        '8JP' => 'E02005323',
        '8JQ' => 'E02005321',
        '8JR' => 'E02005323',
        '8JS' => 'E02005323',
        '8JT' => 'E02005323',
        '8JU' => 'E02005323',
        '8JW' => 'E02005321',
        '8JX' => 'E02005323',
        '8JY' => 'E02005323',
        '8JZ' => 'E02005323',
        '8LA' => 'E02005323',
        '8LB' => 'E02005321',
        '8LD' => 'E02005321',
        '8LE' => 'E02005321',
        '8LF' => 'E02005320',
        '8LG' => 'E02005321',
        '8LH' => 'E02005320',
        '8LJ' => 'E02005321',
        '8LL' => 'E02005321',
        '8LN' => 'E02005321',
        '8LP' => 'E02005321',
        '8LQ' => 'E02005321',
        '8LR' => 'E02005321',
        '8LS' => 'E02005321',
        '8LT' => 'E02005321',
        '8LU' => 'E02005321',
        '8LW' => 'E02005321',
        '8LX' => 'E02005321',
        '8LY' => 'E02005321',
        '8LZ' => 'E02005321',
        '8NA' => 'E02005321',
        '8NB' => 'E02005321',
        '8ND' => 'E02005321',
        '8NE' => 'E02005321',
        '8NF' => 'E02005321',
        '8NG' => 'E02005321',
        '8NH' => 'E02005321',
        '8NJ' => 'E02005321',
        '8NL' => 'E02005321',
        '8NN' => 'E02005321',
        '8NP' => 'E02005321',
        '8NQ' => 'E02005321',
        '8NR' => 'E02005321',
        '8NS' => 'E02005321',
        '8NT' => 'E02005321',
        '8NU' => 'E02005321',
        '8NW' => 'E02005321',
        '8NX' => 'E02005321',
        '8NY' => 'E02005321',
        '8NZ' => 'E02005321',
        '8PA' => 'E02005321',
        '8PB' => 'E02005321',
        '8PD' => 'E02005321',
        '8PE' => 'E02005321',
        '8PF' => 'E02005321',
        '8PG' => 'E02005320',
        '8PH' => 'E02005320',
        '8PJ' => 'E02005320',
        '8PL' => 'E02005320',
        '8PN' => 'E02005320',
        '8PP' => 'E02005320',
        '8PQ' => 'E02005320',
        '8PR' => 'E02005320',
        '8PS' => 'E02005320',
        '8PT' => 'E02005320',
        '8PU' => 'E02005321',
        '8PW' => 'E02005320',
        '8PX' => 'E02005321',
        '8PY' => 'E02005320',
        '8PZ' => 'E02005321',
        '8QA' => 'E02005321',
        '8QB' => 'E02005321',
        '8QD' => 'E02005321',
        '8QE' => 'E02005321',
        '8QF' => 'E02005321',
        '8QG' => 'E02005321',
        '8QH' => 'E02005321',
        '8QJ' => 'E02005321',
        '8QL' => 'E02005321',
        '8QN' => 'E02005321',
        '8QP' => 'E02005321',
        '8QQ' => 'E02005321',
        '8QR' => 'E02005321',
        '8QS' => 'E02005321',
        '8QT' => 'E02005321',
        '8QU' => 'E02005321',
        '8QW' => 'E02005321',
        '8QX' => 'E02005321',
        '8QY' => 'E02005321',
        '8QZ' => 'E02005321',
        '8RA' => 'E02005321',
        '8RB' => 'E02005321',
        '8RD' => 'E02005321',
        '8RE' => 'E02005321',
        '8RF' => 'E02005321',
        '8RG' => 'E02005321',
        '8RH' => 'E02005321',
        '8RJ' => 'E02005321',
        '8RL' => 'E02005323',
        '8RN' => 'E02005321',
        '8RP' => 'E02005321',
        '8RQ' => 'E02005321',
        '8RR' => 'E02005321',
        '8RS' => 'E02005329',
        '8RT' => 'E02005321',
        '8RU' => 'E02005321',
        '8RW' => 'E02005321',
        '8RX' => 'E02005321',
        '8RY' => 'E02005329',
        '8RZ' => 'E02005321',
        '8SA' => 'E02005321',
        '8SB' => 'E02005320',
        '8SD' => 'E02005320',
        '8SE' => 'E02005321',
        '8SL' => 'E02005323',
        '8SS' => 'E02005321',
        '8SW' => 'E02005321',
        '8TW' => 'E02005323',
        '8UT' => 'E02005319',
        '8UU' => 'E02005319',
        '8UW' => 'E02005319',
        '8UX' => 'E02005319',
        '8UY' => 'E02005319',
        '8UZ' => 'E02005319',
        '8WA' => 'E02005323',
        '8WB' => 'E02005319',
        '8WD' => 'E02005319',
        '8WE' => 'E02005319',
        '8WF' => 'E02005319',
        '8WG' => 'E02005319',
        '8WH' => 'E02005319',
        '8WJ' => 'E02005319',
        '8WL' => 'E02005319',
        '8WN' => 'E02005319',
        '8WP' => 'E02005319',
        '8WQ' => 'E02005319',
        '8WR' => 'E02005319',
        '8WS' => 'E02005319',
        '8WT' => 'E02005319',
        '8WU' => 'E02005319',
        '8WW' => 'E02005319',
        '8WX' => 'E02005319',
        '8WY' => 'E02005319',
        '8WZ' => 'E02005323',
        '8XA' => 'E02005319',
        '8XB' => 'E02005319',
        '8XD' => 'E02005319',
        '8XE' => 'E02005319',
        '8XX' => 'E02005319',
        '8XY' => 'E02005319',
        '8XZ' => 'E02005319',
        '8YA' => 'E02005321',
        '8YB' => 'E02005321',
        '8YD' => 'E02005321',
        '8YE' => 'E02005321',
        '8YF' => 'E02005321',
        '8YG' => 'E02005321',
        '8YH' => 'E02005321',
        '8YJ' => 'E02005321',
        '8YL' => 'E02005321',
        '8YN' => 'E02005321',
        '8YP' => 'E02005321',
        '8YQ' => 'E02005321',
        '8YR' => 'E02005321',
        '8YS' => 'E02005321',
        '8YT' => 'E02005319',
        '9AA' => 'E02005319',
        '9AB' => 'E02005319',
        '9AE' => 'E02005319',
        '9AG' => 'E02005319',
        '9AH' => 'E02005319',
        '9AJ' => 'E02005319',
        '9AL' => 'E02005319',
        '9AN' => 'E02005319',
        '9AP' => 'E02005319',
        '9AQ' => 'E02005319',
        '9AR' => 'E02005319',
        '9AU' => 'E02005319',
        '9AW' => 'E02005319',
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