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
final class RG31
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02003372',
        '4AB' => 'E02003372',
        '4DR' => 'E02003397',
        '4DU' => 'E02003397',
        '4EE' => 'E02003372',
        '4EF' => 'E02003372',
        '4EH' => 'E02003372',
        '4EJ' => 'E02003372',
        '4EL' => 'E02003372',
        '4EN' => 'E02003372',
        '4EP' => 'E02003372',
        '4ER' => 'E02003372',
        '4ES' => 'E02003371',
        '4ET' => 'E02003372',
        '4EU' => 'E02003371',
        '4EX' => 'E02003372',
        '4EY' => 'E02003372',
        '4FF' => 'E02003395',
        '4FG' => 'E02003372',
        '4FH' => 'E02003395',
        '4FJ' => 'E02003372',
        '4FL' => 'E02003372',
        '4FN' => 'E02003372',
        '4FP' => 'E02003395',
        '4FQ' => 'E02003395',
        '4FR' => 'E02003395',
        '4FS' => 'E02003372',
        '4FT' => 'E02003372',
        '4FU' => 'E02003372',
        '4FW' => 'E02003395',
        '4FX' => 'E02003372',
        '4FY' => 'E02003395',
        '4FZ' => 'E02003395',
        '4HA' => 'E02003397',
        '4HE' => 'E02003397',
        '4HQ' => 'E02003372',
        '4JQ' => 'E02003397',
        '4QL' => 'E02003372',
        '4QR' => 'E02003372',
        '4QS' => 'E02003372',
        '4QT' => 'E02003372',
        '4QU' => 'E02003372',
        '4QX' => 'E02003372',
        '4QY' => 'E02003372',
        '4QZ' => 'E02003372',
        '4RA' => 'E02003372',
        '4RB' => 'E02003372',
        '4RD' => 'E02003372',
        '4RE' => 'E02003372',
        '4RG' => 'E02003372',
        '4RH' => 'E02003372',
        '4RJ' => 'E02003372',
        '4RL' => 'E02003372',
        '4RQ' => 'E02003372',
        '4SA' => 'E02003371',
        '4SE' => 'E02003372',
        '4SF' => 'E02003372',
        '4SG' => 'E02003372',
        '4SJ' => 'E02003372',
        '4SL' => 'E02003371',
        '4SN' => 'E02003372',
        '4SP' => 'E02003372',
        '4SQ' => 'E02003372',
        '4SR' => 'E02003372',
        '4SS' => 'E02003372',
        '4ST' => 'E02003372',
        '4SU' => 'E02003372',
        '4SW' => 'E02003372',
        '4SX' => 'E02003372',
        '4SY' => 'E02003372',
        '4SZ' => 'E02003372',
        '4TA' => 'E02003372',
        '4TB' => 'E02003371',
        '4TD' => 'E02003371',
        '4TE' => 'E02003371',
        '4TF' => 'E02003372',
        '4TG' => 'E02003371',
        '4TH' => 'E02003371',
        '4TJ' => 'E02003371',
        '4TL' => 'E02003371',
        '4TN' => 'E02003371',
        '4TP' => 'E02003371',
        '4TR' => 'E02003371',
        '4TS' => 'E02003371',
        '4TT' => 'E02003371',
        '4TU' => 'E02003372',
        '4UH' => 'E02003372',
        '4UP' => 'E02003372',
        '4UQ' => 'E02003372',
        '4UR' => 'E02003372',
        '4US' => 'E02003372',
        '4UT' => 'E02003372',
        '4UU' => 'E02003372',
        '4UX' => 'E02003372',
        '4UY' => 'E02003372',
        '4WD' => 'E02003372',
        '4WE' => 'E02003372',
        '4WF' => 'E02003372',
        '4WG' => 'E02003395',
        '4XA' => 'E02003372',
        '4XB' => 'E02003372',
        '4XD' => 'E02003372',
        '4XE' => 'E02003372',
        '4XG' => 'E02003372',
        '4XH' => 'E02003372',
        '4XJ' => 'E02003372',
        '4XL' => 'E02003372',
        '4XN' => 'E02003372',
        '4XP' => 'E02003372',
        '4XQ' => 'E02003372',
        '4XR' => 'E02003372',
        '4XU' => 'E02003395',
        '4XW' => 'E02003395',
        '4XZ' => 'E02003372',
        '4YA' => 'E02003372',
        '4YY' => 'E02003372',
        '4YZ' => 'E02003372',
        '4ZD' => 'E02003372',
        '4ZG' => 'E02003372',
        '4ZJ' => 'E02003395',
        '4ZN' => 'E02003395',
        '4ZQ' => 'E02003372',
        '4ZR' => 'E02003372',
        '4ZS' => 'E02003372',
        '4ZW' => 'E02003372',
        '5AA' => 'E02003393',
        '5AB' => 'E02003393',
        '5AD' => 'E02003393',
        '5AE' => 'E02003393',
        '5AF' => 'E02003395',
        '5AG' => 'E02003393',
        '5AH' => 'E02003393',
        '5AJ' => 'E02003393',
        '5AL' => 'E02003393',
        '5AN' => 'E02003397',
        '5AP' => 'E02003393',
        '5AQ' => 'E02003372',
        '5AR' => 'E02003397',
        '5AS' => 'E02003397',
        '5AT' => 'E02003397',
        '5AU' => 'E02003393',
        '5AW' => 'E02003393',
        '5AX' => 'E02003393',
        '5AY' => 'E02003393',
        '5AZ' => 'E02003393',
        '5BA' => 'E02003393',
        '5BB' => 'E02003393',
        '5BD' => 'E02003393',
        '5BE' => 'E02003393',
        '5BF' => 'E02003371',
        '5BG' => 'E02003397',
        '5BH' => 'E02003393',
        '5BJ' => 'E02003397',
        '5BL' => 'E02003393',
        '5BN' => 'E02003393',
        '5BQ' => 'E02003397',
        '5BR' => 'E02003397',
        '5BS' => 'E02003393',
        '5BT' => 'E02003393',
        '5BU' => 'E02003393',
        '5BW' => 'E02003393',
        '5BX' => 'E02003393',
        '5BY' => 'E02003393',
        '5BZ' => 'E02003393',
        '5DA' => 'E02003393',
        '5DB' => 'E02003393',
        '5DD' => 'E02003393',
        '5DE' => 'E02003372',
        '5DF' => 'E02003393',
        '5DG' => 'E02003393',
        '5DH' => 'E02003393',
        '5DJ' => 'E02003397',
        '5DL' => 'E02003397',
        '5DN' => 'E02003393',
        '5DP' => 'E02003393',
        '5DQ' => 'E02003393',
        '5DS' => 'E02003393',
        '5DT' => 'E02003393',
        '5DW' => 'E02003393',
        '5DX' => 'E02003393',
        '5DY' => 'E02003372',
        '5DZ' => 'E02003393',
        '5EA' => 'E02003372',
        '5EB' => 'E02003393',
        '5ED' => 'E02003393',
        '5EG' => 'E02003393',
        '5EW' => 'E02003372',
        '5GA' => 'E02003393',
        '5HB' => 'E02003372',
        '5HD' => 'E02003393',
        '5HF' => 'E02003393',
        '5HG' => 'E02003372',
        '5HH' => 'E02003372',
        '5HJ' => 'E02003371',
        '5HL' => 'E02003371',
        '5HN' => 'E02003372',
        '5HP' => 'E02003372',
        '5HR' => 'E02003372',
        '5HS' => 'E02003372',
        '5HT' => 'E02003372',
        '5HU' => 'E02003372',
        '5HW' => 'E02003372',
        '5HX' => 'E02003372',
        '5HY' => 'E02003372',
        '5HZ' => 'E02003372',
        '5JA' => 'E02003393',
        '5JB' => 'E02003393',
        '5JD' => 'E02003393',
        '5JE' => 'E02003393',
        '5JF' => 'E02003393',
        '5JG' => 'E02003393',
        '5JH' => 'E02003393',
        '5JJ' => 'E02003393',
        '5JL' => 'E02003371',
        '5JN' => 'E02003372',
        '5JP' => 'E02003393',
        '5JS' => 'E02003372',
        '5JT' => 'E02003372',
        '5JU' => 'E02003371',
        '5JW' => 'E02003393',
        '5JX' => 'E02003372',
        '5JY' => 'E02003371',
        '5LA' => 'E02003371',
        '5LB' => 'E02003372',
        '5LD' => 'E02003372',
        '5LE' => 'E02003372',
        '5LF' => 'E02003372',
        '5LG' => 'E02003372',
        '5LH' => 'E02003371',
        '5LJ' => 'E02003372',
        '5LL' => 'E02003372',
        '5LN' => 'E02003372',
        '5LP' => 'E02003372',
        '5LQ' => 'E02003372',
        '5LR' => 'E02003372',
        '5LS' => 'E02003372',
        '5LT' => 'E02003372',
        '5LW' => 'E02003372',
        '5LX' => 'E02003372',
        '5LY' => 'E02003393',
        '5NA' => 'E02003372',
        '5NB' => 'E02003372',
        '5ND' => 'E02003371',
        '5NE' => 'E02003371',
        '5NF' => 'E02003371',
        '5NG' => 'E02003371',
        '5NH' => 'E02003371',
        '5NJ' => 'E02003372',
        '5NL' => 'E02003393',
        '5NP' => 'E02003393',
        '5NQ' => 'E02003372',
        '5NR' => 'E02003393',
        '5NS' => 'E02003393',
        '5NT' => 'E02003393',
        '5NU' => 'E02003393',
        '5NW' => 'E02003393',
        '5NX' => 'E02003393',
        '5NY' => 'E02003393',
        '5PA' => 'E02003393',
        '5PB' => 'E02003393',
        '5PD' => 'E02003393',
        '5PJ' => 'E02003393',
        '5PL' => 'E02003393',
        '5PN' => 'E02003393',
        '5PP' => 'E02003393',
        '5PR' => 'E02003393',
        '5PS' => 'E02003393',
        '5PT' => 'E02003393',
        '5PU' => 'E02003393',
        '5PW' => 'E02003393',
        '5PX' => 'E02003393',
        '5PY' => 'E02003393',
        '5PZ' => 'E02003393',
        '5QA' => 'E02003393',
        '5QB' => 'E02003371',
        '5QD' => 'E02003372',
        '5QE' => 'E02003371',
        '5QF' => 'E02003371',
        '5SB' => 'E02003372',
        '5SD' => 'E02003372',
        '5ST' => 'E02003393',
        '5TQ' => 'E02003371',
        '5TX' => 'E02003371',
        '5TY' => 'E02003371',
        '5TZ' => 'E02003372',
        '5UA' => 'E02003372',
        '5UB' => 'E02003371',
        '5UD' => 'E02003371',
        '5UE' => 'E02003371',
        '5UG' => 'E02003371',
        '5UH' => 'E02003372',
        '5UJ' => 'E02003371',
        '5UZ' => 'E02003371',
        '5WA' => 'E02003371',
        '5WB' => 'E02003371',
        '5WD' => 'E02003371',
        '5WE' => 'E02003371',
        '5WF' => 'E02003371',
        '5WG' => 'E02003371',
        '5WH' => 'E02003371',
        '5WJ' => 'E02003371',
        '5WQ' => 'E02003371',
        '5WR' => 'E02003371',
        '5WS' => 'E02003371',
        '5XJ' => 'E02003395',
        '5XN' => 'E02003395',
        '5XP' => 'E02003372',
        '5XT' => 'E02003372',
        '5XU' => 'E02003372',
        '5XX' => 'E02003372',
        '5XY' => 'E02003371',
        '5YN' => 'E02003395',
        '5YP' => 'E02003393',
        '5YR' => 'E02003395',
        '5YS' => 'E02003393',
        '5YT' => 'E02003395',
        '5YU' => 'E02003395',
        '5YW' => 'E02003395',
        '5YX' => 'E02003395',
        '5YY' => 'E02003395',
        '5YZ' => 'E02003372',
        '5ZL' => 'E02003395',
        '5ZN' => 'E02003395',
        '5ZQ' => 'E02003395',
        '5ZX' => 'E02003395',
        '6AA' => 'E02003393',
        '6AB' => 'E02003393',
        '6AD' => 'E02003394',
        '6AE' => 'E02003393',
        '6AF' => 'E02003370',
        '6AG' => 'E02003370',
        '6AH' => 'E02003370',
        '6BA' => 'E02003395',
        '6BB' => 'E02003395',
        '6DE' => 'E02003393',
        '6DL' => 'E02003394',
        '6DP' => 'E02003393',
        '6DR' => 'E02003393',
        '6EX' => 'E02003393',
        '6EY' => 'E02003393',
        '6EZ' => 'E02003393',
        '6FA' => 'E02003370',
        '6FB' => 'E02003370',
        '6FD' => 'E02003370',
        '6FE' => 'E02003370',
        '6FF' => 'E02003370',
        '6FG' => 'E02003370',
        '6FH' => 'E02003370',
        '6FJ' => 'E02003370',
        '6FL' => 'E02003370',
        '6FN' => 'E02003370',
        '6FP' => 'E02003370',
        '6FQ' => 'E02003370',
        '6FR' => 'E02003370',
        '6FS' => 'E02003370',
        '6FU' => 'E02003370',
        '6FW' => 'E02003370',
        '6FX' => 'E02003370',
        '6FY' => 'E02003370',
        '6FZ' => 'E02003370',
        '6GA' => 'E02003370',
        '6GB' => 'E02003370',
        '6GD' => 'E02003370',
        '6GE' => 'E02003370',
        '6GF' => 'E02003370',
        '6GG' => 'E02003370',
        '6GH' => 'E02003395',
        '6GJ' => 'E02003371',
        '6GP' => 'E02003371',
        '6GQ' => 'E02003370',
        '6GT' => 'E02003370',
        '6GW' => 'E02003371',
        '6GX' => 'E02003371',
        '6HA' => 'E02003393',
        '6HB' => 'E02003393',
        '6HD' => 'E02003393',
        '6HE' => 'E02003393',
        '6HF' => 'E02003393',
        '6HH' => 'E02003393',
        '6HJ' => 'E02003393',
        '6HL' => 'E02003393',
        '6HN' => 'E02003393',
        '6HP' => 'E02003393',
        '6HR' => 'E02003393',
        '6HS' => 'E02003393',
        '6HT' => 'E02003393',
        '6HU' => 'E02003393',
        '6HX' => 'E02003393',
        '6JA' => 'E02003395',
        '6JB' => 'E02003393',
        '6JD' => 'E02003393',
        '6JE' => 'E02003393',
        '6JF' => 'E02003394',
        '6JG' => 'E02003393',
        '6JH' => 'E02003393',
        '6JJ' => 'E02003393',
        '6JL' => 'E02003393',
        '6JN' => 'E02003393',
        '6JP' => 'E02003393',
        '6JQ' => 'E02003393',
        '6JR' => 'E02003393',
        '6JS' => 'E02003393',
        '6JT' => 'E02003393',
        '6JU' => 'E02003393',
        '6JW' => 'E02003393',
        '6JX' => 'E02003393',
        '6JY' => 'E02003393',
        '6JZ' => 'E02003393',
        '6LA' => 'E02003393',
        '6LB' => 'E02003393',
        '6LD' => 'E02003393',
        '6LE' => 'E02003393',
        '6LF' => 'E02003393',
        '6LG' => 'E02003393',
        '6LH' => 'E02003393',
        '6LJ' => 'E02003393',
        '6LL' => 'E02003393',
        '6LN' => 'E02003393',
        '6LP' => 'E02003393',
        '6LQ' => 'E02003393',
        '6LR' => 'E02003393',
        '6LS' => 'E02003393',
        '6LT' => 'E02003371',
        '6LU' => 'E02003371',
        '6LX' => 'E02003393',
        '6LY' => 'E02003393',
        '6LZ' => 'E02003393',
        '6NA' => 'E02003393',
        '6NB' => 'E02003393',
        '6ND' => 'E02003371',
        '6NH' => 'E02003393',
        '6NJ' => 'E02003393',
        '6NL' => 'E02003393',
        '6NN' => 'E02003393',
        '6NP' => 'E02003393',
        '6NR' => 'E02003393',
        '6NS' => 'E02003393',
        '6NT' => 'E02003371',
        '6NU' => 'E02003371',
        '6NX' => 'E02003371',
        '6NY' => 'E02003371',
        '6PA' => 'E02003371',
        '6PB' => 'E02003371',
        '6PD' => 'E02003371',
        '6PE' => 'E02003371',
        '6PG' => 'E02003371',
        '6PH' => 'E02003371',
        '6PJ' => 'E02003393',
        '6PL' => 'E02003371',
        '6PN' => 'E02003371',
        '6PP' => 'E02003371',
        '6PR' => 'E02003371',
        '6PS' => 'E02003393',
        '6PU' => 'E02003395',
        '6PX' => 'E02003393',
        '6PY' => 'E02003371',
        '6PZ' => 'E02003393',
        '6QA' => 'E02003371',
        '6QB' => 'E02003371',
        '6QD' => 'E02003371',
        '6QE' => 'E02003371',
        '6QG' => 'E02003371',
        '6QH' => 'E02003371',
        '6QJ' => 'E02003371',
        '6QL' => 'E02003371',
        '6QN' => 'E02003371',
        '6QP' => 'E02003371',
        '6QR' => 'E02003371',
        '6QS' => 'E02003371',
        '6QT' => 'E02003371',
        '6QU' => 'E02003371',
        '6QX' => 'E02003371',
        '6QY' => 'E02003371',
        '6QZ' => 'E02003371',
        '6RA' => 'E02003371',
        '6RB' => 'E02003393',
        '6RD' => 'E02003393',
        '6RE' => 'E02003371',
        '6RF' => 'E02003371',
        '6RH' => 'E02003371',
        '6RJ' => 'E02003393',
        '6RL' => 'E02003393',
        '6RN' => 'E02003393',
        '6RP' => 'E02003393',
        '6RQ' => 'E02003393',
        '6RR' => 'E02003393',
        '6RS' => 'E02003371',
        '6RT' => 'E02003371',
        '6RU' => 'E02003371',
        '6RX' => 'E02003371',
        '6RY' => 'E02003371',
        '6RZ' => 'E02003371',
        '6SA' => 'E02003371',
        '6SB' => 'E02003371',
        '6SD' => 'E02003371',
        '6SE' => 'E02003371',
        '6SG' => 'E02003371',
        '6SH' => 'E02003371',
        '6SJ' => 'E02003371',
        '6SL' => 'E02003371',
        '6SN' => 'E02003371',
        '6SP' => 'E02003371',
        '6SR' => 'E02003371',
        '6SS' => 'E02003371',
        '6ST' => 'E02003371',
        '6SU' => 'E02003371',
        '6SW' => 'E02003371',
        '6SX' => 'E02003371',
        '6TA' => 'E02003371',
        '6TB' => 'E02003393',
        '6TE' => 'E02003393',
        '6TG' => 'E02003393',
        '6TH' => 'E02003393',
        '6TL' => 'E02003393',
        '6TN' => 'E02003393',
        '6TP' => 'E02003370',
        '6TQ' => 'E02003393',
        '6TR' => 'E02003370',
        '6UA' => 'E02003370',
        '6UB' => 'E02003370',
        '6UG' => 'E02003370',
        '6UQ' => 'E02003371',
        '6UR' => 'E02003370',
        '6UT' => 'E02003370',
        '6UU' => 'E02003371',
        '6UX' => 'E02003371',
        '6UY' => 'E02003371',
        '6UZ' => 'E02003393',
        '6WA' => 'E02003395',
        '6WB' => 'E02003395',
        '6WD' => 'E02003395',
        '6WE' => 'E02003371',
        '6WF' => 'E02003371',
        '6WG' => 'E02003395',
        '6WH' => 'E02003395',
        '6WJ' => 'E02003371',
        '6WL' => 'E02003395',
        '6WN' => 'E02003371',
        '6WP' => 'E02003371',
        '6WQ' => 'E02003395',
        '6WR' => 'E02003393',
        '6WS' => 'E02003395',
        '6WT' => 'E02003395',
        '6WU' => 'E02003371',
        '6WW' => 'E02003371',
        '6WX' => 'E02003395',
        '6WY' => 'E02003395',
        '6WZ' => 'E02003395',
        '6XA' => 'E02003371',
        '6XB' => 'E02003395',
        '6XD' => 'E02003395',
        '6XJ' => 'E02003395',
        '6XU' => 'E02003370',
        '6XW' => 'E02003370',
        '6XX' => 'E02003370',
        '6XY' => 'E02003370',
        '6XZ' => 'E02003370',
        '6YA' => 'E02003370',
        '6YB' => 'E02003371',
        '6YD' => 'E02003370',
        '6YE' => 'E02003370',
        '6YF' => 'E02003370',
        '6YG' => 'E02003370',
        '6YH' => 'E02003370',
        '6YJ' => 'E02003370',
        '6YL' => 'E02003370',
        '6YN' => 'E02003370',
        '6YP' => 'E02003370',
        '6YQ' => 'E02003370',
        '6YR' => 'E02003370',
        '6YS' => 'E02003370',
        '6YT' => 'E02003370',
        '6YU' => 'E02003370',
        '6YW' => 'E02003370',
        '6YX' => 'E02003370',
        '6YY' => 'E02003370',
        '6YZ' => 'E02003370',
        '6ZN' => 'E02003395',
        '6ZP' => 'E02003395',
        '6ZQ' => 'E02003371',
        '6ZR' => 'E02003395',
        '6ZS' => 'E02003395',
        '6ZT' => 'E02003371',
        '6ZX' => 'E02003371',
        '6ZY' => 'E02003371',
        '6ZZ' => 'E02003371',
        '7AB' => 'E02003374',
        '7AD' => 'E02003374',
        '7AE' => 'E02003374',
        '7AF' => 'E02003374',
        '7AG' => 'E02003374',
        '7AH' => 'E02003374',
        '7AJ' => 'E02003374',
        '7AL' => 'E02003374',
        '7AN' => 'E02003374',
        '7AP' => 'E02003374',
        '7AQ' => 'E02003374',
        '7AR' => 'E02003374',
        '7AS' => 'E02003374',
        '7AT' => 'E02003374',
        '7AU' => 'E02003374',
        '7AW' => 'E02003374',
        '7AX' => 'E02003374',
        '7AY' => 'E02003374',
        '7AZ' => 'E02003374',
        '7BA' => 'E02003395',
        '7BB' => 'E02003374',
        '7BD' => 'E02003374',
        '7BE' => 'E02003374',
        '7BF' => 'E02003372',
        '7BG' => 'E02003374',
        '7BH' => 'E02003374',
        '7BJ' => 'E02003374',
        '7BL' => 'E02003374',
        '7BN' => 'E02003374',
        '7BP' => 'E02003374',
        '7BQ' => 'E02003374',
        '7BR' => 'E02003374',
        '7BS' => 'E02003374',
        '7BT' => 'E02003374',
        '7BU' => 'E02003374',
        '7BW' => 'E02003374',
        '7BX' => 'E02003374',
        '7DA' => 'E02003374',
        '7DB' => 'E02003374',
        '7DD' => 'E02003374',
        '7DE' => 'E02003374',
        '7DF' => 'E02003374',
        '7DG' => 'E02003372',
        '7DH' => 'E02003372',
        '7DJ' => 'E02003372',
        '7DL' => 'E02003372',
        '7DN' => 'E02003372',
        '7DP' => 'E02003374',
        '7DQ' => 'E02003372',
        '7DR' => 'E02003374',
        '7DS' => 'E02003374',
        '7DW' => 'E02003374',
        '7DY' => 'E02003374',
        '7DZ' => 'E02003374',
        '7EA' => 'E02003374',
        '7EB' => 'E02003374',
        '7ED' => 'E02003374',
        '7EE' => 'E02003374',
        '7EF' => 'E02003374',
        '7EG' => 'E02003374',
        '7EH' => 'E02003374',
        '7EJ' => 'E02003374',
        '7EL' => 'E02003374',
        '7EN' => 'E02003374',
        '7EP' => 'E02003395',
        '7EQ' => 'E02003372',
        '7ER' => 'E02003395',
        '7EW' => 'E02003395',
        '7EZ' => 'E02003374',
        '7FA' => 'E02003374',
        '7FB' => 'E02003374',
        '7FD' => 'E02003374',
        '7FE' => 'E02003395',
        '7FF' => 'E02003374',
        '7FG' => 'E02003395',
        '7FH' => 'E02003393',
        '7FJ' => 'E02003374',
        '7FL' => 'E02003374',
        '7FN' => 'E02003374',
        '7FP' => 'E02003374',
        '7FQ' => 'E02003374',
        '7FR' => 'E02003395',
        '7FS' => 'E02003395',
        '7FT' => 'E02003374',
        '7FU' => 'E02003374',
        '7FW' => 'E02003374',
        '7FX' => 'E02003395',
        '7FY' => 'E02003395',
        '7FZ' => 'E02003374',
        '7GB' => 'E02003395',
        '7HB' => 'E02003372',
        '7JR' => 'E02003374',
        '7PD' => 'E02003372',
        '7PE' => 'E02003372',
        '7PF' => 'E02003372',
        '7PG' => 'E02003372',
        '7PH' => 'E02003372',
        '7PJ' => 'E02003372',
        '7PP' => 'E02003372',
        '7PQ' => 'E02003372',
        '7QA' => 'E02003372',
        '7QB' => 'E02003372',
        '7QD' => 'E02003372',
        '7QE' => 'E02003374',
        '7QF' => 'E02003372',
        '7QG' => 'E02003372',
        '7QH' => 'E02003372',
        '7QJ' => 'E02003372',
        '7QN' => 'E02003372',
        '7QP' => 'E02003374',
        '7QQ' => 'E02003374',
        '7RB' => 'E02003374',
        '7RF' => 'E02003374',
        '7RJ' => 'E02003374',
        '7RN' => 'E02003372',
        '7RP' => 'E02003372',
        '7RR' => 'E02003374',
        '7RS' => 'E02003374',
        '7RT' => 'E02003374',
        '7RU' => 'E02003372',
        '7RW' => 'E02003372',
        '7RX' => 'E02003372',
        '7RY' => 'E02003372',
        '7RZ' => 'E02003395',
        '7SA' => 'E02003372',
        '7SB' => 'E02003372',
        '7SD' => 'E02003372',
        '7SE' => 'E02003372',
        '7SG' => 'E02003372',
        '7SH' => 'E02003372',
        '7SJ' => 'E02003374',
        '7SP' => 'E02003372',
        '7TU' => 'E02003395',
        '7UL' => 'E02003372',
        '7UN' => 'E02003374',
        '7UW' => 'E02003374',
        '7WD' => 'E02003395',
        '7WE' => 'E02003374',
        '7WX' => 'E02003395',
        '7WY' => 'E02003395',
        '7WZ' => 'E02003395',
        '7XA' => 'E02003395',
        '7XB' => 'E02003374',
        '7XD' => 'E02003374',
        '7XE' => 'E02003374',
        '7XF' => 'E02003395',
        '7XG' => 'E02003395',
        '7XH' => 'E02003395',
        '7XJ' => 'E02003395',
        '7XL' => 'E02003395',
        '7XN' => 'E02003374',
        '7XP' => 'E02003395',
        '7XQ' => 'E02003395',
        '7XR' => 'E02003374',
        '7XS' => 'E02003374',
        '7XT' => 'E02003374',
        '7XU' => 'E02003395',
        '7XW' => 'E02003374',
        '7XX' => 'E02003395',
        '7XY' => 'E02003374',
        '7YB' => 'E02003374',
        '7YD' => 'E02003374',
        '7YE' => 'E02003374',
        '7YF' => 'E02003374',
        '7YG' => 'E02003372',
        '7YH' => 'E02003372',
        '7YJ' => 'E02003372',
        '7YL' => 'E02003372',
        '7YN' => 'E02003372',
        '7YP' => 'E02003374',
        '7YQ' => 'E02003372',
        '7YR' => 'E02003374',
        '7YS' => 'E02003374',
        '7YT' => 'E02003374',
        '7YU' => 'E02003372',
        '7YW' => 'E02003374',
        '7YX' => 'E02003374',
        '7YY' => 'E02003395',
        '7YZ' => 'E02003372',
        '7ZB' => 'E02003395',
        '7ZD' => 'E02003395',
        '7ZE' => 'E02003395',
        '7ZF' => 'E02003395',
        '7ZH' => 'E02003374',
        '7ZJ' => 'E02003374',
        '7ZL' => 'E02003372',
        '7ZN' => 'E02003374',
        '7ZP' => 'E02003374',
        '7ZR' => 'E02003374',
        '7ZT' => 'E02003374',
        '7ZU' => 'E02003374',
        '7ZW' => 'E02003374',
        '7ZX' => 'E02003374',
        '7ZY' => 'E02003374',
        '7ZZ' => 'E02003374',
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
