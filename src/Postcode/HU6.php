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
final class HU6
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02002706',
        '0AB' => 'E02002706',
        '0AD' => 'E02002706',
        '0AE' => 'E02002706',
        '0AF' => 'E02002706',
        '0AG' => 'E02002706',
        '0AH' => 'E02002706',
        '0AJ' => 'E02002706',
        '0AL' => 'E02002706',
        '0AN' => 'E02002706',
        '0AP' => 'E02002706',
        '0AQ' => 'E02002706',
        '0AR' => 'E02002706',
        '0AS' => 'E02002703',
        '0AT' => 'E02002706',
        '0AU' => 'E02002706',
        '0AW' => 'E02002706',
        '0DA' => 'E02002706',
        '0YY' => 'E02002706',
        '0YZ' => 'E02002706',
        '7AA' => 'E02002656',
        '7AB' => 'E02002656',
        '7AD' => 'E02002656',
        '7AE' => 'E02002656',
        '7AF' => 'E02002663',
        '7AG' => 'E02002656',
        '7AH' => 'E02002656',
        '7AJ' => 'E02002656',
        '7AL' => 'E02002656',
        '7AN' => 'E02002656',
        '7AP' => 'E02002656',
        '7AQ' => 'E02002656',
        '7AR' => 'E02002656',
        '7AS' => 'E02002656',
        '7AT' => 'E02002656',
        '7AU' => 'E02002656',
        '7AW' => 'E02002656',
        '7AX' => 'E02002656',
        '7AY' => 'E02002656',
        '7AZ' => 'E02002656',
        '7BA' => 'E02002656',
        '7BB' => 'E02002656',
        '7BD' => 'E02002656',
        '7BE' => 'E02002656',
        '7BF' => 'E02002656',
        '7BG' => 'E02002656',
        '7BH' => 'E02002656',
        '7BJ' => 'E02002656',
        '7BL' => 'E02002656',
        '7BN' => 'E02002656',
        '7BP' => 'E02002656',
        '7BQ' => 'E02002656',
        '7BS' => 'E02002656',
        '7BT' => 'E02002656',
        '7BU' => 'E02002656',
        '7BW' => 'E02002656',
        '7BX' => 'E02002656',
        '7BY' => 'E02002656',
        '7BZ' => 'E02002656',
        '7DA' => 'E02002656',
        '7DB' => 'E02002656',
        '7DD' => 'E02002656',
        '7DE' => 'E02002656',
        '7DF' => 'E02002663',
        '7DG' => 'E02002656',
        '7DH' => 'E02002656',
        '7DJ' => 'E02002656',
        '7DL' => 'E02002656',
        '7DN' => 'E02002656',
        '7DP' => 'E02002663',
        '7DQ' => 'E02002656',
        '7DR' => 'E02002656',
        '7DS' => 'E02002656',
        '7DT' => 'E02002663',
        '7DU' => 'E02002663',
        '7DW' => 'E02002663',
        '7DX' => 'E02002656',
        '7DY' => 'E02002656',
        '7DZ' => 'E02002656',
        '7EA' => 'E02002656',
        '7EB' => 'E02002656',
        '7ED' => 'E02002656',
        '7EE' => 'E02002656',
        '7EF' => 'E02002656',
        '7EG' => 'E02002656',
        '7EH' => 'E02002656',
        '7EJ' => 'E02002656',
        '7EL' => 'E02002663',
        '7EN' => 'E02002663',
        '7ER' => 'E02002663',
        '7ES' => 'E02002663',
        '7EX' => 'E02002663',
        '7EY' => 'E02002656',
        '7EZ' => 'E02002656',
        '7FB' => 'E02002663',
        '7FD' => 'E02002663',
        '7FE' => 'E02002663',
        '7GA' => 'E02002663',
        '7GB' => 'E02002663',
        '7HA' => 'E02002663',
        '7HB' => 'E02002663',
        '7HD' => 'E02002656',
        '7HE' => 'E02002656',
        '7HF' => 'E02002663',
        '7HG' => 'E02002663',
        '7HH' => 'E02002656',
        '7HJ' => 'E02002656',
        '7HL' => 'E02002656',
        '7HN' => 'E02002663',
        '7HP' => 'E02002656',
        '7HQ' => 'E02002663',
        '7HR' => 'E02002663',
        '7HS' => 'E02002659',
        '7HT' => 'E02002663',
        '7HW' => 'E02002663',
        '7JA' => 'E02002663',
        '7JD' => 'E02002663',
        '7JF' => 'E02002663',
        '7JG' => 'E02002663',
        '7JH' => 'E02002663',
        '7JJ' => 'E02002663',
        '7JL' => 'E02002663',
        '7JN' => 'E02002663',
        '7JP' => 'E02002663',
        '7JQ' => 'E02002663',
        '7JR' => 'E02002663',
        '7JS' => 'E02002663',
        '7JT' => 'E02002663',
        '7JU' => 'E02002663',
        '7JW' => 'E02002663',
        '7JX' => 'E02002663',
        '7JY' => 'E02002663',
        '7JZ' => 'E02002663',
        '7LD' => 'E02002663',
        '7LE' => 'E02002663',
        '7LG' => 'E02002663',
        '7LH' => 'E02002663',
        '7LJ' => 'E02002663',
        '7LL' => 'E02002663',
        '7LN' => 'E02002663',
        '7LP' => 'E02002663',
        '7LQ' => 'E02002663',
        '7LR' => 'E02002663',
        '7LS' => 'E02002663',
        '7LT' => 'E02002663',
        '7LU' => 'E02002663',
        '7LW' => 'E02002663',
        '7LX' => 'E02002663',
        '7LY' => 'E02002663',
        '7LZ' => 'E02002663',
        '7NA' => 'E02002663',
        '7ND' => 'E02002663',
        '7NE' => 'E02002663',
        '7NF' => 'E02002656',
        '7NG' => 'E02002663',
        '7NH' => 'E02002663',
        '7NX' => 'E02002656',
        '7NY' => 'E02002656',
        '7PA' => 'E02002663',
        '7PB' => 'E02002663',
        '7PE' => 'E02002663',
        '7PF' => 'E02002666',
        '7PG' => 'E02002663',
        '7PH' => 'E02002663',
        '7PJ' => 'E02002663',
        '7PL' => 'E02002663',
        '7PP' => 'E02002666',
        '7PQ' => 'E02002663',
        '7PR' => 'E02002666',
        '7PS' => 'E02002663',
        '7PT' => 'E02002663',
        '7PU' => 'E02002663',
        '7PW' => 'E02002663',
        '7PX' => 'E02002666',
        '7PY' => 'E02002663',
        '7PZ' => 'E02002666',
        '7QA' => 'E02002663',
        '7QB' => 'E02002663',
        '7QD' => 'E02002663',
        '7QE' => 'E02002663',
        '7QF' => 'E02002663',
        '7QH' => 'E02002663',
        '7QJ' => 'E02002663',
        '7QL' => 'E02002663',
        '7QN' => 'E02002663',
        '7QP' => 'E02002663',
        '7QZ' => 'E02002663',
        '7RA' => 'E02002663',
        '7RB' => 'E02002663',
        '7RD' => 'E02002663',
        '7RE' => 'E02002663',
        '7RF' => 'E02002663',
        '7RG' => 'E02002663',
        '7RH' => 'E02002663',
        '7RJ' => 'E02002663',
        '7RL' => 'E02002656',
        '7RN' => 'E02002663',
        '7RP' => 'E02002663',
        '7RQ' => 'E02002663',
        '7RR' => 'E02002663',
        '7RS' => 'E02002663',
        '7RT' => 'E02002663',
        '7RU' => 'E02002663',
        '7RW' => 'E02002663',
        '7RX' => 'E02002663',
        '7RY' => 'E02002663',
        '7RZ' => 'E02002663',
        '7SA' => 'E02002663',
        '7SB' => 'E02002663',
        '7SD' => 'E02002663',
        '7SE' => 'E02002663',
        '7SF' => 'E02002663',
        '7SG' => 'E02002663',
        '7SH' => 'E02002663',
        '7SJ' => 'E02002663',
        '7SL' => 'E02002663',
        '7SN' => 'E02002663',
        '7SP' => 'E02002663',
        '7SR' => 'E02002663',
        '7SS' => 'E02002663',
        '7ST' => 'E02002663',
        '7SU' => 'E02002663',
        '7SW' => 'E02002663',
        '7SX' => 'E02002663',
        '7SY' => 'E02002663',
        '7SZ' => 'E02002663',
        '7TA' => 'E02002663',
        '7TB' => 'E02002663',
        '7TD' => 'E02002663',
        '7TE' => 'E02002663',
        '7TF' => 'E02002663',
        '7TG' => 'E02002663',
        '7TH' => 'E02002663',
        '7TJ' => 'E02002663',
        '7TL' => 'E02002663',
        '7TN' => 'E02002663',
        '7TP' => 'E02002663',
        '7TQ' => 'E02002663',
        '7TR' => 'E02002663',
        '7TS' => 'E02002663',
        '7TT' => 'E02002663',
        '7TU' => 'E02002663',
        '7TW' => 'E02002667',
        '7TX' => 'E02002663',
        '7TY' => 'E02002663',
        '7TZ' => 'E02002663',
        '7UA' => 'E02002663',
        '7UB' => 'E02002659',
        '7UD' => 'E02002663',
        '7UE' => 'E02002659',
        '7UG' => 'E02002659',
        '7UH' => 'E02002659',
        '7UJ' => 'E02002659',
        '7UL' => 'E02002659',
        '7UN' => 'E02002659',
        '7UP' => 'E02002659',
        '7UR' => 'E02002659',
        '7US' => 'E02002663',
        '7UT' => 'E02002656',
        '7UU' => 'E02002656',
        '7UW' => 'E02002663',
        '7UX' => 'E02002656',
        '7UY' => 'E02002659',
        '7UZ' => 'E02002667',
        '7WA' => 'E02002656',
        '7WG' => 'E02002667',
        '7WH' => 'E02002667',
        '7WJ' => 'E02002667',
        '7WL' => 'E02002667',
        '7WN' => 'E02002667',
        '7WP' => 'E02002667',
        '7WQ' => 'E02002667',
        '7WR' => 'E02002667',
        '7WS' => 'E02002667',
        '7WT' => 'E02002663',
        '7WU' => 'E02002667',
        '7WW' => 'E02002667',
        '7WX' => 'E02002667',
        '7WY' => 'E02002667',
        '7WZ' => 'E02002663',
        '7XA' => 'E02002656',
        '7XB' => 'E02002656',
        '7XD' => 'E02002656',
        '7XE' => 'E02002656',
        '7XF' => 'E02002656',
        '7XG' => 'E02002656',
        '7XH' => 'E02002656',
        '7XJ' => 'E02002656',
        '7XL' => 'E02002656',
        '7XN' => 'E02002656',
        '7XP' => 'E02002656',
        '7XQ' => 'E02002656',
        '7XR' => 'E02002667',
        '7XS' => 'E02002667',
        '7XT' => 'E02002667',
        '7XU' => 'E02002667',
        '7XW' => 'E02002667',
        '7XX' => 'E02002667',
        '7XY' => 'E02002656',
        '7XZ' => 'E02002667',
        '7YA' => 'E02002656',
        '7YB' => 'E02002656',
        '7YD' => 'E02002656',
        '7YE' => 'E02002656',
        '7YF' => 'E02002656',
        '7YG' => 'E02002656',
        '7YH' => 'E02002656',
        '7YJ' => 'E02002656',
        '7YL' => 'E02002656',
        '7YN' => 'E02002656',
        '7YP' => 'E02002656',
        '7YQ' => 'E02002656',
        '7YR' => 'E02002656',
        '7YS' => 'E02002656',
        '7YT' => 'E02002656',
        '7YU' => 'E02002656',
        '7YW' => 'E02002656',
        '7YX' => 'E02002656',
        '7YY' => 'E02002656',
        '7YZ' => 'E02002656',
        '7ZH' => 'E02002667',
        '7ZJ' => 'E02002656',
        '7ZL' => 'E02002656',
        '7ZN' => 'E02002656',
        '7ZU' => 'E02002667',
        '7ZW' => 'E02002667',
        '7ZX' => 'E02002656',
        '7ZY' => 'E02002656',
        '7ZZ' => 'E02002656',
        '8AA' => 'E02002659',
        '8AB' => 'E02002659',
        '8AD' => 'E02002659',
        '8AE' => 'E02002659',
        '8AG' => 'E02002659',
        '8AH' => 'E02002659',
        '8AJ' => 'E02002659',
        '8AL' => 'E02002659',
        '8AN' => 'E02002654',
        '8AP' => 'E02002659',
        '8AQ' => 'E02002659',
        '8AR' => 'E02002659',
        '8AS' => 'E02002659',
        '8AT' => 'E02002659',
        '8AU' => 'E02002659',
        '8AW' => 'E02002659',
        '8AX' => 'E02002659',
        '8AY' => 'E02002659',
        '8AZ' => 'E02002659',
        '8BA' => 'E02002659',
        '8BB' => 'E02002659',
        '8BD' => 'E02002659',
        '8BE' => 'E02002659',
        '8BG' => 'E02002659',
        '8BH' => 'E02002659',
        '8BJ' => 'E02002659',
        '8BL' => 'E02002659',
        '8BQ' => 'E02002659',
        '8BS' => 'E02002659',
        '8BT' => 'E02002654',
        '8BU' => 'E02002659',
        '8BX' => 'E02002654',
        '8BY' => 'E02002659',
        '8BZ' => 'E02002659',
        '8DA' => 'E02002659',
        '8DB' => 'E02002659',
        '8DD' => 'E02002659',
        '8DE' => 'E02002659',
        '8DF' => 'E02002659',
        '8DG' => 'E02002659',
        '8DH' => 'E02002659',
        '8DJ' => 'E02002659',
        '8DL' => 'E02002659',
        '8DN' => 'E02002659',
        '8DP' => 'E02002659',
        '8DQ' => 'E02002659',
        '8DR' => 'E02002659',
        '8DS' => 'E02002659',
        '8DT' => 'E02002663',
        '8DU' => 'E02002659',
        '8DW' => 'E02002659',
        '8DX' => 'E02002659',
        '8DY' => 'E02002659',
        '8DZ' => 'E02002659',
        '8EA' => 'E02002659',
        '8EB' => 'E02002659',
        '8ED' => 'E02002659',
        '8EE' => 'E02002659',
        '8EF' => 'E02002659',
        '8EG' => 'E02002659',
        '8EH' => 'E02002659',
        '8EJ' => 'E02002659',
        '8EL' => 'E02002659',
        '8EN' => 'E02002659',
        '8EP' => 'E02002659',
        '8EQ' => 'E02002659',
        '8ER' => 'E02002659',
        '8ES' => 'E02002659',
        '8ET' => 'E02002659',
        '8EU' => 'E02002654',
        '8EW' => 'E02002659',
        '8EX' => 'E02002659',
        '8EY' => 'E02002659',
        '8EZ' => 'E02002659',
        '8HA' => 'E02002659',
        '8HB' => 'E02002659',
        '8HD' => 'E02002659',
        '8HE' => 'E02002659',
        '8HF' => 'E02002659',
        '8HG' => 'E02002659',
        '8HH' => 'E02002659',
        '8HJ' => 'E02002659',
        '8HL' => 'E02002659',
        '8HN' => 'E02002659',
        '8HP' => 'E02002659',
        '8HQ' => 'E02002659',
        '8HR' => 'E02002659',
        '8HS' => 'E02002659',
        '8HT' => 'E02002659',
        '8HU' => 'E02002659',
        '8HW' => 'E02002663',
        '8HX' => 'E02002659',
        '8HY' => 'E02002659',
        '8HZ' => 'E02002659',
        '8JA' => 'E02002659',
        '8JB' => 'E02002659',
        '8JD' => 'E02002659',
        '8JF' => 'E02002659',
        '8JG' => 'E02002659',
        '8JH' => 'E02002663',
        '8JJ' => 'E02002663',
        '8JL' => 'E02002659',
        '8JN' => 'E02002665',
        '8JP' => 'E02002659',
        '8JQ' => 'E02002659',
        '8JR' => 'E02002659',
        '8JS' => 'E02002659',
        '8JT' => 'E02002659',
        '8JU' => 'E02002659',
        '8JW' => 'E02002659',
        '8JX' => 'E02002659',
        '8JY' => 'E02002659',
        '8JZ' => 'E02002659',
        '8LA' => 'E02002663',
        '8LB' => 'E02002659',
        '8LD' => 'E02002659',
        '8LE' => 'E02002659',
        '8LF' => 'E02002659',
        '8LG' => 'E02002659',
        '8LH' => 'E02002659',
        '8LJ' => 'E02002659',
        '8LL' => 'E02002659',
        '8LN' => 'E02002659',
        '8LP' => 'E02002659',
        '8LQ' => 'E02002659',
        '8LR' => 'E02002659',
        '8LS' => 'E02002659',
        '8LT' => 'E02002659',
        '8LU' => 'E02002659',
        '8LW' => 'E02002659',
        '8LX' => 'E02002659',
        '8NA' => 'E02002665',
        '8NB' => 'E02002665',
        '8ND' => 'E02002665',
        '8NE' => 'E02002665',
        '8NG' => 'E02002665',
        '8NH' => 'E02002665',
        '8NJ' => 'E02002665',
        '8NL' => 'E02002665',
        '8NN' => 'E02002665',
        '8NP' => 'E02002665',
        '8NQ' => 'E02002665',
        '8NR' => 'E02002665',
        '8NS' => 'E02002659',
        '8NT' => 'E02002659',
        '8NU' => 'E02002659',
        '8NW' => 'E02002665',
        '8NX' => 'E02002659',
        '8NY' => 'E02002659',
        '8NZ' => 'E02002659',
        '8PA' => 'E02002659',
        '8PB' => 'E02002659',
        '8PD' => 'E02002659',
        '8PE' => 'E02002659',
        '8PG' => 'E02002665',
        '8PH' => 'E02002665',
        '8PJ' => 'E02002665',
        '8PL' => 'E02002659',
        '8PN' => 'E02002659',
        '8PP' => 'E02002665',
        '8PW' => 'E02002659',
        '8QA' => 'E02002663',
        '8QB' => 'E02002663',
        '8QD' => 'E02002665',
        '8QE' => 'E02002665',
        '8QF' => 'E02002665',
        '8QG' => 'E02002663',
        '8QH' => 'E02002665',
        '8QJ' => 'E02002665',
        '8QL' => 'E02002665',
        '8QN' => 'E02002665',
        '8QP' => 'E02002665',
        '8QQ' => 'E02002665',
        '8QR' => 'E02002665',
        '8QS' => 'E02002665',
        '8QT' => 'E02002665',
        '8QU' => 'E02002665',
        '8QW' => 'E02002665',
        '8QX' => 'E02002665',
        '8QY' => 'E02002665',
        '8QZ' => 'E02002706',
        '8RA' => 'E02002706',
        '8RB' => 'E02002706',
        '8RD' => 'E02002706',
        '8RE' => 'E02002706',
        '8RF' => 'E02002665',
        '8RG' => 'E02002706',
        '8SA' => 'E02002665',
        '8SB' => 'E02002665',
        '8SD' => 'E02002659',
        '8SE' => 'E02002659',
        '8SG' => 'E02002659',
        '8SH' => 'E02002659',
        '8SJ' => 'E02002706',
        '8SL' => 'E02002706',
        '8SN' => 'E02002706',
        '8SP' => 'E02002659',
        '8SQ' => 'E02002659',
        '8SR' => 'E02002659',
        '8SS' => 'E02002659',
        '8ST' => 'E02002659',
        '8SU' => 'E02002659',
        '8SW' => 'E02002665',
        '8SX' => 'E02002659',
        '8SY' => 'E02002659',
        '8SZ' => 'E02002659',
        '8TA' => 'E02002706',
        '8TB' => 'E02002706',
        '8TD' => 'E02002706',
        '8TE' => 'E02002706',
        '8TF' => 'E02002667',
        '8TG' => 'E02002706',
        '8TH' => 'E02002659',
        '8TJ' => 'E02002659',
        '8TL' => 'E02002659',
        '8TN' => 'E02002659',
        '8TQ' => 'E02002706',
        '8TW' => 'E02002659',
        '8WE' => 'E02002667',
        '8WU' => 'E02002667',
        '8WW' => 'E02002667',
        '8WX' => 'E02002667',
        '8WY' => 'E02002667',
        '8WZ' => 'E02002667',
        '8YR' => 'E02002667',
        '8YS' => 'E02002659',
        '8YT' => 'E02002667',
        '8YU' => 'E02002667',
        '8YW' => 'E02002667',
        '8YX' => 'E02002659',
        '8YY' => 'E02002667',
        '8YZ' => 'E02002659',
        '9AA' => 'E02002659',
        '9AB' => 'E02002654',
        '9AD' => 'E02002654',
        '9AE' => 'E02002654',
        '9AF' => 'E02002654',
        '9AG' => 'E02002654',
        '9AH' => 'E02002654',
        '9AJ' => 'E02002654',
        '9AL' => 'E02002654',
        '9AN' => 'E02002654',
        '9AP' => 'E02002654',
        '9AQ' => 'E02002654',
        '9AR' => 'E02002654',
        '9AS' => 'E02002654',
        '9AT' => 'E02002654',
        '9AU' => 'E02002654',
        '9AW' => 'E02002654',
        '9AX' => 'E02002654',
        '9AY' => 'E02002654',
        '9AZ' => 'E02002654',
        '9BA' => 'E02002654',
        '9BB' => 'E02002654',
        '9BD' => 'E02002654',
        '9BE' => 'E02002654',
        '9BG' => 'E02002654',
        '9BH' => 'E02002656',
        '9BJ' => 'E02002656',
        '9BL' => 'E02002656',
        '9BN' => 'E02002654',
        '9BP' => 'E02002659',
        '9BQ' => 'E02002654',
        '9BS' => 'E02002654',
        '9BT' => 'E02002654',
        '9BU' => 'E02002659',
        '9BX' => 'E02002654',
        '9BY' => 'E02002654',
        '9BZ' => 'E02002654',
        '9DA' => 'E02002654',
        '9DB' => 'E02002654',
        '9DD' => 'E02002654',
        '9DE' => 'E02002654',
        '9DF' => 'E02002654',
        '9DG' => 'E02002654',
        '9DH' => 'E02002654',
        '9DJ' => 'E02002654',
        '9DL' => 'E02002654',
        '9DN' => 'E02002654',
        '9DP' => 'E02002654',
        '9DQ' => 'E02002654',
        '9DR' => 'E02002654',
        '9DS' => 'E02002654',
        '9DT' => 'E02002654',
        '9DU' => 'E02002654',
        '9DW' => 'E02002706',
        '9DX' => 'E02002706',
        '9DY' => 'E02002706',
        '9DZ' => 'E02002654',
        '9EA' => 'E02002654',
        '9EB' => 'E02002654',
        '9ED' => 'E02002654',
        '9EE' => 'E02002654',
        '9EF' => 'E02002654',
        '9EG' => 'E02002654',
        '9EH' => 'E02002654',
        '9EJ' => 'E02002654',
        '9EL' => 'E02002654',
        '9EN' => 'E02002654',
        '9EP' => 'E02002654',
        '9EQ' => 'E02002654',
        '9ER' => 'E02002654',
        '9ES' => 'E02002706',
        '9ET' => 'E02002654',
        '9EU' => 'E02002654',
        '9EW' => 'E02002654',
        '9EX' => 'E02002654',
        '9EY' => 'E02002654',
        '9EZ' => 'E02002654',
        '9FA' => 'E02002654',
        '9FB' => 'E02002706',
        '9FD' => 'E02002706',
        '9FE' => 'E02002706',
        '9FF' => 'E02002706',
        '9FG' => 'E02002706',
        '9FH' => 'E02002706',
        '9FJ' => 'E02002706',
        '9FL' => 'E02002706',
        '9HA' => 'E02002654',
        '9HB' => 'E02002654',
        '9HD' => 'E02002654',
        '9HE' => 'E02002654',
        '9HF' => 'E02002667',
        '9HG' => 'E02002654',
        '9HH' => 'E02002654',
        '9HJ' => 'E02002654',
        '9HL' => 'E02002654',
        '9HN' => 'E02002654',
        '9HP' => 'E02002654',
        '9HR' => 'E02002654',
        '9HS' => 'E02002654',
        '9HT' => 'E02002654',
        '9HU' => 'E02002654',
        '9HX' => 'E02002654',
        '9JA' => 'E02002659',
        '9JB' => 'E02002659',
        '9JD' => 'E02002659',
        '9JE' => 'E02002659',
        '9JG' => 'E02002659',
        '9JH' => 'E02002659',
        '9JJ' => 'E02002659',
        '9JL' => 'E02002659',
        '9JN' => 'E02002659',
        '9JP' => 'E02002659',
        '9JR' => 'E02002659',
        '9JS' => 'E02002654',
        '9JT' => 'E02002659',
        '9JU' => 'E02002659',
        '9JX' => 'E02002659',
        '9JY' => 'E02002659',
        '9LA' => 'E02002659',
        '9LB' => 'E02002659',
        '9LD' => 'E02002659',
        '9LE' => 'E02002659',
        '9LF' => 'E02002659',
        '9LG' => 'E02002659',
        '9LH' => 'E02002659',
        '9LJ' => 'E02002659',
        '9LL' => 'E02002659',
        '9LN' => 'E02002659',
        '9LP' => 'E02002659',
        '9LQ' => 'E02002659',
        '9LR' => 'E02002659',
        '9LS' => 'E02002659',
        '9LT' => 'E02002659',
        '9LU' => 'E02002659',
        '9LX' => 'E02002659',
        '9LY' => 'E02002654',
        '9LZ' => 'E02002654',
        '9NA' => 'E02002659',
        '9NB' => 'E02002659',
        '9ND' => 'E02002659',
        '9NE' => 'E02002659',
        '9NG' => 'E02002659',
        '9NH' => 'E02002659',
        '9NJ' => 'E02002659',
        '9NL' => 'E02002659',
        '9NN' => 'E02002659',
        '9NP' => 'E02002659',
        '9NR' => 'E02002659',
        '9NS' => 'E02002659',
        '9NT' => 'E02002659',
        '9NU' => 'E02002659',
        '9NW' => 'E02002659',
        '9NX' => 'E02002659',
        '9NY' => 'E02002659',
        '9NZ' => 'E02002659',
        '9PA' => 'E02002659',
        '9PB' => 'E02002659',
        '9PD' => 'E02002659',
        '9PE' => 'E02002659',
        '9PF' => 'E02002659',
        '9PG' => 'E02002659',
        '9PH' => 'E02002659',
        '9PJ' => 'E02002659',
        '9PL' => 'E02002659',
        '9PN' => 'E02002659',
        '9PP' => 'E02002659',
        '9PR' => 'E02002659',
        '9PS' => 'E02002659',
        '9PW' => 'E02002659',
        '9QA' => 'E02002654',
        '9QD' => 'E02002654',
        '9QE' => 'E02002654',
        '9QF' => 'E02002654',
        '9QG' => 'E02002654',
        '9QH' => 'E02002654',
        '9QJ' => 'E02002654',
        '9QL' => 'E02002654',
        '9QN' => 'E02002654',
        '9QP' => 'E02002654',
        '9QR' => 'E02002654',
        '9QS' => 'E02002654',
        '9QT' => 'E02002654',
        '9QU' => 'E02002654',
        '9QW' => 'E02002654',
        '9QX' => 'E02002654',
        '9QY' => 'E02002654',
        '9QZ' => 'E02002654',
        '9RA' => 'E02002654',
        '9RB' => 'E02002654',
        '9RD' => 'E02002654',
        '9RE' => 'E02002654',
        '9RF' => 'E02002654',
        '9RG' => 'E02002654',
        '9RH' => 'E02002654',
        '9RJ' => 'E02002654',
        '9RL' => 'E02002659',
        '9RN' => 'E02002654',
        '9RP' => 'E02002659',
        '9RR' => 'E02002654',
        '9RS' => 'E02002659',
        '9RT' => 'E02002659',
        '9RU' => 'E02002659',
        '9RW' => 'E02002659',
        '9RX' => 'E02002659',
        '9RY' => 'E02002659',
        '9SA' => 'E02002654',
        '9SB' => 'E02002654',
        '9SD' => 'E02002654',
        '9SE' => 'E02002654',
        '9SF' => 'E02002667',
        '9SG' => 'E02002654',
        '9SH' => 'E02002654',
        '9SJ' => 'E02002654',
        '9SL' => 'E02002654',
        '9SN' => 'E02002654',
        '9SP' => 'E02002654',
        '9SR' => 'E02002654',
        '9SS' => 'E02002659',
        '9ST' => 'E02002654',
        '9SU' => 'E02002654',
        '9SX' => 'E02002654',
        '9SY' => 'E02002654',
        '9SZ' => 'E02002654',
        '9TA' => 'E02002654',
        '9TB' => 'E02002654',
        '9TD' => 'E02002654',
        '9TE' => 'E02002654',
        '9TG' => 'E02002654',
        '9TH' => 'E02002654',
        '9TJ' => 'E02002654',
        '9TL' => 'E02002654',
        '9TN' => 'E02002654',
        '9TP' => 'E02002654',
        '9UA' => 'E02002656',
        '9UB' => 'E02002656',
        '9UD' => 'E02002656',
        '9UE' => 'E02002656',
        '9UF' => 'E02002656',
        '9UG' => 'E02002656',
        '9UH' => 'E02002654',
        '9WX' => 'E02002667',
        '9WY' => 'E02002667',
        '9WZ' => 'E02002667',
        '9YA' => 'E02002654',
        '9YD' => 'E02002667',
        '9YE' => 'E02002667',
        '9YF' => 'E02002667',
        '9YG' => 'E02002667',
        '9YJ' => 'E02002654',
        '9YL' => 'E02002654',
        '9YN' => 'E02002667',
        '9YP' => 'E02002654',
        '9YQ' => 'E02002667',
        '9YR' => 'E02002654',
        '9YS' => 'E02002654',
        '9YT' => 'E02002654',
        '9YU' => 'E02002654',
        '9YW' => 'E02002654',
        '9YX' => 'E02002654',
        '9YY' => 'E02002667',
        '9YZ' => 'E02002667',
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
