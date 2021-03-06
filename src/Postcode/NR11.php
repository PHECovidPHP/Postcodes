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
final class NR11
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02005520',
        '6AB' => 'E02005520',
        '6AD' => 'E02005521',
        '6AE' => 'E02005575',
        '6AF' => 'E02005520',
        '6AG' => 'E02005520',
        '6AH' => 'E02005520',
        '6AJ' => 'E02005520',
        '6AL' => 'E02005520',
        '6AN' => 'E02005520',
        '6AP' => 'E02005520',
        '6AQ' => 'E02005521',
        '6AR' => 'E02005520',
        '6AS' => 'E02005520',
        '6AT' => 'E02005520',
        '6AU' => 'E02005520',
        '6AW' => 'E02005520',
        '6AX' => 'E02005520',
        '6AY' => 'E02005520',
        '6AZ' => 'E02005520',
        '6BA' => 'E02005520',
        '6BB' => 'E02005520',
        '6BD' => 'E02005520',
        '6BE' => 'E02005520',
        '6BF' => 'E02005520',
        '6BG' => 'E02005520',
        '6BH' => 'E02005520',
        '6BJ' => 'E02005520',
        '6BL' => 'E02005520',
        '6BN' => 'E02005520',
        '6BP' => 'E02005520',
        '6BQ' => 'E02005520',
        '6BS' => 'E02005520',
        '6BT' => 'E02005520',
        '6BU' => 'E02005520',
        '6BW' => 'E02005520',
        '6BX' => 'E02005520',
        '6BY' => 'E02005520',
        '6BZ' => 'E02005520',
        '6DA' => 'E02005520',
        '6DB' => 'E02005520',
        '6DD' => 'E02005520',
        '6DE' => 'E02005520',
        '6DF' => 'E02005520',
        '6DG' => 'E02005520',
        '6DH' => 'E02005520',
        '6DJ' => 'E02005520',
        '6DL' => 'E02005520',
        '6DN' => 'E02005520',
        '6DP' => 'E02005520',
        '6DQ' => 'E02005520',
        '6DR' => 'E02005520',
        '6DS' => 'E02005520',
        '6DT' => 'E02005520',
        '6DU' => 'E02005520',
        '6DW' => 'E02005520',
        '6DX' => 'E02005520',
        '6DY' => 'E02005520',
        '6DZ' => 'E02005520',
        '6EA' => 'E02005520',
        '6EB' => 'E02005520',
        '6ED' => 'E02005520',
        '6EE' => 'E02005520',
        '6EF' => 'E02005520',
        '6EG' => 'E02005520',
        '6EH' => 'E02005520',
        '6EJ' => 'E02005520',
        '6EL' => 'E02005520',
        '6EN' => 'E02005520',
        '6EP' => 'E02005520',
        '6EQ' => 'E02005520',
        '6ER' => 'E02005520',
        '6ES' => 'E02005520',
        '6ET' => 'E02005520',
        '6EU' => 'E02005520',
        '6EW' => 'E02005520',
        '6EX' => 'E02005520',
        '6EY' => 'E02005520',
        '6EZ' => 'E02005520',
        '6FA' => 'E02005520',
        '6FB' => 'E02005520',
        '6FD' => 'E02005520',
        '6FE' => 'E02005520',
        '6FF' => 'E02005520',
        '6FG' => 'E02005520',
        '6FH' => 'E02005520',
        '6FJ' => 'E02005520',
        '6FL' => 'E02005520',
        '6FN' => 'E02005520',
        '6FP' => 'E02005520',
        '6FQ' => 'E02005520',
        '6FR' => 'E02005520',
        '6FS' => 'E02005520',
        '6FT' => 'E02005520',
        '6FU' => 'E02005520',
        '6FW' => 'E02005520',
        '6FX' => 'E02005520',
        '6FY' => 'E02005520',
        '6FZ' => 'E02005520',
        '6GA' => 'E02005520',
        '6GB' => 'E02005520',
        '6GD' => 'E02005520',
        '6GE' => 'E02005520',
        '6GF' => 'E02005520',
        '6GG' => 'E02005520',
        '6GH' => 'E02005520',
        '6GJ' => 'E02005520',
        '6GL' => 'E02005520',
        '6GN' => 'E02005520',
        '6GP' => 'E02005520',
        '6GQ' => 'E02005520',
        '6GS' => 'E02005520',
        '6GT' => 'E02005520',
        '6GW' => 'E02005579',
        '6GX' => 'E02005520',
        '6GY' => 'E02005520',
        '6GZ' => 'E02005520',
        '6HA' => 'E02005520',
        '6HB' => 'E02005520',
        '6HD' => 'E02005520',
        '6HE' => 'E02005520',
        '6HF' => 'E02005520',
        '6HG' => 'E02005520',
        '6HH' => 'E02005520',
        '6HJ' => 'E02005520',
        '6HL' => 'E02005520',
        '6HN' => 'E02005520',
        '6HP' => 'E02005520',
        '6HQ' => 'E02005520',
        '6HR' => 'E02005520',
        '6HS' => 'E02005520',
        '6HT' => 'E02005520',
        '6HU' => 'E02005520',
        '6HW' => 'E02005520',
        '6HX' => 'E02005520',
        '6HY' => 'E02005520',
        '6HZ' => 'E02005520',
        '6JA' => 'E02005520',
        '6JB' => 'E02005520',
        '6JD' => 'E02005520',
        '6JE' => 'E02005520',
        '6JF' => 'E02005520',
        '6JG' => 'E02005520',
        '6JH' => 'E02005520',
        '6JJ' => 'E02005520',
        '6JL' => 'E02005520',
        '6JN' => 'E02005520',
        '6JP' => 'E02005520',
        '6JQ' => 'E02005520',
        '6JR' => 'E02005520',
        '6JS' => 'E02005520',
        '6JT' => 'E02005520',
        '6JU' => 'E02005520',
        '6JW' => 'E02005520',
        '6JX' => 'E02005520',
        '6JY' => 'E02005520',
        '6JZ' => 'E02005520',
        '6LA' => 'E02005520',
        '6LB' => 'E02005520',
        '6LD' => 'E02005520',
        '6LE' => 'E02005520',
        '6LF' => 'E02005520',
        '6LG' => 'E02005520',
        '6LH' => 'E02005520',
        '6LJ' => 'E02005520',
        '6LL' => 'E02005520',
        '6LN' => 'E02005520',
        '6LP' => 'E02005520',
        '6LQ' => 'E02005520',
        '6LR' => 'E02005520',
        '6LS' => 'E02005520',
        '6LT' => 'E02005520',
        '6LU' => 'E02005575',
        '6LW' => 'E02005520',
        '6LX' => 'E02005520',
        '6LY' => 'E02005520',
        '6LZ' => 'E02005520',
        '6NA' => 'E02005520',
        '6NB' => 'E02005520',
        '6ND' => 'E02005520',
        '6NE' => 'E02005520',
        '6NF' => 'E02005520',
        '6NG' => 'E02005520',
        '6NH' => 'E02005520',
        '6NJ' => 'E02005520',
        '6NL' => 'E02005520',
        '6NN' => 'E02005520',
        '6NP' => 'E02005520',
        '6NQ' => 'E02005520',
        '6NR' => 'E02005520',
        '6NS' => 'E02005520',
        '6NT' => 'E02005520',
        '6NU' => 'E02005520',
        '6NW' => 'E02005520',
        '6NX' => 'E02005520',
        '6NY' => 'E02005520',
        '6NZ' => 'E02005520',
        '6PA' => 'E02005520',
        '6PB' => 'E02005520',
        '6PD' => 'E02005575',
        '6PE' => 'E02005575',
        '6PF' => 'E02005575',
        '6PG' => 'E02005575',
        '6PH' => 'E02005575',
        '6PJ' => 'E02005575',
        '6PL' => 'E02005575',
        '6PN' => 'E02005575',
        '6PP' => 'E02005575',
        '6PQ' => 'E02005520',
        '6PR' => 'E02005579',
        '6PS' => 'E02005520',
        '6PT' => 'E02005520',
        '6PU' => 'E02005520',
        '6PW' => 'E02005575',
        '6PX' => 'E02005520',
        '6PY' => 'E02005520',
        '6PZ' => 'E02005520',
        '6QA' => 'E02005575',
        '6QB' => 'E02005575',
        '6QD' => 'E02005575',
        '6QE' => 'E02005575',
        '6QF' => 'E02005520',
        '6QG' => 'E02005575',
        '6QH' => 'E02005575',
        '6QJ' => 'E02005575',
        '6QL' => 'E02005575',
        '6QN' => 'E02005575',
        '6QP' => 'E02005575',
        '6QQ' => 'E02005575',
        '6QR' => 'E02005575',
        '6QS' => 'E02005575',
        '6QT' => 'E02005520',
        '6QU' => 'E02005575',
        '6QW' => 'E02005575',
        '6QX' => 'E02005575',
        '6QY' => 'E02005521',
        '6QZ' => 'E02005521',
        '6RA' => 'E02005521',
        '6RB' => 'E02005521',
        '6RD' => 'E02005521',
        '6RE' => 'E02005521',
        '6RF' => 'E02005521',
        '6RG' => 'E02005521',
        '6RH' => 'E02005521',
        '6RJ' => 'E02005521',
        '6RL' => 'E02005521',
        '6RN' => 'E02005521',
        '6RP' => 'E02005521',
        '6RQ' => 'E02005521',
        '6RR' => 'E02005520',
        '6RS' => 'E02005521',
        '6RT' => 'E02005521',
        '6RU' => 'E02005575',
        '6RW' => 'E02005521',
        '6RX' => 'E02005521',
        '6RY' => 'E02005520',
        '6RZ' => 'E02005521',
        '6SA' => 'E02005521',
        '6SB' => 'E02005521',
        '6SD' => 'E02005521',
        '6SE' => 'E02005521',
        '6SF' => 'E02005521',
        '6SG' => 'E02005521',
        '6SH' => 'E02005521',
        '6SJ' => 'E02005521',
        '6SL' => 'E02005521',
        '6SN' => 'E02005521',
        '6SP' => 'E02005521',
        '6SQ' => 'E02005521',
        '6SR' => 'E02005521',
        '6SS' => 'E02005520',
        '6ST' => 'E02005520',
        '6SU' => 'E02005520',
        '6SW' => 'E02005521',
        '6SX' => 'E02005520',
        '6SY' => 'E02005520',
        '6SZ' => 'E02005520',
        '6TA' => 'E02005520',
        '6TB' => 'E02005520',
        '6TD' => 'E02005520',
        '6TE' => 'E02005520',
        '6TF' => 'E02005520',
        '6TG' => 'E02005520',
        '6TH' => 'E02005520',
        '6TJ' => 'E02005520',
        '6TL' => 'E02005520',
        '6TN' => 'E02005520',
        '6TP' => 'E02005520',
        '6TQ' => 'E02005520',
        '6TR' => 'E02005520',
        '6TS' => 'E02005520',
        '6TT' => 'E02005520',
        '6TU' => 'E02005520',
        '6TW' => 'E02005522',
        '6TX' => 'E02005520',
        '6TY' => 'E02005579',
        '6TZ' => 'E02005520',
        '6UA' => 'E02005520',
        '6UB' => 'E02005520',
        '6UD' => 'E02005520',
        '6UE' => 'E02005520',
        '6UF' => 'E02005520',
        '6UG' => 'E02005520',
        '6UH' => 'E02005520',
        '6UJ' => 'E02005520',
        '6UL' => 'E02005520',
        '6UN' => 'E02005520',
        '6UP' => 'E02005520',
        '6UQ' => 'E02005575',
        '6UR' => 'E02005520',
        '6US' => 'E02005520',
        '6UT' => 'E02005520',
        '6UU' => 'E02005520',
        '6UW' => 'E02005520',
        '6UX' => 'E02005520',
        '6UY' => 'E02005520',
        '6UZ' => 'E02005520',
        '6WA' => 'E02005520',
        '6WD' => 'E02005520',
        '6WE' => 'E02005520',
        '6WF' => 'E02005520',
        '6WG' => 'E02005520',
        '6WH' => 'E02005520',
        '6WJ' => 'E02005579',
        '6WL' => 'E02005520',
        '6WN' => 'E02005520',
        '6WP' => 'E02005520',
        '6WQ' => 'E02005520',
        '6WR' => 'E02005520',
        '6WS' => 'E02005520',
        '6WT' => 'E02005520',
        '6WU' => 'E02005520',
        '6WW' => 'E02005520',
        '6WX' => 'E02005520',
        '6WY' => 'E02005520',
        '6WZ' => 'E02005520',
        '6XA' => 'E02005575',
        '6XB' => 'E02005520',
        '6XD' => 'E02005520',
        '6XE' => 'E02005520',
        '6XF' => 'E02005520',
        '6XG' => 'E02005520',
        '6XH' => 'E02005520',
        '6XJ' => 'E02005520',
        '6XL' => 'E02005520',
        '6XN' => 'E02005520',
        '6XP' => 'E02005520',
        '6XQ' => 'E02005520',
        '6XR' => 'E02005579',
        '6XS' => 'E02005520',
        '6YA' => 'E02005520',
        '6YB' => 'E02005520',
        '6YD' => 'E02005520',
        '6YE' => 'E02005520',
        '6YF' => 'E02005520',
        '6YU' => 'E02005520',
        '6YW' => 'E02005520',
        '6ZL' => 'E02005520',
        '6ZZ' => 'E02005520',
        '7AA' => 'E02005575',
        '7AB' => 'E02005575',
        '7AD' => 'E02005575',
        '7AE' => 'E02005575',
        '7AF' => 'E02005575',
        '7AG' => 'E02005575',
        '7AH' => 'E02005575',
        '7AJ' => 'E02005581',
        '7AL' => 'E02005575',
        '7AN' => 'E02005575',
        '7AP' => 'E02005575',
        '7AQ' => 'E02005575',
        '7AR' => 'E02005575',
        '7AS' => 'E02005575',
        '7AT' => 'E02005575',
        '7AU' => 'E02005575',
        '7AW' => 'E02005575',
        '7AX' => 'E02005575',
        '7AY' => 'E02005575',
        '7AZ' => 'E02005575',
        '7BA' => 'E02005575',
        '7BB' => 'E02005575',
        '7BD' => 'E02005575',
        '7BE' => 'E02005575',
        '7BF' => 'E02005575',
        '7BG' => 'E02005575',
        '7BH' => 'E02005575',
        '7BJ' => 'E02005575',
        '7BL' => 'E02005575',
        '7BN' => 'E02005575',
        '7BP' => 'E02005575',
        '7BQ' => 'E02005575',
        '7BS' => 'E02005575',
        '7BT' => 'E02005575',
        '7BU' => 'E02005575',
        '7BW' => 'E02005575',
        '7BX' => 'E02005575',
        '7BY' => 'E02005575',
        '7DA' => 'E02005575',
        '7DB' => 'E02005575',
        '7DD' => 'E02005575',
        '7DE' => 'E02005575',
        '7DF' => 'E02005520',
        '7DG' => 'E02005575',
        '7DH' => 'E02005575',
        '7DJ' => 'E02005575',
        '7DL' => 'E02005575',
        '7DN' => 'E02005575',
        '7DP' => 'E02005575',
        '7DQ' => 'E02005575',
        '7DR' => 'E02005575',
        '7DS' => 'E02005575',
        '7DT' => 'E02005575',
        '7DU' => 'E02005575',
        '7DW' => 'E02005575',
        '7DX' => 'E02005575',
        '7DY' => 'E02005575',
        '7DZ' => 'E02005575',
        '7EA' => 'E02005575',
        '7EB' => 'E02005575',
        '7ED' => 'E02005575',
        '7EE' => 'E02005575',
        '7EF' => 'E02005575',
        '7EG' => 'E02005581',
        '7EH' => 'E02005575',
        '7EJ' => 'E02005581',
        '7EL' => 'E02005581',
        '7EN' => 'E02005581',
        '7EP' => 'E02005581',
        '7EQ' => 'E02005581',
        '7ER' => 'E02005581',
        '7ES' => 'E02005581',
        '7ET' => 'E02005579',
        '7EU' => 'E02005575',
        '7EW' => 'E02005581',
        '7EX' => 'E02005575',
        '7EY' => 'E02005575',
        '7EZ' => 'E02005575',
        '7HA' => 'E02005575',
        '7HB' => 'E02005575',
        '7HD' => 'E02005575',
        '7HE' => 'E02005575',
        '7HF' => 'E02005575',
        '7HG' => 'E02005575',
        '7HH' => 'E02005575',
        '7HJ' => 'E02005575',
        '7HL' => 'E02005575',
        '7HN' => 'E02005575',
        '7HP' => 'E02005575',
        '7HQ' => 'E02005575',
        '7HR' => 'E02005575',
        '7HS' => 'E02005575',
        '7HT' => 'E02005575',
        '7HU' => 'E02005575',
        '7HW' => 'E02005575',
        '7HX' => 'E02005575',
        '7HY' => 'E02005575',
        '7HZ' => 'E02005575',
        '7JA' => 'E02005575',
        '7JB' => 'E02005575',
        '7JD' => 'E02005575',
        '7JE' => 'E02005575',
        '7JF' => 'E02005575',
        '7JG' => 'E02005575',
        '7JH' => 'E02005575',
        '7JJ' => 'E02005575',
        '7JL' => 'E02005575',
        '7JN' => 'E02005575',
        '7JP' => 'E02005575',
        '7JQ' => 'E02005575',
        '7JR' => 'E02005575',
        '7JS' => 'E02005575',
        '7JT' => 'E02005575',
        '7JU' => 'E02005575',
        '7JW' => 'E02005575',
        '7JX' => 'E02005575',
        '7JY' => 'E02005575',
        '7JZ' => 'E02005575',
        '7LA' => 'E02005575',
        '7LB' => 'E02005575',
        '7LD' => 'E02005575',
        '7LE' => 'E02005575',
        '7LF' => 'E02005575',
        '7LG' => 'E02005575',
        '7LH' => 'E02005575',
        '7LJ' => 'E02005575',
        '7LL' => 'E02005575',
        '7LN' => 'E02005575',
        '7LP' => 'E02005575',
        '7LQ' => 'E02005575',
        '7LR' => 'E02005575',
        '7LS' => 'E02005575',
        '7LT' => 'E02005575',
        '7LU' => 'E02005575',
        '7LW' => 'E02005575',
        '7LX' => 'E02005575',
        '7LY' => 'E02005575',
        '7LZ' => 'E02005575',
        '7NA' => 'E02005575',
        '7NB' => 'E02005575',
        '7ND' => 'E02005575',
        '7NE' => 'E02005575',
        '7NF' => 'E02005575',
        '7NG' => 'E02005575',
        '7NH' => 'E02005575',
        '7NJ' => 'E02005575',
        '7NL' => 'E02005575',
        '7NN' => 'E02005575',
        '7NP' => 'E02005575',
        '7NQ' => 'E02005575',
        '7NR' => 'E02005575',
        '7NS' => 'E02005575',
        '7NT' => 'E02005575',
        '7NU' => 'E02005575',
        '7NW' => 'E02005575',
        '7NX' => 'E02005575',
        '7NY' => 'E02005575',
        '7NZ' => 'E02005575',
        '7PA' => 'E02005575',
        '7PB' => 'E02005575',
        '7PD' => 'E02005575',
        '7PE' => 'E02005575',
        '7PF' => 'E02005575',
        '7PG' => 'E02005575',
        '7PH' => 'E02005575',
        '7PJ' => 'E02005575',
        '7PL' => 'E02005575',
        '7PN' => 'E02005575',
        '7PP' => 'E02005575',
        '7PQ' => 'E02005575',
        '7PR' => 'E02005575',
        '7PS' => 'E02005575',
        '7PT' => 'E02005575',
        '7PX' => 'E02005575',
        '7PY' => 'E02005579',
        '7QA' => 'E02005575',
        '7QB' => 'E02005575',
        '7QD' => 'E02005575',
        '7QE' => 'E02005575',
        '7QF' => 'E02005575',
        '7QG' => 'E02005575',
        '7QH' => 'E02005575',
        '7QJ' => 'E02005575',
        '7QL' => 'E02005575',
        '7QN' => 'E02005575',
        '7QP' => 'E02005575',
        '7QQ' => 'E02005575',
        '7QR' => 'E02005575',
        '7QS' => 'E02005575',
        '7QT' => 'E02005575',
        '7QU' => 'E02005575',
        '7QW' => 'E02005575',
        '7QX' => 'E02005575',
        '7QY' => 'E02005575',
        '7QZ' => 'E02005575',
        '7RA' => 'E02005575',
        '7WA' => 'E02005575',
        '7WB' => 'E02005575',
        '7WT' => 'E02005520',
        '7WU' => 'E02005570',
        '7WW' => 'E02005579',
        '7WX' => 'E02005570',
        '7WY' => 'E02005570',
        '7WZ' => 'E02005570',
        '7ZZ' => 'E02005575',
        '8AA' => 'E02005574',
        '8AB' => 'E02005576',
        '8AD' => 'E02005575',
        '8AE' => 'E02005576',
        '8AF' => 'E02005574',
        '8AG' => 'E02005575',
        '8AH' => 'E02005574',
        '8AJ' => 'E02005574',
        '8AL' => 'E02005574',
        '8AN' => 'E02005574',
        '8AP' => 'E02005576',
        '8AQ' => 'E02005574',
        '8AR' => 'E02005576',
        '8AS' => 'E02005576',
        '8AT' => 'E02005576',
        '8AU' => 'E02005576',
        '8AW' => 'E02005576',
        '8AX' => 'E02005576',
        '8AY' => 'E02005576',
        '8AZ' => 'E02005576',
        '8BA' => 'E02005576',
        '8BB' => 'E02005576',
        '8BD' => 'E02005576',
        '8BE' => 'E02005576',
        '8BF' => 'E02005574',
        '8BG' => 'E02005576',
        '8BH' => 'E02005576',
        '8BJ' => 'E02005576',
        '8BL' => 'E02005576',
        '8BN' => 'E02005576',
        '8BP' => 'E02005576',
        '8BQ' => 'E02005576',
        '8BS' => 'E02005576',
        '8BT' => 'E02005576',
        '8BU' => 'E02005576',
        '8BW' => 'E02005576',
        '8BX' => 'E02005576',
        '8BY' => 'E02005576',
        '8BZ' => 'E02005576',
        '8DA' => 'E02005576',
        '8DB' => 'E02005576',
        '8DD' => 'E02005576',
        '8DE' => 'E02005576',
        '8DF' => 'E02005576',
        '8DG' => 'E02005576',
        '8DH' => 'E02005576',
        '8DJ' => 'E02005576',
        '8DL' => 'E02005576',
        '8DN' => 'E02005576',
        '8DP' => 'E02005576',
        '8DQ' => 'E02005576',
        '8DR' => 'E02005576',
        '8DS' => 'E02005576',
        '8DT' => 'E02005576',
        '8DU' => 'E02005576',
        '8DW' => 'E02005576',
        '8DX' => 'E02005576',
        '8DY' => 'E02005574',
        '8DZ' => 'E02005574',
        '8EA' => 'E02005574',
        '8EB' => 'E02005574',
        '8ED' => 'E02005574',
        '8EE' => 'E02005574',
        '8EF' => 'E02005574',
        '8EG' => 'E02005574',
        '8EH' => 'E02005574',
        '8EJ' => 'E02005574',
        '8EL' => 'E02005576',
        '8EN' => 'E02005576',
        '8EP' => 'E02005576',
        '8EQ' => 'E02005574',
        '8ER' => 'E02005576',
        '8ES' => 'E02005576',
        '8ET' => 'E02005576',
        '8EU' => 'E02005576',
        '8EW' => 'E02005576',
        '8EX' => 'E02005576',
        '8EY' => 'E02005576',
        '8EZ' => 'E02005576',
        '8FA' => 'E02005574',
        '8FB' => 'E02005576',
        '8FD' => 'E02005576',
        '8FE' => 'E02005576',
        '8GA' => 'E02005575',
        '8GL' => 'E02005576',
        '8HA' => 'E02005576',
        '8HB' => 'E02005576',
        '8HD' => 'E02005576',
        '8HE' => 'E02005576',
        '8HF' => 'E02005576',
        '8HG' => 'E02005576',
        '8HH' => 'E02005576',
        '8HJ' => 'E02005576',
        '8HL' => 'E02005576',
        '8HN' => 'E02005576',
        '8HP' => 'E02005576',
        '8HQ' => 'E02005576',
        '8HR' => 'E02005574',
        '8HS' => 'E02005574',
        '8HT' => 'E02005574',
        '8HU' => 'E02005574',
        '8HW' => 'E02005576',
        '8HX' => 'E02005574',
        '8HY' => 'E02005574',
        '8HZ' => 'E02005574',
        '8JA' => 'E02005574',
        '8JB' => 'E02005576',
        '8JD' => 'E02005576',
        '8JE' => 'E02005576',
        '8JF' => 'E02005576',
        '8JG' => 'E02005576',
        '8JH' => 'E02005576',
        '8JJ' => 'E02005576',
        '8JL' => 'E02005576',
        '8JN' => 'E02005576',
        '8JP' => 'E02005576',
        '8JQ' => 'E02005576',
        '8JR' => 'E02005576',
        '8JS' => 'E02005576',
        '8JT' => 'E02005576',
        '8JU' => 'E02005576',
        '8JW' => 'E02005576',
        '8JX' => 'E02005576',
        '8JY' => 'E02005576',
        '8JZ' => 'E02005576',
        '8LA' => 'E02005576',
        '8LB' => 'E02005576',
        '8LD' => 'E02005576',
        '8LE' => 'E02005576',
        '8LF' => 'E02005576',
        '8LG' => 'E02005576',
        '8LH' => 'E02005576',
        '8LJ' => 'E02005576',
        '8LL' => 'E02005576',
        '8LN' => 'E02005576',
        '8LP' => 'E02005576',
        '8LQ' => 'E02005576',
        '8LR' => 'E02005576',
        '8LS' => 'E02005576',
        '8LT' => 'E02005576',
        '8LU' => 'E02005576',
        '8LW' => 'E02005576',
        '8LX' => 'E02005574',
        '8LY' => 'E02005576',
        '8LZ' => 'E02005576',
        '8NA' => 'E02005574',
        '8NB' => 'E02005574',
        '8ND' => 'E02005574',
        '8NE' => 'E02005574',
        '8NF' => 'E02005576',
        '8NG' => 'E02005574',
        '8NH' => 'E02005574',
        '8NJ' => 'E02005574',
        '8NL' => 'E02005574',
        '8NN' => 'E02005574',
        '8NP' => 'E02005574',
        '8NQ' => 'E02005574',
        '8NR' => 'E02005574',
        '8NS' => 'E02005574',
        '8NT' => 'E02005574',
        '8NU' => 'E02005574',
        '8NW' => 'E02005574',
        '8NX' => 'E02005574',
        '8NY' => 'E02005574',
        '8NZ' => 'E02005574',
        '8PA' => 'E02005574',
        '8PB' => 'E02005574',
        '8PD' => 'E02005574',
        '8PE' => 'E02005574',
        '8PF' => 'E02005574',
        '8PG' => 'E02005574',
        '8PH' => 'E02005574',
        '8PJ' => 'E02005574',
        '8PL' => 'E02005574',
        '8PN' => 'E02005574',
        '8PP' => 'E02005574',
        '8PQ' => 'E02005574',
        '8PR' => 'E02005574',
        '8PS' => 'E02005574',
        '8PT' => 'E02005574',
        '8PU' => 'E02005574',
        '8PW' => 'E02005574',
        '8PX' => 'E02005574',
        '8PY' => 'E02005579',
        '8PZ' => 'E02005574',
        '8QA' => 'E02005574',
        '8QB' => 'E02005576',
        '8QD' => 'E02005574',
        '8QE' => 'E02005574',
        '8QF' => 'E02005574',
        '8QG' => 'E02005574',
        '8QH' => 'E02005576',
        '8QJ' => 'E02005574',
        '8QL' => 'E02005576',
        '8QP' => 'E02005574',
        '8QQ' => 'E02005574',
        '8QR' => 'E02005574',
        '8QS' => 'E02005574',
        '8QT' => 'E02005574',
        '8QU' => 'E02005575',
        '8QX' => 'E02005575',
        '8QZ' => 'E02005575',
        '8RA' => 'E02005574',
        '8RB' => 'E02005575',
        '8RD' => 'E02005575',
        '8RE' => 'E02005575',
        '8RF' => 'E02005575',
        '8RG' => 'E02005575',
        '8RH' => 'E02005575',
        '8RJ' => 'E02005575',
        '8RL' => 'E02005575',
        '8RN' => 'E02005575',
        '8RP' => 'E02005575',
        '8RQ' => 'E02005575',
        '8RR' => 'E02005575',
        '8RS' => 'E02005575',
        '8RT' => 'E02005575',
        '8RU' => 'E02005575',
        '8RW' => 'E02005575',
        '8RX' => 'E02005575',
        '8RY' => 'E02005575',
        '8RZ' => 'E02005575',
        '8SA' => 'E02005575',
        '8SB' => 'E02005574',
        '8SD' => 'E02005575',
        '8SF' => 'E02005575',
        '8SH' => 'E02005574',
        '8SJ' => 'E02005574',
        '8SL' => 'E02005574',
        '8SP' => 'E02005574',
        '8SR' => 'E02005574',
        '8SU' => 'E02005574',
        '8SZ' => 'E02005574',
        '8TA' => 'E02005574',
        '8TB' => 'E02005574',
        '8TD' => 'E02005574',
        '8TE' => 'E02005574',
        '8TF' => 'E02005574',
        '8TG' => 'E02005574',
        '8TH' => 'E02005574',
        '8TJ' => 'E02005574',
        '8TL' => 'E02005574',
        '8TN' => 'E02005574',
        '8TP' => 'E02005574',
        '8TQ' => 'E02005574',
        '8TR' => 'E02005574',
        '8TS' => 'E02005574',
        '8TT' => 'E02005574',
        '8TU' => 'E02005574',
        '8TW' => 'E02005574',
        '8TX' => 'E02005574',
        '8TZ' => 'E02005576',
        '8UA' => 'E02005574',
        '8UB' => 'E02005574',
        '8UD' => 'E02005574',
        '8UE' => 'E02005574',
        '8UG' => 'E02005576',
        '8UH' => 'E02005576',
        '8UJ' => 'E02005576',
        '8UL' => 'E02005574',
        '8UN' => 'E02005574',
        '8UP' => 'E02005574',
        '8UR' => 'E02005574',
        '8UT' => 'E02005574',
        '8UU' => 'E02005574',
        '8UW' => 'E02005574',
        '8UX' => 'E02005574',
        '8UY' => 'E02005574',
        '8WA' => 'E02005574',
        '8WB' => 'E02005574',
        '8WD' => 'E02005576',
        '8WE' => 'E02005574',
        '8WR' => 'E02005574',
        '8WS' => 'E02005574',
        '8WT' => 'E02005574',
        '8WU' => 'E02005570',
        '8WW' => 'E02005574',
        '8WX' => 'E02005574',
        '8WY' => 'E02005574',
        '8WZ' => 'E02005574',
        '8XA' => 'E02005574',
        '8XB' => 'E02005574',
        '8XD' => 'E02005574',
        '8XH' => 'E02005576',
        '8XJ' => 'E02005576',
        '8YA' => 'E02005576',
        '8YQ' => 'E02005576',
        '8YR' => 'E02005576',
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
