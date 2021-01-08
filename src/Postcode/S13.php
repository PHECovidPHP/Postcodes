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
final class S13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02001654',
        '7AB' => 'E02001654',
        '7AD' => 'E02001654',
        '7BA' => 'E02001659',
        '7BB' => 'E02001659',
        '7BD' => 'E02001655',
        '7BE' => 'E02001659',
        '7BG' => 'E02001655',
        '7BH' => 'E02001659',
        '7BJ' => 'E02001659',
        '7BL' => 'E02001659',
        '7BN' => 'E02001659',
        '7BP' => 'E02001659',
        '7BQ' => 'E02001659',
        '7BR' => 'E02001659',
        '7BS' => 'E02001655',
        '7BT' => 'E02001659',
        '7BU' => 'E02001659',
        '7BW' => 'E02001659',
        '7DA' => 'E02001659',
        '7DB' => 'E02001659',
        '7DE' => 'E02001659',
        '7DL' => 'E02001659',
        '7DN' => 'E02001659',
        '7DP' => 'E02001659',
        '7DQ' => 'E02001659',
        '7DZ' => 'E02001659',
        '7EA' => 'E02001659',
        '7EB' => 'E02001659',
        '7ED' => 'E02001659',
        '7EE' => 'E02001659',
        '7EF' => 'E02001659',
        '7EG' => 'E02001659',
        '7EH' => 'E02001659',
        '7EJ' => 'E02001659',
        '7EL' => 'E02001659',
        '7EN' => 'E02001659',
        '7EP' => 'E02001659',
        '7EQ' => 'E02001659',
        '7ER' => 'E02001659',
        '7ES' => 'E02001659',
        '7ET' => 'E02001659',
        '7EU' => 'E02001659',
        '7EW' => 'E02001659',
        '7EX' => 'E02001659',
        '7EY' => 'E02001659',
        '7EZ' => 'E02001659',
        '7GA' => 'E02001659',
        '7GB' => 'E02001659',
        '7GD' => 'E02001659',
        '7GE' => 'E02001659',
        '7GF' => 'E02001659',
        '7GG' => 'E02001659',
        '7GH' => 'E02001659',
        '7GJ' => 'E02001659',
        '7GL' => 'E02001659',
        '7GN' => 'E02001659',
        '7GP' => 'E02001659',
        '7GQ' => 'E02001659',
        '7GR' => 'E02001659',
        '7GS' => 'E02001659',
        '7GT' => 'E02001659',
        '7GU' => 'E02001659',
        '7GW' => 'E02001659',
        '7GX' => 'E02001659',
        '7JA' => 'E02001659',
        '7JB' => 'E02001659',
        '7JD' => 'E02001659',
        '7JE' => 'E02001659',
        '7JF' => 'E02001659',
        '7JG' => 'E02001659',
        '7JH' => 'E02001659',
        '7JJ' => 'E02001659',
        '7JL' => 'E02001659',
        '7JN' => 'E02001659',
        '7JP' => 'E02001659',
        '7JQ' => 'E02001659',
        '7JR' => 'E02001659',
        '7JS' => 'E02001659',
        '7JT' => 'E02001659',
        '7JU' => 'E02001659',
        '7JW' => 'E02001659',
        '7JX' => 'E02001659',
        '7JY' => 'E02001659',
        '7LA' => 'E02001659',
        '7LB' => 'E02001654',
        '7LE' => 'E02001659',
        '7LF' => 'E02001659',
        '7LG' => 'E02001659',
        '7LH' => 'E02001659',
        '7LJ' => 'E02001659',
        '7LL' => 'E02001659',
        '7LN' => 'E02001659',
        '7LP' => 'E02001659',
        '7LQ' => 'E02001659',
        '7LR' => 'E02001659',
        '7LS' => 'E02001654',
        '7LT' => 'E02001659',
        '7LY' => 'E02001659',
        '7LZ' => 'E02001659',
        '7NA' => 'E02001654',
        '7NB' => 'E02001654',
        '7ND' => 'E02001654',
        '7PA' => 'E02001659',
        '7PB' => 'E02001659',
        '7PD' => 'E02001659',
        '7PE' => 'E02001654',
        '7PF' => 'E02001654',
        '7PG' => 'E02001659',
        '7PH' => 'E02001659',
        '7PJ' => 'E02001654',
        '7PL' => 'E02001654',
        '7PN' => 'E02001654',
        '7PP' => 'E02001654',
        '7PQ' => 'E02001654',
        '7PR' => 'E02001654',
        '7PS' => 'E02001654',
        '7PT' => 'E02001659',
        '7PU' => 'E02001654',
        '7PW' => 'E02001654',
        '7PX' => 'E02001654',
        '7PY' => 'E02001654',
        '7PZ' => 'E02001654',
        '7QA' => 'E02001654',
        '7QB' => 'E02001654',
        '7QD' => 'E02001659',
        '7QE' => 'E02001654',
        '7QF' => 'E02001654',
        '7QG' => 'E02001654',
        '7QH' => 'E02001659',
        '7QJ' => 'E02001659',
        '7QL' => 'E02001654',
        '7QN' => 'E02001659',
        '7QP' => 'E02001659',
        '7QQ' => 'E02001659',
        '7QR' => 'E02001659',
        '7QS' => 'E02001659',
        '7QT' => 'E02001659',
        '7QU' => 'E02001659',
        '7QW' => 'E02001659',
        '7QX' => 'E02001659',
        '7QY' => 'E02001654',
        '7QZ' => 'E02001659',
        '7RA' => 'E02001654',
        '7RB' => 'E02001654',
        '7RD' => 'E02001659',
        '7RE' => 'E02001654',
        '7RF' => 'E02001654',
        '7RG' => 'E02001654',
        '7RH' => 'E02001654',
        '7RJ' => 'E02001654',
        '7RL' => 'E02001654',
        '7RN' => 'E02001654',
        '7RP' => 'E02001654',
        '7RQ' => 'E02001654',
        '7RR' => 'E02001654',
        '7RS' => 'E02001654',
        '7RT' => 'E02001659',
        '7RU' => 'E02001654',
        '7RW' => 'E02001654',
        '7RX' => 'E02001654',
        '7RY' => 'E02001654',
        '7RZ' => 'E02001654',
        '7SA' => 'E02001654',
        '7SB' => 'E02001654',
        '7SD' => 'E02001654',
        '7SE' => 'E02001654',
        '7SF' => 'E02001654',
        '7SG' => 'E02001654',
        '7SH' => 'E02001654',
        '7TA' => 'E02001654',
        '7TB' => 'E02001654',
        '7TD' => 'E02001654',
        '7TE' => 'E02001654',
        '7TF' => 'E02001654',
        '7TG' => 'E02001654',
        '7TH' => 'E02001654',
        '7TJ' => 'E02001654',
        '7TL' => 'E02001659',
        '7TN' => 'E02001654',
        '7TP' => 'E02001654',
        '7TQ' => 'E02001654',
        '7TR' => 'E02001654',
        '7TS' => 'E02001654',
        '7TT' => 'E02001654',
        '7TU' => 'E02001654',
        '7TW' => 'E02001654',
        '7TX' => 'E02001654',
        '7TY' => 'E02001654',
        '7TZ' => 'E02001654',
        '7UA' => 'E02001659',
        '7UB' => 'E02001659',
        '7UD' => 'E02001654',
        '7UE' => 'E02001659',
        '7WA' => 'E02001662',
        '7WB' => 'E02001659',
        '7WT' => 'E02001662',
        '7WU' => 'E02001659',
        '7WW' => 'E02001662',
        '7WX' => 'E02001662',
        '7WY' => 'E02001659',
        '7WZ' => 'E02001659',
        '7XA' => 'E02001659',
        '7XB' => 'E02001659',
        '7XD' => 'E02001659',
        '7XE' => 'E02001662',
        '7YP' => 'E02001659',
        '7YR' => 'E02001659',
        '7YS' => 'E02001662',
        '7YT' => 'E02001654',
        '7YU' => 'E02001659',
        '7YX' => 'E02001662',
        '7YY' => 'E02001659',
        '7YZ' => 'E02001662',
        '8AA' => 'E02001662',
        '8AB' => 'E02001662',
        '8AD' => 'E02001662',
        '8AE' => 'E02001662',
        '8AF' => 'E02001662',
        '8AG' => 'E02001662',
        '8AH' => 'E02001662',
        '8AJ' => 'E02001662',
        '8AL' => 'E02001662',
        '8AN' => 'E02001662',
        '8AP' => 'E02001662',
        '8AQ' => 'E02001662',
        '8AR' => 'E02001662',
        '8AS' => 'E02001662',
        '8AT' => 'E02001662',
        '8AU' => 'E02001662',
        '8AW' => 'E02001662',
        '8AX' => 'E02001662',
        '8AY' => 'E02001662',
        '8AZ' => 'E02001662',
        '8BA' => 'E02001662',
        '8BB' => 'E02001662',
        '8BD' => 'E02001662',
        '8BE' => 'E02001662',
        '8BF' => 'E02001647',
        '8BG' => 'E02001662',
        '8BH' => 'E02001655',
        '8BL' => 'E02001647',
        '8BN' => 'E02001647',
        '8DA' => 'E02001655',
        '8DB' => 'E02001655',
        '8DD' => 'E02001655',
        '8DE' => 'E02001662',
        '8DF' => 'E02001655',
        '8DG' => 'E02001655',
        '8DH' => 'E02001662',
        '8DJ' => 'E02001662',
        '8DL' => 'E02001662',
        '8DN' => 'E02001662',
        '8DP' => 'E02001662',
        '8DQ' => 'E02001662',
        '8DR' => 'E02001662',
        '8DS' => 'E02001655',
        '8DT' => 'E02001662',
        '8DU' => 'E02001655',
        '8DW' => 'E02001655',
        '8DX' => 'E02001655',
        '8DY' => 'E02001655',
        '8EA' => 'E02001655',
        '8EB' => 'E02001655',
        '8ED' => 'E02001655',
        '8EE' => 'E02001655',
        '8EF' => 'E02001655',
        '8EG' => 'E02001655',
        '8EH' => 'E02001655',
        '8EJ' => 'E02001655',
        '8EL' => 'E02001655',
        '8EN' => 'E02001655',
        '8EP' => 'E02001655',
        '8EQ' => 'E02001655',
        '8ER' => 'E02001655',
        '8ES' => 'E02001655',
        '8EW' => 'E02001647',
        '8EX' => 'E02001647',
        '8EY' => 'E02001647',
        '8EZ' => 'E02001655',
        '8FA' => 'E02001655',
        '8FB' => 'E02001655',
        '8FD' => 'E02001655',
        '8FE' => 'E02001655',
        '8FF' => 'E02001655',
        '8FG' => 'E02001655',
        '8FH' => 'E02001655',
        '8FJ' => 'E02001655',
        '8FL' => 'E02001655',
        '8FN' => 'E02001655',
        '8FP' => 'E02001655',
        '8FQ' => 'E02001655',
        '8FR' => 'E02001655',
        '8FS' => 'E02001655',
        '8FT' => 'E02001655',
        '8FU' => 'E02001655',
        '8FW' => 'E02001655',
        '8FX' => 'E02001655',
        '8FY' => 'E02001655',
        '8FZ' => 'E02001655',
        '8GA' => 'E02001655',
        '8GB' => 'E02001655',
        '8GH' => 'E02001655',
        '8HA' => 'E02001647',
        '8HB' => 'E02001647',
        '8HD' => 'E02001647',
        '8HE' => 'E02001647',
        '8HF' => 'E02001647',
        '8HG' => 'E02001647',
        '8HH' => 'E02001647',
        '8HJ' => 'E02001647',
        '8HL' => 'E02001647',
        '8HN' => 'E02001647',
        '8HP' => 'E02001647',
        '8HQ' => 'E02001647',
        '8HR' => 'E02001647',
        '8HS' => 'E02001647',
        '8HT' => 'E02001647',
        '8HU' => 'E02001647',
        '8HW' => 'E02001647',
        '8HX' => 'E02001647',
        '8HY' => 'E02001647',
        '8HZ' => 'E02001647',
        '8JA' => 'E02001647',
        '8JB' => 'E02001647',
        '8JD' => 'E02001647',
        '8JE' => 'E02001647',
        '8JF' => 'E02001647',
        '8JG' => 'E02001647',
        '8JH' => 'E02001647',
        '8JJ' => 'E02001647',
        '8JL' => 'E02001647',
        '8JN' => 'E02001647',
        '8JP' => 'E02001647',
        '8JQ' => 'E02001647',
        '8JY' => 'E02001647',
        '8JZ' => 'E02001655',
        '8LA' => 'E02001655',
        '8LB' => 'E02001655',
        '8LD' => 'E02001655',
        '8LE' => 'E02001655',
        '8LF' => 'E02001655',
        '8LG' => 'E02001655',
        '8LH' => 'E02001655',
        '8LJ' => 'E02001655',
        '8LL' => 'E02001655',
        '8LN' => 'E02001655',
        '8LP' => 'E02001655',
        '8LQ' => 'E02001655',
        '8LR' => 'E02001655',
        '8LS' => 'E02001655',
        '8LT' => 'E02001655',
        '8LU' => 'E02001655',
        '8LW' => 'E02001655',
        '8LX' => 'E02001655',
        '8LY' => 'E02001655',
        '8LZ' => 'E02001655',
        '8NA' => 'E02001655',
        '8NB' => 'E02001662',
        '8ND' => 'E02001655',
        '8NF' => 'E02001647',
        '8NG' => 'E02001647',
        '8NH' => 'E02001647',
        '8NJ' => 'E02001647',
        '8NL' => 'E02001647',
        '8NN' => 'E02001647',
        '8NP' => 'E02001647',
        '8PA' => 'E02001647',
        '8PB' => 'E02001655',
        '8PD' => 'E02001647',
        '8PE' => 'E02001655',
        '8PF' => 'E02001655',
        '8PG' => 'E02001655',
        '8PH' => 'E02001655',
        '8PJ' => 'E02001655',
        '8PL' => 'E02001655',
        '8PN' => 'E02001655',
        '8PP' => 'E02001655',
        '8PQ' => 'E02001655',
        '8PR' => 'E02001655',
        '8PS' => 'E02001655',
        '8PT' => 'E02001655',
        '8PU' => 'E02001655',
        '8PW' => 'E02001655',
        '8PX' => 'E02001655',
        '8PY' => 'E02001655',
        '8PZ' => 'E02001655',
        '8QA' => 'E02001655',
        '8QB' => 'E02001655',
        '8QD' => 'E02001655',
        '8QE' => 'E02001655',
        '8QF' => 'E02001655',
        '8RA' => 'E02001655',
        '8RB' => 'E02001655',
        '8RD' => 'E02001655',
        '8RE' => 'E02001655',
        '8RF' => 'E02001659',
        '8RG' => 'E02001659',
        '8RH' => 'E02001659',
        '8RJ' => 'E02001655',
        '8RL' => 'E02001655',
        '8RN' => 'E02001655',
        '8RP' => 'E02001659',
        '8RQ' => 'E02001655',
        '8RR' => 'E02001655',
        '8RS' => 'E02001655',
        '8RT' => 'E02001655',
        '8RU' => 'E02001655',
        '8RW' => 'E02001655',
        '8RX' => 'E02001655',
        '8RY' => 'E02001655',
        '8SA' => 'E02001655',
        '8SB' => 'E02001655',
        '8SD' => 'E02001655',
        '8SE' => 'E02001655',
        '8SF' => 'E02001655',
        '8SG' => 'E02001655',
        '8SH' => 'E02001655',
        '8SJ' => 'E02001655',
        '8SL' => 'E02001655',
        '8SN' => 'E02001655',
        '8SP' => 'E02001659',
        '8SQ' => 'E02001655',
        '8SR' => 'E02001655',
        '8SS' => 'E02001659',
        '8ST' => 'E02001655',
        '8TA' => 'E02001647',
        '8TB' => 'E02001647',
        '8TD' => 'E02001647',
        '8TE' => 'E02001647',
        '8TF' => 'E02001647',
        '8TG' => 'E02001647',
        '8TH' => 'E02001647',
        '8TJ' => 'E02001647',
        '8TL' => 'E02001647',
        '8TN' => 'E02001647',
        '8TP' => 'E02001647',
        '8TQ' => 'E02001647',
        '8TR' => 'E02001647',
        '8TS' => 'E02001647',
        '8TT' => 'E02001647',
        '8TU' => 'E02001647',
        '8TW' => 'E02001647',
        '8TX' => 'E02001647',
        '8TY' => 'E02001647',
        '8TZ' => 'E02001647',
        '8UA' => 'E02001647',
        '8UB' => 'E02001647',
        '8UD' => 'E02001647',
        '8UE' => 'E02001647',
        '8UF' => 'E02001647',
        '8UG' => 'E02001647',
        '8UH' => 'E02001647',
        '8UJ' => 'E02001647',
        '8UL' => 'E02001647',
        '8UN' => 'E02001647',
        '8WA' => 'E02001662',
        '8WX' => 'E02001662',
        '8WY' => 'E02001654',
        '8WZ' => 'E02001654',
        '8XZ' => 'E02001662',
        '8YA' => 'E02001662',
        '8YB' => 'E02001662',
        '8YD' => 'E02001647',
        '8YE' => 'E02001647',
        '8YF' => 'E02001647',
        '8YG' => 'E02001647',
        '8YH' => 'E02001647',
        '8YJ' => 'E02001647',
        '8YL' => 'E02001647',
        '8YN' => 'E02001662',
        '8YP' => 'E02001654',
        '8YQ' => 'E02001647',
        '8YR' => 'E02001654',
        '8YS' => 'E02001647',
        '8YT' => 'E02001662',
        '8YU' => 'E02001647',
        '8YW' => 'E02001662',
        '8YX' => 'E02001662',
        '8YY' => 'E02001654',
        '8YZ' => 'E02001662',
        '8ZU' => 'E02001662',
        '9AA' => 'E02001642',
        '9AB' => 'E02001642',
        '9AD' => 'E02001604',
        '9AE' => 'E02001642',
        '9AF' => 'E02001642',
        '9AG' => 'E02001642',
        '9AH' => 'E02001642',
        '9AJ' => 'E02001642',
        '9AL' => 'E02001642',
        '9AN' => 'E02001642',
        '9AP' => 'E02001642',
        '9AQ' => 'E02001642',
        '9AR' => 'E02001642',
        '9AS' => 'E02001642',
        '9AT' => 'E02001642',
        '9AU' => 'E02001642',
        '9AW' => 'E02001642',
        '9AX' => 'E02001642',
        '9AY' => 'E02001642',
        '9AZ' => 'E02001642',
        '9BA' => 'E02001642',
        '9BB' => 'E02001642',
        '9BD' => 'E02001642',
        '9BE' => 'E02001642',
        '9BF' => 'E02001642',
        '9BG' => 'E02001642',
        '9BH' => 'E02001642',
        '9BJ' => 'E02001642',
        '9BL' => 'E02001642',
        '9BN' => 'E02001642',
        '9BP' => 'E02001642',
        '9BQ' => 'E02001642',
        '9BR' => 'E02001647',
        '9BS' => 'E02001642',
        '9BT' => 'E02001642',
        '9BU' => 'E02001642',
        '9BW' => 'E02001642',
        '9BX' => 'E02001647',
        '9BY' => 'E02001647',
        '9BZ' => 'E02001647',
        '9DA' => 'E02001647',
        '9DB' => 'E02001642',
        '9DD' => 'E02001642',
        '9DE' => 'E02001642',
        '9DF' => 'E02001642',
        '9DG' => 'E02001642',
        '9DH' => 'E02001642',
        '9DJ' => 'E02001642',
        '9DL' => 'E02001642',
        '9DN' => 'E02001642',
        '9DP' => 'E02001642',
        '9DQ' => 'E02001642',
        '9DR' => 'E02001642',
        '9DS' => 'E02001642',
        '9EL' => 'E02001604',
        '9GZ' => 'E02001662',
        '9HA' => 'E02001647',
        '9HB' => 'E02001647',
        '9HD' => 'E02001647',
        '9HE' => 'E02001647',
        '9HF' => 'E02001647',
        '9HG' => 'E02001647',
        '9HH' => 'E02001647',
        '9HJ' => 'E02001647',
        '9HL' => 'E02001647',
        '9HN' => 'E02001647',
        '9HP' => 'E02001647',
        '9HQ' => 'E02001647',
        '9HR' => 'E02001647',
        '9HS' => 'E02001647',
        '9HT' => 'E02001647',
        '9HU' => 'E02001647',
        '9HW' => 'E02001647',
        '9HX' => 'E02001647',
        '9HY' => 'E02001647',
        '9JL' => 'E02001642',
        '9LA' => 'E02001642',
        '9LB' => 'E02001642',
        '9LD' => 'E02001642',
        '9LE' => 'E02001647',
        '9LF' => 'E02001647',
        '9LG' => 'E02001642',
        '9LH' => 'E02001642',
        '9LJ' => 'E02001642',
        '9LL' => 'E02001642',
        '9LN' => 'E02001642',
        '9LP' => 'E02001642',
        '9LQ' => 'E02001642',
        '9LR' => 'E02001647',
        '9LS' => 'E02001642',
        '9LT' => 'E02001642',
        '9LU' => 'E02001642',
        '9LW' => 'E02001647',
        '9LX' => 'E02001662',
        '9LY' => 'E02001642',
        '9LZ' => 'E02001642',
        '9NA' => 'E02001642',
        '9NB' => 'E02001642',
        '9ND' => 'E02001642',
        '9NE' => 'E02001642',
        '9NF' => 'E02001642',
        '9NG' => 'E02001642',
        '9NH' => 'E02001604',
        '9NJ' => 'E02001604',
        '9NN' => 'E02001642',
        '9NP' => 'E02001642',
        '9NQ' => 'E02001642',
        '9NR' => 'E02001642',
        '9NS' => 'E02001647',
        '9NT' => 'E02001647',
        '9NU' => 'E02001642',
        '9NZ' => 'E02001642',
        '9QA' => 'E02001654',
        '9QB' => 'E02001654',
        '9QD' => 'E02001654',
        '9QE' => 'E02001647',
        '9QF' => 'E02001647',
        '9QG' => 'E02001642',
        '9QH' => 'E02001647',
        '9QJ' => 'E02001647',
        '9QL' => 'E02001654',
        '9QN' => 'E02001654',
        '9QP' => 'E02001654',
        '9QQ' => 'E02001654',
        '9QR' => 'E02001654',
        '9QS' => 'E02001654',
        '9QT' => 'E02001654',
        '9QU' => 'E02001654',
        '9QW' => 'E02001654',
        '9QX' => 'E02001654',
        '9QY' => 'E02001642',
        '9QZ' => 'E02001654',
        '9RA' => 'E02001654',
        '9RB' => 'E02001642',
        '9RD' => 'E02001654',
        '9RE' => 'E02001642',
        '9US' => 'E02001654',
        '9UT' => 'E02001654',
        '9UU' => 'E02001654',
        '9UW' => 'E02001654',
        '9UX' => 'E02001654',
        '9UY' => 'E02001654',
        '9UZ' => 'E02001654',
        '9WA' => 'E02001604',
        '9WB' => 'E02001604',
        '9WD' => 'E02001604',
        '9WE' => 'E02001654',
        '9WF' => 'E02001654',
        '9WG' => 'E02001604',
        '9WH' => 'E02001604',
        '9WJ' => 'E02001642',
        '9WL' => 'E02001654',
        '9WN' => 'E02001654',
        '9WP' => 'E02001654',
        '9WQ' => 'E02001654',
        '9WR' => 'E02001654',
        '9WS' => 'E02001654',
        '9WT' => 'E02001654',
        '9WU' => 'E02001654',
        '9WW' => 'E02001654',
        '9WX' => 'E02001654',
        '9XA' => 'E02001654',
        '9XB' => 'E02001654',
        '9XD' => 'E02001654',
        '9XE' => 'E02001654',
        '9XF' => 'E02001654',
        '9XG' => 'E02001654',
        '9XH' => 'E02001662',
        '9XJ' => 'E02001662',
        '9XP' => 'E02001604',
        '9XQ' => 'E02001604',
        '9XR' => 'E02001604',
        '9XS' => 'E02001604',
        '9XT' => 'E02001604',
        '9XU' => 'E02001604',
        '9XW' => 'E02001604',
        '9XX' => 'E02001662',
        '9XY' => 'E02001604',
        '9XZ' => 'E02001604',
        '9YF' => 'E02001662',
        '9YG' => 'E02001662',
        '9YH' => 'E02001662',
        '9YJ' => 'E02001647',
        '9YL' => 'E02001647',
        '9YN' => 'E02001604',
        '9YP' => 'E02001647',
        '9YQ' => 'E02001662',
        '9YR' => 'E02001647',
        '9YS' => 'E02001662',
        '9YT' => 'E02001647',
        '9YU' => 'E02001647',
        '9YW' => 'E02001647',
        '9YX' => 'E02001647',
        '9YY' => 'E02001662',
        '9YZ' => 'E02001604',
        '9ZA' => 'E02001604',
        '9ZB' => 'E02001604',
        '9ZD' => 'E02001604',
        '9ZE' => 'E02001604',
        '9ZH' => 'E02001604',
        '9ZL' => 'E02001604',
        '9ZT' => 'E02001604',
        '9ZU' => 'E02001604',
        '9ZX' => 'E02001604',
        '9ZY' => 'E02001604',
        '9ZZ' => 'E02001604',
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
