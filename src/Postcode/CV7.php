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
final class CV7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02002105',
        '7AB' => 'E02002105',
        '7AD' => 'E02002097',
        '7AE' => 'E02002097',
        '7AF' => 'E02002097',
        '7AG' => 'E02002097',
        '7AH' => 'E02002105',
        '7AJ' => 'E02002105',
        '7AL' => 'E02002097',
        '7AN' => 'E02002105',
        '7AP' => 'E02002105',
        '7AQ' => 'E02002105',
        '7AR' => 'E02002097',
        '7AS' => 'E02002097',
        '7AT' => 'E02002097',
        '7AU' => 'E02002105',
        '7AW' => 'E02002097',
        '7AX' => 'E02002105',
        '7AY' => 'E02002097',
        '7AZ' => 'E02002097',
        '7BA' => 'E02002097',
        '7BB' => 'E02002105',
        '7BD' => 'E02002105',
        '7BE' => 'E02002097',
        '7BF' => 'E02002105',
        '7BG' => 'E02002105',
        '7BH' => 'E02002105',
        '7BJ' => 'E02002097',
        '7BL' => 'E02002105',
        '7BN' => 'E02002105',
        '7BP' => 'E02002105',
        '7BQ' => 'E02002105',
        '7BS' => 'E02002105',
        '7BT' => 'E02002097',
        '7BU' => 'E02002097',
        '7BW' => 'E02002105',
        '7BX' => 'E02002105',
        '7BY' => 'E02002105',
        '7BZ' => 'E02002105',
        '7DA' => 'E02002105',
        '7DB' => 'E02002105',
        '7DD' => 'E02002105',
        '7DE' => 'E02002105',
        '7DF' => 'E02002105',
        '7DG' => 'E02002105',
        '7DH' => 'E02002105',
        '7DJ' => 'E02002105',
        '7DL' => 'E02002105',
        '7DN' => 'E02002105',
        '7DP' => 'E02002105',
        '7DQ' => 'E02002105',
        '7DR' => 'E02002105',
        '7DS' => 'E02002105',
        '7DT' => 'E02002105',
        '7DU' => 'E02002105',
        '7DW' => 'E02002105',
        '7DX' => 'E02002105',
        '7DY' => 'E02002105',
        '7DZ' => 'E02002105',
        '7EA' => 'E02002105',
        '7EB' => 'E02002097',
        '7ED' => 'E02002105',
        '7EE' => 'E02002105',
        '7EF' => 'E02002105',
        '7EG' => 'E02002105',
        '7EH' => 'E02002105',
        '7EJ' => 'E02002105',
        '7EL' => 'E02002105',
        '7EN' => 'E02002105',
        '7EP' => 'E02002105',
        '7EQ' => 'E02002105',
        '7ER' => 'E02002105',
        '7ES' => 'E02002105',
        '7ET' => 'E02002105',
        '7EU' => 'E02002105',
        '7EW' => 'E02002105',
        '7EX' => 'E02002105',
        '7EY' => 'E02002105',
        '7EZ' => 'E02002105',
        '7FA' => 'E02002105',
        '7FB' => 'E02002105',
        '7FD' => 'E02002105',
        '7FE' => 'E02002105',
        '7FF' => 'E02002105',
        '7FG' => 'E02002105',
        '7FH' => 'E02002105',
        '7FJ' => 'E02002105',
        '7FL' => 'E02002105',
        '7FN' => 'E02002105',
        '7FP' => 'E02002105',
        '7FQ' => 'E02002105',
        '7FR' => 'E02002105',
        '7FS' => 'E02002105',
        '7FT' => 'E02002105',
        '7FU' => 'E02002105',
        '7FW' => 'E02002105',
        '7FX' => 'E02002105',
        '7FY' => 'E02002105',
        '7FZ' => 'E02002105',
        '7GA' => 'E02002105',
        '7GB' => 'E02002105',
        '7GD' => 'E02002105',
        '7GE' => 'E02002105',
        '7GF' => 'E02002105',
        '7GG' => 'E02002105',
        '7GH' => 'E02002105',
        '7GJ' => 'E02002105',
        '7GL' => 'E02002105',
        '7GN' => 'E02002105',
        '7GP' => 'E02002105',
        '7GQ' => 'E02002105',
        '7GR' => 'E02002105',
        '7GS' => 'E02002105',
        '7GT' => 'E02002105',
        '7GU' => 'E02002105',
        '7GW' => 'E02002105',
        '7GX' => 'E02002105',
        '7GY' => 'E02002105',
        '7GZ' => 'E02002105',
        '7HA' => 'E02002097',
        '7HB' => 'E02002105',
        '7HD' => 'E02002105',
        '7HE' => 'E02006474',
        '7HF' => 'E02006474',
        '7HG' => 'E02006474',
        '7HH' => 'E02006474',
        '7HJ' => 'E02006474',
        '7HL' => 'E02002089',
        '7HN' => 'E02006474',
        '7HP' => 'E02002097',
        '7HQ' => 'E02002097',
        '7HR' => 'E02006474',
        '7HS' => 'E02006474',
        '7HT' => 'E02002097',
        '7HU' => 'E02002097',
        '7HW' => 'E02002097',
        '7HX' => 'E02002097',
        '7HY' => 'E02002097',
        '7HZ' => 'E02002097',
        '7JA' => 'E02002097',
        '7JB' => 'E02002105',
        '7JD' => 'E02002105',
        '7JE' => 'E02006474',
        '7JF' => 'E02002105',
        '7JG' => 'E02002097',
        '7JJ' => 'E02002097',
        '7JL' => 'E02002097',
        '7JN' => 'E02002097',
        '7JP' => 'E02002097',
        '7JQ' => 'E02002097',
        '7JR' => 'E02002097',
        '7JS' => 'E02002097',
        '7JT' => 'E02006474',
        '7JU' => 'E02006474',
        '7JW' => 'E02006474',
        '7JX' => 'E02002097',
        '7JY' => 'E02002097',
        '7JZ' => 'E02002097',
        '7LA' => 'E02002097',
        '7LB' => 'E02002097',
        '7LD' => 'E02002097',
        '7LE' => 'E02002097',
        '7LF' => 'E02002105',
        '7LG' => 'E02002105',
        '7LH' => 'E02002105',
        '7LJ' => 'E02002097',
        '7LL' => 'E02002097',
        '7LN' => 'E02002097',
        '7LP' => 'E02002097',
        '7LQ' => 'E02002097',
        '7LR' => 'E02002097',
        '7LS' => 'E02002097',
        '7LT' => 'E02002097',
        '7LU' => 'E02002097',
        '7LW' => 'E02002097',
        '7LX' => 'E02002097',
        '7LY' => 'E02002097',
        '7LZ' => 'E02002097',
        '7NA' => 'E02002097',
        '7NB' => 'E02002097',
        '7ND' => 'E02002097',
        '7NE' => 'E02002097',
        '7NF' => 'E02002097',
        '7NG' => 'E02002097',
        '7NH' => 'E02002097',
        '7NJ' => 'E02002097',
        '7NL' => 'E02002097',
        '7NN' => 'E02002097',
        '7NP' => 'E02002097',
        '7NQ' => 'E02002097',
        '7NR' => 'E02002097',
        '7NS' => 'E02002097',
        '7NT' => 'E02002097',
        '7NU' => 'E02002097',
        '7NW' => 'E02002097',
        '7NX' => 'E02002105',
        '7NY' => 'E02002105',
        '7NZ' => 'E02002105',
        '7PA' => 'E02002105',
        '7PB' => 'E02002097',
        '7PD' => 'E02006474',
        '7PE' => 'E02002097',
        '7PF' => 'E02002097',
        '7PG' => 'E02002105',
        '7PH' => 'E02002105',
        '7PJ' => 'E02002105',
        '7PL' => 'E02006474',
        '7PN' => 'E02002105',
        '7PP' => 'E02002105',
        '7PQ' => 'E02002105',
        '7PR' => 'E02002105',
        '7PS' => 'E02002105',
        '7PT' => 'E02002097',
        '7PU' => 'E02002105',
        '7PW' => 'E02002097',
        '7PX' => 'E02002105',
        '7PY' => 'E02002105',
        '7PZ' => 'E02002105',
        '7QA' => 'E02002105',
        '7QB' => 'E02002105',
        '7QD' => 'E02002105',
        '7QE' => 'E02002105',
        '7QF' => 'E02002105',
        '7QG' => 'E02002105',
        '7QH' => 'E02002105',
        '7QJ' => 'E02002105',
        '7QL' => 'E02002105',
        '7QN' => 'E02002105',
        '7QP' => 'E02002105',
        '7QQ' => 'E02002097',
        '7QR' => 'E02002105',
        '7QS' => 'E02002105',
        '7QT' => 'E02002105',
        '7QU' => 'E02002105',
        '7QW' => 'E02002105',
        '7QX' => 'E02002105',
        '7QY' => 'E02002105',
        '7QZ' => 'E02002105',
        '7RA' => 'E02002105',
        '7RB' => 'E02002105',
        '7RD' => 'E02002105',
        '7RE' => 'E02002105',
        '7RF' => 'E02002105',
        '7RG' => 'E02002105',
        '7RH' => 'E02002105',
        '7RJ' => 'E02002105',
        '7RL' => 'E02002105',
        '7RN' => 'E02002105',
        '7RP' => 'E02002105',
        '7RQ' => 'E02002105',
        '7RR' => 'E02002105',
        '7RS' => 'E02002105',
        '7RT' => 'E02002105',
        '7RU' => 'E02002097',
        '7RW' => 'E02002105',
        '7RX' => 'E02002105',
        '7RY' => 'E02002105',
        '7RZ' => 'E02002105',
        '7SA' => 'E02002097',
        '7SB' => 'E02002097',
        '7SD' => 'E02002105',
        '7SE' => 'E02002105',
        '7SF' => 'E02002105',
        '7SG' => 'E02002097',
        '7SH' => 'E02002105',
        '7SJ' => 'E02002097',
        '7SL' => 'E02002105',
        '7SN' => 'E02002097',
        '7SP' => 'E02002097',
        '7SQ' => 'E02002097',
        '7SR' => 'E02002105',
        '7SS' => 'E02002097',
        '7ST' => 'E02002097',
        '7SZ' => 'E02002105',
        '7TA' => 'E02002105',
        '7TB' => 'E02002105',
        '7TD' => 'E02001988',
        '7TE' => 'E02002105',
        '7TF' => 'E02002097',
        '7TG' => 'E02002105',
        '7TH' => 'E02002105',
        '7TL' => 'E02002089',
        '7UA' => 'E02002097',
        '7UB' => 'E02002105',
        '7UG' => 'E02002105',
        '7UH' => 'E02002105',
        '7UL' => 'E02002105',
        '7UN' => 'E02002105',
        '7UP' => 'E02002105',
        '7UQ' => 'E02002105',
        '7UR' => 'E02002105',
        '7US' => 'E02002105',
        '7UT' => 'E02002105',
        '7UU' => 'E02001966',
        '7UW' => 'E02001988',
        '7UX' => 'E02001966',
        '7UY' => 'E02001966',
        '7UZ' => 'E02001966',
        '7WA' => 'E02001988',
        '7WB' => 'E02001988',
        '7WD' => 'E02001988',
        '7WE' => 'E02001988',
        '7WF' => 'E02001966',
        '7WG' => 'E02002105',
        '7WH' => 'E02001966',
        '7WJ' => 'E02001988',
        '7WL' => 'E02001988',
        '7WN' => 'E02001988',
        '7WP' => 'E02001988',
        '7WQ' => 'E02001988',
        '7WR' => 'E02001966',
        '7WS' => 'E02001988',
        '7WT' => 'E02001966',
        '7WU' => 'E02001988',
        '7WW' => 'E02001988',
        '7WX' => 'E02001988',
        '7WY' => 'E02002105',
        '7XB' => 'E02001988',
        '7XD' => 'E02001988',
        '7XE' => 'E02001988',
        '7XF' => 'E02001966',
        '7XG' => 'E02001988',
        '7XH' => 'E02001966',
        '7XJ' => 'E02001988',
        '7XN' => 'E02002105',
        '7XP' => 'E02001966',
        '7XQ' => 'E02001988',
        '7XR' => 'E02001988',
        '7XS' => 'E02001988',
        '7XT' => 'E02001988',
        '7XU' => 'E02001966',
        '7XW' => 'E02001988',
        '7XX' => 'E02001988',
        '7XY' => 'E02001966',
        '7XZ' => 'E02001988',
        '7YA' => 'E02001988',
        '7YB' => 'E02002105',
        '7YD' => 'E02002105',
        '7YE' => 'E02001966',
        '7YF' => 'E02001988',
        '7YG' => 'E02001988',
        '7YH' => 'E02001988',
        '7YJ' => 'E02001966',
        '7YL' => 'E02001988',
        '7YN' => 'E02001988',
        '7YP' => 'E02001988',
        '7YQ' => 'E02001988',
        '7YR' => 'E02001988',
        '7YS' => 'E02001988',
        '7YT' => 'E02001988',
        '7YU' => 'E02001988',
        '7YW' => 'E02002105',
        '7YX' => 'E02001966',
        '7YY' => 'E02002097',
        '7YZ' => 'E02002105',
        '7ZA' => 'E02001988',
        '7ZB' => 'E02001988',
        '7ZD' => 'E02001988',
        '7ZE' => 'E02001988',
        '7ZF' => 'E02002105',
        '7ZG' => 'E02002105',
        '7ZH' => 'E02002105',
        '7ZJ' => 'E02002105',
        '7ZL' => 'E02002097',
        '7ZP' => 'E02002105',
        '7ZQ' => 'E02001966',
        '7ZR' => 'E02001966',
        '7ZS' => 'E02001966',
        '7ZT' => 'E02001988',
        '7ZU' => 'E02001988',
        '7ZW' => 'E02002105',
        '7ZX' => 'E02001966',
        '7ZY' => 'E02002105',
        '7ZZ' => 'E02001988',
        '8AA' => 'E02006474',
        '8AB' => 'E02001967',
        '8AD' => 'E02001967',
        '8AE' => 'E02001967',
        '8AF' => 'E02001967',
        '8AG' => 'E02006474',
        '8AH' => 'E02001967',
        '8AJ' => 'E02001967',
        '8AL' => 'E02001967',
        '8AN' => 'E02006474',
        '8AP' => 'E02006474',
        '8AQ' => 'E02006474',
        '8AR' => 'E02006474',
        '8AS' => 'E02006474',
        '8AT' => 'E02006490',
        '8AU' => 'E02006474',
        '8AW' => 'E02006474',
        '8AX' => 'E02006474',
        '8AY' => 'E02006474',
        '8AZ' => 'E02006474',
        '8BA' => 'E02006474',
        '8BB' => 'E02006474',
        '8BD' => 'E02006474',
        '8BE' => 'E02006474',
        '8BF' => 'E02006474',
        '8BG' => 'E02006474',
        '8BH' => 'E02006474',
        '8BJ' => 'E02006474',
        '8BL' => 'E02006474',
        '8BN' => 'E02006474',
        '8BP' => 'E02006474',
        '8BQ' => 'E02006474',
        '8BS' => 'E02006474',
        '8BT' => 'E02006474',
        '8BU' => 'E02006474',
        '8BW' => 'E02006474',
        '8BX' => 'E02006474',
        '8BY' => 'E02006474',
        '8BZ' => 'E02006474',
        '8DA' => 'E02006474',
        '8DB' => 'E02006474',
        '8DD' => 'E02006474',
        '8DE' => 'E02006474',
        '8DF' => 'E02006474',
        '8DG' => 'E02006474',
        '8DH' => 'E02006474',
        '8DJ' => 'E02006474',
        '8DL' => 'E02006474',
        '8DN' => 'E02006474',
        '8DP' => 'E02006474',
        '8DQ' => 'E02006474',
        '8DR' => 'E02006474',
        '8DS' => 'E02006474',
        '8DT' => 'E02006474',
        '8DU' => 'E02006474',
        '8DW' => 'E02006474',
        '8DX' => 'E02006474',
        '8DY' => 'E02006474',
        '8DZ' => 'E02006474',
        '8EA' => 'E02006474',
        '8EB' => 'E02006474',
        '8ED' => 'E02006474',
        '8EE' => 'E02006474',
        '8EF' => 'E02006474',
        '8EG' => 'E02006474',
        '8EH' => 'E02006474',
        '8EJ' => 'E02006474',
        '8EL' => 'E02006474',
        '8EN' => 'E02006474',
        '8EP' => 'E02006474',
        '8EQ' => 'E02006474',
        '8ER' => 'E02006474',
        '8ES' => 'E02006474',
        '8ET' => 'E02006474',
        '8EU' => 'E02006474',
        '8EW' => 'E02006474',
        '8EX' => 'E02006474',
        '8EY' => 'E02006474',
        '8EZ' => 'E02006474',
        '8FA' => 'E02006474',
        '8FB' => 'E02006474',
        '8FD' => 'E02006474',
        '8FE' => 'E02006474',
        '8FF' => 'E02006474',
        '8FG' => 'E02006474',
        '8FH' => 'E02006474',
        '8FJ' => 'E02006474',
        '8FL' => 'E02006474',
        '8FN' => 'E02006474',
        '8FP' => 'E02006474',
        '8FQ' => 'E02006474',
        '8FR' => 'E02006474',
        '8FS' => 'E02006474',
        '8FT' => 'E02006474',
        '8FU' => 'E02006474',
        '8FW' => 'E02006474',
        '8FX' => 'E02006472',
        '8FY' => 'E02006472',
        '8FZ' => 'E02006472',
        '8GA' => 'E02006472',
        '8GB' => 'E02006474',
        '8GD' => 'E02006474',
        '8GE' => 'E02006474',
        '8GF' => 'E02006474',
        '8GG' => 'E02006474',
        '8GH' => 'E02006474',
        '8GJ' => 'E02006474',
        '8GL' => 'E02006474',
        '8GN' => 'E02006474',
        '8GP' => 'E02006474',
        '8GQ' => 'E02006474',
        '8GR' => 'E02006474',
        '8GS' => 'E02006474',
        '8GT' => 'E02006474',
        '8GU' => 'E02006472',
        '8GW' => 'E02006474',
        '8GX' => 'E02006474',
        '8GY' => 'E02006474',
        '8GZ' => 'E02006474',
        '8HA' => 'E02006474',
        '8HB' => 'E02006472',
        '8HD' => 'E02006472',
        '8HE' => 'E02006472',
        '8HF' => 'E02006472',
        '8HG' => 'E02006472',
        '8HH' => 'E02006472',
        '8HJ' => 'E02006474',
        '8HL' => 'E02006474',
        '8HN' => 'E02006474',
        '8HP' => 'E02006474',
        '8HQ' => 'E02006474',
        '8HR' => 'E02006472',
        '8HS' => 'E02006474',
        '8HT' => 'E02006474',
        '8HU' => 'E02001959',
        '8HW' => 'E02001959',
        '8HX' => 'E02001959',
        '8HY' => 'E02001959',
        '8HZ' => 'E02001959',
        '8JA' => 'E02001959',
        '8JB' => 'E02006474',
        '8JD' => 'E02001959',
        '8JE' => 'E02001959',
        '8JF' => 'E02001959',
        '8JG' => 'E02001959',
        '8JH' => 'E02001959',
        '8JJ' => 'E02001967',
        '8JL' => 'E02006806',
        '8JN' => 'E02006806',
        '8JP' => 'E02006806',
        '8JQ' => 'E02006806',
        '8JR' => 'E02006806',
        '8JS' => 'E02006806',
        '8JT' => 'E02006806',
        '8JU' => 'E02001959',
        '8JW' => 'E02001959',
        '8JX' => 'E02001959',
        '8JY' => 'E02001959',
        '8JZ' => 'E02006806',
        '8LA' => 'E02006806',
        '8LB' => 'E02006806',
        '8LD' => 'E02006806',
        '8LE' => 'E02006806',
        '8LF' => 'E02006806',
        '8LG' => 'E02006806',
        '8LH' => 'E02006806',
        '8LJ' => 'E02006806',
        '8LL' => 'E02006806',
        '8LN' => 'E02006806',
        '8LP' => 'E02006806',
        '8LQ' => 'E02006806',
        '8LR' => 'E02006806',
        '8LS' => 'E02006806',
        '8LT' => 'E02006806',
        '8LU' => 'E02006806',
        '8LW' => 'E02006806',
        '8LX' => 'E02006806',
        '8LY' => 'E02006806',
        '8LZ' => 'E02006806',
        '8NA' => 'E02006806',
        '8NB' => 'E02006806',
        '8ND' => 'E02006806',
        '8NE' => 'E02006806',
        '8NF' => 'E02006806',
        '8NG' => 'E02006806',
        '8NH' => 'E02001959',
        '8NJ' => 'E02001959',
        '8NL' => 'E02006474',
        '8NN' => 'E02006806',
        '8NP' => 'E02006806',
        '8NQ' => 'E02006806',
        '8NR' => 'E02006474',
        '8NS' => 'E02006474',
        '8NT' => 'E02006474',
        '8NU' => 'E02006474',
        '8NW' => 'E02006806',
        '8NX' => 'E02006472',
        '8NY' => 'E02006474',
        '8NZ' => 'E02006474',
        '8PA' => 'E02006474',
        '8PB' => 'E02006474',
        '8PD' => 'E02006474',
        '8PE' => 'E02006806',
        '8PF' => 'E02006474',
        '8PG' => 'E02006474',
        '8PH' => 'E02006474',
        '8PJ' => 'E02006474',
        '8PL' => 'E02001988',
        '8PN' => 'E02006806',
        '8PP' => 'E02006474',
        '8PQ' => 'E02006472',
        '8PR' => 'E02006474',
        '8PS' => 'E02006474',
        '8PT' => 'E02001959',
        '8PU' => 'E02006474',
        '8PW' => 'E02006806',
        '8PX' => 'E02006474',
        '8PY' => 'E02006474',
        '8PZ' => 'E02006474',
        '8QA' => 'E02006474',
        '8QB' => 'E02006474',
        '8QD' => 'E02001959',
        '8QE' => 'E02006474',
        '8QF' => 'E02006474',
        '8QG' => 'E02006474',
        '8QH' => 'E02006472',
        '8QJ' => 'E02006474',
        '8QL' => 'E02006474',
        '8QN' => 'E02006474',
        '8RA' => 'E02001967',
        '8RB' => 'E02006806',
        '8RD' => 'E02006474',
        '8RE' => 'E02006806',
        '8RF' => 'E02006806',
        '8RG' => 'E02006806',
        '8RH' => 'E02001959',
        '8RJ' => 'E02006806',
        '8RL' => 'E02006806',
        '8RN' => 'E02006806',
        '8UU' => 'E02006474',
        '8WA' => 'E02001988',
        '8WB' => 'E02001988',
        '8WD' => 'E02001988',
        '8WE' => 'E02001988',
        '8WF' => 'E02001966',
        '8WL' => 'E02001988',
        '8WN' => 'E02001988',
        '8WP' => 'E02006806',
        '8WQ' => 'E02006806',
        '8WR' => 'E02001966',
        '8WS' => 'E02001966',
        '8WT' => 'E02001988',
        '8WU' => 'E02001988',
        '8WW' => 'E02001988',
        '8WX' => 'E02001988',
        '8WY' => 'E02001988',
        '8XG' => 'E02001988',
        '8XR' => 'E02001966',
        '8YA' => 'E02001988',
        '8YB' => 'E02001988',
        '8YQ' => 'E02001966',
        '8YR' => 'E02001966',
        '8YS' => 'E02001988',
        '8YU' => 'E02006474',
        '8YW' => 'E02006474',
        '8YX' => 'E02001988',
        '8YY' => 'E02001988',
        '8YZ' => 'E02001988',
        '8ZA' => 'E02001988',
        '8ZB' => 'E02001988',
        '8ZD' => 'E02001988',
        '8ZE' => 'E02001988',
        '8ZF' => 'E02001988',
        '8ZL' => 'E02001966',
        '8ZR' => 'E02001966',
        '8ZS' => 'E02001966',
        '8ZU' => 'E02001988',
        '8ZW' => 'E02006474',
        '8ZX' => 'E02006474',
        '8ZY' => 'E02001988',
        '8ZZ' => 'E02006474',
        '9AA' => 'E02006806',
        '9AB' => 'E02006806',
        '9AD' => 'E02006806',
        '9AE' => 'E02006806',
        '9AF' => 'E02006806',
        '9AG' => 'E02006806',
        '9AH' => 'E02006806',
        '9AJ' => 'E02006806',
        '9AL' => 'E02006806',
        '9AN' => 'E02006806',
        '9AP' => 'E02006806',
        '9AQ' => 'E02006806',
        '9AR' => 'E02006806',
        '9AS' => 'E02006806',
        '9AT' => 'E02006806',
        '9AU' => 'E02006806',
        '9AW' => 'E02006806',
        '9AX' => 'E02006806',
        '9AY' => 'E02006489',
        '9AZ' => 'E02006806',
        '9BA' => 'E02006806',
        '9BB' => 'E02006806',
        '9BD' => 'E02006806',
        '9BE' => 'E02006806',
        '9BF' => 'E02006492',
        '9BG' => 'E02006489',
        '9BH' => 'E02006806',
        '9BJ' => 'E02006806',
        '9BL' => 'E02006806',
        '9BN' => 'E02006806',
        '9BP' => 'E02006806',
        '9BQ' => 'E02006806',
        '9BS' => 'E02006806',
        '9BT' => 'E02006806',
        '9BU' => 'E02006806',
        '9BW' => 'E02006806',
        '9BX' => 'E02006806',
        '9BY' => 'E02006806',
        '9BZ' => 'E02006806',
        '9DA' => 'E02006806',
        '9DB' => 'E02006806',
        '9DD' => 'E02006806',
        '9DE' => 'E02006806',
        '9DF' => 'E02006806',
        '9DG' => 'E02006806',
        '9DH' => 'E02006806',
        '9DJ' => 'E02006489',
        '9DL' => 'E02006806',
        '9DN' => 'E02006489',
        '9DP' => 'E02006489',
        '9DQ' => 'E02006489',
        '9DR' => 'E02006492',
        '9DS' => 'E02006492',
        '9DT' => 'E02006489',
        '9DU' => 'E02006489',
        '9DW' => 'E02006489',
        '9DX' => 'E02006489',
        '9DZ' => 'E02006489',
        '9EA' => 'E02001988',
        '9EB' => 'E02006806',
        '9ED' => 'E02006489',
        '9EE' => 'E02006489',
        '9EF' => 'E02006489',
        '9EG' => 'E02006489',
        '9EH' => 'E02006489',
        '9EJ' => 'E02006489',
        '9EL' => 'E02006489',
        '9EN' => 'E02006489',
        '9EP' => 'E02006489',
        '9EQ' => 'E02006489',
        '9ER' => 'E02006489',
        '9ES' => 'E02006489',
        '9ET' => 'E02006489',
        '9EU' => 'E02006806',
        '9EW' => 'E02006806',
        '9EX' => 'E02006806',
        '9EY' => 'E02006489',
        '9EZ' => 'E02006489',
        '9FB' => 'E02006489',
        '9FD' => 'E02006489',
        '9FE' => 'E02006489',
        '9FF' => 'E02006489',
        '9FG' => 'E02006489',
        '9FH' => 'E02006489',
        '9FJ' => 'E02006489',
        '9FL' => 'E02006489',
        '9FN' => 'E02006489',
        '9FP' => 'E02006489',
        '9FQ' => 'E02006489',
        '9FR' => 'E02006489',
        '9FS' => 'E02006492',
        '9FT' => 'E02006489',
        '9FU' => 'E02006806',
        '9FW' => 'E02006489',
        '9FX' => 'E02006806',
        '9FY' => 'E02006489',
        '9FZ' => 'E02006489',
        '9GA' => 'E02006806',
        '9GB' => 'E02006806',
        '9GD' => 'E02006489',
        '9GE' => 'E02006806',
        '9GF' => 'E02006806',
        '9GG' => 'E02006806',
        '9GH' => 'E02006806',
        '9GJ' => 'E02006806',
        '9GL' => 'E02006806',
        '9GN' => 'E02006806',
        '9GP' => 'E02006806',
        '9GQ' => 'E02006806',
        '9GR' => 'E02006806',
        '9GS' => 'E02006806',
        '9GT' => 'E02006806',
        '9GU' => 'E02006806',
        '9GW' => 'E02006490',
        '9GX' => 'E02006490',
        '9GY' => 'E02006806',
        '9GZ' => 'E02006806',
        '9HA' => 'E02006806',
        '9HB' => 'E02006806',
        '9HD' => 'E02006806',
        '9HE' => 'E02006806',
        '9HF' => 'E02006806',
        '9HG' => 'E02006806',
        '9HH' => 'E02006806',
        '9HJ' => 'E02006806',
        '9HL' => 'E02006806',
        '9HN' => 'E02006806',
        '9HP' => 'E02006806',
        '9HQ' => 'E02006806',
        '9HR' => 'E02006806',
        '9HS' => 'E02006806',
        '9HT' => 'E02006492',
        '9HU' => 'E02006492',
        '9HW' => 'E02006492',
        '9HX' => 'E02006492',
        '9HY' => 'E02006492',
        '9HZ' => 'E02006492',
        '9JA' => 'E02006492',
        '9JB' => 'E02006492',
        '9JD' => 'E02006492',
        '9JE' => 'E02006492',
        '9JF' => 'E02006492',
        '9JG' => 'E02006806',
        '9JH' => 'E02006489',
        '9JJ' => 'E02006492',
        '9JL' => 'E02006492',
        '9JN' => 'E02006492',
        '9JP' => 'E02006492',
        '9JQ' => 'E02006492',
        '9JR' => 'E02006492',
        '9JS' => 'E02006492',
        '9JT' => 'E02006492',
        '9JU' => 'E02006492',
        '9JW' => 'E02006489',
        '9JX' => 'E02006492',
        '9JY' => 'E02006492',
        '9JZ' => 'E02006492',
        '9LA' => 'E02006492',
        '9LB' => 'E02006492',
        '9LD' => 'E02006492',
        '9LE' => 'E02006492',
        '9LF' => 'E02006492',
        '9LG' => 'E02006492',
        '9LH' => 'E02006492',
        '9LJ' => 'E02006492',
        '9LL' => 'E02006492',
        '9LN' => 'E02006492',
        '9LP' => 'E02006492',
        '9LQ' => 'E02006492',
        '9LR' => 'E02006492',
        '9LS' => 'E02006492',
        '9LT' => 'E02006492',
        '9LU' => 'E02006492',
        '9LW' => 'E02006492',
        '9LX' => 'E02006492',
        '9LY' => 'E02006492',
        '9LZ' => 'E02006492',
        '9NA' => 'E02006806',
        '9NB' => 'E02006806',
        '9ND' => 'E02006489',
        '9NE' => 'E02006489',
        '9NF' => 'E02006489',
        '9NG' => 'E02006489',
        '9NH' => 'E02006489',
        '9NJ' => 'E02006489',
        '9NL' => 'E02006489',
        '9NN' => 'E02006806',
        '9NP' => 'E02006489',
        '9NQ' => 'E02006489',
        '9NR' => 'E02006489',
        '9NS' => 'E02006806',
        '9NT' => 'E02006806',
        '9NU' => 'E02006806',
        '9NW' => 'E02006489',
        '9NX' => 'E02006806',
        '9NY' => 'E02006489',
        '9NZ' => 'E02006806',
        '9PA' => 'E02006806',
        '9PB' => 'E02006806',
        '9PD' => 'E02006806',
        '9PE' => 'E02006806',
        '9PF' => 'E02006806',
        '9PG' => 'E02006806',
        '9PH' => 'E02006489',
        '9PJ' => 'E02006489',
        '9PL' => 'E02006489',
        '9PN' => 'E02006492',
        '9PP' => 'E02006489',
        '9PQ' => 'E02006806',
        '9PR' => 'E02001958',
        '9PS' => 'E02006806',
        '9PU' => 'E02006489',
        '9PW' => 'E02006489',
        '9PX' => 'E02006806',
        '9PY' => 'E02006489',
        '9QA' => 'E02006492',
        '9QB' => 'E02006806',
        '9QD' => 'E02006489',
        '9QE' => 'E02006489',
        '9QF' => 'E02006489',
        '9QG' => 'E02006489',
        '9QH' => 'E02006806',
        '9QL' => 'E02006492',
        '9QN' => 'E02006489',
        '9QQ' => 'E02006806',
        '9QR' => 'E02006489',
        '9QS' => 'E02006489',
        '9QT' => 'E02001988',
        '9QW' => 'E02006489',
        '9QX' => 'E02006806',
        '9QY' => 'E02006806',
        '9RA' => 'E02006806',
        '9RD' => 'E02006492',
        '9RE' => 'E02006492',
        '9RF' => 'E02006492',
        '9RR' => 'E02006489',
        '9SR' => 'E02006492',
        '9TH' => 'E02006489',
        '9WD' => 'E02006492',
        '9WY' => 'E02001988',
        '9XA' => 'E02001988',
        '9YA' => 'E02001988',
        '9YB' => 'E02001988',
        '9YD' => 'E02006489',
        '9YJ' => 'E02001988',
        '9YQ' => 'E02001988',
        '9YS' => 'E02001988',
        '9YU' => 'E02001988',
        '9YW' => 'E02001988',
        '9YX' => 'E02006489',
        '9YY' => 'E02001988',
        '9YZ' => 'E02001988',
        '9ZA' => 'E02006489',
        '9ZB' => 'E02001988',
        '9ZD' => 'E02001988',
        '9ZE' => 'E02001988',
        '9ZF' => 'E02001966',
        '9ZG' => 'E02001988',
        '9ZH' => 'E02006489',
        '9ZJ' => 'E02001988',
        '9ZL' => 'E02001988',
        '9ZP' => 'E02001988',
        '9ZQ' => 'E02001988',
        '9ZR' => 'E02006489',
        '9ZS' => 'E02006489',
        '9ZT' => 'E02006489',
        '9ZU' => 'E02001988',
        '9ZW' => 'E02006489',
        '9ZX' => 'E02001988',
        '9ZY' => 'E02001988',
        '9ZZ' => 'E02001988',
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
