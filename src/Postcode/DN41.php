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
final class DN41
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02002732',
        '7AB' => 'E02002732',
        '7AD' => 'E02002732',
        '7AE' => 'E02002732',
        '7AF' => 'E02002732',
        '7JA' => 'E02002732',
        '7JB' => 'E02002732',
        '7JD' => 'E02002732',
        '7JE' => 'E02002732',
        '7JF' => 'E02002732',
        '7JG' => 'E02002732',
        '7JH' => 'E02002732',
        '7JJ' => 'E02002732',
        '7JN' => 'E02002732',
        '7JP' => 'E02002732',
        '7JQ' => 'E02002732',
        '7JR' => 'E02002732',
        '7JS' => 'E02002732',
        '7JU' => 'E02002732',
        '7LP' => 'E02002732',
        '7LW' => 'E02002732',
        '7LX' => 'E02002732',
        '7LY' => 'E02002732',
        '7LZ' => 'E02002732',
        '7NA' => 'E02002732',
        '7NB' => 'E02002732',
        '7ND' => 'E02002732',
        '7NE' => 'E02002732',
        '7NG' => 'E02002732',
        '7NH' => 'E02002732',
        '7NJ' => 'E02002732',
        '7NL' => 'E02002732',
        '7NN' => 'E02002732',
        '7NP' => 'E02002732',
        '7NQ' => 'E02002732',
        '7NR' => 'E02002732',
        '7NS' => 'E02002732',
        '7NT' => 'E02002732',
        '7NU' => 'E02002732',
        '7NW' => 'E02002732',
        '7NX' => 'E02002732',
        '7PA' => 'E02002732',
        '7PH' => 'E02002732',
        '7PJ' => 'E02002732',
        '7PL' => 'E02002732',
        '7PN' => 'E02002732',
        '7PP' => 'E02002732',
        '7PR' => 'E02002732',
        '7PS' => 'E02002732',
        '7PT' => 'E02002732',
        '7PU' => 'E02002732',
        '7PW' => 'E02002732',
        '7PX' => 'E02002732',
        '7PY' => 'E02002732',
        '7PZ' => 'E02002732',
        '7QA' => 'E02002732',
        '7QB' => 'E02002732',
        '7QD' => 'E02002732',
        '7QE' => 'E02002732',
        '7QF' => 'E02002732',
        '7QG' => 'E02002732',
        '7QH' => 'E02002732',
        '7QJ' => 'E02002732',
        '7QL' => 'E02002732',
        '7QN' => 'E02002732',
        '7QP' => 'E02002732',
        '7QQ' => 'E02002732',
        '7QR' => 'E02002732',
        '7QS' => 'E02002732',
        '7QT' => 'E02002732',
        '7QU' => 'E02002732',
        '7QW' => 'E02002732',
        '7QY' => 'E02002732',
        '7RB' => 'E02002732',
        '7RD' => 'E02002732',
        '7RE' => 'E02002732',
        '7RF' => 'E02002732',
        '7RG' => 'E02002732',
        '7RH' => 'E02002732',
        '7RJ' => 'E02002732',
        '7RL' => 'E02002732',
        '7RN' => 'E02002732',
        '7RP' => 'E02002732',
        '7RQ' => 'E02002732',
        '7RR' => 'E02002732',
        '7RS' => 'E02002732',
        '7RT' => 'E02002732',
        '7RU' => 'E02002732',
        '7RW' => 'E02002732',
        '7RX' => 'E02002732',
        '7RY' => 'E02002732',
        '7RZ' => 'E02002732',
        '7SA' => 'E02002732',
        '7SB' => 'E02002732',
        '7SL' => 'E02002732',
        '7SP' => 'E02002732',
        '7SR' => 'E02002732',
        '7WW' => 'E02002726',
        '7WX' => 'E02002726',
        '7WY' => 'E02002726',
        '7WZ' => 'E02002726',
        '7XD' => 'E02002732',
        '7YA' => 'E02002726',
        '7YB' => 'E02002726',
        '7ZW' => 'E02002726',
        '8AA' => 'E02002732',
        '8AB' => 'E02002732',
        '8AD' => 'E02002732',
        '8AE' => 'E02002732',
        '8AF' => 'E02002732',
        '8AG' => 'E02002732',
        '8AH' => 'E02002732',
        '8AJ' => 'E02002732',
        '8AL' => 'E02002732',
        '8AN' => 'E02002732',
        '8AP' => 'E02002732',
        '8AQ' => 'E02002732',
        '8AR' => 'E02002732',
        '8AS' => 'E02002732',
        '8AT' => 'E02002732',
        '8AU' => 'E02002732',
        '8AW' => 'E02002732',
        '8AX' => 'E02002732',
        '8AY' => 'E02002732',
        '8AZ' => 'E02002732',
        '8BA' => 'E02002732',
        '8BB' => 'E02002732',
        '8BD' => 'E02002732',
        '8BE' => 'E02002732',
        '8BF' => 'E02002732',
        '8BG' => 'E02002732',
        '8BH' => 'E02002732',
        '8BJ' => 'E02002732',
        '8BL' => 'E02002732',
        '8BN' => 'E02002732',
        '8BP' => 'E02002726',
        '8BQ' => 'E02002732',
        '8BS' => 'E02002732',
        '8BT' => 'E02002732',
        '8BU' => 'E02002732',
        '8BW' => 'E02002732',
        '8BX' => 'E02002732',
        '8BY' => 'E02002732',
        '8BZ' => 'E02002732',
        '8DA' => 'E02002732',
        '8DB' => 'E02002732',
        '8DD' => 'E02002732',
        '8DE' => 'E02005492',
        '8DF' => 'E02002732',
        '8DG' => 'E02002732',
        '8DH' => 'E02005492',
        '8DJ' => 'E02002732',
        '8DL' => 'E02002732',
        '8DN' => 'E02002732',
        '8DP' => 'E02002726',
        '8DQ' => 'E02002732',
        '8DR' => 'E02002726',
        '8DS' => 'E02002732',
        '8DT' => 'E02002732',
        '8DU' => 'E02002732',
        '8DW' => 'E02002732',
        '8DX' => 'E02002726',
        '8DY' => 'E02002732',
        '8DZ' => 'E02002732',
        '8EA' => 'E02005492',
        '8EB' => 'E02005492',
        '8ED' => 'E02005492',
        '8EE' => 'E02005492',
        '8EF' => 'E02005492',
        '8EG' => 'E02005492',
        '8EH' => 'E02005492',
        '8EJ' => 'E02005492',
        '8EL' => 'E02005492',
        '8EN' => 'E02005492',
        '8EP' => 'E02005492',
        '8EQ' => 'E02005492',
        '8ER' => 'E02005492',
        '8ES' => 'E02005492',
        '8ET' => 'E02005492',
        '8EU' => 'E02005492',
        '8EW' => 'E02005492',
        '8EX' => 'E02005492',
        '8EY' => 'E02005492',
        '8EZ' => 'E02005492',
        '8FA' => 'E02005492',
        '8FB' => 'E02005492',
        '8FD' => 'E02002732',
        '8FE' => 'E02002732',
        '8FG' => 'E02002726',
        '8FL' => 'E02002732',
        '8FN' => 'E02002732',
        '8GA' => 'E02002732',
        '8HA' => 'E02005492',
        '8HB' => 'E02005492',
        '8HD' => 'E02005492',
        '8HE' => 'E02005492',
        '8HF' => 'E02005492',
        '8HG' => 'E02005492',
        '8HH' => 'E02005492',
        '8HJ' => 'E02005492',
        '8HL' => 'E02005492',
        '8HN' => 'E02005492',
        '8HP' => 'E02005492',
        '8HQ' => 'E02005492',
        '8HR' => 'E02005492',
        '8HS' => 'E02005492',
        '8HT' => 'E02005492',
        '8HU' => 'E02005492',
        '8HW' => 'E02005492',
        '8HX' => 'E02005492',
        '8HY' => 'E02005492',
        '8HZ' => 'E02005492',
        '8JA' => 'E02005492',
        '8JB' => 'E02005492',
        '8JD' => 'E02002732',
        '8JE' => 'E02005492',
        '8JF' => 'E02005492',
        '8JG' => 'E02005492',
        '8JH' => 'E02005492',
        '8JJ' => 'E02002732',
        '8JQ' => 'E02005492',
        '8NB' => 'E02005492',
        '8PH' => 'E02005492',
        '8PJ' => 'E02005492',
        '8PN' => 'E02005492',
        '8PP' => 'E02005492',
        '8PW' => 'E02005492',
        '8RA' => 'E02005492',
        '8RB' => 'E02005492',
        '8RD' => 'E02005492',
        '8RE' => 'E02005492',
        '8SA' => 'E02005492',
        '8SB' => 'E02005492',
        '8SD' => 'E02005492',
        '8SE' => 'E02005492',
        '8SF' => 'E02005492',
        '8SG' => 'E02005492',
        '8SH' => 'E02005492',
        '8SL' => 'E02005492',
        '8SN' => 'E02002726',
        '8SR' => 'E02002726',
        '8SW' => 'E02005492',
        '8TA' => 'E02002732',
        '8TB' => 'E02002732',
        '8TE' => 'E02002726',
        '8TG' => 'E02002732',
        '8TH' => 'E02002732',
        '8TP' => 'E02005492',
        '8TQ' => 'E02002732',
        '8TX' => 'E02002726',
        '8WW' => 'E02002726',
        '8WX' => 'E02002726',
        '8WY' => 'E02002726',
        '8WZ' => 'E02002726',
        '8XA' => 'E02002726',
        '8XB' => 'E02002732',
        '8XD' => 'E02002732',
        '8XE' => 'E02002732',
        '8XF' => 'E02002732',
        '8XG' => 'E02005492',
        '8XH' => 'E02002732',
        '8XJ' => 'E02002726',
        '8XL' => 'E02002726',
        '8XN' => 'E02002726',
        '8YZ' => 'E02002726',
        '8ZU' => 'E02002726',
        '8ZY' => 'E02002726',
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
