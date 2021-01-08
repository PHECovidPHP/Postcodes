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
final class IP25
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02005511',
        '6AB' => 'E02005511',
        '6AD' => 'E02005511',
        '6AE' => 'E02005511',
        '6AF' => 'E02005511',
        '6AG' => 'E02005511',
        '6AH' => 'E02005511',
        '6AJ' => 'E02005511',
        '6AL' => 'E02005511',
        '6AN' => 'E02005511',
        '6AP' => 'E02005511',
        '6AQ' => 'E02005511',
        '6AR' => 'E02005511',
        '6AS' => 'E02005511',
        '6AT' => 'E02005511',
        '6AU' => 'E02005511',
        '6AW' => 'E02005511',
        '6AX' => 'E02005511',
        '6AY' => 'E02005511',
        '6AZ' => 'E02005511',
        '6BA' => 'E02005511',
        '6BB' => 'E02005511',
        '6BD' => 'E02005511',
        '6BE' => 'E02005511',
        '6BF' => 'E02005511',
        '6BG' => 'E02005511',
        '6BH' => 'E02005511',
        '6BJ' => 'E02005511',
        '6BL' => 'E02005511',
        '6BN' => 'E02005511',
        '6BP' => 'E02005511',
        '6BQ' => 'E02005511',
        '6BS' => 'E02005511',
        '6BT' => 'E02005511',
        '6BU' => 'E02005511',
        '6BW' => 'E02005511',
        '6BX' => 'E02005511',
        '6BY' => 'E02005511',
        '6BZ' => 'E02005511',
        '6DA' => 'E02005511',
        '6DB' => 'E02005511',
        '6DD' => 'E02005511',
        '6DE' => 'E02005511',
        '6DF' => 'E02005511',
        '6DG' => 'E02005511',
        '6DH' => 'E02005511',
        '6DJ' => 'E02005511',
        '6DL' => 'E02005511',
        '6DN' => 'E02005511',
        '6DP' => 'E02005511',
        '6DQ' => 'E02005511',
        '6DR' => 'E02005511',
        '6DS' => 'E02005511',
        '6DT' => 'E02005511',
        '6DU' => 'E02005511',
        '6DW' => 'E02005511',
        '6DX' => 'E02005511',
        '6DY' => 'E02005514',
        '6DZ' => 'E02005511',
        '6EA' => 'E02005511',
        '6EB' => 'E02005511',
        '6ED' => 'E02005511',
        '6EE' => 'E02005511',
        '6EF' => 'E02005511',
        '6EG' => 'E02005511',
        '6EH' => 'E02005511',
        '6EJ' => 'E02005511',
        '6EL' => 'E02005511',
        '6EN' => 'E02005511',
        '6EP' => 'E02005511',
        '6EQ' => 'E02005511',
        '6ER' => 'E02005511',
        '6ES' => 'E02005511',
        '6ET' => 'E02005511',
        '6EU' => 'E02005511',
        '6EW' => 'E02005511',
        '6EX' => 'E02005511',
        '6EY' => 'E02005511',
        '6EZ' => 'E02005511',
        '6FA' => 'E02005511',
        '6FB' => 'E02005511',
        '6FD' => 'E02005511',
        '6FE' => 'E02005511',
        '6FF' => 'E02005512',
        '6FG' => 'E02005511',
        '6FH' => 'E02005512',
        '6FJ' => 'E02005511',
        '6FL' => 'E02005512',
        '6FN' => 'E02005512',
        '6FP' => 'E02005512',
        '6FQ' => 'E02005512',
        '6FR' => 'E02005512',
        '6FS' => 'E02005512',
        '6FT' => 'E02005512',
        '6FU' => 'E02005512',
        '6FW' => 'E02005512',
        '6FX' => 'E02005512',
        '6FY' => 'E02005512',
        '6FZ' => 'E02005512',
        '6GA' => 'E02005511',
        '6GB' => 'E02005512',
        '6GD' => 'E02005511',
        '6GE' => 'E02005511',
        '6GF' => 'E02005512',
        '6GG' => 'E02005512',
        '6GH' => 'E02005512',
        '6GJ' => 'E02005511',
        '6GL' => 'E02005511',
        '6GN' => 'E02005511',
        '6GP' => 'E02005512',
        '6GQ' => 'E02005512',
        '6GR' => 'E02005512',
        '6GS' => 'E02005512',
        '6GT' => 'E02005512',
        '6GU' => 'E02005511',
        '6GW' => 'E02005512',
        '6GX' => 'E02005512',
        '6GY' => 'E02005512',
        '6GZ' => 'E02005512',
        '6HA' => 'E02005511',
        '6HB' => 'E02005511',
        '6HD' => 'E02005511',
        '6HE' => 'E02005511',
        '6HF' => 'E02005511',
        '6HG' => 'E02005511',
        '6HH' => 'E02005511',
        '6HJ' => 'E02005511',
        '6HL' => 'E02005511',
        '6HN' => 'E02005511',
        '6HP' => 'E02005511',
        '6HQ' => 'E02005511',
        '6HR' => 'E02005511',
        '6HS' => 'E02005511',
        '6HT' => 'E02005511',
        '6HU' => 'E02005511',
        '6HW' => 'E02005511',
        '6HX' => 'E02005511',
        '6HY' => 'E02005511',
        '6HZ' => 'E02005511',
        '6JA' => 'E02005511',
        '6JB' => 'E02005511',
        '6JD' => 'E02005512',
        '6JE' => 'E02005512',
        '6JF' => 'E02005512',
        '6JG' => 'E02005512',
        '6JH' => 'E02005512',
        '6JJ' => 'E02005512',
        '6JL' => 'E02005512',
        '6JN' => 'E02005512',
        '6JP' => 'E02005512',
        '6JQ' => 'E02005512',
        '6JR' => 'E02005512',
        '6JS' => 'E02005512',
        '6JT' => 'E02005511',
        '6JU' => 'E02005511',
        '6JW' => 'E02005512',
        '6JX' => 'E02005511',
        '6JY' => 'E02005512',
        '6JZ' => 'E02005511',
        '6LA' => 'E02005511',
        '6LB' => 'E02005511',
        '6LD' => 'E02005511',
        '6LE' => 'E02005511',
        '6LF' => 'E02005511',
        '6LG' => 'E02005511',
        '6LH' => 'E02005511',
        '6LJ' => 'E02005511',
        '6LL' => 'E02005511',
        '6LN' => 'E02005511',
        '6LP' => 'E02005511',
        '6LQ' => 'E02005511',
        '6LR' => 'E02005510',
        '6LS' => 'E02005514',
        '6LT' => 'E02005514',
        '6LU' => 'E02005514',
        '6LW' => 'E02005511',
        '6LX' => 'E02005514',
        '6LY' => 'E02005514',
        '6LZ' => 'E02005514',
        '6NA' => 'E02005511',
        '6NB' => 'E02005514',
        '6ND' => 'E02005514',
        '6NE' => 'E02005514',
        '6NF' => 'E02005514',
        '6NG' => 'E02005514',
        '6NH' => 'E02005514',
        '6NJ' => 'E02005514',
        '6NL' => 'E02005514',
        '6NN' => 'E02005514',
        '6NP' => 'E02005514',
        '6NQ' => 'E02005514',
        '6NR' => 'E02005514',
        '6NS' => 'E02005514',
        '6NT' => 'E02005514',
        '6NU' => 'E02005512',
        '6NW' => 'E02005511',
        '6NX' => 'E02005511',
        '6NY' => 'E02005512',
        '6NZ' => 'E02005512',
        '6PA' => 'E02005511',
        '6PB' => 'E02005512',
        '6PD' => 'E02005512',
        '6PE' => 'E02005511',
        '6PF' => 'E02005511',
        '6PG' => 'E02005511',
        '6PH' => 'E02005511',
        '6PJ' => 'E02005511',
        '6PL' => 'E02005511',
        '6PN' => 'E02005511',
        '6PP' => 'E02005512',
        '6PQ' => 'E02005511',
        '6PR' => 'E02005512',
        '6PS' => 'E02005512',
        '6PT' => 'E02005512',
        '6PU' => 'E02005512',
        '6PW' => 'E02005512',
        '6PX' => 'E02005512',
        '6PY' => 'E02005512',
        '6PZ' => 'E02005512',
        '6QA' => 'E02005512',
        '6QB' => 'E02005512',
        '6QD' => 'E02005512',
        '6QE' => 'E02005512',
        '6QF' => 'E02005512',
        '6QG' => 'E02005512',
        '6QH' => 'E02005512',
        '6QJ' => 'E02005512',
        '6QL' => 'E02005512',
        '6QN' => 'E02005512',
        '6QP' => 'E02005512',
        '6QQ' => 'E02005512',
        '6QR' => 'E02005512',
        '6QS' => 'E02005512',
        '6QT' => 'E02005512',
        '6QU' => 'E02005512',
        '6QW' => 'E02005512',
        '6QX' => 'E02005512',
        '6QY' => 'E02005511',
        '6QZ' => 'E02005511',
        '6RA' => 'E02005511',
        '6RB' => 'E02005511',
        '6RD' => 'E02005511',
        '6RE' => 'E02005511',
        '6RF' => 'E02005511',
        '6RG' => 'E02005512',
        '6RH' => 'E02005512',
        '6RJ' => 'E02005511',
        '6RL' => 'E02005512',
        '6RN' => 'E02005512',
        '6RP' => 'E02005511',
        '6RQ' => 'E02005512',
        '6RR' => 'E02005512',
        '6RS' => 'E02005512',
        '6RT' => 'E02005512',
        '6RU' => 'E02005512',
        '6RW' => 'E02005512',
        '6RX' => 'E02005512',
        '6RY' => 'E02005512',
        '6RZ' => 'E02005512',
        '6SA' => 'E02005512',
        '6SB' => 'E02005512',
        '6SD' => 'E02005512',
        '6SE' => 'E02005512',
        '6SF' => 'E02005512',
        '6SG' => 'E02005512',
        '6SH' => 'E02005512',
        '6SJ' => 'E02005512',
        '6SL' => 'E02005512',
        '6SN' => 'E02005512',
        '6SP' => 'E02005512',
        '6SQ' => 'E02005512',
        '6SR' => 'E02005511',
        '6SS' => 'E02005512',
        '6ST' => 'E02005512',
        '6SU' => 'E02005512',
        '6SW' => 'E02005512',
        '6SX' => 'E02005512',
        '6SY' => 'E02005508',
        '6SZ' => 'E02005512',
        '6TA' => 'E02005512',
        '6TB' => 'E02005511',
        '6TD' => 'E02005512',
        '6TE' => 'E02005512',
        '6TF' => 'E02005512',
        '6TG' => 'E02005512',
        '6TH' => 'E02005512',
        '6TJ' => 'E02005512',
        '6TL' => 'E02005512',
        '6TN' => 'E02005511',
        '6TP' => 'E02005511',
        '6TQ' => 'E02005511',
        '6TR' => 'E02005512',
        '6TS' => 'E02005511',
        '6TT' => 'E02005511',
        '6TU' => 'E02005511',
        '6TW' => 'E02005511',
        '6TX' => 'E02005511',
        '6TY' => 'E02005511',
        '6TZ' => 'E02005511',
        '6UA' => 'E02005511',
        '6UB' => 'E02005511',
        '6UD' => 'E02005511',
        '6UE' => 'E02005511',
        '6UF' => 'E02005511',
        '6UG' => 'E02005512',
        '6UH' => 'E02005511',
        '6UJ' => 'E02005511',
        '6UL' => 'E02005511',
        '6UN' => 'E02005511',
        '6UP' => 'E02005511',
        '6UQ' => 'E02005512',
        '6UR' => 'E02005511',
        '6US' => 'E02005512',
        '6UT' => 'E02005511',
        '6UU' => 'E02005511',
        '6UW' => 'E02005511',
        '6UX' => 'E02005511',
        '6UY' => 'E02005511',
        '6UZ' => 'E02005511',
        '6WA' => 'E02005511',
        '6WB' => 'E02005511',
        '6WD' => 'E02005511',
        '6WE' => 'E02005511',
        '6WF' => 'E02005512',
        '6WG' => 'E02005518',
        '6WH' => 'E02005518',
        '6WJ' => 'E02005518',
        '6WL' => 'E02005512',
        '6WN' => 'E02005518',
        '6WP' => 'E02005518',
        '6WQ' => 'E02005518',
        '6WR' => 'E02005511',
        '6WS' => 'E02005518',
        '6WT' => 'E02005518',
        '6WU' => 'E02005518',
        '6WW' => 'E02005518',
        '6WX' => 'E02005511',
        '6WY' => 'E02005518',
        '6WZ' => 'E02005511',
        '6XA' => 'E02005511',
        '6XB' => 'E02005511',
        '6XD' => 'E02005511',
        '6XE' => 'E02005511',
        '6XF' => 'E02005511',
        '6XG' => 'E02005511',
        '6XH' => 'E02005511',
        '6XJ' => 'E02005511',
        '6XL' => 'E02005511',
        '6XN' => 'E02005511',
        '6XP' => 'E02005511',
        '6XQ' => 'E02005511',
        '6XR' => 'E02005511',
        '6XS' => 'E02005511',
        '6XT' => 'E02005511',
        '6XU' => 'E02005512',
        '6XW' => 'E02005511',
        '6XX' => 'E02005512',
        '6XY' => 'E02005511',
        '6XZ' => 'E02005511',
        '6YA' => 'E02005511',
        '6YB' => 'E02005511',
        '6YD' => 'E02005511',
        '6YE' => 'E02005511',
        '6YF' => 'E02005511',
        '6YG' => 'E02005511',
        '6YH' => 'E02005511',
        '6YJ' => 'E02005511',
        '6YL' => 'E02005511',
        '6YN' => 'E02005511',
        '6YP' => 'E02005511',
        '6YQ' => 'E02005514',
        '6YR' => 'E02005512',
        '6YS' => 'E02005511',
        '6YT' => 'E02005511',
        '6YU' => 'E02005512',
        '6YW' => 'E02005511',
        '6YX' => 'E02005512',
        '6YY' => 'E02005511',
        '6YZ' => 'E02005512',
        '6ZA' => 'E02005511',
        '6ZB' => 'E02005511',
        '6ZD' => 'E02005512',
        '6ZE' => 'E02005511',
        '6ZF' => 'E02005511',
        '6ZH' => 'E02005511',
        '6ZJ' => 'E02005511',
        '6ZN' => 'E02005511',
        '6ZP' => 'E02005511',
        '6ZQ' => 'E02005511',
        '6ZR' => 'E02005518',
        '7AA' => 'E02005510',
        '7AB' => 'E02005510',
        '7AD' => 'E02005510',
        '7AE' => 'E02005510',
        '7AF' => 'E02005510',
        '7AG' => 'E02005510',
        '7AH' => 'E02005510',
        '7AJ' => 'E02005510',
        '7AL' => 'E02005510',
        '7AN' => 'E02005510',
        '7AP' => 'E02005510',
        '7AQ' => 'E02005510',
        '7AR' => 'E02005510',
        '7AS' => 'E02005510',
        '7AT' => 'E02005510',
        '7AU' => 'E02005510',
        '7AW' => 'E02005510',
        '7AX' => 'E02005510',
        '7AY' => 'E02005510',
        '7AZ' => 'E02005510',
        '7BA' => 'E02005510',
        '7BB' => 'E02005510',
        '7BD' => 'E02005510',
        '7BE' => 'E02005510',
        '7BF' => 'E02005510',
        '7BG' => 'E02005510',
        '7BH' => 'E02005510',
        '7BJ' => 'E02005510',
        '7BL' => 'E02005510',
        '7BN' => 'E02005510',
        '7BP' => 'E02005510',
        '7BQ' => 'E02005510',
        '7BS' => 'E02005510',
        '7BT' => 'E02005510',
        '7BU' => 'E02005510',
        '7BW' => 'E02005510',
        '7BX' => 'E02005510',
        '7BY' => 'E02005510',
        '7BZ' => 'E02005510',
        '7DA' => 'E02005510',
        '7DB' => 'E02005510',
        '7DD' => 'E02005510',
        '7DE' => 'E02005510',
        '7DF' => 'E02005518',
        '7DG' => 'E02005510',
        '7DH' => 'E02005510',
        '7DJ' => 'E02005510',
        '7DL' => 'E02005510',
        '7DN' => 'E02005510',
        '7DP' => 'E02005510',
        '7DQ' => 'E02005510',
        '7DR' => 'E02005510',
        '7DS' => 'E02005510',
        '7DT' => 'E02005510',
        '7DU' => 'E02005510',
        '7DW' => 'E02005510',
        '7DX' => 'E02005510',
        '7DY' => 'E02005510',
        '7DZ' => 'E02005510',
        '7EA' => 'E02005510',
        '7EB' => 'E02005510',
        '7ED' => 'E02005510',
        '7EE' => 'E02005510',
        '7EF' => 'E02005510',
        '7EG' => 'E02005510',
        '7EH' => 'E02005510',
        '7EJ' => 'E02005510',
        '7EL' => 'E02005510',
        '7EN' => 'E02005510',
        '7EP' => 'E02005510',
        '7EQ' => 'E02005510',
        '7ER' => 'E02005510',
        '7ES' => 'E02005510',
        '7ET' => 'E02005510',
        '7EU' => 'E02005510',
        '7EW' => 'E02005510',
        '7EX' => 'E02005510',
        '7EY' => 'E02005510',
        '7EZ' => 'E02005510',
        '7FA' => 'E02005510',
        '7FB' => 'E02005510',
        '7FD' => 'E02005510',
        '7FE' => 'E02005510',
        '7FF' => 'E02005510',
        '7FG' => 'E02005510',
        '7FH' => 'E02005508',
        '7FJ' => 'E02005510',
        '7FL' => 'E02005510',
        '7FN' => 'E02005510',
        '7GA' => 'E02005510',
        '7GB' => 'E02005510',
        '7GE' => 'E02005510',
        '7HA' => 'E02005510',
        '7HB' => 'E02005510',
        '7HD' => 'E02005510',
        '7HE' => 'E02005510',
        '7HF' => 'E02005510',
        '7HG' => 'E02005510',
        '7HH' => 'E02005510',
        '7HJ' => 'E02005510',
        '7HL' => 'E02005510',
        '7HN' => 'E02005510',
        '7HP' => 'E02005510',
        '7HQ' => 'E02005510',
        '7HR' => 'E02005510',
        '7HS' => 'E02005510',
        '7HT' => 'E02005510',
        '7HU' => 'E02005510',
        '7HW' => 'E02005510',
        '7HX' => 'E02005510',
        '7HY' => 'E02005510',
        '7HZ' => 'E02005510',
        '7JA' => 'E02005510',
        '7JB' => 'E02005510',
        '7JD' => 'E02005510',
        '7JE' => 'E02005510',
        '7JF' => 'E02005510',
        '7JG' => 'E02005510',
        '7JH' => 'E02005510',
        '7JJ' => 'E02005510',
        '7JL' => 'E02005510',
        '7JN' => 'E02005510',
        '7JP' => 'E02005510',
        '7JQ' => 'E02005510',
        '7JR' => 'E02005510',
        '7JS' => 'E02005518',
        '7JT' => 'E02005518',
        '7JU' => 'E02005510',
        '7JW' => 'E02005510',
        '7JX' => 'E02005510',
        '7JY' => 'E02005510',
        '7JZ' => 'E02005510',
        '7LA' => 'E02005510',
        '7LB' => 'E02005510',
        '7LD' => 'E02005510',
        '7LE' => 'E02005510',
        '7LF' => 'E02005510',
        '7LG' => 'E02005510',
        '7LH' => 'E02005510',
        '7LJ' => 'E02005510',
        '7LL' => 'E02005510',
        '7LN' => 'E02005510',
        '7LP' => 'E02005510',
        '7LQ' => 'E02005510',
        '7LR' => 'E02005510',
        '7LS' => 'E02005510',
        '7LT' => 'E02005510',
        '7LU' => 'E02005510',
        '7LW' => 'E02005510',
        '7LX' => 'E02005510',
        '7LY' => 'E02005510',
        '7LZ' => 'E02005510',
        '7NA' => 'E02005510',
        '7NB' => 'E02005510',
        '7ND' => 'E02005510',
        '7NE' => 'E02005510',
        '7NF' => 'E02005510',
        '7NG' => 'E02005510',
        '7NH' => 'E02005510',
        '7NJ' => 'E02005510',
        '7NL' => 'E02005510',
        '7NN' => 'E02005510',
        '7NP' => 'E02005510',
        '7NQ' => 'E02005510',
        '7NR' => 'E02005510',
        '7NS' => 'E02005510',
        '7NT' => 'E02005510',
        '7NW' => 'E02005510',
        '7PA' => 'E02005510',
        '7PB' => 'E02005510',
        '7PD' => 'E02005510',
        '7PE' => 'E02005510',
        '7PF' => 'E02005510',
        '7PG' => 'E02005510',
        '7PH' => 'E02005510',
        '7PJ' => 'E02005510',
        '7PL' => 'E02005510',
        '7PN' => 'E02005510',
        '7PP' => 'E02005508',
        '7PQ' => 'E02005510',
        '7PR' => 'E02005508',
        '7PS' => 'E02005508',
        '7PT' => 'E02005508',
        '7PU' => 'E02005510',
        '7PW' => 'E02005510',
        '7PX' => 'E02005510',
        '7PY' => 'E02005510',
        '7PZ' => 'E02005510',
        '7QA' => 'E02005510',
        '7QB' => 'E02005510',
        '7QD' => 'E02005510',
        '7QE' => 'E02005510',
        '7QF' => 'E02005510',
        '7QG' => 'E02005510',
        '7QH' => 'E02005510',
        '7QJ' => 'E02005510',
        '7QL' => 'E02005510',
        '7QN' => 'E02005510',
        '7QP' => 'E02005510',
        '7QQ' => 'E02005506',
        '7QR' => 'E02005510',
        '7QS' => 'E02005510',
        '7QT' => 'E02005510',
        '7QU' => 'E02005510',
        '7QW' => 'E02005510',
        '7QX' => 'E02005510',
        '7QY' => 'E02005510',
        '7QZ' => 'E02005510',
        '7RA' => 'E02005510',
        '7RB' => 'E02005510',
        '7RD' => 'E02005510',
        '7RE' => 'E02005510',
        '7RF' => 'E02005510',
        '7RG' => 'E02005510',
        '7RH' => 'E02005510',
        '7RJ' => 'E02005510',
        '7RL' => 'E02005510',
        '7RN' => 'E02005510',
        '7RP' => 'E02005510',
        '7RQ' => 'E02005510',
        '7RR' => 'E02005510',
        '7RS' => 'E02005510',
        '7RW' => 'E02005510',
        '7RX' => 'E02005510',
        '7RZ' => 'E02005510',
        '7SA' => 'E02005508',
        '7SB' => 'E02005510',
        '7SD' => 'E02005508',
        '7SG' => 'E02005508',
        '7SH' => 'E02005508',
        '7SJ' => 'E02005508',
        '7SL' => 'E02005510',
        '7SN' => 'E02005510',
        '7SP' => 'E02005508',
        '7SQ' => 'E02005508',
        '7SU' => 'E02005508',
        '7SX' => 'E02005508',
        '7SY' => 'E02005508',
        '7SZ' => 'E02005508',
        '7TA' => 'E02005508',
        '7TB' => 'E02005508',
        '7TD' => 'E02005508',
        '7TE' => 'E02005508',
        '7TF' => 'E02005508',
        '7TG' => 'E02005508',
        '7TH' => 'E02005508',
        '7TJ' => 'E02005508',
        '7TL' => 'E02005508',
        '7TN' => 'E02005508',
        '7TQ' => 'E02005508',
        '7UX' => 'E02005518',
        '7UY' => 'E02005518',
        '7UZ' => 'E02005518',
        '7WA' => 'E02005518',
        '7WB' => 'E02005518',
        '7WD' => 'E02005508',
        '7WE' => 'E02005508',
        '7WF' => 'E02005518',
        '7WG' => 'E02005518',
        '7WH' => 'E02005508',
        '7WJ' => 'E02005510',
        '7WL' => 'E02005518',
        '7WN' => 'E02005508',
        '7WP' => 'E02005510',
        '7WQ' => 'E02005510',
        '7WR' => 'E02005518',
        '7WS' => 'E02005518',
        '7WT' => 'E02005518',
        '7WU' => 'E02005518',
        '7WW' => 'E02005518',
        '7WX' => 'E02005518',
        '7WY' => 'E02005518',
        '7WZ' => 'E02005518',
        '7XA' => 'E02005518',
        '7XB' => 'E02005518',
        '7XD' => 'E02005510',
        '7XU' => 'E02005518',
        '7XZ' => 'E02005518',
        '7YA' => 'E02005518',
        '7YZ' => 'E02005518',
        '7ZD' => 'E02005508',
        '7ZR' => 'E02005510',
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
