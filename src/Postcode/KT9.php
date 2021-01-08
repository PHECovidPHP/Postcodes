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
final class KT9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000615',
        '1AB' => 'E02000615',
        '1AD' => 'E02000615',
        '1AE' => 'E02000615',
        '1AF' => 'E02000615',
        '1AG' => 'E02000615',
        '1AH' => 'E02000615',
        '1AJ' => 'E02000615',
        '1AL' => 'E02000615',
        '1AN' => 'E02000615',
        '1AP' => 'E02000615',
        '1AQ' => 'E02000615',
        '1AR' => 'E02000615',
        '1AS' => 'E02000615',
        '1AT' => 'E02000615',
        '1AU' => 'E02000615',
        '1AW' => 'E02000615',
        '1AX' => 'E02000615',
        '1AY' => 'E02000617',
        '1AZ' => 'E02000617',
        '1BA' => 'E02000617',
        '1BB' => 'E02000615',
        '1BD' => 'E02000614',
        '1BE' => 'E02000615',
        '1BF' => 'E02000615',
        '1BG' => 'E02000615',
        '1BH' => 'E02006325',
        '1BJ' => 'E02000615',
        '1BL' => 'E02000615',
        '1BN' => 'E02000615',
        '1BP' => 'E02000615',
        '1BQ' => 'E02000615',
        '1BS' => 'E02000615',
        '1BT' => 'E02000615',
        '1BU' => 'E02000615',
        '1BW' => 'E02000615',
        '1BX' => 'E02000615',
        '1BY' => 'E02000615',
        '1BZ' => 'E02000615',
        '1DA' => 'E02000615',
        '1DB' => 'E02000615',
        '1DD' => 'E02000615',
        '1DE' => 'E02000615',
        '1DF' => 'E02000615',
        '1DG' => 'E02000616',
        '1DH' => 'E02000615',
        '1DJ' => 'E02000615',
        '1DL' => 'E02000615',
        '1DN' => 'E02000614',
        '1DP' => 'E02000615',
        '1DQ' => 'E02000615',
        '1DR' => 'E02000615',
        '1DS' => 'E02000615',
        '1DT' => 'E02000615',
        '1DU' => 'E02000615',
        '1DW' => 'E02000615',
        '1DX' => 'E02000615',
        '1DY' => 'E02000615',
        '1DZ' => 'E02000615',
        '1EA' => 'E02000615',
        '1EB' => 'E02000615',
        '1ED' => 'E02000615',
        '1EE' => 'E02000615',
        '1EF' => 'E02000615',
        '1EG' => 'E02000615',
        '1EH' => 'E02000615',
        '1EJ' => 'E02000615',
        '1EL' => 'E02000615',
        '1EN' => 'E02000617',
        '1EP' => 'E02000615',
        '1EQ' => 'E02000615',
        '1ER' => 'E02000615',
        '1ES' => 'E02000615',
        '1ET' => 'E02000615',
        '1EU' => 'E02000616',
        '1EW' => 'E02000617',
        '1EX' => 'E02000615',
        '1EY' => 'E02000615',
        '1EZ' => 'E02000615',
        '1GX' => 'E02000615',
        '1HA' => 'E02000615',
        '1HB' => 'E02000615',
        '1HD' => 'E02000615',
        '1HE' => 'E02000615',
        '1HF' => 'E02000615',
        '1HG' => 'E02000615',
        '1HH' => 'E02000615',
        '1HJ' => 'E02000615',
        '1HL' => 'E02000615',
        '1HN' => 'E02000615',
        '1HP' => 'E02000615',
        '1HQ' => 'E02000615',
        '1HR' => 'E02000615',
        '1HS' => 'E02000614',
        '1HT' => 'E02000615',
        '1HU' => 'E02000615',
        '1HW' => 'E02000615',
        '1HX' => 'E02000615',
        '1HY' => 'E02000616',
        '1HZ' => 'E02000616',
        '1JA' => 'E02000616',
        '1JB' => 'E02000616',
        '1JD' => 'E02000616',
        '1JE' => 'E02000615',
        '1JF' => 'E02000615',
        '1JG' => 'E02000616',
        '1JH' => 'E02000616',
        '1JJ' => 'E02000616',
        '1JL' => 'E02000616',
        '1JN' => 'E02000616',
        '1JP' => 'E02000616',
        '1JQ' => 'E02000615',
        '1JR' => 'E02000616',
        '1JS' => 'E02000616',
        '1JT' => 'E02000616',
        '1JU' => 'E02000616',
        '1JW' => 'E02000616',
        '1JX' => 'E02000616',
        '1JY' => 'E02000616',
        '1JZ' => 'E02000616',
        '1LA' => 'E02000616',
        '1LB' => 'E02000616',
        '1LD' => 'E02000616',
        '1LE' => 'E02000616',
        '1LF' => 'E02000616',
        '1LG' => 'E02000616',
        '1LH' => 'E02000616',
        '1LJ' => 'E02000616',
        '1LL' => 'E02000614',
        '1LN' => 'E02000616',
        '1LP' => 'E02000616',
        '1LQ' => 'E02000616',
        '1LR' => 'E02000616',
        '1LS' => 'E02000616',
        '1LT' => 'E02000616',
        '1LU' => 'E02000616',
        '1LW' => 'E02000616',
        '1LX' => 'E02000616',
        '1LY' => 'E02000617',
        '1LZ' => 'E02000617',
        '1NA' => 'E02000617',
        '1NB' => 'E02000617',
        '1ND' => 'E02000617',
        '1NE' => 'E02000615',
        '1NF' => 'E02000617',
        '1NG' => 'E02000615',
        '1NH' => 'E02000615',
        '1NJ' => 'E02000615',
        '1NL' => 'E02000615',
        '1NN' => 'E02000615',
        '1NP' => 'E02000616',
        '1NQ' => 'E02000615',
        '1NS' => 'E02000615',
        '1NT' => 'E02000615',
        '1NU' => 'E02000615',
        '1NW' => 'E02000617',
        '1NX' => 'E02000615',
        '1NY' => 'E02000615',
        '1PA' => 'E02000615',
        '1PB' => 'E02000615',
        '1PD' => 'E02000615',
        '1PE' => 'E02000615',
        '1PF' => 'E02000615',
        '1PG' => 'E02000615',
        '1PH' => 'E02000615',
        '1PJ' => 'E02000615',
        '1PL' => 'E02000615',
        '1PN' => 'E02000615',
        '1PP' => 'E02000615',
        '1PQ' => 'E02000615',
        '1PR' => 'E02000615',
        '1PS' => 'E02000615',
        '1PT' => 'E02000615',
        '1PU' => 'E02000615',
        '1PW' => 'E02000615',
        '1PX' => 'E02000615',
        '1PY' => 'E02000615',
        '1QA' => 'E02000616',
        '1QB' => 'E02000616',
        '1QD' => 'E02000616',
        '1QE' => 'E02000615',
        '1QF' => 'E02000615',
        '1QG' => 'E02000616',
        '1QJ' => 'E02000615',
        '1QL' => 'E02000615',
        '1QN' => 'E02000615',
        '1QP' => 'E02000617',
        '1QQ' => 'E02000615',
        '1QR' => 'E02000617',
        '1QS' => 'E02000617',
        '1QT' => 'E02000617',
        '1QU' => 'E02000617',
        '1QW' => 'E02000617',
        '1QX' => 'E02000617',
        '1QY' => 'E02000617',
        '1QZ' => 'E02000614',
        '1RB' => 'E02000614',
        '1RD' => 'E02000615',
        '1RE' => 'E02000615',
        '1RF' => 'E02000615',
        '1RG' => 'E02000614',
        '1RH' => 'E02000615',
        '1RJ' => 'E02000615',
        '1RL' => 'E02000615',
        '1RN' => 'E02000615',
        '1RP' => 'E02000615',
        '1RQ' => 'E02000614',
        '1RR' => 'E02000615',
        '1RS' => 'E02000615',
        '1RT' => 'E02000615',
        '1RU' => 'E02000615',
        '1RW' => 'E02000615',
        '1RX' => 'E02000615',
        '1RY' => 'E02000615',
        '1RZ' => 'E02000615',
        '1SA' => 'E02000615',
        '1SB' => 'E02000614',
        '1SD' => 'E02000615',
        '1SE' => 'E02000614',
        '1SF' => 'E02000616',
        '1SG' => 'E02000614',
        '1SH' => 'E02000616',
        '1SJ' => 'E02000616',
        '1SL' => 'E02000616',
        '1SN' => 'E02000614',
        '1SP' => 'E02000616',
        '1SQ' => 'E02000616',
        '1SR' => 'E02000616',
        '1SS' => 'E02000616',
        '1ST' => 'E02000616',
        '1SU' => 'E02000615',
        '1SW' => 'E02000614',
        '1SX' => 'E02000616',
        '1SY' => 'E02000616',
        '1SZ' => 'E02000614',
        '1TB' => 'E02000614',
        '1TD' => 'E02000614',
        '1TE' => 'E02000614',
        '1TF' => 'E02000615',
        '1TG' => 'E02000614',
        '1TH' => 'E02000614',
        '1TJ' => 'E02000616',
        '1TL' => 'E02000616',
        '1TN' => 'E02000614',
        '1TP' => 'E02000614',
        '1TQ' => 'E02000614',
        '1TR' => 'E02000614',
        '1TT' => 'E02000614',
        '1TU' => 'E02000614',
        '1TW' => 'E02000616',
        '1TX' => 'E02000616',
        '1TY' => 'E02000614',
        '1TZ' => 'E02000616',
        '1UE' => 'E02006325',
        '1UF' => 'E02006325',
        '1UG' => 'E02006325',
        '1UL' => 'E02006325',
        '1UY' => 'E02000617',
        '1UZ' => 'E02000615',
        '1WA' => 'E02000615',
        '1WB' => 'E02000615',
        '1WD' => 'E02000615',
        '1WE' => 'E02000615',
        '1WF' => 'E02000615',
        '1WG' => 'E02000615',
        '1WH' => 'E02000615',
        '1WJ' => 'E02000615',
        '1WL' => 'E02000615',
        '1WN' => 'E02000615',
        '1WP' => 'E02000615',
        '1WQ' => 'E02000615',
        '1WR' => 'E02000615',
        '1WS' => 'E02000615',
        '1WT' => 'E02000615',
        '1WY' => 'E02000615',
        '1XA' => 'E02000616',
        '1XB' => 'E02000616',
        '1XD' => 'E02000616',
        '1XE' => 'E02000616',
        '1XF' => 'E02000616',
        '1XG' => 'E02000616',
        '1XH' => 'E02000616',
        '1XL' => 'E02000615',
        '1XP' => 'E02000615',
        '1XQ' => 'E02000616',
        '1XR' => 'E02000615',
        '1XT' => 'E02000615',
        '1XZ' => 'E02000616',
        '1YA' => 'E02000615',
        '1YB' => 'E02000615',
        '1YD' => 'E02000615',
        '1YE' => 'E02000615',
        '1YF' => 'E02000615',
        '1YG' => 'E02000615',
        '1YH' => 'E02000615',
        '1YJ' => 'E02000615',
        '1YL' => 'E02000615',
        '1YN' => 'E02000615',
        '1YP' => 'E02000615',
        '1YQ' => 'E02000615',
        '1YR' => 'E02000615',
        '1YS' => 'E02000615',
        '1YT' => 'E02000615',
        '1YU' => 'E02000615',
        '1YW' => 'E02000615',
        '1YY' => 'E02000615',
        '1YZ' => 'E02000615',
        '1ZA' => 'E02000615',
        '2AA' => 'E02000616',
        '2AB' => 'E02000616',
        '2AD' => 'E02000616',
        '2AE' => 'E02000616',
        '2AF' => 'E02000616',
        '2AG' => 'E02000616',
        '2AH' => 'E02000616',
        '2AJ' => 'E02000616',
        '2AL' => 'E02000616',
        '2AN' => 'E02000616',
        '2AP' => 'E02000616',
        '2AQ' => 'E02000616',
        '2AR' => 'E02000616',
        '2AS' => 'E02000616',
        '2AT' => 'E02000616',
        '2AU' => 'E02000616',
        '2AW' => 'E02000616',
        '2AX' => 'E02000616',
        '2AY' => 'E02000616',
        '2AZ' => 'E02000616',
        '2BA' => 'E02000616',
        '2BB' => 'E02000616',
        '2BD' => 'E02000617',
        '2BE' => 'E02000616',
        '2BF' => 'E02000617',
        '2BG' => 'E02000617',
        '2BH' => 'E02000616',
        '2BJ' => 'E02000616',
        '2BL' => 'E02000616',
        '2BN' => 'E02000616',
        '2BP' => 'E02000616',
        '2BQ' => 'E02000616',
        '2BS' => 'E02000616',
        '2BT' => 'E02000616',
        '2BU' => 'E02000616',
        '2BW' => 'E02000616',
        '2BX' => 'E02000616',
        '2BY' => 'E02000616',
        '2BZ' => 'E02000616',
        '2DA' => 'E02000615',
        '2DB' => 'E02000616',
        '2DD' => 'E02000617',
        '2DE' => 'E02000617',
        '2DF' => 'E02000617',
        '2DG' => 'E02000617',
        '2DH' => 'E02000616',
        '2DJ' => 'E02000616',
        '2DL' => 'E02000616',
        '2DN' => 'E02000616',
        '2DP' => 'E02000616',
        '2DQ' => 'E02000617',
        '2DR' => 'E02000617',
        '2DS' => 'E02000617',
        '2DT' => 'E02000617',
        '2DU' => 'E02000616',
        '2DW' => 'E02000616',
        '2DX' => 'E02000616',
        '2DY' => 'E02000616',
        '2DZ' => 'E02000616',
        '2EA' => 'E02000616',
        '2EB' => 'E02000616',
        '2ED' => 'E02000616',
        '2EE' => 'E02000617',
        '2EF' => 'E02000616',
        '2EG' => 'E02000616',
        '2EH' => 'E02000616',
        '2EJ' => 'E02000617',
        '2EL' => 'E02000617',
        '2EN' => 'E02000617',
        '2EP' => 'E02000617',
        '2EQ' => 'E02000617',
        '2ER' => 'E02000616',
        '2ES' => 'E02000616',
        '2ET' => 'E02000616',
        '2EU' => 'E02000617',
        '2EW' => 'E02000615',
        '2EX' => 'E02000616',
        '2EY' => 'E02000616',
        '2EZ' => 'E02000616',
        '2GA' => 'E02000617',
        '2GB' => 'E02000617',
        '2GD' => 'E02000617',
        '2GE' => 'E02000617',
        '2GF' => 'E02000617',
        '2GG' => 'E02000617',
        '2GH' => 'E02000617',
        '2GJ' => 'E02000617',
        '2GL' => 'E02000617',
        '2GN' => 'E02000617',
        '2GP' => 'E02000617',
        '2GQ' => 'E02000617',
        '2GR' => 'E02000617',
        '2GS' => 'E02000617',
        '2GT' => 'E02000617',
        '2GU' => 'E02000617',
        '2GW' => 'E02000617',
        '2GY' => 'E02000617',
        '2GZ' => 'E02000617',
        '2HA' => 'E02000616',
        '2HB' => 'E02000616',
        '2HD' => 'E02000616',
        '2HE' => 'E02000616',
        '2HF' => 'E02000616',
        '2HG' => 'E02000616',
        '2HH' => 'E02000617',
        '2HJ' => 'E02000617',
        '2HL' => 'E02000617',
        '2HN' => 'E02000617',
        '2HP' => 'E02000617',
        '2HQ' => 'E02000617',
        '2HR' => 'E02000617',
        '2HS' => 'E02000617',
        '2HT' => 'E02000617',
        '2HU' => 'E02000617',
        '2HW' => 'E02000617',
        '2HX' => 'E02000617',
        '2HY' => 'E02000617',
        '2HZ' => 'E02000617',
        '2JA' => 'E02000617',
        '2JB' => 'E02000616',
        '2JD' => 'E02000617',
        '2JE' => 'E02000617',
        '2JF' => 'E02000617',
        '2JG' => 'E02000617',
        '2JH' => 'E02000615',
        '2JL' => 'E02000617',
        '2JN' => 'E02000617',
        '2JP' => 'E02000617',
        '2JQ' => 'E02000617',
        '2JR' => 'E02000617',
        '2JS' => 'E02000617',
        '2JT' => 'E02000617',
        '2JU' => 'E02000617',
        '2JW' => 'E02000617',
        '2JX' => 'E02000617',
        '2JY' => 'E02000617',
        '2JZ' => 'E02000617',
        '2LA' => 'E02000617',
        '2LB' => 'E02000617',
        '2LD' => 'E02000617',
        '2LE' => 'E02000617',
        '2LF' => 'E02000617',
        '2LG' => 'E02000617',
        '2LH' => 'E02000617',
        '2LJ' => 'E02000617',
        '2LL' => 'E02000617',
        '2LN' => 'E02000617',
        '2LP' => 'E02000617',
        '2LQ' => 'E02000617',
        '2LR' => 'E02000617',
        '2LS' => 'E02000615',
        '2LT' => 'E02000617',
        '2LU' => 'E02000617',
        '2LW' => 'E02000617',
        '2LX' => 'E02000617',
        '2LY' => 'E02000617',
        '2LZ' => 'E02000617',
        '2NA' => 'E02000617',
        '2NB' => 'E02000617',
        '2ND' => 'E02000617',
        '2NE' => 'E02000617',
        '2NF' => 'E02000617',
        '2NG' => 'E02000617',
        '2NH' => 'E02000617',
        '2NJ' => 'E02000617',
        '2NL' => 'E02000617',
        '2NN' => 'E02000617',
        '2NP' => 'E02000617',
        '2NQ' => 'E02000617',
        '2NR' => 'E02000617',
        '2NS' => 'E02000617',
        '2NT' => 'E02000617',
        '2NU' => 'E02000617',
        '2NW' => 'E02000617',
        '2NX' => 'E02000617',
        '2NY' => 'E02000617',
        '2NZ' => 'E02000617',
        '2PA' => 'E02000617',
        '2PB' => 'E02000617',
        '2PD' => 'E02000617',
        '2PE' => 'E02000615',
        '2PF' => 'E02000617',
        '2PG' => 'E02000615',
        '2PH' => 'E02000617',
        '2PJ' => 'E02000617',
        '2PL' => 'E02000617',
        '2PN' => 'E02000617',
        '2PP' => 'E02000617',
        '2PQ' => 'E02000617',
        '2PR' => 'E02000617',
        '2PS' => 'E02000617',
        '2PT' => 'E02000617',
        '2PU' => 'E02000617',
        '2PW' => 'E02000617',
        '2PX' => 'E02000617',
        '2PY' => 'E02000617',
        '2PZ' => 'E02000617',
        '2QA' => 'E02000617',
        '2QB' => 'E02000617',
        '2QD' => 'E02000617',
        '2QE' => 'E02000617',
        '2QF' => 'E02000617',
        '2QH' => 'E02000615',
        '2QJ' => 'E02000617',
        '2QL' => 'E02000617',
        '2QN' => 'E02000617',
        '2QP' => 'E02000617',
        '2QR' => 'E02000617',
        '2QS' => 'E02000617',
        '2QT' => 'E02000617',
        '2QU' => 'E02000617',
        '2QW' => 'E02000617',
        '2QX' => 'E02000617',
        '2QY' => 'E02000617',
        '2QZ' => 'E02000617',
        '2RA' => 'E02000615',
        '2RB' => 'E02000615',
        '2RH' => 'E02000617',
        '2RJ' => 'E02000617',
        '2RL' => 'E02000617',
        '2RN' => 'E02000617',
        '2RT' => 'E02000615',
        '2RU' => 'E02000617',
        '2RW' => 'E02000617',
        '2RX' => 'E02000617',
        '2RY' => 'E02000617',
        '2SA' => 'E02000617',
        '2SB' => 'E02000617',
        '2SG' => 'E02000617',
        '2SH' => 'E02000617',
        '2SJ' => 'E02000617',
        '2SL' => 'E02000617',
        '2SN' => 'E02000617',
        '2SP' => 'E02000617',
        '2SW' => 'E02000617',
        '2TA' => 'E02000617',
        '2WA' => 'E02000617',
        '2WB' => 'E02000615',
        '2WD' => 'E02000617',
        '2WE' => 'E02000615',
        '2WF' => 'E02000615',
        '2WG' => 'E02000617',
        '2WH' => 'E02000615',
        '2WJ' => 'E02000615',
        '2WL' => 'E02000615',
        '2WN' => 'E02000615',
        '2WP' => 'E02000615',
        '2WQ' => 'E02000615',
        '2WR' => 'E02000615',
        '2WS' => 'E02000617',
        '2WT' => 'E02000615',
        '2WU' => 'E02000615',
        '2WX' => 'E02000615',
        '2XQ' => 'E02000615',
        '2XY' => 'E02000615',
        '2YA' => 'E02000616',
        '2YB' => 'E02000615',
        '2YD' => 'E02000617',
        '2YE' => 'E02000615',
        '2YF' => 'E02000615',
        '2YG' => 'E02000615',
        '2YH' => 'E02000617',
        '2YJ' => 'E02000615',
        '2YL' => 'E02000616',
        '2YN' => 'E02000615',
        '2YP' => 'E02000617',
        '2YQ' => 'E02000615',
        '2YR' => 'E02000615',
        '2YS' => 'E02000615',
        '2YT' => 'E02000617',
        '2YW' => 'E02000615',
        '2YY' => 'E02000615',
        '2YZ' => 'E02000615',
        '9AB' => 'E02000615',
        '9AE' => 'E02000615',
        '9AF' => 'E02000615',
        '9AG' => 'E02000615',
        '9AH' => 'E02000615',
        '9AJ' => 'E02000615',
        '9AL' => 'E02000615',
        '9AN' => 'E02000615',
        '9AP' => 'E02000615',
        '9AQ' => 'E02000615',
        '9AS' => 'E02000615',
        '9AT' => 'E02000615',
        '9AU' => 'E02000615',
        '9AW' => 'E02000615',
        '9AX' => 'E02000615',
        '9AY' => 'E02000615',
        '9AZ' => 'E02000615',
        '9BA' => 'E02000615',
        '9BB' => 'E02000615',
        '9BD' => 'E02000615',
        '9BE' => 'E02000615',
        '9BF' => 'E02000615',
        '9BG' => 'E02000615',
        '9BH' => 'E02000615',
        '9BJ' => 'E02000615',
        '9BL' => 'E02000615',
        '9BN' => 'E02000615',
        '9BP' => 'E02000615',
        '9BQ' => 'E02000615',
        '9BR' => 'E02000615',
        '9BS' => 'E02000615',
        '9BT' => 'E02000615',
        '9BU' => 'E02000615',
        '9BW' => 'E02000615',
        '9BX' => 'E02000615',
        '9BY' => 'E02000615',
        '9BZ' => 'E02000615',
        '9DA' => 'E02000615',
        '9DB' => 'E02000615',
        '9DD' => 'E02000615',
        '9DE' => 'E02000615',
        '9DF' => 'E02000615',
        '9DG' => 'E02000615',
        '9DH' => 'E02000615',
        '9DJ' => 'E02000615',
        '9DL' => 'E02000615',
        '9DN' => 'E02000615',
        '9DP' => 'E02000615',
        '9DQ' => 'E02000615',
        '9DR' => 'E02000615',
        '9DS' => 'E02000615',
        '9DT' => 'E02000615',
        '9DU' => 'E02000615',
        '9DW' => 'E02000615',
        '9DX' => 'E02000615',
        '9DY' => 'E02000615',
        '9DZ' => 'E02000615',
        '9EA' => 'E02000615',
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
