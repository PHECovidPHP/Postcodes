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
final class WN3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02001301',
        '4AB' => 'E02001301',
        '4AD' => 'E02001301',
        '4AE' => 'E02001301',
        '4AF' => 'E02001301',
        '4AG' => 'E02001301',
        '4AH' => 'E02001301',
        '4AJ' => 'E02001301',
        '4AL' => 'E02001301',
        '4AN' => 'E02001301',
        '4AP' => 'E02001301',
        '4AQ' => 'E02001301',
        '4AR' => 'E02001301',
        '4AS' => 'E02001301',
        '4AT' => 'E02001301',
        '4AU' => 'E02001301',
        '4AW' => 'E02001301',
        '4AX' => 'E02001301',
        '4AY' => 'E02001310',
        '4AZ' => 'E02001301',
        '4BA' => 'E02001298',
        '4BB' => 'E02001301',
        '4BD' => 'E02001301',
        '4BE' => 'E02001301',
        '4BF' => 'E02001301',
        '4BG' => 'E02001301',
        '4BH' => 'E02001301',
        '4BJ' => 'E02001301',
        '4BL' => 'E02001301',
        '4BN' => 'E02001301',
        '4BQ' => 'E02001301',
        '4BS' => 'E02001301',
        '4BT' => 'E02001301',
        '4BU' => 'E02001301',
        '4BW' => 'E02001301',
        '4BX' => 'E02001301',
        '4BY' => 'E02001301',
        '4BZ' => 'E02001301',
        '4DA' => 'E02001301',
        '4DB' => 'E02001301',
        '4DD' => 'E02001301',
        '4DE' => 'E02001301',
        '4DF' => 'E02001298',
        '4DG' => 'E02001301',
        '4DH' => 'E02001301',
        '4DJ' => 'E02001301',
        '4DL' => 'E02001301',
        '4DN' => 'E02001301',
        '4DP' => 'E02001301',
        '4DQ' => 'E02001301',
        '4DR' => 'E02001301',
        '4DS' => 'E02001301',
        '4DT' => 'E02001298',
        '4DU' => 'E02001301',
        '4DW' => 'E02001301',
        '4DX' => 'E02001294',
        '4DY' => 'E02001301',
        '4DZ' => 'E02001301',
        '4EA' => 'E02001301',
        '4EB' => 'E02001301',
        '4ED' => 'E02001301',
        '4EE' => 'E02001301',
        '4EF' => 'E02001301',
        '4EG' => 'E02001301',
        '4EH' => 'E02001301',
        '4EJ' => 'E02001301',
        '4EL' => 'E02001301',
        '4EN' => 'E02001301',
        '4EP' => 'E02001301',
        '4EQ' => 'E02001301',
        '4ER' => 'E02001301',
        '4ES' => 'E02001301',
        '4ET' => 'E02001301',
        '4EU' => 'E02001301',
        '4EW' => 'E02001301',
        '4EX' => 'E02001301',
        '4EY' => 'E02001301',
        '4EZ' => 'E02001301',
        '4FA' => 'E02001301',
        '4FB' => 'E02001294',
        '4FD' => 'E02001298',
        '4FE' => 'E02001298',
        '4FF' => 'E02001294',
        '4FG' => 'E02001298',
        '4FH' => 'E02001294',
        '4FJ' => 'E02001298',
        '4FN' => 'E02001301',
        '4FP' => 'E02001298',
        '4FQ' => 'E02001301',
        '4HA' => 'E02001301',
        '4HB' => 'E02001301',
        '4HD' => 'E02001301',
        '4HE' => 'E02001298',
        '4HF' => 'E02001294',
        '4HG' => 'E02001301',
        '4HH' => 'E02001298',
        '4HJ' => 'E02001301',
        '4HL' => 'E02001301',
        '4HN' => 'E02001301',
        '4HP' => 'E02001294',
        '4HQ' => 'E02001301',
        '4HR' => 'E02001301',
        '4HS' => 'E02001301',
        '4HT' => 'E02001301',
        '4HU' => 'E02001301',
        '4HW' => 'E02001301',
        '4HX' => 'E02001301',
        '4HY' => 'E02001301',
        '4HZ' => 'E02001298',
        '4JA' => 'E02001310',
        '4JB' => 'E02001310',
        '4JD' => 'E02001310',
        '4JE' => 'E02001310',
        '4JF' => 'E02001310',
        '4JG' => 'E02001310',
        '4JH' => 'E02001298',
        '4JJ' => 'E02001310',
        '4JL' => 'E02001298',
        '4JN' => 'E02001298',
        '4JP' => 'E02001310',
        '4JQ' => 'E02001298',
        '4JR' => 'E02001298',
        '4JS' => 'E02001298',
        '4JT' => 'E02001298',
        '4JU' => 'E02001298',
        '4JW' => 'E02001298',
        '4JX' => 'E02001298',
        '4JY' => 'E02001298',
        '4JZ' => 'E02001298',
        '4LA' => 'E02001298',
        '4LB' => 'E02001298',
        '4LD' => 'E02001298',
        '4LE' => 'E02001298',
        '4LF' => 'E02001298',
        '4LG' => 'E02001298',
        '4LH' => 'E02001298',
        '4LJ' => 'E02001298',
        '4LL' => 'E02001298',
        '4LN' => 'E02001298',
        '4LP' => 'E02001298',
        '4LQ' => 'E02001298',
        '4LR' => 'E02001298',
        '4LS' => 'E02001298',
        '4LT' => 'E02001310',
        '4LU' => 'E02001298',
        '4LW' => 'E02001298',
        '4LX' => 'E02001294',
        '4LY' => 'E02001298',
        '4LZ' => 'E02001310',
        '4NA' => 'E02001298',
        '4NB' => 'E02001298',
        '4ND' => 'E02001298',
        '4NE' => 'E02001298',
        '4NF' => 'E02001298',
        '4NG' => 'E02001298',
        '4NH' => 'E02001310',
        '4NJ' => 'E02001298',
        '4NL' => 'E02001298',
        '4NN' => 'E02001298',
        '4NP' => 'E02001298',
        '4NQ' => 'E02001298',
        '4NR' => 'E02001298',
        '4NS' => 'E02001298',
        '4NT' => 'E02001298',
        '4NU' => 'E02001298',
        '4NW' => 'E02001298',
        '4NX' => 'E02001298',
        '4NY' => 'E02001298',
        '4NZ' => 'E02001310',
        '4PA' => 'E02001298',
        '4PB' => 'E02001310',
        '4PD' => 'E02001310',
        '4PE' => 'E02001310',
        '4PF' => 'E02001310',
        '4PG' => 'E02001310',
        '4PH' => 'E02001310',
        '4PJ' => 'E02001310',
        '4PL' => 'E02001310',
        '4PN' => 'E02001310',
        '4PP' => 'E02001310',
        '4PQ' => 'E02001310',
        '4PR' => 'E02001310',
        '4PS' => 'E02001310',
        '4PT' => 'E02001298',
        '4PU' => 'E02001310',
        '4PW' => 'E02001310',
        '4PX' => 'E02001310',
        '4PY' => 'E02001310',
        '4PZ' => 'E02001310',
        '4QA' => 'E02001310',
        '4QB' => 'E02001310',
        '4QD' => 'E02001310',
        '4QE' => 'E02001310',
        '4QF' => 'E02001294',
        '4QG' => 'E02001298',
        '4QH' => 'E02001298',
        '4QJ' => 'E02001298',
        '4QL' => 'E02001298',
        '4QN' => 'E02001298',
        '4QP' => 'E02001298',
        '4QR' => 'E02001298',
        '4QS' => 'E02001298',
        '4QT' => 'E02001298',
        '4QU' => 'E02001298',
        '4QX' => 'E02001298',
        '4QY' => 'E02001298',
        '4QZ' => 'E02001298',
        '4RA' => 'E02001298',
        '4RB' => 'E02001298',
        '4RD' => 'E02001298',
        '4RE' => 'E02001298',
        '4RF' => 'E02001298',
        '4RG' => 'E02001298',
        '4RH' => 'E02001298',
        '4RJ' => 'E02001298',
        '4RL' => 'E02001298',
        '4RN' => 'E02001298',
        '4RP' => 'E02001298',
        '4RQ' => 'E02001298',
        '4RR' => 'E02001298',
        '4RS' => 'E02001298',
        '4RT' => 'E02001298',
        '4RU' => 'E02001298',
        '4RW' => 'E02001298',
        '4RX' => 'E02001298',
        '4RY' => 'E02001298',
        '4RZ' => 'E02001298',
        '4SA' => 'E02001298',
        '4SB' => 'E02001298',
        '4SD' => 'E02001298',
        '4SE' => 'E02001298',
        '4SF' => 'E02001298',
        '4SH' => 'E02001298',
        '4SL' => 'E02001298',
        '4SQ' => 'E02001298',
        '4TA' => 'E02001310',
        '4TB' => 'E02001310',
        '4TD' => 'E02001310',
        '4TE' => 'E02001310',
        '4TF' => 'E02001310',
        '4TG' => 'E02001310',
        '4TH' => 'E02001310',
        '4TJ' => 'E02001310',
        '4TL' => 'E02001310',
        '4TN' => 'E02001310',
        '4TP' => 'E02001310',
        '4TQ' => 'E02001310',
        '4TR' => 'E02001310',
        '4TS' => 'E02001310',
        '4TT' => 'E02001310',
        '4TU' => 'E02001310',
        '4TW' => 'E02001310',
        '4TX' => 'E02001310',
        '4TY' => 'E02001310',
        '4TZ' => 'E02001310',
        '4UA' => 'E02001310',
        '4UF' => 'E02001310',
        '4UG' => 'E02001310',
        '4UH' => 'E02001310',
        '4UJ' => 'E02001310',
        '4UL' => 'E02001310',
        '4UN' => 'E02001310',
        '4UP' => 'E02001310',
        '4UQ' => 'E02001310',
        '4UW' => 'E02001310',
        '4WW' => 'E02001294',
        '4WY' => 'E02001294',
        '4WZ' => 'E02001294',
        '4XA' => 'E02001294',
        '5AA' => 'E02001301',
        '5AB' => 'E02001301',
        '5AD' => 'E02001301',
        '5AE' => 'E02001301',
        '5AF' => 'E02001301',
        '5AG' => 'E02001301',
        '5AH' => 'E02001301',
        '5AJ' => 'E02001294',
        '5AN' => 'E02001301',
        '5AP' => 'E02001301',
        '5AQ' => 'E02001301',
        '5AR' => 'E02001301',
        '5AS' => 'E02001301',
        '5AT' => 'E02001301',
        '5AU' => 'E02001301',
        '5AW' => 'E02001301',
        '5AX' => 'E02001301',
        '5AY' => 'E02001301',
        '5AZ' => 'E02001301',
        '5BA' => 'E02001301',
        '5BB' => 'E02001301',
        '5BD' => 'E02001301',
        '5BE' => 'E02001301',
        '5BF' => 'E02001306',
        '5BG' => 'E02001301',
        '5BH' => 'E02001301',
        '5BJ' => 'E02001301',
        '5BL' => 'E02001301',
        '5BN' => 'E02001301',
        '5BP' => 'E02001301',
        '5BQ' => 'E02001301',
        '5BS' => 'E02001301',
        '5BT' => 'E02001301',
        '5BU' => 'E02001301',
        '5BW' => 'E02001301',
        '5BX' => 'E02001301',
        '5BY' => 'E02001301',
        '5BZ' => 'E02001301',
        '5DA' => 'E02001301',
        '5DB' => 'E02001301',
        '5DD' => 'E02001306',
        '5DE' => 'E02001301',
        '5DF' => 'E02001301',
        '5DG' => 'E02001301',
        '5DH' => 'E02001301',
        '5DJ' => 'E02001301',
        '5DL' => 'E02001306',
        '5DN' => 'E02001301',
        '5DP' => 'E02001301',
        '5DQ' => 'E02001301',
        '5DR' => 'E02001301',
        '5DS' => 'E02001301',
        '5DT' => 'E02001301',
        '5DU' => 'E02001301',
        '5DW' => 'E02001301',
        '5DX' => 'E02001301',
        '5DY' => 'E02001301',
        '5DZ' => 'E02001301',
        '5EA' => 'E02001301',
        '5EB' => 'E02001301',
        '5ED' => 'E02001301',
        '5EE' => 'E02001301',
        '5EG' => 'E02001301',
        '5EH' => 'E02001301',
        '5EJ' => 'E02001301',
        '5EL' => 'E02001301',
        '5EN' => 'E02001301',
        '5EP' => 'E02001301',
        '5EQ' => 'E02001301',
        '5ER' => 'E02001301',
        '5ES' => 'E02001301',
        '5ET' => 'E02001301',
        '5EU' => 'E02001301',
        '5EW' => 'E02001301',
        '5EX' => 'E02001301',
        '5EY' => 'E02001301',
        '5EZ' => 'E02001301',
        '5FA' => 'E02001294',
        '5FB' => 'E02001306',
        '5FD' => 'E02001306',
        '5FE' => 'E02001306',
        '5FF' => 'E02001306',
        '5FG' => 'E02001306',
        '5FH' => 'E02001306',
        '5FJ' => 'E02001301',
        '5FL' => 'E02001301',
        '5FN' => 'E02001294',
        '5FP' => 'E02001294',
        '5FQ' => 'E02001306',
        '5FR' => 'E02001294',
        '5FS' => 'E02001306',
        '5GB' => 'E02001298',
        '5GY' => 'E02001306',
        '5GZ' => 'E02001301',
        '5HA' => 'E02001301',
        '5HB' => 'E02001301',
        '5HD' => 'E02001301',
        '5HE' => 'E02001301',
        '5HF' => 'E02001301',
        '5HG' => 'E02001301',
        '5HH' => 'E02001301',
        '5HJ' => 'E02001301',
        '5HL' => 'E02001301',
        '5HN' => 'E02001306',
        '5HP' => 'E02001306',
        '5HQ' => 'E02001301',
        '5HR' => 'E02001306',
        '5HS' => 'E02001306',
        '5HU' => 'E02001306',
        '5HW' => 'E02001306',
        '5HX' => 'E02001306',
        '5HY' => 'E02001306',
        '5HZ' => 'E02001306',
        '5JA' => 'E02001306',
        '5JB' => 'E02001306',
        '5JD' => 'E02001306',
        '5JE' => 'E02001306',
        '5JF' => 'E02001306',
        '5JG' => 'E02001306',
        '5JH' => 'E02001306',
        '5JJ' => 'E02001306',
        '5JL' => 'E02001306',
        '5JN' => 'E02001306',
        '5JP' => 'E02001306',
        '5JQ' => 'E02001306',
        '5JR' => 'E02001306',
        '5JS' => 'E02001306',
        '5JT' => 'E02001306',
        '5JU' => 'E02001306',
        '5JW' => 'E02001306',
        '5JX' => 'E02001306',
        '5JY' => 'E02001306',
        '5JZ' => 'E02001306',
        '5LA' => 'E02001306',
        '5LF' => 'E02001306',
        '5LG' => 'E02001306',
        '5LH' => 'E02001301',
        '5LJ' => 'E02001306',
        '5LL' => 'E02001306',
        '5LN' => 'E02001301',
        '5LP' => 'E02001306',
        '5LQ' => 'E02001306',
        '5LR' => 'E02001306',
        '5LS' => 'E02001306',
        '5LT' => 'E02001301',
        '5LU' => 'E02001306',
        '5LW' => 'E02001306',
        '5LX' => 'E02001306',
        '5LY' => 'E02001306',
        '5LZ' => 'E02001306',
        '5NA' => 'E02001306',
        '5NB' => 'E02001306',
        '5ND' => 'E02001306',
        '5NE' => 'E02001306',
        '5NF' => 'E02001306',
        '5NG' => 'E02001306',
        '5NH' => 'E02001306',
        '5NJ' => 'E02001306',
        '5NL' => 'E02001306',
        '5NN' => 'E02001306',
        '5NP' => 'E02001306',
        '5NQ' => 'E02001306',
        '5NR' => 'E02001306',
        '5NS' => 'E02001306',
        '5NT' => 'E02001306',
        '5NU' => 'E02001306',
        '5NW' => 'E02001306',
        '5NX' => 'E02001306',
        '5NY' => 'E02001306',
        '5NZ' => 'E02001306',
        '5PA' => 'E02001306',
        '5PB' => 'E02001306',
        '5PD' => 'E02001306',
        '5PE' => 'E02001306',
        '5PF' => 'E02001306',
        '5PG' => 'E02001306',
        '5PH' => 'E02001306',
        '5PJ' => 'E02001306',
        '5PL' => 'E02001306',
        '5PN' => 'E02001306',
        '5PP' => 'E02001306',
        '5PQ' => 'E02001306',
        '5PR' => 'E02001306',
        '5PS' => 'E02001306',
        '5PT' => 'E02001306',
        '5PU' => 'E02001306',
        '5PW' => 'E02001306',
        '5PX' => 'E02001306',
        '5PY' => 'E02001306',
        '5PZ' => 'E02001306',
        '5QA' => 'E02001306',
        '5QB' => 'E02001306',
        '5QD' => 'E02001306',
        '5QE' => 'E02001306',
        '5QF' => 'E02001306',
        '5QG' => 'E02001306',
        '5QH' => 'E02001306',
        '5QJ' => 'E02001306',
        '5QL' => 'E02001306',
        '5QN' => 'E02001306',
        '5QP' => 'E02001306',
        '5QQ' => 'E02001306',
        '5QR' => 'E02001306',
        '5QS' => 'E02001306',
        '5QT' => 'E02001306',
        '5QU' => 'E02001306',
        '5QW' => 'E02001306',
        '5QX' => 'E02001306',
        '5QY' => 'E02001306',
        '5QZ' => 'E02001306',
        '5RA' => 'E02001306',
        '5RB' => 'E02001306',
        '5RE' => 'E02001306',
        '5RF' => 'E02001306',
        '5RG' => 'E02001306',
        '5RH' => 'E02001306',
        '5RJ' => 'E02001306',
        '5RL' => 'E02001306',
        '5RN' => 'E02001306',
        '5RP' => 'E02001306',
        '5RQ' => 'E02001306',
        '5RR' => 'E02001306',
        '5RS' => 'E02001306',
        '5RT' => 'E02001301',
        '5RW' => 'E02001306',
        '5RX' => 'E02001301',
        '5SA' => 'E02001306',
        '5SB' => 'E02001306',
        '5SD' => 'E02001306',
        '5TA' => 'E02001301',
        '5TB' => 'E02001301',
        '5TD' => 'E02001301',
        '5TE' => 'E02001301',
        '5TF' => 'E02001306',
        '5TG' => 'E02001301',
        '5TH' => 'E02001301',
        '5TJ' => 'E02001301',
        '5TL' => 'E02001301',
        '5TN' => 'E02001301',
        '5TP' => 'E02001301',
        '5TQ' => 'E02001301',
        '5TR' => 'E02001301',
        '5TS' => 'E02001301',
        '5TT' => 'E02001301',
        '5TU' => 'E02001301',
        '5TW' => 'E02001301',
        '5TX' => 'E02001301',
        '5TY' => 'E02001301',
        '5TZ' => 'E02001301',
        '5UA' => 'E02001301',
        '5UB' => 'E02001301',
        '5UD' => 'E02001301',
        '5UE' => 'E02001301',
        '5UF' => 'E02001301',
        '5UG' => 'E02001301',
        '5UH' => 'E02001301',
        '5UJ' => 'E02001301',
        '5UL' => 'E02001301',
        '5UN' => 'E02001301',
        '5UP' => 'E02001301',
        '5UQ' => 'E02001301',
        '5UR' => 'E02001301',
        '5UT' => 'E02001301',
        '5UU' => 'E02001301',
        '5UW' => 'E02001301',
        '5UX' => 'E02001301',
        '5UY' => 'E02001301',
        '5UZ' => 'E02001301',
        '5WA' => 'E02001301',
        '5WB' => 'E02001294',
        '5WL' => 'E02001294',
        '5WN' => 'E02001294',
        '5WP' => 'E02001294',
        '5WQ' => 'E02001294',
        '5WR' => 'E02001294',
        '5WS' => 'E02001294',
        '5WT' => 'E02001294',
        '5WU' => 'E02001294',
        '5WW' => 'E02001294',
        '5WX' => 'E02001294',
        '5WY' => 'E02001294',
        '5WZ' => 'E02001294',
        '5XA' => 'E02001301',
        '5XB' => 'E02001301',
        '5XD' => 'E02001301',
        '5XE' => 'E02001301',
        '5XF' => 'E02001301',
        '5XG' => 'E02001301',
        '5XH' => 'E02001301',
        '5XJ' => 'E02001301',
        '5XL' => 'E02001301',
        '5XN' => 'E02001301',
        '5XP' => 'E02001301',
        '5XQ' => 'E02001301',
        '5XR' => 'E02001306',
        '5XS' => 'E02001301',
        '5XT' => 'E02001301',
        '5XU' => 'E02001301',
        '5XW' => 'E02001301',
        '5XX' => 'E02001301',
        '5XY' => 'E02001301',
        '5XZ' => 'E02001301',
        '5YA' => 'E02001306',
        '5YB' => 'E02001301',
        '5YD' => 'E02001301',
        '5YE' => 'E02001294',
        '5YF' => 'E02001294',
        '5YG' => 'E02001294',
        '5YH' => 'E02001294',
        '5YN' => 'E02001301',
        '5ZU' => 'E02001294',
        '6AA' => 'E02001307',
        '6AB' => 'E02001307',
        '6AD' => 'E02001307',
        '6AE' => 'E02001307',
        '6AF' => 'E02001307',
        '6AG' => 'E02001307',
        '6AH' => 'E02001307',
        '6AJ' => 'E02001307',
        '6AL' => 'E02001307',
        '6AN' => 'E02001307',
        '6AP' => 'E02001307',
        '6AQ' => 'E02001307',
        '6AR' => 'E02001307',
        '6AS' => 'E02001307',
        '6AT' => 'E02001307',
        '6AU' => 'E02001307',
        '6AW' => 'E02001307',
        '6AX' => 'E02001307',
        '6AY' => 'E02001307',
        '6AZ' => 'E02001307',
        '6BA' => 'E02001307',
        '6BB' => 'E02001307',
        '6BD' => 'E02001307',
        '6BE' => 'E02001307',
        '6BF' => 'E02001307',
        '6BG' => 'E02001307',
        '6BH' => 'E02001307',
        '6BJ' => 'E02001307',
        '6BL' => 'E02001307',
        '6BN' => 'E02001307',
        '6BP' => 'E02001307',
        '6BQ' => 'E02001307',
        '6BS' => 'E02001307',
        '6BT' => 'E02001307',
        '6BU' => 'E02001307',
        '6BW' => 'E02001307',
        '6BX' => 'E02001294',
        '6BY' => 'E02001307',
        '6BZ' => 'E02001307',
        '6DA' => 'E02001307',
        '6DB' => 'E02001307',
        '6DD' => 'E02001307',
        '6DE' => 'E02001307',
        '6DF' => 'E02001307',
        '6DG' => 'E02001307',
        '6DH' => 'E02001307',
        '6DJ' => 'E02001307',
        '6DL' => 'E02001307',
        '6DN' => 'E02001307',
        '6DP' => 'E02001307',
        '6DQ' => 'E02001307',
        '6DR' => 'E02001307',
        '6DS' => 'E02001307',
        '6DT' => 'E02001307',
        '6DU' => 'E02001307',
        '6DW' => 'E02001307',
        '6DX' => 'E02001307',
        '6DY' => 'E02001307',
        '6DZ' => 'E02001307',
        '6EA' => 'E02001307',
        '6EB' => 'E02001307',
        '6ED' => 'E02001307',
        '6EE' => 'E02001307',
        '6EF' => 'E02001307',
        '6EG' => 'E02001307',
        '6EH' => 'E02001307',
        '6EJ' => 'E02001307',
        '6EL' => 'E02001307',
        '6EN' => 'E02001307',
        '6EP' => 'E02001307',
        '6EQ' => 'E02001307',
        '6ER' => 'E02001307',
        '6ES' => 'E02001307',
        '6ET' => 'E02001307',
        '6EU' => 'E02001307',
        '6EW' => 'E02001307',
        '6EX' => 'E02001307',
        '6EY' => 'E02001307',
        '6EZ' => 'E02001307',
        '6FA' => 'E02001307',
        '6FB' => 'E02001294',
        '6FD' => 'E02001307',
        '6FE' => 'E02001294',
        '6FF' => 'E02001294',
        '6FG' => 'E02001294',
        '6FH' => 'E02001294',
        '6FJ' => 'E02001307',
        '6FL' => 'E02001307',
        '6FN' => 'E02001307',
        '6FP' => 'E02001307',
        '6FQ' => 'E02001307',
        '6FR' => 'E02001307',
        '6FS' => 'E02001307',
        '6FT' => 'E02001307',
        '6FU' => 'E02001307',
        '6FW' => 'E02001307',
        '6FX' => 'E02001294',
        '6FY' => 'E02001307',
        '6FZ' => 'E02001294',
        '6GA' => 'E02001294',
        '6GB' => 'E02001294',
        '6GD' => 'E02001307',
        '6GE' => 'E02001307',
        '6GF' => 'E02001307',
        '6GG' => 'E02001307',
        '6GH' => 'E02001307',
        '6GJ' => 'E02001307',
        '6GL' => 'E02001306',
        '6GN' => 'E02001307',
        '6GP' => 'E02001307',
        '6GQ' => 'E02001307',
        '6GR' => 'E02001307',
        '6GS' => 'E02001307',
        '6GT' => 'E02001301',
        '6HA' => 'E02001307',
        '6HB' => 'E02001307',
        '6HD' => 'E02001307',
        '6HE' => 'E02001307',
        '6HF' => 'E02001307',
        '6HG' => 'E02001307',
        '6HH' => 'E02001307',
        '6HJ' => 'E02001307',
        '6HL' => 'E02001307',
        '6HN' => 'E02001307',
        '6HP' => 'E02001307',
        '6HQ' => 'E02001307',
        '6HR' => 'E02001307',
        '6HS' => 'E02001307',
        '6HT' => 'E02001307',
        '6HU' => 'E02001307',
        '6HW' => 'E02001307',
        '6HX' => 'E02001307',
        '6HY' => 'E02001307',
        '6HZ' => 'E02001307',
        '6JA' => 'E02001307',
        '6JB' => 'E02001307',
        '6JD' => 'E02001307',
        '6JE' => 'E02001307',
        '6JF' => 'E02001307',
        '6JG' => 'E02001307',
        '6JH' => 'E02001307',
        '6JJ' => 'E02001307',
        '6JL' => 'E02001307',
        '6JN' => 'E02001307',
        '6JP' => 'E02001307',
        '6JQ' => 'E02001307',
        '6JR' => 'E02001307',
        '6JS' => 'E02001307',
        '6JT' => 'E02001307',
        '6JU' => 'E02001307',
        '6JW' => 'E02001307',
        '6JX' => 'E02001307',
        '6JY' => 'E02001307',
        '6JZ' => 'E02001307',
        '6LA' => 'E02001307',
        '6LB' => 'E02001307',
        '6LD' => 'E02001307',
        '6LE' => 'E02001307',
        '6LF' => 'E02001307',
        '6LG' => 'E02001307',
        '6LH' => 'E02001307',
        '6LJ' => 'E02001307',
        '6LL' => 'E02001307',
        '6LN' => 'E02001307',
        '6LP' => 'E02001307',
        '6LQ' => 'E02001307',
        '6LR' => 'E02001307',
        '6LS' => 'E02001307',
        '6LT' => 'E02001307',
        '6LU' => 'E02001307',
        '6LW' => 'E02001307',
        '6LX' => 'E02001307',
        '6LY' => 'E02001307',
        '6LZ' => 'E02001307',
        '6NA' => 'E02001307',
        '6NB' => 'E02001307',
        '6ND' => 'E02001307',
        '6NE' => 'E02001307',
        '6NF' => 'E02001307',
        '6NH' => 'E02001307',
        '6NL' => 'E02001307',
        '6NN' => 'E02001307',
        '6NT' => 'E02001307',
        '6NY' => 'E02001301',
        '6PA' => 'E02001301',
        '6PB' => 'E02001301',
        '6PD' => 'E02001301',
        '6PE' => 'E02001301',
        '6PF' => 'E02001301',
        '6PG' => 'E02001301',
        '6PH' => 'E02001301',
        '6PJ' => 'E02001301',
        '6PL' => 'E02001301',
        '6PN' => 'E02001301',
        '6PP' => 'E02001301',
        '6PQ' => 'E02001301',
        '6PR' => 'E02001301',
        '6PS' => 'E02001301',
        '6PT' => 'E02001301',
        '6PW' => 'E02001301',
        '6PX' => 'E02001301',
        '6PY' => 'E02001301',
        '6PZ' => 'E02001301',
        '6QA' => 'E02001301',
        '6QB' => 'E02001301',
        '6QD' => 'E02001301',
        '6QE' => 'E02001301',
        '6QF' => 'E02001301',
        '6QG' => 'E02001301',
        '6QH' => 'E02001301',
        '6QJ' => 'E02001307',
        '6QP' => 'E02001301',
        '6QQ' => 'E02001306',
        '6QR' => 'E02001301',
        '6QS' => 'E02001307',
        '6QT' => 'E02001301',
        '6QU' => 'E02001301',
        '6QX' => 'E02001301',
        '6QY' => 'E02001301',
        '6QZ' => 'E02001301',
        '6RA' => 'E02001307',
        '6RB' => 'E02001301',
        '6RD' => 'E02001301',
        '6RE' => 'E02001301',
        '6RF' => 'E02001307',
        '6RG' => 'E02001301',
        '6RH' => 'E02001307',
        '6RJ' => 'E02001307',
        '6RL' => 'E02001307',
        '6RN' => 'E02001307',
        '6RP' => 'E02001307',
        '6RQ' => 'E02001301',
        '6RR' => 'E02001307',
        '6RS' => 'E02001307',
        '6RT' => 'E02001307',
        '6RU' => 'E02001307',
        '6RW' => 'E02001307',
        '6RX' => 'E02001307',
        '6RY' => 'E02001307',
        '6SA' => 'E02001301',
        '6SB' => 'E02001307',
        '6SD' => 'E02001307',
        '6SE' => 'E02001307',
        '6SF' => 'E02001307',
        '6SG' => 'E02001307',
        '6SH' => 'E02001307',
        '6SJ' => 'E02001307',
        '6SL' => 'E02001307',
        '6SN' => 'E02001307',
        '6SP' => 'E02001307',
        '6SQ' => 'E02001307',
        '6SR' => 'E02001307',
        '6SS' => 'E02001307',
        '6ST' => 'E02001307',
        '6SU' => 'E02001307',
        '6SW' => 'E02001307',
        '6SX' => 'E02001307',
        '6SY' => 'E02001307',
        '6SZ' => 'E02001307',
        '6TA' => 'E02001307',
        '6TB' => 'E02001307',
        '6TD' => 'E02001307',
        '6TE' => 'E02001307',
        '6TF' => 'E02001307',
        '6TG' => 'E02001307',
        '6TH' => 'E02001307',
        '6TJ' => 'E02001307',
        '6TL' => 'E02001307',
        '6TN' => 'E02001307',
        '6TP' => 'E02001307',
        '6TQ' => 'E02001307',
        '6TR' => 'E02001307',
        '6TS' => 'E02001307',
        '6TT' => 'E02001307',
        '6TU' => 'E02001307',
        '6TW' => 'E02001307',
        '6TX' => 'E02001307',
        '6TY' => 'E02001307',
        '6TZ' => 'E02001307',
        '6UE' => 'E02001307',
        '6UF' => 'E02001307',
        '6UG' => 'E02001307',
        '6UH' => 'E02001307',
        '6UJ' => 'E02001307',
        '6UQ' => 'E02001307',
        '6WA' => 'E02001294',
        '6WB' => 'E02001307',
        '6WD' => 'E02001294',
        '6WS' => 'E02001294',
        '6WT' => 'E02001294',
        '6WU' => 'E02001307',
        '6WW' => 'E02001307',
        '6WX' => 'E02001294',
        '6WY' => 'E02001307',
        '6WZ' => 'E02001294',
        '6XA' => 'E02001307',
        '6XB' => 'E02001306',
        '6XD' => 'E02001306',
        '6XE' => 'E02001307',
        '6XF' => 'E02001307',
        '6XG' => 'E02001307',
        '6XH' => 'E02001307',
        '6XJ' => 'E02001307',
        '6XL' => 'E02001294',
        '6XN' => 'E02001306',
        '6XP' => 'E02001307',
        '6XQ' => 'E02001307',
        '6XR' => 'E02001307',
        '6XS' => 'E02001294',
        '6XT' => 'E02001307',
        '6XU' => 'E02001307',
        '6XW' => 'E02001306',
        '6XX' => 'E02001307',
        '6XY' => 'E02001307',
        '6XZ' => 'E02001307',
        '6YA' => 'E02001294',
        '6YB' => 'E02001294',
        '6YD' => 'E02001307',
        '6YZ' => 'E02001294',
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
