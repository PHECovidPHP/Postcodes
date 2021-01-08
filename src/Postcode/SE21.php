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
final class SE21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02000839',
        '7AB' => 'E02000837',
        '7AD' => 'E02000837',
        '7AE' => 'E02000837',
        '7AF' => 'E02000837',
        '7AG' => 'E02000837',
        '7AH' => 'E02000837',
        '7AJ' => 'E02000837',
        '7AL' => 'E02000837',
        '7AN' => 'E02000837',
        '7AP' => 'E02000837',
        '7AQ' => 'E02000837',
        '7AR' => 'E02000837',
        '7AS' => 'E02000837',
        '7AT' => 'E02000837',
        '7AW' => 'E02000837',
        '7AX' => 'E02000837',
        '7AZ' => 'E02000837',
        '7BA' => 'E02000837',
        '7BB' => 'E02000837',
        '7BD' => 'E02000837',
        '7BE' => 'E02000837',
        '7BF' => 'E02000837',
        '7BG' => 'E02000837',
        '7BH' => 'E02000837',
        '7BJ' => 'E02000837',
        '7BL' => 'E02000837',
        '7BN' => 'E02000837',
        '7BP' => 'E02000837',
        '7BQ' => 'E02000837',
        '7BS' => 'E02000837',
        '7BT' => 'E02000837',
        '7BU' => 'E02000837',
        '7BW' => 'E02000837',
        '7BX' => 'E02000837',
        '7BY' => 'E02000839',
        '7BZ' => 'E02000837',
        '7DA' => 'E02000837',
        '7DE' => 'E02000836',
        '7DF' => 'E02000836',
        '7DG' => 'E02000836',
        '7DH' => 'E02000837',
        '7DJ' => 'E02000837',
        '7DL' => 'E02000837',
        '7DN' => 'E02000837',
        '7DP' => 'E02000837',
        '7DQ' => 'E02000837',
        '7DR' => 'E02000837',
        '7DS' => 'E02000839',
        '7DW' => 'E02000837',
        '7DZ' => 'E02000837',
        '7EA' => 'E02000837',
        '7EB' => 'E02000837',
        '7ED' => 'E02000837',
        '7EE' => 'E02000837',
        '7EF' => 'E02000837',
        '7EG' => 'E02000837',
        '7EH' => 'E02000839',
        '7EP' => 'E02000837',
        '7ER' => 'E02000837',
        '7ES' => 'E02000837',
        '7ET' => 'E02000837',
        '7EU' => 'E02000837',
        '7EW' => 'E02000837',
        '7EX' => 'E02000838',
        '7EY' => 'E02000839',
        '7EZ' => 'E02000839',
        '7HA' => 'E02000839',
        '7HB' => 'E02000837',
        '7HH' => 'E02000839',
        '7HJ' => 'E02000839',
        '7HL' => 'E02000839',
        '7HN' => 'E02000839',
        '7HP' => 'E02000839',
        '7HR' => 'E02000839',
        '7HS' => 'E02000837',
        '7HT' => 'E02000839',
        '7HW' => 'E02000839',
        '7JA' => 'E02000837',
        '7JB' => 'E02000837',
        '7JD' => 'E02000837',
        '7JF' => 'E02000837',
        '7JG' => 'E02000837',
        '7JH' => 'E02000837',
        '7JJ' => 'E02000837',
        '7JL' => 'E02000837',
        '7JN' => 'E02000837',
        '7JP' => 'E02000837',
        '7JR' => 'E02000837',
        '7JS' => 'E02000837',
        '7JT' => 'E02000837',
        '7JU' => 'E02000837',
        '7JW' => 'E02000837',
        '7JZ' => 'E02000837',
        '7LD' => 'E02000839',
        '7LE' => 'E02000839',
        '7LF' => 'E02000839',
        '7LG' => 'E02000839',
        '7LH' => 'E02000839',
        '7LJ' => 'E02000839',
        '7LR' => 'E02000839',
        '7LS' => 'E02000839',
        '7LT' => 'E02000839',
        '7LU' => 'E02000839',
        '7LX' => 'E02000839',
        '7LY' => 'E02000839',
        '7LZ' => 'E02000839',
        '7NA' => 'E02000839',
        '7NB' => 'E02000839',
        '7ND' => 'E02000839',
        '7WA' => 'E02000839',
        '7WB' => 'E02000839',
        '7WD' => 'E02000839',
        '7WE' => 'E02000839',
        '7WF' => 'E02000839',
        '7WG' => 'E02000839',
        '7WH' => 'E02000839',
        '7WJ' => 'E02000839',
        '7WL' => 'E02000839',
        '7WN' => 'E02000839',
        '7WP' => 'E02000839',
        '7WQ' => 'E02000839',
        '7WR' => 'E02000839',
        '7WS' => 'E02000839',
        '7WT' => 'E02000839',
        '7WU' => 'E02000839',
        '7WW' => 'E02000839',
        '7WX' => 'E02000839',
        '7WY' => 'E02000839',
        '7WZ' => 'E02000839',
        '7XA' => 'E02000837',
        '7XB' => 'E02000839',
        '7XE' => 'E02000839',
        '7XQ' => 'E02000839',
        '7YB' => 'E02000839',
        '7YE' => 'E02000839',
        '7YF' => 'E02000839',
        '7YQ' => 'E02000839',
        '7YT' => 'E02000839',
        '7YZ' => 'E02000839',
        '7ZA' => 'E02000839',
        '7ZB' => 'E02000837',
        '7ZD' => 'E02000839',
        '7ZE' => 'E02000837',
        '7ZF' => 'E02000839',
        '7ZG' => 'E02000837',
        '7ZH' => 'E02000837',
        '7ZJ' => 'E02000837',
        '7ZL' => 'E02000839',
        '7ZN' => 'E02000839',
        '7ZP' => 'E02000839',
        '7ZQ' => 'E02000839',
        '7ZR' => 'E02000839',
        '7ZS' => 'E02000839',
        '7ZT' => 'E02000839',
        '7ZU' => 'E02000839',
        '8AA' => 'E02000839',
        '8AB' => 'E02000839',
        '8AD' => 'E02000839',
        '8AE' => 'E02000839',
        '8AF' => 'E02000839',
        '8AG' => 'E02000839',
        '8AH' => 'E02000839',
        '8AJ' => 'E02000839',
        '8AL' => 'E02000839',
        '8AN' => 'E02000839',
        '8AP' => 'E02000650',
        '8AQ' => 'E02000839',
        '8AR' => 'E02000650',
        '8AS' => 'E02000839',
        '8AT' => 'E02000839',
        '8AU' => 'E02000839',
        '8AW' => 'E02000839',
        '8AX' => 'E02000650',
        '8AY' => 'E02000650',
        '8AZ' => 'E02000645',
        '8BA' => 'E02000650',
        '8BB' => 'E02000839',
        '8BD' => 'E02000839',
        '8BE' => 'E02000650',
        '8BF' => 'E02000642',
        '8BG' => 'E02000839',
        '8BH' => 'E02000642',
        '8BJ' => 'E02000642',
        '8BL' => 'E02000839',
        '8BN' => 'E02000839',
        '8BP' => 'E02000645',
        '8BQ' => 'E02000839',
        '8BS' => 'E02000645',
        '8BT' => 'E02000650',
        '8BU' => 'E02000650',
        '8BW' => 'E02000645',
        '8BX' => 'E02000650',
        '8BY' => 'E02000650',
        '8BZ' => 'E02000650',
        '8DA' => 'E02000650',
        '8DB' => 'E02000650',
        '8DD' => 'E02000648',
        '8DE' => 'E02000645',
        '8DF' => 'E02000645',
        '8DG' => 'E02000645',
        '8DH' => 'E02000839',
        '8DJ' => 'E02000645',
        '8DL' => 'E02000645',
        '8DN' => 'E02000645',
        '8DP' => 'E02000645',
        '8DQ' => 'E02000650',
        '8DR' => 'E02000645',
        '8DS' => 'E02000645',
        '8DT' => 'E02000645',
        '8DU' => 'E02000645',
        '8DW' => 'E02000645',
        '8DX' => 'E02000645',
        '8DY' => 'E02000645',
        '8DZ' => 'E02000645',
        '8EA' => 'E02000645',
        '8EB' => 'E02000645',
        '8ED' => 'E02000645',
        '8EE' => 'E02000645',
        '8EF' => 'E02000839',
        '8EG' => 'E02000642',
        '8EH' => 'E02000642',
        '8EJ' => 'E02000839',
        '8EL' => 'E02000645',
        '8EN' => 'E02000645',
        '8EP' => 'E02000642',
        '8EQ' => 'E02000645',
        '8ER' => 'E02000839',
        '8ES' => 'E02000839',
        '8ET' => 'E02000839',
        '8EU' => 'E02000839',
        '8EW' => 'E02000642',
        '8EX' => 'E02000642',
        '8EY' => 'E02000642',
        '8EZ' => 'E02000642',
        '8FA' => 'E02000839',
        '8FB' => 'E02000642',
        '8FD' => 'E02000642',
        '8FE' => 'E02000839',
        '8FG' => 'E02000839',
        '8FH' => 'E02000839',
        '8FJ' => 'E02000839',
        '8FL' => 'E02000839',
        '8FN' => 'E02000839',
        '8FP' => 'E02000839',
        '8FQ' => 'E02000645',
        '8FR' => 'E02000839',
        '8FS' => 'E02000839',
        '8FT' => 'E02000839',
        '8FW' => 'E02000839',
        '8GA' => 'E02000642',
        '8HA' => 'E02000645',
        '8HB' => 'E02000645',
        '8HD' => 'E02000645',
        '8HE' => 'E02000642',
        '8HF' => 'E02000642',
        '8HG' => 'E02000642',
        '8HH' => 'E02000642',
        '8HJ' => 'E02000642',
        '8HL' => 'E02000642',
        '8HN' => 'E02000839',
        '8HP' => 'E02000642',
        '8HQ' => 'E02000645',
        '8HR' => 'E02000642',
        '8HS' => 'E02000642',
        '8HT' => 'E02000642',
        '8HU' => 'E02000642',
        '8HW' => 'E02000642',
        '8HX' => 'E02000642',
        '8HY' => 'E02000645',
        '8HZ' => 'E02000645',
        '8JA' => 'E02000642',
        '8JB' => 'E02000642',
        '8JD' => 'E02000642',
        '8JE' => 'E02000839',
        '8JF' => 'E02000642',
        '8JG' => 'E02000642',
        '8JH' => 'E02000645',
        '8JJ' => 'E02000837',
        '8JL' => 'E02000645',
        '8JN' => 'E02000642',
        '8JP' => 'E02000642',
        '8JQ' => 'E02000645',
        '8JR' => 'E02000642',
        '8JS' => 'E02000642',
        '8JT' => 'E02000642',
        '8JU' => 'E02000642',
        '8JW' => 'E02000642',
        '8JX' => 'E02000642',
        '8JY' => 'E02000642',
        '8JZ' => 'E02000642',
        '8LA' => 'E02000642',
        '8LB' => 'E02000642',
        '8LD' => 'E02000642',
        '8LE' => 'E02000642',
        '8LF' => 'E02000642',
        '8LG' => 'E02000642',
        '8LH' => 'E02000642',
        '8LJ' => 'E02000642',
        '8LL' => 'E02000642',
        '8LN' => 'E02000642',
        '8LP' => 'E02000642',
        '8LQ' => 'E02000642',
        '8LR' => 'E02000642',
        '8LS' => 'E02000642',
        '8LT' => 'E02000642',
        '8LU' => 'E02000642',
        '8LW' => 'E02000642',
        '8LX' => 'E02000642',
        '8LY' => 'E02000642',
        '8LZ' => 'E02000642',
        '8NA' => 'E02000642',
        '8NB' => 'E02000642',
        '8ND' => 'E02000642',
        '8NE' => 'E02000642',
        '8NF' => 'E02000642',
        '8NG' => 'E02000642',
        '8NH' => 'E02000642',
        '8NJ' => 'E02000642',
        '8NL' => 'E02000642',
        '8NN' => 'E02000642',
        '8NP' => 'E02000837',
        '8NQ' => 'E02000642',
        '8NR' => 'E02000837',
        '8NS' => 'E02000839',
        '8NT' => 'E02000839',
        '8NU' => 'E02000839',
        '8NW' => 'E02000837',
        '8NX' => 'E02000839',
        '8NY' => 'E02000839',
        '8NZ' => 'E02000839',
        '8PA' => 'E02000839',
        '8PB' => 'E02000839',
        '8PD' => 'E02000839',
        '8PE' => 'E02000839',
        '8PF' => 'E02000839',
        '8PG' => 'E02000839',
        '8PH' => 'E02000839',
        '8PJ' => 'E02000839',
        '8PL' => 'E02000839',
        '8PN' => 'E02000839',
        '8PP' => 'E02000839',
        '8PQ' => 'E02000839',
        '8PR' => 'E02000839',
        '8PS' => 'E02000839',
        '8PU' => 'E02000839',
        '8PW' => 'E02000642',
        '8PX' => 'E02000839',
        '8PY' => 'E02000839',
        '8PZ' => 'E02000839',
        '8QA' => 'E02000839',
        '8QB' => 'E02000839',
        '8QD' => 'E02000839',
        '8QE' => 'E02000839',
        '8QF' => 'E02000839',
        '8QG' => 'E02000839',
        '8QH' => 'E02000839',
        '8QJ' => 'E02000839',
        '8QL' => 'E02000839',
        '8QN' => 'E02000839',
        '8QP' => 'E02000839',
        '8QQ' => 'E02000839',
        '8QR' => 'E02000839',
        '8QS' => 'E02000839',
        '8QT' => 'E02000839',
        '8QW' => 'E02000839',
        '8QZ' => 'E02000642',
        '8RA' => 'E02000642',
        '8RB' => 'E02000642',
        '8RD' => 'E02000642',
        '8RE' => 'E02000642',
        '8RF' => 'E02000642',
        '8RG' => 'E02000642',
        '8RH' => 'E02000642',
        '8RJ' => 'E02000642',
        '8RL' => 'E02000642',
        '8RN' => 'E02000642',
        '8RP' => 'E02000839',
        '8RQ' => 'E02000642',
        '8RR' => 'E02000839',
        '8RS' => 'E02000839',
        '8RT' => 'E02000839',
        '8RU' => 'E02000839',
        '8RW' => 'E02000839',
        '8SA' => 'E02000839',
        '8SB' => 'E02000839',
        '8SD' => 'E02000839',
        '8SE' => 'E02000839',
        '8SF' => 'E02000839',
        '8SG' => 'E02000839',
        '8SH' => 'E02000839',
        '8SL' => 'E02000839',
        '8SN' => 'E02000839',
        '8SP' => 'E02000839',
        '8SQ' => 'E02000839',
        '8SR' => 'E02000839',
        '8SS' => 'E02000839',
        '8ST' => 'E02000839',
        '8SU' => 'E02000839',
        '8SW' => 'E02000839',
        '8SX' => 'E02000642',
        '8SY' => 'E02000642',
        '8SZ' => 'E02000642',
        '8TA' => 'E02000642',
        '8TB' => 'E02000642',
        '8UZ' => 'E02000839',
        '8WA' => 'E02000642',
        '8WB' => 'E02000839',
        '8WD' => 'E02000839',
        '8WE' => 'E02000839',
        '8WF' => 'E02000839',
        '8WG' => 'E02000839',
        '8WH' => 'E02000839',
        '8WJ' => 'E02000839',
        '8WL' => 'E02000839',
        '8WN' => 'E02000839',
        '8WP' => 'E02000839',
        '8WQ' => 'E02000839',
        '8WR' => 'E02000839',
        '8WS' => 'E02000839',
        '8WT' => 'E02000839',
        '8WU' => 'E02000839',
        '8WW' => 'E02000839',
        '8WX' => 'E02000839',
        '8WY' => 'E02000839',
        '8WZ' => 'E02000839',
        '8XA' => 'E02000839',
        '8XB' => 'E02000839',
        '8XD' => 'E02000839',
        '8XE' => 'E02000839',
        '8XF' => 'E02000839',
        '8XG' => 'E02000839',
        '8XH' => 'E02000839',
        '8XJ' => 'E02000839',
        '8XL' => 'E02000839',
        '8XN' => 'E02000839',
        '8XP' => 'E02000839',
        '8XQ' => 'E02000839',
        '8XR' => 'E02000839',
        '8XS' => 'E02000839',
        '8XT' => 'E02000839',
        '8XU' => 'E02000839',
        '8XW' => 'E02000839',
        '8XY' => 'E02000839',
        '8XZ' => 'E02000839',
        '8YA' => 'E02000839',
        '8YB' => 'E02000839',
        '8YD' => 'E02000839',
        '8YE' => 'E02000839',
        '8YF' => 'E02000839',
        '8YU' => 'E02000839',
        '8YW' => 'E02000839',
        '8YX' => 'E02000839',
        '8YY' => 'E02000839',
        '8YZ' => 'E02000642',
        '8ZA' => 'E02000839',
        '8ZB' => 'E02000839',
        '8ZD' => 'E02000839',
        '8ZE' => 'E02000839',
        '8ZF' => 'E02000839',
        '8ZG' => 'E02000839',
        '8ZH' => 'E02000642',
        '8ZJ' => 'E02000839',
        '8ZL' => 'E02000642',
        '8ZN' => 'E02000642',
        '8ZP' => 'E02000642',
        '8ZQ' => 'E02000839',
        '8ZR' => 'E02000839',
        '8ZS' => 'E02000839',
        '8ZT' => 'E02000642',
        '8ZU' => 'E02000839',
        '8ZW' => 'E02000839',
        '8ZX' => 'E02000839',
        '9AD' => 'E02000839',
        '9AH' => 'E02000839',
        '9AL' => 'E02000839',
        '9AP' => 'E02000839',
        '9AQ' => 'E02000839',
        '9AR' => 'E02000839',
        '9AS' => 'E02000839',
        '9AT' => 'E02000839',
        '9AW' => 'E02000839',
        '9AX' => 'E02000839',
        '9AY' => 'E02000839',
        '9AZ' => 'E02000839',
        '9BA' => 'E02000839',
        '9BB' => 'E02000839',
        '9BD' => 'E02000839',
        '9BE' => 'E02000839',
        '9BF' => 'E02000839',
        '9BG' => 'E02000839',
        '9BH' => 'E02000839',
        '9BJ' => 'E02000839',
        '9BL' => 'E02000839',
        '9BN' => 'E02000839',
        '9BP' => 'E02000839',
        '9BQ' => 'E02000839',
        '9BR' => 'E02000839',
        '9BS' => 'E02000839',
        '9BT' => 'E02000839',
        '9BU' => 'E02000839',
        '9BW' => 'E02000839',
        '9BX' => 'E02000839',
        '9BY' => 'E02000839',
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
