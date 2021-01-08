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
final class TN14
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02005096',
        '5AB' => 'E02005096',
        '5AD' => 'E02005096',
        '5AE' => 'E02005096',
        '5AF' => 'E02005096',
        '5AG' => 'E02005096',
        '5AH' => 'E02005096',
        '5AJ' => 'E02005096',
        '5AL' => 'E02005096',
        '5AN' => 'E02005096',
        '5AP' => 'E02005096',
        '5AQ' => 'E02005096',
        '5AR' => 'E02005096',
        '5AS' => 'E02005096',
        '5AT' => 'E02005096',
        '5AU' => 'E02005096',
        '5AW' => 'E02005096',
        '5AX' => 'E02005096',
        '5AY' => 'E02005096',
        '5AZ' => 'E02005096',
        '5BA' => 'E02005096',
        '5BB' => 'E02005096',
        '5BD' => 'E02005096',
        '5BE' => 'E02005096',
        '5BF' => 'E02005096',
        '5BG' => 'E02005096',
        '5BH' => 'E02005096',
        '5BJ' => 'E02005096',
        '5BL' => 'E02005096',
        '5BN' => 'E02005096',
        '5BP' => 'E02005096',
        '5BQ' => 'E02005096',
        '5BS' => 'E02005096',
        '5BT' => 'E02005096',
        '5BU' => 'E02005096',
        '5BW' => 'E02005096',
        '5BX' => 'E02005096',
        '5BY' => 'E02005096',
        '5BZ' => 'E02005098',
        '5DA' => 'E02005096',
        '5DB' => 'E02005096',
        '5DD' => 'E02005096',
        '5DE' => 'E02005096',
        '5DF' => 'E02005096',
        '5DG' => 'E02005096',
        '5DH' => 'E02005096',
        '5DJ' => 'E02005096',
        '5DL' => 'E02005095',
        '5DN' => 'E02005096',
        '5DP' => 'E02005096',
        '5DQ' => 'E02005096',
        '5DR' => 'E02005096',
        '5DS' => 'E02005096',
        '5DT' => 'E02005096',
        '5DU' => 'E02005096',
        '5DW' => 'E02005096',
        '5DX' => 'E02005096',
        '5DY' => 'E02005096',
        '5DZ' => 'E02005096',
        '5EA' => 'E02005096',
        '5EB' => 'E02005096',
        '5ED' => 'E02005096',
        '5EE' => 'E02005096',
        '5EF' => 'E02005096',
        '5EG' => 'E02005096',
        '5EH' => 'E02005095',
        '5EJ' => 'E02005095',
        '5EL' => 'E02005095',
        '5EN' => 'E02005098',
        '5EP' => 'E02005095',
        '5EQ' => 'E02005096',
        '5ER' => 'E02005096',
        '5ES' => 'E02005096',
        '5ET' => 'E02005095',
        '5EU' => 'E02005095',
        '5EW' => 'E02005095',
        '5EX' => 'E02005095',
        '5EY' => 'E02005096',
        '5EZ' => 'E02005095',
        '5FA' => 'E02005094',
        '5FB' => 'E02005095',
        '5FD' => 'E02005094',
        '5FE' => 'E02005094',
        '5FH' => 'E02005094',
        '5FJ' => 'E02005094',
        '5FL' => 'E02005094',
        '5FN' => 'E02005094',
        '5FP' => 'E02005094',
        '5FQ' => 'E02005094',
        '5FR' => 'E02005094',
        '5FS' => 'E02005094',
        '5FT' => 'E02005094',
        '5FU' => 'E02005094',
        '5FW' => 'E02005094',
        '5FX' => 'E02005094',
        '5FY' => 'E02005094',
        '5FZ' => 'E02005095',
        '5GA' => 'E02005094',
        '5GB' => 'E02005094',
        '5GD' => 'E02005094',
        '5GE' => 'E02005094',
        '5GF' => 'E02005094',
        '5GG' => 'E02005094',
        '5GH' => 'E02005094',
        '5GJ' => 'E02005094',
        '5GL' => 'E02005096',
        '5GN' => 'E02005094',
        '5GP' => 'E02005094',
        '5GQ' => 'E02005094',
        '5GR' => 'E02005094',
        '5GS' => 'E02005096',
        '5GT' => 'E02005094',
        '5GU' => 'E02005094',
        '5GW' => 'E02005094',
        '5GX' => 'E02005094',
        '5GY' => 'E02005096',
        '5HA' => 'E02005094',
        '5HB' => 'E02005094',
        '5HD' => 'E02005094',
        '5HE' => 'E02005094',
        '5HF' => 'E02005094',
        '5HG' => 'E02005098',
        '5HH' => 'E02005094',
        '5HJ' => 'E02005094',
        '5HL' => 'E02005094',
        '5HN' => 'E02005094',
        '5HP' => 'E02005094',
        '5HR' => 'E02005094',
        '5HS' => 'E02005095',
        '5HT' => 'E02005094',
        '5HW' => 'E02005094',
        '5HZ' => 'E02005095',
        '5JA' => 'E02005094',
        '5JB' => 'E02005094',
        '5JD' => 'E02005094',
        '5JE' => 'E02005095',
        '5JF' => 'E02005095',
        '5JG' => 'E02005095',
        '5JH' => 'E02005095',
        '5JJ' => 'E02005094',
        '5JL' => 'E02005094',
        '5JN' => 'E02005094',
        '5JP' => 'E02005094',
        '5JQ' => 'E02005095',
        '5JR' => 'E02005094',
        '5JS' => 'E02005094',
        '5JT' => 'E02005094',
        '5JU' => 'E02005094',
        '5JW' => 'E02005095',
        '5JX' => 'E02005095',
        '5JY' => 'E02005095',
        '5JZ' => 'E02005095',
        '5LA' => 'E02005095',
        '5LB' => 'E02005095',
        '5LD' => 'E02005095',
        '5LE' => 'E02005095',
        '5LF' => 'E02005095',
        '5LG' => 'E02005095',
        '5LJ' => 'E02005096',
        '5LP' => 'E02005095',
        '5LQ' => 'E02005095',
        '5LR' => 'E02005095',
        '5LS' => 'E02005095',
        '5LT' => 'E02005095',
        '5LU' => 'E02005095',
        '5LX' => 'E02005095',
        '5LY' => 'E02005095',
        '5LZ' => 'E02005095',
        '5NA' => 'E02005095',
        '5NB' => 'E02005095',
        '5ND' => 'E02005095',
        '5NE' => 'E02005095',
        '5NF' => 'E02005095',
        '5NG' => 'E02005095',
        '5NH' => 'E02005095',
        '5NJ' => 'E02005095',
        '5NL' => 'E02005095',
        '5NN' => 'E02005095',
        '5NP' => 'E02005095',
        '5NQ' => 'E02005095',
        '5NR' => 'E02005095',
        '5NT' => 'E02005096',
        '5PA' => 'E02005095',
        '5PB' => 'E02005095',
        '5PD' => 'E02005095',
        '5PE' => 'E02005095',
        '5PF' => 'E02005095',
        '5PG' => 'E02005094',
        '5PH' => 'E02005094',
        '5PJ' => 'E02005095',
        '5PL' => 'E02005094',
        '5PN' => 'E02005095',
        '5PP' => 'E02005095',
        '5PQ' => 'E02005094',
        '5PR' => 'E02005095',
        '5PS' => 'E02005095',
        '5PT' => 'E02005095',
        '5PU' => 'E02005095',
        '5PW' => 'E02005095',
        '5PX' => 'E02005095',
        '5PY' => 'E02005095',
        '5PZ' => 'E02005094',
        '5QA' => 'E02005095',
        '5QB' => 'E02005095',
        '5QH' => 'E02005095',
        '5QJ' => 'E02005095',
        '5QL' => 'E02005095',
        '5QN' => 'E02005095',
        '5QP' => 'E02005095',
        '5QR' => 'E02005095',
        '5QS' => 'E02005095',
        '5QT' => 'E02005095',
        '5QU' => 'E02005095',
        '5QW' => 'E02005095',
        '5QX' => 'E02005095',
        '5QY' => 'E02005095',
        '5QZ' => 'E02005095',
        '5RA' => 'E02005095',
        '5RB' => 'E02005095',
        '5RH' => 'E02005095',
        '5RJ' => 'E02005095',
        '5RL' => 'E02005095',
        '5RN' => 'E02005095',
        '5RP' => 'E02005095',
        '5RR' => 'E02005095',
        '5RS' => 'E02005095',
        '5RT' => 'E02005095',
        '5RU' => 'E02005095',
        '5RW' => 'E02005095',
        '5RX' => 'E02005095',
        '5RY' => 'E02005095',
        '5RZ' => 'E02005095',
        '5SA' => 'E02005095',
        '5SB' => 'E02005095',
        '5SD' => 'E02005095',
        '5SJ' => 'E02005095',
        '5SL' => 'E02005095',
        '5SP' => 'E02005095',
        '5SR' => 'E02005096',
        '5TE' => 'E02005095',
        '5TF' => 'E02005095',
        '5TG' => 'E02005095',
        '5TL' => 'E02005094',
        '5TP' => 'E02005095',
        '5TS' => 'E02005095',
        '5TT' => 'E02005095',
        '5TX' => 'E02005095',
        '5TY' => 'E02005095',
        '5TZ' => 'E02005095',
        '5UN' => 'E02005095',
        '5WA' => 'E02005098',
        '5WB' => 'E02005098',
        '5WD' => 'E02005098',
        '5WE' => 'E02005098',
        '5WF' => 'E02005098',
        '5WG' => 'E02005098',
        '5WH' => 'E02005098',
        '5WJ' => 'E02005098',
        '5WL' => 'E02005098',
        '5WN' => 'E02005098',
        '5WP' => 'E02005098',
        '5WQ' => 'E02005098',
        '5WR' => 'E02005098',
        '5WS' => 'E02005098',
        '5WT' => 'E02005098',
        '5WU' => 'E02005098',
        '5WW' => 'E02005098',
        '5WX' => 'E02005098',
        '5WY' => 'E02005098',
        '5WZ' => 'E02005098',
        '5XA' => 'E02005098',
        '5XB' => 'E02005098',
        '5XD' => 'E02005095',
        '5XE' => 'E02005098',
        '5XF' => 'E02005098',
        '5XG' => 'E02005098',
        '5XQ' => 'E02005098',
        '5YA' => 'E02005098',
        '5YB' => 'E02005098',
        '5YY' => 'E02005098',
        '5ZA' => 'E02005096',
        '5ZB' => 'E02005098',
        '5ZD' => 'E02005095',
        '5ZE' => 'E02005098',
        '5ZF' => 'E02005095',
        '5ZG' => 'E02005095',
        '5ZH' => 'E02005095',
        '5ZJ' => 'E02005095',
        '5ZL' => 'E02005098',
        '5ZN' => 'E02005098',
        '5ZP' => 'E02005095',
        '5ZQ' => 'E02005095',
        '5ZR' => 'E02005098',
        '5ZS' => 'E02005098',
        '5ZT' => 'E02005098',
        '5ZU' => 'E02005098',
        '5ZW' => 'E02005098',
        '5ZX' => 'E02005095',
        '5ZY' => 'E02005095',
        '5ZZ' => 'E02005095',
        '6AA' => 'E02005099',
        '6AB' => 'E02005099',
        '6AD' => 'E02005099',
        '6AE' => 'E02005099',
        '6AF' => 'E02005099',
        '6AG' => 'E02005099',
        '6AH' => 'E02005099',
        '6AJ' => 'E02005099',
        '6AL' => 'E02005099',
        '6AN' => 'E02005097',
        '6AP' => 'E02005099',
        '6AQ' => 'E02005098',
        '6AR' => 'E02005099',
        '6AS' => 'E02005099',
        '6AT' => 'E02005099',
        '6AU' => 'E02005099',
        '6AW' => 'E02005099',
        '6AX' => 'E02005099',
        '6AY' => 'E02005099',
        '6AZ' => 'E02005097',
        '6BA' => 'E02005099',
        '6BB' => 'E02005099',
        '6BD' => 'E02005099',
        '6BE' => 'E02005099',
        '6BG' => 'E02005099',
        '6BH' => 'E02005099',
        '6BJ' => 'E02005099',
        '6BL' => 'E02005099',
        '6BN' => 'E02005099',
        '6BP' => 'E02005097',
        '6BQ' => 'E02005099',
        '6BS' => 'E02005097',
        '6BT' => 'E02005097',
        '6BU' => 'E02005097',
        '6BW' => 'E02005097',
        '6BX' => 'E02005099',
        '6BY' => 'E02005099',
        '6BZ' => 'E02005099',
        '6DA' => 'E02005099',
        '6DB' => 'E02005099',
        '6DD' => 'E02005099',
        '6DE' => 'E02005099',
        '6DF' => 'E02005099',
        '6DG' => 'E02005099',
        '6DH' => 'E02005099',
        '6DJ' => 'E02005099',
        '6DL' => 'E02005099',
        '6DN' => 'E02005099',
        '6DP' => 'E02005099',
        '6DQ' => 'E02005099',
        '6DR' => 'E02005099',
        '6DS' => 'E02005099',
        '6DT' => 'E02005099',
        '6DU' => 'E02005099',
        '6DW' => 'E02005099',
        '6DX' => 'E02005099',
        '6DY' => 'E02005099',
        '6DZ' => 'E02005098',
        '6EA' => 'E02005099',
        '6EB' => 'E02005099',
        '6ED' => 'E02005097',
        '6EE' => 'E02005099',
        '6EF' => 'E02005099',
        '6EG' => 'E02005099',
        '6EH' => 'E02005099',
        '6EJ' => 'E02005099',
        '6EL' => 'E02005099',
        '6EN' => 'E02005099',
        '6EP' => 'E02005099',
        '6EQ' => 'E02005099',
        '6ER' => 'E02005099',
        '6ES' => 'E02005099',
        '6ET' => 'E02005099',
        '6EU' => 'E02005099',
        '6EW' => 'E02005099',
        '6EX' => 'E02005097',
        '6EY' => 'E02005099',
        '6GT' => 'E02005098',
        '6HA' => 'E02005097',
        '6HB' => 'E02005097',
        '6HD' => 'E02005097',
        '6HE' => 'E02005097',
        '6HF' => 'E02005097',
        '6HG' => 'E02005097',
        '6HJ' => 'E02005097',
        '6HN' => 'E02005099',
        '6HP' => 'E02005097',
        '6HR' => 'E02005098',
        '6HS' => 'E02005098',
        '6HT' => 'E02005098',
        '6HU' => 'E02005097',
        '6HX' => 'E02005097',
        '6HY' => 'E02005099',
        '6JA' => 'E02005099',
        '6JB' => 'E02005099',
        '6JD' => 'E02005099',
        '6JE' => 'E02005099',
        '6JF' => 'E02005099',
        '6JG' => 'E02005099',
        '6JH' => 'E02005099',
        '6JJ' => 'E02005099',
        '6JL' => 'E02005099',
        '6JN' => 'E02005099',
        '6JP' => 'E02005099',
        '6JQ' => 'E02005098',
        '6JR' => 'E02005099',
        '6JS' => 'E02005099',
        '6JT' => 'E02005099',
        '6JU' => 'E02005099',
        '6JW' => 'E02005099',
        '6JX' => 'E02005099',
        '6JY' => 'E02005099',
        '6JZ' => 'E02005099',
        '6LA' => 'E02005099',
        '6LB' => 'E02005101',
        '6LD' => 'E02005099',
        '6LE' => 'E02005099',
        '6LG' => 'E02005099',
        '6LH' => 'E02005099',
        '6LJ' => 'E02005098',
        '6LR' => 'E02005098',
        '6LS' => 'E02005098',
        '6LT' => 'E02005098',
        '6LU' => 'E02005098',
        '6LX' => 'E02005098',
        '6LY' => 'E02005098',
        '6LZ' => 'E02005098',
        '6NA' => 'E02005098',
        '6NB' => 'E02005098',
        '6ND' => 'E02005097',
        '6NE' => 'E02005098',
        '6NF' => 'E02005098',
        '6NG' => 'E02005098',
        '6NH' => 'E02005098',
        '6NJ' => 'E02005098',
        '6NL' => 'E02005098',
        '6NN' => 'E02005098',
        '6NP' => 'E02005101',
        '6NQ' => 'E02005098',
        '6NS' => 'E02005097',
        '6NT' => 'E02005098',
        '6NW' => 'E02005098',
        '6NZ' => 'E02005098',
        '6PA' => 'E02005098',
        '6PB' => 'E02005098',
        '6PD' => 'E02005098',
        '6PE' => 'E02005098',
        '6PG' => 'E02005098',
        '6PH' => 'E02005098',
        '6PJ' => 'E02005098',
        '6PL' => 'E02005098',
        '6PN' => 'E02005098',
        '6PP' => 'E02005098',
        '6PR' => 'E02005098',
        '6PS' => 'E02005098',
        '6PT' => 'E02005098',
        '6PU' => 'E02005098',
        '6PX' => 'E02005098',
        '6PY' => 'E02005098',
        '6QA' => 'E02005098',
        '6QB' => 'E02005098',
        '6QD' => 'E02005098',
        '6QE' => 'E02005098',
        '6QG' => 'E02005098',
        '6QH' => 'E02005098',
        '6QJ' => 'E02005098',
        '6QL' => 'E02005098',
        '6QN' => 'E02005098',
        '6QP' => 'E02005098',
        '6QR' => 'E02005098',
        '6QS' => 'E02005098',
        '6QT' => 'E02005098',
        '6QU' => 'E02005098',
        '6QX' => 'E02005098',
        '6QY' => 'E02005098',
        '6QZ' => 'E02005098',
        '6RB' => 'E02005098',
        '6TF' => 'E02005098',
        '6TG' => 'E02005098',
        '6TQ' => 'E02005098',
        '6UP' => 'E02005098',
        '6WA' => 'E02005098',
        '6WB' => 'E02005098',
        '6WD' => 'E02005098',
        '6WE' => 'E02005098',
        '6WF' => 'E02005098',
        '6WS' => 'E02005098',
        '6WT' => 'E02005098',
        '6WX' => 'E02005098',
        '6WZ' => 'E02005098',
        '6YE' => 'E02005098',
        '6YF' => 'E02005098',
        '6YQ' => 'E02005098',
        '6YT' => 'E02005098',
        '6YZ' => 'E02005098',
        '6ZG' => 'E02005098',
        '6ZH' => 'E02005098',
        '6ZJ' => 'E02005098',
        '6ZL' => 'E02005098',
        '6ZN' => 'E02005098',
        '6ZP' => 'E02005097',
        '6ZQ' => 'E02005097',
        '6ZR' => 'E02005097',
        '6ZS' => 'E02005097',
        '6ZT' => 'E02005097',
        '6ZU' => 'E02005097',
        '6ZW' => 'E02005097',
        '6ZX' => 'E02005097',
        '6ZY' => 'E02005098',
        '6ZZ' => 'E02005097',
        '7AA' => 'E02005094',
        '7AB' => 'E02005094',
        '7AD' => 'E02005094',
        '7AE' => 'E02005094',
        '7AF' => 'E02005094',
        '7AG' => 'E02005094',
        '7AH' => 'E02005094',
        '7AJ' => 'E02005094',
        '7AL' => 'E02005094',
        '7AN' => 'E02005094',
        '7AP' => 'E02005094',
        '7AQ' => 'E02005094',
        '7AR' => 'E02005094',
        '7AS' => 'E02005094',
        '7AT' => 'E02005094',
        '7AU' => 'E02005094',
        '7AW' => 'E02005094',
        '7AX' => 'E02005094',
        '7AY' => 'E02005094',
        '7AZ' => 'E02005094',
        '7BA' => 'E02005094',
        '7BB' => 'E02005094',
        '7BD' => 'E02005094',
        '7BE' => 'E02005094',
        '7BF' => 'E02005094',
        '7BG' => 'E02005094',
        '7BH' => 'E02005094',
        '7BJ' => 'E02005094',
        '7BL' => 'E02005094',
        '7BN' => 'E02005094',
        '7BP' => 'E02005094',
        '7BQ' => 'E02005094',
        '7BR' => 'E02005094',
        '7BS' => 'E02005094',
        '7BT' => 'E02005094',
        '7BU' => 'E02005094',
        '7BW' => 'E02005094',
        '7BX' => 'E02005094',
        '7BY' => 'E02005094',
        '7BZ' => 'E02005094',
        '7DA' => 'E02005094',
        '7DB' => 'E02005094',
        '7DD' => 'E02005094',
        '7DE' => 'E02005094',
        '7DF' => 'E02005094',
        '7DG' => 'E02005094',
        '7DH' => 'E02005094',
        '7DJ' => 'E02005094',
        '7DL' => 'E02005094',
        '7DN' => 'E02005094',
        '7DP' => 'E02005094',
        '7DQ' => 'E02005094',
        '7DR' => 'E02005094',
        '7DS' => 'E02005094',
        '7DT' => 'E02005094',
        '7DU' => 'E02005094',
        '7DW' => 'E02005094',
        '7DX' => 'E02005094',
        '7DY' => 'E02005094',
        '7DZ' => 'E02005094',
        '7EA' => 'E02005094',
        '7EB' => 'E02005094',
        '7ED' => 'E02005094',
        '7EE' => 'E02005094',
        '7EF' => 'E02005094',
        '7EG' => 'E02005094',
        '7EH' => 'E02005094',
        '7EJ' => 'E02005094',
        '7EN' => 'E02005098',
        '7EP' => 'E02005094',
        '7EQ' => 'E02005094',
        '7ER' => 'E02005094',
        '7ES' => 'E02005094',
        '7ET' => 'E02005094',
        '7EU' => 'E02005094',
        '7EW' => 'E02005094',
        '7EX' => 'E02005094',
        '7EY' => 'E02005094',
        '7EZ' => 'E02005094',
        '7HA' => 'E02005094',
        '7HB' => 'E02005094',
        '7HD' => 'E02005094',
        '7HE' => 'E02005094',
        '7HF' => 'E02005094',
        '7HG' => 'E02005094',
        '7HH' => 'E02005094',
        '7HJ' => 'E02005094',
        '7HL' => 'E02005094',
        '7HN' => 'E02005094',
        '7HP' => 'E02005094',
        '7HQ' => 'E02005094',
        '7HR' => 'E02000163',
        '7HS' => 'E02005094',
        '7HT' => 'E02005094',
        '7HW' => 'E02005094',
        '7JA' => 'E02005094',
        '7JB' => 'E02005094',
        '7JD' => 'E02005094',
        '7JE' => 'E02005094',
        '7JF' => 'E02005094',
        '7JG' => 'E02005094',
        '7JH' => 'E02005094',
        '7JJ' => 'E02005094',
        '7JL' => 'E02005094',
        '7JN' => 'E02005094',
        '7JP' => 'E02005094',
        '7JR' => 'E02005094',
        '7JS' => 'E02005094',
        '7JT' => 'E02005094',
        '7JU' => 'E02005094',
        '7JW' => 'E02005094',
        '7JX' => 'E02005094',
        '7JY' => 'E02005094',
        '7LA' => 'E02005094',
        '7LB' => 'E02005094',
        '7LD' => 'E02005094',
        '7LE' => 'E02005094',
        '7LG' => 'E02005094',
        '7LH' => 'E02005094',
        '7LJ' => 'E02005094',
        '7LL' => 'E02005094',
        '7LN' => 'E02005094',
        '7LP' => 'E02005094',
        '7LQ' => 'E02005094',
        '7LR' => 'E02005094',
        '7LS' => 'E02005094',
        '7LT' => 'E02005094',
        '7LU' => 'E02005094',
        '7LX' => 'E02005094',
        '7LZ' => 'E02005094',
        '7NA' => 'E02005094',
        '7NB' => 'E02005094',
        '7ND' => 'E02005094',
        '7NE' => 'E02005094',
        '7NF' => 'E02005094',
        '7NG' => 'E02005094',
        '7NH' => 'E02005094',
        '7NJ' => 'E02005094',
        '7NL' => 'E02005094',
        '7NN' => 'E02005094',
        '7NP' => 'E02005094',
        '7NQ' => 'E02006789',
        '7NR' => 'E02005094',
        '7NS' => 'E02005094',
        '7NT' => 'E02005094',
        '7NU' => 'E02005094',
        '7NW' => 'E02005094',
        '7NX' => 'E02005094',
        '7NY' => 'E02005094',
        '7NZ' => 'E02006789',
        '7PA' => 'E02005094',
        '7PB' => 'E02005094',
        '7PD' => 'E02005094',
        '7PE' => 'E02005094',
        '7PF' => 'E02005094',
        '7PG' => 'E02005094',
        '7PH' => 'E02005094',
        '7PJ' => 'E02005094',
        '7PL' => 'E02005099',
        '7PN' => 'E02005094',
        '7PP' => 'E02005099',
        '7PQ' => 'E02005094',
        '7PW' => 'E02005094',
        '7PZ' => 'E02005094',
        '7QA' => 'E02006789',
        '7QB' => 'E02006789',
        '7QD' => 'E02006789',
        '7QE' => 'E02006789',
        '7QF' => 'E02006789',
        '7QG' => 'E02006789',
        '7QH' => 'E02006789',
        '7QJ' => 'E02006789',
        '7QL' => 'E02006789',
        '7QN' => 'E02000162',
        '7QP' => 'E02000162',
        '7QQ' => 'E02006789',
        '7QR' => 'E02006789',
        '7QS' => 'E02000162',
        '7QT' => 'E02000162',
        '7QU' => 'E02000162',
        '7QX' => 'E02000162',
        '7QY' => 'E02000162',
        '7RA' => 'E02000162',
        '7RB' => 'E02000162',
        '7RD' => 'E02000162',
        '7RE' => 'E02000162',
        '7RF' => 'E02000162',
        '7RG' => 'E02000162',
        '7RH' => 'E02005094',
        '7RJ' => 'E02005098',
        '7RL' => 'E02005094',
        '7RP' => 'E02005094',
        '7RQ' => 'E02005094',
        '7RR' => 'E02005094',
        '7RS' => 'E02005094',
        '7RT' => 'E02005094',
        '7RU' => 'E02005094',
        '7RW' => 'E02005098',
        '7RX' => 'E02005094',
        '7RY' => 'E02005094',
        '7RZ' => 'E02005094',
        '7SA' => 'E02005094',
        '7SB' => 'E02005094',
        '7SD' => 'E02005094',
        '7SE' => 'E02005094',
        '7SF' => 'E02005094',
        '7SG' => 'E02005094',
        '7SH' => 'E02005094',
        '7SJ' => 'E02005094',
        '7SL' => 'E02005094',
        '7SN' => 'E02005094',
        '7SP' => 'E02005094',
        '7SR' => 'E02005094',
        '7SS' => 'E02005094',
        '7ST' => 'E02005094',
        '7SU' => 'E02005094',
        '7SW' => 'E02005094',
        '7SX' => 'E02005094',
        '7SY' => 'E02005094',
        '7SZ' => 'E02005094',
        '7TA' => 'E02005094',
        '7TB' => 'E02005094',
        '7TD' => 'E02005094',
        '7TE' => 'E02005094',
        '7TF' => 'E02005094',
        '7TG' => 'E02005094',
        '7TH' => 'E02005094',
        '7TJ' => 'E02005094',
        '7TL' => 'E02005094',
        '7TN' => 'E02005094',
        '7TP' => 'E02005094',
        '7TR' => 'E02005094',
        '7TS' => 'E02005094',
        '7TT' => 'E02005094',
        '7TU' => 'E02005094',
        '7TW' => 'E02005094',
        '7TX' => 'E02005094',
        '7TY' => 'E02005094',
        '7TZ' => 'E02005094',
        '7UA' => 'E02005089',
        '7UB' => 'E02005089',
        '7UD' => 'E02005094',
        '7UE' => 'E02005094',
        '7WA' => 'E02005098',
        '7WB' => 'E02005098',
        '7WE' => 'E02005098',
        '7WF' => 'E02005098',
        '7WG' => 'E02005098',
        '7WJ' => 'E02005098',
        '7WP' => 'E02005098',
        '7WQ' => 'E02005098',
        '7WR' => 'E02005098',
        '7WS' => 'E02005098',
        '7WT' => 'E02005098',
        '7WU' => 'E02005098',
        '7WW' => 'E02005098',
        '7WX' => 'E02005098',
        '7WY' => 'E02005098',
        '7WZ' => 'E02005098',
        '7XA' => 'E02005094',
        '7XQ' => 'E02005098',
        '7ZA' => 'E02005094',
        '7ZB' => 'E02005098',
        '7ZD' => 'E02005094',
        '7ZE' => 'E02005094',
        '7ZF' => 'E02005094',
        '7ZG' => 'E02005094',
        '7ZH' => 'E02005094',
        '7ZJ' => 'E02005098',
        '7ZL' => 'E02005094',
        '7ZN' => 'E02005098',
        '7ZP' => 'E02005094',
        '7ZQ' => 'E02005098',
        '7ZR' => 'E02005098',
        '7ZS' => 'E02005094',
        '7ZT' => 'E02005094',
        '7ZU' => 'E02005098',
        '7ZW' => 'E02005094',
        '7ZX' => 'E02005098',
        '7ZY' => 'E02005094',
        '7ZZ' => 'E02005098',
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
