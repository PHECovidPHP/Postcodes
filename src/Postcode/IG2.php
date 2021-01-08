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
final class IG2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02000773',
        '6AB' => 'E02000773',
        '6AD' => 'E02000773',
        '6AE' => 'E02000773',
        '6AF' => 'E02000773',
        '6AG' => 'E02000773',
        '6AH' => 'E02000773',
        '6AJ' => 'E02000773',
        '6AL' => 'E02000773',
        '6AN' => 'E02000773',
        '6AP' => 'E02000773',
        '6AQ' => 'E02000773',
        '6AR' => 'E02000773',
        '6AS' => 'E02000773',
        '6AT' => 'E02000773',
        '6AU' => 'E02000773',
        '6AW' => 'E02000773',
        '6AX' => 'E02000773',
        '6AY' => 'E02000773',
        '6AZ' => 'E02000765',
        '6BA' => 'E02000773',
        '6BB' => 'E02000765',
        '6BD' => 'E02006924',
        '6BE' => 'E02000767',
        '6BF' => 'E02000765',
        '6BG' => 'E02000767',
        '6BH' => 'E02000767',
        '6BJ' => 'E02000767',
        '6BL' => 'E02000767',
        '6BN' => 'E02000767',
        '6BP' => 'E02000776',
        '6BQ' => 'E02000767',
        '6BS' => 'E02000780',
        '6BT' => 'E02000780',
        '6BU' => 'E02000765',
        '6BW' => 'E02000780',
        '6BX' => 'E02000773',
        '6BY' => 'E02000776',
        '6BZ' => 'E02006924',
        '6DA' => 'E02006924',
        '6DB' => 'E02000773',
        '6DD' => 'E02000773',
        '6DE' => 'E02000773',
        '6DF' => 'E02000773',
        '6DG' => 'E02000773',
        '6DH' => 'E02000773',
        '6DJ' => 'E02000773',
        '6DL' => 'E02000773',
        '6DN' => 'E02000773',
        '6DP' => 'E02000773',
        '6DQ' => 'E02000773',
        '6DR' => 'E02000773',
        '6DS' => 'E02000773',
        '6DT' => 'E02000780',
        '6DU' => 'E02000773',
        '6DW' => 'E02000773',
        '6DX' => 'E02000773',
        '6DY' => 'E02000773',
        '6DZ' => 'E02000773',
        '6EA' => 'E02000773',
        '6EB' => 'E02000773',
        '6ED' => 'E02000780',
        '6EE' => 'E02000765',
        '6EF' => 'E02000780',
        '6EG' => 'E02006924',
        '6EH' => 'E02000773',
        '6EJ' => 'E02000773',
        '6EL' => 'E02000765',
        '6EN' => 'E02000765',
        '6EP' => 'E02006924',
        '6EQ' => 'E02000773',
        '6ER' => 'E02006924',
        '6ES' => 'E02006924',
        '6ET' => 'E02000765',
        '6EU' => 'E02000773',
        '6EW' => 'E02006924',
        '6EX' => 'E02000780',
        '6EY' => 'E02006924',
        '6EZ' => 'E02006924',
        '6FA' => 'E02006924',
        '6FB' => 'E02006924',
        '6FD' => 'E02006924',
        '6FE' => 'E02000773',
        '6FF' => 'E02000773',
        '6FG' => 'E02000773',
        '6FH' => 'E02000773',
        '6FJ' => 'E02000773',
        '6FL' => 'E02006924',
        '6FN' => 'E02000765',
        '6FX' => 'E02000780',
        '6FY' => 'E02000780',
        '6FZ' => 'E02000780',
        '6GD' => 'E02000765',
        '6GE' => 'E02000765',
        '6GF' => 'E02000780',
        '6GG' => 'E02000780',
        '6GH' => 'E02000780',
        '6GJ' => 'E02000780',
        '6GL' => 'E02000780',
        '6GN' => 'E02000765',
        '6GP' => 'E02000765',
        '6GQ' => 'E02000780',
        '6GR' => 'E02000780',
        '6GS' => 'E02000765',
        '6GT' => 'E02000780',
        '6GU' => 'E02000780',
        '6GY' => 'E02006924',
        '6GZ' => 'E02000780',
        '6HA' => 'E02006924',
        '6HB' => 'E02000765',
        '6HD' => 'E02000765',
        '6HE' => 'E02006924',
        '6HF' => 'E02006924',
        '6HG' => 'E02000765',
        '6HH' => 'E02000780',
        '6HJ' => 'E02006924',
        '6HL' => 'E02006924',
        '6HN' => 'E02000765',
        '6HP' => 'E02000765',
        '6HQ' => 'E02000780',
        '6HR' => 'E02000765',
        '6HS' => 'E02000765',
        '6HT' => 'E02000780',
        '6HU' => 'E02000765',
        '6HW' => 'E02006924',
        '6HX' => 'E02006924',
        '6HY' => 'E02006924',
        '6HZ' => 'E02006924',
        '6JA' => 'E02006924',
        '6JB' => 'E02006924',
        '6JD' => 'E02006924',
        '6JE' => 'E02006924',
        '6JF' => 'E02006924',
        '6JG' => 'E02006924',
        '6JH' => 'E02006924',
        '6JJ' => 'E02006924',
        '6JL' => 'E02006924',
        '6JN' => 'E02000780',
        '6JP' => 'E02000780',
        '6JQ' => 'E02006924',
        '6JR' => 'E02000773',
        '6JS' => 'E02006924',
        '6JT' => 'E02000765',
        '6JU' => 'E02000765',
        '6JW' => 'E02006924',
        '6JX' => 'E02000765',
        '6JY' => 'E02000762',
        '6JZ' => 'E02000765',
        '6LA' => 'E02000765',
        '6LB' => 'E02000780',
        '6LD' => 'E02000765',
        '6LE' => 'E02000765',
        '6LF' => 'E02000765',
        '6LG' => 'E02000765',
        '6LH' => 'E02000765',
        '6LJ' => 'E02000765',
        '6LL' => 'E02000765',
        '6LN' => 'E02000765',
        '6LP' => 'E02000780',
        '6LQ' => 'E02000765',
        '6LR' => 'E02000765',
        '6LS' => 'E02000765',
        '6LT' => 'E02000765',
        '6LU' => 'E02000765',
        '6LW' => 'E02000765',
        '6LX' => 'E02000765',
        '6LY' => 'E02000765',
        '6LZ' => 'E02000765',
        '6NA' => 'E02000765',
        '6NB' => 'E02000765',
        '6ND' => 'E02000765',
        '6NE' => 'E02000762',
        '6NF' => 'E02000773',
        '6NG' => 'E02006924',
        '6NH' => 'E02006924',
        '6NJ' => 'E02006924',
        '6NL' => 'E02000780',
        '6NN' => 'E02006924',
        '6NP' => 'E02006924',
        '6NQ' => 'E02006924',
        '6NR' => 'E02006924',
        '6NS' => 'E02006924',
        '6NT' => 'E02000762',
        '6NU' => 'E02006924',
        '6NW' => 'E02006924',
        '6NX' => 'E02000762',
        '6NY' => 'E02006924',
        '6NZ' => 'E02000780',
        '6PA' => 'E02000773',
        '6PB' => 'E02006924',
        '6PD' => 'E02000767',
        '6PE' => 'E02000773',
        '6PF' => 'E02000773',
        '6PG' => 'E02000773',
        '6PH' => 'E02000773',
        '6PJ' => 'E02000767',
        '6PL' => 'E02000767',
        '6PN' => 'E02000767',
        '6PP' => 'E02000773',
        '6PQ' => 'E02000773',
        '6PR' => 'E02000773',
        '6PS' => 'E02000767',
        '6PT' => 'E02000767',
        '6PU' => 'E02000767',
        '6PW' => 'E02000767',
        '6PX' => 'E02000767',
        '6PY' => 'E02000767',
        '6PZ' => 'E02000767',
        '6QA' => 'E02000767',
        '6QB' => 'E02000767',
        '6QD' => 'E02000767',
        '6QE' => 'E02000780',
        '6QF' => 'E02000767',
        '6QG' => 'E02000767',
        '6QH' => 'E02000767',
        '6QJ' => 'E02000767',
        '6QL' => 'E02000767',
        '6QN' => 'E02000767',
        '6QP' => 'E02000767',
        '6QQ' => 'E02000765',
        '6QR' => 'E02000767',
        '6QS' => 'E02000767',
        '6QT' => 'E02000767',
        '6QU' => 'E02000767',
        '6QW' => 'E02000767',
        '6QX' => 'E02000767',
        '6QY' => 'E02000767',
        '6QZ' => 'E02000767',
        '6RD' => 'E02000765',
        '6RE' => 'E02000765',
        '6RF' => 'E02000765',
        '6RG' => 'E02000765',
        '6RH' => 'E02000767',
        '6RJ' => 'E02000765',
        '6RR' => 'E02000765',
        '6RS' => 'E02000765',
        '6RU' => 'E02000765',
        '6RY' => 'E02000780',
        '6RZ' => 'E02000765',
        '6SA' => 'E02000767',
        '6SB' => 'E02000767',
        '6SD' => 'E02000765',
        '6SE' => 'E02000765',
        '6SF' => 'E02000765',
        '6SG' => 'E02000765',
        '6SH' => 'E02000765',
        '6SJ' => 'E02000765',
        '6SL' => 'E02000765',
        '6SN' => 'E02000765',
        '6SP' => 'E02000780',
        '6SQ' => 'E02000767',
        '6SR' => 'E02000765',
        '6SS' => 'E02000765',
        '6ST' => 'E02000765',
        '6SU' => 'E02000765',
        '6SW' => 'E02000780',
        '6SX' => 'E02000765',
        '6SY' => 'E02000765',
        '6SZ' => 'E02000765',
        '6TA' => 'E02000765',
        '6TB' => 'E02000765',
        '6TD' => 'E02000765',
        '6TE' => 'E02000765',
        '6TF' => 'E02000765',
        '6TG' => 'E02000765',
        '6TH' => 'E02000765',
        '6TJ' => 'E02000765',
        '6TL' => 'E02000765',
        '6TN' => 'E02000765',
        '6TP' => 'E02000765',
        '6TQ' => 'E02000765',
        '6TR' => 'E02000762',
        '6TS' => 'E02000765',
        '6TT' => 'E02000765',
        '6TU' => 'E02000765',
        '6TW' => 'E02000765',
        '6TX' => 'E02000765',
        '6TY' => 'E02000765',
        '6UB' => 'E02000780',
        '6UD' => 'E02000765',
        '6UE' => 'E02000762',
        '6UF' => 'E02000762',
        '6UH' => 'E02000762',
        '6UJ' => 'E02000762',
        '6UL' => 'E02000762',
        '6UN' => 'E02000762',
        '6UP' => 'E02000762',
        '6UR' => 'E02000762',
        '6UT' => 'E02000762',
        '6UU' => 'E02000762',
        '6UW' => 'E02000762',
        '6UX' => 'E02000762',
        '6UY' => 'E02000762',
        '6UZ' => 'E02000762',
        '6WA' => 'E02000780',
        '6WB' => 'E02000780',
        '6WD' => 'E02000762',
        '6WE' => 'E02000780',
        '6WF' => 'E02000780',
        '6WG' => 'E02000762',
        '6WH' => 'E02000780',
        '6WJ' => 'E02000762',
        '6WL' => 'E02000762',
        '6WN' => 'E02000780',
        '6WP' => 'E02000780',
        '6WQ' => 'E02000780',
        '6WR' => 'E02000780',
        '6WS' => 'E02000762',
        '6WT' => 'E02000762',
        '6WU' => 'E02000780',
        '6WX' => 'E02000780',
        '6WY' => 'E02000780',
        '6WZ' => 'E02000780',
        '6XA' => 'E02000762',
        '6XB' => 'E02000762',
        '6XD' => 'E02000762',
        '6XE' => 'E02000762',
        '6XF' => 'E02000762',
        '6XG' => 'E02000765',
        '6XH' => 'E02000765',
        '6XJ' => 'E02000765',
        '6XL' => 'E02000762',
        '6XN' => 'E02000780',
        '6XP' => 'E02000765',
        '6XQ' => 'E02000765',
        '6XR' => 'E02000765',
        '6XS' => 'E02000765',
        '6XT' => 'E02000762',
        '6XU' => 'E02000765',
        '6XW' => 'E02000780',
        '6XX' => 'E02000765',
        '6XY' => 'E02000765',
        '6XZ' => 'E02000762',
        '6YA' => 'E02000765',
        '6YB' => 'E02000762',
        '6YD' => 'E02000762',
        '6YE' => 'E02000762',
        '6YF' => 'E02000765',
        '6YG' => 'E02000765',
        '6YH' => 'E02000765',
        '6YQ' => 'E02000765',
        '6YR' => 'E02000780',
        '6YS' => 'E02000780',
        '6YT' => 'E02000780',
        '6YU' => 'E02000765',
        '6YX' => 'E02000765',
        '6YZ' => 'E02000780',
        '6ZQ' => 'E02000780',
        '7AA' => 'E02000773',
        '7AB' => 'E02000773',
        '7AD' => 'E02000773',
        '7AE' => 'E02000780',
        '7AF' => 'E02000780',
        '7AG' => 'E02000770',
        '7AH' => 'E02000770',
        '7AJ' => 'E02000770',
        '7AL' => 'E02000770',
        '7AN' => 'E02000770',
        '7AP' => 'E02000773',
        '7AQ' => 'E02000770',
        '7AR' => 'E02000770',
        '7AS' => 'E02000770',
        '7AT' => 'E02000770',
        '7AU' => 'E02000770',
        '7AW' => 'E02000773',
        '7AX' => 'E02000773',
        '7AY' => 'E02000770',
        '7AZ' => 'E02000770',
        '7BA' => 'E02000770',
        '7BB' => 'E02000770',
        '7BD' => 'E02000770',
        '7BE' => 'E02000773',
        '7BG' => 'E02000773',
        '7BH' => 'E02000763',
        '7BJ' => 'E02000770',
        '7BL' => 'E02000773',
        '7BN' => 'E02000763',
        '7BP' => 'E02000773',
        '7BQ' => 'E02000770',
        '7BS' => 'E02000773',
        '7BT' => 'E02000773',
        '7BU' => 'E02000773',
        '7BW' => 'E02000763',
        '7BX' => 'E02000763',
        '7BY' => 'E02000773',
        '7BZ' => 'E02000773',
        '7DA' => 'E02000773',
        '7DB' => 'E02000773',
        '7DD' => 'E02000763',
        '7DE' => 'E02000773',
        '7DF' => 'E02000773',
        '7DG' => 'E02000770',
        '7DH' => 'E02000770',
        '7DJ' => 'E02000770',
        '7DL' => 'E02000770',
        '7DN' => 'E02000770',
        '7DP' => 'E02000773',
        '7DQ' => 'E02000770',
        '7DR' => 'E02000770',
        '7DS' => 'E02000770',
        '7DT' => 'E02000773',
        '7DU' => 'E02000770',
        '7DW' => 'E02000770',
        '7DX' => 'E02000770',
        '7DY' => 'E02000773',
        '7DZ' => 'E02000773',
        '7EA' => 'E02000773',
        '7EB' => 'E02000770',
        '7ED' => 'E02000770',
        '7EE' => 'E02000770',
        '7EF' => 'E02000773',
        '7EG' => 'E02000770',
        '7EH' => 'E02000770',
        '7EJ' => 'E02000770',
        '7EL' => 'E02000770',
        '7EN' => 'E02000770',
        '7EP' => 'E02000770',
        '7EQ' => 'E02000770',
        '7ER' => 'E02000770',
        '7ES' => 'E02000770',
        '7ET' => 'E02000770',
        '7EU' => 'E02000770',
        '7EW' => 'E02000770',
        '7EX' => 'E02000770',
        '7EY' => 'E02000770',
        '7EZ' => 'E02000770',
        '7FA' => 'E02000773',
        '7FB' => 'E02000763',
        '7FD' => 'E02000773',
        '7FE' => 'E02000767',
        '7FF' => 'E02000770',
        '7FQ' => 'E02000780',
        '7FW' => 'E02000763',
        '7FX' => 'E02000763',
        '7FZ' => 'E02000780',
        '7GD' => 'E02000780',
        '7GE' => 'E02000763',
        '7GF' => 'E02000780',
        '7GG' => 'E02000763',
        '7GH' => 'E02000763',
        '7GJ' => 'E02000763',
        '7GL' => 'E02000780',
        '7GN' => 'E02000780',
        '7GP' => 'E02000770',
        '7GQ' => 'E02000763',
        '7GR' => 'E02000780',
        '7GS' => 'E02000780',
        '7GT' => 'E02000770',
        '7GU' => 'E02000770',
        '7GW' => 'E02000770',
        '7GX' => 'E02000763',
        '7GY' => 'E02000763',
        '7GZ' => 'E02000763',
        '7HA' => 'E02000770',
        '7HB' => 'E02000770',
        '7HD' => 'E02000770',
        '7HE' => 'E02000770',
        '7HF' => 'E02000770',
        '7HG' => 'E02000770',
        '7HH' => 'E02000770',
        '7HJ' => 'E02000770',
        '7HL' => 'E02000770',
        '7HN' => 'E02000770',
        '7HP' => 'E02000763',
        '7HQ' => 'E02000770',
        '7HR' => 'E02000767',
        '7HS' => 'E02000767',
        '7HT' => 'E02000767',
        '7HU' => 'E02000773',
        '7HW' => 'E02000780',
        '7HX' => 'E02000763',
        '7HY' => 'E02000770',
        '7HZ' => 'E02000770',
        '7JA' => 'E02000770',
        '7JB' => 'E02000770',
        '7JD' => 'E02000770',
        '7JE' => 'E02000763',
        '7JF' => 'E02000763',
        '7JG' => 'E02000763',
        '7JH' => 'E02000763',
        '7JJ' => 'E02000763',
        '7JL' => 'E02000763',
        '7JN' => 'E02000763',
        '7JP' => 'E02000763',
        '7JQ' => 'E02000763',
        '7JR' => 'E02000763',
        '7JS' => 'E02000763',
        '7JT' => 'E02000763',
        '7JW' => 'E02000763',
        '7JX' => 'E02000780',
        '7JY' => 'E02000767',
        '7JZ' => 'E02000767',
        '7LA' => 'E02000780',
        '7LB' => 'E02000767',
        '7LD' => 'E02000767',
        '7LE' => 'E02000767',
        '7LF' => 'E02000767',
        '7LG' => 'E02000780',
        '7LH' => 'E02000767',
        '7LJ' => 'E02000767',
        '7LL' => 'E02000780',
        '7LN' => 'E02000780',
        '7LP' => 'E02000767',
        '7LQ' => 'E02000767',
        '7LR' => 'E02000767',
        '7LS' => 'E02000767',
        '7LT' => 'E02000767',
        '7LU' => 'E02000767',
        '7LW' => 'E02000767',
        '7LX' => 'E02000763',
        '7LY' => 'E02000763',
        '7LZ' => 'E02000767',
        '7NA' => 'E02000767',
        '7NB' => 'E02000767',
        '7ND' => 'E02000767',
        '7NE' => 'E02000767',
        '7NF' => 'E02000767',
        '7NG' => 'E02000763',
        '7NH' => 'E02000767',
        '7NJ' => 'E02000763',
        '7NL' => 'E02000763',
        '7NN' => 'E02000763',
        '7NP' => 'E02000763',
        '7NQ' => 'E02000763',
        '7NR' => 'E02000767',
        '7NS' => 'E02000767',
        '7NT' => 'E02000767',
        '7NU' => 'E02000780',
        '7NW' => 'E02000763',
        '7NX' => 'E02000767',
        '7NY' => 'E02000767',
        '7NZ' => 'E02000767',
        '7PA' => 'E02000780',
        '7PB' => 'E02000763',
        '7PD' => 'E02000763',
        '7PE' => 'E02000780',
        '7PG' => 'E02000780',
        '7PJ' => 'E02000763',
        '7PL' => 'E02000763',
        '7PN' => 'E02000763',
        '7PP' => 'E02000763',
        '7PQ' => 'E02000763',
        '7PR' => 'E02000763',
        '7PS' => 'E02000763',
        '7PT' => 'E02000763',
        '7PU' => 'E02000763',
        '7PW' => 'E02000763',
        '7PX' => 'E02000763',
        '7PY' => 'E02000763',
        '7PZ' => 'E02000763',
        '7QA' => 'E02000763',
        '7QB' => 'E02000763',
        '7QD' => 'E02000763',
        '7QE' => 'E02000763',
        '7QF' => 'E02000763',
        '7QG' => 'E02000763',
        '7QH' => 'E02000763',
        '7QJ' => 'E02000763',
        '7QL' => 'E02000763',
        '7QN' => 'E02000763',
        '7QP' => 'E02000763',
        '7QQ' => 'E02000763',
        '7QR' => 'E02000773',
        '7QT' => 'E02000773',
        '7QW' => 'E02000763',
        '7QX' => 'E02000773',
        '7QY' => 'E02000773',
        '7QZ' => 'E02000773',
        '7RA' => 'E02000773',
        '7RB' => 'E02000773',
        '7RD' => 'E02000773',
        '7RE' => 'E02000773',
        '7RF' => 'E02000773',
        '7RG' => 'E02000773',
        '7RH' => 'E02000767',
        '7RJ' => 'E02000767',
        '7RL' => 'E02000767',
        '7RN' => 'E02000763',
        '7RP' => 'E02000763',
        '7RQ' => 'E02000773',
        '7RR' => 'E02000763',
        '7RS' => 'E02000763',
        '7RT' => 'E02000763',
        '7RU' => 'E02000763',
        '7RW' => 'E02000763',
        '7RX' => 'E02000763',
        '7RY' => 'E02000763',
        '7RZ' => 'E02000763',
        '7SA' => 'E02000763',
        '7SB' => 'E02000763',
        '7SD' => 'E02000770',
        '7SE' => 'E02000770',
        '7SF' => 'E02000770',
        '7SG' => 'E02000770',
        '7SH' => 'E02000763',
        '7SJ' => 'E02000767',
        '7SL' => 'E02000780',
        '7SN' => 'E02000763',
        '7SQ' => 'E02000763',
        '7SR' => 'E02000763',
        '7SS' => 'E02000763',
        '7ST' => 'E02000763',
        '7SU' => 'E02000763',
        '7SW' => 'E02000763',
        '7SX' => 'E02000763',
        '7SY' => 'E02000763',
        '7SZ' => 'E02000763',
        '7TA' => 'E02000763',
        '7TD' => 'E02000763',
        '7TE' => 'E02000763',
        '7TF' => 'E02000763',
        '7TG' => 'E02000763',
        '7TH' => 'E02000763',
        '7TJ' => 'E02000763',
        '7TL' => 'E02000763',
        '7TN' => 'E02000763',
        '7TP' => 'E02000763',
        '7TQ' => 'E02000763',
        '7TR' => 'E02000763',
        '7TS' => 'E02000763',
        '7TT' => 'E02000780',
        '7TW' => 'E02000763',
        '7WA' => 'E02000780',
        '7WB' => 'E02000780',
        '7WD' => 'E02000780',
        '7WE' => 'E02000780',
        '7WF' => 'E02000780',
        '7WG' => 'E02000780',
        '7WH' => 'E02000780',
        '7WJ' => 'E02000780',
        '7WL' => 'E02000780',
        '7WN' => 'E02000780',
        '7WP' => 'E02000780',
        '7WQ' => 'E02000780',
        '7WR' => 'E02000780',
        '7WS' => 'E02000780',
        '7WT' => 'E02000780',
        '7WU' => 'E02000780',
        '7WW' => 'E02000780',
        '7WX' => 'E02000780',
        '7WY' => 'E02000780',
        '7WZ' => 'E02000780',
        '7XY' => 'E02000780',
        '7XZ' => 'E02000780',
        '7YB' => 'E02000780',
        '7YF' => 'E02000780',
        '7YQ' => 'E02000780',
        '7YT' => 'E02000780',
        '7YZ' => 'E02000780',
        '7ZQ' => 'E02000770',
        '7ZS' => 'E02000770',
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
