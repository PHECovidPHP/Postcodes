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
final class NE22
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02005740',
        '5AB' => 'E02005740',
        '5AD' => 'E02005740',
        '5AE' => 'E02005741',
        '5AF' => 'E02005741',
        '5AG' => 'E02005741',
        '5AH' => 'E02005740',
        '5AJ' => 'E02005740',
        '5AL' => 'E02005740',
        '5AN' => 'E02005740',
        '5AP' => 'E02005740',
        '5AQ' => 'E02005740',
        '5AR' => 'E02005740',
        '5AS' => 'E02005740',
        '5AT' => 'E02005740',
        '5AU' => 'E02005740',
        '5AW' => 'E02005740',
        '5AX' => 'E02005740',
        '5AY' => 'E02005740',
        '5AZ' => 'E02005740',
        '5BA' => 'E02005740',
        '5BB' => 'E02005740',
        '5BD' => 'E02005740',
        '5BE' => 'E02005740',
        '5BF' => 'E02005741',
        '5BG' => 'E02005740',
        '5BH' => 'E02005740',
        '5BJ' => 'E02005740',
        '5BL' => 'E02005740',
        '5BN' => 'E02005738',
        '5BP' => 'E02005740',
        '5BQ' => 'E02005738',
        '5BS' => 'E02005740',
        '5BU' => 'E02005740',
        '5BX' => 'E02005740',
        '5BY' => 'E02005740',
        '5DA' => 'E02005740',
        '5DB' => 'E02005740',
        '5DE' => 'E02005740',
        '5DF' => 'E02005740',
        '5DG' => 'E02005740',
        '5DH' => 'E02005741',
        '5DJ' => 'E02005740',
        '5DL' => 'E02005740',
        '5DN' => 'E02005741',
        '5DP' => 'E02005740',
        '5DR' => 'E02005740',
        '5DS' => 'E02005740',
        '5DT' => 'E02005740',
        '5DW' => 'E02005741',
        '5DY' => 'E02005741',
        '5DZ' => 'E02005740',
        '5EA' => 'E02005741',
        '5EB' => 'E02005741',
        '5ED' => 'E02005740',
        '5EE' => 'E02005740',
        '5EF' => 'E02005741',
        '5EG' => 'E02005741',
        '5EH' => 'E02005741',
        '5EJ' => 'E02005741',
        '5EL' => 'E02005740',
        '5EN' => 'E02005740',
        '5EP' => 'E02005740',
        '5EQ' => 'E02005741',
        '5ER' => 'E02005741',
        '5ES' => 'E02005740',
        '5ET' => 'E02005741',
        '5EW' => 'E02005740',
        '5EX' => 'E02005740',
        '5GZ' => 'E02005740',
        '5HA' => 'E02005740',
        '5HB' => 'E02005740',
        '5HD' => 'E02005740',
        '5HE' => 'E02005740',
        '5HF' => 'E02005740',
        '5HG' => 'E02005740',
        '5HH' => 'E02005740',
        '5HJ' => 'E02005740',
        '5HL' => 'E02005740',
        '5HN' => 'E02005740',
        '5HP' => 'E02005740',
        '5HQ' => 'E02005740',
        '5HR' => 'E02005740',
        '5HS' => 'E02005740',
        '5HT' => 'E02005740',
        '5HU' => 'E02005740',
        '5HW' => 'E02005740',
        '5HX' => 'E02005740',
        '5HY' => 'E02005740',
        '5HZ' => 'E02005740',
        '5JA' => 'E02005740',
        '5JB' => 'E02005740',
        '5JD' => 'E02005740',
        '5JE' => 'E02005740',
        '5JF' => 'E02005740',
        '5JG' => 'E02005740',
        '5JH' => 'E02005740',
        '5JJ' => 'E02005740',
        '5JL' => 'E02005740',
        '5JN' => 'E02005740',
        '5JP' => 'E02005740',
        '5JQ' => 'E02005740',
        '5JR' => 'E02005740',
        '5JS' => 'E02005740',
        '5JT' => 'E02005740',
        '5JW' => 'E02005740',
        '5LA' => 'E02005740',
        '5LB' => 'E02005740',
        '5LE' => 'E02005740',
        '5LF' => 'E02005740',
        '5LG' => 'E02005740',
        '5LH' => 'E02005740',
        '5LJ' => 'E02005740',
        '5LL' => 'E02005740',
        '5LN' => 'E02005740',
        '5LP' => 'E02005740',
        '5LQ' => 'E02005740',
        '5LR' => 'E02005740',
        '5LS' => 'E02005740',
        '5LT' => 'E02005740',
        '5LU' => 'E02005740',
        '5LW' => 'E02005740',
        '5LX' => 'E02005740',
        '5LY' => 'E02005740',
        '5LZ' => 'E02005740',
        '5NA' => 'E02005740',
        '5NB' => 'E02005740',
        '5ND' => 'E02005740',
        '5NE' => 'E02005740',
        '5NF' => 'E02005740',
        '5NG' => 'E02005740',
        '5NH' => 'E02005740',
        '5NJ' => 'E02005740',
        '5NL' => 'E02005740',
        '5NN' => 'E02005740',
        '5NP' => 'E02005740',
        '5NQ' => 'E02005740',
        '5NR' => 'E02005740',
        '5NS' => 'E02005740',
        '5NT' => 'E02005740',
        '5NU' => 'E02005740',
        '5NW' => 'E02005740',
        '5NX' => 'E02005740',
        '5PA' => 'E02005741',
        '5PB' => 'E02005741',
        '5PD' => 'E02005740',
        '5PF' => 'E02005740',
        '5PH' => 'E02005740',
        '5PJ' => 'E02005740',
        '5PL' => 'E02005740',
        '5PP' => 'E02005740',
        '5PQ' => 'E02005740',
        '5PR' => 'E02005740',
        '5PS' => 'E02005740',
        '5PT' => 'E02005740',
        '5PU' => 'E02005740',
        '5PW' => 'E02005740',
        '5PX' => 'E02005740',
        '5PY' => 'E02005740',
        '5PZ' => 'E02005740',
        '5QA' => 'E02005740',
        '5QB' => 'E02005740',
        '5QD' => 'E02005740',
        '5QE' => 'E02005740',
        '5QF' => 'E02005740',
        '5QG' => 'E02005740',
        '5QH' => 'E02005740',
        '5QJ' => 'E02005740',
        '5QL' => 'E02005740',
        '5QN' => 'E02005740',
        '5QP' => 'E02005741',
        '5QQ' => 'E02005740',
        '5QR' => 'E02005740',
        '5QS' => 'E02005740',
        '5QW' => 'E02005740',
        '5QX' => 'E02005740',
        '5QY' => 'E02005740',
        '5QZ' => 'E02005740',
        '5RA' => 'E02005740',
        '5RB' => 'E02005740',
        '5RD' => 'E02005740',
        '5RE' => 'E02005740',
        '5RR' => 'E02005740',
        '5RS' => 'E02005741',
        '5RT' => 'E02005741',
        '5RU' => 'E02005740',
        '5RX' => 'E02005740',
        '5RY' => 'E02005712',
        '5RZ' => 'E02005740',
        '5SA' => 'E02005741',
        '5SB' => 'E02005741',
        '5SD' => 'E02005741',
        '5SE' => 'E02005741',
        '5SG' => 'E02005741',
        '5SH' => 'E02005741',
        '5SJ' => 'E02005741',
        '5SL' => 'E02005741',
        '5SN' => 'E02005741',
        '5SP' => 'E02005741',
        '5SQ' => 'E02005741',
        '5SR' => 'E02005741',
        '5SS' => 'E02005741',
        '5ST' => 'E02005740',
        '5SW' => 'E02005741',
        '5SY' => 'E02005741',
        '5SZ' => 'E02005741',
        '5TA' => 'E02005741',
        '5TB' => 'E02005741',
        '5TD' => 'E02005741',
        '5TE' => 'E02005741',
        '5TF' => 'E02005741',
        '5TJ' => 'E02005741',
        '5TL' => 'E02005741',
        '5TN' => 'E02005741',
        '5TP' => 'E02005741',
        '5TT' => 'E02005741',
        '5TU' => 'E02005741',
        '5TW' => 'E02005741',
        '5TX' => 'E02005741',
        '5TY' => 'E02005741',
        '5TZ' => 'E02005741',
        '5UA' => 'E02005741',
        '5UB' => 'E02005741',
        '5UD' => 'E02005741',
        '5UF' => 'E02005740',
        '5UG' => 'E02005741',
        '5UH' => 'E02005741',
        '5UJ' => 'E02005740',
        '5UP' => 'E02005740',
        '5UQ' => 'E02005741',
        '5UR' => 'E02005740',
        '5UT' => 'E02005740',
        '5UU' => 'E02005740',
        '5UW' => 'E02005740',
        '5UX' => 'E02005740',
        '5UY' => 'E02005740',
        '5UZ' => 'E02005740',
        '5WA' => 'E02005738',
        '5WB' => 'E02005740',
        '5WD' => 'E02005740',
        '5WE' => 'E02005738',
        '5WF' => 'E02005738',
        '5WQ' => 'E02005738',
        '5WR' => 'E02005738',
        '5WS' => 'E02005738',
        '5WT' => 'E02005738',
        '5WU' => 'E02005738',
        '5WW' => 'E02005738',
        '5WX' => 'E02005738',
        '5WY' => 'E02005740',
        '5WZ' => 'E02005738',
        '5XX' => 'E02005738',
        '5XY' => 'E02005738',
        '5XZ' => 'E02005738',
        '5YA' => 'E02005740',
        '5YB' => 'E02005740',
        '5YD' => 'E02005740',
        '5YE' => 'E02005740',
        '5YF' => 'E02005740',
        '5YG' => 'E02005740',
        '5YH' => 'E02005740',
        '5YJ' => 'E02005740',
        '5YL' => 'E02005740',
        '5YN' => 'E02005740',
        '5YP' => 'E02005740',
        '5YQ' => 'E02005740',
        '5YR' => 'E02005740',
        '5YS' => 'E02005740',
        '5YT' => 'E02005740',
        '5YU' => 'E02005740',
        '5YW' => 'E02005740',
        '5YX' => 'E02005740',
        '5YY' => 'E02005740',
        '5YZ' => 'E02005738',
        '5ZX' => 'E02005738',
        '6AA' => 'E02005741',
        '6AB' => 'E02005741',
        '6AD' => 'E02005741',
        '6AE' => 'E02005741',
        '6AF' => 'E02005712',
        '6AG' => 'E02005741',
        '6AH' => 'E02005741',
        '6AJ' => 'E02005741',
        '6AL' => 'E02005741',
        '6AN' => 'E02005741',
        '6AP' => 'E02005741',
        '6AQ' => 'E02005741',
        '6AR' => 'E02005741',
        '6AS' => 'E02005741',
        '6AT' => 'E02005741',
        '6AU' => 'E02005741',
        '6AW' => 'E02005741',
        '6AX' => 'E02005741',
        '6AY' => 'E02005741',
        '6AZ' => 'E02005741',
        '6BA' => 'E02005741',
        '6BB' => 'E02005741',
        '6BD' => 'E02005741',
        '6BE' => 'E02005741',
        '6BF' => 'E02005741',
        '6BG' => 'E02005741',
        '6BH' => 'E02005741',
        '6BJ' => 'E02005741',
        '6BL' => 'E02005741',
        '6BN' => 'E02005741',
        '6BP' => 'E02005741',
        '6BQ' => 'E02005741',
        '6BR' => 'E02005741',
        '6BS' => 'E02005741',
        '6BT' => 'E02005741',
        '6BU' => 'E02005741',
        '6BW' => 'E02005741',
        '6BX' => 'E02005741',
        '6BY' => 'E02005741',
        '6BZ' => 'E02005741',
        '6DA' => 'E02005741',
        '6DB' => 'E02005741',
        '6DD' => 'E02005741',
        '6DE' => 'E02005741',
        '6DF' => 'E02005741',
        '6DG' => 'E02005741',
        '6DH' => 'E02005741',
        '6DJ' => 'E02005741',
        '6DL' => 'E02005741',
        '6DN' => 'E02005741',
        '6DP' => 'E02005741',
        '6DQ' => 'E02005741',
        '6DR' => 'E02005741',
        '6DS' => 'E02005741',
        '6DT' => 'E02005741',
        '6DU' => 'E02005741',
        '6DW' => 'E02005741',
        '6DX' => 'E02005741',
        '6DY' => 'E02005741',
        '6DZ' => 'E02005741',
        '6EA' => 'E02005741',
        '6EB' => 'E02005741',
        '6ED' => 'E02005741',
        '6EF' => 'E02005741',
        '6EG' => 'E02005741',
        '6EH' => 'E02005741',
        '6EJ' => 'E02005741',
        '6EL' => 'E02005741',
        '6EN' => 'E02005741',
        '6EP' => 'E02005741',
        '6EQ' => 'E02005741',
        '6ER' => 'E02005741',
        '6ES' => 'E02005741',
        '6ET' => 'E02005741',
        '6EU' => 'E02005741',
        '6EW' => 'E02005741',
        '6EX' => 'E02005741',
        '6EY' => 'E02005741',
        '6EZ' => 'E02005741',
        '6FA' => 'E02005741',
        '6HA' => 'E02005741',
        '6HB' => 'E02005741',
        '6HD' => 'E02005741',
        '6HE' => 'E02005741',
        '6HF' => 'E02005741',
        '6HG' => 'E02005741',
        '6HH' => 'E02005741',
        '6HJ' => 'E02005741',
        '6HL' => 'E02005741',
        '6HN' => 'E02005741',
        '6HP' => 'E02005741',
        '6HQ' => 'E02005741',
        '6HR' => 'E02005741',
        '6HS' => 'E02005741',
        '6HT' => 'E02005741',
        '6HU' => 'E02005741',
        '6HW' => 'E02005741',
        '6HX' => 'E02005741',
        '6HY' => 'E02005741',
        '6HZ' => 'E02005741',
        '6JB' => 'E02005741',
        '6JD' => 'E02005741',
        '6JE' => 'E02005741',
        '6JF' => 'E02005741',
        '6JG' => 'E02005741',
        '6JH' => 'E02005741',
        '6JJ' => 'E02005741',
        '6JL' => 'E02005741',
        '6JN' => 'E02005741',
        '6JP' => 'E02005741',
        '6JQ' => 'E02005741',
        '6JR' => 'E02005741',
        '6JS' => 'E02005741',
        '6JT' => 'E02005741',
        '6JU' => 'E02005741',
        '6JW' => 'E02005741',
        '6JX' => 'E02005741',
        '6JY' => 'E02005741',
        '6JZ' => 'E02005741',
        '6LA' => 'E02005741',
        '6LB' => 'E02005741',
        '6LD' => 'E02005741',
        '6LE' => 'E02005741',
        '6LF' => 'E02005741',
        '6LG' => 'E02005741',
        '6LH' => 'E02005741',
        '6LJ' => 'E02005741',
        '6LL' => 'E02005741',
        '6LN' => 'E02005741',
        '6LP' => 'E02005741',
        '6LQ' => 'E02005741',
        '6LR' => 'E02005741',
        '6LW' => 'E02005741',
        '6NA' => 'E02005741',
        '6NB' => 'E02005741',
        '6ND' => 'E02005741',
        '6NE' => 'E02005741',
        '6NG' => 'E02005741',
        '6NH' => 'E02005741',
        '6NJ' => 'E02005741',
        '6NL' => 'E02005741',
        '6NN' => 'E02005741',
        '6NP' => 'E02005741',
        '6NQ' => 'E02005741',
        '6NR' => 'E02005741',
        '6NS' => 'E02005741',
        '6NT' => 'E02005741',
        '6NU' => 'E02005741',
        '6NW' => 'E02005741',
        '6NX' => 'E02005741',
        '6NY' => 'E02005741',
        '6NZ' => 'E02005741',
        '6PA' => 'E02005741',
        '6PB' => 'E02005741',
        '6PD' => 'E02005741',
        '6PE' => 'E02005741',
        '6WA' => 'E02005738',
        '6WW' => 'E02005738',
        '6WX' => 'E02005738',
        '6WY' => 'E02005738',
        '6WZ' => 'E02005738',
        '6YJ' => 'E02005738',
        '6YN' => 'E02005738',
        '6YP' => 'E02005738',
        '6YQ' => 'E02005738',
        '6YR' => 'E02005738',
        '6YS' => 'E02005738',
        '6YT' => 'E02005741',
        '6YU' => 'E02005741',
        '6YW' => 'E02005741',
        '6YX' => 'E02005741',
        '6YY' => 'E02005741',
        '6YZ' => 'E02005741',
        '6ZA' => 'E02005738',
        '6ZU' => 'E02005738',
        '6ZX' => 'E02005738',
        '7AA' => 'E02005740',
        '7AB' => 'E02005739',
        '7AD' => 'E02005739',
        '7AE' => 'E02005739',
        '7AF' => 'E02005739',
        '7AG' => 'E02005739',
        '7AH' => 'E02005739',
        '7AJ' => 'E02005739',
        '7AL' => 'E02005739',
        '7AN' => 'E02005739',
        '7AP' => 'E02005739',
        '7AQ' => 'E02005739',
        '7AR' => 'E02005739',
        '7AS' => 'E02005740',
        '7AT' => 'E02005740',
        '7AU' => 'E02005740',
        '7AW' => 'E02005739',
        '7AX' => 'E02005740',
        '7AY' => 'E02005740',
        '7AZ' => 'E02005740',
        '7BA' => 'E02005740',
        '7BB' => 'E02005740',
        '7BD' => 'E02005740',
        '7BE' => 'E02005740',
        '7BF' => 'E02005740',
        '7BG' => 'E02005740',
        '7BH' => 'E02005740',
        '7BJ' => 'E02005740',
        '7BL' => 'E02005740',
        '7BN' => 'E02005740',
        '7BP' => 'E02005740',
        '7BQ' => 'E02005740',
        '7BR' => 'E02005739',
        '7BS' => 'E02005740',
        '7BT' => 'E02005740',
        '7BU' => 'E02005739',
        '7BW' => 'E02005740',
        '7BX' => 'E02005740',
        '7BY' => 'E02005740',
        '7BZ' => 'E02005740',
        '7DA' => 'E02005739',
        '7DB' => 'E02005740',
        '7DD' => 'E02005740',
        '7DE' => 'E02005739',
        '7DF' => 'E02005739',
        '7DG' => 'E02005740',
        '7DH' => 'E02005740',
        '7DJ' => 'E02005740',
        '7DL' => 'E02005739',
        '7DN' => 'E02005739',
        '7DP' => 'E02005740',
        '7DQ' => 'E02005739',
        '7DR' => 'E02005740',
        '7DS' => 'E02005740',
        '7DT' => 'E02005739',
        '7DU' => 'E02005740',
        '7DW' => 'E02005739',
        '7DX' => 'E02005740',
        '7DY' => 'E02005740',
        '7DZ' => 'E02005740',
        '7EA' => 'E02005740',
        '7EB' => 'E02005740',
        '7ED' => 'E02005740',
        '7EE' => 'E02005740',
        '7EF' => 'E02005740',
        '7EG' => 'E02005740',
        '7EH' => 'E02005740',
        '7EJ' => 'E02005740',
        '7EL' => 'E02005740',
        '7EN' => 'E02005740',
        '7EP' => 'E02005740',
        '7EQ' => 'E02005740',
        '7ER' => 'E02005740',
        '7ES' => 'E02005740',
        '7ET' => 'E02005740',
        '7EU' => 'E02005740',
        '7EW' => 'E02005740',
        '7EX' => 'E02005740',
        '7EY' => 'E02005740',
        '7EZ' => 'E02005740',
        '7FA' => 'E02005741',
        '7FB' => 'E02005741',
        '7FD' => 'E02005739',
        '7FE' => 'E02005740',
        '7FF' => 'E02005740',
        '7FG' => 'E02005740',
        '7GA' => 'E02005740',
        '7HA' => 'E02005740',
        '7HB' => 'E02005740',
        '7HD' => 'E02005740',
        '7HE' => 'E02005740',
        '7HF' => 'E02005740',
        '7HG' => 'E02005740',
        '7HH' => 'E02005740',
        '7HJ' => 'E02005740',
        '7HL' => 'E02005740',
        '7HN' => 'E02005740',
        '7HP' => 'E02005740',
        '7HQ' => 'E02005740',
        '7HR' => 'E02005739',
        '7HW' => 'E02005740',
        '7JA' => 'E02005740',
        '7JB' => 'E02005740',
        '7JD' => 'E02005740',
        '7JE' => 'E02005740',
        '7JF' => 'E02005740',
        '7JG' => 'E02005740',
        '7JH' => 'E02005740',
        '7JJ' => 'E02005740',
        '7JL' => 'E02005740',
        '7JN' => 'E02005740',
        '7JP' => 'E02005740',
        '7JQ' => 'E02005740',
        '7JR' => 'E02005740',
        '7JS' => 'E02005740',
        '7JT' => 'E02005740',
        '7JU' => 'E02005740',
        '7JW' => 'E02005740',
        '7JX' => 'E02005740',
        '7JY' => 'E02005740',
        '7LA' => 'E02005741',
        '7LB' => 'E02005741',
        '7LD' => 'E02005741',
        '7LE' => 'E02005741',
        '7LF' => 'E02005741',
        '7LG' => 'E02005741',
        '7LH' => 'E02005740',
        '7LJ' => 'E02005741',
        '7LL' => 'E02005741',
        '7LN' => 'E02005741',
        '7LP' => 'E02005741',
        '7LQ' => 'E02005740',
        '7LR' => 'E02005741',
        '7LS' => 'E02005741',
        '7LT' => 'E02005741',
        '7LU' => 'E02005741',
        '7LW' => 'E02005741',
        '7LX' => 'E02005741',
        '7LY' => 'E02005741',
        '7LZ' => 'E02005741',
        '7NA' => 'E02005740',
        '7WW' => 'E02005738',
        '7WX' => 'E02005740',
        '7WY' => 'E02005738',
        '7WZ' => 'E02005740',
        '7YU' => 'E02005738',
        '7YW' => 'E02005738',
        '7YX' => 'E02005740',
        '7YY' => 'E02005740',
        '7YZ' => 'E02005740',
        '7ZX' => 'E02005738',
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
