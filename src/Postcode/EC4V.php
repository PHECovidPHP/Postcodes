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
final class EC4V
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '2AA' => 'E02000001',
        '2AB' => 'E02000001',
        '2AD' => 'E02000001',
        '2AE' => 'E02000001',
        '2AF' => 'E02000001',
        '2AH' => 'E02000001',
        '2AJ' => 'E02000001',
        '2AL' => 'E02000001',
        '2AN' => 'E02000001',
        '2AP' => 'E02000001',
        '2AQ' => 'E02000001',
        '2AR' => 'E02000001',
        '2AS' => 'E02000001',
        '2AT' => 'E02000001',
        '2AU' => 'E02000001',
        '2AX' => 'E02000001',
        '2BA' => 'E02000001',
        '2BB' => 'E02000001',
        '2BD' => 'E02000001',
        '2BE' => 'E02000001',
        '2BH' => 'E02000001',
        '2BJ' => 'E02000001',
        '2BP' => 'E02000001',
        '2BQ' => 'E02000001',
        '2BS' => 'E02000001',
        '2BT' => 'E02000001',
        '2BX' => 'E02000001',
        '2BY' => 'E02000001',
        '2DA' => 'E02000575',
        '2DB' => 'E02000001',
        '2DG' => 'E02000001',
        '2DH' => 'E02000001',
        '2DJ' => 'E02000001',
        '2DL' => 'E02000001',
        '2EA' => 'E02000001',
        '2HA' => 'E02000575',
        '2HB' => 'E02000001',
        '2WA' => 'E02000575',
        '3AA' => 'E02000001',
        '3AB' => 'E02000001',
        '3AD' => 'E02000001',
        '3AE' => 'E02000001',
        '3AH' => 'E02000001',
        '3AJ' => 'E02000001',
        '3AL' => 'E02000001',
        '3AN' => 'E02000001',
        '3AP' => 'E02000001',
        '3AQ' => 'E02000001',
        '3AR' => 'E02000001',
        '3AS' => 'E02000001',
        '3AT' => 'E02000001',
        '3AU' => 'E02000001',
        '3AX' => 'E02000001',
        '3AY' => 'E02000001',
        '3BA' => 'E02000001',
        '3BB' => 'E02000001',
        '3BD' => 'E02000001',
        '3BE' => 'E02000001',
        '3BG' => 'E02000001',
        '3BH' => 'E02000001',
        '3BJ' => 'E02000001',
        '3BL' => 'E02000001',
        '3BN' => 'E02000001',
        '3BP' => 'E02000001',
        '3BQ' => 'E02000001',
        '3BR' => 'E02000001',
        '3BS' => 'E02000001',
        '3BT' => 'E02000001',
        '3BU' => 'E02000001',
        '3BX' => 'E02000001',
        '3BY' => 'E02000001',
        '3DA' => 'E02000001',
        '3DB' => 'E02000001',
        '3DD' => 'E02000001',
        '3DE' => 'E02000001',
        '3DH' => 'E02000001',
        '3DJ' => 'E02000001',
        '3DL' => 'E02000001',
        '3DN' => 'E02000001',
        '3DP' => 'E02000001',
        '3DQ' => 'E02000001',
        '3DR' => 'E02000001',
        '3DS' => 'E02000001',
        '3DT' => 'E02000001',
        '3DU' => 'E02000001',
        '3DX' => 'E02000001',
        '3DY' => 'E02000001',
        '3EB' => 'E02000001',
        '3ED' => 'E02000001',
        '3EE' => 'E02000001',
        '3EH' => 'E02000001',
        '3EJ' => 'E02000001',
        '3EL' => 'E02000001',
        '3EN' => 'E02000001',
        '3EP' => 'E02000001',
        '3ER' => 'E02000575',
        '3ET' => 'E02000001',
        '3HA' => 'E02000001',
        '3HB' => 'E02000001',
        '3HD' => 'E02000001',
        '3HE' => 'E02000001',
        '3HH' => 'E02000001',
        '3HJ' => 'E02000001',
        '3HL' => 'E02000001',
        '3HN' => 'E02000001',
        '3HR' => 'E02000001',
        '3HT' => 'E02000001',
        '3JP' => 'E02000001',
        '3JX' => 'E02000001',
        '3LA' => 'E02000001',
        '3LD' => 'E02000001',
        '3LE' => 'E02000001',
        '3LH' => 'E02000001',
        '3LJ' => 'E02000001',
        '3LL' => 'E02000001',
        '3LN' => 'E02000001',
        '3LP' => 'E02000001',
        '3LQ' => 'E02000001',
        '3LR' => 'E02000001',
        '3LS' => 'E02000001',
        '3LT' => 'E02000001',
        '3LU' => 'E02000001',
        '3NA' => 'E02000001',
        '3NB' => 'E02000001',
        '3ND' => 'E02000001',
        '3NH' => 'E02000001',
        '3NJ' => 'E02000001',
        '3NL' => 'E02000001',
        '3NN' => 'E02000001',
        '3NQ' => 'E02000001',
        '3NR' => 'E02000001',
        '3NS' => 'E02000001',
        '3NT' => 'E02000001',
        '3NX' => 'E02000001',
        '3PA' => 'E02000001',
        '3PB' => 'E02000001',
        '3PD' => 'E02000575',
        '3PE' => 'E02000001',
        '3PL' => 'E02000001',
        '3PN' => 'E02000001',
        '3PP' => 'E02000001',
        '3PQ' => 'E02000001',
        '3PR' => 'E02000001',
        '3PS' => 'E02000001',
        '3PT' => 'E02000001',
        '3PX' => 'E02000575',
        '3PY' => 'E02000575',
        '3PZ' => 'E02000575',
        '3QA' => 'E02000001',
        '3QH' => 'E02000001',
        '3QQ' => 'E02000001',
        '3QR' => 'E02000001',
        '3RL' => 'E02000001',
        '3SB' => 'E02000575',
        '3TT' => 'E02000001',
        '3WA' => 'E02000575',
        '3YB' => 'E02000575',
        '4AA' => 'E02000001',
        '4AB' => 'E02000001',
        '4AD' => 'E02000001',
        '4AE' => 'E02000001',
        '4AF' => 'E02000001',
        '4AG' => 'E02000001',
        '4AH' => 'E02000001',
        '4AJ' => 'E02000001',
        '4AL' => 'E02000001',
        '4AN' => 'E02000001',
        '4AP' => 'E02000001',
        '4AQ' => 'E02000001',
        '4AR' => 'E02000001',
        '4AS' => 'E02000001',
        '4AT' => 'E02000001',
        '4AU' => 'E02000001',
        '4AX' => 'E02000001',
        '4AY' => 'E02000001',
        '4AZ' => 'E02000001',
        '4BA' => 'E02000001',
        '4BB' => 'E02000001',
        '4BD' => 'E02000001',
        '4BE' => 'E02000001',
        '4BF' => 'E02000001',
        '4BG' => 'E02000001',
        '4BH' => 'E02000001',
        '4BJ' => 'E02000001',
        '4BL' => 'E02000001',
        '4BN' => 'E02000001',
        '4BP' => 'E02000001',
        '4BQ' => 'E02000001',
        '4BR' => 'E02000001',
        '4BS' => 'E02000001',
        '4BT' => 'E02000001',
        '4BU' => 'E02000001',
        '4BX' => 'E02000001',
        '4BY' => 'E02000001',
        '4DA' => 'E02000001',
        '4DB' => 'E02000001',
        '4DD' => 'E02000001',
        '4DE' => 'E02000575',
        '4DF' => 'E02000001',
        '4DG' => 'E02000001',
        '4DH' => 'E02000001',
        '4DJ' => 'E02000001',
        '4DL' => 'E02000001',
        '4DN' => 'E02000001',
        '4DP' => 'E02000001',
        '4DR' => 'E02000001',
        '4DS' => 'E02000575',
        '4DU' => 'E02000001',
        '4DW' => 'E02000001',
        '4DX' => 'E02000001',
        '4DY' => 'E02000001',
        '4DZ' => 'E02000001',
        '4EA' => 'E02000001',
        '4EB' => 'E02000001',
        '4ED' => 'E02000001',
        '4EE' => 'E02000001',
        '4EF' => 'E02000001',
        '4EG' => 'E02000001',
        '4EH' => 'E02000001',
        '4EJ' => 'E02000001',
        '4EL' => 'E02000001',
        '4EN' => 'E02000001',
        '4EP' => 'E02000001',
        '4ER' => 'E02000001',
        '4ES' => 'E02000001',
        '4ET' => 'E02000001',
        '4EX' => 'E02000001',
        '4EY' => 'E02000001',
        '4GF' => 'E02000001',
        '4GG' => 'E02000001',
        '4HA' => 'E02000001',
        '4HB' => 'E02000001',
        '4HD' => 'E02000001',
        '4HG' => 'E02000001',
        '4HH' => 'E02000001',
        '4HL' => 'E02000001',
        '4HN' => 'E02000001',
        '4HP' => 'E02000001',
        '4HQ' => 'E02000001',
        '4HR' => 'E02000001',
        '4HS' => 'E02000001',
        '4JA' => 'E02000001',
        '4JB' => 'E02000001',
        '4JH' => 'E02000001',
        '4JJ' => 'E02000001',
        '4JL' => 'E02000001',
        '4JN' => 'E02000001',
        '4JP' => 'E02000001',
        '4LA' => 'E02000001',
        '4NL' => 'E02000001',
        '4PA' => 'E02000575',
        '4QQ' => 'E02000001',
        '4SL' => 'E02000001',
        '5AA' => 'E02000001',
        '5AB' => 'E02000001',
        '5AD' => 'E02000001',
        '5AE' => 'E02000001',
        '5AF' => 'E02000001',
        '5AG' => 'E02000001',
        '5AH' => 'E02000001',
        '5AJ' => 'E02000001',
        '5AL' => 'E02000001',
        '5AN' => 'E02000001',
        '5AP' => 'E02000001',
        '5AQ' => 'E02000001',
        '5AR' => 'E02000001',
        '5AS' => 'E02000001',
        '5AT' => 'E02000001',
        '5AU' => 'E02000001',
        '5AX' => 'E02000001',
        '5AY' => 'E02000001',
        '5BA' => 'E02000001',
        '5BB' => 'E02000001',
        '5BD' => 'E02000001',
        '5BH' => 'E02000001',
        '5BJ' => 'E02000001',
        '5BL' => 'E02000001',
        '5BP' => 'E02000001',
        '5BR' => 'E02000001',
        '5BT' => 'E02000001',
        '5BU' => 'E02000001',
        '5BX' => 'E02000001',
        '5BY' => 'E02000001',
        '5BZ' => 'E02000001',
        '5DB' => 'E02000001',
        '5DD' => 'E02000001',
        '5DE' => 'E02000001',
        '5DF' => 'E02000001',
        '5DH' => 'E02000001',
        '5DJ' => 'E02000001',
        '5DL' => 'E02000001',
        '5DN' => 'E02000001',
        '5DP' => 'E02000001',
        '5DQ' => 'E02000001',
        '5DR' => 'E02000001',
        '5DS' => 'E02000001',
        '5DT' => 'E02000001',
        '5DU' => 'E02000001',
        '5DX' => 'E02000001',
        '5DY' => 'E02000001',
        '5EA' => 'E02000001',
        '5EB' => 'E02000001',
        '5ED' => 'E02000001',
        '5EE' => 'E02000001',
        '5EF' => 'E02000001',
        '5EG' => 'E02000001',
        '5EH' => 'E02000001',
        '5EN' => 'E02000001',
        '5EP' => 'E02000001',
        '5EQ' => 'E02000001',
        '5ER' => 'E02000001',
        '5ES' => 'E02000001',
        '5EU' => 'E02000001',
        '5EX' => 'E02000001',
        '5EY' => 'E02000001',
        '5HA' => 'E02000001',
        '5HB' => 'E02000001',
        '5HD' => 'E02000001',
        '5HE' => 'E02000001',
        '5HF' => 'E02000001',
        '5HH' => 'E02000001',
        '5HJ' => 'E02000001',
        '5HL' => 'E02000001',
        '5HP' => 'E02000001',
        '5HR' => 'E02000001',
        '5HS' => 'E02000001',
        '5HT' => 'E02000001',
        '5HW' => 'E02000001',
        '5HX' => 'E02000001',
        '5JA' => 'E02000001',
        '5JB' => 'E02000575',
        '5JH' => 'E02000001',
        '5JJ' => 'E02000001',
        '5JL' => 'E02000001',
        '5JN' => 'E02000001',
        '5JP' => 'E02000001',
        '5JQ' => 'E02000001',
        '5JR' => 'E02000001',
        '5JS' => 'E02000575',
        '5JT' => 'E02000001',
        '5JU' => 'E02000001',
        '5LB' => 'E02000001',
        '5LD' => 'E02000575',
        '5NA' => 'E02000001',
        '5NB' => 'E02000575',
        '5SP' => 'E02000001',
        '5WA' => 'E02000001',
        '5WD' => 'E02000001',
        '5WH' => 'E02000001',
        '5WX' => 'E02000001',
        '5WZ' => 'E02000575',
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
        '6AS' => 'E02000001',
        '6AU' => 'E02000001',
        '6AW' => 'E02000001',
        '6AX' => 'E02000001',
        '6AY' => 'E02000001',
        '6AZ' => 'E02000001',
        '6BB' => 'E02000001',
        '6BD' => 'E02000001',
        '6BE' => 'E02000001',
        '6BG' => 'E02000001',
        '6BH' => 'E02000001',
        '6BJ' => 'E02000001',
        '6BL' => 'E02000001',
        '6BN' => 'E02000001',
        '6BQ' => 'E02000001',
        '6BR' => 'E02000001',
        '6BS' => 'E02000001',
        '6BW' => 'E02000001',
        '6BX' => 'E02000001',
        '6BY' => 'E02000001',
        '6DA' => 'E02000001',
        '6DB' => 'E02000001',
        '6DE' => 'E02000001',
        '6DH' => 'E02000001',
        '6DL' => 'E02000575',
        '6DN' => 'E02000001',
        '6DP' => 'E02000575',
        '6DQ' => 'E02000001',
        '6DR' => 'E02000001',
        '6DS' => 'E02000001',
        '6DT' => 'E02000001',
        '6DU' => 'E02000001',
        '6DX' => 'E02000001',
        '6DY' => 'E02000001',
        '6EA' => 'E02000001',
        '6EB' => 'E02000001',
        '6EH' => 'E02000001',
        '6EJ' => 'E02000001',
        '6EL' => 'E02000001',
        '6EN' => 'E02000575',
        '6EP' => 'E02000001',
        '6ER' => 'E02000001',
        '6ES' => 'E02000001',
        '6EU' => 'E02000001',
        '6EX' => 'E02000001',
        '6HA' => 'E02000001',
        '6HB' => 'E02000001',
        '6HD' => 'E02000575',
        '6HE' => 'E02000001',
        '6HH' => 'E02000001',
        '6HJ' => 'E02000001',
        '6HL' => 'E02000001',
        '6HN' => 'E02000575',
        '6HR' => 'E02000001',
        '6HT' => 'E02000001',
        '6HU' => 'E02000001',
        '6HX' => 'E02000001',
        '6JA' => 'E02000001',
        '6JE' => 'E02000001',
        '6JH' => 'E02000001',
        '6JJ' => 'E02000001',
        '6JL' => 'E02000001',
        '6JQ' => 'E02000001',
        '6LA' => 'E02000001',
        '6LB' => 'E02000001',
        '6LT' => 'E02000001',
        '6LX' => 'E02000001',
        '6NA' => 'E02000001',
        '6NB' => 'E02000575',
        '6RN' => 'E02000001',
        '6RW' => 'E02000001',
        '6WA' => 'E02000575',
        '6YT' => 'E02000575',
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