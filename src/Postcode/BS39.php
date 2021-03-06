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
final class BS39
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '4AA' => 'E02003004',
        '4AB' => 'E02003004',
        '4AD' => 'E02003004',
        '4AE' => 'E02003004',
        '4AF' => 'E02003004',
        '4AG' => 'E02003004',
        '4AH' => 'E02003004',
        '4AJ' => 'E02003004',
        '4AL' => 'E02003004',
        '4AN' => 'E02003004',
        '4AP' => 'E02003004',
        '4AQ' => 'E02003004',
        '4AR' => 'E02003004',
        '4AS' => 'E02003004',
        '4AT' => 'E02003004',
        '4AU' => 'E02003004',
        '4AW' => 'E02003004',
        '4AX' => 'E02003004',
        '4AY' => 'E02003004',
        '4AZ' => 'E02003004',
        '4BA' => 'E02003004',
        '4BB' => 'E02003004',
        '4BD' => 'E02003004',
        '4BE' => 'E02003004',
        '4BF' => 'E02003007',
        '4BG' => 'E02003004',
        '4BH' => 'E02003004',
        '4BJ' => 'E02003004',
        '4BL' => 'E02003007',
        '4BN' => 'E02003004',
        '4BP' => 'E02003004',
        '4BQ' => 'E02003004',
        '4BR' => 'E02003004',
        '4BS' => 'E02003004',
        '4BT' => 'E02003004',
        '4BU' => 'E02003004',
        '4BW' => 'E02003007',
        '4BX' => 'E02003004',
        '4BY' => 'E02003004',
        '4BZ' => 'E02003004',
        '4DA' => 'E02003004',
        '4DB' => 'E02003004',
        '4DD' => 'E02003004',
        '4DE' => 'E02003004',
        '4DF' => 'E02003004',
        '4DG' => 'E02003004',
        '4DH' => 'E02003004',
        '4DJ' => 'E02003004',
        '4DL' => 'E02003005',
        '4DN' => 'E02003005',
        '4DP' => 'E02003004',
        '4DQ' => 'E02003004',
        '4DR' => 'E02003004',
        '4DS' => 'E02003004',
        '4DT' => 'E02003004',
        '4DU' => 'E02003004',
        '4DW' => 'E02003005',
        '4DX' => 'E02003004',
        '4DY' => 'E02003004',
        '4DZ' => 'E02003004',
        '4EA' => 'E02003004',
        '4EB' => 'E02003004',
        '4ED' => 'E02003004',
        '4EE' => 'E02003004',
        '4EF' => 'E02003004',
        '4EG' => 'E02003004',
        '4EH' => 'E02003004',
        '4EJ' => 'E02003004',
        '4EL' => 'E02003004',
        '4EN' => 'E02003004',
        '4EP' => 'E02003004',
        '4EQ' => 'E02003004',
        '4ER' => 'E02003004',
        '4ES' => 'E02003004',
        '4ET' => 'E02003004',
        '4EU' => 'E02003005',
        '4EW' => 'E02003004',
        '4EX' => 'E02003005',
        '4EY' => 'E02003005',
        '4EZ' => 'E02003005',
        '4FB' => 'E02003004',
        '4HA' => 'E02003005',
        '4HB' => 'E02003005',
        '4HD' => 'E02003005',
        '4HE' => 'E02003005',
        '4HF' => 'E02003004',
        '4HL' => 'E02003004',
        '4HN' => 'E02003004',
        '4HP' => 'E02003004',
        '4HQ' => 'E02003005',
        '4HR' => 'E02003004',
        '4HS' => 'E02003004',
        '4HT' => 'E02003004',
        '4HU' => 'E02003000',
        '4HW' => 'E02003004',
        '4HX' => 'E02003004',
        '4HY' => 'E02003004',
        '4HZ' => 'E02003004',
        '4JA' => 'E02003004',
        '4JB' => 'E02003004',
        '4JD' => 'E02003004',
        '4JE' => 'E02003004',
        '4JF' => 'E02003004',
        '4JG' => 'E02003004',
        '4JH' => 'E02003004',
        '4JJ' => 'E02003004',
        '4JL' => 'E02003004',
        '4JQ' => 'E02003004',
        '4JT' => 'E02003000',
        '4JU' => 'E02003000',
        '4JX' => 'E02003000',
        '4JY' => 'E02003000',
        '4JZ' => 'E02003000',
        '4LA' => 'E02003000',
        '4LB' => 'E02003000',
        '4LD' => 'E02003000',
        '4LE' => 'E02003000',
        '4LF' => 'E02003000',
        '4LG' => 'E02003000',
        '4LH' => 'E02003000',
        '4LJ' => 'E02003000',
        '4LL' => 'E02003000',
        '4LN' => 'E02003000',
        '4LP' => 'E02003007',
        '4LQ' => 'E02003000',
        '4LW' => 'E02003000',
        '4NA' => 'E02003004',
        '4NB' => 'E02003004',
        '4ND' => 'E02003004',
        '4NE' => 'E02003004',
        '4NF' => 'E02003004',
        '4NG' => 'E02003004',
        '4NH' => 'E02003004',
        '4NJ' => 'E02003004',
        '4NL' => 'E02003004',
        '4NN' => 'E02003004',
        '4NP' => 'E02003004',
        '4NQ' => 'E02003004',
        '4NR' => 'E02003004',
        '4NS' => 'E02003000',
        '4NT' => 'E02003000',
        '4NU' => 'E02003000',
        '4NW' => 'E02003004',
        '4NX' => 'E02003000',
        '4NY' => 'E02003000',
        '4WQ' => 'E02003004',
        '4WR' => 'E02003004',
        '4WS' => 'E02003004',
        '4WT' => 'E02003004',
        '4WU' => 'E02003004',
        '4WW' => 'E02003004',
        '4WX' => 'E02003004',
        '4WY' => 'E02003000',
        '4WZ' => 'E02003004',
        '4XZ' => 'E02003000',
        '4YA' => 'E02003004',
        '4YB' => 'E02003004',
        '4YY' => 'E02003004',
        '4YZ' => 'E02003007',
        '4ZJ' => 'E02003004',
        '4ZN' => 'E02003004',
        '4ZQ' => 'E02003007',
        '5AA' => 'E02003004',
        '5AB' => 'E02003004',
        '5AD' => 'E02003004',
        '5AE' => 'E02003004',
        '5AF' => 'E02003004',
        '5AG' => 'E02003004',
        '5AH' => 'E02003004',
        '5AJ' => 'E02003004',
        '5AL' => 'E02003005',
        '5AN' => 'E02003005',
        '5AP' => 'E02003005',
        '5AQ' => 'E02003004',
        '5AR' => 'E02003005',
        '5AS' => 'E02003005',
        '5AT' => 'E02003005',
        '5AU' => 'E02003005',
        '5AW' => 'E02003005',
        '5AX' => 'E02003005',
        '5AY' => 'E02003005',
        '5AZ' => 'E02003004',
        '5BA' => 'E02003005',
        '5BB' => 'E02003005',
        '5BD' => 'E02003004',
        '5BE' => 'E02003004',
        '5BF' => 'E02003004',
        '5BG' => 'E02003004',
        '5BH' => 'E02003004',
        '5BJ' => 'E02003004',
        '5BL' => 'E02003004',
        '5BN' => 'E02003004',
        '5BP' => 'E02003004',
        '5BQ' => 'E02003004',
        '5BS' => 'E02003004',
        '5BT' => 'E02003004',
        '5BU' => 'E02003004',
        '5BW' => 'E02003004',
        '5BX' => 'E02003004',
        '5BY' => 'E02003004',
        '5BZ' => 'E02003004',
        '5DA' => 'E02003004',
        '5DB' => 'E02003004',
        '5DD' => 'E02003004',
        '5DE' => 'E02003004',
        '5DF' => 'E02003004',
        '5DG' => 'E02003004',
        '5DH' => 'E02003004',
        '5DJ' => 'E02003004',
        '5DL' => 'E02003004',
        '5DN' => 'E02003004',
        '5DP' => 'E02003004',
        '5DQ' => 'E02003004',
        '5DR' => 'E02003004',
        '5DS' => 'E02003004',
        '5DT' => 'E02003004',
        '5DU' => 'E02003004',
        '5DW' => 'E02003004',
        '5DX' => 'E02003004',
        '5DY' => 'E02003004',
        '5DZ' => 'E02003004',
        '5EA' => 'E02003005',
        '5EB' => 'E02003004',
        '5ED' => 'E02003005',
        '5EE' => 'E02003004',
        '5EF' => 'E02003004',
        '5EG' => 'E02003005',
        '5EH' => 'E02003005',
        '5EJ' => 'E02003004',
        '5EL' => 'E02003004',
        '5EN' => 'E02003004',
        '5EP' => 'E02003004',
        '5EQ' => 'E02003004',
        '5ER' => 'E02003005',
        '5ES' => 'E02003005',
        '5ET' => 'E02003005',
        '5EW' => 'E02003007',
        '5GF' => 'E02003005',
        '5GG' => 'E02003007',
        '5LR' => 'E02003004',
        '5PA' => 'E02003004',
        '5PB' => 'E02003004',
        '5PD' => 'E02003004',
        '5PE' => 'E02003004',
        '5PF' => 'E02003004',
        '5PG' => 'E02003004',
        '5PH' => 'E02003004',
        '5PJ' => 'E02003004',
        '5PL' => 'E02003004',
        '5PN' => 'E02003004',
        '5PP' => 'E02003004',
        '5PQ' => 'E02003004',
        '5PR' => 'E02003004',
        '5PS' => 'E02003005',
        '5PT' => 'E02003005',
        '5PU' => 'E02003005',
        '5PW' => 'E02003004',
        '5QA' => 'E02003004',
        '5QD' => 'E02003004',
        '5QE' => 'E02003004',
        '5QF' => 'E02003004',
        '5QG' => 'E02003004',
        '5QH' => 'E02003000',
        '5QJ' => 'E02003004',
        '5QL' => 'E02003004',
        '5QN' => 'E02003004',
        '5QP' => 'E02003004',
        '5QQ' => 'E02003004',
        '5QR' => 'E02003004',
        '5QS' => 'E02003004',
        '5QT' => 'E02003004',
        '5QW' => 'E02003004',
        '5RA' => 'E02003004',
        '5RB' => 'E02003004',
        '5RD' => 'E02003004',
        '5RE' => 'E02003004',
        '5RF' => 'E02003004',
        '5RG' => 'E02003004',
        '5RH' => 'E02003004',
        '5RJ' => 'E02003004',
        '5RL' => 'E02003004',
        '5RN' => 'E02003004',
        '5RP' => 'E02003004',
        '5RQ' => 'E02003004',
        '5RR' => 'E02003004',
        '5RS' => 'E02003004',
        '5RT' => 'E02003004',
        '5RU' => 'E02003004',
        '5RW' => 'E02003004',
        '5RX' => 'E02003004',
        '5RY' => 'E02003004',
        '5RZ' => 'E02003004',
        '5SA' => 'E02003004',
        '5SB' => 'E02003004',
        '5SD' => 'E02003004',
        '5SE' => 'E02003004',
        '5SF' => 'E02003004',
        '5SG' => 'E02003004',
        '5SH' => 'E02003004',
        '5SJ' => 'E02003004',
        '5SL' => 'E02003004',
        '5SN' => 'E02003004',
        '5SP' => 'E02003004',
        '5SQ' => 'E02003004',
        '5SR' => 'E02003004',
        '5SS' => 'E02003004',
        '5ST' => 'E02003004',
        '5SU' => 'E02003004',
        '5SW' => 'E02003004',
        '5SZ' => 'E02003004',
        '5TA' => 'E02003004',
        '5TB' => 'E02003004',
        '5TD' => 'E02003004',
        '5TE' => 'E02003004',
        '5TF' => 'E02003004',
        '5TG' => 'E02003004',
        '5TH' => 'E02003005',
        '5TJ' => 'E02003005',
        '5TL' => 'E02003005',
        '5TN' => 'E02003005',
        '5TP' => 'E02003005',
        '5TQ' => 'E02003005',
        '5TR' => 'E02003005',
        '5TS' => 'E02003005',
        '5TT' => 'E02003005',
        '5TU' => 'E02003005',
        '5TW' => 'E02003005',
        '5TX' => 'E02003005',
        '5TY' => 'E02003005',
        '5TZ' => 'E02003005',
        '5UA' => 'E02003005',
        '5UB' => 'E02003005',
        '5UD' => 'E02003005',
        '5UE' => 'E02003005',
        '5UF' => 'E02003004',
        '5UG' => 'E02003005',
        '5UH' => 'E02003005',
        '5UJ' => 'E02003005',
        '5UL' => 'E02003005',
        '5UN' => 'E02003005',
        '5UP' => 'E02003005',
        '5UQ' => 'E02003005',
        '5UR' => 'E02003005',
        '5US' => 'E02003005',
        '5UT' => 'E02003005',
        '5UU' => 'E02003005',
        '5UW' => 'E02003005',
        '5UX' => 'E02003005',
        '5UY' => 'E02003005',
        '5UZ' => 'E02003005',
        '5WA' => 'E02003004',
        '5WB' => 'E02003004',
        '5WD' => 'E02003007',
        '5WE' => 'E02003007',
        '5WF' => 'E02003004',
        '5WG' => 'E02003004',
        '5WH' => 'E02003004',
        '5WJ' => 'E02003004',
        '5WL' => 'E02003004',
        '5WN' => 'E02003004',
        '5WP' => 'E02003004',
        '5WQ' => 'E02003004',
        '5WR' => 'E02003004',
        '5WS' => 'E02003004',
        '5WT' => 'E02003004',
        '5WU' => 'E02003004',
        '5WW' => 'E02003004',
        '5WX' => 'E02003004',
        '5WZ' => 'E02003004',
        '5XA' => 'E02003005',
        '5XB' => 'E02003005',
        '5XD' => 'E02003005',
        '5XE' => 'E02003005',
        '5XF' => 'E02003005',
        '5XG' => 'E02003005',
        '5XH' => 'E02003005',
        '5XJ' => 'E02003005',
        '5XL' => 'E02003005',
        '5XN' => 'E02003005',
        '5XP' => 'E02003005',
        '5XQ' => 'E02003005',
        '5XR' => 'E02003005',
        '5XS' => 'E02003005',
        '5XT' => 'E02003005',
        '5XU' => 'E02003005',
        '5XW' => 'E02003005',
        '5XX' => 'E02003004',
        '5XY' => 'E02003005',
        '5XZ' => 'E02003004',
        '5YA' => 'E02003004',
        '5YB' => 'E02003007',
        '5YD' => 'E02003007',
        '5YE' => 'E02003007',
        '5YF' => 'E02003004',
        '5YG' => 'E02003007',
        '5YH' => 'E02003004',
        '5YJ' => 'E02003004',
        '5YL' => 'E02003004',
        '5YN' => 'E02003004',
        '5YP' => 'E02003004',
        '5YQ' => 'E02003007',
        '5YS' => 'E02003004',
        '5YZ' => 'E02003004',
        '5ZN' => 'E02003004',
        '5ZU' => 'E02003004',
        '5ZY' => 'E02003007',
        '6AA' => 'E02003007',
        '6AB' => 'E02003007',
        '6AD' => 'E02003007',
        '6AG' => 'E02003007',
        '6EA' => 'E02003007',
        '6EB' => 'E02003004',
        '6ED' => 'E02003007',
        '6EE' => 'E02003007',
        '6EF' => 'E02003007',
        '6EG' => 'E02003007',
        '6EH' => 'E02003004',
        '6EJ' => 'E02003007',
        '6EL' => 'E02003007',
        '6EN' => 'E02003007',
        '6EP' => 'E02003007',
        '6EQ' => 'E02003007',
        '6ER' => 'E02003007',
        '6ES' => 'E02003007',
        '6ET' => 'E02003007',
        '6EU' => 'E02003007',
        '6EX' => 'E02003007',
        '6EY' => 'E02003007',
        '6HA' => 'E02003007',
        '6HB' => 'E02003007',
        '6HD' => 'E02003007',
        '6HE' => 'E02003007',
        '6HF' => 'E02003007',
        '6HG' => 'E02003007',
        '6HH' => 'E02003007',
        '6HJ' => 'E02003007',
        '6HL' => 'E02003007',
        '6HN' => 'E02003007',
        '6HP' => 'E02003007',
        '6HQ' => 'E02003007',
        '6HR' => 'E02003007',
        '6HS' => 'E02003007',
        '6HT' => 'E02003007',
        '6HU' => 'E02003007',
        '6HW' => 'E02003007',
        '6HX' => 'E02003007',
        '6HY' => 'E02003007',
        '6HZ' => 'E02003007',
        '6JA' => 'E02003007',
        '6JB' => 'E02003007',
        '6JD' => 'E02003007',
        '6JE' => 'E02003007',
        '6JF' => 'E02003007',
        '6JG' => 'E02003007',
        '6JH' => 'E02003007',
        '6JJ' => 'E02003007',
        '6JL' => 'E02003007',
        '6JN' => 'E02003007',
        '6JP' => 'E02003007',
        '6JQ' => 'E02003007',
        '6JR' => 'E02003007',
        '6JS' => 'E02003007',
        '6JT' => 'E02003007',
        '6JU' => 'E02003007',
        '6JW' => 'E02003007',
        '6JX' => 'E02003007',
        '6JY' => 'E02003007',
        '6JZ' => 'E02003007',
        '6LA' => 'E02003007',
        '6LB' => 'E02003007',
        '6LD' => 'E02003007',
        '6TE' => 'E02003007',
        '6TG' => 'E02003007',
        '6TH' => 'E02003007',
        '6TJ' => 'E02003007',
        '6TL' => 'E02003007',
        '6TN' => 'E02003007',
        '6TP' => 'E02003007',
        '6TQ' => 'E02003007',
        '6TR' => 'E02006052',
        '6TS' => 'E02006052',
        '6TT' => 'E02003007',
        '6TU' => 'E02003007',
        '6TW' => 'E02003007',
        '6TX' => 'E02003007',
        '6TY' => 'E02003007',
        '6TZ' => 'E02003007',
        '6UA' => 'E02003007',
        '6UB' => 'E02003007',
        '6UD' => 'E02003007',
        '6UE' => 'E02003007',
        '6UF' => 'E02003007',
        '6UG' => 'E02003007',
        '6UH' => 'E02003007',
        '6UJ' => 'E02003007',
        '6UL' => 'E02003007',
        '6UN' => 'E02003007',
        '6UP' => 'E02003007',
        '6UQ' => 'E02003007',
        '6UR' => 'E02003007',
        '6US' => 'E02003007',
        '6UT' => 'E02003007',
        '6UU' => 'E02003007',
        '6UW' => 'E02003007',
        '6UX' => 'E02003007',
        '6UY' => 'E02003007',
        '6WA' => 'E02003007',
        '6WB' => 'E02003007',
        '6WD' => 'E02003007',
        '6WX' => 'E02003007',
        '6WY' => 'E02003007',
        '6WZ' => 'E02003007',
        '6XL' => 'E02003007',
        '6XN' => 'E02003007',
        '6XW' => 'E02003007',
        '6XX' => 'E02003007',
        '6XY' => 'E02003007',
        '6XZ' => 'E02003007',
        '6YA' => 'E02003007',
        '6YB' => 'E02003007',
        '6YD' => 'E02003007',
        '6YE' => 'E02003004',
        '6YF' => 'E02003007',
        '6YG' => 'E02003007',
        '6YH' => 'E02003007',
        '6YJ' => 'E02003004',
        '6YL' => 'E02003007',
        '6YN' => 'E02003007',
        '6YP' => 'E02003007',
        '6YQ' => 'E02003007',
        '6YR' => 'E02003007',
        '6YS' => 'E02003007',
        '6YW' => 'E02003007',
        '6YX' => 'E02003007',
        '6YY' => 'E02003007',
        '6YZ' => 'E02003007',
        '6ZP' => 'E02003007',
        '7AA' => 'E02003007',
        '7AB' => 'E02003007',
        '7AD' => 'E02003007',
        '7AE' => 'E02003007',
        '7AF' => 'E02003007',
        '7AG' => 'E02003007',
        '7AH' => 'E02003007',
        '7AJ' => 'E02003007',
        '7AL' => 'E02003007',
        '7AN' => 'E02003007',
        '7AP' => 'E02003007',
        '7AQ' => 'E02003007',
        '7AR' => 'E02003007',
        '7AS' => 'E02003007',
        '7AT' => 'E02003007',
        '7AU' => 'E02003007',
        '7AX' => 'E02003007',
        '7AY' => 'E02003007',
        '7AZ' => 'E02003007',
        '7BA' => 'E02003007',
        '7BB' => 'E02003007',
        '7BD' => 'E02003007',
        '7FB' => 'E02003007',
        '7HA' => 'E02003007',
        '7LA' => 'E02003007',
        '7LD' => 'E02003007',
        '7LE' => 'E02003007',
        '7LF' => 'E02003007',
        '7LG' => 'E02003007',
        '7LH' => 'E02003007',
        '7LJ' => 'E02003007',
        '7LL' => 'E02003007',
        '7LN' => 'E02003007',
        '7LP' => 'E02003007',
        '7LQ' => 'E02003007',
        '7LR' => 'E02003007',
        '7LS' => 'E02003007',
        '7LT' => 'E02003007',
        '7LU' => 'E02003007',
        '7LW' => 'E02003007',
        '7LX' => 'E02003007',
        '7LY' => 'E02003007',
        '7LZ' => 'E02003007',
        '7NA' => 'E02003007',
        '7NB' => 'E02003007',
        '7ND' => 'E02003007',
        '7NE' => 'E02003007',
        '7NF' => 'E02003007',
        '7NG' => 'E02003007',
        '7NH' => 'E02003007',
        '7NJ' => 'E02003007',
        '7NL' => 'E02003007',
        '7NN' => 'E02003007',
        '7NP' => 'E02003007',
        '7NQ' => 'E02003007',
        '7NR' => 'E02003007',
        '7NS' => 'E02003007',
        '7NT' => 'E02003007',
        '7NU' => 'E02003007',
        '7NW' => 'E02003007',
        '7NX' => 'E02003007',
        '7NY' => 'E02003007',
        '7NZ' => 'E02003007',
        '7PA' => 'E02003007',
        '7PB' => 'E02003007',
        '7PD' => 'E02003007',
        '7PE' => 'E02003007',
        '7PF' => 'E02003007',
        '7PG' => 'E02003007',
        '7PH' => 'E02003007',
        '7PJ' => 'E02003007',
        '7PL' => 'E02003007',
        '7PN' => 'E02003007',
        '7PP' => 'E02003007',
        '7PQ' => 'E02003007',
        '7PR' => 'E02003007',
        '7PS' => 'E02003007',
        '7PT' => 'E02003007',
        '7PU' => 'E02003007',
        '7PW' => 'E02003007',
        '7PX' => 'E02003007',
        '7PY' => 'E02003007',
        '7PZ' => 'E02003007',
        '7QA' => 'E02003007',
        '7QB' => 'E02003007',
        '7QD' => 'E02003007',
        '7QE' => 'E02003007',
        '7QF' => 'E02003007',
        '7QG' => 'E02003007',
        '7QH' => 'E02003007',
        '7QJ' => 'E02003007',
        '7QL' => 'E02003007',
        '7QN' => 'E02003007',
        '7QP' => 'E02003007',
        '7QQ' => 'E02003007',
        '7QR' => 'E02003007',
        '7QS' => 'E02003007',
        '7QT' => 'E02003007',
        '7QU' => 'E02003007',
        '7QW' => 'E02003007',
        '7QX' => 'E02003007',
        '7QY' => 'E02003007',
        '7QZ' => 'E02003007',
        '7RA' => 'E02003007',
        '7RB' => 'E02003007',
        '7RD' => 'E02003007',
        '7RE' => 'E02003007',
        '7RF' => 'E02003007',
        '7RG' => 'E02003007',
        '7RH' => 'E02003007',
        '7RJ' => 'E02003007',
        '7RL' => 'E02003007',
        '7RN' => 'E02003007',
        '7RP' => 'E02003007',
        '7RQ' => 'E02003007',
        '7RR' => 'E02003007',
        '7RS' => 'E02003007',
        '7RT' => 'E02003007',
        '7RU' => 'E02003007',
        '7RW' => 'E02003007',
        '7RX' => 'E02003007',
        '7RY' => 'E02003007',
        '7RZ' => 'E02003007',
        '7SA' => 'E02003007',
        '7SB' => 'E02003007',
        '7SD' => 'E02003007',
        '7SE' => 'E02003007',
        '7SF' => 'E02003007',
        '7SG' => 'E02003007',
        '7SH' => 'E02003007',
        '7SJ' => 'E02003009',
        '7SL' => 'E02003007',
        '7SN' => 'E02003007',
        '7SP' => 'E02003007',
        '7SQ' => 'E02003007',
        '7SR' => 'E02003007',
        '7SS' => 'E02003007',
        '7ST' => 'E02003007',
        '7SU' => 'E02003007',
        '7SW' => 'E02003007',
        '7SX' => 'E02003007',
        '7SY' => 'E02003007',
        '7SZ' => 'E02003007',
        '7TA' => 'E02003007',
        '7TB' => 'E02003007',
        '7TD' => 'E02003007',
        '7TE' => 'E02003007',
        '7TF' => 'E02003007',
        '7TG' => 'E02003007',
        '7WA' => 'E02003007',
        '7WB' => 'E02003007',
        '7WD' => 'E02003007',
        '7WE' => 'E02003007',
        '7WT' => 'E02003007',
        '7WU' => 'E02003007',
        '7WW' => 'E02003007',
        '7WX' => 'E02003007',
        '7WY' => 'E02003007',
        '7WZ' => 'E02003007',
        '7XA' => 'E02003007',
        '7XB' => 'E02003007',
        '7XD' => 'E02003007',
        '7XE' => 'E02003007',
        '7XF' => 'E02003007',
        '7XG' => 'E02003007',
        '7XH' => 'E02003007',
        '7XJ' => 'E02003007',
        '7XL' => 'E02003007',
        '7XN' => 'E02003007',
        '7XP' => 'E02003007',
        '7XQ' => 'E02003007',
        '7XS' => 'E02003007',
        '7XT' => 'E02003007',
        '7XU' => 'E02003007',
        '7XW' => 'E02003007',
        '7YA' => 'E02003007',
        '7YD' => 'E02003007',
        '7YR' => 'E02003007',
        '7YS' => 'E02003007',
        '7YT' => 'E02003007',
        '7YU' => 'E02003007',
        '7YX' => 'E02003007',
        '7YY' => 'E02003007',
        '7YZ' => 'E02003007',
        '7ZN' => 'E02003007',
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
