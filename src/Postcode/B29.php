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
final class B29
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02001925',
        '4AB' => 'E02001925',
        '4AD' => 'E02001925',
        '4AE' => 'E02001925',
        '4AF' => 'E02001925',
        '4AG' => 'E02001925',
        '4AH' => 'E02001925',
        '4AJ' => 'E02001925',
        '4AL' => 'E02001925',
        '4AN' => 'E02001925',
        '4AP' => 'E02001925',
        '4AQ' => 'E02001922',
        '4AR' => 'E02001925',
        '4AS' => 'E02001925',
        '4AT' => 'E02001925',
        '4AU' => 'E02001925',
        '4AW' => 'E02001925',
        '4AX' => 'E02001925',
        '4AY' => 'E02001925',
        '4AZ' => 'E02001935',
        '4BA' => 'E02001935',
        '4BB' => 'E02001922',
        '4BD' => 'E02001935',
        '4BE' => 'E02001925',
        '4BF' => 'E02001935',
        '4BG' => 'E02001925',
        '4BH' => 'E02001925',
        '4BJ' => 'E02001935',
        '4BL' => 'E02001925',
        '4BN' => 'E02001925',
        '4BP' => 'E02001925',
        '4BQ' => 'E02001925',
        '4BS' => 'E02001935',
        '4BT' => 'E02001935',
        '4BU' => 'E02001935',
        '4BW' => 'E02001935',
        '4BX' => 'E02001935',
        '4BY' => 'E02001935',
        '4BZ' => 'E02001935',
        '4DA' => 'E02001935',
        '4DB' => 'E02001935',
        '4DD' => 'E02001935',
        '4DE' => 'E02001935',
        '4DF' => 'E02001935',
        '4DG' => 'E02001935',
        '4DH' => 'E02001935',
        '4DJ' => 'E02001935',
        '4DL' => 'E02001935',
        '4DN' => 'E02001927',
        '4DP' => 'E02001935',
        '4DQ' => 'E02001935',
        '4DR' => 'E02001935',
        '4DS' => 'E02001935',
        '4DT' => 'E02001927',
        '4DU' => 'E02001935',
        '4DW' => 'E02001922',
        '4DX' => 'E02001935',
        '4DY' => 'E02001935',
        '4DZ' => 'E02001935',
        '4EA' => 'E02001935',
        '4EB' => 'E02001935',
        '4ED' => 'E02001927',
        '4EE' => 'E02001927',
        '4EF' => 'E02001927',
        '4EG' => 'E02001927',
        '4EH' => 'E02001927',
        '4EJ' => 'E02001927',
        '4EL' => 'E02001935',
        '4EN' => 'E02001935',
        '4EP' => 'E02001927',
        '4EQ' => 'E02001935',
        '4ER' => 'E02001935',
        '4ES' => 'E02001927',
        '4ET' => 'E02001935',
        '4EU' => 'E02001935',
        '4EW' => 'E02001935',
        '4HA' => 'E02001927',
        '4HB' => 'E02001927',
        '4HD' => 'E02001927',
        '4HE' => 'E02001932',
        '4HH' => 'E02001935',
        '4HJ' => 'E02001935',
        '4HL' => 'E02001935',
        '4HN' => 'E02001935',
        '4HP' => 'E02001935',
        '4HQ' => 'E02001927',
        '4HR' => 'E02001935',
        '4HS' => 'E02001935',
        '4HT' => 'E02001935',
        '4HU' => 'E02001935',
        '4HW' => 'E02001927',
        '4HX' => 'E02001935',
        '4HY' => 'E02001935',
        '4HZ' => 'E02001935',
        '4JA' => 'E02001935',
        '4JD' => 'E02001935',
        '4JE' => 'E02001935',
        '4JG' => 'E02001935',
        '4JH' => 'E02001935',
        '4JJ' => 'E02001935',
        '4JP' => 'E02001939',
        '4JR' => 'E02001935',
        '4JS' => 'E02001935',
        '4JT' => 'E02001935',
        '4JU' => 'E02001935',
        '4JX' => 'E02001935',
        '4JY' => 'E02001935',
        '4LA' => 'E02001935',
        '4LB' => 'E02001935',
        '4LD' => 'E02001935',
        '4LE' => 'E02001935',
        '4LF' => 'E02001922',
        '4LG' => 'E02001935',
        '4LH' => 'E02001935',
        '4LL' => 'E02001922',
        '4LN' => 'E02001935',
        '4LP' => 'E02001935',
        '4LQ' => 'E02001935',
        '4LR' => 'E02001935',
        '4LS' => 'E02001935',
        '4LT' => 'E02001935',
        '4LU' => 'E02001935',
        '4LW' => 'E02001935',
        '4LX' => 'E02001935',
        '4LY' => 'E02001935',
        '4NA' => 'E02001935',
        '4NB' => 'E02001935',
        '4ND' => 'E02001935',
        '4NE' => 'E02001935',
        '4NG' => 'E02001935',
        '4NH' => 'E02001935',
        '4NJ' => 'E02001935',
        '4NL' => 'E02001935',
        '4NN' => 'E02001935',
        '4NP' => 'E02001935',
        '4NQ' => 'E02001935',
        '4NR' => 'E02001935',
        '4NS' => 'E02001939',
        '4NT' => 'E02001939',
        '4NU' => 'E02001939',
        '4NW' => 'E02001935',
        '4NX' => 'E02001922',
        '4NZ' => 'E02001939',
        '4PA' => 'E02001939',
        '4PB' => 'E02001935',
        '4PD' => 'E02001922',
        '4PF' => 'E02001935',
        '4PG' => 'E02001939',
        '4PH' => 'E02001939',
        '4PJ' => 'E02001939',
        '4PL' => 'E02001939',
        '4PN' => 'E02001939',
        '4PP' => 'E02001939',
        '4PQ' => 'E02001939',
        '4PR' => 'E02001939',
        '4PS' => 'E02001939',
        '4PT' => 'E02001939',
        '4PU' => 'E02001939',
        '4PW' => 'E02001939',
        '4PX' => 'E02001939',
        '4PY' => 'E02001939',
        '4PZ' => 'E02001939',
        '4QA' => 'E02001935',
        '4QD' => 'E02001935',
        '4QE' => 'E02001935',
        '4QF' => 'E02001935',
        '4QL' => 'E02001935',
        '4QN' => 'E02001935',
        '4QP' => 'E02001935',
        '4QQ' => 'E02001935',
        '4QR' => 'E02001935',
        '4QS' => 'E02001935',
        '4QT' => 'E02001935',
        '4QU' => 'E02001935',
        '4QX' => 'E02001935',
        '4QY' => 'E02001935',
        '4QZ' => 'E02001935',
        '4RA' => 'E02001935',
        '4RB' => 'E02001935',
        '4RD' => 'E02001935',
        '4RE' => 'E02001935',
        '4RF' => 'E02001935',
        '4RG' => 'E02001935',
        '4RH' => 'E02001935',
        '4RL' => 'E02001922',
        '4RQ' => 'E02001935',
        '4WA' => 'E02001922',
        '4WF' => 'E02001922',
        '4WH' => 'E02001922',
        '4WQ' => 'E02001922',
        '4WU' => 'E02001922',
        '4YR' => 'E02001922',
        '5AA' => 'E02001925',
        '5AB' => 'E02001925',
        '5AD' => 'E02001927',
        '5AG' => 'E02001925',
        '5AH' => 'E02001925',
        '5AJ' => 'E02001925',
        '5AL' => 'E02001925',
        '5AP' => 'E02001925',
        '5AQ' => 'E02001925',
        '5AR' => 'E02001925',
        '5AT' => 'E02001925',
        '5AU' => 'E02001925',
        '5AX' => 'E02001925',
        '5AY' => 'E02001925',
        '5BA' => 'E02001935',
        '5BB' => 'E02001935',
        '5BD' => 'E02001935',
        '5BE' => 'E02001927',
        '5BG' => 'E02001927',
        '5BH' => 'E02001927',
        '5BJ' => 'E02001935',
        '5BL' => 'E02001935',
        '5BN' => 'E02001935',
        '5BP' => 'E02001935',
        '5BQ' => 'E02001927',
        '5BS' => 'E02001935',
        '5BT' => 'E02001935',
        '5BU' => 'E02001935',
        '5BW' => 'E02001927',
        '5BX' => 'E02001922',
        '5BY' => 'E02001922',
        '5BZ' => 'E02001925',
        '5DA' => 'E02001935',
        '5DB' => 'E02001927',
        '5DD' => 'E02001927',
        '5DE' => 'E02001927',
        '5DG' => 'E02001927',
        '5DH' => 'E02001927',
        '5DJ' => 'E02001927',
        '5DL' => 'E02001927',
        '5DN' => 'E02001927',
        '5DP' => 'E02001927',
        '5DR' => 'E02001927',
        '5DS' => 'E02001927',
        '5DT' => 'E02001927',
        '5DU' => 'E02001927',
        '5DW' => 'E02001927',
        '5DX' => 'E02001927',
        '5DY' => 'E02001927',
        '5EA' => 'E02001935',
        '5EB' => 'E02001935',
        '5ED' => 'E02001935',
        '5EE' => 'E02001935',
        '5EF' => 'E02001927',
        '5EG' => 'E02001927',
        '5EH' => 'E02001927',
        '5EJ' => 'E02001927',
        '5EL' => 'E02001927',
        '5EN' => 'E02001927',
        '5EP' => 'E02001927',
        '5EQ' => 'E02001927',
        '5ER' => 'E02001927',
        '5ES' => 'E02001927',
        '5HA' => 'E02001925',
        '5HB' => 'E02001925',
        '5HD' => 'E02001925',
        '5HE' => 'E02001925',
        '5HF' => 'E02001927',
        '5HG' => 'E02001927',
        '5HH' => 'E02001927',
        '5HJ' => 'E02001927',
        '5HL' => 'E02001927',
        '5HN' => 'E02001927',
        '5HP' => 'E02001927',
        '5HQ' => 'E02001927',
        '5HR' => 'E02001927',
        '5HS' => 'E02001927',
        '5HT' => 'E02001927',
        '5HU' => 'E02001921',
        '5HW' => 'E02001925',
        '5HX' => 'E02001921',
        '5HY' => 'E02001921',
        '5HZ' => 'E02001921',
        '5JA' => 'E02001921',
        '5JB' => 'E02001921',
        '5JD' => 'E02001921',
        '5JE' => 'E02001921',
        '5JF' => 'E02001925',
        '5JG' => 'E02001921',
        '5JH' => 'E02001921',
        '5JJ' => 'E02001921',
        '5JL' => 'E02001921',
        '5JN' => 'E02001921',
        '5JP' => 'E02001921',
        '5JQ' => 'E02001925',
        '5JR' => 'E02001921',
        '5JS' => 'E02001921',
        '5JT' => 'E02001922',
        '5JW' => 'E02001921',
        '5LA' => 'E02001927',
        '5LB' => 'E02001927',
        '5LD' => 'E02001927',
        '5LE' => 'E02001927',
        '5LF' => 'E02001927',
        '5LG' => 'E02001927',
        '5LH' => 'E02001927',
        '5LJ' => 'E02001927',
        '5LL' => 'E02001927',
        '5LN' => 'E02001927',
        '5LP' => 'E02001927',
        '5LR' => 'E02001927',
        '5LS' => 'E02001927',
        '5LT' => 'E02001927',
        '5LU' => 'E02001927',
        '5LW' => 'E02001927',
        '5LX' => 'E02001927',
        '5LY' => 'E02001927',
        '5LZ' => 'E02001927',
        '5NA' => 'E02001927',
        '5NB' => 'E02001927',
        '5ND' => 'E02001927',
        '5NE' => 'E02001927',
        '5NG' => 'E02001927',
        '5NH' => 'E02001927',
        '5NJ' => 'E02001927',
        '5NL' => 'E02001927',
        '5NN' => 'E02001927',
        '5NP' => 'E02001927',
        '5NQ' => 'E02001927',
        '5NR' => 'E02001927',
        '5NS' => 'E02001927',
        '5NT' => 'E02001927',
        '5NU' => 'E02001927',
        '5NW' => 'E02001922',
        '5NX' => 'E02001927',
        '5NY' => 'E02001927',
        '5NZ' => 'E02001927',
        '5PA' => 'E02001935',
        '5PB' => 'E02001935',
        '5PD' => 'E02001927',
        '5PE' => 'E02001922',
        '5PG' => 'E02001932',
        '5PH' => 'E02001927',
        '5PL' => 'E02001927',
        '5PN' => 'E02001927',
        '5PP' => 'E02001927',
        '5PQ' => 'E02001927',
        '5PT' => 'E02001927',
        '5PU' => 'E02001927',
        '5PX' => 'E02001927',
        '5PY' => 'E02001927',
        '5PZ' => 'E02001927',
        '5QA' => 'E02001927',
        '5QB' => 'E02001927',
        '5QD' => 'E02001927',
        '5QG' => 'E02001927',
        '5QH' => 'E02001927',
        '5QJ' => 'E02001927',
        '5QL' => 'E02001927',
        '5QN' => 'E02001927',
        '5QP' => 'E02001927',
        '5QR' => 'E02001927',
        '5QS' => 'E02001921',
        '5QT' => 'E02001927',
        '5QU' => 'E02001927',
        '5QW' => 'E02001927',
        '5QX' => 'E02001927',
        '5QY' => 'E02001927',
        '5RA' => 'E02001927',
        '5RB' => 'E02001927',
        '5RD' => 'E02001927',
        '5RE' => 'E02001927',
        '5RJ' => 'E02001921',
        '5RN' => 'E02001921',
        '5RP' => 'E02001921',
        '5RR' => 'E02001921',
        '5RS' => 'E02001921',
        '5RT' => 'E02001921',
        '5RU' => 'E02001921',
        '5RW' => 'E02001921',
        '5RX' => 'E02001921',
        '5RY' => 'E02001921',
        '5RZ' => 'E02001922',
        '5SA' => 'E02001921',
        '5SB' => 'E02001921',
        '5SD' => 'E02001921',
        '5SE' => 'E02001921',
        '5SG' => 'E02001921',
        '5SH' => 'E02001921',
        '5SJ' => 'E02001921',
        '5SL' => 'E02001921',
        '5SN' => 'E02001921',
        '5SP' => 'E02001921',
        '5SQ' => 'E02001922',
        '5SR' => 'E02001921',
        '5SS' => 'E02001921',
        '5ST' => 'E02001921',
        '5SU' => 'E02001921',
        '5SW' => 'E02001921',
        '5SX' => 'E02001921',
        '5SY' => 'E02001921',
        '5SZ' => 'E02001922',
        '5TA' => 'E02001921',
        '5TB' => 'E02001921',
        '5TD' => 'E02001921',
        '5TE' => 'E02001921',
        '5TF' => 'E02001921',
        '5TG' => 'E02001921',
        '5TH' => 'E02001927',
        '5TN' => 'E02001921',
        '5TR' => 'E02001921',
        '5TT' => 'E02001921',
        '5TU' => 'E02001927',
        '5TW' => 'E02001921',
        '5TX' => 'E02001927',
        '5TY' => 'E02001927',
        '5UA' => 'E02001927',
        '5UF' => 'E02001921',
        '5UG' => 'E02001921',
        '5UH' => 'E02001927',
        '5UJ' => 'E02001927',
        '5UL' => 'E02001927',
        '5UN' => 'E02001927',
        '5UP' => 'E02001921',
        '5UQ' => 'E02001921',
        '5UT' => 'E02001921',
        '5UW' => 'E02001921',
        '5UY' => 'E02001921',
        '5WA' => 'E02001921',
        '5XA' => 'E02001921',
        '5XB' => 'E02001921',
        '5XD' => 'E02001921',
        '5XE' => 'E02001921',
        '5XF' => 'E02001922',
        '5XG' => 'E02001921',
        '5XH' => 'E02001922',
        '5XJ' => 'E02001922',
        '5XL' => 'E02001922',
        '5XN' => 'E02001921',
        '5XP' => 'E02001921',
        '5XQ' => 'E02001925',
        '5XR' => 'E02001921',
        '5XS' => 'E02001922',
        '5XY' => 'E02001921',
        '5XZ' => 'E02001921',
        '5ZE' => 'E02001922',
        '5ZY' => 'E02001921',
        '6AA' => 'E02001922',
        '6AB' => 'E02001922',
        '6AD' => 'E02001922',
        '6AE' => 'E02001922',
        '6AF' => 'E02001922',
        '6AG' => 'E02001922',
        '6AH' => 'E02001922',
        '6AJ' => 'E02001925',
        '6AL' => 'E02001922',
        '6AN' => 'E02001922',
        '6AP' => 'E02001922',
        '6AQ' => 'E02001922',
        '6AR' => 'E02001922',
        '6AS' => 'E02001922',
        '6AT' => 'E02001922',
        '6AU' => 'E02001922',
        '6AW' => 'E02001922',
        '6AX' => 'E02001922',
        '6AY' => 'E02001922',
        '6AZ' => 'E02001922',
        '6BA' => 'E02001922',
        '6BB' => 'E02001922',
        '6BD' => 'E02001922',
        '6BE' => 'E02001922',
        '6BF' => 'E02001922',
        '6BG' => 'E02001922',
        '6BH' => 'E02001922',
        '6BJ' => 'E02001922',
        '6BL' => 'E02001922',
        '6BN' => 'E02001922',
        '6BP' => 'E02001922',
        '6BQ' => 'E02001922',
        '6BS' => 'E02001922',
        '6BT' => 'E02001922',
        '6BU' => 'E02001922',
        '6BW' => 'E02001922',
        '6BX' => 'E02001922',
        '6BY' => 'E02001922',
        '6BZ' => 'E02001922',
        '6DA' => 'E02001922',
        '6DB' => 'E02001922',
        '6DD' => 'E02001922',
        '6DE' => 'E02001922',
        '6DF' => 'E02001922',
        '6DG' => 'E02001925',
        '6DH' => 'E02001922',
        '6DJ' => 'E02001922',
        '6DL' => 'E02001922',
        '6DN' => 'E02001922',
        '6DP' => 'E02001922',
        '6DQ' => 'E02001922',
        '6DR' => 'E02001922',
        '6DS' => 'E02001922',
        '6DT' => 'E02001922',
        '6DU' => 'E02001922',
        '6DW' => 'E02001922',
        '6DX' => 'E02001922',
        '6DY' => 'E02001922',
        '6DZ' => 'E02001922',
        '6EA' => 'E02001922',
        '6EB' => 'E02001922',
        '6ED' => 'E02001922',
        '6EE' => 'E02001922',
        '6EF' => 'E02001922',
        '6EG' => 'E02001922',
        '6EH' => 'E02001922',
        '6EJ' => 'E02001922',
        '6EL' => 'E02001922',
        '6EN' => 'E02001922',
        '6EP' => 'E02001922',
        '6EQ' => 'E02001922',
        '6ER' => 'E02001922',
        '6ES' => 'E02001922',
        '6ET' => 'E02001922',
        '6EU' => 'E02001922',
        '6EW' => 'E02001922',
        '6EX' => 'E02001922',
        '6EY' => 'E02001922',
        '6EZ' => 'E02001922',
        '6FB' => 'E02001922',
        '6FE' => 'E02001922',
        '6FF' => 'E02001922',
        '6FG' => 'E02001922',
        '6FH' => 'E02001922',
        '6FJ' => 'E02001925',
        '6FL' => 'E02001922',
        '6FN' => 'E02001922',
        '6FP' => 'E02001926',
        '6FQ' => 'E02001922',
        '6FR' => 'E02001926',
        '6FS' => 'E02001926',
        '6FT' => 'E02001926',
        '6FU' => 'E02001922',
        '6FW' => 'E02001922',
        '6FX' => 'E02001922',
        '6FY' => 'E02001922',
        '6GA' => 'E02001922',
        '6GB' => 'E02001922',
        '6GD' => 'E02001922',
        '6GE' => 'E02001922',
        '6GF' => 'E02001922',
        '6GG' => 'E02001922',
        '6GH' => 'E02001922',
        '6GJ' => 'E02001922',
        '6GL' => 'E02001922',
        '6GN' => 'E02001922',
        '6GP' => 'E02001922',
        '6GQ' => 'E02001922',
        '6GR' => 'E02001922',
        '6GS' => 'E02001922',
        '6GT' => 'E02001922',
        '6GW' => 'E02001922',
        '6GX' => 'E02001922',
        '6GY' => 'E02001922',
        '6GZ' => 'E02001922',
        '6HA' => 'E02001926',
        '6HB' => 'E02001926',
        '6HD' => 'E02001922',
        '6HE' => 'E02001922',
        '6HF' => 'E02001922',
        '6HG' => 'E02001922',
        '6HH' => 'E02001922',
        '6HJ' => 'E02001922',
        '6HN' => 'E02001925',
        '6HP' => 'E02001925',
        '6HQ' => 'E02001922',
        '6HR' => 'E02001925',
        '6HS' => 'E02001925',
        '6HT' => 'E02001925',
        '6HU' => 'E02001925',
        '6HW' => 'E02001925',
        '6HX' => 'E02001925',
        '6HY' => 'E02001925',
        '6HZ' => 'E02001926',
        '6JA' => 'E02001926',
        '6JB' => 'E02001926',
        '6JD' => 'E02001922',
        '6JE' => 'E02001922',
        '6JF' => 'E02001922',
        '6JG' => 'E02001922',
        '6JH' => 'E02001922',
        '6JJ' => 'E02001922',
        '6JL' => 'E02001922',
        '6JN' => 'E02001922',
        '6JP' => 'E02001922',
        '6JQ' => 'E02001922',
        '6JR' => 'E02001922',
        '6JS' => 'E02001922',
        '6JT' => 'E02001926',
        '6JU' => 'E02001922',
        '6JW' => 'E02001922',
        '6JX' => 'E02001922',
        '6JY' => 'E02001922',
        '6JZ' => 'E02001922',
        '6LA' => 'E02001922',
        '6LB' => 'E02001925',
        '6LD' => 'E02001922',
        '6LE' => 'E02001925',
        '6LF' => 'E02001925',
        '6LG' => 'E02001925',
        '6LH' => 'E02001925',
        '6LJ' => 'E02001925',
        '6LL' => 'E02001925',
        '6LN' => 'E02001925',
        '6LP' => 'E02001925',
        '6LQ' => 'E02001925',
        '6LR' => 'E02001922',
        '6LS' => 'E02001922',
        '6LT' => 'E02001925',
        '6LU' => 'E02001925',
        '6LW' => 'E02001925',
        '6LX' => 'E02001925',
        '6LY' => 'E02001925',
        '6LZ' => 'E02001925',
        '6NA' => 'E02001922',
        '6NB' => 'E02001925',
        '6ND' => 'E02001925',
        '6NE' => 'E02001925',
        '6NF' => 'E02001922',
        '6NG' => 'E02001925',
        '6NH' => 'E02001925',
        '6NJ' => 'E02001925',
        '6NL' => 'E02001925',
        '6NN' => 'E02001925',
        '6NP' => 'E02001925',
        '6NQ' => 'E02001925',
        '6NR' => 'E02001925',
        '6NS' => 'E02001922',
        '6NT' => 'E02001922',
        '6NU' => 'E02001925',
        '6NW' => 'E02001925',
        '6NX' => 'E02001925',
        '6NY' => 'E02001922',
        '6NZ' => 'E02001922',
        '6PA' => 'E02001922',
        '6PB' => 'E02001922',
        '6PD' => 'E02001922',
        '6PE' => 'E02001922',
        '6PF' => 'E02001922',
        '6PG' => 'E02001922',
        '6PH' => 'E02001922',
        '6PJ' => 'E02001925',
        '6PL' => 'E02001925',
        '6PN' => 'E02001925',
        '6PP' => 'E02001925',
        '6PQ' => 'E02001922',
        '6PR' => 'E02001921',
        '6PS' => 'E02001921',
        '6PT' => 'E02001921',
        '6PU' => 'E02001921',
        '6PW' => 'E02001925',
        '6PX' => 'E02001921',
        '6PY' => 'E02001925',
        '6PZ' => 'E02001921',
        '6QA' => 'E02001925',
        '6QB' => 'E02001925',
        '6QD' => 'E02001925',
        '6QE' => 'E02001925',
        '6QF' => 'E02001925',
        '6QG' => 'E02001925',
        '6QH' => 'E02001925',
        '6QJ' => 'E02001925',
        '6QL' => 'E02001925',
        '6QN' => 'E02001925',
        '6QP' => 'E02001925',
        '6QQ' => 'E02001925',
        '6QR' => 'E02001925',
        '6QS' => 'E02001925',
        '6QT' => 'E02001925',
        '6QU' => 'E02001925',
        '6QW' => 'E02001925',
        '6QX' => 'E02001925',
        '6QY' => 'E02001925',
        '6QZ' => 'E02001925',
        '6RA' => 'E02001922',
        '6RB' => 'E02001925',
        '6RD' => 'E02001925',
        '6RE' => 'E02001925',
        '6RF' => 'E02001922',
        '6RG' => 'E02001922',
        '6RH' => 'E02001921',
        '6RJ' => 'E02001921',
        '6RL' => 'E02001925',
        '6RN' => 'E02001925',
        '6RP' => 'E02001925',
        '6RQ' => 'E02001922',
        '6RR' => 'E02001925',
        '6RS' => 'E02001925',
        '6RT' => 'E02001925',
        '6RU' => 'E02001925',
        '6RW' => 'E02001922',
        '6RX' => 'E02001925',
        '6RY' => 'E02001925',
        '6RZ' => 'E02001925',
        '6SA' => 'E02001921',
        '6SB' => 'E02001925',
        '6SD' => 'E02001925',
        '6SE' => 'E02001925',
        '6SF' => 'E02001925',
        '6SG' => 'E02001922',
        '6SH' => 'E02001922',
        '6SJ' => 'E02001922',
        '6SL' => 'E02001925',
        '6SN' => 'E02001922',
        '6SP' => 'E02001922',
        '6SQ' => 'E02001922',
        '6SR' => 'E02001922',
        '6SS' => 'E02001913',
        '6ST' => 'E02001913',
        '6SU' => 'E02001913',
        '6SW' => 'E02001922',
        '6SX' => 'E02001913',
        '6SY' => 'E02001921',
        '6SZ' => 'E02001922',
        '6TA' => 'E02001921',
        '6TB' => 'E02001921',
        '6TD' => 'E02001921',
        '6TE' => 'E02001913',
        '6TF' => 'E02001913',
        '6TG' => 'E02001913',
        '6TH' => 'E02001922',
        '6TJ' => 'E02001922',
        '6TL' => 'E02001922',
        '6TN' => 'E02001922',
        '6TP' => 'E02001922',
        '6TQ' => 'E02001922',
        '6TR' => 'E02001913',
        '6TS' => 'E02001913',
        '6TT' => 'E02001922',
        '6TU' => 'E02001925',
        '6TW' => 'E02001925',
        '6TX' => 'E02001926',
        '6TY' => 'E02001926',
        '6TZ' => 'E02001926',
        '6UA' => 'E02001926',
        '6UB' => 'E02001922',
        '6UD' => 'E02001926',
        '6UE' => 'E02001922',
        '6UF' => 'E02001922',
        '6UG' => 'E02001922',
        '6UH' => 'E02001922',
        '6UJ' => 'E02001926',
        '6UL' => 'E02001926',
        '6UN' => 'E02001926',
        '6UP' => 'E02001922',
        '6UQ' => 'E02001926',
        '6UR' => 'E02001926',
        '6UU' => 'E02001926',
        '6UW' => 'E02001926',
        '6UX' => 'E02001922',
        '6UY' => 'E02001922',
        '6UZ' => 'E02001922',
        '6WA' => 'E02001922',
        '6WB' => 'E02001922',
        '6WD' => 'E02001926',
        '6WE' => 'E02001925',
        '6WF' => 'E02001926',
        '6WP' => 'E02001926',
        '6WU' => 'E02001922',
        '6WW' => 'E02001922',
        '6WZ' => 'E02001922',
        '6XA' => 'E02001926',
        '6XB' => 'E02001922',
        '6YB' => 'E02001922',
        '6ZB' => 'E02001926',
        '6ZD' => 'E02001922',
        '6ZL' => 'E02001926',
        '6ZR' => 'E02001926',
        '6ZT' => 'E02001922',
        '6ZU' => 'E02001922',
        '6ZW' => 'E02001922',
        '6ZY' => 'E02001926',
        '7AA' => 'E02001922',
        '7AB' => 'E02001922',
        '7AD' => 'E02001922',
        '7AE' => 'E02001922',
        '7AF' => 'E02001922',
        '7AG' => 'E02001922',
        '7AH' => 'E02001922',
        '7AJ' => 'E02001922',
        '7AL' => 'E02001922',
        '7AN' => 'E02001922',
        '7AP' => 'E02001922',
        '7AQ' => 'E02001922',
        '7AR' => 'E02001922',
        '7AS' => 'E02001922',
        '7AT' => 'E02001922',
        '7AU' => 'E02001922',
        '7AW' => 'E02001922',
        '7AX' => 'E02001922',
        '7AY' => 'E02001922',
        '7AZ' => 'E02001922',
        '7BA' => 'E02001922',
        '7BB' => 'E02001926',
        '7BD' => 'E02001922',
        '7BE' => 'E02001922',
        '7BF' => 'E02001922',
        '7BG' => 'E02001922',
        '7BH' => 'E02001922',
        '7BJ' => 'E02001922',
        '7BL' => 'E02001926',
        '7BN' => 'E02001922',
        '7BP' => 'E02001922',
        '7BQ' => 'E02001922',
        '7BS' => 'E02001922',
        '7BT' => 'E02001922',
        '7BU' => 'E02001922',
        '7BW' => 'E02001922',
        '7BX' => 'E02001922',
        '7BY' => 'E02001922',
        '7BZ' => 'E02001922',
        '7DA' => 'E02001922',
        '7DB' => 'E02001922',
        '7DD' => 'E02001922',
        '7DE' => 'E02001922',
        '7DF' => 'E02001922',
        '7DG' => 'E02001922',
        '7DH' => 'E02001922',
        '7DJ' => 'E02001922',
        '7DL' => 'E02001922',
        '7DN' => 'E02001922',
        '7DP' => 'E02001922',
        '7DQ' => 'E02001922',
        '7DR' => 'E02001922',
        '7DT' => 'E02001926',
        '7DU' => 'E02001922',
        '7DW' => 'E02001922',
        '7DX' => 'E02001922',
        '7DY' => 'E02001922',
        '7EA' => 'E02001922',
        '7EB' => 'E02001922',
        '7ED' => 'E02001926',
        '7EE' => 'E02001922',
        '7EF' => 'E02001926',
        '7EG' => 'E02001926',
        '7EH' => 'E02001905',
        '7EJ' => 'E02001905',
        '7EL' => 'E02001905',
        '7EN' => 'E02001905',
        '7EP' => 'E02001905',
        '7EQ' => 'E02001926',
        '7ER' => 'E02001905',
        '7ES' => 'E02001905',
        '7ET' => 'E02001922',
        '7EU' => 'E02001905',
        '7EW' => 'E02001926',
        '7EX' => 'E02001905',
        '7EY' => 'E02001905',
        '7EZ' => 'E02001922',
        '7FX' => 'E02001922',
        '7HA' => 'E02001905',
        '7HB' => 'E02001905',
        '7HD' => 'E02001905',
        '7HE' => 'E02001922',
        '7HG' => 'E02001905',
        '7HH' => 'E02001905',
        '7HL' => 'E02001926',
        '7HN' => 'E02001922',
        '7HP' => 'E02001905',
        '7HQ' => 'E02001905',
        '7HR' => 'E02001926',
        '7HS' => 'E02001922',
        '7HT' => 'E02001922',
        '7HU' => 'E02001926',
        '7HW' => 'E02001926',
        '7HY' => 'E02001926',
        '7HZ' => 'E02001926',
        '7JA' => 'E02001926',
        '7JB' => 'E02001926',
        '7JD' => 'E02001926',
        '7JE' => 'E02001926',
        '7JF' => 'E02001926',
        '7JG' => 'E02001926',
        '7JH' => 'E02001905',
        '7JJ' => 'E02001905',
        '7JL' => 'E02001905',
        '7JN' => 'E02001905',
        '7JP' => 'E02001905',
        '7JQ' => 'E02001926',
        '7JR' => 'E02001905',
        '7JS' => 'E02001926',
        '7JT' => 'E02001926',
        '7JU' => 'E02001922',
        '7JW' => 'E02001926',
        '7JX' => 'E02001905',
        '7JY' => 'E02001922',
        '7JZ' => 'E02001922',
        '7LA' => 'E02001922',
        '7LB' => 'E02001926',
        '7LD' => 'E02001926',
        '7LE' => 'E02001922',
        '7LF' => 'E02001922',
        '7LG' => 'E02001905',
        '7LH' => 'E02001926',
        '7LJ' => 'E02001926',
        '7LL' => 'E02001926',
        '7LN' => 'E02001922',
        '7LP' => 'E02001926',
        '7LQ' => 'E02001922',
        '7LR' => 'E02001926',
        '7LS' => 'E02001926',
        '7LT' => 'E02001926',
        '7LU' => 'E02001926',
        '7LW' => 'E02001926',
        '7LX' => 'E02001926',
        '7LY' => 'E02001926',
        '7LZ' => 'E02001926',
        '7NA' => 'E02001926',
        '7NB' => 'E02001926',
        '7ND' => 'E02001926',
        '7NE' => 'E02001926',
        '7NF' => 'E02001905',
        '7NG' => 'E02001926',
        '7NH' => 'E02001905',
        '7NJ' => 'E02001905',
        '7NL' => 'E02001905',
        '7NN' => 'E02001905',
        '7NP' => 'E02001905',
        '7NQ' => 'E02001926',
        '7NR' => 'E02001905',
        '7NS' => 'E02001905',
        '7NT' => 'E02001905',
        '7NU' => 'E02001905',
        '7NW' => 'E02001905',
        '7NX' => 'E02001905',
        '7NY' => 'E02001905',
        '7NZ' => 'E02001926',
        '7PA' => 'E02001926',
        '7PB' => 'E02001926',
        '7PE' => 'E02001926',
        '7PG' => 'E02001926',
        '7PH' => 'E02001926',
        '7PL' => 'E02001926',
        '7PN' => 'E02001926',
        '7PP' => 'E02001926',
        '7PQ' => 'E02001926',
        '7PR' => 'E02001926',
        '7PS' => 'E02001926',
        '7PT' => 'E02001926',
        '7PU' => 'E02001926',
        '7PW' => 'E02001926',
        '7PX' => 'E02001926',
        '7PY' => 'E02001926',
        '7PZ' => 'E02001926',
        '7QA' => 'E02001926',
        '7QB' => 'E02001926',
        '7QD' => 'E02001926',
        '7QE' => 'E02001926',
        '7QF' => 'E02001926',
        '7QG' => 'E02001926',
        '7QH' => 'E02001926',
        '7QJ' => 'E02001926',
        '7QL' => 'E02001926',
        '7QN' => 'E02001926',
        '7QQ' => 'E02001926',
        '7QR' => 'E02001922',
        '7QS' => 'E02001926',
        '7QT' => 'E02001926',
        '7QU' => 'E02001926',
        '7QW' => 'E02001926',
        '7QX' => 'E02001926',
        '7QY' => 'E02001926',
        '7RA' => 'E02001926',
        '7RB' => 'E02001926',
        '7RD' => 'E02001926',
        '7RE' => 'E02001926',
        '7RG' => 'E02001926',
        '7RH' => 'E02001926',
        '7RJ' => 'E02001926',
        '7RL' => 'E02001926',
        '7RN' => 'E02001926',
        '7RP' => 'E02001926',
        '7RQ' => 'E02001926',
        '7RR' => 'E02001926',
        '7RS' => 'E02001926',
        '7RT' => 'E02001926',
        '7RU' => 'E02001926',
        '7RW' => 'E02001926',
        '7RX' => 'E02001922',
        '7RY' => 'E02001926',
        '7RZ' => 'E02001926',
        '7SA' => 'E02001926',
        '7SB' => 'E02001926',
        '7SD' => 'E02001926',
        '7SE' => 'E02001926',
        '7SF' => 'E02001926',
        '7SG' => 'E02001926',
        '7SH' => 'E02001926',
        '7SL' => 'E02001926',
        '7SN' => 'E02001926',
        '7SP' => 'E02001926',
        '7SQ' => 'E02001926',
        '7SR' => 'E02001926',
        '7SS' => 'E02001926',
        '7ST' => 'E02001926',
        '7SU' => 'E02001926',
        '7SW' => 'E02001926',
        '7SX' => 'E02001926',
        '7SY' => 'E02001926',
        '7SZ' => 'E02001926',
        '7TA' => 'E02001922',
        '7TD' => 'E02001926',
        '7WA' => 'E02001926',
        '7WB' => 'E02001922',
        '7WD' => 'E02001926',
        '7WE' => 'E02001926',
        '7WQ' => 'E02001926',
        '7WU' => 'E02001922',
        '7XB' => 'E02001922',
        '7XQ' => 'E02001922',
        '7ZB' => 'E02001922',
        '9AA' => 'E02001922',
        '9AB' => 'E02001922',
        '9AD' => 'E02001922',
        '9AE' => 'E02001922',
        '9AF' => 'E02001922',
        '9AG' => 'E02001922',
        '9AH' => 'E02001922',
        '9AJ' => 'E02001922',
        '9AL' => 'E02001922',
        '9AN' => 'E02001922',
        '9AP' => 'E02001922',
        '9AQ' => 'E02001922',
        '9AR' => 'E02001922',
        '9AS' => 'E02001922',
        '9AT' => 'E02001922',
        '9AU' => 'E02001922',
        '9AW' => 'E02001922',
        '9AX' => 'E02001922',
        '9AY' => 'E02001922',
        '9AZ' => 'E02001922',
        '9BA' => 'E02001922',
        '9BB' => 'E02001922',
        '9BD' => 'E02001922',
        '9BE' => 'E02001922',
        '9BF' => 'E02001922',
        '9BG' => 'E02001922',
        '9BH' => 'E02001922',
        '9BJ' => 'E02001922',
        '9BL' => 'E02001922',
        '9BN' => 'E02001922',
        '9BP' => 'E02001922',
        '9BQ' => 'E02001922',
        '9BR' => 'E02001922',
        '9BS' => 'E02001922',
        '9BT' => 'E02001922',
        '9BU' => 'E02001922',
        '9BW' => 'E02001922',
        '9BX' => 'E02001922',
        '9BY' => 'E02001922',
        '9BZ' => 'E02001922',
        '9DA' => 'E02001922',
        '9DB' => 'E02001922',
        '9DD' => 'E02001922',
        '9DE' => 'E02001922',
        '9DF' => 'E02001922',
        '9DG' => 'E02001922',
        '9DH' => 'E02001922',
        '9DJ' => 'E02001922',
        '9DL' => 'E02001922',
        '9DN' => 'E02001922',
        '9DP' => 'E02001922',
        '9DQ' => 'E02001922',
        '9DR' => 'E02001922',
        '9DS' => 'E02001922',
        '9DT' => 'E02001922',
        '9DU' => 'E02001922',
        '9DW' => 'E02001922',
        '9DX' => 'E02001922',
        '9DY' => 'E02001922',
        '9DZ' => 'E02001922',
        '9EA' => 'E02001922',
        '9EB' => 'E02001922',
        '9ED' => 'E02001922',
        '9EE' => 'E02001922',
        '9EF' => 'E02001922',
        '9EG' => 'E02001922',
        '9EH' => 'E02001922',
        '9EJ' => 'E02001922',
        '9EL' => 'E02001922',
        '9EN' => 'E02001922',
        '9EP' => 'E02001922',
        '9EQ' => 'E02001922',
        '9ER' => 'E02001922',
        '9ES' => 'E02001922',
        '9ET' => 'E02001922',
        '9EU' => 'E02001922',
        '9EX' => 'E02001922',
        '9EY' => 'E02001922',
        '9EZ' => 'E02001922',
        '9FA' => 'E02001922',
        '9FB' => 'E02001922',
        '9FD' => 'E02001922',
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
