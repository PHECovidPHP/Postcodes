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
final class TS2
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002496',
        '1AB' => 'E02002496',
        '1AD' => 'E02002496',
        '1AE' => 'E02002496',
        '1AF' => 'E02002496',
        '1AG' => 'E02002496',
        '1AH' => 'E02002496',
        '1AJ' => 'E02002496',
        '1AL' => 'E02002496',
        '1AN' => 'E02002496',
        '1AP' => 'E02002496',
        '1AQ' => 'E02002496',
        '1AR' => 'E02002496',
        '1AS' => 'E02002496',
        '1AT' => 'E02002496',
        '1AU' => 'E02002496',
        '1AW' => 'E02002496',
        '1AX' => 'E02002496',
        '1AY' => 'E02002496',
        '1AZ' => 'E02002496',
        '1BA' => 'E02002496',
        '1BB' => 'E02002496',
        '1BD' => 'E02002496',
        '1BE' => 'E02002496',
        '1BF' => 'E02002496',
        '1BG' => 'E02002496',
        '1BH' => 'E02002496',
        '1BJ' => 'E02002496',
        '1BL' => 'E02002496',
        '1BN' => 'E02002496',
        '1BP' => 'E02002496',
        '1BQ' => 'E02002496',
        '1BS' => 'E02002496',
        '1BT' => 'E02002496',
        '1BU' => 'E02002496',
        '1BW' => 'E02002496',
        '1BX' => 'E02002496',
        '1BY' => 'E02002496',
        '1BZ' => 'E02002496',
        '1DA' => 'E02002496',
        '1DB' => 'E02002496',
        '1DD' => 'E02002496',
        '1DE' => 'E02002496',
        '1DF' => 'E02002496',
        '1DG' => 'E02002496',
        '1DH' => 'E02002496',
        '1DJ' => 'E02002496',
        '1DL' => 'E02002496',
        '1DN' => 'E02002496',
        '1DP' => 'E02002496',
        '1DQ' => 'E02002496',
        '1DR' => 'E02002496',
        '1DS' => 'E02002496',
        '1DT' => 'E02002496',
        '1DU' => 'E02002496',
        '1DW' => 'E02002496',
        '1DX' => 'E02002496',
        '1DY' => 'E02002496',
        '1DZ' => 'E02002496',
        '1EA' => 'E02002496',
        '1EB' => 'E02002496',
        '1ED' => 'E02002496',
        '1EE' => 'E02002496',
        '1EF' => 'E02002496',
        '1EG' => 'E02002496',
        '1EH' => 'E02002496',
        '1EJ' => 'E02002496',
        '1EL' => 'E02002496',
        '1EN' => 'E02002496',
        '1EP' => 'E02002496',
        '1EQ' => 'E02002496',
        '1ER' => 'E02002496',
        '1ES' => 'E02002496',
        '1ET' => 'E02002496',
        '1EU' => 'E02002496',
        '1EW' => 'E02002496',
        '1EZ' => 'E02002496',
        '1FB' => 'E02002537',
        '1HA' => 'E02002496',
        '1HB' => 'E02002496',
        '1HD' => 'E02002496',
        '1HE' => 'E02002496',
        '1HF' => 'E02002496',
        '1HG' => 'E02002496',
        '1HH' => 'E02002498',
        '1HJ' => 'E02002496',
        '1HL' => 'E02002496',
        '1HN' => 'E02002496',
        '1HP' => 'E02002496',
        '1HQ' => 'E02002498',
        '1HR' => 'E02002496',
        '1HT' => 'E02002496',
        '1HX' => 'E02002496',
        '1HY' => 'E02002496',
        '1HZ' => 'E02002496',
        '1JA' => 'E02002496',
        '1JB' => 'E02002496',
        '1JD' => 'E02002496',
        '1JE' => 'E02002496',
        '1JF' => 'E02002544',
        '1JG' => 'E02002496',
        '1JH' => 'E02002496',
        '1JJ' => 'E02002496',
        '1JL' => 'E02002496',
        '1JN' => 'E02002496',
        '1JP' => 'E02002496',
        '1JQ' => 'E02002544',
        '1JR' => 'E02002496',
        '1JT' => 'E02002496',
        '1JW' => 'E02002496',
        '1JX' => 'E02002496',
        '1JY' => 'E02002496',
        '1JZ' => 'E02002496',
        '1LA' => 'E02002496',
        '1LB' => 'E02002496',
        '1LD' => 'E02002496',
        '1LE' => 'E02002496',
        '1LF' => 'E02002496',
        '1LG' => 'E02002496',
        '1LH' => 'E02002496',
        '1LJ' => 'E02002496',
        '1LL' => 'E02002496',
        '1LN' => 'E02002496',
        '1LP' => 'E02002496',
        '1LQ' => 'E02002496',
        '1LR' => 'E02002496',
        '1LS' => 'E02002496',
        '1LT' => 'E02002496',
        '1LU' => 'E02002496',
        '1LW' => 'E02002496',
        '1LX' => 'E02002496',
        '1LY' => 'E02002496',
        '1LZ' => 'E02002496',
        '1NA' => 'E02002496',
        '1NB' => 'E02002496',
        '1ND' => 'E02002496',
        '1NE' => 'E02002496',
        '1NF' => 'E02002496',
        '1NG' => 'E02002496',
        '1NH' => 'E02002496',
        '1NJ' => 'E02002496',
        '1NL' => 'E02002496',
        '1NN' => 'E02002496',
        '1NP' => 'E02002496',
        '1NQ' => 'E02002496',
        '1NR' => 'E02002496',
        '1NS' => 'E02002496',
        '1NT' => 'E02002496',
        '1NU' => 'E02002496',
        '1NW' => 'E02002496',
        '1NX' => 'E02002496',
        '1NY' => 'E02002496',
        '1NZ' => 'E02002496',
        '1PA' => 'E02002496',
        '1PB' => 'E02002496',
        '1PD' => 'E02002496',
        '1PE' => 'E02002496',
        '1PF' => 'E02002496',
        '1PG' => 'E02002496',
        '1PH' => 'E02002496',
        '1PJ' => 'E02002496',
        '1PL' => 'E02002496',
        '1PN' => 'E02002496',
        '1PP' => 'E02002496',
        '1PQ' => 'E02002496',
        '1PR' => 'E02002496',
        '1PS' => 'E02002496',
        '1PT' => 'E02002496',
        '1PU' => 'E02002496',
        '1PW' => 'E02002496',
        '1PX' => 'E02002496',
        '1PY' => 'E02002496',
        '1PZ' => 'E02002496',
        '1QA' => 'E02002496',
        '1QB' => 'E02002496',
        '1QD' => 'E02002496',
        '1QE' => 'E02002496',
        '1QF' => 'E02002496',
        '1QG' => 'E02002496',
        '1QH' => 'E02002496',
        '1QJ' => 'E02002496',
        '1QL' => 'E02002496',
        '1QN' => 'E02002496',
        '1QP' => 'E02002496',
        '1QQ' => 'E02002496',
        '1QR' => 'E02002496',
        '1QS' => 'E02002496',
        '1QT' => 'E02002496',
        '1QU' => 'E02002496',
        '1QW' => 'E02002496',
        '1QX' => 'E02002496',
        '1QY' => 'E02002496',
        '1QZ' => 'E02002496',
        '1RA' => 'E02002496',
        '1RB' => 'E02002496',
        '1RD' => 'E02002496',
        '1RE' => 'E02002523',
        '1RF' => 'E02002496',
        '1RG' => 'E02002496',
        '1RH' => 'E02002496',
        '1RJ' => 'E02002496',
        '1RL' => 'E02002496',
        '1RN' => 'E02002496',
        '1RP' => 'E02002496',
        '1RQ' => 'E02002496',
        '1RR' => 'E02002496',
        '1RS' => 'E02002496',
        '1RT' => 'E02002496',
        '1RU' => 'E02002496',
        '1RW' => 'E02002496',
        '1RX' => 'E02002496',
        '1RY' => 'E02002496',
        '1RZ' => 'E02002537',
        '1SA' => 'E02002537',
        '1SB' => 'E02002537',
        '1SD' => 'E02002537',
        '1SE' => 'E02002537',
        '1SF' => 'E02002537',
        '1SG' => 'E02002537',
        '1SH' => 'E02002537',
        '1SJ' => 'E02002537',
        '1SL' => 'E02002537',
        '1SN' => 'E02002537',
        '1SP' => 'E02002537',
        '1SQ' => 'E02002537',
        '1SR' => 'E02002537',
        '1SS' => 'E02002537',
        '1ST' => 'E02002537',
        '1SU' => 'E02002537',
        '1SW' => 'E02002496',
        '1SX' => 'E02002537',
        '1SY' => 'E02002537',
        '1SZ' => 'E02002537',
        '1TA' => 'E02002537',
        '1TB' => 'E02002537',
        '1TD' => 'E02002537',
        '1TE' => 'E02002537',
        '1TF' => 'E02002537',
        '1TG' => 'E02002537',
        '1TH' => 'E02002537',
        '1TJ' => 'E02002537',
        '1TL' => 'E02002537',
        '1TN' => 'E02002537',
        '1TP' => 'E02002537',
        '1TQ' => 'E02002537',
        '1TR' => 'E02002537',
        '1TS' => 'E02002537',
        '1TT' => 'E02002537',
        '1TU' => 'E02002537',
        '1TW' => 'E02002537',
        '1TX' => 'E02002498',
        '1TZ' => 'E02002537',
        '1UA' => 'E02002537',
        '1UB' => 'E02002537',
        '1UD' => 'E02002537',
        '1UE' => 'E02002537',
        '1UF' => 'E02002537',
        '1UG' => 'E02002496',
        '1UH' => 'E02002537',
        '1UJ' => 'E02002537',
        '1UL' => 'E02002537',
        '1UN' => 'E02002537',
        '1UP' => 'E02002537',
        '1UQ' => 'E02002537',
        '1UR' => 'E02002537',
        '1UT' => 'E02002496',
        '1UU' => 'E02002496',
        '1UX' => 'E02002496',
        '1UY' => 'E02002537',
        '1WY' => 'E02002496',
        '1WZ' => 'E02002498',
        '1XA' => 'E02002496',
        '1XB' => 'E02002496',
        '1XD' => 'E02002498',
        '1XP' => 'E02002496',
        '1XR' => 'E02002496',
        '1XS' => 'E02002496',
        '1XT' => 'E02002496',
        '1XX' => 'E02002496',
        '1XY' => 'E02002496',
        '1XZ' => 'E02002496',
        '1YB' => 'E02002551',
        '1YD' => 'E02002551',
        '1YE' => 'E02002498',
        '1YH' => 'E02002551',
        '1YJ' => 'E02002498',
        '1YL' => 'E02002551',
        '1YN' => 'E02002551',
        '1YQ' => 'E02002551',
        '1YR' => 'E02002544',
        '1YS' => 'E02002496',
        '1YW' => 'E02002498',
        '1YX' => 'E02002551',
        '1ZS' => 'E02002498',
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