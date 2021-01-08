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
final class WC2A
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000193',
        '1AB' => 'E02000001',
        '1AD' => 'E02000193',
        '1AE' => 'E02000193',
        '1AF' => 'E02000001',
        '1AG' => 'E02000193',
        '1AH' => 'E02000001',
        '1AJ' => 'E02000193',
        '1AL' => 'E02000001',
        '1AN' => 'E02000001',
        '1AP' => 'E02000001',
        '1AR' => 'E02000001',
        '1AT' => 'E02000001',
        '1AW' => 'E02000001',
        '1AX' => 'E02000575',
        '1AY' => 'E02000193',
        '1BA' => 'E02000001',
        '1BD' => 'E02000193',
        '1BP' => 'E02000001',
        '1BQ' => 'E02000193',
        '1DD' => 'E02000193',
        '1DE' => 'E02000193',
        '1DJ' => 'E02000193',
        '1DL' => 'E02000193',
        '1DN' => 'E02000193',
        '1DP' => 'E02000193',
        '1DR' => 'E02000193',
        '1DS' => 'E02000193',
        '1DT' => 'E02000193',
        '1DU' => 'E02000193',
        '1DW' => 'E02000193',
        '1DX' => 'E02000193',
        '1DZ' => 'E02000977',
        '1EA' => 'E02000193',
        '1EB' => 'E02000193',
        '1ED' => 'E02000001',
        '1EE' => 'E02000193',
        '1EF' => 'E02000193',
        '1EG' => 'E02000193',
        '1EH' => 'E02000193',
        '1EJ' => 'E02000193',
        '1EL' => 'E02000001',
        '1EN' => 'E02000001',
        '1EP' => 'E02000193',
        '1EQ' => 'E02000193',
        '1ER' => 'E02000193',
        '1ES' => 'E02000193',
        '1ET' => 'E02000193',
        '1EU' => 'E02000193',
        '1EW' => 'E02000193',
        '1EY' => 'E02000972',
        '1HD' => 'E02000001',
        '1HE' => 'E02000193',
        '1HJ' => 'E02000193',
        '1HL' => 'E02000001',
        '1HN' => 'E02000001',
        '1HP' => 'E02000001',
        '1HR' => 'E02000001',
        '1HS' => 'E02000193',
        '1HT' => 'E02000001',
        '1HU' => 'E02000977',
        '1HW' => 'E02000193',
        '1HX' => 'E02000193',
        '1HZ' => 'E02000001',
        '1JA' => 'E02000001',
        '1JB' => 'E02000001',
        '1JD' => 'E02000972',
        '1JE' => 'E02000001',
        '1JF' => 'E02000001',
        '1JG' => 'E02000193',
        '1JH' => 'E02000001',
        '1JJ' => 'E02000193',
        '1JN' => 'E02000001',
        '1JP' => 'E02000001',
        '1JQ' => 'E02000001',
        '1JR' => 'E02000001',
        '1JS' => 'E02000977',
        '1JT' => 'E02000001',
        '1JW' => 'E02000001',
        '1LA' => 'E02000001',
        '1LB' => 'E02000001',
        '1LE' => 'E02000977',
        '1LF' => 'E02000001',
        '1LG' => 'E02000001',
        '1LH' => 'E02000977',
        '1LJ' => 'E02000977',
        '1LL' => 'E02000193',
        '1LN' => 'E02000977',
        '1LP' => 'E02000977',
        '1LQ' => 'E02000977',
        '1LR' => 'E02000001',
        '1LS' => 'E02000001',
        '1LT' => 'E02000001',
        '1LU' => 'E02000193',
        '1LY' => 'E02000193',
        '1NB' => 'E02000001',
        '1NE' => 'E02000001',
        '1NF' => 'E02000001',
        '1NG' => 'E02000001',
        '1NJ' => 'E02000193',
        '1NL' => 'E02000193',
        '1NR' => 'E02000193',
        '1NS' => 'E02000193',
        '1NT' => 'E02000193',
        '1NU' => 'E02000193',
        '1NW' => 'E02000193',
        '1PA' => 'E02000001',
        '1PB' => 'E02000001',
        '1PF' => 'E02000001',
        '1PG' => 'E02000001',
        '1PH' => 'E02000001',
        '1PJ' => 'E02000001',
        '1PL' => 'E02000977',
        '1PN' => 'E02000001',
        '1PP' => 'E02000977',
        '1PQ' => 'E02000001',
        '1PR' => 'E02000977',
        '1PS' => 'E02000977',
        '1PT' => 'E02000977',
        '1PU' => 'E02000977',
        '1PW' => 'E02000001',
        '1PX' => 'E02000001',
        '1PY' => 'E02000972',
        '1QB' => 'E02000001',
        '1QD' => 'E02000001',
        '1QE' => 'E02000193',
        '1QH' => 'E02000977',
        '1QL' => 'E02000977',
        '1QP' => 'E02000193',
        '1QR' => 'E02000001',
        '1QS' => 'E02000001',
        '1QT' => 'E02000001',
        '1QU' => 'E02000001',
        '1QW' => 'E02000001',
        '1QX' => 'E02000001',
        '1QY' => 'E02000001',
        '1QZ' => 'E02000001',
        '1RA' => 'E02000001',
        '1RB' => 'E02000001',
        '1RD' => 'E02000001',
        '1RE' => 'E02000001',
        '1RF' => 'E02000001',
        '1RG' => 'E02000001',
        '1RH' => 'E02000001',
        '1RJ' => 'E02000001',
        '1RL' => 'E02000001',
        '1RN' => 'E02000001',
        '1RP' => 'E02000001',
        '1RQ' => 'E02000001',
        '1RS' => 'E02000977',
        '1RT' => 'E02000193',
        '1RX' => 'E02000193',
        '1RY' => 'E02000001',
        '1SA' => 'E02000001',
        '1SD' => 'E02000001',
        '1SF' => 'E02000001',
        '1SJ' => 'E02000001',
        '1SL' => 'E02000001',
        '1SN' => 'E02000193',
        '1SP' => 'E02000001',
        '1SR' => 'E02000193',
        '1ST' => 'E02000193',
        '1SU' => 'E02000193',
        '1SX' => 'E02000001',
        '1SZ' => 'E02000001',
        '1TA' => 'E02000972',
        '1TB' => 'E02000972',
        '1TD' => 'E02000193',
        '1TE' => 'E02000193',
        '1TF' => 'E02000193',
        '1TG' => 'E02000972',
        '1WA' => 'E02000193',
        '1WB' => 'E02000193',
        '1WD' => 'E02000193',
        '1WT' => 'E02000575',
        '1WU' => 'E02000972',
        '1WW' => 'E02000193',
        '1WX' => 'E02000193',
        '1WY' => 'E02000193',
        '1WZ' => 'E02000972',
        '1ZZ' => 'E02000001',
        '2AA' => 'E02000977',
        '2AB' => 'E02000977',
        '2AD' => 'E02000977',
        '2AE' => 'E02000977',
        '2AF' => 'E02000193',
        '2AG' => 'E02000977',
        '2AH' => 'E02000193',
        '2AJ' => 'E02000193',
        '2AL' => 'E02000972',
        '2AN' => 'E02000193',
        '2AP' => 'E02000977',
        '2AQ' => 'E02000977',
        '2AR' => 'E02000193',
        '2AS' => 'E02000193',
        '2AT' => 'E02000977',
        '2AU' => 'E02000977',
        '2AZ' => 'E02000977',
        '2DX' => 'E02000977',
        '2EB' => 'E02000977',
        '2EN' => 'E02000977',
        '2ES' => 'E02000977',
        '2EX' => 'E02000977',
        '2EY' => 'E02000977',
        '2EZ' => 'E02000977',
        '2HA' => 'E02000977',
        '2HB' => 'E02000977',
        '2HD' => 'E02000977',
        '2HE' => 'E02000977',
        '2HF' => 'E02000977',
        '2HG' => 'E02000977',
        '2HH' => 'E02000977',
        '2HJ' => 'E02000977',
        '2HP' => 'E02000977',
        '2HR' => 'E02000977',
        '2HT' => 'E02000977',
        '2HU' => 'E02000977',
        '2HX' => 'E02000977',
        '2JA' => 'E02000193',
        '2JB' => 'E02000193',
        '2JD' => 'E02000193',
        '2JE' => 'E02000977',
        '2JF' => 'E02000193',
        '2JG' => 'E02000193',
        '2JJ' => 'E02000977',
        '2JL' => 'E02000193',
        '2JN' => 'E02000193',
        '2JP' => 'E02000977',
        '2JQ' => 'E02000977',
        '2JR' => 'E02000977',
        '2JT' => 'E02000977',
        '2JU' => 'E02000977',
        '2JY' => 'E02000977',
        '2JZ' => 'E02000977',
        '2LA' => 'E02000977',
        '2LD' => 'E02000977',
        '2LF' => 'E02000977',
        '2LH' => 'E02000977',
        '2LJ' => 'E02000977',
        '2LL' => 'E02000977',
        '2LN' => 'E02000977',
        '2LP' => 'E02000977',
        '2LQ' => 'E02000977',
        '2LR' => 'E02000977',
        '2LS' => 'E02000977',
        '2LT' => 'E02000977',
        '2LX' => 'E02000977',
        '2PL' => 'E02000193',
        '2PR' => 'E02000977',
        '2WZ' => 'E02000193',
        '2XB' => 'E02000977',
        '2XD' => 'E02000977',
        '3AA' => 'E02000193',
        '3AB' => 'E02000193',
        '3AD' => 'E02000193',
        '3AH' => 'E02000193',
        '3AJ' => 'E02000193',
        '3AL' => 'E02000193',
        '3AS' => 'E02000193',
        '3AU' => 'E02000193',
        '3BA' => 'E02000193',
        '3BE' => 'E02000193',
        '3BH' => 'E02000193',
        '3BL' => 'E02000977',
        '3BP' => 'E02000193',
        '3BS' => 'E02000193',
        '3BT' => 'E02000193',
        '3BZ' => 'E02000977',
        '3DB' => 'E02000193',
        '3DH' => 'E02000193',
        '3DL' => 'E02000193',
        '3DS' => 'E02000193',
        '3DU' => 'E02000193',
        '3DW' => 'E02000193',
        '3EA' => 'E02000193',
        '3ED' => 'E02000193',
        '3EE' => 'E02000193',
        '3EF' => 'E02000193',
        '3EG' => 'E02000193',
        '3EJ' => 'E02000193',
        '3EQ' => 'E02000193',
        '3ER' => 'E02000193',
        '3ES' => 'E02000193',
        '3ET' => 'E02000193',
        '3EU' => 'E02000193',
        '3EW' => 'E02000193',
        '3EY' => 'E02000193',
        '3HB' => 'E02000193',
        '3HF' => 'E02000193',
        '3HH' => 'E02000193',
        '3HJ' => 'E02000193',
        '3HL' => 'E02000193',
        '3HN' => 'E02000193',
        '3HP' => 'E02000193',
        '3HR' => 'E02000193',
        '3HT' => 'E02000193',
        '3HU' => 'E02000193',
        '3HX' => 'E02000193',
        '3JA' => 'E02000193',
        '3JB' => 'E02000193',
        '3JD' => 'E02000193',
        '3JE' => 'E02000193',
        '3JF' => 'E02000193',
        '3JG' => 'E02000193',
        '3JH' => 'E02000193',
        '3JJ' => 'E02000193',
        '3JL' => 'E02000193',
        '3JQ' => 'E02000193',
        '3JS' => 'E02000193',
        '3JU' => 'E02000972',
        '3JW' => 'E02000193',
        '3JX' => 'E02000193',
        '3JY' => 'E02000193',
        '3LA' => 'E02000977',
        '3LH' => 'E02000193',
        '3LJ' => 'E02000193',
        '3LL' => 'E02000193',
        '3LN' => 'E02000193',
        '3LP' => 'E02000977',
        '3LQ' => 'E02000193',
        '3LR' => 'E02000193',
        '3LS' => 'E02000193',
        '3LT' => 'E02000193',
        '3LU' => 'E02000972',
        '3LW' => 'E02000193',
        '3LX' => 'E02000193',
        '3LY' => 'E02000977',
        '3LZ' => 'E02000977',
        '3NA' => 'E02000977',
        '3NB' => 'E02000193',
        '3ND' => 'E02000977',
        '3NN' => 'E02000193',
        '3NW' => 'E02000977',
        '3PD' => 'E02000193',
        '3PE' => 'E02000977',
        '3PF' => 'E02000977',
        '3PG' => 'E02000977',
        '3PH' => 'E02000977',
        '3PJ' => 'E02000977',
        '3PN' => 'E02000977',
        '3PP' => 'E02000977',
        '3PR' => 'E02000977',
        '3PS' => 'E02000977',
        '3PT' => 'E02000575',
        '3PU' => 'E02000977',
        '3PX' => 'E02000193',
        '3PZ' => 'E02000193',
        '3QA' => 'E02000193',
        '3QB' => 'E02000193',
        '3QD' => 'E02000193',
        '3QF' => 'E02000977',
        '3QG' => 'E02000193',
        '3QH' => 'E02000193',
        '3QJ' => 'E02000977',
        '3QN' => 'E02000193',
        '3QP' => 'E02000193',
        '3QQ' => 'E02000193',
        '3QS' => 'E02000193',
        '3QT' => 'E02000977',
        '3QW' => 'E02000977',
        '3QX' => 'E02000977',
        '3RA' => 'E02000193',
        '3RB' => 'E02000977',
        '3RD' => 'E02000977',
        '3RG' => 'E02000977',
        '3RH' => 'E02000193',
        '3RJ' => 'E02000193',
        '3RN' => 'E02000193',
        '3RP' => 'E02000193',
        '3RS' => 'E02000193',
        '3RU' => 'E02000193',
        '3RX' => 'E02000193',
        '3RZ' => 'E02000193',
        '3SA' => 'E02000193',
        '3SB' => 'E02000193',
        '3SD' => 'E02000193',
        '3SE' => 'E02000977',
        '3SF' => 'E02000193',
        '3SH' => 'E02000193',
        '3SJ' => 'E02000193',
        '3SP' => 'E02000193',
        '3SR' => 'E02000193',
        '3SS' => 'E02000193',
        '3SU' => 'E02000193',
        '3SW' => 'E02000193',
        '3SX' => 'E02000193',
        '3SZ' => 'E02000193',
        '3TA' => 'E02000193',
        '3TB' => 'E02000193',
        '3TD' => 'E02000193',
        '3TF' => 'E02000193',
        '3TG' => 'E02000193',
        '3TH' => 'E02000193',
        '3TJ' => 'E02000193',
        '3TL' => 'E02000193',
        '3TN' => 'E02000193',
        '3TP' => 'E02000193',
        '3TS' => 'E02000193',
        '3TT' => 'E02000193',
        '3TX' => 'E02000193',
        '3UA' => 'E02000193',
        '3UB' => 'E02000193',
        '3UE' => 'E02000193',
        '3UG' => 'E02000193',
        '3UJ' => 'E02000193',
        '3UL' => 'E02000193',
        '3UN' => 'E02000193',
        '3UP' => 'E02000193',
        '3UR' => 'E02000193',
        '3UT' => 'E02000193',
        '3UW' => 'E02000193',
        '3UZ' => 'E02000193',
        '3WG' => 'E02000575',
        '3WP' => 'E02000193',
        '3WT' => 'E02000193',
        '3WX' => 'E02000193',
        '3WY' => 'E02000193',
        '3WZ' => 'E02000575',
        '3XA' => 'E02000193',
        '3XB' => 'E02000193',
        '3XD' => 'E02000193',
        '3XE' => 'E02000193',
        '3XF' => 'E02000193',
        '3XH' => 'E02000193',
        '3XJ' => 'E02000193',
        '3XL' => 'E02000193',
        '3XN' => 'E02000193',
        '3XP' => 'E02000193',
        '3XS' => 'E02000193',
        '3XT' => 'E02000193',
        '3YD' => 'E02000193',
        '3YF' => 'E02000193',
        '3YG' => 'E02000193',
        '3YN' => 'E02000193',
        '3YP' => 'E02000193',
        '3YQ' => 'E02000193',
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
