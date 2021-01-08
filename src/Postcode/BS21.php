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
final class BS21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AB' => 'E02003074',
        '5AD' => 'E02003074',
        '5AE' => 'E02003074',
        '5AF' => 'E02003074',
        '5AG' => 'E02003074',
        '5AH' => 'E02003074',
        '5AJ' => 'E02003074',
        '5AL' => 'E02003074',
        '5AN' => 'E02003074',
        '5AP' => 'E02003074',
        '5AQ' => 'E02003074',
        '5AR' => 'E02003074',
        '5AS' => 'E02003074',
        '5AT' => 'E02003074',
        '5AU' => 'E02003074',
        '5AW' => 'E02003074',
        '5AX' => 'E02003074',
        '5AY' => 'E02003074',
        '5AZ' => 'E02003074',
        '5BA' => 'E02003074',
        '5BB' => 'E02003074',
        '5BD' => 'E02003074',
        '5BE' => 'E02003074',
        '5BF' => 'E02003074',
        '5BG' => 'E02003074',
        '5BH' => 'E02003074',
        '5BJ' => 'E02003074',
        '5BL' => 'E02003074',
        '5BN' => 'E02003074',
        '5BP' => 'E02003074',
        '5BQ' => 'E02003074',
        '5BS' => 'E02003074',
        '5BT' => 'E02003074',
        '5BU' => 'E02003074',
        '5BW' => 'E02003074',
        '5BX' => 'E02003074',
        '5BY' => 'E02003074',
        '5BZ' => 'E02003074',
        '5DA' => 'E02003074',
        '5DB' => 'E02003074',
        '5DD' => 'E02003074',
        '5DE' => 'E02003074',
        '5DF' => 'E02003074',
        '5DG' => 'E02003074',
        '5DH' => 'E02003074',
        '5DJ' => 'E02003071',
        '5DL' => 'E02003071',
        '5DN' => 'E02003071',
        '5DP' => 'E02003074',
        '5DQ' => 'E02003074',
        '5DR' => 'E02003074',
        '5DS' => 'E02003071',
        '5DT' => 'E02003071',
        '5DW' => 'E02003074',
        '5DY' => 'E02003074',
        '5DZ' => 'E02003074',
        '5EA' => 'E02003074',
        '5EB' => 'E02003074',
        '5ED' => 'E02003074',
        '5EE' => 'E02003074',
        '5EF' => 'E02003074',
        '5EG' => 'E02003074',
        '5EH' => 'E02003074',
        '5EJ' => 'E02003074',
        '5EL' => 'E02003074',
        '5EN' => 'E02003074',
        '5EP' => 'E02003074',
        '5EQ' => 'E02003074',
        '5ER' => 'E02003074',
        '5ES' => 'E02003074',
        '5ET' => 'E02003074',
        '5EU' => 'E02003074',
        '5EW' => 'E02003074',
        '5EX' => 'E02003074',
        '5EY' => 'E02003074',
        '5EZ' => 'E02003074',
        '5HA' => 'E02003074',
        '5HB' => 'E02003074',
        '5HD' => 'E02003074',
        '5HE' => 'E02003074',
        '5HF' => 'E02003074',
        '5HG' => 'E02003074',
        '5HH' => 'E02003074',
        '5HJ' => 'E02003074',
        '5HL' => 'E02003074',
        '5HN' => 'E02003074',
        '5HP' => 'E02003074',
        '5HQ' => 'E02003074',
        '5HR' => 'E02003074',
        '5HS' => 'E02003074',
        '5HT' => 'E02003074',
        '5HU' => 'E02003074',
        '5HW' => 'E02003074',
        '5HX' => 'E02003074',
        '5HY' => 'E02003074',
        '5HZ' => 'E02003074',
        '5JD' => 'E02003074',
        '5JE' => 'E02003074',
        '5JF' => 'E02003074',
        '5JG' => 'E02003074',
        '5JH' => 'E02003074',
        '5JJ' => 'E02003074',
        '5JL' => 'E02003074',
        '5JN' => 'E02003074',
        '5JQ' => 'E02003074',
        '5JW' => 'E02003071',
        '5LA' => 'E02003074',
        '5LB' => 'E02003074',
        '5LD' => 'E02003074',
        '5LP' => 'E02003074',
        '5LW' => 'E02003074',
        '5NS' => 'E02003074',
        '5WA' => 'E02003074',
        '5WB' => 'E02003071',
        '5WE' => 'E02003074',
        '5WX' => 'E02003071',
        '5WY' => 'E02003071',
        '5WZ' => 'E02003071',
        '5YA' => 'E02003071',
        '5YB' => 'E02003071',
        '5YD' => 'E02003074',
        '5YE' => 'E02003074',
        '5YF' => 'E02003074',
        '5YG' => 'E02003071',
        '5YH' => 'E02003071',
        '5YJ' => 'E02003071',
        '5YL' => 'E02003071',
        '5YZ' => 'E02003074',
        '5ZQ' => 'E02003071',
        '6AA' => 'E02003069',
        '6AB' => 'E02003069',
        '6AD' => 'E02003069',
        '6AE' => 'E02003069',
        '6AF' => 'E02003069',
        '6AG' => 'E02003069',
        '6AH' => 'E02003069',
        '6AJ' => 'E02003069',
        '6AL' => 'E02003069',
        '6AN' => 'E02003069',
        '6AP' => 'E02003069',
        '6AQ' => 'E02003069',
        '6AR' => 'E02003069',
        '6AS' => 'E02003069',
        '6AT' => 'E02003069',
        '6AU' => 'E02003069',
        '6AW' => 'E02003069',
        '6AX' => 'E02003069',
        '6AY' => 'E02003069',
        '6AZ' => 'E02003069',
        '6BA' => 'E02003069',
        '6BB' => 'E02003069',
        '6BD' => 'E02003069',
        '6BE' => 'E02003069',
        '6BF' => 'E02003071',
        '6BG' => 'E02003071',
        '6BH' => 'E02003069',
        '6BJ' => 'E02003069',
        '6BL' => 'E02003069',
        '6BN' => 'E02003069',
        '6BP' => 'E02003069',
        '6BQ' => 'E02003069',
        '6BS' => 'E02003069',
        '6BT' => 'E02003071',
        '6BU' => 'E02003071',
        '6BW' => 'E02003069',
        '6BX' => 'E02003071',
        '6BY' => 'E02003071',
        '6BZ' => 'E02003071',
        '6DA' => 'E02003071',
        '6DB' => 'E02003071',
        '6DD' => 'E02003071',
        '6DE' => 'E02003071',
        '6DF' => 'E02003071',
        '6DG' => 'E02003069',
        '6DH' => 'E02003071',
        '6DJ' => 'E02003071',
        '6DL' => 'E02003071',
        '6DN' => 'E02003071',
        '6DP' => 'E02003071',
        '6DQ' => 'E02003071',
        '6DR' => 'E02003071',
        '6DS' => 'E02003069',
        '6DT' => 'E02003071',
        '6DU' => 'E02003071',
        '6DW' => 'E02003071',
        '6DX' => 'E02003071',
        '6DY' => 'E02003071',
        '6DZ' => 'E02003071',
        '6EA' => 'E02003071',
        '6EB' => 'E02003071',
        '6ED' => 'E02003071',
        '6EE' => 'E02003071',
        '6EF' => 'E02003071',
        '6EG' => 'E02003071',
        '6EH' => 'E02003071',
        '6EJ' => 'E02003071',
        '6EL' => 'E02003071',
        '6EN' => 'E02003071',
        '6EP' => 'E02003071',
        '6EQ' => 'E02003071',
        '6ER' => 'E02003071',
        '6ES' => 'E02003071',
        '6ET' => 'E02003071',
        '6EU' => 'E02003071',
        '6EW' => 'E02003071',
        '6EX' => 'E02003071',
        '6EY' => 'E02003071',
        '6EZ' => 'E02003071',
        '6FB' => 'E02003071',
        '6FD' => 'E02003071',
        '6FE' => 'E02003071',
        '6FF' => 'E02003071',
        '6FG' => 'E02003069',
        '6FH' => 'E02003071',
        '6FJ' => 'E02003071',
        '6FL' => 'E02003071',
        '6FN' => 'E02003071',
        '6FP' => 'E02003071',
        '6FQ' => 'E02003076',
        '6FR' => 'E02003074',
        '6FS' => 'E02003071',
        '6FT' => 'E02003076',
        '6FU' => 'E02003071',
        '6FW' => 'E02003069',
        '6GW' => 'E02003071',
        '6GX' => 'E02003071',
        '6GY' => 'E02003071',
        '6GZ' => 'E02003071',
        '6HA' => 'E02003071',
        '6HB' => 'E02003071',
        '6HD' => 'E02003071',
        '6HE' => 'E02003071',
        '6HF' => 'E02003071',
        '6HG' => 'E02003071',
        '6HH' => 'E02003071',
        '6HJ' => 'E02003071',
        '6HL' => 'E02003071',
        '6HN' => 'E02003071',
        '6HP' => 'E02003071',
        '6HQ' => 'E02003071',
        '6HR' => 'E02003071',
        '6HS' => 'E02003071',
        '6HT' => 'E02003071',
        '6HU' => 'E02003069',
        '6HW' => 'E02003071',
        '6HX' => 'E02003071',
        '6HY' => 'E02003074',
        '6HZ' => 'E02003074',
        '6JA' => 'E02003071',
        '6JB' => 'E02003074',
        '6JD' => 'E02003074',
        '6JE' => 'E02003074',
        '6JF' => 'E02003074',
        '6JG' => 'E02003074',
        '6JH' => 'E02003074',
        '6JJ' => 'E02003074',
        '6JL' => 'E02003074',
        '6JN' => 'E02003074',
        '6JP' => 'E02003074',
        '6JQ' => 'E02003074',
        '6JR' => 'E02003074',
        '6JS' => 'E02003074',
        '6JT' => 'E02003074',
        '6JU' => 'E02003074',
        '6JW' => 'E02003074',
        '6JX' => 'E02003074',
        '6JY' => 'E02003074',
        '6JZ' => 'E02003074',
        '6LA' => 'E02003074',
        '6LB' => 'E02003074',
        '6LD' => 'E02003074',
        '6LE' => 'E02003074',
        '6LF' => 'E02003074',
        '6LG' => 'E02003074',
        '6LH' => 'E02003074',
        '6LJ' => 'E02003074',
        '6LL' => 'E02003074',
        '6LN' => 'E02003074',
        '6LP' => 'E02003074',
        '6LQ' => 'E02003074',
        '6LR' => 'E02003074',
        '6LS' => 'E02003074',
        '6LT' => 'E02003071',
        '6LU' => 'E02003071',
        '6LW' => 'E02003074',
        '6LX' => 'E02003071',
        '6LY' => 'E02003071',
        '6LZ' => 'E02003071',
        '6NA' => 'E02003071',
        '6NB' => 'E02003071',
        '6ND' => 'E02003071',
        '6NE' => 'E02003071',
        '6NF' => 'E02003071',
        '6NG' => 'E02003071',
        '6NH' => 'E02003071',
        '6NJ' => 'E02003071',
        '6NL' => 'E02003071',
        '6NN' => 'E02003071',
        '6NP' => 'E02003071',
        '6NQ' => 'E02003071',
        '6NR' => 'E02003071',
        '6NS' => 'E02003071',
        '6NT' => 'E02003071',
        '6NU' => 'E02003071',
        '6NW' => 'E02003071',
        '6NX' => 'E02003071',
        '6NY' => 'E02003071',
        '6NZ' => 'E02003071',
        '6PA' => 'E02003071',
        '6PB' => 'E02003071',
        '6PD' => 'E02003071',
        '6PE' => 'E02003071',
        '6PF' => 'E02003071',
        '6PG' => 'E02003071',
        '6PH' => 'E02003071',
        '6PJ' => 'E02003071',
        '6PL' => 'E02003071',
        '6PN' => 'E02003071',
        '6PP' => 'E02003071',
        '6PQ' => 'E02003071',
        '6PR' => 'E02003071',
        '6PS' => 'E02003071',
        '6PT' => 'E02003071',
        '6PU' => 'E02003071',
        '6PW' => 'E02003071',
        '6PX' => 'E02003071',
        '6PY' => 'E02003071',
        '6PZ' => 'E02003074',
        '6QA' => 'E02003071',
        '6QB' => 'E02003071',
        '6QD' => 'E02003071',
        '6QE' => 'E02003071',
        '6QF' => 'E02003071',
        '6QG' => 'E02003074',
        '6QH' => 'E02003071',
        '6QJ' => 'E02003074',
        '6QL' => 'E02003071',
        '6QN' => 'E02003071',
        '6QP' => 'E02003071',
        '6QQ' => 'E02003074',
        '6QR' => 'E02003071',
        '6QS' => 'E02003071',
        '6QT' => 'E02003070',
        '6QU' => 'E02003069',
        '6QW' => 'E02003071',
        '6QX' => 'E02003069',
        '6QY' => 'E02003069',
        '6QZ' => 'E02003070',
        '6RA' => 'E02003070',
        '6RB' => 'E02003070',
        '6RD' => 'E02003070',
        '6RE' => 'E02003070',
        '6RF' => 'E02003070',
        '6RG' => 'E02003070',
        '6RH' => 'E02003070',
        '6RJ' => 'E02003070',
        '6RL' => 'E02003070',
        '6RN' => 'E02003070',
        '6RP' => 'E02003070',
        '6RQ' => 'E02003070',
        '6RR' => 'E02003074',
        '6RS' => 'E02003076',
        '6RT' => 'E02003070',
        '6RU' => 'E02003070',
        '6RW' => 'E02003069',
        '6RX' => 'E02003070',
        '6RY' => 'E02003070',
        '6RZ' => 'E02003070',
        '6SA' => 'E02003070',
        '6SB' => 'E02003070',
        '6SD' => 'E02003070',
        '6SE' => 'E02003070',
        '6SF' => 'E02003070',
        '6SG' => 'E02003070',
        '6SH' => 'E02003070',
        '6SJ' => 'E02003070',
        '6SL' => 'E02003070',
        '6SN' => 'E02003070',
        '6SP' => 'E02003070',
        '6SQ' => 'E02003070',
        '6SR' => 'E02003076',
        '6SS' => 'E02003071',
        '6ST' => 'E02003076',
        '6SU' => 'E02003070',
        '6SW' => 'E02003070',
        '6SX' => 'E02003070',
        '6SY' => 'E02003071',
        '6SZ' => 'E02003071',
        '6TA' => 'E02003071',
        '6TB' => 'E02003076',
        '6TD' => 'E02003069',
        '6TE' => 'E02003069',
        '6TF' => 'E02003069',
        '6TG' => 'E02003076',
        '6TH' => 'E02003076',
        '6TJ' => 'E02003076',
        '6TL' => 'E02003076',
        '6TN' => 'E02003076',
        '6TP' => 'E02003076',
        '6TQ' => 'E02003076',
        '6TR' => 'E02003076',
        '6TS' => 'E02003076',
        '6TT' => 'E02003076',
        '6TU' => 'E02003076',
        '6TW' => 'E02003076',
        '6TX' => 'E02003076',
        '6TY' => 'E02003076',
        '6TZ' => 'E02003076',
        '6UA' => 'E02003076',
        '6UB' => 'E02003076',
        '6UD' => 'E02003076',
        '6UE' => 'E02003076',
        '6UF' => 'E02003071',
        '6UG' => 'E02003071',
        '6UH' => 'E02003074',
        '6UJ' => 'E02003076',
        '6UL' => 'E02003076',
        '6UN' => 'E02003076',
        '6UP' => 'E02003076',
        '6UQ' => 'E02003071',
        '6UR' => 'E02003074',
        '6US' => 'E02003076',
        '6UT' => 'E02003074',
        '6UU' => 'E02003074',
        '6UW' => 'E02003076',
        '6UX' => 'E02003074',
        '6UY' => 'E02003076',
        '6UZ' => 'E02003076',
        '6WA' => 'E02003071',
        '6WB' => 'E02003071',
        '6WD' => 'E02003071',
        '6WE' => 'E02003071',
        '6WF' => 'E02003071',
        '6WG' => 'E02003071',
        '6WH' => 'E02003071',
        '6WJ' => 'E02003071',
        '6WL' => 'E02003071',
        '6WN' => 'E02003071',
        '6WP' => 'E02003071',
        '6WQ' => 'E02003071',
        '6WR' => 'E02003071',
        '6WS' => 'E02003071',
        '6WT' => 'E02003071',
        '6WU' => 'E02003071',
        '6WW' => 'E02003071',
        '6WX' => 'E02003071',
        '6WY' => 'E02003071',
        '6WZ' => 'E02003071',
        '6XA' => 'E02003076',
        '6XB' => 'E02003076',
        '6XD' => 'E02003076',
        '6XE' => 'E02003076',
        '6XF' => 'E02003076',
        '6XG' => 'E02003076',
        '6XH' => 'E02003076',
        '6XJ' => 'E02003076',
        '6XL' => 'E02003076',
        '6XN' => 'E02003076',
        '6XP' => 'E02003076',
        '6XQ' => 'E02003076',
        '6XR' => 'E02003076',
        '6XS' => 'E02003076',
        '6XT' => 'E02003069',
        '6XU' => 'E02003069',
        '6XW' => 'E02003076',
        '6XX' => 'E02003071',
        '6XY' => 'E02003076',
        '6XZ' => 'E02003071',
        '6YA' => 'E02003071',
        '6YB' => 'E02003071',
        '6YD' => 'E02003071',
        '6YE' => 'E02003069',
        '6YF' => 'E02003069',
        '6YG' => 'E02003071',
        '6YH' => 'E02003069',
        '6YJ' => 'E02003069',
        '6YL' => 'E02003069',
        '6YN' => 'E02003071',
        '6YP' => 'E02003069',
        '6YQ' => 'E02003071',
        '6YR' => 'E02003071',
        '6YS' => 'E02003071',
        '6YT' => 'E02003069',
        '6YU' => 'E02003071',
        '6YW' => 'E02003069',
        '6YX' => 'E02003071',
        '6ZA' => 'E02003071',
        '6ZB' => 'E02003071',
        '6ZD' => 'E02003071',
        '6ZE' => 'E02003071',
        '6ZF' => 'E02003071',
        '6ZG' => 'E02003071',
        '6ZH' => 'E02003071',
        '6ZJ' => 'E02003071',
        '6ZL' => 'E02003071',
        '6ZN' => 'E02003071',
        '6ZP' => 'E02003071',
        '6ZQ' => 'E02003071',
        '6ZR' => 'E02003071',
        '6ZT' => 'E02003071',
        '6ZU' => 'E02003071',
        '6ZW' => 'E02003071',
        '6ZX' => 'E02003071',
        '7AA' => 'E02003069',
        '7AB' => 'E02003069',
        '7AD' => 'E02003069',
        '7AE' => 'E02003069',
        '7AF' => 'E02003069',
        '7AG' => 'E02003070',
        '7AH' => 'E02003070',
        '7AJ' => 'E02003070',
        '7AL' => 'E02003070',
        '7AN' => 'E02003070',
        '7AP' => 'E02003070',
        '7AQ' => 'E02003070',
        '7AR' => 'E02003070',
        '7AS' => 'E02003070',
        '7AT' => 'E02003070',
        '7AU' => 'E02003070',
        '7AW' => 'E02003070',
        '7AX' => 'E02003070',
        '7AY' => 'E02003070',
        '7AZ' => 'E02003070',
        '7BA' => 'E02003070',
        '7BB' => 'E02003070',
        '7BD' => 'E02003070',
        '7BE' => 'E02003071',
        '7BF' => 'E02003069',
        '7BG' => 'E02003070',
        '7BH' => 'E02003070',
        '7BJ' => 'E02003069',
        '7BL' => 'E02003069',
        '7BN' => 'E02003069',
        '7BP' => 'E02003069',
        '7BQ' => 'E02003071',
        '7BR' => 'E02003069',
        '7BS' => 'E02003069',
        '7BT' => 'E02003069',
        '7BU' => 'E02003069',
        '7BW' => 'E02003069',
        '7BX' => 'E02003069',
        '7BY' => 'E02003069',
        '7BZ' => 'E02003069',
        '7DA' => 'E02003069',
        '7DB' => 'E02003069',
        '7DD' => 'E02003069',
        '7DE' => 'E02003069',
        '7DF' => 'E02003069',
        '7DG' => 'E02003071',
        '7DH' => 'E02003071',
        '7DJ' => 'E02003071',
        '7DL' => 'E02003071',
        '7DN' => 'E02003069',
        '7DP' => 'E02003069',
        '7DQ' => 'E02003071',
        '7DR' => 'E02003069',
        '7DS' => 'E02003069',
        '7DT' => 'E02003069',
        '7DU' => 'E02003069',
        '7DW' => 'E02003069',
        '7DX' => 'E02003069',
        '7DY' => 'E02003069',
        '7DZ' => 'E02003069',
        '7EA' => 'E02003069',
        '7EB' => 'E02003069',
        '7ED' => 'E02003069',
        '7EE' => 'E02003071',
        '7EF' => 'E02003071',
        '7EG' => 'E02003069',
        '7EH' => 'E02003071',
        '7EJ' => 'E02003069',
        '7EL' => 'E02003069',
        '7EN' => 'E02003069',
        '7EP' => 'E02003069',
        '7EQ' => 'E02003069',
        '7ER' => 'E02003069',
        '7ES' => 'E02003069',
        '7ET' => 'E02003069',
        '7EU' => 'E02003069',
        '7EW' => 'E02003069',
        '7EX' => 'E02003069',
        '7EY' => 'E02003069',
        '7EZ' => 'E02003069',
        '7FA' => 'E02003069',
        '7FB' => 'E02003069',
        '7FD' => 'E02003071',
        '7FF' => 'E02003069',
        '7FG' => 'E02003069',
        '7FH' => 'E02003071',
        '7FJ' => 'E02003071',
        '7FL' => 'E02003071',
        '7FN' => 'E02003071',
        '7FP' => 'E02003071',
        '7FQ' => 'E02003070',
        '7FR' => 'E02003070',
        '7FS' => 'E02003074',
        '7FT' => 'E02003071',
        '7FU' => 'E02003069',
        '7FW' => 'E02003070',
        '7FX' => 'E02003069',
        '7FY' => 'E02003069',
        '7FZ' => 'E02003069',
        '7GA' => 'E02003071',
        '7GB' => 'E02003071',
        '7GD' => 'E02003070',
        '7GX' => 'E02003070',
        '7GY' => 'E02003071',
        '7GZ' => 'E02003071',
        '7HA' => 'E02003069',
        '7HB' => 'E02003069',
        '7HD' => 'E02003069',
        '7HE' => 'E02003069',
        '7HF' => 'E02003071',
        '7HG' => 'E02003071',
        '7HH' => 'E02003071',
        '7HJ' => 'E02003069',
        '7HL' => 'E02003069',
        '7HN' => 'E02003069',
        '7HP' => 'E02003069',
        '7HQ' => 'E02003069',
        '7HR' => 'E02003069',
        '7HS' => 'E02003069',
        '7HT' => 'E02003069',
        '7HU' => 'E02003069',
        '7HW' => 'E02003069',
        '7HX' => 'E02003069',
        '7HY' => 'E02003069',
        '7HZ' => 'E02003069',
        '7JA' => 'E02003069',
        '7JB' => 'E02003071',
        '7JD' => 'E02003071',
        '7JE' => 'E02003071',
        '7JF' => 'E02003069',
        '7JG' => 'E02003069',
        '7JH' => 'E02003069',
        '7JJ' => 'E02003069',
        '7JL' => 'E02003069',
        '7JN' => 'E02003069',
        '7JP' => 'E02003069',
        '7JQ' => 'E02003069',
        '7JR' => 'E02003069',
        '7JS' => 'E02003069',
        '7JT' => 'E02003069',
        '7JU' => 'E02003069',
        '7JW' => 'E02003069',
        '7JX' => 'E02003069',
        '7JY' => 'E02003069',
        '7JZ' => 'E02003069',
        '7LA' => 'E02003069',
        '7LB' => 'E02003071',
        '7LD' => 'E02003071',
        '7LE' => 'E02003071',
        '7LF' => 'E02003069',
        '7LG' => 'E02003071',
        '7LH' => 'E02003071',
        '7LJ' => 'E02003069',
        '7LL' => 'E02003069',
        '7LN' => 'E02003069',
        '7LP' => 'E02003069',
        '7LQ' => 'E02003071',
        '7LR' => 'E02003069',
        '7LS' => 'E02003071',
        '7LT' => 'E02003071',
        '7LU' => 'E02003071',
        '7LW' => 'E02003069',
        '7LX' => 'E02003071',
        '7LY' => 'E02003071',
        '7LZ' => 'E02003071',
        '7NA' => 'E02003069',
        '7NB' => 'E02003071',
        '7ND' => 'E02003069',
        '7NE' => 'E02003069',
        '7NF' => 'E02003071',
        '7NG' => 'E02003069',
        '7NH' => 'E02003071',
        '7NJ' => 'E02003071',
        '7NL' => 'E02003071',
        '7NN' => 'E02003071',
        '7NP' => 'E02003071',
        '7NQ' => 'E02003069',
        '7NR' => 'E02003069',
        '7NS' => 'E02003069',
        '7NT' => 'E02003069',
        '7NU' => 'E02003069',
        '7NW' => 'E02003071',
        '7NX' => 'E02003069',
        '7NY' => 'E02003069',
        '7NZ' => 'E02003069',
        '7PA' => 'E02003071',
        '7PB' => 'E02003071',
        '7PD' => 'E02003069',
        '7PE' => 'E02003071',
        '7PF' => 'E02003071',
        '7PG' => 'E02003069',
        '7PH' => 'E02003069',
        '7PJ' => 'E02003069',
        '7PL' => 'E02003069',
        '7PN' => 'E02003069',
        '7PP' => 'E02003069',
        '7PQ' => 'E02003069',
        '7PR' => 'E02003069',
        '7PS' => 'E02003069',
        '7PT' => 'E02003069',
        '7PU' => 'E02003069',
        '7PW' => 'E02003069',
        '7PX' => 'E02003069',
        '7PY' => 'E02003069',
        '7PZ' => 'E02003069',
        '7QA' => 'E02003069',
        '7QB' => 'E02003071',
        '7QD' => 'E02003071',
        '7QE' => 'E02003069',
        '7QF' => 'E02003071',
        '7QG' => 'E02003069',
        '7QH' => 'E02003069',
        '7QJ' => 'E02003069',
        '7QL' => 'E02003069',
        '7QN' => 'E02003071',
        '7QP' => 'E02003069',
        '7QQ' => 'E02003071',
        '7QR' => 'E02003069',
        '7QS' => 'E02003069',
        '7QT' => 'E02003069',
        '7QU' => 'E02003071',
        '7QW' => 'E02003069',
        '7QX' => 'E02003071',
        '7QY' => 'E02003071',
        '7QZ' => 'E02003071',
        '7RA' => 'E02003071',
        '7RB' => 'E02003071',
        '7RD' => 'E02003071',
        '7RE' => 'E02003071',
        '7RF' => 'E02003071',
        '7RG' => 'E02003071',
        '7RH' => 'E02003071',
        '7RJ' => 'E02003071',
        '7RL' => 'E02003071',
        '7RN' => 'E02003071',
        '7RP' => 'E02003071',
        '7RQ' => 'E02003071',
        '7RR' => 'E02003071',
        '7RS' => 'E02003071',
        '7RT' => 'E02003071',
        '7RU' => 'E02003071',
        '7RW' => 'E02003071',
        '7RX' => 'E02003071',
        '7RY' => 'E02003071',
        '7RZ' => 'E02003071',
        '7SA' => 'E02003071',
        '7SB' => 'E02003071',
        '7SD' => 'E02003071',
        '7SE' => 'E02003071',
        '7SF' => 'E02003071',
        '7SG' => 'E02003071',
        '7SH' => 'E02003071',
        '7SJ' => 'E02003071',
        '7SL' => 'E02003071',
        '7SN' => 'E02003071',
        '7SP' => 'E02003071',
        '7SQ' => 'E02003071',
        '7SR' => 'E02003071',
        '7SS' => 'E02003074',
        '7ST' => 'E02003071',
        '7SU' => 'E02003071',
        '7SW' => 'E02003071',
        '7SX' => 'E02003074',
        '7SY' => 'E02003071',
        '7SZ' => 'E02003071',
        '7TA' => 'E02003071',
        '7TB' => 'E02003071',
        '7TD' => 'E02003071',
        '7TE' => 'E02003071',
        '7TF' => 'E02003071',
        '7TG' => 'E02003071',
        '7TH' => 'E02003071',
        '7TJ' => 'E02003071',
        '7TL' => 'E02003071',
        '7TN' => 'E02003071',
        '7TP' => 'E02003071',
        '7TQ' => 'E02003071',
        '7TR' => 'E02003071',
        '7TS' => 'E02003071',
        '7TT' => 'E02003071',
        '7TU' => 'E02003071',
        '7TW' => 'E02003074',
        '7TX' => 'E02003071',
        '7TY' => 'E02003071',
        '7TZ' => 'E02003071',
        '7UA' => 'E02003071',
        '7UB' => 'E02003071',
        '7UD' => 'E02003071',
        '7UE' => 'E02003071',
        '7UF' => 'E02003071',
        '7UG' => 'E02003071',
        '7UH' => 'E02003071',
        '7UJ' => 'E02003071',
        '7UL' => 'E02003071',
        '7UN' => 'E02003071',
        '7UP' => 'E02003071',
        '7UQ' => 'E02003071',
        '7UR' => 'E02003074',
        '7US' => 'E02003074',
        '7UT' => 'E02003074',
        '7UU' => 'E02003074',
        '7UW' => 'E02003071',
        '7UX' => 'E02003074',
        '7UY' => 'E02003074',
        '7UZ' => 'E02003074',
        '7WA' => 'E02003071',
        '7WB' => 'E02003071',
        '7WD' => 'E02003071',
        '7WE' => 'E02003071',
        '7WF' => 'E02003071',
        '7WG' => 'E02003071',
        '7WH' => 'E02003071',
        '7WJ' => 'E02003071',
        '7WL' => 'E02003071',
        '7WN' => 'E02003071',
        '7WP' => 'E02003071',
        '7WQ' => 'E02003071',
        '7WR' => 'E02003071',
        '7WS' => 'E02003071',
        '7WT' => 'E02003071',
        '7WU' => 'E02003071',
        '7WW' => 'E02003071',
        '7WX' => 'E02003071',
        '7WY' => 'E02003071',
        '7XA' => 'E02003074',
        '7XB' => 'E02003074',
        '7XD' => 'E02003074',
        '7XE' => 'E02003074',
        '7XF' => 'E02003071',
        '7XG' => 'E02003074',
        '7XH' => 'E02003074',
        '7XJ' => 'E02003071',
        '7XL' => 'E02003074',
        '7XN' => 'E02003071',
        '7XP' => 'E02003071',
        '7XQ' => 'E02003074',
        '7XR' => 'E02003071',
        '7XS' => 'E02003071',
        '7XT' => 'E02003071',
        '7XU' => 'E02003071',
        '7XW' => 'E02003071',
        '7XX' => 'E02003071',
        '7XY' => 'E02003071',
        '7XZ' => 'E02003071',
        '7YA' => 'E02003071',
        '7YB' => 'E02003071',
        '7YD' => 'E02003071',
        '7YE' => 'E02003071',
        '7YF' => 'E02003074',
        '7YG' => 'E02003074',
        '7YH' => 'E02003074',
        '7YJ' => 'E02003074',
        '7YL' => 'E02003074',
        '7YN' => 'E02003074',
        '7YP' => 'E02003074',
        '7YQ' => 'E02003074',
        '7YR' => 'E02003074',
        '7YS' => 'E02003074',
        '7YT' => 'E02003074',
        '7YU' => 'E02003074',
        '7YW' => 'E02003074',
        '7YX' => 'E02003074',
        '7YY' => 'E02003074',
        '7YZ' => 'E02003074',
        '7ZA' => 'E02003071',
        '7ZB' => 'E02003071',
        '7ZD' => 'E02003071',
        '7ZE' => 'E02003071',
        '7ZF' => 'E02003071',
        '7ZG' => 'E02003071',
        '7ZH' => 'E02003071',
        '7ZJ' => 'E02003071',
        '7ZL' => 'E02003071',
        '7ZN' => 'E02003071',
        '7ZP' => 'E02003071',
        '7ZQ' => 'E02003071',
        '7ZR' => 'E02003071',
        '7ZS' => 'E02003071',
        '7ZT' => 'E02003071',
        '7ZU' => 'E02003071',
        '7ZW' => 'E02003071',
        '7ZX' => 'E02003071',
        '9AA' => 'E02003071',
        '9AB' => 'E02003071',
        '9AD' => 'E02003071',
        '9AE' => 'E02003071',
        '9AF' => 'E02003071',
        '9AG' => 'E02003071',
        '9AH' => 'E02003071',
        '9AJ' => 'E02003071',
        '9AL' => 'E02003071',
        '9AN' => 'E02003071',
        '9AP' => 'E02003071',
        '9AQ' => 'E02003071',
        '9AR' => 'E02003071',
        '9AS' => 'E02003071',
        '9AT' => 'E02003071',
        '9AU' => 'E02003071',
        '9AW' => 'E02003071',
        '9AX' => 'E02003071',
        '9AY' => 'E02003071',
        '9AZ' => 'E02003071',
        '9BA' => 'E02003071',
        '9BB' => 'E02003071',
        '9BD' => 'E02003071',
        '9BE' => 'E02003071',
        '9BF' => 'E02003071',
        '9BG' => 'E02003071',
        '9BH' => 'E02003071',
        '9BJ' => 'E02003071',
        '9BL' => 'E02003071',
        '9BN' => 'E02003071',
        '9BP' => 'E02003071',
        '9BQ' => 'E02003071',
        '9BR' => 'E02003071',
        '9BS' => 'E02003071',
        '9BT' => 'E02003071',
        '9BU' => 'E02003071',
        '9BW' => 'E02003071',
        '9BX' => 'E02003071',
        '9BY' => 'E02003071',
        '9BZ' => 'E02003071',
        '9DA' => 'E02003071',
        '9DB' => 'E02003071',
        '9DD' => 'E02003071',
        '9DE' => 'E02003071',
        '9DF' => 'E02003071',
        '9DG' => 'E02003071',
        '9DH' => 'E02003071',
        '9DJ' => 'E02003071',
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
