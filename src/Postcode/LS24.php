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
final class LS24
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02005809',
        '0AB' => 'E02005809',
        '0AD' => 'E02005809',
        '0AE' => 'E02005809',
        '0AF' => 'E02005809',
        '0AG' => 'E02005809',
        '0AH' => 'E02005809',
        '0AJ' => 'E02005809',
        '0AL' => 'E02005809',
        '0AN' => 'E02005809',
        '0AP' => 'E02005809',
        '0AQ' => 'E02005809',
        '0AR' => 'E02005809',
        '0AS' => 'E02005809',
        '0AT' => 'E02005809',
        '0AU' => 'E02005809',
        '0AX' => 'E02005809',
        '0AY' => 'E02005809',
        '0AZ' => 'E02005809',
        '0BA' => 'E02005809',
        '0BB' => 'E02005809',
        '0BD' => 'E02005809',
        '0BE' => 'E02005809',
        '0BF' => 'E02005809',
        '0BG' => 'E02005809',
        '0BH' => 'E02005809',
        '0BJ' => 'E02005809',
        '0BL' => 'E02005809',
        '0BN' => 'E02005809',
        '0BP' => 'E02005809',
        '0BQ' => 'E02005809',
        '0BR' => 'E02005809',
        '0BS' => 'E02005809',
        '0BT' => 'E02005809',
        '8AA' => 'E02005809',
        '8AB' => 'E02005809',
        '8AD' => 'E02005809',
        '8AE' => 'E02005809',
        '8AF' => 'E02005809',
        '8AG' => 'E02005809',
        '8AH' => 'E02005809',
        '8AJ' => 'E02005809',
        '8AL' => 'E02005809',
        '8AN' => 'E02005809',
        '8AP' => 'E02005809',
        '8AQ' => 'E02005809',
        '8AR' => 'E02005809',
        '8AS' => 'E02005809',
        '8AT' => 'E02005809',
        '8AU' => 'E02005809',
        '8AW' => 'E02005809',
        '8AX' => 'E02005809',
        '8AY' => 'E02005809',
        '8AZ' => 'E02005809',
        '8BA' => 'E02005809',
        '8BB' => 'E02005809',
        '8BD' => 'E02005809',
        '8BE' => 'E02005776',
        '8BF' => 'E02005810',
        '8BG' => 'E02005776',
        '8BH' => 'E02005776',
        '8BJ' => 'E02002331',
        '8BL' => 'E02005776',
        '8BN' => 'E02005776',
        '8BP' => 'E02005776',
        '8BQ' => 'E02005776',
        '8BR' => 'E02005776',
        '8BS' => 'E02005776',
        '8BT' => 'E02005776',
        '8BU' => 'E02005810',
        '8BW' => 'E02005776',
        '8BX' => 'E02005810',
        '8BY' => 'E02005810',
        '8BZ' => 'E02005810',
        '8DA' => 'E02005810',
        '8DB' => 'E02005810',
        '8DD' => 'E02005810',
        '8DE' => 'E02005810',
        '8DF' => 'E02005810',
        '8DG' => 'E02005810',
        '8DH' => 'E02005810',
        '8DJ' => 'E02005810',
        '8DL' => 'E02005810',
        '8DN' => 'E02005809',
        '8DP' => 'E02005809',
        '8DQ' => 'E02005810',
        '8DR' => 'E02005809',
        '8DS' => 'E02005809',
        '8DT' => 'E02005809',
        '8DU' => 'E02005809',
        '8DW' => 'E02005809',
        '8DX' => 'E02005809',
        '8DY' => 'E02005809',
        '8DZ' => 'E02005809',
        '8EA' => 'E02005809',
        '8EB' => 'E02005809',
        '8ED' => 'E02005810',
        '8EE' => 'E02005810',
        '8EF' => 'E02005810',
        '8EG' => 'E02005810',
        '8EH' => 'E02005810',
        '8EJ' => 'E02005810',
        '8EL' => 'E02005810',
        '8EN' => 'E02005810',
        '8EP' => 'E02005810',
        '8EQ' => 'E02005810',
        '8ER' => 'E02005810',
        '8ES' => 'E02005810',
        '8ET' => 'E02005810',
        '8EU' => 'E02005809',
        '8EW' => 'E02005810',
        '8EX' => 'E02005809',
        '8EY' => 'E02005809',
        '8EZ' => 'E02005809',
        '8FA' => 'E02005809',
        '8HA' => 'E02005810',
        '8HB' => 'E02005810',
        '8HD' => 'E02005809',
        '8HE' => 'E02005810',
        '8HF' => 'E02005810',
        '8HG' => 'E02005810',
        '8HH' => 'E02005810',
        '8HJ' => 'E02005809',
        '8HL' => 'E02005809',
        '8HN' => 'E02005810',
        '8HP' => 'E02005809',
        '8HQ' => 'E02005810',
        '8HR' => 'E02005809',
        '8HS' => 'E02005809',
        '8HT' => 'E02005809',
        '8HU' => 'E02005809',
        '8HW' => 'E02005809',
        '8HX' => 'E02005809',
        '8HY' => 'E02005809',
        '8HZ' => 'E02005809',
        '8JA' => 'E02005809',
        '8JB' => 'E02005809',
        '8JD' => 'E02005809',
        '8JE' => 'E02005809',
        '8JF' => 'E02005809',
        '8JG' => 'E02005776',
        '8JJ' => 'E02005810',
        '8JQ' => 'E02005810',
        '8JS' => 'E02005809',
        '8JT' => 'E02005809',
        '8JU' => 'E02005809',
        '8JX' => 'E02005809',
        '8LA' => 'E02005776',
        '8LX' => 'E02005809',
        '8LY' => 'E02005809',
        '8LZ' => 'E02005809',
        '8NA' => 'E02005809',
        '8WA' => 'E02005809',
        '8WW' => 'E02005809',
        '8WX' => 'E02005809',
        '8WY' => 'E02005809',
        '8WZ' => 'E02005809',
        '8XB' => 'E02005809',
        '8XD' => 'E02005809',
        '8XE' => 'E02005809',
        '8XF' => 'E02005809',
        '8XG' => 'E02005809',
        '8XH' => 'E02005809',
        '8XJ' => 'E02005809',
        '8XL' => 'E02005809',
        '8XN' => 'E02005809',
        '8XQ' => 'E02005809',
        '9AA' => 'E02005809',
        '9AB' => 'E02005809',
        '9AD' => 'E02005809',
        '9AE' => 'E02005809',
        '9AF' => 'E02005809',
        '9AG' => 'E02005809',
        '9AH' => 'E02005809',
        '9AJ' => 'E02005809',
        '9AL' => 'E02005809',
        '9AN' => 'E02005809',
        '9AP' => 'E02005809',
        '9AQ' => 'E02005809',
        '9AR' => 'E02005809',
        '9AS' => 'E02005809',
        '9AT' => 'E02005809',
        '9AU' => 'E02005809',
        '9AW' => 'E02005809',
        '9AX' => 'E02005809',
        '9AY' => 'E02005809',
        '9AZ' => 'E02005810',
        '9BA' => 'E02005809',
        '9BB' => 'E02005809',
        '9BD' => 'E02005809',
        '9BE' => 'E02005809',
        '9BF' => 'E02005810',
        '9BG' => 'E02005809',
        '9BH' => 'E02005809',
        '9BJ' => 'E02005809',
        '9BL' => 'E02005809',
        '9BN' => 'E02005809',
        '9BP' => 'E02005809',
        '9BQ' => 'E02005809',
        '9BR' => 'E02005809',
        '9BS' => 'E02005809',
        '9BT' => 'E02005809',
        '9BU' => 'E02005810',
        '9BW' => 'E02005809',
        '9BX' => 'E02005810',
        '9BY' => 'E02005810',
        '9BZ' => 'E02005810',
        '9DA' => 'E02005810',
        '9DB' => 'E02005810',
        '9DD' => 'E02005810',
        '9DE' => 'E02005810',
        '9DF' => 'E02005810',
        '9DG' => 'E02005810',
        '9DH' => 'E02005810',
        '9DJ' => 'E02005810',
        '9DL' => 'E02005810',
        '9DN' => 'E02005809',
        '9DP' => 'E02005810',
        '9DQ' => 'E02005810',
        '9DR' => 'E02005810',
        '9DS' => 'E02005810',
        '9DT' => 'E02005810',
        '9DU' => 'E02005810',
        '9DW' => 'E02005810',
        '9DX' => 'E02005810',
        '9DY' => 'E02005810',
        '9DZ' => 'E02005810',
        '9EA' => 'E02005810',
        '9EB' => 'E02005810',
        '9ED' => 'E02005810',
        '9EE' => 'E02005810',
        '9EF' => 'E02005810',
        '9EG' => 'E02005810',
        '9EH' => 'E02005810',
        '9EJ' => 'E02005810',
        '9EL' => 'E02005810',
        '9EN' => 'E02005810',
        '9EP' => 'E02005810',
        '9EQ' => 'E02005810',
        '9ER' => 'E02005810',
        '9ES' => 'E02005810',
        '9ET' => 'E02005810',
        '9EU' => 'E02005810',
        '9EW' => 'E02005810',
        '9EX' => 'E02005810',
        '9EY' => 'E02005810',
        '9EZ' => 'E02005810',
        '9FA' => 'E02005809',
        '9FB' => 'E02005809',
        '9FD' => 'E02005809',
        '9FE' => 'E02005809',
        '9FF' => 'E02005809',
        '9FG' => 'E02005809',
        '9FH' => 'E02005809',
        '9FJ' => 'E02005809',
        '9FL' => 'E02005809',
        '9FN' => 'E02005809',
        '9FP' => 'E02005809',
        '9FQ' => 'E02005810',
        '9FR' => 'E02005810',
        '9FS' => 'E02005810',
        '9FT' => 'E02005810',
        '9FU' => 'E02005810',
        '9FW' => 'E02005810',
        '9FX' => 'E02005809',
        '9FZ' => 'E02005809',
        '9GZ' => 'E02005810',
        '9HA' => 'E02005809',
        '9HB' => 'E02005809',
        '9HD' => 'E02005809',
        '9HE' => 'E02005809',
        '9HF' => 'E02005809',
        '9HG' => 'E02005809',
        '9HH' => 'E02005809',
        '9HJ' => 'E02005809',
        '9HL' => 'E02005809',
        '9HN' => 'E02005809',
        '9HP' => 'E02005809',
        '9HQ' => 'E02005809',
        '9HR' => 'E02005809',
        '9HS' => 'E02005809',
        '9HT' => 'E02005809',
        '9HU' => 'E02005809',
        '9HW' => 'E02005809',
        '9HX' => 'E02005809',
        '9HY' => 'E02005809',
        '9HZ' => 'E02005809',
        '9JA' => 'E02005809',
        '9JB' => 'E02005809',
        '9JD' => 'E02005809',
        '9JE' => 'E02005809',
        '9JF' => 'E02005809',
        '9JG' => 'E02005809',
        '9JH' => 'E02005809',
        '9JJ' => 'E02005809',
        '9JL' => 'E02005809',
        '9JN' => 'E02005809',
        '9JP' => 'E02005809',
        '9JQ' => 'E02005809',
        '9JR' => 'E02005809',
        '9JS' => 'E02005809',
        '9JT' => 'E02005809',
        '9JU' => 'E02005809',
        '9JW' => 'E02005809',
        '9JX' => 'E02005809',
        '9JY' => 'E02005809',
        '9JZ' => 'E02005809',
        '9LA' => 'E02005809',
        '9LB' => 'E02005809',
        '9LD' => 'E02005809',
        '9LE' => 'E02005809',
        '9LF' => 'E02005809',
        '9LG' => 'E02005809',
        '9LH' => 'E02005809',
        '9LJ' => 'E02005809',
        '9LL' => 'E02005809',
        '9LN' => 'E02005809',
        '9LP' => 'E02005809',
        '9LQ' => 'E02005809',
        '9LR' => 'E02005809',
        '9LS' => 'E02005809',
        '9LT' => 'E02002334',
        '9LU' => 'E02005809',
        '9LW' => 'E02005809',
        '9LX' => 'E02005809',
        '9LY' => 'E02005809',
        '9LZ' => 'E02005809',
        '9NA' => 'E02005809',
        '9NB' => 'E02005809',
        '9ND' => 'E02005809',
        '9NE' => 'E02005809',
        '9NF' => 'E02005809',
        '9NG' => 'E02005810',
        '9NH' => 'E02005809',
        '9NJ' => 'E02005809',
        '9NL' => 'E02005809',
        '9NN' => 'E02005809',
        '9NP' => 'E02002359',
        '9NQ' => 'E02005809',
        '9NR' => 'E02002359',
        '9NS' => 'E02002334',
        '9NT' => 'E02002334',
        '9NU' => 'E02002334',
        '9NW' => 'E02002359',
        '9NX' => 'E02005809',
        '9NY' => 'E02005809',
        '9NZ' => 'E02005809',
        '9PA' => 'E02005809',
        '9PB' => 'E02005810',
        '9PD' => 'E02005810',
        '9PE' => 'E02005810',
        '9PF' => 'E02005810',
        '9PG' => 'E02005810',
        '9PH' => 'E02005810',
        '9PJ' => 'E02005810',
        '9PL' => 'E02005810',
        '9PN' => 'E02005810',
        '9PP' => 'E02005810',
        '9PQ' => 'E02005810',
        '9PR' => 'E02005810',
        '9PS' => 'E02005810',
        '9PT' => 'E02005810',
        '9PU' => 'E02005810',
        '9PW' => 'E02005810',
        '9PX' => 'E02005810',
        '9PY' => 'E02005810',
        '9PZ' => 'E02005810',
        '9QA' => 'E02005810',
        '9QB' => 'E02005810',
        '9QD' => 'E02005810',
        '9QE' => 'E02005810',
        '9QF' => 'E02005810',
        '9QG' => 'E02005810',
        '9QH' => 'E02005810',
        '9QJ' => 'E02005810',
        '9QL' => 'E02005810',
        '9QN' => 'E02005810',
        '9QP' => 'E02005809',
        '9QQ' => 'E02005810',
        '9QR' => 'E02005810',
        '9QS' => 'E02005810',
        '9QT' => 'E02005810',
        '9QU' => 'E02005810',
        '9QW' => 'E02005809',
        '9QX' => 'E02005810',
        '9QY' => 'E02005810',
        '9QZ' => 'E02005810',
        '9RA' => 'E02005810',
        '9RB' => 'E02005810',
        '9RD' => 'E02005810',
        '9RE' => 'E02005810',
        '9RF' => 'E02005810',
        '9RG' => 'E02005810',
        '9RH' => 'E02005810',
        '9RJ' => 'E02005810',
        '9RL' => 'E02005810',
        '9RN' => 'E02005810',
        '9RP' => 'E02005810',
        '9RQ' => 'E02005810',
        '9RR' => 'E02005810',
        '9RS' => 'E02005810',
        '9RT' => 'E02005810',
        '9RU' => 'E02005810',
        '9RW' => 'E02005810',
        '9RX' => 'E02005810',
        '9RY' => 'E02005810',
        '9RZ' => 'E02005810',
        '9SA' => 'E02005809',
        '9SB' => 'E02005809',
        '9SD' => 'E02005809',
        '9SE' => 'E02005810',
        '9SF' => 'E02005809',
        '9SG' => 'E02005809',
        '9SH' => 'E02005809',
        '9SJ' => 'E02005810',
        '9SL' => 'E02005809',
        '9SN' => 'E02005809',
        '9SP' => 'E02005809',
        '9SR' => 'E02005809',
        '9SS' => 'E02005810',
        '9ST' => 'E02005810',
        '9SU' => 'E02005810',
        '9SW' => 'E02005809',
        '9SX' => 'E02005810',
        '9SY' => 'E02005809',
        '9SZ' => 'E02005810',
        '9TA' => 'E02005810',
        '9TB' => 'E02005810',
        '9TD' => 'E02005809',
        '9TE' => 'E02005809',
        '9TF' => 'E02005810',
        '9TG' => 'E02005809',
        '9TH' => 'E02005809',
        '9TJ' => 'E02005809',
        '9TL' => 'E02005810',
        '9TN' => 'E02005809',
        '9TP' => 'E02005810',
        '9TQ' => 'E02005809',
        '9TS' => 'E02005810',
        '9TT' => 'E02005810',
        '9TU' => 'E02005810',
        '9TW' => 'E02005810',
        '9TX' => 'E02005810',
        '9TY' => 'E02005810',
        '9TZ' => 'E02005809',
        '9UA' => 'E02005809',
        '9UB' => 'E02005809',
        '9UD' => 'E02005809',
        '9UE' => 'E02005810',
        '9UF' => 'E02005809',
        '9UG' => 'E02005810',
        '9UH' => 'E02005810',
        '9UJ' => 'E02005810',
        '9UL' => 'E02005809',
        '9UN' => 'E02005810',
        '9UP' => 'E02005809',
        '9UQ' => 'E02005809',
        '9UR' => 'E02005810',
        '9US' => 'E02005810',
        '9UT' => 'E02005810',
        '9UU' => 'E02005809',
        '9UW' => 'E02005809',
        '9UX' => 'E02005809',
        '9UY' => 'E02005809',
        '9UZ' => 'E02005810',
        '9WA' => 'E02005810',
        '9WB' => 'E02005809',
        '9WD' => 'E02005810',
        '9WE' => 'E02005810',
        '9WF' => 'E02005810',
        '9WG' => 'E02005810',
        '9WH' => 'E02005810',
        '9WL' => 'E02005809',
        '9WN' => 'E02005809',
        '9WP' => 'E02005809',
        '9WQ' => 'E02005809',
        '9WR' => 'E02005809',
        '9WS' => 'E02005809',
        '9WT' => 'E02005810',
        '9WU' => 'E02005810',
        '9WW' => 'E02005810',
        '9WX' => 'E02005810',
        '9WY' => 'E02005809',
        '9WZ' => 'E02005809',
        '9XA' => 'E02005810',
        '9XB' => 'E02005810',
        '9XD' => 'E02005809',
        '9XE' => 'E02005809',
        '9XF' => 'E02005809',
        '9XG' => 'E02005809',
        '9XH' => 'E02005810',
        '9XJ' => 'E02005809',
        '9XL' => 'E02005809',
        '9XN' => 'E02005809',
        '9XP' => 'E02005810',
        '9XQ' => 'E02005809',
        '9XR' => 'E02005810',
        '9XS' => 'E02005809',
        '9XT' => 'E02005810',
        '9XU' => 'E02005810',
        '9XW' => 'E02005809',
        '9XX' => 'E02005809',
        '9XY' => 'E02005809',
        '9XZ' => 'E02005809',
        '9YA' => 'E02005809',
        '9YB' => 'E02005809',
        '9YD' => 'E02005809',
        '9YE' => 'E02005809',
        '9YF' => 'E02005809',
        '9YG' => 'E02005809',
        '9YH' => 'E02005809',
        '9YJ' => 'E02005809',
        '9YQ' => 'E02005810',
        '9YR' => 'E02005810',
        '9YS' => 'E02005810',
        '9YT' => 'E02005810',
        '9YU' => 'E02005810',
        '9YW' => 'E02005810',
        '9YZ' => 'E02005809',
        '9ZX' => 'E02005809',
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