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
final class WV13
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02002134',
        '1AB' => 'E02002134',
        '1AD' => 'E02002134',
        '1AE' => 'E02002134',
        '1AF' => 'E02002134',
        '1AG' => 'E02002134',
        '1AH' => 'E02002134',
        '1AJ' => 'E02002134',
        '1AL' => 'E02002134',
        '1AN' => 'E02002134',
        '1AP' => 'E02002134',
        '1AQ' => 'E02002134',
        '1AR' => 'E02002134',
        '1AS' => 'E02002134',
        '1AT' => 'E02002134',
        '1AU' => 'E02002134',
        '1AW' => 'E02002134',
        '1AX' => 'E02002134',
        '1AY' => 'E02002134',
        '1AZ' => 'E02002134',
        '1BA' => 'E02002134',
        '1BB' => 'E02002134',
        '1BD' => 'E02002134',
        '1BE' => 'E02002134',
        '1BF' => 'E02002134',
        '1BG' => 'E02002134',
        '1BH' => 'E02002134',
        '1BJ' => 'E02002134',
        '1BL' => 'E02002134',
        '1BN' => 'E02002134',
        '1BP' => 'E02002134',
        '1BQ' => 'E02002134',
        '1BS' => 'E02002134',
        '1BT' => 'E02002134',
        '1BU' => 'E02002134',
        '1BW' => 'E02002134',
        '1BX' => 'E02002134',
        '1BY' => 'E02002134',
        '1BZ' => 'E02002134',
        '1DA' => 'E02002134',
        '1DB' => 'E02002134',
        '1DD' => 'E02002134',
        '1DE' => 'E02002134',
        '1DF' => 'E02002134',
        '1DG' => 'E02002134',
        '1DH' => 'E02002136',
        '1DJ' => 'E02002134',
        '1DL' => 'E02002134',
        '1DN' => 'E02002134',
        '1DP' => 'E02002134',
        '1DQ' => 'E02002134',
        '1DR' => 'E02002134',
        '1DS' => 'E02002134',
        '1DT' => 'E02002134',
        '1DU' => 'E02002134',
        '1DW' => 'E02002134',
        '1DX' => 'E02002134',
        '1DY' => 'E02002134',
        '1DZ' => 'E02002134',
        '1EA' => 'E02002134',
        '1EB' => 'E02002134',
        '1ED' => 'E02002134',
        '1EE' => 'E02002134',
        '1EF' => 'E02002134',
        '1EG' => 'E02002134',
        '1EH' => 'E02002134',
        '1EJ' => 'E02002134',
        '1EL' => 'E02002134',
        '1EN' => 'E02002134',
        '1EP' => 'E02002134',
        '1EQ' => 'E02002134',
        '1ER' => 'E02002134',
        '1ES' => 'E02002134',
        '1ET' => 'E02002134',
        '1EU' => 'E02002134',
        '1EW' => 'E02002134',
        '1EX' => 'E02002134',
        '1EY' => 'E02002134',
        '1EZ' => 'E02002134',
        '1FB' => 'E02002134',
        '1FZ' => 'E02002134',
        '1GA' => 'E02002136',
        '1GB' => 'E02002136',
        '1GD' => 'E02002136',
        '1GE' => 'E02002136',
        '1HA' => 'E02002136',
        '1HB' => 'E02002134',
        '1HD' => 'E02002134',
        '1HE' => 'E02002134',
        '1HF' => 'E02002134',
        '1HG' => 'E02002129',
        '1HH' => 'E02002129',
        '1HJ' => 'E02002129',
        '1HL' => 'E02002136',
        '1HN' => 'E02002134',
        '1HP' => 'E02002136',
        '1HQ' => 'E02002163',
        '1HR' => 'E02002129',
        '1HS' => 'E02002136',
        '1HT' => 'E02002129',
        '1HU' => 'E02002136',
        '1HW' => 'E02002136',
        '1HX' => 'E02002136',
        '1HY' => 'E02002136',
        '1HZ' => 'E02002136',
        '1JA' => 'E02002136',
        '1JB' => 'E02002136',
        '1JD' => 'E02002134',
        '1JE' => 'E02002136',
        '1JF' => 'E02002136',
        '1JG' => 'E02002136',
        '1JH' => 'E02002136',
        '1JJ' => 'E02002136',
        '1JL' => 'E02002136',
        '1JN' => 'E02002136',
        '1JP' => 'E02002134',
        '1JQ' => 'E02002136',
        '1JR' => 'E02002129',
        '1JS' => 'E02002136',
        '1JT' => 'E02002136',
        '1JW' => 'E02002136',
        '1JX' => 'E02002136',
        '1JY' => 'E02002134',
        '1JZ' => 'E02002163',
        '1LA' => 'E02002136',
        '1LB' => 'E02002134',
        '1LD' => 'E02002134',
        '1LE' => 'E02002129',
        '1LF' => 'E02002134',
        '1LG' => 'E02002134',
        '1LH' => 'E02002134',
        '1LJ' => 'E02002134',
        '1LL' => 'E02002134',
        '1LN' => 'E02002134',
        '1LP' => 'E02002134',
        '1LQ' => 'E02002134',
        '1LR' => 'E02002134',
        '1LS' => 'E02002134',
        '1LT' => 'E02002134',
        '1LU' => 'E02002134',
        '1LW' => 'E02002134',
        '1LX' => 'E02002129',
        '1LY' => 'E02002134',
        '1LZ' => 'E02002134',
        '1NA' => 'E02002134',
        '1NB' => 'E02002134',
        '1ND' => 'E02002134',
        '1NE' => 'E02002134',
        '1NF' => 'E02002134',
        '1NG' => 'E02002134',
        '1NH' => 'E02002134',
        '1NJ' => 'E02002134',
        '1NL' => 'E02002134',
        '1NN' => 'E02002134',
        '1NP' => 'E02002134',
        '1NQ' => 'E02002134',
        '1NR' => 'E02002134',
        '1NS' => 'E02002129',
        '1NT' => 'E02002134',
        '1NW' => 'E02002134',
        '1NX' => 'E02002134',
        '1NY' => 'E02002134',
        '1NZ' => 'E02002134',
        '1PA' => 'E02002136',
        '1PB' => 'E02002136',
        '1PD' => 'E02002136',
        '1PE' => 'E02002136',
        '1PF' => 'E02002136',
        '1PG' => 'E02002136',
        '1PJ' => 'E02002136',
        '1PL' => 'E02002136',
        '1PN' => 'E02002136',
        '1PP' => 'E02002136',
        '1PQ' => 'E02002136',
        '1PR' => 'E02002136',
        '1PS' => 'E02002136',
        '1PT' => 'E02002136',
        '1PU' => 'E02002136',
        '1PW' => 'E02002136',
        '1PX' => 'E02002136',
        '1PY' => 'E02002136',
        '1PZ' => 'E02002136',
        '1QA' => 'E02002134',
        '1QB' => 'E02002136',
        '1QD' => 'E02002134',
        '1QE' => 'E02002136',
        '1QF' => 'E02002136',
        '1QG' => 'E02002136',
        '1QH' => 'E02002136',
        '1QJ' => 'E02002136',
        '1QL' => 'E02002136',
        '1QN' => 'E02002134',
        '1QP' => 'E02002136',
        '1QQ' => 'E02002136',
        '1QR' => 'E02002136',
        '1QS' => 'E02002136',
        '1QT' => 'E02002134',
        '1QU' => 'E02002134',
        '1QW' => 'E02002134',
        '1QX' => 'E02002134',
        '1QY' => 'E02002134',
        '1QZ' => 'E02002136',
        '1RA' => 'E02002134',
        '1RB' => 'E02002134',
        '1RD' => 'E02002134',
        '1RE' => 'E02002134',
        '1RG' => 'E02002134',
        '1RH' => 'E02002134',
        '1RJ' => 'E02002136',
        '1RN' => 'E02002136',
        '1RQ' => 'E02002134',
        '1RS' => 'E02002136',
        '1RT' => 'E02002136',
        '1RW' => 'E02002136',
        '1RX' => 'E02002134',
        '1RY' => 'E02002136',
        '1RZ' => 'E02002136',
        '1SA' => 'E02002134',
        '1SD' => 'E02002134',
        '1SF' => 'E02002134',
        '1SG' => 'E02002134',
        '1SH' => 'E02002134',
        '1SJ' => 'E02002134',
        '1SL' => 'E02002134',
        '1SN' => 'E02002136',
        '1SP' => 'E02002134',
        '1SQ' => 'E02002134',
        '1SR' => 'E02002134',
        '1SS' => 'E02002134',
        '1ST' => 'E02002134',
        '1SU' => 'E02002134',
        '1SW' => 'E02002134',
        '1SX' => 'E02002134',
        '1SY' => 'E02002134',
        '1SZ' => 'E02002134',
        '1TA' => 'E02002134',
        '1TB' => 'E02002136',
        '1TD' => 'E02002136',
        '1TE' => 'E02002134',
        '1TF' => 'E02002136',
        '1TG' => 'E02002136',
        '1TQ' => 'E02002136',
        '1UA' => 'E02002163',
        '1UZ' => 'E02002136',
        '1WZ' => 'E02002163',
        '1YF' => 'E02002163',
        '1YG' => 'E02002163',
        '1YH' => 'E02002163',
        '1YJ' => 'E02002163',
        '1YL' => 'E02002163',
        '1YN' => 'E02002163',
        '1YP' => 'E02002163',
        '1YQ' => 'E02002163',
        '1YR' => 'E02002134',
        '1YS' => 'E02002163',
        '1YT' => 'E02002163',
        '1YU' => 'E02002163',
        '1YW' => 'E02002163',
        '1YX' => 'E02002163',
        '2AA' => 'E02002136',
        '2AB' => 'E02002136',
        '2AD' => 'E02002136',
        '2AE' => 'E02002136',
        '2AF' => 'E02002134',
        '2AG' => 'E02002134',
        '2AH' => 'E02002136',
        '2AJ' => 'E02002136',
        '2AL' => 'E02002136',
        '2AN' => 'E02002136',
        '2AP' => 'E02002134',
        '2AQ' => 'E02002136',
        '2AR' => 'E02002134',
        '2AS' => 'E02002163',
        '2AT' => 'E02002134',
        '2AU' => 'E02002136',
        '2AW' => 'E02002134',
        '2AX' => 'E02002136',
        '2AY' => 'E02002136',
        '2AZ' => 'E02002136',
        '2BA' => 'E02002134',
        '2BB' => 'E02002134',
        '2BD' => 'E02002134',
        '2BE' => 'E02002134',
        '2BF' => 'E02002134',
        '2BG' => 'E02002136',
        '2BH' => 'E02002136',
        '2BJ' => 'E02002134',
        '2BL' => 'E02002136',
        '2BP' => 'E02002136',
        '2BQ' => 'E02002134',
        '2BS' => 'E02002136',
        '2BT' => 'E02002134',
        '2BU' => 'E02002134',
        '2BW' => 'E02002134',
        '2BX' => 'E02002136',
        '2BZ' => 'E02002136',
        '2DA' => 'E02002134',
        '2DB' => 'E02002134',
        '2DD' => 'E02002134',
        '2DE' => 'E02002134',
        '2DF' => 'E02002134',
        '2DG' => 'E02002136',
        '2DL' => 'E02002134',
        '2DN' => 'E02002134',
        '2DQ' => 'E02002134',
        '2DR' => 'E02002136',
        '2DS' => 'E02002134',
        '2DT' => 'E02002134',
        '2DU' => 'E02002134',
        '2DX' => 'E02002134',
        '2DY' => 'E02002134',
        '2DZ' => 'E02002134',
        '2EA' => 'E02002134',
        '2EB' => 'E02002134',
        '2ED' => 'E02002136',
        '2EE' => 'E02002136',
        '2EF' => 'E02002136',
        '2EG' => 'E02002134',
        '2EH' => 'E02002134',
        '2EJ' => 'E02002134',
        '2EL' => 'E02002136',
        '2EN' => 'E02002136',
        '2EP' => 'E02002136',
        '2EQ' => 'E02002163',
        '2ER' => 'E02002134',
        '2ES' => 'E02002136',
        '2ET' => 'E02002134',
        '2EU' => 'E02002136',
        '2EW' => 'E02002136',
        '2EX' => 'E02002136',
        '2EY' => 'E02002136',
        '2EZ' => 'E02002136',
        '2HA' => 'E02002136',
        '2HB' => 'E02002136',
        '2HD' => 'E02002136',
        '2HE' => 'E02002136',
        '2HF' => 'E02002136',
        '2HG' => 'E02002136',
        '2HH' => 'E02002136',
        '2HJ' => 'E02002134',
        '2HL' => 'E02002134',
        '2HN' => 'E02002136',
        '2HP' => 'E02002136',
        '2HQ' => 'E02002136',
        '2HR' => 'E02002134',
        '2HS' => 'E02002136',
        '2HT' => 'E02002134',
        '2HU' => 'E02002134',
        '2HW' => 'E02002136',
        '2HX' => 'E02002134',
        '2HY' => 'E02002134',
        '2HZ' => 'E02002134',
        '2JA' => 'E02002136',
        '2JB' => 'E02002136',
        '2JD' => 'E02002136',
        '2JE' => 'E02002136',
        '2JF' => 'E02002136',
        '2JG' => 'E02002136',
        '2JH' => 'E02002170',
        '2JJ' => 'E02002136',
        '2JL' => 'E02002170',
        '2JN' => 'E02002136',
        '2JP' => 'E02002136',
        '2JQ' => 'E02002134',
        '2JR' => 'E02002136',
        '2JS' => 'E02002136',
        '2JT' => 'E02002170',
        '2JU' => 'E02002136',
        '2JW' => 'E02002134',
        '2JX' => 'E02002136',
        '2JY' => 'E02002136',
        '2JZ' => 'E02002134',
        '2LA' => 'E02002136',
        '2LB' => 'E02002136',
        '2LD' => 'E02002136',
        '2LE' => 'E02002136',
        '2LF' => 'E02002136',
        '2LG' => 'E02002136',
        '2LH' => 'E02002136',
        '2LJ' => 'E02002136',
        '2LL' => 'E02002136',
        '2LN' => 'E02002136',
        '2LP' => 'E02002136',
        '2LR' => 'E02002136',
        '2LS' => 'E02002136',
        '2LT' => 'E02002136',
        '2LU' => 'E02002136',
        '2LW' => 'E02002136',
        '2LX' => 'E02002136',
        '2LY' => 'E02002136',
        '2LZ' => 'E02002136',
        '2NA' => 'E02002136',
        '2NF' => 'E02002136',
        '2NH' => 'E02002134',
        '2NJ' => 'E02002136',
        '2NL' => 'E02002136',
        '2NP' => 'E02002136',
        '2NQ' => 'E02002136',
        '2NR' => 'E02002134',
        '2NS' => 'E02002134',
        '2NT' => 'E02002134',
        '2NU' => 'E02002134',
        '2NW' => 'E02002136',
        '2NX' => 'E02002134',
        '2NY' => 'E02002136',
        '2NZ' => 'E02002134',
        '2PA' => 'E02002134',
        '2PB' => 'E02002136',
        '2PD' => 'E02002134',
        '2PE' => 'E02002134',
        '2PF' => 'E02002136',
        '2PG' => 'E02002136',
        '2PJ' => 'E02002134',
        '2PL' => 'E02002134',
        '2PN' => 'E02002136',
        '2PP' => 'E02002134',
        '2PQ' => 'E02002134',
        '2PR' => 'E02002134',
        '2PS' => 'E02002136',
        '2PT' => 'E02002136',
        '2PU' => 'E02002136',
        '2PW' => 'E02002134',
        '2PX' => 'E02002136',
        '2PY' => 'E02002136',
        '2PZ' => 'E02002136',
        '2QA' => 'E02002136',
        '2QB' => 'E02002136',
        '2QD' => 'E02002136',
        '2QE' => 'E02002136',
        '2QF' => 'E02002136',
        '2QG' => 'E02002136',
        '2QJ' => 'E02002136',
        '2QL' => 'E02002134',
        '2QP' => 'E02002136',
        '2QQ' => 'E02002136',
        '2QR' => 'E02002136',
        '2QT' => 'E02002136',
        '2QU' => 'E02002136',
        '2QW' => 'E02002136',
        '2QZ' => 'E02002136',
        '2RA' => 'E02002136',
        '2RB' => 'E02002136',
        '2RD' => 'E02002136',
        '2RG' => 'E02002136',
        '2RL' => 'E02002136',
        '2RN' => 'E02002136',
        '2RP' => 'E02002136',
        '2RR' => 'E02002136',
        '2RW' => 'E02002136',
        '2RX' => 'E02002136',
        '2RY' => 'E02002136',
        '2RZ' => 'E02002136',
        '2SA' => 'E02002136',
        '2SB' => 'E02002136',
        '2SD' => 'E02002136',
        '2SE' => 'E02002136',
        '2SF' => 'E02002136',
        '2SG' => 'E02002136',
        '2SH' => 'E02002136',
        '2SJ' => 'E02002136',
        '2SQ' => 'E02002136',
        '2TA' => 'E02002136',
        '2TB' => 'E02002136',
        '2WA' => 'E02002136',
        '2WB' => 'E02002163',
        '2XZ' => 'E02002163',
        '2YA' => 'E02002163',
        '2YD' => 'E02002163',
        '2YE' => 'E02002163',
        '2YJ' => 'E02002163',
        '2YL' => 'E02002163',
        '2YN' => 'E02002163',
        '2YP' => 'E02002136',
        '2YR' => 'E02002136',
        '2YS' => 'E02002163',
        '2YT' => 'E02002163',
        '2YU' => 'E02002136',
        '2YX' => 'E02002163',
        '2ZB' => 'E02002163',
        '2ZR' => 'E02002163',
        '3AA' => 'E02002134',
        '3AB' => 'E02002134',
        '3AD' => 'E02002134',
        '3AE' => 'E02002171',
        '3AF' => 'E02002134',
        '3AG' => 'E02002134',
        '3AH' => 'E02002170',
        '3AJ' => 'E02002134',
        '3AL' => 'E02002134',
        '3AN' => 'E02002171',
        '3AP' => 'E02002134',
        '3AQ' => 'E02002134',
        '3AR' => 'E02002134',
        '3AS' => 'E02002134',
        '3AT' => 'E02002134',
        '3AU' => 'E02002134',
        '3AW' => 'E02002134',
        '3AX' => 'E02002134',
        '3AY' => 'E02002134',
        '3AZ' => 'E02002134',
        '3BA' => 'E02002134',
        '3BB' => 'E02002134',
        '3BD' => 'E02002134',
        '3BE' => 'E02002134',
        '3BF' => 'E02002134',
        '3BG' => 'E02002134',
        '3BH' => 'E02002134',
        '3BJ' => 'E02002134',
        '3BL' => 'E02002134',
        '3BN' => 'E02002134',
        '3BP' => 'E02002134',
        '3BQ' => 'E02002134',
        '3BR' => 'E02002171',
        '3BS' => 'E02002134',
        '3BT' => 'E02002134',
        '3BU' => 'E02002134',
        '3BW' => 'E02002134',
        '3BX' => 'E02002134',
        '3BY' => 'E02002134',
        '3BZ' => 'E02002134',
        '3DA' => 'E02002134',
        '3DB' => 'E02002134',
        '3DD' => 'E02002134',
        '3DE' => 'E02002134',
        '3DF' => 'E02002134',
        '3DG' => 'E02002134',
        '3DH' => 'E02002134',
        '3DJ' => 'E02002134',
        '3DL' => 'E02002134',
        '3DN' => 'E02002163',
        '3DP' => 'E02002134',
        '3DQ' => 'E02002134',
        '3DR' => 'E02002134',
        '3DS' => 'E02002134',
        '3DT' => 'E02002134',
        '3DU' => 'E02002134',
        '3DW' => 'E02002134',
        '3DX' => 'E02002134',
        '3DY' => 'E02002134',
        '3DZ' => 'E02002134',
        '3EA' => 'E02002134',
        '3EB' => 'E02002134',
        '3ED' => 'E02002170',
        '3EE' => 'E02002170',
        '3EF' => 'E02002170',
        '3EG' => 'E02002170',
        '3EH' => 'E02002170',
        '3EJ' => 'E02002170',
        '3EL' => 'E02002170',
        '3EN' => 'E02002170',
        '3EP' => 'E02002170',
        '3EQ' => 'E02002170',
        '3ER' => 'E02002170',
        '3ES' => 'E02002170',
        '3ET' => 'E02002170',
        '3EU' => 'E02002170',
        '3EW' => 'E02002170',
        '3EX' => 'E02002170',
        '3EY' => 'E02002170',
        '3EZ' => 'E02002170',
        '3GX' => 'E02002170',
        '3GY' => 'E02002163',
        '3GZ' => 'E02002163',
        '3HA' => 'E02002170',
        '3HB' => 'E02002170',
        '3HD' => 'E02002170',
        '3HE' => 'E02002170',
        '3HF' => 'E02002170',
        '3HJ' => 'E02002170',
        '3HL' => 'E02002170',
        '3HN' => 'E02002170',
        '3HP' => 'E02002170',
        '3HR' => 'E02002170',
        '3HS' => 'E02002170',
        '3HT' => 'E02002170',
        '3HU' => 'E02002170',
        '3HW' => 'E02002170',
        '3HX' => 'E02002170',
        '3HY' => 'E02002170',
        '3JA' => 'E02002170',
        '3JF' => 'E02002170',
        '3JG' => 'E02002170',
        '3JP' => 'E02002170',
        '3JR' => 'E02002170',
        '3JS' => 'E02002170',
        '3JT' => 'E02002170',
        '3JU' => 'E02002170',
        '3JW' => 'E02002170',
        '3JX' => 'E02002170',
        '3JY' => 'E02002170',
        '3JZ' => 'E02002170',
        '3LA' => 'E02002170',
        '3LB' => 'E02002170',
        '3LD' => 'E02002170',
        '3LH' => 'E02002170',
        '3LL' => 'E02002170',
        '3LN' => 'E02002170',
        '3LP' => 'E02002171',
        '3LR' => 'E02002171',
        '3LW' => 'E02002171',
        '3ND' => 'E02002171',
        '3NE' => 'E02002171',
        '3NF' => 'E02002171',
        '3NG' => 'E02002160',
        '3NH' => 'E02002171',
        '3NW' => 'E02002171',
        '3NX' => 'E02002171',
        '3NY' => 'E02002171',
        '3NZ' => 'E02002171',
        '3PA' => 'E02002171',
        '3PB' => 'E02002171',
        '3PD' => 'E02002171',
        '3PE' => 'E02002171',
        '3PJ' => 'E02002171',
        '3PR' => 'E02002171',
        '3PS' => 'E02002171',
        '3PW' => 'E02002134',
        '3PZ' => 'E02002171',
        '3QA' => 'E02002171',
        '3QB' => 'E02002171',
        '3QD' => 'E02002171',
        '3QE' => 'E02002171',
        '3QF' => 'E02002171',
        '3QG' => 'E02002171',
        '3QH' => 'E02002171',
        '3QJ' => 'E02002171',
        '3QL' => 'E02002171',
        '3QN' => 'E02002171',
        '3QP' => 'E02002171',
        '3QQ' => 'E02002171',
        '3QR' => 'E02002163',
        '3QS' => 'E02002163',
        '3QT' => 'E02002163',
        '3QU' => 'E02002170',
        '3QW' => 'E02002171',
        '3QX' => 'E02002171',
        '3QY' => 'E02002170',
        '3QZ' => 'E02002170',
        '3RA' => 'E02002170',
        '3RB' => 'E02002170',
        '3RD' => 'E02002160',
        '3RG' => 'E02002160',
        '3RH' => 'E02002160',
        '3RJ' => 'E02002160',
        '3RL' => 'E02002160',
        '3RN' => 'E02002160',
        '3RP' => 'E02002160',
        '3RR' => 'E02002160',
        '3RS' => 'E02002160',
        '3RT' => 'E02002160',
        '3RU' => 'E02002160',
        '3RW' => 'E02002160',
        '3RX' => 'E02002160',
        '3RY' => 'E02002160',
        '3RZ' => 'E02002160',
        '3SA' => 'E02002160',
        '3SB' => 'E02002160',
        '3SD' => 'E02002160',
        '3SE' => 'E02002160',
        '3SF' => 'E02002160',
        '3SG' => 'E02002160',
        '3SH' => 'E02002160',
        '3SJ' => 'E02002160',
        '3SL' => 'E02002160',
        '3SN' => 'E02002160',
        '3SP' => 'E02002160',
        '3SQ' => 'E02002160',
        '3SR' => 'E02002160',
        '3SS' => 'E02002160',
        '3ST' => 'E02002160',
        '3SU' => 'E02002160',
        '3SW' => 'E02002160',
        '3SX' => 'E02002160',
        '3SY' => 'E02002160',
        '3SZ' => 'E02002160',
        '3TA' => 'E02002160',
        '3TB' => 'E02002170',
        '3TD' => 'E02002170',
        '3TE' => 'E02002170',
        '3TF' => 'E02002170',
        '3TG' => 'E02002170',
        '3TH' => 'E02002170',
        '3TJ' => 'E02002170',
        '3TL' => 'E02002170',
        '3TQ' => 'E02002170',
        '3TR' => 'E02002170',
        '3TS' => 'E02002170',
        '3TT' => 'E02002171',
        '3TU' => 'E02002170',
        '3TX' => 'E02002171',
        '3TY' => 'E02002171',
        '3UB' => 'E02002170',
        '3UD' => 'E02002171',
        '3UH' => 'E02002170',
        '3UJ' => 'E02002170',
        '3UL' => 'E02002170',
        '3UN' => 'E02002170',
        '3WE' => 'E02002163',
        '3WJ' => 'E02002163',
        '3WZ' => 'E02002163',
        '3XA' => 'E02002160',
        '3XB' => 'E02002160',
        '3XD' => 'E02002160',
        '3XE' => 'E02002160',
        '3XF' => 'E02002160',
        '3XG' => 'E02002160',
        '3XH' => 'E02002160',
        '3XJ' => 'E02002160',
        '3XL' => 'E02002160',
        '3XN' => 'E02002160',
        '3XP' => 'E02002160',
        '3XQ' => 'E02002160',
        '3XR' => 'E02002160',
        '3XS' => 'E02002160',
        '3XT' => 'E02002163',
        '3XU' => 'E02002160',
        '3XW' => 'E02002160',
        '3XX' => 'E02002160',
        '3XY' => 'E02002163',
        '3YA' => 'E02002160',
        '3YB' => 'E02002163',
        '3YD' => 'E02002170',
        '3YE' => 'E02002170',
        '3YF' => 'E02002163',
        '3YG' => 'E02002170',
        '3YH' => 'E02002163',
        '3YJ' => 'E02002170',
        '3YL' => 'E02002160',
        '3YN' => 'E02002163',
        '3YP' => 'E02002163',
        '3YQ' => 'E02002170',
        '3YR' => 'E02002160',
        '3YS' => 'E02002160',
        '3YT' => 'E02002163',
        '3YU' => 'E02002163',
        '3YW' => 'E02002160',
        '3YX' => 'E02002160',
        '3ZH' => 'E02002163',
        '3ZN' => 'E02002163',
        '3ZX' => 'E02002163',
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
