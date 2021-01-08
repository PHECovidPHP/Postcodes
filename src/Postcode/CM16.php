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
final class CM16
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02004532',
        '4AB' => 'E02004532',
        '4AD' => 'E02004532',
        '4AE' => 'E02004532',
        '4AF' => 'E02004532',
        '4AG' => 'E02004532',
        '4AH' => 'E02004532',
        '4AJ' => 'E02004532',
        '4AL' => 'E02004532',
        '4AN' => 'E02004532',
        '4AP' => 'E02004532',
        '4AQ' => 'E02004532',
        '4AR' => 'E02004532',
        '4AS' => 'E02004532',
        '4AT' => 'E02004532',
        '4AU' => 'E02004532',
        '4AW' => 'E02004532',
        '4AX' => 'E02004532',
        '4AY' => 'E02004531',
        '4AZ' => 'E02004532',
        '4BA' => 'E02004531',
        '4BB' => 'E02004532',
        '4BD' => 'E02004531',
        '4BE' => 'E02004531',
        '4BG' => 'E02004532',
        '4BH' => 'E02004531',
        '4BJ' => 'E02004532',
        '4BL' => 'E02004531',
        '4BN' => 'E02004531',
        '4BP' => 'E02004531',
        '4BQ' => 'E02004531',
        '4BS' => 'E02004531',
        '4BT' => 'E02004531',
        '4BU' => 'E02004532',
        '4BW' => 'E02004531',
        '4BX' => 'E02004531',
        '4BY' => 'E02004531',
        '4BZ' => 'E02004531',
        '4DA' => 'E02004531',
        '4DB' => 'E02004531',
        '4DD' => 'E02004531',
        '4DE' => 'E02004531',
        '4DF' => 'E02004531',
        '4DG' => 'E02004531',
        '4DH' => 'E02004531',
        '4DJ' => 'E02004528',
        '4DL' => 'E02004532',
        '4DN' => 'E02004532',
        '4DP' => 'E02004531',
        '4DQ' => 'E02004531',
        '4DR' => 'E02004532',
        '4DS' => 'E02004532',
        '4DT' => 'E02004532',
        '4DU' => 'E02004532',
        '4DW' => 'E02004532',
        '4DX' => 'E02004532',
        '4DY' => 'E02004532',
        '4DZ' => 'E02004532',
        '4EA' => 'E02004532',
        '4EB' => 'E02004532',
        '4ED' => 'E02004536',
        '4EE' => 'E02004536',
        '4EF' => 'E02004536',
        '4EG' => 'E02004532',
        '4EH' => 'E02004536',
        '4EJ' => 'E02004536',
        '4EL' => 'E02004532',
        '4EN' => 'E02004532',
        '4EP' => 'E02004532',
        '4EQ' => 'E02004532',
        '4ER' => 'E02004532',
        '4ES' => 'E02004532',
        '4ET' => 'E02004532',
        '4EU' => 'E02004532',
        '4EX' => 'E02004532',
        '4EY' => 'E02004532',
        '4EZ' => 'E02004532',
        '4FA' => 'E02004532',
        '4FB' => 'E02004532',
        '4FD' => 'E02004532',
        '4FE' => 'E02004532',
        '4FF' => 'E02004532',
        '4FG' => 'E02004532',
        '4FH' => 'E02004532',
        '4FJ' => 'E02004531',
        '4FL' => 'E02004532',
        '4FN' => 'E02004532',
        '4GD' => 'E02004532',
        '4GG' => 'E02004532',
        '4HA' => 'E02004532',
        '4HB' => 'E02004532',
        '4HD' => 'E02004532',
        '4HE' => 'E02004532',
        '4HF' => 'E02004532',
        '4HG' => 'E02004532',
        '4HH' => 'E02004532',
        '4HJ' => 'E02004532',
        '4HL' => 'E02004532',
        '4HN' => 'E02004532',
        '4HP' => 'E02004532',
        '4HQ' => 'E02004532',
        '4HR' => 'E02004532',
        '4HS' => 'E02004532',
        '4HT' => 'E02004532',
        '4HW' => 'E02004532',
        '4HX' => 'E02004532',
        '4HY' => 'E02004532',
        '4HZ' => 'E02004532',
        '4JA' => 'E02004532',
        '4JB' => 'E02004532',
        '4JD' => 'E02004532',
        '4JE' => 'E02004532',
        '4JF' => 'E02004532',
        '4JG' => 'E02004532',
        '4JH' => 'E02004532',
        '4JJ' => 'E02004532',
        '4JL' => 'E02004532',
        '4JN' => 'E02004532',
        '4JP' => 'E02004532',
        '4JQ' => 'E02004532',
        '4JR' => 'E02004532',
        '4JS' => 'E02004532',
        '4JT' => 'E02004532',
        '4JU' => 'E02004532',
        '4JW' => 'E02004532',
        '4JX' => 'E02004532',
        '4JY' => 'E02004532',
        '4JZ' => 'E02004532',
        '4LA' => 'E02004532',
        '4LB' => 'E02004532',
        '4LD' => 'E02004532',
        '4LE' => 'E02004532',
        '4LF' => 'E02004532',
        '4LG' => 'E02004532',
        '4LH' => 'E02004532',
        '4LJ' => 'E02004532',
        '4LL' => 'E02004532',
        '4LN' => 'E02004532',
        '4LP' => 'E02004532',
        '4LQ' => 'E02004532',
        '4LR' => 'E02004532',
        '4LS' => 'E02004532',
        '4LT' => 'E02004532',
        '4LU' => 'E02004532',
        '4LW' => 'E02004532',
        '4LX' => 'E02004532',
        '4LY' => 'E02004532',
        '4LZ' => 'E02004532',
        '4NA' => 'E02004532',
        '4NB' => 'E02004532',
        '4ND' => 'E02004532',
        '4NE' => 'E02004532',
        '4NF' => 'E02004532',
        '4NG' => 'E02004532',
        '4NH' => 'E02004532',
        '4NJ' => 'E02004532',
        '4NL' => 'E02004532',
        '4NN' => 'E02004532',
        '4NP' => 'E02004532',
        '4NQ' => 'E02004532',
        '4NR' => 'E02004532',
        '4NS' => 'E02004532',
        '4NT' => 'E02004532',
        '4NU' => 'E02004532',
        '4NW' => 'E02004532',
        '4NX' => 'E02004532',
        '4PA' => 'E02004532',
        '4PB' => 'E02004532',
        '4PD' => 'E02004532',
        '4PE' => 'E02004532',
        '4PF' => 'E02004532',
        '4PG' => 'E02004532',
        '4PH' => 'E02004532',
        '4PJ' => 'E02004532',
        '4PL' => 'E02004532',
        '4PN' => 'E02004532',
        '4PP' => 'E02004532',
        '4PQ' => 'E02004532',
        '4PR' => 'E02004532',
        '4PS' => 'E02004532',
        '4PT' => 'E02004532',
        '4PU' => 'E02004532',
        '4PW' => 'E02004532',
        '4PX' => 'E02004532',
        '4PY' => 'E02004532',
        '4PZ' => 'E02004532',
        '4QA' => 'E02004532',
        '4QB' => 'E02004532',
        '4QD' => 'E02004532',
        '4QE' => 'E02004531',
        '4QF' => 'E02004532',
        '4QG' => 'E02004532',
        '4QH' => 'E02004532',
        '4QJ' => 'E02004531',
        '4QP' => 'E02004532',
        '4QQ' => 'E02004531',
        '4QS' => 'E02004532',
        '4QT' => 'E02004532',
        '4RA' => 'E02004531',
        '4RB' => 'E02004531',
        '4RD' => 'E02004531',
        '4RE' => 'E02004531',
        '4RF' => 'E02004531',
        '4RG' => 'E02004532',
        '4SP' => 'E02004531',
        '4TR' => 'E02004532',
        '4UG' => 'E02004532',
        '4WA' => 'E02004532',
        '4WB' => 'E02004532',
        '4WD' => 'E02004532',
        '4WE' => 'E02004532',
        '4WF' => 'E02004532',
        '4WG' => 'E02004532',
        '4WH' => 'E02004532',
        '4WQ' => 'E02004532',
        '4WT' => 'E02004532',
        '4WW' => 'E02004532',
        '4WX' => 'E02004532',
        '4WY' => 'E02004532',
        '4WZ' => 'E02004532',
        '4YB' => 'E02004532',
        '4YT' => 'E02004532',
        '4YY' => 'E02004532',
        '5AA' => 'E02004531',
        '5AB' => 'E02004531',
        '5AD' => 'E02004531',
        '5AE' => 'E02004532',
        '5AF' => 'E02004531',
        '5AG' => 'E02004531',
        '5AH' => 'E02004531',
        '5AJ' => 'E02004531',
        '5AL' => 'E02004531',
        '5AN' => 'E02004531',
        '5AP' => 'E02004531',
        '5AQ' => 'E02004531',
        '5AR' => 'E02004531',
        '5AS' => 'E02004531',
        '5AT' => 'E02004531',
        '5AU' => 'E02004531',
        '5AW' => 'E02004531',
        '5AX' => 'E02004531',
        '5AY' => 'E02004531',
        '5AZ' => 'E02004531',
        '5BA' => 'E02004531',
        '5BB' => 'E02004528',
        '5BD' => 'E02004531',
        '5BE' => 'E02004531',
        '5BH' => 'E02004531',
        '5BJ' => 'E02004531',
        '5BN' => 'E02004531',
        '5BP' => 'E02004531',
        '5BS' => 'E02004531',
        '5BW' => 'E02004531',
        '5BX' => 'E02004532',
        '5BY' => 'E02004531',
        '5BZ' => 'E02004531',
        '5DA' => 'E02004531',
        '5DB' => 'E02004532',
        '5DD' => 'E02004531',
        '5DE' => 'E02004531',
        '5DF' => 'E02004531',
        '5DG' => 'E02004531',
        '5DH' => 'E02004531',
        '5DJ' => 'E02004531',
        '5DL' => 'E02004531',
        '5DN' => 'E02004531',
        '5DP' => 'E02004531',
        '5DQ' => 'E02004531',
        '5DR' => 'E02004531',
        '5DS' => 'E02004531',
        '5DT' => 'E02004531',
        '5DU' => 'E02004531',
        '5DW' => 'E02004531',
        '5DX' => 'E02004531',
        '5DY' => 'E02004531',
        '5DZ' => 'E02004531',
        '5EA' => 'E02004531',
        '5EB' => 'E02004531',
        '5ED' => 'E02004531',
        '5EE' => 'E02004531',
        '5EF' => 'E02004531',
        '5EG' => 'E02004531',
        '5EH' => 'E02004531',
        '5EJ' => 'E02004531',
        '5EL' => 'E02004531',
        '5EN' => 'E02004531',
        '5EP' => 'E02004531',
        '5EQ' => 'E02004532',
        '5ER' => 'E02004531',
        '5ES' => 'E02004531',
        '5ET' => 'E02004531',
        '5EU' => 'E02004531',
        '5EW' => 'E02004531',
        '5EX' => 'E02004531',
        '5EY' => 'E02004531',
        '5EZ' => 'E02004531',
        '5FA' => 'E02004532',
        '5FB' => 'E02004531',
        '5FG' => 'E02004531',
        '5GB' => 'E02004532',
        '5GS' => 'E02004532',
        '5HA' => 'E02004531',
        '5HB' => 'E02004531',
        '5HD' => 'E02004531',
        '5HE' => 'E02004531',
        '5HF' => 'E02004531',
        '5HG' => 'E02004531',
        '5HH' => 'E02004528',
        '5HJ' => 'E02004532',
        '5HL' => 'E02004528',
        '5HN' => 'E02004528',
        '5HP' => 'E02004535',
        '5HR' => 'E02004535',
        '5HS' => 'E02004528',
        '5HT' => 'E02004528',
        '5HW' => 'E02004535',
        '5JA' => 'E02004531',
        '5JB' => 'E02004531',
        '5JH' => 'E02004531',
        '5JJ' => 'E02004531',
        '5JU' => 'E02004531',
        '5LL' => 'E02004531',
        '5ND' => 'E02004532',
        '5WA' => 'E02004532',
        '5WB' => 'E02004532',
        '5WD' => 'E02004532',
        '5WE' => 'E02004532',
        '5WH' => 'E02004532',
        '5WQ' => 'E02004532',
        '5WR' => 'E02004532',
        '5WS' => 'E02004532',
        '5XT' => 'E02004532',
        '6AA' => 'E02004527',
        '6AB' => 'E02004527',
        '6AD' => 'E02004529',
        '6AE' => 'E02004532',
        '6AF' => 'E02004529',
        '6AG' => 'E02004531',
        '6AH' => 'E02004531',
        '6AJ' => 'E02004529',
        '6AL' => 'E02004527',
        '6AN' => 'E02004527',
        '6AP' => 'E02004527',
        '6AQ' => 'E02004532',
        '6AR' => 'E02004527',
        '6AS' => 'E02004527',
        '6AT' => 'E02004529',
        '6AU' => 'E02004529',
        '6AW' => 'E02004527',
        '6AX' => 'E02004529',
        '6AY' => 'E02004529',
        '6AZ' => 'E02004529',
        '6BA' => 'E02004527',
        '6BB' => 'E02004527',
        '6BD' => 'E02004531',
        '6BE' => 'E02004527',
        '6BG' => 'E02004532',
        '6BH' => 'E02004527',
        '6BJ' => 'E02004527',
        '6BL' => 'E02004527',
        '6BN' => 'E02004527',
        '6BP' => 'E02004527',
        '6BQ' => 'E02004531',
        '6BS' => 'E02004527',
        '6BT' => 'E02004527',
        '6BU' => 'E02004527',
        '6BW' => 'E02004527',
        '6BX' => 'E02004527',
        '6BY' => 'E02004527',
        '6BZ' => 'E02004527',
        '6DA' => 'E02004527',
        '6DB' => 'E02004527',
        '6DD' => 'E02004527',
        '6DE' => 'E02004527',
        '6DF' => 'E02004531',
        '6DG' => 'E02004531',
        '6DH' => 'E02004527',
        '6DJ' => 'E02004527',
        '6DL' => 'E02004527',
        '6DN' => 'E02004527',
        '6DP' => 'E02004527',
        '6DQ' => 'E02004531',
        '6DR' => 'E02004527',
        '6DS' => 'E02004527',
        '6DT' => 'E02004531',
        '6DU' => 'E02004527',
        '6DW' => 'E02004527',
        '6DX' => 'E02004527',
        '6DY' => 'E02004527',
        '6DZ' => 'E02004532',
        '6EA' => 'E02004527',
        '6EB' => 'E02004527',
        '6ED' => 'E02004527',
        '6EE' => 'E02004527',
        '6EF' => 'E02004527',
        '6EG' => 'E02004527',
        '6EH' => 'E02004527',
        '6EJ' => 'E02004527',
        '6EL' => 'E02004532',
        '6EN' => 'E02004527',
        '6EP' => 'E02004527',
        '6EQ' => 'E02004527',
        '6ER' => 'E02004527',
        '6ES' => 'E02004527',
        '6ET' => 'E02004527',
        '6EU' => 'E02004527',
        '6EW' => 'E02004527',
        '6EX' => 'E02004527',
        '6EY' => 'E02004527',
        '6EZ' => 'E02004527',
        '6FA' => 'E02004531',
        '6FB' => 'E02004532',
        '6FD' => 'E02004531',
        '6FE' => 'E02004531',
        '6FF' => 'E02004531',
        '6FG' => 'E02004531',
        '6FH' => 'E02004531',
        '6FJ' => 'E02004531',
        '6FL' => 'E02004527',
        '6FN' => 'E02004532',
        '6FP' => 'E02004527',
        '6FQ' => 'E02004527',
        '6FS' => 'E02004528',
        '6FT' => 'E02004527',
        '6GA' => 'E02004528',
        '6GG' => 'E02004532',
        '6GP' => 'E02004527',
        '6GQ' => 'E02004529',
        '6GZ' => 'E02004532',
        '6HA' => 'E02004527',
        '6HB' => 'E02004527',
        '6HD' => 'E02004527',
        '6HE' => 'E02004532',
        '6HF' => 'E02004527',
        '6HG' => 'E02004532',
        '6HH' => 'E02004531',
        '6HJ' => 'E02004532',
        '6HL' => 'E02004531',
        '6HN' => 'E02004527',
        '6HP' => 'E02004527',
        '6HQ' => 'E02004527',
        '6HR' => 'E02004527',
        '6HS' => 'E02004527',
        '6HT' => 'E02004527',
        '6HU' => 'E02004527',
        '6HW' => 'E02004527',
        '6HX' => 'E02004527',
        '6HY' => 'E02004527',
        '6HZ' => 'E02004527',
        '6JA' => 'E02004527',
        '6JB' => 'E02004527',
        '6JD' => 'E02004527',
        '6JE' => 'E02004527',
        '6JF' => 'E02004527',
        '6JG' => 'E02004527',
        '6JH' => 'E02004527',
        '6JJ' => 'E02004527',
        '6JL' => 'E02004532',
        '6JN' => 'E02004527',
        '6JP' => 'E02004532',
        '6JQ' => 'E02004527',
        '6JR' => 'E02004527',
        '6JS' => 'E02004527',
        '6JT' => 'E02004527',
        '6JU' => 'E02004527',
        '6JW' => 'E02004527',
        '6JX' => 'E02004527',
        '6JY' => 'E02004527',
        '6JZ' => 'E02004527',
        '6LA' => 'E02004531',
        '6LB' => 'E02004531',
        '6LD' => 'E02004531',
        '6LE' => 'E02004531',
        '6LF' => 'E02004531',
        '6LG' => 'E02004531',
        '6LH' => 'E02004531',
        '6LJ' => 'E02004531',
        '6LL' => 'E02004531',
        '6LN' => 'E02004532',
        '6LP' => 'E02004531',
        '6LQ' => 'E02004531',
        '6LR' => 'E02004531',
        '6LS' => 'E02004531',
        '6LT' => 'E02004531',
        '6LU' => 'E02004531',
        '6LW' => 'E02004527',
        '6LX' => 'E02004531',
        '6LY' => 'E02004531',
        '6LZ' => 'E02004531',
        '6NA' => 'E02004531',
        '6NB' => 'E02004531',
        '6ND' => 'E02004531',
        '6NE' => 'E02004531',
        '6NF' => 'E02004531',
        '6NG' => 'E02004531',
        '6NH' => 'E02004531',
        '6NJ' => 'E02004531',
        '6NL' => 'E02004531',
        '6NN' => 'E02004528',
        '6NP' => 'E02004531',
        '6NQ' => 'E02004528',
        '6NR' => 'E02004531',
        '6NS' => 'E02004531',
        '6NT' => 'E02004532',
        '6NU' => 'E02004527',
        '6NW' => 'E02004528',
        '6NX' => 'E02004531',
        '6NY' => 'E02004531',
        '6NZ' => 'E02004528',
        '6PA' => 'E02004528',
        '6PB' => 'E02004528',
        '6PD' => 'E02004528',
        '6PE' => 'E02004528',
        '6PF' => 'E02004528',
        '6PG' => 'E02004528',
        '6PH' => 'E02004528',
        '6PJ' => 'E02004528',
        '6PL' => 'E02004528',
        '6PN' => 'E02004528',
        '6PP' => 'E02004528',
        '6PQ' => 'E02004528',
        '6PR' => 'E02004528',
        '6PS' => 'E02004528',
        '6PT' => 'E02004528',
        '6PU' => 'E02004528',
        '6PW' => 'E02004528',
        '6PX' => 'E02004528',
        '6PY' => 'E02004528',
        '6PZ' => 'E02004528',
        '6QA' => 'E02004528',
        '6QB' => 'E02004528',
        '6QD' => 'E02004528',
        '6QE' => 'E02004528',
        '6QF' => 'E02004528',
        '6QG' => 'E02004528',
        '6QH' => 'E02004528',
        '6QJ' => 'E02004528',
        '6QL' => 'E02004528',
        '6QN' => 'E02004528',
        '6QP' => 'E02004528',
        '6QQ' => 'E02004531',
        '6QT' => 'E02004532',
        '6QW' => 'E02004528',
        '6QZ' => 'E02004532',
        '6RA' => 'E02004531',
        '6RB' => 'E02004531',
        '6RD' => 'E02004531',
        '6RE' => 'E02004531',
        '6RF' => 'E02004531',
        '6RG' => 'E02004532',
        '6RH' => 'E02004531',
        '6RJ' => 'E02004531',
        '6RL' => 'E02004531',
        '6RP' => 'E02004531',
        '6RQ' => 'E02004531',
        '6RR' => 'E02004531',
        '6RS' => 'E02004531',
        '6RT' => 'E02004531',
        '6RW' => 'E02004531',
        '6RY' => 'E02004532',
        '6RZ' => 'E02004529',
        '6SA' => 'E02004531',
        '6SB' => 'E02004531',
        '6SD' => 'E02004531',
        '6SE' => 'E02004531',
        '6SF' => 'E02004531',
        '6SG' => 'E02004531',
        '6SH' => 'E02004531',
        '6SJ' => 'E02004531',
        '6SL' => 'E02004531',
        '6SN' => 'E02004531',
        '6SP' => 'E02004531',
        '6SQ' => 'E02004531',
        '6SR' => 'E02004531',
        '6SS' => 'E02004531',
        '6ST' => 'E02004531',
        '6SU' => 'E02004531',
        '6SW' => 'E02004532',
        '6SX' => 'E02004531',
        '6SY' => 'E02004531',
        '6SZ' => 'E02004531',
        '6TA' => 'E02004528',
        '6TB' => 'E02004531',
        '6TD' => 'E02004531',
        '6TE' => 'E02004532',
        '6TF' => 'E02004527',
        '6TH' => 'E02004531',
        '6TJ' => 'E02004531',
        '6TL' => 'E02004531',
        '6TN' => 'E02004531',
        '6TP' => 'E02004531',
        '6TQ' => 'E02004531',
        '6TR' => 'E02004531',
        '6TS' => 'E02004531',
        '6TT' => 'E02004531',
        '6TU' => 'E02004531',
        '6TW' => 'E02004531',
        '6TX' => 'E02004531',
        '6TY' => 'E02004531',
        '6TZ' => 'E02004531',
        '6UA' => 'E02004527',
        '6WA' => 'E02004527',
        '6WB' => 'E02004532',
        '6WD' => 'E02004532',
        '6WE' => 'E02004527',
        '6WF' => 'E02004527',
        '6WG' => 'E02004532',
        '6WH' => 'E02004532',
        '6WP' => 'E02004532',
        '6WQ' => 'E02004532',
        '6WT' => 'E02004532',
        '6WW' => 'E02004532',
        '6WX' => 'E02004532',
        '6WY' => 'E02004532',
        '6WZ' => 'E02004532',
        '6XP' => 'E02004532',
        '6YQ' => 'E02004532',
        '6YZ' => 'E02004532',
        '7AA' => 'E02004532',
        '7AB' => 'E02004532',
        '7AD' => 'E02004532',
        '7AE' => 'E02004532',
        '7AF' => 'E02004532',
        '7AG' => 'E02004532',
        '7AH' => 'E02004532',
        '7AJ' => 'E02004532',
        '7AL' => 'E02004532',
        '7AN' => 'E02004532',
        '7AP' => 'E02004532',
        '7AQ' => 'E02004532',
        '7AR' => 'E02004532',
        '7AS' => 'E02004532',
        '7AT' => 'E02004532',
        '7AU' => 'E02004532',
        '7AW' => 'E02004532',
        '7AX' => 'E02004532',
        '7AY' => 'E02004532',
        '7AZ' => 'E02004532',
        '7BA' => 'E02004532',
        '7BB' => 'E02004532',
        '7BD' => 'E02004532',
        '7BE' => 'E02004532',
        '7BG' => 'E02004532',
        '7BH' => 'E02004532',
        '7BJ' => 'E02004532',
        '7BL' => 'E02004532',
        '7BN' => 'E02004532',
        '7BP' => 'E02004532',
        '7BQ' => 'E02004532',
        '7BS' => 'E02004532',
        '7BT' => 'E02004532',
        '7BU' => 'E02004532',
        '7BW' => 'E02004532',
        '7BX' => 'E02004532',
        '7BY' => 'E02004532',
        '7BZ' => 'E02004532',
        '7DA' => 'E02004532',
        '7DB' => 'E02004532',
        '7DD' => 'E02004532',
        '7DE' => 'E02004532',
        '7DF' => 'E02004532',
        '7DG' => 'E02004532',
        '7DH' => 'E02004536',
        '7DJ' => 'E02004536',
        '7DL' => 'E02004536',
        '7DN' => 'E02004536',
        '7DP' => 'E02004536',
        '7DQ' => 'E02004532',
        '7DR' => 'E02004536',
        '7DS' => 'E02004536',
        '7DT' => 'E02004536',
        '7DU' => 'E02004536',
        '7DW' => 'E02004536',
        '7DX' => 'E02004536',
        '7DY' => 'E02004536',
        '7DZ' => 'E02004536',
        '7EA' => 'E02004536',
        '7EB' => 'E02004536',
        '7ED' => 'E02004536',
        '7EE' => 'E02004536',
        '7EF' => 'E02004536',
        '7EG' => 'E02004536',
        '7EH' => 'E02004536',
        '7EJ' => 'E02004536',
        '7EL' => 'E02004532',
        '7EN' => 'E02004532',
        '7EP' => 'E02004536',
        '7EQ' => 'E02004532',
        '7ER' => 'E02004536',
        '7ES' => 'E02004536',
        '7ET' => 'E02004536',
        '7EU' => 'E02004536',
        '7EW' => 'E02004536',
        '7EX' => 'E02004536',
        '7EY' => 'E02004536',
        '7EZ' => 'E02004536',
        '7FA' => 'E02004529',
        '7FB' => 'E02004529',
        '7FD' => 'E02004532',
        '7FE' => 'E02004529',
        '7FG' => 'E02004532',
        '7FL' => 'E02004532',
        '7FW' => 'E02004532',
        '7FX' => 'E02004532',
        '7GA' => 'E02004532',
        '7HA' => 'E02004536',
        '7HB' => 'E02004536',
        '7HD' => 'E02004536',
        '7HE' => 'E02004536',
        '7HF' => 'E02004536',
        '7HG' => 'E02004536',
        '7HH' => 'E02004536',
        '7HJ' => 'E02004536',
        '7HL' => 'E02004536',
        '7HN' => 'E02004532',
        '7HP' => 'E02004536',
        '7HQ' => 'E02004536',
        '7HR' => 'E02004536',
        '7HS' => 'E02004536',
        '7HT' => 'E02004532',
        '7HU' => 'E02004532',
        '7HW' => 'E02004532',
        '7HX' => 'E02004532',
        '7HY' => 'E02004532',
        '7HZ' => 'E02004532',
        '7JA' => 'E02004536',
        '7JB' => 'E02004536',
        '7JD' => 'E02004536',
        '7JE' => 'E02004532',
        '7JG' => 'E02004532',
        '7JH' => 'E02004536',
        '7JJ' => 'E02004536',
        '7JL' => 'E02004532',
        '7JN' => 'E02004536',
        '7JP' => 'E02004536',
        '7JQ' => 'E02004532',
        '7JR' => 'E02004536',
        '7JS' => 'E02004536',
        '7JT' => 'E02004536',
        '7JU' => 'E02004536',
        '7JW' => 'E02004536',
        '7JX' => 'E02004536',
        '7JY' => 'E02004536',
        '7JZ' => 'E02004536',
        '7LA' => 'E02004536',
        '7LB' => 'E02004536',
        '7LD' => 'E02004536',
        '7LE' => 'E02004536',
        '7LF' => 'E02004536',
        '7LG' => 'E02004536',
        '7LH' => 'E02004536',
        '7LJ' => 'E02004532',
        '7LL' => 'E02004532',
        '7LN' => 'E02004536',
        '7LP' => 'E02004536',
        '7LQ' => 'E02004532',
        '7LR' => 'E02004536',
        '7LS' => 'E02004536',
        '7LT' => 'E02004536',
        '7LU' => 'E02004536',
        '7LW' => 'E02004536',
        '7LX' => 'E02004536',
        '7LY' => 'E02004536',
        '7LZ' => 'E02004536',
        '7NA' => 'E02004536',
        '7NB' => 'E02004536',
        '7ND' => 'E02004536',
        '7NE' => 'E02004536',
        '7NF' => 'E02004536',
        '7NJ' => 'E02004532',
        '7NL' => 'E02004536',
        '7NN' => 'E02004536',
        '7NP' => 'E02004536',
        '7NQ' => 'E02004529',
        '7NR' => 'E02004536',
        '7NS' => 'E02004536',
        '7NT' => 'E02004529',
        '7NU' => 'E02004529',
        '7NW' => 'E02004536',
        '7NX' => 'E02004529',
        '7NY' => 'E02004529',
        '7NZ' => 'E02004529',
        '7PA' => 'E02004529',
        '7PB' => 'E02004532',
        '7PD' => 'E02004532',
        '7PE' => 'E02004532',
        '7PF' => 'E02004532',
        '7PG' => 'E02004532',
        '7PH' => 'E02004529',
        '7PJ' => 'E02004529',
        '7PL' => 'E02004529',
        '7PN' => 'E02004529',
        '7PP' => 'E02004529',
        '7PQ' => 'E02004532',
        '7PR' => 'E02004529',
        '7PS' => 'E02004529',
        '7PT' => 'E02004529',
        '7PU' => 'E02004529',
        '7PW' => 'E02004529',
        '7PX' => 'E02004529',
        '7PY' => 'E02004532',
        '7PZ' => 'E02004532',
        '7QA' => 'E02004529',
        '7QB' => 'E02004532',
        '7QE' => 'E02004532',
        '7QG' => 'E02004532',
        '7QH' => 'E02004532',
        '7QJ' => 'E02004532',
        '7QL' => 'E02004532',
        '7QN' => 'E02004532',
        '7QP' => 'E02004532',
        '7QQ' => 'E02004529',
        '7QR' => 'E02004531',
        '7QS' => 'E02004532',
        '7QT' => 'E02004532',
        '7QU' => 'E02004532',
        '7QW' => 'E02004532',
        '7QX' => 'E02004532',
        '7QY' => 'E02004532',
        '7QZ' => 'E02004532',
        '7RA' => 'E02004532',
        '7RB' => 'E02004532',
        '7RD' => 'E02004532',
        '7RE' => 'E02004532',
        '7RF' => 'E02004532',
        '7RG' => 'E02004532',
        '7RH' => 'E02004532',
        '7RJ' => 'E02004529',
        '7RL' => 'E02004532',
        '7RN' => 'E02004532',
        '7RP' => 'E02004528',
        '7RQ' => 'E02004532',
        '7RR' => 'E02004532',
        '7RS' => 'E02004532',
        '7RW' => 'E02004532',
        '7RX' => 'E02004532',
        '7RY' => 'E02004532',
        '7RZ' => 'E02004536',
        '7SA' => 'E02004532',
        '7WA' => 'E02004532',
        '7WB' => 'E02004532',
        '7WE' => 'E02004532',
        '7WF' => 'E02004532',
        '7WP' => 'E02004532',
        '7WR' => 'E02004532',
        '7WS' => 'E02004532',
        '7WT' => 'E02004532',
        '7WU' => 'E02004532',
        '7WW' => 'E02004532',
        '7WX' => 'E02004532',
        '7WY' => 'E02004532',
        '7WZ' => 'E02004532',
        '7XZ' => 'E02004532',
        '7YA' => 'E02004532',
        '7YF' => 'E02004532',
        '7YP' => 'E02004532',
        '7ZF' => 'E02004532',
        '9AA' => 'E02004532',
        '9AB' => 'E02004532',
        '9AD' => 'E02004532',
        '9AE' => 'E02004532',
        '9AF' => 'E02004532',
        '9AG' => 'E02004532',
        '9AH' => 'E02004532',
        '9AJ' => 'E02004532',
        '9AL' => 'E02004532',
        '9AN' => 'E02004532',
        '9AP' => 'E02004532',
        '9AQ' => 'E02004532',
        '9AR' => 'E02004532',
        '9AS' => 'E02004532',
        '9AT' => 'E02004532',
        '9AU' => 'E02004532',
        '9AW' => 'E02004532',
        '9AX' => 'E02004532',
        '9AY' => 'E02004532',
        '9AZ' => 'E02004532',
        '9BA' => 'E02004532',
        '9BB' => 'E02004532',
        '9BD' => 'E02004532',
        '9BE' => 'E02004532',
        '9BF' => 'E02004532',
        '9BG' => 'E02004532',
        '9BH' => 'E02004532',
        '9BJ' => 'E02004532',
        '9BL' => 'E02004532',
        '9BN' => 'E02004532',
        '9BP' => 'E02004532',
        '9BQ' => 'E02004532',
        '9BR' => 'E02004532',
        '9BS' => 'E02004532',
        '9DA' => 'E02004532',
        '9DB' => 'E02004532',
        '9DD' => 'E02004532',
        '9DE' => 'E02004532',
        '9DF' => 'E02004532',
        '9DG' => 'E02004532',
        '9DH' => 'E02004532',
        '9DJ' => 'E02004532',
        '9DL' => 'E02004532',
        '9DN' => 'E02004532',
        '9DP' => 'E02004532',
        '9DQ' => 'E02004532',
        '9DR' => 'E02004532',
        '9DS' => 'E02004532',
        '9DT' => 'E02004532',
        '9DU' => 'E02004532',
        '9DW' => 'E02004532',
        '9DX' => 'E02004532',
        '9DY' => 'E02004532',
        '9DZ' => 'E02004532',
        '9EA' => 'E02004532',
        '9EB' => 'E02004532',
        '9ED' => 'E02004532',
        '9EE' => 'E02004532',
        '9EF' => 'E02004532',
        '9EG' => 'E02004532',
        '9EH' => 'E02004532',
        '9EL' => 'E02004532',
        '9EN' => 'E02004532',
        '9EP' => 'E02004532',
        '9EQ' => 'E02004532',
        '9ER' => 'E02004532',
        '9ES' => 'E02004532',
        '9ET' => 'E02004532',
        '9EU' => 'E02004532',
        '9EW' => 'E02004532',
        '9EX' => 'E02004532',
        '9EY' => 'E02004532',
        '9FA' => 'E02004532',
        '9FB' => 'E02004532',
        '9FD' => 'E02004532',
        '9FE' => 'E02004532',
        '9FF' => 'E02004532',
        '9FG' => 'E02004532',
        '9FH' => 'E02004532',
        '9FJ' => 'E02004532',
        '9FL' => 'E02004532',
        '9FN' => 'E02004532',
        '9FP' => 'E02004532',
        '9FQ' => 'E02004532',
        '9SA' => 'E02004531',
        '9SB' => 'E02004531',
        '9SD' => 'E02004531',
        '9SE' => 'E02004531',
        '9SF' => 'E02004531',
        '9SG' => 'E02004531',
        '9SH' => 'E02004531',
        '9SJ' => 'E02004531',
        '9SL' => 'E02004531',
        '9SP' => 'E02004531',
        '9SQ' => 'E02004531',
        '9SS' => 'E02004531',
        '9ST' => 'E02004531',
        '9SU' => 'E02004531',
        '9SW' => 'E02004531',
        '9SX' => 'E02004531',
        '9SY' => 'E02004531',
        '9SZ' => 'E02004531',
        '9TA' => 'E02004531',
        '9TB' => 'E02004531',
        '9TD' => 'E02004531',
        '9TE' => 'E02004531',
        '9TF' => 'E02004531',
        '9TG' => 'E02004531',
        '9TH' => 'E02004531',
        '9TJ' => 'E02004531',
        '9TL' => 'E02004531',
        '9TN' => 'E02004531',
        '9TP' => 'E02004531',
        '9TQ' => 'E02004531',
        '9TS' => 'E02004531',
        '9TT' => 'E02004531',
        '9TU' => 'E02004531',
        '9WA' => 'E02004531',
        '9ZZ' => 'E02004532',
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
