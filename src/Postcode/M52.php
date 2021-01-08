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
final class M52
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001076',
        '1AB' => 'E02001076',
        '1AD' => 'E02001076',
        '1AE' => 'E02001076',
        '1BA' => 'E02001076',
        '1BB' => 'E02001076',
        '1BD' => 'E02001076',
        '1BE' => 'E02001076',
        '1DA' => 'E02001076',
        '1DB' => 'E02001076',
        '1DD' => 'E02001076',
        '1DE' => 'E02001076',
        '1EA' => 'E02001076',
        '1EB' => 'E02001076',
        '1ED' => 'E02001076',
        '1FA' => 'E02001076',
        '1FB' => 'E02001076',
        '1FD' => 'E02001076',
        '1FE' => 'E02001076',
        '1GA' => 'E02001076',
        '1GB' => 'E02001076',
        '1GD' => 'E02001076',
        '1GE' => 'E02001076',
        '1HA' => 'E02001076',
        '1HB' => 'E02001076',
        '1HD' => 'E02001076',
        '1HE' => 'E02001076',
        '1JA' => 'E02001076',
        '1JB' => 'E02001076',
        '1JD' => 'E02001076',
        '1JE' => 'E02001076',
        '1LA' => 'E02001076',
        '1LB' => 'E02001076',
        '1LD' => 'E02001076',
        '1LE' => 'E02001076',
        '1NA' => 'E02001076',
        '1NB' => 'E02001076',
        '1ND' => 'E02001076',
        '1NE' => 'E02001076',
        '1PA' => 'E02001076',
        '1PB' => 'E02001076',
        '1PD' => 'E02001076',
        '1PE' => 'E02001076',
        '1QA' => 'E02001076',
        '1QB' => 'E02001076',
        '1QD' => 'E02001076',
        '1QE' => 'E02001076',
        '1RA' => 'E02001076',
        '1RB' => 'E02001076',
        '1RD' => 'E02001076',
        '1RE' => 'E02001076',
        '1SA' => 'E02001076',
        '1SB' => 'E02001076',
        '1SD' => 'E02001076',
        '1TA' => 'E02001076',
        '1TB' => 'E02001076',
        '1TD' => 'E02001076',
        '1UA' => 'E02001076',
        '1UB' => 'E02001076',
        '1UD' => 'E02001076',
        '1WA' => 'E02001076',
        '1WB' => 'E02001076',
        '1WD' => 'E02001076',
        '1WX' => 'E02001076',
        '1XA' => 'E02001076',
        '1XB' => 'E02001076',
        '1XD' => 'E02001076',
        '1YA' => 'E02001076',
        '1YB' => 'E02001076',
        '1YD' => 'E02001076',
        '1ZA' => 'E02006902',
        '1ZB' => 'E02006902',
        '1ZD' => 'E02006902',
        '1ZE' => 'E02006902',
        '1ZF' => 'E02006902',
        '1ZG' => 'E02006902',
        '1ZH' => 'E02006902',
        '1ZJ' => 'E02006902',
        '1ZL' => 'E02006902',
        '1ZN' => 'E02006902',
        '1ZP' => 'E02006902',
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
