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
final class SN12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02006680',
        '6AB' => 'E02006680',
        '6AD' => 'E02006679',
        '6AE' => 'E02006680',
        '6AF' => 'E02006680',
        '6AG' => 'E02006680',
        '6AH' => 'E02006679',
        '6AJ' => 'E02006679',
        '6AL' => 'E02006680',
        '6AN' => 'E02006680',
        '6AP' => 'E02006680',
        '6AQ' => 'E02006679',
        '6AR' => 'E02006680',
        '6AS' => 'E02006680',
        '6AT' => 'E02006680',
        '6AU' => 'E02006680',
        '6AW' => 'E02006680',
        '6AX' => 'E02006680',
        '6AY' => 'E02006680',
        '6AZ' => 'E02006680',
        '6BA' => 'E02006680',
        '6BB' => 'E02006680',
        '6BD' => 'E02006680',
        '6BE' => 'E02006680',
        '6BF' => 'E02006679',
        '6BG' => 'E02006680',
        '6BH' => 'E02006680',
        '6BJ' => 'E02006680',
        '6BL' => 'E02006680',
        '6BN' => 'E02006680',
        '6BP' => 'E02006680',
        '6BQ' => 'E02006680',
        '6BS' => 'E02006680',
        '6BT' => 'E02006679',
        '6BU' => 'E02006679',
        '6BW' => 'E02006680',
        '6BX' => 'E02006679',
        '6BY' => 'E02006679',
        '6BZ' => 'E02006680',
        '6DA' => 'E02006680',
        '6DB' => 'E02006680',
        '6DD' => 'E02006680',
        '6DE' => 'E02006680',
        '6DF' => 'E02006680',
        '6DG' => 'E02006680',
        '6DH' => 'E02006680',
        '6DJ' => 'E02006680',
        '6DL' => 'E02006679',
        '6DN' => 'E02006679',
        '6DP' => 'E02006679',
        '6DQ' => 'E02006639',
        '6DR' => 'E02006679',
        '6DS' => 'E02006679',
        '6DT' => 'E02006679',
        '6DU' => 'E02006679',
        '6DW' => 'E02006680',
        '6DX' => 'E02006679',
        '6DY' => 'E02006679',
        '6DZ' => 'E02006679',
        '6EA' => 'E02006679',
        '6EB' => 'E02006679',
        '6ED' => 'E02006679',
        '6EE' => 'E02006679',
        '6EF' => 'E02006679',
        '6EG' => 'E02006679',
        '6EH' => 'E02006679',
        '6EJ' => 'E02006679',
        '6EL' => 'E02006679',
        '6EN' => 'E02006679',
        '6EP' => 'E02006680',
        '6EQ' => 'E02006679',
        '6ER' => 'E02006679',
        '6ES' => 'E02006680',
        '6ET' => 'E02006679',
        '6EU' => 'E02006679',
        '6EW' => 'E02006680',
        '6EX' => 'E02006680',
        '6EY' => 'E02006679',
        '6EZ' => 'E02006679',
        '6FA' => 'E02006679',
        '6FB' => 'E02006679',
        '6FD' => 'E02006679',
        '6FE' => 'E02006679',
        '6FF' => 'E02006679',
        '6FG' => 'E02006680',
        '6FH' => 'E02006679',
        '6FJ' => 'E02006679',
        '6FL' => 'E02006679',
        '6FN' => 'E02006680',
        '6FP' => 'E02006680',
        '6FQ' => 'E02006679',
        '6FR' => 'E02006680',
        '6FS' => 'E02006680',
        '6FT' => 'E02006680',
        '6FU' => 'E02006680',
        '6FW' => 'E02006680',
        '6FX' => 'E02006680',
        '6FY' => 'E02006680',
        '6FZ' => 'E02006680',
        '6GA' => 'E02006680',
        '6GB' => 'E02006680',
        '6GD' => 'E02006680',
        '6GE' => 'E02006689',
        '6GF' => 'E02006679',
        '6GG' => 'E02006679',
        '6GH' => 'E02006679',
        '6GJ' => 'E02006680',
        '6GL' => 'E02006679',
        '6GN' => 'E02006679',
        '6GP' => 'E02006680',
        '6GQ' => 'E02006680',
        '6GR' => 'E02006680',
        '6GS' => 'E02006680',
        '6GT' => 'E02006680',
        '6GU' => 'E02006679',
        '6GW' => 'E02006679',
        '6GX' => 'E02006679',
        '6GY' => 'E02006680',
        '6HA' => 'E02006680',
        '6HB' => 'E02006680',
        '6HD' => 'E02006680',
        '6HE' => 'E02006680',
        '6HF' => 'E02006680',
        '6HG' => 'E02006680',
        '6HH' => 'E02006680',
        '6HJ' => 'E02006680',
        '6HL' => 'E02006680',
        '6HN' => 'E02006680',
        '6HP' => 'E02006680',
        '6HQ' => 'E02006680',
        '6HR' => 'E02006680',
        '6HS' => 'E02006680',
        '6HT' => 'E02006680',
        '6HU' => 'E02006680',
        '6HW' => 'E02006680',
        '6HX' => 'E02006680',
        '6HY' => 'E02006680',
        '6HZ' => 'E02006680',
        '6JA' => 'E02006680',
        '6JB' => 'E02006680',
        '6JD' => 'E02006680',
        '6JE' => 'E02006680',
        '6JF' => 'E02006680',
        '6JG' => 'E02006680',
        '6JH' => 'E02006680',
        '6JJ' => 'E02006680',
        '6JL' => 'E02006680',
        '6JN' => 'E02006680',
        '6JP' => 'E02006680',
        '6JQ' => 'E02006680',
        '6JR' => 'E02006680',
        '6JS' => 'E02006680',
        '6JT' => 'E02006680',
        '6JU' => 'E02006680',
        '6JW' => 'E02006679',
        '6JX' => 'E02006680',
        '6JY' => 'E02006680',
        '6JZ' => 'E02006680',
        '6LA' => 'E02006680',
        '6LB' => 'E02006680',
        '6LD' => 'E02006680',
        '6LE' => 'E02006680',
        '6LF' => 'E02006680',
        '6LG' => 'E02006680',
        '6LH' => 'E02006679',
        '6LJ' => 'E02006680',
        '6LL' => 'E02006680',
        '6LN' => 'E02006680',
        '6LP' => 'E02006680',
        '6LQ' => 'E02006680',
        '6LR' => 'E02006680',
        '6LS' => 'E02006680',
        '6LT' => 'E02006679',
        '6LU' => 'E02006680',
        '6LW' => 'E02006679',
        '6LX' => 'E02006680',
        '6LY' => 'E02006680',
        '6LZ' => 'E02006680',
        '6NA' => 'E02006680',
        '6NB' => 'E02006679',
        '6ND' => 'E02006679',
        '6NE' => 'E02006679',
        '6NF' => 'E02006680',
        '6NG' => 'E02006639',
        '6NH' => 'E02006639',
        '6NJ' => 'E02006639',
        '6NL' => 'E02006639',
        '6NN' => 'E02006639',
        '6NP' => 'E02006639',
        '6NQ' => 'E02006639',
        '6NR' => 'E02006639',
        '6NS' => 'E02006639',
        '6NT' => 'E02006639',
        '6NU' => 'E02006639',
        '6NW' => 'E02006639',
        '6NX' => 'E02006639',
        '6NY' => 'E02006639',
        '6NZ' => 'E02006639',
        '6PA' => 'E02006639',
        '6PB' => 'E02006639',
        '6PD' => 'E02006639',
        '6PE' => 'E02006639',
        '6PF' => 'E02006639',
        '6PG' => 'E02006639',
        '6PH' => 'E02006639',
        '6PJ' => 'E02006639',
        '6PL' => 'E02006639',
        '6PN' => 'E02006639',
        '6PP' => 'E02006639',
        '6PQ' => 'E02006639',
        '6PR' => 'E02006639',
        '6PS' => 'E02006639',
        '6PT' => 'E02006639',
        '6PU' => 'E02006639',
        '6PW' => 'E02006689',
        '6PX' => 'E02006639',
        '6PY' => 'E02006639',
        '6PZ' => 'E02006639',
        '6QA' => 'E02006639',
        '6QB' => 'E02006639',
        '6QD' => 'E02006639',
        '6QE' => 'E02006679',
        '6QF' => 'E02006679',
        '6QG' => 'E02006639',
        '6QH' => 'E02006639',
        '6QJ' => 'E02006680',
        '6QL' => 'E02006679',
        '6QN' => 'E02006679',
        '6QP' => 'E02006679',
        '6QQ' => 'E02006679',
        '6QR' => 'E02006679',
        '6QS' => 'E02006679',
        '6QT' => 'E02006679',
        '6QU' => 'E02006679',
        '6QW' => 'E02006679',
        '6QX' => 'E02006679',
        '6QY' => 'E02006679',
        '6QZ' => 'E02006679',
        '6RA' => 'E02006679',
        '6RB' => 'E02006679',
        '6RD' => 'E02006679',
        '6RE' => 'E02006679',
        '6RF' => 'E02006679',
        '6RG' => 'E02006679',
        '6RH' => 'E02006639',
        '6RJ' => 'E02006639',
        '6RL' => 'E02006639',
        '6RN' => 'E02006639',
        '6RP' => 'E02006680',
        '6RQ' => 'E02006639',
        '6RR' => 'E02006639',
        '6RS' => 'E02006639',
        '6RT' => 'E02006639',
        '6RU' => 'E02006639',
        '6RW' => 'E02006639',
        '6RX' => 'E02006639',
        '6RY' => 'E02006639',
        '6RZ' => 'E02006639',
        '6SA' => 'E02006639',
        '6SB' => 'E02006679',
        '6SD' => 'E02006679',
        '6SE' => 'E02006679',
        '6SF' => 'E02006679',
        '6SG' => 'E02006679',
        '6SH' => 'E02006679',
        '6SJ' => 'E02006679',
        '6SL' => 'E02006679',
        '6SN' => 'E02006679',
        '6SP' => 'E02006679',
        '6SQ' => 'E02006679',
        '6SR' => 'E02006680',
        '6SS' => 'E02006679',
        '6ST' => 'E02006679',
        '6SU' => 'E02006679',
        '6SW' => 'E02006679',
        '6SX' => 'E02006679',
        '6SY' => 'E02006679',
        '6SZ' => 'E02006679',
        '6TA' => 'E02006679',
        '6TB' => 'E02006679',
        '6TD' => 'E02006679',
        '6TE' => 'E02006679',
        '6TF' => 'E02006679',
        '6TG' => 'E02006679',
        '6TH' => 'E02006679',
        '6TJ' => 'E02006679',
        '6TL' => 'E02006679',
        '6TN' => 'E02006680',
        '6TP' => 'E02006679',
        '6TQ' => 'E02006679',
        '6TR' => 'E02006679',
        '6TS' => 'E02006679',
        '6TT' => 'E02006679',
        '6TU' => 'E02006679',
        '6TW' => 'E02006679',
        '6TX' => 'E02006679',
        '6TY' => 'E02006679',
        '6TZ' => 'E02006679',
        '6UA' => 'E02006679',
        '6UB' => 'E02006679',
        '6UD' => 'E02006680',
        '6UE' => 'E02006680',
        '6UF' => 'E02006679',
        '6UG' => 'E02006679',
        '6UH' => 'E02006679',
        '6UJ' => 'E02006679',
        '6UL' => 'E02006680',
        '6UN' => 'E02006680',
        '6UP' => 'E02006679',
        '6UQ' => 'E02006679',
        '6UR' => 'E02006680',
        '6US' => 'E02006680',
        '6UT' => 'E02006680',
        '6UU' => 'E02006680',
        '6UW' => 'E02006679',
        '6UX' => 'E02006680',
        '6UY' => 'E02006680',
        '6UZ' => 'E02006680',
        '6WA' => 'E02006679',
        '6WB' => 'E02006679',
        '6WD' => 'E02006680',
        '6WE' => 'E02006680',
        '6WF' => 'E02006680',
        '6WG' => 'E02006679',
        '6WH' => 'E02006680',
        '6WJ' => 'E02006680',
        '6WL' => 'E02006680',
        '6WN' => 'E02006680',
        '6WP' => 'E02006680',
        '6WQ' => 'E02006679',
        '6WR' => 'E02006680',
        '6WS' => 'E02006679',
        '6WT' => 'E02006680',
        '6WU' => 'E02006680',
        '6WW' => 'E02006680',
        '6WZ' => 'E02006680',
        '6XA' => 'E02006679',
        '6XB' => 'E02006679',
        '6XD' => 'E02006679',
        '6XE' => 'E02006680',
        '6XF' => 'E02006680',
        '6XG' => 'E02006679',
        '6XH' => 'E02006679',
        '6XJ' => 'E02006680',
        '6XL' => 'E02006680',
        '6XN' => 'E02006679',
        '6XP' => 'E02006679',
        '6XQ' => 'E02006680',
        '6XR' => 'E02006679',
        '6XS' => 'E02006679',
        '6XT' => 'E02006679',
        '6XU' => 'E02006679',
        '6XW' => 'E02006679',
        '6XX' => 'E02006679',
        '6XY' => 'E02006679',
        '6XZ' => 'E02006679',
        '6YA' => 'E02006679',
        '6YB' => 'E02006679',
        '6YD' => 'E02006680',
        '6YE' => 'E02006680',
        '6YF' => 'E02006680',
        '6YG' => 'E02006679',
        '6YH' => 'E02006679',
        '6YJ' => 'E02006680',
        '6YL' => 'E02006679',
        '6YN' => 'E02006680',
        '6YP' => 'E02006679',
        '6YQ' => 'E02006680',
        '6YR' => 'E02006679',
        '6YS' => 'E02006679',
        '6YT' => 'E02006680',
        '6YU' => 'E02006679',
        '6YW' => 'E02006679',
        '6YX' => 'E02006680',
        '6YY' => 'E02006679',
        '6YZ' => 'E02006680',
        '6ZA' => 'E02006679',
        '6ZE' => 'E02006679',
        '6ZF' => 'E02006680',
        '6ZG' => 'E02006680',
        '6ZH' => 'E02006680',
        '6ZJ' => 'E02006680',
        '6ZL' => 'E02006680',
        '6ZP' => 'E02006680',
        '6ZQ' => 'E02006680',
        '6ZS' => 'E02006680',
        '6ZT' => 'E02006680',
        '6ZU' => 'E02006680',
        '6ZW' => 'E02006680',
        '6ZX' => 'E02006680',
        '6ZZ' => 'E02006680',
        '7AA' => 'E02006678',
        '7AB' => 'E02006678',
        '7AD' => 'E02006678',
        '7AE' => 'E02006678',
        '7AF' => 'E02006678',
        '7AG' => 'E02006678',
        '7AH' => 'E02006678',
        '7AJ' => 'E02006678',
        '7AL' => 'E02006678',
        '7AN' => 'E02006678',
        '7AP' => 'E02006678',
        '7AQ' => 'E02006678',
        '7AR' => 'E02006678',
        '7AS' => 'E02006678',
        '7AT' => 'E02006678',
        '7AU' => 'E02006678',
        '7AW' => 'E02006678',
        '7AX' => 'E02006678',
        '7AY' => 'E02006678',
        '7AZ' => 'E02006678',
        '7BA' => 'E02006680',
        '7BB' => 'E02006678',
        '7BD' => 'E02006680',
        '7BE' => 'E02006678',
        '7BF' => 'E02006680',
        '7BG' => 'E02006678',
        '7BH' => 'E02006678',
        '7BJ' => 'E02006678',
        '7BL' => 'E02006678',
        '7BN' => 'E02006678',
        '7BP' => 'E02006678',
        '7BQ' => 'E02006678',
        '7BS' => 'E02006678',
        '7BT' => 'E02006678',
        '7BU' => 'E02006678',
        '7BW' => 'E02006678',
        '7BX' => 'E02006678',
        '7BY' => 'E02006678',
        '7BZ' => 'E02006678',
        '7DA' => 'E02006678',
        '7DB' => 'E02006678',
        '7DD' => 'E02006678',
        '7DE' => 'E02006678',
        '7DF' => 'E02006678',
        '7DG' => 'E02006678',
        '7DH' => 'E02006678',
        '7DJ' => 'E02006678',
        '7DL' => 'E02006678',
        '7DN' => 'E02006678',
        '7DP' => 'E02006678',
        '7DQ' => 'E02006678',
        '7DR' => 'E02006678',
        '7DS' => 'E02006680',
        '7DT' => 'E02006678',
        '7DU' => 'E02006680',
        '7DW' => 'E02006678',
        '7DX' => 'E02006680',
        '7DY' => 'E02006680',
        '7DZ' => 'E02006680',
        '7EA' => 'E02006680',
        '7EB' => 'E02006680',
        '7ED' => 'E02006680',
        '7EE' => 'E02006678',
        '7EF' => 'E02006678',
        '7EG' => 'E02006678',
        '7EH' => 'E02006678',
        '7EJ' => 'E02006678',
        '7EL' => 'E02006678',
        '7EN' => 'E02006678',
        '7EP' => 'E02006680',
        '7EQ' => 'E02006678',
        '7ER' => 'E02006678',
        '7ES' => 'E02006678',
        '7ET' => 'E02006678',
        '7EU' => 'E02006678',
        '7EW' => 'E02006678',
        '7EX' => 'E02006678',
        '7EY' => 'E02006678',
        '7EZ' => 'E02006678',
        '7FA' => 'E02006679',
        '7FB' => 'E02006680',
        '7FD' => 'E02006680',
        '7FE' => 'E02006678',
        '7FF' => 'E02006678',
        '7FG' => 'E02006678',
        '7FH' => 'E02006678',
        '7FJ' => 'E02006679',
        '7FL' => 'E02006679',
        '7FN' => 'E02006679',
        '7FP' => 'E02006679',
        '7FQ' => 'E02006678',
        '7FR' => 'E02006680',
        '7FS' => 'E02006680',
        '7FT' => 'E02006679',
        '7FU' => 'E02006679',
        '7FW' => 'E02006679',
        '7FX' => 'E02006679',
        '7FY' => 'E02006679',
        '7FZ' => 'E02006679',
        '7GA' => 'E02006679',
        '7GB' => 'E02006679',
        '7GD' => 'E02006679',
        '7GE' => 'E02006678',
        '7GF' => 'E02006678',
        '7GG' => 'E02006679',
        '7GH' => 'E02006679',
        '7GJ' => 'E02006679',
        '7GL' => 'E02006679',
        '7GN' => 'E02006679',
        '7GP' => 'E02006679',
        '7GQ' => 'E02006679',
        '7GR' => 'E02006680',
        '7GS' => 'E02006679',
        '7GT' => 'E02006679',
        '7GU' => 'E02006679',
        '7GW' => 'E02006680',
        '7GX' => 'E02006679',
        '7GY' => 'E02006679',
        '7GZ' => 'E02006679',
        '7HA' => 'E02006678',
        '7HB' => 'E02006678',
        '7HD' => 'E02006678',
        '7HE' => 'E02006678',
        '7HF' => 'E02006678',
        '7HG' => 'E02006678',
        '7HH' => 'E02006678',
        '7HJ' => 'E02006678',
        '7HL' => 'E02006678',
        '7HN' => 'E02006678',
        '7HP' => 'E02006678',
        '7HQ' => 'E02006678',
        '7HR' => 'E02006678',
        '7HS' => 'E02006678',
        '7HT' => 'E02006678',
        '7HU' => 'E02006678',
        '7HW' => 'E02006678',
        '7HX' => 'E02006679',
        '7HY' => 'E02006678',
        '7HZ' => 'E02006678',
        '7JA' => 'E02006678',
        '7JB' => 'E02006679',
        '7JE' => 'E02006678',
        '7JF' => 'E02006678',
        '7JG' => 'E02006678',
        '7JH' => 'E02006678',
        '7JJ' => 'E02006678',
        '7JL' => 'E02006678',
        '7JN' => 'E02006678',
        '7JP' => 'E02006678',
        '7JQ' => 'E02006678',
        '7JR' => 'E02006678',
        '7JS' => 'E02006678',
        '7JT' => 'E02006678',
        '7JU' => 'E02006678',
        '7JW' => 'E02006678',
        '7JX' => 'E02006678',
        '7JY' => 'E02006680',
        '7JZ' => 'E02006680',
        '7LA' => 'E02006680',
        '7LB' => 'E02006680',
        '7LD' => 'E02006680',
        '7LE' => 'E02006680',
        '7LF' => 'E02006680',
        '7LG' => 'E02006680',
        '7LH' => 'E02006680',
        '7LJ' => 'E02006680',
        '7LL' => 'E02006680',
        '7LN' => 'E02006680',
        '7LP' => 'E02006680',
        '7LQ' => 'E02006680',
        '7LR' => 'E02006680',
        '7LS' => 'E02006680',
        '7LT' => 'E02006680',
        '7LU' => 'E02006680',
        '7LW' => 'E02006680',
        '7LX' => 'E02006680',
        '7LY' => 'E02006680',
        '7LZ' => 'E02006680',
        '7NA' => 'E02006680',
        '7NB' => 'E02006680',
        '7ND' => 'E02006680',
        '7NE' => 'E02006680',
        '7NF' => 'E02006680',
        '7NG' => 'E02006680',
        '7NH' => 'E02006680',
        '7NJ' => 'E02006680',
        '7NL' => 'E02006680',
        '7NN' => 'E02006680',
        '7NP' => 'E02006680',
        '7NQ' => 'E02006680',
        '7NR' => 'E02006680',
        '7NS' => 'E02006680',
        '7NT' => 'E02006680',
        '7NU' => 'E02006680',
        '7NW' => 'E02006680',
        '7NX' => 'E02006680',
        '7NY' => 'E02006680',
        '7NZ' => 'E02006680',
        '7PA' => 'E02006680',
        '7PB' => 'E02006680',
        '7PD' => 'E02006680',
        '7PE' => 'E02006680',
        '7PF' => 'E02006680',
        '7PG' => 'E02006680',
        '7PH' => 'E02006680',
        '7PJ' => 'E02006680',
        '7PL' => 'E02006680',
        '7PN' => 'E02006680',
        '7PQ' => 'E02006680',
        '7PR' => 'E02006680',
        '7PS' => 'E02006680',
        '7PT' => 'E02006679',
        '7PU' => 'E02006679',
        '7PW' => 'E02006680',
        '7PX' => 'E02006679',
        '7PY' => 'E02006679',
        '7PZ' => 'E02006679',
        '7QA' => 'E02006679',
        '7QB' => 'E02006679',
        '7QD' => 'E02006679',
        '7QE' => 'E02006679',
        '7QF' => 'E02006679',
        '7QG' => 'E02006679',
        '7QH' => 'E02006678',
        '7QJ' => 'E02006679',
        '7QL' => 'E02006678',
        '7QP' => 'E02006679',
        '7QQ' => 'E02006679',
        '7QR' => 'E02006679',
        '7QS' => 'E02006679',
        '7QT' => 'E02006679',
        '7QU' => 'E02006679',
        '7QW' => 'E02006678',
        '7QX' => 'E02006679',
        '7QY' => 'E02006679',
        '7QZ' => 'E02006679',
        '7RA' => 'E02006679',
        '7RB' => 'E02006679',
        '7RD' => 'E02006679',
        '7RE' => 'E02006679',
        '7RF' => 'E02006679',
        '7RG' => 'E02006679',
        '7RH' => 'E02006680',
        '7RJ' => 'E02006678',
        '7RL' => 'E02006679',
        '7RP' => 'E02006678',
        '7RQ' => 'E02006678',
        '7RR' => 'E02006678',
        '7RS' => 'E02006678',
        '7RT' => 'E02006678',
        '7RU' => 'E02006678',
        '7RW' => 'E02006678',
        '7RX' => 'E02006678',
        '7RY' => 'E02006678',
        '7RZ' => 'E02006678',
        '7SA' => 'E02006678',
        '7SB' => 'E02006678',
        '7SD' => 'E02006678',
        '7SE' => 'E02006678',
        '7SG' => 'E02006680',
        '7SH' => 'E02006680',
        '7SJ' => 'E02006680',
        '7SL' => 'E02006680',
        '7SN' => 'E02006680',
        '7SP' => 'E02006678',
        '7SQ' => 'E02006680',
        '7SR' => 'E02006678',
        '7SS' => 'E02006678',
        '7ST' => 'E02006678',
        '7SU' => 'E02006680',
        '7SW' => 'E02006680',
        '7SY' => 'E02006680',
        '7TA' => 'E02006680',
        '7TE' => 'E02006680',
        '7TF' => 'E02006680',
        '7TG' => 'E02006678',
        '7TH' => 'E02006680',
        '7TJ' => 'E02006680',
        '7TL' => 'E02006678',
        '7TN' => 'E02006678',
        '7TP' => 'E02006680',
        '7TR' => 'E02006678',
        '7TS' => 'E02006680',
        '7TT' => 'E02006680',
        '7TU' => 'E02006678',
        '7TW' => 'E02006680',
        '7TX' => 'E02006680',
        '7TY' => 'E02006678',
        '7TZ' => 'E02006678',
        '7UB' => 'E02006680',
        '7UD' => 'E02006680',
        '7UE' => 'E02006680',
        '7UF' => 'E02006680',
        '7UQ' => 'E02006680',
        '7WA' => 'E02006680',
        '7WB' => 'E02006680',
        '7WD' => 'E02006680',
        '7WE' => 'E02006680',
        '7WF' => 'E02006680',
        '7WG' => 'E02006680',
        '7WH' => 'E02006680',
        '7WR' => 'E02006680',
        '7WS' => 'E02006680',
        '7WT' => 'E02006680',
        '7WU' => 'E02006680',
        '7WW' => 'E02006680',
        '7WZ' => 'E02006680',
        '8AA' => 'E02006680',
        '8AB' => 'E02006680',
        '8AD' => 'E02006680',
        '8AE' => 'E02006678',
        '8AF' => 'E02006680',
        '8AG' => 'E02006678',
        '8AH' => 'E02006678',
        '8AJ' => 'E02006678',
        '8AL' => 'E02006678',
        '8AN' => 'E02006678',
        '8AP' => 'E02006678',
        '8AQ' => 'E02006678',
        '8AR' => 'E02006678',
        '8AS' => 'E02006678',
        '8AT' => 'E02006678',
        '8AU' => 'E02006678',
        '8AW' => 'E02006678',
        '8AX' => 'E02006680',
        '8AY' => 'E02006678',
        '8AZ' => 'E02006678',
        '8BA' => 'E02006678',
        '8BB' => 'E02006678',
        '8BD' => 'E02006678',
        '8BE' => 'E02006678',
        '8BF' => 'E02006679',
        '8BG' => 'E02006678',
        '8BH' => 'E02006678',
        '8BJ' => 'E02006678',
        '8BL' => 'E02006678',
        '8BN' => 'E02006680',
        '8BP' => 'E02006680',
        '8BQ' => 'E02006678',
        '8BS' => 'E02006680',
        '8BT' => 'E02006680',
        '8BU' => 'E02006680',
        '8BW' => 'E02006680',
        '8BX' => 'E02006680',
        '8BY' => 'E02006680',
        '8BZ' => 'E02006680',
        '8DA' => 'E02006680',
        '8DB' => 'E02006680',
        '8DD' => 'E02006680',
        '8DE' => 'E02006680',
        '8DF' => 'E02006680',
        '8DG' => 'E02006680',
        '8DH' => 'E02006678',
        '8DJ' => 'E02006678',
        '8DL' => 'E02006678',
        '8DN' => 'E02006678',
        '8DP' => 'E02006678',
        '8DQ' => 'E02006680',
        '8DR' => 'E02006678',
        '8DS' => 'E02006678',
        '8DT' => 'E02006678',
        '8DU' => 'E02006678',
        '8DW' => 'E02006678',
        '8DX' => 'E02006678',
        '8DY' => 'E02006680',
        '8DZ' => 'E02006680',
        '8EA' => 'E02006680',
        '8EB' => 'E02006678',
        '8ED' => 'E02006680',
        '8EE' => 'E02006679',
        '8EF' => 'E02006679',
        '8EG' => 'E02006679',
        '8EH' => 'E02006679',
        '8EJ' => 'E02006679',
        '8EL' => 'E02006679',
        '8EN' => 'E02006679',
        '8EP' => 'E02006679',
        '8EQ' => 'E02006679',
        '8ER' => 'E02006679',
        '8ES' => 'E02006679',
        '8ET' => 'E02006679',
        '8EU' => 'E02006679',
        '8EW' => 'E02006679',
        '8EX' => 'E02006679',
        '8EY' => 'E02006679',
        '8EZ' => 'E02006679',
        '8FA' => 'E02006679',
        '8FB' => 'E02006678',
        '8FD' => 'E02006678',
        '8FE' => 'E02006678',
        '8FF' => 'E02006678',
        '8FG' => 'E02006678',
        '8FH' => 'E02006680',
        '8FJ' => 'E02006679',
        '8FL' => 'E02006679',
        '8FN' => 'E02006678',
        '8FP' => 'E02006678',
        '8FQ' => 'E02006679',
        '8FR' => 'E02006678',
        '8GQ' => 'E02006680',
        '8HA' => 'E02006679',
        '8HB' => 'E02006679',
        '8HD' => 'E02006679',
        '8HE' => 'E02006679',
        '8HF' => 'E02006679',
        '8HG' => 'E02006679',
        '8HH' => 'E02006679',
        '8HJ' => 'E02006679',
        '8HL' => 'E02006679',
        '8HN' => 'E02006679',
        '8HP' => 'E02006679',
        '8HQ' => 'E02006679',
        '8HR' => 'E02006679',
        '8HS' => 'E02006679',
        '8HT' => 'E02006659',
        '8HU' => 'E02006679',
        '8HW' => 'E02006679',
        '8HX' => 'E02006679',
        '8HY' => 'E02006679',
        '8HZ' => 'E02006679',
        '8JA' => 'E02006679',
        '8JB' => 'E02006679',
        '8JD' => 'E02006679',
        '8JE' => 'E02006679',
        '8JG' => 'E02006679',
        '8JH' => 'E02006679',
        '8JJ' => 'E02006679',
        '8JL' => 'E02006679',
        '8JN' => 'E02006679',
        '8JP' => 'E02006679',
        '8JQ' => 'E02006679',
        '8JR' => 'E02006679',
        '8JS' => 'E02006679',
        '8JT' => 'E02006679',
        '8JU' => 'E02006679',
        '8JW' => 'E02006679',
        '8JX' => 'E02006679',
        '8JY' => 'E02006679',
        '8JZ' => 'E02006679',
        '8LA' => 'E02006679',
        '8LB' => 'E02006679',
        '8LD' => 'E02006679',
        '8LE' => 'E02006679',
        '8LG' => 'E02006680',
        '8LH' => 'E02006679',
        '8LJ' => 'E02006679',
        '8LL' => 'E02006679',
        '8LN' => 'E02006679',
        '8LP' => 'E02006679',
        '8LQ' => 'E02006680',
        '8LR' => 'E02006679',
        '8LS' => 'E02006679',
        '8LT' => 'E02006679',
        '8LU' => 'E02006679',
        '8LW' => 'E02006679',
        '8LX' => 'E02006679',
        '8LY' => 'E02006679',
        '8LZ' => 'E02006679',
        '8NA' => 'E02006679',
        '8NB' => 'E02006679',
        '8ND' => 'E02006679',
        '8NE' => 'E02006679',
        '8NF' => 'E02006679',
        '8NG' => 'E02006679',
        '8NH' => 'E02006679',
        '8NJ' => 'E02006679',
        '8NL' => 'E02006679',
        '8NN' => 'E02006679',
        '8NP' => 'E02006679',
        '8NQ' => 'E02006679',
        '8NR' => 'E02006679',
        '8NT' => 'E02006679',
        '8NU' => 'E02006679',
        '8NW' => 'E02006679',
        '8NX' => 'E02006679',
        '8NY' => 'E02006679',
        '8NZ' => 'E02006679',
        '8PA' => 'E02006679',
        '8PB' => 'E02006679',
        '8PD' => 'E02006679',
        '8PH' => 'E02006679',
        '8PJ' => 'E02006679',
        '8PL' => 'E02006679',
        '8PN' => 'E02006679',
        '8PP' => 'E02006679',
        '8PR' => 'E02006679',
        '8PS' => 'E02006679',
        '8PT' => 'E02006679',
        '8PU' => 'E02006679',
        '8PW' => 'E02006679',
        '8PX' => 'E02006679',
        '8PY' => 'E02006679',
        '8QB' => 'E02006679',
        '8QD' => 'E02006679',
        '8QE' => 'E02006679',
        '8QF' => 'E02006679',
        '8QG' => 'E02006679',
        '8QH' => 'E02006679',
        '8QJ' => 'E02006679',
        '8QL' => 'E02006679',
        '8QN' => 'E02006679',
        '8QP' => 'E02006679',
        '8QQ' => 'E02006679',
        '8QR' => 'E02006679',
        '8QS' => 'E02006679',
        '8QT' => 'E02006679',
        '8QU' => 'E02006679',
        '8QW' => 'E02006679',
        '8QX' => 'E02006679',
        '8QY' => 'E02006679',
        '8QZ' => 'E02006679',
        '8RA' => 'E02006679',
        '8RB' => 'E02006679',
        '8RD' => 'E02006679',
        '8RE' => 'E02006679',
        '8RF' => 'E02006679',
        '8RG' => 'E02006679',
        '8RH' => 'E02006679',
        '8RJ' => 'E02006679',
        '8RL' => 'E02006679',
        '8RN' => 'E02006679',
        '8RP' => 'E02006678',
        '8RQ' => 'E02006679',
        '8RR' => 'E02006678',
        '8RS' => 'E02006679',
        '8RT' => 'E02006679',
        '8RU' => 'E02006679',
        '8RW' => 'E02006679',
        '8RX' => 'E02006679',
        '8RY' => 'E02006679',
        '8SA' => 'E02006680',
        '8SB' => 'E02006679',
        '8SD' => 'E02006679',
        '8SE' => 'E02006679',
        '8SF' => 'E02006679',
        '8SG' => 'E02006679',
        '8SH' => 'E02006679',
        '8SJ' => 'E02006680',
        '8SL' => 'E02006679',
        '8SP' => 'E02006680',
        '8SQ' => 'E02006679',
        '8SR' => 'E02006680',
        '8SS' => 'E02006680',
        '8ST' => 'E02006680',
        '8SU' => 'E02006680',
        '8SW' => 'E02006679',
        '8SX' => 'E02006680',
        '8SZ' => 'E02006679',
        '8TA' => 'E02006680',
        '8TB' => 'E02006680',
        '8WA' => 'E02006680',
        '8WB' => 'E02006680',
        '8WD' => 'E02006680',
        '8WG' => 'E02006680',
        '8WQ' => 'E02006680',
        '8WS' => 'E02006680',
        '8WT' => 'E02006680',
        '8WU' => 'E02006680',
        '8WW' => 'E02006680',
        '8WZ' => 'E02006680',
        '8XA' => 'E02006680',
        '8XB' => 'E02006679',
        '8YA' => 'E02006680',
        '8ZQ' => 'E02006680',
        '8ZX' => 'E02006680',
        '9AB' => 'E02006680',
        '9AD' => 'E02006680',
        '9AE' => 'E02006680',
        '9AG' => 'E02006680',
        '9AH' => 'E02006680',
        '9AJ' => 'E02006680',
        '9AL' => 'E02006680',
        '9AP' => 'E02006680',
        '9AQ' => 'E02006680',
        '9AS' => 'E02006680',
        '9AT' => 'E02006680',
        '9AU' => 'E02006680',
        '9AW' => 'E02006680',
        '9AX' => 'E02006680',
        '9AY' => 'E02006680',
        '9AZ' => 'E02006680',
        '9BA' => 'E02006680',
        '9BB' => 'E02006680',
        '9BD' => 'E02006680',
        '9BE' => 'E02006680',
        '9BF' => 'E02006680',
        '9BG' => 'E02006680',
        '9BJ' => 'E02006680',
        '9BL' => 'E02006680',
        '9BN' => 'E02006680',
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
