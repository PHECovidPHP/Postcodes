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
final class CT8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8AA' => 'E02005138',
        '8AB' => 'E02005138',
        '8AD' => 'E02005138',
        '8AE' => 'E02005138',
        '8AF' => 'E02005138',
        '8AG' => 'E02005138',
        '8AH' => 'E02005138',
        '8AJ' => 'E02005138',
        '8AL' => 'E02005138',
        '8AN' => 'E02005136',
        '8AP' => 'E02005136',
        '8AQ' => 'E02005138',
        '8AR' => 'E02005136',
        '8AS' => 'E02005138',
        '8AT' => 'E02005138',
        '8AU' => 'E02005138',
        '8AW' => 'E02005136',
        '8AX' => 'E02005138',
        '8AY' => 'E02005138',
        '8AZ' => 'E02005138',
        '8BA' => 'E02005138',
        '8BB' => 'E02005138',
        '8BE' => 'E02005138',
        '8BF' => 'E02005138',
        '8BG' => 'E02005138',
        '8BH' => 'E02005138',
        '8BJ' => 'E02005138',
        '8BL' => 'E02005138',
        '8BN' => 'E02005138',
        '8BP' => 'E02005138',
        '8BQ' => 'E02005138',
        '8BS' => 'E02005138',
        '8BT' => 'E02005138',
        '8BU' => 'E02005138',
        '8BW' => 'E02005138',
        '8BX' => 'E02005138',
        '8BY' => 'E02005138',
        '8BZ' => 'E02005138',
        '8DA' => 'E02005138',
        '8DB' => 'E02005138',
        '8DD' => 'E02005135',
        '8DE' => 'E02005138',
        '8DF' => 'E02005138',
        '8DG' => 'E02005138',
        '8DH' => 'E02005136',
        '8DJ' => 'E02005138',
        '8DL' => 'E02005136',
        '8DN' => 'E02005136',
        '8DP' => 'E02005138',
        '8DQ' => 'E02005138',
        '8DR' => 'E02005138',
        '8DS' => 'E02005138',
        '8DT' => 'E02005138',
        '8DU' => 'E02005138',
        '8DW' => 'E02005138',
        '8DX' => 'E02005138',
        '8DY' => 'E02005138',
        '8DZ' => 'E02005138',
        '8EA' => 'E02005138',
        '8EB' => 'E02005138',
        '8ED' => 'E02005138',
        '8EE' => 'E02005138',
        '8EF' => 'E02005138',
        '8EG' => 'E02005138',
        '8EH' => 'E02005138',
        '8EJ' => 'E02005138',
        '8EL' => 'E02005138',
        '8EN' => 'E02005138',
        '8EP' => 'E02005138',
        '8EQ' => 'E02005135',
        '8ER' => 'E02005138',
        '8ES' => 'E02005138',
        '8ET' => 'E02005138',
        '8EU' => 'E02005138',
        '8EW' => 'E02005138',
        '8EX' => 'E02005138',
        '8EY' => 'E02005138',
        '8EZ' => 'E02005135',
        '8FB' => 'E02005138',
        '8FD' => 'E02005138',
        '8FF' => 'E02005138',
        '8FG' => 'E02005138',
        '8FH' => 'E02005138',
        '8FJ' => 'E02005138',
        '8FZ' => 'E02005138',
        '8GA' => 'E02005138',
        '8GB' => 'E02005135',
        '8GD' => 'E02005138',
        '8GE' => 'E02005138',
        '8GF' => 'E02005138',
        '8GG' => 'E02005138',
        '8GH' => 'E02005138',
        '8GJ' => 'E02005138',
        '8GL' => 'E02005135',
        '8GN' => 'E02005135',
        '8GS' => 'E02005138',
        '8GT' => 'E02005138',
        '8GW' => 'E02005135',
        '8GY' => 'E02005138',
        '8HA' => 'E02005138',
        '8HB' => 'E02005138',
        '8HD' => 'E02005138',
        '8HE' => 'E02005138',
        '8HF' => 'E02005138',
        '8HG' => 'E02005138',
        '8HH' => 'E02005138',
        '8HJ' => 'E02005138',
        '8HL' => 'E02005138',
        '8HN' => 'E02005138',
        '8HP' => 'E02005138',
        '8HQ' => 'E02005138',
        '8HR' => 'E02005138',
        '8HS' => 'E02005138',
        '8HT' => 'E02005138',
        '8HU' => 'E02005138',
        '8HX' => 'E02005138',
        '8JA' => 'E02005138',
        '8JB' => 'E02005138',
        '8JD' => 'E02005138',
        '8JE' => 'E02005138',
        '8JG' => 'E02005138',
        '8JH' => 'E02005138',
        '8JJ' => 'E02005136',
        '8JL' => 'E02005136',
        '8JQ' => 'E02005138',
        '8JS' => 'E02005136',
        '8JT' => 'E02005138',
        '8JU' => 'E02005138',
        '8JX' => 'E02005138',
        '8LA' => 'E02005138',
        '8LB' => 'E02005138',
        '8LD' => 'E02005138',
        '8LE' => 'E02005138',
        '8LG' => 'E02005138',
        '8LH' => 'E02005138',
        '8LJ' => 'E02005138',
        '8LN' => 'E02005138',
        '8LP' => 'E02005138',
        '8LT' => 'E02005138',
        '8LU' => 'E02005138',
        '8LW' => 'E02005138',
        '8LX' => 'E02005138',
        '8LY' => 'E02005134',
        '8LZ' => 'E02005138',
        '8NA' => 'E02005138',
        '8NB' => 'E02005138',
        '8ND' => 'E02005138',
        '8NE' => 'E02005138',
        '8NF' => 'E02005138',
        '8NG' => 'E02005138',
        '8NH' => 'E02005138',
        '8NJ' => 'E02005138',
        '8NL' => 'E02005138',
        '8NN' => 'E02005138',
        '8NP' => 'E02005138',
        '8NQ' => 'E02005138',
        '8NR' => 'E02005138',
        '8NS' => 'E02005138',
        '8NT' => 'E02005138',
        '8NU' => 'E02005138',
        '8NW' => 'E02005138',
        '8NX' => 'E02005138',
        '8NY' => 'E02005138',
        '8NZ' => 'E02005138',
        '8PA' => 'E02005138',
        '8PB' => 'E02005138',
        '8PD' => 'E02005138',
        '8PE' => 'E02005138',
        '8PF' => 'E02005138',
        '8PG' => 'E02005138',
        '8PH' => 'E02005138',
        '8PJ' => 'E02005138',
        '8PL' => 'E02005138',
        '8PP' => 'E02005138',
        '8PR' => 'E02005138',
        '8PS' => 'E02005138',
        '8PT' => 'E02005138',
        '8PX' => 'E02005138',
        '8PY' => 'E02005138',
        '8PZ' => 'E02005138',
        '8QA' => 'E02005138',
        '8QB' => 'E02005138',
        '8QD' => 'E02005138',
        '8QE' => 'E02005138',
        '8QF' => 'E02005138',
        '8QG' => 'E02005138',
        '8QH' => 'E02005138',
        '8QJ' => 'E02005138',
        '8QL' => 'E02005138',
        '8QN' => 'E02005138',
        '8QP' => 'E02005138',
        '8QQ' => 'E02005138',
        '8QR' => 'E02005138',
        '8QS' => 'E02005138',
        '8QT' => 'E02005138',
        '8QU' => 'E02005138',
        '8QW' => 'E02005138',
        '8QX' => 'E02005138',
        '8QY' => 'E02005138',
        '8QZ' => 'E02005138',
        '8RA' => 'E02005138',
        '8RB' => 'E02005138',
        '8RD' => 'E02005138',
        '8RE' => 'E02005138',
        '8RF' => 'E02005138',
        '8RG' => 'E02005138',
        '8RH' => 'E02005138',
        '8RJ' => 'E02005138',
        '8RL' => 'E02005138',
        '8RN' => 'E02005138',
        '8RP' => 'E02005138',
        '8RQ' => 'E02005138',
        '8RR' => 'E02005136',
        '8RS' => 'E02005138',
        '8RT' => 'E02005138',
        '8RU' => 'E02005138',
        '8RW' => 'E02005138',
        '8RX' => 'E02005138',
        '8RY' => 'E02005138',
        '8RZ' => 'E02005138',
        '8SA' => 'E02005138',
        '8SB' => 'E02005138',
        '8SD' => 'E02005138',
        '8SH' => 'E02005138',
        '8SJ' => 'E02005138',
        '8SL' => 'E02005138',
        '8SN' => 'E02005138',
        '8SP' => 'E02005138',
        '8SQ' => 'E02005138',
        '8SR' => 'E02005138',
        '8SS' => 'E02005138',
        '8ST' => 'E02005138',
        '8SU' => 'E02005138',
        '8SW' => 'E02005138',
        '8SX' => 'E02005138',
        '8TA' => 'E02005138',
        '8TB' => 'E02005138',
        '8TD' => 'E02005138',
        '8TE' => 'E02005138',
        '8TF' => 'E02005138',
        '8TJ' => 'E02005138',
        '8TL' => 'E02005138',
        '8TP' => 'E02005138',
        '8TR' => 'E02005138',
        '8TU' => 'E02005138',
        '8TW' => 'E02005138',
        '8TX' => 'E02005138',
        '8UA' => 'E02005138',
        '8UX' => 'E02005138',
        '8UY' => 'E02005135',
        '8UZ' => 'E02005138',
        '8WA' => 'E02005135',
        '8WB' => 'E02005135',
        '8WD' => 'E02005135',
        '8WE' => 'E02005135',
        '8WF' => 'E02005135',
        '8WQ' => 'E02005135',
        '8WT' => 'E02005135',
        '8WX' => 'E02005135',
        '8WY' => 'E02005135',
        '8WZ' => 'E02005135',
        '8XE' => 'E02005135',
        '8XZ' => 'E02005135',
        '8YA' => 'E02005135',
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
