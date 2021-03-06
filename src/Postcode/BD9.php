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
final class BD9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02002211',
        '4AB' => 'E02002211',
        '4AD' => 'E02002211',
        '4AE' => 'E02002211',
        '4AF' => 'E02002221',
        '4AG' => 'E02002211',
        '4AH' => 'E02002211',
        '4AJ' => 'E02002211',
        '4AL' => 'E02002211',
        '4AN' => 'E02002211',
        '4AP' => 'E02002211',
        '4AQ' => 'E02002211',
        '4AR' => 'E02002211',
        '4AS' => 'E02002211',
        '4AU' => 'E02002211',
        '4AX' => 'E02002211',
        '4AY' => 'E02002211',
        '4AZ' => 'E02002211',
        '4BA' => 'E02002211',
        '4BB' => 'E02002211',
        '4BD' => 'E02002211',
        '4BE' => 'E02002211',
        '4BG' => 'E02002211',
        '4BH' => 'E02002211',
        '4BJ' => 'E02002211',
        '4BL' => 'E02002211',
        '4BN' => 'E02002211',
        '4BP' => 'E02002211',
        '4BQ' => 'E02002211',
        '4BS' => 'E02002211',
        '4BT' => 'E02002211',
        '4BU' => 'E02002211',
        '4BX' => 'E02002211',
        '4BY' => 'E02002211',
        '4DA' => 'E02002211',
        '4DB' => 'E02002211',
        '4DD' => 'E02002211',
        '4DE' => 'E02002211',
        '4DL' => 'E02002211',
        '4DN' => 'E02002211',
        '4DP' => 'E02002211',
        '4DQ' => 'E02002211',
        '4DR' => 'E02002211',
        '4DS' => 'E02002211',
        '4DT' => 'E02002211',
        '4DU' => 'E02002207',
        '4DW' => 'E02002211',
        '4DX' => 'E02002207',
        '4DY' => 'E02002207',
        '4DZ' => 'E02002207',
        '4EA' => 'E02002207',
        '4EB' => 'E02002207',
        '4ED' => 'E02002207',
        '4EE' => 'E02002211',
        '4EF' => 'E02002211',
        '4EG' => 'E02002207',
        '4EH' => 'E02002207',
        '4EJ' => 'E02002207',
        '4EL' => 'E02002207',
        '4EN' => 'E02002207',
        '4EP' => 'E02002207',
        '4ER' => 'E02002207',
        '4ES' => 'E02002207',
        '4ET' => 'E02002207',
        '4EU' => 'E02002207',
        '4EW' => 'E02002207',
        '4EX' => 'E02002207',
        '4EY' => 'E02002207',
        '4EZ' => 'E02002207',
        '4GA' => 'E02002211',
        '4HA' => 'E02002207',
        '4HB' => 'E02002207',
        '4HD' => 'E02002207',
        '4HE' => 'E02002207',
        '4HF' => 'E02002207',
        '4HG' => 'E02002207',
        '4HH' => 'E02002207',
        '4HJ' => 'E02002207',
        '4HL' => 'E02002207',
        '4HN' => 'E02002207',
        '4HP' => 'E02002207',
        '4HQ' => 'E02002207',
        '4HS' => 'E02002207',
        '4HT' => 'E02002207',
        '4HU' => 'E02002207',
        '4HW' => 'E02002207',
        '4HX' => 'E02002207',
        '4HY' => 'E02002207',
        '4HZ' => 'E02002207',
        '4JA' => 'E02002207',
        '4JB' => 'E02002207',
        '4JD' => 'E02002207',
        '4JE' => 'E02002207',
        '4JF' => 'E02002211',
        '4JG' => 'E02002207',
        '4JH' => 'E02002211',
        '4JJ' => 'E02002207',
        '4JL' => 'E02002207',
        '4JN' => 'E02002216',
        '4JP' => 'E02002216',
        '4JR' => 'E02002207',
        '4JT' => 'E02002207',
        '4JU' => 'E02002207',
        '4JW' => 'E02002216',
        '4JX' => 'E02002207',
        '4JY' => 'E02002207',
        '4JZ' => 'E02002207',
        '4LA' => 'E02002207',
        '4LB' => 'E02002216',
        '4LD' => 'E02002207',
        '4LE' => 'E02002207',
        '4LF' => 'E02002207',
        '4LG' => 'E02002207',
        '4LH' => 'E02002207',
        '4LJ' => 'E02002207',
        '4LL' => 'E02002207',
        '4LN' => 'E02002207',
        '4LP' => 'E02002207',
        '4LQ' => 'E02002207',
        '4LR' => 'E02002207',
        '4LS' => 'E02002207',
        '4LT' => 'E02002207',
        '4LU' => 'E02002207',
        '4LW' => 'E02002207',
        '4LY' => 'E02002207',
        '4LZ' => 'E02002207',
        '4NA' => 'E02002216',
        '4NB' => 'E02002216',
        '4ND' => 'E02002216',
        '4NE' => 'E02002216',
        '4NF' => 'E02002221',
        '4NG' => 'E02002216',
        '4NH' => 'E02002216',
        '4NJ' => 'E02002216',
        '4NL' => 'E02002216',
        '4NN' => 'E02002216',
        '4NP' => 'E02002216',
        '4NR' => 'E02002216',
        '4NS' => 'E02002216',
        '4NT' => 'E02002211',
        '4NU' => 'E02002211',
        '4NX' => 'E02002211',
        '4PA' => 'E02002211',
        '4PB' => 'E02002211',
        '4PD' => 'E02002211',
        '4PE' => 'E02002211',
        '4PF' => 'E02002211',
        '4PG' => 'E02002211',
        '4PH' => 'E02002211',
        '4PJ' => 'E02002211',
        '4PL' => 'E02002211',
        '4PN' => 'E02002211',
        '4PP' => 'E02002211',
        '4PQ' => 'E02002211',
        '4PR' => 'E02002211',
        '4PS' => 'E02002211',
        '4PT' => 'E02002216',
        '4PU' => 'E02002216',
        '4PW' => 'E02002211',
        '4PX' => 'E02002216',
        '4PY' => 'E02002216',
        '4PZ' => 'E02002216',
        '4QA' => 'E02002216',
        '4QB' => 'E02002216',
        '4QD' => 'E02002216',
        '4QE' => 'E02002216',
        '4QH' => 'E02002216',
        '4QJ' => 'E02002216',
        '4QL' => 'E02002216',
        '4QN' => 'E02002216',
        '4QP' => 'E02002211',
        '4QQ' => 'E02002216',
        '4QR' => 'E02002216',
        '4QS' => 'E02002216',
        '4QT' => 'E02002216',
        '4QU' => 'E02002216',
        '4QW' => 'E02002216',
        '4QX' => 'E02002216',
        '4QY' => 'E02002216',
        '4QZ' => 'E02002216',
        '4RA' => 'E02002216',
        '4RB' => 'E02002216',
        '4RD' => 'E02002216',
        '4RE' => 'E02002216',
        '4RH' => 'E02002216',
        '4RJ' => 'E02002216',
        '4RP' => 'E02002211',
        '4RQ' => 'E02002216',
        '4RR' => 'E02002211',
        '4RS' => 'E02002211',
        '4RT' => 'E02002211',
        '4RU' => 'E02002211',
        '4RX' => 'E02002211',
        '4RY' => 'E02002211',
        '4RZ' => 'E02002211',
        '4SA' => 'E02002215',
        '4SB' => 'E02002215',
        '4SD' => 'E02002215',
        '4SH' => 'E02002215',
        '4SJ' => 'E02002215',
        '4SL' => 'E02002215',
        '4SN' => 'E02002215',
        '4SP' => 'E02002215',
        '4SQ' => 'E02002215',
        '4SR' => 'E02002215',
        '4SS' => 'E02002215',
        '4ST' => 'E02002215',
        '4SU' => 'E02002207',
        '4SW' => 'E02002215',
        '4WA' => 'E02002215',
        '4WB' => 'E02002221',
        '4WD' => 'E02002221',
        '4WL' => 'E02002221',
        '4WP' => 'E02002221',
        '4WQ' => 'E02002221',
        '4WR' => 'E02002221',
        '4WS' => 'E02002221',
        '4WT' => 'E02002221',
        '4WU' => 'E02002221',
        '4WW' => 'E02002221',
        '4WX' => 'E02002215',
        '4WY' => 'E02002215',
        '4WZ' => 'E02002215',
        '4XA' => 'E02002221',
        '4XB' => 'E02002215',
        '4XD' => 'E02002221',
        '4XE' => 'E02002211',
        '4XF' => 'E02002211',
        '4XG' => 'E02002215',
        '4XH' => 'E02002221',
        '4XJ' => 'E02002211',
        '4XL' => 'E02002215',
        '4XN' => 'E02002215',
        '4XP' => 'E02002211',
        '4XQ' => 'E02002221',
        '4XR' => 'E02002221',
        '4XS' => 'E02002211',
        '4XT' => 'E02002211',
        '4XU' => 'E02002211',
        '4XW' => 'E02002221',
        '4XX' => 'E02002211',
        '4XY' => 'E02002211',
        '4XZ' => 'E02002211',
        '4YA' => 'E02002215',
        '4YB' => 'E02002215',
        '4YD' => 'E02002215',
        '4YE' => 'E02002221',
        '4YF' => 'E02002215',
        '4YG' => 'E02002211',
        '4YH' => 'E02002211',
        '4YJ' => 'E02002215',
        '4YL' => 'E02002221',
        '4YN' => 'E02002221',
        '4YP' => 'E02002221',
        '4YQ' => 'E02002221',
        '4YR' => 'E02002211',
        '4YS' => 'E02002221',
        '4YT' => 'E02002215',
        '4YU' => 'E02002215',
        '4YW' => 'E02002215',
        '4YX' => 'E02002215',
        '4YY' => 'E02002215',
        '4YZ' => 'E02002207',
        '4ZA' => 'E02002221',
        '5AA' => 'E02002215',
        '5AB' => 'E02002215',
        '5AD' => 'E02002215',
        '5AE' => 'E02002215',
        '5AF' => 'E02002215',
        '5AG' => 'E02002215',
        '5AH' => 'E02002215',
        '5AJ' => 'E02002215',
        '5AL' => 'E02002215',
        '5AN' => 'E02002215',
        '5AP' => 'E02002215',
        '5AQ' => 'E02002215',
        '5AR' => 'E02002215',
        '5AS' => 'E02002215',
        '5AT' => 'E02002215',
        '5AU' => 'E02002215',
        '5AW' => 'E02002215',
        '5AX' => 'E02002215',
        '5AY' => 'E02002215',
        '5BA' => 'E02002215',
        '5BD' => 'E02002215',
        '5BE' => 'E02002215',
        '5BN' => 'E02002215',
        '5BP' => 'E02002215',
        '5BQ' => 'E02002215',
        '5BR' => 'E02002215',
        '5BS' => 'E02002215',
        '5BT' => 'E02002211',
        '5BU' => 'E02002215',
        '5BY' => 'E02002215',
        '5BZ' => 'E02002215',
        '5DA' => 'E02002215',
        '5DB' => 'E02002215',
        '5DD' => 'E02002215',
        '5DE' => 'E02002215',
        '5DF' => 'E02002215',
        '5DG' => 'E02002215',
        '5DH' => 'E02002215',
        '5DJ' => 'E02002215',
        '5DL' => 'E02002215',
        '5DN' => 'E02002215',
        '5DP' => 'E02002215',
        '5DQ' => 'E02002215',
        '5DR' => 'E02002215',
        '5DS' => 'E02002215',
        '5DT' => 'E02002215',
        '5DU' => 'E02002215',
        '5DX' => 'E02002215',
        '5DY' => 'E02002215',
        '5EA' => 'E02002215',
        '5EB' => 'E02002215',
        '5ED' => 'E02002215',
        '5EE' => 'E02002215',
        '5EF' => 'E02002215',
        '5EG' => 'E02002215',
        '5EP' => 'E02002215',
        '5EQ' => 'E02002215',
        '5ER' => 'E02002215',
        '5ES' => 'E02002215',
        '5ET' => 'E02002215',
        '5EU' => 'E02002215',
        '5EX' => 'E02002219',
        '5EY' => 'E02002215',
        '5EZ' => 'E02002215',
        '5HA' => 'E02002215',
        '5HB' => 'E02002215',
        '5HD' => 'E02002215',
        '5HE' => 'E02002215',
        '5HG' => 'E02002215',
        '5HH' => 'E02002215',
        '5HJ' => 'E02002215',
        '5HL' => 'E02002215',
        '5HN' => 'E02002215',
        '5HP' => 'E02002215',
        '5HQ' => 'E02002215',
        '5HR' => 'E02002215',
        '5HS' => 'E02002215',
        '5HT' => 'E02002215',
        '5HU' => 'E02002215',
        '5HX' => 'E02002215',
        '5HY' => 'E02002215',
        '5HZ' => 'E02002215',
        '5JA' => 'E02002215',
        '5JB' => 'E02002215',
        '5JD' => 'E02002215',
        '5JE' => 'E02002215',
        '5JF' => 'E02002215',
        '5JG' => 'E02002215',
        '5JH' => 'E02002215',
        '5JJ' => 'E02002215',
        '5JN' => 'E02002215',
        '5JP' => 'E02002215',
        '5JR' => 'E02002215',
        '5JS' => 'E02002215',
        '5JT' => 'E02002215',
        '5JU' => 'E02002215',
        '5JX' => 'E02002215',
        '5JY' => 'E02002215',
        '5JZ' => 'E02002215',
        '5LA' => 'E02002215',
        '5LB' => 'E02002215',
        '5LD' => 'E02002215',
        '5LE' => 'E02002215',
        '5LF' => 'E02002211',
        '5LG' => 'E02002215',
        '5LH' => 'E02002215',
        '5LJ' => 'E02002211',
        '5LL' => 'E02002211',
        '5LN' => 'E02002211',
        '5LP' => 'E02002215',
        '5LR' => 'E02002211',
        '5LS' => 'E02002215',
        '5LT' => 'E02002211',
        '5LU' => 'E02002215',
        '5LX' => 'E02002215',
        '5LY' => 'E02002211',
        '5LZ' => 'E02002215',
        '5NA' => 'E02002211',
        '5NB' => 'E02002211',
        '5ND' => 'E02002211',
        '5NE' => 'E02002211',
        '5NG' => 'E02002211',
        '5NH' => 'E02002211',
        '5NJ' => 'E02002211',
        '5NL' => 'E02002211',
        '5NN' => 'E02002211',
        '5NP' => 'E02002211',
        '5NQ' => 'E02002211',
        '5NR' => 'E02002211',
        '5NS' => 'E02002211',
        '5NT' => 'E02002211',
        '5NU' => 'E02002211',
        '5NW' => 'E02002211',
        '5NX' => 'E02002211',
        '5PA' => 'E02002211',
        '5PB' => 'E02002211',
        '5PD' => 'E02002211',
        '5PE' => 'E02002211',
        '5PF' => 'E02002211',
        '5PG' => 'E02002211',
        '5PH' => 'E02002211',
        '5PJ' => 'E02002211',
        '5PL' => 'E02002211',
        '5PN' => 'E02002211',
        '5PP' => 'E02002211',
        '5PQ' => 'E02002211',
        '5PR' => 'E02002211',
        '5PS' => 'E02002211',
        '5PT' => 'E02002211',
        '5PU' => 'E02002211',
        '5PW' => 'E02002211',
        '5PX' => 'E02002211',
        '5PY' => 'E02002211',
        '5PZ' => 'E02002211',
        '5QA' => 'E02002211',
        '5QB' => 'E02002211',
        '5QD' => 'E02002211',
        '5QE' => 'E02002211',
        '5QF' => 'E02002211',
        '5QH' => 'E02002211',
        '5QJ' => 'E02002211',
        '5QL' => 'E02002211',
        '5QN' => 'E02002211',
        '5QP' => 'E02002211',
        '5QQ' => 'E02002215',
        '5QR' => 'E02002211',
        '5QS' => 'E02002211',
        '5QT' => 'E02002211',
        '5QU' => 'E02002211',
        '5QW' => 'E02002211',
        '5QX' => 'E02002211',
        '5QY' => 'E02002211',
        '5TA' => 'E02002211',
        '5WR' => 'E02002221',
        '5WT' => 'E02002221',
        '5WU' => 'E02002221',
        '5WW' => 'E02002211',
        '5WX' => 'E02002211',
        '5WY' => 'E02002221',
        '5WZ' => 'E02002221',
        '5XN' => 'E02002211',
        '5XP' => 'E02002221',
        '5XQ' => 'E02002221',
        '5XR' => 'E02002221',
        '5XS' => 'E02002221',
        '5XT' => 'E02002221',
        '5XU' => 'E02002221',
        '5XW' => 'E02002221',
        '5XX' => 'E02002215',
        '5XY' => 'E02002215',
        '5XZ' => 'E02002221',
        '5YA' => 'E02002221',
        '5YB' => 'E02002211',
        '5YD' => 'E02002211',
        '5YE' => 'E02002215',
        '5YF' => 'E02002215',
        '5YG' => 'E02002215',
        '5YH' => 'E02002215',
        '5YJ' => 'E02002211',
        '5YL' => 'E02002221',
        '5YN' => 'E02002215',
        '5YP' => 'E02002221',
        '5YQ' => 'E02002215',
        '5YR' => 'E02002211',
        '5YS' => 'E02002211',
        '5YT' => 'E02002211',
        '5YU' => 'E02002215',
        '5YW' => 'E02002215',
        '5YX' => 'E02002221',
        '5YY' => 'E02002221',
        '5YZ' => 'E02002215',
        '6AA' => 'E02002215',
        '6AB' => 'E02002212',
        '6AD' => 'E02002212',
        '6AE' => 'E02002212',
        '6AF' => 'E02002215',
        '6AG' => 'E02002212',
        '6AH' => 'E02002212',
        '6AJ' => 'E02002212',
        '6AL' => 'E02002212',
        '6AN' => 'E02002212',
        '6AP' => 'E02002212',
        '6AQ' => 'E02002212',
        '6AR' => 'E02002212',
        '6AS' => 'E02002212',
        '6AT' => 'E02002212',
        '6AU' => 'E02002212',
        '6AW' => 'E02002212',
        '6AX' => 'E02002212',
        '6AY' => 'E02002212',
        '6AZ' => 'E02002212',
        '6BA' => 'E02002212',
        '6BB' => 'E02002212',
        '6BD' => 'E02002212',
        '6BE' => 'E02002212',
        '6BG' => 'E02002212',
        '6BH' => 'E02002212',
        '6BJ' => 'E02002212',
        '6BL' => 'E02002212',
        '6BN' => 'E02002212',
        '6BP' => 'E02002212',
        '6BQ' => 'E02002212',
        '6BR' => 'E02002211',
        '6BS' => 'E02002212',
        '6BT' => 'E02002215',
        '6BU' => 'E02002212',
        '6BW' => 'E02002212',
        '6BX' => 'E02002212',
        '6DA' => 'E02002215',
        '6DB' => 'E02002215',
        '6DD' => 'E02002215',
        '6DE' => 'E02002215',
        '6DF' => 'E02002212',
        '6DG' => 'E02002215',
        '6DH' => 'E02002215',
        '6DJ' => 'E02002215',
        '6DL' => 'E02002215',
        '6DN' => 'E02002215',
        '6DP' => 'E02002212',
        '6DQ' => 'E02002215',
        '6DR' => 'E02002215',
        '6DS' => 'E02002215',
        '6DT' => 'E02002211',
        '6DU' => 'E02002211',
        '6DW' => 'E02002215',
        '6DX' => 'E02002212',
        '6DY' => 'E02002212',
        '6DZ' => 'E02002211',
        '6EA' => 'E02002212',
        '6EB' => 'E02002212',
        '6ED' => 'E02002212',
        '6EE' => 'E02002212',
        '6EF' => 'E02002215',
        '6EG' => 'E02002212',
        '6EH' => 'E02002212',
        '6EJ' => 'E02002212',
        '6EL' => 'E02002212',
        '6EN' => 'E02002212',
        '6EP' => 'E02002212',
        '6EQ' => 'E02002212',
        '6ER' => 'E02002212',
        '6ES' => 'E02002212',
        '6ET' => 'E02002212',
        '6EU' => 'E02002212',
        '6EW' => 'E02002212',
        '6EX' => 'E02002212',
        '6EY' => 'E02002212',
        '6EZ' => 'E02002212',
        '6HA' => 'E02002212',
        '6HB' => 'E02002212',
        '6HG' => 'E02002215',
        '6HH' => 'E02002212',
        '6HJ' => 'E02002212',
        '6HL' => 'E02002212',
        '6HN' => 'E02002212',
        '6HP' => 'E02002212',
        '6HR' => 'E02002211',
        '6HS' => 'E02002211',
        '6HT' => 'E02002211',
        '6HU' => 'E02002211',
        '6HX' => 'E02002211',
        '6HY' => 'E02002211',
        '6HZ' => 'E02002211',
        '6JA' => 'E02002211',
        '6JB' => 'E02002212',
        '6JD' => 'E02002212',
        '6JE' => 'E02002212',
        '6JH' => 'E02002212',
        '6JJ' => 'E02002212',
        '6JL' => 'E02002212',
        '6JN' => 'E02002212',
        '6JP' => 'E02002212',
        '6JQ' => 'E02002212',
        '6JR' => 'E02002212',
        '6JS' => 'E02002212',
        '6JT' => 'E02002212',
        '6JU' => 'E02002212',
        '6JX' => 'E02002212',
        '6JY' => 'E02002212',
        '6LH' => 'E02002211',
        '6LJ' => 'E02002212',
        '6LL' => 'E02002212',
        '6LN' => 'E02002212',
        '6LP' => 'E02002212',
        '6LQ' => 'E02002212',
        '6LR' => 'E02002212',
        '6LS' => 'E02002212',
        '6LT' => 'E02002212',
        '6LU' => 'E02002212',
        '6LW' => 'E02002212',
        '6LX' => 'E02002212',
        '6LY' => 'E02002211',
        '6NA' => 'E02002212',
        '6NB' => 'E02002212',
        '6ND' => 'E02002212',
        '6NE' => 'E02002212',
        '6NF' => 'E02002212',
        '6NG' => 'E02002212',
        '6NH' => 'E02002212',
        '6NJ' => 'E02002212',
        '6NL' => 'E02002212',
        '6NN' => 'E02002212',
        '6NP' => 'E02002212',
        '6NQ' => 'E02002212',
        '6NR' => 'E02002212',
        '6NS' => 'E02002212',
        '6NT' => 'E02002212',
        '6NU' => 'E02002212',
        '6NW' => 'E02002212',
        '6NX' => 'E02002212',
        '6PA' => 'E02002212',
        '6PB' => 'E02002212',
        '6PD' => 'E02002212',
        '6PE' => 'E02002212',
        '6PF' => 'E02002204',
        '6PH' => 'E02002212',
        '6PL' => 'E02002212',
        '6PP' => 'E02002212',
        '6PQ' => 'E02002212',
        '6PR' => 'E02002212',
        '6PS' => 'E02002212',
        '6PT' => 'E02002212',
        '6PU' => 'E02002212',
        '6PX' => 'E02002212',
        '6PY' => 'E02002212',
        '6PZ' => 'E02002212',
        '6QA' => 'E02002212',
        '6QB' => 'E02002212',
        '6QD' => 'E02002212',
        '6QE' => 'E02002212',
        '6QF' => 'E02002212',
        '6QH' => 'E02002212',
        '6QJ' => 'E02002212',
        '6QL' => 'E02002212',
        '6QN' => 'E02002212',
        '6QP' => 'E02002212',
        '6QQ' => 'E02002212',
        '6QR' => 'E02002212',
        '6QS' => 'E02002212',
        '6RA' => 'E02002219',
        '6RB' => 'E02002219',
        '6RD' => 'E02002211',
        '6RE' => 'E02002219',
        '6RF' => 'E02002219',
        '6RH' => 'E02002215',
        '6RJ' => 'E02002219',
        '6RL' => 'E02002219',
        '6RN' => 'E02002219',
        '6RP' => 'E02002215',
        '6RQ' => 'E02002219',
        '6RR' => 'E02002212',
        '6RS' => 'E02002212',
        '6RT' => 'E02002212',
        '6RU' => 'E02002212',
        '6RW' => 'E02002212',
        '6RX' => 'E02002211',
        '6RY' => 'E02002212',
        '6RZ' => 'E02002221',
        '6SA' => 'E02002204',
        '6SB' => 'E02002200',
        '6SD' => 'E02002212',
        '6SE' => 'E02002200',
        '6SF' => 'E02002212',
        '6SG' => 'E02002212',
        '6SH' => 'E02002202',
        '6SJ' => 'E02002211',
        '6SL' => 'E02002211',
        '6SN' => 'E02002211',
        '6SP' => 'E02002211',
        '6SQ' => 'E02002211',
        '6SR' => 'E02002212',
        '6TB' => 'E02002215',
        '6UP' => 'E02002212',
        '6UR' => 'E02002212',
        '6UT' => 'E02002221',
        '6UU' => 'E02002221',
        '6UW' => 'E02002212',
        '6UX' => 'E02002212',
        '6UY' => 'E02002221',
        '6UZ' => 'E02002212',
        '6WA' => 'E02002221',
        '6WP' => 'E02002221',
        '6WQ' => 'E02002221',
        '6WR' => 'E02002221',
        '6WS' => 'E02002221',
        '6WU' => 'E02002221',
        '6WW' => 'E02002221',
        '6WX' => 'E02002221',
        '6WY' => 'E02002221',
        '6WZ' => 'E02002221',
        '6YD' => 'E02002221',
        '6YE' => 'E02002221',
        '6YF' => 'E02002221',
        '6YG' => 'E02002221',
        '6YH' => 'E02002221',
        '6YJ' => 'E02002221',
        '6YL' => 'E02002221',
        '6YN' => 'E02002221',
        '6YP' => 'E02002212',
        '6YQ' => 'E02002221',
        '6YR' => 'E02002212',
        '6YS' => 'E02002212',
        '6YT' => 'E02002212',
        '6YU' => 'E02002212',
        '6YW' => 'E02002212',
        '6YX' => 'E02002221',
        '6YY' => 'E02002212',
        '6YZ' => 'E02002221',
        '6ZX' => 'E02002221',
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
