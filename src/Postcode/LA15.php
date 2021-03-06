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
final class LA15
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '8AA' => 'E02003978',
        '8AB' => 'E02003978',
        '8AD' => 'E02003978',
        '8AE' => 'E02003978',
        '8AF' => 'E02003977',
        '8AG' => 'E02003977',
        '8AH' => 'E02003977',
        '8AJ' => 'E02003977',
        '8AL' => 'E02003977',
        '8AN' => 'E02003977',
        '8AP' => 'E02003978',
        '8AQ' => 'E02003977',
        '8AR' => 'E02003978',
        '8AS' => 'E02003978',
        '8AT' => 'E02003978',
        '8AU' => 'E02003978',
        '8AW' => 'E02003978',
        '8AX' => 'E02003977',
        '8AY' => 'E02003977',
        '8AZ' => 'E02003978',
        '8BA' => 'E02003978',
        '8BB' => 'E02003978',
        '8BD' => 'E02003978',
        '8BE' => 'E02003978',
        '8BF' => 'E02003977',
        '8BG' => 'E02003978',
        '8BH' => 'E02003978',
        '8BJ' => 'E02003978',
        '8BL' => 'E02003978',
        '8BN' => 'E02003978',
        '8BP' => 'E02003977',
        '8BQ' => 'E02003977',
        '8BS' => 'E02003977',
        '8BT' => 'E02003977',
        '8BU' => 'E02003977',
        '8BW' => 'E02003977',
        '8BX' => 'E02003977',
        '8BY' => 'E02003977',
        '8BZ' => 'E02003977',
        '8DA' => 'E02003977',
        '8DB' => 'E02003977',
        '8DD' => 'E02003977',
        '8DE' => 'E02003977',
        '8DF' => 'E02003977',
        '8DG' => 'E02003977',
        '8DH' => 'E02003977',
        '8DJ' => 'E02003978',
        '8DL' => 'E02003978',
        '8DN' => 'E02003978',
        '8DP' => 'E02003978',
        '8DQ' => 'E02003977',
        '8DR' => 'E02003978',
        '8DS' => 'E02003978',
        '8DT' => 'E02003978',
        '8DU' => 'E02003978',
        '8DW' => 'E02003978',
        '8DX' => 'E02003978',
        '8DY' => 'E02003978',
        '8DZ' => 'E02003978',
        '8EA' => 'E02003978',
        '8EB' => 'E02003978',
        '8ED' => 'E02003978',
        '8EE' => 'E02003978',
        '8EF' => 'E02003978',
        '8EG' => 'E02003978',
        '8EH' => 'E02003978',
        '8EJ' => 'E02003978',
        '8EL' => 'E02003978',
        '8EN' => 'E02003978',
        '8EP' => 'E02003977',
        '8EQ' => 'E02003978',
        '8ER' => 'E02003977',
        '8ES' => 'E02003978',
        '8ET' => 'E02003978',
        '8EU' => 'E02003978',
        '8EW' => 'E02003978',
        '8EX' => 'E02003978',
        '8EY' => 'E02003978',
        '8EZ' => 'E02003978',
        '8FA' => 'E02003977',
        '8FB' => 'E02003977',
        '8FD' => 'E02003977',
        '8FE' => 'E02003978',
        '8GA' => 'E02003978',
        '8GB' => 'E02003978',
        '8GD' => 'E02003978',
        '8GE' => 'E02003978',
        '8GZ' => 'E02003978',
        '8HA' => 'E02003978',
        '8HB' => 'E02003978',
        '8HD' => 'E02003978',
        '8HE' => 'E02003978',
        '8HF' => 'E02003978',
        '8HG' => 'E02003978',
        '8HH' => 'E02003978',
        '8HJ' => 'E02003978',
        '8HL' => 'E02003978',
        '8HN' => 'E02003978',
        '8HP' => 'E02003978',
        '8HQ' => 'E02003978',
        '8HR' => 'E02003978',
        '8HS' => 'E02003978',
        '8HT' => 'E02003978',
        '8HU' => 'E02003978',
        '8HW' => 'E02003978',
        '8HX' => 'E02003978',
        '8HY' => 'E02003978',
        '8HZ' => 'E02003978',
        '8JA' => 'E02003978',
        '8JB' => 'E02003977',
        '8JD' => 'E02003977',
        '8JE' => 'E02003978',
        '8JF' => 'E02003978',
        '8JG' => 'E02004028',
        '8JH' => 'E02003977',
        '8JJ' => 'E02003978',
        '8JL' => 'E02003978',
        '8JN' => 'E02003977',
        '8JP' => 'E02003977',
        '8JQ' => 'E02003978',
        '8JR' => 'E02003977',
        '8JS' => 'E02003977',
        '8JT' => 'E02003977',
        '8JU' => 'E02003977',
        '8JW' => 'E02003977',
        '8JX' => 'E02003977',
        '8JY' => 'E02003977',
        '8JZ' => 'E02003977',
        '8LA' => 'E02003977',
        '8LB' => 'E02003977',
        '8LD' => 'E02003978',
        '8LE' => 'E02003978',
        '8LF' => 'E02003978',
        '8LG' => 'E02003978',
        '8LH' => 'E02003978',
        '8LJ' => 'E02003978',
        '8LL' => 'E02003978',
        '8LN' => 'E02003978',
        '8LP' => 'E02003978',
        '8LQ' => 'E02003978',
        '8LR' => 'E02003978',
        '8LS' => 'E02003978',
        '8LT' => 'E02003978',
        '8LU' => 'E02003978',
        '8LW' => 'E02003978',
        '8LX' => 'E02003978',
        '8LY' => 'E02003978',
        '8LZ' => 'E02003978',
        '8NA' => 'E02003978',
        '8NB' => 'E02003978',
        '8ND' => 'E02003978',
        '8NE' => 'E02003978',
        '8NF' => 'E02003978',
        '8NG' => 'E02003978',
        '8NH' => 'E02003978',
        '8NJ' => 'E02003978',
        '8NL' => 'E02003978',
        '8NN' => 'E02003978',
        '8NP' => 'E02003978',
        '8NQ' => 'E02003978',
        '8NR' => 'E02003978',
        '8NS' => 'E02003978',
        '8NT' => 'E02003978',
        '8NU' => 'E02003978',
        '8NW' => 'E02003978',
        '8NX' => 'E02003978',
        '8NY' => 'E02003978',
        '8NZ' => 'E02003978',
        '8PA' => 'E02003978',
        '8PB' => 'E02003978',
        '8PD' => 'E02003978',
        '8PE' => 'E02003978',
        '8PF' => 'E02003978',
        '8PG' => 'E02003978',
        '8PH' => 'E02003978',
        '8PJ' => 'E02003978',
        '8PL' => 'E02003978',
        '8PN' => 'E02003978',
        '8PP' => 'E02003978',
        '8PQ' => 'E02003978',
        '8PR' => 'E02003978',
        '8PS' => 'E02003978',
        '8PT' => 'E02003978',
        '8PU' => 'E02003978',
        '8PW' => 'E02003978',
        '8PX' => 'E02003978',
        '8PY' => 'E02003978',
        '8PZ' => 'E02003978',
        '8QA' => 'E02003978',
        '8QB' => 'E02003978',
        '8QD' => 'E02003978',
        '8QE' => 'E02003978',
        '8QF' => 'E02003978',
        '8QG' => 'E02003978',
        '8QH' => 'E02003978',
        '8QJ' => 'E02003978',
        '8QL' => 'E02003978',
        '8QN' => 'E02003978',
        '8QP' => 'E02003978',
        '8QQ' => 'E02003978',
        '8QR' => 'E02003978',
        '8QS' => 'E02003978',
        '8QT' => 'E02003978',
        '8QU' => 'E02003978',
        '8QW' => 'E02003978',
        '8QX' => 'E02003978',
        '8QY' => 'E02003978',
        '8QZ' => 'E02003977',
        '8RA' => 'E02003978',
        '8RB' => 'E02003977',
        '8RD' => 'E02003978',
        '8RE' => 'E02003978',
        '8RF' => 'E02003978',
        '8RG' => 'E02003978',
        '8RH' => 'E02003978',
        '8RJ' => 'E02003978',
        '8RL' => 'E02003977',
        '8RN' => 'E02003977',
        '8RP' => 'E02003978',
        '8RQ' => 'E02003978',
        '8RR' => 'E02003977',
        '8RS' => 'E02003977',
        '8RT' => 'E02003977',
        '8RU' => 'E02003977',
        '8RW' => 'E02003978',
        '8RX' => 'E02003977',
        '8RY' => 'E02003977',
        '8RZ' => 'E02003977',
        '8SA' => 'E02003977',
        '8SB' => 'E02003977',
        '8SD' => 'E02003977',
        '8SE' => 'E02003977',
        '8SF' => 'E02003977',
        '8SG' => 'E02003977',
        '8SH' => 'E02003977',
        '8SJ' => 'E02003977',
        '8SL' => 'E02003977',
        '8SN' => 'E02003977',
        '8SP' => 'E02003977',
        '8SQ' => 'E02003977',
        '8SR' => 'E02003978',
        '8SS' => 'E02003978',
        '8ST' => 'E02003978',
        '8SU' => 'E02003978',
        '8SW' => 'E02003977',
        '8SX' => 'E02003978',
        '8SY' => 'E02003977',
        '8SZ' => 'E02003978',
        '8TA' => 'E02003978',
        '8TB' => 'E02003978',
        '8TD' => 'E02003978',
        '8TE' => 'E02003978',
        '8TF' => 'E02003978',
        '8TG' => 'E02003977',
        '8TH' => 'E02003978',
        '8TZ' => 'E02003978',
        '8UB' => 'E02003978',
        '8UD' => 'E02003978',
        '8UE' => 'E02003978',
        '8UG' => 'E02003978',
        '8UH' => 'E02003978',
        '8UJ' => 'E02003978',
        '8UN' => 'E02003978',
        '8UP' => 'E02003978',
        '8UQ' => 'E02003978',
        '8UR' => 'E02003978',
        '8WZ' => 'E02003984',
        '8XA' => 'E02003978',
        '8XB' => 'E02003978',
        '8XD' => 'E02003978',
        '8XE' => 'E02003978',
        '8XF' => 'E02003978',
        '8XG' => 'E02003978',
        '8XH' => 'E02003978',
        '8XJ' => 'E02003978',
        '8XL' => 'E02003978',
        '8XN' => 'E02003978',
        '8XQ' => 'E02003978',
        '8XW' => 'E02003978',
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
