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
final class RM6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02000769',
        '4AB' => 'E02000769',
        '4AD' => 'E02000769',
        '4AE' => 'E02000769',
        '4AF' => 'E02000769',
        '4AG' => 'E02000769',
        '4AH' => 'E02000769',
        '4AJ' => 'E02000769',
        '4AL' => 'E02000769',
        '4AN' => 'E02000769',
        '4AP' => 'E02000769',
        '4AQ' => 'E02000769',
        '4AR' => 'E02000769',
        '4AS' => 'E02000769',
        '4AT' => 'E02000769',
        '4AU' => 'E02000769',
        '4AW' => 'E02000769',
        '4AX' => 'E02000769',
        '4AY' => 'E02000769',
        '4AZ' => 'E02000769',
        '4BA' => 'E02000769',
        '4BB' => 'E02000769',
        '4BD' => 'E02000769',
        '4BE' => 'E02000003',
        '4BF' => 'E02000003',
        '4BG' => 'E02000769',
        '4BH' => 'E02000769',
        '4BJ' => 'E02000769',
        '4BL' => 'E02000003',
        '4BN' => 'E02000769',
        '4BP' => 'E02000003',
        '4BQ' => 'E02000769',
        '4BS' => 'E02000003',
        '4BT' => 'E02000769',
        '4BU' => 'E02006800',
        '4BW' => 'E02000769',
        '4BX' => 'E02000480',
        '4BY' => 'E02000769',
        '4BZ' => 'E02000480',
        '4DA' => 'E02000772',
        '4DB' => 'E02000769',
        '4DD' => 'E02000769',
        '4DE' => 'E02000772',
        '4DF' => 'E02000480',
        '4DG' => 'E02000769',
        '4DH' => 'E02000772',
        '4DJ' => 'E02000772',
        '4DL' => 'E02000769',
        '4DN' => 'E02000769',
        '4DP' => 'E02000769',
        '4DQ' => 'E02000772',
        '4DR' => 'E02000480',
        '4DS' => 'E02000769',
        '4DT' => 'E02000769',
        '4DU' => 'E02000769',
        '4DW' => 'E02000769',
        '4DX' => 'E02000769',
        '4DY' => 'E02000772',
        '4DZ' => 'E02000480',
        '4EA' => 'E02000769',
        '4EB' => 'E02000769',
        '4ED' => 'E02000769',
        '4EE' => 'E02000769',
        '4EF' => 'E02000769',
        '4EG' => 'E02000480',
        '4EH' => 'E02000769',
        '4EJ' => 'E02000769',
        '4EL' => 'E02000769',
        '4EN' => 'E02000769',
        '4EP' => 'E02000480',
        '4EQ' => 'E02000769',
        '4ER' => 'E02000769',
        '4ES' => 'E02000480',
        '4ET' => 'E02000769',
        '4EU' => 'E02000769',
        '4EW' => 'E02000480',
        '4EX' => 'E02000769',
        '4EY' => 'E02000769',
        '4EZ' => 'E02000769',
        '4FB' => 'E02000769',
        '4FD' => 'E02000769',
        '4FE' => 'E02000769',
        '4FF' => 'E02000769',
        '4FG' => 'E02000769',
        '4FH' => 'E02000772',
        '4FJ' => 'E02000769',
        '4FL' => 'E02000769',
        '4FN' => 'E02000769',
        '4FP' => 'E02000003',
        '4FQ' => 'E02000769',
        '4FR' => 'E02000769',
        '4FS' => 'E02000769',
        '4FT' => 'E02000769',
        '4FW' => 'E02000769',
        '4GD' => 'E02000480',
        '4GG' => 'E02000480',
        '4GH' => 'E02000480',
        '4GR' => 'E02000769',
        '4GT' => 'E02000769',
        '4GZ' => 'E02000480',
        '4HA' => 'E02000772',
        '4HB' => 'E02000769',
        '4HD' => 'E02000769',
        '4HH' => 'E02000769',
        '4HJ' => 'E02000769',
        '4HL' => 'E02000772',
        '4HP' => 'E02000769',
        '4HR' => 'E02000772',
        '4HS' => 'E02000772',
        '4HT' => 'E02000772',
        '4HU' => 'E02000769',
        '4HX' => 'E02000772',
        '4HY' => 'E02000772',
        '4HZ' => 'E02000772',
        '4JA' => 'E02000769',
        '4JB' => 'E02000769',
        '4JD' => 'E02000769',
        '4JE' => 'E02000769',
        '4JF' => 'E02000769',
        '4JH' => 'E02000769',
        '4JJ' => 'E02000769',
        '4JL' => 'E02000772',
        '4JN' => 'E02000480',
        '4JP' => 'E02000769',
        '4JQ' => 'E02000480',
        '4JR' => 'E02000772',
        '4JS' => 'E02000772',
        '4JT' => 'E02000480',
        '4JX' => 'E02000769',
        '4JY' => 'E02000480',
        '4JZ' => 'E02000480',
        '4LA' => 'E02000769',
        '4LB' => 'E02000769',
        '4LD' => 'E02000769',
        '4LH' => 'E02000769',
        '4LJ' => 'E02000769',
        '4LL' => 'E02000769',
        '4LN' => 'E02000769',
        '4LP' => 'E02000769',
        '4LR' => 'E02000769',
        '4LS' => 'E02000769',
        '4LT' => 'E02000769',
        '4LU' => 'E02000769',
        '4LW' => 'E02000769',
        '4LX' => 'E02000769',
        '4LY' => 'E02000769',
        '4LZ' => 'E02000003',
        '4NA' => 'E02000769',
        '4NB' => 'E02000769',
        '4ND' => 'E02000769',
        '4NE' => 'E02000769',
        '4NH' => 'E02000769',
        '4NJ' => 'E02000769',
        '4NL' => 'E02000769',
        '4NP' => 'E02000769',
        '4NR' => 'E02000769',
        '4NS' => 'E02000769',
        '4NT' => 'E02000769',
        '4NU' => 'E02000769',
        '4NX' => 'E02000769',
        '4PA' => 'E02000769',
        '4PB' => 'E02000769',
        '4PD' => 'E02000769',
        '4PE' => 'E02000769',
        '4PF' => 'E02000769',
        '4PG' => 'E02000769',
        '4PH' => 'E02000769',
        '4PJ' => 'E02000772',
        '4PL' => 'E02000769',
        '4PN' => 'E02000769',
        '4PP' => 'E02000772',
        '4PQ' => 'E02000769',
        '4PR' => 'E02000772',
        '4PS' => 'E02000772',
        '4PT' => 'E02000772',
        '4PU' => 'E02000772',
        '4PW' => 'E02000769',
        '4PX' => 'E02000772',
        '4PY' => 'E02000769',
        '4PZ' => 'E02000769',
        '4QA' => 'E02000772',
        '4QB' => 'E02000772',
        '4QD' => 'E02000772',
        '4QF' => 'E02000772',
        '4QH' => 'E02000772',
        '4QJ' => 'E02000772',
        '4QL' => 'E02000772',
        '4QP' => 'E02000772',
        '4QR' => 'E02000769',
        '4QS' => 'E02000772',
        '4QT' => 'E02000772',
        '4QU' => 'E02000772',
        '4QW' => 'E02000480',
        '4QX' => 'E02000772',
        '4RA' => 'E02000772',
        '4RB' => 'E02000772',
        '4RD' => 'E02000772',
        '4RE' => 'E02000772',
        '4RH' => 'E02000772',
        '4RJ' => 'E02000772',
        '4RL' => 'E02000772',
        '4RP' => 'E02000772',
        '4RR' => 'E02000769',
        '4RS' => 'E02000772',
        '4RT' => 'E02000769',
        '4RU' => 'E02000769',
        '4SA' => 'E02000772',
        '4SB' => 'E02000772',
        '4SD' => 'E02000772',
        '4SH' => 'E02000772',
        '4SJ' => 'E02000772',
        '4SL' => 'E02000772',
        '4SN' => 'E02000772',
        '4SP' => 'E02000772',
        '4SR' => 'E02000772',
        '4SS' => 'E02000772',
        '4ST' => 'E02000769',
        '4SU' => 'E02000769',
        '4SW' => 'E02000772',
        '4SX' => 'E02000769',
        '4TA' => 'E02000769',
        '4TB' => 'E02000769',
        '4TD' => 'E02000769',
        '4TH' => 'E02000769',
        '4TJ' => 'E02000769',
        '4TL' => 'E02000769',
        '4TP' => 'E02000769',
        '4TR' => 'E02000769',
        '4TS' => 'E02000769',
        '4TT' => 'E02000769',
        '4TU' => 'E02000769',
        '4TY' => 'E02000480',
        '4UA' => 'E02000769',
        '4UB' => 'E02000769',
        '4UD' => 'E02000769',
        '4UE' => 'E02000769',
        '4UF' => 'E02000769',
        '4UG' => 'E02000769',
        '4UH' => 'E02000769',
        '4UJ' => 'E02000769',
        '4UL' => 'E02000769',
        '4UN' => 'E02000769',
        '4UP' => 'E02000769',
        '4UQ' => 'E02000769',
        '4UR' => 'E02000769',
        '4US' => 'E02000769',
        '4UT' => 'E02000769',
        '4UU' => 'E02000769',
        '4UW' => 'E02000769',
        '4UX' => 'E02000769',
        '4UZ' => 'E02000769',
        '4WA' => 'E02000769',
        '4WH' => 'E02000480',
        '4WJ' => 'E02000769',
        '4WN' => 'E02000769',
        '4WQ' => 'E02000769',
        '4WR' => 'E02000769',
        '4WS' => 'E02000480',
        '4WT' => 'E02000769',
        '4WW' => 'E02000480',
        '4WX' => 'E02000480',
        '4WY' => 'E02000480',
        '4WZ' => 'E02000769',
        '4XA' => 'E02000480',
        '4XB' => 'E02000769',
        '4XD' => 'E02000772',
        '4XE' => 'E02000769',
        '4XF' => 'E02000769',
        '4XG' => 'E02000769',
        '4XH' => 'E02000769',
        '4XJ' => 'E02000769',
        '4XL' => 'E02000772',
        '4XN' => 'E02000769',
        '4XP' => 'E02000769',
        '4XQ' => 'E02000480',
        '4XS' => 'E02000769',
        '4XT' => 'E02000769',
        '4XU' => 'E02000772',
        '4XX' => 'E02000769',
        '4XZ' => 'E02000480',
        '4YA' => 'E02000769',
        '4YB' => 'E02000769',
        '4YD' => 'E02000769',
        '4YE' => 'E02000480',
        '4YG' => 'E02000769',
        '4YH' => 'E02000769',
        '4YJ' => 'E02000769',
        '4YL' => 'E02000769',
        '4YN' => 'E02000769',
        '4YP' => 'E02000769',
        '4YQ' => 'E02000480',
        '4YR' => 'E02000769',
        '4YS' => 'E02000769',
        '4YT' => 'E02000769',
        '4YU' => 'E02000769',
        '4YX' => 'E02000769',
        '4ZA' => 'E02000480',
        '4ZB' => 'E02000769',
        '4ZE' => 'E02000769',
        '4ZQ' => 'E02000769',
        '4ZR' => 'E02000769',
        '5AA' => 'E02000769',
        '5AB' => 'E02000769',
        '5AD' => 'E02000769',
        '5AE' => 'E02000002',
        '5AF' => 'E02000769',
        '5AG' => 'E02000002',
        '5AH' => 'E02000769',
        '5AJ' => 'E02000769',
        '5AL' => 'E02000769',
        '5AN' => 'E02000002',
        '5AP' => 'E02000769',
        '5AR' => 'E02000769',
        '5AS' => 'E02000769',
        '5AT' => 'E02000769',
        '5AU' => 'E02000769',
        '5AW' => 'E02000002',
        '5AX' => 'E02000769',
        '5AY' => 'E02000769',
        '5AZ' => 'E02000480',
        '5BA' => 'E02000769',
        '5BB' => 'E02000769',
        '5BD' => 'E02000769',
        '5BE' => 'E02000769',
        '5BH' => 'E02000769',
        '5BJ' => 'E02000002',
        '5BL' => 'E02000002',
        '5BN' => 'E02000002',
        '5BP' => 'E02000002',
        '5BQ' => 'E02000480',
        '5BS' => 'E02000769',
        '5BT' => 'E02000769',
        '5BU' => 'E02000003',
        '5BW' => 'E02000480',
        '5BX' => 'E02000769',
        '5BY' => 'E02000480',
        '5BZ' => 'E02000002',
        '5DA' => 'E02000769',
        '5DB' => 'E02000769',
        '5DD' => 'E02000769',
        '5DE' => 'E02000002',
        '5DF' => 'E02000769',
        '5DG' => 'E02000480',
        '5DH' => 'E02000769',
        '5DJ' => 'E02000769',
        '5DL' => 'E02000769',
        '5DN' => 'E02000480',
        '5DP' => 'E02000769',
        '5DR' => 'E02000769',
        '5DS' => 'E02000769',
        '5DT' => 'E02000769',
        '5DU' => 'E02000769',
        '5DX' => 'E02000769',
        '5DZ' => 'E02000480',
        '5EA' => 'E02000769',
        '5EB' => 'E02000769',
        '5ED' => 'E02000769',
        '5EE' => 'E02000769',
        '5EF' => 'E02000769',
        '5EH' => 'E02000002',
        '5EJ' => 'E02000002',
        '5EL' => 'E02000002',
        '5EP' => 'E02000002',
        '5ER' => 'E02000002',
        '5ES' => 'E02000002',
        '5ET' => 'E02000002',
        '5EU' => 'E02000002',
        '5EX' => 'E02000002',
        '5EZ' => 'E02000480',
        '5FX' => 'E02000480',
        '5FZ' => 'E02000002',
        '5GX' => 'E02000002',
        '5HA' => 'E02000002',
        '5HB' => 'E02000002',
        '5HD' => 'E02000002',
        '5HH' => 'E02000002',
        '5HJ' => 'E02000002',
        '5HL' => 'E02000002',
        '5HP' => 'E02000002',
        '5HR' => 'E02000002',
        '5HS' => 'E02000002',
        '5HT' => 'E02000002',
        '5HU' => 'E02000002',
        '5HX' => 'E02000002',
        '5JA' => 'E02000002',
        '5JB' => 'E02000002',
        '5JD' => 'E02000763',
        '5JE' => 'E02000002',
        '5JF' => 'E02000002',
        '5JG' => 'E02000002',
        '5JH' => 'E02000002',
        '5JJ' => 'E02000002',
        '5JL' => 'E02000002',
        '5JN' => 'E02000002',
        '5JP' => 'E02000002',
        '5JR' => 'E02000002',
        '5JS' => 'E02000002',
        '5JT' => 'E02000002',
        '5JU' => 'E02000002',
        '5JW' => 'E02000002',
        '5JX' => 'E02000002',
        '5JY' => 'E02000002',
        '5LA' => 'E02000002',
        '5LB' => 'E02000002',
        '5LD' => 'E02000002',
        '5LG' => 'E02000480',
        '5LH' => 'E02000002',
        '5LJ' => 'E02000002',
        '5LL' => 'E02000002',
        '5LP' => 'E02000002',
        '5LR' => 'E02000002',
        '5LS' => 'E02000002',
        '5LT' => 'E02000002',
        '5LU' => 'E02000002',
        '5LX' => 'E02000002',
        '5LY' => 'E02000480',
        '5NA' => 'E02000002',
        '5NB' => 'E02000002',
        '5ND' => 'E02000002',
        '5NE' => 'E02000763',
        '5NF' => 'E02000763',
        '5NH' => 'E02000002',
        '5NJ' => 'E02000002',
        '5NL' => 'E02000002',
        '5NN' => 'E02000002',
        '5NP' => 'E02000002',
        '5NR' => 'E02000002',
        '5NS' => 'E02000002',
        '5NT' => 'E02000002',
        '5NU' => 'E02000002',
        '5NX' => 'E02000002',
        '5PD' => 'E02000002',
        '5PG' => 'E02000480',
        '5PH' => 'E02000002',
        '5PJ' => 'E02000002',
        '5PL' => 'E02000002',
        '5PP' => 'E02000002',
        '5PR' => 'E02000002',
        '5PS' => 'E02000002',
        '5PT' => 'E02000002',
        '5PU' => 'E02000002',
        '5PX' => 'E02000002',
        '5QA' => 'E02000002',
        '5QB' => 'E02000002',
        '5QD' => 'E02000002',
        '5QH' => 'E02000002',
        '5QJ' => 'E02000002',
        '5QL' => 'E02000002',
        '5QP' => 'E02000002',
        '5QR' => 'E02000002',
        '5QS' => 'E02000002',
        '5QT' => 'E02000002',
        '5QU' => 'E02000002',
        '5QX' => 'E02000003',
        '5RA' => 'E02000003',
        '5RD' => 'E02000002',
        '5RH' => 'E02000769',
        '5RJ' => 'E02000769',
        '5RL' => 'E02000769',
        '5RP' => 'E02000769',
        '5RR' => 'E02000769',
        '5RS' => 'E02000769',
        '5RT' => 'E02000769',
        '5RU' => 'E02000002',
        '5RX' => 'E02000763',
        '5RY' => 'E02000763',
        '5SA' => 'E02000002',
        '5SB' => 'E02000002',
        '5SD' => 'E02000769',
        '5SH' => 'E02000769',
        '5SJ' => 'E02000769',
        '5SL' => 'E02000763',
        '5SP' => 'E02000763',
        '5SR' => 'E02000763',
        '5SS' => 'E02000763',
        '5ST' => 'E02000763',
        '5SU' => 'E02000763',
        '5SX' => 'E02000763',
        '5TH' => 'E02000002',
        '5TJ' => 'E02000002',
        '5TL' => 'E02000769',
        '5TP' => 'E02000769',
        '5TR' => 'E02000769',
        '5TS' => 'E02000769',
        '5TT' => 'E02000769',
        '5TU' => 'E02000769',
        '5TX' => 'E02000769',
        '5TY' => 'E02000480',
        '5UA' => 'E02000769',
        '5UB' => 'E02000002',
        '5UD' => 'E02000769',
        '5UE' => 'E02000002',
        '5UF' => 'E02000002',
        '5UH' => 'E02000002',
        '5UJ' => 'E02000002',
        '5UL' => 'E02000769',
        '5UN' => 'E02000769',
        '5UQ' => 'E02000002',
        '5WA' => 'E02000480',
        '5WB' => 'E02000480',
        '5WH' => 'E02000002',
        '5WW' => 'E02000480',
        '5WX' => 'E02000480',
        '5WY' => 'E02000480',
        '5WZ' => 'E02000480',
        '5XB' => 'E02000002',
        '5YZ' => 'E02000480',
        '5ZQ' => 'E02000002',
        '6AA' => 'E02000003',
        '6AB' => 'E02000003',
        '6AD' => 'E02000003',
        '6AE' => 'E02000003',
        '6AF' => 'E02000480',
        '6AG' => 'E02000003',
        '6AH' => 'E02000003',
        '6AJ' => 'E02000003',
        '6AL' => 'E02000003',
        '6AN' => 'E02000003',
        '6AP' => 'E02000003',
        '6AQ' => 'E02000003',
        '6AS' => 'E02000003',
        '6AU' => 'E02000003',
        '6AW' => 'E02000003',
        '6AX' => 'E02000003',
        '6AY' => 'E02000003',
        '6AZ' => 'E02000480',
        '6BA' => 'E02000003',
        '6BB' => 'E02000003',
        '6BD' => 'E02000003',
        '6BE' => 'E02000003',
        '6BG' => 'E02000003',
        '6BH' => 'E02000003',
        '6BJ' => 'E02000003',
        '6BL' => 'E02000003',
        '6BN' => 'E02000003',
        '6BP' => 'E02000003',
        '6BQ' => 'E02000003',
        '6BS' => 'E02000003',
        '6BT' => 'E02000003',
        '6BU' => 'E02000003',
        '6BW' => 'E02000480',
        '6BX' => 'E02000003',
        '6BY' => 'E02000003',
        '6BZ' => 'E02000480',
        '6DA' => 'E02000003',
        '6DB' => 'E02000003',
        '6DD' => 'E02000003',
        '6DE' => 'E02000003',
        '6DF' => 'E02000003',
        '6DG' => 'E02000480',
        '6DH' => 'E02000003',
        '6DJ' => 'E02000003',
        '6DL' => 'E02000003',
        '6DN' => 'E02000003',
        '6DP' => 'E02000003',
        '6DQ' => 'E02000480',
        '6DR' => 'E02000003',
        '6DS' => 'E02000003',
        '6DT' => 'E02000003',
        '6DU' => 'E02000003',
        '6DW' => 'E02000003',
        '6DX' => 'E02000003',
        '6DY' => 'E02000003',
        '6DZ' => 'E02000480',
        '6EA' => 'E02000003',
        '6EB' => 'E02000003',
        '6ED' => 'E02000003',
        '6EE' => 'E02000003',
        '6EG' => 'E02000480',
        '6EH' => 'E02000003',
        '6EJ' => 'E02000003',
        '6EL' => 'E02000003',
        '6EP' => 'E02000003',
        '6EQ' => 'E02000480',
        '6ER' => 'E02000003',
        '6ES' => 'E02000003',
        '6ET' => 'E02000003',
        '6EU' => 'E02000003',
        '6EX' => 'E02000003',
        '6FB' => 'E02000480',
        '6FD' => 'E02000003',
        '6FE' => 'E02000003',
        '6FQ' => 'E02000480',
        '6GE' => 'E02000003',
        '6GG' => 'E02000480',
        '6GN' => 'E02000003',
        '6HA' => 'E02000003',
        '6HB' => 'E02000003',
        '6HH' => 'E02000003',
        '6HJ' => 'E02000003',
        '6HL' => 'E02000003',
        '6HP' => 'E02000003',
        '6HR' => 'E02000003',
        '6HS' => 'E02000003',
        '6HT' => 'E02000003',
        '6HU' => 'E02000003',
        '6HY' => 'E02000003',
        '6JB' => 'E02000003',
        '6JD' => 'E02000003',
        '6JE' => 'E02000003',
        '6JH' => 'E02000003',
        '6JJ' => 'E02000003',
        '6JL' => 'E02000003',
        '6JN' => 'E02000003',
        '6JP' => 'E02000003',
        '6JR' => 'E02000003',
        '6JS' => 'E02000003',
        '6JT' => 'E02000003',
        '6JU' => 'E02000003',
        '6JW' => 'E02000003',
        '6JX' => 'E02000003',
        '6JY' => 'E02000003',
        '6LA' => 'E02000003',
        '6LB' => 'E02000003',
        '6LD' => 'E02000003',
        '6LE' => 'E02000003',
        '6LH' => 'E02000003',
        '6LJ' => 'E02000003',
        '6LL' => 'E02000003',
        '6LP' => 'E02000003',
        '6LR' => 'E02000003',
        '6LS' => 'E02000003',
        '6LU' => 'E02000003',
        '6LX' => 'E02000003',
        '6LY' => 'E02000003',
        '6NA' => 'E02000003',
        '6NB' => 'E02000003',
        '6ND' => 'E02000003',
        '6NF' => 'E02000003',
        '6NH' => 'E02000003',
        '6NJ' => 'E02000003',
        '6NL' => 'E02000003',
        '6NP' => 'E02000003',
        '6NR' => 'E02000003',
        '6NS' => 'E02000003',
        '6NT' => 'E02000003',
        '6NU' => 'E02000003',
        '6NX' => 'E02000003',
        '6NY' => 'E02000003',
        '6PA' => 'E02000003',
        '6PB' => 'E02000003',
        '6PD' => 'E02000003',
        '6PE' => 'E02000003',
        '6PF' => 'E02000003',
        '6PG' => 'E02000003',
        '6PH' => 'E02000003',
        '6PJ' => 'E02000003',
        '6PL' => 'E02000003',
        '6PN' => 'E02000003',
        '6PP' => 'E02000003',
        '6PQ' => 'E02000003',
        '6PR' => 'E02000003',
        '6PS' => 'E02000003',
        '6PT' => 'E02000003',
        '6PU' => 'E02000003',
        '6PX' => 'E02000003',
        '6PY' => 'E02000003',
        '6QA' => 'E02000003',
        '6QB' => 'E02000769',
        '6QD' => 'E02000003',
        '6QF' => 'E02000003',
        '6QH' => 'E02000003',
        '6QJ' => 'E02000003',
        '6QL' => 'E02000003',
        '6QN' => 'E02000003',
        '6QP' => 'E02000003',
        '6QR' => 'E02000003',
        '6QT' => 'E02000003',
        '6QU' => 'E02000002',
        '6QW' => 'E02000480',
        '6RB' => 'E02000003',
        '6RD' => 'E02000003',
        '6RH' => 'E02000003',
        '6RJ' => 'E02000003',
        '6RL' => 'E02000003',
        '6RP' => 'E02000003',
        '6RR' => 'E02000003',
        '6RS' => 'E02000003',
        '6RT' => 'E02000003',
        '6RU' => 'E02000003',
        '6RX' => 'E02000003',
        '6SA' => 'E02000003',
        '6SB' => 'E02000003',
        '6SD' => 'E02000003',
        '6SH' => 'E02000003',
        '6SJ' => 'E02000003',
        '6SL' => 'E02000002',
        '6SN' => 'E02000003',
        '6SP' => 'E02000002',
        '6SQ' => 'E02000003',
        '6SR' => 'E02000003',
        '6SS' => 'E02000002',
        '6ST' => 'E02000002',
        '6SU' => 'E02000002',
        '6SW' => 'E02000003',
        '6SX' => 'E02000002',
        '6TA' => 'E02000002',
        '6TB' => 'E02000002',
        '6TD' => 'E02000002',
        '6TH' => 'E02000002',
        '6TJ' => 'E02000003',
        '6TS' => 'E02000480',
        '6TT' => 'E02000003',
        '6TU' => 'E02000003',
        '6TX' => 'E02000003',
        '6TY' => 'E02000003',
        '6UA' => 'E02000003',
        '6UB' => 'E02000003',
        '6UD' => 'E02000003',
        '6UE' => 'E02000003',
        '6UH' => 'E02000003',
        '6UJ' => 'E02000003',
        '6UL' => 'E02000003',
        '6UP' => 'E02000003',
        '6UR' => 'E02000003',
        '6UT' => 'E02000003',
        '6UU' => 'E02000003',
        '6UX' => 'E02000003',
        '6WA' => 'E02000003',
        '6WB' => 'E02000003',
        '6WD' => 'E02000480',
        '6WE' => 'E02000480',
        '6WF' => 'E02000480',
        '6WG' => 'E02000480',
        '6WH' => 'E02000480',
        '6WJ' => 'E02000480',
        '6WL' => 'E02000003',
        '6WN' => 'E02000480',
        '6WP' => 'E02000003',
        '6WQ' => 'E02000480',
        '6WR' => 'E02000480',
        '6XA' => 'E02000003',
        '6XB' => 'E02000003',
        '6XD' => 'E02000003',
        '6XE' => 'E02000003',
        '6XH' => 'E02000003',
        '6XJ' => 'E02000003',
        '6XL' => 'E02000003',
        '6XP' => 'E02000003',
        '6XR' => 'E02000003',
        '6XS' => 'E02000003',
        '6XT' => 'E02000003',
        '6XU' => 'E02000003',
        '6XW' => 'E02000003',
        '6XX' => 'E02000003',
        '6YA' => 'E02000003',
        '6YB' => 'E02000003',
        '6YD' => 'E02000003',
        '6YH' => 'E02000003',
        '6YJ' => 'E02000002',
        '6YS' => 'E02000003',
        '6YT' => 'E02000002',
        '6YU' => 'E02000003',
        '6YX' => 'E02000002',
        '6YY' => 'E02000002',
        '6ZB' => 'E02000480',
        '6ZQ' => 'E02000002',
        '6ZX' => 'E02000480',
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