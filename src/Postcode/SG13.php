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
final class SG13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6PU' => 'E02004895',
        '7AA' => 'E02004893',
        '7AB' => 'E02004894',
        '7AD' => 'E02004893',
        '7AE' => 'E02004893',
        '7AF' => 'E02004893',
        '7AG' => 'E02004894',
        '7AH' => 'E02004894',
        '7AJ' => 'E02004894',
        '7AL' => 'E02004894',
        '7AN' => 'E02004894',
        '7AP' => 'E02004894',
        '7AQ' => 'E02004894',
        '7AR' => 'E02004893',
        '7AS' => 'E02004893',
        '7AT' => 'E02004894',
        '7AU' => 'E02004894',
        '7AW' => 'E02004894',
        '7AX' => 'E02004893',
        '7AY' => 'E02004893',
        '7AZ' => 'E02004893',
        '7BA' => 'E02004893',
        '7BB' => 'E02004893',
        '7BD' => 'E02004893',
        '7BE' => 'E02004894',
        '7BF' => 'E02004894',
        '7BG' => 'E02004894',
        '7BH' => 'E02004893',
        '7BJ' => 'E02004894',
        '7BL' => 'E02004893',
        '7BN' => 'E02004894',
        '7BP' => 'E02004894',
        '7BQ' => 'E02004893',
        '7BS' => 'E02004894',
        '7BT' => 'E02004894',
        '7BU' => 'E02004894',
        '7BW' => 'E02004894',
        '7BX' => 'E02004894',
        '7BY' => 'E02004894',
        '7BZ' => 'E02004894',
        '7DA' => 'E02004894',
        '7DB' => 'E02004894',
        '7DD' => 'E02004893',
        '7DE' => 'E02004894',
        '7DF' => 'E02004894',
        '7DG' => 'E02004893',
        '7DH' => 'E02004894',
        '7DJ' => 'E02004893',
        '7DL' => 'E02004893',
        '7DN' => 'E02004893',
        '7DP' => 'E02004893',
        '7DQ' => 'E02004893',
        '7DR' => 'E02004893',
        '7DS' => 'E02004893',
        '7DT' => 'E02004893',
        '7DU' => 'E02004893',
        '7DW' => 'E02004893',
        '7DX' => 'E02004893',
        '7DY' => 'E02004894',
        '7DZ' => 'E02004894',
        '7EA' => 'E02004894',
        '7EB' => 'E02004894',
        '7ED' => 'E02004894',
        '7EE' => 'E02004893',
        '7EF' => 'E02004893',
        '7EG' => 'E02004893',
        '7EH' => 'E02004893',
        '7EJ' => 'E02004893',
        '7EL' => 'E02004893',
        '7EN' => 'E02004893',
        '7EP' => 'E02004894',
        '7EQ' => 'E02004893',
        '7ER' => 'E02004893',
        '7ES' => 'E02004893',
        '7ET' => 'E02004893',
        '7EU' => 'E02004893',
        '7EW' => 'E02004893',
        '7EX' => 'E02004893',
        '7EY' => 'E02004893',
        '7EZ' => 'E02004893',
        '7FA' => 'E02004894',
        '7FB' => 'E02004894',
        '7FD' => 'E02004893',
        '7FE' => 'E02004893',
        '7FF' => 'E02004893',
        '7FG' => 'E02004894',
        '7FH' => 'E02004894',
        '7FJ' => 'E02004893',
        '7FL' => 'E02004894',
        '7FN' => 'E02004894',
        '7FP' => 'E02004894',
        '7FQ' => 'E02004893',
        '7FR' => 'E02004894',
        '7FS' => 'E02004894',
        '7FT' => 'E02004894',
        '7FU' => 'E02004894',
        '7FX' => 'E02004895',
        '7FY' => 'E02004893',
        '7FZ' => 'E02004894',
        '7GA' => 'E02004894',
        '7GB' => 'E02004893',
        '7GD' => 'E02004894',
        '7GE' => 'E02004893',
        '7GH' => 'E02004893',
        '7GJ' => 'E02004894',
        '7GL' => 'E02004893',
        '7GN' => 'E02004894',
        '7GP' => 'E02004893',
        '7GQ' => 'E02004894',
        '7GR' => 'E02004893',
        '7GT' => 'E02004894',
        '7GU' => 'E02004894',
        '7GW' => 'E02004894',
        '7GX' => 'E02004893',
        '7GY' => 'E02004895',
        '7GZ' => 'E02004893',
        '7HA' => 'E02004893',
        '7HB' => 'E02004893',
        '7HD' => 'E02004893',
        '7HE' => 'E02004894',
        '7HF' => 'E02004894',
        '7HG' => 'E02004893',
        '7HH' => 'E02004894',
        '7HJ' => 'E02004894',
        '7HL' => 'E02004893',
        '7HN' => 'E02004894',
        '7HP' => 'E02004894',
        '7HQ' => 'E02004893',
        '7HR' => 'E02004893',
        '7HS' => 'E02004894',
        '7HT' => 'E02004894',
        '7HU' => 'E02004894',
        '7HW' => 'E02004894',
        '7HX' => 'E02004893',
        '7HY' => 'E02004893',
        '7HZ' => 'E02004894',
        '7JA' => 'E02004893',
        '7JB' => 'E02004893',
        '7JD' => 'E02004893',
        '7JE' => 'E02004893',
        '7JF' => 'E02004893',
        '7JG' => 'E02004893',
        '7JH' => 'E02004893',
        '7JJ' => 'E02004893',
        '7JL' => 'E02004893',
        '7JN' => 'E02004893',
        '7JP' => 'E02004893',
        '7JQ' => 'E02004893',
        '7JR' => 'E02004894',
        '7JS' => 'E02004893',
        '7JT' => 'E02004894',
        '7JU' => 'E02004894',
        '7JW' => 'E02004893',
        '7JX' => 'E02004891',
        '7JY' => 'E02004893',
        '7JZ' => 'E02004893',
        '7LA' => 'E02004894',
        '7LB' => 'E02004893',
        '7LD' => 'E02004894',
        '7LE' => 'E02004894',
        '7LF' => 'E02004894',
        '7LG' => 'E02004894',
        '7LH' => 'E02004894',
        '7LJ' => 'E02004894',
        '7LL' => 'E02004894',
        '7LN' => 'E02004894',
        '7LP' => 'E02004894',
        '7LQ' => 'E02004894',
        '7LR' => 'E02004893',
        '7LS' => 'E02004894',
        '7LT' => 'E02004894',
        '7LU' => 'E02004894',
        '7LW' => 'E02004894',
        '7LX' => 'E02004894',
        '7LY' => 'E02004894',
        '7LZ' => 'E02004895',
        '7NA' => 'E02004894',
        '7NB' => 'E02004894',
        '7ND' => 'E02004894',
        '7NE' => 'E02004894',
        '7NF' => 'E02004894',
        '7NG' => 'E02004894',
        '7NH' => 'E02004894',
        '7NJ' => 'E02004894',
        '7NL' => 'E02004894',
        '7NN' => 'E02004893',
        '7NP' => 'E02004895',
        '7NQ' => 'E02004893',
        '7NR' => 'E02004894',
        '7NS' => 'E02004894',
        '7NT' => 'E02004894',
        '7NU' => 'E02004895',
        '7NW' => 'E02004893',
        '7NX' => 'E02004895',
        '7NY' => 'E02004843',
        '7NZ' => 'E02004895',
        '7PA' => 'E02004843',
        '7PB' => 'E02004843',
        '7PD' => 'E02004843',
        '7PE' => 'E02004843',
        '7PF' => 'E02004843',
        '7PG' => 'E02004843',
        '7PH' => 'E02004895',
        '7PJ' => 'E02004895',
        '7PL' => 'E02004895',
        '7PN' => 'E02004895',
        '7PP' => 'E02004895',
        '7PQ' => 'E02004895',
        '7PR' => 'E02004895',
        '7PS' => 'E02004895',
        '7PT' => 'E02004895',
        '7PU' => 'E02004895',
        '7PW' => 'E02004895',
        '7PX' => 'E02004895',
        '7PY' => 'E02004895',
        '7PZ' => 'E02004895',
        '7QA' => 'E02004895',
        '7QB' => 'E02004895',
        '7QD' => 'E02004894',
        '7QE' => 'E02004893',
        '7QF' => 'E02004893',
        '7QG' => 'E02004895',
        '7QH' => 'E02004895',
        '7QJ' => 'E02004895',
        '7QL' => 'E02004895',
        '7QN' => 'E02004895',
        '7QP' => 'E02004895',
        '7QQ' => 'E02004895',
        '7QR' => 'E02004895',
        '7QS' => 'E02004895',
        '7QT' => 'E02004895',
        '7QU' => 'E02004895',
        '7QW' => 'E02004895',
        '7QX' => 'E02004895',
        '7QY' => 'E02004895',
        '7QZ' => 'E02004895',
        '7RA' => 'E02004895',
        '7RB' => 'E02004895',
        '7RD' => 'E02004895',
        '7RE' => 'E02004895',
        '7RF' => 'E02004894',
        '7RG' => 'E02004895',
        '7RH' => 'E02004895',
        '7RJ' => 'E02004895',
        '7RL' => 'E02004895',
        '7RN' => 'E02004895',
        '7RP' => 'E02004895',
        '7RQ' => 'E02004894',
        '7RR' => 'E02004895',
        '7RS' => 'E02004895',
        '7RT' => 'E02004895',
        '7RU' => 'E02004895',
        '7RW' => 'E02004895',
        '7RX' => 'E02004895',
        '7RY' => 'E02004895',
        '7RZ' => 'E02004895',
        '7SA' => 'E02004895',
        '7SB' => 'E02004895',
        '7SD' => 'E02004895',
        '7SE' => 'E02004895',
        '7SF' => 'E02004895',
        '7SG' => 'E02004893',
        '7SH' => 'E02004893',
        '7SJ' => 'E02004893',
        '7SL' => 'E02004893',
        '7SN' => 'E02004893',
        '7SP' => 'E02004893',
        '7SQ' => 'E02004893',
        '7SR' => 'E02004893',
        '7SS' => 'E02004893',
        '7ST' => 'E02004893',
        '7SU' => 'E02004893',
        '7SW' => 'E02004893',
        '7SX' => 'E02004893',
        '7SY' => 'E02004893',
        '7SZ' => 'E02004893',
        '7TA' => 'E02004893',
        '7TB' => 'E02004893',
        '7TD' => 'E02004893',
        '7TE' => 'E02004893',
        '7TF' => 'E02004893',
        '7TG' => 'E02004893',
        '7TH' => 'E02004893',
        '7TJ' => 'E02004893',
        '7TL' => 'E02004893',
        '7TN' => 'E02004893',
        '7TP' => 'E02004895',
        '7TQ' => 'E02004893',
        '7TR' => 'E02004893',
        '7TS' => 'E02004893',
        '7TT' => 'E02004894',
        '7TU' => 'E02004893',
        '7TW' => 'E02004894',
        '7TX' => 'E02004893',
        '7TY' => 'E02004893',
        '7TZ' => 'E02004893',
        '7UA' => 'E02004893',
        '7UB' => 'E02004893',
        '7UD' => 'E02004894',
        '7UE' => 'E02004891',
        '7UF' => 'E02004894',
        '7UG' => 'E02004894',
        '7UH' => 'E02004894',
        '7UJ' => 'E02004891',
        '7UL' => 'E02004891',
        '7UN' => 'E02004891',
        '7UP' => 'E02004893',
        '7UQ' => 'E02004894',
        '7UR' => 'E02004893',
        '7US' => 'E02004893',
        '7UT' => 'E02004893',
        '7UU' => 'E02004893',
        '7UW' => 'E02004893',
        '7UX' => 'E02004893',
        '7UY' => 'E02004893',
        '7UZ' => 'E02004893',
        '7WA' => 'E02004894',
        '7WB' => 'E02004893',
        '7WD' => 'E02004893',
        '7WE' => 'E02004894',
        '7WF' => 'E02004891',
        '7WG' => 'E02004894',
        '7WH' => 'E02004894',
        '7WJ' => 'E02004894',
        '7WL' => 'E02004894',
        '7WN' => 'E02004894',
        '7WP' => 'E02004895',
        '7WQ' => 'E02004894',
        '7WR' => 'E02004895',
        '7WS' => 'E02004893',
        '7WT' => 'E02004893',
        '7WU' => 'E02004893',
        '7WW' => 'E02004894',
        '7WX' => 'E02004894',
        '7WY' => 'E02004894',
        '7WZ' => 'E02004894',
        '7XA' => 'E02004894',
        '7XB' => 'E02004894',
        '7XD' => 'E02004894',
        '7XE' => 'E02004894',
        '7XF' => 'E02004894',
        '7XG' => 'E02004894',
        '7XH' => 'E02004894',
        '7XJ' => 'E02004894',
        '7XL' => 'E02004893',
        '7XN' => 'E02004893',
        '7XP' => 'E02004894',
        '7XQ' => 'E02004894',
        '7XR' => 'E02004894',
        '7XS' => 'E02004893',
        '7XT' => 'E02004893',
        '7XU' => 'E02004893',
        '7XW' => 'E02004894',
        '7XX' => 'E02004894',
        '7XY' => 'E02004894',
        '7XZ' => 'E02004894',
        '7YB' => 'E02004894',
        '7YF' => 'E02004894',
        '7YG' => 'E02004894',
        '7YH' => 'E02004893',
        '7YJ' => 'E02004894',
        '7YL' => 'E02004894',
        '7YN' => 'E02004894',
        '7YP' => 'E02004893',
        '7YQ' => 'E02004894',
        '7YR' => 'E02004894',
        '7YS' => 'E02004893',
        '7YT' => 'E02004895',
        '7YU' => 'E02004894',
        '7YW' => 'E02004894',
        '7YX' => 'E02004894',
        '7YY' => 'E02004894',
        '7YZ' => 'E02004894',
        '7ZA' => 'E02004894',
        '7ZB' => 'E02004894',
        '7ZD' => 'E02004894',
        '7ZE' => 'E02004894',
        '7ZF' => 'E02004894',
        '7ZG' => 'E02004894',
        '7ZH' => 'E02004894',
        '7ZJ' => 'E02004894',
        '7ZL' => 'E02004894',
        '7ZN' => 'E02004894',
        '7ZP' => 'E02004894',
        '7ZQ' => 'E02004894',
        '7ZS' => 'E02004894',
        '7ZT' => 'E02004894',
        '7ZU' => 'E02004894',
        '7ZW' => 'E02004894',
        '7ZX' => 'E02004894',
        '8AA' => 'E02004894',
        '8AB' => 'E02004894',
        '8AD' => 'E02004894',
        '8AE' => 'E02004894',
        '8AF' => 'E02004894',
        '8AG' => 'E02004894',
        '8AH' => 'E02004894',
        '8AJ' => 'E02004894',
        '8AL' => 'E02004894',
        '8AN' => 'E02004894',
        '8AP' => 'E02004894',
        '8AQ' => 'E02004894',
        '8AR' => 'E02004894',
        '8AS' => 'E02004894',
        '8AT' => 'E02004894',
        '8AU' => 'E02004894',
        '8AW' => 'E02004894',
        '8AX' => 'E02004894',
        '8AY' => 'E02004894',
        '8AZ' => 'E02004894',
        '8BA' => 'E02004894',
        '8BB' => 'E02004894',
        '8BD' => 'E02004894',
        '8BE' => 'E02004894',
        '8BF' => 'E02004894',
        '8BG' => 'E02004894',
        '8BH' => 'E02004894',
        '8BJ' => 'E02004894',
        '8BL' => 'E02004894',
        '8BN' => 'E02004894',
        '8BP' => 'E02004894',
        '8BQ' => 'E02004894',
        '8BS' => 'E02004894',
        '8BT' => 'E02004894',
        '8BU' => 'E02004894',
        '8BW' => 'E02004894',
        '8BX' => 'E02004894',
        '8BY' => 'E02004894',
        '8BZ' => 'E02004894',
        '8DA' => 'E02004894',
        '8DB' => 'E02004894',
        '8DD' => 'E02004894',
        '8DE' => 'E02004894',
        '8DF' => 'E02004894',
        '8DG' => 'E02004894',
        '8DH' => 'E02004894',
        '8DJ' => 'E02004894',
        '8DL' => 'E02004894',
        '8DN' => 'E02004894',
        '8DP' => 'E02004894',
        '8DQ' => 'E02004894',
        '8DR' => 'E02004894',
        '8DS' => 'E02004894',
        '8DT' => 'E02004894',
        '8DU' => 'E02004894',
        '8DW' => 'E02004894',
        '8DX' => 'E02004894',
        '8DY' => 'E02004894',
        '8DZ' => 'E02004894',
        '8EA' => 'E02004894',
        '8EB' => 'E02004894',
        '8ED' => 'E02004894',
        '8EE' => 'E02004887',
        '8EF' => 'E02004894',
        '8EG' => 'E02004894',
        '8EH' => 'E02004894',
        '8EJ' => 'E02004894',
        '8EL' => 'E02004894',
        '8EN' => 'E02004894',
        '8EP' => 'E02004894',
        '8EQ' => 'E02004894',
        '8ER' => 'E02004894',
        '8ES' => 'E02004894',
        '8ET' => 'E02004894',
        '8EU' => 'E02004894',
        '8EW' => 'E02004894',
        '8EX' => 'E02004894',
        '8EY' => 'E02004894',
        '8EZ' => 'E02004894',
        '8FA' => 'E02004894',
        '8FB' => 'E02004894',
        '8FD' => 'E02004894',
        '8FE' => 'E02004894',
        '8FF' => 'E02004894',
        '8FG' => 'E02004895',
        '8FH' => 'E02004894',
        '8FJ' => 'E02004894',
        '8FL' => 'E02004894',
        '8FN' => 'E02004894',
        '8FP' => 'E02004894',
        '8FQ' => 'E02004894',
        '8GA' => 'E02004887',
        '8GL' => 'E02004894',
        '8HA' => 'E02004894',
        '8HB' => 'E02004894',
        '8HD' => 'E02004894',
        '8HE' => 'E02004894',
        '8HF' => 'E02004894',
        '8HG' => 'E02004894',
        '8HH' => 'E02004894',
        '8HJ' => 'E02004894',
        '8HL' => 'E02004894',
        '8HN' => 'E02004894',
        '8HP' => 'E02004894',
        '8HQ' => 'E02004894',
        '8HR' => 'E02004894',
        '8HS' => 'E02004894',
        '8HT' => 'E02004894',
        '8HU' => 'E02004894',
        '8HW' => 'E02004894',
        '8HX' => 'E02004894',
        '8HY' => 'E02004894',
        '8HZ' => 'E02004894',
        '8JA' => 'E02004894',
        '8JB' => 'E02004894',
        '8JD' => 'E02004894',
        '8JE' => 'E02004894',
        '8JF' => 'E02004894',
        '8JG' => 'E02004894',
        '8JH' => 'E02004894',
        '8JJ' => 'E02004894',
        '8JL' => 'E02004894',
        '8JN' => 'E02004894',
        '8JP' => 'E02004894',
        '8JQ' => 'E02004894',
        '8JR' => 'E02004894',
        '8JS' => 'E02004894',
        '8JT' => 'E02004894',
        '8JU' => 'E02004894',
        '8JW' => 'E02004894',
        '8JX' => 'E02004894',
        '8JY' => 'E02004894',
        '8JZ' => 'E02004894',
        '8LA' => 'E02004887',
        '8LB' => 'E02004887',
        '8LD' => 'E02004887',
        '8LE' => 'E02004887',
        '8LF' => 'E02004887',
        '8LG' => 'E02004887',
        '8LH' => 'E02004887',
        '8LJ' => 'E02004887',
        '8LL' => 'E02004887',
        '8LN' => 'E02004887',
        '8LP' => 'E02004887',
        '8LQ' => 'E02004887',
        '8LR' => 'E02004887',
        '8LS' => 'E02004887',
        '8LT' => 'E02004887',
        '8LU' => 'E02004887',
        '8LW' => 'E02004887',
        '8LX' => 'E02004887',
        '8LY' => 'E02004887',
        '8LZ' => 'E02004887',
        '8NA' => 'E02004887',
        '8NB' => 'E02004887',
        '8ND' => 'E02004887',
        '8NE' => 'E02004887',
        '8NF' => 'E02004887',
        '8NG' => 'E02004887',
        '8NH' => 'E02004994',
        '8NJ' => 'E02004895',
        '8NL' => 'E02004895',
        '8NN' => 'E02004894',
        '8NP' => 'E02004895',
        '8NQ' => 'E02004887',
        '8NR' => 'E02004895',
        '8NS' => 'E02004895',
        '8NT' => 'E02004895',
        '8NU' => 'E02004895',
        '8NW' => 'E02004887',
        '8NX' => 'E02004895',
        '8NY' => 'E02004895',
        '8NZ' => 'E02004895',
        '8PA' => 'E02004895',
        '8PB' => 'E02004895',
        '8PD' => 'E02004895',
        '8PE' => 'E02004894',
        '8PF' => 'E02004895',
        '8PG' => 'E02004895',
        '8PH' => 'E02004887',
        '8PJ' => 'E02004887',
        '8PL' => 'E02004887',
        '8PN' => 'E02004887',
        '8PP' => 'E02004887',
        '8PQ' => 'E02004895',
        '8PR' => 'E02004887',
        '8PS' => 'E02004887',
        '8PT' => 'E02004887',
        '8PU' => 'E02004887',
        '8PW' => 'E02004887',
        '8PX' => 'E02004887',
        '8PY' => 'E02004887',
        '8PZ' => 'E02004887',
        '8QA' => 'E02004887',
        '8QB' => 'E02004895',
        '8QD' => 'E02004887',
        '8QE' => 'E02004894',
        '8QF' => 'E02004894',
        '8QG' => 'E02004895',
        '8QH' => 'E02004895',
        '8QJ' => 'E02004895',
        '8QL' => 'E02004895',
        '8QN' => 'E02004994',
        '8QP' => 'E02004994',
        '8QQ' => 'E02004895',
        '8QR' => 'E02004994',
        '8QS' => 'E02004994',
        '8QT' => 'E02004994',
        '8QU' => 'E02004994',
        '8QW' => 'E02004990',
        '8QX' => 'E02004887',
        '8QY' => 'E02004894',
        '8QZ' => 'E02004887',
        '8RA' => 'E02004994',
        '8RB' => 'E02004994',
        '8RD' => 'E02004994',
        '8RE' => 'E02004887',
        '8RF' => 'E02004994',
        '8RG' => 'E02004994',
        '8RH' => 'E02004894',
        '8RJ' => 'E02004887',
        '8RN' => 'E02004887',
        '8RP' => 'E02004994',
        '8RR' => 'E02004994',
        '8RS' => 'E02004994',
        '8RT' => 'E02004994',
        '8RU' => 'E02004994',
        '8RX' => 'E02004894',
        '8RY' => 'E02004894',
        '8RZ' => 'E02004994',
        '8SA' => 'E02004994',
        '8SB' => 'E02004894',
        '8SD' => 'E02004994',
        '8SE' => 'E02004994',
        '8SF' => 'E02004894',
        '8SH' => 'E02004887',
        '8SJ' => 'E02004894',
        '8SL' => 'E02004894',
        '8SP' => 'E02004887',
        '8SR' => 'E02004887',
        '8SS' => 'E02004887',
        '8ST' => 'E02004887',
        '8SU' => 'E02004887',
        '8SW' => 'E02004894',
        '8TB' => 'E02004894',
        '8TD' => 'E02004894',
        '8TH' => 'E02004894',
        '8TJ' => 'E02004894',
        '8TN' => 'E02004894',
        '8TP' => 'E02004894',
        '8TT' => 'E02004894',
        '8TU' => 'E02004894',
        '8TZ' => 'E02004894',
        '8UA' => 'E02004894',
        '8UB' => 'E02004894',
        '8UD' => 'E02004894',
        '8UE' => 'E02004887',
        '8UF' => 'E02004894',
        '8UG' => 'E02004887',
        '8UJ' => 'E02004894',
        '8US' => 'E02004894',
        '8WA' => 'E02004894',
        '8WB' => 'E02004894',
        '8WD' => 'E02004894',
        '8WE' => 'E02004894',
        '8WJ' => 'E02004894',
        '8XB' => 'E02004887',
        '8XD' => 'E02004894',
        '8XE' => 'E02004894',
        '8XF' => 'E02004894',
        '8XH' => 'E02004887',
        '8XJ' => 'E02004894',
        '8XL' => 'E02004894',
        '8XN' => 'E02004887',
        '8XP' => 'E02004894',
        '8XQ' => 'E02004894',
        '8XR' => 'E02004894',
        '8XS' => 'E02004894',
        '8XW' => 'E02004894',
        '8XX' => 'E02004887',
        '8XZ' => 'E02004894',
        '8YB' => 'E02004894',
        '8YL' => 'E02004894',
        '8YN' => 'E02004894',
        '8YP' => 'E02004894',
        '8ZJ' => 'E02004894',
        '8ZN' => 'E02004894',
        '8ZQ' => 'E02004894',
        '8ZU' => 'E02004894',
        '9AA' => 'E02004894',
        '9AB' => 'E02004894',
        '9AD' => 'E02004894',
        '9AE' => 'E02004894',
        '9AF' => 'E02004894',
        '9AG' => 'E02004894',
        '9AH' => 'E02004894',
        '9AJ' => 'E02004894',
        '9AL' => 'E02004894',
        '9AN' => 'E02004894',
        '9AP' => 'E02004894',
        '9AQ' => 'E02004894',
        '9AR' => 'E02004894',
        '9AS' => 'E02004894',
        '9AT' => 'E02004894',
        '9AU' => 'E02004894',
        '9AW' => 'E02004894',
        '9AX' => 'E02004894',
        '9AY' => 'E02004894',
        '9AZ' => 'E02004894',
        '9BA' => 'E02004894',
        '9BB' => 'E02004894',
        '9BD' => 'E02004894',
        '9BE' => 'E02004894',
        '9BF' => 'E02004894',
        '9BG' => 'E02004894',
        '9BH' => 'E02004894',
        '9BJ' => 'E02004894',
        '9BL' => 'E02004894',
        '9BN' => 'E02004894',
        '9BP' => 'E02004894',
        '9BQ' => 'E02004894',
        '9BR' => 'E02004894',
        '9BS' => 'E02004894',
        '9BT' => 'E02004894',
        '9BU' => 'E02004894',
        '9BW' => 'E02004894',
        '9BX' => 'E02004894',
        '9BY' => 'E02004894',
        '9BZ' => 'E02004894',
        '9DA' => 'E02004894',
        '9DB' => 'E02004894',
        '9DD' => 'E02004894',
        '9DE' => 'E02004894',
        '9DF' => 'E02004894',
        '9DG' => 'E02004894',
        '9DH' => 'E02004894',
        '9DJ' => 'E02004894',
        '9DL' => 'E02004894',
        '9DN' => 'E02004894',
        '9DP' => 'E02004894',
        '9DQ' => 'E02004894',
        '9DR' => 'E02004894',
        '9DS' => 'E02004894',
        '9DT' => 'E02004894',
        '9DU' => 'E02004894',
        '9DW' => 'E02004894',
        '9DX' => 'E02004894',
        '9DY' => 'E02004894',
        '9DZ' => 'E02004894',
        '9EA' => 'E02004894',
        '9EB' => 'E02004894',
        '9ED' => 'E02004894',
        '9EE' => 'E02004894',
        '9EF' => 'E02004894',
        '9EG' => 'E02004894',
        '9EH' => 'E02004894',
        '9EJ' => 'E02004894',
        '9EL' => 'E02004894',
        '9EN' => 'E02004894',
        '9EP' => 'E02004894',
        '9EQ' => 'E02004894',
        '9ER' => 'E02004894',
        '9ES' => 'E02004894',
        '9ET' => 'E02004894',
        '9EU' => 'E02004894',
        '9EW' => 'E02004894',
        '9EX' => 'E02004894',
        '9EY' => 'E02004894',
        '9EZ' => 'E02004894',
        '9FA' => 'E02004894',
        '9FB' => 'E02004894',
        '9FD' => 'E02004894',
        '9FE' => 'E02004894',
        '9FF' => 'E02004894',
        '9FG' => 'E02004894',
        '9FH' => 'E02004894',
        '9FJ' => 'E02004894',
        '9FL' => 'E02004894',
        '9FN' => 'E02004894',
        '9FP' => 'E02004894',
        '9FQ' => 'E02004894',
        '9FR' => 'E02004894',
        '9FS' => 'E02004894',
        '9FT' => 'E02004894',
        '9FU' => 'E02004894',
        '9FW' => 'E02004894',
        '9FX' => 'E02004894',
        '9FY' => 'E02004894',
        '9FZ' => 'E02004894',
        '9GA' => 'E02004894',
        '9GB' => 'E02004894',
        '9GD' => 'E02004894',
        '9GE' => 'E02004894',
        '9GF' => 'E02004894',
        '9GG' => 'E02004894',
        '9GH' => 'E02004894',
        '9GJ' => 'E02004894',
        '9GL' => 'E02004894',
        '9GN' => 'E02004894',
        '9GP' => 'E02004894',
        '9GQ' => 'E02004894',
        '9GR' => 'E02004894',
        '9GT' => 'E02004894',
        '9GU' => 'E02004894',
        '9GW' => 'E02004894',
        '9GX' => 'E02004894',
        '9GY' => 'E02004894',
        '9GZ' => 'E02004894',
        '9HA' => 'E02004894',
        '9HB' => 'E02004894',
        '9HD' => 'E02004894',
        '9HE' => 'E02004894',
        '9HF' => 'E02004894',
        '9HG' => 'E02004894',
        '9HH' => 'E02004894',
        '9HJ' => 'E02004894',
        '9HN' => 'E02004894',
        '9HP' => 'E02004894',
        '9HQ' => 'E02004894',
        '9HR' => 'E02004894',
        '9HS' => 'E02004894',
        '9HT' => 'E02004894',
        '9HU' => 'E02004894',
        '9HW' => 'E02004894',
        '9HX' => 'E02004894',
        '9HY' => 'E02004894',
        '9HZ' => 'E02004894',
        '9JA' => 'E02004894',
        '9JB' => 'E02004894',
        '9JD' => 'E02004894',
        '9JE' => 'E02004894',
        '9JF' => 'E02004894',
        '9JG' => 'E02004894',
        '9JH' => 'E02004894',
        '9JJ' => 'E02004894',
        '9JL' => 'E02004894',
        '9JN' => 'E02004894',
        '9JP' => 'E02004894',
        '9JQ' => 'E02004894',
        '9JR' => 'E02004894',
        '9JS' => 'E02004894',
        '9JU' => 'E02004894',
        '9JW' => 'E02004894',
        '9JX' => 'E02004894',
        '9JY' => 'E02004894',
        '9JZ' => 'E02004894',
        '9LA' => 'E02004894',
        '9LB' => 'E02004894',
        '9LD' => 'E02004894',
        '9LE' => 'E02004894',
        '9LF' => 'E02004894',
        '9LG' => 'E02004894',
        '9LH' => 'E02004894',
        '9SA' => 'E02004894',
        '9SB' => 'E02004894',
        '9SD' => 'E02004894',
        '9SE' => 'E02004894',
        '9SF' => 'E02004894',
        '9SG' => 'E02004894',
        '9SH' => 'E02004894',
        '9SJ' => 'E02004894',
        '9SL' => 'E02004894',
        '9SN' => 'E02004894',
        '9SP' => 'E02004894',
        '9SQ' => 'E02004894',
        '9SR' => 'E02004894',
        '9SS' => 'E02004894',
        '9ST' => 'E02004894',
        '9SU' => 'E02004894',
        '9SW' => 'E02004894',
        '9SX' => 'E02004894',
        '9SY' => 'E02004894',
        '9SZ' => 'E02004894',
        '9TA' => 'E02004894',
        '9TB' => 'E02004894',
        '9TD' => 'E02004894',
        '9TE' => 'E02004894',
        '9TF' => 'E02004894',
        '9TG' => 'E02004894',
        '9TH' => 'E02004894',
        '9TJ' => 'E02004894',
        '9TL' => 'E02004894',
        '9TN' => 'E02004894',
        '9TP' => 'E02004894',
        '9TQ' => 'E02004894',
        '9TR' => 'E02004894',
        '9TS' => 'E02004894',
        '9TT' => 'E02004894',
        '9TU' => 'E02004894',
        '9TW' => 'E02004894',
        '9TX' => 'E02004894',
        '9TY' => 'E02004894',
        '9TZ' => 'E02004894',
        '9WZ' => 'E02004894',
        '9ZZ' => 'E02004894',
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
