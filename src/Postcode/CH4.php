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
final class CH4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0EJ' => 'E02003802',
        '0WB' => 'E02003802',
        '0WD' => 'E02003802',
        '0WF' => 'E02003802',
        '0WG' => 'E02003802',
        '0WH' => 'E02003802',
        '0WR' => 'E02003802',
        '0WU' => 'E02003802',
        '0YH' => 'E02003802',
        '0YJ' => 'E02003802',
        '0ZA' => 'E02003802',
        '0ZD' => 'E02003802',
        '0ZE' => 'E02003802',
        '0ZF' => 'E02003802',
        '0ZG' => 'E02003802',
        '0ZH' => 'E02003802',
        '0ZJ' => 'E02003802',
        '0ZL' => 'E02003802',
        '0ZP' => 'E02003802',
        '0ZT' => 'E02003802',
        '0ZU' => 'E02003802',
        '0ZW' => 'E02003802',
        '0ZY' => 'E02003802',
        '7AB' => 'E02003807',
        '7AD' => 'E02003807',
        '7AE' => 'E02003807',
        '7AF' => 'E02003807',
        '7AG' => 'E02003807',
        '7AH' => 'E02003807',
        '7AJ' => 'E02003807',
        '7AL' => 'E02003807',
        '7AN' => 'E02003807',
        '7AP' => 'E02003807',
        '7AQ' => 'E02003807',
        '7AR' => 'E02003807',
        '7AS' => 'E02003807',
        '7AT' => 'E02003807',
        '7AU' => 'E02003807',
        '7AW' => 'E02003807',
        '7AX' => 'E02003807',
        '7AY' => 'E02003807',
        '7AZ' => 'E02003807',
        '7BA' => 'E02003807',
        '7BB' => 'E02003807',
        '7BD' => 'E02003807',
        '7BE' => 'E02003807',
        '7BF' => 'E02003808',
        '7BG' => 'E02003807',
        '7BH' => 'E02003807',
        '7BJ' => 'E02003807',
        '7BL' => 'E02003807',
        '7BN' => 'E02003807',
        '7BP' => 'E02003807',
        '7BQ' => 'E02003807',
        '7BR' => 'E02003807',
        '7BS' => 'E02003807',
        '7BT' => 'E02003807',
        '7BU' => 'E02003807',
        '7BW' => 'E02003807',
        '7BX' => 'E02003807',
        '7BY' => 'E02003807',
        '7BZ' => 'E02003807',
        '7DA' => 'E02003807',
        '7DB' => 'E02003807',
        '7DD' => 'E02003807',
        '7DE' => 'E02003807',
        '7DF' => 'E02003807',
        '7DG' => 'E02003807',
        '7DH' => 'E02003807',
        '7DL' => 'E02003807',
        '7DN' => 'E02003807',
        '7DP' => 'E02003807',
        '7DR' => 'E02003807',
        '7DS' => 'E02003807',
        '7DT' => 'E02003807',
        '7DU' => 'E02003807',
        '7DW' => 'E02003807',
        '7DX' => 'E02003807',
        '7DY' => 'E02003807',
        '7DZ' => 'E02003807',
        '7EA' => 'E02003807',
        '7EB' => 'E02003807',
        '7ED' => 'E02003807',
        '7EE' => 'E02003807',
        '7EF' => 'E02003807',
        '7EG' => 'E02003807',
        '7EH' => 'E02003807',
        '7EJ' => 'E02003807',
        '7EL' => 'E02003807',
        '7EN' => 'E02003807',
        '7EP' => 'E02003807',
        '7EQ' => 'E02003807',
        '7ER' => 'E02003807',
        '7ES' => 'E02003807',
        '7ET' => 'E02003807',
        '7EU' => 'E02003807',
        '7EW' => 'E02003807',
        '7EX' => 'E02003807',
        '7EY' => 'E02003807',
        '7EZ' => 'E02003807',
        '7HB' => 'E02003807',
        '7HD' => 'E02003807',
        '7HE' => 'E02003802',
        '7HG' => 'E02003807',
        '7HH' => 'E02003807',
        '7HJ' => 'E02003807',
        '7HL' => 'E02003807',
        '7HN' => 'E02003807',
        '7HP' => 'E02003807',
        '7HR' => 'E02003807',
        '7HS' => 'E02003807',
        '7HT' => 'E02003807',
        '7HW' => 'E02003807',
        '7HX' => 'E02003807',
        '7HY' => 'E02003807',
        '7JB' => 'E02003807',
        '7JD' => 'E02003807',
        '7JE' => 'E02003807',
        '7JF' => 'E02003807',
        '7JG' => 'E02003807',
        '7JH' => 'E02003807',
        '7JJ' => 'E02003807',
        '7JN' => 'E02003807',
        '7JP' => 'E02003807',
        '7JQ' => 'E02003807',
        '7JR' => 'E02003807',
        '7JS' => 'E02003807',
        '7JT' => 'E02003807',
        '7JU' => 'E02003807',
        '7JW' => 'E02003807',
        '7JY' => 'E02003807',
        '7JZ' => 'E02003807',
        '7LA' => 'E02003807',
        '7LB' => 'E02003807',
        '7LD' => 'E02003807',
        '7LE' => 'E02003807',
        '7LF' => 'E02003807',
        '7LG' => 'E02003807',
        '7LH' => 'E02003807',
        '7LJ' => 'E02003807',
        '7LL' => 'E02003807',
        '7LN' => 'E02003808',
        '7LP' => 'E02003807',
        '7LQ' => 'E02003807',
        '7LR' => 'E02003807',
        '7LS' => 'E02003808',
        '7LT' => 'E02003807',
        '7LU' => 'E02003807',
        '7LW' => 'E02003807',
        '7LX' => 'E02003808',
        '7LY' => 'E02003807',
        '7LZ' => 'E02003808',
        '7NA' => 'E02003807',
        '7NB' => 'E02003808',
        '7ND' => 'E02003807',
        '7NE' => 'E02003808',
        '7NF' => 'E02003808',
        '7NG' => 'E02003808',
        '7NH' => 'E02003807',
        '7NJ' => 'E02003808',
        '7NN' => 'E02003808',
        '7NP' => 'E02003808',
        '7NQ' => 'E02003808',
        '7NW' => 'E02003808',
        '7PA' => 'E02003808',
        '7PB' => 'E02003808',
        '7PD' => 'E02003808',
        '7PE' => 'E02003808',
        '7PF' => 'E02003808',
        '7PG' => 'E02003807',
        '7PH' => 'E02003808',
        '7PJ' => 'E02003808',
        '7PL' => 'E02003807',
        '7PN' => 'E02003807',
        '7PQ' => 'E02003807',
        '7PR' => 'E02003807',
        '7PS' => 'E02003807',
        '7PT' => 'E02003807',
        '7PU' => 'E02003807',
        '7PW' => 'E02003807',
        '7QA' => 'E02003807',
        '7QB' => 'E02003807',
        '7QD' => 'E02003807',
        '7QE' => 'E02003807',
        '7QF' => 'E02003807',
        '7QG' => 'E02003809',
        '7QH' => 'E02003807',
        '7QJ' => 'E02003807',
        '7QL' => 'E02003809',
        '7QN' => 'E02003807',
        '7QP' => 'E02003807',
        '7QQ' => 'E02003807',
        '7QR' => 'E02003807',
        '7QS' => 'E02003807',
        '7QT' => 'E02003807',
        '7QU' => 'E02003807',
        '7QW' => 'E02003807',
        '7QX' => 'E02003807',
        '7QY' => 'E02003807',
        '7QZ' => 'E02003807',
        '7RA' => 'E02003807',
        '7RB' => 'E02003807',
        '7RD' => 'E02003807',
        '7RE' => 'E02003807',
        '7RF' => 'E02003807',
        '7RG' => 'E02003807',
        '7RH' => 'E02003807',
        '7RJ' => 'E02003807',
        '7RL' => 'E02003807',
        '7RN' => 'E02003807',
        '7RQ' => 'E02003807',
        '7WA' => 'E02003802',
        '7WB' => 'E02003802',
        '7WD' => 'E02003807',
        '7WE' => 'E02003802',
        '7WF' => 'E02003802',
        '7WG' => 'E02003802',
        '7WH' => 'E02003807',
        '7WJ' => 'E02003807',
        '7WL' => 'E02003807',
        '7WN' => 'E02003807',
        '7WP' => 'E02003807',
        '7WQ' => 'E02003807',
        '7WR' => 'E02003802',
        '7WS' => 'E02003807',
        '7WT' => 'E02003807',
        '7WU' => 'E02003807',
        '7WW' => 'E02003807',
        '7WX' => 'E02003807',
        '7WY' => 'E02003807',
        '7WZ' => 'E02003802',
        '7XG' => 'E02003802',
        '7XR' => 'E02003802',
        '7XS' => 'E02003802',
        '7YB' => 'E02003802',
        '7YJ' => 'E02003802',
        '7YR' => 'E02003802',
        '7ZA' => 'E02003802',
        '7ZB' => 'E02003802',
        '7ZD' => 'E02003807',
        '7ZE' => 'E02003807',
        '7ZF' => 'E02003802',
        '7ZG' => 'E02003807',
        '7ZH' => 'E02003802',
        '7ZJ' => 'E02003807',
        '7ZL' => 'E02003802',
        '7ZN' => 'E02003802',
        '7ZP' => 'E02003807',
        '7ZQ' => 'E02003802',
        '7ZR' => 'E02003802',
        '7ZS' => 'E02003802',
        '7ZT' => 'E02003802',
        '7ZW' => 'E02003802',
        '8AA' => 'E02003807',
        '8AB' => 'E02003807',
        '8AD' => 'E02003807',
        '8AE' => 'E02003807',
        '8AF' => 'E02003807',
        '8AG' => 'E02003807',
        '8AH' => 'E02003807',
        '8AJ' => 'E02003807',
        '8AL' => 'E02003807',
        '8AN' => 'E02003807',
        '8AP' => 'E02003807',
        '8AQ' => 'E02003807',
        '8AR' => 'E02003807',
        '8AS' => 'E02003807',
        '8AT' => 'E02003807',
        '8AU' => 'E02003807',
        '8AW' => 'E02003807',
        '8AX' => 'E02003807',
        '8AY' => 'E02003807',
        '8AZ' => 'E02003807',
        '8BA' => 'E02003808',
        '8BB' => 'E02003807',
        '8BD' => 'E02003807',
        '8BE' => 'E02003807',
        '8BG' => 'E02003807',
        '8BH' => 'E02003807',
        '8BJ' => 'E02003807',
        '8BL' => 'E02003808',
        '8BN' => 'E02003807',
        '8BP' => 'E02003807',
        '8BQ' => 'E02003807',
        '8BR' => 'E02003808',
        '8BS' => 'E02003808',
        '8BU' => 'E02003808',
        '8BW' => 'E02003807',
        '8BX' => 'E02003808',
        '8BY' => 'E02003808',
        '8BZ' => 'E02003808',
        '8DA' => 'E02003808',
        '8DB' => 'E02003808',
        '8DD' => 'E02003808',
        '8DE' => 'E02003808',
        '8DF' => 'E02003808',
        '8DG' => 'E02003808',
        '8DH' => 'E02003808',
        '8DJ' => 'E02003808',
        '8DL' => 'E02003808',
        '8DN' => 'E02003808',
        '8DP' => 'E02003808',
        '8DQ' => 'E02003808',
        '8DR' => 'E02003808',
        '8DS' => 'E02003808',
        '8DT' => 'E02003808',
        '8DU' => 'E02003808',
        '8DW' => 'E02003808',
        '8DX' => 'E02003808',
        '8DY' => 'E02003808',
        '8DZ' => 'E02003808',
        '8EA' => 'E02003808',
        '8EB' => 'E02003808',
        '8ED' => 'E02003808',
        '8EE' => 'E02003808',
        '8EF' => 'E02003808',
        '8EG' => 'E02003808',
        '8EH' => 'E02003808',
        '8EJ' => 'E02003808',
        '8EL' => 'E02003808',
        '8EN' => 'E02003808',
        '8EP' => 'E02003808',
        '8EQ' => 'E02003808',
        '8ER' => 'E02003808',
        '8ES' => 'E02003808',
        '8ET' => 'E02003808',
        '8EU' => 'E02003808',
        '8EW' => 'E02003808',
        '8EX' => 'E02003808',
        '8EY' => 'E02003808',
        '8EZ' => 'E02003808',
        '8HE' => 'E02003808',
        '8HF' => 'E02003808',
        '8HH' => 'E02003808',
        '8HJ' => 'E02003808',
        '8HL' => 'E02003808',
        '8HN' => 'E02003808',
        '8HR' => 'E02003808',
        '8HS' => 'E02003808',
        '8HT' => 'E02003808',
        '8HW' => 'E02003808',
        '8HX' => 'E02003808',
        '8HY' => 'E02003808',
        '8HZ' => 'E02003808',
        '8JA' => 'E02003807',
        '8JB' => 'E02003807',
        '8JD' => 'E02003807',
        '8JE' => 'E02003807',
        '8JF' => 'E02003807',
        '8JG' => 'E02003807',
        '8JH' => 'E02003807',
        '8JJ' => 'E02003807',
        '8JL' => 'E02003807',
        '8JN' => 'E02003807',
        '8JP' => 'E02003807',
        '8JQ' => 'E02003807',
        '8JR' => 'E02003808',
        '8JS' => 'E02003807',
        '8JU' => 'E02003807',
        '8JW' => 'E02003807',
        '8JX' => 'E02003807',
        '8JY' => 'E02003807',
        '8JZ' => 'E02003807',
        '8LB' => 'E02003807',
        '8LD' => 'E02003807',
        '8LE' => 'E02003807',
        '8LF' => 'E02003807',
        '8LL' => 'E02003807',
        '8LN' => 'E02003808',
        '8LP' => 'E02003808',
        '8LS' => 'E02003808',
        '8LU' => 'E02003808',
        '8LX' => 'E02003808',
        '8LY' => 'E02003808',
        '8LZ' => 'E02003808',
        '8ND' => 'E02003808',
        '8NE' => 'E02003808',
        '8NF' => 'E02003808',
        '8NG' => 'E02003808',
        '8NL' => 'E02003808',
        '8NN' => 'E02003808',
        '8NP' => 'E02003808',
        '8NQ' => 'E02003808',
        '8NR' => 'E02003808',
        '8NS' => 'E02003808',
        '8NT' => 'E02003802',
        '8NU' => 'E02003808',
        '8NW' => 'E02003808',
        '8NX' => 'E02003808',
        '8NY' => 'E02003808',
        '8NZ' => 'E02003808',
        '8PA' => 'E02003807',
        '8PD' => 'E02003808',
        '8PE' => 'E02003808',
        '8PF' => 'E02003808',
        '8PG' => 'E02003808',
        '8PH' => 'E02003808',
        '8PJ' => 'E02003808',
        '8PL' => 'E02003808',
        '8PN' => 'E02003808',
        '8PP' => 'E02003808',
        '8PQ' => 'E02003808',
        '8PR' => 'E02003808',
        '8PS' => 'E02003808',
        '8PT' => 'E02003808',
        '8PU' => 'E02003808',
        '8PW' => 'E02003808',
        '8PX' => 'E02003808',
        '8PZ' => 'E02003808',
        '8QA' => 'E02003808',
        '8QD' => 'E02003808',
        '8QU' => 'E02003808',
        '8QX' => 'E02003808',
        '8RA' => 'E02003808',
        '8RD' => 'E02003808',
        '8WA' => 'E02003802',
        '8WB' => 'E02003802',
        '8WD' => 'E02003802',
        '8WE' => 'E02003802',
        '8WF' => 'E02003802',
        '8WG' => 'E02003802',
        '8WH' => 'E02003802',
        '8WJ' => 'E02003802',
        '8WL' => 'E02003802',
        '8WP' => 'E02003802',
        '8WQ' => 'E02003802',
        '8WR' => 'E02003802',
        '8WS' => 'E02003802',
        '8WT' => 'E02003802',
        '8WU' => 'E02003802',
        '8WW' => 'E02003802',
        '8WX' => 'E02003802',
        '8WY' => 'E02003802',
        '8WZ' => 'E02003802',
        '8XA' => 'E02003808',
        '8XB' => 'E02003802',
        '8XD' => 'E02003802',
        '8XE' => 'E02003802',
        '8YA' => 'E02003802',
        '8YB' => 'E02003802',
        '8YD' => 'E02003802',
        '8YE' => 'E02003802',
        '8YF' => 'E02003808',
        '8YG' => 'E02003802',
        '8YH' => 'E02003802',
        '8YJ' => 'E02003808',
        '8YL' => 'E02003808',
        '8YN' => 'E02003802',
        '8YP' => 'E02003802',
        '8YQ' => 'E02003808',
        '8YR' => 'E02003802',
        '8YS' => 'E02003802',
        '8YT' => 'E02003802',
        '8YU' => 'E02003802',
        '8YW' => 'E02003802',
        '8YX' => 'E02003802',
        '8YY' => 'E02003802',
        '8ZB' => 'E02003802',
        '8ZT' => 'E02003802',
        '8ZU' => 'E02003802',
        '9AD' => 'E02003809',
        '9AE' => 'E02003809',
        '9AF' => 'E02003809',
        '9AG' => 'E02003809',
        '9BW' => 'E02003809',
        '9DE' => 'E02003809',
        '9DF' => 'E02003809',
        '9DG' => 'E02003809',
        '9DH' => 'E02003809',
        '9DJ' => 'E02003809',
        '9DL' => 'E02003809',
        '9DN' => 'E02003809',
        '9DP' => 'E02003809',
        '9DQ' => 'E02003809',
        '9DR' => 'E02003809',
        '9DS' => 'E02003809',
        '9DT' => 'E02003809',
        '9DU' => 'E02003809',
        '9DW' => 'E02003809',
        '9EB' => 'E02003809',
        '9ED' => 'E02003809',
        '9EE' => 'E02003809',
        '9EF' => 'E02003809',
        '9EG' => 'E02003809',
        '9EJ' => 'E02003809',
        '9EL' => 'E02003809',
        '9EN' => 'E02003809',
        '9EP' => 'E02003809',
        '9EQ' => 'E02003809',
        '9ER' => 'E02003809',
        '9ES' => 'E02003809',
        '9ET' => 'E02003809',
        '9EU' => 'E02003809',
        '9EW' => 'E02003809',
        '9EX' => 'E02003809',
        '9EY' => 'E02003809',
        '9EZ' => 'E02003809',
        '9FA' => 'E02003802',
        '9FB' => 'E02003809',
        '9FD' => 'E02003802',
        '9FE' => 'E02003809',
        '9FF' => 'E02003802',
        '9FG' => 'E02003802',
        '9FH' => 'E02003809',
        '9FJ' => 'E02003809',
        '9FL' => 'E02003809',
        '9FN' => 'E02003802',
        '9FP' => 'E02003802',
        '9FQ' => 'E02003802',
        '9FR' => 'E02003809',
        '9FS' => 'E02003809',
        '9GA' => 'E02003809',
        '9GB' => 'E02003809',
        '9GJ' => 'E02003809',
        '9HA' => 'E02003809',
        '9HB' => 'E02003809',
        '9HD' => 'E02003809',
        '9HE' => 'E02003809',
        '9HF' => 'E02003809',
        '9HG' => 'E02003809',
        '9HH' => 'E02003809',
        '9HN' => 'E02003809',
        '9HP' => 'E02003809',
        '9HQ' => 'E02003809',
        '9HT' => 'E02003809',
        '9HU' => 'E02003809',
        '9HW' => 'E02003809',
        '9HY' => 'E02003809',
        '9HZ' => 'E02003809',
        '9JA' => 'E02003809',
        '9JD' => 'E02003809',
        '9JE' => 'E02003809',
        '9JF' => 'E02003809',
        '9JG' => 'E02003809',
        '9JH' => 'E02003809',
        '9JL' => 'E02003809',
        '9JN' => 'E02003809',
        '9JQ' => 'E02003809',
        '9JR' => 'E02003809',
        '9JS' => 'E02003809',
        '9JT' => 'E02003809',
        '9JW' => 'E02003809',
        '9JX' => 'E02003809',
        '9JY' => 'E02003809',
        '9JZ' => 'E02003809',
        '9LB' => 'E02003809',
        '9LD' => 'E02003809',
        '9LE' => 'E02003809',
        '9LF' => 'E02003809',
        '9LG' => 'E02003809',
        '9LH' => 'E02003809',
        '9LJ' => 'E02003809',
        '9LL' => 'E02003809',
        '9LN' => 'E02003809',
        '9LP' => 'E02003809',
        '9LQ' => 'E02003809',
        '9LR' => 'E02003809',
        '9LS' => 'E02003809',
        '9LT' => 'E02003809',
        '9LW' => 'E02003809',
        '9LZ' => 'E02003809',
        '9NA' => 'E02003802',
        '9NB' => 'E02003809',
        '9ND' => 'E02003809',
        '9NE' => 'E02003809',
        '9NF' => 'E02003809',
        '9NG' => 'E02003809',
        '9NH' => 'E02003809',
        '9NJ' => 'E02003809',
        '9NL' => 'E02003809',
        '9NN' => 'E02003809',
        '9NP' => 'E02003809',
        '9NQ' => 'E02003809',
        '9NR' => 'E02003809',
        '9NS' => 'E02003809',
        '9NT' => 'E02003809',
        '9NU' => 'E02003809',
        '9NW' => 'E02003809',
        '9NX' => 'E02003809',
        '9PX' => 'E02003809',
        '9PZ' => 'E02003809',
        '9QA' => 'E02003809',
        '9QB' => 'E02003809',
        '9QD' => 'E02003809',
        '9QE' => 'E02003809',
        '9QF' => 'E02003809',
        '9QG' => 'E02003809',
        '9QH' => 'E02003809',
        '9QJ' => 'E02003809',
        '9QL' => 'E02003809',
        '9QN' => 'E02003809',
        '9QP' => 'E02003809',
        '9QQ' => 'E02003809',
        '9QR' => 'E02003809',
        '9QS' => 'E02003809',
        '9QT' => 'E02003809',
        '9QU' => 'E02003809',
        '9QW' => 'E02003809',
        '9QX' => 'E02003809',
        '9QY' => 'E02003809',
        '9QZ' => 'E02003809',
        '9RA' => 'E02003802',
        '9RD' => 'E02003809',
        '9RE' => 'E02003809',
        '9RF' => 'E02003809',
        '9RW' => 'E02003802',
        '9RX' => 'E02003802',
        '9RY' => 'E02003802',
        '9RZ' => 'E02003802',
        '9TY' => 'E02003802',
        '9UF' => 'E02003802',
        '9UU' => 'E02003802',
        '9UZ' => 'E02003802',
        '9WA' => 'E02003802',
        '9WB' => 'E02003802',
        '9WD' => 'E02003802',
        '9WF' => 'E02003802',
        '9WG' => 'E02003802',
        '9WP' => 'E02003802',
        '9WR' => 'E02003809',
        '9WS' => 'E02003802',
        '9WT' => 'E02003802',
        '9WU' => 'E02003802',
        '9WW' => 'E02003802',
        '9WX' => 'E02003802',
        '9WY' => 'E02003802',
        '9WZ' => 'E02003802',
        '9XS' => 'E02003802',
        '9XU' => 'E02003802',
        '9XY' => 'E02003802',
        '9YH' => 'E02003809',
        '9YQ' => 'E02003802',
        '9ZA' => 'E02003809',
        '9ZB' => 'E02003802',
        '9ZD' => 'E02003809',
        '9ZE' => 'E02003802',
        '9ZF' => 'E02003802',
        '9ZG' => 'E02003809',
        '9ZH' => 'E02003802',
        '9ZJ' => 'E02003802',
        '9ZL' => 'E02003809',
        '9ZN' => 'E02003802',
        '9ZP' => 'E02003802',
        '9ZQ' => 'E02003809',
        '9ZR' => 'E02003802',
        '9ZS' => 'E02003802',
        '9ZT' => 'E02003802',
        '9ZU' => 'E02003802',
        '9ZZ' => 'E02003809',
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