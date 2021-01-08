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
final class SE4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000667',
        '1AB' => 'E02000667',
        '1AD' => 'E02000667',
        '1AE' => 'E02000667',
        '1AF' => 'E02000667',
        '1AG' => 'E02000667',
        '1AJ' => 'E02000671',
        '1AL' => 'E02000671',
        '1AN' => 'E02000671',
        '1AP' => 'E02000671',
        '1AQ' => 'E02000667',
        '1AR' => 'E02000667',
        '1AS' => 'E02000667',
        '1AT' => 'E02000667',
        '1AU' => 'E02000671',
        '1AW' => 'E02000667',
        '1AX' => 'E02000660',
        '1AZ' => 'E02000667',
        '1BA' => 'E02000657',
        '1BB' => 'E02000667',
        '1BD' => 'E02000657',
        '1BE' => 'E02000657',
        '1BG' => 'E02000657',
        '1BH' => 'E02000657',
        '1BJ' => 'E02000657',
        '1BL' => 'E02000657',
        '1BN' => 'E02000657',
        '1BP' => 'E02000657',
        '1BQ' => 'E02000657',
        '1BS' => 'E02000657',
        '1BT' => 'E02000657',
        '1BU' => 'E02000657',
        '1BW' => 'E02000657',
        '1BX' => 'E02000657',
        '1BY' => 'E02000657',
        '1BZ' => 'E02000657',
        '1DA' => 'E02000657',
        '1DB' => 'E02000657',
        '1DD' => 'E02000657',
        '1DE' => 'E02000657',
        '1DF' => 'E02000657',
        '1DG' => 'E02000657',
        '1DH' => 'E02000657',
        '1DJ' => 'E02000657',
        '1DL' => 'E02000657',
        '1DN' => 'E02000657',
        '1DP' => 'E02000657',
        '1DQ' => 'E02000657',
        '1DR' => 'E02000657',
        '1DS' => 'E02000657',
        '1DT' => 'E02000667',
        '1DU' => 'E02000667',
        '1DW' => 'E02000657',
        '1DX' => 'E02000667',
        '1DY' => 'E02000667',
        '1DZ' => 'E02000667',
        '1EA' => 'E02000666',
        '1EB' => 'E02000666',
        '1ED' => 'E02000666',
        '1EE' => 'E02000666',
        '1EF' => 'E02000666',
        '1EG' => 'E02000666',
        '1EH' => 'E02000667',
        '1EJ' => 'E02000667',
        '1EL' => 'E02000667',
        '1EN' => 'E02000667',
        '1EP' => 'E02000667',
        '1EQ' => 'E02000667',
        '1ER' => 'E02000667',
        '1ES' => 'E02000667',
        '1ET' => 'E02000667',
        '1EU' => 'E02000667',
        '1EW' => 'E02000667',
        '1EX' => 'E02000667',
        '1EZ' => 'E02000657',
        '1FX' => 'E02000660',
        '1FZ' => 'E02000660',
        '1GA' => 'E02000660',
        '1GB' => 'E02000660',
        '1GD' => 'E02000660',
        '1GE' => 'E02000660',
        '1GF' => 'E02000660',
        '1GG' => 'E02000660',
        '1GH' => 'E02000660',
        '1GJ' => 'E02000660',
        '1GL' => 'E02000660',
        '1GN' => 'E02000660',
        '1GP' => 'E02000660',
        '1GQ' => 'E02000660',
        '1GR' => 'E02000660',
        '1GS' => 'E02000660',
        '1GT' => 'E02000660',
        '1GU' => 'E02000660',
        '1GW' => 'E02000660',
        '1GX' => 'E02000660',
        '1GY' => 'E02000660',
        '1GZ' => 'E02000660',
        '1HA' => 'E02000666',
        '1HD' => 'E02000666',
        '1HE' => 'E02000660',
        '1HF' => 'E02000666',
        '1HG' => 'E02000666',
        '1HH' => 'E02000666',
        '1HJ' => 'E02000666',
        '1HL' => 'E02000666',
        '1HN' => 'E02000666',
        '1HP' => 'E02000666',
        '1HQ' => 'E02000666',
        '1HR' => 'E02000667',
        '1HS' => 'E02000666',
        '1HT' => 'E02000666',
        '1HU' => 'E02000666',
        '1HW' => 'E02000666',
        '1HX' => 'E02000666',
        '1HY' => 'E02000666',
        '1HZ' => 'E02000666',
        '1JA' => 'E02000666',
        '1JB' => 'E02000666',
        '1JD' => 'E02000666',
        '1JE' => 'E02000666',
        '1JF' => 'E02000666',
        '1JG' => 'E02000666',
        '1JH' => 'E02000666',
        '1JJ' => 'E02000666',
        '1JL' => 'E02000666',
        '1JN' => 'E02000666',
        '1JP' => 'E02000666',
        '1JQ' => 'E02000666',
        '1JR' => 'E02000666',
        '1JS' => 'E02000666',
        '1JT' => 'E02000666',
        '1JU' => 'E02000666',
        '1JW' => 'E02000666',
        '1JX' => 'E02000666',
        '1JY' => 'E02000666',
        '1JZ' => 'E02000666',
        '1LA' => 'E02000666',
        '1LB' => 'E02000666',
        '1LD' => 'E02000666',
        '1LE' => 'E02000666',
        '1LF' => 'E02000666',
        '1LG' => 'E02000666',
        '1LJ' => 'E02000660',
        '1LL' => 'E02000660',
        '1LN' => 'E02000660',
        '1LP' => 'E02000660',
        '1LQ' => 'E02000660',
        '1LR' => 'E02000660',
        '1LS' => 'E02000660',
        '1LT' => 'E02000660',
        '1LU' => 'E02000660',
        '1LW' => 'E02000660',
        '1LX' => 'E02000660',
        '1LY' => 'E02000660',
        '1LZ' => 'E02000660',
        '1NA' => 'E02000660',
        '1NB' => 'E02000660',
        '1ND' => 'E02000660',
        '1NE' => 'E02000660',
        '1NF' => 'E02000660',
        '1NG' => 'E02000660',
        '1NH' => 'E02000660',
        '1NJ' => 'E02000660',
        '1NL' => 'E02000660',
        '1NN' => 'E02000660',
        '1NP' => 'E02000660',
        '1NQ' => 'E02000660',
        '1NR' => 'E02000660',
        '1NS' => 'E02000660',
        '1NT' => 'E02000660',
        '1NU' => 'E02000660',
        '1NW' => 'E02000660',
        '1NX' => 'E02000660',
        '1NY' => 'E02000660',
        '1NZ' => 'E02000660',
        '1PA' => 'E02000660',
        '1PB' => 'E02000657',
        '1PD' => 'E02000657',
        '1PE' => 'E02000657',
        '1PF' => 'E02000660',
        '1PG' => 'E02000660',
        '1PH' => 'E02000660',
        '1PJ' => 'E02000660',
        '1PL' => 'E02000660',
        '1PN' => 'E02000660',
        '1PP' => 'E02000660',
        '1PQ' => 'E02000657',
        '1PR' => 'E02000657',
        '1PS' => 'E02000657',
        '1PT' => 'E02000660',
        '1PU' => 'E02000660',
        '1PW' => 'E02000660',
        '1PX' => 'E02000660',
        '1PY' => 'E02000660',
        '1PZ' => 'E02000660',
        '1QA' => 'E02000663',
        '1QB' => 'E02000660',
        '1QD' => 'E02000663',
        '1QE' => 'E02000663',
        '1QF' => 'E02000663',
        '1QG' => 'E02000660',
        '1QH' => 'E02000660',
        '1QJ' => 'E02000660',
        '1QL' => 'E02000663',
        '1QN' => 'E02000660',
        '1QP' => 'E02000660',
        '1QQ' => 'E02000660',
        '1QR' => 'E02000660',
        '1QS' => 'E02000667',
        '1QT' => 'E02000667',
        '1QU' => 'E02000660',
        '1QW' => 'E02000660',
        '1QX' => 'E02000667',
        '1QY' => 'E02000667',
        '1QZ' => 'E02000667',
        '1RA' => 'E02000667',
        '1RB' => 'E02000667',
        '1RD' => 'E02000667',
        '1RE' => 'E02000667',
        '1RF' => 'E02000667',
        '1RG' => 'E02000667',
        '1RH' => 'E02000667',
        '1RJ' => 'E02000667',
        '1RL' => 'E02000667',
        '1RN' => 'E02000667',
        '1RP' => 'E02000660',
        '1RQ' => 'E02000667',
        '1RR' => 'E02000666',
        '1RS' => 'E02000667',
        '1RT' => 'E02000660',
        '1RU' => 'E02000667',
        '1RW' => 'E02000660',
        '1RX' => 'E02000667',
        '1RY' => 'E02000667',
        '1RZ' => 'E02000667',
        '1SA' => 'E02000667',
        '1SB' => 'E02000667',
        '1SD' => 'E02000667',
        '1SE' => 'E02000667',
        '1SF' => 'E02000667',
        '1SG' => 'E02000667',
        '1SH' => 'E02000667',
        '1SJ' => 'E02000667',
        '1SL' => 'E02000667',
        '1SN' => 'E02000666',
        '1SP' => 'E02000660',
        '1SQ' => 'E02000667',
        '1SR' => 'E02000660',
        '1SS' => 'E02000657',
        '1ST' => 'E02000657',
        '1SU' => 'E02000657',
        '1SW' => 'E02000660',
        '1SX' => 'E02000657',
        '1SY' => 'E02000657',
        '1SZ' => 'E02000657',
        '1TA' => 'E02000660',
        '1TB' => 'E02000657',
        '1TD' => 'E02000657',
        '1TE' => 'E02000657',
        '1TF' => 'E02000657',
        '1TG' => 'E02000657',
        '1TH' => 'E02000660',
        '1TJ' => 'E02000660',
        '1TL' => 'E02000660',
        '1TN' => 'E02000657',
        '1TP' => 'E02000660',
        '1TQ' => 'E02000660',
        '1TR' => 'E02000660',
        '1TS' => 'E02000660',
        '1TT' => 'E02000660',
        '1TU' => 'E02000660',
        '1TW' => 'E02000660',
        '1TX' => 'E02000663',
        '1TY' => 'E02000663',
        '1TZ' => 'E02000666',
        '1UA' => 'E02000660',
        '1UB' => 'E02000660',
        '1UD' => 'E02000660',
        '1UE' => 'E02000660',
        '1UF' => 'E02000660',
        '1UG' => 'E02000660',
        '1UH' => 'E02000660',
        '1UJ' => 'E02000660',
        '1UL' => 'E02000660',
        '1UN' => 'E02000660',
        '1UP' => 'E02000660',
        '1UQ' => 'E02000660',
        '1UR' => 'E02000660',
        '1US' => 'E02000660',
        '1UT' => 'E02000660',
        '1UU' => 'E02000657',
        '1UW' => 'E02000660',
        '1UX' => 'E02000660',
        '1UY' => 'E02000657',
        '1UZ' => 'E02000660',
        '1WA' => 'E02000660',
        '1WB' => 'E02000660',
        '1WD' => 'E02000660',
        '1WE' => 'E02000660',
        '1WF' => 'E02000660',
        '1WG' => 'E02000660',
        '1WH' => 'E02000660',
        '1WJ' => 'E02000660',
        '1WL' => 'E02000660',
        '1WN' => 'E02000660',
        '1WP' => 'E02000660',
        '1WQ' => 'E02000660',
        '1WR' => 'E02000660',
        '1WS' => 'E02000660',
        '1WT' => 'E02000660',
        '1WU' => 'E02000660',
        '1WW' => 'E02000660',
        '1WX' => 'E02000660',
        '1WY' => 'E02000660',
        '1WZ' => 'E02000660',
        '1XA' => 'E02000657',
        '1XB' => 'E02000660',
        '1XD' => 'E02000660',
        '1XE' => 'E02000660',
        '1XF' => 'E02000660',
        '1XG' => 'E02000660',
        '1XH' => 'E02000660',
        '1XJ' => 'E02000660',
        '1XL' => 'E02000660',
        '1XN' => 'E02000660',
        '1XP' => 'E02000660',
        '1XQ' => 'E02000660',
        '1XR' => 'E02000660',
        '1XS' => 'E02000660',
        '1XT' => 'E02000660',
        '1XU' => 'E02000660',
        '1XW' => 'E02000660',
        '1XX' => 'E02000663',
        '1XY' => 'E02000663',
        '1XZ' => 'E02000663',
        '1YA' => 'E02000660',
        '1YB' => 'E02000660',
        '1YD' => 'E02000660',
        '1YE' => 'E02000660',
        '1YF' => 'E02000660',
        '1YG' => 'E02000660',
        '1YH' => 'E02000660',
        '1YJ' => 'E02000660',
        '1YL' => 'E02000666',
        '1YN' => 'E02000666',
        '1YP' => 'E02000666',
        '1YQ' => 'E02000660',
        '1YR' => 'E02000666',
        '1YS' => 'E02000666',
        '1YT' => 'E02000666',
        '1YU' => 'E02000666',
        '1YW' => 'E02000666',
        '1YX' => 'E02000666',
        '1YY' => 'E02000660',
        '1YZ' => 'E02000666',
        '1ZA' => 'E02000660',
        '1ZB' => 'E02000660',
        '1ZD' => 'E02000660',
        '1ZE' => 'E02000660',
        '1ZF' => 'E02000660',
        '1ZG' => 'E02000660',
        '1ZH' => 'E02000660',
        '1ZJ' => 'E02000660',
        '1ZL' => 'E02000660',
        '1ZN' => 'E02000660',
        '1ZP' => 'E02000660',
        '1ZQ' => 'E02000660',
        '1ZR' => 'E02000660',
        '1ZS' => 'E02000660',
        '1ZT' => 'E02000660',
        '1ZU' => 'E02000660',
        '1ZW' => 'E02000660',
        '1ZZ' => 'E02000666',
        '2AA' => 'E02000657',
        '2AB' => 'E02000657',
        '2AD' => 'E02000662',
        '2AE' => 'E02000662',
        '2AF' => 'E02000667',
        '2AG' => 'E02000667',
        '2AH' => 'E02000667',
        '2AJ' => 'E02000660',
        '2AL' => 'E02000666',
        '2AN' => 'E02000666',
        '2AP' => 'E02000666',
        '2AQ' => 'E02000667',
        '2AR' => 'E02000666',
        '2AS' => 'E02000666',
        '2AT' => 'E02000666',
        '2AU' => 'E02000667',
        '2AW' => 'E02000666',
        '2AX' => 'E02000666',
        '2AY' => 'E02000666',
        '2AZ' => 'E02000667',
        '2BA' => 'E02000667',
        '2BB' => 'E02000667',
        '2BD' => 'E02000667',
        '2BE' => 'E02000667',
        '2BF' => 'E02000662',
        '2BG' => 'E02000667',
        '2BH' => 'E02000667',
        '2BJ' => 'E02000667',
        '2BL' => 'E02000662',
        '2BN' => 'E02000662',
        '2BP' => 'E02000662',
        '2BQ' => 'E02000667',
        '2BS' => 'E02000667',
        '2BT' => 'E02000667',
        '2BU' => 'E02000667',
        '2BW' => 'E02000667',
        '2BX' => 'E02000667',
        '2BY' => 'E02000667',
        '2BZ' => 'E02000660',
        '2DA' => 'E02000667',
        '2DB' => 'E02000667',
        '2DD' => 'E02000667',
        '2DE' => 'E02000667',
        '2DF' => 'E02000662',
        '2DG' => 'E02000667',
        '2DH' => 'E02000667',
        '2DJ' => 'E02000835',
        '2DL' => 'E02000667',
        '2DN' => 'E02000662',
        '2DP' => 'E02000662',
        '2DQ' => 'E02000667',
        '2DR' => 'E02000662',
        '2DS' => 'E02000662',
        '2DT' => 'E02000662',
        '2DU' => 'E02000662',
        '2DW' => 'E02000662',
        '2DX' => 'E02000662',
        '2DY' => 'E02000662',
        '2DZ' => 'E02000662',
        '2EA' => 'E02000662',
        '2EB' => 'E02000662',
        '2ED' => 'E02000835',
        '2EE' => 'E02000832',
        '2EF' => 'E02000835',
        '2EG' => 'E02000662',
        '2EH' => 'E02000662',
        '2EJ' => 'E02000662',
        '2EL' => 'E02000662',
        '2EN' => 'E02000662',
        '2EP' => 'E02000662',
        '2EQ' => 'E02000662',
        '2ER' => 'E02000662',
        '2ES' => 'E02000662',
        '2ET' => 'E02000662',
        '2EU' => 'E02000662',
        '2EW' => 'E02000662',
        '2EX' => 'E02000662',
        '2EY' => 'E02000662',
        '2EZ' => 'E02000662',
        '2FA' => 'E02000660',
        '2FB' => 'E02000667',
        '2FD' => 'E02000835',
        '2FE' => 'E02000662',
        '2FF' => 'E02000662',
        '2FG' => 'E02000662',
        '2FH' => 'E02000662',
        '2FJ' => 'E02000662',
        '2FL' => 'E02000662',
        '2FN' => 'E02000662',
        '2FP' => 'E02000662',
        '2FQ' => 'E02000662',
        '2FR' => 'E02000662',
        '2FS' => 'E02000662',
        '2GZ' => 'E02000660',
        '2HA' => 'E02000662',
        '2HB' => 'E02000662',
        '2HD' => 'E02000662',
        '2HE' => 'E02000662',
        '2HF' => 'E02000662',
        '2HG' => 'E02000662',
        '2HH' => 'E02000662',
        '2HJ' => 'E02000662',
        '2HL' => 'E02000662',
        '2HN' => 'E02000662',
        '2HP' => 'E02000662',
        '2HQ' => 'E02000662',
        '2HR' => 'E02000662',
        '2HS' => 'E02000662',
        '2HT' => 'E02000662',
        '2HU' => 'E02000662',
        '2HW' => 'E02000662',
        '2HX' => 'E02000662',
        '2HY' => 'E02000662',
        '2HZ' => 'E02000662',
        '2JA' => 'E02000662',
        '2JB' => 'E02000662',
        '2JD' => 'E02000662',
        '2JE' => 'E02000662',
        '2JF' => 'E02000662',
        '2JG' => 'E02000662',
        '2JH' => 'E02000662',
        '2JJ' => 'E02000662',
        '2JL' => 'E02000662',
        '2JN' => 'E02000662',
        '2JP' => 'E02000662',
        '2JQ' => 'E02000662',
        '2JR' => 'E02000662',
        '2JS' => 'E02000662',
        '2JT' => 'E02000662',
        '2JU' => 'E02000662',
        '2JW' => 'E02000662',
        '2JX' => 'E02000662',
        '2JY' => 'E02000662',
        '2JZ' => 'E02000662',
        '2LA' => 'E02000662',
        '2LB' => 'E02000662',
        '2LD' => 'E02000662',
        '2LE' => 'E02000662',
        '2LF' => 'E02000662',
        '2LG' => 'E02000662',
        '2LH' => 'E02000662',
        '2LJ' => 'E02000662',
        '2LL' => 'E02000662',
        '2LN' => 'E02000662',
        '2LP' => 'E02000662',
        '2LQ' => 'E02000662',
        '2LR' => 'E02000662',
        '2LS' => 'E02000662',
        '2LT' => 'E02000662',
        '2LU' => 'E02000660',
        '2LW' => 'E02000662',
        '2LX' => 'E02000657',
        '2LY' => 'E02000662',
        '2LZ' => 'E02000662',
        '2NA' => 'E02000660',
        '2NB' => 'E02000657',
        '2ND' => 'E02000662',
        '2NE' => 'E02000662',
        '2NF' => 'E02000662',
        '2NG' => 'E02000662',
        '2NH' => 'E02000662',
        '2NJ' => 'E02000662',
        '2NL' => 'E02000662',
        '2NN' => 'E02000662',
        '2NP' => 'E02000662',
        '2NQ' => 'E02000662',
        '2NR' => 'E02000657',
        '2NS' => 'E02000658',
        '2NT' => 'E02000658',
        '2NU' => 'E02000662',
        '2NW' => 'E02000662',
        '2NX' => 'E02000662',
        '2NY' => 'E02000662',
        '2NZ' => 'E02000662',
        '2PA' => 'E02000662',
        '2PB' => 'E02000662',
        '2PD' => 'E02000662',
        '2PE' => 'E02000657',
        '2PF' => 'E02000666',
        '2PG' => 'E02000662',
        '2PH' => 'E02000667',
        '2PJ' => 'E02000667',
        '2PL' => 'E02000667',
        '2PN' => 'E02000662',
        '2PP' => 'E02000662',
        '2PQ' => 'E02000662',
        '2PR' => 'E02000662',
        '2PS' => 'E02000662',
        '2PT' => 'E02000662',
        '2PU' => 'E02000662',
        '2PW' => 'E02000662',
        '2PX' => 'E02000662',
        '2PY' => 'E02000662',
        '2PZ' => 'E02000662',
        '2QA' => 'E02000662',
        '2QB' => 'E02000662',
        '2QD' => 'E02000662',
        '2QE' => 'E02000662',
        '2QF' => 'E02000662',
        '2QG' => 'E02000662',
        '2QH' => 'E02000662',
        '2QJ' => 'E02000662',
        '2QL' => 'E02000660',
        '2QN' => 'E02000662',
        '2QQ' => 'E02000662',
        '2QR' => 'E02000660',
        '2QS' => 'E02000662',
        '2QW' => 'E02000667',
        '2QX' => 'E02000660',
        '2QY' => 'E02000666',
        '2QZ' => 'E02000666',
        '2RA' => 'E02000666',
        '2RB' => 'E02000666',
        '2RL' => 'E02000660',
        '2RN' => 'E02000660',
        '2RR' => 'E02000660',
        '2RS' => 'E02000660',
        '2RT' => 'E02000660',
        '2RU' => 'E02000660',
        '2RW' => 'E02000660',
        '2RX' => 'E02000660',
        '2RY' => 'E02000660',
        '2RZ' => 'E02000660',
        '2SA' => 'E02000666',
        '2SD' => 'E02000666',
        '2SE' => 'E02000666',
        '2SF' => 'E02000666',
        '2SG' => 'E02000666',
        '2SH' => 'E02000666',
        '2SJ' => 'E02000666',
        '2SL' => 'E02000666',
        '2SP' => 'E02000660',
        '2SQ' => 'E02000666',
        '2SR' => 'E02000660',
        '2SS' => 'E02000660',
        '2ST' => 'E02000660',
        '2SU' => 'E02000660',
        '2SW' => 'E02000666',
        '2SY' => 'E02000660',
        '2SZ' => 'E02000666',
        '2TZ' => 'E02000660',
        '2UA' => 'E02000660',
        '2UB' => 'E02000660',
        '2UD' => 'E02000660',
        '2UE' => 'E02000660',
        '2UF' => 'E02000660',
        '2UG' => 'E02000660',
        '2UH' => 'E02000660',
        '2UJ' => 'E02000660',
        '2UL' => 'E02000660',
        '2UN' => 'E02000660',
        '2UP' => 'E02000660',
        '2UQ' => 'E02000660',
        '2UR' => 'E02000660',
        '2US' => 'E02000660',
        '2UT' => 'E02000660',
        '2UU' => 'E02000660',
        '2UW' => 'E02000660',
        '2UX' => 'E02000660',
        '2UY' => 'E02000660',
        '2UZ' => 'E02000660',
        '2WA' => 'E02000660',
        '2WB' => 'E02000660',
        '2WD' => 'E02000660',
        '2WE' => 'E02000660',
        '2WF' => 'E02000660',
        '2WG' => 'E02000660',
        '2WH' => 'E02000660',
        '2WJ' => 'E02000660',
        '2WL' => 'E02000660',
        '2WN' => 'E02000660',
        '2WP' => 'E02000660',
        '2WQ' => 'E02000660',
        '2WR' => 'E02000660',
        '2WS' => 'E02000660',
        '2WT' => 'E02000660',
        '2WU' => 'E02000660',
        '2WW' => 'E02000660',
        '2WX' => 'E02000660',
        '2WY' => 'E02000660',
        '2WZ' => 'E02000660',
        '2XA' => 'E02000660',
        '2XB' => 'E02000660',
        '2XD' => 'E02000660',
        '2XE' => 'E02000660',
        '2XF' => 'E02000660',
        '2XG' => 'E02000660',
        '2XH' => 'E02000660',
        '2XJ' => 'E02000660',
        '2XL' => 'E02000660',
        '2XN' => 'E02000660',
        '2XP' => 'E02000660',
        '2XQ' => 'E02000660',
        '2XR' => 'E02000660',
        '2XS' => 'E02000660',
        '2XT' => 'E02000660',
        '2XU' => 'E02000660',
        '2XW' => 'E02000660',
        '2XY' => 'E02000660',
        '2XZ' => 'E02000660',
        '2YA' => 'E02000660',
        '2YB' => 'E02000660',
        '2YD' => 'E02000662',
        '2YE' => 'E02000660',
        '2YF' => 'E02000660',
        '2YG' => 'E02000660',
        '2YH' => 'E02000660',
        '2YJ' => 'E02000660',
        '2YL' => 'E02000660',
        '2YN' => 'E02000660',
        '2YP' => 'E02000660',
        '2YQ' => 'E02000660',
        '2YR' => 'E02000660',
        '2YS' => 'E02000660',
        '2YT' => 'E02000660',
        '2YU' => 'E02000660',
        '2YW' => 'E02000660',
        '2YX' => 'E02000660',
        '2YY' => 'E02000660',
        '2YZ' => 'E02000660',
        '2ZA' => 'E02000660',
        '2ZB' => 'E02000660',
        '2ZD' => 'E02000660',
        '2ZE' => 'E02000660',
        '2ZF' => 'E02000660',
        '2ZG' => 'E02000660',
        '2ZH' => 'E02000660',
        '2ZJ' => 'E02000660',
        '2ZL' => 'E02000660',
        '2ZN' => 'E02000660',
        '2ZP' => 'E02000660',
        '2ZQ' => 'E02000660',
        '2ZR' => 'E02000660',
        '2ZS' => 'E02000660',
        '2ZT' => 'E02000660',
        '2ZU' => 'E02000662',
        '2ZW' => 'E02000662',
        '2ZZ' => 'E02000662',
        '9AB' => 'E02000660',
        '9AD' => 'E02000660',
        '9AH' => 'E02000660',
        '9AP' => 'E02000660',
        '9AQ' => 'E02000660',
        '9AS' => 'E02000660',
        '9AT' => 'E02000660',
        '9AY' => 'E02000660',
        '9AZ' => 'E02000660',
        '9BD' => 'E02000660',
        '9BE' => 'E02000660',
        '9BG' => 'E02000660',
        '9BH' => 'E02000660',
        '9BJ' => 'E02000660',
        '9BL' => 'E02000660',
        '9BN' => 'E02000660',
        '9BP' => 'E02000660',
        '9BQ' => 'E02000660',
        '9BR' => 'E02000660',
        '9BS' => 'E02000660',
        '9BT' => 'E02000660',
        '9BU' => 'E02000660',
        '9BW' => 'E02000660',
        '9BX' => 'E02000660',
        '9BY' => 'E02000660',
        '9DA' => 'E02000660',
        '9DB' => 'E02000660',
        '9DD' => 'E02000660',
        '9DE' => 'E02000660',
        '9DF' => 'E02000660',
        '9DG' => 'E02000660',
        '9DH' => 'E02000660',
        '9DJ' => 'E02000660',
        '9DL' => 'E02000660',
        '9DN' => 'E02000660',
        '9DP' => 'E02000660',
        '9DQ' => 'E02000660',
        '9DR' => 'E02000660',
        '9DS' => 'E02000660',
        '9DT' => 'E02000660',
        '9DU' => 'E02000660',
        '9DW' => 'E02000660',
        '9DX' => 'E02000660',
        '9DY' => 'E02000660',
        '9DZ' => 'E02000660',
        '9EA' => 'E02000660',
        '9EB' => 'E02000660',
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
