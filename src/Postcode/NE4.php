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
final class NE4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02001729',
        '5AB' => 'E02001729',
        '5AD' => 'E02001729',
        '5AE' => 'E02001729',
        '5AF' => 'E02001731',
        '5AG' => 'E02001731',
        '5AH' => 'E02001729',
        '5AJ' => 'E02001729',
        '5AL' => 'E02001729',
        '5AN' => 'E02001729',
        '5AP' => 'E02001729',
        '5AQ' => 'E02001729',
        '5AR' => 'E02001731',
        '5AS' => 'E02001729',
        '5AT' => 'E02001729',
        '5AU' => 'E02001731',
        '5AW' => 'E02001731',
        '5AX' => 'E02001731',
        '5AY' => 'E02001729',
        '5AZ' => 'E02001731',
        '5BA' => 'E02001729',
        '5BB' => 'E02001729',
        '5BD' => 'E02001731',
        '5BE' => 'E02001731',
        '5BF' => 'E02001731',
        '5BG' => 'E02001731',
        '5BH' => 'E02001729',
        '5BL' => 'E02001731',
        '5BN' => 'E02001731',
        '5BP' => 'E02001731',
        '5BQ' => 'E02001731',
        '5BS' => 'E02001731',
        '5BW' => 'E02001731',
        '5BX' => 'E02001731',
        '5BY' => 'E02001731',
        '5BZ' => 'E02001731',
        '5DA' => 'E02001731',
        '5DB' => 'E02001731',
        '5DD' => 'E02001731',
        '5DF' => 'E02001731',
        '5DG' => 'E02001731',
        '5DJ' => 'E02001731',
        '5DL' => 'E02001731',
        '5DN' => 'E02001731',
        '5DP' => 'E02001731',
        '5DT' => 'E02001731',
        '5DU' => 'E02001731',
        '5DW' => 'E02001731',
        '5DX' => 'E02001731',
        '5DY' => 'E02001729',
        '5DZ' => 'E02001731',
        '5EA' => 'E02001731',
        '5EB' => 'E02001731',
        '5ED' => 'E02001731',
        '5EE' => 'E02001729',
        '5EF' => 'E02001731',
        '5EG' => 'E02001731',
        '5EH' => 'E02001731',
        '5EJ' => 'E02001731',
        '5EL' => 'E02001731',
        '5EN' => 'E02001729',
        '5EP' => 'E02001731',
        '5EQ' => 'E02001731',
        '5ER' => 'E02001731',
        '5ES' => 'E02001731',
        '5ET' => 'E02001731',
        '5EU' => 'E02001731',
        '5EW' => 'E02001731',
        '5EX' => 'E02001731',
        '5HA' => 'E02001729',
        '5HB' => 'E02001729',
        '5HF' => 'E02001731',
        '5HG' => 'E02001731',
        '5HH' => 'E02001729',
        '5HJ' => 'E02001731',
        '5HN' => 'E02001731',
        '5HP' => 'E02001731',
        '5HQ' => 'E02001729',
        '5HR' => 'E02001729',
        '5HU' => 'E02001729',
        '5HW' => 'E02001729',
        '5HX' => 'E02001731',
        '5HY' => 'E02001729',
        '5JA' => 'E02001731',
        '5JB' => 'E02001731',
        '5JD' => 'E02001729',
        '5JE' => 'E02001731',
        '5JF' => 'E02001731',
        '5JG' => 'E02001731',
        '5JL' => 'E02001729',
        '5JN' => 'E02001729',
        '5JP' => 'E02001729',
        '5JQ' => 'E02001729',
        '5JR' => 'E02001729',
        '5JS' => 'E02001729',
        '5JT' => 'E02001729',
        '5JU' => 'E02001729',
        '5LA' => 'E02001736',
        '5LB' => 'E02001736',
        '5LD' => 'E02001736',
        '5LE' => 'E02001729',
        '5LH' => 'E02001729',
        '5LJ' => 'E02001729',
        '5LL' => 'E02001729',
        '5LN' => 'E02001729',
        '5LP' => 'E02001729',
        '5LQ' => 'E02001729',
        '5NH' => 'E02001729',
        '5NJ' => 'E02001729',
        '5NL' => 'E02001729',
        '5NN' => 'E02001729',
        '5NP' => 'E02001729',
        '5NQ' => 'E02001729',
        '5NR' => 'E02001729',
        '5NS' => 'E02001729',
        '5NT' => 'E02001729',
        '5NU' => 'E02001729',
        '5NX' => 'E02001729',
        '5NY' => 'E02001729',
        '5PA' => 'E02001729',
        '5PB' => 'E02001729',
        '5PD' => 'E02001729',
        '5PE' => 'E02001729',
        '5PH' => 'E02001729',
        '5PJ' => 'E02001729',
        '5PL' => 'E02001729',
        '5QB' => 'E02001731',
        '5QD' => 'E02001731',
        '5QE' => 'E02001731',
        '5QF' => 'E02001731',
        '5QH' => 'E02001731',
        '5QJ' => 'E02001731',
        '5QL' => 'E02001731',
        '5QN' => 'E02001731',
        '5QP' => 'E02001731',
        '5QQ' => 'E02001731',
        '5QR' => 'E02001731',
        '5QS' => 'E02001731',
        '5QT' => 'E02001731',
        '5QU' => 'E02001731',
        '5QX' => 'E02001731',
        '5QY' => 'E02001729',
        '5RB' => 'E02001731',
        '5RE' => 'E02001731',
        '5RH' => 'E02001731',
        '5RJ' => 'E02001731',
        '5RL' => 'E02001731',
        '5RN' => 'E02001731',
        '5RQ' => 'E02001731',
        '5RR' => 'E02001731',
        '5RS' => 'E02001731',
        '5RT' => 'E02001731',
        '5RU' => 'E02001731',
        '5RX' => 'E02001731',
        '5RY' => 'E02001731',
        '5RZ' => 'E02001731',
        '5SA' => 'E02001731',
        '5SB' => 'E02001729',
        '5SD' => 'E02001729',
        '5SE' => 'E02001729',
        '5SF' => 'E02001729',
        '5SG' => 'E02001729',
        '5SH' => 'E02001729',
        '5SJ' => 'E02001731',
        '5SL' => 'E02001731',
        '5SN' => 'E02001731',
        '5SP' => 'E02001731',
        '5SQ' => 'E02001731',
        '5SR' => 'E02001731',
        '5SS' => 'E02001731',
        '5ST' => 'E02001731',
        '5SU' => 'E02001731',
        '5SW' => 'E02001731',
        '5SX' => 'E02001731',
        '5SY' => 'E02001731',
        '5SZ' => 'E02001731',
        '5TA' => 'E02001731',
        '5TB' => 'E02001731',
        '5TD' => 'E02001731',
        '5TE' => 'E02001731',
        '5TF' => 'E02001731',
        '5TG' => 'E02001731',
        '5TH' => 'E02001731',
        '5TJ' => 'E02001731',
        '5TL' => 'E02001731',
        '5TN' => 'E02001731',
        '5TP' => 'E02001731',
        '5TQ' => 'E02001731',
        '5TR' => 'E02001731',
        '5TS' => 'E02001731',
        '5TT' => 'E02001731',
        '5TW' => 'E02001731',
        '5TX' => 'E02001731',
        '5WA' => 'E02001731',
        '6AA' => 'E02001731',
        '6AB' => 'E02001731',
        '6AD' => 'E02001731',
        '6AE' => 'E02001731',
        '6AF' => 'E02001736',
        '6AG' => 'E02001731',
        '6AH' => 'E02001731',
        '6AJ' => 'E02001731',
        '6AL' => 'E02001731',
        '6AN' => 'E02001731',
        '6AP' => 'E02001731',
        '6AQ' => 'E02001731',
        '6AR' => 'E02001731',
        '6AS' => 'E02001731',
        '6AT' => 'E02001731',
        '6AU' => 'E02001731',
        '6AX' => 'E02001731',
        '6AY' => 'E02001731',
        '6BA' => 'E02001731',
        '6BB' => 'E02001731',
        '6BD' => 'E02001731',
        '6BE' => 'E02001729',
        '6BG' => 'E02001731',
        '6BH' => 'E02001731',
        '6BJ' => 'E02001731',
        '6BL' => 'E02001731',
        '6BN' => 'E02001731',
        '6BP' => 'E02001731',
        '6BQ' => 'E02001731',
        '6BR' => 'E02001729',
        '6BT' => 'E02001731',
        '6BW' => 'E02001731',
        '6BY' => 'E02001731',
        '6BZ' => 'E02001729',
        '6DA' => 'E02001731',
        '6DB' => 'E02001731',
        '6DD' => 'E02001731',
        '6DJ' => 'E02001729',
        '6DL' => 'E02001731',
        '6DN' => 'E02001731',
        '6DP' => 'E02001731',
        '6EA' => 'E02001731',
        '6EB' => 'E02001731',
        '6EE' => 'E02001731',
        '6EF' => 'E02001731',
        '6EH' => 'E02001731',
        '6EJ' => 'E02001731',
        '6EL' => 'E02001731',
        '6EQ' => 'E02001731',
        '6ER' => 'E02001731',
        '6ES' => 'E02001731',
        '6ET' => 'E02001731',
        '6EU' => 'E02001731',
        '6EX' => 'E02001729',
        '6EY' => 'E02001729',
        '6EZ' => 'E02001731',
        '6HA' => 'E02001729',
        '6HB' => 'E02001729',
        '6HE' => 'E02001731',
        '6HF' => 'E02001731',
        '6HG' => 'E02001731',
        '6HJ' => 'E02001731',
        '6HL' => 'E02001731',
        '6HN' => 'E02001731',
        '6HP' => 'E02001731',
        '6HQ' => 'E02001731',
        '6HS' => 'E02001731',
        '6HT' => 'E02001731',
        '6HU' => 'E02001731',
        '6HW' => 'E02001731',
        '6HX' => 'E02001731',
        '6HY' => 'E02001731',
        '6HZ' => 'E02001731',
        '6JA' => 'E02001731',
        '6JB' => 'E02001731',
        '6JD' => 'E02001731',
        '6JE' => 'E02001731',
        '6JF' => 'E02001731',
        '6JG' => 'E02001731',
        '6JH' => 'E02001731',
        '6JJ' => 'E02001731',
        '6JL' => 'E02001731',
        '6JN' => 'E02001731',
        '6JQ' => 'E02001731',
        '6JR' => 'E02001731',
        '6JS' => 'E02001731',
        '6JT' => 'E02001731',
        '6JU' => 'E02001731',
        '6JW' => 'E02001731',
        '6JY' => 'E02001736',
        '6LF' => 'E02001736',
        '6LH' => 'E02001736',
        '6LN' => 'E02001736',
        '6LT' => 'E02001731',
        '6NE' => 'E02001731',
        '6NF' => 'E02001731',
        '6NG' => 'E02001731',
        '6NP' => 'E02001729',
        '6NQ' => 'E02001729',
        '6NR' => 'E02001729',
        '6NS' => 'E02001729',
        '6NU' => 'E02001729',
        '6NX' => 'E02001729',
        '6NY' => 'E02001729',
        '6NZ' => 'E02001731',
        '6PA' => 'E02001736',
        '6PB' => 'E02001736',
        '6PD' => 'E02001729',
        '6PE' => 'E02001729',
        '6PF' => 'E02001729',
        '6PG' => 'E02001729',
        '6PH' => 'E02001729',
        '6PJ' => 'E02001736',
        '6PL' => 'E02001736',
        '6PN' => 'E02001736',
        '6PP' => 'E02001736',
        '6PQ' => 'E02001736',
        '6PR' => 'E02001736',
        '6PS' => 'E02001736',
        '6PT' => 'E02001736',
        '6PU' => 'E02001736',
        '6PW' => 'E02001729',
        '6PX' => 'E02001736',
        '6PY' => 'E02001736',
        '6PZ' => 'E02001736',
        '6QA' => 'E02001736',
        '6QB' => 'E02001736',
        '6QD' => 'E02001729',
        '6QX' => 'E02001736',
        '6QY' => 'E02001736',
        '6QZ' => 'E02001736',
        '6RA' => 'E02001736',
        '6RB' => 'E02001731',
        '6RD' => 'E02001731',
        '6RE' => 'E02001736',
        '6RF' => 'E02001731',
        '6RG' => 'E02001731',
        '6RH' => 'E02001731',
        '6RJ' => 'E02001731',
        '6RL' => 'E02001731',
        '6RN' => 'E02001736',
        '6RP' => 'E02001736',
        '6RQ' => 'E02001736',
        '6RR' => 'E02001736',
        '6RS' => 'E02001736',
        '6RT' => 'E02001736',
        '6RW' => 'E02001731',
        '6RX' => 'E02001731',
        '6RY' => 'E02001731',
        '6RZ' => 'E02001731',
        '6SA' => 'E02001736',
        '6SB' => 'E02001731',
        '6SH' => 'E02001736',
        '6SJ' => 'E02001736',
        '6SL' => 'E02001736',
        '6SN' => 'E02001736',
        '6SP' => 'E02001736',
        '6SQ' => 'E02001736',
        '6SR' => 'E02001736',
        '6SS' => 'E02001736',
        '6ST' => 'E02001736',
        '6SU' => 'E02001736',
        '6SW' => 'E02001736',
        '6TA' => 'E02001736',
        '6TB' => 'E02001736',
        '6TD' => 'E02001736',
        '6TE' => 'E02001736',
        '6TF' => 'E02001736',
        '6TG' => 'E02001736',
        '6TH' => 'E02001736',
        '6TJ' => 'E02001736',
        '6TL' => 'E02001736',
        '6TN' => 'E02001736',
        '6TP' => 'E02001736',
        '6TQ' => 'E02001736',
        '6TR' => 'E02001736',
        '6TS' => 'E02001736',
        '6TT' => 'E02001736',
        '6TU' => 'E02001736',
        '6TW' => 'E02001736',
        '6TX' => 'E02001736',
        '6TY' => 'E02001736',
        '6TZ' => 'E02001736',
        '6UA' => 'E02001736',
        '6UB' => 'E02001736',
        '6UH' => 'E02001736',
        '6UJ' => 'E02001729',
        '6UL' => 'E02001736',
        '6UN' => 'E02001736',
        '6UP' => 'E02001736',
        '6UQ' => 'E02001736',
        '6UR' => 'E02001736',
        '6US' => 'E02001736',
        '6UT' => 'E02001736',
        '6UU' => 'E02001736',
        '6UX' => 'E02001736',
        '6UY' => 'E02001736',
        '6WU' => 'E02001731',
        '6WW' => 'E02001731',
        '6XA' => 'E02001736',
        '6XB' => 'E02001736',
        '6XD' => 'E02001736',
        '6XE' => 'E02001736',
        '6XH' => 'E02001736',
        '6XJ' => 'E02001736',
        '6XL' => 'E02001736',
        '6XN' => 'E02001736',
        '6XP' => 'E02001736',
        '6XQ' => 'E02001736',
        '6XR' => 'E02001736',
        '6XS' => 'E02001736',
        '6XU' => 'E02001736',
        '6XX' => 'E02001736',
        '6XY' => 'E02001736',
        '6XZ' => 'E02001736',
        '6YB' => 'E02001736',
        '7AB' => 'E02001736',
        '7AD' => 'E02001736',
        '7AE' => 'E02001736',
        '7AF' => 'E02001736',
        '7AG' => 'E02001736',
        '7AH' => 'E02001736',
        '7AJ' => 'E02001736',
        '7AL' => 'E02001736',
        '7AN' => 'E02001736',
        '7AP' => 'E02001736',
        '7AQ' => 'E02001736',
        '7AR' => 'E02001736',
        '7AS' => 'E02001736',
        '7AT' => 'E02001736',
        '7AW' => 'E02001736',
        '7AX' => 'E02001736',
        '7AY' => 'E02001736',
        '7AZ' => 'E02001736',
        '7BA' => 'E02001736',
        '7BB' => 'E02001736',
        '7BD' => 'E02001736',
        '7BE' => 'E02001736',
        '7BG' => 'E02001736',
        '7BH' => 'E02001736',
        '7BJ' => 'E02001736',
        '7BN' => 'E02001736',
        '7BP' => 'E02001736',
        '7BS' => 'E02001736',
        '7BT' => 'E02001736',
        '7BU' => 'E02001736',
        '7BW' => 'E02001736',
        '7BX' => 'E02001736',
        '7BZ' => 'E02001732',
        '7DD' => 'E02001736',
        '7DF' => 'E02001734',
        '7DP' => 'E02001736',
        '7DQ' => 'E02001736',
        '7DR' => 'E02001736',
        '7DS' => 'E02001736',
        '7DT' => 'E02001736',
        '7DU' => 'E02001736',
        '7DX' => 'E02001736',
        '7DY' => 'E02001736',
        '7EA' => 'E02001736',
        '7EB' => 'E02001736',
        '7ED' => 'E02001736',
        '7EE' => 'E02001736',
        '7EH' => 'E02001736',
        '7EJ' => 'E02001736',
        '7EL' => 'E02001736',
        '7EN' => 'E02001736',
        '7EP' => 'E02001736',
        '7EQ' => 'E02001736',
        '7ER' => 'E02001736',
        '7ES' => 'E02001736',
        '7ET' => 'E02001736',
        '7EU' => 'E02001736',
        '7EX' => 'E02001736',
        '7EY' => 'E02001736',
        '7HA' => 'E02001736',
        '7HB' => 'E02001736',
        '7HD' => 'E02001736',
        '7HE' => 'E02001736',
        '7HJ' => 'E02001736',
        '7HL' => 'E02001736',
        '7HN' => 'E02001736',
        '7HP' => 'E02001736',
        '7HR' => 'E02001736',
        '7HS' => 'E02001736',
        '7HW' => 'E02001736',
        '7HX' => 'E02001736',
        '7JB' => 'E02001731',
        '7JD' => 'E02001731',
        '7JE' => 'E02001731',
        '7JH' => 'E02001731',
        '7JJ' => 'E02001736',
        '7JL' => 'E02001736',
        '7JN' => 'E02001736',
        '7JP' => 'E02001736',
        '7JR' => 'E02001736',
        '7JS' => 'E02001731',
        '7JT' => 'E02001731',
        '7JU' => 'E02001731',
        '7LA' => 'E02001736',
        '7LB' => 'E02001731',
        '7LD' => 'E02001731',
        '7LE' => 'E02001736',
        '7LH' => 'E02001736',
        '7LJ' => 'E02001736',
        '7LN' => 'E02001736',
        '7LQ' => 'E02001736',
        '7LS' => 'E02001731',
        '7LT' => 'E02001736',
        '7LW' => 'E02001736',
        '7LY' => 'E02001736',
        '7NA' => 'E02001736',
        '7NH' => 'E02001736',
        '7NL' => 'E02001736',
        '7NN' => 'E02001736',
        '7NP' => 'E02001736',
        '7NQ' => 'E02001736',
        '7NR' => 'E02001736',
        '7NT' => 'E02001736',
        '7NU' => 'E02001736',
        '7NX' => 'E02001736',
        '7NY' => 'E02001736',
        '7PA' => 'E02001736',
        '7PB' => 'E02001736',
        '7PD' => 'E02001736',
        '7PE' => 'E02001736',
        '7PF' => 'E02001736',
        '7PG' => 'E02001736',
        '7PH' => 'E02001736',
        '7PJ' => 'E02001736',
        '7PL' => 'E02001736',
        '7PN' => 'E02001736',
        '7PP' => 'E02001736',
        '7PQ' => 'E02001736',
        '7PS' => 'E02001736',
        '7PT' => 'E02001736',
        '7PW' => 'E02001736',
        '7QA' => 'E02001736',
        '7QP' => 'E02001736',
        '7QR' => 'E02001736',
        '7QS' => 'E02001731',
        '7QT' => 'E02001736',
        '7QU' => 'E02001736',
        '7QW' => 'E02001736',
        '7QX' => 'E02001736',
        '7QY' => 'E02001736',
        '7QZ' => 'E02001736',
        '7RA' => 'E02001736',
        '7RD' => 'E02001736',
        '7RE' => 'E02001736',
        '7RF' => 'E02001736',
        '7RG' => 'E02001736',
        '7RJ' => 'E02001736',
        '7RL' => 'E02001736',
        '7RP' => 'E02001736',
        '7RQ' => 'E02001736',
        '7RR' => 'E02001736',
        '7RS' => 'E02001736',
        '7RT' => 'E02001736',
        '7RU' => 'E02001736',
        '7RW' => 'E02001736',
        '7RX' => 'E02001736',
        '7RY' => 'E02001736',
        '7RZ' => 'E02001736',
        '7SA' => 'E02001736',
        '7SB' => 'E02001736',
        '7SD' => 'E02001736',
        '7SE' => 'E02001736',
        '7SF' => 'E02001736',
        '7SH' => 'E02001736',
        '7SJ' => 'E02001736',
        '7ST' => 'E02001736',
        '7TE' => 'E02001734',
        '7TH' => 'E02001734',
        '7TJ' => 'E02001734',
        '7TU' => 'E02001734',
        '7TX' => 'E02001734',
        '7TY' => 'E02001734',
        '7UA' => 'E02001734',
        '7UB' => 'E02001734',
        '7UD' => 'E02001734',
        '7UE' => 'E02001734',
        '7UF' => 'E02001734',
        '7UG' => 'E02001734',
        '7UH' => 'E02001734',
        '7UJ' => 'E02001734',
        '7UL' => 'E02001734',
        '7UN' => 'E02001734',
        '7UQ' => 'E02001734',
        '7UR' => 'E02001734',
        '7XA' => 'E02001736',
        '7XB' => 'E02001736',
        '7XD' => 'E02001736',
        '7XE' => 'E02001736',
        '7XF' => 'E02001736',
        '7XG' => 'E02001734',
        '7XH' => 'E02001736',
        '7XQ' => 'E02001736',
        '7YA' => 'E02001736',
        '7YB' => 'E02001736',
        '7YD' => 'E02001736',
        '7YG' => 'E02001736',
        '7YH' => 'E02001736',
        '7YJ' => 'E02001736',
        '7YL' => 'E02001736',
        '7YQ' => 'E02001736',
        '7YS' => 'E02001736',
        '7YW' => 'E02001736',
        '7YY' => 'E02001736',
        '7YZ' => 'E02001736',
        '8AA' => 'E02001736',
        '8AB' => 'E02001736',
        '8AD' => 'E02001736',
        '8AE' => 'E02001736',
        '8AF' => 'E02001736',
        '8AG' => 'E02001736',
        '8AH' => 'E02001736',
        '8AJ' => 'E02001736',
        '8AL' => 'E02001736',
        '8AN' => 'E02001736',
        '8AP' => 'E02001736',
        '8AQ' => 'E02001736',
        '8AR' => 'E02001736',
        '8AS' => 'E02001736',
        '8AT' => 'E02001736',
        '8AU' => 'E02001736',
        '8AW' => 'E02001734',
        '8AX' => 'E02001736',
        '8AY' => 'E02001736',
        '8AZ' => 'E02001736',
        '8BA' => 'E02001736',
        '8BB' => 'E02001734',
        '8BD' => 'E02001736',
        '8BE' => 'E02001736',
        '8BF' => 'E02001736',
        '8BG' => 'E02001734',
        '8BH' => 'E02001736',
        '8BJ' => 'E02001736',
        '8BL' => 'E02001736',
        '8BN' => 'E02001734',
        '8BP' => 'E02001736',
        '8BQ' => 'E02001734',
        '8BR' => 'E02001736',
        '8BS' => 'E02001736',
        '8BT' => 'E02001736',
        '8BU' => 'E02001736',
        '8BW' => 'E02001736',
        '8BX' => 'E02001736',
        '8BY' => 'E02001736',
        '8BZ' => 'E02001736',
        '8DA' => 'E02001736',
        '8DB' => 'E02001736',
        '8DD' => 'E02001736',
        '8DE' => 'E02001736',
        '8DF' => 'E02001736',
        '8DH' => 'E02001736',
        '8DJ' => 'E02001736',
        '8DL' => 'E02001734',
        '8DN' => 'E02001736',
        '8DP' => 'E02001736',
        '8DQ' => 'E02001736',
        '8DR' => 'E02001736',
        '8DS' => 'E02001736',
        '8DT' => 'E02001736',
        '8DU' => 'E02001736',
        '8DX' => 'E02001736',
        '8DY' => 'E02001734',
        '8EA' => 'E02001736',
        '8EB' => 'E02001736',
        '8ED' => 'E02001736',
        '8EE' => 'E02001736',
        '8EF' => 'E02001736',
        '8EH' => 'E02001734',
        '8EQ' => 'E02001736',
        '8ET' => 'E02001736',
        '8EU' => 'E02001736',
        '8HA' => 'E02001734',
        '8HB' => 'E02001734',
        '8HD' => 'E02001734',
        '8HE' => 'E02001734',
        '8HF' => 'E02001734',
        '8HG' => 'E02001734',
        '8HH' => 'E02001734',
        '8HJ' => 'E02001734',
        '8HL' => 'E02001736',
        '8HN' => 'E02001736',
        '8HP' => 'E02001736',
        '8HQ' => 'E02001736',
        '8HT' => 'E02001734',
        '8HW' => 'E02001734',
        '8HZ' => 'E02001734',
        '8JA' => 'E02001736',
        '8JB' => 'E02001734',
        '8JD' => 'E02001734',
        '8JE' => 'E02001734',
        '8JF' => 'E02001734',
        '8JG' => 'E02001734',
        '8JH' => 'E02001734',
        '8JJ' => 'E02001734',
        '8JL' => 'E02001734',
        '8JN' => 'E02001734',
        '8JQ' => 'E02001734',
        '8JR' => 'E02001734',
        '8JS' => 'E02001734',
        '8JU' => 'E02001734',
        '8JW' => 'E02001734',
        '8JX' => 'E02001734',
        '8JY' => 'E02001734',
        '8JZ' => 'E02001734',
        '8LA' => 'E02001734',
        '8LB' => 'E02001734',
        '8LD' => 'E02001734',
        '8LE' => 'E02001734',
        '8LF' => 'E02001734',
        '8LG' => 'E02001734',
        '8LH' => 'E02001734',
        '8LJ' => 'E02001734',
        '8LL' => 'E02001734',
        '8LN' => 'E02001734',
        '8LR' => 'E02001734',
        '8LS' => 'E02001734',
        '8LT' => 'E02001734',
        '8LU' => 'E02001736',
        '8LW' => 'E02001734',
        '8LX' => 'E02001734',
        '8LZ' => 'E02001736',
        '8NB' => 'E02001736',
        '8NE' => 'E02001736',
        '8NF' => 'E02001734',
        '8NP' => 'E02001734',
        '8NQ' => 'E02001734',
        '8NR' => 'E02001734',
        '8NS' => 'E02001736',
        '8NT' => 'E02001734',
        '8NU' => 'E02001736',
        '8NX' => 'E02001736',
        '8NY' => 'E02001736',
        '8NZ' => 'E02001729',
        '8PA' => 'E02001736',
        '8PQ' => 'E02001734',
        '8PR' => 'E02001734',
        '8PY' => 'E02001734',
        '8QA' => 'E02001734',
        '8QB' => 'E02001734',
        '8QH' => 'E02001734',
        '8QJ' => 'E02001734',
        '8QL' => 'E02001734',
        '8QN' => 'E02001734',
        '8QP' => 'E02001734',
        '8QR' => 'E02001734',
        '8QW' => 'E02001734',
        '8RL' => 'E02001736',
        '8RN' => 'E02001736',
        '8RP' => 'E02001736',
        '8RQ' => 'E02001736',
        '8RR' => 'E02001736',
        '8RS' => 'E02001736',
        '8RT' => 'E02001736',
        '8RU' => 'E02001736',
        '8RX' => 'E02001736',
        '8RY' => 'E02001736',
        '8SA' => 'E02001736',
        '8SB' => 'E02001736',
        '8SD' => 'E02001736',
        '8SE' => 'E02001736',
        '8SH' => 'E02001736',
        '8SJ' => 'E02001736',
        '8SL' => 'E02001736',
        '8SN' => 'E02001736',
        '8SP' => 'E02001736',
        '8SQ' => 'E02001736',
        '8SR' => 'E02001736',
        '8ST' => 'E02001736',
        '8SU' => 'E02001736',
        '8SX' => 'E02001736',
        '8SZ' => 'E02001729',
        '8TH' => 'E02001736',
        '8TP' => 'E02001736',
        '8TQ' => 'E02001736',
        '8TR' => 'E02001736',
        '8TS' => 'E02001736',
        '8TT' => 'E02001736',
        '8TU' => 'E02001736',
        '8TX' => 'E02001736',
        '8TY' => 'E02001736',
        '8UA' => 'E02001736',
        '8UB' => 'E02001736',
        '8UD' => 'E02001736',
        '8UE' => 'E02001736',
        '8UF' => 'E02001736',
        '8UH' => 'E02001736',
        '8UJ' => 'E02001736',
        '8UL' => 'E02001736',
        '8UN' => 'E02001736',
        '8UP' => 'E02001736',
        '8UQ' => 'E02001736',
        '8UR' => 'E02001736',
        '8WZ' => 'E02001731',
        '8XJ' => 'E02001736',
        '8XL' => 'E02001736',
        '8XN' => 'E02001736',
        '8XP' => 'E02001736',
        '8XQ' => 'E02001736',
        '8XR' => 'E02001734',
        '8XS' => 'E02001734',
        '8XT' => 'E02001734',
        '8XU' => 'E02001734',
        '8XX' => 'E02001734',
        '8XY' => 'E02001734',
        '8YA' => 'E02001734',
        '8YB' => 'E02001734',
        '8YD' => 'E02001736',
        '8YE' => 'E02001736',
        '8YJ' => 'E02001736',
        '9AA' => 'E02001729',
        '9AB' => 'E02001729',
        '9AD' => 'E02001729',
        '9AE' => 'E02001729',
        '9AF' => 'E02001723',
        '9AG' => 'E02001723',
        '9AH' => 'E02001729',
        '9AJ' => 'E02001729',
        '9AL' => 'E02001729',
        '9AN' => 'E02001729',
        '9AP' => 'E02001729',
        '9AQ' => 'E02001729',
        '9AR' => 'E02001729',
        '9AS' => 'E02001729',
        '9AT' => 'E02001729',
        '9AU' => 'E02001729',
        '9AW' => 'E02001729',
        '9AX' => 'E02001729',
        '9AY' => 'E02001729',
        '9BA' => 'E02001729',
        '9BB' => 'E02001729',
        '9BD' => 'E02001729',
        '9BE' => 'E02001729',
        '9BF' => 'E02001723',
        '9BH' => 'E02001729',
        '9BJ' => 'E02001729',
        '9BL' => 'E02001729',
        '9BN' => 'E02001729',
        '9BP' => 'E02001729',
        '9BQ' => 'E02001729',
        '9BR' => 'E02001729',
        '9BS' => 'E02001729',
        '9BT' => 'E02001729',
        '9BU' => 'E02001729',
        '9BX' => 'E02001729',
        '9BY' => 'E02001729',
        '9DA' => 'E02001729',
        '9DB' => 'E02001729',
        '9DD' => 'E02001729',
        '9DE' => 'E02001729',
        '9DF' => 'E02001723',
        '9DH' => 'E02001729',
        '9DJ' => 'E02001729',
        '9DL' => 'E02001729',
        '9DN' => 'E02001729',
        '9DP' => 'E02001729',
        '9DQ' => 'E02001729',
        '9DR' => 'E02001723',
        '9DT' => 'E02001723',
        '9DU' => 'E02001723',
        '9DX' => 'E02001723',
        '9DY' => 'E02001723',
        '9DZ' => 'E02001729',
        '9EA' => 'E02001723',
        '9EB' => 'E02001723',
        '9ED' => 'E02001723',
        '9EE' => 'E02001723',
        '9EH' => 'E02001723',
        '9EJ' => 'E02001723',
        '9EL' => 'E02001723',
        '9EN' => 'E02001723',
        '9EP' => 'E02001729',
        '9EQ' => 'E02001726',
        '9ES' => 'E02001723',
        '9EU' => 'E02001723',
        '9EX' => 'E02001723',
        '9HB' => 'E02001729',
        '9HD' => 'E02001729',
        '9HE' => 'E02001729',
        '9HH' => 'E02001729',
        '9HJ' => 'E02001729',
        '9HL' => 'E02001729',
        '9HN' => 'E02001729',
        '9HP' => 'E02001729',
        '9HQ' => 'E02001729',
        '9HR' => 'E02001729',
        '9HS' => 'E02001729',
        '9HT' => 'E02001729',
        '9HU' => 'E02001729',
        '9HX' => 'E02001729',
        '9HY' => 'E02001729',
        '9JA' => 'E02001729',
        '9JB' => 'E02001736',
        '9JD' => 'E02001736',
        '9JE' => 'E02001736',
        '9JH' => 'E02001736',
        '9JJ' => 'E02001723',
        '9JN' => 'E02001736',
        '9JP' => 'E02001734',
        '9JQ' => 'E02001729',
        '9JR' => 'E02001729',
        '9JU' => 'E02001726',
        '9JX' => 'E02001726',
        '9JY' => 'E02001726',
        '9LA' => 'E02001726',
        '9LB' => 'E02001726',
        '9LD' => 'E02001726',
        '9LE' => 'E02001726',
        '9LG' => 'E02001726',
        '9LH' => 'E02001726',
        '9LJ' => 'E02001726',
        '9LL' => 'E02001726',
        '9LN' => 'E02001726',
        '9LP' => 'E02001726',
        '9LQ' => 'E02001726',
        '9LR' => 'E02001726',
        '9LS' => 'E02001726',
        '9LT' => 'E02001726',
        '9LU' => 'E02001726',
        '9LX' => 'E02001736',
        '9NB' => 'E02001726',
        '9ND' => 'E02001726',
        '9NE' => 'E02001726',
        '9NH' => 'E02001729',
        '9NJ' => 'E02001729',
        '9NL' => 'E02001729',
        '9NN' => 'E02001729',
        '9NP' => 'E02001726',
        '9NQ' => 'E02001726',
        '9NR' => 'E02001729',
        '9NS' => 'E02001729',
        '9NT' => 'E02001726',
        '9NU' => 'E02001729',
        '9NX' => 'E02001726',
        '9NY' => 'E02001726',
        '9PA' => 'E02001726',
        '9PB' => 'E02001726',
        '9PD' => 'E02001726',
        '9PE' => 'E02001726',
        '9PH' => 'E02001726',
        '9PJ' => 'E02001726',
        '9PL' => 'E02001726',
        '9PN' => 'E02001736',
        '9PQ' => 'E02001736',
        '9PR' => 'E02001736',
        '9PS' => 'E02001736',
        '9PT' => 'E02001736',
        '9PU' => 'E02001736',
        '9PX' => 'E02001736',
        '9PY' => 'E02001729',
        '9QA' => 'E02001726',
        '9QB' => 'E02001726',
        '9QD' => 'E02001726',
        '9QE' => 'E02001726',
        '9QH' => 'E02001726',
        '9QJ' => 'E02001726',
        '9QL' => 'E02001726',
        '9QN' => 'E02001726',
        '9QP' => 'E02001726',
        '9QQ' => 'E02001726',
        '9QR' => 'E02001726',
        '9QS' => 'E02001726',
        '9QT' => 'E02001726',
        '9QU' => 'E02001726',
        '9QX' => 'E02001726',
        '9QY' => 'E02001726',
        '9RA' => 'E02001726',
        '9RB' => 'E02001726',
        '9RD' => 'E02001736',
        '9RJ' => 'E02001726',
        '9RL' => 'E02001726',
        '9RN' => 'E02001726',
        '9RP' => 'E02001726',
        '9RQ' => 'E02001726',
        '9RR' => 'E02001726',
        '9RS' => 'E02001726',
        '9RT' => 'E02001726',
        '9RU' => 'E02001723',
        '9RX' => 'E02001723',
        '9RY' => 'E02001723',
        '9SA' => 'E02001723',
        '9SB' => 'E02001723',
        '9SD' => 'E02001723',
        '9SE' => 'E02001726',
        '9SH' => 'E02001726',
        '9SJ' => 'E02001723',
        '9SL' => 'E02001723',
        '9SN' => 'E02001723',
        '9SQ' => 'E02001723',
        '9SR' => 'E02001723',
        '9SS' => 'E02001723',
        '9ST' => 'E02001723',
        '9SW' => 'E02001723',
        '9SX' => 'E02001723',
        '9SY' => 'E02001723',
        '9SZ' => 'E02001723',
        '9TA' => 'E02001723',
        '9TB' => 'E02001723',
        '9TD' => 'E02001723',
        '9TE' => 'E02001723',
        '9TH' => 'E02001723',
        '9TJ' => 'E02001723',
        '9TL' => 'E02001723',
        '9TN' => 'E02001723',
        '9TP' => 'E02001723',
        '9TQ' => 'E02001723',
        '9TR' => 'E02001723',
        '9TS' => 'E02001723',
        '9TT' => 'E02001723',
        '9TU' => 'E02001723',
        '9UA' => 'E02001723',
        '9UB' => 'E02001723',
        '9UD' => 'E02001723',
        '9UE' => 'E02001729',
        '9UH' => 'E02001729',
        '9UJ' => 'E02001723',
        '9UL' => 'E02001723',
        '9UN' => 'E02001723',
        '9UP' => 'E02001723',
        '9UQ' => 'E02001723',
        '9UT' => 'E02001723',
        '9UU' => 'E02001729',
        '9UX' => 'E02001729',
        '9UY' => 'E02001726',
        '9WA' => 'E02001731',
        '9XA' => 'E02001729',
        '9XB' => 'E02001723',
        '9XD' => 'E02001723',
        '9XE' => 'E02001723',
        '9XF' => 'E02001726',
        '9XG' => 'E02001726',
        '9XH' => 'E02001723',
        '9XJ' => 'E02001729',
        '9XL' => 'E02001729',
        '9XN' => 'E02001729',
        '9XP' => 'E02001723',
        '9XQ' => 'E02001723',
        '9XR' => 'E02001723',
        '9XS' => 'E02001726',
        '9XT' => 'E02001726',
        '9XU' => 'E02001726',
        '9XW' => 'E02001723',
        '9XX' => 'E02001726',
        '9XY' => 'E02001726',
        '9XZ' => 'E02001726',
        '9YA' => 'E02001726',
        '9YB' => 'E02001726',
        '9YD' => 'E02001726',
        '9YE' => 'E02001726',
        '9YF' => 'E02001726',
        '9YH' => 'E02001726',
        '9YJ' => 'E02001729',
        '9YL' => 'E02001726',
        '9YN' => 'E02001726',
        '9YW' => 'E02001726',
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
