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
final class GL12
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02004665',
        '7AB' => 'E02004665',
        '7AD' => 'E02004665',
        '7AE' => 'E02004665',
        '7AF' => 'E02004665',
        '7AG' => 'E02004665',
        '7AH' => 'E02004665',
        '7AJ' => 'E02004665',
        '7AL' => 'E02004665',
        '7AN' => 'E02004665',
        '7AP' => 'E02004665',
        '7AQ' => 'E02004665',
        '7AR' => 'E02004665',
        '7AS' => 'E02004665',
        '7AT' => 'E02004665',
        '7AU' => 'E02004665',
        '7AW' => 'E02004665',
        '7AX' => 'E02004665',
        '7AY' => 'E02004665',
        '7AZ' => 'E02004665',
        '7BA' => 'E02004665',
        '7BB' => 'E02004665',
        '7BD' => 'E02004665',
        '7BE' => 'E02004665',
        '7BG' => 'E02004665',
        '7BH' => 'E02004665',
        '7BJ' => 'E02004665',
        '7BL' => 'E02004665',
        '7BN' => 'E02004665',
        '7BP' => 'E02004665',
        '7BQ' => 'E02004665',
        '7BS' => 'E02004665',
        '7BT' => 'E02004665',
        '7BU' => 'E02004665',
        '7BW' => 'E02004665',
        '7BX' => 'E02004665',
        '7BY' => 'E02004665',
        '7BZ' => 'E02004665',
        '7DA' => 'E02004665',
        '7DB' => 'E02004665',
        '7DD' => 'E02004665',
        '7DE' => 'E02004665',
        '7DF' => 'E02004665',
        '7DG' => 'E02004665',
        '7DH' => 'E02004665',
        '7DJ' => 'E02004665',
        '7DL' => 'E02004665',
        '7DN' => 'E02004665',
        '7DP' => 'E02004665',
        '7DQ' => 'E02004665',
        '7DR' => 'E02004665',
        '7DS' => 'E02004665',
        '7DT' => 'E02004665',
        '7DU' => 'E02004665',
        '7DW' => 'E02004665',
        '7DX' => 'E02004665',
        '7DY' => 'E02004665',
        '7DZ' => 'E02004665',
        '7EA' => 'E02004665',
        '7EB' => 'E02004665',
        '7ED' => 'E02004665',
        '7EE' => 'E02004665',
        '7EF' => 'E02004665',
        '7EG' => 'E02004665',
        '7EH' => 'E02004665',
        '7EJ' => 'E02004665',
        '7EL' => 'E02004665',
        '7EN' => 'E02004665',
        '7EP' => 'E02004665',
        '7EQ' => 'E02004665',
        '7ER' => 'E02004665',
        '7ES' => 'E02004665',
        '7ET' => 'E02004665',
        '7EU' => 'E02004665',
        '7EW' => 'E02004665',
        '7EX' => 'E02004665',
        '7EY' => 'E02004665',
        '7EZ' => 'E02004665',
        '7GQ' => 'E02004665',
        '7HA' => 'E02004665',
        '7HB' => 'E02004665',
        '7HD' => 'E02004665',
        '7HE' => 'E02004665',
        '7HF' => 'E02004665',
        '7HG' => 'E02004665',
        '7HH' => 'E02004665',
        '7HJ' => 'E02004665',
        '7HL' => 'E02004665',
        '7HN' => 'E02004665',
        '7HP' => 'E02004665',
        '7HQ' => 'E02004665',
        '7HR' => 'E02004665',
        '7HS' => 'E02004665',
        '7HT' => 'E02004665',
        '7HU' => 'E02004665',
        '7HW' => 'E02004665',
        '7HX' => 'E02004665',
        '7HY' => 'E02004665',
        '7HZ' => 'E02004665',
        '7JA' => 'E02004665',
        '7JB' => 'E02004665',
        '7JD' => 'E02004665',
        '7JE' => 'E02004665',
        '7JF' => 'E02004665',
        '7JG' => 'E02004665',
        '7JH' => 'E02004665',
        '7JJ' => 'E02004665',
        '7JL' => 'E02004665',
        '7JN' => 'E02004665',
        '7JP' => 'E02004665',
        '7JQ' => 'E02004665',
        '7JR' => 'E02004665',
        '7JS' => 'E02004665',
        '7JT' => 'E02004665',
        '7JU' => 'E02004665',
        '7JW' => 'E02004665',
        '7JX' => 'E02004665',
        '7JY' => 'E02004665',
        '7JZ' => 'E02004665',
        '7LA' => 'E02004665',
        '7LB' => 'E02004665',
        '7LD' => 'E02004665',
        '7LE' => 'E02004665',
        '7LF' => 'E02004665',
        '7LG' => 'E02004665',
        '7LH' => 'E02004665',
        '7LJ' => 'E02004665',
        '7LL' => 'E02004665',
        '7LN' => 'E02004665',
        '7LP' => 'E02004665',
        '7LQ' => 'E02004665',
        '7LR' => 'E02004665',
        '7LS' => 'E02004665',
        '7LT' => 'E02004665',
        '7LU' => 'E02004665',
        '7LW' => 'E02004665',
        '7LX' => 'E02004665',
        '7LY' => 'E02004665',
        '7LZ' => 'E02004665',
        '7NA' => 'E02004665',
        '7NB' => 'E02004665',
        '7ND' => 'E02004665',
        '7NE' => 'E02004665',
        '7NF' => 'E02004665',
        '7NG' => 'E02004665',
        '7NH' => 'E02004665',
        '7NJ' => 'E02004665',
        '7NL' => 'E02004665',
        '7NN' => 'E02004665',
        '7NP' => 'E02004665',
        '7NQ' => 'E02004665',
        '7NR' => 'E02004665',
        '7NS' => 'E02004665',
        '7NT' => 'E02004665',
        '7NU' => 'E02004665',
        '7NW' => 'E02004665',
        '7NX' => 'E02004665',
        '7NY' => 'E02004665',
        '7PA' => 'E02004665',
        '7PB' => 'E02004665',
        '7PD' => 'E02004665',
        '7PE' => 'E02004665',
        '7PF' => 'E02004665',
        '7PG' => 'E02004665',
        '7PH' => 'E02004665',
        '7PJ' => 'E02004665',
        '7PL' => 'E02004665',
        '7PN' => 'E02004665',
        '7PP' => 'E02004665',
        '7PQ' => 'E02004665',
        '7PR' => 'E02004665',
        '7PS' => 'E02004665',
        '7PT' => 'E02004665',
        '7PU' => 'E02004665',
        '7PW' => 'E02004665',
        '7PX' => 'E02004665',
        '7PY' => 'E02004625',
        '7PZ' => 'E02004625',
        '7QA' => 'E02004625',
        '7QB' => 'E02004625',
        '7QD' => 'E02004665',
        '7QE' => 'E02004665',
        '7QP' => 'E02004665',
        '7QR' => 'E02004625',
        '7QS' => 'E02004665',
        '7QT' => 'E02004665',
        '7QU' => 'E02004665',
        '7QW' => 'E02004665',
        '7QX' => 'E02004665',
        '7QY' => 'E02004665',
        '7QZ' => 'E02004665',
        '7RA' => 'E02004665',
        '7RB' => 'E02004665',
        '7RD' => 'E02004665',
        '7RE' => 'E02004665',
        '7RF' => 'E02004665',
        '7RG' => 'E02004665',
        '7RH' => 'E02004665',
        '7RJ' => 'E02004665',
        '7RL' => 'E02004665',
        '7RN' => 'E02004665',
        '7RP' => 'E02004665',
        '7RQ' => 'E02004665',
        '7RR' => 'E02004665',
        '7RS' => 'E02004665',
        '7RT' => 'E02004665',
        '7RU' => 'E02004665',
        '7RW' => 'E02004665',
        '7SA' => 'E02004665',
        '7SB' => 'E02004665',
        '7SD' => 'E02004665',
        '7SE' => 'E02004665',
        '7SF' => 'E02004665',
        '7SG' => 'E02004665',
        '7SQ' => 'E02004665',
        '7WA' => 'E02004665',
        '7WQ' => 'E02004665',
        '7WR' => 'E02004665',
        '7WS' => 'E02004661',
        '7WT' => 'E02004661',
        '7WU' => 'E02004665',
        '7WW' => 'E02004661',
        '7WX' => 'E02004661',
        '7WY' => 'E02004665',
        '7WZ' => 'E02004661',
        '7XA' => 'E02004665',
        '7XB' => 'E02004665',
        '7XZ' => 'E02004665',
        '7YA' => 'E02004665',
        '7YB' => 'E02004661',
        '7YD' => 'E02004661',
        '7YE' => 'E02004665',
        '7YF' => 'E02004665',
        '7YG' => 'E02004665',
        '7YH' => 'E02004665',
        '7YJ' => 'E02004665',
        '7YL' => 'E02004665',
        '7YN' => 'E02004661',
        '7YP' => 'E02004665',
        '7YQ' => 'E02004661',
        '7YR' => 'E02004665',
        '7YS' => 'E02004665',
        '7YW' => 'E02004665',
        '7ZB' => 'E02004665',
        '7ZW' => 'E02004665',
        '8AA' => 'E02003092',
        '8AB' => 'E02003092',
        '8AD' => 'E02003092',
        '8AE' => 'E02003092',
        '8AF' => 'E02003092',
        '8AG' => 'E02003092',
        '8AH' => 'E02003092',
        '8AJ' => 'E02003092',
        '8AL' => 'E02003092',
        '8AN' => 'E02003092',
        '8AP' => 'E02003092',
        '8AQ' => 'E02003092',
        '8AR' => 'E02003092',
        '8AS' => 'E02003092',
        '8AT' => 'E02003092',
        '8AU' => 'E02003092',
        '8AW' => 'E02003092',
        '8AX' => 'E02003092',
        '8AY' => 'E02003092',
        '8AZ' => 'E02003092',
        '8BA' => 'E02003092',
        '8BB' => 'E02003092',
        '8BD' => 'E02003092',
        '8BE' => 'E02003092',
        '8BG' => 'E02003092',
        '8BH' => 'E02003092',
        '8BJ' => 'E02003092',
        '8BL' => 'E02003092',
        '8BN' => 'E02003092',
        '8BP' => 'E02003091',
        '8BQ' => 'E02003090',
        '8BS' => 'E02003092',
        '8BT' => 'E02003092',
        '8BU' => 'E02003090',
        '8BW' => 'E02003090',
        '8BX' => 'E02003090',
        '8BY' => 'E02003090',
        '8BZ' => 'E02003090',
        '8DA' => 'E02003090',
        '8DB' => 'E02003090',
        '8DD' => 'E02003092',
        '8DE' => 'E02003090',
        '8DF' => 'E02003090',
        '8DG' => 'E02003090',
        '8DH' => 'E02003090',
        '8DJ' => 'E02003090',
        '8DL' => 'E02003090',
        '8DN' => 'E02003090',
        '8DP' => 'E02003090',
        '8DQ' => 'E02003090',
        '8DR' => 'E02003090',
        '8DS' => 'E02003090',
        '8DT' => 'E02003090',
        '8DU' => 'E02003090',
        '8DW' => 'E02003090',
        '8DX' => 'E02003090',
        '8DY' => 'E02003090',
        '8DZ' => 'E02003090',
        '8EA' => 'E02003090',
        '8EB' => 'E02003090',
        '8ED' => 'E02003090',
        '8EE' => 'E02003090',
        '8EF' => 'E02003092',
        '8EG' => 'E02003090',
        '8EH' => 'E02003092',
        '8EJ' => 'E02003092',
        '8EL' => 'E02003092',
        '8EN' => 'E02004665',
        '8EP' => 'E02004665',
        '8EQ' => 'E02003092',
        '8ER' => 'E02004665',
        '8ES' => 'E02003092',
        '8ET' => 'E02003092',
        '8EU' => 'E02003092',
        '8EW' => 'E02003092',
        '8EX' => 'E02003092',
        '8EY' => 'E02004662',
        '8EZ' => 'E02004662',
        '8FA' => 'E02003092',
        '8FB' => 'E02003092',
        '8FD' => 'E02003092',
        '8FE' => 'E02003092',
        '8FF' => 'E02003092',
        '8HA' => 'E02004662',
        '8HB' => 'E02003092',
        '8HD' => 'E02003092',
        '8HE' => 'E02003092',
        '8HF' => 'E02003092',
        '8HG' => 'E02003092',
        '8HH' => 'E02003092',
        '8HJ' => 'E02003092',
        '8HL' => 'E02003092',
        '8HN' => 'E02003092',
        '8HP' => 'E02003092',
        '8HQ' => 'E02003092',
        '8HR' => 'E02003092',
        '8HS' => 'E02003092',
        '8HT' => 'E02003092',
        '8HU' => 'E02003092',
        '8HW' => 'E02003092',
        '8HX' => 'E02003092',
        '8HY' => 'E02003092',
        '8HZ' => 'E02003092',
        '8JA' => 'E02003092',
        '8JB' => 'E02003092',
        '8JD' => 'E02003092',
        '8JL' => 'E02004665',
        '8JN' => 'E02004665',
        '8JP' => 'E02004665',
        '8JR' => 'E02004665',
        '8JS' => 'E02004665',
        '8JT' => 'E02004665',
        '8JU' => 'E02004665',
        '8JW' => 'E02004665',
        '8JX' => 'E02004665',
        '8JY' => 'E02004665',
        '8JZ' => 'E02003092',
        '8LA' => 'E02003092',
        '8LB' => 'E02003092',
        '8LD' => 'E02003092',
        '8LE' => 'E02003092',
        '8LF' => 'E02003092',
        '8LG' => 'E02003092',
        '8LH' => 'E02003092',
        '8LJ' => 'E02003092',
        '8LL' => 'E02003092',
        '8LN' => 'E02003092',
        '8LP' => 'E02003092',
        '8LQ' => 'E02003092',
        '8LR' => 'E02003092',
        '8LS' => 'E02003092',
        '8LT' => 'E02003092',
        '8LU' => 'E02003092',
        '8LW' => 'E02003092',
        '8LX' => 'E02003092',
        '8LY' => 'E02003092',
        '8LZ' => 'E02003092',
        '8NA' => 'E02004665',
        '8NB' => 'E02003092',
        '8ND' => 'E02003092',
        '8NE' => 'E02003092',
        '8NF' => 'E02003092',
        '8NG' => 'E02003092',
        '8NH' => 'E02003092',
        '8NJ' => 'E02003092',
        '8NL' => 'E02003092',
        '8NN' => 'E02003092',
        '8NP' => 'E02003092',
        '8NQ' => 'E02003092',
        '8NR' => 'E02003092',
        '8NS' => 'E02003092',
        '8NT' => 'E02003092',
        '8NU' => 'E02003092',
        '8NW' => 'E02003092',
        '8NX' => 'E02003092',
        '8NY' => 'E02003092',
        '8NZ' => 'E02003092',
        '8PA' => 'E02003092',
        '8PB' => 'E02003092',
        '8PD' => 'E02003092',
        '8PE' => 'E02003092',
        '8PF' => 'E02003092',
        '8PG' => 'E02003092',
        '8PH' => 'E02003092',
        '8PJ' => 'E02003092',
        '8PL' => 'E02003092',
        '8PN' => 'E02003092',
        '8PQ' => 'E02003092',
        '8PS' => 'E02003090',
        '8PT' => 'E02003090',
        '8PU' => 'E02003090',
        '8PX' => 'E02003090',
        '8PY' => 'E02003091',
        '8PZ' => 'E02003091',
        '8QA' => 'E02003091',
        '8QB' => 'E02003091',
        '8QD' => 'E02003091',
        '8QE' => 'E02003091',
        '8QF' => 'E02003091',
        '8QG' => 'E02003091',
        '8QH' => 'E02003090',
        '8QJ' => 'E02003091',
        '8QL' => 'E02003090',
        '8QN' => 'E02003090',
        '8QP' => 'E02003091',
        '8QQ' => 'E02003090',
        '8QR' => 'E02003091',
        '8QS' => 'E02003091',
        '8QW' => 'E02003090',
        '8RA' => 'E02004665',
        '8RB' => 'E02004665',
        '8RD' => 'E02004665',
        '8RE' => 'E02004665',
        '8RF' => 'E02004665',
        '8RG' => 'E02004665',
        '8RH' => 'E02004665',
        '8RJ' => 'E02004665',
        '8RL' => 'E02004665',
        '8RN' => 'E02004665',
        '8RP' => 'E02004665',
        '8RQ' => 'E02004665',
        '8RR' => 'E02004665',
        '8RS' => 'E02004665',
        '8RT' => 'E02004665',
        '8RU' => 'E02004665',
        '8RW' => 'E02004665',
        '8RX' => 'E02004665',
        '8RY' => 'E02004665',
        '8RZ' => 'E02004665',
        '8SA' => 'E02004665',
        '8SB' => 'E02004665',
        '8SD' => 'E02004665',
        '8SE' => 'E02004665',
        '8SF' => 'E02004665',
        '8SG' => 'E02004665',
        '8SH' => 'E02004665',
        '8SJ' => 'E02003092',
        '8SL' => 'E02004665',
        '8SN' => 'E02003092',
        '8SP' => 'E02004665',
        '8SQ' => 'E02004665',
        '8SR' => 'E02003092',
        '8SS' => 'E02003092',
        '8ST' => 'E02003092',
        '8SU' => 'E02003092',
        '8SW' => 'E02003092',
        '8SX' => 'E02003092',
        '8SY' => 'E02003092',
        '8SZ' => 'E02003092',
        '8TA' => 'E02003092',
        '8TB' => 'E02003092',
        '8TD' => 'E02003092',
        '8TE' => 'E02003092',
        '8TF' => 'E02003092',
        '8TG' => 'E02003092',
        '8TH' => 'E02003092',
        '8TJ' => 'E02003092',
        '8TL' => 'E02003092',
        '8TN' => 'E02003092',
        '8TP' => 'E02003092',
        '8TQ' => 'E02003092',
        '8TR' => 'E02003092',
        '8TS' => 'E02003092',
        '8TT' => 'E02003092',
        '8TU' => 'E02003092',
        '8TW' => 'E02003092',
        '8TX' => 'E02003092',
        '8TY' => 'E02003092',
        '8TZ' => 'E02003092',
        '8UA' => 'E02003092',
        '8UB' => 'E02003092',
        '8UD' => 'E02003092',
        '8UE' => 'E02003091',
        '8UF' => 'E02003092',
        '8UG' => 'E02003091',
        '8UH' => 'E02003091',
        '8UJ' => 'E02003091',
        '8UL' => 'E02003091',
        '8UN' => 'E02003091',
        '8UP' => 'E02003091',
        '8UQ' => 'E02003091',
        '8UR' => 'E02003091',
        '8US' => 'E02003091',
        '8UT' => 'E02003091',
        '8UU' => 'E02003091',
        '8UW' => 'E02003091',
        '8UX' => 'E02003091',
        '8UY' => 'E02003091',
        '8WA' => 'E02003091',
        '8WB' => 'E02004665',
        '8WH' => 'E02003091',
        '8WR' => 'E02004665',
        '8WS' => 'E02004665',
        '8WT' => 'E02004665',
        '8WU' => 'E02004665',
        '8WW' => 'E02004665',
        '8WX' => 'E02004665',
        '8WY' => 'E02004665',
        '8WZ' => 'E02004661',
        '8XD' => 'E02004665',
        '8YA' => 'E02004665',
        '8YB' => 'E02004665',
        '8YD' => 'E02004665',
        '8YE' => 'E02004665',
        '8YF' => 'E02004665',
        '8YG' => 'E02003092',
        '8YH' => 'E02003092',
        '8YJ' => 'E02004665',
        '8YL' => 'E02004665',
        '8YN' => 'E02004661',
        '8YP' => 'E02003092',
        '8YQ' => 'E02004665',
        '8YR' => 'E02004665',
        '8YS' => 'E02004665',
        '8YT' => 'E02004665',
        '8YU' => 'E02004665',
        '8YW' => 'E02003092',
        '8YX' => 'E02004661',
        '8YY' => 'E02003092',
        '8ZB' => 'E02004661',
        '8ZQ' => 'E02004665',
        '8ZR' => 'E02004665',
        '8ZW' => 'E02004665',
        '8ZX' => 'E02004665',
        '9AD' => 'E02004661',
        '9AG' => 'E02004661',
        '9AJ' => 'E02004661',
        '9AP' => 'E02004661',
        '9AQ' => 'E02004661',
        '9AR' => 'E02004661',
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
