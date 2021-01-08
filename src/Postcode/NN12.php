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
final class NN12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02005684',
        '6AB' => 'E02005684',
        '6AD' => 'E02005685',
        '6AE' => 'E02005684',
        '6AF' => 'E02005685',
        '6AG' => 'E02005685',
        '6AH' => 'E02005685',
        '6AJ' => 'E02005685',
        '6AL' => 'E02005685',
        '6AN' => 'E02005685',
        '6AP' => 'E02005685',
        '6AQ' => 'E02005685',
        '6AR' => 'E02005685',
        '6AS' => 'E02005685',
        '6AT' => 'E02005685',
        '6AU' => 'E02005685',
        '6AW' => 'E02005685',
        '6AX' => 'E02005685',
        '6AY' => 'E02005685',
        '6AZ' => 'E02005685',
        '6BA' => 'E02005685',
        '6BB' => 'E02005685',
        '6BD' => 'E02005685',
        '6BE' => 'E02005685',
        '6BF' => 'E02005684',
        '6BG' => 'E02005685',
        '6BH' => 'E02005685',
        '6BJ' => 'E02005685',
        '6BL' => 'E02005685',
        '6BN' => 'E02005685',
        '6BP' => 'E02005685',
        '6BQ' => 'E02005685',
        '6BS' => 'E02005684',
        '6BT' => 'E02005685',
        '6BU' => 'E02005684',
        '6BW' => 'E02005685',
        '6BX' => 'E02005684',
        '6BY' => 'E02005684',
        '6BZ' => 'E02005684',
        '6DA' => 'E02005685',
        '6DB' => 'E02005685',
        '6DD' => 'E02005684',
        '6DE' => 'E02005684',
        '6DF' => 'E02005684',
        '6DG' => 'E02005684',
        '6DH' => 'E02005684',
        '6DJ' => 'E02005684',
        '6DL' => 'E02005684',
        '6DN' => 'E02005684',
        '6DP' => 'E02005685',
        '6DQ' => 'E02005684',
        '6DR' => 'E02005685',
        '6DS' => 'E02005685',
        '6DT' => 'E02005685',
        '6DU' => 'E02005685',
        '6DW' => 'E02005684',
        '6DX' => 'E02005684',
        '6DY' => 'E02005685',
        '6DZ' => 'E02005685',
        '6EA' => 'E02005685',
        '6EB' => 'E02005685',
        '6ED' => 'E02005685',
        '6EE' => 'E02005685',
        '6EF' => 'E02005685',
        '6EG' => 'E02005685',
        '6EH' => 'E02005685',
        '6EJ' => 'E02005685',
        '6EL' => 'E02005685',
        '6EN' => 'E02005685',
        '6EP' => 'E02005685',
        '6EQ' => 'E02005685',
        '6ER' => 'E02005685',
        '6ES' => 'E02005685',
        '6ET' => 'E02005684',
        '6EU' => 'E02005684',
        '6EW' => 'E02005685',
        '6EX' => 'E02005684',
        '6EY' => 'E02005685',
        '6EZ' => 'E02005685',
        '6FA' => 'E02005685',
        '6FB' => 'E02005685',
        '6FD' => 'E02005685',
        '6FE' => 'E02005685',
        '6FF' => 'E02005685',
        '6FG' => 'E02005684',
        '6FH' => 'E02005684',
        '6FJ' => 'E02005684',
        '6FL' => 'E02005685',
        '6FP' => 'E02005685',
        '6FT' => 'E02005684',
        '6FW' => 'E02005685',
        '6FX' => 'E02005685',
        '6FZ' => 'E02005684',
        '6GX' => 'E02005685',
        '6HA' => 'E02005685',
        '6HB' => 'E02005685',
        '6HD' => 'E02005685',
        '6HE' => 'E02005685',
        '6HF' => 'E02005685',
        '6HG' => 'E02005685',
        '6HH' => 'E02005685',
        '6HJ' => 'E02005684',
        '6HL' => 'E02005684',
        '6HN' => 'E02005685',
        '6HP' => 'E02005684',
        '6HQ' => 'E02005685',
        '6HR' => 'E02005685',
        '6HS' => 'E02005685',
        '6HT' => 'E02005685',
        '6HU' => 'E02005685',
        '6HW' => 'E02005685',
        '6HX' => 'E02005685',
        '6HY' => 'E02005685',
        '6HZ' => 'E02005684',
        '6JA' => 'E02005685',
        '6JB' => 'E02005685',
        '6JD' => 'E02005685',
        '6JE' => 'E02005685',
        '6JF' => 'E02005684',
        '6JG' => 'E02005684',
        '6JH' => 'E02005685',
        '6JJ' => 'E02005685',
        '6JL' => 'E02005685',
        '6JN' => 'E02005684',
        '6JP' => 'E02005685',
        '6JQ' => 'E02005685',
        '6JR' => 'E02005685',
        '6JS' => 'E02005684',
        '6JT' => 'E02005684',
        '6JU' => 'E02005684',
        '6JW' => 'E02005685',
        '6JX' => 'E02005684',
        '6JY' => 'E02005684',
        '6JZ' => 'E02005684',
        '6LA' => 'E02005685',
        '6LB' => 'E02005685',
        '6LD' => 'E02005685',
        '6LF' => 'E02005685',
        '6LG' => 'E02005685',
        '6LH' => 'E02005683',
        '6LL' => 'E02005685',
        '6LN' => 'E02005685',
        '6LP' => 'E02005685',
        '6LQ' => 'E02005685',
        '6LR' => 'E02005685',
        '6LS' => 'E02005685',
        '6LT' => 'E02005684',
        '6LU' => 'E02005684',
        '6LW' => 'E02005685',
        '6LX' => 'E02005685',
        '6LY' => 'E02005685',
        '6LZ' => 'E02005685',
        '6NB' => 'E02005685',
        '6NE' => 'E02005685',
        '6NJ' => 'E02005685',
        '6NL' => 'E02005685',
        '6NN' => 'E02005685',
        '6NP' => 'E02005685',
        '6NQ' => 'E02005685',
        '6NR' => 'E02005685',
        '6NS' => 'E02005685',
        '6NT' => 'E02005685',
        '6NU' => 'E02005685',
        '6NW' => 'E02005685',
        '6NX' => 'E02005685',
        '6NY' => 'E02005685',
        '6NZ' => 'E02005685',
        '6PA' => 'E02005685',
        '6PD' => 'E02005685',
        '6PE' => 'E02005684',
        '6PF' => 'E02005685',
        '6PG' => 'E02005684',
        '6PJ' => 'E02005685',
        '6QH' => 'E02005685',
        '6QN' => 'E02005685',
        '6QP' => 'E02005688',
        '6QQ' => 'E02005684',
        '6QW' => 'E02005688',
        '6QY' => 'E02005684',
        '6RA' => 'E02005685',
        '6RB' => 'E02005685',
        '6RD' => 'E02005685',
        '6RE' => 'E02005685',
        '6RF' => 'E02005685',
        '6RG' => 'E02005685',
        '6RH' => 'E02005685',
        '6RJ' => 'E02005685',
        '6RL' => 'E02005685',
        '6RN' => 'E02005684',
        '6RP' => 'E02005685',
        '6RQ' => 'E02005684',
        '6RR' => 'E02005684',
        '6SY' => 'E02005684',
        '6TA' => 'E02005685',
        '6TB' => 'E02005685',
        '6TD' => 'E02005685',
        '6TE' => 'E02005685',
        '6TF' => 'E02005685',
        '6TG' => 'E02005685',
        '6TH' => 'E02005685',
        '6TJ' => 'E02005685',
        '6TQ' => 'E02005684',
        '6UA' => 'E02005685',
        '6UB' => 'E02005685',
        '6UD' => 'E02005685',
        '6UF' => 'E02005685',
        '6UG' => 'E02005684',
        '6UP' => 'E02005685',
        '6UQ' => 'E02005684',
        '6UR' => 'E02005685',
        '6US' => 'E02005684',
        '6UT' => 'E02005685',
        '6UU' => 'E02005684',
        '6UW' => 'E02005684',
        '6UX' => 'E02005685',
        '6UY' => 'E02005685',
        '6WB' => 'E02005685',
        '6WJ' => 'E02005685',
        '6WN' => 'E02005685',
        '6WP' => 'E02005685',
        '6WQ' => 'E02005685',
        '6WR' => 'E02005685',
        '6WU' => 'E02005685',
        '6WY' => 'E02005685',
        '6WZ' => 'E02005688',
        '6XA' => 'E02005684',
        '6XB' => 'E02005684',
        '6XD' => 'E02005684',
        '6XL' => 'E02005685',
        '6XP' => 'E02005684',
        '6XQ' => 'E02005685',
        '6XR' => 'E02005684',
        '6XS' => 'E02005684',
        '6XU' => 'E02005684',
        '6XW' => 'E02005685',
        '6XY' => 'E02005685',
        '6XZ' => 'E02005685',
        '6YE' => 'E02005684',
        '6YF' => 'E02005684',
        '6YG' => 'E02005684',
        '6YH' => 'E02005684',
        '6YJ' => 'E02005684',
        '6YL' => 'E02005684',
        '6YN' => 'E02005684',
        '6YP' => 'E02005684',
        '6YQ' => 'E02005688',
        '6YR' => 'E02005684',
        '6YY' => 'E02005685',
        '6YZ' => 'E02005685',
        '6ZA' => 'E02005685',
        '6ZB' => 'E02005685',
        '6ZD' => 'E02005685',
        '6ZE' => 'E02005685',
        '6ZF' => 'E02005685',
        '6ZG' => 'E02005685',
        '6ZH' => 'E02005685',
        '6ZJ' => 'E02005685',
        '6ZL' => 'E02005685',
        '6ZN' => 'E02005685',
        '6ZP' => 'E02005685',
        '6ZQ' => 'E02005685',
        '6ZR' => 'E02005685',
        '6ZS' => 'E02005685',
        '6ZT' => 'E02005685',
        '6ZU' => 'E02005685',
        '6ZW' => 'E02005685',
        '6ZX' => 'E02005685',
        '6ZY' => 'E02005685',
        '6ZZ' => 'E02005685',
        '7AA' => 'E02005685',
        '7AB' => 'E02005685',
        '7AD' => 'E02005685',
        '7AE' => 'E02005685',
        '7AF' => 'E02005685',
        '7AG' => 'E02005685',
        '7AH' => 'E02005685',
        '7AJ' => 'E02005685',
        '7AL' => 'E02005685',
        '7AN' => 'E02005685',
        '7AP' => 'E02005685',
        '7AQ' => 'E02005685',
        '7AR' => 'E02005685',
        '7AS' => 'E02005685',
        '7AT' => 'E02005685',
        '7AU' => 'E02005685',
        '7AW' => 'E02005685',
        '7AX' => 'E02005685',
        '7AY' => 'E02005685',
        '7AZ' => 'E02005685',
        '7BA' => 'E02005685',
        '7BB' => 'E02005685',
        '7BD' => 'E02005683',
        '7BE' => 'E02005685',
        '7BF' => 'E02005685',
        '7BG' => 'E02005685',
        '7BH' => 'E02005685',
        '7BJ' => 'E02005685',
        '7BL' => 'E02005685',
        '7BN' => 'E02005685',
        '7BP' => 'E02005685',
        '7BQ' => 'E02005685',
        '7BS' => 'E02005684',
        '7BT' => 'E02005685',
        '7BU' => 'E02005684',
        '7BW' => 'E02005685',
        '7BX' => 'E02005684',
        '7BY' => 'E02005684',
        '7BZ' => 'E02005684',
        '7DA' => 'E02005684',
        '7DB' => 'E02005685',
        '7DD' => 'E02005684',
        '7DE' => 'E02005684',
        '7DF' => 'E02005684',
        '7DG' => 'E02005684',
        '7DH' => 'E02005684',
        '7DJ' => 'E02005684',
        '7DL' => 'E02005684',
        '7DN' => 'E02005684',
        '7DP' => 'E02005685',
        '7DQ' => 'E02005684',
        '7DR' => 'E02005685',
        '7DS' => 'E02005685',
        '7DT' => 'E02005685',
        '7DU' => 'E02005685',
        '7DW' => 'E02005684',
        '7DX' => 'E02005684',
        '7DY' => 'E02005685',
        '7DZ' => 'E02005684',
        '7EA' => 'E02005685',
        '7EB' => 'E02005685',
        '7ED' => 'E02005685',
        '7EE' => 'E02005685',
        '7EF' => 'E02005685',
        '7EG' => 'E02005685',
        '7EH' => 'E02005685',
        '7EJ' => 'E02005685',
        '7EL' => 'E02005685',
        '7EN' => 'E02005685',
        '7EP' => 'E02005685',
        '7EQ' => 'E02005685',
        '7ER' => 'E02005685',
        '7ES' => 'E02005685',
        '7ET' => 'E02005684',
        '7EU' => 'E02005684',
        '7EW' => 'E02005685',
        '7EX' => 'E02005684',
        '7EY' => 'E02005685',
        '7EZ' => 'E02005685',
        '7FA' => 'E02005688',
        '7FB' => 'E02005688',
        '7FD' => 'E02005688',
        '7GA' => 'E02005685',
        '7GB' => 'E02005685',
        '7GH' => 'E02005688',
        '7HA' => 'E02005685',
        '7HB' => 'E02005685',
        '7HD' => 'E02005685',
        '7HE' => 'E02005685',
        '7HF' => 'E02005685',
        '7HG' => 'E02005685',
        '7HH' => 'E02005685',
        '7HJ' => 'E02005684',
        '7HL' => 'E02005684',
        '7HN' => 'E02005685',
        '7HP' => 'E02005684',
        '7HQ' => 'E02005685',
        '7HR' => 'E02005684',
        '7HS' => 'E02005684',
        '7HT' => 'E02005684',
        '7HU' => 'E02005684',
        '7HW' => 'E02005683',
        '7HX' => 'E02005684',
        '7HY' => 'E02005684',
        '7HZ' => 'E02005684',
        '7JA' => 'E02005685',
        '7JB' => 'E02005685',
        '7JD' => 'E02005685',
        '7JE' => 'E02005685',
        '7JF' => 'E02005684',
        '7JG' => 'E02005684',
        '7JH' => 'E02005685',
        '7JJ' => 'E02005685',
        '7JL' => 'E02005685',
        '7JN' => 'E02005684',
        '7JP' => 'E02005685',
        '7JQ' => 'E02005685',
        '7JR' => 'E02005685',
        '7JS' => 'E02005688',
        '7JT' => 'E02005684',
        '7JU' => 'E02005684',
        '7JW' => 'E02005685',
        '7JX' => 'E02005684',
        '7JY' => 'E02005684',
        '7JZ' => 'E02005684',
        '7LA' => 'E02005685',
        '7LB' => 'E02005685',
        '7LD' => 'E02005685',
        '7LE' => 'E02005685',
        '7LF' => 'E02005685',
        '7LG' => 'E02005685',
        '7LH' => 'E02005683',
        '7LJ' => 'E02005688',
        '7LL' => 'E02005683',
        '7LN' => 'E02005683',
        '7LP' => 'E02005683',
        '7LQ' => 'E02005685',
        '7LR' => 'E02005683',
        '7LS' => 'E02005685',
        '7LT' => 'E02005684',
        '7LU' => 'E02005684',
        '7LW' => 'E02005683',
        '7LX' => 'E02005685',
        '7LY' => 'E02005685',
        '7LZ' => 'E02005685',
        '7NA' => 'E02005685',
        '7NB' => 'E02005685',
        '7ND' => 'E02005685',
        '7NE' => 'E02005685',
        '7NF' => 'E02005685',
        '7NG' => 'E02005685',
        '7NH' => 'E02005685',
        '7NJ' => 'E02005685',
        '7NL' => 'E02005685',
        '7NN' => 'E02005685',
        '7NP' => 'E02005685',
        '7NQ' => 'E02005685',
        '7NR' => 'E02005685',
        '7NS' => 'E02005685',
        '7NT' => 'E02005685',
        '7NU' => 'E02005685',
        '7NW' => 'E02005685',
        '7NX' => 'E02005685',
        '7NY' => 'E02005685',
        '7NZ' => 'E02005685',
        '7PA' => 'E02005685',
        '7PB' => 'E02005685',
        '7PD' => 'E02005688',
        '7PE' => 'E02005688',
        '7PF' => 'E02005688',
        '7PG' => 'E02005688',
        '7PH' => 'E02005688',
        '7PJ' => 'E02005688',
        '7PL' => 'E02005688',
        '7PN' => 'E02005688',
        '7PP' => 'E02005688',
        '7PQ' => 'E02005688',
        '7PR' => 'E02005688',
        '7PS' => 'E02005688',
        '7PT' => 'E02005688',
        '7PU' => 'E02005688',
        '7PW' => 'E02005688',
        '7PX' => 'E02005688',
        '7PY' => 'E02005688',
        '7PZ' => 'E02005688',
        '7QA' => 'E02005688',
        '7QB' => 'E02005688',
        '7QD' => 'E02005688',
        '7QE' => 'E02005688',
        '7QF' => 'E02005688',
        '7QG' => 'E02005688',
        '7QH' => 'E02005688',
        '7QJ' => 'E02005688',
        '7QL' => 'E02005688',
        '7QN' => 'E02005688',
        '7QP' => 'E02005688',
        '7QQ' => 'E02005684',
        '7QR' => 'E02005688',
        '7QS' => 'E02005688',
        '7QT' => 'E02005688',
        '7QU' => 'E02005688',
        '7QW' => 'E02005688',
        '7QX' => 'E02005688',
        '7QY' => 'E02005684',
        '7QZ' => 'E02005684',
        '7RA' => 'E02005685',
        '7RB' => 'E02005685',
        '7RD' => 'E02005685',
        '7RE' => 'E02005685',
        '7RF' => 'E02005685',
        '7RG' => 'E02005685',
        '7RH' => 'E02005685',
        '7RJ' => 'E02005685',
        '7RL' => 'E02005685',
        '7RN' => 'E02005684',
        '7RP' => 'E02005685',
        '7RQ' => 'E02005684',
        '7RR' => 'E02005685',
        '7RS' => 'E02005685',
        '7RT' => 'E02005685',
        '7RU' => 'E02005685',
        '7RW' => 'E02005685',
        '7RX' => 'E02005685',
        '7RY' => 'E02005685',
        '7RZ' => 'E02005685',
        '7SA' => 'E02005685',
        '7SB' => 'E02005685',
        '7SD' => 'E02005685',
        '7SE' => 'E02005685',
        '7SF' => 'E02005685',
        '7SG' => 'E02005685',
        '7SH' => 'E02005685',
        '7SJ' => 'E02005685',
        '7SL' => 'E02005685',
        '7SN' => 'E02005685',
        '7SP' => 'E02005683',
        '7SQ' => 'E02005685',
        '7SR' => 'E02005683',
        '7SS' => 'E02005683',
        '7ST' => 'E02005685',
        '7SU' => 'E02005683',
        '7SW' => 'E02005685',
        '7SX' => 'E02005683',
        '7SY' => 'E02005685',
        '7SZ' => 'E02005685',
        '7TA' => 'E02005685',
        '7TB' => 'E02005685',
        '7TD' => 'E02005685',
        '7TE' => 'E02005685',
        '7TF' => 'E02005685',
        '7TG' => 'E02005685',
        '7TH' => 'E02005683',
        '7TJ' => 'E02005685',
        '7TL' => 'E02005683',
        '7TN' => 'E02005683',
        '7TP' => 'E02005683',
        '7TQ' => 'E02005685',
        '7TR' => 'E02005683',
        '7TS' => 'E02005683',
        '7TT' => 'E02005683',
        '7TU' => 'E02005683',
        '7TW' => 'E02005683',
        '7TX' => 'E02005683',
        '7TY' => 'E02005683',
        '7TZ' => 'E02005683',
        '7UA' => 'E02005683',
        '7UB' => 'E02005683',
        '7UD' => 'E02005683',
        '7UE' => 'E02005683',
        '7UF' => 'E02005683',
        '7UG' => 'E02005683',
        '7UH' => 'E02005683',
        '7UJ' => 'E02005683',
        '7UL' => 'E02005683',
        '7UN' => 'E02005683',
        '7UP' => 'E02005683',
        '7UQ' => 'E02005684',
        '7UR' => 'E02005685',
        '7US' => 'E02005684',
        '7UT' => 'E02005685',
        '7UU' => 'E02005684',
        '7UW' => 'E02005683',
        '7UX' => 'E02005685',
        '7UY' => 'E02005685',
        '7UZ' => 'E02005688',
        '7WA' => 'E02005688',
        '7WB' => 'E02005685',
        '7WD' => 'E02005685',
        '7WQ' => 'E02005688',
        '7WR' => 'E02005685',
        '7WS' => 'E02005685',
        '7WT' => 'E02005685',
        '7WU' => 'E02005685',
        '7WY' => 'E02005685',
        '7WZ' => 'E02005685',
        '7XA' => 'E02005684',
        '7XB' => 'E02005684',
        '7XD' => 'E02005684',
        '7XE' => 'E02005684',
        '7XF' => 'E02005685',
        '7XG' => 'E02005683',
        '7XH' => 'E02005685',
        '7XJ' => 'E02005688',
        '7XL' => 'E02005685',
        '7XN' => 'E02005685',
        '7XP' => 'E02005684',
        '7XQ' => 'E02005685',
        '7XR' => 'E02005683',
        '7XS' => 'E02005685',
        '7XT' => 'E02005685',
        '7XU' => 'E02005685',
        '7XW' => 'E02005685',
        '7XY' => 'E02005685',
        '7XZ' => 'E02005685',
        '7YA' => 'E02005685',
        '7YB' => 'E02005688',
        '7YD' => 'E02005685',
        '7YE' => 'E02005683',
        '7YF' => 'E02005684',
        '7YG' => 'E02005684',
        '7YH' => 'E02005684',
        '7YJ' => 'E02005685',
        '7YL' => 'E02005685',
        '7YR' => 'E02005685',
        '7YS' => 'E02005685',
        '7YT' => 'E02005685',
        '7YU' => 'E02005685',
        '7YW' => 'E02005685',
        '7YX' => 'E02005685',
        '7YY' => 'E02005685',
        '7YZ' => 'E02005685',
        '7ZA' => 'E02005685',
        '7ZB' => 'E02005685',
        '7ZD' => 'E02005685',
        '7ZF' => 'E02005685',
        '7ZG' => 'E02005685',
        '7ZJ' => 'E02005685',
        '7ZL' => 'E02005688',
        '7ZN' => 'E02005685',
        '7ZP' => 'E02005685',
        '7ZQ' => 'E02005685',
        '7ZR' => 'E02005683',
        '7ZS' => 'E02005685',
        '7ZT' => 'E02005685',
        '7ZU' => 'E02005685',
        '7ZW' => 'E02005685',
        '7ZX' => 'E02005685',
        '7ZY' => 'E02005685',
        '7ZZ' => 'E02005685',
        '8AA' => 'E02005684',
        '8AB' => 'E02005684',
        '8AD' => 'E02005684',
        '8AE' => 'E02005684',
        '8AF' => 'E02005684',
        '8AG' => 'E02005684',
        '8AH' => 'E02005684',
        '8AJ' => 'E02005684',
        '8AL' => 'E02005684',
        '8AN' => 'E02005684',
        '8AP' => 'E02005684',
        '8AQ' => 'E02005684',
        '8AR' => 'E02005684',
        '8AS' => 'E02005684',
        '8AT' => 'E02005684',
        '8AU' => 'E02005684',
        '8AW' => 'E02005684',
        '8AX' => 'E02005684',
        '8AY' => 'E02005684',
        '8AZ' => 'E02005684',
        '8BA' => 'E02005684',
        '8BB' => 'E02005684',
        '8BD' => 'E02005684',
        '8BE' => 'E02005684',
        '8BG' => 'E02005684',
        '8BH' => 'E02005684',
        '8BJ' => 'E02005684',
        '8BL' => 'E02005684',
        '8BN' => 'E02005684',
        '8BP' => 'E02005684',
        '8BQ' => 'E02005684',
        '8BS' => 'E02005684',
        '8BT' => 'E02005684',
        '8BU' => 'E02005684',
        '8BW' => 'E02005684',
        '8BX' => 'E02005684',
        '8BY' => 'E02005684',
        '8BZ' => 'E02005684',
        '8DA' => 'E02005684',
        '8DB' => 'E02005684',
        '8DD' => 'E02005684',
        '8DE' => 'E02005684',
        '8DF' => 'E02005684',
        '8DG' => 'E02005687',
        '8DH' => 'E02005687',
        '8DJ' => 'E02005684',
        '8DL' => 'E02005687',
        '8DN' => 'E02005687',
        '8DP' => 'E02005684',
        '8DQ' => 'E02005687',
        '8DR' => 'E02005684',
        '8DS' => 'E02005684',
        '8DT' => 'E02005684',
        '8DU' => 'E02005684',
        '8DW' => 'E02005687',
        '8DX' => 'E02005684',
        '8DY' => 'E02005684',
        '8DZ' => 'E02005684',
        '8EA' => 'E02005684',
        '8EB' => 'E02005684',
        '8ED' => 'E02005684',
        '8EE' => 'E02005684',
        '8EF' => 'E02005684',
        '8EG' => 'E02005684',
        '8EH' => 'E02005684',
        '8EJ' => 'E02005684',
        '8EL' => 'E02005684',
        '8EN' => 'E02005627',
        '8EP' => 'E02005684',
        '8EQ' => 'E02005684',
        '8ER' => 'E02005627',
        '8ES' => 'E02005687',
        '8ET' => 'E02005684',
        '8EU' => 'E02005684',
        '8EW' => 'E02005684',
        '8EX' => 'E02005684',
        '8EY' => 'E02005627',
        '8EZ' => 'E02005627',
        '8FA' => 'E02005684',
        '8FB' => 'E02005684',
        '8FD' => 'E02005684',
        '8FE' => 'E02005687',
        '8FF' => 'E02005684',
        '8FG' => 'E02005684',
        '8FH' => 'E02005684',
        '8FJ' => 'E02005684',
        '8FL' => 'E02005684',
        '8FN' => 'E02005687',
        '8FP' => 'E02005687',
        '8FQ' => 'E02005684',
        '8FR' => 'E02005684',
        '8FS' => 'E02005687',
        '8FT' => 'E02005684',
        '8FU' => 'E02003652',
        '8FW' => 'E02005687',
        '8FX' => 'E02005684',
        '8FY' => 'E02005684',
        '8FZ' => 'E02005670',
        '8GA' => 'E02005685',
        '8GB' => 'E02005684',
        '8GD' => 'E02005684',
        '8GE' => 'E02005685',
        '8GF' => 'E02005685',
        '8GG' => 'E02005685',
        '8GH' => 'E02005685',
        '8GJ' => 'E02005685',
        '8GL' => 'E02005685',
        '8GN' => 'E02005670',
        '8GP' => 'E02005685',
        '8GQ' => 'E02005684',
        '8GR' => 'E02003652',
        '8GS' => 'E02005687',
        '8GT' => 'E02005685',
        '8GU' => 'E02005670',
        '8GW' => 'E02005688',
        '8GX' => 'E02005687',
        '8GY' => 'E02005688',
        '8GZ' => 'E02003652',
        '8HA' => 'E02005627',
        '8HB' => 'E02005627',
        '8HD' => 'E02005627',
        '8HE' => 'E02005627',
        '8HF' => 'E02005684',
        '8HG' => 'E02005684',
        '8HH' => 'E02005684',
        '8HJ' => 'E02005684',
        '8HL' => 'E02005684',
        '8HN' => 'E02005684',
        '8HP' => 'E02005684',
        '8HQ' => 'E02005684',
        '8HR' => 'E02005684',
        '8HS' => 'E02005685',
        '8HT' => 'E02005684',
        '8HU' => 'E02005684',
        '8HW' => 'E02005684',
        '8HX' => 'E02005684',
        '8HY' => 'E02005684',
        '8HZ' => 'E02005684',
        '8JA' => 'E02005684',
        '8JB' => 'E02005684',
        '8JD' => 'E02005684',
        '8JE' => 'E02005684',
        '8JF' => 'E02005684',
        '8JG' => 'E02005684',
        '8JH' => 'E02005684',
        '8JJ' => 'E02005684',
        '8JL' => 'E02005684',
        '8JN' => 'E02005684',
        '8JP' => 'E02005684',
        '8JQ' => 'E02005684',
        '8JR' => 'E02005684',
        '8JS' => 'E02005684',
        '8JT' => 'E02005684',
        '8JU' => 'E02005684',
        '8JW' => 'E02005684',
        '8JX' => 'E02005684',
        '8JY' => 'E02005684',
        '8JZ' => 'E02005684',
        '8LA' => 'E02005684',
        '8LB' => 'E02005684',
        '8LD' => 'E02005684',
        '8LE' => 'E02005684',
        '8LF' => 'E02005684',
        '8LG' => 'E02005684',
        '8LH' => 'E02005684',
        '8LJ' => 'E02005684',
        '8LL' => 'E02005684',
        '8LN' => 'E02005684',
        '8LP' => 'E02005684',
        '8LQ' => 'E02005684',
        '8LR' => 'E02005684',
        '8LS' => 'E02005684',
        '8LT' => 'E02005684',
        '8LU' => 'E02005684',
        '8LW' => 'E02005684',
        '8LX' => 'E02005684',
        '8LY' => 'E02005684',
        '8LZ' => 'E02005684',
        '8NA' => 'E02005684',
        '8NB' => 'E02005684',
        '8ND' => 'E02005684',
        '8NE' => 'E02005684',
        '8NF' => 'E02005684',
        '8NG' => 'E02005684',
        '8NH' => 'E02005684',
        '8NJ' => 'E02005684',
        '8NL' => 'E02005684',
        '8NN' => 'E02005684',
        '8NP' => 'E02005684',
        '8NQ' => 'E02005684',
        '8NR' => 'E02005684',
        '8NS' => 'E02005684',
        '8NT' => 'E02005684',
        '8NU' => 'E02005684',
        '8NW' => 'E02005684',
        '8NX' => 'E02005684',
        '8NY' => 'E02005684',
        '8NZ' => 'E02005684',
        '8PA' => 'E02005684',
        '8PB' => 'E02005687',
        '8PD' => 'E02005687',
        '8PE' => 'E02005684',
        '8PF' => 'E02005684',
        '8PG' => 'E02005684',
        '8PH' => 'E02005687',
        '8PJ' => 'E02005687',
        '8PL' => 'E02005687',
        '8PN' => 'E02005687',
        '8PP' => 'E02005687',
        '8PQ' => 'E02005687',
        '8PR' => 'E02005687',
        '8PS' => 'E02005687',
        '8PT' => 'E02005687',
        '8PU' => 'E02005687',
        '8PW' => 'E02005687',
        '8PX' => 'E02005687',
        '8PY' => 'E02005687',
        '8PZ' => 'E02005684',
        '8QA' => 'E02005687',
        '8QB' => 'E02005687',
        '8QD' => 'E02005684',
        '8QE' => 'E02005684',
        '8QF' => 'E02005687',
        '8QG' => 'E02005684',
        '8QH' => 'E02005688',
        '8QJ' => 'E02005687',
        '8QL' => 'E02005687',
        '8QN' => 'E02005687',
        '8QP' => 'E02005687',
        '8QQ' => 'E02005684',
        '8QR' => 'E02005687',
        '8QS' => 'E02005687',
        '8QT' => 'E02005687',
        '8QU' => 'E02005687',
        '8QW' => 'E02005687',
        '8QX' => 'E02005687',
        '8QY' => 'E02005684',
        '8RA' => 'E02005684',
        '8RB' => 'E02005684',
        '8RD' => 'E02005684',
        '8RE' => 'E02005684',
        '8RF' => 'E02005684',
        '8RG' => 'E02005684',
        '8RH' => 'E02005684',
        '8RJ' => 'E02005684',
        '8RL' => 'E02005684',
        '8RN' => 'E02005684',
        '8RP' => 'E02005687',
        '8RQ' => 'E02005684',
        '8RR' => 'E02005687',
        '8RS' => 'E02005684',
        '8RT' => 'E02005684',
        '8RU' => 'E02005684',
        '8RW' => 'E02005684',
        '8RX' => 'E02005684',
        '8RY' => 'E02005684',
        '8RZ' => 'E02005684',
        '8SA' => 'E02005684',
        '8SB' => 'E02005684',
        '8SD' => 'E02005684',
        '8SE' => 'E02005684',
        '8SF' => 'E02005687',
        '8SG' => 'E02005687',
        '8SH' => 'E02005687',
        '8SJ' => 'E02005687',
        '8SL' => 'E02005687',
        '8SN' => 'E02005687',
        '8SP' => 'E02005687',
        '8SQ' => 'E02005687',
        '8SR' => 'E02005687',
        '8SS' => 'E02005687',
        '8ST' => 'E02005687',
        '8SU' => 'E02005687',
        '8SW' => 'E02005687',
        '8SX' => 'E02005687',
        '8SY' => 'E02005684',
        '8SZ' => 'E02005687',
        '8TA' => 'E02005685',
        '8TB' => 'E02005687',
        '8TD' => 'E02005688',
        '8TE' => 'E02005688',
        '8TF' => 'E02005688',
        '8TG' => 'E02005687',
        '8TH' => 'E02005687',
        '8TJ' => 'E02005687',
        '8TL' => 'E02005687',
        '8TN' => 'E02003652',
        '8TP' => 'E02005687',
        '8TQ' => 'E02005688',
        '8TR' => 'E02005688',
        '8TS' => 'E02005687',
        '8TT' => 'E02005687',
        '8TU' => 'E02005687',
        '8TW' => 'E02005687',
        '8TX' => 'E02005687',
        '8TZ' => 'E02005687',
        '8UA' => 'E02005687',
        '8UB' => 'E02005687',
        '8UD' => 'E02005687',
        '8UE' => 'E02005687',
        '8UF' => 'E02005687',
        '8UG' => 'E02005687',
        '8UH' => 'E02005687',
        '8UJ' => 'E02005687',
        '8UL' => 'E02005687',
        '8UN' => 'E02005687',
        '8UP' => 'E02005687',
        '8UQ' => 'E02005687',
        '8UR' => 'E02005687',
        '8US' => 'E02005687',
        '8UT' => 'E02005687',
        '8UU' => 'E02005687',
        '8UW' => 'E02005687',
        '8UX' => 'E02005687',
        '8UY' => 'E02005687',
        '8UZ' => 'E02005687',
        '8WA' => 'E02005685',
        '8WB' => 'E02005687',
        '8WD' => 'E02005687',
        '8WE' => 'E02005684',
        '8WF' => 'E02005687',
        '8WG' => 'E02005687',
        '8WH' => 'E02005687',
        '8WJ' => 'E02005687',
        '8WL' => 'E02005687',
        '8WN' => 'E02005687',
        '8WP' => 'E02005688',
        '8WQ' => 'E02005687',
        '8WR' => 'E02005687',
        '8WS' => 'E02005685',
        '8WT' => 'E02005687',
        '8WU' => 'E02005685',
        '8WY' => 'E02005670',
        '8WZ' => 'E02005687',
        '8XA' => 'E02005687',
        '8XB' => 'E02005687',
        '8XD' => 'E02005688',
        '8XE' => 'E02005688',
        '8XF' => 'E02005688',
        '8XG' => 'E02005688',
        '8XH' => 'E02005688',
        '8XJ' => 'E02005688',
        '8XL' => 'E02005688',
        '8XN' => 'E02005688',
        '8XP' => 'E02005688',
        '8XQ' => 'E02005688',
        '8XR' => 'E02005688',
        '8XS' => 'E02005688',
        '8XT' => 'E02005684',
        '8XU' => 'E02005688',
        '8XW' => 'E02005688',
        '8XX' => 'E02005688',
        '8XY' => 'E02005687',
        '8XZ' => 'E02005687',
        '8YA' => 'E02005685',
        '8YB' => 'E02005685',
        '8YD' => 'E02005685',
        '8YE' => 'E02005685',
        '8YF' => 'E02005684',
        '8YG' => 'E02005685',
        '8YH' => 'E02005685',
        '8YJ' => 'E02005685',
        '8YL' => 'E02005685',
        '8YN' => 'E02005685',
        '8YP' => 'E02005685',
        '8YQ' => 'E02005670',
        '8YR' => 'E02005670',
        '8YS' => 'E02005685',
        '8YT' => 'E02005685',
        '8YU' => 'E02005684',
        '8YW' => 'E02005670',
        '8YX' => 'E02005685',
        '8YY' => 'E02005685',
        '8YZ' => 'E02005685',
        '8ZA' => 'E02005685',
        '8ZB' => 'E02005684',
        '8ZD' => 'E02005684',
        '8ZE' => 'E02005684',
        '8ZF' => 'E02005684',
        '8ZG' => 'E02005685',
        '8ZH' => 'E02005684',
        '8ZJ' => 'E02005670',
        '8ZL' => 'E02005688',
        '8ZN' => 'E02005684',
        '8ZP' => 'E02005670',
        '8ZQ' => 'E02005684',
        '8ZR' => 'E02005685',
        '8ZS' => 'E02005685',
        '8ZT' => 'E02005685',
        '8ZU' => 'E02005684',
        '8ZW' => 'E02005670',
        '8ZX' => 'E02005685',
        '8ZY' => 'E02005685',
        '8ZZ' => 'E02005685',
        '9AA' => 'E02005685',
        '9AB' => 'E02005685',
        '9AD' => 'E02005685',
        '9AE' => 'E02005685',
        '9AF' => 'E02005685',
        '9AG' => 'E02005685',
        '9AH' => 'E02005685',
        '9AJ' => 'E02005685',
        '9AL' => 'E02005685',
        '9AN' => 'E02005685',
        '9AP' => 'E02005685',
        '9AQ' => 'E02005685',
        '9AR' => 'E02005685',
        '9AS' => 'E02005685',
        '9AT' => 'E02005685',
        '9AU' => 'E02005685',
        '9AW' => 'E02005685',
        '9AX' => 'E02005685',
        '9AY' => 'E02005685',
        '9AZ' => 'E02005685',
        '9BA' => 'E02005685',
        '9BB' => 'E02005685',
        '9BD' => 'E02005685',
        '9BE' => 'E02005685',
        '9BF' => 'E02005685',
        '9BG' => 'E02005685',
        '9BJ' => 'E02005685',
        '9BL' => 'E02005685',
        '9BN' => 'E02005685',
        '9BP' => 'E02005685',
        '9BR' => 'E02005685',
        '9BS' => 'E02005685',
        '9BT' => 'E02005685',
        '9BU' => 'E02005685',
        '9BW' => 'E02005685',
        '9BX' => 'E02005685',
        '9SA' => 'E02005684',
        '9SB' => 'E02005684',
        '9SD' => 'E02005684',
        '9SE' => 'E02005684',
        '9SF' => 'E02005684',
        '9SG' => 'E02005684',
        '9SH' => 'E02005684',
        '9SJ' => 'E02005684',
        '9SL' => 'E02005684',
        '9SN' => 'E02005684',
        '9SP' => 'E02005684',
        '9SQ' => 'E02005684',
        '9SR' => 'E02005684',
        '9SS' => 'E02005684',
        '9ST' => 'E02005684',
        '9SU' => 'E02005684',
        '9SW' => 'E02005684',
        '9SX' => 'E02005684',
        '9SY' => 'E02005684',
        '9SZ' => 'E02005684',
        '9TA' => 'E02005684',
        '9TB' => 'E02005684',
        '9TD' => 'E02005684',
        '9TE' => 'E02005684',
        '9TF' => 'E02005684',
        '9TG' => 'E02005684',
        '9TH' => 'E02005684',
        '9TJ' => 'E02005684',
        '9TL' => 'E02005684',
        '9TN' => 'E02005685',
        '9TP' => 'E02005684',
        '9TQ' => 'E02005684',
        '9TR' => 'E02005684',
        '9ZZ' => 'E02005685',
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