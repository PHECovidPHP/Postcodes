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
final class ME20
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02005151',
        '6AB' => 'E02005151',
        '6AD' => 'E02005153',
        '6AE' => 'E02005153',
        '6AF' => 'E02005153',
        '6AG' => 'E02005153',
        '6AH' => 'E02005153',
        '6AJ' => 'E02005153',
        '6AL' => 'E02005153',
        '6AN' => 'E02005151',
        '6AP' => 'E02005153',
        '6AQ' => 'E02005153',
        '6AR' => 'E02005153',
        '6AS' => 'E02005153',
        '6AT' => 'E02005150',
        '6AU' => 'E02005153',
        '6AW' => 'E02005150',
        '6AX' => 'E02005153',
        '6AY' => 'E02005153',
        '6AZ' => 'E02005153',
        '6BA' => 'E02005153',
        '6BB' => 'E02005153',
        '6BD' => 'E02005153',
        '6BE' => 'E02005151',
        '6BF' => 'E02005151',
        '6BG' => 'E02005151',
        '6BH' => 'E02005151',
        '6BJ' => 'E02005151',
        '6BL' => 'E02005151',
        '6BN' => 'E02005151',
        '6BP' => 'E02005153',
        '6BQ' => 'E02005151',
        '6BS' => 'E02005153',
        '6BT' => 'E02005153',
        '6BU' => 'E02005153',
        '6BW' => 'E02005151',
        '6BX' => 'E02005153',
        '6BY' => 'E02005153',
        '6BZ' => 'E02005153',
        '6DA' => 'E02005153',
        '6DB' => 'E02005153',
        '6DD' => 'E02005153',
        '6DE' => 'E02005151',
        '6DF' => 'E02005153',
        '6DG' => 'E02005153',
        '6DH' => 'E02005150',
        '6DJ' => 'E02005153',
        '6DL' => 'E02005153',
        '6DN' => 'E02005153',
        '6DP' => 'E02005153',
        '6DQ' => 'E02005153',
        '6DR' => 'E02005153',
        '6DS' => 'E02005153',
        '6DT' => 'E02005153',
        '6DU' => 'E02005153',
        '6DW' => 'E02005153',
        '6DX' => 'E02005153',
        '6DY' => 'E02005153',
        '6DZ' => 'E02005153',
        '6EA' => 'E02005153',
        '6EB' => 'E02005153',
        '6ED' => 'E02005153',
        '6EE' => 'E02005153',
        '6EF' => 'E02005153',
        '6EG' => 'E02005153',
        '6EH' => 'E02005153',
        '6EJ' => 'E02005153',
        '6EL' => 'E02005153',
        '6EN' => 'E02005153',
        '6EP' => 'E02005153',
        '6EQ' => 'E02005153',
        '6ER' => 'E02005153',
        '6ES' => 'E02005153',
        '6ET' => 'E02005153',
        '6EU' => 'E02005153',
        '6EW' => 'E02005153',
        '6EX' => 'E02005153',
        '6EY' => 'E02005153',
        '6EZ' => 'E02005153',
        '6FA' => 'E02005151',
        '6FB' => 'E02005150',
        '6FD' => 'E02005151',
        '6FE' => 'E02005151',
        '6FF' => 'E02005151',
        '6FG' => 'E02005151',
        '6FH' => 'E02005153',
        '6FJ' => 'E02005153',
        '6FN' => 'E02005153',
        '6FP' => 'E02005153',
        '6FQ' => 'E02005151',
        '6FR' => 'E02005151',
        '6FS' => 'E02005153',
        '6FT' => 'E02005151',
        '6FU' => 'E02005151',
        '6FW' => 'E02005151',
        '6FX' => 'E02005151',
        '6FY' => 'E02005151',
        '6GA' => 'E02005151',
        '6GB' => 'E02005151',
        '6GD' => 'E02005151',
        '6GE' => 'E02005151',
        '6GF' => 'E02005151',
        '6GJ' => 'E02005151',
        '6GL' => 'E02005151',
        '6GN' => 'E02005151',
        '6GP' => 'E02005151',
        '6GQ' => 'E02005151',
        '6GR' => 'E02005150',
        '6GS' => 'E02005151',
        '6GT' => 'E02005151',
        '6GU' => 'E02005150',
        '6GW' => 'E02005150',
        '6GX' => 'E02005150',
        '6GY' => 'E02005151',
        '6GZ' => 'E02005151',
        '6HA' => 'E02005153',
        '6HB' => 'E02005153',
        '6HD' => 'E02005153',
        '6HE' => 'E02005153',
        '6HF' => 'E02005153',
        '6HG' => 'E02005151',
        '6HH' => 'E02005153',
        '6HJ' => 'E02005151',
        '6HL' => 'E02006833',
        '6HN' => 'E02005151',
        '6HP' => 'E02005151',
        '6HQ' => 'E02005151',
        '6HR' => 'E02005151',
        '6HS' => 'E02005151',
        '6HT' => 'E02005151',
        '6HU' => 'E02005151',
        '6HW' => 'E02005151',
        '6HX' => 'E02005151',
        '6HY' => 'E02005151',
        '6HZ' => 'E02005151',
        '6JA' => 'E02005151',
        '6JB' => 'E02005150',
        '6JD' => 'E02005151',
        '6JE' => 'E02005151',
        '6JF' => 'E02005151',
        '6JG' => 'E02005151',
        '6JH' => 'E02005151',
        '6JJ' => 'E02005151',
        '6JL' => 'E02005151',
        '6JN' => 'E02005151',
        '6JP' => 'E02005151',
        '6JQ' => 'E02005151',
        '6JR' => 'E02005151',
        '6JS' => 'E02005151',
        '6JT' => 'E02005151',
        '6JU' => 'E02005151',
        '6JW' => 'E02005151',
        '6JX' => 'E02005151',
        '6JY' => 'E02005151',
        '6JZ' => 'E02005151',
        '6LA' => 'E02005151',
        '6LB' => 'E02005151',
        '6LD' => 'E02005151',
        '6LE' => 'E02005151',
        '6LF' => 'E02005151',
        '6LG' => 'E02005151',
        '6LH' => 'E02005151',
        '6LJ' => 'E02005151',
        '6LL' => 'E02005151',
        '6LN' => 'E02005151',
        '6LP' => 'E02005151',
        '6LQ' => 'E02005151',
        '6LR' => 'E02005151',
        '6LS' => 'E02005151',
        '6LT' => 'E02005151',
        '6LU' => 'E02005151',
        '6LW' => 'E02005151',
        '6LX' => 'E02005151',
        '6LY' => 'E02005151',
        '6LZ' => 'E02005151',
        '6NA' => 'E02005151',
        '6NB' => 'E02005151',
        '6ND' => 'E02005151',
        '6NE' => 'E02005151',
        '6NF' => 'E02005151',
        '6NG' => 'E02005151',
        '6NH' => 'E02005151',
        '6NJ' => 'E02005151',
        '6NL' => 'E02005151',
        '6NN' => 'E02005153',
        '6NP' => 'E02005151',
        '6NQ' => 'E02005151',
        '6NR' => 'E02005153',
        '6NS' => 'E02005153',
        '6NT' => 'E02005153',
        '6NU' => 'E02005153',
        '6NW' => 'E02005153',
        '6NX' => 'E02005150',
        '6NY' => 'E02005151',
        '6NZ' => 'E02005151',
        '6PA' => 'E02005153',
        '6PB' => 'E02005153',
        '6PD' => 'E02005153',
        '6PE' => 'E02005153',
        '6PF' => 'E02005153',
        '6PG' => 'E02005153',
        '6PH' => 'E02005153',
        '6PJ' => 'E02005153',
        '6PL' => 'E02005153',
        '6PN' => 'E02005151',
        '6PP' => 'E02005151',
        '6PQ' => 'E02005153',
        '6PR' => 'E02005151',
        '6PS' => 'E02005151',
        '6PT' => 'E02005151',
        '6PU' => 'E02005151',
        '6PW' => 'E02005151',
        '6PX' => 'E02005151',
        '6PY' => 'E02005151',
        '6PZ' => 'E02005151',
        '6QA' => 'E02005151',
        '6QB' => 'E02005151',
        '6QD' => 'E02005151',
        '6QE' => 'E02005151',
        '6QF' => 'E02005151',
        '6QG' => 'E02005151',
        '6QH' => 'E02005151',
        '6QJ' => 'E02005151',
        '6QL' => 'E02005151',
        '6QN' => 'E02005151',
        '6QP' => 'E02005153',
        '6QQ' => 'E02005151',
        '6QR' => 'E02005153',
        '6QS' => 'E02005153',
        '6QT' => 'E02005150',
        '6QU' => 'E02005151',
        '6QW' => 'E02005151',
        '6QX' => 'E02005153',
        '6QY' => 'E02005151',
        '6QZ' => 'E02005151',
        '6RA' => 'E02005151',
        '6RB' => 'E02005151',
        '6RD' => 'E02005151',
        '6RE' => 'E02005151',
        '6RF' => 'E02005151',
        '6RG' => 'E02005151',
        '6RH' => 'E02005151',
        '6RJ' => 'E02005151',
        '6RL' => 'E02005151',
        '6RN' => 'E02005151',
        '6RP' => 'E02005151',
        '6RQ' => 'E02005151',
        '6RR' => 'E02005151',
        '6RS' => 'E02005151',
        '6RT' => 'E02005151',
        '6RU' => 'E02005151',
        '6RW' => 'E02005151',
        '6RX' => 'E02005151',
        '6RY' => 'E02005151',
        '6RZ' => 'E02005151',
        '6SA' => 'E02005151',
        '6SB' => 'E02005151',
        '6SD' => 'E02005150',
        '6SE' => 'E02005151',
        '6SF' => 'E02005151',
        '6SG' => 'E02005151',
        '6SH' => 'E02005151',
        '6SJ' => 'E02005151',
        '6SL' => 'E02005151',
        '6SN' => 'E02005153',
        '6SP' => 'E02005153',
        '6SQ' => 'E02005153',
        '6SR' => 'E02005151',
        '6SS' => 'E02005151',
        '6ST' => 'E02005151',
        '6SU' => 'E02006833',
        '6SW' => 'E02005151',
        '6SX' => 'E02005153',
        '6SY' => 'E02005153',
        '6SZ' => 'E02005153',
        '6TB' => 'E02005151',
        '6TD' => 'E02005151',
        '6TE' => 'E02005151',
        '6TF' => 'E02005150',
        '6TG' => 'E02005151',
        '6TH' => 'E02005151',
        '6TJ' => 'E02005151',
        '6TL' => 'E02005151',
        '6TN' => 'E02005151',
        '6TP' => 'E02005151',
        '6TQ' => 'E02005151',
        '6TR' => 'E02005151',
        '6TS' => 'E02005151',
        '6TT' => 'E02005151',
        '6TU' => 'E02005151',
        '6TW' => 'E02005151',
        '6TX' => 'E02005151',
        '6TY' => 'E02005151',
        '6TZ' => 'E02005151',
        '6UA' => 'E02005151',
        '6UB' => 'E02005151',
        '6UD' => 'E02005151',
        '6UE' => 'E02005151',
        '6UF' => 'E02005151',
        '6UG' => 'E02005151',
        '6UH' => 'E02005151',
        '6UJ' => 'E02005151',
        '6UL' => 'E02005151',
        '6UN' => 'E02005151',
        '6UP' => 'E02005151',
        '6UQ' => 'E02005151',
        '6UR' => 'E02005151',
        '6US' => 'E02005151',
        '6UT' => 'E02005151',
        '6UU' => 'E02005150',
        '6UW' => 'E02005151',
        '6UX' => 'E02005150',
        '6UY' => 'E02005151',
        '6UZ' => 'E02005151',
        '6WA' => 'E02005150',
        '6WB' => 'E02005150',
        '6WD' => 'E02005151',
        '6WE' => 'E02005151',
        '6WF' => 'E02005151',
        '6WG' => 'E02005150',
        '6WH' => 'E02005150',
        '6WJ' => 'E02005151',
        '6WL' => 'E02005151',
        '6WN' => 'E02005150',
        '6WP' => 'E02005151',
        '6WQ' => 'E02005151',
        '6WR' => 'E02005150',
        '6WS' => 'E02005150',
        '6WT' => 'E02005151',
        '6WW' => 'E02005150',
        '6WX' => 'E02005150',
        '6WY' => 'E02005150',
        '6WZ' => 'E02005150',
        '6XA' => 'E02005150',
        '6XB' => 'E02005151',
        '6XD' => 'E02005150',
        '6XE' => 'E02005153',
        '6XF' => 'E02005151',
        '6XG' => 'E02005151',
        '6XH' => 'E02005151',
        '6XJ' => 'E02005151',
        '6XL' => 'E02005151',
        '6XN' => 'E02005151',
        '6XP' => 'E02005151',
        '6XQ' => 'E02005151',
        '6XR' => 'E02005151',
        '6XS' => 'E02005153',
        '6XT' => 'E02005151',
        '6XU' => 'E02005151',
        '6XW' => 'E02005151',
        '6XX' => 'E02005151',
        '6XY' => 'E02005150',
        '6XZ' => 'E02005150',
        '6YA' => 'E02005150',
        '6YB' => 'E02005150',
        '6YD' => 'E02005150',
        '6YE' => 'E02005150',
        '6YF' => 'E02005150',
        '6YG' => 'E02005151',
        '6YH' => 'E02005150',
        '6YL' => 'E02005150',
        '6YS' => 'E02005150',
        '6YT' => 'E02005150',
        '6YZ' => 'E02005150',
        '6ZF' => 'E02005150',
        '7AA' => 'E02005153',
        '7AB' => 'E02005149',
        '7AD' => 'E02005153',
        '7AE' => 'E02005068',
        '7AF' => 'E02005068',
        '7AG' => 'E02005068',
        '7AH' => 'E02005068',
        '7AJ' => 'E02005068',
        '7AL' => 'E02005149',
        '7AN' => 'E02005150',
        '7AP' => 'E02005149',
        '7AQ' => 'E02005149',
        '7AR' => 'E02005068',
        '7AS' => 'E02005149',
        '7AT' => 'E02005149',
        '7AU' => 'E02005149',
        '7AW' => 'E02005068',
        '7AX' => 'E02005149',
        '7AY' => 'E02005149',
        '7AZ' => 'E02005149',
        '7BA' => 'E02005149',
        '7BB' => 'E02005149',
        '7BD' => 'E02005149',
        '7BE' => 'E02005149',
        '7BF' => 'E02005149',
        '7BG' => 'E02005149',
        '7BH' => 'E02005068',
        '7BJ' => 'E02005149',
        '7BL' => 'E02005149',
        '7BN' => 'E02005149',
        '7BP' => 'E02005149',
        '7BQ' => 'E02005149',
        '7BS' => 'E02005149',
        '7BT' => 'E02005149',
        '7BU' => 'E02005068',
        '7BW' => 'E02005149',
        '7BX' => 'E02005149',
        '7BY' => 'E02005149',
        '7BZ' => 'E02005149',
        '7DA' => 'E02005149',
        '7DB' => 'E02005153',
        '7DD' => 'E02005149',
        '7DE' => 'E02005149',
        '7DF' => 'E02005149',
        '7DG' => 'E02005149',
        '7DH' => 'E02005149',
        '7DJ' => 'E02005068',
        '7DL' => 'E02005153',
        '7DN' => 'E02005068',
        '7DP' => 'E02005149',
        '7DQ' => 'E02005149',
        '7DR' => 'E02005149',
        '7DS' => 'E02005149',
        '7DT' => 'E02005068',
        '7DU' => 'E02005149',
        '7DW' => 'E02005068',
        '7DX' => 'E02005149',
        '7DY' => 'E02005150',
        '7DZ' => 'E02005149',
        '7EA' => 'E02005149',
        '7EB' => 'E02005149',
        '7ED' => 'E02005149',
        '7EE' => 'E02005149',
        '7EF' => 'E02005149',
        '7EG' => 'E02005149',
        '7EH' => 'E02005149',
        '7EJ' => 'E02005149',
        '7EL' => 'E02005149',
        '7EN' => 'E02005149',
        '7EP' => 'E02005149',
        '7EQ' => 'E02005149',
        '7ER' => 'E02005149',
        '7ES' => 'E02005149',
        '7ET' => 'E02005149',
        '7EU' => 'E02005149',
        '7EW' => 'E02005149',
        '7EX' => 'E02005149',
        '7EY' => 'E02005149',
        '7EZ' => 'E02005149',
        '7FA' => 'E02005150',
        '7FB' => 'E02005149',
        '7FD' => 'E02005149',
        '7FE' => 'E02005153',
        '7FF' => 'E02005149',
        '7FG' => 'E02005153',
        '7FH' => 'E02005149',
        '7FJ' => 'E02005153',
        '7FL' => 'E02005153',
        '7FN' => 'E02005149',
        '7FP' => 'E02005149',
        '7FQ' => 'E02005153',
        '7FR' => 'E02005153',
        '7FS' => 'E02005153',
        '7FT' => 'E02005153',
        '7FU' => 'E02005153',
        '7FW' => 'E02005153',
        '7FX' => 'E02005153',
        '7FY' => 'E02005153',
        '7GA' => 'E02005149',
        '7GB' => 'E02005149',
        '7GD' => 'E02005153',
        '7GE' => 'E02005153',
        '7GF' => 'E02005153',
        '7GJ' => 'E02005153',
        '7GL' => 'E02005150',
        '7GN' => 'E02005153',
        '7GP' => 'E02005153',
        '7GQ' => 'E02005153',
        '7GR' => 'E02005151',
        '7GS' => 'E02005153',
        '7GT' => 'E02005153',
        '7GU' => 'E02005153',
        '7GW' => 'E02005153',
        '7GX' => 'E02005153',
        '7GY' => 'E02005153',
        '7GZ' => 'E02005153',
        '7HA' => 'E02005149',
        '7HB' => 'E02005068',
        '7HD' => 'E02005153',
        '7HE' => 'E02005149',
        '7HF' => 'E02005149',
        '7HG' => 'E02005149',
        '7HH' => 'E02005149',
        '7HJ' => 'E02005149',
        '7HL' => 'E02005149',
        '7HN' => 'E02005149',
        '7HP' => 'E02005153',
        '7HQ' => 'E02005149',
        '7HR' => 'E02005153',
        '7HS' => 'E02005149',
        '7HT' => 'E02005149',
        '7HU' => 'E02005149',
        '7HW' => 'E02005149',
        '7HX' => 'E02005149',
        '7HY' => 'E02005149',
        '7HZ' => 'E02005149',
        '7JA' => 'E02005149',
        '7JB' => 'E02005149',
        '7JD' => 'E02005149',
        '7JE' => 'E02005149',
        '7JF' => 'E02005149',
        '7JG' => 'E02005153',
        '7JH' => 'E02005153',
        '7JJ' => 'E02005149',
        '7JL' => 'E02005149',
        '7JN' => 'E02005149',
        '7JP' => 'E02005149',
        '7JQ' => 'E02005149',
        '7JR' => 'E02005149',
        '7JS' => 'E02005149',
        '7JT' => 'E02005149',
        '7JU' => 'E02005153',
        '7JW' => 'E02005149',
        '7JX' => 'E02005153',
        '7JY' => 'E02005153',
        '7JZ' => 'E02005149',
        '7LA' => 'E02005153',
        '7LB' => 'E02005153',
        '7LD' => 'E02005153',
        '7LE' => 'E02005153',
        '7LF' => 'E02005153',
        '7LG' => 'E02005153',
        '7LH' => 'E02005153',
        '7LJ' => 'E02005153',
        '7LL' => 'E02005149',
        '7LN' => 'E02005149',
        '7LP' => 'E02005149',
        '7LQ' => 'E02005153',
        '7LR' => 'E02005153',
        '7LS' => 'E02005153',
        '7LT' => 'E02005153',
        '7LU' => 'E02005153',
        '7LW' => 'E02005149',
        '7LX' => 'E02005153',
        '7LY' => 'E02005153',
        '7LZ' => 'E02005153',
        '7NA' => 'E02005153',
        '7NB' => 'E02005153',
        '7ND' => 'E02005153',
        '7NE' => 'E02005150',
        '7NF' => 'E02005153',
        '7NG' => 'E02005153',
        '7NH' => 'E02005153',
        '7NJ' => 'E02005153',
        '7NL' => 'E02005153',
        '7NN' => 'E02005153',
        '7NP' => 'E02005153',
        '7NQ' => 'E02005153',
        '7NR' => 'E02005153',
        '7NS' => 'E02005153',
        '7NT' => 'E02005153',
        '7NU' => 'E02005153',
        '7NW' => 'E02005153',
        '7NX' => 'E02005153',
        '7NY' => 'E02005153',
        '7NZ' => 'E02005153',
        '7PA' => 'E02005151',
        '7PB' => 'E02005151',
        '7PD' => 'E02005151',
        '7PE' => 'E02005151',
        '7PF' => 'E02005151',
        '7PG' => 'E02005150',
        '7PH' => 'E02005151',
        '7PJ' => 'E02005153',
        '7PL' => 'E02005153',
        '7PN' => 'E02005153',
        '7PP' => 'E02005153',
        '7PQ' => 'E02005149',
        '7PR' => 'E02005149',
        '7PS' => 'E02005153',
        '7PT' => 'E02005153',
        '7PU' => 'E02005153',
        '7PW' => 'E02005151',
        '7PX' => 'E02005153',
        '7PY' => 'E02005149',
        '7PZ' => 'E02005153',
        '7QA' => 'E02005153',
        '7QB' => 'E02005153',
        '7QD' => 'E02005153',
        '7QE' => 'E02005153',
        '7QF' => 'E02005153',
        '7QG' => 'E02005153',
        '7QH' => 'E02005153',
        '7QJ' => 'E02005153',
        '7QL' => 'E02005153',
        '7QN' => 'E02005149',
        '7QP' => 'E02005149',
        '7QQ' => 'E02005153',
        '7QR' => 'E02005149',
        '7QS' => 'E02005149',
        '7QT' => 'E02005153',
        '7QU' => 'E02005153',
        '7QW' => 'E02005149',
        '7QX' => 'E02005153',
        '7QY' => 'E02005153',
        '7QZ' => 'E02005153',
        '7RA' => 'E02005153',
        '7RB' => 'E02005150',
        '7RD' => 'E02005150',
        '7RE' => 'E02005153',
        '7RF' => 'E02005153',
        '7RG' => 'E02005149',
        '7RH' => 'E02005149',
        '7RJ' => 'E02005149',
        '7RL' => 'E02005149',
        '7RN' => 'E02005153',
        '7RP' => 'E02005153',
        '7RQ' => 'E02005149',
        '7RR' => 'E02005153',
        '7RS' => 'E02005153',
        '7RT' => 'E02005150',
        '7RU' => 'E02005153',
        '7RW' => 'E02005153',
        '7RX' => 'E02005153',
        '7RY' => 'E02005153',
        '7RZ' => 'E02005153',
        '7SA' => 'E02005068',
        '7SB' => 'E02005149',
        '7SD' => 'E02005153',
        '7SE' => 'E02005153',
        '7SF' => 'E02005153',
        '7SG' => 'E02005153',
        '7SH' => 'E02005149',
        '7SJ' => 'E02005150',
        '7SL' => 'E02005153',
        '7SN' => 'E02005149',
        '7SP' => 'E02005153',
        '7SQ' => 'E02005149',
        '7SR' => 'E02005068',
        '7SS' => 'E02005149',
        '7ST' => 'E02005068',
        '7SU' => 'E02005153',
        '7SW' => 'E02005150',
        '7SX' => 'E02005153',
        '7SY' => 'E02005068',
        '7SZ' => 'E02005153',
        '7TA' => 'E02005149',
        '7TB' => 'E02005149',
        '7TD' => 'E02005150',
        '7TE' => 'E02005149',
        '7TF' => 'E02005149',
        '7TG' => 'E02005150',
        '7TH' => 'E02005153',
        '7TJ' => 'E02005150',
        '7TL' => 'E02005151',
        '7TN' => 'E02005151',
        '7TP' => 'E02005153',
        '7TQ' => 'E02005153',
        '7TR' => 'E02005153',
        '7TS' => 'E02005150',
        '7TT' => 'E02005149',
        '7TU' => 'E02005150',
        '7TW' => 'E02005151',
        '7TX' => 'E02005068',
        '7TY' => 'E02005149',
        '7TZ' => 'E02005068',
        '7UA' => 'E02005153',
        '7UB' => 'E02005153',
        '7UD' => 'E02005153',
        '7UE' => 'E02005153',
        '7UF' => 'E02005149',
        '7UG' => 'E02005153',
        '7UH' => 'E02005151',
        '7UJ' => 'E02005150',
        '7UL' => 'E02005150',
        '7UN' => 'E02005153',
        '7UP' => 'E02005150',
        '7UQ' => 'E02005153',
        '7UR' => 'E02005150',
        '7US' => 'E02005068',
        '7UT' => 'E02005149',
        '7UW' => 'E02005149',
        '7UX' => 'E02005153',
        '7UY' => 'E02005149',
        '7WA' => 'E02005150',
        '7WB' => 'E02005150',
        '7WE' => 'E02005150',
        '7WF' => 'E02005150',
        '7WG' => 'E02005150',
        '7WH' => 'E02005150',
        '7WJ' => 'E02005150',
        '7WL' => 'E02005150',
        '7WR' => 'E02005150',
        '7WU' => 'E02005150',
        '7WW' => 'E02005150',
        '7WX' => 'E02005149',
        '7WY' => 'E02005150',
        '7WZ' => 'E02005153',
        '7XA' => 'E02005068',
        '7XB' => 'E02005153',
        '7XD' => 'E02005149',
        '7XE' => 'E02005068',
        '7XF' => 'E02005150',
        '7XG' => 'E02005150',
        '7XQ' => 'E02005149',
        '7XX' => 'E02005153',
        '7YA' => 'E02005150',
        '7YB' => 'E02005150',
        '7YE' => 'E02005150',
        '7YX' => 'E02005150',
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
