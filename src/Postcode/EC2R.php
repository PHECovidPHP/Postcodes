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
final class EC2R
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02000001',
        '5AB' => 'E02000001',
        '5AD' => 'E02000001',
        '5AE' => 'E02000001',
        '5AH' => 'E02000001',
        '5AJ' => 'E02000001',
        '5AL' => 'E02000001',
        '5AN' => 'E02000001',
        '5AP' => 'E02000001',
        '5AR' => 'E02000001',
        '5AS' => 'E02000001',
        '5AT' => 'E02000001',
        '5AX' => 'E02000001',
        '5BA' => 'E02000001',
        '5BB' => 'E02000001',
        '5BD' => 'E02000001',
        '5BE' => 'E02000001',
        '5BG' => 'E02000001',
        '5BH' => 'E02000001',
        '5BJ' => 'E02000001',
        '5BL' => 'E02000001',
        '5BN' => 'E02000001',
        '5BR' => 'E02000001',
        '5BS' => 'E02000001',
        '5BT' => 'E02000001',
        '5BU' => 'E02000001',
        '5BX' => 'E02000001',
        '5DA' => 'E02000001',
        '5DB' => 'E02000575',
        '5EH' => 'E02000001',
        '5JJ' => 'E02000001',
        '5TA' => 'E02000001',
        '5WA' => 'E02000575',
        '5WB' => 'E02000575',
        '5WD' => 'E02000575',
        '6AA' => 'E02000001',
        '6AB' => 'E02000001',
        '6AD' => 'E02000001',
        '6AE' => 'E02000001',
        '6AF' => 'E02000001',
        '6AG' => 'E02000001',
        '6AH' => 'E02000001',
        '6AJ' => 'E02000001',
        '6AL' => 'E02000001',
        '6AN' => 'E02000001',
        '6AP' => 'E02000001',
        '6AQ' => 'E02000001',
        '6AR' => 'E02000001',
        '6AS' => 'E02000001',
        '6AT' => 'E02000001',
        '6AU' => 'E02000001',
        '6AX' => 'E02000001',
        '6AY' => 'E02000001',
        '6BA' => 'E02000001',
        '6BD' => 'E02000001',
        '6BE' => 'E02000001',
        '6BH' => 'E02000001',
        '6BJ' => 'E02000001',
        '6BL' => 'E02000001',
        '6BN' => 'E02000001',
        '6BP' => 'E02000001',
        '6BQ' => 'E02000001',
        '6BS' => 'E02000001',
        '6BT' => 'E02000001',
        '6BU' => 'E02000001',
        '6BX' => 'E02000001',
        '6BY' => 'E02000001',
        '6DA' => 'E02000001',
        '6DB' => 'E02000001',
        '6DD' => 'E02000001',
        '6DE' => 'E02000001',
        '6DH' => 'E02000001',
        '6DJ' => 'E02000001',
        '6DL' => 'E02000001',
        '6DN' => 'E02000001',
        '6DP' => 'E02000001',
        '6DQ' => 'E02000001',
        '6DR' => 'E02000001',
        '6DS' => 'E02000001',
        '6DX' => 'E02000001',
        '6DY' => 'E02000001',
        '6EA' => 'E02000001',
        '6EE' => 'E02000001',
        '6EH' => 'E02000001',
        '6EJ' => 'E02000001',
        '6EL' => 'E02000001',
        '6ES' => 'E02000001',
        '6EU' => 'E02000001',
        '6EX' => 'E02000001',
        '6EY' => 'E02000001',
        '6HA' => 'E02000575',
        '6HB' => 'E02000001',
        '6HE' => 'E02000001',
        '6HH' => 'E02000001',
        '6HJ' => 'E02000001',
        '6HL' => 'E02000001',
        '6HP' => 'E02000001',
        '6HQ' => 'E02000001',
        '6HR' => 'E02000001',
        '6HS' => 'E02000001',
        '6HT' => 'E02000001',
        '6HU' => 'E02000001',
        '6HX' => 'E02000001',
        '6JA' => 'E02000001',
        '6JB' => 'E02000001',
        '6JD' => 'E02000001',
        '6JH' => 'E02000001',
        '6JJ' => 'E02000001',
        '6JL' => 'E02000001',
        '6JN' => 'E02000001',
        '6JR' => 'E02000001',
        '6JY' => 'E02000001',
        '6LB' => 'E02000001',
        '6LJ' => 'E02000001',
        '6LL' => 'E02000001',
        '6LN' => 'E02000575',
        '6LP' => 'E02000575',
        '6LR' => 'E02000575',
        '6PA' => 'E02000001',
        '6PB' => 'E02000001',
        '6PH' => 'E02000001',
        '6PJ' => 'E02000001',
        '6PL' => 'E02000001',
        '6PN' => 'E02000001',
        '6PP' => 'E02000001',
        '6PQ' => 'E02000001',
        '6SA' => 'E02000001',
        '6WT' => 'E02000575',
        '6WU' => 'E02000575',
        '6WW' => 'E02000575',
        '6WX' => 'E02000575',
        '6WY' => 'E02000575',
        '6WZ' => 'E02000575',
        '6YA' => 'E02000575',
        '6YJ' => 'E02000575',
        '7AA' => 'E02000001',
        '7AB' => 'E02000001',
        '7AD' => 'E02000001',
        '7AE' => 'E02000001',
        '7AF' => 'E02000001',
        '7AG' => 'E02000001',
        '7AH' => 'E02000001',
        '7AJ' => 'E02000001',
        '7AL' => 'E02000001',
        '7AN' => 'E02000001',
        '7AP' => 'E02000001',
        '7AQ' => 'E02000001',
        '7AR' => 'E02000001',
        '7AS' => 'E02000001',
        '7AT' => 'E02000001',
        '7AU' => 'E02000001',
        '7AX' => 'E02000001',
        '7AY' => 'E02000001',
        '7BA' => 'E02000001',
        '7BB' => 'E02000001',
        '7BD' => 'E02000001',
        '7BE' => 'E02000001',
        '7BH' => 'E02000001',
        '7BN' => 'E02000001',
        '7BP' => 'E02000001',
        '7BR' => 'E02000001',
        '7BS' => 'E02000001',
        '7BT' => 'E02000001',
        '7BU' => 'E02000001',
        '7BX' => 'E02000001',
        '7DA' => 'E02000001',
        '7DB' => 'E02000001',
        '7DD' => 'E02000001',
        '7DE' => 'E02000001',
        '7DH' => 'E02000001',
        '7DJ' => 'E02000001',
        '7DL' => 'E02000001',
        '7DN' => 'E02000001',
        '7DQ' => 'E02000001',
        '7DR' => 'E02000001',
        '7EA' => 'E02000001',
        '7EB' => 'E02000001',
        '7EE' => 'E02000001',
        '7EF' => 'E02000001',
        '7EH' => 'E02000001',
        '7EL' => 'E02000001',
        '7EN' => 'E02000001',
        '7EP' => 'E02000001',
        '7EQ' => 'E02000001',
        '7ES' => 'E02000001',
        '7HA' => 'E02000001',
        '7HB' => 'E02000001',
        '7HD' => 'E02000001',
        '7HE' => 'E02000001',
        '7HF' => 'E02000001',
        '7HG' => 'E02000001',
        '7HH' => 'E02000001',
        '7HJ' => 'E02000001',
        '7HP' => 'E02000001',
        '7HQ' => 'E02000001',
        '7HR' => 'E02000001',
        '7HS' => 'E02000001',
        '7HT' => 'E02000001',
        '7HU' => 'E02000001',
        '7HX' => 'E02000001',
        '7HY' => 'E02000001',
        '7JA' => 'E02000001',
        '7JD' => 'E02000001',
        '7JE' => 'E02000001',
        '7JH' => 'E02000001',
        '7JL' => 'E02000001',
        '7JP' => 'E02000001',
        '7JQ' => 'E02000001',
        '7JR' => 'E02000001',
        '7JS' => 'E02000001',
        '7JT' => 'E02000001',
        '7JU' => 'E02000001',
        '7JX' => 'E02000001',
        '7JY' => 'E02000001',
        '7LB' => 'E02000001',
        '7LD' => 'E02000001',
        '7LE' => 'E02000001',
        '7LJ' => 'E02000001',
        '7LL' => 'E02000001',
        '7LN' => 'E02000001',
        '7LS' => 'E02000001',
        '7LU' => 'E02000001',
        '7NA' => 'E02000001',
        '7NB' => 'E02000001',
        '7ND' => 'E02000001',
        '7NE' => 'E02000575',
        '7NH' => 'E02000001',
        '7NJ' => 'E02000001',
        '7NL' => 'E02000001',
        '7NQ' => 'E02000001',
        '7NX' => 'E02000001',
        '7PA' => 'E02000001',
        '7PB' => 'E02000575',
        '7PD' => 'E02000575',
        '7PE' => 'E02000575',
        '7PF' => 'E02000575',
        '7WA' => 'E02000575',
        '7WB' => 'E02000575',
        '7WD' => 'E02000575',
        '7WE' => 'E02000575',
        '8AA' => 'E02000001',
        '8AB' => 'E02000001',
        '8AD' => 'E02000001',
        '8AE' => 'E02000001',
        '8AF' => 'E02000001',
        '8AH' => 'E02000001',
        '8AJ' => 'E02000001',
        '8AL' => 'E02000001',
        '8AN' => 'E02000001',
        '8AP' => 'E02000001',
        '8AQ' => 'E02000001',
        '8AR' => 'E02000001',
        '8AT' => 'E02000001',
        '8AU' => 'E02000001',
        '8AW' => 'E02000001',
        '8AX' => 'E02000001',
        '8AY' => 'E02000001',
        '8BA' => 'E02000001',
        '8BB' => 'E02000001',
        '8BD' => 'E02000575',
        '8BE' => 'E02000001',
        '8BH' => 'E02000001',
        '8BJ' => 'E02000001',
        '8BL' => 'E02000001',
        '8BN' => 'E02000001',
        '8BP' => 'E02000001',
        '8BQ' => 'E02000001',
        '8BR' => 'E02000001',
        '8BS' => 'E02000001',
        '8BT' => 'E02000001',
        '8BX' => 'E02000575',
        '8DA' => 'E02000001',
        '8DB' => 'E02000001',
        '8DD' => 'E02000001',
        '8DE' => 'E02000001',
        '8DG' => 'E02000575',
        '8DH' => 'E02000001',
        '8DJ' => 'E02000001',
        '8DL' => 'E02000001',
        '8DN' => 'E02000001',
        '8DP' => 'E02000001',
        '8DQ' => 'E02000001',
        '8DR' => 'E02000575',
        '8DT' => 'E02000001',
        '8DU' => 'E02000001',
        '8DX' => 'E02000001',
        '8EA' => 'E02000001',
        '8EB' => 'E02000001',
        '8ED' => 'E02000001',
        '8EE' => 'E02000001',
        '8EH' => 'E02000001',
        '8EJ' => 'E02000001',
        '8EL' => 'E02000001',
        '8EN' => 'E02000001',
        '8EQ' => 'E02000001',
        '8ER' => 'E02000001',
        '8ET' => 'E02000001',
        '8EU' => 'E02000001',
        '8EY' => 'E02000001',
        '8FT' => 'E02000001',
        '8HA' => 'E02000001',
        '8HB' => 'E02000001',
        '8HD' => 'E02000001',
        '8HE' => 'E02000001',
        '8HG' => 'E02000001',
        '8HH' => 'E02000001',
        '8HJ' => 'E02000001',
        '8HL' => 'E02000001',
        '8HN' => 'E02000001',
        '8HP' => 'E02000001',
        '8HR' => 'E02000001',
        '8HS' => 'E02000001',
        '8HT' => 'E02000001',
        '8HU' => 'E02000001',
        '8HX' => 'E02000001',
        '8HY' => 'E02000001',
        '8JA' => 'E02000001',
        '8JB' => 'E02000001',
        '8JE' => 'E02000001',
        '8JH' => 'E02000001',
        '8JJ' => 'E02000001',
        '8JL' => 'E02000001',
        '8JN' => 'E02000001',
        '8JP' => 'E02000001',
        '8JQ' => 'E02000001',
        '8JR' => 'E02000001',
        '8JT' => 'E02000001',
        '8JX' => 'E02000001',
        '8LA' => 'E02000575',
        '8LE' => 'E02000575',
        '8LH' => 'E02000575',
        '8LQ' => 'E02000001',
        '8NA' => 'E02000001',
        '8NB' => 'E02000001',
        '8ND' => 'E02000575',
        '8NE' => 'E02000001',
        '8PA' => 'E02000575',
        '8PB' => 'E02000001',
        '8PD' => 'E02000001',
        '8PE' => 'E02000001',
        '8PH' => 'E02000001',
        '8PJ' => 'E02000575',
        '8PL' => 'E02000001',
        '8PN' => 'E02000575',
        '8PP' => 'E02000001',
        '8PQ' => 'E02000001',
        '8PR' => 'E02000575',
        '8PS' => 'E02000001',
        '8PT' => 'E02000575',
        '8TE' => 'E02000001',
        '8WA' => 'E02000575',
        '8WQ' => 'E02000575',
        '8ZA' => 'E02000001',
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