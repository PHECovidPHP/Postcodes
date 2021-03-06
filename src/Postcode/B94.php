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
final class B94
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02006504',
        '5AB' => 'E02006504',
        '5AD' => 'E02006504',
        '5AE' => 'E02006504',
        '5AF' => 'E02006504',
        '5AG' => 'E02006504',
        '5AH' => 'E02006504',
        '5AJ' => 'E02006504',
        '5AL' => 'E02006504',
        '5AN' => 'E02006504',
        '5AP' => 'E02006504',
        '5AQ' => 'E02006504',
        '5AR' => 'E02006504',
        '5AS' => 'E02006504',
        '5AT' => 'E02006504',
        '5AU' => 'E02006504',
        '5AW' => 'E02006504',
        '5AX' => 'E02006504',
        '5AY' => 'E02006504',
        '5AZ' => 'E02006504',
        '5BA' => 'E02006504',
        '5BB' => 'E02006504',
        '5BD' => 'E02006504',
        '5BE' => 'E02006504',
        '5BF' => 'E02006504',
        '5BG' => 'E02006504',
        '5BH' => 'E02006504',
        '5BJ' => 'E02006504',
        '5BL' => 'E02006504',
        '5BN' => 'E02002109',
        '5BP' => 'E02006504',
        '5BQ' => 'E02006504',
        '5BS' => 'E02006504',
        '5BT' => 'E02006504',
        '5BZ' => 'E02006504',
        '5DA' => 'E02006504',
        '5DB' => 'E02006504',
        '5DD' => 'E02006504',
        '5DE' => 'E02006504',
        '5DF' => 'E02006504',
        '5DG' => 'E02006504',
        '5DH' => 'E02006504',
        '5DJ' => 'E02006504',
        '5DL' => 'E02006504',
        '5DN' => 'E02006504',
        '5DP' => 'E02006504',
        '5DQ' => 'E02006504',
        '5DR' => 'E02006504',
        '5DS' => 'E02006504',
        '5DT' => 'E02006504',
        '5DU' => 'E02006504',
        '5DW' => 'E02006504',
        '5DX' => 'E02006504',
        '5DY' => 'E02006504',
        '5DZ' => 'E02006504',
        '5EA' => 'E02006504',
        '5EB' => 'E02006504',
        '5ED' => 'E02006504',
        '5EE' => 'E02002106',
        '5EF' => 'E02002106',
        '5EH' => 'E02006504',
        '5EJ' => 'E02006504',
        '5EL' => 'E02006504',
        '5EN' => 'E02006504',
        '5EP' => 'E02006504',
        '5ER' => 'E02006504',
        '5ES' => 'E02006504',
        '5ET' => 'E02006504',
        '5EU' => 'E02006504',
        '5EW' => 'E02006504',
        '5EZ' => 'E02006504',
        '5HA' => 'E02006504',
        '5HB' => 'E02006504',
        '5HD' => 'E02002106',
        '5HE' => 'E02006504',
        '5HF' => 'E02006504',
        '5HG' => 'E02006504',
        '5HH' => 'E02006504',
        '5HJ' => 'E02006504',
        '5HL' => 'E02006504',
        '5HN' => 'E02006504',
        '5HP' => 'E02006504',
        '5HQ' => 'E02006504',
        '5HR' => 'E02006504',
        '5HS' => 'E02006504',
        '5HT' => 'E02006504',
        '5HU' => 'E02006504',
        '5HW' => 'E02006504',
        '5HX' => 'E02006504',
        '5HY' => 'E02006504',
        '5HZ' => 'E02002106',
        '5JA' => 'E02006504',
        '5JB' => 'E02006504',
        '5JD' => 'E02006504',
        '5JE' => 'E02006504',
        '5JF' => 'E02006504',
        '5JH' => 'E02002109',
        '5JJ' => 'E02002109',
        '5JL' => 'E02002109',
        '5JN' => 'E02002109',
        '5JP' => 'E02002109',
        '5JR' => 'E02002109',
        '5JS' => 'E02002109',
        '5JT' => 'E02002109',
        '5JU' => 'E02006504',
        '5JW' => 'E02002109',
        '5JX' => 'E02006504',
        '5JY' => 'E02006504',
        '5JZ' => 'E02006504',
        '5LA' => 'E02006504',
        '5LB' => 'E02006504',
        '5LD' => 'E02006504',
        '5LE' => 'E02006504',
        '5LH' => 'E02006504',
        '5LJ' => 'E02006504',
        '5LL' => 'E02006504',
        '5LN' => 'E02006504',
        '5LP' => 'E02002109',
        '5LQ' => 'E02002106',
        '5LR' => 'E02002109',
        '5LS' => 'E02002109',
        '5LT' => 'E02002109',
        '5LU' => 'E02002109',
        '5LW' => 'E02002109',
        '5LX' => 'E02002109',
        '5LY' => 'E02002106',
        '5NA' => 'E02002109',
        '5NB' => 'E02002109',
        '5ND' => 'E02002109',
        '5NH' => 'E02002109',
        '5NJ' => 'E02006504',
        '5NL' => 'E02006504',
        '5NN' => 'E02006504',
        '5NP' => 'E02006504',
        '5NQ' => 'E02002106',
        '5NR' => 'E02006522',
        '5NS' => 'E02006522',
        '5NT' => 'E02006522',
        '5NU' => 'E02006522',
        '5NW' => 'E02006504',
        '5NX' => 'E02006522',
        '5PA' => 'E02006522',
        '5PB' => 'E02006504',
        '5PD' => 'E02006504',
        '5PE' => 'E02006522',
        '5PF' => 'E02006522',
        '5PG' => 'E02006522',
        '5PH' => 'E02006522',
        '5PJ' => 'E02006522',
        '5PL' => 'E02006504',
        '5PN' => 'E02006504',
        '5PP' => 'E02006504',
        '5PQ' => 'E02006522',
        '5PR' => 'E02006504',
        '5PS' => 'E02006522',
        '5PT' => 'E02006522',
        '5PW' => 'E02006504',
        '5PY' => 'E02006504',
        '5PZ' => 'E02006504',
        '5QA' => 'E02006504',
        '5QB' => 'E02002106',
        '5QH' => 'E02006522',
        '5QJ' => 'E02002106',
        '5QN' => 'E02006504',
        '5QP' => 'E02006522',
        '5QR' => 'E02006522',
        '5QS' => 'E02006522',
        '5QT' => 'E02006522',
        '5QU' => 'E02006522',
        '5QW' => 'E02006522',
        '5QX' => 'E02006522',
        '5QY' => 'E02006522',
        '5QZ' => 'E02006522',
        '5RA' => 'E02006522',
        '5RB' => 'E02006522',
        '5RD' => 'E02006522',
        '5RH' => 'E02006522',
        '5RP' => 'E02002109',
        '5RU' => 'E02006504',
        '5RW' => 'E02006504',
        '5RX' => 'E02006504',
        '5RY' => 'E02006504',
        '5RZ' => 'E02006504',
        '5SA' => 'E02006504',
        '5SB' => 'E02006504',
        '5SD' => 'E02006504',
        '5SE' => 'E02006504',
        '5SF' => 'E02006504',
        '5SG' => 'E02006504',
        '5SH' => 'E02006504',
        '5SJ' => 'E02006504',
        '5SL' => 'E02006504',
        '5SN' => 'E02006504',
        '5SP' => 'E02006504',
        '5SQ' => 'E02006504',
        '5WA' => 'E02002106',
        '5WB' => 'E02006504',
        '5WH' => 'E02002106',
        '5YD' => 'E02002106',
        '5ZR' => 'E02002106',
        '5ZW' => 'E02002106',
        '6AA' => 'E02006504',
        '6AB' => 'E02002109',
        '6AD' => 'E02002109',
        '6AE' => 'E02002109',
        '6AF' => 'E02002109',
        '6AG' => 'E02002109',
        '6AH' => 'E02002109',
        '6AJ' => 'E02006504',
        '6AL' => 'E02002106',
        '6AN' => 'E02002106',
        '6AP' => 'E02006522',
        '6AQ' => 'E02002109',
        '6AR' => 'E02006522',
        '6AS' => 'E02006522',
        '6AT' => 'E02006522',
        '6AU' => 'E02006522',
        '6AW' => 'E02006522',
        '6AX' => 'E02006522',
        '6AY' => 'E02006522',
        '6AZ' => 'E02006522',
        '6BA' => 'E02006522',
        '6BB' => 'E02002109',
        '6BD' => 'E02002109',
        '6BE' => 'E02006522',
        '6BF' => 'E02002108',
        '6BG' => 'E02002106',
        '6BH' => 'E02006504',
        '6BJ' => 'E02006504',
        '6BL' => 'E02006504',
        '6BN' => 'E02006504',
        '6BP' => 'E02006504',
        '6BS' => 'E02002109',
        '6BT' => 'E02002109',
        '6BU' => 'E02002109',
        '6BW' => 'E02006504',
        '6BX' => 'E02006504',
        '6BY' => 'E02006504',
        '6BZ' => 'E02006504',
        '6DA' => 'E02006504',
        '6DB' => 'E02002109',
        '6DD' => 'E02002109',
        '6DE' => 'E02002109',
        '6DF' => 'E02002109',
        '6DG' => 'E02002109',
        '6DH' => 'E02002109',
        '6DJ' => 'E02002109',
        '6DL' => 'E02002109',
        '6DN' => 'E02002109',
        '6DP' => 'E02002109',
        '6DQ' => 'E02002109',
        '6DR' => 'E02002109',
        '6DS' => 'E02002109',
        '6DT' => 'E02006522',
        '6DU' => 'E02006522',
        '6DW' => 'E02002109',
        '6DX' => 'E02002108',
        '6DY' => 'E02002108',
        '6DZ' => 'E02002108',
        '6EA' => 'E02002108',
        '6EB' => 'E02002108',
        '6ED' => 'E02002108',
        '6EE' => 'E02002109',
        '6EH' => 'E02002108',
        '6EJ' => 'E02002108',
        '6EL' => 'E02006522',
        '6EN' => 'E02006522',
        '6EP' => 'E02006522',
        '6ER' => 'E02006522',
        '6ES' => 'E02006522',
        '6ET' => 'E02006522',
        '6EU' => 'E02006522',
        '6EW' => 'E02006522',
        '6EX' => 'E02006522',
        '6FE' => 'E02002106',
        '6HA' => 'E02006522',
        '6HB' => 'E02006522',
        '6HD' => 'E02006522',
        '6HH' => 'E02002109',
        '6HJ' => 'E02006522',
        '6HL' => 'E02006522',
        '6HN' => 'E02006522',
        '6HP' => 'E02006522',
        '6HQ' => 'E02002109',
        '6HR' => 'E02006522',
        '6HS' => 'E02006522',
        '6HT' => 'E02006522',
        '6HU' => 'E02006522',
        '6HW' => 'E02006522',
        '6HX' => 'E02006522',
        '6HY' => 'E02006522',
        '6HZ' => 'E02006522',
        '6JA' => 'E02006522',
        '6JB' => 'E02006522',
        '6JD' => 'E02006522',
        '6JE' => 'E02006522',
        '6JF' => 'E02006522',
        '6JG' => 'E02006522',
        '6JH' => 'E02006522',
        '6JJ' => 'E02006522',
        '6JL' => 'E02006522',
        '6JN' => 'E02002106',
        '6JP' => 'E02006522',
        '6JQ' => 'E02006522',
        '6JR' => 'E02006522',
        '6JS' => 'E02002106',
        '6JT' => 'E02006522',
        '6JU' => 'E02006522',
        '6JW' => 'E02002106',
        '6JX' => 'E02006522',
        '6JY' => 'E02006522',
        '6JZ' => 'E02006522',
        '6LA' => 'E02006522',
        '6LB' => 'E02006522',
        '6LD' => 'E02006522',
        '6LE' => 'E02006522',
        '6LF' => 'E02002106',
        '6LH' => 'E02006522',
        '6LJ' => 'E02006522',
        '6LL' => 'E02006522',
        '6LN' => 'E02006522',
        '6LP' => 'E02006522',
        '6LQ' => 'E02006522',
        '6LR' => 'E02006522',
        '6LS' => 'E02006522',
        '6LT' => 'E02006522',
        '6LU' => 'E02006522',
        '6LW' => 'E02006522',
        '6LX' => 'E02006522',
        '6LY' => 'E02006522',
        '6NA' => 'E02006522',
        '6NB' => 'E02006522',
        '6NE' => 'E02002106',
        '6NG' => 'E02002109',
        '6NH' => 'E02002108',
        '6NJ' => 'E02002109',
        '6NL' => 'E02002109',
        '6NN' => 'E02002109',
        '6NP' => 'E02002109',
        '6NQ' => 'E02002109',
        '6NR' => 'E02002109',
        '6NS' => 'E02002109',
        '6NT' => 'E02002109',
        '6NU' => 'E02002109',
        '6NW' => 'E02002109',
        '6NX' => 'E02002109',
        '6NY' => 'E02002109',
        '6NZ' => 'E02002109',
        '6PA' => 'E02002109',
        '6PB' => 'E02002109',
        '6PD' => 'E02002109',
        '6PE' => 'E02002109',
        '6PF' => 'E02002109',
        '6PG' => 'E02002109',
        '6PH' => 'E02002109',
        '6PJ' => 'E02002109',
        '6PL' => 'E02006522',
        '6PN' => 'E02002106',
        '6PP' => 'E02006522',
        '6PQ' => 'E02002109',
        '6PR' => 'E02006522',
        '6PS' => 'E02002108',
        '6PT' => 'E02002108',
        '6PU' => 'E02006522',
        '6PW' => 'E02002106',
        '6PX' => 'E02006522',
        '6PY' => 'E02002106',
        '6PZ' => 'E02006522',
        '6QA' => 'E02006522',
        '6QB' => 'E02006522',
        '6QD' => 'E02002109',
        '6QE' => 'E02002109',
        '6QF' => 'E02002106',
        '6QG' => 'E02002109',
        '6QH' => 'E02002109',
        '6QJ' => 'E02002109',
        '6QL' => 'E02002109',
        '6QN' => 'E02002109',
        '6QP' => 'E02002109',
        '6QQ' => 'E02002109',
        '6QR' => 'E02002109',
        '6QS' => 'E02002109',
        '6QT' => 'E02002109',
        '6QU' => 'E02002109',
        '6QW' => 'E02002109',
        '6QX' => 'E02002109',
        '6QY' => 'E02002109',
        '6QZ' => 'E02002109',
        '6RA' => 'E02002109',
        '6RB' => 'E02002109',
        '6RD' => 'E02002109',
        '6RE' => 'E02002106',
        '6RF' => 'E02002106',
        '6RG' => 'E02006504',
        '6RH' => 'E02002109',
        '6RJ' => 'E02002109',
        '6RL' => 'E02002109',
        '6RN' => 'E02002109',
        '6RP' => 'E02002109',
        '6RR' => 'E02002109',
        '6RS' => 'E02002109',
        '6RT' => 'E02002109',
        '6RU' => 'E02002109',
        '6RW' => 'E02006504',
        '6RX' => 'E02002109',
        '6RY' => 'E02002109',
        '6SA' => 'E02002109',
        '6SB' => 'E02002109',
        '6SD' => 'E02002109',
        '6SE' => 'E02006504',
        '6SF' => 'E02006504',
        '6SG' => 'E02006504',
        '6SQ' => 'E02006504',
        '6WA' => 'E02006504',
        '6WH' => 'E02002106',
        '6WQ' => 'E02002106',
        '6WU' => 'E02002106',
        '6XA' => 'E02002106',
        '6XB' => 'E02006504',
        '6ZD' => 'E02002106',
        '6ZN' => 'E02002106',
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
