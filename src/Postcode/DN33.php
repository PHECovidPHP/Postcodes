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
final class DN33
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002744',
        '1AB' => 'E02002744',
        '1AD' => 'E02002744',
        '1AE' => 'E02002744',
        '1AF' => 'E02002744',
        '1AG' => 'E02002744',
        '1AH' => 'E02002744',
        '1AJ' => 'E02002744',
        '1AL' => 'E02002744',
        '1AN' => 'E02002744',
        '1AP' => 'E02002744',
        '1AQ' => 'E02002744',
        '1AR' => 'E02002744',
        '1AS' => 'E02002744',
        '1AT' => 'E02002744',
        '1AU' => 'E02002744',
        '1AW' => 'E02002744',
        '1AX' => 'E02002744',
        '1AY' => 'E02002744',
        '1AZ' => 'E02002744',
        '1BA' => 'E02002744',
        '1BB' => 'E02002744',
        '1BD' => 'E02002744',
        '1BE' => 'E02002744',
        '1BF' => 'E02002741',
        '1BG' => 'E02002744',
        '1BH' => 'E02002744',
        '1BJ' => 'E02002744',
        '1BL' => 'E02002744',
        '1BN' => 'E02002744',
        '1BP' => 'E02002744',
        '1BQ' => 'E02002744',
        '1BS' => 'E02002741',
        '1BT' => 'E02002741',
        '1BW' => 'E02002744',
        '1DA' => 'E02002744',
        '1DB' => 'E02002744',
        '1DD' => 'E02002744',
        '1DE' => 'E02002744',
        '1DF' => 'E02002744',
        '1DG' => 'E02002744',
        '1DH' => 'E02002744',
        '1DJ' => 'E02002744',
        '1DL' => 'E02002744',
        '1DN' => 'E02002744',
        '1DP' => 'E02002744',
        '1DQ' => 'E02002744',
        '1DR' => 'E02002744',
        '1DS' => 'E02002744',
        '1DT' => 'E02002744',
        '1DW' => 'E02002741',
        '1EA' => 'E02002740',
        '1EB' => 'E02002744',
        '1ED' => 'E02002744',
        '1EE' => 'E02002744',
        '1EF' => 'E02002744',
        '1EG' => 'E02002744',
        '1EH' => 'E02002740',
        '1EJ' => 'E02002740',
        '1EL' => 'E02002740',
        '1EN' => 'E02002740',
        '1EP' => 'E02002744',
        '1EQ' => 'E02002740',
        '1EU' => 'E02002744',
        '1EW' => 'E02002740',
        '1EX' => 'E02002744',
        '1EY' => 'E02002744',
        '1EZ' => 'E02002744',
        '1HA' => 'E02002744',
        '1HB' => 'E02002744',
        '1HD' => 'E02002744',
        '1HE' => 'E02002744',
        '1HF' => 'E02002744',
        '1HG' => 'E02002744',
        '1HH' => 'E02002744',
        '1HJ' => 'E02002744',
        '1HL' => 'E02002744',
        '1HN' => 'E02002744',
        '1HP' => 'E02002744',
        '1HQ' => 'E02002744',
        '1HR' => 'E02002740',
        '1HS' => 'E02002744',
        '1HT' => 'E02002744',
        '1HU' => 'E02002744',
        '1HW' => 'E02002744',
        '1HX' => 'E02002744',
        '1HY' => 'E02002744',
        '1HZ' => 'E02002744',
        '1JA' => 'E02002744',
        '1JB' => 'E02002744',
        '1JD' => 'E02002744',
        '1JE' => 'E02002744',
        '1JF' => 'E02002740',
        '1JG' => 'E02002740',
        '1JH' => 'E02002744',
        '1JQ' => 'E02002744',
        '1JR' => 'E02002744',
        '1JS' => 'E02002744',
        '1JT' => 'E02002744',
        '1JU' => 'E02002744',
        '1JX' => 'E02002744',
        '1JY' => 'E02002744',
        '1JZ' => 'E02002744',
        '1LA' => 'E02002744',
        '1LB' => 'E02002744',
        '1LD' => 'E02002744',
        '1LE' => 'E02002744',
        '1LF' => 'E02002744',
        '1LG' => 'E02002744',
        '1LH' => 'E02002744',
        '1LJ' => 'E02002744',
        '1LL' => 'E02002744',
        '1LN' => 'E02002744',
        '1LP' => 'E02002744',
        '1LQ' => 'E02002744',
        '1LR' => 'E02002744',
        '1LS' => 'E02002744',
        '1LT' => 'E02002744',
        '1LU' => 'E02002744',
        '1LW' => 'E02002744',
        '1LX' => 'E02002744',
        '1LY' => 'E02002744',
        '1LZ' => 'E02002744',
        '1NA' => 'E02002744',
        '1NB' => 'E02002744',
        '1ND' => 'E02002744',
        '1NH' => 'E02002744',
        '1NJ' => 'E02002744',
        '1NL' => 'E02002744',
        '1NN' => 'E02002744',
        '1NP' => 'E02002744',
        '1NR' => 'E02002744',
        '1NS' => 'E02002744',
        '1NT' => 'E02002744',
        '1NU' => 'E02002744',
        '1NW' => 'E02002741',
        '1NX' => 'E02002744',
        '1PA' => 'E02002744',
        '1PB' => 'E02002744',
        '1PD' => 'E02002744',
        '1PE' => 'E02002744',
        '1PF' => 'E02002744',
        '1PG' => 'E02002744',
        '1PH' => 'E02002744',
        '1PJ' => 'E02002744',
        '1PL' => 'E02002744',
        '1PN' => 'E02002744',
        '1PP' => 'E02002744',
        '1PQ' => 'E02002744',
        '1PR' => 'E02002744',
        '1PS' => 'E02002744',
        '1PT' => 'E02002744',
        '1PU' => 'E02002744',
        '1PW' => 'E02002744',
        '1PX' => 'E02002744',
        '1PY' => 'E02002744',
        '1PZ' => 'E02002744',
        '1QA' => 'E02002744',
        '1QB' => 'E02002744',
        '1QD' => 'E02002744',
        '1QE' => 'E02002744',
        '1QG' => 'E02002744',
        '1QN' => 'E02002740',
        '1QR' => 'E02002744',
        '1QW' => 'E02002738',
        '1RB' => 'E02002744',
        '1RD' => 'E02002744',
        '1RE' => 'E02002744',
        '1RF' => 'E02002744',
        '1RG' => 'E02002744',
        '1RH' => 'E02002744',
        '1RJ' => 'E02002744',
        '1RL' => 'E02002744',
        '1RN' => 'E02002744',
        '1RP' => 'E02002744',
        '1RQ' => 'E02002744',
        '1RR' => 'E02002744',
        '1RS' => 'E02002744',
        '1RT' => 'E02002744',
        '1RU' => 'E02002744',
        '1RW' => 'E02002744',
        '1RX' => 'E02002744',
        '1RY' => 'E02002744',
        '1SA' => 'E02002744',
        '1SB' => 'E02002744',
        '1WZ' => 'E02002744',
        '1XA' => 'E02002744',
        '1XB' => 'E02002744',
        '1XE' => 'E02002744',
        '1XF' => 'E02002728',
        '2AA' => 'E02002741',
        '2AB' => 'E02002741',
        '2AD' => 'E02002744',
        '2AE' => 'E02002741',
        '2AF' => 'E02002741',
        '2AG' => 'E02002741',
        '2AH' => 'E02002741',
        '2AJ' => 'E02002741',
        '2AL' => 'E02002741',
        '2AN' => 'E02002741',
        '2AP' => 'E02002741',
        '2AQ' => 'E02002741',
        '2AR' => 'E02002741',
        '2AS' => 'E02002741',
        '2AT' => 'E02002741',
        '2AU' => 'E02002741',
        '2AW' => 'E02002741',
        '2AX' => 'E02002741',
        '2AY' => 'E02002741',
        '2AZ' => 'E02002741',
        '2BA' => 'E02002741',
        '2BB' => 'E02002741',
        '2BD' => 'E02002741',
        '2BE' => 'E02002741',
        '2BF' => 'E02002741',
        '2BG' => 'E02002741',
        '2BH' => 'E02002741',
        '2BJ' => 'E02002748',
        '2BL' => 'E02002748',
        '2BP' => 'E02002741',
        '2BQ' => 'E02002741',
        '2BS' => 'E02002741',
        '2BT' => 'E02002741',
        '2BU' => 'E02002741',
        '2BX' => 'E02002741',
        '2BY' => 'E02002741',
        '2BZ' => 'E02002741',
        '2DA' => 'E02002741',
        '2DB' => 'E02002741',
        '2DD' => 'E02002741',
        '2DE' => 'E02002741',
        '2DF' => 'E02002741',
        '2DG' => 'E02002741',
        '2DH' => 'E02002741',
        '2DJ' => 'E02002741',
        '2DL' => 'E02002741',
        '2DN' => 'E02002741',
        '2DP' => 'E02002741',
        '2DQ' => 'E02002741',
        '2DU' => 'E02002741',
        '2DW' => 'E02002741',
        '2DZ' => 'E02002741',
        '2EA' => 'E02002746',
        '2EB' => 'E02002746',
        '2ED' => 'E02002746',
        '2EE' => 'E02002746',
        '2EF' => 'E02002746',
        '2EH' => 'E02002746',
        '2EJ' => 'E02002746',
        '2EL' => 'E02002746',
        '2EN' => 'E02002746',
        '2EP' => 'E02002746',
        '2ER' => 'E02002746',
        '2ES' => 'E02002746',
        '2ET' => 'E02002746',
        '2EU' => 'E02002746',
        '2EW' => 'E02002746',
        '2EX' => 'E02002746',
        '2EY' => 'E02002746',
        '2EZ' => 'E02002746',
        '2FB' => 'E02002741',
        '2HA' => 'E02002746',
        '2HB' => 'E02002746',
        '2HD' => 'E02002746',
        '2HE' => 'E02002746',
        '2HF' => 'E02002746',
        '2HG' => 'E02002746',
        '2HH' => 'E02002746',
        '2HJ' => 'E02002746',
        '2HL' => 'E02002746',
        '2HN' => 'E02002746',
        '2HP' => 'E02002746',
        '2HQ' => 'E02002746',
        '2HR' => 'E02002746',
        '2HS' => 'E02002746',
        '2HT' => 'E02002746',
        '2HU' => 'E02002746',
        '2HW' => 'E02002746',
        '2HX' => 'E02002746',
        '2HY' => 'E02002746',
        '2HZ' => 'E02002746',
        '2JA' => 'E02002747',
        '2JB' => 'E02002746',
        '2JG' => 'E02002747',
        '2JH' => 'E02002746',
        '2JJ' => 'E02002746',
        '2JL' => 'E02002746',
        '2JN' => 'E02002746',
        '2JP' => 'E02002746',
        '2JQ' => 'E02002746',
        '2JR' => 'E02002746',
        '2JS' => 'E02002746',
        '2JT' => 'E02002746',
        '2JU' => 'E02002747',
        '2JW' => 'E02002746',
        '2JX' => 'E02002747',
        '2JY' => 'E02002747',
        '2JZ' => 'E02002747',
        '2LA' => 'E02002747',
        '2LB' => 'E02002747',
        '2LD' => 'E02002747',
        '2LE' => 'E02002747',
        '2LF' => 'E02002747',
        '2LG' => 'E02002747',
        '2LH' => 'E02002747',
        '2LJ' => 'E02002747',
        '2LL' => 'E02002747',
        '2LN' => 'E02002747',
        '2LP' => 'E02002747',
        '2LQ' => 'E02002747',
        '2LT' => 'E02002728',
        '2LW' => 'E02002747',
        '2LX' => 'E02002746',
        '2LY' => 'E02002746',
        '2LZ' => 'E02002746',
        '2NA' => 'E02002746',
        '2NB' => 'E02002746',
        '2ND' => 'E02002746',
        '2NE' => 'E02002747',
        '2NF' => 'E02002747',
        '2NG' => 'E02002747',
        '2NH' => 'E02002746',
        '2NJ' => 'E02002747',
        '2NL' => 'E02002747',
        '2NN' => 'E02002747',
        '2NP' => 'E02002747',
        '2NQ' => 'E02002747',
        '2NR' => 'E02002747',
        '2NS' => 'E02002747',
        '2NT' => 'E02002747',
        '2NU' => 'E02002747',
        '2NW' => 'E02002747',
        '2NX' => 'E02002747',
        '2NY' => 'E02002747',
        '2PA' => 'E02002747',
        '2PB' => 'E02002747',
        '2PD' => 'E02002747',
        '2PE' => 'E02002747',
        '2PF' => 'E02002747',
        '2PG' => 'E02002747',
        '2PH' => 'E02002747',
        '2PJ' => 'E02002747',
        '2PL' => 'E02002747',
        '2PN' => 'E02002747',
        '2PP' => 'E02002728',
        '2PQ' => 'E02002747',
        '2PR' => 'E02002746',
        '2PS' => 'E02002746',
        '2PT' => 'E02002728',
        '2PU' => 'E02002728',
        '2PW' => 'E02002747',
        '2PX' => 'E02002746',
        '2PY' => 'E02002747',
        '2PZ' => 'E02002746',
        '2QA' => 'E02002746',
        '2QB' => 'E02002747',
        '2QD' => 'E02002747',
        '2QE' => 'E02002746',
        '2QF' => 'E02002747',
        '2QG' => 'E02002747',
        '2QH' => 'E02002746',
        '2QJ' => 'E02002746',
        '2QL' => 'E02002746',
        '2QN' => 'E02002746',
        '2WA' => 'E02002728',
        '2WB' => 'E02002728',
        '2WX' => 'E02002746',
        '2WY' => 'E02002746',
        '2WZ' => 'E02002746',
        '2YA' => 'E02002728',
        '2YB' => 'E02002728',
        '2YD' => 'E02002728',
        '2YY' => 'E02002728',
        '2ZW' => 'E02002728',
        '3AA' => 'E02002746',
        '3AB' => 'E02002746',
        '3AD' => 'E02002746',
        '3AE' => 'E02002746',
        '3AF' => 'E02002746',
        '3AG' => 'E02002746',
        '3AH' => 'E02002746',
        '3AJ' => 'E02002746',
        '3AL' => 'E02002746',
        '3AN' => 'E02002746',
        '3AP' => 'E02002746',
        '3AQ' => 'E02002746',
        '3AR' => 'E02002746',
        '3AS' => 'E02002746',
        '3AT' => 'E02002746',
        '3AU' => 'E02002746',
        '3AW' => 'E02002746',
        '3AX' => 'E02002746',
        '3AY' => 'E02002746',
        '3AZ' => 'E02002746',
        '3BA' => 'E02002746',
        '3BB' => 'E02002746',
        '3BD' => 'E02002747',
        '3BE' => 'E02002746',
        '3BF' => 'E02002746',
        '3BG' => 'E02002746',
        '3BH' => 'E02002746',
        '3BJ' => 'E02002746',
        '3BL' => 'E02002746',
        '3BN' => 'E02002746',
        '3BP' => 'E02002746',
        '3BQ' => 'E02002746',
        '3BS' => 'E02002746',
        '3BT' => 'E02002746',
        '3BU' => 'E02002746',
        '3BW' => 'E02002746',
        '3BX' => 'E02002746',
        '3BY' => 'E02002746',
        '3BZ' => 'E02002746',
        '3DA' => 'E02002746',
        '3DB' => 'E02002746',
        '3DD' => 'E02002746',
        '3DE' => 'E02002746',
        '3DF' => 'E02002746',
        '3DG' => 'E02002746',
        '3DH' => 'E02002747',
        '3DJ' => 'E02002747',
        '3DL' => 'E02002747',
        '3DN' => 'E02002747',
        '3DP' => 'E02002746',
        '3DQ' => 'E02002747',
        '3DR' => 'E02002746',
        '3DS' => 'E02002746',
        '3DT' => 'E02002746',
        '3DU' => 'E02002746',
        '3DW' => 'E02002746',
        '3DX' => 'E02002746',
        '3DY' => 'E02002746',
        '3DZ' => 'E02002746',
        '3EA' => 'E02002746',
        '3EB' => 'E02002746',
        '3ED' => 'E02002746',
        '3EE' => 'E02002746',
        '3EF' => 'E02002746',
        '3EG' => 'E02002746',
        '3EH' => 'E02002746',
        '3EJ' => 'E02002746',
        '3EL' => 'E02002746',
        '3EN' => 'E02002746',
        '3EQ' => 'E02002746',
        '3EU' => 'E02002746',
        '3EX' => 'E02002746',
        '3EY' => 'E02002746',
        '3EZ' => 'E02002746',
        '3GA' => 'E02002746',
        '3GB' => 'E02002746',
        '3GE' => 'E02002746',
        '3GH' => 'E02002746',
        '3GL' => 'E02002746',
        '3GN' => 'E02002746',
        '3HA' => 'E02002746',
        '3HB' => 'E02002746',
        '3HD' => 'E02002746',
        '3HE' => 'E02002746',
        '3HF' => 'E02002746',
        '3HG' => 'E02002746',
        '3HH' => 'E02002746',
        '3HJ' => 'E02002746',
        '3HL' => 'E02002746',
        '3HN' => 'E02002746',
        '3HP' => 'E02002746',
        '3HQ' => 'E02002746',
        '3HR' => 'E02002746',
        '3HS' => 'E02002746',
        '3HT' => 'E02002746',
        '3HU' => 'E02002746',
        '3HW' => 'E02002746',
        '3JE' => 'E02002746',
        '3JF' => 'E02002746',
        '3JG' => 'E02002746',
        '3JH' => 'E02002746',
        '3JJ' => 'E02002746',
        '3JL' => 'E02002746',
        '3JN' => 'E02002746',
        '3JP' => 'E02002746',
        '3JQ' => 'E02002746',
        '3JR' => 'E02002746',
        '3JS' => 'E02002746',
        '3JT' => 'E02002746',
        '3JU' => 'E02002746',
        '3JW' => 'E02002746',
        '3JX' => 'E02002746',
        '3JY' => 'E02002746',
        '3JZ' => 'E02002746',
        '3LA' => 'E02002746',
        '3LB' => 'E02002746',
        '3LD' => 'E02002746',
        '3LE' => 'E02002746',
        '3LF' => 'E02002746',
        '3LG' => 'E02002746',
        '3LH' => 'E02002746',
        '3LJ' => 'E02002746',
        '3LL' => 'E02002746',
        '3LN' => 'E02002746',
        '3LP' => 'E02002746',
        '3LQ' => 'E02002746',
        '3LR' => 'E02002746',
        '3LS' => 'E02002746',
        '3LT' => 'E02002746',
        '3LU' => 'E02002746',
        '3LW' => 'E02002746',
        '3LY' => 'E02002746',
        '3LZ' => 'E02002746',
        '3NA' => 'E02002746',
        '3NB' => 'E02002746',
        '3ND' => 'E02002746',
        '3NE' => 'E02002746',
        '3NF' => 'E02002746',
        '3NG' => 'E02002746',
        '3NH' => 'E02002746',
        '3NJ' => 'E02002746',
        '3NL' => 'E02002746',
        '3NN' => 'E02002746',
        '3NP' => 'E02002746',
        '3NQ' => 'E02002746',
        '3NR' => 'E02002746',
        '3NS' => 'E02002746',
        '3NT' => 'E02002746',
        '3NU' => 'E02002746',
        '3NW' => 'E02002746',
        '3NX' => 'E02002746',
        '3PA' => 'E02002746',
        '3PB' => 'E02002746',
        '3PD' => 'E02002746',
        '3PE' => 'E02002746',
        '3PF' => 'E02002746',
        '3PH' => 'E02002746',
        '3QA' => 'E02002746',
        '3RA' => 'E02002746',
        '3RB' => 'E02002746',
        '3RD' => 'E02002746',
        '3RE' => 'E02002746',
        '3RF' => 'E02002746',
        '3RG' => 'E02002746',
        '3RH' => 'E02002746',
        '3RJ' => 'E02002746',
        '3RL' => 'E02002746',
        '3RN' => 'E02002746',
        '3RP' => 'E02002746',
        '3RQ' => 'E02002746',
        '3RR' => 'E02002746',
        '3RS' => 'E02002746',
        '3RT' => 'E02002746',
        '3RU' => 'E02002746',
        '3RW' => 'E02002746',
        '3RX' => 'E02002746',
        '3RY' => 'E02002746',
        '3RZ' => 'E02002746',
        '3SA' => 'E02002746',
        '3SB' => 'E02002746',
        '3SD' => 'E02002746',
        '3SE' => 'E02002746',
        '3SF' => 'E02002746',
        '3SG' => 'E02002746',
        '3SH' => 'E02002746',
        '3SJ' => 'E02002746',
        '3SL' => 'E02002746',
        '3SN' => 'E02002746',
        '3SP' => 'E02002746',
        '3SQ' => 'E02002746',
        '3SR' => 'E02002746',
        '3SS' => 'E02002746',
        '3SU' => 'E02002746',
        '3SW' => 'E02002746',
        '3SX' => 'E02002746',
        '3SY' => 'E02002746',
        '3SZ' => 'E02002746',
        '3TA' => 'E02002746',
        '3TB' => 'E02002746',
        '3TD' => 'E02002746',
        '3TE' => 'E02002746',
        '3TF' => 'E02002746',
        '3TG' => 'E02002746',
        '3TH' => 'E02002746',
        '3TJ' => 'E02002746',
        '3TL' => 'E02002746',
        '3TN' => 'E02002746',
        '3TP' => 'E02002746',
        '3TQ' => 'E02002746',
        '3TR' => 'E02002746',
        '3TS' => 'E02002746',
        '3TU' => 'E02002746',
        '3TW' => 'E02002746',
        '3TX' => 'E02002746',
        '3WW' => 'E02002728',
        '3WX' => 'E02002728',
        '3WY' => 'E02002746',
        '3WZ' => 'E02002746',
        '3XZ' => 'E02002728',
        '3YA' => 'E02002746',
        '3YB' => 'E02002746',
        '3YD' => 'E02002746',
        '3YE' => 'E02002746',
        '3YF' => 'E02002746',
        '3YG' => 'E02002746',
        '3YH' => 'E02002746',
        '3YJ' => 'E02002728',
        '3YL' => 'E02002728',
        '3YZ' => 'E02002728',
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
