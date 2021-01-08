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
final class B96
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02006733',
        '6AB' => 'E02006733',
        '6AD' => 'E02006733',
        '6AE' => 'E02006733',
        '6AF' => 'E02006733',
        '6AG' => 'E02006733',
        '6AH' => 'E02006733',
        '6AJ' => 'E02006733',
        '6AL' => 'E02006733',
        '6AN' => 'E02006733',
        '6AP' => 'E02006733',
        '6AQ' => 'E02006733',
        '6AR' => 'E02006733',
        '6AS' => 'E02006733',
        '6AT' => 'E02006733',
        '6AU' => 'E02006733',
        '6AW' => 'E02006733',
        '6AX' => 'E02006733',
        '6AY' => 'E02006733',
        '6AZ' => 'E02006733',
        '6BA' => 'E02006733',
        '6BB' => 'E02006733',
        '6BD' => 'E02006733',
        '6BE' => 'E02006755',
        '6BF' => 'E02006733',
        '6BG' => 'E02006755',
        '6BH' => 'E02006733',
        '6BJ' => 'E02006733',
        '6BL' => 'E02006721',
        '6BN' => 'E02006733',
        '6BP' => 'E02006733',
        '6BQ' => 'E02006755',
        '6BS' => 'E02006733',
        '6BT' => 'E02006733',
        '6BU' => 'E02006733',
        '6BW' => 'E02006733',
        '6BX' => 'E02006755',
        '6BY' => 'E02006733',
        '6BZ' => 'E02006733',
        '6DA' => 'E02006733',
        '6DB' => 'E02006733',
        '6DD' => 'E02006733',
        '6DE' => 'E02006733',
        '6DF' => 'E02006733',
        '6DG' => 'E02006733',
        '6DH' => 'E02006733',
        '6DJ' => 'E02006733',
        '6DL' => 'E02006733',
        '6DN' => 'E02006733',
        '6DP' => 'E02006733',
        '6DQ' => 'E02006733',
        '6DR' => 'E02006733',
        '6DS' => 'E02006733',
        '6DT' => 'E02006733',
        '6DU' => 'E02006733',
        '6DW' => 'E02006733',
        '6DX' => 'E02006733',
        '6DY' => 'E02006733',
        '6DZ' => 'E02006504',
        '6EA' => 'E02006733',
        '6EB' => 'E02006733',
        '6ED' => 'E02006733',
        '6EE' => 'E02006733',
        '6EF' => 'E02006733',
        '6EG' => 'E02006733',
        '6EH' => 'E02006733',
        '6EJ' => 'E02006733',
        '6EL' => 'E02006721',
        '6EN' => 'E02006721',
        '6EP' => 'E02006733',
        '6EQ' => 'E02006733',
        '6ER' => 'E02006504',
        '6ES' => 'E02006504',
        '6ET' => 'E02006733',
        '6EU' => 'E02006733',
        '6EW' => 'E02006504',
        '6EX' => 'E02006504',
        '6EY' => 'E02006504',
        '6EZ' => 'E02006733',
        '6FD' => 'E02006733',
        '6FE' => 'E02006755',
        '6FF' => 'E02006733',
        '6HA' => 'E02006733',
        '6HB' => 'E02006733',
        '6HD' => 'E02006733',
        '6HE' => 'E02006733',
        '6HF' => 'E02006733',
        '6HG' => 'E02006733',
        '6HH' => 'E02006733',
        '6HJ' => 'E02006733',
        '6HL' => 'E02006733',
        '6HN' => 'E02006733',
        '6HP' => 'E02006733',
        '6HQ' => 'E02006733',
        '6HR' => 'E02006733',
        '6HS' => 'E02006733',
        '6HT' => 'E02006733',
        '6HU' => 'E02006733',
        '6HW' => 'E02006733',
        '6HX' => 'E02006733',
        '6HY' => 'E02006733',
        '6HZ' => 'E02006733',
        '6JA' => 'E02006733',
        '6JB' => 'E02006733',
        '6JD' => 'E02006733',
        '6JE' => 'E02006733',
        '6JF' => 'E02006733',
        '6JG' => 'E02006721',
        '6JH' => 'E02006733',
        '6JJ' => 'E02006755',
        '6JL' => 'E02006733',
        '6JN' => 'E02006721',
        '6JP' => 'E02006733',
        '6JQ' => 'E02006733',
        '6JR' => 'E02006733',
        '6JT' => 'E02006733',
        '6JU' => 'E02006755',
        '6JX' => 'E02006755',
        '6JY' => 'E02006755',
        '6JZ' => 'E02006755',
        '6LA' => 'E02006755',
        '6LB' => 'E02006755',
        '6LD' => 'E02006755',
        '6LE' => 'E02006721',
        '6LF' => 'E02006733',
        '6LG' => 'E02006721',
        '6LH' => 'E02006755',
        '6LJ' => 'E02006755',
        '6LL' => 'E02006755',
        '6LP' => 'E02006755',
        '6LR' => 'E02006504',
        '6LS' => 'E02006755',
        '6LT' => 'E02006755',
        '6LU' => 'E02006755',
        '6LW' => 'E02006721',
        '6LX' => 'E02006755',
        '6LY' => 'E02006755',
        '6LZ' => 'E02006755',
        '6NA' => 'E02006755',
        '6NB' => 'E02006755',
        '6ND' => 'E02006755',
        '6NE' => 'E02006755',
        '6NF' => 'E02006755',
        '6NG' => 'E02006755',
        '6NH' => 'E02006755',
        '6NJ' => 'E02006755',
        '6NL' => 'E02006755',
        '6NN' => 'E02006755',
        '6NP' => 'E02006755',
        '6NQ' => 'E02006755',
        '6NR' => 'E02006504',
        '6NS' => 'E02006509',
        '6NT' => 'E02006504',
        '6NU' => 'E02006504',
        '6NW' => 'E02006755',
        '6NX' => 'E02006504',
        '6NY' => 'E02006504',
        '6NZ' => 'E02006504',
        '6PA' => 'E02006504',
        '6PB' => 'E02006504',
        '6PD' => 'E02006504',
        '6PE' => 'E02006504',
        '6PF' => 'E02006721',
        '6PG' => 'E02006721',
        '6PH' => 'E02006504',
        '6PJ' => 'E02006504',
        '6PL' => 'E02006504',
        '6PQ' => 'E02006733',
        '6PS' => 'E02006733',
        '6PT' => 'E02006733',
        '6PU' => 'E02006733',
        '6PX' => 'E02006733',
        '6PZ' => 'E02006733',
        '6QA' => 'E02006733',
        '6QB' => 'E02006733',
        '6QD' => 'E02006733',
        '6QH' => 'E02006733',
        '6QJ' => 'E02006733',
        '6QL' => 'E02006733',
        '6QP' => 'E02006733',
        '6QR' => 'E02006733',
        '6QS' => 'E02006733',
        '6QT' => 'E02006754',
        '6QU' => 'E02006754',
        '6QX' => 'E02006754',
        '6RA' => 'E02006754',
        '6RB' => 'E02006754',
        '6RD' => 'E02006754',
        '6RH' => 'E02006754',
        '6RJ' => 'E02006754',
        '6RL' => 'E02006754',
        '6RN' => 'E02006754',
        '6RP' => 'E02006754',
        '6RR' => 'E02006754',
        '6RS' => 'E02006733',
        '6RT' => 'E02006733',
        '6RU' => 'E02006733',
        '6RW' => 'E02006754',
        '6RX' => 'E02006733',
        '6RY' => 'E02006733',
        '6SA' => 'E02006733',
        '6SB' => 'E02006755',
        '6SD' => 'E02006755',
        '6SE' => 'E02006755',
        '6SF' => 'E02006755',
        '6SG' => 'E02006733',
        '6SH' => 'E02006755',
        '6SJ' => 'E02006755',
        '6SL' => 'E02006755',
        '6SN' => 'E02006754',
        '6SP' => 'E02006755',
        '6SQ' => 'E02006721',
        '6SR' => 'E02006755',
        '6SS' => 'E02006755',
        '6ST' => 'E02006755',
        '6SU' => 'E02006755',
        '6SW' => 'E02006754',
        '6SX' => 'E02006755',
        '6SY' => 'E02006754',
        '6SZ' => 'E02006754',
        '6TA' => 'E02006754',
        '6TB' => 'E02006754',
        '6TD' => 'E02006754',
        '6TE' => 'E02006754',
        '6TF' => 'E02006754',
        '6TG' => 'E02006754',
        '6TH' => 'E02006754',
        '6TJ' => 'E02006733',
        '6TL' => 'E02006754',
        '6TN' => 'E02006754',
        '6TQ' => 'E02006754',
        '6WA' => 'E02006721',
        '6WB' => 'E02006721',
        '6WD' => 'E02006754',
        '6WP' => 'E02006721',
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
