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
final class DA14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02000091',
        '4AB' => 'E02000091',
        '4AD' => 'E02000091',
        '4AE' => 'E02000091',
        '4AF' => 'E02000091',
        '4AG' => 'E02000090',
        '4AH' => 'E02000090',
        '4AJ' => 'E02000090',
        '4AL' => 'E02000090',
        '4AN' => 'E02000090',
        '4AP' => 'E02000090',
        '4AQ' => 'E02000090',
        '4AR' => 'E02000090',
        '4AS' => 'E02000090',
        '4AT' => 'E02000090',
        '4AU' => 'E02000090',
        '4AW' => 'E02000090',
        '4AX' => 'E02000090',
        '4AY' => 'E02000090',
        '4AZ' => 'E02000090',
        '4BA' => 'E02000090',
        '4BB' => 'E02000090',
        '4BD' => 'E02000090',
        '4BE' => 'E02000090',
        '4BF' => 'E02000091',
        '4BG' => 'E02000090',
        '4BH' => 'E02000090',
        '4BJ' => 'E02000091',
        '4BL' => 'E02000090',
        '4BN' => 'E02000090',
        '4BP' => 'E02000090',
        '4BQ' => 'E02000090',
        '4BS' => 'E02000091',
        '4BT' => 'E02000091',
        '4BU' => 'E02000091',
        '4BW' => 'E02000090',
        '4BX' => 'E02000091',
        '4BY' => 'E02000091',
        '4BZ' => 'E02000091',
        '4DA' => 'E02000091',
        '4DB' => 'E02000090',
        '4DD' => 'E02000090',
        '4DE' => 'E02000090',
        '4DF' => 'E02000090',
        '4DG' => 'E02000091',
        '4DH' => 'E02000090',
        '4DJ' => 'E02000090',
        '4DL' => 'E02000091',
        '4DN' => 'E02000090',
        '4DP' => 'E02000091',
        '4DQ' => 'E02000090',
        '4DR' => 'E02000091',
        '4DS' => 'E02000090',
        '4DT' => 'E02000090',
        '4DU' => 'E02000091',
        '4DW' => 'E02000091',
        '4DX' => 'E02000090',
        '4DY' => 'E02000090',
        '4DZ' => 'E02000090',
        '4EA' => 'E02000090',
        '4EB' => 'E02000090',
        '4ED' => 'E02000090',
        '4EE' => 'E02000090',
        '4EF' => 'E02000091',
        '4EG' => 'E02000091',
        '4EH' => 'E02000091',
        '4EJ' => 'E02000091',
        '4EL' => 'E02000091',
        '4EN' => 'E02000091',
        '4EP' => 'E02000091',
        '4EQ' => 'E02000091',
        '4ER' => 'E02000091',
        '4ES' => 'E02000091',
        '4ET' => 'E02000091',
        '4EU' => 'E02000091',
        '4EW' => 'E02000091',
        '4EX' => 'E02000091',
        '4EY' => 'E02000091',
        '4EZ' => 'E02000091',
        '4FA' => 'E02000091',
        '4FB' => 'E02000091',
        '4FD' => 'E02000090',
        '4FE' => 'E02000090',
        '4FF' => 'E02000090',
        '4FG' => 'E02000090',
        '4FH' => 'E02000091',
        '4FQ' => 'E02000091',
        '4HA' => 'E02000091',
        '4HB' => 'E02000091',
        '4HD' => 'E02000091',
        '4HE' => 'E02000091',
        '4HF' => 'E02000090',
        '4HG' => 'E02000091',
        '4HH' => 'E02000091',
        '4HJ' => 'E02000091',
        '4HL' => 'E02000091',
        '4HN' => 'E02000090',
        '4HP' => 'E02000091',
        '4HQ' => 'E02000091',
        '4HR' => 'E02000091',
        '4HS' => 'E02000090',
        '4HT' => 'E02000090',
        '4HU' => 'E02000091',
        '4HW' => 'E02000091',
        '4HX' => 'E02000090',
        '4HY' => 'E02000090',
        '4HZ' => 'E02000090',
        '4JA' => 'E02000090',
        '4JB' => 'E02000088',
        '4JD' => 'E02000088',
        '4JE' => 'E02000088',
        '4JF' => 'E02000088',
        '4JG' => 'E02000091',
        '4JH' => 'E02000091',
        '4JJ' => 'E02000091',
        '4JL' => 'E02000091',
        '4JN' => 'E02000091',
        '4JP' => 'E02000090',
        '4JQ' => 'E02000091',
        '4JR' => 'E02000091',
        '4JS' => 'E02000091',
        '4JT' => 'E02000088',
        '4JU' => 'E02000091',
        '4JW' => 'E02000091',
        '4JX' => 'E02000088',
        '4JY' => 'E02000091',
        '4JZ' => 'E02000091',
        '4LA' => 'E02000091',
        '4LB' => 'E02000091',
        '4LD' => 'E02000091',
        '4LE' => 'E02000091',
        '4LF' => 'E02000091',
        '4LG' => 'E02000091',
        '4LH' => 'E02000091',
        '4LJ' => 'E02000091',
        '4LL' => 'E02000091',
        '4LN' => 'E02000091',
        '4LP' => 'E02000091',
        '4LQ' => 'E02000091',
        '4LR' => 'E02000090',
        '4LS' => 'E02000091',
        '4LT' => 'E02000091',
        '4LU' => 'E02000091',
        '4LW' => 'E02000091',
        '4LX' => 'E02000091',
        '4LY' => 'E02000091',
        '4LZ' => 'E02000091',
        '4NA' => 'E02000091',
        '4NB' => 'E02000091',
        '4ND' => 'E02000091',
        '4NE' => 'E02000091',
        '4NF' => 'E02000091',
        '4NG' => 'E02000091',
        '4NH' => 'E02000091',
        '4NJ' => 'E02000091',
        '4NL' => 'E02000090',
        '4NN' => 'E02000088',
        '4NP' => 'E02000088',
        '4NQ' => 'E02000091',
        '4NR' => 'E02000088',
        '4NS' => 'E02000088',
        '4NT' => 'E02000091',
        '4NU' => 'E02000091',
        '4NW' => 'E02000088',
        '4NX' => 'E02000091',
        '4NY' => 'E02000091',
        '4NZ' => 'E02000091',
        '4PA' => 'E02000091',
        '4PB' => 'E02000091',
        '4PD' => 'E02000088',
        '4PE' => 'E02000091',
        '4PF' => 'E02000091',
        '4PG' => 'E02000091',
        '4PH' => 'E02000092',
        '4PJ' => 'E02000092',
        '4PL' => 'E02000092',
        '4PN' => 'E02000091',
        '4PP' => 'E02000091',
        '4PQ' => 'E02000092',
        '4PR' => 'E02000092',
        '4PS' => 'E02000092',
        '4PT' => 'E02000092',
        '4PU' => 'E02000092',
        '4PW' => 'E02000092',
        '4PX' => 'E02000092',
        '4PY' => 'E02000092',
        '4PZ' => 'E02000092',
        '4QA' => 'E02000092',
        '4QB' => 'E02000092',
        '4QD' => 'E02000092',
        '4QE' => 'E02000091',
        '4QF' => 'E02000091',
        '4QG' => 'E02000091',
        '4QH' => 'E02000091',
        '4QJ' => 'E02000091',
        '4QL' => 'E02000091',
        '4QN' => 'E02000091',
        '4QP' => 'E02000091',
        '4QQ' => 'E02000091',
        '4QR' => 'E02000091',
        '4QS' => 'E02000091',
        '4QT' => 'E02000091',
        '4QU' => 'E02000091',
        '4QW' => 'E02000091',
        '4QX' => 'E02000091',
        '4QY' => 'E02000091',
        '4QZ' => 'E02000091',
        '4RG' => 'E02000091',
        '4RH' => 'E02000091',
        '4RJ' => 'E02000091',
        '4RL' => 'E02000091',
        '4RN' => 'E02000091',
        '4RP' => 'E02000092',
        '4RQ' => 'E02000091',
        '4RR' => 'E02000092',
        '4RS' => 'E02000092',
        '4RT' => 'E02000092',
        '4RU' => 'E02000092',
        '4RW' => 'E02000091',
        '4RX' => 'E02000092',
        '4RY' => 'E02000092',
        '4RZ' => 'E02000092',
        '4SA' => 'E02000092',
        '4SB' => 'E02000092',
        '4SP' => 'E02000092',
        '4SR' => 'E02000090',
        '4SS' => 'E02000092',
        '4ST' => 'E02000091',
        '4SU' => 'E02000092',
        '4SX' => 'E02000091',
        '4SZ' => 'E02000092',
        '4TA' => 'E02000090',
        '4TB' => 'E02000090',
        '4TD' => 'E02000090',
        '4TP' => 'E02000091',
        '4UA' => 'E02000091',
        '4UB' => 'E02000091',
        '4UD' => 'E02000091',
        '4WA' => 'E02000090',
        '4WB' => 'E02000090',
        '4WD' => 'E02000090',
        '4WW' => 'E02000090',
        '4WX' => 'E02000090',
        '4WY' => 'E02000090',
        '4WZ' => 'E02000090',
        '4XL' => 'E02000090',
        '4YP' => 'E02000090',
        '4YQ' => 'E02000090',
        '4YZ' => 'E02000090',
        '4ZA' => 'E02000090',
        '4ZB' => 'E02000091',
        '4ZD' => 'E02000090',
        '4ZE' => 'E02000090',
        '4ZF' => 'E02000090',
        '4ZG' => 'E02000090',
        '4ZH' => 'E02000090',
        '4ZJ' => 'E02000090',
        '4ZL' => 'E02000091',
        '4ZN' => 'E02000091',
        '4ZP' => 'E02000090',
        '4ZQ' => 'E02000090',
        '4ZR' => 'E02000091',
        '4ZS' => 'E02000091',
        '4ZT' => 'E02000091',
        '4ZU' => 'E02000090',
        '4ZW' => 'E02000091',
        '4ZX' => 'E02000090',
        '4ZY' => 'E02000091',
        '4ZZ' => 'E02000091',
        '5AA' => 'E02000140',
        '5AB' => 'E02000092',
        '5AD' => 'E02000145',
        '5AE' => 'E02000092',
        '5AF' => 'E02000145',
        '5AG' => 'E02000092',
        '5AH' => 'E02000145',
        '5AJ' => 'E02000145',
        '5AL' => 'E02000090',
        '5AN' => 'E02000092',
        '5AP' => 'E02000092',
        '5AQ' => 'E02000092',
        '5AR' => 'E02000092',
        '5AS' => 'E02005037',
        '5AT' => 'E02005037',
        '5AU' => 'E02000092',
        '5AW' => 'E02000092',
        '5AX' => 'E02000145',
        '5AY' => 'E02000145',
        '5AZ' => 'E02000145',
        '5BA' => 'E02000145',
        '5BB' => 'E02000145',
        '5BD' => 'E02000145',
        '5BE' => 'E02000145',
        '5BG' => 'E02000145',
        '5BH' => 'E02000092',
        '5BJ' => 'E02000092',
        '5BL' => 'E02000092',
        '5BN' => 'E02000145',
        '5BP' => 'E02000091',
        '5BQ' => 'E02000145',
        '5BS' => 'E02000092',
        '5BT' => 'E02000092',
        '5BU' => 'E02000092',
        '5BW' => 'E02000145',
        '5BX' => 'E02000092',
        '5BY' => 'E02000092',
        '5BZ' => 'E02000092',
        '5DA' => 'E02000092',
        '5DB' => 'E02000092',
        '5DD' => 'E02000091',
        '5DE' => 'E02000092',
        '5DF' => 'E02000092',
        '5DG' => 'E02000092',
        '5DH' => 'E02000092',
        '5DJ' => 'E02000092',
        '5DL' => 'E02000092',
        '5DN' => 'E02000092',
        '5DP' => 'E02000092',
        '5DQ' => 'E02000092',
        '5DR' => 'E02000092',
        '5DS' => 'E02000092',
        '5DT' => 'E02000092',
        '5DU' => 'E02000092',
        '5DW' => 'E02000092',
        '5DX' => 'E02000092',
        '5DY' => 'E02000092',
        '5DZ' => 'E02000092',
        '5EA' => 'E02000092',
        '5EB' => 'E02000092',
        '5ED' => 'E02000092',
        '5EE' => 'E02000092',
        '5EF' => 'E02000092',
        '5EG' => 'E02000092',
        '5EH' => 'E02000092',
        '5EJ' => 'E02000092',
        '5EL' => 'E02000092',
        '5EN' => 'E02000092',
        '5EP' => 'E02000092',
        '5EQ' => 'E02000092',
        '5ER' => 'E02000092',
        '5ES' => 'E02000092',
        '5ET' => 'E02000092',
        '5EU' => 'E02000092',
        '5EW' => 'E02000092',
        '5EX' => 'E02000092',
        '5EY' => 'E02000092',
        '5EZ' => 'E02000092',
        '5FA' => 'E02000092',
        '5FB' => 'E02005037',
        '5HA' => 'E02000092',
        '5HB' => 'E02000092',
        '5HD' => 'E02000092',
        '5HE' => 'E02000092',
        '5HF' => 'E02000092',
        '5HG' => 'E02000092',
        '5HH' => 'E02000092',
        '5HJ' => 'E02000092',
        '5HL' => 'E02000092',
        '5HN' => 'E02000092',
        '5HP' => 'E02000092',
        '5HQ' => 'E02000092',
        '5HR' => 'E02000145',
        '5HS' => 'E02000092',
        '5HT' => 'E02000092',
        '5HU' => 'E02000092',
        '5HW' => 'E02000092',
        '5HX' => 'E02000092',
        '5HY' => 'E02000092',
        '5HZ' => 'E02000092',
        '5JA' => 'E02000145',
        '5JB' => 'E02000092',
        '5JD' => 'E02000092',
        '5JE' => 'E02000092',
        '5JF' => 'E02000092',
        '5JG' => 'E02000092',
        '5JH' => 'E02000092',
        '5JJ' => 'E02000092',
        '5JL' => 'E02000092',
        '5JN' => 'E02000092',
        '5JP' => 'E02000092',
        '5JQ' => 'E02000092',
        '5JR' => 'E02000092',
        '5JS' => 'E02000092',
        '5JW' => 'E02000092',
        '5JX' => 'E02000092',
        '5JY' => 'E02000092',
        '5JZ' => 'E02000092',
        '5LA' => 'E02000092',
        '5LB' => 'E02000092',
        '5LD' => 'E02000092',
        '5LE' => 'E02000092',
        '5LF' => 'E02000092',
        '5LG' => 'E02000092',
        '5LH' => 'E02000092',
        '5LJ' => 'E02000092',
        '5LL' => 'E02000092',
        '5LQ' => 'E02000092',
        '5LR' => 'E02000092',
        '5LS' => 'E02000092',
        '5LT' => 'E02000092',
        '5LU' => 'E02000092',
        '5LX' => 'E02000092',
        '5LY' => 'E02000092',
        '5LZ' => 'E02000092',
        '5NA' => 'E02000092',
        '5NB' => 'E02000092',
        '5ND' => 'E02000092',
        '5NE' => 'E02000092',
        '5NF' => 'E02000092',
        '5NG' => 'E02000092',
        '5NH' => 'E02000092',
        '5NJ' => 'E02000092',
        '5NL' => 'E02000145',
        '5NN' => 'E02000090',
        '5NP' => 'E02000092',
        '5NQ' => 'E02000092',
        '5NR' => 'E02000092',
        '5NS' => 'E02000092',
        '5NT' => 'E02000092',
        '5NW' => 'E02000092',
        '5PA' => 'E02000092',
        '5PB' => 'E02000092',
        '5PD' => 'E02000092',
        '5PE' => 'E02000092',
        '5PH' => 'E02000092',
        '5QY' => 'E02000092',
        '5RH' => 'E02000092',
        '5SS' => 'E02000092',
        '5TA' => 'E02000092',
        '5UA' => 'E02000090',
        '5UB' => 'E02000092',
        '5WA' => 'E02000092',
        '5WB' => 'E02000092',
        '5WD' => 'E02000090',
        '5WL' => 'E02000090',
        '5WN' => 'E02000090',
        '5WR' => 'E02000090',
        '5WS' => 'E02000092',
        '5WZ' => 'E02000090',
        '5XP' => 'E02000092',
        '5XZ' => 'E02000090',
        '5ZL' => 'E02000090',
        '5ZN' => 'E02000092',
        '5ZP' => 'E02000092',
        '5ZQ' => 'E02000090',
        '5ZR' => 'E02000090',
        '5ZS' => 'E02000090',
        '5ZT' => 'E02000090',
        '5ZU' => 'E02000090',
        '5ZW' => 'E02000090',
        '5ZX' => 'E02000090',
        '5ZY' => 'E02000090',
        '5ZZ' => 'E02000090',
        '6AA' => 'E02000090',
        '6AB' => 'E02000090',
        '6AD' => 'E02000090',
        '6AE' => 'E02000090',
        '6AF' => 'E02000090',
        '6AG' => 'E02000091',
        '6AH' => 'E02000091',
        '6AJ' => 'E02000091',
        '6AL' => 'E02000091',
        '6AN' => 'E02000091',
        '6AP' => 'E02000091',
        '6AQ' => 'E02000091',
        '6AR' => 'E02000091',
        '6AS' => 'E02000091',
        '6AT' => 'E02000091',
        '6AU' => 'E02000091',
        '6AW' => 'E02000091',
        '6AX' => 'E02000091',
        '6AY' => 'E02000090',
        '6AZ' => 'E02000090',
        '6BA' => 'E02000090',
        '6BB' => 'E02000091',
        '6BD' => 'E02000091',
        '6BE' => 'E02000091',
        '6BF' => 'E02000090',
        '6BG' => 'E02000091',
        '6BH' => 'E02000091',
        '6BJ' => 'E02000091',
        '6BL' => 'E02000091',
        '6BN' => 'E02000091',
        '6BP' => 'E02000091',
        '6BQ' => 'E02000091',
        '6BS' => 'E02000090',
        '6BT' => 'E02000090',
        '6BU' => 'E02000091',
        '6BW' => 'E02000090',
        '6BX' => 'E02000090',
        '6BY' => 'E02000090',
        '6BZ' => 'E02000090',
        '6DA' => 'E02000091',
        '6DB' => 'E02000091',
        '6DD' => 'E02000091',
        '6DE' => 'E02000091',
        '6DF' => 'E02000090',
        '6DG' => 'E02000091',
        '6DH' => 'E02000090',
        '6DJ' => 'E02000090',
        '6DL' => 'E02000090',
        '6DN' => 'E02000090',
        '6DP' => 'E02000091',
        '6DQ' => 'E02000091',
        '6DR' => 'E02000090',
        '6DS' => 'E02000090',
        '6DT' => 'E02000090',
        '6DU' => 'E02000090',
        '6DW' => 'E02000090',
        '6DX' => 'E02000090',
        '6DY' => 'E02000090',
        '6DZ' => 'E02000090',
        '6EA' => 'E02000090',
        '6EB' => 'E02000090',
        '6ED' => 'E02000090',
        '6EE' => 'E02000090',
        '6EF' => 'E02000090',
        '6EG' => 'E02000090',
        '6EH' => 'E02000090',
        '6EJ' => 'E02000090',
        '6EL' => 'E02000090',
        '6EN' => 'E02000090',
        '6EP' => 'E02000091',
        '6EQ' => 'E02000090',
        '6ER' => 'E02000091',
        '6ES' => 'E02000091',
        '6ET' => 'E02000090',
        '6EU' => 'E02000090',
        '6EW' => 'E02000091',
        '6EX' => 'E02000090',
        '6EY' => 'E02000090',
        '6EZ' => 'E02000090',
        '6FA' => 'E02000091',
        '6FB' => 'E02000091',
        '6FD' => 'E02000091',
        '6FE' => 'E02000091',
        '6FF' => 'E02000091',
        '6FG' => 'E02000091',
        '6FH' => 'E02000091',
        '6GU' => 'E02000091',
        '6HA' => 'E02000090',
        '6HB' => 'E02000090',
        '6HD' => 'E02000091',
        '6HE' => 'E02000090',
        '6HF' => 'E02000091',
        '6HG' => 'E02000091',
        '6HH' => 'E02000091',
        '6HJ' => 'E02000091',
        '6HL' => 'E02000091',
        '6HN' => 'E02000090',
        '6HP' => 'E02000091',
        '6HQ' => 'E02000091',
        '6HR' => 'E02000091',
        '6HS' => 'E02000091',
        '6HT' => 'E02000091',
        '6HU' => 'E02000090',
        '6HW' => 'E02000091',
        '6HX' => 'E02000092',
        '6HY' => 'E02000091',
        '6HZ' => 'E02000091',
        '6JA' => 'E02000091',
        '6JB' => 'E02000091',
        '6JD' => 'E02000091',
        '6JE' => 'E02000091',
        '6JF' => 'E02000091',
        '6JG' => 'E02000091',
        '6JH' => 'E02000091',
        '6JJ' => 'E02000091',
        '6JL' => 'E02000091',
        '6JN' => 'E02000091',
        '6JP' => 'E02000092',
        '6JQ' => 'E02000091',
        '6JR' => 'E02000092',
        '6JS' => 'E02000092',
        '6JT' => 'E02000092',
        '6JU' => 'E02000092',
        '6JW' => 'E02000092',
        '6JX' => 'E02000091',
        '6JY' => 'E02000092',
        '6JZ' => 'E02000091',
        '6LA' => 'E02000091',
        '6LB' => 'E02000092',
        '6LD' => 'E02000091',
        '6LE' => 'E02000091',
        '6LF' => 'E02000091',
        '6LG' => 'E02000091',
        '6LH' => 'E02000091',
        '6LJ' => 'E02000091',
        '6LL' => 'E02000091',
        '6LN' => 'E02000091',
        '6LP' => 'E02000091',
        '6LQ' => 'E02000091',
        '6LR' => 'E02000091',
        '6LS' => 'E02000091',
        '6LT' => 'E02000091',
        '6LU' => 'E02000136',
        '6LW' => 'E02000091',
        '6LX' => 'E02000092',
        '6LY' => 'E02000092',
        '6LZ' => 'E02000091',
        '6ND' => 'E02000091',
        '6NE' => 'E02000091',
        '6NF' => 'E02000091',
        '6NG' => 'E02000091',
        '6NH' => 'E02000091',
        '6NJ' => 'E02000091',
        '6NL' => 'E02000091',
        '6NN' => 'E02000091',
        '6NP' => 'E02000091',
        '6NQ' => 'E02000091',
        '6NR' => 'E02000091',
        '6NS' => 'E02000091',
        '6NT' => 'E02000091',
        '6NU' => 'E02000091',
        '6NW' => 'E02000091',
        '6NX' => 'E02000091',
        '6NY' => 'E02000090',
        '6NZ' => 'E02000090',
        '6PA' => 'E02000090',
        '6PB' => 'E02000090',
        '6PD' => 'E02000090',
        '6PE' => 'E02000090',
        '6PF' => 'E02000090',
        '6PG' => 'E02000090',
        '6PH' => 'E02000090',
        '6PJ' => 'E02000091',
        '6PL' => 'E02000090',
        '6PN' => 'E02000090',
        '6PP' => 'E02000090',
        '6PQ' => 'E02000090',
        '6PR' => 'E02000090',
        '6PS' => 'E02000090',
        '6PT' => 'E02000090',
        '6PU' => 'E02000090',
        '6PW' => 'E02000090',
        '6PX' => 'E02000090',
        '6PY' => 'E02000090',
        '6PZ' => 'E02000090',
        '6QA' => 'E02000090',
        '6QE' => 'E02000090',
        '6QF' => 'E02000090',
        '6QG' => 'E02000089',
        '6QH' => 'E02000090',
        '6QL' => 'E02000090',
        '6QP' => 'E02000090',
        '6QQ' => 'E02000089',
        '6QR' => 'E02000090',
        '6QS' => 'E02000090',
        '6QT' => 'E02000090',
        '6QW' => 'E02000090',
        '6RA' => 'E02000090',
        '6RB' => 'E02000090',
        '6RD' => 'E02000090',
        '6RE' => 'E02000090',
        '6RF' => 'E02000090',
        '6RG' => 'E02000090',
        '6RH' => 'E02000090',
        '6RJ' => 'E02000090',
        '6RL' => 'E02000090',
        '6RN' => 'E02000090',
        '6RP' => 'E02000090',
        '6RQ' => 'E02000090',
        '6RR' => 'E02000090',
        '6RS' => 'E02000090',
        '6RT' => 'E02000090',
        '6RU' => 'E02000090',
        '6RW' => 'E02000090',
        '6RX' => 'E02000090',
        '6RY' => 'E02000090',
        '6SA' => 'E02000091',
        '6SE' => 'E02000091',
        '6SF' => 'E02000091',
        '6SG' => 'E02000092',
        '6SH' => 'E02000092',
        '6SJ' => 'E02000092',
        '6SL' => 'E02000092',
        '6SQ' => 'E02000092',
        '6SS' => 'E02000091',
        '6ST' => 'E02000091',
        '6TA' => 'E02000090',
        '6TB' => 'E02000090',
        '6TD' => 'E02000091',
        '6TF' => 'E02000090',
        '6TH' => 'E02000091',
        '6TJ' => 'E02000090',
        '6TL' => 'E02000090',
        '6TN' => 'E02000090',
        '6TP' => 'E02000091',
        '6TS' => 'E02000091',
        '6TT' => 'E02000091',
        '6TU' => 'E02000091',
        '6TW' => 'E02000091',
        '6UA' => 'E02000090',
        '6UB' => 'E02000090',
        '6UD' => 'E02000090',
        '6UE' => 'E02000090',
        '6UF' => 'E02000090',
        '6UG' => 'E02000090',
        '6UH' => 'E02000090',
        '6UJ' => 'E02000090',
        '6UL' => 'E02000090',
        '6UN' => 'E02000090',
        '6UP' => 'E02000090',
        '6UQ' => 'E02000091',
        '6WA' => 'E02000090',
        '6WB' => 'E02000090',
        '6WE' => 'E02000090',
        '6WG' => 'E02000090',
        '6WQ' => 'E02000090',
        '6WT' => 'E02000090',
        '6XX' => 'E02000091',
        '6YA' => 'E02000091',
        '6YB' => 'E02000090',
        '6YY' => 'E02000091',
        '6ZB' => 'E02000090',
        '6ZD' => 'E02000090',
        '6ZE' => 'E02000090',
        '6ZF' => 'E02000090',
        '6ZG' => 'E02000090',
        '6ZH' => 'E02000090',
        '6ZJ' => 'E02000090',
        '6ZL' => 'E02000090',
        '6ZN' => 'E02000090',
        '6ZP' => 'E02000091',
        '6ZQ' => 'E02000090',
        '6ZR' => 'E02000091',
        '6ZS' => 'E02000090',
        '6ZT' => 'E02000091',
        '6ZU' => 'E02000090',
        '6ZW' => 'E02000090',
        '6ZX' => 'E02000090',
        '6ZY' => 'E02000090',
        '6ZZ' => 'E02000090',
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
