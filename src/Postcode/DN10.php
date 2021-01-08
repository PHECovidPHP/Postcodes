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
final class DN10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02005836',
        '4AB' => 'E02005836',
        '4AD' => 'E02005836',
        '4AE' => 'E02005836',
        '4AF' => 'E02005836',
        '4AG' => 'E02005836',
        '4AH' => 'E02005836',
        '4AJ' => 'E02005836',
        '4AL' => 'E02005836',
        '4AN' => 'E02005836',
        '4AP' => 'E02005836',
        '4AQ' => 'E02005836',
        '4AR' => 'E02005836',
        '4AS' => 'E02005836',
        '4AT' => 'E02005836',
        '4AU' => 'E02005836',
        '4AW' => 'E02005836',
        '4AX' => 'E02005836',
        '4AY' => 'E02005836',
        '4AZ' => 'E02005836',
        '4BA' => 'E02005836',
        '4BB' => 'E02005836',
        '4BD' => 'E02005836',
        '4BE' => 'E02002771',
        '4BF' => 'E02005836',
        '4BG' => 'E02005836',
        '4BH' => 'E02005836',
        '4BJ' => 'E02005836',
        '4BL' => 'E02005836',
        '4BN' => 'E02005836',
        '4BP' => 'E02005836',
        '4BQ' => 'E02005836',
        '4BS' => 'E02005836',
        '4BT' => 'E02005836',
        '4BU' => 'E02005836',
        '4BW' => 'E02005836',
        '4BX' => 'E02005836',
        '4BY' => 'E02005836',
        '4BZ' => 'E02005836',
        '4DA' => 'E02005836',
        '4DB' => 'E02005836',
        '4DD' => 'E02005836',
        '4DE' => 'E02005836',
        '4DF' => 'E02005836',
        '4DG' => 'E02005836',
        '4DH' => 'E02005836',
        '4DJ' => 'E02005836',
        '4DL' => 'E02005836',
        '4DN' => 'E02005836',
        '4DP' => 'E02005836',
        '4DQ' => 'E02005836',
        '4DR' => 'E02005836',
        '4DS' => 'E02005836',
        '4DT' => 'E02005836',
        '4DU' => 'E02005836',
        '4DW' => 'E02005836',
        '4DX' => 'E02005836',
        '4DY' => 'E02005836',
        '4DZ' => 'E02005836',
        '4EA' => 'E02005836',
        '4EB' => 'E02005836',
        '4ED' => 'E02005836',
        '4EE' => 'E02005836',
        '4EF' => 'E02005836',
        '4EG' => 'E02005836',
        '4EH' => 'E02005836',
        '4EJ' => 'E02005836',
        '4EL' => 'E02005836',
        '4EN' => 'E02005836',
        '4EP' => 'E02005836',
        '4EQ' => 'E02005836',
        '4ER' => 'E02005836',
        '4ES' => 'E02005836',
        '4ET' => 'E02005836',
        '4EU' => 'E02005836',
        '4EW' => 'E02005836',
        '4EX' => 'E02005836',
        '4EY' => 'E02005836',
        '4EZ' => 'E02005836',
        '4FA' => 'E02005836',
        '4FB' => 'E02005836',
        '4FD' => 'E02005836',
        '4FE' => 'E02005836',
        '4FF' => 'E02005836',
        '4FG' => 'E02005836',
        '4FH' => 'E02005836',
        '4FJ' => 'E02005836',
        '4FL' => 'E02005836',
        '4FN' => 'E02005836',
        '4FP' => 'E02005836',
        '4FQ' => 'E02005837',
        '4FR' => 'E02005836',
        '4FS' => 'E02005836',
        '4GA' => 'E02005836',
        '4HA' => 'E02005836',
        '4HB' => 'E02005836',
        '4HD' => 'E02005836',
        '4HE' => 'E02005836',
        '4HF' => 'E02005836',
        '4HG' => 'E02005836',
        '4HH' => 'E02005836',
        '4HJ' => 'E02005836',
        '4HL' => 'E02005836',
        '4HN' => 'E02005836',
        '4HP' => 'E02005836',
        '4HQ' => 'E02005836',
        '4HR' => 'E02005836',
        '4HS' => 'E02005836',
        '4HT' => 'E02005836',
        '4HU' => 'E02005836',
        '4HX' => 'E02005836',
        '4HY' => 'E02005836',
        '4HZ' => 'E02005836',
        '4JA' => 'E02005836',
        '4JB' => 'E02005836',
        '4JD' => 'E02005836',
        '4JE' => 'E02005836',
        '4JF' => 'E02005836',
        '4JG' => 'E02005836',
        '4JH' => 'E02005836',
        '4JJ' => 'E02005836',
        '4JL' => 'E02005836',
        '4JN' => 'E02005836',
        '4JP' => 'E02005836',
        '4JQ' => 'E02005836',
        '4JR' => 'E02005836',
        '4JS' => 'E02005836',
        '4JT' => 'E02005836',
        '4JW' => 'E02005836',
        '4JZ' => 'E02005836',
        '4LB' => 'E02005836',
        '4LD' => 'E02005836',
        '4LF' => 'E02005836',
        '4LG' => 'E02005836',
        '4LH' => 'E02005836',
        '4LJ' => 'E02005836',
        '4LL' => 'E02005836',
        '4LN' => 'E02005836',
        '4LP' => 'E02005836',
        '4LQ' => 'E02005836',
        '4LR' => 'E02005836',
        '4LS' => 'E02005836',
        '4LT' => 'E02005836',
        '4LU' => 'E02005836',
        '4LW' => 'E02005836',
        '4LX' => 'E02005836',
        '4LY' => 'E02005836',
        '4LZ' => 'E02005836',
        '4NA' => 'E02005837',
        '4NB' => 'E02005836',
        '4ND' => 'E02005837',
        '4NE' => 'E02005837',
        '4NF' => 'E02005836',
        '4NG' => 'E02005836',
        '4NL' => 'E02005836',
        '4NN' => 'E02005836',
        '4NP' => 'E02005836',
        '4NR' => 'E02005836',
        '4NS' => 'E02005836',
        '4NT' => 'E02005836',
        '4NU' => 'E02005836',
        '4NW' => 'E02005836',
        '4NX' => 'E02005836',
        '4NY' => 'E02005836',
        '4NZ' => 'E02005836',
        '4PA' => 'E02005836',
        '4PB' => 'E02005836',
        '4PD' => 'E02005836',
        '4PE' => 'E02005836',
        '4PF' => 'E02005836',
        '4PG' => 'E02005836',
        '4PH' => 'E02005836',
        '4PJ' => 'E02005836',
        '4PL' => 'E02005836',
        '4PN' => 'E02005836',
        '4PP' => 'E02005836',
        '4PQ' => 'E02005836',
        '4PR' => 'E02005836',
        '4PS' => 'E02005836',
        '4PT' => 'E02005836',
        '4PU' => 'E02005836',
        '4PW' => 'E02005836',
        '4PX' => 'E02005836',
        '4PY' => 'E02005836',
        '4PZ' => 'E02005836',
        '4QA' => 'E02005836',
        '4QB' => 'E02005836',
        '4QD' => 'E02005836',
        '4QE' => 'E02005836',
        '4QF' => 'E02005836',
        '4QG' => 'E02005836',
        '4QH' => 'E02005836',
        '4QJ' => 'E02005836',
        '4QL' => 'E02005836',
        '4QN' => 'E02005836',
        '4QP' => 'E02005837',
        '4QQ' => 'E02005836',
        '4QR' => 'E02005837',
        '4QS' => 'E02005837',
        '4QT' => 'E02005837',
        '4QU' => 'E02005837',
        '4QW' => 'E02005836',
        '4QX' => 'E02005837',
        '4QY' => 'E02005837',
        '4QZ' => 'E02005837',
        '4RA' => 'E02005837',
        '4RB' => 'E02005837',
        '4RD' => 'E02005837',
        '4RE' => 'E02005837',
        '4RF' => 'E02005837',
        '4RG' => 'E02005837',
        '4RH' => 'E02005837',
        '4RJ' => 'E02005837',
        '4RL' => 'E02005837',
        '4RN' => 'E02005837',
        '4RP' => 'E02005836',
        '4RQ' => 'E02005837',
        '4RR' => 'E02005837',
        '4RS' => 'E02005837',
        '4RT' => 'E02005837',
        '4RU' => 'E02005837',
        '4RW' => 'E02005837',
        '4RX' => 'E02005837',
        '4RY' => 'E02005837',
        '4RZ' => 'E02005837',
        '4SA' => 'E02005837',
        '4SB' => 'E02005837',
        '4SD' => 'E02005837',
        '4SE' => 'E02005837',
        '4SF' => 'E02005837',
        '4SG' => 'E02005837',
        '4SH' => 'E02005837',
        '4SJ' => 'E02005837',
        '4SL' => 'E02005837',
        '4SN' => 'E02005837',
        '4SP' => 'E02005837',
        '4SQ' => 'E02005837',
        '4SR' => 'E02005837',
        '4SS' => 'E02005837',
        '4ST' => 'E02005837',
        '4SU' => 'E02001560',
        '4SX' => 'E02005836',
        '4TA' => 'E02005836',
        '4TB' => 'E02005836',
        '4TD' => 'E02005837',
        '4TE' => 'E02005836',
        '4TS' => 'E02005836',
        '4WG' => 'E02005836',
        '4WH' => 'E02001576',
        '4WJ' => 'E02001576',
        '4WL' => 'E02001576',
        '4WN' => 'E02005836',
        '4WP' => 'E02005836',
        '4WQ' => 'E02005836',
        '4WR' => 'E02005836',
        '4WS' => 'E02005836',
        '4WT' => 'E02005836',
        '4WU' => 'E02005836',
        '4WX' => 'E02001576',
        '4WY' => 'E02005836',
        '4WZ' => 'E02005836',
        '4XA' => 'E02005836',
        '4XB' => 'E02005836',
        '4XD' => 'E02005836',
        '4XE' => 'E02005837',
        '4XF' => 'E02005836',
        '4XG' => 'E02005836',
        '4XH' => 'E02001560',
        '4XJ' => 'E02005836',
        '4XL' => 'E02001560',
        '4XN' => 'E02001560',
        '4XP' => 'E02005836',
        '4XQ' => 'E02001560',
        '4XR' => 'E02005836',
        '4XS' => 'E02005836',
        '4XT' => 'E02001560',
        '4XU' => 'E02005836',
        '4XW' => 'E02005836',
        '4XX' => 'E02001560',
        '5AA' => 'E02005836',
        '5AB' => 'E02005836',
        '5AD' => 'E02005836',
        '5AE' => 'E02005836',
        '5AF' => 'E02005836',
        '5AG' => 'E02005836',
        '5AH' => 'E02005837',
        '5AJ' => 'E02005836',
        '5AL' => 'E02005837',
        '5AN' => 'E02005837',
        '5AP' => 'E02005837',
        '5AQ' => 'E02005836',
        '5AR' => 'E02005837',
        '5AS' => 'E02005837',
        '5AT' => 'E02005837',
        '5AU' => 'E02005837',
        '5AW' => 'E02005837',
        '5AX' => 'E02005837',
        '5AY' => 'E02005837',
        '5AZ' => 'E02005837',
        '5BA' => 'E02005837',
        '5BB' => 'E02005837',
        '5BD' => 'E02005837',
        '5BE' => 'E02005837',
        '5BF' => 'E02005837',
        '5BG' => 'E02005837',
        '5BH' => 'E02005837',
        '5BJ' => 'E02005837',
        '5BL' => 'E02005837',
        '5BN' => 'E02005837',
        '5BP' => 'E02005837',
        '5BQ' => 'E02005837',
        '5BS' => 'E02005837',
        '5BT' => 'E02005837',
        '5BU' => 'E02005837',
        '5BW' => 'E02005837',
        '5BX' => 'E02005837',
        '5BY' => 'E02005837',
        '5BZ' => 'E02005837',
        '5DA' => 'E02005837',
        '5DB' => 'E02005837',
        '5DD' => 'E02005837',
        '5DE' => 'E02005837',
        '5DF' => 'E02005837',
        '5DG' => 'E02005837',
        '5DH' => 'E02005837',
        '5DJ' => 'E02005837',
        '5DL' => 'E02005837',
        '5DN' => 'E02005837',
        '5DP' => 'E02005837',
        '5DQ' => 'E02005837',
        '5DR' => 'E02005837',
        '5DS' => 'E02005837',
        '5DT' => 'E02005837',
        '5DU' => 'E02005837',
        '5DW' => 'E02005837',
        '5DX' => 'E02005837',
        '5DY' => 'E02005837',
        '5DZ' => 'E02005837',
        '5EA' => 'E02005837',
        '5EB' => 'E02005837',
        '5ED' => 'E02005837',
        '5EE' => 'E02005837',
        '5EF' => 'E02005837',
        '5EG' => 'E02005837',
        '5EH' => 'E02005837',
        '5EJ' => 'E02005837',
        '5EL' => 'E02005837',
        '5EN' => 'E02005837',
        '5EP' => 'E02005837',
        '5EQ' => 'E02005837',
        '5ER' => 'E02005837',
        '5ES' => 'E02005837',
        '5ET' => 'E02005837',
        '5EU' => 'E02005837',
        '5EW' => 'E02005837',
        '5EX' => 'E02005837',
        '5EY' => 'E02005837',
        '5EZ' => 'E02005837',
        '5GA' => 'E02005837',
        '5HA' => 'E02005837',
        '5HB' => 'E02005837',
        '5HD' => 'E02005837',
        '5HE' => 'E02005837',
        '5HF' => 'E02005837',
        '5HG' => 'E02005837',
        '5HH' => 'E02005837',
        '5HJ' => 'E02005837',
        '5HL' => 'E02005837',
        '5HN' => 'E02005837',
        '5HP' => 'E02005837',
        '5HQ' => 'E02005837',
        '5HR' => 'E02005837',
        '5HS' => 'E02005837',
        '5HT' => 'E02005837',
        '5HU' => 'E02005837',
        '5HW' => 'E02005837',
        '5HX' => 'E02005837',
        '5HY' => 'E02005837',
        '5JA' => 'E02005837',
        '5JB' => 'E02005837',
        '5JD' => 'E02005837',
        '5JF' => 'E02005837',
        '5XA' => 'E02001576',
        '5XB' => 'E02005837',
        '6AA' => 'E02001576',
        '6AB' => 'E02005835',
        '6AD' => 'E02005835',
        '6AE' => 'E02005835',
        '6AF' => 'E02005835',
        '6AG' => 'E02005835',
        '6AH' => 'E02005835',
        '6AJ' => 'E02005835',
        '6AL' => 'E02005835',
        '6AN' => 'E02005835',
        '6AP' => 'E02005835',
        '6AQ' => 'E02005835',
        '6AR' => 'E02005835',
        '6AS' => 'E02005835',
        '6AT' => 'E02005835',
        '6AU' => 'E02005835',
        '6AW' => 'E02005835',
        '6AX' => 'E02005835',
        '6AY' => 'E02005835',
        '6AZ' => 'E02005835',
        '6BA' => 'E02005835',
        '6BB' => 'E02005835',
        '6BD' => 'E02005835',
        '6BE' => 'E02005835',
        '6BF' => 'E02001576',
        '6BG' => 'E02005835',
        '6BH' => 'E02005837',
        '6BJ' => 'E02005837',
        '6BL' => 'E02005837',
        '6BN' => 'E02005837',
        '6BP' => 'E02005835',
        '6BQ' => 'E02005835',
        '6BS' => 'E02005835',
        '6BT' => 'E02005835',
        '6BU' => 'E02005837',
        '6BW' => 'E02005835',
        '6BX' => 'E02001576',
        '6BZ' => 'E02005835',
        '6DA' => 'E02001576',
        '6DB' => 'E02001576',
        '6DD' => 'E02001576',
        '6DE' => 'E02001574',
        '6DF' => 'E02001576',
        '6DG' => 'E02001576',
        '6DH' => 'E02001576',
        '6DJ' => 'E02005837',
        '6DL' => 'E02005837',
        '6DN' => 'E02005837',
        '6DP' => 'E02005837',
        '6DQ' => 'E02001576',
        '6DR' => 'E02005837',
        '6DS' => 'E02005837',
        '6DT' => 'E02005837',
        '6DU' => 'E02005837',
        '6DW' => 'E02005837',
        '6DX' => 'E02005837',
        '6DY' => 'E02005837',
        '6DZ' => 'E02005837',
        '6EA' => 'E02005837',
        '6EB' => 'E02005837',
        '6ED' => 'E02005837',
        '6EE' => 'E02005837',
        '6EF' => 'E02005837',
        '6EG' => 'E02005837',
        '6EH' => 'E02005837',
        '6EJ' => 'E02005837',
        '6EL' => 'E02005837',
        '6EN' => 'E02005837',
        '6EP' => 'E02005837',
        '6EQ' => 'E02005837',
        '6ER' => 'E02005837',
        '6ES' => 'E02005837',
        '6ET' => 'E02005837',
        '6EU' => 'E02005837',
        '6EW' => 'E02005837',
        '6EX' => 'E02001576',
        '6EY' => 'E02001576',
        '6EZ' => 'E02001576',
        '6FA' => 'E02005837',
        '6FD' => 'E02005837',
        '6GA' => 'E02001576',
        '6GB' => 'E02001576',
        '6GD' => 'E02001576',
        '6HA' => 'E02001576',
        '6HB' => 'E02001576',
        '6HD' => 'E02001576',
        '6HE' => 'E02005837',
        '6HF' => 'E02005837',
        '6HG' => 'E02001576',
        '6HH' => 'E02001576',
        '6HL' => 'E02001576',
        '6HN' => 'E02001576',
        '6HP' => 'E02001576',
        '6HQ' => 'E02001576',
        '6HR' => 'E02001576',
        '6HS' => 'E02001576',
        '6HT' => 'E02001576',
        '6HU' => 'E02001576',
        '6HW' => 'E02001576',
        '6HX' => 'E02001576',
        '6HY' => 'E02001576',
        '6HZ' => 'E02001576',
        '6JA' => 'E02001576',
        '6JB' => 'E02001576',
        '6JD' => 'E02001576',
        '6JE' => 'E02001576',
        '6JF' => 'E02001576',
        '6JG' => 'E02001576',
        '6JH' => 'E02001576',
        '6JJ' => 'E02001576',
        '6JL' => 'E02001576',
        '6JN' => 'E02001576',
        '6JP' => 'E02001576',
        '6JQ' => 'E02001576',
        '6JR' => 'E02001576',
        '6JS' => 'E02001576',
        '6JT' => 'E02001576',
        '6JU' => 'E02001576',
        '6JW' => 'E02001576',
        '6JX' => 'E02001576',
        '6JY' => 'E02001576',
        '6JZ' => 'E02001576',
        '6LA' => 'E02001576',
        '6LB' => 'E02001576',
        '6LD' => 'E02001576',
        '6LE' => 'E02001576',
        '6LF' => 'E02001576',
        '6LG' => 'E02001576',
        '6LH' => 'E02001576',
        '6LJ' => 'E02001576',
        '6LL' => 'E02001576',
        '6LN' => 'E02001576',
        '6LP' => 'E02001576',
        '6LQ' => 'E02001576',
        '6LR' => 'E02001576',
        '6LS' => 'E02001576',
        '6LT' => 'E02001576',
        '6LU' => 'E02001576',
        '6LW' => 'E02001576',
        '6LX' => 'E02001576',
        '6LZ' => 'E02001576',
        '6NA' => 'E02001576',
        '6NB' => 'E02001576',
        '6NE' => 'E02001576',
        '6NF' => 'E02001576',
        '6NG' => 'E02001576',
        '6NH' => 'E02001576',
        '6NJ' => 'E02001576',
        '6NL' => 'E02001576',
        '6NN' => 'E02001576',
        '6NP' => 'E02001576',
        '6NQ' => 'E02001576',
        '6NR' => 'E02001576',
        '6NS' => 'E02001576',
        '6NT' => 'E02001576',
        '6NU' => 'E02001576',
        '6NW' => 'E02001576',
        '6NX' => 'E02001576',
        '6NY' => 'E02001576',
        '6PA' => 'E02001576',
        '6PB' => 'E02001576',
        '6PD' => 'E02001576',
        '6PE' => 'E02001576',
        '6PF' => 'E02001576',
        '6PG' => 'E02001576',
        '6PH' => 'E02001576',
        '6PJ' => 'E02001576',
        '6PL' => 'E02001576',
        '6PN' => 'E02001576',
        '6PP' => 'E02001576',
        '6PQ' => 'E02001576',
        '6PR' => 'E02001576',
        '6PS' => 'E02001576',
        '6PT' => 'E02001576',
        '6PU' => 'E02001576',
        '6PW' => 'E02001576',
        '6PX' => 'E02001576',
        '6PY' => 'E02001576',
        '6PZ' => 'E02001576',
        '6QA' => 'E02001576',
        '6QB' => 'E02001576',
        '6QD' => 'E02001576',
        '6QE' => 'E02001576',
        '6QF' => 'E02001576',
        '6QG' => 'E02001576',
        '6QH' => 'E02001576',
        '6QJ' => 'E02001576',
        '6QL' => 'E02001576',
        '6QN' => 'E02001576',
        '6QP' => 'E02001576',
        '6QQ' => 'E02001576',
        '6QR' => 'E02001576',
        '6QS' => 'E02001576',
        '6QT' => 'E02001576',
        '6QU' => 'E02001576',
        '6QW' => 'E02001576',
        '6QX' => 'E02001576',
        '6QY' => 'E02001576',
        '6QZ' => 'E02001576',
        '6RA' => 'E02001576',
        '6RB' => 'E02001576',
        '6RD' => 'E02001576',
        '6RE' => 'E02001576',
        '6RF' => 'E02001576',
        '6RG' => 'E02001576',
        '6RH' => 'E02001576',
        '6RJ' => 'E02001576',
        '6RL' => 'E02001576',
        '6RN' => 'E02001576',
        '6RP' => 'E02001576',
        '6RQ' => 'E02001576',
        '6RR' => 'E02001576',
        '6RS' => 'E02001576',
        '6RT' => 'E02001576',
        '6RU' => 'E02001576',
        '6RW' => 'E02001576',
        '6RX' => 'E02001576',
        '6RY' => 'E02001576',
        '6RZ' => 'E02001576',
        '6SA' => 'E02001576',
        '6SB' => 'E02001576',
        '6SD' => 'E02001576',
        '6SE' => 'E02001576',
        '6SF' => 'E02001576',
        '6SG' => 'E02001576',
        '6SH' => 'E02001576',
        '6SJ' => 'E02001576',
        '6SL' => 'E02001576',
        '6SN' => 'E02001576',
        '6SP' => 'E02001576',
        '6SQ' => 'E02001576',
        '6SR' => 'E02001576',
        '6SS' => 'E02001576',
        '6ST' => 'E02001576',
        '6SU' => 'E02001576',
        '6SW' => 'E02001576',
        '6SY' => 'E02001576',
        '6SZ' => 'E02001560',
        '6TA' => 'E02001576',
        '6TB' => 'E02001576',
        '6TD' => 'E02001576',
        '6TE' => 'E02001576',
        '6TF' => 'E02001576',
        '6TG' => 'E02001576',
        '6TH' => 'E02001576',
        '6TJ' => 'E02001576',
        '6TL' => 'E02001576',
        '6TN' => 'E02001560',
        '6TP' => 'E02001576',
        '6TQ' => 'E02001576',
        '6WA' => 'E02001560',
        '6WB' => 'E02001560',
        '6WD' => 'E02001576',
        '6WE' => 'E02001576',
        '6WF' => 'E02001576',
        '6WH' => 'E02001576',
        '6WJ' => 'E02001576',
        '6WL' => 'E02001576',
        '6WN' => 'E02001576',
        '6WP' => 'E02001576',
        '6WQ' => 'E02001576',
        '6WR' => 'E02001576',
        '6WS' => 'E02001576',
        '6WT' => 'E02001576',
        '6WU' => 'E02001576',
        '6WW' => 'E02001576',
        '6WX' => 'E02001576',
        '6WY' => 'E02001560',
        '6WZ' => 'E02001576',
        '6XA' => 'E02001576',
        '6XB' => 'E02001576',
        '6XD' => 'E02001576',
        '6XE' => 'E02001576',
        '6XF' => 'E02001576',
        '6XH' => 'E02001576',
        '6XJ' => 'E02001576',
        '6XL' => 'E02001576',
        '6XN' => 'E02001576',
        '6XP' => 'E02001576',
        '6XQ' => 'E02001576',
        '6XS' => 'E02001576',
        '6XT' => 'E02001576',
        '6YZ' => 'E02001576',
        '6ZT' => 'E02001576',
        '6ZW' => 'E02001576',
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