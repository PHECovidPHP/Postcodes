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
final class NE9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02001701',
        '5AB' => 'E02006842',
        '5AD' => 'E02006842',
        '5AE' => 'E02006842',
        '5AF' => 'E02001691',
        '5AG' => 'E02001697',
        '5AH' => 'E02001697',
        '5AJ' => 'E02001697',
        '5AL' => 'E02001697',
        '5AN' => 'E02001701',
        '5AP' => 'E02001691',
        '5AQ' => 'E02001701',
        '5AR' => 'E02001701',
        '5AS' => 'E02001691',
        '5AT' => 'E02001691',
        '5AU' => 'E02001701',
        '5AW' => 'E02001701',
        '5AX' => 'E02001691',
        '5AY' => 'E02006842',
        '5AZ' => 'E02006842',
        '5BA' => 'E02006842',
        '5BB' => 'E02006842',
        '5BD' => 'E02006842',
        '5BE' => 'E02006842',
        '5BF' => 'E02001701',
        '5BG' => 'E02001701',
        '5BH' => 'E02006842',
        '5BJ' => 'E02006842',
        '5BL' => 'E02001691',
        '5BN' => 'E02001691',
        '5BP' => 'E02001691',
        '5BQ' => 'E02001701',
        '5BT' => 'E02006842',
        '5BU' => 'E02006842',
        '5BW' => 'E02006842',
        '5BX' => 'E02006842',
        '5BY' => 'E02006842',
        '5BZ' => 'E02006842',
        '5DA' => 'E02006842',
        '5DB' => 'E02006842',
        '5DD' => 'E02006842',
        '5DE' => 'E02001697',
        '5DF' => 'E02001697',
        '5DG' => 'E02001688',
        '5DH' => 'E02001697',
        '5DJ' => 'E02006842',
        '5DL' => 'E02001697',
        '5DN' => 'E02001697',
        '5DP' => 'E02001697',
        '5DQ' => 'E02006842',
        '5DR' => 'E02001697',
        '5DS' => 'E02006842',
        '5DT' => 'E02006842',
        '5DU' => 'E02006842',
        '5DW' => 'E02006842',
        '5DX' => 'E02006842',
        '5DY' => 'E02006842',
        '5DZ' => 'E02006842',
        '5EA' => 'E02006842',
        '5EB' => 'E02006842',
        '5ED' => 'E02006842',
        '5EE' => 'E02001688',
        '5EF' => 'E02006842',
        '5EG' => 'E02001691',
        '5EH' => 'E02001691',
        '5EJ' => 'E02001701',
        '5EL' => 'E02001692',
        '5EN' => 'E02001691',
        '5EP' => 'E02001697',
        '5EQ' => 'E02001697',
        '5ER' => 'E02001697',
        '5ES' => 'E02001697',
        '5ET' => 'E02001701',
        '5EU' => 'E02001697',
        '5EW' => 'E02001691',
        '5EX' => 'E02001701',
        '5EY' => 'E02001701',
        '5EZ' => 'E02001701',
        '5FA' => 'E02001701',
        '5FB' => 'E02001701',
        '5FD' => 'E02001691',
        '5HA' => 'E02001701',
        '5HB' => 'E02001701',
        '5HD' => 'E02001697',
        '5HE' => 'E02001697',
        '5HF' => 'E02001697',
        '5HG' => 'E02001701',
        '5HH' => 'E02001697',
        '5HJ' => 'E02001697',
        '5HL' => 'E02001697',
        '5HN' => 'E02001697',
        '5HP' => 'E02001697',
        '5HQ' => 'E02001697',
        '5HR' => 'E02001697',
        '5HS' => 'E02001697',
        '5HT' => 'E02001697',
        '5HU' => 'E02001701',
        '5HW' => 'E02001701',
        '5HX' => 'E02001697',
        '5HY' => 'E02001697',
        '5HZ' => 'E02001701',
        '5JA' => 'E02001701',
        '5JB' => 'E02001701',
        '5JD' => 'E02001701',
        '5JE' => 'E02001701',
        '5JF' => 'E02001701',
        '5JG' => 'E02001701',
        '5JH' => 'E02001701',
        '5JJ' => 'E02001701',
        '5JL' => 'E02001697',
        '5JN' => 'E02001692',
        '5JQ' => 'E02001701',
        '5JR' => 'E02001701',
        '5JS' => 'E02001701',
        '5JT' => 'E02001697',
        '5JW' => 'E02006842',
        '5JX' => 'E02001692',
        '5JY' => 'E02006842',
        '5LA' => 'E02001692',
        '5LB' => 'E02006842',
        '5LD' => 'E02006842',
        '5LE' => 'E02001692',
        '5LG' => 'E02001692',
        '5LH' => 'E02001692',
        '5LJ' => 'E02001692',
        '5LL' => 'E02001692',
        '5LN' => 'E02001692',
        '5LP' => 'E02001692',
        '5LQ' => 'E02006842',
        '5LR' => 'E02001692',
        '5LS' => 'E02001692',
        '5LT' => 'E02001692',
        '5LU' => 'E02001692',
        '5LX' => 'E02001692',
        '5LY' => 'E02001692',
        '5LZ' => 'E02001692',
        '5NA' => 'E02001692',
        '5NB' => 'E02001692',
        '5ND' => 'E02001692',
        '5NE' => 'E02001692',
        '5NF' => 'E02001692',
        '5NH' => 'E02001692',
        '5NJ' => 'E02001692',
        '5NL' => 'E02001692',
        '5NN' => 'E02001692',
        '5NP' => 'E02001692',
        '5NQ' => 'E02001692',
        '5NR' => 'E02001692',
        '5NS' => 'E02001692',
        '5NT' => 'E02001692',
        '5NU' => 'E02001692',
        '5NX' => 'E02001692',
        '5NY' => 'E02001692',
        '5PA' => 'E02001692',
        '5PB' => 'E02001691',
        '5PD' => 'E02001688',
        '5PE' => 'E02001692',
        '5PF' => 'E02001697',
        '5PG' => 'E02001692',
        '5PH' => 'E02001692',
        '5PJ' => 'E02001692',
        '5PL' => 'E02001692',
        '5PN' => 'E02001692',
        '5PP' => 'E02001692',
        '5PQ' => 'E02001692',
        '5PR' => 'E02001692',
        '5PS' => 'E02001692',
        '5PT' => 'E02001692',
        '5PU' => 'E02001692',
        '5PX' => 'E02001692',
        '5PY' => 'E02001692',
        '5PZ' => 'E02006842',
        '5QA' => 'E02001692',
        '5QB' => 'E02001692',
        '5QD' => 'E02001692',
        '5QE' => 'E02001692',
        '5QH' => 'E02001692',
        '5QJ' => 'E02001692',
        '5QL' => 'E02001692',
        '5QN' => 'E02001692',
        '5QP' => 'E02001692',
        '5QQ' => 'E02001692',
        '5QR' => 'E02001692',
        '5QS' => 'E02001692',
        '5QT' => 'E02001692',
        '5QU' => 'E02001692',
        '5QW' => 'E02001692',
        '5RB' => 'E02001697',
        '5RD' => 'E02001697',
        '5RE' => 'E02001697',
        '5RF' => 'E02001697',
        '5RG' => 'E02001697',
        '5RH' => 'E02001697',
        '5RJ' => 'E02001697',
        '5RL' => 'E02001697',
        '5RN' => 'E02001697',
        '5RP' => 'E02001697',
        '5RQ' => 'E02001697',
        '5RR' => 'E02001697',
        '5RS' => 'E02001697',
        '5RT' => 'E02001697',
        '5RU' => 'E02001697',
        '5RW' => 'E02001697',
        '5RX' => 'E02001697',
        '5RY' => 'E02001697',
        '5RZ' => 'E02001701',
        '5SA' => 'E02001697',
        '5SB' => 'E02001697',
        '5SD' => 'E02001697',
        '5SE' => 'E02001697',
        '5SH' => 'E02001697',
        '5SJ' => 'E02001697',
        '5SP' => 'E02001697',
        '5SQ' => 'E02001697',
        '5SR' => 'E02001697',
        '5SS' => 'E02001697',
        '5ST' => 'E02001697',
        '5SY' => 'E02001697',
        '5TA' => 'E02001697',
        '5TB' => 'E02001697',
        '5TD' => 'E02001697',
        '5TE' => 'E02001697',
        '5TF' => 'E02001697',
        '5TG' => 'E02001697',
        '5TH' => 'E02001697',
        '5TJ' => 'E02001697',
        '5TL' => 'E02001697',
        '5TN' => 'E02001697',
        '5TP' => 'E02001697',
        '5TQ' => 'E02001697',
        '5TR' => 'E02001697',
        '5TS' => 'E02001697',
        '5TT' => 'E02001697',
        '5TU' => 'E02001697',
        '5TX' => 'E02001697',
        '5TY' => 'E02001697',
        '5TZ' => 'E02001688',
        '5UA' => 'E02001697',
        '5UB' => 'E02001697',
        '5UD' => 'E02001697',
        '5UE' => 'E02001697',
        '5UF' => 'E02001688',
        '5UG' => 'E02001697',
        '5UH' => 'E02001697',
        '5UJ' => 'E02001697',
        '5UL' => 'E02001697',
        '5UN' => 'E02001697',
        '5UP' => 'E02001697',
        '5UQ' => 'E02001697',
        '5UR' => 'E02001697',
        '5US' => 'E02001688',
        '5UT' => 'E02001688',
        '5UU' => 'E02001688',
        '5UW' => 'E02001697',
        '5UX' => 'E02001697',
        '5UY' => 'E02001697',
        '5UZ' => 'E02001688',
        '5WA' => 'E02001688',
        '5WB' => 'E02001697',
        '5WD' => 'E02001688',
        '5WE' => 'E02001688',
        '5WF' => 'E02001701',
        '5WG' => 'E02001688',
        '5WH' => 'E02001697',
        '5WJ' => 'E02001697',
        '5WL' => 'E02001701',
        '5WN' => 'E02001697',
        '5WP' => 'E02001697',
        '5WQ' => 'E02001688',
        '5WR' => 'E02001688',
        '5WS' => 'E02001701',
        '5WT' => 'E02001701',
        '5WU' => 'E02001688',
        '5WW' => 'E02001688',
        '5WX' => 'E02001688',
        '5WY' => 'E02001688',
        '5WZ' => 'E02001688',
        '5XA' => 'E02001697',
        '5XB' => 'E02001697',
        '5XD' => 'E02001697',
        '5XE' => 'E02001697',
        '5XF' => 'E02001701',
        '5XG' => 'E02001697',
        '5XH' => 'E02001697',
        '5XJ' => 'E02001697',
        '5XL' => 'E02001697',
        '5XN' => 'E02001697',
        '5XP' => 'E02001697',
        '5XQ' => 'E02001697',
        '5XR' => 'E02001697',
        '5XS' => 'E02001697',
        '5XT' => 'E02001697',
        '5XU' => 'E02001697',
        '5XW' => 'E02001701',
        '5XX' => 'E02001697',
        '5XY' => 'E02001697',
        '5XZ' => 'E02001688',
        '5YA' => 'E02001697',
        '5YB' => 'E02001688',
        '5YD' => 'E02001697',
        '5YE' => 'E02001697',
        '5YF' => 'E02001697',
        '5YG' => 'E02001688',
        '5YH' => 'E02001697',
        '5YJ' => 'E02001697',
        '5YL' => 'E02001697',
        '5YN' => 'E02001697',
        '5YP' => 'E02001697',
        '5YQ' => 'E02001688',
        '5YR' => 'E02001697',
        '5YS' => 'E02001697',
        '5YT' => 'E02001697',
        '5YU' => 'E02001688',
        '5YW' => 'E02001691',
        '5YX' => 'E02001701',
        '5YY' => 'E02001697',
        '5YZ' => 'E02001697',
        '5ZJ' => 'E02001688',
        '5ZW' => 'E02001688',
        '5ZX' => 'E02001688',
        '6AA' => 'E02001701',
        '6AB' => 'E02001701',
        '6AD' => 'E02001701',
        '6AE' => 'E02001701',
        '6AF' => 'E02001701',
        '6AG' => 'E02001704',
        '6AH' => 'E02001701',
        '6AJ' => 'E02001701',
        '6AL' => 'E02001701',
        '6AN' => 'E02001701',
        '6AP' => 'E02001701',
        '6AQ' => 'E02001701',
        '6AR' => 'E02001701',
        '6AS' => 'E02001697',
        '6AT' => 'E02001701',
        '6AU' => 'E02001701',
        '6AW' => 'E02001701',
        '6AX' => 'E02001701',
        '6AY' => 'E02001701',
        '6AZ' => 'E02001701',
        '6BA' => 'E02001701',
        '6BB' => 'E02001701',
        '6BD' => 'E02001701',
        '6BE' => 'E02001701',
        '6BF' => 'E02001701',
        '6BG' => 'E02001704',
        '6BH' => 'E02001701',
        '6BJ' => 'E02001701',
        '6BL' => 'E02001702',
        '6BN' => 'E02001701',
        '6BP' => 'E02001701',
        '6BQ' => 'E02001701',
        '6BR' => 'E02001701',
        '6BS' => 'E02001701',
        '6BT' => 'E02001701',
        '6BU' => 'E02001701',
        '6BW' => 'E02001701',
        '6BX' => 'E02001701',
        '6BY' => 'E02001701',
        '6DA' => 'E02001701',
        '6DB' => 'E02001701',
        '6DD' => 'E02001701',
        '6DE' => 'E02001701',
        '6DG' => 'E02001704',
        '6DH' => 'E02001701',
        '6DJ' => 'E02001701',
        '6DL' => 'E02001701',
        '6DN' => 'E02001701',
        '6DP' => 'E02001701',
        '6DQ' => 'E02001691',
        '6DR' => 'E02001701',
        '6DS' => 'E02001691',
        '6DT' => 'E02001691',
        '6DU' => 'E02001701',
        '6DX' => 'E02001691',
        '6DY' => 'E02001691',
        '6DZ' => 'E02001691',
        '6EA' => 'E02001691',
        '6EB' => 'E02001701',
        '6ED' => 'E02001701',
        '6EE' => 'E02001691',
        '6EG' => 'E02001704',
        '6EH' => 'E02001701',
        '6EJ' => 'E02001701',
        '6EL' => 'E02001701',
        '6EN' => 'E02001701',
        '6EP' => 'E02001701',
        '6EQ' => 'E02001701',
        '6ER' => 'E02001701',
        '6ES' => 'E02001701',
        '6ET' => 'E02001701',
        '6EU' => 'E02001701',
        '6EX' => 'E02001701',
        '6EY' => 'E02001701',
        '6GA' => 'E02001697',
        '6GB' => 'E02001697',
        '6GD' => 'E02001697',
        '6GE' => 'E02001697',
        '6HA' => 'E02001701',
        '6HB' => 'E02001701',
        '6HD' => 'E02001701',
        '6HE' => 'E02001701',
        '6HF' => 'E02001701',
        '6HG' => 'E02001704',
        '6HH' => 'E02001701',
        '6HJ' => 'E02001701',
        '6HL' => 'E02001701',
        '6HN' => 'E02001701',
        '6HP' => 'E02001701',
        '6HQ' => 'E02001701',
        '6HR' => 'E02001701',
        '6HT' => 'E02001701',
        '6HU' => 'E02001701',
        '6HW' => 'E02001701',
        '6HX' => 'E02001701',
        '6HY' => 'E02001701',
        '6HZ' => 'E02001701',
        '6JA' => 'E02001701',
        '6JB' => 'E02001701',
        '6JD' => 'E02001701',
        '6JE' => 'E02001701',
        '6JF' => 'E02001701',
        '6JG' => 'E02001704',
        '6JH' => 'E02001701',
        '6JJ' => 'E02001701',
        '6JL' => 'E02001701',
        '6JN' => 'E02001701',
        '6JP' => 'E02001701',
        '6JQ' => 'E02001701',
        '6JR' => 'E02001701',
        '6JS' => 'E02001701',
        '6JT' => 'E02001701',
        '6JU' => 'E02001701',
        '6JW' => 'E02001701',
        '6JX' => 'E02001701',
        '6JY' => 'E02001701',
        '6JZ' => 'E02001701',
        '6LA' => 'E02001701',
        '6LB' => 'E02001701',
        '6LD' => 'E02001706',
        '6LE' => 'E02001701',
        '6LF' => 'E02001701',
        '6LG' => 'E02001704',
        '6LH' => 'E02001704',
        '6LJ' => 'E02001701',
        '6LL' => 'E02001701',
        '6LN' => 'E02001701',
        '6LP' => 'E02001701',
        '6LQ' => 'E02001701',
        '6LR' => 'E02001701',
        '6LS' => 'E02001704',
        '6LT' => 'E02001704',
        '6LU' => 'E02001704',
        '6LW' => 'E02001704',
        '6LX' => 'E02001704',
        '6LY' => 'E02001704',
        '6LZ' => 'E02001704',
        '6NA' => 'E02001704',
        '6NB' => 'E02001702',
        '6ND' => 'E02001702',
        '6NE' => 'E02001704',
        '6NF' => 'E02001704',
        '6NG' => 'E02001704',
        '6NH' => 'E02001702',
        '6NJ' => 'E02001704',
        '6NL' => 'E02001704',
        '6NN' => 'E02001704',
        '6NP' => 'E02001704',
        '6NQ' => 'E02001704',
        '6NR' => 'E02001704',
        '6NS' => 'E02001704',
        '6NT' => 'E02001704',
        '6NU' => 'E02001704',
        '6NW' => 'E02001701',
        '6NX' => 'E02001701',
        '6PA' => 'E02001704',
        '6PB' => 'E02001704',
        '6PD' => 'E02001704',
        '6PE' => 'E02001701',
        '6PF' => 'E02001704',
        '6PG' => 'E02001704',
        '6PH' => 'E02001704',
        '6PJ' => 'E02001704',
        '6PL' => 'E02001704',
        '6PN' => 'E02001704',
        '6PP' => 'E02001704',
        '6PQ' => 'E02001704',
        '6PR' => 'E02001704',
        '6PS' => 'E02001704',
        '6PT' => 'E02001704',
        '6PU' => 'E02001704',
        '6PW' => 'E02001704',
        '6PX' => 'E02001704',
        '6PY' => 'E02001704',
        '6PZ' => 'E02001704',
        '6QA' => 'E02001704',
        '6QB' => 'E02001704',
        '6QD' => 'E02001704',
        '6QE' => 'E02001701',
        '6QG' => 'E02001704',
        '6QH' => 'E02001701',
        '6QJ' => 'E02001688',
        '6QL' => 'E02001697',
        '6QN' => 'E02001697',
        '6QP' => 'E02001697',
        '6QQ' => 'E02001697',
        '6QR' => 'E02001697',
        '6QS' => 'E02001697',
        '6QT' => 'E02001697',
        '6QU' => 'E02001697',
        '6QW' => 'E02001697',
        '6QX' => 'E02001697',
        '6QY' => 'E02001697',
        '6QZ' => 'E02001693',
        '6RA' => 'E02001693',
        '6RB' => 'E02001693',
        '6RD' => 'E02001697',
        '6RE' => 'E02001697',
        '6RF' => 'E02001697',
        '6RG' => 'E02001704',
        '6RH' => 'E02001697',
        '6RJ' => 'E02001697',
        '6RL' => 'E02001697',
        '6RN' => 'E02001702',
        '6RP' => 'E02001702',
        '6RQ' => 'E02001702',
        '6RR' => 'E02001702',
        '6RS' => 'E02001702',
        '6RT' => 'E02001702',
        '6RU' => 'E02001702',
        '6RW' => 'E02001697',
        '6RX' => 'E02001702',
        '6RY' => 'E02001702',
        '6RZ' => 'E02001702',
        '6SA' => 'E02001702',
        '6SB' => 'E02001702',
        '6SD' => 'E02001702',
        '6SE' => 'E02001702',
        '6SF' => 'E02001697',
        '6SG' => 'E02001704',
        '6SH' => 'E02001702',
        '6SJ' => 'E02001702',
        '6SL' => 'E02001702',
        '6SN' => 'E02001702',
        '6SP' => 'E02001702',
        '6SQ' => 'E02001702',
        '6SR' => 'E02001697',
        '6SS' => 'E02001702',
        '6ST' => 'E02001702',
        '6SU' => 'E02001697',
        '6SW' => 'E02001702',
        '6SX' => 'E02001697',
        '6SY' => 'E02001701',
        '6SZ' => 'E02006842',
        '6TA' => 'E02001697',
        '6TB' => 'E02001704',
        '6TD' => 'E02001701',
        '6TE' => 'E02001697',
        '6TF' => 'E02001702',
        '6TG' => 'E02001704',
        '6TH' => 'E02001697',
        '6TJ' => 'E02001697',
        '6TL' => 'E02001697',
        '6TN' => 'E02001697',
        '6TP' => 'E02001697',
        '6TQ' => 'E02001697',
        '6TR' => 'E02001697',
        '6TS' => 'E02001697',
        '6TT' => 'E02001697',
        '6TU' => 'E02001697',
        '6TW' => 'E02001701',
        '6TX' => 'E02001697',
        '6TY' => 'E02001697',
        '6TZ' => 'E02001701',
        '6UA' => 'E02001697',
        '6UB' => 'E02001697',
        '6UD' => 'E02001701',
        '6UE' => 'E02001701',
        '6UF' => 'E02001701',
        '6UG' => 'E02001701',
        '6UH' => 'E02001701',
        '6UJ' => 'E02001701',
        '6UL' => 'E02001701',
        '6UN' => 'E02001701',
        '6UP' => 'E02001701',
        '6UQ' => 'E02001701',
        '6UR' => 'E02001701',
        '6US' => 'E02001701',
        '6UT' => 'E02001701',
        '6UU' => 'E02001701',
        '6UW' => 'E02001701',
        '6UX' => 'E02001701',
        '6UY' => 'E02001701',
        '6UZ' => 'E02001701',
        '6WA' => 'E02001701',
        '6WB' => 'E02001701',
        '6WD' => 'E02001688',
        '6WE' => 'E02001701',
        '6WF' => 'E02001701',
        '6WG' => 'E02001701',
        '6WH' => 'E02001688',
        '6WJ' => 'E02001701',
        '6WL' => 'E02001701',
        '6WN' => 'E02001701',
        '6WP' => 'E02001688',
        '6WQ' => 'E02001688',
        '6WR' => 'E02001701',
        '6WS' => 'E02001701',
        '6WT' => 'E02001701',
        '6WU' => 'E02001688',
        '6WW' => 'E02001701',
        '6WX' => 'E02001701',
        '6WY' => 'E02001688',
        '6WZ' => 'E02001688',
        '6XA' => 'E02001701',
        '6XB' => 'E02001701',
        '6XD' => 'E02001701',
        '6XE' => 'E02001701',
        '6XF' => 'E02001701',
        '6XG' => 'E02001704',
        '6XH' => 'E02001701',
        '6XJ' => 'E02001701',
        '6XL' => 'E02001701',
        '6XN' => 'E02001701',
        '6XP' => 'E02001701',
        '6XQ' => 'E02001697',
        '6XR' => 'E02001697',
        '6XS' => 'E02001702',
        '6XT' => 'E02001697',
        '6XU' => 'E02001697',
        '6XW' => 'E02001701',
        '6XX' => 'E02001697',
        '6XY' => 'E02001697',
        '6XZ' => 'E02001701',
        '6YA' => 'E02001697',
        '6YB' => 'E02001697',
        '6YD' => 'E02001702',
        '6YE' => 'E02001702',
        '6YF' => 'E02001702',
        '6YG' => 'E02001704',
        '6YH' => 'E02001702',
        '6YJ' => 'E02001702',
        '6YL' => 'E02001702',
        '6YN' => 'E02001702',
        '6YP' => 'E02001702',
        '6YQ' => 'E02001702',
        '6YR' => 'E02001702',
        '6YS' => 'E02001697',
        '6YT' => 'E02001702',
        '6YU' => 'E02001697',
        '6YW' => 'E02001702',
        '6YX' => 'E02001702',
        '6YY' => 'E02001697',
        '6YZ' => 'E02001701',
        '6ZA' => 'E02001688',
        '6ZB' => 'E02001688',
        '6ZG' => 'E02001688',
        '6ZR' => 'E02001688',
        '6ZS' => 'E02001688',
        '6ZT' => 'E02001688',
        '6ZU' => 'E02001701',
        '6ZW' => 'E02001701',
        '6ZY' => 'E02001701',
        '6ZZ' => 'E02001701',
        '7AA' => 'E02001702',
        '7AB' => 'E02001702',
        '7AD' => 'E02001702',
        '7AE' => 'E02001702',
        '7AF' => 'E02001704',
        '7AG' => 'E02001704',
        '7AH' => 'E02001702',
        '7AJ' => 'E02001702',
        '7AL' => 'E02001702',
        '7AN' => 'E02001702',
        '7AP' => 'E02001702',
        '7AQ' => 'E02001702',
        '7AR' => 'E02001702',
        '7AS' => 'E02001702',
        '7AT' => 'E02001702',
        '7AU' => 'E02001702',
        '7AW' => 'E02001704',
        '7AX' => 'E02001702',
        '7AY' => 'E02001702',
        '7AZ' => 'E02001704',
        '7BA' => 'E02001702',
        '7BB' => 'E02001702',
        '7BD' => 'E02001702',
        '7BE' => 'E02001702',
        '7BF' => 'E02001704',
        '7BG' => 'E02001702',
        '7BH' => 'E02001702',
        '7BJ' => 'E02001702',
        '7BL' => 'E02001702',
        '7BN' => 'E02001702',
        '7BP' => 'E02001702',
        '7BQ' => 'E02001702',
        '7BR' => 'E02001704',
        '7BS' => 'E02001702',
        '7BT' => 'E02001702',
        '7BU' => 'E02001702',
        '7BW' => 'E02001702',
        '7BX' => 'E02001702',
        '7BY' => 'E02001702',
        '7BZ' => 'E02001704',
        '7DA' => 'E02001702',
        '7DB' => 'E02001702',
        '7DD' => 'E02001702',
        '7DE' => 'E02001702',
        '7DF' => 'E02001704',
        '7DG' => 'E02001704',
        '7DH' => 'E02001702',
        '7DJ' => 'E02001699',
        '7DL' => 'E02001699',
        '7DN' => 'E02001702',
        '7DP' => 'E02001702',
        '7DQ' => 'E02001702',
        '7DR' => 'E02001702',
        '7DS' => 'E02001702',
        '7DT' => 'E02001702',
        '7DU' => 'E02001704',
        '7DW' => 'E02001704',
        '7DX' => 'E02001704',
        '7DY' => 'E02001704',
        '7DZ' => 'E02001704',
        '7EA' => 'E02001704',
        '7EB' => 'E02001704',
        '7ED' => 'E02001704',
        '7EE' => 'E02001704',
        '7EF' => 'E02001704',
        '7EG' => 'E02001704',
        '7EH' => 'E02001704',
        '7EJ' => 'E02001704',
        '7EL' => 'E02001704',
        '7EN' => 'E02001704',
        '7EP' => 'E02001704',
        '7EQ' => 'E02001704',
        '7ER' => 'E02001704',
        '7ES' => 'E02001704',
        '7ET' => 'E02001704',
        '7EU' => 'E02001706',
        '7EW' => 'E02001704',
        '7EX' => 'E02001706',
        '7EY' => 'E02001706',
        '7EZ' => 'E02001704',
        '7HA' => 'E02001706',
        '7HB' => 'E02001706',
        '7HD' => 'E02001706',
        '7HE' => 'E02001702',
        '7HF' => 'E02001704',
        '7HG' => 'E02001704',
        '7HH' => 'E02001702',
        '7HJ' => 'E02001706',
        '7HL' => 'E02001702',
        '7HN' => 'E02001702',
        '7HP' => 'E02001702',
        '7HQ' => 'E02001702',
        '7HR' => 'E02001704',
        '7HS' => 'E02001704',
        '7HT' => 'E02001704',
        '7HU' => 'E02001704',
        '7HW' => 'E02001704',
        '7HX' => 'E02001704',
        '7HY' => 'E02001704',
        '7HZ' => 'E02001704',
        '7JA' => 'E02001702',
        '7JB' => 'E02001702',
        '7JD' => 'E02001702',
        '7JE' => 'E02001702',
        '7JF' => 'E02001704',
        '7JG' => 'E02001704',
        '7JH' => 'E02001702',
        '7JJ' => 'E02001702',
        '7JL' => 'E02001702',
        '7JN' => 'E02001702',
        '7JP' => 'E02001704',
        '7JQ' => 'E02001704',
        '7JR' => 'E02001704',
        '7JS' => 'E02001704',
        '7JT' => 'E02001704',
        '7JU' => 'E02001704',
        '7JW' => 'E02001704',
        '7JX' => 'E02001702',
        '7JY' => 'E02001704',
        '7JZ' => 'E02001702',
        '7LA' => 'E02001702',
        '7LB' => 'E02001702',
        '7LD' => 'E02001702',
        '7LE' => 'E02001702',
        '7LF' => 'E02001702',
        '7LG' => 'E02001702',
        '7LH' => 'E02001702',
        '7LJ' => 'E02001702',
        '7LL' => 'E02001702',
        '7LN' => 'E02001702',
        '7LP' => 'E02001702',
        '7LQ' => 'E02001702',
        '7LR' => 'E02001702',
        '7LS' => 'E02001702',
        '7LT' => 'E02001702',
        '7LU' => 'E02001702',
        '7LW' => 'E02001702',
        '7LX' => 'E02001702',
        '7LY' => 'E02001702',
        '7NA' => 'E02001702',
        '7NB' => 'E02001702',
        '7ND' => 'E02001702',
        '7NE' => 'E02001706',
        '7NL' => 'E02001797',
        '7NN' => 'E02001797',
        '7NP' => 'E02001797',
        '7NQ' => 'E02001797',
        '7NR' => 'E02001797',
        '7NS' => 'E02001797',
        '7NT' => 'E02001797',
        '7NU' => 'E02001797',
        '7NW' => 'E02001797',
        '7NX' => 'E02001797',
        '7NY' => 'E02001797',
        '7NZ' => 'E02001797',
        '7PA' => 'E02001797',
        '7PB' => 'E02001797',
        '7PD' => 'E02001797',
        '7PE' => 'E02001797',
        '7PF' => 'E02001797',
        '7PG' => 'E02001797',
        '7PH' => 'E02001797',
        '7PJ' => 'E02001797',
        '7PL' => 'E02001797',
        '7PN' => 'E02001797',
        '7PP' => 'E02001797',
        '7PQ' => 'E02001797',
        '7PR' => 'E02001797',
        '7PS' => 'E02001797',
        '7PT' => 'E02001800',
        '7PU' => 'E02001797',
        '7PX' => 'E02001797',
        '7PY' => 'E02001797',
        '7PZ' => 'E02001797',
        '7QA' => 'E02001702',
        '7QB' => 'E02001702',
        '7QD' => 'E02001702',
        '7QE' => 'E02001702',
        '7QF' => 'E02001702',
        '7QG' => 'E02001797',
        '7QH' => 'E02001800',
        '7QJ' => 'E02001797',
        '7QL' => 'E02001797',
        '7QN' => 'E02001797',
        '7QP' => 'E02001797',
        '7QQ' => 'E02001797',
        '7QR' => 'E02001797',
        '7QS' => 'E02001797',
        '7QT' => 'E02001797',
        '7QU' => 'E02001797',
        '7QW' => 'E02001797',
        '7QX' => 'E02001797',
        '7QY' => 'E02001797',
        '7QZ' => 'E02001797',
        '7RA' => 'E02001797',
        '7RB' => 'E02001800',
        '7RD' => 'E02001797',
        '7RE' => 'E02001797',
        '7RF' => 'E02001797',
        '7RG' => 'E02001797',
        '7RH' => 'E02001797',
        '7RJ' => 'E02001797',
        '7RL' => 'E02001797',
        '7RN' => 'E02001797',
        '7RP' => 'E02001797',
        '7RQ' => 'E02001797',
        '7RR' => 'E02001797',
        '7RS' => 'E02001797',
        '7RT' => 'E02001797',
        '7RU' => 'E02001797',
        '7RX' => 'E02001797',
        '7RY' => 'E02001797',
        '7SA' => 'E02001797',
        '7SB' => 'E02001800',
        '7SD' => 'E02001800',
        '7SE' => 'E02001800',
        '7SG' => 'E02001797',
        '7SH' => 'E02001800',
        '7SJ' => 'E02001800',
        '7SL' => 'E02001797',
        '7SN' => 'E02001797',
        '7SP' => 'E02001797',
        '7SQ' => 'E02001797',
        '7SS' => 'E02001706',
        '7ST' => 'E02001800',
        '7SW' => 'E02001797',
        '7SX' => 'E02001797',
        '7SZ' => 'E02001800',
        '7TA' => 'E02001701',
        '7TB' => 'E02001704',
        '7TD' => 'E02001704',
        '7TE' => 'E02001706',
        '7TF' => 'E02001704',
        '7TG' => 'E02001704',
        '7TH' => 'E02001704',
        '7TJ' => 'E02001704',
        '7TL' => 'E02001704',
        '7TN' => 'E02001704',
        '7TQ' => 'E02001704',
        '7TR' => 'E02001704',
        '7TS' => 'E02001704',
        '7TT' => 'E02001704',
        '7TU' => 'E02001704',
        '7TX' => 'E02001704',
        '7TY' => 'E02001706',
        '7UA' => 'E02001706',
        '7UB' => 'E02001706',
        '7UD' => 'E02001704',
        '7UE' => 'E02001702',
        '7UF' => 'E02001800',
        '7UP' => 'E02001706',
        '7UQ' => 'E02001800',
        '7US' => 'E02001704',
        '7UT' => 'E02001704',
        '7UU' => 'E02001704',
        '7UX' => 'E02001704',
        '7UY' => 'E02001702',
        '7UZ' => 'E02001800',
        '7WA' => 'E02001702',
        '7WB' => 'E02001702',
        '7WD' => 'E02001688',
        '7WE' => 'E02001688',
        '7WF' => 'E02001702',
        '7WG' => 'E02001701',
        '7WH' => 'E02001701',
        '7WW' => 'E02001688',
        '7WX' => 'E02001688',
        '7WY' => 'E02001688',
        '7WZ' => 'E02001688',
        '7XA' => 'E02001702',
        '7XB' => 'E02001702',
        '7XD' => 'E02001702',
        '7XE' => 'E02001702',
        '7XF' => 'E02001702',
        '7XG' => 'E02001702',
        '7XH' => 'E02001702',
        '7XJ' => 'E02001702',
        '7XL' => 'E02001701',
        '7XN' => 'E02001702',
        '7XP' => 'E02001702',
        '7XQ' => 'E02001702',
        '7XR' => 'E02001706',
        '7XS' => 'E02001702',
        '7XT' => 'E02001702',
        '7XU' => 'E02001702',
        '7XW' => 'E02001797',
        '7XX' => 'E02001706',
        '7XY' => 'E02001702',
        '7XZ' => 'E02001702',
        '7YA' => 'E02001702',
        '7YB' => 'E02001702',
        '7YD' => 'E02001702',
        '7YE' => 'E02001702',
        '7YF' => 'E02001702',
        '7YG' => 'E02001688',
        '7YH' => 'E02001702',
        '7YJ' => 'E02001702',
        '7YL' => 'E02001702',
        '7YN' => 'E02001702',
        '7YP' => 'E02001702',
        '7YQ' => 'E02001702',
        '7YR' => 'E02001702',
        '7YS' => 'E02001688',
        '7YT' => 'E02001800',
        '7YU' => 'E02001797',
        '7YW' => 'E02001702',
        '7YX' => 'E02001797',
        '7YY' => 'E02001797',
        '7YZ' => 'E02001797',
        '7ZT' => 'E02001797',
        '9AE' => 'E02001688',
        '9AP' => 'E02001688',
        '9AQ' => 'E02001688',
        '9BA' => 'E02001688',
        '9BB' => 'E02001688',
        '9BD' => 'E02001688',
        '9BG' => 'E02001688',
        '9BH' => 'E02001688',
        '9BJ' => 'E02001688',
        '9BL' => 'E02001688',
        '9BN' => 'E02001688',
        '9BP' => 'E02001688',
        '9BR' => 'E02001688',
        '9BS' => 'E02001688',
        '9BT' => 'E02001688',
        '9BU' => 'E02001688',
        '9BW' => 'E02001688',
        '9BX' => 'E02001688',
        '9BY' => 'E02001688',
        '9BZ' => 'E02001688',
        '9DA' => 'E02001688',
        '9DB' => 'E02001688',
        '9DE' => 'E02001688',
        '9DF' => 'E02001688',
        '9DG' => 'E02001688',
        '9DH' => 'E02001688',
        '9DJ' => 'E02001688',
        '9DL' => 'E02001688',
        '9DN' => 'E02001688',
        '9DP' => 'E02001688',
        '9DQ' => 'E02001688',
        '9DR' => 'E02001688',
        '9DS' => 'E02001688',
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