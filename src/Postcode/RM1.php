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
final class RM1
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000476',
        '1AB' => 'E02000476',
        '1AD' => 'E02000476',
        '1AE' => 'E02000480',
        '1AF' => 'E02000476',
        '1AG' => 'E02000476',
        '1AH' => 'E02000476',
        '1AJ' => 'E02000476',
        '1AL' => 'E02000476',
        '1AN' => 'E02000476',
        '1AP' => 'E02000476',
        '1AR' => 'E02000476',
        '1AS' => 'E02000476',
        '1AU' => 'E02000476',
        '1AW' => 'E02000480',
        '1AX' => 'E02000476',
        '1AY' => 'E02000480',
        '1AZ' => 'E02000476',
        '1BA' => 'E02000476',
        '1BB' => 'E02000476',
        '1BD' => 'E02000480',
        '1BE' => 'E02000476',
        '1BF' => 'E02000476',
        '1BG' => 'E02000476',
        '1BH' => 'E02000476',
        '1BJ' => 'E02000476',
        '1BL' => 'E02000476',
        '1BN' => 'E02000480',
        '1BP' => 'E02000476',
        '1BQ' => 'E02000476',
        '1BS' => 'E02000476',
        '1BT' => 'E02000476',
        '1BU' => 'E02000476',
        '1BW' => 'E02000476',
        '1BX' => 'E02000476',
        '1BZ' => 'E02000476',
        '1DA' => 'E02000476',
        '1DE' => 'E02000476',
        '1DH' => 'E02000476',
        '1DJ' => 'E02000476',
        '1DL' => 'E02000476',
        '1DP' => 'E02000476',
        '1DR' => 'E02000476',
        '1DS' => 'E02000472',
        '1DT' => 'E02000476',
        '1DU' => 'E02000476',
        '1DW' => 'E02000480',
        '1DX' => 'E02000476',
        '1EB' => 'E02000476',
        '1ED' => 'E02000476',
        '1EE' => 'E02000476',
        '1EF' => 'E02000476',
        '1EG' => 'E02000476',
        '1EH' => 'E02000476',
        '1EJ' => 'E02000476',
        '1EL' => 'E02000476',
        '1EN' => 'E02000476',
        '1EP' => 'E02000476',
        '1EQ' => 'E02000476',
        '1ER' => 'E02000476',
        '1ES' => 'E02000476',
        '1ET' => 'E02000476',
        '1EU' => 'E02000476',
        '1EW' => 'E02000476',
        '1EX' => 'E02000476',
        '1EY' => 'E02000476',
        '1EZ' => 'E02000476',
        '1HA' => 'E02000003',
        '1HB' => 'E02000476',
        '1HD' => 'E02000476',
        '1HH' => 'E02000476',
        '1HJ' => 'E02000476',
        '1HL' => 'E02000476',
        '1HP' => 'E02000476',
        '1HR' => 'E02000476',
        '1HS' => 'E02000476',
        '1HT' => 'E02000476',
        '1HU' => 'E02000476',
        '1HX' => 'E02000476',
        '1JA' => 'E02000476',
        '1JB' => 'E02000476',
        '1JD' => 'E02000476',
        '1JH' => 'E02000476',
        '1JJ' => 'E02000476',
        '1JL' => 'E02000476',
        '1JS' => 'E02000476',
        '1JT' => 'E02000476',
        '1JU' => 'E02000476',
        '1JX' => 'E02000476',
        '1LA' => 'E02000476',
        '1LD' => 'E02000476',
        '1LH' => 'E02000476',
        '1LL' => 'E02000476',
        '1LN' => 'E02000476',
        '1LP' => 'E02000476',
        '1LR' => 'E02000476',
        '1LS' => 'E02000476',
        '1LT' => 'E02000476',
        '1LX' => 'E02000476',
        '1NA' => 'E02000476',
        '1NH' => 'E02000476',
        '1NJ' => 'E02000476',
        '1NL' => 'E02000476',
        '1NP' => 'E02000476',
        '1NR' => 'E02000476',
        '1NS' => 'E02000476',
        '1NT' => 'E02000476',
        '1NW' => 'E02000476',
        '1NX' => 'E02000476',
        '1PA' => 'E02000476',
        '1PB' => 'E02000476',
        '1PH' => 'E02000476',
        '1PJ' => 'E02000476',
        '1PL' => 'E02000476',
        '1PP' => 'E02000476',
        '1PR' => 'E02000476',
        '1PS' => 'E02000476',
        '1PT' => 'E02000476',
        '1PU' => 'E02000476',
        '1PX' => 'E02000476',
        '1QA' => 'E02000479',
        '1QB' => 'E02000476',
        '1QH' => 'E02000476',
        '1QJ' => 'E02000479',
        '1QL' => 'E02000479',
        '1QP' => 'E02000476',
        '1QR' => 'E02000476',
        '1QS' => 'E02000476',
        '1QT' => 'E02000476',
        '1QX' => 'E02000479',
        '1RA' => 'E02000476',
        '1RB' => 'E02000476',
        '1RD' => 'E02000476',
        '1RF' => 'E02000476',
        '1RH' => 'E02000476',
        '1RJ' => 'E02000476',
        '1RL' => 'E02000476',
        '1RP' => 'E02000476',
        '1RR' => 'E02000476',
        '1RS' => 'E02000476',
        '1RT' => 'E02000476',
        '1RX' => 'E02000476',
        '1RY' => 'E02000476',
        '1RZ' => 'E02000476',
        '1SA' => 'E02000476',
        '1SB' => 'E02000476',
        '1SD' => 'E02000476',
        '1SJ' => 'E02000476',
        '1SP' => 'E02000476',
        '1SR' => 'E02000476',
        '1SS' => 'E02000476',
        '1ST' => 'E02000476',
        '1SU' => 'E02000476',
        '1SX' => 'E02000476',
        '1SY' => 'E02000476',
        '1SZ' => 'E02000476',
        '1TA' => 'E02000476',
        '1TB' => 'E02000476',
        '1TD' => 'E02000476',
        '1TE' => 'E02000476',
        '1TF' => 'E02000476',
        '1TG' => 'E02000479',
        '1TH' => 'E02000476',
        '1TJ' => 'E02000476',
        '1TL' => 'E02000476',
        '1TN' => 'E02000476',
        '1TP' => 'E02000476',
        '1TQ' => 'E02000479',
        '1TR' => 'E02000476',
        '1TS' => 'E02000476',
        '1TU' => 'E02000476',
        '1TX' => 'E02000476',
        '1UB' => 'E02000476',
        '1UD' => 'E02000480',
        '1UJ' => 'E02000476',
        '1UL' => 'E02000476',
        '1UP' => 'E02000476',
        '1UR' => 'E02000476',
        '1UT' => 'E02000476',
        '1WA' => 'E02000476',
        '1WD' => 'E02000480',
        '1WE' => 'E02000480',
        '1WF' => 'E02000480',
        '1WZ' => 'E02000480',
        '1XD' => 'E02000476',
        '1XH' => 'E02000476',
        '1XJ' => 'E02000476',
        '1XL' => 'E02000476',
        '1XN' => 'E02000476',
        '1XP' => 'E02000476',
        '1XX' => 'E02000480',
        '1XZ' => 'E02000480',
        '1YA' => 'E02000476',
        '1YB' => 'E02000476',
        '1YQ' => 'E02000480',
        '1YT' => 'E02000480',
        '1YY' => 'E02000476',
        '2AA' => 'E02000479',
        '2AB' => 'E02000479',
        '2AD' => 'E02000479',
        '2AE' => 'E02000480',
        '2AF' => 'E02000479',
        '2AG' => 'E02000480',
        '2AH' => 'E02000479',
        '2AJ' => 'E02000479',
        '2AL' => 'E02000479',
        '2AN' => 'E02000479',
        '2AP' => 'E02000479',
        '2AR' => 'E02000479',
        '2AS' => 'E02000479',
        '2AT' => 'E02000479',
        '2AU' => 'E02000479',
        '2AW' => 'E02000479',
        '2AX' => 'E02000479',
        '2AY' => 'E02000479',
        '2AZ' => 'E02000479',
        '2BA' => 'E02000479',
        '2BB' => 'E02000479',
        '2BD' => 'E02000479',
        '2BE' => 'E02000479',
        '2BF' => 'E02000479',
        '2BG' => 'E02000479',
        '2BH' => 'E02000479',
        '2BJ' => 'E02000479',
        '2BL' => 'E02000479',
        '2BN' => 'E02000479',
        '2BP' => 'E02000480',
        '2BQ' => 'E02000479',
        '2BS' => 'E02000479',
        '2BT' => 'E02000479',
        '2BU' => 'E02000476',
        '2BW' => 'E02000479',
        '2BX' => 'E02000476',
        '2BY' => 'E02000480',
        '2BZ' => 'E02000480',
        '2DA' => 'E02000479',
        '2DB' => 'E02000479',
        '2DD' => 'E02000479',
        '2DE' => 'E02000479',
        '2DF' => 'E02000479',
        '2DG' => 'E02000479',
        '2DH' => 'E02000479',
        '2DJ' => 'E02000479',
        '2DL' => 'E02000479',
        '2DN' => 'E02000479',
        '2DP' => 'E02000479',
        '2DQ' => 'E02000479',
        '2DR' => 'E02000480',
        '2DS' => 'E02000479',
        '2DT' => 'E02000479',
        '2DU' => 'E02000479',
        '2DW' => 'E02000480',
        '2DX' => 'E02000479',
        '2DY' => 'E02000479',
        '2DZ' => 'E02000479',
        '2EA' => 'E02000476',
        '2EB' => 'E02000479',
        '2ED' => 'E02000476',
        '2EE' => 'E02000476',
        '2EF' => 'E02000479',
        '2EG' => 'E02000476',
        '2EH' => 'E02000479',
        '2EJ' => 'E02000479',
        '2EL' => 'E02000479',
        '2EN' => 'E02000479',
        '2EP' => 'E02000479',
        '2EQ' => 'E02000479',
        '2ER' => 'E02000479',
        '2ES' => 'E02000479',
        '2ET' => 'E02000479',
        '2EU' => 'E02000479',
        '2EW' => 'E02000479',
        '2EX' => 'E02000479',
        '2EY' => 'E02000479',
        '2EZ' => 'E02000479',
        '2GL' => 'E02000480',
        '2GP' => 'E02000479',
        '2HA' => 'E02000479',
        '2HD' => 'E02000479',
        '2HJ' => 'E02000479',
        '2HL' => 'E02000479',
        '2HN' => 'E02000480',
        '2HS' => 'E02000476',
        '2HU' => 'E02000476',
        '2JA' => 'E02000476',
        '2JB' => 'E02000476',
        '2JD' => 'E02000479',
        '2JE' => 'E02000479',
        '2JG' => 'E02000479',
        '2JH' => 'E02000476',
        '2JJ' => 'E02000479',
        '2JQ' => 'E02000479',
        '2JR' => 'E02000476',
        '2JS' => 'E02000479',
        '2JT' => 'E02000476',
        '2JU' => 'E02000479',
        '2JX' => 'E02000479',
        '2LA' => 'E02000479',
        '2LB' => 'E02000479',
        '2LD' => 'E02000479',
        '2LG' => 'E02000479',
        '2LH' => 'E02000479',
        '2LJ' => 'E02000479',
        '2LL' => 'E02000479',
        '2LT' => 'E02000476',
        '2LU' => 'E02000479',
        '2LX' => 'E02000476',
        '2LY' => 'E02000476',
        '2NA' => 'E02000479',
        '2ND' => 'E02000476',
        '2NH' => 'E02000476',
        '2NJ' => 'E02000476',
        '2NL' => 'E02000476',
        '2NP' => 'E02000476',
        '2NQ' => 'E02000476',
        '2NR' => 'E02000476',
        '2NT' => 'E02000479',
        '2NU' => 'E02000476',
        '2NX' => 'E02000479',
        '2PA' => 'E02000479',
        '2PD' => 'E02000479',
        '2PH' => 'E02000479',
        '2PJ' => 'E02000479',
        '2PL' => 'E02000479',
        '2PP' => 'E02000479',
        '2PR' => 'E02000479',
        '2PS' => 'E02000479',
        '2PT' => 'E02000479',
        '2PU' => 'E02000479',
        '2PX' => 'E02000479',
        '2QA' => 'E02000479',
        '2QB' => 'E02000479',
        '2QD' => 'E02000479',
        '2QE' => 'E02000479',
        '2QH' => 'E02000479',
        '2QJ' => 'E02000479',
        '2QL' => 'E02000479',
        '2QN' => 'E02000479',
        '2QP' => 'E02000479',
        '2QQ' => 'E02000479',
        '2QR' => 'E02000479',
        '2QS' => 'E02000479',
        '2QZ' => 'E02000479',
        '2RA' => 'E02000479',
        '2RB' => 'E02000479',
        '2RD' => 'E02000479',
        '2RE' => 'E02000479',
        '2RF' => 'E02000479',
        '2RG' => 'E02000479',
        '2RH' => 'E02000479',
        '2RJ' => 'E02000479',
        '2RL' => 'E02000479',
        '2RN' => 'E02000479',
        '2RP' => 'E02000479',
        '2RQ' => 'E02000479',
        '2RR' => 'E02000479',
        '2RT' => 'E02000479',
        '2RU' => 'E02000479',
        '2RW' => 'E02000479',
        '2RX' => 'E02000479',
        '2SA' => 'E02000479',
        '2SB' => 'E02000479',
        '2SD' => 'E02000479',
        '2SF' => 'E02000479',
        '2SH' => 'E02000479',
        '2SJ' => 'E02000479',
        '2SL' => 'E02000479',
        '2SP' => 'E02000479',
        '2SR' => 'E02000479',
        '2SS' => 'E02000479',
        '2ST' => 'E02000479',
        '2SU' => 'E02000476',
        '2SX' => 'E02000479',
        '2TA' => 'E02000479',
        '2TB' => 'E02000479',
        '2TD' => 'E02000479',
        '2TE' => 'E02000479',
        '2TH' => 'E02000479',
        '2TJ' => 'E02000479',
        '2TL' => 'E02000479',
        '2TN' => 'E02000479',
        '2UY' => 'E02000479',
        '2WA' => 'E02000480',
        '2WB' => 'E02000480',
        '2WE' => 'E02000480',
        '2WF' => 'E02000480',
        '2WG' => 'E02000480',
        '2WJ' => 'E02000480',
        '2WQ' => 'E02000480',
        '2WT' => 'E02000480',
        '2WX' => 'E02000480',
        '2WY' => 'E02000480',
        '2WZ' => 'E02000480',
        '2XT' => 'E02000480',
        '2YA' => 'E02000480',
        '2YB' => 'E02000480',
        '2YP' => 'E02000480',
        '2YT' => 'E02000480',
        '2YZ' => 'E02000480',
        '2ZB' => 'E02000480',
        '3AA' => 'E02000476',
        '3AB' => 'E02000476',
        '3AD' => 'E02000476',
        '3AE' => 'E02000476',
        '3AF' => 'E02000476',
        '3AG' => 'E02000480',
        '3AH' => 'E02000476',
        '3AJ' => 'E02000476',
        '3AL' => 'E02000480',
        '3AP' => 'E02000476',
        '3AQ' => 'E02000476',
        '3AR' => 'E02000476',
        '3AS' => 'E02000476',
        '3AT' => 'E02000476',
        '3AU' => 'E02000476',
        '3AW' => 'E02000476',
        '3AX' => 'E02000476',
        '3AY' => 'E02000480',
        '3BA' => 'E02000476',
        '3BB' => 'E02000476',
        '3BD' => 'E02000476',
        '3BE' => 'E02000480',
        '3BF' => 'E02000476',
        '3BG' => 'E02000480',
        '3BH' => 'E02000476',
        '3BJ' => 'E02000476',
        '3BL' => 'E02000476',
        '3BN' => 'E02000480',
        '3BP' => 'E02000476',
        '3BQ' => 'E02000476',
        '3BS' => 'E02000476',
        '3BT' => 'E02000476',
        '3BU' => 'E02000476',
        '3BW' => 'E02000480',
        '3BX' => 'E02000476',
        '3BY' => 'E02000476',
        '3BZ' => 'E02000480',
        '3DA' => 'E02000476',
        '3DB' => 'E02000475',
        '3DD' => 'E02000475',
        '3DE' => 'E02000476',
        '3DF' => 'E02000476',
        '3DG' => 'E02000476',
        '3DH' => 'E02000476',
        '3DJ' => 'E02000475',
        '3DL' => 'E02000475',
        '3DN' => 'E02000480',
        '3DP' => 'E02000479',
        '3DQ' => 'E02000476',
        '3DR' => 'E02000476',
        '3DS' => 'E02000476',
        '3DT' => 'E02000476',
        '3DU' => 'E02000476',
        '3DW' => 'E02000476',
        '3DX' => 'E02000476',
        '3DY' => 'E02000476',
        '3DZ' => 'E02000476',
        '3EA' => 'E02000476',
        '3EB' => 'E02000476',
        '3ED' => 'E02000476',
        '3EE' => 'E02000476',
        '3EF' => 'E02000476',
        '3EG' => 'E02000480',
        '3EH' => 'E02000476',
        '3EJ' => 'E02000476',
        '3EL' => 'E02000476',
        '3EN' => 'E02000476',
        '3EP' => 'E02000476',
        '3EQ' => 'E02000476',
        '3ER' => 'E02000476',
        '3ES' => 'E02000476',
        '3ET' => 'E02000476',
        '3EU' => 'E02000480',
        '3EW' => 'E02000480',
        '3EX' => 'E02000480',
        '3EY' => 'E02000480',
        '3EZ' => 'E02000476',
        '3FA' => 'E02000476',
        '3FB' => 'E02000476',
        '3FD' => 'E02000476',
        '3FE' => 'E02000476',
        '3GD' => 'E02000476',
        '3GE' => 'E02000480',
        '3GG' => 'E02000480',
        '3GH' => 'E02000480',
        '3GL' => 'E02000476',
        '3GN' => 'E02000476',
        '3GQ' => 'E02000480',
        '3GR' => 'E02000476',
        '3HA' => 'E02000476',
        '3HB' => 'E02000476',
        '3HD' => 'E02000476',
        '3HE' => 'E02000476',
        '3HF' => 'E02000476',
        '3HG' => 'E02000476',
        '3HH' => 'E02000476',
        '3HJ' => 'E02000476',
        '3HL' => 'E02000476',
        '3HN' => 'E02000476',
        '3HP' => 'E02000476',
        '3HQ' => 'E02000476',
        '3HR' => 'E02000476',
        '3HS' => 'E02000476',
        '3HU' => 'E02000476',
        '3HX' => 'E02000479',
        '3JB' => 'E02000476',
        '3JE' => 'E02000476',
        '3JH' => 'E02000476',
        '3JL' => 'E02000476',
        '3JP' => 'E02000476',
        '3JR' => 'E02000476',
        '3JS' => 'E02000476',
        '3JT' => 'E02000476',
        '3JX' => 'E02000476',
        '3JZ' => 'E02000476',
        '3LA' => 'E02000476',
        '3LB' => 'E02000476',
        '3LD' => 'E02000476',
        '3LE' => 'E02000476',
        '3LF' => 'E02000476',
        '3LH' => 'E02000476',
        '3LL' => 'E02000476',
        '3LN' => 'E02000476',
        '3LP' => 'E02000476',
        '3LR' => 'E02000476',
        '3LS' => 'E02000476',
        '3LT' => 'E02000476',
        '3LU' => 'E02000476',
        '3LW' => 'E02000476',
        '3LX' => 'E02000476',
        '3LY' => 'E02000476',
        '3NA' => 'E02000476',
        '3NB' => 'E02000475',
        '3ND' => 'E02000476',
        '3NE' => 'E02000476',
        '3NG' => 'E02000476',
        '3NH' => 'E02000476',
        '3NJ' => 'E02000476',
        '3NL' => 'E02000476',
        '3NN' => 'E02000476',
        '3NP' => 'E02000476',
        '3NQ' => 'E02000476',
        '3NR' => 'E02000476',
        '3NS' => 'E02000476',
        '3NT' => 'E02000476',
        '3NU' => 'E02000476',
        '3NW' => 'E02000476',
        '3NZ' => 'E02000480',
        '3PA' => 'E02000476',
        '3PB' => 'E02000476',
        '3PD' => 'E02000476',
        '3PF' => 'E02000476',
        '3PG' => 'E02000476',
        '3PH' => 'E02000479',
        '3PJ' => 'E02000476',
        '3PL' => 'E02000476',
        '3PN' => 'E02000476',
        '3PP' => 'E02000476',
        '3PR' => 'E02000476',
        '3PS' => 'E02000476',
        '3PT' => 'E02000476',
        '3PU' => 'E02000476',
        '3PX' => 'E02000476',
        '3QA' => 'E02000476',
        '3QB' => 'E02000476',
        '3QD' => 'E02000476',
        '3QE' => 'E02000476',
        '3QF' => 'E02000476',
        '3QG' => 'E02000476',
        '3QH' => 'E02000476',
        '3QN' => 'E02000476',
        '3QP' => 'E02000476',
        '3QR' => 'E02000476',
        '3QS' => 'E02000476',
        '3QT' => 'E02000476',
        '3QU' => 'E02000476',
        '3QW' => 'E02000476',
        '3QX' => 'E02000476',
        '3QY' => 'E02000476',
        '3QZ' => 'E02000476',
        '3RA' => 'E02000476',
        '3RB' => 'E02000476',
        '3RH' => 'E02000476',
        '3RJ' => 'E02000476',
        '3RL' => 'E02000476',
        '3RN' => 'E02000476',
        '3RP' => 'E02000476',
        '3RR' => 'E02000476',
        '3RS' => 'E02000476',
        '3RT' => 'E02000476',
        '3RX' => 'E02000476',
        '3RZ' => 'E02000476',
        '3SA' => 'E02000480',
        '3SB' => 'E02000476',
        '3SD' => 'E02000476',
        '3SF' => 'E02000476',
        '3SH' => 'E02000476',
        '3SJ' => 'E02000476',
        '3SL' => 'E02000476',
        '3SP' => 'E02000476',
        '3SR' => 'E02000476',
        '3SS' => 'E02000476',
        '3ST' => 'E02000476',
        '3WA' => 'E02000480',
        '3WB' => 'E02000480',
        '3WD' => 'E02000480',
        '3WE' => 'E02000476',
        '3WF' => 'E02000480',
        '3WG' => 'E02000480',
        '3WH' => 'E02000480',
        '3WR' => 'E02000480',
        '3WZ' => 'E02000480',
        '3XA' => 'E02000476',
        '3XB' => 'E02000476',
        '3XD' => 'E02000476',
        '3XE' => 'E02000476',
        '3YP' => 'E02000476',
        '3YQ' => 'E02000480',
        '3YT' => 'E02000480',
        '3ZU' => 'E02000476',
        '4AA' => 'E02000476',
        '4AB' => 'E02000476',
        '4AD' => 'E02000476',
        '4AE' => 'E02000471',
        '4AF' => 'E02000471',
        '4AG' => 'E02000471',
        '4AH' => 'E02000476',
        '4AJ' => 'E02000476',
        '4AL' => 'E02000471',
        '4AN' => 'E02000471',
        '4AP' => 'E02000472',
        '4AQ' => 'E02000471',
        '4AR' => 'E02000472',
        '4AS' => 'E02000476',
        '4AT' => 'E02000476',
        '4AU' => 'E02000476',
        '4AW' => 'E02000471',
        '4AX' => 'E02000476',
        '4AY' => 'E02000471',
        '4AZ' => 'E02000471',
        '4BA' => 'E02000476',
        '4BB' => 'E02000471',
        '4BD' => 'E02000476',
        '4BE' => 'E02000471',
        '4BF' => 'E02000471',
        '4BG' => 'E02000471',
        '4BH' => 'E02000471',
        '4BJ' => 'E02000471',
        '4BL' => 'E02000476',
        '4BN' => 'E02000466',
        '4BP' => 'E02000471',
        '4BQ' => 'E02000471',
        '4BS' => 'E02000471',
        '4BT' => 'E02000472',
        '4BU' => 'E02000471',
        '4BW' => 'E02000466',
        '4BX' => 'E02000476',
        '4BY' => 'E02000466',
        '4BZ' => 'E02000466',
        '4DA' => 'E02000476',
        '4DB' => 'E02000476',
        '4DD' => 'E02000476',
        '4DE' => 'E02000471',
        '4DF' => 'E02000471',
        '4DG' => 'E02000471',
        '4DH' => 'E02000472',
        '4DJ' => 'E02000476',
        '4DL' => 'E02000476',
        '4DN' => 'E02000471',
        '4DP' => 'E02000476',
        '4DQ' => 'E02000464',
        '4DR' => 'E02000472',
        '4DS' => 'E02000472',
        '4DT' => 'E02000472',
        '4DU' => 'E02000471',
        '4DW' => 'E02000471',
        '4DX' => 'E02000471',
        '4DY' => 'E02000476',
        '4DZ' => 'E02000476',
        '4EA' => 'E02000471',
        '4EB' => 'E02000471',
        '4ED' => 'E02000471',
        '4EE' => 'E02000471',
        '4EF' => 'E02000471',
        '4EG' => 'E02000476',
        '4EH' => 'E02000471',
        '4EJ' => 'E02000471',
        '4EL' => 'E02000471',
        '4EN' => 'E02000471',
        '4EP' => 'E02000471',
        '4EQ' => 'E02000475',
        '4ER' => 'E02000471',
        '4ES' => 'E02000471',
        '4ET' => 'E02000471',
        '4EU' => 'E02000471',
        '4EW' => 'E02000480',
        '4EX' => 'E02000471',
        '4EY' => 'E02000471',
        '4EZ' => 'E02000480',
        '4FB' => 'E02000476',
        '4FD' => 'E02000476',
        '4GD' => 'E02000471',
        '4GE' => 'E02000480',
        '4GF' => 'E02000476',
        '4GG' => 'E02000471',
        '4GH' => 'E02000471',
        '4GJ' => 'E02000471',
        '4GL' => 'E02000480',
        '4GN' => 'E02000471',
        '4GP' => 'E02000476',
        '4GQ' => 'E02000476',
        '4GR' => 'E02000476',
        '4GS' => 'E02000476',
        '4GT' => 'E02000480',
        '4GU' => 'E02000476',
        '4GW' => 'E02000471',
        '4GX' => 'E02000471',
        '4GY' => 'E02000476',
        '4GZ' => 'E02000471',
        '4HA' => 'E02000476',
        '4HB' => 'E02000476',
        '4HD' => 'E02000476',
        '4HE' => 'E02000476',
        '4HF' => 'E02000471',
        '4HG' => 'E02000471',
        '4HH' => 'E02000476',
        '4HJ' => 'E02000480',
        '4HL' => 'E02000476',
        '4HN' => 'E02000475',
        '4HP' => 'E02000476',
        '4HQ' => 'E02000476',
        '4HR' => 'E02000466',
        '4HS' => 'E02000476',
        '4HT' => 'E02000471',
        '4HU' => 'E02000466',
        '4HW' => 'E02000480',
        '4HX' => 'E02000480',
        '4HY' => 'E02000471',
        '4HZ' => 'E02000471',
        '4JA' => 'E02000472',
        '4JB' => 'E02000472',
        '4JD' => 'E02000471',
        '4JH' => 'E02000471',
        '4JJ' => 'E02000471',
        '4JL' => 'E02000471',
        '4JN' => 'E02000471',
        '4JP' => 'E02000471',
        '4JQ' => 'E02000474',
        '4JR' => 'E02000471',
        '4JS' => 'E02000471',
        '4JT' => 'E02000471',
        '4JU' => 'E02000472',
        '4JW' => 'E02000480',
        '4JX' => 'E02000480',
        '4JY' => 'E02000480',
        '4JZ' => 'E02000474',
        '4LA' => 'E02000472',
        '4LB' => 'E02000472',
        '4LD' => 'E02000476',
        '4LE' => 'E02000480',
        '4LH' => 'E02000472',
        '4LJ' => 'E02000472',
        '4LL' => 'E02000472',
        '4LP' => 'E02000472',
        '4LQ' => 'E02000476',
        '4LR' => 'E02000471',
        '4LS' => 'E02000471',
        '4LU' => 'E02000471',
        '4LX' => 'E02000480',
        '4LY' => 'E02000471',
        '4LZ' => 'E02000471',
        '4NA' => 'E02000472',
        '4NB' => 'E02000472',
        '4ND' => 'E02000472',
        '4NE' => 'E02000472',
        '4NF' => 'E02000472',
        '4NG' => 'E02000471',
        '4NH' => 'E02000472',
        '4NJ' => 'E02000472',
        '4NL' => 'E02000471',
        '4NP' => 'E02000471',
        '4NR' => 'E02000471',
        '4NS' => 'E02000471',
        '4NT' => 'E02000471',
        '4NU' => 'E02000471',
        '4NX' => 'E02000471',
        '4NZ' => 'E02000471',
        '4PA' => 'E02000471',
        '4PB' => 'E02000471',
        '4PD' => 'E02000471',
        '4PE' => 'E02000476',
        '4PF' => 'E02000476',
        '4PG' => 'E02000480',
        '4PH' => 'E02000471',
        '4PJ' => 'E02000471',
        '4PL' => 'E02000471',
        '4PN' => 'E02000471',
        '4PP' => 'E02000471',
        '4PR' => 'E02000471',
        '4PS' => 'E02000471',
        '4PU' => 'E02000471',
        '4QA' => 'E02000474',
        '4QB' => 'E02000474',
        '4QD' => 'E02000472',
        '4QE' => 'E02000472',
        '4QH' => 'E02000474',
        '4QJ' => 'E02000472',
        '4QL' => 'E02000472',
        '4QN' => 'E02000472',
        '4QP' => 'E02000472',
        '4QR' => 'E02000472',
        '4QS' => 'E02000472',
        '4QT' => 'E02000472',
        '4QU' => 'E02000472',
        '4QX' => 'E02000472',
        '4RA' => 'E02000472',
        '4RB' => 'E02000472',
        '4RD' => 'E02000472',
        '4RE' => 'E02000472',
        '4RG' => 'E02000472',
        '4RH' => 'E02000472',
        '4RJ' => 'E02000472',
        '4RL' => 'E02000471',
        '4RP' => 'E02000472',
        '4RQ' => 'E02000471',
        '4RR' => 'E02000472',
        '4RS' => 'E02000471',
        '4RT' => 'E02000471',
        '4RU' => 'E02000471',
        '4RW' => 'E02000472',
        '4RX' => 'E02000471',
        '4RY' => 'E02000471',
        '4SA' => 'E02000471',
        '4SB' => 'E02000472',
        '4SD' => 'E02000472',
        '4SE' => 'E02000475',
        '4SG' => 'E02000472',
        '4SH' => 'E02000472',
        '4SJ' => 'E02000471',
        '4SL' => 'E02000471',
        '4SP' => 'E02000471',
        '4SR' => 'E02000471',
        '4SS' => 'E02000471',
        '4ST' => 'E02000471',
        '4SU' => 'E02000471',
        '4SX' => 'E02000471',
        '4SZ' => 'E02000480',
        '4TA' => 'E02000471',
        '4TB' => 'E02000471',
        '4TD' => 'E02000471',
        '4TG' => 'E02000471',
        '4TH' => 'E02000472',
        '4TJ' => 'E02000466',
        '4TL' => 'E02000471',
        '4TP' => 'E02000471',
        '4TQ' => 'E02000471',
        '4TR' => 'E02000471',
        '4TS' => 'E02000466',
        '4UA' => 'E02000471',
        '4UB' => 'E02000471',
        '4UD' => 'E02000471',
        '4UH' => 'E02000471',
        '4UJ' => 'E02000471',
        '4UL' => 'E02000471',
        '4UP' => 'E02000471',
        '4UR' => 'E02000471',
        '4UT' => 'E02000471',
        '4UU' => 'E02000471',
        '4UX' => 'E02000471',
        '4UY' => 'E02000471',
        '4WA' => 'E02000480',
        '4WB' => 'E02000480',
        '4WD' => 'E02000480',
        '4WE' => 'E02000466',
        '4WF' => 'E02000466',
        '4WG' => 'E02000466',
        '4WH' => 'E02000471',
        '4WJ' => 'E02000466',
        '4WL' => 'E02000466',
        '4WN' => 'E02000466',
        '4WR' => 'E02000480',
        '4WS' => 'E02000471',
        '4WT' => 'E02000480',
        '4WX' => 'E02000480',
        '4WY' => 'E02000480',
        '4WZ' => 'E02000480',
        '4XA' => 'E02000471',
        '4XB' => 'E02000471',
        '4XD' => 'E02000471',
        '4XE' => 'E02000471',
        '4XH' => 'E02000471',
        '4XJ' => 'E02000471',
        '4XL' => 'E02000471',
        '4XP' => 'E02000471',
        '4XR' => 'E02000471',
        '4XS' => 'E02000471',
        '4XT' => 'E02000471',
        '4XX' => 'E02000471',
        '4YB' => 'E02000480',
        '4YD' => 'E02000471',
        '4YF' => 'E02000480',
        '4YH' => 'E02000471',
        '4YJ' => 'E02000471',
        '4YL' => 'E02000471',
        '4YP' => 'E02000471',
        '4YR' => 'E02000471',
        '4YS' => 'E02000471',
        '4YT' => 'E02000471',
        '4YU' => 'E02000471',
        '4YW' => 'E02000466',
        '4YX' => 'E02000471',
        '4YY' => 'E02000466',
        '4YZ' => 'E02000480',
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