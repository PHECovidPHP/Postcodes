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
final class TR3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02003911',
        '6AB' => 'E02003911',
        '6AD' => 'E02003911',
        '6AE' => 'E02003911',
        '6AF' => 'E02003911',
        '6AG' => 'E02003911',
        '6AH' => 'E02003911',
        '6AJ' => 'E02003911',
        '6AL' => 'E02003911',
        '6AN' => 'E02003911',
        '6AP' => 'E02003911',
        '6AQ' => 'E02003911',
        '6AR' => 'E02003911',
        '6AS' => 'E02003911',
        '6AT' => 'E02003911',
        '6AU' => 'E02003911',
        '6AW' => 'E02003911',
        '6AX' => 'E02003911',
        '6AY' => 'E02003911',
        '6AZ' => 'E02003909',
        '6BA' => 'E02003909',
        '6BB' => 'E02003909',
        '6BD' => 'E02003909',
        '6BE' => 'E02003909',
        '6BG' => 'E02003909',
        '6BH' => 'E02003909',
        '6BJ' => 'E02003909',
        '6BL' => 'E02003909',
        '6BN' => 'E02003909',
        '6BP' => 'E02003909',
        '6BQ' => 'E02003909',
        '6BS' => 'E02003909',
        '6BT' => 'E02003909',
        '6BU' => 'E02003909',
        '6BW' => 'E02003909',
        '6BX' => 'E02003909',
        '6BY' => 'E02003909',
        '6BZ' => 'E02003909',
        '6DA' => 'E02003909',
        '6DB' => 'E02003909',
        '6DD' => 'E02003909',
        '6DE' => 'E02003909',
        '6DF' => 'E02003909',
        '6DG' => 'E02003909',
        '6DH' => 'E02003909',
        '6DJ' => 'E02003909',
        '6DL' => 'E02003909',
        '6DN' => 'E02003909',
        '6DP' => 'E02003909',
        '6DQ' => 'E02003909',
        '6DR' => 'E02003909',
        '6DS' => 'E02003909',
        '6DT' => 'E02003909',
        '6DU' => 'E02003909',
        '6DW' => 'E02003909',
        '6DX' => 'E02003909',
        '6DY' => 'E02003909',
        '6DZ' => 'E02003909',
        '6EA' => 'E02003911',
        '6EB' => 'E02003911',
        '6ED' => 'E02003911',
        '6EE' => 'E02003911',
        '6EF' => 'E02003911',
        '6EG' => 'E02003911',
        '6EH' => 'E02003911',
        '6EJ' => 'E02003911',
        '6EL' => 'E02003909',
        '6EN' => 'E02003909',
        '6EP' => 'E02003911',
        '6EQ' => 'E02003911',
        '6ER' => 'E02003911',
        '6ES' => 'E02003911',
        '6ET' => 'E02003911',
        '6EU' => 'E02003911',
        '6EW' => 'E02003911',
        '6EX' => 'E02003911',
        '6EY' => 'E02003911',
        '6EZ' => 'E02003911',
        '6FA' => 'E02003910',
        '6FB' => 'E02003910',
        '6FD' => 'E02003909',
        '6FE' => 'E02003909',
        '6FF' => 'E02003909',
        '6FG' => 'E02003909',
        '6FH' => 'E02003909',
        '6FJ' => 'E02003909',
        '6FL' => 'E02003909',
        '6FN' => 'E02003911',
        '6FP' => 'E02003911',
        '6FQ' => 'E02003911',
        '6FR' => 'E02003911',
        '6FS' => 'E02003909',
        '6FT' => 'E02003909',
        '6FU' => 'E02003909',
        '6FW' => 'E02003909',
        '6FY' => 'E02003909',
        '6GA' => 'E02003911',
        '6GB' => 'E02003911',
        '6GD' => 'E02003909',
        '6GE' => 'E02003911',
        '6GF' => 'E02003911',
        '6GG' => 'E02003911',
        '6GH' => 'E02003911',
        '6GJ' => 'E02003909',
        '6GL' => 'E02003911',
        '6GN' => 'E02003911',
        '6GP' => 'E02003909',
        '6GR' => 'E02003911',
        '6GU' => 'E02003909',
        '6HA' => 'E02003911',
        '6HB' => 'E02003911',
        '6HD' => 'E02003911',
        '6HE' => 'E02003911',
        '6HF' => 'E02003911',
        '6HG' => 'E02003911',
        '6HH' => 'E02003911',
        '6HJ' => 'E02003911',
        '6HL' => 'E02003911',
        '6HN' => 'E02003911',
        '6HP' => 'E02003911',
        '6HQ' => 'E02003911',
        '6HR' => 'E02003911',
        '6HS' => 'E02003911',
        '6HT' => 'E02003911',
        '6HU' => 'E02003911',
        '6HW' => 'E02003911',
        '6HX' => 'E02003911',
        '6HY' => 'E02003911',
        '6HZ' => 'E02003911',
        '6JA' => 'E02003911',
        '6JB' => 'E02003911',
        '6JD' => 'E02003911',
        '6JE' => 'E02003911',
        '6JF' => 'E02003911',
        '6JG' => 'E02003911',
        '6JH' => 'E02003911',
        '6JJ' => 'E02003911',
        '6JL' => 'E02003911',
        '6JN' => 'E02003911',
        '6JP' => 'E02003911',
        '6JQ' => 'E02003911',
        '6JR' => 'E02003911',
        '6JS' => 'E02003911',
        '6JT' => 'E02003911',
        '6JU' => 'E02003911',
        '6JW' => 'E02003911',
        '6JX' => 'E02003911',
        '6JY' => 'E02003911',
        '6JZ' => 'E02003911',
        '6LA' => 'E02003911',
        '6LB' => 'E02003911',
        '6LD' => 'E02003911',
        '6LE' => 'E02003911',
        '6LF' => 'E02003911',
        '6LG' => 'E02003911',
        '6LH' => 'E02003911',
        '6LJ' => 'E02003911',
        '6LL' => 'E02003911',
        '6LN' => 'E02003911',
        '6LP' => 'E02003911',
        '6LQ' => 'E02003911',
        '6LR' => 'E02003911',
        '6LS' => 'E02003911',
        '6LT' => 'E02003909',
        '6LU' => 'E02003911',
        '6LW' => 'E02003911',
        '6LX' => 'E02003911',
        '6LY' => 'E02003911',
        '6LZ' => 'E02003911',
        '6NA' => 'E02003911',
        '6NB' => 'E02003911',
        '6ND' => 'E02003911',
        '6NE' => 'E02003911',
        '6NF' => 'E02003911',
        '6NG' => 'E02003911',
        '6NH' => 'E02003911',
        '6NJ' => 'E02003911',
        '6NL' => 'E02003911',
        '6NN' => 'E02003911',
        '6NP' => 'E02003911',
        '6NQ' => 'E02003911',
        '6NR' => 'E02003911',
        '6NS' => 'E02003911',
        '6NT' => 'E02003911',
        '6NU' => 'E02003911',
        '6NW' => 'E02003911',
        '6NX' => 'E02003911',
        '6NY' => 'E02003911',
        '6NZ' => 'E02003911',
        '6PA' => 'E02003911',
        '6PB' => 'E02003911',
        '6PD' => 'E02003911',
        '6PE' => 'E02003911',
        '6PF' => 'E02003911',
        '6PG' => 'E02003911',
        '6PH' => 'E02003911',
        '6PJ' => 'E02003911',
        '6PL' => 'E02003911',
        '6PN' => 'E02003911',
        '6PP' => 'E02003911',
        '6PQ' => 'E02003911',
        '6PR' => 'E02003911',
        '6PS' => 'E02003911',
        '6PT' => 'E02003911',
        '6PU' => 'E02003911',
        '6PW' => 'E02003911',
        '6PX' => 'E02003911',
        '6PY' => 'E02003911',
        '6PZ' => 'E02003911',
        '6QA' => 'E02003911',
        '6QB' => 'E02003911',
        '6QD' => 'E02003911',
        '6QE' => 'E02003911',
        '6QG' => 'E02003911',
        '6QH' => 'E02003911',
        '6QJ' => 'E02003911',
        '6QL' => 'E02003911',
        '6QN' => 'E02003911',
        '6QP' => 'E02003911',
        '6QQ' => 'E02003911',
        '6QR' => 'E02003911',
        '6QS' => 'E02003911',
        '6QU' => 'E02003911',
        '6QW' => 'E02003911',
        '6QX' => 'E02003911',
        '6QY' => 'E02003911',
        '6QZ' => 'E02003911',
        '6RA' => 'E02003911',
        '6RB' => 'E02003911',
        '6RD' => 'E02003911',
        '6RE' => 'E02003911',
        '6RF' => 'E02003911',
        '6RG' => 'E02003911',
        '6RH' => 'E02003911',
        '6RJ' => 'E02003911',
        '6RL' => 'E02003911',
        '6RN' => 'E02003911',
        '6RP' => 'E02003911',
        '6RQ' => 'E02003911',
        '6RR' => 'E02003911',
        '6RS' => 'E02003911',
        '6RT' => 'E02003911',
        '6RU' => 'E02003911',
        '6RW' => 'E02003911',
        '6RX' => 'E02003911',
        '6SA' => 'E02003911',
        '6SB' => 'E02003911',
        '6SD' => 'E02003911',
        '6SE' => 'E02003911',
        '6SF' => 'E02003911',
        '6SG' => 'E02003911',
        '6SH' => 'E02003911',
        '6SP' => 'E02003909',
        '6SQ' => 'E02003911',
        '6SR' => 'E02003909',
        '6SS' => 'E02003909',
        '6TA' => 'E02003909',
        '6TP' => 'E02003909',
        '6TR' => 'E02003909',
        '6TS' => 'E02003909',
        '6TT' => 'E02003909',
        '6TU' => 'E02003909',
        '6TX' => 'E02003909',
        '6TY' => 'E02003909',
        '6TZ' => 'E02003909',
        '6UA' => 'E02003909',
        '6UB' => 'E02003909',
        '6WD' => 'E02003910',
        '6WE' => 'E02003909',
        '6WW' => 'E02003910',
        '6WX' => 'E02003910',
        '6WY' => 'E02003910',
        '6WZ' => 'E02003910',
        '6XA' => 'E02003909',
        '6XB' => 'E02003911',
        '6XD' => 'E02003911',
        '6XE' => 'E02003909',
        '6XF' => 'E02003910',
        '6XG' => 'E02003910',
        '6XP' => 'E02003910',
        '6XY' => 'E02003911',
        '6XZ' => 'E02003911',
        '6YA' => 'E02003911',
        '6YB' => 'E02003910',
        '6YD' => 'E02003910',
        '6YE' => 'E02003909',
        '6YF' => 'E02003911',
        '6YG' => 'E02003911',
        '6YH' => 'E02003911',
        '6YJ' => 'E02003911',
        '6YL' => 'E02003910',
        '6YN' => 'E02003911',
        '6YP' => 'E02003910',
        '6YQ' => 'E02003911',
        '6YR' => 'E02003911',
        '6YS' => 'E02003911',
        '6YT' => 'E02003911',
        '6YU' => 'E02003911',
        '6YW' => 'E02003911',
        '6YX' => 'E02003910',
        '6YY' => 'E02003909',
        '6YZ' => 'E02003911',
        '6ZA' => 'E02003911',
        '6ZB' => 'E02003910',
        '6ZD' => 'E02003911',
        '6ZE' => 'E02003911',
        '6ZF' => 'E02003910',
        '6ZJ' => 'E02003910',
        '6ZN' => 'E02003910',
        '6ZQ' => 'E02003910',
        '6ZR' => 'E02003910',
        '6ZW' => 'E02003910',
        '6ZX' => 'E02003910',
        '7AA' => 'E02003926',
        '7AB' => 'E02003926',
        '7AD' => 'E02003926',
        '7AE' => 'E02003926',
        '7AF' => 'E02003926',
        '7AG' => 'E02003926',
        '7AH' => 'E02003926',
        '7AJ' => 'E02003926',
        '7AL' => 'E02003926',
        '7AN' => 'E02003926',
        '7AP' => 'E02003926',
        '7AQ' => 'E02003926',
        '7AR' => 'E02003926',
        '7AS' => 'E02003926',
        '7AT' => 'E02003926',
        '7AU' => 'E02003913',
        '7AW' => 'E02003926',
        '7AX' => 'E02003926',
        '7AY' => 'E02003926',
        '7AZ' => 'E02003927',
        '7BA' => 'E02003926',
        '7BB' => 'E02003926',
        '7BD' => 'E02003926',
        '7BE' => 'E02003926',
        '7BG' => 'E02003926',
        '7BH' => 'E02003926',
        '7BJ' => 'E02003926',
        '7BL' => 'E02003926',
        '7BN' => 'E02003926',
        '7BP' => 'E02003926',
        '7BQ' => 'E02003926',
        '7BR' => 'E02003926',
        '7BS' => 'E02003926',
        '7BT' => 'E02003926',
        '7BU' => 'E02003926',
        '7BW' => 'E02003926',
        '7BX' => 'E02003926',
        '7BY' => 'E02003926',
        '7BZ' => 'E02003926',
        '7DA' => 'E02003926',
        '7DB' => 'E02003926',
        '7DD' => 'E02003926',
        '7DE' => 'E02003926',
        '7DF' => 'E02003926',
        '7DG' => 'E02003926',
        '7DH' => 'E02003926',
        '7DJ' => 'E02003926',
        '7DL' => 'E02003926',
        '7DN' => 'E02003926',
        '7DP' => 'E02003926',
        '7DQ' => 'E02003926',
        '7DR' => 'E02003926',
        '7DS' => 'E02003913',
        '7DT' => 'E02003926',
        '7DU' => 'E02003926',
        '7DW' => 'E02003926',
        '7DX' => 'E02003926',
        '7DY' => 'E02003926',
        '7DZ' => 'E02003926',
        '7EA' => 'E02003927',
        '7EB' => 'E02003927',
        '7ED' => 'E02003927',
        '7EE' => 'E02003927',
        '7EF' => 'E02003927',
        '7EG' => 'E02003927',
        '7EH' => 'E02003927',
        '7EJ' => 'E02003927',
        '7EL' => 'E02003927',
        '7EN' => 'E02003927',
        '7EP' => 'E02003927',
        '7EQ' => 'E02003927',
        '7ER' => 'E02003927',
        '7ES' => 'E02003927',
        '7ET' => 'E02003927',
        '7EU' => 'E02003927',
        '7EW' => 'E02003927',
        '7EX' => 'E02003927',
        '7EY' => 'E02003927',
        '7EZ' => 'E02003927',
        '7FA' => 'E02003913',
        '7FB' => 'E02003927',
        '7FD' => 'E02003926',
        '7FE' => 'E02003926',
        '7FF' => 'E02003913',
        '7FG' => 'E02003926',
        '7FH' => 'E02003927',
        '7FJ' => 'E02003926',
        '7FL' => 'E02003926',
        '7FN' => 'E02003913',
        '7FP' => 'E02003913',
        '7FR' => 'E02003913',
        '7GA' => 'E02003913',
        '7GD' => 'E02003926',
        '7HA' => 'E02003927',
        '7HB' => 'E02003927',
        '7HD' => 'E02003927',
        '7HE' => 'E02003927',
        '7HF' => 'E02003927',
        '7HG' => 'E02003927',
        '7HH' => 'E02003927',
        '7HJ' => 'E02003927',
        '7HL' => 'E02003926',
        '7HN' => 'E02003926',
        '7HP' => 'E02003927',
        '7HQ' => 'E02003927',
        '7HR' => 'E02003927',
        '7HS' => 'E02003927',
        '7HT' => 'E02003927',
        '7HU' => 'E02003927',
        '7HW' => 'E02003926',
        '7HX' => 'E02003927',
        '7HY' => 'E02003927',
        '7HZ' => 'E02003927',
        '7JA' => 'E02003913',
        '7JB' => 'E02003913',
        '7JD' => 'E02003926',
        '7JE' => 'E02003913',
        '7JF' => 'E02003913',
        '7JG' => 'E02003926',
        '7JH' => 'E02003913',
        '7JJ' => 'E02003913',
        '7JL' => 'E02003913',
        '7JN' => 'E02003913',
        '7JP' => 'E02003913',
        '7JQ' => 'E02003913',
        '7JR' => 'E02003913',
        '7JS' => 'E02003913',
        '7JT' => 'E02003913',
        '7JU' => 'E02003913',
        '7JW' => 'E02003927',
        '7JX' => 'E02003913',
        '7JY' => 'E02003913',
        '7JZ' => 'E02003913',
        '7LA' => 'E02003913',
        '7LB' => 'E02003913',
        '7LD' => 'E02003913',
        '7LE' => 'E02003913',
        '7LF' => 'E02003913',
        '7LG' => 'E02003913',
        '7LH' => 'E02003913',
        '7LJ' => 'E02003913',
        '7LL' => 'E02003913',
        '7LN' => 'E02003913',
        '7LP' => 'E02003913',
        '7LQ' => 'E02003913',
        '7LR' => 'E02003913',
        '7LS' => 'E02003913',
        '7LT' => 'E02003913',
        '7LU' => 'E02003913',
        '7LW' => 'E02003913',
        '7LX' => 'E02003913',
        '7LY' => 'E02003913',
        '7LZ' => 'E02003913',
        '7NA' => 'E02003913',
        '7NB' => 'E02003913',
        '7ND' => 'E02003913',
        '7NE' => 'E02003913',
        '7NF' => 'E02003913',
        '7NG' => 'E02003913',
        '7NH' => 'E02003913',
        '7NJ' => 'E02003913',
        '7NL' => 'E02003913',
        '7NN' => 'E02003913',
        '7NP' => 'E02003913',
        '7NQ' => 'E02003913',
        '7NR' => 'E02003913',
        '7NS' => 'E02003913',
        '7NT' => 'E02003913',
        '7NU' => 'E02003913',
        '7NW' => 'E02003913',
        '7NX' => 'E02003913',
        '7NY' => 'E02003913',
        '7NZ' => 'E02003913',
        '7PA' => 'E02003913',
        '7PB' => 'E02003913',
        '7PD' => 'E02003913',
        '7PE' => 'E02003927',
        '7PF' => 'E02003913',
        '7PG' => 'E02003913',
        '7PH' => 'E02003913',
        '7PJ' => 'E02003913',
        '7PL' => 'E02003913',
        '7PN' => 'E02003913',
        '7PP' => 'E02003913',
        '7PQ' => 'E02003913',
        '7PR' => 'E02003913',
        '7PS' => 'E02003913',
        '7PT' => 'E02003913',
        '7PU' => 'E02003913',
        '7PW' => 'E02003913',
        '7PX' => 'E02003913',
        '7PY' => 'E02003913',
        '7PZ' => 'E02003913',
        '7QA' => 'E02003913',
        '7QB' => 'E02003913',
        '7QD' => 'E02003913',
        '7QE' => 'E02003913',
        '7QF' => 'E02003913',
        '7QG' => 'E02003913',
        '7QH' => 'E02003913',
        '7QJ' => 'E02003913',
        '7QL' => 'E02003913',
        '7QN' => 'E02003913',
        '7QP' => 'E02003913',
        '7QQ' => 'E02003913',
        '7QR' => 'E02003927',
        '7QS' => 'E02003927',
        '7QT' => 'E02003927',
        '7QU' => 'E02003913',
        '7QW' => 'E02003913',
        '7QX' => 'E02003913',
        '7QY' => 'E02003913',
        '7QZ' => 'E02003913',
        '7RA' => 'E02003927',
        '7RB' => 'E02003926',
        '7RD' => 'E02003926',
        '7RE' => 'E02003926',
        '7RF' => 'E02003913',
        '7RG' => 'E02003913',
        '7RH' => 'E02003913',
        '7RJ' => 'E02003927',
        '7RL' => 'E02003926',
        '7RN' => 'E02003926',
        '7RP' => 'E02003913',
        '7RQ' => 'E02003927',
        '7RR' => 'E02003927',
        '7RS' => 'E02003927',
        '7RT' => 'E02003913',
        '7RW' => 'E02003913',
        '7RX' => 'E02003913',
        '7WD' => 'E02003910',
        '7WE' => 'E02003913',
        '7WW' => 'E02003927',
        '7WX' => 'E02003910',
        '7WY' => 'E02003910',
        '7WZ' => 'E02003910',
        '7XZ' => 'E02003910',
        '7YB' => 'E02003927',
        '7YD' => 'E02003910',
        '7YE' => 'E02003910',
        '7YF' => 'E02003910',
        '7YG' => 'E02003927',
        '7YH' => 'E02003927',
        '7YJ' => 'E02003927',
        '7YL' => 'E02003910',
        '7YN' => 'E02003927',
        '7YP' => 'E02003927',
        '7YQ' => 'E02003927',
        '7YR' => 'E02003910',
        '7YS' => 'E02003927',
        '7YT' => 'E02003910',
        '7YU' => 'E02003913',
        '7YW' => 'E02003910',
        '7YX' => 'E02003927',
        '7YY' => 'E02003927',
        '7ZQ' => 'E02003910',
        '7ZR' => 'E02003910',
        '7ZX' => 'E02003910',
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
