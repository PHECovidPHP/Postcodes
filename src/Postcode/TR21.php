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
final class TR21
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02003949',
        '0AB' => 'E02006781',
        '0AD' => 'E02006781',
        '0HE' => 'E02006781',
        '0HU' => 'E02006781',
        '0HW' => 'E02006781',
        '0HX' => 'E02006781',
        '0HY' => 'E02006781',
        '0HZ' => 'E02006781',
        '0JA' => 'E02006781',
        '0JB' => 'E02006781',
        '0JD' => 'E02006781',
        '0JE' => 'E02006781',
        '0JF' => 'E02006781',
        '0JG' => 'E02006781',
        '0JH' => 'E02006781',
        '0JJ' => 'E02006781',
        '0JL' => 'E02006781',
        '0JN' => 'E02006781',
        '0JP' => 'E02006781',
        '0JQ' => 'E02006781',
        '0JR' => 'E02006781',
        '0JS' => 'E02003949',
        '0JT' => 'E02006781',
        '0JU' => 'E02006781',
        '0JW' => 'E02006781',
        '0JX' => 'E02006781',
        '0JY' => 'E02006781',
        '0JZ' => 'E02006781',
        '0LA' => 'E02006781',
        '0LB' => 'E02006781',
        '0LD' => 'E02006781',
        '0LE' => 'E02006781',
        '0LF' => 'E02006781',
        '0LG' => 'E02006781',
        '0LH' => 'E02006781',
        '0LJ' => 'E02006781',
        '0LL' => 'E02006781',
        '0LN' => 'E02006781',
        '0LP' => 'E02006781',
        '0LQ' => 'E02006781',
        '0LR' => 'E02006781',
        '0LS' => 'E02006781',
        '0LT' => 'E02006781',
        '0LW' => 'E02006781',
        '0NA' => 'E02006781',
        '0NB' => 'E02006781',
        '0ND' => 'E02006781',
        '0NE' => 'E02006781',
        '0NF' => 'E02006781',
        '0NG' => 'E02006781',
        '0NH' => 'E02006781',
        '0NJ' => 'E02006781',
        '0NL' => 'E02006781',
        '0NN' => 'E02006781',
        '0NP' => 'E02006781',
        '0NQ' => 'E02006781',
        '0NR' => 'E02006781',
        '0NS' => 'E02006781',
        '0NT' => 'E02006781',
        '0NU' => 'E02006781',
        '0NW' => 'E02006781',
        '0NX' => 'E02006781',
        '0NY' => 'E02006781',
        '0NZ' => 'E02006781',
        '0PA' => 'E02006781',
        '0PB' => 'E02006781',
        '0PD' => 'E02006781',
        '0PE' => 'E02006781',
        '0PL' => 'E02006781',
        '0PN' => 'E02003949',
        '0PP' => 'E02006781',
        '0PR' => 'E02003949',
        '0PS' => 'E02006781',
        '0PT' => 'E02006781',
        '0PU' => 'E02006781',
        '0PW' => 'E02003949',
        '0PY' => 'E02006781',
        '0PZ' => 'E02006781',
        '0QA' => 'E02006781',
        '0QB' => 'E02006781',
        '0QD' => 'E02006781',
        '0QE' => 'E02006781',
        '0SA' => 'E02006781',
        '0SB' => 'E02006781',
        '0SD' => 'E02006781',
        '0SE' => 'E02006781',
        '0SF' => 'E02006781',
        '0WY' => 'E02003949',
        '0WZ' => 'E02003949',
        '0XN' => 'E02003949',
        '0YA' => 'E02006781',
        '0YB' => 'E02006781',
        '0YD' => 'E02003949',
        '0YE' => 'E02003949',
        '0YH' => 'E02003949',
        '0ZS' => 'E02003949',
        '0ZT' => 'E02003949',
        '0ZU' => 'E02003949',
        '0ZW' => 'E02003949',
        '0ZX' => 'E02003949',
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
