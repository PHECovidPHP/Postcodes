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
final class HP5
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003679',
        '1AB' => 'E02003679',
        '1AD' => 'E02003678',
        '1AE' => 'E02003679',
        '1AF' => 'E02003677',
        '1AG' => 'E02003679',
        '1AH' => 'E02003679',
        '1AJ' => 'E02003678',
        '1AL' => 'E02003678',
        '1AN' => 'E02003678',
        '1AP' => 'E02003678',
        '1AQ' => 'E02003678',
        '1AR' => 'E02003678',
        '1AS' => 'E02003678',
        '1AT' => 'E02003678',
        '1AU' => 'E02003679',
        '1AW' => 'E02003679',
        '1AX' => 'E02003678',
        '1AY' => 'E02003678',
        '1AZ' => 'E02003678',
        '1BA' => 'E02003678',
        '1BB' => 'E02003678',
        '1BD' => 'E02003679',
        '1BE' => 'E02003679',
        '1BF' => 'E02003677',
        '1BG' => 'E02003679',
        '1BH' => 'E02003677',
        '1BJ' => 'E02003679',
        '1BL' => 'E02003677',
        '1BN' => 'E02003679',
        '1BP' => 'E02003679',
        '1BQ' => 'E02003679',
        '1BS' => 'E02003679',
        '1BT' => 'E02003679',
        '1BU' => 'E02003679',
        '1BW' => 'E02003679',
        '1BX' => 'E02003679',
        '1BY' => 'E02003679',
        '1BZ' => 'E02003679',
        '1DA' => 'E02003679',
        '1DB' => 'E02003679',
        '1DD' => 'E02003679',
        '1DE' => 'E02003679',
        '1DF' => 'E02003679',
        '1DG' => 'E02003679',
        '1DH' => 'E02003679',
        '1DJ' => 'E02003679',
        '1DL' => 'E02003679',
        '1DN' => 'E02003679',
        '1DP' => 'E02003679',
        '1DQ' => 'E02003679',
        '1DR' => 'E02003679',
        '1DS' => 'E02003679',
        '1DT' => 'E02003679',
        '1DU' => 'E02003679',
        '1DW' => 'E02003679',
        '1DX' => 'E02003679',
        '1DY' => 'E02003679',
        '1DZ' => 'E02003679',
        '1EA' => 'E02003679',
        '1EB' => 'E02003679',
        '1ED' => 'E02003679',
        '1EE' => 'E02003679',
        '1EF' => 'E02003679',
        '1EG' => 'E02003679',
        '1EH' => 'E02003679',
        '1EJ' => 'E02003679',
        '1EL' => 'E02003679',
        '1EN' => 'E02003679',
        '1EP' => 'E02003679',
        '1EQ' => 'E02003679',
        '1ER' => 'E02003679',
        '1ES' => 'E02003679',
        '1ET' => 'E02003679',
        '1EU' => 'E02003679',
        '1EW' => 'E02003679',
        '1EX' => 'E02003679',
        '1EY' => 'E02003679',
        '1EZ' => 'E02003679',
        '1FA' => 'E02003679',
        '1FB' => 'E02003679',
        '1FD' => 'E02003679',
        '1FE' => 'E02003679',
        '1FF' => 'E02004876',
        '1FG' => 'E02003676',
        '1FH' => 'E02003679',
        '1FJ' => 'E02003677',
        '1FL' => 'E02003677',
        '1FN' => 'E02003679',
        '1FP' => 'E02003677',
        '1FQ' => 'E02003679',
        '1FR' => 'E02003677',
        '1FS' => 'E02003677',
        '1FT' => 'E02003677',
        '1FW' => 'E02003678',
        '1FX' => 'E02003679',
        '1FY' => 'E02003676',
        '1FZ' => 'E02003676',
        '1GA' => 'E02003676',
        '1GB' => 'E02003676',
        '1GD' => 'E02003679',
        '1GE' => 'E02003676',
        '1HA' => 'E02003677',
        '1HB' => 'E02003679',
        '1HD' => 'E02003679',
        '1HE' => 'E02003679',
        '1HF' => 'E02003679',
        '1HG' => 'E02003679',
        '1HH' => 'E02003679',
        '1HJ' => 'E02003679',
        '1HL' => 'E02003679',
        '1HP' => 'E02003679',
        '1HQ' => 'E02003679',
        '1HR' => 'E02003679',
        '1HS' => 'E02003679',
        '1HT' => 'E02003679',
        '1HU' => 'E02003679',
        '1HW' => 'E02003679',
        '1HX' => 'E02003679',
        '1HY' => 'E02003679',
        '1HZ' => 'E02003679',
        '1JA' => 'E02003679',
        '1JB' => 'E02003679',
        '1JD' => 'E02003679',
        '1JE' => 'E02003679',
        '1JF' => 'E02003679',
        '1JG' => 'E02003679',
        '1JH' => 'E02003679',
        '1JJ' => 'E02003679',
        '1JL' => 'E02003679',
        '1JN' => 'E02003679',
        '1JP' => 'E02003679',
        '1JQ' => 'E02003679',
        '1JR' => 'E02003679',
        '1JS' => 'E02003679',
        '1JT' => 'E02003679',
        '1JU' => 'E02003677',
        '1JW' => 'E02003679',
        '1JX' => 'E02003679',
        '1JY' => 'E02003679',
        '1JZ' => 'E02003679',
        '1LA' => 'E02003679',
        '1LB' => 'E02003679',
        '1LD' => 'E02003679',
        '1LE' => 'E02003679',
        '1LF' => 'E02003679',
        '1LG' => 'E02003679',
        '1LH' => 'E02003679',
        '1LJ' => 'E02003679',
        '1LL' => 'E02003679',
        '1LN' => 'E02003679',
        '1LP' => 'E02003679',
        '1LQ' => 'E02003679',
        '1LR' => 'E02003679',
        '1LS' => 'E02003679',
        '1LT' => 'E02003679',
        '1LU' => 'E02003679',
        '1LW' => 'E02003679',
        '1LX' => 'E02003679',
        '1LY' => 'E02003679',
        '1LZ' => 'E02003679',
        '1NA' => 'E02003679',
        '1NB' => 'E02003679',
        '1ND' => 'E02003679',
        '1NE' => 'E02003679',
        '1NF' => 'E02003679',
        '1NG' => 'E02003679',
        '1NH' => 'E02003679',
        '1NJ' => 'E02003679',
        '1NL' => 'E02003679',
        '1NN' => 'E02003679',
        '1NP' => 'E02003679',
        '1NQ' => 'E02003679',
        '1NR' => 'E02003679',
        '1NS' => 'E02003679',
        '1NT' => 'E02003679',
        '1NU' => 'E02003677',
        '1NW' => 'E02003679',
        '1NX' => 'E02003679',
        '1NY' => 'E02003679',
        '1NZ' => 'E02003679',
        '1PA' => 'E02003679',
        '1PB' => 'E02003679',
        '1PD' => 'E02003679',
        '1PE' => 'E02003679',
        '1PF' => 'E02003679',
        '1PG' => 'E02003679',
        '1PH' => 'E02003679',
        '1PJ' => 'E02003679',
        '1PL' => 'E02003679',
        '1PN' => 'E02003679',
        '1PP' => 'E02003679',
        '1PQ' => 'E02003679',
        '1PR' => 'E02003679',
        '1PS' => 'E02003679',
        '1PT' => 'E02003679',
        '1PU' => 'E02003679',
        '1PW' => 'E02003679',
        '1PX' => 'E02003679',
        '1PY' => 'E02003679',
        '1PZ' => 'E02003679',
        '1QA' => 'E02003679',
        '1QB' => 'E02003679',
        '1QD' => 'E02003679',
        '1QE' => 'E02003679',
        '1QF' => 'E02003679',
        '1QG' => 'E02003679',
        '1QH' => 'E02003679',
        '1QJ' => 'E02003679',
        '1QL' => 'E02003679',
        '1QP' => 'E02003679',
        '1QQ' => 'E02003679',
        '1QR' => 'E02003679',
        '1QS' => 'E02003679',
        '1QT' => 'E02003679',
        '1QU' => 'E02003679',
        '1QX' => 'E02003679',
        '1QZ' => 'E02003679',
        '1RA' => 'E02003679',
        '1RB' => 'E02003679',
        '1RD' => 'E02003679',
        '1RF' => 'E02003679',
        '1RG' => 'E02003679',
        '1RH' => 'E02003679',
        '1RJ' => 'E02003679',
        '1RL' => 'E02003679',
        '1RN' => 'E02003679',
        '1RP' => 'E02003679',
        '1RQ' => 'E02003679',
        '1RR' => 'E02003679',
        '1RS' => 'E02003679',
        '1RT' => 'E02003679',
        '1RU' => 'E02003679',
        '1RW' => 'E02003679',
        '1RX' => 'E02003678',
        '1RY' => 'E02003677',
        '1RZ' => 'E02003679',
        '1SA' => 'E02003679',
        '1SB' => 'E02003679',
        '1SD' => 'E02003679',
        '1SE' => 'E02003679',
        '1SF' => 'E02003679',
        '1SG' => 'E02003679',
        '1SH' => 'E02003679',
        '1SJ' => 'E02003679',
        '1SL' => 'E02003679',
        '1SN' => 'E02003679',
        '1SP' => 'E02003679',
        '1SQ' => 'E02003679',
        '1SR' => 'E02003679',
        '1SS' => 'E02003679',
        '1ST' => 'E02003679',
        '1SU' => 'E02003679',
        '1SW' => 'E02003679',
        '1SX' => 'E02003679',
        '1SY' => 'E02003679',
        '1SZ' => 'E02003679',
        '1TA' => 'E02003679',
        '1TB' => 'E02003679',
        '1TD' => 'E02003679',
        '1TE' => 'E02003679',
        '1TH' => 'E02003679',
        '1TJ' => 'E02003679',
        '1TL' => 'E02003679',
        '1TN' => 'E02003676',
        '1TP' => 'E02003679',
        '1TQ' => 'E02003679',
        '1TR' => 'E02003679',
        '1TS' => 'E02003682',
        '1TT' => 'E02003676',
        '1TU' => 'E02003676',
        '1TW' => 'E02003679',
        '1TX' => 'E02003679',
        '1TY' => 'E02003676',
        '1TZ' => 'E02003676',
        '1UA' => 'E02003676',
        '1UB' => 'E02003677',
        '1UD' => 'E02003679',
        '1UE' => 'E02003676',
        '1UF' => 'E02003676',
        '1UG' => 'E02003676',
        '1UH' => 'E02003676',
        '1UJ' => 'E02003676',
        '1UL' => 'E02003676',
        '1UN' => 'E02003676',
        '1UP' => 'E02003676',
        '1UQ' => 'E02003676',
        '1UR' => 'E02003676',
        '1US' => 'E02003677',
        '1UT' => 'E02003676',
        '1UU' => 'E02003676',
        '1UW' => 'E02003676',
        '1UX' => 'E02003679',
        '1UY' => 'E02003676',
        '1UZ' => 'E02003676',
        '1WA' => 'E02003679',
        '1WB' => 'E02003677',
        '1WD' => 'E02003677',
        '1WE' => 'E02003677',
        '1WF' => 'E02003677',
        '1WG' => 'E02003677',
        '1WH' => 'E02003677',
        '1WJ' => 'E02003677',
        '1WL' => 'E02003677',
        '1WN' => 'E02003677',
        '1WP' => 'E02003677',
        '1WQ' => 'E02003677',
        '1WR' => 'E02003677',
        '1WS' => 'E02003677',
        '1WT' => 'E02003677',
        '1WU' => 'E02003677',
        '1WW' => 'E02003677',
        '1WX' => 'E02003677',
        '1WY' => 'E02003677',
        '1WZ' => 'E02003677',
        '1XA' => 'E02003676',
        '1XB' => 'E02004876',
        '1XD' => 'E02003679',
        '1XE' => 'E02003677',
        '1XF' => 'E02003677',
        '1XG' => 'E02003678',
        '1XH' => 'E02003678',
        '1XJ' => 'E02003678',
        '1XL' => 'E02003678',
        '1XN' => 'E02003678',
        '1XP' => 'E02003678',
        '1XQ' => 'E02003678',
        '1XR' => 'E02003678',
        '1XS' => 'E02003676',
        '1XT' => 'E02003676',
        '1XU' => 'E02003678',
        '1XW' => 'E02003678',
        '1XX' => 'E02003676',
        '1XY' => 'E02003676',
        '1XZ' => 'E02003676',
        '1YA' => 'E02003678',
        '1YB' => 'E02003676',
        '1YD' => 'E02003676',
        '1YE' => 'E02003676',
        '1YF' => 'E02003676',
        '1YG' => 'E02003678',
        '1YH' => 'E02003678',
        '1YJ' => 'E02003677',
        '1YL' => 'E02003677',
        '1YN' => 'E02003678',
        '1YP' => 'E02003678',
        '1YQ' => 'E02003678',
        '1YR' => 'E02003677',
        '1YS' => 'E02003677',
        '1YU' => 'E02003677',
        '1YW' => 'E02003678',
        '1YX' => 'E02003677',
        '1YY' => 'E02003677',
        '1ZJ' => 'E02003677',
        '1ZN' => 'E02003677',
        '1ZQ' => 'E02003677',
        '1ZZ' => 'E02003677',
        '2AA' => 'E02003679',
        '2AB' => 'E02003677',
        '2AD' => 'E02003679',
        '2AE' => 'E02003677',
        '2AF' => 'E02003679',
        '2AG' => 'E02003679',
        '2AH' => 'E02003679',
        '2AJ' => 'E02003679',
        '2AL' => 'E02003679',
        '2AN' => 'E02003677',
        '2AP' => 'E02003679',
        '2AQ' => 'E02003679',
        '2AR' => 'E02003679',
        '2AS' => 'E02003677',
        '2AT' => 'E02003677',
        '2AU' => 'E02003677',
        '2AW' => 'E02003679',
        '2AX' => 'E02003677',
        '2AY' => 'E02003677',
        '2AZ' => 'E02003677',
        '2BA' => 'E02003677',
        '2BB' => 'E02003677',
        '2BD' => 'E02003677',
        '2BE' => 'E02003677',
        '2BF' => 'E02003677',
        '2BG' => 'E02003677',
        '2BH' => 'E02003678',
        '2BJ' => 'E02003677',
        '2BL' => 'E02003677',
        '2BN' => 'E02003677',
        '2BP' => 'E02003677',
        '2BQ' => 'E02003677',
        '2BS' => 'E02003677',
        '2BT' => 'E02003677',
        '2BU' => 'E02003677',
        '2BW' => 'E02003677',
        '2BX' => 'E02003677',
        '2BY' => 'E02003677',
        '2BZ' => 'E02003677',
        '2DA' => 'E02003677',
        '2DB' => 'E02003677',
        '2DD' => 'E02003677',
        '2DE' => 'E02003677',
        '2DF' => 'E02003677',
        '2DG' => 'E02003677',
        '2DH' => 'E02003677',
        '2DJ' => 'E02003677',
        '2DL' => 'E02003677',
        '2DN' => 'E02003677',
        '2DP' => 'E02003677',
        '2DQ' => 'E02003677',
        '2DR' => 'E02003677',
        '2DS' => 'E02003677',
        '2DT' => 'E02003677',
        '2DU' => 'E02003677',
        '2DW' => 'E02003677',
        '2DX' => 'E02003677',
        '2DY' => 'E02003677',
        '2DZ' => 'E02003677',
        '2EA' => 'E02003677',
        '2EB' => 'E02003677',
        '2ED' => 'E02003677',
        '2EE' => 'E02003677',
        '2EF' => 'E02003677',
        '2EG' => 'E02003677',
        '2EH' => 'E02003677',
        '2EJ' => 'E02003677',
        '2EL' => 'E02003677',
        '2EN' => 'E02003677',
        '2EP' => 'E02003677',
        '2EQ' => 'E02003677',
        '2ER' => 'E02003677',
        '2ES' => 'E02003677',
        '2ET' => 'E02003677',
        '2EU' => 'E02003677',
        '2EW' => 'E02003677',
        '2EX' => 'E02003677',
        '2EY' => 'E02003677',
        '2EZ' => 'E02003677',
        '2FB' => 'E02003677',
        '2FD' => 'E02003677',
        '2FE' => 'E02003677',
        '2FF' => 'E02003677',
        '2FG' => 'E02003679',
        '2FH' => 'E02003677',
        '2FJ' => 'E02003677',
        '2FL' => 'E02003677',
        '2FN' => 'E02003677',
        '2FP' => 'E02003677',
        '2FQ' => 'E02003677',
        '2FR' => 'E02003677',
        '2FS' => 'E02003677',
        '2FT' => 'E02003677',
        '2FU' => 'E02003677',
        '2FW' => 'E02003677',
        '2FX' => 'E02003677',
        '2FY' => 'E02003677',
        '2FZ' => 'E02003677',
        '2GA' => 'E02003677',
        '2GB' => 'E02003677',
        '2GD' => 'E02003677',
        '2GE' => 'E02003677',
        '2GF' => 'E02003677',
        '2GG' => 'E02003677',
        '2GH' => 'E02003677',
        '2GJ' => 'E02003677',
        '2GL' => 'E02003677',
        '2GP' => 'E02003677',
        '2GQ' => 'E02003678',
        '2GU' => 'E02003677',
        '2GW' => 'E02003677',
        '2GX' => 'E02003677',
        '2GY' => 'E02003677',
        '2GZ' => 'E02003677',
        '2HA' => 'E02003677',
        '2HB' => 'E02003677',
        '2HD' => 'E02003677',
        '2HE' => 'E02003679',
        '2HF' => 'E02003677',
        '2HG' => 'E02003679',
        '2HH' => 'E02003677',
        '2HJ' => 'E02003677',
        '2HL' => 'E02003677',
        '2HN' => 'E02003677',
        '2HP' => 'E02003677',
        '2HQ' => 'E02003679',
        '2HR' => 'E02003677',
        '2HS' => 'E02003677',
        '2HT' => 'E02003677',
        '2HU' => 'E02003677',
        '2HW' => 'E02003677',
        '2HX' => 'E02003677',
        '2HY' => 'E02003677',
        '2HZ' => 'E02003677',
        '2JA' => 'E02003677',
        '2JB' => 'E02003679',
        '2JD' => 'E02003679',
        '2JE' => 'E02003677',
        '2JF' => 'E02003677',
        '2JG' => 'E02003677',
        '2JH' => 'E02003677',
        '2JJ' => 'E02003677',
        '2JL' => 'E02003677',
        '2JN' => 'E02003677',
        '2JP' => 'E02003677',
        '2JQ' => 'E02003677',
        '2JR' => 'E02003677',
        '2JS' => 'E02003679',
        '2JT' => 'E02003679',
        '2JU' => 'E02003679',
        '2JW' => 'E02003679',
        '2JX' => 'E02003679',
        '2JY' => 'E02003679',
        '2JZ' => 'E02003679',
        '2LA' => 'E02003679',
        '2LB' => 'E02003677',
        '2LD' => 'E02003677',
        '2LE' => 'E02003677',
        '2LF' => 'E02003677',
        '2LG' => 'E02003677',
        '2LH' => 'E02003677',
        '2LJ' => 'E02003677',
        '2LL' => 'E02003677',
        '2LN' => 'E02003677',
        '2LP' => 'E02003677',
        '2LQ' => 'E02003677',
        '2LR' => 'E02003677',
        '2LS' => 'E02003677',
        '2LT' => 'E02003677',
        '2LU' => 'E02003677',
        '2LW' => 'E02003677',
        '2LX' => 'E02003677',
        '2LY' => 'E02003677',
        '2LZ' => 'E02003677',
        '2NA' => 'E02003677',
        '2NB' => 'E02003677',
        '2ND' => 'E02003677',
        '2NE' => 'E02003677',
        '2NF' => 'E02003677',
        '2NG' => 'E02003677',
        '2NH' => 'E02003677',
        '2NJ' => 'E02003677',
        '2NL' => 'E02003677',
        '2NN' => 'E02003677',
        '2NP' => 'E02003677',
        '2NQ' => 'E02003677',
        '2NR' => 'E02003677',
        '2NS' => 'E02003677',
        '2NT' => 'E02003677',
        '2NU' => 'E02003677',
        '2NW' => 'E02003679',
        '2NX' => 'E02003677',
        '2NY' => 'E02003677',
        '2NZ' => 'E02003677',
        '2PA' => 'E02003677',
        '2PB' => 'E02003677',
        '2PD' => 'E02003677',
        '2PE' => 'E02003677',
        '2PF' => 'E02003677',
        '2PG' => 'E02003677',
        '2PH' => 'E02003677',
        '2PJ' => 'E02003677',
        '2PL' => 'E02003677',
        '2PN' => 'E02003677',
        '2PP' => 'E02003677',
        '2PQ' => 'E02003677',
        '2PR' => 'E02003677',
        '2PS' => 'E02003677',
        '2PT' => 'E02003677',
        '2PU' => 'E02003677',
        '2PW' => 'E02003677',
        '2PX' => 'E02003677',
        '2PY' => 'E02003677',
        '2PZ' => 'E02003677',
        '2QA' => 'E02003677',
        '2QB' => 'E02003677',
        '2QD' => 'E02003677',
        '2QE' => 'E02003677',
        '2QF' => 'E02003677',
        '2QG' => 'E02003677',
        '2QH' => 'E02003677',
        '2QJ' => 'E02003677',
        '2QL' => 'E02003677',
        '2QN' => 'E02003677',
        '2QP' => 'E02003677',
        '2QQ' => 'E02003677',
        '2QR' => 'E02003677',
        '2QS' => 'E02003677',
        '2QT' => 'E02003677',
        '2QU' => 'E02003677',
        '2QW' => 'E02003677',
        '2QX' => 'E02003677',
        '2QY' => 'E02003677',
        '2QZ' => 'E02003677',
        '2RA' => 'E02003677',
        '2RB' => 'E02003677',
        '2RD' => 'E02003677',
        '2RE' => 'E02003677',
        '2RF' => 'E02003677',
        '2RG' => 'E02003677',
        '2RH' => 'E02003677',
        '2RJ' => 'E02003677',
        '2RL' => 'E02003677',
        '2RN' => 'E02003677',
        '2RP' => 'E02003677',
        '2RQ' => 'E02003677',
        '2RR' => 'E02003677',
        '2RS' => 'E02003677',
        '2RT' => 'E02003677',
        '2RU' => 'E02003677',
        '2RW' => 'E02003677',
        '2RX' => 'E02003676',
        '2RY' => 'E02003676',
        '2RZ' => 'E02003677',
        '2SA' => 'E02003677',
        '2SB' => 'E02003677',
        '2SD' => 'E02003677',
        '2SE' => 'E02003677',
        '2SF' => 'E02003677',
        '2SG' => 'E02003677',
        '2SH' => 'E02003676',
        '2SJ' => 'E02003676',
        '2SL' => 'E02003676',
        '2SN' => 'E02003676',
        '2SP' => 'E02003677',
        '2SQ' => 'E02003676',
        '2SR' => 'E02003677',
        '2SS' => 'E02003679',
        '2ST' => 'E02003676',
        '2SU' => 'E02003676',
        '2SW' => 'E02003677',
        '2SX' => 'E02003676',
        '2SY' => 'E02003676',
        '2SZ' => 'E02003676',
        '2TA' => 'E02003676',
        '2TB' => 'E02003676',
        '2TD' => 'E02003676',
        '2TE' => 'E02003676',
        '2TF' => 'E02003676',
        '2TG' => 'E02003676',
        '2TH' => 'E02003676',
        '2TJ' => 'E02003676',
        '2TL' => 'E02003676',
        '2TN' => 'E02003676',
        '2TP' => 'E02003677',
        '2TQ' => 'E02003676',
        '2TR' => 'E02003676',
        '2TS' => 'E02003676',
        '2TT' => 'E02003676',
        '2TU' => 'E02003676',
        '2TW' => 'E02003676',
        '2TX' => 'E02003676',
        '2TY' => 'E02003676',
        '2TZ' => 'E02003676',
        '2UA' => 'E02003676',
        '2UB' => 'E02003677',
        '2UD' => 'E02003676',
        '2UE' => 'E02003677',
        '2UF' => 'E02003677',
        '2UG' => 'E02003676',
        '2UH' => 'E02003676',
        '2UJ' => 'E02003676',
        '2UL' => 'E02003676',
        '2UN' => 'E02003676',
        '2UP' => 'E02003676',
        '2UQ' => 'E02003676',
        '2UR' => 'E02003676',
        '2US' => 'E02003677',
        '2UT' => 'E02003676',
        '2UU' => 'E02003676',
        '2UW' => 'E02003676',
        '2UX' => 'E02003676',
        '2UY' => 'E02003676',
        '2UZ' => 'E02003676',
        '2WA' => 'E02003677',
        '2WB' => 'E02003677',
        '2WD' => 'E02003677',
        '2WE' => 'E02003677',
        '2WF' => 'E02003677',
        '2WG' => 'E02003677',
        '2WH' => 'E02003677',
        '2WJ' => 'E02003677',
        '2WL' => 'E02003677',
        '2WN' => 'E02003677',
        '2WP' => 'E02003677',
        '2WQ' => 'E02003677',
        '2WR' => 'E02003677',
        '2WS' => 'E02003677',
        '2WT' => 'E02003677',
        '2WU' => 'E02003677',
        '2WW' => 'E02003677',
        '2WX' => 'E02003677',
        '2WY' => 'E02003677',
        '2WZ' => 'E02003677',
        '2XA' => 'E02003676',
        '2XB' => 'E02003676',
        '2XD' => 'E02003676',
        '2XE' => 'E02003677',
        '2XF' => 'E02003677',
        '2XG' => 'E02003677',
        '2XH' => 'E02003677',
        '2XJ' => 'E02003676',
        '2XL' => 'E02003676',
        '2XN' => 'E02003676',
        '2XP' => 'E02003676',
        '2XQ' => 'E02003677',
        '2XR' => 'E02003676',
        '2XS' => 'E02003676',
        '2XT' => 'E02003676',
        '2XU' => 'E02003676',
        '2XW' => 'E02003676',
        '2XX' => 'E02003676',
        '2XY' => 'E02003677',
        '2XZ' => 'E02003677',
        '2YA' => 'E02003679',
        '2YB' => 'E02003679',
        '2YD' => 'E02003676',
        '2YE' => 'E02003676',
        '2YF' => 'E02003679',
        '2YG' => 'E02003676',
        '2YH' => 'E02003677',
        '2YJ' => 'E02003677',
        '2YL' => 'E02003677',
        '2YN' => 'E02003676',
        '2YP' => 'E02003677',
        '2YQ' => 'E02003676',
        '2YR' => 'E02003676',
        '2YS' => 'E02003677',
        '2YT' => 'E02003679',
        '2YU' => 'E02003677',
        '2YW' => 'E02003676',
        '2YY' => 'E02003677',
        '2ZA' => 'E02003677',
        '2ZB' => 'E02003676',
        '2ZD' => 'E02003676',
        '2ZG' => 'E02003677',
        '2ZH' => 'E02003677',
        '2ZJ' => 'E02003677',
        '2ZL' => 'E02003677',
        '2ZN' => 'E02003677',
        '2ZQ' => 'E02003677',
        '2ZR' => 'E02003677',
        '2ZU' => 'E02003677',
        '2ZX' => 'E02003677',
        '3AA' => 'E02003679',
        '3AB' => 'E02003679',
        '3AD' => 'E02003679',
        '3AE' => 'E02003679',
        '3AF' => 'E02003679',
        '3AG' => 'E02003679',
        '3AH' => 'E02003679',
        '3AJ' => 'E02003679',
        '3AL' => 'E02003678',
        '3AN' => 'E02003678',
        '3AP' => 'E02003678',
        '3AQ' => 'E02003679',
        '3AR' => 'E02003678',
        '3AS' => 'E02003678',
        '3AT' => 'E02003678',
        '3AU' => 'E02003678',
        '3AW' => 'E02003678',
        '3AX' => 'E02003679',
        '3AY' => 'E02003679',
        '3AZ' => 'E02003678',
        '3BA' => 'E02003678',
        '3BB' => 'E02003678',
        '3BD' => 'E02003678',
        '3BE' => 'E02003678',
        '3BF' => 'E02003678',
        '3BG' => 'E02003678',
        '3BH' => 'E02003678',
        '3BJ' => 'E02003678',
        '3BL' => 'E02003678',
        '3BN' => 'E02003678',
        '3BP' => 'E02003678',
        '3BQ' => 'E02003678',
        '3BS' => 'E02003678',
        '3BT' => 'E02003678',
        '3BU' => 'E02003678',
        '3BW' => 'E02003678',
        '3BX' => 'E02003678',
        '3BY' => 'E02003678',
        '3BZ' => 'E02003678',
        '3DA' => 'E02003678',
        '3DB' => 'E02003678',
        '3DD' => 'E02003678',
        '3DE' => 'E02003678',
        '3DF' => 'E02003678',
        '3DG' => 'E02003677',
        '3DH' => 'E02003678',
        '3DJ' => 'E02003678',
        '3DL' => 'E02003678',
        '3DN' => 'E02003678',
        '3DP' => 'E02003678',
        '3DQ' => 'E02003678',
        '3DR' => 'E02003678',
        '3DS' => 'E02003678',
        '3DT' => 'E02003677',
        '3DU' => 'E02003677',
        '3DW' => 'E02003678',
        '3DX' => 'E02003679',
        '3DY' => 'E02003679',
        '3DZ' => 'E02003679',
        '3EA' => 'E02003679',
        '3EB' => 'E02003677',
        '3ED' => 'E02003679',
        '3EE' => 'E02003678',
        '3EF' => 'E02003679',
        '3EG' => 'E02003678',
        '3EH' => 'E02003678',
        '3EJ' => 'E02003678',
        '3EL' => 'E02003678',
        '3EN' => 'E02003678',
        '3EP' => 'E02003678',
        '3EQ' => 'E02003678',
        '3ER' => 'E02003678',
        '3ES' => 'E02003678',
        '3ET' => 'E02003678',
        '3EU' => 'E02003678',
        '3EW' => 'E02003678',
        '3EX' => 'E02003677',
        '3EY' => 'E02003677',
        '3EZ' => 'E02003678',
        '3FA' => 'E02003677',
        '3FB' => 'E02003677',
        '3FD' => 'E02003678',
        '3FE' => 'E02003678',
        '3FF' => 'E02003679',
        '3FG' => 'E02003678',
        '3FH' => 'E02003678',
        '3FJ' => 'E02003676',
        '3GA' => 'E02003676',
        '3HA' => 'E02003678',
        '3HB' => 'E02003677',
        '3HD' => 'E02003677',
        '3HE' => 'E02003678',
        '3HF' => 'E02003678',
        '3HG' => 'E02003678',
        '3HH' => 'E02003677',
        '3HJ' => 'E02003677',
        '3HL' => 'E02003677',
        '3HN' => 'E02003677',
        '3HP' => 'E02003677',
        '3HQ' => 'E02003678',
        '3HR' => 'E02003677',
        '3HS' => 'E02003677',
        '3HT' => 'E02003677',
        '3HU' => 'E02003677',
        '3HW' => 'E02003677',
        '3HX' => 'E02003678',
        '3HY' => 'E02003678',
        '3HZ' => 'E02003678',
        '3JA' => 'E02003678',
        '3JB' => 'E02003678',
        '3JD' => 'E02003678',
        '3JE' => 'E02003678',
        '3JF' => 'E02003678',
        '3JG' => 'E02003678',
        '3JH' => 'E02003678',
        '3JJ' => 'E02003678',
        '3JL' => 'E02003678',
        '3JN' => 'E02003678',
        '3JP' => 'E02003678',
        '3JQ' => 'E02003678',
        '3JR' => 'E02003678',
        '3JS' => 'E02003677',
        '3JT' => 'E02003678',
        '3JU' => 'E02003678',
        '3JW' => 'E02003678',
        '3JX' => 'E02003678',
        '3JY' => 'E02003678',
        '3JZ' => 'E02003678',
        '3LA' => 'E02003678',
        '3LB' => 'E02003678',
        '3LD' => 'E02003678',
        '3LE' => 'E02003678',
        '3LF' => 'E02003678',
        '3LG' => 'E02003676',
        '3LH' => 'E02003678',
        '3LJ' => 'E02003678',
        '3LL' => 'E02003678',
        '3LN' => 'E02003678',
        '3LP' => 'E02003678',
        '3LQ' => 'E02003678',
        '3LR' => 'E02003678',
        '3LS' => 'E02003678',
        '3LT' => 'E02003678',
        '3LU' => 'E02003678',
        '3LW' => 'E02003678',
        '3LX' => 'E02003678',
        '3LZ' => 'E02003678',
        '3NA' => 'E02003678',
        '3NB' => 'E02003678',
        '3NE' => 'E02003678',
        '3NF' => 'E02003678',
        '3NH' => 'E02003678',
        '3NJ' => 'E02003676',
        '3NL' => 'E02003677',
        '3NP' => 'E02003677',
        '3NQ' => 'E02003678',
        '3NR' => 'E02003676',
        '3NS' => 'E02003676',
        '3NT' => 'E02003676',
        '3NU' => 'E02003676',
        '3NX' => 'E02003676',
        '3NY' => 'E02003676',
        '3NZ' => 'E02003676',
        '3PA' => 'E02003676',
        '3PD' => 'E02003676',
        '3PE' => 'E02003678',
        '3PF' => 'E02003678',
        '3PG' => 'E02003678',
        '3PH' => 'E02003676',
        '3PJ' => 'E02003676',
        '3PL' => 'E02003676',
        '3PN' => 'E02003676',
        '3PP' => 'E02003676',
        '3PQ' => 'E02003676',
        '3PR' => 'E02003676',
        '3PS' => 'E02003676',
        '3PT' => 'E02003676',
        '3PU' => 'E02003676',
        '3PW' => 'E02003676',
        '3PX' => 'E02003676',
        '3PY' => 'E02003676',
        '3PZ' => 'E02003676',
        '3QA' => 'E02003676',
        '3QB' => 'E02003676',
        '3QD' => 'E02003676',
        '3QE' => 'E02003676',
        '3QF' => 'E02003676',
        '3QG' => 'E02003676',
        '3QH' => 'E02003677',
        '3QJ' => 'E02003676',
        '3QL' => 'E02003676',
        '3QN' => 'E02003676',
        '3QP' => 'E02003676',
        '3QQ' => 'E02003676',
        '3QR' => 'E02003676',
        '3QS' => 'E02003676',
        '3QT' => 'E02003676',
        '3QU' => 'E02003676',
        '3QW' => 'E02003676',
        '3QX' => 'E02003676',
        '3QY' => 'E02003676',
        '3QZ' => 'E02003676',
        '3RA' => 'E02003676',
        '3RB' => 'E02003676',
        '3RD' => 'E02003676',
        '3RE' => 'E02003676',
        '3RG' => 'E02003676',
        '3RH' => 'E02003676',
        '3RJ' => 'E02003676',
        '3RL' => 'E02003676',
        '3RN' => 'E02003676',
        '3RP' => 'E02003676',
        '3RQ' => 'E02003676',
        '3RR' => 'E02003676',
        '3RS' => 'E02003676',
        '3RT' => 'E02003678',
        '3RU' => 'E02003676',
        '3RW' => 'E02003676',
        '3RX' => 'E02003676',
        '3RY' => 'E02003676',
        '3SA' => 'E02003678',
        '3SB' => 'E02003677',
        '3SD' => 'E02003678',
        '3SH' => 'E02003677',
        '3SJ' => 'E02003677',
        '3SL' => 'E02003677',
        '3SR' => 'E02003678',
        '3SS' => 'E02003678',
        '3ST' => 'E02003678',
        '3SZ' => 'E02003677',
        '3TA' => 'E02003678',
        '3TB' => 'E02003677',
        '3TD' => 'E02003678',
        '3UW' => 'E02003677',
        '3UX' => 'E02003677',
        '3UY' => 'E02003677',
        '3UZ' => 'E02003677',
        '3WA' => 'E02003677',
        '3WB' => 'E02003677',
        '3WD' => 'E02003677',
        '3WE' => 'E02003677',
        '3WF' => 'E02003677',
        '3WG' => 'E02003677',
        '3WH' => 'E02003677',
        '3WJ' => 'E02003677',
        '3WL' => 'E02003677',
        '3WN' => 'E02003677',
        '3WP' => 'E02003677',
        '3WQ' => 'E02003677',
        '3WR' => 'E02003677',
        '3WS' => 'E02003677',
        '3WT' => 'E02003679',
        '3WU' => 'E02003677',
        '3WW' => 'E02003677',
        '3WX' => 'E02003677',
        '3WY' => 'E02003677',
        '3WZ' => 'E02003677',
        '3XA' => 'E02003677',
        '3XB' => 'E02003678',
        '3XD' => 'E02003678',
        '3XE' => 'E02003677',
        '3XF' => 'E02003677',
        '3XG' => 'E02003677',
        '3XH' => 'E02003678',
        '3XJ' => 'E02003677',
        '3XL' => 'E02003677',
        '3XN' => 'E02003677',
        '3XP' => 'E02003677',
        '3XQ' => 'E02003677',
        '3XR' => 'E02003677',
        '3XS' => 'E02003677',
        '3XT' => 'E02003677',
        '3XU' => 'E02003677',
        '3XW' => 'E02003677',
        '3XX' => 'E02003677',
        '3XY' => 'E02003677',
        '3XZ' => 'E02003677',
        '3YA' => 'E02003677',
        '3YB' => 'E02003677',
        '3YD' => 'E02003677',
        '3YT' => 'E02003677',
        '3YU' => 'E02003677',
        '3YX' => 'E02003677',
        '3ZR' => 'E02003677',
        '3ZX' => 'E02003677',
        '9AD' => 'E02003677',
        '9AE' => 'E02003677',
        '9AG' => 'E02003677',
        '9AQ' => 'E02003677',
        '9AS' => 'E02003677',
        '9AX' => 'E02003677',
        '9AY' => 'E02003677',
        '9AZ' => 'E02003677',
        '9BA' => 'E02003677',
        '9BB' => 'E02003677',
        '9BD' => 'E02003677',
        '9BE' => 'E02003677',
        '9BF' => 'E02003677',
        '9BG' => 'E02003677',
        '9BH' => 'E02003677',
        '9BJ' => 'E02003677',
        '9BL' => 'E02003677',
        '9BN' => 'E02003677',
        '9BP' => 'E02003677',
        '9BQ' => 'E02003677',
        '9BR' => 'E02003677',
        '9BS' => 'E02003677',
        '9BT' => 'E02003677',
        '9BU' => 'E02003677',
        '9BW' => 'E02003677',
        '9BX' => 'E02003677',
        '9BY' => 'E02003677',
        '9BZ' => 'E02003677',
        '9DA' => 'E02003677',
        '9DB' => 'E02003677',
        '9DD' => 'E02003677',
        '9DF' => 'E02003677',
        '9DG' => 'E02003677',
        '9DH' => 'E02003677',
        '9DJ' => 'E02003677',
        '9DL' => 'E02003677',
        '9DN' => 'E02003677',
        '9DP' => 'E02003677',
        '9DQ' => 'E02003677',
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