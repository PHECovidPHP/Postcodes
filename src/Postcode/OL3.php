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
final class OL3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02001103',
        '5AB' => 'E02001110',
        '5AD' => 'E02001110',
        '5AE' => 'E02001103',
        '5AF' => 'E02001110',
        '5AG' => 'E02001110',
        '5AH' => 'E02001103',
        '5AJ' => 'E02001103',
        '5AL' => 'E02001103',
        '5AN' => 'E02001103',
        '5AP' => 'E02001110',
        '5AQ' => 'E02001110',
        '5AR' => 'E02001110',
        '5AS' => 'E02001110',
        '5AT' => 'E02001110',
        '5AU' => 'E02001110',
        '5AW' => 'E02001110',
        '5AX' => 'E02001103',
        '5AY' => 'E02001110',
        '5AZ' => 'E02001110',
        '5BA' => 'E02001110',
        '5BB' => 'E02001110',
        '5BD' => 'E02001110',
        '5BE' => 'E02001110',
        '5BF' => 'E02001103',
        '5BG' => 'E02001110',
        '5BH' => 'E02001110',
        '5BJ' => 'E02001110',
        '5BL' => 'E02001110',
        '5BN' => 'E02001110',
        '5BP' => 'E02001110',
        '5BQ' => 'E02001110',
        '5BS' => 'E02001110',
        '5BT' => 'E02001110',
        '5BU' => 'E02001110',
        '5BW' => 'E02001110',
        '5BX' => 'E02001110',
        '5BY' => 'E02001110',
        '5BZ' => 'E02001103',
        '5DA' => 'E02001110',
        '5DB' => 'E02001110',
        '5DD' => 'E02001110',
        '5DE' => 'E02001110',
        '5DF' => 'E02001110',
        '5DG' => 'E02001110',
        '5DH' => 'E02001110',
        '5DJ' => 'E02001110',
        '5DL' => 'E02001103',
        '5DN' => 'E02001103',
        '5DP' => 'E02001103',
        '5DQ' => 'E02001110',
        '5DR' => 'E02001103',
        '5DS' => 'E02001110',
        '5DT' => 'E02001110',
        '5DU' => 'E02001110',
        '5DW' => 'E02001103',
        '5DX' => 'E02001110',
        '5DY' => 'E02001110',
        '5DZ' => 'E02001110',
        '5EA' => 'E02001110',
        '5EB' => 'E02001110',
        '5ED' => 'E02001110',
        '5EE' => 'E02001110',
        '5EF' => 'E02001110',
        '5EG' => 'E02001110',
        '5EH' => 'E02001110',
        '5EJ' => 'E02001110',
        '5EL' => 'E02001110',
        '5EN' => 'E02001103',
        '5EP' => 'E02001110',
        '5EQ' => 'E02001110',
        '5ER' => 'E02001110',
        '5ES' => 'E02001110',
        '5ET' => 'E02001110',
        '5EU' => 'E02001103',
        '5EW' => 'E02001110',
        '5EX' => 'E02001103',
        '5EY' => 'E02001103',
        '5EZ' => 'E02001103',
        '5FA' => 'E02001103',
        '5FB' => 'E02001103',
        '5FD' => 'E02001103',
        '5FE' => 'E02001103',
        '5FF' => 'E02001103',
        '5FG' => 'E02001103',
        '5FH' => 'E02001103',
        '5FJ' => 'E02001103',
        '5FL' => 'E02001103',
        '5FN' => 'E02001103',
        '5FP' => 'E02001103',
        '5FQ' => 'E02001103',
        '5FR' => 'E02001103',
        '5FS' => 'E02001103',
        '5FT' => 'E02001103',
        '5FU' => 'E02001103',
        '5FX' => 'E02001110',
        '5FZ' => 'E02001110',
        '5GA' => 'E02001103',
        '5GB' => 'E02001103',
        '5GD' => 'E02001110',
        '5GE' => 'E02001110',
        '5GF' => 'E02001110',
        '5GG' => 'E02001110',
        '5GH' => 'E02001103',
        '5GJ' => 'E02001103',
        '5GL' => 'E02001110',
        '5GN' => 'E02001110',
        '5GP' => 'E02001103',
        '5GR' => 'E02001103',
        '5GS' => 'E02001110',
        '5GZ' => 'E02001103',
        '5HA' => 'E02001103',
        '5HB' => 'E02001103',
        '5HD' => 'E02001103',
        '5HE' => 'E02001103',
        '5HF' => 'E02001103',
        '5HG' => 'E02001103',
        '5HH' => 'E02001103',
        '5HJ' => 'E02001103',
        '5HL' => 'E02001103',
        '5HN' => 'E02001103',
        '5HP' => 'E02001110',
        '5HQ' => 'E02001103',
        '5HR' => 'E02001110',
        '5HS' => 'E02001103',
        '5HT' => 'E02001103',
        '5HU' => 'E02001103',
        '5HW' => 'E02001110',
        '5HX' => 'E02001103',
        '5HY' => 'E02001103',
        '5HZ' => 'E02001103',
        '5JA' => 'E02001110',
        '5JB' => 'E02001110',
        '5JD' => 'E02001110',
        '5JE' => 'E02001110',
        '5JF' => 'E02001110',
        '5JG' => 'E02001110',
        '5JH' => 'E02001103',
        '5JJ' => 'E02001103',
        '5JL' => 'E02001103',
        '5JN' => 'E02001103',
        '5JP' => 'E02001103',
        '5JQ' => 'E02001103',
        '5JR' => 'E02001103',
        '5JS' => 'E02001103',
        '5JT' => 'E02001103',
        '5JU' => 'E02001103',
        '5JW' => 'E02001103',
        '5JX' => 'E02001103',
        '5JY' => 'E02001103',
        '5JZ' => 'E02001103',
        '5LA' => 'E02001103',
        '5LB' => 'E02001103',
        '5LD' => 'E02001103',
        '5LE' => 'E02001110',
        '5LF' => 'E02001103',
        '5LG' => 'E02001103',
        '5LH' => 'E02001103',
        '5LJ' => 'E02001103',
        '5LL' => 'E02001103',
        '5LN' => 'E02001103',
        '5LP' => 'E02001103',
        '5LQ' => 'E02001103',
        '5LR' => 'E02001103',
        '5LS' => 'E02001103',
        '5LT' => 'E02001103',
        '5LU' => 'E02001103',
        '5LW' => 'E02001103',
        '5LX' => 'E02001103',
        '5LY' => 'E02001103',
        '5LZ' => 'E02001103',
        '5NA' => 'E02001103',
        '5NB' => 'E02001103',
        '5ND' => 'E02001103',
        '5NE' => 'E02001103',
        '5NF' => 'E02001103',
        '5NG' => 'E02001103',
        '5NH' => 'E02001103',
        '5NJ' => 'E02001103',
        '5NL' => 'E02001110',
        '5NN' => 'E02001110',
        '5NP' => 'E02001110',
        '5NQ' => 'E02001103',
        '5NR' => 'E02001103',
        '5NS' => 'E02001103',
        '5NT' => 'E02001103',
        '5NU' => 'E02001103',
        '5NW' => 'E02001110',
        '5NX' => 'E02001103',
        '5NY' => 'E02001103',
        '5NZ' => 'E02001103',
        '5PA' => 'E02001110',
        '5PB' => 'E02001110',
        '5PD' => 'E02001103',
        '5PE' => 'E02001103',
        '5PF' => 'E02001103',
        '5PG' => 'E02001103',
        '5PH' => 'E02001103',
        '5PJ' => 'E02001103',
        '5PL' => 'E02001103',
        '5PN' => 'E02001103',
        '5PP' => 'E02001103',
        '5PQ' => 'E02001103',
        '5PR' => 'E02001103',
        '5PS' => 'E02001103',
        '5PT' => 'E02001103',
        '5PU' => 'E02001103',
        '5PW' => 'E02001103',
        '5PX' => 'E02001103',
        '5PY' => 'E02001103',
        '5PZ' => 'E02001103',
        '5QA' => 'E02001110',
        '5QB' => 'E02001110',
        '5QD' => 'E02001110',
        '5QE' => 'E02001110',
        '5QF' => 'E02001103',
        '5QG' => 'E02001103',
        '5QH' => 'E02001110',
        '5QJ' => 'E02001103',
        '5QL' => 'E02001103',
        '5QN' => 'E02001103',
        '5QP' => 'E02001103',
        '5QQ' => 'E02001110',
        '5QR' => 'E02001103',
        '5QS' => 'E02001110',
        '5QT' => 'E02001110',
        '5QU' => 'E02001110',
        '5QW' => 'E02001110',
        '5QX' => 'E02001110',
        '5QY' => 'E02001110',
        '5QZ' => 'E02001110',
        '5RA' => 'E02001110',
        '5RB' => 'E02001110',
        '5RD' => 'E02001110',
        '5RE' => 'E02001110',
        '5RF' => 'E02001110',
        '5RG' => 'E02001110',
        '5RH' => 'E02001110',
        '5RJ' => 'E02001110',
        '5RL' => 'E02001103',
        '5RN' => 'E02001103',
        '5RP' => 'E02001103',
        '5RQ' => 'E02001110',
        '5RR' => 'E02001110',
        '5RS' => 'E02001103',
        '5RT' => 'E02001103',
        '5RU' => 'E02001110',
        '5RW' => 'E02001103',
        '5RX' => 'E02001103',
        '5RY' => 'E02001103',
        '5RZ' => 'E02001103',
        '5SA' => 'E02001103',
        '5SB' => 'E02001103',
        '5SD' => 'E02001103',
        '5SE' => 'E02001103',
        '5SF' => 'E02001103',
        '5SG' => 'E02001103',
        '5SH' => 'E02001103',
        '5SJ' => 'E02001103',
        '5SL' => 'E02001103',
        '5SN' => 'E02001103',
        '5SP' => 'E02001103',
        '5SQ' => 'E02001103',
        '5SR' => 'E02001103',
        '5SS' => 'E02001103',
        '5ST' => 'E02001103',
        '5SU' => 'E02001103',
        '5SW' => 'E02001103',
        '5SX' => 'E02001103',
        '5SY' => 'E02001103',
        '5SZ' => 'E02001110',
        '5TB' => 'E02001103',
        '5TD' => 'E02001103',
        '5TE' => 'E02001103',
        '5TF' => 'E02001103',
        '5TH' => 'E02001110',
        '5TJ' => 'E02001103',
        '5TL' => 'E02001103',
        '5TN' => 'E02001103',
        '5TP' => 'E02001103',
        '5TR' => 'E02001103',
        '5TS' => 'E02001103',
        '5TT' => 'E02001103',
        '5TU' => 'E02001103',
        '5TW' => 'E02001103',
        '5TX' => 'E02001103',
        '5TY' => 'E02001103',
        '5TZ' => 'E02001103',
        '5UA' => 'E02001103',
        '5UB' => 'E02001103',
        '5UD' => 'E02001103',
        '5UE' => 'E02001103',
        '5UF' => 'E02001103',
        '5UL' => 'E02001103',
        '5UN' => 'E02001103',
        '5UP' => 'E02001103',
        '5UQ' => 'E02001103',
        '5UR' => 'E02001103',
        '5US' => 'E02001103',
        '5UT' => 'E02001103',
        '5UU' => 'E02001103',
        '5UW' => 'E02001103',
        '5UX' => 'E02001103',
        '5UY' => 'E02001103',
        '5UZ' => 'E02001103',
        '5WA' => 'E02001103',
        '5WB' => 'E02001103',
        '5WD' => 'E02001103',
        '5WE' => 'E02001103',
        '5WF' => 'E02001103',
        '5WG' => 'E02001103',
        '5WH' => 'E02001103',
        '5WJ' => 'E02001103',
        '5WL' => 'E02001103',
        '5WN' => 'E02001103',
        '5WP' => 'E02001103',
        '5WQ' => 'E02001103',
        '5WR' => 'E02001103',
        '5WS' => 'E02001103',
        '5WT' => 'E02001103',
        '5WU' => 'E02001103',
        '5WW' => 'E02001103',
        '5WX' => 'E02001103',
        '5WY' => 'E02001103',
        '5WZ' => 'E02001103',
        '5XA' => 'E02001103',
        '5XB' => 'E02001103',
        '5XD' => 'E02001103',
        '5XE' => 'E02001103',
        '5XF' => 'E02001103',
        '5XG' => 'E02001103',
        '5XH' => 'E02001103',
        '5XJ' => 'E02001103',
        '5XL' => 'E02001103',
        '5XN' => 'E02001103',
        '5XP' => 'E02001103',
        '5XQ' => 'E02001103',
        '5XR' => 'E02001103',
        '5YY' => 'E02001103',
        '5ZP' => 'E02001103',
        '5ZR' => 'E02001103',
        '6AA' => 'E02001117',
        '6AB' => 'E02001117',
        '6AD' => 'E02001117',
        '6AE' => 'E02001117',
        '6AF' => 'E02001103',
        '6AG' => 'E02001117',
        '6AH' => 'E02001117',
        '6AJ' => 'E02001110',
        '6AL' => 'E02001117',
        '6AN' => 'E02001117',
        '6AP' => 'E02001110',
        '6AQ' => 'E02001117',
        '6AR' => 'E02001110',
        '6AS' => 'E02001103',
        '6AT' => 'E02001110',
        '6AU' => 'E02001117',
        '6AW' => 'E02001110',
        '6AX' => 'E02001110',
        '6AY' => 'E02001110',
        '6AZ' => 'E02001110',
        '6BA' => 'E02001110',
        '6BB' => 'E02001110',
        '6BD' => 'E02001103',
        '6BE' => 'E02001103',
        '6BF' => 'E02001110',
        '6BG' => 'E02001110',
        '6BH' => 'E02001117',
        '6BJ' => 'E02001117',
        '6BL' => 'E02001117',
        '6BN' => 'E02001110',
        '6BP' => 'E02001110',
        '6BQ' => 'E02001110',
        '6BS' => 'E02001110',
        '6BT' => 'E02001103',
        '6BU' => 'E02001103',
        '6BW' => 'E02001103',
        '6BX' => 'E02001103',
        '6BY' => 'E02001103',
        '6BZ' => 'E02001103',
        '6DA' => 'E02001110',
        '6DB' => 'E02001110',
        '6DD' => 'E02001110',
        '6DE' => 'E02001110',
        '6DF' => 'E02001105',
        '6DG' => 'E02001110',
        '6DH' => 'E02001110',
        '6DJ' => 'E02001117',
        '6DL' => 'E02001110',
        '6DN' => 'E02001103',
        '6DP' => 'E02001103',
        '6DQ' => 'E02001110',
        '6DR' => 'E02001117',
        '6DS' => 'E02001117',
        '6DT' => 'E02001117',
        '6DU' => 'E02001117',
        '6DW' => 'E02001103',
        '6DX' => 'E02001117',
        '6DY' => 'E02001117',
        '6DZ' => 'E02001117',
        '6EA' => 'E02001117',
        '6EB' => 'E02001117',
        '6ED' => 'E02001103',
        '6EE' => 'E02001103',
        '6EF' => 'E02001117',
        '6EG' => 'E02001117',
        '6EH' => 'E02001117',
        '6EJ' => 'E02001117',
        '6EL' => 'E02001117',
        '6EN' => 'E02001117',
        '6EP' => 'E02001117',
        '6EQ' => 'E02001117',
        '6ER' => 'E02001117',
        '6ES' => 'E02001117',
        '6ET' => 'E02001103',
        '6EU' => 'E02001117',
        '6EW' => 'E02001117',
        '6EX' => 'E02001117',
        '6EY' => 'E02001103',
        '6EZ' => 'E02001117',
        '6FA' => 'E02001117',
        '6FB' => 'E02001110',
        '6FD' => 'E02001117',
        '6FE' => 'E02001110',
        '6FF' => 'E02001110',
        '6FG' => 'E02001110',
        '6FL' => 'E02001103',
        '6GZ' => 'E02001117',
        '6HA' => 'E02001110',
        '6HB' => 'E02001117',
        '6HD' => 'E02001110',
        '6HE' => 'E02001110',
        '6HF' => 'E02001117',
        '6HG' => 'E02001117',
        '6HH' => 'E02001117',
        '6HJ' => 'E02001117',
        '6HL' => 'E02001117',
        '6HN' => 'E02001117',
        '6HP' => 'E02001117',
        '6HQ' => 'E02001117',
        '6HR' => 'E02001110',
        '6HS' => 'E02001110',
        '6HT' => 'E02001110',
        '6HU' => 'E02001117',
        '6HW' => 'E02001117',
        '6HX' => 'E02001110',
        '6HY' => 'E02001110',
        '6HZ' => 'E02001110',
        '6JA' => 'E02001117',
        '6JB' => 'E02001117',
        '6JD' => 'E02001117',
        '6JE' => 'E02001117',
        '6JF' => 'E02001117',
        '6JG' => 'E02001117',
        '6JH' => 'E02001117',
        '6JJ' => 'E02001117',
        '6JL' => 'E02001117',
        '6JN' => 'E02001117',
        '6JP' => 'E02001117',
        '6JQ' => 'E02001117',
        '6JR' => 'E02001117',
        '6JS' => 'E02001117',
        '6JT' => 'E02001117',
        '6JU' => 'E02001117',
        '6JW' => 'E02001117',
        '6JX' => 'E02001117',
        '6JY' => 'E02001117',
        '6JZ' => 'E02001117',
        '6LA' => 'E02001117',
        '6LB' => 'E02001117',
        '6LD' => 'E02001117',
        '6LE' => 'E02001117',
        '6LF' => 'E02001117',
        '6LG' => 'E02001117',
        '6LH' => 'E02001117',
        '6LJ' => 'E02001117',
        '6LL' => 'E02001103',
        '6LN' => 'E02001103',
        '6LP' => 'E02001103',
        '6LQ' => 'E02001117',
        '6LR' => 'E02001117',
        '6LS' => 'E02001110',
        '6LT' => 'E02001110',
        '6LU' => 'E02001110',
        '6LW' => 'E02001103',
        '6LX' => 'E02001103',
        '6LY' => 'E02001103',
        '6LZ' => 'E02001110',
        '6NA' => 'E02001110',
        '6PP' => 'E02001103',
        '6WA' => 'E02001110',
        '6WB' => 'E02001110',
        '6WD' => 'E02001110',
        '6WE' => 'E02001110',
        '6WU' => 'E02001110',
        '6WW' => 'E02001110',
        '6WX' => 'E02001110',
        '6WY' => 'E02001110',
        '6WZ' => 'E02001110',
        '6XN' => 'E02001110',
        '6YW' => 'E02001110',
        '6YY' => 'E02001110',
        '6YZ' => 'E02001110',
        '7AA' => 'E02001117',
        '7AB' => 'E02001117',
        '7AD' => 'E02001117',
        '7AE' => 'E02001117',
        '7AF' => 'E02001117',
        '7AG' => 'E02001117',
        '7AH' => 'E02001117',
        '7AJ' => 'E02001117',
        '7AL' => 'E02001117',
        '7AN' => 'E02001117',
        '7AP' => 'E02001117',
        '7AQ' => 'E02001117',
        '7AR' => 'E02001117',
        '7AS' => 'E02001117',
        '7AT' => 'E02001117',
        '7AU' => 'E02001117',
        '7AW' => 'E02001117',
        '7AX' => 'E02001117',
        '7AY' => 'E02001117',
        '7AZ' => 'E02001117',
        '7BA' => 'E02001117',
        '7BB' => 'E02001117',
        '7BD' => 'E02001117',
        '7BE' => 'E02001117',
        '7BF' => 'E02001117',
        '7BG' => 'E02001117',
        '7BH' => 'E02001117',
        '7BJ' => 'E02001117',
        '7BL' => 'E02001117',
        '7BN' => 'E02001117',
        '7BP' => 'E02001117',
        '7BQ' => 'E02001117',
        '7BS' => 'E02001117',
        '7BT' => 'E02001117',
        '7BU' => 'E02001117',
        '7BW' => 'E02001117',
        '7BX' => 'E02001117',
        '7BY' => 'E02001117',
        '7BZ' => 'E02001117',
        '7DA' => 'E02001117',
        '7DB' => 'E02001117',
        '7DD' => 'E02001117',
        '7DE' => 'E02001117',
        '7DF' => 'E02001117',
        '7DG' => 'E02001117',
        '7DH' => 'E02001117',
        '7DJ' => 'E02001117',
        '7DL' => 'E02001117',
        '7DN' => 'E02001117',
        '7DP' => 'E02001117',
        '7DQ' => 'E02001117',
        '7DR' => 'E02001117',
        '7DS' => 'E02001117',
        '7DT' => 'E02001117',
        '7DU' => 'E02001117',
        '7DW' => 'E02001117',
        '7DX' => 'E02001117',
        '7DY' => 'E02001117',
        '7DZ' => 'E02001117',
        '7EA' => 'E02001117',
        '7EB' => 'E02001117',
        '7ED' => 'E02001117',
        '7EE' => 'E02001117',
        '7EF' => 'E02001117',
        '7EG' => 'E02001117',
        '7EH' => 'E02001117',
        '7EJ' => 'E02001117',
        '7EL' => 'E02001117',
        '7EN' => 'E02001117',
        '7EP' => 'E02001117',
        '7EQ' => 'E02001117',
        '7ER' => 'E02001117',
        '7ES' => 'E02001117',
        '7ET' => 'E02001117',
        '7EU' => 'E02001117',
        '7EW' => 'E02001117',
        '7EX' => 'E02001117',
        '7EY' => 'E02001117',
        '7EZ' => 'E02001117',
        '7FA' => 'E02001117',
        '7FB' => 'E02001117',
        '7FD' => 'E02001117',
        '7FE' => 'E02001117',
        '7FF' => 'E02001117',
        '7FG' => 'E02001117',
        '7FH' => 'E02001117',
        '7FJ' => 'E02001117',
        '7FL' => 'E02001117',
        '7FN' => 'E02001117',
        '7FP' => 'E02001117',
        '7FQ' => 'E02001117',
        '7FR' => 'E02001117',
        '7FS' => 'E02001117',
        '7FT' => 'E02001117',
        '7FW' => 'E02001117',
        '7GZ' => 'E02001117',
        '7HA' => 'E02001117',
        '7HB' => 'E02001117',
        '7HD' => 'E02001117',
        '7HE' => 'E02001117',
        '7HF' => 'E02001117',
        '7HG' => 'E02001117',
        '7HH' => 'E02001117',
        '7HJ' => 'E02001117',
        '7HL' => 'E02001117',
        '7HN' => 'E02001117',
        '7HP' => 'E02001117',
        '7HQ' => 'E02001117',
        '7HR' => 'E02001117',
        '7HS' => 'E02001117',
        '7HT' => 'E02001117',
        '7HU' => 'E02001117',
        '7HW' => 'E02001117',
        '7HX' => 'E02001110',
        '7HY' => 'E02001117',
        '7HZ' => 'E02001117',
        '7JA' => 'E02001117',
        '7JB' => 'E02001117',
        '7JD' => 'E02001117',
        '7JE' => 'E02001117',
        '7JF' => 'E02001117',
        '7JG' => 'E02001117',
        '7JH' => 'E02001117',
        '7JJ' => 'E02001117',
        '7JL' => 'E02001128',
        '7JN' => 'E02001117',
        '7JP' => 'E02001117',
        '7JQ' => 'E02001117',
        '7JR' => 'E02001117',
        '7JS' => 'E02001117',
        '7JT' => 'E02001117',
        '7JU' => 'E02001117',
        '7JW' => 'E02001117',
        '7JX' => 'E02001117',
        '7JY' => 'E02001110',
        '7JZ' => 'E02001110',
        '7LA' => 'E02001110',
        '7LB' => 'E02001117',
        '7LD' => 'E02001110',
        '7LE' => 'E02001110',
        '7LF' => 'E02001110',
        '7LG' => 'E02001110',
        '7LH' => 'E02001117',
        '7LJ' => 'E02001110',
        '7LL' => 'E02001110',
        '7LN' => 'E02001110',
        '7LP' => 'E02001110',
        '7LQ' => 'E02001110',
        '7LR' => 'E02001110',
        '7LS' => 'E02001110',
        '7LT' => 'E02001110',
        '7LU' => 'E02001117',
        '7LW' => 'E02001110',
        '7LX' => 'E02001117',
        '7LY' => 'E02001110',
        '7LZ' => 'E02001117',
        '7NA' => 'E02001117',
        '7NB' => 'E02001117',
        '7ND' => 'E02001117',
        '7NE' => 'E02001117',
        '7NF' => 'E02001117',
        '7NG' => 'E02001117',
        '7NH' => 'E02001117',
        '7NJ' => 'E02001117',
        '7NL' => 'E02001117',
        '7NN' => 'E02001117',
        '7NP' => 'E02001117',
        '7NQ' => 'E02001117',
        '7NR' => 'E02001117',
        '7NS' => 'E02001117',
        '7NT' => 'E02001117',
        '7NU' => 'E02001117',
        '7NW' => 'E02001117',
        '7NX' => 'E02001117',
        '7NY' => 'E02001117',
        '7NZ' => 'E02001117',
        '7PA' => 'E02001117',
        '7PB' => 'E02001117',
        '7PD' => 'E02001117',
        '7PE' => 'E02001117',
        '7PF' => 'E02001117',
        '7PG' => 'E02001110',
        '7PH' => 'E02001117',
        '7PJ' => 'E02001117',
        '7PL' => 'E02001117',
        '7PN' => 'E02001110',
        '7PP' => 'E02001110',
        '7PQ' => 'E02001110',
        '7PR' => 'E02001110',
        '7PS' => 'E02001117',
        '7PT' => 'E02001117',
        '7PU' => 'E02001117',
        '7UZ' => 'E02001117',
        '7WA' => 'E02001117',
        '7WB' => 'E02001117',
        '7WD' => 'E02001117',
        '7WE' => 'E02001117',
        '7WF' => 'E02001117',
        '7WG' => 'E02001117',
        '7WH' => 'E02001117',
        '7WJ' => 'E02001117',
        '7WL' => 'E02001117',
        '7WN' => 'E02001117',
        '7WP' => 'E02001117',
        '7WQ' => 'E02001117',
        '7WR' => 'E02001117',
        '7WS' => 'E02001117',
        '7WT' => 'E02001117',
        '7WU' => 'E02001117',
        '7WW' => 'E02001117',
        '7WX' => 'E02001117',
        '7WY' => 'E02001117',
        '7WZ' => 'E02001117',
        '7XA' => 'E02001117',
        '7XB' => 'E02001117',
        '7XD' => 'E02001117',
        '7XE' => 'E02001117',
        '7XF' => 'E02001117',
        '7XG' => 'E02001117',
        '7XH' => 'E02001117',
        '7XJ' => 'E02001117',
        '7YZ' => 'E02001117',
        '7ZY' => 'E02001117',
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
