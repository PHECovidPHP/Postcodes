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
final class HU10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02002710',
        '6AB' => 'E02002710',
        '6AD' => 'E02002710',
        '6AE' => 'E02002710',
        '6AF' => 'E02002710',
        '6AG' => 'E02002710',
        '6AH' => 'E02002710',
        '6AJ' => 'E02002708',
        '6AL' => 'E02002710',
        '6AN' => 'E02002710',
        '6AP' => 'E02002710',
        '6AQ' => 'E02002711',
        '6AR' => 'E02002708',
        '6AS' => 'E02002708',
        '6AT' => 'E02002708',
        '6AU' => 'E02002710',
        '6AW' => 'E02002711',
        '6AX' => 'E02002710',
        '6AY' => 'E02002710',
        '6AZ' => 'E02002710',
        '6BA' => 'E02002710',
        '6BB' => 'E02002710',
        '6BD' => 'E02002708',
        '6BE' => 'E02002708',
        '6BF' => 'E02002711',
        '6BG' => 'E02002711',
        '6BH' => 'E02002710',
        '6BJ' => 'E02002711',
        '6BL' => 'E02002710',
        '6BN' => 'E02002710',
        '6BP' => 'E02002710',
        '6BQ' => 'E02002711',
        '6BS' => 'E02002711',
        '6BT' => 'E02002710',
        '6BU' => 'E02002710',
        '6BW' => 'E02002710',
        '6BX' => 'E02002710',
        '6BY' => 'E02002711',
        '6BZ' => 'E02002711',
        '6DA' => 'E02002711',
        '6DB' => 'E02002711',
        '6DD' => 'E02002711',
        '6DE' => 'E02002711',
        '6DF' => 'E02002711',
        '6DG' => 'E02002711',
        '6DH' => 'E02002711',
        '6DJ' => 'E02002711',
        '6DL' => 'E02002711',
        '6DN' => 'E02002705',
        '6DP' => 'E02002711',
        '6DQ' => 'E02002711',
        '6DR' => 'E02002710',
        '6DS' => 'E02002705',
        '6DT' => 'E02002711',
        '6DU' => 'E02002711',
        '6DW' => 'E02002711',
        '6DX' => 'E02002710',
        '6DY' => 'E02002711',
        '6DZ' => 'E02002711',
        '6EA' => 'E02002711',
        '6EB' => 'E02002711',
        '6ED' => 'E02002705',
        '6EE' => 'E02002705',
        '6EF' => 'E02002705',
        '6EG' => 'E02002708',
        '6EJ' => 'E02002717',
        '6EL' => 'E02002717',
        '6EN' => 'E02002717',
        '6EP' => 'E02002711',
        '6EQ' => 'E02002710',
        '6ER' => 'E02002711',
        '6ES' => 'E02002711',
        '6ET' => 'E02002711',
        '6EU' => 'E02002711',
        '6EX' => 'E02002711',
        '6EY' => 'E02002711',
        '6EZ' => 'E02002711',
        '6FA' => 'E02002717',
        '6FB' => 'E02002710',
        '6FD' => 'E02002717',
        '6FE' => 'E02002705',
        '6FH' => 'E02002717',
        '6FJ' => 'E02002711',
        '6FL' => 'E02002711',
        '6FN' => 'E02002711',
        '6FP' => 'E02002711',
        '6FQ' => 'E02002708',
        '6FR' => 'E02002710',
        '6FS' => 'E02002711',
        '6FT' => 'E02002710',
        '6FU' => 'E02002710',
        '6FW' => 'E02002710',
        '6GA' => 'E02002711',
        '6GB' => 'E02002710',
        '6GD' => 'E02002711',
        '6HA' => 'E02002711',
        '6HB' => 'E02002710',
        '6HD' => 'E02002711',
        '6HE' => 'E02002710',
        '6HG' => 'E02002710',
        '6HH' => 'E02002708',
        '6HJ' => 'E02002708',
        '6HL' => 'E02002708',
        '6HN' => 'E02002708',
        '6HP' => 'E02002708',
        '6HQ' => 'E02002710',
        '6HR' => 'E02002708',
        '6HS' => 'E02002708',
        '6HT' => 'E02002708',
        '6HU' => 'E02002708',
        '6HW' => 'E02002708',
        '6HX' => 'E02002708',
        '6HZ' => 'E02002708',
        '6JA' => 'E02002708',
        '6JB' => 'E02002708',
        '6JD' => 'E02002708',
        '6JE' => 'E02002708',
        '6JF' => 'E02002708',
        '6JG' => 'E02002708',
        '6JH' => 'E02002708',
        '6JJ' => 'E02002708',
        '6JL' => 'E02002708',
        '6JN' => 'E02002708',
        '6JP' => 'E02002710',
        '6JQ' => 'E02002708',
        '6JR' => 'E02002710',
        '6JS' => 'E02002710',
        '6JT' => 'E02002708',
        '6JU' => 'E02002708',
        '6JW' => 'E02002710',
        '6JX' => 'E02002708',
        '6JY' => 'E02002708',
        '6JZ' => 'E02002708',
        '6LA' => 'E02002708',
        '6LB' => 'E02002708',
        '6LD' => 'E02002717',
        '6LF' => 'E02002710',
        '6LG' => 'E02002710',
        '6LH' => 'E02002710',
        '6LJ' => 'E02002710',
        '6LL' => 'E02002710',
        '6LN' => 'E02002710',
        '6LP' => 'E02002710',
        '6LQ' => 'E02002710',
        '6LR' => 'E02002710',
        '6LS' => 'E02002710',
        '6LT' => 'E02002710',
        '6LU' => 'E02002710',
        '6LW' => 'E02002710',
        '6LX' => 'E02002710',
        '6LY' => 'E02002710',
        '6LZ' => 'E02002710',
        '6NA' => 'E02002710',
        '6NB' => 'E02002710',
        '6ND' => 'E02002710',
        '6NE' => 'E02002710',
        '6NF' => 'E02002710',
        '6NG' => 'E02002710',
        '6NH' => 'E02002710',
        '6NJ' => 'E02002710',
        '6NL' => 'E02002710',
        '6NN' => 'E02002710',
        '6NP' => 'E02002710',
        '6NR' => 'E02002710',
        '6NS' => 'E02002711',
        '6NT' => 'E02002705',
        '6PA' => 'E02002710',
        '6PB' => 'E02002710',
        '6PD' => 'E02002710',
        '6PE' => 'E02002710',
        '6PF' => 'E02002710',
        '6PG' => 'E02002710',
        '6PH' => 'E02002710',
        '6PJ' => 'E02002710',
        '6PL' => 'E02002710',
        '6PN' => 'E02002710',
        '6PP' => 'E02002710',
        '6PQ' => 'E02002710',
        '6PR' => 'E02002710',
        '6PS' => 'E02002710',
        '6PT' => 'E02002710',
        '6PU' => 'E02002710',
        '6PW' => 'E02002710',
        '6PX' => 'E02002710',
        '6PY' => 'E02002710',
        '6PZ' => 'E02002710',
        '6QA' => 'E02002710',
        '6QB' => 'E02002710',
        '6QD' => 'E02002710',
        '6QE' => 'E02002710',
        '6QF' => 'E02002710',
        '6QG' => 'E02002710',
        '6QH' => 'E02002710',
        '6QJ' => 'E02002710',
        '6QL' => 'E02002710',
        '6QN' => 'E02002710',
        '6QP' => 'E02002710',
        '6QQ' => 'E02002710',
        '6QR' => 'E02002710',
        '6QS' => 'E02002710',
        '6QT' => 'E02002710',
        '6QU' => 'E02002710',
        '6QW' => 'E02002710',
        '6QX' => 'E02002710',
        '6QY' => 'E02002710',
        '6QZ' => 'E02002710',
        '6RA' => 'E02002710',
        '6RB' => 'E02002710',
        '6RD' => 'E02002710',
        '6RE' => 'E02002710',
        '6RF' => 'E02002710',
        '6RG' => 'E02002710',
        '6RH' => 'E02002711',
        '6RJ' => 'E02006814',
        '6RL' => 'E02002710',
        '6RN' => 'E02006814',
        '6RP' => 'E02002717',
        '6RR' => 'E02002717',
        '6RS' => 'E02002717',
        '6RT' => 'E02002710',
        '6RU' => 'E02002710',
        '6RW' => 'E02002710',
        '6RX' => 'E02002717',
        '6RY' => 'E02002717',
        '6RZ' => 'E02002710',
        '6SA' => 'E02002710',
        '6SB' => 'E02002710',
        '6SD' => 'E02002710',
        '6SE' => 'E02002710',
        '6SF' => 'E02002710',
        '6SG' => 'E02002710',
        '6SH' => 'E02002717',
        '6SJ' => 'E02006814',
        '6SL' => 'E02002717',
        '6SN' => 'E02002710',
        '6SP' => 'E02002717',
        '6SQ' => 'E02002717',
        '6SR' => 'E02002717',
        '6SS' => 'E02006814',
        '6ST' => 'E02006814',
        '6SU' => 'E02006814',
        '6SW' => 'E02002717',
        '6SX' => 'E02006814',
        '6SY' => 'E02006814',
        '6SZ' => 'E02002717',
        '6TA' => 'E02006814',
        '6TB' => 'E02006814',
        '6TD' => 'E02006814',
        '6TE' => 'E02002717',
        '6TF' => 'E02002717',
        '6TG' => 'E02002717',
        '6TH' => 'E02002710',
        '6TJ' => 'E02002717',
        '6TL' => 'E02002717',
        '6TN' => 'E02002717',
        '6TP' => 'E02002710',
        '6TQ' => 'E02002717',
        '6TS' => 'E02002705',
        '6TW' => 'E02002710',
        '6TY' => 'E02006814',
        '6TZ' => 'E02002717',
        '6UA' => 'E02002717',
        '6UB' => 'E02002717',
        '6UD' => 'E02006814',
        '6UE' => 'E02006814',
        '6UF' => 'E02006814',
        '6UG' => 'E02002717',
        '6UH' => 'E02002717',
        '6UJ' => 'E02002717',
        '6UL' => 'E02002717',
        '6UN' => 'E02002717',
        '6UP' => 'E02006814',
        '6UQ' => 'E02006814',
        '6UR' => 'E02006814',
        '6US' => 'E02006814',
        '6UT' => 'E02006814',
        '6UU' => 'E02006814',
        '6UW' => 'E02002717',
        '6UX' => 'E02006814',
        '6UY' => 'E02006814',
        '6UZ' => 'E02002717',
        '6WA' => 'E02002717',
        '6WB' => 'E02006814',
        '6WD' => 'E02002717',
        '6WE' => 'E02002717',
        '6WF' => 'E02002717',
        '6WG' => 'E02002717',
        '6WH' => 'E02002717',
        '6WJ' => 'E02002717',
        '6WL' => 'E02002717',
        '6WN' => 'E02002717',
        '6WP' => 'E02002717',
        '6WQ' => 'E02006814',
        '6WR' => 'E02002717',
        '6WS' => 'E02002717',
        '6WT' => 'E02002717',
        '6WU' => 'E02006814',
        '6WW' => 'E02006814',
        '6WX' => 'E02002717',
        '6WY' => 'E02006814',
        '6WZ' => 'E02002717',
        '6XA' => 'E02002711',
        '6XB' => 'E02002711',
        '6XD' => 'E02002717',
        '6XQ' => 'E02002711',
        '6XR' => 'E02002717',
        '6XS' => 'E02002717',
        '6XT' => 'E02002717',
        '6XU' => 'E02002717',
        '6XW' => 'E02002710',
        '6XX' => 'E02002717',
        '6XY' => 'E02002717',
        '6XZ' => 'E02002710',
        '6YA' => 'E02002710',
        '6YB' => 'E02002710',
        '6YD' => 'E02002710',
        '6YE' => 'E02002710',
        '6YF' => 'E02002717',
        '6YG' => 'E02002710',
        '6YH' => 'E02002710',
        '6YJ' => 'E02002710',
        '6YL' => 'E02002710',
        '6YN' => 'E02002710',
        '6YP' => 'E02002710',
        '6YQ' => 'E02002710',
        '6YR' => 'E02002710',
        '6YS' => 'E02002710',
        '6YT' => 'E02002710',
        '6YU' => 'E02002710',
        '6YW' => 'E02002710',
        '6YX' => 'E02002710',
        '6YY' => 'E02002710',
        '6YZ' => 'E02002710',
        '7AA' => 'E02002710',
        '7AB' => 'E02002710',
        '7AD' => 'E02002710',
        '7AE' => 'E02002710',
        '7AF' => 'E02002710',
        '7AG' => 'E02002710',
        '7AH' => 'E02002711',
        '7AJ' => 'E02002710',
        '7AL' => 'E02002710',
        '7AN' => 'E02002717',
        '7AP' => 'E02002710',
        '7AQ' => 'E02002711',
        '7AR' => 'E02002710',
        '7AS' => 'E02002710',
        '7AT' => 'E02002710',
        '7AU' => 'E02002710',
        '7AW' => 'E02002717',
        '7AX' => 'E02002710',
        '7AY' => 'E02002717',
        '7AZ' => 'E02002717',
        '7BA' => 'E02002717',
        '7BB' => 'E02002717',
        '7BD' => 'E02002711',
        '7BE' => 'E02002710',
        '7BG' => 'E02002711',
        '7BH' => 'E02002710',
        '7BJ' => 'E02002711',
        '7BL' => 'E02002717',
        '7BN' => 'E02002710',
        '7BP' => 'E02002717',
        '7BQ' => 'E02002711',
        '7BS' => 'E02002717',
        '7BT' => 'E02002717',
        '7BU' => 'E02002710',
        '7BW' => 'E02002717',
        '7BX' => 'E02002710',
        '7BY' => 'E02002717',
        '7BZ' => 'E02002717',
        '7DA' => 'E02002717',
        '7DB' => 'E02002717',
        '7DD' => 'E02002717',
        '7DE' => 'E02002717',
        '7DF' => 'E02002710',
        '7DG' => 'E02002717',
        '7DH' => 'E02002717',
        '7DJ' => 'E02002711',
        '7DL' => 'E02002717',
        '7DN' => 'E02002717',
        '7DP' => 'E02002710',
        '7DQ' => 'E02002711',
        '7DR' => 'E02002711',
        '7DS' => 'E02002711',
        '7DT' => 'E02002711',
        '7DU' => 'E02002711',
        '7DW' => 'E02002717',
        '7DX' => 'E02002711',
        '7DY' => 'E02002711',
        '7DZ' => 'E02002711',
        '7EA' => 'E02002711',
        '7EB' => 'E02002711',
        '7ED' => 'E02002711',
        '7EE' => 'E02002711',
        '7EF' => 'E02002711',
        '7EG' => 'E02002711',
        '7EH' => 'E02002711',
        '7EJ' => 'E02002711',
        '7EL' => 'E02002711',
        '7EN' => 'E02002711',
        '7EP' => 'E02002711',
        '7EQ' => 'E02002711',
        '7ER' => 'E02002717',
        '7ES' => 'E02002717',
        '7ET' => 'E02002717',
        '7EU' => 'E02002717',
        '7EW' => 'E02002717',
        '7EX' => 'E02002717',
        '7EY' => 'E02002717',
        '7EZ' => 'E02002717',
        '7FA' => 'E02002711',
        '7FB' => 'E02002710',
        '7FD' => 'E02002711',
        '7FE' => 'E02002711',
        '7FF' => 'E02002711',
        '7FG' => 'E02002711',
        '7FH' => 'E02002711',
        '7FJ' => 'E02002711',
        '7FL' => 'E02002711',
        '7FN' => 'E02002711',
        '7FP' => 'E02002711',
        '7FT' => 'E02002711',
        '7FW' => 'E02002711',
        '7GA' => 'E02002710',
        '7HA' => 'E02002710',
        '7HB' => 'E02002711',
        '7HD' => 'E02002711',
        '7HE' => 'E02002711',
        '7HF' => 'E02002711',
        '7HG' => 'E02002711',
        '7HH' => 'E02002711',
        '7HJ' => 'E02002711',
        '7HL' => 'E02002711',
        '7HN' => 'E02002711',
        '7HP' => 'E02002711',
        '7HQ' => 'E02002711',
        '7HR' => 'E02002711',
        '7HS' => 'E02002711',
        '7HT' => 'E02002711',
        '7HU' => 'E02002711',
        '7HW' => 'E02002711',
        '7HX' => 'E02002711',
        '7HY' => 'E02002711',
        '7HZ' => 'E02002711',
        '7JD' => 'E02002711',
        '7JE' => 'E02002711',
        '7JF' => 'E02002711',
        '7JG' => 'E02002711',
        '7JH' => 'E02002711',
        '7JJ' => 'E02002711',
        '7JL' => 'E02002711',
        '7JN' => 'E02002711',
        '7JP' => 'E02002711',
        '7JR' => 'E02002711',
        '7JS' => 'E02002711',
        '7JT' => 'E02002711',
        '7JU' => 'E02002711',
        '7JW' => 'E02002711',
        '7LA' => 'E02002711',
        '7LB' => 'E02002711',
        '7LD' => 'E02002711',
        '7LE' => 'E02002711',
        '7LG' => 'E02002711',
        '7LH' => 'E02002710',
        '7LL' => 'E02002710',
        '7LN' => 'E02002711',
        '7LP' => 'E02002710',
        '7LR' => 'E02002710',
        '7LS' => 'E02002710',
        '7LT' => 'E02002711',
        '7LU' => 'E02002711',
        '7LW' => 'E02002711',
        '7LX' => 'E02002717',
        '7LY' => 'E02002711',
        '7LZ' => 'E02002711',
        '7NA' => 'E02002711',
        '7NB' => 'E02002711',
        '7ND' => 'E02002711',
        '7NE' => 'E02002711',
        '7NF' => 'E02002711',
        '7NG' => 'E02002711',
        '7NH' => 'E02002711',
        '7NJ' => 'E02002711',
        '7NL' => 'E02002711',
        '7NN' => 'E02002711',
        '7NP' => 'E02002711',
        '7NR' => 'E02002711',
        '7NS' => 'E02002711',
        '7NT' => 'E02002711',
        '7NU' => 'E02002711',
        '7NX' => 'E02002711',
        '7NY' => 'E02002711',
        '7PA' => 'E02002711',
        '7PB' => 'E02002711',
        '7PD' => 'E02002711',
        '7PE' => 'E02002711',
        '7PF' => 'E02002711',
        '7PG' => 'E02002711',
        '7PH' => 'E02002711',
        '7PJ' => 'E02002711',
        '7PL' => 'E02002711',
        '7PP' => 'E02002711',
        '7PR' => 'E02002711',
        '7PS' => 'E02002711',
        '7PW' => 'E02002711',
        '7PX' => 'E02002711',
        '7QA' => 'E02002711',
        '7QB' => 'E02002711',
        '7QD' => 'E02002711',
        '7QE' => 'E02002711',
        '7QF' => 'E02002711',
        '7QG' => 'E02002711',
        '7QH' => 'E02002711',
        '7QJ' => 'E02002711',
        '7QL' => 'E02002711',
        '7QN' => 'E02002711',
        '7QP' => 'E02002711',
        '7QQ' => 'E02002711',
        '7QR' => 'E02002711',
        '7QS' => 'E02002711',
        '7QT' => 'E02002711',
        '7QU' => 'E02002711',
        '7QW' => 'E02002711',
        '7QX' => 'E02002711',
        '7QY' => 'E02002711',
        '7QZ' => 'E02002711',
        '7RF' => 'E02002711',
        '7RN' => 'E02002711',
        '7RP' => 'E02002711',
        '7RQ' => 'E02002711',
        '7RR' => 'E02002711',
        '7RS' => 'E02002711',
        '7RT' => 'E02002711',
        '7RU' => 'E02002711',
        '7RW' => 'E02002711',
        '7RX' => 'E02002711',
        '7RY' => 'E02002711',
        '7SA' => 'E02002711',
        '7SB' => 'E02002711',
        '7SD' => 'E02002711',
        '7SE' => 'E02002711',
        '7SF' => 'E02002711',
        '7SG' => 'E02002711',
        '7SH' => 'E02002711',
        '7TA' => 'E02002711',
        '7TB' => 'E02002711',
        '7TD' => 'E02002711',
        '7TE' => 'E02002711',
        '7TF' => 'E02002711',
        '7TG' => 'E02002711',
        '7TH' => 'E02002711',
        '7TJ' => 'E02002711',
        '7TL' => 'E02002711',
        '7TN' => 'E02002711',
        '7TP' => 'E02002711',
        '7TQ' => 'E02002711',
        '7TR' => 'E02002711',
        '7TS' => 'E02002711',
        '7TT' => 'E02002705',
        '7TU' => 'E02002711',
        '7TW' => 'E02002711',
        '7TX' => 'E02002711',
        '7TY' => 'E02002711',
        '7TZ' => 'E02002710',
        '7UA' => 'E02002710',
        '7UB' => 'E02002710',
        '7UD' => 'E02002711',
        '7UE' => 'E02002710',
        '7UF' => 'E02002710',
        '7UG' => 'E02002710',
        '7UH' => 'E02002710',
        '7UJ' => 'E02002710',
        '7UL' => 'E02002711',
        '7UN' => 'E02002710',
        '7UP' => 'E02002711',
        '7UQ' => 'E02002710',
        '7UR' => 'E02002711',
        '7US' => 'E02002711',
        '7UT' => 'E02002711',
        '7UU' => 'E02002711',
        '7UW' => 'E02002711',
        '7UX' => 'E02002711',
        '7UY' => 'E02002711',
        '7UZ' => 'E02002710',
        '7WA' => 'E02002717',
        '7WB' => 'E02002717',
        '7WD' => 'E02002717',
        '7WE' => 'E02002717',
        '7WF' => 'E02002717',
        '7WG' => 'E02002717',
        '7WH' => 'E02002717',
        '7WJ' => 'E02002717',
        '7WL' => 'E02002717',
        '7WN' => 'E02002717',
        '7WP' => 'E02002717',
        '7WQ' => 'E02002717',
        '7WR' => 'E02002717',
        '7WS' => 'E02002717',
        '7WT' => 'E02002717',
        '7WU' => 'E02002717',
        '7WW' => 'E02002710',
        '7WX' => 'E02002717',
        '7WY' => 'E02002717',
        '7WZ' => 'E02002717',
        '7XA' => 'E02002710',
        '7XB' => 'E02002711',
        '7XD' => 'E02002711',
        '7XH' => 'E02002717',
        '7XJ' => 'E02002710',
        '7XL' => 'E02002717',
        '7XN' => 'E02002710',
        '7XP' => 'E02002717',
        '7XQ' => 'E02002717',
        '7XR' => 'E02002717',
        '7XS' => 'E02002717',
        '7XT' => 'E02002710',
        '7XU' => 'E02002711',
        '7XW' => 'E02002710',
        '7XX' => 'E02002711',
        '7XY' => 'E02002717',
        '7XZ' => 'E02002711',
        '7YA' => 'E02002711',
        '7YB' => 'E02002711',
        '7YD' => 'E02002717',
        '7YE' => 'E02002717',
        '7YF' => 'E02002711',
        '7YG' => 'E02002711',
        '7YH' => 'E02002711',
        '7YJ' => 'E02002711',
        '7YL' => 'E02002711',
        '7YN' => 'E02002717',
        '7YP' => 'E02002711',
        '7YQ' => 'E02002711',
        '7YR' => 'E02002711',
        '7YS' => 'E02002711',
        '7YT' => 'E02002717',
        '7YU' => 'E02002711',
        '7YW' => 'E02002717',
        '7YX' => 'E02002717',
        '7YY' => 'E02002717',
        '7YZ' => 'E02002711',
        '7ZP' => 'E02002717',
        '7ZT' => 'E02002717',
        '9AA' => 'E02002717',
        '9AB' => 'E02002717',
        '9AE' => 'E02002717',
        '9AF' => 'E02002717',
        '9AH' => 'E02002717',
        '9AJ' => 'E02002717',
        '9AL' => 'E02002717',
        '9AN' => 'E02002717',
        '9AP' => 'E02002717',
        '9AQ' => 'E02002717',
        '9AR' => 'E02002717',
        '9AS' => 'E02002717',
        '9AT' => 'E02002717',
        '9AU' => 'E02002717',
        '9AW' => 'E02002717',
        '9AX' => 'E02002717',
        '9AY' => 'E02002717',
        '9AZ' => 'E02002717',
        '9BA' => 'E02002717',
        '9BB' => 'E02002717',
        '9BD' => 'E02002717',
        '9BE' => 'E02002717',
        '9BF' => 'E02002717',
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
