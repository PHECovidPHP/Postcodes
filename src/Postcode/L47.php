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
final class L47
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0LA' => 'E02001480',
        '0LB' => 'E02001480',
        '0LD' => 'E02001480',
        '0LE' => 'E02001480',
        '0LF' => 'E02001480',
        '0LG' => 'E02001480',
        '0LH' => 'E02001480',
        '0LJ' => 'E02001480',
        '0LL' => 'E02001480',
        '0LN' => 'E02001480',
        '0LP' => 'E02001479',
        '0LQ' => 'E02001480',
        '0LR' => 'E02001479',
        '0LS' => 'E02001480',
        '0LT' => 'E02001480',
        '0LU' => 'E02001480',
        '0LW' => 'E02001480',
        '0LX' => 'E02001480',
        '0LY' => 'E02001480',
        '0LZ' => 'E02001480',
        '0NA' => 'E02001480',
        '0NB' => 'E02001480',
        '0ND' => 'E02001480',
        '0NE' => 'E02001480',
        '0NF' => 'E02001479',
        '0NG' => 'E02001479',
        '0NH' => 'E02001480',
        '0NJ' => 'E02001480',
        '0NL' => 'E02001480',
        '0NN' => 'E02001480',
        '0NP' => 'E02001480',
        '0NQ' => 'E02001480',
        '0NR' => 'E02001480',
        '0NT' => 'E02001480',
        '0NU' => 'E02001480',
        '0NW' => 'E02001480',
        '0NX' => 'E02001480',
        '0NY' => 'E02001480',
        '0NZ' => 'E02001480',
        '1HA' => 'E02001480',
        '1HB' => 'E02001480',
        '1HD' => 'E02001480',
        '1HE' => 'E02001480',
        '1HF' => 'E02001480',
        '1HG' => 'E02001480',
        '1HH' => 'E02001480',
        '1HJ' => 'E02001480',
        '1HL' => 'E02001480',
        '1HN' => 'E02001480',
        '1HP' => 'E02001480',
        '1HQ' => 'E02001480',
        '1HR' => 'E02001480',
        '1HS' => 'E02001480',
        '1HT' => 'E02001480',
        '1HU' => 'E02001480',
        '1HW' => 'E02001480',
        '1HX' => 'E02001480',
        '1HY' => 'E02001480',
        '1HZ' => 'E02001480',
        '1JA' => 'E02001480',
        '1JB' => 'E02001480',
        '1JE' => 'E02001480',
        '1JF' => 'E02001480',
        '1JG' => 'E02001480',
        '1JH' => 'E02001480',
        '1JJ' => 'E02001480',
        '1JL' => 'E02001480',
        '1JN' => 'E02001480',
        '1JP' => 'E02001480',
        '1JQ' => 'E02001480',
        '1JW' => 'E02001480',
        '2AA' => 'E02001480',
        '2AB' => 'E02001480',
        '2AD' => 'E02001480',
        '2AE' => 'E02001480',
        '2AF' => 'E02001480',
        '2AG' => 'E02001480',
        '2AH' => 'E02001480',
        '2AJ' => 'E02001480',
        '2AL' => 'E02001480',
        '2AN' => 'E02001480',
        '2AP' => 'E02001480',
        '2AQ' => 'E02001480',
        '2AR' => 'E02001480',
        '2AS' => 'E02001480',
        '2AT' => 'E02001480',
        '2AU' => 'E02001480',
        '2AW' => 'E02001480',
        '2AX' => 'E02001480',
        '2AY' => 'E02001480',
        '2AZ' => 'E02001480',
        '2BA' => 'E02001480',
        '2BB' => 'E02001480',
        '2BD' => 'E02001480',
        '2BE' => 'E02001480',
        '2BG' => 'E02001480',
        '2BH' => 'E02001480',
        '2BL' => 'E02001480',
        '2BN' => 'E02001480',
        '2BP' => 'E02001480',
        '2BQ' => 'E02001480',
        '2BR' => 'E02001480',
        '2BS' => 'E02001480',
        '2BT' => 'E02001480',
        '2BU' => 'E02001480',
        '2BW' => 'E02001480',
        '2BX' => 'E02001480',
        '2BY' => 'E02001480',
        '2BZ' => 'E02001480',
        '2DA' => 'E02001480',
        '2DB' => 'E02001480',
        '2DD' => 'E02001480',
        '2DE' => 'E02001480',
        '2DF' => 'E02001480',
        '2DG' => 'E02001480',
        '2DJ' => 'E02001480',
        '2DL' => 'E02001480',
        '2DN' => 'E02001480',
        '2DP' => 'E02001480',
        '2DQ' => 'E02001480',
        '2DR' => 'E02001480',
        '2DS' => 'E02001480',
        '2DT' => 'E02001480',
        '2DU' => 'E02001480',
        '2DW' => 'E02001480',
        '2DX' => 'E02001480',
        '2DY' => 'E02001480',
        '2DZ' => 'E02001480',
        '2EA' => 'E02001480',
        '2EB' => 'E02001480',
        '2EE' => 'E02001480',
        '2EG' => 'E02001480',
        '2EL' => 'E02001480',
        '2EN' => 'E02001480',
        '2EP' => 'E02001480',
        '2ER' => 'E02001480',
        '2ES' => 'E02001480',
        '2EU' => 'E02001480',
        '2EX' => 'E02001480',
        '2EY' => 'E02001480',
        '2EZ' => 'E02001480',
        '2HA' => 'E02001480',
        '2HB' => 'E02001480',
        '2HD' => 'E02001480',
        '2HE' => 'E02001480',
        '2HF' => 'E02001480',
        '2HG' => 'E02001480',
        '2HH' => 'E02001480',
        '2HJ' => 'E02001480',
        '2HL' => 'E02001480',
        '2HQ' => 'E02001480',
        '3AA' => 'E02001480',
        '3AB' => 'E02001480',
        '3AD' => 'E02001480',
        '3AE' => 'E02001480',
        '3AF' => 'E02001480',
        '3AG' => 'E02001480',
        '3AH' => 'E02001479',
        '3AJ' => 'E02001479',
        '3AL' => 'E02001480',
        '3AN' => 'E02001479',
        '3AP' => 'E02001480',
        '3AQ' => 'E02001480',
        '3AR' => 'E02001480',
        '3AS' => 'E02001480',
        '3AT' => 'E02001480',
        '3AU' => 'E02001480',
        '3AW' => 'E02001480',
        '3AX' => 'E02001480',
        '3AY' => 'E02001480',
        '3AZ' => 'E02001480',
        '3BA' => 'E02001480',
        '3BB' => 'E02001480',
        '3BD' => 'E02001480',
        '3BE' => 'E02001480',
        '3BG' => 'E02001480',
        '3BH' => 'E02001480',
        '3BN' => 'E02001480',
        '3BQ' => 'E02001480',
        '3BR' => 'E02001480',
        '3BS' => 'E02001480',
        '3BT' => 'E02001480',
        '3BU' => 'E02001480',
        '3BW' => 'E02001480',
        '3BX' => 'E02001480',
        '3BY' => 'E02001480',
        '3BZ' => 'E02001480',
        '3DA' => 'E02001480',
        '3DB' => 'E02001480',
        '3DD' => 'E02001480',
        '3DE' => 'E02001480',
        '3DF' => 'E02001480',
        '3DG' => 'E02001480',
        '3DH' => 'E02001480',
        '3DJ' => 'E02001480',
        '3DL' => 'E02001480',
        '3DN' => 'E02001480',
        '3DP' => 'E02001480',
        '3DQ' => 'E02001480',
        '3DR' => 'E02001480',
        '3DS' => 'E02001480',
        '3DT' => 'E02001480',
        '3DW' => 'E02001480',
        '3ED' => 'E02001480',
        '3EE' => 'E02001480',
        '3EF' => 'E02001480',
        '3EH' => 'E02001480',
        '3EJ' => 'E02001480',
        '3EL' => 'E02001480',
        '3EN' => 'E02001480',
        '3EP' => 'E02001480',
        '3EQ' => 'E02001480',
        '3ER' => 'E02001480',
        '3ES' => 'E02001480',
        '3EW' => 'E02001480',
        '4AA' => 'E02001480',
        '4AB' => 'E02001480',
        '4AD' => 'E02001480',
        '4AE' => 'E02001480',
        '4AF' => 'E02001480',
        '4AG' => 'E02001480',
        '4AH' => 'E02001480',
        '4AJ' => 'E02001480',
        '4AL' => 'E02001480',
        '4AN' => 'E02001492',
        '4AP' => 'E02001492',
        '4AQ' => 'E02001480',
        '4AR' => 'E02001480',
        '4AS' => 'E02001480',
        '4AT' => 'E02001480',
        '4AU' => 'E02001480',
        '4AW' => 'E02001492',
        '4AX' => 'E02001480',
        '4AY' => 'E02001480',
        '4AZ' => 'E02001480',
        '4BA' => 'E02001480',
        '4BB' => 'E02001480',
        '4BD' => 'E02001480',
        '4BE' => 'E02001480',
        '4BG' => 'E02001480',
        '4BH' => 'E02001480',
        '4BL' => 'E02001480',
        '4BP' => 'E02001480',
        '4BQ' => 'E02001480',
        '4BR' => 'E02001480',
        '4BT' => 'E02001480',
        '4BU' => 'E02001480',
        '4BX' => 'E02001480',
        '4BZ' => 'E02001480',
        '4DD' => 'E02001480',
        '4DF' => 'E02001480',
        '4DG' => 'E02001480',
        '4DH' => 'E02001480',
        '4DN' => 'E02001480',
        '4DP' => 'E02001480',
        '4DQ' => 'E02001480',
        '4DR' => 'E02001480',
        '4DS' => 'E02001480',
        '4DT' => 'E02001480',
        '4DU' => 'E02001480',
        '4DW' => 'E02001480',
        '4FB' => 'E02001480',
        '4FD' => 'E02001480',
        '4FE' => 'E02001480',
        '4FF' => 'E02001480',
        '4FG' => 'E02001480',
        '4FH' => 'E02001480',
        '4FQ' => 'E02001480',
        '5AA' => 'E02001480',
        '5AB' => 'E02001480',
        '5AD' => 'E02001480',
        '5AE' => 'E02001480',
        '5AF' => 'E02001480',
        '5AG' => 'E02001480',
        '5AH' => 'E02001480',
        '5AJ' => 'E02001480',
        '5AL' => 'E02001480',
        '5AN' => 'E02001480',
        '5AP' => 'E02001480',
        '5AQ' => 'E02001480',
        '5AR' => 'E02001480',
        '5AS' => 'E02001480',
        '5AT' => 'E02001480',
        '5AU' => 'E02001480',
        '5AW' => 'E02001480',
        '5AX' => 'E02001480',
        '5AY' => 'E02001480',
        '5AZ' => 'E02001480',
        '5BA' => 'E02001480',
        '5BB' => 'E02001480',
        '5BD' => 'E02001480',
        '5BE' => 'E02001479',
        '5BG' => 'E02001480',
        '5BH' => 'E02001480',
        '5BL' => 'E02001480',
        '5BN' => 'E02001480',
        '5BS' => 'E02001480',
        '5BW' => 'E02001480',
        '6AA' => 'E02001480',
        '6AB' => 'E02001479',
        '6AD' => 'E02001479',
        '6AE' => 'E02001479',
        '6AF' => 'E02001479',
        '6AG' => 'E02001480',
        '6AH' => 'E02001479',
        '6AJ' => 'E02001480',
        '6AL' => 'E02001480',
        '6AN' => 'E02001479',
        '6AP' => 'E02001479',
        '6AQ' => 'E02001479',
        '6AR' => 'E02001479',
        '6AS' => 'E02001479',
        '6AT' => 'E02001479',
        '6AU' => 'E02001479',
        '6AW' => 'E02001479',
        '6AX' => 'E02001479',
        '6AY' => 'E02001479',
        '6AZ' => 'E02001479',
        '6BA' => 'E02001479',
        '6BB' => 'E02001479',
        '6BD' => 'E02001479',
        '6BE' => 'E02001479',
        '6BG' => 'E02001479',
        '6BH' => 'E02001479',
        '6BL' => 'E02001479',
        '6BN' => 'E02001479',
        '6BQ' => 'E02001479',
        '6BW' => 'E02001479',
        '7AD' => 'E02001479',
        '7AH' => 'E02001479',
        '7AJ' => 'E02001479',
        '7AL' => 'E02001479',
        '7AP' => 'E02001479',
        '7AR' => 'E02001479',
        '7AS' => 'E02001479',
        '7AT' => 'E02001479',
        '7AU' => 'E02001479',
        '7AX' => 'E02001480',
        '7AY' => 'E02001479',
        '7AZ' => 'E02001479',
        '7BA' => 'E02001479',
        '7BB' => 'E02001479',
        '7BD' => 'E02001479',
        '7BE' => 'E02001479',
        '7BG' => 'E02001479',
        '7BH' => 'E02001479',
        '7BJ' => 'E02001479',
        '7BL' => 'E02001479',
        '7BN' => 'E02001479',
        '7BP' => 'E02001479',
        '7BQ' => 'E02001479',
        '7BR' => 'E02001479',
        '7BS' => 'E02001479',
        '7BT' => 'E02001479',
        '7BU' => 'E02001479',
        '7BW' => 'E02001479',
        '7BX' => 'E02001479',
        '7BY' => 'E02001479',
        '7BZ' => 'E02001479',
        '7DA' => 'E02001479',
        '7DB' => 'E02001479',
        '7DD' => 'E02001479',
        '7DE' => 'E02001479',
        '7DF' => 'E02001479',
        '7DG' => 'E02001479',
        '8XA' => 'E02001479',
        '8XN' => 'E02001479',
        '8XP' => 'E02001479',
        '8XR' => 'E02001479',
        '8XS' => 'E02001479',
        '8XT' => 'E02001479',
        '8XU' => 'E02001479',
        '8XW' => 'E02001479',
        '8XX' => 'E02001479',
        '8XY' => 'E02001479',
        '8XZ' => 'E02001479',
        '8YB' => 'E02001479',
        '8YD' => 'E02001479',
        '9HH' => 'E02001479',
        '9RA' => 'E02001479',
        '9RB' => 'E02001479',
        '9RD' => 'E02001479',
        '9RE' => 'E02001479',
        '9RF' => 'E02001479',
        '9RG' => 'E02001479',
        '9RH' => 'E02001479',
        '9RJ' => 'E02001479',
        '9RL' => 'E02001479',
        '9RN' => 'E02001479',
        '9RP' => 'E02001479',
        '9RQ' => 'E02001479',
        '9RR' => 'E02001479',
        '9RS' => 'E02001479',
        '9RT' => 'E02001479',
        '9RU' => 'E02001479',
        '9RW' => 'E02001479',
        '9RX' => 'E02001479',
        '9RY' => 'E02001479',
        '9RZ' => 'E02001479',
        '9SA' => 'E02001479',
        '9SB' => 'E02001479',
        '9SD' => 'E02001479',
        '9SE' => 'E02001479',
        '9SF' => 'E02001479',
        '9SG' => 'E02001479',
        '9SJ' => 'E02001479',
        '9SL' => 'E02001479',
        '9SN' => 'E02001491',
        '9SP' => 'E02001479',
        '9SQ' => 'E02001479',
        '9SR' => 'E02001479',
        '9SS' => 'E02001479',
        '9ST' => 'E02001479',
        '9SU' => 'E02001479',
        '9SW' => 'E02001491',
        '9SX' => 'E02001479',
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
