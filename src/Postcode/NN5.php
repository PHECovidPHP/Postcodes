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
final class NN5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02005678',
        '4AB' => 'E02005678',
        '4AD' => 'E02005678',
        '4AE' => 'E02005678',
        '4AF' => 'E02005678',
        '4AG' => 'E02005678',
        '4AH' => 'E02005678',
        '4AJ' => 'E02005678',
        '4AL' => 'E02005678',
        '4AN' => 'E02005678',
        '4AP' => 'E02005678',
        '4AQ' => 'E02005678',
        '4AR' => 'E02005678',
        '4AS' => 'E02005678',
        '4AT' => 'E02005678',
        '4AU' => 'E02005678',
        '4AW' => 'E02005678',
        '4AX' => 'E02005678',
        '4AY' => 'E02005678',
        '4AZ' => 'E02005678',
        '4BA' => 'E02005678',
        '4BB' => 'E02005678',
        '4BD' => 'E02005678',
        '4BE' => 'E02005678',
        '4BF' => 'E02005678',
        '4BG' => 'E02005678',
        '4BH' => 'E02005678',
        '4BJ' => 'E02005678',
        '4BL' => 'E02005678',
        '4BN' => 'E02005678',
        '4BP' => 'E02005678',
        '4BQ' => 'E02005678',
        '4BT' => 'E02005678',
        '4BU' => 'E02005678',
        '4BW' => 'E02005678',
        '4BX' => 'E02005678',
        '4BZ' => 'E02005678',
        '4DA' => 'E02005678',
        '4DB' => 'E02005678',
        '4DD' => 'E02005678',
        '4DE' => 'E02005678',
        '4DF' => 'E02005678',
        '4DG' => 'E02005678',
        '4DH' => 'E02005678',
        '4DJ' => 'E02005678',
        '4DL' => 'E02005678',
        '4DP' => 'E02005678',
        '4DQ' => 'E02005678',
        '4DR' => 'E02005678',
        '4DS' => 'E02005678',
        '4DT' => 'E02005678',
        '4DX' => 'E02005678',
        '4DY' => 'E02005678',
        '4DZ' => 'E02005678',
        '4EA' => 'E02005678',
        '4EB' => 'E02005678',
        '4ED' => 'E02005678',
        '4EE' => 'E02005678',
        '4EF' => 'E02005678',
        '4EG' => 'E02005678',
        '4EH' => 'E02005678',
        '4EJ' => 'E02005678',
        '4EL' => 'E02005678',
        '4EN' => 'E02005678',
        '4EP' => 'E02005678',
        '4EQ' => 'E02005678',
        '4ER' => 'E02005678',
        '4ES' => 'E02005678',
        '4ET' => 'E02005678',
        '4EU' => 'E02005678',
        '4EW' => 'E02005678',
        '4EX' => 'E02005668',
        '4EY' => 'E02005678',
        '4EZ' => 'E02005678',
        '4FA' => 'E02005678',
        '4FB' => 'E02005678',
        '4FD' => 'E02005678',
        '4FE' => 'E02005678',
        '4FF' => 'E02005678',
        '4FG' => 'E02005678',
        '4FH' => 'E02005678',
        '4FJ' => 'E02005678',
        '4FL' => 'E02005678',
        '4FN' => 'E02005678',
        '4FP' => 'E02005678',
        '4FQ' => 'E02005678',
        '4FR' => 'E02005678',
        '4FS' => 'E02005678',
        '4FT' => 'E02005678',
        '4FU' => 'E02005678',
        '4FW' => 'E02005678',
        '4FX' => 'E02005678',
        '4FY' => 'E02005678',
        '4FZ' => 'E02005678',
        '4GA' => 'E02005678',
        '4GB' => 'E02005678',
        '4GD' => 'E02005678',
        '4GE' => 'E02005678',
        '4GF' => 'E02005678',
        '4GG' => 'E02005678',
        '4GH' => 'E02005678',
        '4GJ' => 'E02005678',
        '4GL' => 'E02005678',
        '4GN' => 'E02005678',
        '4RA' => 'E02005678',
        '4RB' => 'E02005678',
        '4RD' => 'E02005678',
        '4RE' => 'E02005678',
        '4RF' => 'E02005678',
        '4RG' => 'E02005678',
        '4RR' => 'E02005678',
        '4UA' => 'E02005678',
        '4UB' => 'E02005678',
        '4UD' => 'E02005678',
        '4UE' => 'E02005678',
        '4UF' => 'E02005678',
        '4UG' => 'E02005678',
        '4UH' => 'E02005678',
        '4UJ' => 'E02005678',
        '4UL' => 'E02005678',
        '4UN' => 'E02005678',
        '4UP' => 'E02005678',
        '4UQ' => 'E02005678',
        '4UR' => 'E02005678',
        '4US' => 'E02005678',
        '4UT' => 'E02005678',
        '4UU' => 'E02005678',
        '4UW' => 'E02005678',
        '4UX' => 'E02005678',
        '4UY' => 'E02005678',
        '4WA' => 'E02005678',
        '4WB' => 'E02005678',
        '4WD' => 'E02005678',
        '4WE' => 'E02005678',
        '4WF' => 'E02005678',
        '4WG' => 'E02005678',
        '4WH' => 'E02005678',
        '4WJ' => 'E02005678',
        '4WL' => 'E02005678',
        '4WN' => 'E02005678',
        '4WP' => 'E02005678',
        '4WQ' => 'E02005678',
        '4WR' => 'E02005678',
        '4WT' => 'E02005670',
        '4WU' => 'E02005670',
        '4WY' => 'E02005670',
        '4WZ' => 'E02005670',
        '4XA' => 'E02005678',
        '4XB' => 'E02005678',
        '4XD' => 'E02005678',
        '4XT' => 'E02005678',
        '4ZE' => 'E02005670',
        '4ZT' => 'E02005670',
        '4ZU' => 'E02005678',
        '4ZW' => 'E02005670',
        '4ZX' => 'E02005678',
        '4ZY' => 'E02005670',
        '4ZZ' => 'E02005670',
        '5AA' => 'E02005673',
        '5AB' => 'E02005673',
        '5AD' => 'E02005673',
        '5AE' => 'E02005673',
        '5AF' => 'E02005673',
        '5AG' => 'E02005670',
        '5AH' => 'E02005670',
        '5AJ' => 'E02005673',
        '5AL' => 'E02005673',
        '5AN' => 'E02005673',
        '5AP' => 'E02005673',
        '5AQ' => 'E02005670',
        '5AR' => 'E02005673',
        '5AS' => 'E02005673',
        '5AT' => 'E02005673',
        '5AU' => 'E02005673',
        '5AW' => 'E02005673',
        '5AX' => 'E02005673',
        '5AY' => 'E02005673',
        '5AZ' => 'E02005673',
        '5BA' => 'E02005673',
        '5BB' => 'E02005673',
        '5BD' => 'E02005673',
        '5BE' => 'E02005673',
        '5BF' => 'E02005673',
        '5BG' => 'E02005673',
        '5BH' => 'E02005673',
        '5BJ' => 'E02005673',
        '5BL' => 'E02005673',
        '5BN' => 'E02005673',
        '5BP' => 'E02005673',
        '5BQ' => 'E02005673',
        '5BS' => 'E02005673',
        '5BT' => 'E02005673',
        '5BU' => 'E02005673',
        '5BW' => 'E02005673',
        '5BX' => 'E02005673',
        '5BY' => 'E02005673',
        '5BZ' => 'E02005673',
        '5DA' => 'E02005673',
        '5DB' => 'E02005673',
        '5DD' => 'E02005673',
        '5DE' => 'E02005673',
        '5DF' => 'E02005673',
        '5DG' => 'E02005673',
        '5DH' => 'E02005673',
        '5DJ' => 'E02005673',
        '5DL' => 'E02005673',
        '5DN' => 'E02005673',
        '5DP' => 'E02005673',
        '5DQ' => 'E02005673',
        '5DR' => 'E02005673',
        '5DS' => 'E02005673',
        '5DT' => 'E02005673',
        '5DU' => 'E02005673',
        '5DW' => 'E02005670',
        '5DX' => 'E02005673',
        '5DY' => 'E02005673',
        '5DZ' => 'E02005673',
        '5EA' => 'E02005673',
        '5EB' => 'E02005673',
        '5ED' => 'E02005673',
        '5EE' => 'E02005673',
        '5EF' => 'E02005673',
        '5EG' => 'E02005673',
        '5EH' => 'E02005673',
        '5EJ' => 'E02005673',
        '5EL' => 'E02005673',
        '5EN' => 'E02005673',
        '5EP' => 'E02005673',
        '5EQ' => 'E02005673',
        '5ER' => 'E02005673',
        '5ES' => 'E02005673',
        '5ET' => 'E02005673',
        '5EU' => 'E02005673',
        '5EW' => 'E02005673',
        '5EX' => 'E02005673',
        '5EY' => 'E02005673',
        '5EZ' => 'E02005666',
        '5FA' => 'E02005673',
        '5FD' => 'E02005673',
        '5FE' => 'E02005673',
        '5FF' => 'E02005673',
        '5FG' => 'E02005673',
        '5FH' => 'E02005673',
        '5FJ' => 'E02005673',
        '5FL' => 'E02005673',
        '5FN' => 'E02005673',
        '5HA' => 'E02005673',
        '5HB' => 'E02005673',
        '5HE' => 'E02005670',
        '5HF' => 'E02005673',
        '5HG' => 'E02005673',
        '5HH' => 'E02005670',
        '5HJ' => 'E02005673',
        '5HL' => 'E02005673',
        '5HN' => 'E02005673',
        '5HP' => 'E02005670',
        '5HQ' => 'E02005670',
        '5HR' => 'E02005670',
        '5HS' => 'E02005670',
        '5HT' => 'E02005670',
        '5HU' => 'E02005670',
        '5HW' => 'E02005670',
        '5HX' => 'E02005670',
        '5HY' => 'E02005673',
        '5HZ' => 'E02005673',
        '5JA' => 'E02005670',
        '5JB' => 'E02005673',
        '5JD' => 'E02005673',
        '5JE' => 'E02005673',
        '5JF' => 'E02005673',
        '5JG' => 'E02005673',
        '5JH' => 'E02005673',
        '5JJ' => 'E02005670',
        '5JL' => 'E02005673',
        '5JN' => 'E02005670',
        '5JP' => 'E02005670',
        '5JQ' => 'E02005673',
        '5JR' => 'E02005673',
        '5JS' => 'E02005673',
        '5JT' => 'E02005673',
        '5JU' => 'E02005673',
        '5JW' => 'E02005670',
        '5JX' => 'E02005673',
        '5JY' => 'E02005670',
        '5JZ' => 'E02005673',
        '5LA' => 'E02005673',
        '5LB' => 'E02005673',
        '5LD' => 'E02005673',
        '5LE' => 'E02005673',
        '5LF' => 'E02005673',
        '5LG' => 'E02005673',
        '5LH' => 'E02005673',
        '5LJ' => 'E02005673',
        '5LL' => 'E02005673',
        '5LN' => 'E02005673',
        '5LP' => 'E02005673',
        '5LQ' => 'E02005673',
        '5LR' => 'E02005673',
        '5LS' => 'E02005673',
        '5LT' => 'E02005673',
        '5LU' => 'E02005673',
        '5LW' => 'E02005673',
        '5LY' => 'E02005673',
        '5LZ' => 'E02005670',
        '5NA' => 'E02005670',
        '5NB' => 'E02005673',
        '5ND' => 'E02005673',
        '5NE' => 'E02005673',
        '5NF' => 'E02005673',
        '5NG' => 'E02005673',
        '5NH' => 'E02005673',
        '5NJ' => 'E02005673',
        '5NL' => 'E02005673',
        '5NN' => 'E02005673',
        '5NP' => 'E02005673',
        '5NQ' => 'E02005673',
        '5NR' => 'E02005673',
        '5NS' => 'E02005673',
        '5NT' => 'E02005673',
        '5NU' => 'E02005673',
        '5NW' => 'E02005673',
        '5NX' => 'E02005673',
        '5NY' => 'E02005673',
        '5NZ' => 'E02005673',
        '5PA' => 'E02005673',
        '5PB' => 'E02005673',
        '5PD' => 'E02005673',
        '5PE' => 'E02005673',
        '5PF' => 'E02005673',
        '5PG' => 'E02005673',
        '5PJ' => 'E02005663',
        '5PP' => 'E02005673',
        '5PQ' => 'E02005673',
        '5QA' => 'E02005673',
        '5QB' => 'E02005670',
        '5QD' => 'E02005673',
        '5QE' => 'E02005673',
        '5QG' => 'E02005670',
        '5QH' => 'E02005673',
        '5QJ' => 'E02005673',
        '5QL' => 'E02005673',
        '5QN' => 'E02005673',
        '5QQ' => 'E02005663',
        '5RA' => 'E02005670',
        '5TE' => 'E02005673',
        '5TW' => 'E02005668',
        '5TZ' => 'E02005670',
        '5WG' => 'E02005670',
        '5WP' => 'E02005670',
        '5WQ' => 'E02005670',
        '5WR' => 'E02005670',
        '5WS' => 'E02005670',
        '5WT' => 'E02005670',
        '5WU' => 'E02005670',
        '5WY' => 'E02005670',
        '5WZ' => 'E02005670',
        '5XA' => 'E02005673',
        '5YA' => 'E02005670',
        '5YE' => 'E02005670',
        '5YH' => 'E02005670',
        '5YJ' => 'E02005670',
        '5YL' => 'E02005670',
        '5YN' => 'E02005670',
        '5YP' => 'E02005670',
        '5YQ' => 'E02005670',
        '5YR' => 'E02005670',
        '5YS' => 'E02005670',
        '5YT' => 'E02005670',
        '5YU' => 'E02005670',
        '5YW' => 'E02005670',
        '5YX' => 'E02005670',
        '5YY' => 'E02005670',
        '5YZ' => 'E02005670',
        '5ZJ' => 'E02005670',
        '5ZN' => 'E02005670',
        '5ZQ' => 'E02005670',
        '5ZR' => 'E02005670',
        '5ZY' => 'E02005670',
        '6AA' => 'E02005667',
        '6AB' => 'E02005667',
        '6AD' => 'E02005667',
        '6AE' => 'E02005668',
        '6AF' => 'E02005667',
        '6AG' => 'E02005667',
        '6AH' => 'E02005673',
        '6AJ' => 'E02005673',
        '6AL' => 'E02005673',
        '6AN' => 'E02005667',
        '6AP' => 'E02005667',
        '6AQ' => 'E02005667',
        '6AR' => 'E02005667',
        '6AS' => 'E02005667',
        '6AT' => 'E02005667',
        '6AU' => 'E02005667',
        '6AW' => 'E02005667',
        '6AX' => 'E02005667',
        '6AY' => 'E02005667',
        '6AZ' => 'E02005667',
        '6BA' => 'E02005667',
        '6BB' => 'E02005667',
        '6BD' => 'E02005667',
        '6BE' => 'E02005667',
        '6BF' => 'E02005668',
        '6BG' => 'E02005678',
        '6BH' => 'E02005678',
        '6BJ' => 'E02005678',
        '6BL' => 'E02005663',
        '6BN' => 'E02005667',
        '6BP' => 'E02005667',
        '6BQ' => 'E02005678',
        '6BS' => 'E02005667',
        '6BT' => 'E02005667',
        '6BU' => 'E02005667',
        '6BW' => 'E02005667',
        '6BX' => 'E02005667',
        '6BY' => 'E02005667',
        '6BZ' => 'E02005667',
        '6DA' => 'E02005667',
        '6DB' => 'E02005667',
        '6DD' => 'E02005667',
        '6DE' => 'E02005667',
        '6DF' => 'E02005667',
        '6DG' => 'E02005667',
        '6DH' => 'E02005667',
        '6DJ' => 'E02005667',
        '6DL' => 'E02005667',
        '6DN' => 'E02005667',
        '6DP' => 'E02005667',
        '6DQ' => 'E02005667',
        '6DR' => 'E02005667',
        '6DS' => 'E02005667',
        '6DT' => 'E02005667',
        '6DU' => 'E02005667',
        '6DW' => 'E02005667',
        '6DX' => 'E02005667',
        '6DY' => 'E02005667',
        '6DZ' => 'E02005667',
        '6EA' => 'E02005667',
        '6EB' => 'E02005667',
        '6ED' => 'E02005667',
        '6EE' => 'E02005667',
        '6EF' => 'E02005663',
        '6EG' => 'E02005667',
        '6EH' => 'E02005663',
        '6EJ' => 'E02005663',
        '6EL' => 'E02005663',
        '6EN' => 'E02005663',
        '6EP' => 'E02005663',
        '6EQ' => 'E02005663',
        '6ER' => 'E02005668',
        '6ES' => 'E02005668',
        '6ET' => 'E02005668',
        '6EU' => 'E02005668',
        '6EW' => 'E02005663',
        '6EX' => 'E02005667',
        '6EY' => 'E02005668',
        '6EZ' => 'E02005668',
        '6FA' => 'E02005668',
        '6FB' => 'E02005668',
        '6FD' => 'E02005668',
        '6FE' => 'E02005668',
        '6FF' => 'E02005668',
        '6FG' => 'E02005670',
        '6FH' => 'E02005668',
        '6FJ' => 'E02005668',
        '6FL' => 'E02005670',
        '6FN' => 'E02005670',
        '6FP' => 'E02005670',
        '6FQ' => 'E02005668',
        '6FR' => 'E02005668',
        '6FS' => 'E02005670',
        '6FT' => 'E02005668',
        '6FW' => 'E02005668',
        '6FX' => 'E02005668',
        '6FY' => 'E02005667',
        '6FZ' => 'E02005668',
        '6GA' => 'E02005678',
        '6GB' => 'E02005678',
        '6GD' => 'E02005678',
        '6GE' => 'E02005678',
        '6GF' => 'E02005678',
        '6GG' => 'E02005678',
        '6GH' => 'E02005678',
        '6GJ' => 'E02005678',
        '6GL' => 'E02005678',
        '6GN' => 'E02005678',
        '6GP' => 'E02005678',
        '6GQ' => 'E02005678',
        '6GR' => 'E02005668',
        '6GS' => 'E02005663',
        '6GT' => 'E02005668',
        '6GU' => 'E02005668',
        '6GZ' => 'E02005667',
        '6HA' => 'E02005663',
        '6HB' => 'E02005663',
        '6HD' => 'E02005663',
        '6HE' => 'E02005663',
        '6HF' => 'E02005663',
        '6HG' => 'E02005668',
        '6HH' => 'E02005668',
        '6HJ' => 'E02005668',
        '6HL' => 'E02005668',
        '6HN' => 'E02005668',
        '6HP' => 'E02005668',
        '6HQ' => 'E02005668',
        '6HR' => 'E02005668',
        '6HS' => 'E02005668',
        '6HT' => 'E02005668',
        '6HU' => 'E02005663',
        '6HW' => 'E02005668',
        '6HX' => 'E02005663',
        '6HY' => 'E02005663',
        '6HZ' => 'E02005663',
        '6JA' => 'E02005678',
        '6JB' => 'E02005668',
        '6JD' => 'E02005668',
        '6JE' => 'E02005668',
        '6JF' => 'E02005668',
        '6JG' => 'E02005668',
        '6JH' => 'E02005668',
        '6JJ' => 'E02005668',
        '6JL' => 'E02005668',
        '6JN' => 'E02005668',
        '6JP' => 'E02005668',
        '6JQ' => 'E02005668',
        '6JR' => 'E02005668',
        '6JS' => 'E02005668',
        '6JT' => 'E02005668',
        '6JU' => 'E02005668',
        '6JW' => 'E02005668',
        '6JX' => 'E02005668',
        '6JY' => 'E02005668',
        '6JZ' => 'E02005668',
        '6LA' => 'E02005678',
        '6LB' => 'E02005668',
        '6LD' => 'E02005668',
        '6LE' => 'E02005668',
        '6LF' => 'E02005668',
        '6LG' => 'E02005668',
        '6LH' => 'E02005667',
        '6LJ' => 'E02005667',
        '6LL' => 'E02005668',
        '6LN' => 'E02005668',
        '6LP' => 'E02005667',
        '6LQ' => 'E02005668',
        '6LR' => 'E02005667',
        '6LS' => 'E02005667',
        '6LT' => 'E02005663',
        '6LU' => 'E02005663',
        '6LW' => 'E02005668',
        '6LX' => 'E02005667',
        '6LY' => 'E02005663',
        '6LZ' => 'E02005668',
        '6NA' => 'E02005668',
        '6NB' => 'E02005667',
        '6ND' => 'E02005663',
        '6NE' => 'E02005663',
        '6NF' => 'E02005663',
        '6NG' => 'E02005668',
        '6NH' => 'E02005668',
        '6NJ' => 'E02005663',
        '6NL' => 'E02005663',
        '6NN' => 'E02005663',
        '6NP' => 'E02005663',
        '6NQ' => 'E02005668',
        '6NR' => 'E02005663',
        '6NS' => 'E02005663',
        '6NT' => 'E02005663',
        '6NU' => 'E02005663',
        '6NW' => 'E02005667',
        '6NX' => 'E02005668',
        '6NY' => 'E02005668',
        '6NZ' => 'E02005663',
        '6PA' => 'E02005667',
        '6PB' => 'E02005668',
        '6PD' => 'E02005668',
        '6PE' => 'E02005663',
        '6PF' => 'E02005667',
        '6PG' => 'E02005667',
        '6PH' => 'E02005667',
        '6PJ' => 'E02005667',
        '6PL' => 'E02005667',
        '6PN' => 'E02005667',
        '6PP' => 'E02005668',
        '6PQ' => 'E02005667',
        '6PR' => 'E02005668',
        '6PS' => 'E02005668',
        '6PT' => 'E02005663',
        '6PU' => 'E02005663',
        '6PW' => 'E02005668',
        '6PX' => 'E02005663',
        '6PY' => 'E02005663',
        '6PZ' => 'E02005663',
        '6QA' => 'E02005668',
        '6QB' => 'E02005663',
        '6QD' => 'E02005663',
        '6QE' => 'E02005663',
        '6QF' => 'E02005663',
        '6QG' => 'E02005663',
        '6QH' => 'E02005663',
        '6QJ' => 'E02005663',
        '6QL' => 'E02005663',
        '6QN' => 'E02005663',
        '6QP' => 'E02005663',
        '6QQ' => 'E02005663',
        '6QR' => 'E02005663',
        '6QS' => 'E02005663',
        '6QT' => 'E02005663',
        '6QU' => 'E02005663',
        '6QW' => 'E02005663',
        '6QX' => 'E02005663',
        '6QY' => 'E02005663',
        '6QZ' => 'E02005663',
        '6RA' => 'E02005668',
        '6RB' => 'E02005668',
        '6RD' => 'E02005668',
        '6RE' => 'E02005668',
        '6RF' => 'E02005668',
        '6RG' => 'E02005668',
        '6RH' => 'E02005668',
        '6RJ' => 'E02005668',
        '6RL' => 'E02005668',
        '6RN' => 'E02005668',
        '6RP' => 'E02005668',
        '6RQ' => 'E02005668',
        '6RR' => 'E02005668',
        '6RS' => 'E02005668',
        '6RT' => 'E02005668',
        '6RU' => 'E02005670',
        '6RW' => 'E02005668',
        '6RX' => 'E02005668',
        '6RY' => 'E02005668',
        '6RZ' => 'E02005668',
        '6SA' => 'E02005663',
        '6SB' => 'E02005663',
        '6SD' => 'E02005663',
        '6SE' => 'E02005663',
        '6SF' => 'E02005668',
        '6SG' => 'E02005670',
        '6SH' => 'E02005668',
        '6SJ' => 'E02005668',
        '6SL' => 'E02005668',
        '6SN' => 'E02005668',
        '6SP' => 'E02005668',
        '6SQ' => 'E02005668',
        '6SR' => 'E02005668',
        '6SS' => 'E02005668',
        '6SW' => 'E02005668',
        '6SZ' => 'E02005670',
        '6TE' => 'E02005670',
        '6TF' => 'E02005670',
        '6TG' => 'E02005668',
        '6TH' => 'E02005668',
        '6TJ' => 'E02005668',
        '6TL' => 'E02005667',
        '6TN' => 'E02005667',
        '6TP' => 'E02005667',
        '6TQ' => 'E02005668',
        '6TR' => 'E02005667',
        '6TS' => 'E02005667',
        '6TT' => 'E02005667',
        '6TU' => 'E02005667',
        '6TW' => 'E02005667',
        '6TX' => 'E02005667',
        '6TY' => 'E02005667',
        '6TZ' => 'E02005670',
        '6UA' => 'E02005678',
        '6UB' => 'E02005678',
        '6UD' => 'E02005678',
        '6UE' => 'E02005670',
        '6UF' => 'E02005678',
        '6UG' => 'E02005678',
        '6UH' => 'E02005622',
        '6UJ' => 'E02005622',
        '6UL' => 'E02005667',
        '6UN' => 'E02005667',
        '6UP' => 'E02005622',
        '6UQ' => 'E02005667',
        '6UR' => 'E02005667',
        '6US' => 'E02005667',
        '6UT' => 'E02005667',
        '6UU' => 'E02005667',
        '6UW' => 'E02005622',
        '6UX' => 'E02005622',
        '6UY' => 'E02005622',
        '6UZ' => 'E02005678',
        '6WA' => 'E02005667',
        '6WB' => 'E02005670',
        '6WD' => 'E02005667',
        '6WE' => 'E02005667',
        '6WF' => 'E02005667',
        '6WG' => 'E02005667',
        '6WH' => 'E02005622',
        '6WJ' => 'E02005670',
        '6WL' => 'E02005622',
        '6WN' => 'E02005622',
        '6WP' => 'E02005622',
        '6WQ' => 'E02005622',
        '6WR' => 'E02005622',
        '6WS' => 'E02005622',
        '6WT' => 'E02005622',
        '6WU' => 'E02005670',
        '6WY' => 'E02005670',
        '6WZ' => 'E02005670',
        '6XA' => 'E02005678',
        '6XB' => 'E02005670',
        '6XD' => 'E02005670',
        '6XE' => 'E02005668',
        '6XF' => 'E02005668',
        '6XG' => 'E02005668',
        '6XH' => 'E02005668',
        '6XJ' => 'E02005668',
        '6XL' => 'E02005668',
        '6XN' => 'E02005668',
        '6XP' => 'E02005663',
        '6XQ' => 'E02005668',
        '6XR' => 'E02005663',
        '6XS' => 'E02005663',
        '6XT' => 'E02005663',
        '6XU' => 'E02005663',
        '6XW' => 'E02005663',
        '6XX' => 'E02005663',
        '6XY' => 'E02005663',
        '6XZ' => 'E02005663',
        '6YA' => 'E02005663',
        '6YB' => 'E02005663',
        '6YD' => 'E02005663',
        '6YE' => 'E02005663',
        '6YF' => 'E02005663',
        '6YG' => 'E02005663',
        '6YH' => 'E02005663',
        '6YJ' => 'E02005663',
        '6YL' => 'E02005663',
        '6YN' => 'E02005663',
        '6YP' => 'E02005663',
        '6YQ' => 'E02005663',
        '6YR' => 'E02005663',
        '6YS' => 'E02005663',
        '6YT' => 'E02005663',
        '6YU' => 'E02005663',
        '6YW' => 'E02005663',
        '6YX' => 'E02005670',
        '6YY' => 'E02005663',
        '6YZ' => 'E02005670',
        '6ZA' => 'E02005670',
        '6ZB' => 'E02005670',
        '6ZD' => 'E02005670',
        '6ZE' => 'E02005668',
        '6ZF' => 'E02005670',
        '6ZG' => 'E02005670',
        '6ZH' => 'E02005670',
        '6ZJ' => 'E02005668',
        '6ZL' => 'E02005670',
        '6ZN' => 'E02005670',
        '6ZP' => 'E02005670',
        '6ZQ' => 'E02005670',
        '6ZR' => 'E02005670',
        '6ZS' => 'E02005670',
        '6ZT' => 'E02005670',
        '6ZU' => 'E02005670',
        '6ZW' => 'E02005670',
        '6ZX' => 'E02005670',
        '6ZY' => 'E02005670',
        '6ZZ' => 'E02005670',
        '7AA' => 'E02005667',
        '7AB' => 'E02005673',
        '7AD' => 'E02005673',
        '7AE' => 'E02005673',
        '7AF' => 'E02005673',
        '7AG' => 'E02005666',
        '7AH' => 'E02005673',
        '7AJ' => 'E02005673',
        '7AL' => 'E02005667',
        '7AN' => 'E02005673',
        '7AP' => 'E02005666',
        '7AQ' => 'E02005673',
        '7AR' => 'E02005667',
        '7AS' => 'E02005666',
        '7AT' => 'E02005666',
        '7AU' => 'E02005666',
        '7AW' => 'E02005673',
        '7AX' => 'E02005666',
        '7AY' => 'E02005666',
        '7AZ' => 'E02005666',
        '7BA' => 'E02005666',
        '7BB' => 'E02005666',
        '7BD' => 'E02005673',
        '7BE' => 'E02005666',
        '7BF' => 'E02005666',
        '7BG' => 'E02005666',
        '7BH' => 'E02005666',
        '7BJ' => 'E02005666',
        '7BL' => 'E02005666',
        '7BN' => 'E02005666',
        '7BP' => 'E02005666',
        '7BQ' => 'E02005666',
        '7BS' => 'E02005666',
        '7BT' => 'E02005666',
        '7BU' => 'E02005666',
        '7BW' => 'E02005666',
        '7BX' => 'E02005666',
        '7BY' => 'E02005666',
        '7BZ' => 'E02005666',
        '7DA' => 'E02005666',
        '7DB' => 'E02005666',
        '7DD' => 'E02005666',
        '7DE' => 'E02005666',
        '7DF' => 'E02005666',
        '7DG' => 'E02005666',
        '7DH' => 'E02005666',
        '7DJ' => 'E02005666',
        '7DL' => 'E02005670',
        '7DN' => 'E02005673',
        '7DP' => 'E02005673',
        '7DQ' => 'E02005670',
        '7DR' => 'E02005666',
        '7DS' => 'E02005666',
        '7DT' => 'E02005666',
        '7DU' => 'E02005670',
        '7DW' => 'E02005673',
        '7DX' => 'E02005666',
        '7DY' => 'E02005666',
        '7DZ' => 'E02005666',
        '7EA' => 'E02005666',
        '7EB' => 'E02005666',
        '7ED' => 'E02005666',
        '7EE' => 'E02005666',
        '7EF' => 'E02005666',
        '7EG' => 'E02005666',
        '7EH' => 'E02005666',
        '7EJ' => 'E02005666',
        '7EL' => 'E02005666',
        '7EN' => 'E02005666',
        '7EP' => 'E02005666',
        '7EQ' => 'E02005666',
        '7ER' => 'E02005666',
        '7ES' => 'E02005666',
        '7ET' => 'E02005666',
        '7EU' => 'E02005667',
        '7EW' => 'E02005666',
        '7EX' => 'E02005670',
        '7EY' => 'E02005666',
        '7EZ' => 'E02005666',
        '7FD' => 'E02005667',
        '7GE' => 'E02005666',
        '7HA' => 'E02005667',
        '7HB' => 'E02005666',
        '7HD' => 'E02005666',
        '7HE' => 'E02005666',
        '7HF' => 'E02005666',
        '7HG' => 'E02005666',
        '7HH' => 'E02005667',
        '7HJ' => 'E02005666',
        '7HL' => 'E02005666',
        '7HN' => 'E02005667',
        '7HP' => 'E02005667',
        '7HQ' => 'E02005666',
        '7HR' => 'E02005667',
        '7HS' => 'E02005666',
        '7HT' => 'E02005666',
        '7HU' => 'E02005666',
        '7HW' => 'E02005667',
        '7HX' => 'E02005666',
        '7HY' => 'E02005666',
        '7HZ' => 'E02005666',
        '7JA' => 'E02005667',
        '7JB' => 'E02005667',
        '7JD' => 'E02005667',
        '7JE' => 'E02005667',
        '7JF' => 'E02005666',
        '7JG' => 'E02005666',
        '7JH' => 'E02005666',
        '7JJ' => 'E02005666',
        '7JL' => 'E02005666',
        '7JN' => 'E02005670',
        '7JP' => 'E02005666',
        '7JQ' => 'E02005666',
        '7JR' => 'E02005673',
        '7JS' => 'E02005666',
        '7JT' => 'E02005666',
        '7JU' => 'E02005666',
        '7JW' => 'E02005673',
        '7JX' => 'E02005666',
        '7JY' => 'E02005666',
        '7JZ' => 'E02005666',
        '7LA' => 'E02005666',
        '7LB' => 'E02005666',
        '7LD' => 'E02005666',
        '7LE' => 'E02005666',
        '7LF' => 'E02005666',
        '7LG' => 'E02005666',
        '7LH' => 'E02005666',
        '7LJ' => 'E02005666',
        '7LL' => 'E02005666',
        '7LN' => 'E02005666',
        '7LP' => 'E02005666',
        '7LQ' => 'E02005666',
        '7LR' => 'E02005666',
        '7LS' => 'E02005666',
        '7LT' => 'E02005666',
        '7LU' => 'E02005666',
        '7LW' => 'E02005666',
        '7LX' => 'E02005667',
        '7NA' => 'E02005666',
        '7NB' => 'E02005666',
        '7ND' => 'E02005666',
        '7NE' => 'E02005666',
        '7NF' => 'E02005666',
        '7NG' => 'E02005666',
        '7NH' => 'E02005666',
        '7NJ' => 'E02005666',
        '7NL' => 'E02005666',
        '7NN' => 'E02005666',
        '7NP' => 'E02005666',
        '7NQ' => 'E02005666',
        '7NR' => 'E02005666',
        '7NS' => 'E02005666',
        '7NT' => 'E02005666',
        '7NU' => 'E02005666',
        '7NW' => 'E02005666',
        '7NX' => 'E02005666',
        '7NY' => 'E02005666',
        '7NZ' => 'E02005666',
        '7PA' => 'E02005666',
        '7PB' => 'E02005666',
        '7PD' => 'E02005666',
        '7PE' => 'E02005666',
        '7PF' => 'E02005666',
        '7PG' => 'E02005667',
        '7PH' => 'E02005667',
        '7PJ' => 'E02005666',
        '7PL' => 'E02005667',
        '7PN' => 'E02005667',
        '7PP' => 'E02005666',
        '7PQ' => 'E02005667',
        '7PR' => 'E02005666',
        '7PZ' => 'E02005666',
        '7QA' => 'E02005666',
        '7QB' => 'E02005666',
        '7QD' => 'E02005666',
        '7QE' => 'E02005666',
        '7QF' => 'E02005666',
        '7QG' => 'E02005666',
        '7QH' => 'E02005666',
        '7QJ' => 'E02005666',
        '7QL' => 'E02005666',
        '7QN' => 'E02005666',
        '7QP' => 'E02005666',
        '7QQ' => 'E02005666',
        '7QR' => 'E02005666',
        '7QS' => 'E02005666',
        '7QT' => 'E02005666',
        '7QU' => 'E02005670',
        '7QW' => 'E02005666',
        '7QX' => 'E02005666',
        '7QY' => 'E02005666',
        '7QZ' => 'E02005666',
        '7RA' => 'E02005667',
        '7RB' => 'E02005666',
        '7RD' => 'E02005666',
        '7RE' => 'E02005666',
        '7RF' => 'E02005667',
        '7RG' => 'E02005667',
        '7RH' => 'E02005667',
        '7RJ' => 'E02005667',
        '7RL' => 'E02005667',
        '7RN' => 'E02005667',
        '7RP' => 'E02005667',
        '7RQ' => 'E02005667',
        '7RR' => 'E02005667',
        '7RS' => 'E02005667',
        '7RT' => 'E02005667',
        '7RU' => 'E02005667',
        '7RW' => 'E02005667',
        '7RX' => 'E02005666',
        '7RY' => 'E02005667',
        '7RZ' => 'E02005667',
        '7SL' => 'E02005667',
        '7SX' => 'E02005670',
        '7TU' => 'E02005667',
        '7TX' => 'E02005667',
        '7TY' => 'E02005667',
        '7TZ' => 'E02005667',
        '7UA' => 'E02005667',
        '7UB' => 'E02005667',
        '7UD' => 'E02005667',
        '7UE' => 'E02005667',
        '7UF' => 'E02005667',
        '7UG' => 'E02005667',
        '7UH' => 'E02005667',
        '7UJ' => 'E02005667',
        '7UL' => 'E02005667',
        '7UN' => 'E02005667',
        '7UP' => 'E02005667',
        '7UQ' => 'E02005667',
        '7UR' => 'E02005667',
        '7US' => 'E02005667',
        '7UT' => 'E02005667',
        '7UU' => 'E02005667',
        '7UW' => 'E02005667',
        '7UX' => 'E02005667',
        '7UY' => 'E02005667',
        '7UZ' => 'E02005667',
        '7WA' => 'E02005670',
        '7WB' => 'E02005670',
        '7WF' => 'E02005670',
        '7WG' => 'E02005670',
        '7WH' => 'E02005670',
        '7WJ' => 'E02005670',
        '7WL' => 'E02005670',
        '7WN' => 'E02005670',
        '7WP' => 'E02005670',
        '7WQ' => 'E02005667',
        '7WR' => 'E02005670',
        '7WS' => 'E02005670',
        '7WT' => 'E02005670',
        '7WU' => 'E02005670',
        '7WY' => 'E02005670',
        '7WZ' => 'E02005670',
        '7XA' => 'E02005670',
        '7XG' => 'E02005670',
        '7XP' => 'E02005670',
        '7XQ' => 'E02005670',
        '7XR' => 'E02005670',
        '7YA' => 'E02005666',
        '7YB' => 'E02005670',
        '7YD' => 'E02005667',
        '7YE' => 'E02005670',
        '7YF' => 'E02005670',
        '7YG' => 'E02005670',
        '7YH' => 'E02005670',
        '7YJ' => 'E02005666',
        '7YL' => 'E02005670',
        '7YN' => 'E02005670',
        '7YP' => 'E02005670',
        '7YQ' => 'E02005670',
        '7YR' => 'E02005670',
        '7YS' => 'E02005670',
        '7YT' => 'E02005670',
        '7YU' => 'E02005670',
        '7YW' => 'E02005670',
        '7YX' => 'E02005670',
        '7YY' => 'E02005670',
        '7YZ' => 'E02005670',
        '7ZA' => 'E02005670',
        '7ZB' => 'E02005670',
        '7ZD' => 'E02005670',
        '7ZE' => 'E02005670',
        '7ZF' => 'E02005670',
        '7ZG' => 'E02005670',
        '7ZH' => 'E02005670',
        '7ZJ' => 'E02005670',
        '7ZL' => 'E02005670',
        '7ZN' => 'E02005670',
        '7ZP' => 'E02005670',
        '7ZQ' => 'E02005670',
        '7ZR' => 'E02005670',
        '7ZS' => 'E02005670',
        '7ZT' => 'E02005670',
        '7ZW' => 'E02005670',
        '7ZX' => 'E02005670',
        '7ZZ' => 'E02005670',
        '9AB' => 'E02005670',
        '9AD' => 'E02005670',
        '9AE' => 'E02005670',
        '9AF' => 'E02005670',
        '9AP' => 'E02005670',
        '9AS' => 'E02005670',
        '9AT' => 'E02005670',
        '9AU' => 'E02005670',
        '9AW' => 'E02005670',
        '9AX' => 'E02005670',
        '9AY' => 'E02005670',
        '9AZ' => 'E02005670',
        '9BA' => 'E02005670',
        '9BB' => 'E02005670',
        '9BD' => 'E02005670',
        '9BF' => 'E02005670',
        '9BG' => 'E02005670',
        '9BH' => 'E02005670',
        '9BJ' => 'E02005670',
        '9BL' => 'E02005670',
        '9BN' => 'E02005670',
        '9BP' => 'E02005670',
        '9BQ' => 'E02005670',
        '9BR' => 'E02005670',
        '9BS' => 'E02005670',
        '9BT' => 'E02005670',
        '9BU' => 'E02005670',
        '9BW' => 'E02005670',
        '9BX' => 'E02005670',
        '9BY' => 'E02005670',
        '9BZ' => 'E02005670',
        '9DA' => 'E02005670',
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
