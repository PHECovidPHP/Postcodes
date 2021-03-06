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
final class EC3N
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000001',
        '1AB' => 'E02000001',
        '1AD' => 'E02000001',
        '1AE' => 'E02000001',
        '1AF' => 'E02000001',
        '1AG' => 'E02000001',
        '1AH' => 'E02000001',
        '1AJ' => 'E02000001',
        '1AL' => 'E02000001',
        '1AN' => 'E02000001',
        '1AP' => 'E02000001',
        '1AQ' => 'E02000001',
        '1AR' => 'E02000001',
        '1AS' => 'E02000001',
        '1AT' => 'E02000001',
        '1AU' => 'E02000001',
        '1AX' => 'E02000001',
        '1AY' => 'E02000001',
        '1BA' => 'E02000001',
        '1BB' => 'E02000001',
        '1BD' => 'E02000001',
        '1BE' => 'E02000001',
        '1BH' => 'E02000001',
        '1BJ' => 'E02000001',
        '1BL' => 'E02000001',
        '1BN' => 'E02000001',
        '1BP' => 'E02000001',
        '1BQ' => 'E02000001',
        '1BR' => 'E02000001',
        '1BT' => 'E02000001',
        '1BU' => 'E02000001',
        '1BX' => 'E02000001',
        '1BY' => 'E02000001',
        '1DA' => 'E02000001',
        '1DB' => 'E02000001',
        '1DD' => 'E02000001',
        '1DE' => 'E02000001',
        '1DH' => 'E02000001',
        '1DJ' => 'E02000001',
        '1DL' => 'E02000001',
        '1DN' => 'E02000001',
        '1DP' => 'E02000001',
        '1DQ' => 'E02000001',
        '1DR' => 'E02000001',
        '1DS' => 'E02000001',
        '1DT' => 'E02000001',
        '1DU' => 'E02000001',
        '1DX' => 'E02000001',
        '1DY' => 'E02000001',
        '1EA' => 'E02000001',
        '1EE' => 'E02000001',
        '1EH' => 'E02000001',
        '1EL' => 'E02000001',
        '1EN' => 'E02000001',
        '1EP' => 'E02000001',
        '1ES' => 'E02000001',
        '1ET' => 'E02000890',
        '1EU' => 'E02000001',
        '1EX' => 'E02000001',
        '1EY' => 'E02000001',
        '1HA' => 'E02000001',
        '1HB' => 'E02000001',
        '1HD' => 'E02000001',
        '1HH' => 'E02000001',
        '1HJ' => 'E02000001',
        '1HL' => 'E02000001',
        '1HN' => 'E02000001',
        '1HP' => 'E02000001',
        '1HR' => 'E02000001',
        '1HS' => 'E02000001',
        '1HT' => 'E02000001',
        '1HU' => 'E02000001',
        '1HX' => 'E02000001',
        '1HY' => 'E02000001',
        '1JA' => 'E02000001',
        '1JB' => 'E02000001',
        '1JD' => 'E02000001',
        '1JE' => 'E02000001',
        '1JJ' => 'E02000001',
        '1JL' => 'E02000001',
        '1JQ' => 'E02000001',
        '1JR' => 'E02000890',
        '1JS' => 'E02000890',
        '1JU' => 'E02000890',
        '1JX' => 'E02000001',
        '1JY' => 'E02000001',
        '1LA' => 'E02000001',
        '1LB' => 'E02000001',
        '1LD' => 'E02000001',
        '1LE' => 'E02000001',
        '1LH' => 'E02000001',
        '1LJ' => 'E02000001',
        '1LL' => 'E02000001',
        '1LN' => 'E02000001',
        '1LP' => 'E02000001',
        '1LQ' => 'E02000001',
        '1LR' => 'E02000001',
        '1LS' => 'E02000001',
        '1LT' => 'E02000001',
        '1LU' => 'E02000001',
        '1NA' => 'E02000001',
        '1NB' => 'E02000001',
        '1ND' => 'E02000001',
        '1NH' => 'E02000001',
        '1NJ' => 'E02000001',
        '1NL' => 'E02000001',
        '1NN' => 'E02000575',
        '1NP' => 'E02000001',
        '1NR' => 'E02000001',
        '1NS' => 'E02000001',
        '1NT' => 'E02000001',
        '1NU' => 'E02000001',
        '1NX' => 'E02000001',
        '1PA' => 'E02000575',
        '1PB' => 'E02000001',
        '1PD' => 'E02000001',
        '1PE' => 'E02000001',
        '1PN' => 'E02000575',
        '1PP' => 'E02000001',
        '1PQ' => 'E02000001',
        '1PR' => 'E02000001',
        '1PS' => 'E02000001',
        '1PT' => 'E02000001',
        '1PU' => 'E02000575',
        '1PX' => 'E02000001',
        '1PY' => 'E02000575',
        '1QA' => 'E02000001',
        '1QB' => 'E02000001',
        '1QD' => 'E02000001',
        '1QE' => 'E02000001',
        '1QH' => 'E02000001',
        '1QJ' => 'E02000001',
        '1QL' => 'E02000001',
        '1QN' => 'E02000001',
        '1QP' => 'E02000001',
        '1QQ' => 'E02000001',
        '1QR' => 'E02000001',
        '1QS' => 'E02000001',
        '1QU' => 'E02000001',
        '1QX' => 'E02000001',
        '1QY' => 'E02000001',
        '1RB' => 'E02000001',
        '1RE' => 'E02000001',
        '1RH' => 'E02000001',
        '1WZ' => 'E02000575',
        '1XB' => 'E02000575',
        '1YT' => 'E02000575',
        '1ZP' => 'E02000575',
        '1ZQ' => 'E02000575',
        '2AA' => 'E02000575',
        '2AB' => 'E02000001',
        '2AD' => 'E02000001',
        '2AE' => 'E02000001',
        '2AH' => 'E02000001',
        '2AJ' => 'E02000001',
        '2AL' => 'E02000001',
        '2AN' => 'E02000001',
        '2AP' => 'E02000001',
        '2AR' => 'E02000001',
        '2AS' => 'E02000575',
        '2AT' => 'E02000001',
        '2AU' => 'E02000001',
        '2AX' => 'E02000001',
        '2AY' => 'E02000001',
        '2BA' => 'E02000001',
        '2BD' => 'E02000001',
        '2BH' => 'E02000001',
        '2BJ' => 'E02000001',
        '2BN' => 'E02000001',
        '2BQ' => 'E02000001',
        '2BY' => 'E02000001',
        '2DB' => 'E02000001',
        '2DD' => 'E02000001',
        '2DE' => 'E02000001',
        '2DR' => 'E02000001',
        '2DT' => 'E02000001',
        '2DU' => 'E02000001',
        '2DY' => 'E02000001',
        '2ED' => 'E02000001',
        '2EJ' => 'E02000001',
        '2EL' => 'E02000001',
        '2EN' => 'E02000001',
        '2EP' => 'E02000001',
        '2ER' => 'E02000001',
        '2ES' => 'E02000001',
        '2ET' => 'E02000001',
        '2EU' => 'E02000001',
        '2EX' => 'E02000001',
        '2EY' => 'E02000001',
        '2HA' => 'E02000001',
        '2HB' => 'E02000001',
        '2HD' => 'E02000001',
        '2HH' => 'E02000001',
        '2HJ' => 'E02000001',
        '2HN' => 'E02000001',
        '2HP' => 'E02000001',
        '2HR' => 'E02000001',
        '2HS' => 'E02000001',
        '2HT' => 'E02000001',
        '2HU' => 'E02000001',
        '2HX' => 'E02000001',
        '2HY' => 'E02000001',
        '2JH' => 'E02000001',
        '2JL' => 'E02000001',
        '2JP' => 'E02000001',
        '2JR' => 'E02000001',
        '2JS' => 'E02000001',
        '2JY' => 'E02000001',
        '2LA' => 'E02000001',
        '2LB' => 'E02000001',
        '2LJ' => 'E02000001',
        '2LL' => 'E02000001',
        '2LN' => 'E02000001',
        '2LR' => 'E02000001',
        '2LS' => 'E02000001',
        '2LT' => 'E02000001',
        '2LU' => 'E02000001',
        '2LX' => 'E02000001',
        '2LY' => 'E02000001',
        '2NA' => 'E02000890',
        '2NB' => 'E02000001',
        '2ND' => 'E02000001',
        '2NJ' => 'E02000001',
        '2NL' => 'E02000001',
        '2NN' => 'E02000001',
        '2NP' => 'E02000001',
        '2NQ' => 'E02000001',
        '2NR' => 'E02000001',
        '2NS' => 'E02000001',
        '2NT' => 'E02000001',
        '2NU' => 'E02000001',
        '2NX' => 'E02000575',
        '2PA' => 'E02000001',
        '2PB' => 'E02000575',
        '2PD' => 'E02000575',
        '2PE' => 'E02000001',
        '2PH' => 'E02000001',
        '2PJ' => 'E02000001',
        '2PL' => 'E02000001',
        '2PN' => 'E02000001',
        '2PP' => 'E02000001',
        '2PQ' => 'E02000001',
        '2PR' => 'E02000001',
        '2PT' => 'E02000001',
        '2PU' => 'E02000001',
        '2PX' => 'E02000001',
        '2QA' => 'E02000001',
        '2QB' => 'E02000001',
        '2RA' => 'E02000001',
        '2RB' => 'E02000575',
        '2RD' => 'E02000575',
        '2RH' => 'E02000001',
        '2RT' => 'E02000001',
        '2SG' => 'E02000001',
        '2SR' => 'E02000001',
        '2WA' => 'E02000575',
        '2WB' => 'E02000575',
        '2WR' => 'E02000575',
        '3AA' => 'E02000001',
        '3AB' => 'E02000001',
        '3AD' => 'E02000001',
        '3AE' => 'E02000001',
        '3AJ' => 'E02000001',
        '3AL' => 'E02000001',
        '3AN' => 'E02000001',
        '3AP' => 'E02000001',
        '3AR' => 'E02000001',
        '3AS' => 'E02000001',
        '3AT' => 'E02000001',
        '3AU' => 'E02000001',
        '3AX' => 'E02000001',
        '3AY' => 'E02000001',
        '3BA' => 'E02000001',
        '3BB' => 'E02000001',
        '3BD' => 'E02000001',
        '3BH' => 'E02000001',
        '3BN' => 'E02000001',
        '3DA' => 'E02000001',
        '3DB' => 'E02000001',
        '3DH' => 'E02000001',
        '3DQ' => 'E02000001',
        '3DS' => 'E02000001',
        '3DT' => 'E02000001',
        '3DU' => 'E02000001',
        '3ED' => 'E02000001',
        '3EH' => 'E02000001',
        '3EL' => 'E02000001',
        '3EP' => 'E02000001',
        '3ER' => 'E02000001',
        '3ES' => 'E02000001',
        '3HA' => 'E02000001',
        '3HD' => 'E02000001',
        '3HJ' => 'E02000001',
        '3WQ' => 'E02000575',
        '4AA' => 'E02000001',
        '4AB' => 'E02000890',
        '4AD' => 'E02000890',
        '4AE' => 'E02000890',
        '4AF' => 'E02000001',
        '4AH' => 'E02000001',
        '4AJ' => 'E02000001',
        '4AL' => 'E02000001',
        '4AN' => 'E02000001',
        '4AP' => 'E02000001',
        '4AQ' => 'E02000890',
        '4AR' => 'E02000001',
        '4AS' => 'E02000001',
        '4AT' => 'E02000001',
        '4AX' => 'E02000001',
        '4AY' => 'E02000001',
        '4AZ' => 'E02000575',
        '4BA' => 'E02000001',
        '4BB' => 'E02000575',
        '4BD' => 'E02000001',
        '4BH' => 'E02000575',
        '4BJ' => 'E02000575',
        '4BL' => 'E02000001',
        '4BN' => 'E02000890',
        '4BP' => 'E02000001',
        '4BQ' => 'E02000001',
        '4BR' => 'E02000001',
        '4BX' => 'E02000001',
        '4BY' => 'E02000001',
        '4DA' => 'E02000575',
        '4DB' => 'E02000001',
        '4DD' => 'E02000001',
        '4DH' => 'E02000001',
        '4DJ' => 'E02000890',
        '4DL' => 'E02000001',
        '4DN' => 'E02000001',
        '4DQ' => 'E02000001',
        '4DR' => 'E02000890',
        '4DS' => 'E02000890',
        '4DT' => 'E02000890',
        '4DU' => 'E02000001',
        '4DX' => 'E02000890',
        '4DY' => 'E02000890',
        '4EA' => 'E02000001',
        '4EB' => 'E02000001',
        '4EE' => 'E02000890',
        '4EH' => 'E02000001',
        '4EL' => 'E02000001',
        '4EP' => 'E02000001',
        '4ER' => 'E02000001',
        '4ES' => 'E02000001',
        '4ET' => 'E02000001',
        '4EX' => 'E02000890',
        '4EY' => 'E02000889',
        '4HA' => 'E02000575',
        '4HB' => 'E02000001',
        '4HD' => 'E02000001',
        '4HH' => 'E02000889',
        '4HJ' => 'E02000889',
        '4HL' => 'E02000575',
        '4HR' => 'E02000890',
        '4HY' => 'E02000001',
        '4JA' => 'E02000890',
        '4JB' => 'E02000890',
        '4JH' => 'E02000890',
        '4JJ' => 'E02000890',
        '4JN' => 'E02000890',
        '4JP' => 'E02000890',
        '4JQ' => 'E02000575',
        '4JR' => 'E02000889',
        '4LA' => 'E02000889',
        '4LB' => 'E02000889',
        '4LD' => 'E02000890',
        '4LE' => 'E02000001',
        '4LH' => 'E02000890',
        '4LP' => 'E02000889',
        '4NA' => 'E02000889',
        '4NH' => 'E02000001',
        '4NN' => 'E02000001',
        '4PA' => 'E02000890',
        '4PE' => 'E02000889',
        '4PL' => 'E02000890',
        '4PZ' => 'E02000890',
        '4QA' => 'E02000575',
        '4QB' => 'E02000575',
        '4QD' => 'E02000889',
        '4QN' => 'E02000889',
        '4SA' => 'E02000001',
        '4SG' => 'E02000001',
        '4TH' => 'E02000890',
        '4WE' => 'E02000890',
        '4WF' => 'E02000575',
        '4WP' => 'E02000575',
        '4XX' => 'E02000889',
        '4XZ' => 'E02000575',
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
