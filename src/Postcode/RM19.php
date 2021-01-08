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
final class RM19
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AB' => 'E02003311',
        '1AD' => 'E02003310',
        '1AE' => 'E02003310',
        '1AF' => 'E02003310',
        '1AG' => 'E02003310',
        '1AH' => 'E02003310',
        '1AJ' => 'E02003310',
        '1AL' => 'E02003311',
        '1AN' => 'E02003311',
        '1AP' => 'E02003310',
        '1AQ' => 'E02003311',
        '1AR' => 'E02003310',
        '1AS' => 'E02003310',
        '1AT' => 'E02003310',
        '1AX' => 'E02003311',
        '1AZ' => 'E02003310',
        '1EA' => 'E02003310',
        '1EE' => 'E02003310',
        '1FT' => 'E02003311',
        '1GA' => 'E02003310',
        '1GB' => 'E02003310',
        '1GD' => 'E02003310',
        '1GE' => 'E02003310',
        '1GH' => 'E02003310',
        '1GJ' => 'E02003310',
        '1GL' => 'E02003310',
        '1GP' => 'E02003310',
        '1GR' => 'E02003310',
        '1GS' => 'E02003310',
        '1GT' => 'E02003310',
        '1GU' => 'E02003310',
        '1GW' => 'E02003310',
        '1GX' => 'E02003310',
        '1LA' => 'E02003310',
        '1LB' => 'E02003310',
        '1LD' => 'E02003310',
        '1LE' => 'E02003310',
        '1LF' => 'E02003310',
        '1LG' => 'E02003310',
        '1LH' => 'E02003310',
        '1LJ' => 'E02003310',
        '1LL' => 'E02003310',
        '1LN' => 'E02003310',
        '1NA' => 'E02003310',
        '1NB' => 'E02003310',
        '1ND' => 'E02003310',
        '1NF' => 'E02003310',
        '1NG' => 'E02003310',
        '1NH' => 'E02003310',
        '1NP' => 'E02003310',
        '1NR' => 'E02003310',
        '1NS' => 'E02003310',
        '1NT' => 'E02003310',
        '1NU' => 'E02003310',
        '1NW' => 'E02003310',
        '1NX' => 'E02003310',
        '1NY' => 'E02003310',
        '1NZ' => 'E02003310',
        '1PA' => 'E02003310',
        '1PB' => 'E02003310',
        '1PD' => 'E02003310',
        '1PE' => 'E02003310',
        '1PF' => 'E02003310',
        '1PG' => 'E02003310',
        '1PH' => 'E02003310',
        '1PJ' => 'E02003310',
        '1PL' => 'E02003310',
        '1PN' => 'E02003310',
        '1PP' => 'E02003310',
        '1PQ' => 'E02003310',
        '1PR' => 'E02003310',
        '1PS' => 'E02003310',
        '1PT' => 'E02003310',
        '1PU' => 'E02003310',
        '1PW' => 'E02003310',
        '1PX' => 'E02003310',
        '1PY' => 'E02003310',
        '1PZ' => 'E02003310',
        '1QA' => 'E02003310',
        '1QB' => 'E02003310',
        '1QD' => 'E02003310',
        '1QE' => 'E02003310',
        '1QF' => 'E02003310',
        '1QG' => 'E02003310',
        '1QH' => 'E02003310',
        '1QJ' => 'E02003310',
        '1QL' => 'E02003310',
        '1QN' => 'E02003310',
        '1QP' => 'E02003310',
        '1QQ' => 'E02003310',
        '1QR' => 'E02003310',
        '1QS' => 'E02003310',
        '1QT' => 'E02003310',
        '1QU' => 'E02003310',
        '1QW' => 'E02003310',
        '1QX' => 'E02003310',
        '1QY' => 'E02003310',
        '1QZ' => 'E02003310',
        '1RA' => 'E02003310',
        '1RB' => 'E02003310',
        '1RD' => 'E02003310',
        '1RE' => 'E02003310',
        '1RF' => 'E02003310',
        '1RG' => 'E02003310',
        '1RH' => 'E02003310',
        '1RJ' => 'E02003310',
        '1RL' => 'E02003310',
        '1RN' => 'E02003310',
        '1RP' => 'E02003310',
        '1RQ' => 'E02003310',
        '1RR' => 'E02003310',
        '1RS' => 'E02003310',
        '1RT' => 'E02003310',
        '1RU' => 'E02003310',
        '1RW' => 'E02003310',
        '1RX' => 'E02003310',
        '1RY' => 'E02003310',
        '1RZ' => 'E02003310',
        '1SA' => 'E02003310',
        '1SB' => 'E02003310',
        '1SD' => 'E02003310',
        '1SE' => 'E02003310',
        '1SF' => 'E02003310',
        '1SG' => 'E02003310',
        '1SH' => 'E02003310',
        '1SJ' => 'E02003310',
        '1SL' => 'E02003310',
        '1SN' => 'E02003310',
        '1SP' => 'E02003310',
        '1SQ' => 'E02003310',
        '1SR' => 'E02003310',
        '1SS' => 'E02003310',
        '1ST' => 'E02003310',
        '1SU' => 'E02003310',
        '1SW' => 'E02003310',
        '1SX' => 'E02003303',
        '1SY' => 'E02003311',
        '1SZ' => 'E02003303',
        '1TA' => 'E02003310',
        '1TB' => 'E02003310',
        '1TD' => 'E02003310',
        '1TE' => 'E02003310',
        '1TF' => 'E02003310',
        '1TG' => 'E02003310',
        '1TH' => 'E02003310',
        '1TJ' => 'E02003310',
        '1TL' => 'E02003310',
        '1TN' => 'E02003310',
        '1TP' => 'E02003310',
        '1TQ' => 'E02003310',
        '1TR' => 'E02003310',
        '1TS' => 'E02003310',
        '1TT' => 'E02003310',
        '1TU' => 'E02003310',
        '1TW' => 'E02003310',
        '1TX' => 'E02003310',
        '1TY' => 'E02003310',
        '1TZ' => 'E02003310',
        '1UA' => 'E02003310',
        '1WA' => 'E02003311',
        '1WF' => 'E02003311',
        '1WQ' => 'E02003311',
        '1WT' => 'E02003311',
        '1WX' => 'E02003311',
        '1WY' => 'E02003311',
        '1WZ' => 'E02003311',
        '1XA' => 'E02003311',
        '1XB' => 'E02003310',
        '1XH' => 'E02003311',
        '1YN' => 'E02003310',
        '1YS' => 'E02006859',
        '1YX' => 'E02003310',
        '1YZ' => 'E02003311',
        '1ZR' => 'E02003311',
        '1ZU' => 'E02003310',
        '1ZX' => 'E02003310',
        '1ZY' => 'E02003310',
        '1ZZ' => 'E02003310',
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