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
final class SP7
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02004259',
        '0AB' => 'E02004259',
        '0AD' => 'E02004257',
        '0AE' => 'E02004256',
        '0AF' => 'E02004259',
        '0AG' => 'E02004259',
        '0AH' => 'E02004259',
        '0AJ' => 'E02004259',
        '0AL' => 'E02004259',
        '0AN' => 'E02004259',
        '0AP' => 'E02004259',
        '0AQ' => 'E02004259',
        '0AR' => 'E02004259',
        '0AS' => 'E02004259',
        '0AT' => 'E02004259',
        '0AU' => 'E02004259',
        '0AW' => 'E02004259',
        '0AX' => 'E02004259',
        '0AY' => 'E02004256',
        '0AZ' => 'E02004256',
        '0BA' => 'E02004256',
        '0BB' => 'E02004259',
        '0BD' => 'E02004257',
        '0BE' => 'E02004259',
        '0BF' => 'E02004259',
        '0BG' => 'E02004259',
        '0BH' => 'E02004259',
        '0BJ' => 'E02004259',
        '0BL' => 'E02004259',
        '0BN' => 'E02004259',
        '0BP' => 'E02004259',
        '0BQ' => 'E02004259',
        '0BS' => 'E02004259',
        '0BT' => 'E02004259',
        '0BU' => 'E02004259',
        '0BW' => 'E02004259',
        '0BX' => 'E02004259',
        '0BY' => 'E02004259',
        '0BZ' => 'E02004259',
        '0DA' => 'E02004259',
        '0DB' => 'E02004259',
        '0DD' => 'E02004259',
        '0DE' => 'E02004259',
        '0DF' => 'E02004259',
        '0DG' => 'E02004259',
        '0DH' => 'E02004259',
        '0DJ' => 'E02004259',
        '0DL' => 'E02004259',
        '0DN' => 'E02004259',
        '0DP' => 'E02004259',
        '0DQ' => 'E02004259',
        '0DR' => 'E02004259',
        '0DS' => 'E02004259',
        '0DT' => 'E02004259',
        '0DU' => 'E02004259',
        '0DW' => 'E02004259',
        '0DX' => 'E02004259',
        '0DY' => 'E02004259',
        '0DZ' => 'E02004259',
        '0EA' => 'E02004259',
        '0EB' => 'E02004259',
        '0ED' => 'E02004259',
        '0EE' => 'E02004259',
        '0EF' => 'E02004259',
        '0EG' => 'E02004259',
        '0EL' => 'E02006676',
        '0EN' => 'E02006676',
        '0EP' => 'E02006676',
        '0ER' => 'E02006676',
        '0ES' => 'E02006676',
        '0ET' => 'E02006676',
        '0EU' => 'E02006676',
        '0EW' => 'E02006676',
        '0EX' => 'E02006676',
        '0EY' => 'E02006676',
        '0EZ' => 'E02006676',
        '0FA' => 'E02004259',
        '0HA' => 'E02006676',
        '0HB' => 'E02006676',
        '0HD' => 'E02006676',
        '0HE' => 'E02006676',
        '0HF' => 'E02006676',
        '0HG' => 'E02006676',
        '0HH' => 'E02006676',
        '0HJ' => 'E02006676',
        '0HL' => 'E02006676',
        '0HN' => 'E02006676',
        '0HP' => 'E02006676',
        '0HQ' => 'E02006676',
        '0HR' => 'E02006676',
        '0HS' => 'E02006676',
        '0HT' => 'E02006676',
        '0HU' => 'E02004257',
        '0HW' => 'E02006676',
        '0JA' => 'E02004259',
        '0JB' => 'E02004259',
        '0JD' => 'E02004259',
        '0JE' => 'E02004259',
        '0JF' => 'E02004259',
        '0JG' => 'E02004259',
        '0JH' => 'E02004259',
        '0JJ' => 'E02004259',
        '0JL' => 'E02004259',
        '0JN' => 'E02004259',
        '0JP' => 'E02004259',
        '0JQ' => 'E02004259',
        '0JR' => 'E02004259',
        '0JS' => 'E02004259',
        '0JT' => 'E02004259',
        '0JU' => 'E02004259',
        '0JW' => 'E02004259',
        '0JX' => 'E02004259',
        '0JY' => 'E02004259',
        '0JZ' => 'E02004256',
        '0LA' => 'E02004259',
        '0LB' => 'E02004256',
        '0LD' => 'E02004256',
        '0LE' => 'E02004256',
        '0LF' => 'E02004256',
        '0LG' => 'E02004256',
        '0LH' => 'E02004256',
        '0LJ' => 'E02004256',
        '0LL' => 'E02004256',
        '0LN' => 'E02004256',
        '0LP' => 'E02004256',
        '0LQ' => 'E02004256',
        '0LR' => 'E02004257',
        '0LT' => 'E02004257',
        '0LU' => 'E02004259',
        '0LW' => 'E02004256',
        '0LX' => 'E02004259',
        '0LY' => 'E02004259',
        '0LZ' => 'E02004259',
        '0NA' => 'E02004257',
        '0NB' => 'E02004259',
        '0ND' => 'E02004259',
        '0NF' => 'E02004259',
        '0NG' => 'E02004259',
        '0NH' => 'E02004259',
        '0NJ' => 'E02004259',
        '0NL' => 'E02004259',
        '0NN' => 'E02004259',
        '0NP' => 'E02004259',
        '0NQ' => 'E02004259',
        '0NR' => 'E02004259',
        '0NS' => 'E02004259',
        '0NT' => 'E02004259',
        '0NU' => 'E02004259',
        '0NW' => 'E02004259',
        '0NX' => 'E02004259',
        '0NY' => 'E02004259',
        '0PA' => 'E02004259',
        '0PB' => 'E02004259',
        '0PD' => 'E02004259',
        '0PE' => 'E02004259',
        '0PF' => 'E02004259',
        '0PG' => 'E02004259',
        '0PH' => 'E02004259',
        '0PJ' => 'E02004259',
        '0PL' => 'E02006676',
        '0PN' => 'E02006676',
        '0PP' => 'E02006676',
        '0PQ' => 'E02004259',
        '0PR' => 'E02006676',
        '0PS' => 'E02004259',
        '0PT' => 'E02004259',
        '0PU' => 'E02004259',
        '0PW' => 'E02006676',
        '0PX' => 'E02004259',
        '0PY' => 'E02004259',
        '0PZ' => 'E02004259',
        '0QA' => 'E02004256',
        '0QB' => 'E02004256',
        '0QD' => 'E02004256',
        '0QE' => 'E02004256',
        '0QF' => 'E02004256',
        '0QG' => 'E02004256',
        '0QH' => 'E02004256',
        '0QJ' => 'E02004256',
        '0QL' => 'E02004256',
        '0QP' => 'E02004256',
        '0QQ' => 'E02004256',
        '0QR' => 'E02004256',
        '0QW' => 'E02004256',
        '0QY' => 'E02004259',
        '0QZ' => 'E02004259',
        '0RB' => 'E02004256',
        '0RD' => 'E02004256',
        '0RE' => 'E02004257',
        '0RF' => 'E02004257',
        '0RG' => 'E02004259',
        '0RH' => 'E02004259',
        '0RJ' => 'E02004259',
        '0RL' => 'E02004259',
        '0RN' => 'E02004257',
        '0RP' => 'E02004257',
        '0RQ' => 'E02004257',
        '0RR' => 'E02004257',
        '0RW' => 'E02004259',
        '0WA' => 'E02004257',
        '0WQ' => 'E02004257',
        '0WU' => 'E02004257',
        '0WX' => 'E02004257',
        '0WY' => 'E02004257',
        '0WZ' => 'E02004257',
        '0XJ' => 'E02004257',
        '0XN' => 'E02004257',
        '0XZ' => 'E02004257',
        '0ZN' => 'E02004257',
        '0ZX' => 'E02004257',
        '0ZZ' => 'E02004256',
        '7AH' => 'E02004257',
        '7AJ' => 'E02004257',
        '7AL' => 'E02004257',
        '7AP' => 'E02004257',
        '7AQ' => 'E02004257',
        '7AR' => 'E02004257',
        '7AS' => 'E02004257',
        '7AT' => 'E02004257',
        '7AU' => 'E02004257',
        '7AW' => 'E02004257',
        '7AX' => 'E02004257',
        '7AY' => 'E02004257',
        '7AZ' => 'E02004257',
        '7BA' => 'E02004257',
        '7BB' => 'E02004257',
        '7BD' => 'E02004257',
        '7BE' => 'E02004257',
        '7BF' => 'E02004257',
        '7BG' => 'E02004257',
        '7BH' => 'E02004257',
        '7BJ' => 'E02004257',
        '7BL' => 'E02004257',
        '8AA' => 'E02004257',
        '8AB' => 'E02004257',
        '8AD' => 'E02004257',
        '8AE' => 'E02004257',
        '8AF' => 'E02004257',
        '8AG' => 'E02004257',
        '8AH' => 'E02004257',
        '8AJ' => 'E02004257',
        '8AL' => 'E02004257',
        '8AN' => 'E02004257',
        '8AP' => 'E02004257',
        '8AQ' => 'E02004257',
        '8AR' => 'E02004257',
        '8AS' => 'E02004257',
        '8AT' => 'E02004257',
        '8AU' => 'E02004257',
        '8AW' => 'E02004257',
        '8AX' => 'E02004257',
        '8AY' => 'E02004257',
        '8AZ' => 'E02004257',
        '8BA' => 'E02004257',
        '8BB' => 'E02004257',
        '8BD' => 'E02004257',
        '8BE' => 'E02004257',
        '8BF' => 'E02004257',
        '8BG' => 'E02004257',
        '8BH' => 'E02004257',
        '8BJ' => 'E02004257',
        '8BL' => 'E02004257',
        '8BN' => 'E02004257',
        '8BP' => 'E02004257',
        '8BQ' => 'E02004257',
        '8BS' => 'E02004257',
        '8BT' => 'E02004257',
        '8BU' => 'E02006676',
        '8BW' => 'E02004257',
        '8BX' => 'E02006676',
        '8BY' => 'E02004257',
        '8BZ' => 'E02004257',
        '8DA' => 'E02004259',
        '8DB' => 'E02004257',
        '8DD' => 'E02004257',
        '8DE' => 'E02004257',
        '8DF' => 'E02004257',
        '8DG' => 'E02004257',
        '8DH' => 'E02004257',
        '8DJ' => 'E02004257',
        '8DL' => 'E02004257',
        '8DN' => 'E02004257',
        '8DP' => 'E02004257',
        '8DQ' => 'E02004257',
        '8DR' => 'E02004257',
        '8DS' => 'E02004257',
        '8DT' => 'E02004257',
        '8DU' => 'E02004257',
        '8DW' => 'E02004257',
        '8DX' => 'E02004257',
        '8DY' => 'E02004257',
        '8DZ' => 'E02004257',
        '8EA' => 'E02004257',
        '8EB' => 'E02004257',
        '8ED' => 'E02004257',
        '8EE' => 'E02004257',
        '8EF' => 'E02004257',
        '8EG' => 'E02004257',
        '8EH' => 'E02004257',
        '8EJ' => 'E02004257',
        '8EL' => 'E02004257',
        '8EN' => 'E02004257',
        '8EP' => 'E02004257',
        '8EQ' => 'E02004257',
        '8ER' => 'E02004257',
        '8ES' => 'E02004257',
        '8ET' => 'E02004257',
        '8EU' => 'E02004257',
        '8EW' => 'E02004257',
        '8EX' => 'E02004257',
        '8EY' => 'E02004257',
        '8EZ' => 'E02004257',
        '8FA' => 'E02004257',
        '8FB' => 'E02004257',
        '8FD' => 'E02004257',
        '8FE' => 'E02004257',
        '8FF' => 'E02004257',
        '8FG' => 'E02004257',
        '8FH' => 'E02004257',
        '8FJ' => 'E02004257',
        '8FL' => 'E02004257',
        '8FN' => 'E02004257',
        '8FP' => 'E02004257',
        '8FQ' => 'E02004257',
        '8FR' => 'E02004257',
        '8FS' => 'E02004257',
        '8FT' => 'E02004257',
        '8FU' => 'E02004257',
        '8FW' => 'E02004257',
        '8FX' => 'E02004257',
        '8FY' => 'E02004257',
        '8FZ' => 'E02004257',
        '8GA' => 'E02004257',
        '8GB' => 'E02004257',
        '8GD' => 'E02004257',
        '8GE' => 'E02004257',
        '8GF' => 'E02004257',
        '8GG' => 'E02004257',
        '8GH' => 'E02004257',
        '8GJ' => 'E02004257',
        '8GL' => 'E02004257',
        '8GN' => 'E02004257',
        '8GP' => 'E02004257',
        '8GQ' => 'E02004257',
        '8GR' => 'E02004257',
        '8GS' => 'E02004257',
        '8GT' => 'E02004257',
        '8GU' => 'E02004256',
        '8GW' => 'E02004257',
        '8GX' => 'E02004257',
        '8GY' => 'E02004257',
        '8GZ' => 'E02004257',
        '8HA' => 'E02004257',
        '8HB' => 'E02004257',
        '8HD' => 'E02004257',
        '8HE' => 'E02004257',
        '8HF' => 'E02004257',
        '8HG' => 'E02004257',
        '8HH' => 'E02004257',
        '8HJ' => 'E02004257',
        '8HL' => 'E02004257',
        '8HN' => 'E02004257',
        '8HP' => 'E02004257',
        '8HQ' => 'E02004257',
        '8HR' => 'E02004257',
        '8HS' => 'E02004257',
        '8HT' => 'E02004257',
        '8HU' => 'E02004257',
        '8HW' => 'E02004257',
        '8HX' => 'E02004257',
        '8HY' => 'E02004257',
        '8HZ' => 'E02004257',
        '8JA' => 'E02004257',
        '8JB' => 'E02004257',
        '8JD' => 'E02004257',
        '8JE' => 'E02004257',
        '8JF' => 'E02004257',
        '8JG' => 'E02004257',
        '8JH' => 'E02004257',
        '8JJ' => 'E02004257',
        '8JL' => 'E02004257',
        '8JN' => 'E02004257',
        '8JP' => 'E02004257',
        '8JQ' => 'E02004257',
        '8JR' => 'E02004257',
        '8JS' => 'E02004257',
        '8JT' => 'E02004257',
        '8JU' => 'E02004257',
        '8JW' => 'E02004257',
        '8JX' => 'E02004257',
        '8JY' => 'E02004257',
        '8JZ' => 'E02004257',
        '8LA' => 'E02004257',
        '8LB' => 'E02004257',
        '8LD' => 'E02004257',
        '8LE' => 'E02004257',
        '8LF' => 'E02004257',
        '8LG' => 'E02004257',
        '8LH' => 'E02004257',
        '8LJ' => 'E02004257',
        '8LL' => 'E02004257',
        '8LN' => 'E02004257',
        '8LP' => 'E02004257',
        '8LQ' => 'E02004257',
        '8LR' => 'E02004257',
        '8LS' => 'E02004257',
        '8LT' => 'E02004257',
        '8LU' => 'E02004257',
        '8LW' => 'E02004257',
        '8LX' => 'E02004257',
        '8LY' => 'E02004257',
        '8LZ' => 'E02004257',
        '8NA' => 'E02004257',
        '8NB' => 'E02004257',
        '8ND' => 'E02004257',
        '8NE' => 'E02004257',
        '8NF' => 'E02004257',
        '8NG' => 'E02004257',
        '8NH' => 'E02004257',
        '8NJ' => 'E02004257',
        '8NL' => 'E02004257',
        '8NN' => 'E02004257',
        '8NP' => 'E02004257',
        '8NQ' => 'E02004257',
        '8NR' => 'E02004257',
        '8NS' => 'E02004257',
        '8NT' => 'E02004257',
        '8NU' => 'E02004257',
        '8NW' => 'E02004257',
        '8NX' => 'E02004257',
        '8NY' => 'E02004257',
        '8NZ' => 'E02004257',
        '8PA' => 'E02004257',
        '8PB' => 'E02004257',
        '8PD' => 'E02004257',
        '8PE' => 'E02004257',
        '8PF' => 'E02004257',
        '8PG' => 'E02004257',
        '8PH' => 'E02004257',
        '8PJ' => 'E02004257',
        '8PL' => 'E02004257',
        '8PN' => 'E02004257',
        '8PP' => 'E02004257',
        '8PQ' => 'E02004257',
        '8PR' => 'E02004257',
        '8PS' => 'E02004257',
        '8PT' => 'E02004257',
        '8PU' => 'E02004257',
        '8PW' => 'E02004257',
        '8PX' => 'E02004257',
        '8PY' => 'E02004257',
        '8PZ' => 'E02004257',
        '8QA' => 'E02004257',
        '8QB' => 'E02004259',
        '8QD' => 'E02004257',
        '8QE' => 'E02006676',
        '8QF' => 'E02006676',
        '8QG' => 'E02006676',
        '8QH' => 'E02004257',
        '8QJ' => 'E02004257',
        '8QL' => 'E02004257',
        '8QN' => 'E02004257',
        '8QP' => 'E02004257',
        '8QQ' => 'E02004257',
        '8QR' => 'E02004257',
        '8QS' => 'E02004257',
        '8QT' => 'E02004257',
        '8QU' => 'E02004257',
        '8QW' => 'E02004257',
        '8QX' => 'E02004257',
        '8QY' => 'E02004257',
        '8QZ' => 'E02004257',
        '8RA' => 'E02004257',
        '8RB' => 'E02004257',
        '8RD' => 'E02004257',
        '8RE' => 'E02004257',
        '8RF' => 'E02004257',
        '8RG' => 'E02004257',
        '8RH' => 'E02004257',
        '8RJ' => 'E02004257',
        '8RL' => 'E02004257',
        '8RN' => 'E02004257',
        '8RP' => 'E02004257',
        '8RQ' => 'E02004257',
        '8RR' => 'E02004257',
        '8RS' => 'E02004257',
        '8RT' => 'E02004257',
        '8RU' => 'E02004257',
        '8RW' => 'E02004257',
        '8RX' => 'E02004257',
        '8RY' => 'E02004257',
        '8RZ' => 'E02004257',
        '8SB' => 'E02004257',
        '8SD' => 'E02004257',
        '8SE' => 'E02004257',
        '8SF' => 'E02004257',
        '8SG' => 'E02004257',
        '8SH' => 'E02004257',
        '8SJ' => 'E02004257',
        '8SL' => 'E02004257',
        '8SN' => 'E02004257',
        '8SP' => 'E02004257',
        '8SQ' => 'E02004257',
        '8SR' => 'E02004257',
        '8SS' => 'E02004257',
        '8ST' => 'E02004257',
        '8SU' => 'E02004257',
        '8SW' => 'E02004257',
        '8SX' => 'E02004257',
        '8SY' => 'E02004257',
        '8TA' => 'E02004257',
        '8TB' => 'E02004257',
        '8TD' => 'E02004257',
        '8TE' => 'E02004257',
        '8TF' => 'E02004257',
        '8TG' => 'E02004257',
        '8TQ' => 'E02004257',
        '8WQ' => 'E02004257',
        '8WR' => 'E02004257',
        '8WS' => 'E02004257',
        '8WT' => 'E02004257',
        '8WU' => 'E02004257',
        '8WX' => 'E02004257',
        '8WY' => 'E02004257',
        '8WZ' => 'E02004257',
        '8XN' => 'E02004257',
        '8XQ' => 'E02004257',
        '8YA' => 'E02004257',
        '8YB' => 'E02004257',
        '8YF' => 'E02004257',
        '8YG' => 'E02004257',
        '8YN' => 'E02004257',
        '8ZN' => 'E02004257',
        '8ZQ' => 'E02004257',
        '8ZT' => 'E02004257',
        '9AA' => 'E02006676',
        '9AB' => 'E02006676',
        '9AD' => 'E02006665',
        '9AE' => 'E02006665',
        '9AF' => 'E02006665',
        '9AG' => 'E02006665',
        '9AH' => 'E02006665',
        '9AJ' => 'E02006665',
        '9AL' => 'E02006665',
        '9AN' => 'E02006665',
        '9AP' => 'E02006665',
        '9AQ' => 'E02006665',
        '9AR' => 'E02006665',
        '9AS' => 'E02006665',
        '9AT' => 'E02006665',
        '9AU' => 'E02006665',
        '9AW' => 'E02006665',
        '9AX' => 'E02006665',
        '9AY' => 'E02006665',
        '9AZ' => 'E02006665',
        '9BA' => 'E02006665',
        '9BB' => 'E02006676',
        '9BD' => 'E02006676',
        '9BE' => 'E02006665',
        '9BF' => 'E02004257',
        '9BG' => 'E02006665',
        '9BH' => 'E02006665',
        '9BJ' => 'E02006665',
        '9BL' => 'E02006665',
        '9BN' => 'E02006665',
        '9BP' => 'E02006676',
        '9BQ' => 'E02006665',
        '9BS' => 'E02006676',
        '9BT' => 'E02004256',
        '9BU' => 'E02006665',
        '9BW' => 'E02006676',
        '9BX' => 'E02004256',
        '9BY' => 'E02006676',
        '9BZ' => 'E02006676',
        '9DA' => 'E02006676',
        '9DB' => 'E02006676',
        '9DD' => 'E02006676',
        '9DE' => 'E02006676',
        '9DF' => 'E02006676',
        '9DG' => 'E02006676',
        '9DH' => 'E02006676',
        '9DJ' => 'E02006676',
        '9DL' => 'E02006676',
        '9DN' => 'E02006676',
        '9DP' => 'E02006676',
        '9DQ' => 'E02006676',
        '9DR' => 'E02006676',
        '9DS' => 'E02006676',
        '9DT' => 'E02006676',
        '9DU' => 'E02006676',
        '9DW' => 'E02006676',
        '9DX' => 'E02006676',
        '9DY' => 'E02006676',
        '9DZ' => 'E02006676',
        '9EA' => 'E02006676',
        '9EB' => 'E02006676',
        '9ED' => 'E02006676',
        '9EE' => 'E02006676',
        '9EF' => 'E02006676',
        '9EG' => 'E02006676',
        '9EH' => 'E02006676',
        '9EJ' => 'E02006676',
        '9EL' => 'E02006676',
        '9EN' => 'E02006676',
        '9EP' => 'E02006676',
        '9EQ' => 'E02006676',
        '9ER' => 'E02006676',
        '9ES' => 'E02006676',
        '9ET' => 'E02006676',
        '9EU' => 'E02006665',
        '9EW' => 'E02006676',
        '9EX' => 'E02006676',
        '9EY' => 'E02006676',
        '9EZ' => 'E02006676',
        '9HA' => 'E02004257',
        '9HB' => 'E02004257',
        '9HD' => 'E02004257',
        '9HE' => 'E02004256',
        '9HF' => 'E02004256',
        '9HG' => 'E02006665',
        '9HH' => 'E02006676',
        '9HJ' => 'E02004256',
        '9HL' => 'E02004256',
        '9HN' => 'E02004256',
        '9HP' => 'E02004256',
        '9HQ' => 'E02006665',
        '9HR' => 'E02004256',
        '9HS' => 'E02004256',
        '9HT' => 'E02004256',
        '9HU' => 'E02004256',
        '9HW' => 'E02004256',
        '9HX' => 'E02004256',
        '9HY' => 'E02004256',
        '9HZ' => 'E02004256',
        '9JA' => 'E02006665',
        '9JB' => 'E02006665',
        '9JD' => 'E02006665',
        '9JE' => 'E02006665',
        '9JF' => 'E02006665',
        '9JG' => 'E02006665',
        '9JH' => 'E02006665',
        '9JJ' => 'E02006665',
        '9JL' => 'E02006665',
        '9JN' => 'E02006665',
        '9JP' => 'E02006665',
        '9JQ' => 'E02006665',
        '9JR' => 'E02006665',
        '9JS' => 'E02006665',
        '9JT' => 'E02006665',
        '9JU' => 'E02006665',
        '9JW' => 'E02006665',
        '9JX' => 'E02006665',
        '9JY' => 'E02004257',
        '9JZ' => 'E02004257',
        '9LA' => 'E02004259',
        '9LB' => 'E02004257',
        '9LD' => 'E02004256',
        '9LE' => 'E02004256',
        '9LF' => 'E02004256',
        '9LG' => 'E02006676',
        '9LH' => 'E02006676',
        '9LJ' => 'E02006676',
        '9LL' => 'E02006676',
        '9LP' => 'E02006676',
        '9LQ' => 'E02006676',
        '9LR' => 'E02006676',
        '9LS' => 'E02006676',
        '9LT' => 'E02006676',
        '9LU' => 'E02004256',
        '9LW' => 'E02006676',
        '9LX' => 'E02006676',
        '9LY' => 'E02006676',
        '9LZ' => 'E02006676',
        '9NA' => 'E02006676',
        '9NB' => 'E02006676',
        '9ND' => 'E02006676',
        '9NE' => 'E02006676',
        '9NF' => 'E02006676',
        '9NG' => 'E02006676',
        '9NH' => 'E02006676',
        '9NJ' => 'E02006676',
        '9NL' => 'E02006676',
        '9NN' => 'E02004256',
        '9NP' => 'E02004256',
        '9NQ' => 'E02006676',
        '9NR' => 'E02004256',
        '9NS' => 'E02004256',
        '9NT' => 'E02004256',
        '9NU' => 'E02004256',
        '9NW' => 'E02004256',
        '9NX' => 'E02004256',
        '9NY' => 'E02004256',
        '9NZ' => 'E02004256',
        '9PA' => 'E02004256',
        '9PB' => 'E02004256',
        '9PD' => 'E02004256',
        '9PE' => 'E02004256',
        '9PF' => 'E02004256',
        '9PG' => 'E02004256',
        '9PH' => 'E02004256',
        '9PJ' => 'E02004256',
        '9PL' => 'E02004256',
        '9PN' => 'E02004256',
        '9PP' => 'E02004256',
        '9PQ' => 'E02004256',
        '9PR' => 'E02004256',
        '9PS' => 'E02004256',
        '9PT' => 'E02004256',
        '9PU' => 'E02004256',
        '9PW' => 'E02004256',
        '9PX' => 'E02004256',
        '9PY' => 'E02004256',
        '9PZ' => 'E02004256',
        '9QA' => 'E02004256',
        '9QB' => 'E02004256',
        '9QD' => 'E02004257',
        '9QE' => 'E02004259',
        '9QF' => 'E02004256',
        '9QG' => 'E02004256',
        '9QH' => 'E02004256',
        '9QJ' => 'E02004257',
        '9QL' => 'E02004256',
        '9QN' => 'E02004256',
        '9QP' => 'E02006665',
        '9QQ' => 'E02004256',
        '9QR' => 'E02006665',
        '9QS' => 'E02004257',
        '9QT' => 'E02004257',
        '9RA' => 'E02004257',
        '9RF' => 'E02004257',
        '9RG' => 'E02004257',
        '9RH' => 'E02006665',
        '9RJ' => 'E02006665',
        '9RL' => 'E02004257',
        '9RN' => 'E02004256',
        '9RP' => 'E02004257',
        '9RQ' => 'E02006665',
        '9RR' => 'E02006665',
        '9RS' => 'E02006665',
        '9RT' => 'E02004257',
        '9RU' => 'E02004257',
        '9RW' => 'E02006665',
        '9RX' => 'E02004257',
        '9SY' => 'E02004257',
        '9SZ' => 'E02004257',
        '9WA' => 'E02004257',
        '9WB' => 'E02004257',
        '9WL' => 'E02004257',
        '9WN' => 'E02004257',
        '9WP' => 'E02004257',
        '9WQ' => 'E02004257',
        '9WR' => 'E02004257',
        '9WS' => 'E02004257',
        '9WU' => 'E02004257',
        '9WX' => 'E02004257',
        '9WY' => 'E02004257',
        '9WZ' => 'E02004257',
        '9XJ' => 'E02004257',
        '9XL' => 'E02004257',
        '9XN' => 'E02004257',
        '9XQ' => 'E02004257',
        '9XZ' => 'E02004257',
        '9YA' => 'E02004256',
        '9YD' => 'E02004256',
        '9ZQ' => 'E02004257',
        '9ZW' => 'E02004257',
        '9ZX' => 'E02004257',
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
