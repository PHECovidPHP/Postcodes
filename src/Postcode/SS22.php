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
final class SS22
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '7AA' => 'E02003280',
        '7AB' => 'E02003280',
        '7AD' => 'E02003280',
        '7AE' => 'E02003280',
        '7AF' => 'E02003280',
        '7AG' => 'E02003280',
        '7AH' => 'E02003280',
        '7AJ' => 'E02003280',
        '7AL' => 'E02003280',
        '7AN' => 'E02003288',
        '7AP' => 'E02003288',
        '7AQ' => 'E02003280',
        '7AR' => 'E02003288',
        '7AS' => 'E02003280',
        '7AT' => 'E02003280',
        '7AU' => 'E02003280',
        '7AW' => 'E02003280',
        '7AX' => 'E02003280',
        '7AY' => 'E02003280',
        '7AZ' => 'E02003280',
        '7BA' => 'E02003280',
        '7BB' => 'E02003280',
        '7BD' => 'E02003280',
        '7BE' => 'E02003280',
        '7BF' => 'E02003280',
        '7BG' => 'E02003280',
        '7BH' => 'E02003280',
        '7BJ' => 'E02003280',
        '7BL' => 'E02003280',
        '7BR' => 'E02003280',
        '7DB' => 'E02003288',
        '7DD' => 'E02003288',
        '7DH' => 'E02003288',
        '7DL' => 'E02003288',
        '7DN' => 'E02003288',
        '7EA' => 'E02004572',
        '7EB' => 'E02003288',
        '7ED' => 'E02003288',
        '7EE' => 'E02004572',
        '7EF' => 'E02003280',
        '7EG' => 'E02003280',
        '7EH' => 'E02003280',
        '7EJ' => 'E02003280',
        '7EY' => 'E02003280',
        '7LF' => 'E02003280',
        '7XX' => 'E02003280',
        '7ZA' => 'E02003288',
        '7ZE' => 'E02003280',
        '8AA' => 'E02003280',
        '8AB' => 'E02003280',
        '8AD' => 'E02003280',
        '8AG' => 'E02003280',
        '8AJ' => 'E02003280',
        '8AL' => 'E02003280',
        '8AN' => 'E02003280',
        '8AP' => 'E02003280',
        '8AQ' => 'E02003280',
        '8AR' => 'E02003280',
        '8AS' => 'E02003280',
        '8AW' => 'E02003280',
        '8BA' => 'E02003280',
        '8BB' => 'E02003280',
        '8BD' => 'E02003280',
        '8BE' => 'E02003280',
        '8BW' => 'E02003280',
        '8BZ' => 'E02003280',
        '8DE' => 'E02003280',
        '8DW' => 'E02003280',
        '8ED' => 'E02003280',
        '8FT' => 'E02003280',
        '8GF' => 'E02003280',
        '8HA' => 'E02003280',
        '8HH' => 'E02003280',
        '8HL' => 'E02003280',
        '8HN' => 'E02003280',
        '8HP' => 'E02003280',
        '8HS' => 'E02003280',
        '8NF' => 'E02003280',
        '8NG' => 'E02003280',
        '8NH' => 'E02003280',
        '8PL' => 'E02003280',
        '8PW' => 'E02003280',
        '8QP' => 'E02003280',
        '8QR' => 'E02003280',
        '8RL' => 'E02003280',
        '8RN' => 'E02003280',
        '8RP' => 'E02003280',
        '8RR' => 'E02003280',
        '8RT' => 'E02003280',
        '8RU' => 'E02003280',
        '8RW' => 'E02003280',
        '8SB' => 'E02003280',
        '8SD' => 'E02003280',
        '8SU' => 'E02003280',
        '8TG' => 'E02003280',
        '8TZ' => 'E02003280',
        '8WA' => 'E02003280',
        '8WB' => 'E02003280',
        '8WD' => 'E02003280',
        '8WF' => 'E02003280',
        '8WX' => 'E02003280',
        '8XW' => 'E02003280',
        '8YU' => 'E02003280',
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
