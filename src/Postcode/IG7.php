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
final class IG7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02000752',
        '4AB' => 'E02000752',
        '4AD' => 'E02000752',
        '4AE' => 'E02000752',
        '4AF' => 'E02000752',
        '4AG' => 'E02000752',
        '4AH' => 'E02000752',
        '4AJ' => 'E02000752',
        '4AL' => 'E02000752',
        '4AN' => 'E02000752',
        '4AP' => 'E02000752',
        '4AQ' => 'E02000752',
        '4AR' => 'E02000752',
        '4AS' => 'E02000752',
        '4AT' => 'E02000752',
        '4AU' => 'E02000752',
        '4AW' => 'E02000752',
        '4AX' => 'E02000752',
        '4AY' => 'E02000752',
        '4AZ' => 'E02000752',
        '4BA' => 'E02000752',
        '4BB' => 'E02000751',
        '4BD' => 'E02000753',
        '4BE' => 'E02000753',
        '4BF' => 'E02000752',
        '4BG' => 'E02000751',
        '4BH' => 'E02000751',
        '4BJ' => 'E02004543',
        '4BL' => 'E02000753',
        '4BN' => 'E02000753',
        '4BP' => 'E02000753',
        '4BQ' => 'E02000753',
        '4BS' => 'E02000753',
        '4BT' => 'E02000753',
        '4BU' => 'E02000753',
        '4BW' => 'E02000753',
        '4BX' => 'E02000753',
        '4BY' => 'E02000753',
        '4BZ' => 'E02000753',
        '4DA' => 'E02000753',
        '4DB' => 'E02000752',
        '4DD' => 'E02000752',
        '4DE' => 'E02000752',
        '4DF' => 'E02000752',
        '4DG' => 'E02000752',
        '4DH' => 'E02000752',
        '4DJ' => 'E02000752',
        '4DL' => 'E02000752',
        '4DN' => 'E02000752',
        '4DP' => 'E02000752',
        '4DQ' => 'E02000752',
        '4DR' => 'E02000753',
        '4DS' => 'E02000753',
        '4DT' => 'E02000753',
        '4DU' => 'E02000753',
        '4DW' => 'E02000752',
        '4DX' => 'E02000753',
        '4DY' => 'E02000753',
        '4DZ' => 'E02000753',
        '4EA' => 'E02000753',
        '4EB' => 'E02000753',
        '4ED' => 'E02000752',
        '4EE' => 'E02000752',
        '4EF' => 'E02000752',
        '4EG' => 'E02000752',
        '4EH' => 'E02000753',
        '4EJ' => 'E02000753',
        '4EL' => 'E02000753',
        '4EN' => 'E02000753',
        '4EP' => 'E02000753',
        '4EQ' => 'E02000753',
        '4ER' => 'E02000753',
        '4ES' => 'E02000753',
        '4ET' => 'E02000753',
        '4EU' => 'E02000753',
        '4EW' => 'E02000753',
        '4EX' => 'E02000753',
        '4EY' => 'E02000753',
        '4EZ' => 'E02000753',
        '4FA' => 'E02000752',
        '4FB' => 'E02004543',
        '4FD' => 'E02000752',
        '4FE' => 'E02000752',
        '4FF' => 'E02000752',
        '4FG' => 'E02000752',
        '4FH' => 'E02000752',
        '4FJ' => 'E02000752',
        '4FL' => 'E02000752',
        '4FN' => 'E02000752',
        '4FP' => 'E02000752',
        '4FQ' => 'E02000752',
        '4FR' => 'E02000752',
        '4FS' => 'E02000753',
        '4FT' => 'E02000752',
        '4FU' => 'E02000752',
        '4FW' => 'E02000752',
        '4FX' => 'E02000752',
        '4FY' => 'E02000752',
        '4FZ' => 'E02000752',
        '4GD' => 'E02000751',
        '4GE' => 'E02000752',
        '4GF' => 'E02000752',
        '4GG' => 'E02000751',
        '4GH' => 'E02004543',
        '4GJ' => 'E02004543',
        '4GL' => 'E02004543',
        '4GN' => 'E02004543',
        '4GP' => 'E02004543',
        '4GQ' => 'E02004543',
        '4GR' => 'E02000752',
        '4GS' => 'E02000752',
        '4GT' => 'E02000751',
        '4GU' => 'E02000752',
        '4GX' => 'E02000751',
        '4GY' => 'E02000752',
        '4GZ' => 'E02000753',
        '4HA' => 'E02000753',
        '4HB' => 'E02000753',
        '4HD' => 'E02000753',
        '4HE' => 'E02000753',
        '4HF' => 'E02000753',
        '4HG' => 'E02000753',
        '4HH' => 'E02000753',
        '4HJ' => 'E02000753',
        '4HL' => 'E02000753',
        '4HN' => 'E02000753',
        '4HP' => 'E02000753',
        '4HQ' => 'E02000753',
        '4HR' => 'E02000753',
        '4HT' => 'E02000753',
        '4HU' => 'E02000752',
        '4HW' => 'E02000753',
        '4HX' => 'E02000752',
        '4HY' => 'E02000753',
        '4HZ' => 'E02000753',
        '4JB' => 'E02000753',
        '4JD' => 'E02000753',
        '4JE' => 'E02000753',
        '4JF' => 'E02000753',
        '4JG' => 'E02000753',
        '4JH' => 'E02000753',
        '4JJ' => 'E02000753',
        '4JL' => 'E02000753',
        '4JN' => 'E02000753',
        '4JQ' => 'E02000753',
        '4JU' => 'E02000753',
        '4JX' => 'E02004543',
        '4JY' => 'E02000753',
        '4LH' => 'E02000752',
        '4LJ' => 'E02000752',
        '4LN' => 'E02000753',
        '4LP' => 'E02000752',
        '4LR' => 'E02000753',
        '4LS' => 'E02000752',
        '4LT' => 'E02000752',
        '4LU' => 'E02000752',
        '4LW' => 'E02000753',
        '4LX' => 'E02000752',
        '4LY' => 'E02000752',
        '4LZ' => 'E02000752',
        '4NA' => 'E02000752',
        '4NB' => 'E02000752',
        '4ND' => 'E02000752',
        '4NE' => 'E02000752',
        '4NF' => 'E02000752',
        '4NG' => 'E02000752',
        '4NH' => 'E02000752',
        '4NJ' => 'E02000752',
        '4NL' => 'E02000752',
        '4NQ' => 'E02000752',
        '4NY' => 'E02000752',
        '4NZ' => 'E02000752',
        '4PA' => 'E02000752',
        '4PB' => 'E02000753',
        '4PD' => 'E02000753',
        '4PE' => 'E02000753',
        '4PF' => 'E02000753',
        '4PG' => 'E02000753',
        '4PH' => 'E02000753',
        '4PJ' => 'E02000753',
        '4PL' => 'E02000753',
        '4PN' => 'E02000753',
        '4PP' => 'E02000753',
        '4PQ' => 'E02000753',
        '4PR' => 'E02000753',
        '4PW' => 'E02000753',
        '4QA' => 'E02004542',
        '4QB' => 'E02004542',
        '4QD' => 'E02004542',
        '4QE' => 'E02004542',
        '4QF' => 'E02004542',
        '4QG' => 'E02004542',
        '4QH' => 'E02004542',
        '4QJ' => 'E02004542',
        '4QL' => 'E02000752',
        '4QN' => 'E02000752',
        '4QP' => 'E02000752',
        '4QQ' => 'E02004542',
        '4QR' => 'E02000752',
        '4QS' => 'E02000752',
        '4QT' => 'E02000752',
        '4QU' => 'E02000752',
        '4QW' => 'E02000752',
        '4QX' => 'E02000752',
        '4QY' => 'E02000752',
        '4QZ' => 'E02000752',
        '4WA' => 'E02000752',
        '4WB' => 'E02000752',
        '4WD' => 'E02000751',
        '4WF' => 'E02000751',
        '4WG' => 'E02000751',
        '4WZ' => 'E02000751',
        '4XZ' => 'E02000751',
        '4YZ' => 'E02000753',
        '5AA' => 'E02004542',
        '5AB' => 'E02004542',
        '5AD' => 'E02004542',
        '5AE' => 'E02004542',
        '5AF' => 'E02004542',
        '5AG' => 'E02000751',
        '5AH' => 'E02004542',
        '5AJ' => 'E02004543',
        '5AL' => 'E02004542',
        '5AN' => 'E02004543',
        '5AP' => 'E02004543',
        '5AQ' => 'E02000751',
        '5AR' => 'E02004542',
        '5AS' => 'E02004542',
        '5AT' => 'E02004542',
        '5AU' => 'E02004542',
        '5AW' => 'E02004543',
        '5AX' => 'E02004542',
        '5AY' => 'E02004542',
        '5AZ' => 'E02004542',
        '5BA' => 'E02004542',
        '5BB' => 'E02004542',
        '5BD' => 'E02004542',
        '5BE' => 'E02004542',
        '5BF' => 'E02000751',
        '5BG' => 'E02004542',
        '5BH' => 'E02004542',
        '5BJ' => 'E02004542',
        '5BL' => 'E02004542',
        '5BN' => 'E02004542',
        '5BP' => 'E02004542',
        '5BQ' => 'E02004542',
        '5BS' => 'E02004542',
        '5BT' => 'E02004542',
        '5BU' => 'E02004542',
        '5BW' => 'E02004542',
        '5BX' => 'E02004542',
        '5BY' => 'E02004542',
        '5BZ' => 'E02000751',
        '5DA' => 'E02004543',
        '5DB' => 'E02004543',
        '5DD' => 'E02004543',
        '5DE' => 'E02004543',
        '5DF' => 'E02004542',
        '5DG' => 'E02004543',
        '5DH' => 'E02004543',
        '5DJ' => 'E02004543',
        '5DL' => 'E02004543',
        '5DN' => 'E02004543',
        '5DP' => 'E02004543',
        '5DQ' => 'E02004543',
        '5DR' => 'E02004543',
        '5DS' => 'E02004543',
        '5DT' => 'E02000751',
        '5DU' => 'E02004543',
        '5DW' => 'E02004543',
        '5DX' => 'E02004543',
        '5DY' => 'E02004543',
        '5DZ' => 'E02004543',
        '5EA' => 'E02004543',
        '5EB' => 'E02004543',
        '5ED' => 'E02004543',
        '5EE' => 'E02000751',
        '5EF' => 'E02004542',
        '5EG' => 'E02004543',
        '5EH' => 'E02004543',
        '5EJ' => 'E02004543',
        '5EL' => 'E02004543',
        '5EN' => 'E02004543',
        '5EP' => 'E02004543',
        '5ER' => 'E02004543',
        '5ES' => 'E02004543',
        '5ET' => 'E02004543',
        '5EU' => 'E02004543',
        '5EW' => 'E02004543',
        '5EX' => 'E02004543',
        '5EY' => 'E02004543',
        '5EZ' => 'E02004543',
        '5FX' => 'E02000751',
        '5FZ' => 'E02000751',
        '5GE' => 'E02004543',
        '5GQ' => 'E02000751',
        '5GR' => 'E02000751',
        '5GT' => 'E02004543',
        '5HA' => 'E02004543',
        '5HB' => 'E02004543',
        '5HD' => 'E02004543',
        '5HE' => 'E02004543',
        '5HF' => 'E02004543',
        '5HG' => 'E02004543',
        '5HH' => 'E02004543',
        '5HJ' => 'E02004543',
        '5HL' => 'E02004543',
        '5HQ' => 'E02004543',
        '5HX' => 'E02004543',
        '5HY' => 'E02004543',
        '5HZ' => 'E02004543',
        '5JA' => 'E02004543',
        '5JB' => 'E02004543',
        '5JD' => 'E02004543',
        '5JE' => 'E02004543',
        '5JF' => 'E02004543',
        '5JG' => 'E02000756',
        '5JH' => 'E02000756',
        '5JJ' => 'E02004543',
        '5JL' => 'E02004543',
        '5JN' => 'E02004543',
        '5JP' => 'E02004543',
        '5JQ' => 'E02004543',
        '5JR' => 'E02004543',
        '5JS' => 'E02004543',
        '5JT' => 'E02004543',
        '5JU' => 'E02004543',
        '5JW' => 'E02004543',
        '5JX' => 'E02004543',
        '5JY' => 'E02004543',
        '5JZ' => 'E02004543',
        '5LA' => 'E02004543',
        '5LB' => 'E02004543',
        '5LD' => 'E02004543',
        '5LE' => 'E02004543',
        '5LF' => 'E02004543',
        '5LG' => 'E02004543',
        '5LH' => 'E02004543',
        '5LL' => 'E02004543',
        '5LN' => 'E02004543',
        '5LP' => 'E02004543',
        '5LR' => 'E02004543',
        '5LS' => 'E02004543',
        '5LT' => 'E02004543',
        '5LU' => 'E02004543',
        '5LW' => 'E02004543',
        '5LX' => 'E02004543',
        '5LY' => 'E02004543',
        '5LZ' => 'E02004543',
        '5NA' => 'E02004543',
        '5NB' => 'E02004543',
        '5ND' => 'E02004543',
        '5NE' => 'E02004543',
        '5NF' => 'E02004543',
        '5NG' => 'E02004543',
        '5NH' => 'E02004543',
        '5NJ' => 'E02004543',
        '5NL' => 'E02004543',
        '5NN' => 'E02004543',
        '5NP' => 'E02004543',
        '5NQ' => 'E02004543',
        '5NR' => 'E02004543',
        '5NS' => 'E02004543',
        '5NT' => 'E02004543',
        '5NU' => 'E02004543',
        '5NW' => 'E02004543',
        '5NX' => 'E02004543',
        '5NY' => 'E02004543',
        '5NZ' => 'E02004543',
        '5PA' => 'E02004543',
        '5PD' => 'E02004542',
        '5PE' => 'E02004542',
        '5PF' => 'E02004543',
        '5PG' => 'E02004543',
        '5PH' => 'E02004543',
        '5PJ' => 'E02004543',
        '5PL' => 'E02004543',
        '5PN' => 'E02004543',
        '5PP' => 'E02004543',
        '5PQ' => 'E02004543',
        '5PR' => 'E02004543',
        '5PS' => 'E02004543',
        '5PT' => 'E02004543',
        '5PU' => 'E02004543',
        '5PW' => 'E02004543',
        '5PX' => 'E02004543',
        '5PY' => 'E02004543',
        '5PZ' => 'E02004543',
        '5QA' => 'E02004543',
        '5QB' => 'E02004543',
        '5QD' => 'E02004543',
        '5QE' => 'E02004543',
        '5QG' => 'E02004543',
        '5QH' => 'E02004543',
        '5QJ' => 'E02004543',
        '5QL' => 'E02004543',
        '5QN' => 'E02004543',
        '5QP' => 'E02004543',
        '5QQ' => 'E02004543',
        '5QR' => 'E02004543',
        '5QS' => 'E02004543',
        '5QT' => 'E02004543',
        '5QU' => 'E02004543',
        '5QW' => 'E02004543',
        '5QX' => 'E02004543',
        '5QY' => 'E02004543',
        '5QZ' => 'E02004543',
        '5RA' => 'E02004543',
        '5RB' => 'E02004543',
        '5RD' => 'E02004543',
        '5RE' => 'E02004543',
        '5RF' => 'E02004543',
        '5RG' => 'E02004543',
        '5RH' => 'E02004543',
        '5RJ' => 'E02004543',
        '5RL' => 'E02004543',
        '5RN' => 'E02004543',
        '5RQ' => 'E02000751',
        '5RR' => 'E02000751',
        '5RS' => 'E02004543',
        '5RT' => 'E02004543',
        '5WA' => 'E02000751',
        '5WB' => 'E02000751',
        '5WD' => 'E02000751',
        '5WE' => 'E02000751',
        '5WF' => 'E02000751',
        '5WG' => 'E02000751',
        '5WH' => 'E02004537',
        '5WJ' => 'E02000751',
        '5WL' => 'E02000751',
        '5WN' => 'E02000751',
        '5WP' => 'E02000751',
        '5WQ' => 'E02000751',
        '5WR' => 'E02000751',
        '5WT' => 'E02000751',
        '5WW' => 'E02000751',
        '5WX' => 'E02000751',
        '5WY' => 'E02000751',
        '5WZ' => 'E02004537',
        '5XA' => 'E02000751',
        '5XT' => 'E02000751',
        '5YP' => 'E02004537',
        '5YT' => 'E02000751',
        '5YZ' => 'E02004543',
        '5ZY' => 'E02000751',
        '6AA' => 'E02004542',
        '6AB' => 'E02004542',
        '6AD' => 'E02004542',
        '6AE' => 'E02000751',
        '6AF' => 'E02004542',
        '6AG' => 'E02004542',
        '6AH' => 'E02004542',
        '6AJ' => 'E02004542',
        '6AL' => 'E02004542',
        '6AN' => 'E02004542',
        '6AP' => 'E02004542',
        '6AQ' => 'E02004542',
        '6AR' => 'E02004542',
        '6AS' => 'E02004542',
        '6AT' => 'E02000753',
        '6AU' => 'E02000751',
        '6AW' => 'E02004542',
        '6AX' => 'E02004542',
        '6AY' => 'E02004542',
        '6AZ' => 'E02004542',
        '6BA' => 'E02004542',
        '6BB' => 'E02000751',
        '6BD' => 'E02004542',
        '6BE' => 'E02004542',
        '6BF' => 'E02004542',
        '6BG' => 'E02004542',
        '6BH' => 'E02004542',
        '6BJ' => 'E02004542',
        '6BL' => 'E02004542',
        '6BN' => 'E02004542',
        '6BP' => 'E02004537',
        '6BQ' => 'E02004542',
        '6BS' => 'E02004542',
        '6BT' => 'E02004542',
        '6BU' => 'E02000751',
        '6BW' => 'E02000751',
        '6BX' => 'E02004542',
        '6BY' => 'E02004542',
        '6BZ' => 'E02004542',
        '6DA' => 'E02004542',
        '6DB' => 'E02004542',
        '6DD' => 'E02004542',
        '6DE' => 'E02004542',
        '6DF' => 'E02004542',
        '6DG' => 'E02004542',
        '6DH' => 'E02004536',
        '6DJ' => 'E02004542',
        '6DL' => 'E02004542',
        '6DN' => 'E02004542',
        '6DP' => 'E02004542',
        '6DQ' => 'E02004542',
        '6DR' => 'E02004542',
        '6DS' => 'E02004542',
        '6DT' => 'E02000751',
        '6DU' => 'E02004542',
        '6DW' => 'E02004542',
        '6DX' => 'E02004542',
        '6DY' => 'E02004542',
        '6DZ' => 'E02004542',
        '6EA' => 'E02000751',
        '6EB' => 'E02004542',
        '6ED' => 'E02004542',
        '6EE' => 'E02004542',
        '6EF' => 'E02004542',
        '6EG' => 'E02004542',
        '6EH' => 'E02004542',
        '6EJ' => 'E02004542',
        '6EL' => 'E02004542',
        '6EN' => 'E02004542',
        '6EP' => 'E02004542',
        '6EQ' => 'E02004542',
        '6ER' => 'E02004542',
        '6ES' => 'E02004542',
        '6ET' => 'E02004542',
        '6EU' => 'E02004542',
        '6EW' => 'E02004542',
        '6EX' => 'E02004542',
        '6EY' => 'E02004542',
        '6EZ' => 'E02004542',
        '6FZ' => 'E02000751',
        '6GD' => 'E02000751',
        '6GG' => 'E02004542',
        '6GZ' => 'E02000751',
        '6HA' => 'E02004542',
        '6HB' => 'E02004542',
        '6HF' => 'E02004542',
        '6HG' => 'E02004542',
        '6HH' => 'E02004542',
        '6HJ' => 'E02004542',
        '6HL' => 'E02000753',
        '6HN' => 'E02000753',
        '6HP' => 'E02000753',
        '6HR' => 'E02000753',
        '6HS' => 'E02000753',
        '6HT' => 'E02000753',
        '6HU' => 'E02000753',
        '6HW' => 'E02000753',
        '6HX' => 'E02004542',
        '6HY' => 'E02004542',
        '6HZ' => 'E02004542',
        '6JA' => 'E02004542',
        '6JB' => 'E02004542',
        '6JD' => 'E02004542',
        '6JE' => 'E02004542',
        '6JF' => 'E02004542',
        '6JG' => 'E02004542',
        '6JH' => 'E02004542',
        '6JJ' => 'E02004542',
        '6JL' => 'E02004542',
        '6JN' => 'E02004542',
        '6JP' => 'E02004542',
        '6JQ' => 'E02004542',
        '6JR' => 'E02004542',
        '6JS' => 'E02004542',
        '6JT' => 'E02004542',
        '6JU' => 'E02004542',
        '6JW' => 'E02004542',
        '6JX' => 'E02004542',
        '6JY' => 'E02000751',
        '6JZ' => 'E02004542',
        '6LA' => 'E02004542',
        '6LF' => 'E02004542',
        '6LG' => 'E02004542',
        '6LH' => 'E02004542',
        '6LJ' => 'E02004542',
        '6LL' => 'E02004542',
        '6LN' => 'E02004542',
        '6LP' => 'E02004542',
        '6LQ' => 'E02004542',
        '6LR' => 'E02004542',
        '6LS' => 'E02004542',
        '6LT' => 'E02004542',
        '6LU' => 'E02004543',
        '6LW' => 'E02004542',
        '6LX' => 'E02004543',
        '6LY' => 'E02004542',
        '6LZ' => 'E02004542',
        '6NA' => 'E02004543',
        '6NB' => 'E02004542',
        '6ND' => 'E02004542',
        '6NE' => 'E02004543',
        '6NF' => 'E02004543',
        '6NG' => 'E02000753',
        '6NH' => 'E02000753',
        '6NN' => 'E02004542',
        '6NQ' => 'E02000753',
        '6NT' => 'E02004542',
        '6NU' => 'E02004542',
        '6NX' => 'E02004542',
        '6NY' => 'E02004542',
        '6NZ' => 'E02004542',
        '6PA' => 'E02004542',
        '6PB' => 'E02004542',
        '6PD' => 'E02004542',
        '6PE' => 'E02004542',
        '6PF' => 'E02004542',
        '6PG' => 'E02004542',
        '6PH' => 'E02004542',
        '6PJ' => 'E02004542',
        '6PL' => 'E02004542',
        '6PN' => 'E02004542',
        '6PP' => 'E02004542',
        '6PQ' => 'E02004542',
        '6PR' => 'E02004542',
        '6PS' => 'E02004542',
        '6PT' => 'E02004542',
        '6PU' => 'E02004542',
        '6PW' => 'E02004542',
        '6PX' => 'E02004542',
        '6PY' => 'E02004542',
        '6PZ' => 'E02004542',
        '6QA' => 'E02004542',
        '6QB' => 'E02004542',
        '6QD' => 'E02004542',
        '6QE' => 'E02004542',
        '6QF' => 'E02004542',
        '6QG' => 'E02004542',
        '6QJ' => 'E02004542',
        '6QN' => 'E02004542',
        '6QQ' => 'E02004542',
        '6QT' => 'E02004542',
        '6QU' => 'E02004542',
        '6QX' => 'E02004542',
        '6QZ' => 'E02004542',
        '6SR' => 'E02000751',
        '6WA' => 'E02004537',
        '6WB' => 'E02000751',
        '6WD' => 'E02000751',
        '6WE' => 'E02000751',
        '6WF' => 'E02000751',
        '6WG' => 'E02000751',
        '6WJ' => 'E02000751',
        '6WN' => 'E02000751',
        '6WP' => 'E02000751',
        '6WQ' => 'E02000751',
        '6WT' => 'E02000751',
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
