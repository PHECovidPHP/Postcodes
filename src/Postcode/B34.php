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
final class B34
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '6AA' => 'E02001868',
        '6AB' => 'E02001868',
        '6AD' => 'E02001868',
        '6AE' => 'E02001868',
        '6AG' => 'E02001868',
        '6AH' => 'E02001868',
        '6AJ' => 'E02001868',
        '6AL' => 'E02001868',
        '6AN' => 'E02001868',
        '6AP' => 'E02001868',
        '6AR' => 'E02001868',
        '6AS' => 'E02001868',
        '6AT' => 'E02001868',
        '6AU' => 'E02001872',
        '6AZ' => 'E02001868',
        '6BG' => 'E02001868',
        '6BH' => 'E02001868',
        '6BJ' => 'E02001868',
        '6BL' => 'E02001868',
        '6BN' => 'E02001868',
        '6BP' => 'E02001868',
        '6BQ' => 'E02001868',
        '6BS' => 'E02001868',
        '6BT' => 'E02001868',
        '6BU' => 'E02001868',
        '6BX' => 'E02001868',
        '6BY' => 'E02001868',
        '6BZ' => 'E02001868',
        '6DA' => 'E02001868',
        '6DB' => 'E02001868',
        '6DD' => 'E02001868',
        '6DE' => 'E02001868',
        '6DP' => 'E02001868',
        '6DR' => 'E02001871',
        '6DS' => 'E02001868',
        '6DT' => 'E02001868',
        '6DU' => 'E02001868',
        '6DX' => 'E02001868',
        '6DY' => 'E02001868',
        '6EA' => 'E02001871',
        '6EB' => 'E02001868',
        '6ED' => 'E02001868',
        '6EE' => 'E02001868',
        '6EG' => 'E02001868',
        '6EH' => 'E02001868',
        '6EJ' => 'E02001871',
        '6EP' => 'E02001871',
        '6ER' => 'E02001871',
        '6ES' => 'E02001871',
        '6ET' => 'E02001871',
        '6EW' => 'E02001871',
        '6EX' => 'E02001871',
        '6EY' => 'E02001871',
        '6EZ' => 'E02001871',
        '6HA' => 'E02001871',
        '6HB' => 'E02001871',
        '6HD' => 'E02001871',
        '6HE' => 'E02001871',
        '6HF' => 'E02001871',
        '6HG' => 'E02001871',
        '6HH' => 'E02001871',
        '6HJ' => 'E02001880',
        '6HL' => 'E02001871',
        '6HN' => 'E02001871',
        '6HP' => 'E02001871',
        '6HQ' => 'E02001871',
        '6HR' => 'E02001871',
        '6HS' => 'E02001871',
        '6HT' => 'E02001871',
        '6HU' => 'E02001871',
        '6HW' => 'E02001871',
        '6HX' => 'E02001871',
        '6JA' => 'E02001871',
        '6JB' => 'E02001871',
        '6JD' => 'E02001871',
        '6JE' => 'E02001868',
        '6JF' => 'E02001868',
        '6JG' => 'E02001871',
        '6JH' => 'E02001871',
        '6JJ' => 'E02001871',
        '6JL' => 'E02001871',
        '6JN' => 'E02001871',
        '6JP' => 'E02001871',
        '6JQ' => 'E02001871',
        '6LA' => 'E02001871',
        '6LB' => 'E02001871',
        '6LD' => 'E02001871',
        '6LE' => 'E02001871',
        '6LG' => 'E02001871',
        '6LH' => 'E02001868',
        '6LJ' => 'E02001868',
        '6LL' => 'E02001868',
        '6LN' => 'E02001871',
        '6LP' => 'E02001871',
        '6LR' => 'E02001871',
        '6LS' => 'E02001871',
        '6LT' => 'E02001871',
        '6LU' => 'E02001871',
        '6LX' => 'E02001871',
        '6LY' => 'E02001871',
        '6NA' => 'E02001871',
        '6NB' => 'E02001868',
        '6ND' => 'E02001871',
        '6NE' => 'E02001871',
        '6NF' => 'E02001872',
        '6NH' => 'E02001871',
        '6NN' => 'E02001872',
        '6NQ' => 'E02001872',
        '6NR' => 'E02001871',
        '6NS' => 'E02001871',
        '6NT' => 'E02001871',
        '6NU' => 'E02001871',
        '6NX' => 'E02001871',
        '6NY' => 'E02001871',
        '6PA' => 'E02001871',
        '6PB' => 'E02001871',
        '6PD' => 'E02001872',
        '6PG' => 'E02001871',
        '6PH' => 'E02001871',
        '6PJ' => 'E02001871',
        '6PL' => 'E02001871',
        '6PN' => 'E02001871',
        '6PP' => 'E02001871',
        '6PQ' => 'E02001871',
        '6PR' => 'E02001871',
        '6PS' => 'E02001871',
        '6PT' => 'E02001871',
        '6PU' => 'E02001871',
        '6PW' => 'E02001871',
        '6PX' => 'E02001871',
        '6PY' => 'E02001871',
        '6PZ' => 'E02001871',
        '6QA' => 'E02001871',
        '6QB' => 'E02001871',
        '6QD' => 'E02001872',
        '6QE' => 'E02001872',
        '6QH' => 'E02001872',
        '6QL' => 'E02001871',
        '6QN' => 'E02001871',
        '6QP' => 'E02001871',
        '6QR' => 'E02001871',
        '6QS' => 'E02001871',
        '6QT' => 'E02001871',
        '6QU' => 'E02001871',
        '6QW' => 'E02001871',
        '6QX' => 'E02001871',
        '6QY' => 'E02001871',
        '6RA' => 'E02001871',
        '6RB' => 'E02001871',
        '6RD' => 'E02001871',
        '6RE' => 'E02001871',
        '6RF' => 'E02001871',
        '6RG' => 'E02001871',
        '6RH' => 'E02001871',
        '6RJ' => 'E02001871',
        '6RQ' => 'E02001871',
        '6RX' => 'E02001871',
        '6RY' => 'E02001871',
        '6RZ' => 'E02001871',
        '6SA' => 'E02001871',
        '6SB' => 'E02001871',
        '6SD' => 'E02001871',
        '6SE' => 'E02001871',
        '6SF' => 'E02001871',
        '6SG' => 'E02001871',
        '6SH' => 'E02001871',
        '6SJ' => 'E02001871',
        '6SL' => 'E02001872',
        '6SP' => 'E02001872',
        '6SQ' => 'E02001872',
        '6SR' => 'E02001871',
        '6SS' => 'E02001871',
        '6SX' => 'E02001872',
        '6SY' => 'E02001871',
        '6SZ' => 'E02001871',
        '6TA' => 'E02001871',
        '6TB' => 'E02001871',
        '6TD' => 'E02001871',
        '6TE' => 'E02001871',
        '6TF' => 'E02001871',
        '6TG' => 'E02001871',
        '6TH' => 'E02001871',
        '6TJ' => 'E02001871',
        '6TL' => 'E02001871',
        '6TN' => 'E02001871',
        '6TP' => 'E02001871',
        '6TQ' => 'E02001871',
        '6TR' => 'E02001871',
        '6TS' => 'E02001871',
        '6TT' => 'E02001871',
        '6TU' => 'E02001872',
        '6TW' => 'E02001871',
        '6TX' => 'E02001871',
        '6TY' => 'E02001871',
        '6TZ' => 'E02001871',
        '6UB' => 'E02001872',
        '6UD' => 'E02001871',
        '6UH' => 'E02001871',
        '6WA' => 'E02001872',
        '6WD' => 'E02001872',
        '6WQ' => 'E02001872',
        '6WU' => 'E02001872',
        '6XB' => 'E02001872',
        '6YW' => 'E02001872',
        '6ZD' => 'E02001872',
        '6ZR' => 'E02001872',
        '6ZY' => 'E02001872',
        '7AA' => 'E02001872',
        '7AB' => 'E02001872',
        '7AD' => 'E02001871',
        '7AE' => 'E02001872',
        '7AF' => 'E02001872',
        '7AG' => 'E02001871',
        '7AH' => 'E02001871',
        '7AJ' => 'E02001871',
        '7AL' => 'E02001872',
        '7AN' => 'E02001872',
        '7AP' => 'E02001871',
        '7AQ' => 'E02001871',
        '7AR' => 'E02001872',
        '7AS' => 'E02001871',
        '7AT' => 'E02001872',
        '7AU' => 'E02001871',
        '7AW' => 'E02001871',
        '7AX' => 'E02001872',
        '7AY' => 'E02001872',
        '7AZ' => 'E02001871',
        '7BA' => 'E02001871',
        '7BB' => 'E02001871',
        '7BD' => 'E02001871',
        '7BE' => 'E02001872',
        '7BG' => 'E02001871',
        '7BP' => 'E02001871',
        '7BS' => 'E02001872',
        '7BT' => 'E02001872',
        '7BU' => 'E02001872',
        '7BX' => 'E02001871',
        '7BY' => 'E02001871',
        '7BZ' => 'E02001872',
        '7DA' => 'E02001871',
        '7DB' => 'E02001871',
        '7DN' => 'E02001872',
        '7DP' => 'E02001872',
        '7DR' => 'E02001872',
        '7DS' => 'E02001872',
        '7DT' => 'E02001872',
        '7DU' => 'E02001872',
        '7DX' => 'E02001872',
        '7DY' => 'E02001871',
        '7DZ' => 'E02001871',
        '7EA' => 'E02001871',
        '7EB' => 'E02001872',
        '7ED' => 'E02001872',
        '7EE' => 'E02001872',
        '7EF' => 'E02001872',
        '7EG' => 'E02001872',
        '7EH' => 'E02001872',
        '7EJ' => 'E02001872',
        '7EL' => 'E02001872',
        '7EN' => 'E02001872',
        '7EP' => 'E02001872',
        '7EQ' => 'E02001872',
        '7ER' => 'E02001872',
        '7HE' => 'E02001872',
        '7HF' => 'E02001872',
        '7HG' => 'E02001872',
        '7HH' => 'E02001872',
        '7HJ' => 'E02001872',
        '7HL' => 'E02001872',
        '7HN' => 'E02001872',
        '7HP' => 'E02001872',
        '7HR' => 'E02001872',
        '7HS' => 'E02001872',
        '7HT' => 'E02001872',
        '7HU' => 'E02001872',
        '7HX' => 'E02001872',
        '7HY' => 'E02001872',
        '7HZ' => 'E02001872',
        '7JA' => 'E02001872',
        '7JB' => 'E02001872',
        '7JD' => 'E02001872',
        '7JE' => 'E02001872',
        '7JF' => 'E02001872',
        '7JG' => 'E02001872',
        '7JH' => 'E02001872',
        '7JL' => 'E02001872',
        '7JN' => 'E02001872',
        '7JP' => 'E02001872',
        '7JQ' => 'E02001872',
        '7JR' => 'E02001872',
        '7JS' => 'E02001872',
        '7JT' => 'E02001872',
        '7JU' => 'E02001872',
        '7JX' => 'E02001872',
        '7JY' => 'E02001872',
        '7LA' => 'E02001872',
        '7LB' => 'E02001872',
        '7LD' => 'E02001872',
        '7LE' => 'E02001872',
        '7LF' => 'E02001872',
        '7LG' => 'E02001872',
        '7LH' => 'E02001872',
        '7LJ' => 'E02001872',
        '7LL' => 'E02001872',
        '7LN' => 'E02001872',
        '7LP' => 'E02001872',
        '7LQ' => 'E02001872',
        '7LR' => 'E02001872',
        '7LS' => 'E02001872',
        '7LT' => 'E02001872',
        '7LU' => 'E02001872',
        '7NA' => 'E02001872',
        '7NB' => 'E02001872',
        '7ND' => 'E02001872',
        '7NE' => 'E02001872',
        '7NF' => 'E02001872',
        '7NG' => 'E02001872',
        '7NH' => 'E02001872',
        '7NJ' => 'E02001872',
        '7NL' => 'E02001872',
        '7NN' => 'E02001872',
        '7NP' => 'E02001872',
        '7NQ' => 'E02001872',
        '7NR' => 'E02001872',
        '7NS' => 'E02001872',
        '7NX' => 'E02001872',
        '7PA' => 'E02001872',
        '7PB' => 'E02001872',
        '7PD' => 'E02001872',
        '7PE' => 'E02001872',
        '7PN' => 'E02001872',
        '7PP' => 'E02001872',
        '7PR' => 'E02001872',
        '7PS' => 'E02001872',
        '7PT' => 'E02001872',
        '7PU' => 'E02001872',
        '7PX' => 'E02001883',
        '7PY' => 'E02001872',
        '7PZ' => 'E02001872',
        '7QA' => 'E02001872',
        '7QB' => 'E02001872',
        '7QD' => 'E02001872',
        '7QE' => 'E02001872',
        '7QF' => 'E02001872',
        '7QG' => 'E02001872',
        '7QH' => 'E02001872',
        '7QL' => 'E02001872',
        '7QW' => 'E02001872',
        '7QX' => 'E02001872',
        '7QY' => 'E02001872',
        '7QZ' => 'E02001872',
        '7RA' => 'E02001872',
        '7RB' => 'E02001872',
        '7RD' => 'E02001872',
        '7RE' => 'E02001872',
        '7RF' => 'E02001872',
        '7RG' => 'E02001872',
        '7RH' => 'E02001872',
        '7RJ' => 'E02001872',
        '7RL' => 'E02001872',
        '7RN' => 'E02001872',
        '7RP' => 'E02001872',
        '7RR' => 'E02001872',
        '7RS' => 'E02001872',
        '7RT' => 'E02001872',
        '7RU' => 'E02001872',
        '7RX' => 'E02001872',
        '7SA' => 'E02001883',
        '7SB' => 'E02001883',
        '7SD' => 'E02001883',
        '7SE' => 'E02001883',
        '7SF' => 'E02001883',
        '7SG' => 'E02001883',
        '7SH' => 'E02001883',
        '7SJ' => 'E02001883',
        '7SN' => 'E02001872',
        '7SP' => 'E02001872',
        '7SQ' => 'E02001883',
        '7SW' => 'E02001872',
        '7WA' => 'E02001872',
        '7WB' => 'E02001872',
        '7WD' => 'E02001872',
        '7WQ' => 'E02001872',
        '7ZY' => 'E02001872',
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