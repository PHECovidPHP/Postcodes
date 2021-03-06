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
final class OX44
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02005955',
        '7AB' => 'E02005955',
        '7AD' => 'E02005955',
        '7AE' => 'E02005955',
        '7AF' => 'E02005964',
        '7AG' => 'E02005964',
        '7AH' => 'E02005955',
        '7AJ' => 'E02005955',
        '7AL' => 'E02005955',
        '7AP' => 'E02005955',
        '7AR' => 'E02005964',
        '7AS' => 'E02005955',
        '7AT' => 'E02005964',
        '7AU' => 'E02005964',
        '7AW' => 'E02005961',
        '7AX' => 'E02005964',
        '7AY' => 'E02005964',
        '7AZ' => 'E02005964',
        '7BA' => 'E02005961',
        '7BB' => 'E02005964',
        '7BD' => 'E02005964',
        '7BF' => 'E02005964',
        '7BG' => 'E02005961',
        '7BH' => 'E02005964',
        '7BL' => 'E02005964',
        '7BN' => 'E02005964',
        '7BQ' => 'E02005964',
        '7BS' => 'E02005964',
        '7FB' => 'E02005955',
        '7FJ' => 'E02005961',
        '7HX' => 'E02005961',
        '7HY' => 'E02005961',
        '7HZ' => 'E02005961',
        '7JA' => 'E02005961',
        '7JB' => 'E02005961',
        '7JD' => 'E02005961',
        '7JE' => 'E02005961',
        '7JF' => 'E02005961',
        '7JG' => 'E02005961',
        '7JH' => 'E02005961',
        '7JJ' => 'E02005961',
        '7JL' => 'E02005961',
        '7JN' => 'E02005961',
        '7JP' => 'E02005961',
        '7JQ' => 'E02005961',
        '7JR' => 'E02005961',
        '7JS' => 'E02005961',
        '7JT' => 'E02005961',
        '7JU' => 'E02005961',
        '7JW' => 'E02005961',
        '7JX' => 'E02005961',
        '7JY' => 'E02005961',
        '7JZ' => 'E02005961',
        '7LA' => 'E02005961',
        '7LB' => 'E02005961',
        '7LD' => 'E02005961',
        '7LE' => 'E02005961',
        '7LF' => 'E02005961',
        '7LG' => 'E02005961',
        '7LH' => 'E02005961',
        '7LJ' => 'E02005961',
        '7LL' => 'E02005961',
        '7LN' => 'E02005961',
        '7LP' => 'E02005965',
        '7LQ' => 'E02005961',
        '7LR' => 'E02005965',
        '7LS' => 'E02005961',
        '7LU' => 'E02005965',
        '7LW' => 'E02005961',
        '7NE' => 'E02005961',
        '7NF' => 'E02005961',
        '7NH' => 'E02005961',
        '7NJ' => 'E02005961',
        '7NL' => 'E02005961',
        '7NN' => 'E02005961',
        '7NP' => 'E02005961',
        '7NQ' => 'E02005961',
        '7NR' => 'E02005961',
        '7NS' => 'E02005961',
        '7NT' => 'E02005961',
        '7NU' => 'E02005961',
        '7NW' => 'E02005961',
        '7NX' => 'E02005961',
        '7NY' => 'E02005961',
        '7NZ' => 'E02005961',
        '7PA' => 'E02005961',
        '7PB' => 'E02005961',
        '7PD' => 'E02005961',
        '7PE' => 'E02005961',
        '7PF' => 'E02005961',
        '7PG' => 'E02005961',
        '7PH' => 'E02005961',
        '7PJ' => 'E02005961',
        '7PL' => 'E02005961',
        '7PN' => 'E02005961',
        '7PP' => 'E02005961',
        '7PQ' => 'E02005961',
        '7PR' => 'E02005961',
        '7PS' => 'E02005961',
        '7PT' => 'E02005961',
        '7PU' => 'E02005961',
        '7PW' => 'E02005964',
        '7PX' => 'E02005961',
        '7PY' => 'E02005961',
        '7PZ' => 'E02005961',
        '7QA' => 'E02005961',
        '7QB' => 'E02005961',
        '7QD' => 'E02005961',
        '7QE' => 'E02005961',
        '7QF' => 'E02005961',
        '7QG' => 'E02005961',
        '7QH' => 'E02005961',
        '7QJ' => 'E02005955',
        '7QL' => 'E02005955',
        '7QN' => 'E02005964',
        '7QP' => 'E02005961',
        '7QQ' => 'E02005964',
        '7QR' => 'E02005961',
        '7QS' => 'E02005955',
        '7QT' => 'E02005964',
        '7QU' => 'E02005964',
        '7QW' => 'E02005964',
        '7QX' => 'E02005964',
        '7QY' => 'E02005964',
        '7QZ' => 'E02005964',
        '7RA' => 'E02005964',
        '7RB' => 'E02005964',
        '7RD' => 'E02005964',
        '7RE' => 'E02005964',
        '7RF' => 'E02005964',
        '7RG' => 'E02005964',
        '7RH' => 'E02005964',
        '7RJ' => 'E02005964',
        '7RL' => 'E02005964',
        '7RN' => 'E02005964',
        '7RP' => 'E02005964',
        '7RQ' => 'E02005964',
        '7RR' => 'E02005964',
        '7RS' => 'E02005964',
        '7RT' => 'E02005964',
        '7RU' => 'E02005964',
        '7RW' => 'E02005964',
        '7RX' => 'E02005964',
        '7RY' => 'E02005964',
        '7RZ' => 'E02005964',
        '7SA' => 'E02005964',
        '7SB' => 'E02005964',
        '7SD' => 'E02005964',
        '7SE' => 'E02005964',
        '7SF' => 'E02005964',
        '7SG' => 'E02005964',
        '7SH' => 'E02005964',
        '7SJ' => 'E02005964',
        '7SL' => 'E02005964',
        '7SN' => 'E02005964',
        '7SP' => 'E02005964',
        '7SQ' => 'E02005964',
        '7SR' => 'E02005964',
        '7SS' => 'E02005964',
        '7ST' => 'E02005964',
        '7SU' => 'E02005964',
        '7SW' => 'E02005964',
        '7SX' => 'E02005964',
        '7SY' => 'E02005964',
        '7SZ' => 'E02005964',
        '7TA' => 'E02005964',
        '7TB' => 'E02005964',
        '7TD' => 'E02005964',
        '7TE' => 'E02005964',
        '7TF' => 'E02005964',
        '7TG' => 'E02005964',
        '7TH' => 'E02005964',
        '7TJ' => 'E02005964',
        '7TL' => 'E02005964',
        '7TN' => 'E02005964',
        '7TP' => 'E02005964',
        '7TQ' => 'E02005964',
        '7TR' => 'E02005964',
        '7TS' => 'E02005964',
        '7TT' => 'E02005964',
        '7TU' => 'E02005964',
        '7TW' => 'E02005964',
        '7TX' => 'E02005964',
        '7TY' => 'E02005964',
        '7TZ' => 'E02005964',
        '7UA' => 'E02005964',
        '7UB' => 'E02005964',
        '7UD' => 'E02005964',
        '7UE' => 'E02005964',
        '7UF' => 'E02005964',
        '7UG' => 'E02005964',
        '7UH' => 'E02005964',
        '7UJ' => 'E02005964',
        '7UL' => 'E02005964',
        '7UN' => 'E02005964',
        '7UP' => 'E02005964',
        '7UQ' => 'E02005964',
        '7UR' => 'E02005964',
        '7US' => 'E02005964',
        '7UT' => 'E02005964',
        '7UU' => 'E02005964',
        '7UW' => 'E02005964',
        '7UX' => 'E02005964',
        '7UY' => 'E02005964',
        '7UZ' => 'E02005964',
        '7WA' => 'E02005955',
        '7WB' => 'E02005964',
        '7WE' => 'E02005955',
        '7WF' => 'E02005964',
        '7WG' => 'E02005964',
        '7WH' => 'E02005955',
        '7WJ' => 'E02005955',
        '7WL' => 'E02005955',
        '7WN' => 'E02005964',
        '7WP' => 'E02005955',
        '7WQ' => 'E02005955',
        '7WR' => 'E02005964',
        '7WS' => 'E02005955',
        '7WT' => 'E02005964',
        '7WU' => 'E02005955',
        '7WW' => 'E02005955',
        '7WX' => 'E02005955',
        '7WY' => 'E02005955',
        '7WZ' => 'E02005955',
        '7XA' => 'E02005964',
        '7XB' => 'E02005964',
        '7XD' => 'E02005964',
        '7XE' => 'E02005964',
        '7XF' => 'E02005964',
        '7XG' => 'E02005964',
        '7XH' => 'E02005964',
        '7XJ' => 'E02005964',
        '7XL' => 'E02005964',
        '7XN' => 'E02005964',
        '7XP' => 'E02005964',
        '7XQ' => 'E02005964',
        '7XR' => 'E02005964',
        '7XS' => 'E02005964',
        '7XT' => 'E02005955',
        '7XU' => 'E02005964',
        '7XW' => 'E02005964',
        '7XX' => 'E02005964',
        '7XY' => 'E02005964',
        '7XZ' => 'E02005964',
        '7YA' => 'E02005964',
        '7YB' => 'E02005964',
        '7YD' => 'E02005964',
        '7YE' => 'E02005964',
        '7YF' => 'E02005964',
        '7YG' => 'E02005955',
        '7YH' => 'E02005964',
        '7YJ' => 'E02005955',
        '7YL' => 'E02005955',
        '7YN' => 'E02005964',
        '7YP' => 'E02005964',
        '7YR' => 'E02005955',
        '7YS' => 'E02005955',
        '7YT' => 'E02005955',
        '7YU' => 'E02005964',
        '7YW' => 'E02005964',
        '7YX' => 'E02005955',
        '7ZG' => 'E02005955',
        '7ZH' => 'E02005955',
        '7ZJ' => 'E02005955',
        '7ZL' => 'E02005955',
        '7ZN' => 'E02005955',
        '7ZP' => 'E02005955',
        '7ZQ' => 'E02005955',
        '7ZU' => 'E02005955',
        '7ZW' => 'E02005955',
        '7ZY' => 'E02005955',
        '9AA' => 'E02005959',
        '9AB' => 'E02005959',
        '9AD' => 'E02005963',
        '9AE' => 'E02005959',
        '9AG' => 'E02005959',
        '9AH' => 'E02005963',
        '9AJ' => 'E02005959',
        '9AL' => 'E02005959',
        '9AN' => 'E02005959',
        '9AP' => 'E02005959',
        '9AQ' => 'E02005959',
        '9AR' => 'E02005963',
        '9AS' => 'E02005955',
        '9AT' => 'E02005959',
        '9AU' => 'E02005963',
        '9AW' => 'E02005963',
        '9AX' => 'E02005963',
        '9AY' => 'E02005963',
        '9AZ' => 'E02005963',
        '9BA' => 'E02005963',
        '9BB' => 'E02005963',
        '9BD' => 'E02005963',
        '9BE' => 'E02005963',
        '9BF' => 'E02005955',
        '9BG' => 'E02005963',
        '9BH' => 'E02005963',
        '9BJ' => 'E02005963',
        '9BL' => 'E02005963',
        '9BN' => 'E02005963',
        '9BP' => 'E02005959',
        '9BQ' => 'E02005963',
        '9BS' => 'E02005959',
        '9BT' => 'E02005963',
        '9BU' => 'E02005963',
        '9BW' => 'E02005963',
        '9BX' => 'E02005955',
        '9BZ' => 'E02005952',
        '9DA' => 'E02005959',
        '9DB' => 'E02005963',
        '9DD' => 'E02005963',
        '9DE' => 'E02005959',
        '9DF' => 'E02005963',
        '9DG' => 'E02005959',
        '9DH' => 'E02005963',
        '9DJ' => 'E02005963',
        '9DL' => 'E02005963',
        '9DN' => 'E02005963',
        '9DP' => 'E02005963',
        '9DQ' => 'E02005963',
        '9DR' => 'E02005959',
        '9DS' => 'E02005959',
        '9DT' => 'E02005959',
        '9DU' => 'E02005959',
        '9DW' => 'E02005963',
        '9DX' => 'E02005959',
        '9DY' => 'E02005959',
        '9DZ' => 'E02005959',
        '9EA' => 'E02005959',
        '9EB' => 'E02005963',
        '9ED' => 'E02005959',
        '9EE' => 'E02005963',
        '9EF' => 'E02005963',
        '9EH' => 'E02005955',
        '9EJ' => 'E02005959',
        '9EL' => 'E02005959',
        '9EN' => 'E02005959',
        '9EP' => 'E02005959',
        '9ER' => 'E02005959',
        '9ES' => 'E02005959',
        '9ET' => 'E02005959',
        '9EU' => 'E02005959',
        '9EW' => 'E02005959',
        '9EX' => 'E02005959',
        '9EY' => 'E02005959',
        '9EZ' => 'E02005959',
        '9HA' => 'E02005959',
        '9HB' => 'E02005959',
        '9HD' => 'E02005959',
        '9HE' => 'E02005959',
        '9HF' => 'E02005959',
        '9HG' => 'E02005959',
        '9HH' => 'E02005955',
        '9HJ' => 'E02005959',
        '9HL' => 'E02005959',
        '9HP' => 'E02005959',
        '9HQ' => 'E02005959',
        '9HY' => 'E02005959',
        '9HZ' => 'E02005959',
        '9JA' => 'E02005959',
        '9JB' => 'E02005959',
        '9JD' => 'E02005959',
        '9JE' => 'E02005959',
        '9JF' => 'E02005959',
        '9JG' => 'E02005959',
        '9JH' => 'E02005959',
        '9JJ' => 'E02005959',
        '9JL' => 'E02005959',
        '9JN' => 'E02005959',
        '9JP' => 'E02005959',
        '9JQ' => 'E02005959',
        '9JS' => 'E02005959',
        '9JT' => 'E02005959',
        '9JU' => 'E02005959',
        '9JW' => 'E02005959',
        '9JZ' => 'E02005959',
        '9LH' => 'E02005963',
        '9LJ' => 'E02005963',
        '9LL' => 'E02005963',
        '9LN' => 'E02005963',
        '9LP' => 'E02005963',
        '9LR' => 'E02005963',
        '9LS' => 'E02005963',
        '9LT' => 'E02005963',
        '9LU' => 'E02005955',
        '9LW' => 'E02005963',
        '9ND' => 'E02005963',
        '9NE' => 'E02005963',
        '9NF' => 'E02005963',
        '9NG' => 'E02005963',
        '9NH' => 'E02005963',
        '9NJ' => 'E02005963',
        '9NQ' => 'E02005963',
        '9NX' => 'E02005963',
        '9NY' => 'E02005963',
        '9NZ' => 'E02005963',
        '9PA' => 'E02005963',
        '9PB' => 'E02005963',
        '9PD' => 'E02005963',
        '9PE' => 'E02005963',
        '9PF' => 'E02005963',
        '9PG' => 'E02005963',
        '9PH' => 'E02005963',
        '9PJ' => 'E02005963',
        '9PL' => 'E02005963',
        '9PN' => 'E02005963',
        '9PP' => 'E02005963',
        '9PQ' => 'E02005963',
        '9PR' => 'E02005963',
        '9PU' => 'E02005963',
        '9PW' => 'E02005963',
        '9PX' => 'E02005963',
        '9PY' => 'E02005963',
        '9QH' => 'E02005963',
        '9QJ' => 'E02005963',
        '9QL' => 'E02005963',
        '9QP' => 'E02005955',
        '9QR' => 'E02005963',
        '9QS' => 'E02005955',
        '9QT' => 'E02005955',
        '9QU' => 'E02005955',
        '9QX' => 'E02005955',
        '9WZ' => 'E02005955',
        '9XZ' => 'E02005955',
        '9YT' => 'E02005955',
        '9YU' => 'E02005955',
        '9YX' => 'E02005963',
        '9ZJ' => 'E02005955',
        '9ZN' => 'E02005955',
        '9ZQ' => 'E02005955',
        '9ZR' => 'E02005955',
        '9ZX' => 'E02005955',
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
