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
final class EC3R
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '5AA' => 'E02000001',
        '5AB' => 'E02000001',
        '5AD' => 'E02000001',
        '5AH' => 'E02000001',
        '5AL' => 'E02000001',
        '5AP' => 'E02000001',
        '5AQ' => 'E02000001',
        '5AR' => 'E02000001',
        '5AS' => 'E02000001',
        '5AT' => 'E02000001',
        '5AW' => 'E02000575',
        '5AX' => 'E02000001',
        '5AY' => 'E02000001',
        '5AZ' => 'E02000001',
        '5BA' => 'E02000001',
        '5BJ' => 'E02000001',
        '5BL' => 'E02000001',
        '5BQ' => 'E02000001',
        '5BS' => 'E02000001',
        '5BT' => 'E02000001',
        '5BU' => 'E02000001',
        '5BX' => 'E02000001',
        '5DD' => 'E02000001',
        '5DE' => 'E02000001',
        '5DJ' => 'E02000001',
        '5DL' => 'E02000001',
        '5DT' => 'E02000001',
        '5EA' => 'E02000001',
        '5EB' => 'E02000001',
        '5ED' => 'E02000001',
        '5EF' => 'E02000001',
        '5EH' => 'E02000001',
        '5EN' => 'E02000001',
        '5EP' => 'E02000001',
        '5EQ' => 'E02000001',
        '5ER' => 'E02000575',
        '5HA' => 'E02000001',
        '5HB' => 'E02000001',
        '5HE' => 'E02000001',
        '5HH' => 'E02000001',
        '5HJ' => 'E02000001',
        '5HL' => 'E02000001',
        '5HN' => 'E02000001',
        '5HR' => 'E02000001',
        '6AA' => 'E02000001',
        '6AB' => 'E02000575',
        '6AD' => 'E02000001',
        '6AE' => 'E02000575',
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
        '6BB' => 'E02000001',
        '6BD' => 'E02000001',
        '6BE' => 'E02000001',
        '6BH' => 'E02000001',
        '6BJ' => 'E02000001',
        '6BP' => 'E02000001',
        '6BQ' => 'E02000001',
        '6BR' => 'E02000001',
        '6BT' => 'E02000001',
        '6BU' => 'E02000001',
        '6BX' => 'E02000001',
        '6BY' => 'E02000001',
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
        '6DT' => 'E02000001',
        '6DU' => 'E02000001',
        '6DX' => 'E02000001',
        '6EA' => 'E02000001',
        '6EE' => 'E02000001',
        '6EH' => 'E02000001',
        '6EJ' => 'E02000575',
        '6EL' => 'E02000001',
        '6EN' => 'E02000001',
        '6EP' => 'E02000001',
        '6EQ' => 'E02000001',
        '6EU' => 'E02000575',
        '6EX' => 'E02000001',
        '6EY' => 'E02000575',
        '6HA' => 'E02000001',
        '6HB' => 'E02000001',
        '6HD' => 'E02000001',
        '6HE' => 'E02000001',
        '6HH' => 'E02000575',
        '6HR' => 'E02000575',
        '6HS' => 'E02000575',
        '6HX' => 'E02000001',
        '6JN' => 'E02000001',
        '6JQ' => 'E02000001',
        '6LA' => 'E02000001',
        '6LB' => 'E02000001',
        '6LE' => 'E02000001',
        '6LR' => 'E02000001',
        '6NB' => 'E02000001',
        '6WA' => 'E02000001',
        '6WB' => 'E02000575',
        '6WE' => 'E02000575',
        '6XT' => 'E02000575',
        '6YT' => 'E02000001',
        '7AA' => 'E02000001',
        '7AB' => 'E02000001',
        '7AD' => 'E02000001',
        '7AE' => 'E02000001',
        '7AF' => 'E02000001',
        '7AG' => 'E02000001',
        '7AH' => 'E02000001',
        '7AJ' => 'E02000001',
        '7AL' => 'E02000575',
        '7AN' => 'E02000001',
        '7AP' => 'E02000001',
        '7AQ' => 'E02000001',
        '7AR' => 'E02000001',
        '7AS' => 'E02000001',
        '7AT' => 'E02000001',
        '7AX' => 'E02000001',
        '7AY' => 'E02000001',
        '7BA' => 'E02000001',
        '7BB' => 'E02000001',
        '7BD' => 'E02000001',
        '7BE' => 'E02000001',
        '7BJ' => 'E02000001',
        '7BL' => 'E02000001',
        '7BQ' => 'E02000001',
        '7BR' => 'E02000001',
        '7BT' => 'E02000001',
        '7BU' => 'E02000001',
        '7BX' => 'E02000001',
        '7BY' => 'E02000001',
        '7DA' => 'E02000001',
        '7DD' => 'E02000001',
        '7DE' => 'E02000001',
        '7DH' => 'E02000001',
        '7DJ' => 'E02000001',
        '7DN' => 'E02000001',
        '7DP' => 'E02000001',
        '7DQ' => 'E02000001',
        '7DU' => 'E02000001',
        '7DY' => 'E02000001',
        '7DZ' => 'E02000575',
        '7EA' => 'E02000001',
        '7EB' => 'E02000001',
        '7ED' => 'E02000001',
        '7EE' => 'E02000001',
        '7EH' => 'E02000001',
        '7EJ' => 'E02000001',
        '7EL' => 'E02000001',
        '7EN' => 'E02000001',
        '7EP' => 'E02000001',
        '7ER' => 'E02000001',
        '7ET' => 'E02000001',
        '7EU' => 'E02000001',
        '7EX' => 'E02000001',
        '7EY' => 'E02000001',
        '7FB' => 'E02000001',
        '7FE' => 'E02000001',
        '7FH' => 'E02000001',
        '7FL' => 'E02000001',
        '7FN' => 'E02000001',
        '7FQ' => 'E02000001',
        '7FT' => 'E02000001',
        '7FX' => 'E02000001',
        '7HD' => 'E02000001',
        '7HE' => 'E02000001',
        '7HH' => 'E02000001',
        '7HJ' => 'E02000001',
        '7HN' => 'E02000001',
        '7HP' => 'E02000001',
        '7HR' => 'E02000001',
        '7HS' => 'E02000001',
        '7HT' => 'E02000001',
        '7HU' => 'E02000001',
        '7HX' => 'E02000001',
        '7HY' => 'E02000001',
        '7JA' => 'E02000001',
        '7JB' => 'E02000001',
        '7JE' => 'E02000001',
        '7JH' => 'E02000001',
        '7JJ' => 'E02000001',
        '7JL' => 'E02000001',
        '7JN' => 'E02000001',
        '7JP' => 'E02000001',
        '7JQ' => 'E02000001',
        '7JR' => 'E02000001',
        '7JT' => 'E02000001',
        '7JX' => 'E02000001',
        '7JY' => 'E02000001',
        '7LA' => 'E02000001',
        '7LB' => 'E02000001',
        '7LD' => 'E02000001',
        '7LH' => 'E02000001',
        '7LL' => 'E02000001',
        '7LN' => 'E02000001',
        '7LP' => 'E02000001',
        '7LQ' => 'E02000001',
        '7LR' => 'E02000001',
        '7LU' => 'E02000001',
        '7NA' => 'E02000001',
        '7NB' => 'E02000001',
        '7ND' => 'E02000001',
        '7NE' => 'E02000001',
        '7NH' => 'E02000001',
        '7NJ' => 'E02000001',
        '7NL' => 'E02000001',
        '7NN' => 'E02000001',
        '7NP' => 'E02000001',
        '7NQ' => 'E02000001',
        '7NU' => 'E02000001',
        '7PA' => 'E02000001',
        '7PB' => 'E02000001',
        '7PD' => 'E02000001',
        '7PE' => 'E02000001',
        '7PH' => 'E02000001',
        '7PJ' => 'E02000001',
        '7PL' => 'E02000001',
        '7PN' => 'E02000001',
        '7PP' => 'E02000001',
        '7PQ' => 'E02000001',
        '7PR' => 'E02000001',
        '7PT' => 'E02000001',
        '7PX' => 'E02000001',
        '7QA' => 'E02000001',
        '7QD' => 'E02000001',
        '7QH' => 'E02000001',
        '7QJ' => 'E02000001',
        '7QL' => 'E02000001',
        '7QN' => 'E02000001',
        '7QP' => 'E02000001',
        '7QQ' => 'E02000001',
        '7QR' => 'E02000001',
        '7QS' => 'E02000001',
        '7QT' => 'E02000001',
        '7QX' => 'E02000001',
        '7RB' => 'E02000001',
        '7RD' => 'E02000001',
        '7RH' => 'E02000001',
        '7RJ' => 'E02000001',
        '7RN' => 'E02000001',
        '7RQ' => 'E02000001',
        '7RR' => 'E02000001',
        '7SB' => 'E02000001',
        '7SP' => 'E02000001',
        '7SR' => 'E02000001',
        '7SS' => 'E02000001',
        '7ST' => 'E02000001',
        '7SX' => 'E02000001',
        '7SY' => 'E02000001',
        '7TB' => 'E02000001',
        '7TE' => 'E02000001',
        '7TH' => 'E02000001',
        '7TJ' => 'E02000001',
        '7TN' => 'E02000001',
        '7TQ' => 'E02000001',
        '7XA' => 'E02000001',
        '7XB' => 'E02000001',
        '7XD' => 'E02000001',
        '7XE' => 'E02000001',
        '7XF' => 'E02000001',
        '7XH' => 'E02000001',
        '7XJ' => 'E02000001',
        '7XL' => 'E02000001',
        '7XN' => 'E02000001',
        '7XP' => 'E02000001',
        '7XQ' => 'E02000001',
        '7XT' => 'E02000001',
        '7XU' => 'E02000001',
        '7XW' => 'E02000001',
        '7XY' => 'E02000001',
        '7YA' => 'E02000001',
        '7YB' => 'E02000001',
        '7YD' => 'E02000001',
        '7YE' => 'E02000001',
        '7YH' => 'E02000001',
        '7YJ' => 'E02000001',
        '7YL' => 'E02000001',
        '7YN' => 'E02000001',
        '7ZZ' => 'E02000001',
        '8AA' => 'E02000575',
        '8AB' => 'E02000001',
        '8AD' => 'E02000001',
        '8AE' => 'E02000001',
        '8AF' => 'E02000001',
        '8AG' => 'E02000001',
        '8AH' => 'E02000001',
        '8AJ' => 'E02000001',
        '8AQ' => 'E02000001',
        '8AS' => 'E02000001',
        '8AU' => 'E02000001',
        '8BG' => 'E02000001',
        '8BP' => 'E02000001',
        '8BQ' => 'E02000001',
        '8BS' => 'E02000001',
        '8BT' => 'E02000001',
        '8BU' => 'E02000001',
        '8DA' => 'E02000001',
        '8DB' => 'E02000001',
        '8DD' => 'E02000001',
        '8DE' => 'E02000001',
        '8DF' => 'E02000001',
        '8DJ' => 'E02000001',
        '8DL' => 'E02000001',
        '8DN' => 'E02000001',
        '8DQ' => 'E02000001',
        '8DR' => 'E02000001',
        '8DS' => 'E02000001',
        '8DT' => 'E02000001',
        '8DU' => 'E02000001',
        '8DW' => 'E02000001',
        '8DX' => 'E02000001',
        '8DY' => 'E02000001',
        '8DZ' => 'E02000001',
        '8EB' => 'E02000001',
        '8EE' => 'E02000001',
        '8EF' => 'E02000001',
        '8EJ' => 'E02000001',
        '8EN' => 'E02000575',
        '8ER' => 'E02000575',
        '8HH' => 'E02000001',
        '8HJ' => 'E02000001',
        '8HL' => 'E02000001',
        '8HN' => 'E02000001',
        '8HT' => 'E02000001',
        '8HY' => 'E02000001',
        '8JD' => 'E02000001',
        '8JQ' => 'E02000001',
        '8JT' => 'E02000001',
        '8JU' => 'E02000001',
        '8LB' => 'E02000001',
        '8LD' => 'E02000001',
        '8LE' => 'E02000001',
        '8LJ' => 'E02000001',
        '8LL' => 'E02000575',
        '8LN' => 'E02000001',
        '8LP' => 'E02000575',
        '8LQ' => 'E02000001',
        '8LR' => 'E02000575',
        '8LS' => 'E02000575',
        '8LT' => 'E02000575',
        '8LU' => 'E02000001',
        '8LX' => 'E02000001',
        '8LY' => 'E02000575',
        '8NA' => 'E02000575',
        '8NB' => 'E02000001',
        '8ND' => 'E02000001',
        '8NE' => 'E02000001',
        '8NH' => 'E02000001',
        '8NJ' => 'E02000001',
        '8NL' => 'E02000001',
        '8NN' => 'E02000001',
        '8NP' => 'E02000001',
        '8NQ' => 'E02000001',
        '8NR' => 'E02000001',
        '8NS' => 'E02000001',
        '8NT' => 'E02000001',
        '8NU' => 'E02000001',
        '8NW' => 'E02000001',
        '8NX' => 'E02000001',
        '8PA' => 'E02000575',
        '8PB' => 'E02000575',
        '8PD' => 'E02000001',
        '8PE' => 'E02000001',
        '8PH' => 'E02000001',
        '8PL' => 'E02000001',
        '8PN' => 'E02000001',
        '8PP' => 'E02000001',
        '8PR' => 'E02000001',
        '8QA' => 'E02000575',
        '8QB' => 'E02000001',
        '8QD' => 'E02000575',
        '8QE' => 'E02000575',
        '8QQ' => 'E02000001',
        '8UL' => 'E02000001',
        '8WA' => 'E02000575',
        '8WQ' => 'E02000575',
        '8WY' => 'E02000001',
        '8ZQ' => 'E02000575',
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
