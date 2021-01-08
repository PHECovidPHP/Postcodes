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
final class CO9
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004449',
        '1AB' => 'E02004449',
        '1AD' => 'E02004449',
        '1AE' => 'E02004449',
        '1AF' => 'E02004449',
        '1AG' => 'E02004449',
        '1AH' => 'E02004449',
        '1AJ' => 'E02004449',
        '1AL' => 'E02004449',
        '1AN' => 'E02004449',
        '1AP' => 'E02004449',
        '1AQ' => 'E02004449',
        '1AR' => 'E02004449',
        '1AS' => 'E02004449',
        '1AT' => 'E02004449',
        '1AU' => 'E02004449',
        '1AW' => 'E02004449',
        '1AX' => 'E02004449',
        '1AY' => 'E02004449',
        '1AZ' => 'E02004449',
        '1BA' => 'E02004449',
        '1BB' => 'E02004449',
        '1BD' => 'E02004449',
        '1BE' => 'E02004449',
        '1BG' => 'E02004449',
        '1BH' => 'E02004449',
        '1BJ' => 'E02004449',
        '1BL' => 'E02004449',
        '1BN' => 'E02004449',
        '1BP' => 'E02004449',
        '1BQ' => 'E02004449',
        '1BS' => 'E02004449',
        '1BT' => 'E02004449',
        '1BU' => 'E02004449',
        '1BW' => 'E02004449',
        '1BX' => 'E02004449',
        '1BY' => 'E02004451',
        '1BZ' => 'E02004449',
        '1DA' => 'E02004449',
        '1DB' => 'E02004449',
        '1DD' => 'E02004449',
        '1DE' => 'E02004449',
        '1DF' => 'E02004449',
        '1DG' => 'E02004449',
        '1DH' => 'E02004449',
        '1DJ' => 'E02004449',
        '1DL' => 'E02004449',
        '1DN' => 'E02004449',
        '1DP' => 'E02004449',
        '1DQ' => 'E02004449',
        '1DR' => 'E02004449',
        '1DS' => 'E02004449',
        '1DT' => 'E02004449',
        '1DU' => 'E02004449',
        '1DW' => 'E02004449',
        '1DX' => 'E02004449',
        '1DY' => 'E02004449',
        '1DZ' => 'E02004449',
        '1EA' => 'E02004449',
        '1EB' => 'E02004449',
        '1ED' => 'E02004449',
        '1EE' => 'E02004449',
        '1EF' => 'E02004449',
        '1EG' => 'E02004449',
        '1EH' => 'E02004449',
        '1EJ' => 'E02004449',
        '1EL' => 'E02004449',
        '1EN' => 'E02004449',
        '1EP' => 'E02004449',
        '1EQ' => 'E02004449',
        '1ER' => 'E02004449',
        '1ES' => 'E02004449',
        '1ET' => 'E02004449',
        '1EU' => 'E02004449',
        '1EW' => 'E02004449',
        '1EX' => 'E02004449',
        '1EY' => 'E02004449',
        '1EZ' => 'E02004451',
        '1FA' => 'E02004451',
        '1FB' => 'E02004449',
        '1FD' => 'E02004449',
        '1FE' => 'E02004449',
        '1FF' => 'E02004449',
        '1FG' => 'E02004449',
        '1FH' => 'E02004449',
        '1FJ' => 'E02004448',
        '1FL' => 'E02004449',
        '1FN' => 'E02004452',
        '1FP' => 'E02004448',
        '1FQ' => 'E02004449',
        '1FR' => 'E02004448',
        '1FS' => 'E02004448',
        '1FT' => 'E02004448',
        '1FX' => 'E02004448',
        '1FY' => 'E02004448',
        '1FZ' => 'E02004448',
        '1GA' => 'E02004449',
        '1GB' => 'E02004449',
        '1GD' => 'E02004449',
        '1GE' => 'E02004448',
        '1GF' => 'E02004448',
        '1GG' => 'E02004448',
        '1GH' => 'E02004448',
        '1GJ' => 'E02004448',
        '1GL' => 'E02004449',
        '1GP' => 'E02004448',
        '1GQ' => 'E02004451',
        '1GX' => 'E02004449',
        '1GY' => 'E02004449',
        '1GZ' => 'E02004449',
        '1HA' => 'E02004449',
        '1HB' => 'E02004449',
        '1HD' => 'E02004449',
        '1HE' => 'E02004449',
        '1HF' => 'E02004449',
        '1HG' => 'E02004449',
        '1HH' => 'E02004449',
        '1HJ' => 'E02004449',
        '1HL' => 'E02004449',
        '1HN' => 'E02004449',
        '1HP' => 'E02004449',
        '1HQ' => 'E02004449',
        '1HR' => 'E02004449',
        '1HS' => 'E02004449',
        '1HT' => 'E02004449',
        '1HU' => 'E02004449',
        '1HW' => 'E02004449',
        '1HX' => 'E02004449',
        '1HY' => 'E02004449',
        '1HZ' => 'E02004449',
        '1JA' => 'E02004449',
        '1JB' => 'E02004451',
        '1JD' => 'E02004449',
        '1JE' => 'E02004449',
        '1JF' => 'E02004449',
        '1JG' => 'E02004449',
        '1JH' => 'E02004449',
        '1JJ' => 'E02004449',
        '1JL' => 'E02004449',
        '1JN' => 'E02004449',
        '1JP' => 'E02004449',
        '1JQ' => 'E02004449',
        '1JR' => 'E02004449',
        '1JS' => 'E02004449',
        '1JT' => 'E02004449',
        '1JU' => 'E02004449',
        '1JW' => 'E02004449',
        '1JX' => 'E02004449',
        '1JY' => 'E02004449',
        '1JZ' => 'E02004449',
        '1LA' => 'E02004449',
        '1LB' => 'E02004449',
        '1LD' => 'E02004449',
        '1LE' => 'E02004449',
        '1LF' => 'E02004449',
        '1LG' => 'E02004449',
        '1LH' => 'E02004449',
        '1LJ' => 'E02004451',
        '1LL' => 'E02004449',
        '1LN' => 'E02004449',
        '1LP' => 'E02004449',
        '1LQ' => 'E02004449',
        '1LR' => 'E02004449',
        '1LS' => 'E02004449',
        '1LT' => 'E02004449',
        '1LU' => 'E02004449',
        '1LW' => 'E02004449',
        '1LX' => 'E02004448',
        '1LY' => 'E02004451',
        '1LZ' => 'E02004451',
        '1NA' => 'E02004451',
        '1NB' => 'E02004449',
        '1ND' => 'E02004449',
        '1NE' => 'E02004449',
        '1NF' => 'E02004449',
        '1NG' => 'E02004451',
        '1NH' => 'E02004451',
        '1NJ' => 'E02004449',
        '1NL' => 'E02004449',
        '1NN' => 'E02004449',
        '1NP' => 'E02004449',
        '1NQ' => 'E02004451',
        '1NR' => 'E02004449',
        '1NS' => 'E02004449',
        '1NT' => 'E02004449',
        '1NU' => 'E02004451',
        '1NW' => 'E02004449',
        '1NX' => 'E02004451',
        '1NY' => 'E02004451',
        '1NZ' => 'E02004451',
        '1PA' => 'E02004448',
        '1PB' => 'E02004448',
        '1PD' => 'E02004448',
        '1PE' => 'E02004452',
        '1PF' => 'E02004452',
        '1PG' => 'E02004452',
        '1PH' => 'E02004452',
        '1PJ' => 'E02004452',
        '1PL' => 'E02004452',
        '1PN' => 'E02004452',
        '1PP' => 'E02004449',
        '1PQ' => 'E02004452',
        '1PR' => 'E02004452',
        '1PS' => 'E02004452',
        '1PT' => 'E02004452',
        '1PU' => 'E02004452',
        '1PW' => 'E02004451',
        '1PX' => 'E02004449',
        '1PY' => 'E02004449',
        '1PZ' => 'E02004448',
        '1QA' => 'E02004448',
        '1QB' => 'E02004448',
        '1QD' => 'E02004448',
        '1QE' => 'E02004448',
        '1QF' => 'E02004448',
        '1QG' => 'E02004448',
        '1QH' => 'E02004449',
        '1QJ' => 'E02004448',
        '1QL' => 'E02004448',
        '1QN' => 'E02004448',
        '1QP' => 'E02004448',
        '1QQ' => 'E02004449',
        '1QR' => 'E02004448',
        '1QS' => 'E02004448',
        '1QT' => 'E02004448',
        '1QU' => 'E02004449',
        '1QX' => 'E02004448',
        '1QY' => 'E02004448',
        '1QZ' => 'E02004448',
        '1RA' => 'E02004451',
        '1RB' => 'E02004448',
        '1RD' => 'E02004451',
        '1RE' => 'E02004449',
        '1RF' => 'E02004448',
        '1RG' => 'E02004448',
        '1RH' => 'E02004448',
        '1RJ' => 'E02004459',
        '1RL' => 'E02004448',
        '1RN' => 'E02004448',
        '1RP' => 'E02004448',
        '1RQ' => 'E02004448',
        '1RR' => 'E02004448',
        '1RS' => 'E02004448',
        '1RT' => 'E02004452',
        '1RU' => 'E02004452',
        '1RW' => 'E02004449',
        '1RX' => 'E02004448',
        '1RY' => 'E02004448',
        '1RZ' => 'E02004452',
        '1SA' => 'E02004452',
        '1SB' => 'E02004452',
        '1SD' => 'E02004452',
        '1SE' => 'E02004452',
        '1SF' => 'E02004452',
        '1SG' => 'E02004452',
        '1SH' => 'E02004452',
        '1SJ' => 'E02004449',
        '1SL' => 'E02004448',
        '1SN' => 'E02004448',
        '1SP' => 'E02004448',
        '1SQ' => 'E02004452',
        '1SR' => 'E02004448',
        '1SS' => 'E02004452',
        '1ST' => 'E02004448',
        '1SU' => 'E02004448',
        '1SW' => 'E02004448',
        '1SX' => 'E02004448',
        '1SY' => 'E02004448',
        '1SZ' => 'E02004449',
        '1TA' => 'E02004449',
        '1TB' => 'E02004448',
        '1TD' => 'E02004448',
        '1TE' => 'E02004449',
        '1TF' => 'E02004449',
        '1TG' => 'E02004452',
        '1TH' => 'E02004448',
        '1TJ' => 'E02004448',
        '1TL' => 'E02004448',
        '1TN' => 'E02004448',
        '1TP' => 'E02004448',
        '1TQ' => 'E02004448',
        '1TR' => 'E02004448',
        '1TS' => 'E02004449',
        '1TT' => 'E02004449',
        '1TU' => 'E02004448',
        '1TW' => 'E02004448',
        '1TX' => 'E02004449',
        '1TY' => 'E02004449',
        '1TZ' => 'E02004449',
        '1UA' => 'E02004452',
        '1UB' => 'E02004452',
        '1UD' => 'E02004452',
        '1UE' => 'E02004449',
        '1UF' => 'E02004448',
        '1UG' => 'E02004452',
        '1UH' => 'E02004448',
        '1UJ' => 'E02004449',
        '1UL' => 'E02004448',
        '1UN' => 'E02004449',
        '1UP' => 'E02004452',
        '1UQ' => 'E02004449',
        '1UR' => 'E02004449',
        '1US' => 'E02004449',
        '1UT' => 'E02004449',
        '1UX' => 'E02004451',
        '1UY' => 'E02004451',
        '1UZ' => 'E02004449',
        '1WA' => 'E02004449',
        '1WB' => 'E02004449',
        '1WD' => 'E02004449',
        '1WE' => 'E02004449',
        '1WF' => 'E02004451',
        '1WG' => 'E02004451',
        '1WH' => 'E02004449',
        '1WJ' => 'E02004449',
        '1WL' => 'E02004449',
        '1WN' => 'E02004449',
        '1WP' => 'E02004449',
        '1WQ' => 'E02004449',
        '1WR' => 'E02004449',
        '1WS' => 'E02004449',
        '1WT' => 'E02004451',
        '1WU' => 'E02004449',
        '1WW' => 'E02004449',
        '1WX' => 'E02004449',
        '1WY' => 'E02004449',
        '1WZ' => 'E02004449',
        '1XA' => 'E02004449',
        '1XB' => 'E02004449',
        '1XD' => 'E02004449',
        '1XE' => 'E02004449',
        '1XF' => 'E02004449',
        '1XP' => 'E02004449',
        '1XR' => 'E02004449',
        '1XS' => 'E02004449',
        '1YA' => 'E02004451',
        '1YB' => 'E02004451',
        '1YD' => 'E02004451',
        '1YE' => 'E02004451',
        '1YF' => 'E02004449',
        '1YG' => 'E02004451',
        '1YQ' => 'E02004449',
        '1YS' => 'E02004451',
        '2AA' => 'E02004449',
        '2AB' => 'E02004449',
        '2AD' => 'E02004449',
        '2AE' => 'E02004451',
        '2AF' => 'E02004449',
        '2AG' => 'E02004449',
        '2AH' => 'E02004449',
        '2AJ' => 'E02004449',
        '2AL' => 'E02004449',
        '2AN' => 'E02004449',
        '2AP' => 'E02004449',
        '2AQ' => 'E02004449',
        '2AR' => 'E02004449',
        '2AS' => 'E02004449',
        '2AT' => 'E02004449',
        '2AU' => 'E02004449',
        '2AW' => 'E02004447',
        '2AX' => 'E02004449',
        '2AY' => 'E02004449',
        '2AZ' => 'E02004449',
        '2BA' => 'E02004451',
        '2BB' => 'E02004451',
        '2BD' => 'E02004451',
        '2BE' => 'E02004451',
        '2BG' => 'E02004451',
        '2BH' => 'E02004451',
        '2BJ' => 'E02004451',
        '2BL' => 'E02004451',
        '2BN' => 'E02004451',
        '2BP' => 'E02004451',
        '2BQ' => 'E02004451',
        '2BS' => 'E02004451',
        '2BT' => 'E02004451',
        '2BU' => 'E02004451',
        '2BW' => 'E02004451',
        '2BX' => 'E02004449',
        '2BY' => 'E02004449',
        '2BZ' => 'E02004449',
        '2DA' => 'E02004449',
        '2DB' => 'E02004449',
        '2DD' => 'E02004449',
        '2DE' => 'E02004449',
        '2DF' => 'E02004449',
        '2DG' => 'E02004449',
        '2DH' => 'E02004449',
        '2DJ' => 'E02004449',
        '2DL' => 'E02004449',
        '2DN' => 'E02004451',
        '2DP' => 'E02004451',
        '2DQ' => 'E02004449',
        '2DR' => 'E02004451',
        '2DS' => 'E02004449',
        '2DT' => 'E02004449',
        '2DU' => 'E02004451',
        '2DW' => 'E02004451',
        '2DX' => 'E02004449',
        '2DY' => 'E02004449',
        '2DZ' => 'E02004449',
        '2EA' => 'E02004449',
        '2EB' => 'E02004449',
        '2ED' => 'E02004449',
        '2EE' => 'E02004449',
        '2EF' => 'E02004449',
        '2EG' => 'E02004449',
        '2EH' => 'E02004449',
        '2EJ' => 'E02004449',
        '2EL' => 'E02004449',
        '2EN' => 'E02004449',
        '2EP' => 'E02004451',
        '2EQ' => 'E02004449',
        '2ER' => 'E02004449',
        '2ES' => 'E02004451',
        '2ET' => 'E02004451',
        '2EU' => 'E02004451',
        '2EW' => 'E02004449',
        '2EX' => 'E02004451',
        '2EY' => 'E02004449',
        '2EZ' => 'E02004451',
        '2FA' => 'E02004449',
        '2FB' => 'E02004449',
        '2FD' => 'E02004449',
        '2FE' => 'E02004447',
        '2FF' => 'E02004451',
        '2FG' => 'E02004447',
        '2FH' => 'E02004449',
        '2FJ' => 'E02004447',
        '2FL' => 'E02004451',
        '2FN' => 'E02004447',
        '2FP' => 'E02004447',
        '2FQ' => 'E02004451',
        '2FR' => 'E02004451',
        '2FS' => 'E02004451',
        '2FT' => 'E02004451',
        '2FU' => 'E02004451',
        '2FW' => 'E02004451',
        '2GA' => 'E02004449',
        '2GB' => 'E02004449',
        '2GD' => 'E02004449',
        '2GE' => 'E02004449',
        '2GF' => 'E02004449',
        '2GG' => 'E02004449',
        '2GT' => 'E02004449',
        '2GY' => 'E02004449',
        '2GZ' => 'E02004451',
        '2HA' => 'E02004451',
        '2HB' => 'E02004451',
        '2HD' => 'E02004451',
        '2HE' => 'E02004451',
        '2HF' => 'E02004451',
        '2HG' => 'E02004449',
        '2HH' => 'E02004449',
        '2HJ' => 'E02004449',
        '2HL' => 'E02004449',
        '2HN' => 'E02004451',
        '2HP' => 'E02004449',
        '2HQ' => 'E02004449',
        '2HR' => 'E02004451',
        '2HS' => 'E02004451',
        '2HT' => 'E02004451',
        '2HU' => 'E02004451',
        '2HW' => 'E02004451',
        '2HX' => 'E02004451',
        '2HY' => 'E02004451',
        '2HZ' => 'E02004449',
        '2JA' => 'E02004449',
        '2JB' => 'E02004449',
        '2JD' => 'E02004449',
        '2JE' => 'E02004449',
        '2JF' => 'E02004449',
        '2JG' => 'E02004449',
        '2JH' => 'E02004449',
        '2JJ' => 'E02004449',
        '2JL' => 'E02004449',
        '2JN' => 'E02004449',
        '2JP' => 'E02004451',
        '2JQ' => 'E02004449',
        '2JR' => 'E02004449',
        '2JS' => 'E02004449',
        '2JT' => 'E02004449',
        '2JU' => 'E02004449',
        '2JW' => 'E02004449',
        '2JX' => 'E02004449',
        '2JY' => 'E02004449',
        '2JZ' => 'E02004449',
        '2LA' => 'E02004451',
        '2LB' => 'E02004449',
        '2LD' => 'E02004449',
        '2LE' => 'E02004449',
        '2LF' => 'E02004449',
        '2LG' => 'E02004449',
        '2LH' => 'E02004449',
        '2LJ' => 'E02004449',
        '2LL' => 'E02004449',
        '2LN' => 'E02004449',
        '2LP' => 'E02004449',
        '2LQ' => 'E02004449',
        '2LR' => 'E02004449',
        '2LS' => 'E02004449',
        '2LT' => 'E02004449',
        '2LU' => 'E02004449',
        '2LW' => 'E02004451',
        '2LX' => 'E02004448',
        '2LY' => 'E02004447',
        '2LZ' => 'E02004447',
        '2NA' => 'E02004447',
        '2NB' => 'E02004447',
        '2ND' => 'E02004451',
        '2NE' => 'E02004447',
        '2NG' => 'E02004447',
        '2NH' => 'E02004447',
        '2NJ' => 'E02004447',
        '2NL' => 'E02004447',
        '2NN' => 'E02004447',
        '2NP' => 'E02004447',
        '2NQ' => 'E02004449',
        '2NR' => 'E02004447',
        '2NS' => 'E02004447',
        '2NT' => 'E02004447',
        '2NU' => 'E02004447',
        '2NW' => 'E02004447',
        '2NX' => 'E02004447',
        '2NY' => 'E02004447',
        '2NZ' => 'E02004447',
        '2PA' => 'E02004447',
        '2PB' => 'E02004447',
        '2PD' => 'E02004447',
        '2PE' => 'E02004447',
        '2PF' => 'E02004447',
        '2PG' => 'E02004447',
        '2PH' => 'E02004447',
        '2PJ' => 'E02004447',
        '2PL' => 'E02004447',
        '2PN' => 'E02004447',
        '2PP' => 'E02004447',
        '2PQ' => 'E02004449',
        '2PR' => 'E02004447',
        '2PS' => 'E02004447',
        '2PT' => 'E02004447',
        '2PU' => 'E02004447',
        '2PW' => 'E02004447',
        '2PX' => 'E02004447',
        '2PY' => 'E02004451',
        '2QA' => 'E02004447',
        '2QB' => 'E02004447',
        '2QD' => 'E02004447',
        '2QE' => 'E02004447',
        '2QF' => 'E02004449',
        '2QG' => 'E02004448',
        '2QH' => 'E02004451',
        '2QJ' => 'E02004451',
        '2QL' => 'E02004451',
        '2QN' => 'E02004448',
        '2QP' => 'E02004447',
        '2QQ' => 'E02004451',
        '2QR' => 'E02004447',
        '2QS' => 'E02004447',
        '2QT' => 'E02004447',
        '2QU' => 'E02004447',
        '2QW' => 'E02004448',
        '2QX' => 'E02004447',
        '2QY' => 'E02004451',
        '2QZ' => 'E02004447',
        '2RA' => 'E02004447',
        '2RB' => 'E02004447',
        '2RD' => 'E02004447',
        '2RE' => 'E02004447',
        '2RF' => 'E02004451',
        '2RG' => 'E02004447',
        '2RH' => 'E02004447',
        '2RJ' => 'E02004447',
        '2RL' => 'E02004447',
        '2RN' => 'E02004447',
        '2RP' => 'E02004448',
        '2RQ' => 'E02004447',
        '2RR' => 'E02004448',
        '2RS' => 'E02004447',
        '2RT' => 'E02004447',
        '2RU' => 'E02004447',
        '2RW' => 'E02004447',
        '2RX' => 'E02004451',
        '2RY' => 'E02004447',
        '2RZ' => 'E02004447',
        '2SA' => 'E02004447',
        '2SB' => 'E02004447',
        '2SD' => 'E02004447',
        '2SE' => 'E02004447',
        '2SF' => 'E02004451',
        '2SG' => 'E02004447',
        '2SH' => 'E02004447',
        '2SJ' => 'E02004447',
        '2SL' => 'E02004447',
        '2SN' => 'E02004447',
        '2SP' => 'E02004451',
        '2SQ' => 'E02004447',
        '2SR' => 'E02004451',
        '2SS' => 'E02004449',
        '2ST' => 'E02004451',
        '2SU' => 'E02004451',
        '2SW' => 'E02004449',
        '2SX' => 'E02004451',
        '2SY' => 'E02004451',
        '2SZ' => 'E02004451',
        '2TA' => 'E02004449',
        '2TB' => 'E02004451',
        '2TD' => 'E02004449',
        '2TE' => 'E02004449',
        '2TF' => 'E02004449',
        '2TG' => 'E02004451',
        '2TH' => 'E02004451',
        '2TJ' => 'E02004449',
        '2TL' => 'E02004451',
        '2TN' => 'E02004451',
        '2TP' => 'E02004451',
        '2TQ' => 'E02004451',
        '2TR' => 'E02004451',
        '2TS' => 'E02004451',
        '2TT' => 'E02004451',
        '2TU' => 'E02004451',
        '2TW' => 'E02004451',
        '2TX' => 'E02004451',
        '2TY' => 'E02004451',
        '2TZ' => 'E02004451',
        '2UA' => 'E02004451',
        '2WA' => 'E02004449',
        '2WB' => 'E02004451',
        '2WD' => 'E02004449',
        '2WE' => 'E02004449',
        '2WF' => 'E02004449',
        '2WG' => 'E02004449',
        '2WH' => 'E02004449',
        '2WJ' => 'E02004449',
        '2WL' => 'E02004449',
        '2WQ' => 'E02004449',
        '2WS' => 'E02004449',
        '2WT' => 'E02004449',
        '2WU' => 'E02004449',
        '2WW' => 'E02004449',
        '2WX' => 'E02004449',
        '2WY' => 'E02004449',
        '2WZ' => 'E02004449',
        '2YT' => 'E02004449',
        '2YX' => 'E02004449',
        '2ZP' => 'E02004451',
        '3AA' => 'E02004447',
        '3AB' => 'E02004447',
        '3AD' => 'E02004447',
        '3AE' => 'E02004447',
        '3AF' => 'E02004449',
        '3AG' => 'E02004447',
        '3AH' => 'E02004447',
        '3AJ' => 'E02004447',
        '3AL' => 'E02004447',
        '3AN' => 'E02004448',
        '3AP' => 'E02004447',
        '3AQ' => 'E02004447',
        '3AR' => 'E02004447',
        '3AS' => 'E02004447',
        '3AT' => 'E02004447',
        '3AU' => 'E02004447',
        '3AW' => 'E02004448',
        '3AX' => 'E02004447',
        '3AY' => 'E02004448',
        '3AZ' => 'E02004447',
        '3BA' => 'E02004447',
        '3BB' => 'E02004447',
        '3BD' => 'E02004447',
        '3BE' => 'E02004447',
        '3BG' => 'E02004447',
        '3BH' => 'E02004447',
        '3BJ' => 'E02004447',
        '3BL' => 'E02004447',
        '3BN' => 'E02004447',
        '3BP' => 'E02004448',
        '3BQ' => 'E02004447',
        '3BS' => 'E02004448',
        '3BT' => 'E02004448',
        '3BU' => 'E02004448',
        '3BW' => 'E02004447',
        '3BX' => 'E02004448',
        '3BY' => 'E02004448',
        '3BZ' => 'E02004448',
        '3DA' => 'E02004448',
        '3DB' => 'E02004448',
        '3DD' => 'E02004448',
        '3DE' => 'E02004448',
        '3DF' => 'E02004448',
        '3DG' => 'E02004448',
        '3DH' => 'E02004448',
        '3DJ' => 'E02004447',
        '3DL' => 'E02004448',
        '3DN' => 'E02004448',
        '3DP' => 'E02004448',
        '3DQ' => 'E02004448',
        '3DR' => 'E02004448',
        '3DS' => 'E02004448',
        '3DT' => 'E02004448',
        '3DU' => 'E02004448',
        '3DW' => 'E02004448',
        '3DX' => 'E02004447',
        '3DY' => 'E02004448',
        '3DZ' => 'E02004447',
        '3EA' => 'E02004448',
        '3EB' => 'E02004447',
        '3ED' => 'E02004448',
        '3EE' => 'E02004447',
        '3EF' => 'E02004447',
        '3EG' => 'E02004447',
        '3EH' => 'E02004448',
        '3EJ' => 'E02004448',
        '3EL' => 'E02004448',
        '3EN' => 'E02004448',
        '3EP' => 'E02004448',
        '3EQ' => 'E02004448',
        '3ER' => 'E02004448',
        '3ES' => 'E02004448',
        '3ET' => 'E02004448',
        '3EU' => 'E02004448',
        '3EW' => 'E02004448',
        '3EX' => 'E02004448',
        '3EY' => 'E02004448',
        '3EZ' => 'E02004448',
        '3FA' => 'E02004448',
        '3FD' => 'E02004448',
        '3FE' => 'E02004448',
        '3FF' => 'E02004448',
        '3FG' => 'E02004448',
        '3FH' => 'E02004448',
        '3FJ' => 'E02004448',
        '3FL' => 'E02004448',
        '3FP' => 'E02004448',
        '3FQ' => 'E02004448',
        '3GP' => 'E02004449',
        '3GZ' => 'E02004448',
        '3HA' => 'E02004448',
        '3HB' => 'E02004448',
        '3HD' => 'E02004448',
        '3HE' => 'E02004448',
        '3HF' => 'E02004448',
        '3HG' => 'E02004448',
        '3HH' => 'E02004448',
        '3HJ' => 'E02004448',
        '3HL' => 'E02004448',
        '3HN' => 'E02004448',
        '3HP' => 'E02004448',
        '3HQ' => 'E02004449',
        '3HR' => 'E02004448',
        '3HS' => 'E02004448',
        '3HT' => 'E02004448',
        '3HU' => 'E02004448',
        '3HW' => 'E02004448',
        '3HX' => 'E02004448',
        '3HY' => 'E02004448',
        '3HZ' => 'E02004448',
        '3JA' => 'E02004448',
        '3JB' => 'E02004448',
        '3JD' => 'E02004448',
        '3JE' => 'E02004448',
        '3JG' => 'E02004448',
        '3JH' => 'E02004448',
        '3JJ' => 'E02004448',
        '3JL' => 'E02004448',
        '3JN' => 'E02004448',
        '3JP' => 'E02004448',
        '3JQ' => 'E02004449',
        '3JR' => 'E02004448',
        '3JS' => 'E02004448',
        '3JT' => 'E02004448',
        '3JU' => 'E02004448',
        '3JW' => 'E02004448',
        '3JX' => 'E02004448',
        '3JZ' => 'E02004448',
        '3LA' => 'E02004448',
        '3LB' => 'E02004448',
        '3LD' => 'E02004448',
        '3LE' => 'E02004448',
        '3LG' => 'E02004448',
        '3LH' => 'E02004448',
        '3LJ' => 'E02004448',
        '3LL' => 'E02004448',
        '3LN' => 'E02004448',
        '3LP' => 'E02004448',
        '3LR' => 'E02004448',
        '3LS' => 'E02004448',
        '3LT' => 'E02004448',
        '3LU' => 'E02004448',
        '3LW' => 'E02004448',
        '3LX' => 'E02004448',
        '3LY' => 'E02004448',
        '3LZ' => 'E02004448',
        '3NA' => 'E02004448',
        '3ND' => 'E02004448',
        '3NE' => 'E02004448',
        '3NF' => 'E02004448',
        '3NG' => 'E02004448',
        '3NH' => 'E02004448',
        '3NJ' => 'E02004448',
        '3NL' => 'E02004448',
        '3NN' => 'E02004448',
        '3NP' => 'E02004448',
        '3NQ' => 'E02004448',
        '3NR' => 'E02004448',
        '3NS' => 'E02004448',
        '3NT' => 'E02004448',
        '3NU' => 'E02004448',
        '3NW' => 'E02004448',
        '3NX' => 'E02004448',
        '3NY' => 'E02004448',
        '3NZ' => 'E02004448',
        '3PA' => 'E02004448',
        '3PB' => 'E02004448',
        '3PD' => 'E02004448',
        '3PE' => 'E02004448',
        '3PF' => 'E02004448',
        '3PG' => 'E02004448',
        '3PH' => 'E02004448',
        '3PJ' => 'E02004448',
        '3PL' => 'E02004448',
        '3PN' => 'E02004448',
        '3PP' => 'E02004448',
        '3PQ' => 'E02004449',
        '3PR' => 'E02004448',
        '3PS' => 'E02004448',
        '3PT' => 'E02004448',
        '3PU' => 'E02004448',
        '3PW' => 'E02004448',
        '3PX' => 'E02004448',
        '3PY' => 'E02004448',
        '3PZ' => 'E02004448',
        '3QA' => 'E02004448',
        '3QB' => 'E02004448',
        '3QD' => 'E02004448',
        '3QE' => 'E02004448',
        '3QF' => 'E02004448',
        '3QG' => 'E02004448',
        '3QH' => 'E02004448',
        '3QJ' => 'E02004448',
        '3QL' => 'E02004448',
        '3QN' => 'E02004448',
        '3QP' => 'E02004448',
        '3QQ' => 'E02004448',
        '3QR' => 'E02004449',
        '3QS' => 'E02004448',
        '3QT' => 'E02004448',
        '3QU' => 'E02004448',
        '3QW' => 'E02004448',
        '3QX' => 'E02004448',
        '3RA' => 'E02004448',
        '3RB' => 'E02004448',
        '3RD' => 'E02004448',
        '3RE' => 'E02004448',
        '3RF' => 'E02004448',
        '3RG' => 'E02004448',
        '3RH' => 'E02004448',
        '3RJ' => 'E02004448',
        '3RL' => 'E02004448',
        '3RN' => 'E02004448',
        '3RP' => 'E02004448',
        '3RR' => 'E02004448',
        '3RS' => 'E02004448',
        '3RT' => 'E02004448',
        '3RX' => 'E02004448',
        '3RY' => 'E02004448',
        '3SA' => 'E02004448',
        '3SB' => 'E02004448',
        '3SW' => 'E02004448',
        '3TE' => 'E02004449',
        '3WA' => 'E02004449',
        '3WB' => 'E02004449',
        '3WP' => 'E02004448',
        '3WQ' => 'E02004449',
        '3WR' => 'E02004449',
        '3WS' => 'E02004449',
        '3WT' => 'E02004449',
        '3WU' => 'E02004449',
        '3WW' => 'E02004449',
        '3WX' => 'E02004449',
        '3WY' => 'E02004449',
        '3WZ' => 'E02004449',
        '3XB' => 'E02004449',
        '3YF' => 'E02004449',
        '3YQ' => 'E02004449',
        '3YZ' => 'E02004448',
        '3ZW' => 'E02004449',
        '4AA' => 'E02004446',
        '4AB' => 'E02004446',
        '4AD' => 'E02004446',
        '4AE' => 'E02004446',
        '4AF' => 'E02004446',
        '4AG' => 'E02004446',
        '4AH' => 'E02004446',
        '4AJ' => 'E02004446',
        '4AL' => 'E02006283',
        '4AN' => 'E02006283',
        '4AP' => 'E02004446',
        '4AQ' => 'E02004446',
        '4AR' => 'E02006283',
        '4AS' => 'E02006283',
        '4AT' => 'E02006283',
        '4AU' => 'E02004449',
        '4AW' => 'E02006283',
        '4AX' => 'E02006283',
        '4AY' => 'E02004446',
        '4AZ' => 'E02006283',
        '4BA' => 'E02006283',
        '4BB' => 'E02004446',
        '4BD' => 'E02004446',
        '4BE' => 'E02004446',
        '4BG' => 'E02004446',
        '4BH' => 'E02004446',
        '4BJ' => 'E02004446',
        '4BL' => 'E02004446',
        '4BN' => 'E02004446',
        '4BP' => 'E02004446',
        '4BQ' => 'E02004446',
        '4BS' => 'E02004446',
        '4BT' => 'E02004446',
        '4BU' => 'E02004446',
        '4BW' => 'E02004446',
        '4BX' => 'E02004446',
        '4BY' => 'E02004446',
        '4BZ' => 'E02004446',
        '4DA' => 'E02004446',
        '4DB' => 'E02004446',
        '4DD' => 'E02004446',
        '4DE' => 'E02004446',
        '4DF' => 'E02004449',
        '4DG' => 'E02004446',
        '4DH' => 'E02004446',
        '4DJ' => 'E02004446',
        '4DL' => 'E02004446',
        '4DN' => 'E02004446',
        '4DP' => 'E02004446',
        '4DQ' => 'E02004446',
        '4DR' => 'E02004446',
        '4DS' => 'E02004446',
        '4DT' => 'E02004446',
        '4DU' => 'E02004449',
        '4DX' => 'E02004446',
        '4DY' => 'E02004446',
        '4DZ' => 'E02004446',
        '4EA' => 'E02004446',
        '4EB' => 'E02004446',
        '4ED' => 'E02004446',
        '4EE' => 'E02004446',
        '4EF' => 'E02004446',
        '4EG' => 'E02004446',
        '4EH' => 'E02004446',
        '4EJ' => 'E02004446',
        '4EL' => 'E02004446',
        '4EN' => 'E02004446',
        '4EP' => 'E02004446',
        '4EQ' => 'E02004446',
        '4ER' => 'E02004446',
        '4ES' => 'E02004446',
        '4ET' => 'E02004446',
        '4EU' => 'E02004446',
        '4EW' => 'E02004449',
        '4EX' => 'E02004446',
        '4EY' => 'E02004446',
        '4EZ' => 'E02004446',
        '4GE' => 'E02004446',
        '4HA' => 'E02004446',
        '4HB' => 'E02004446',
        '4HD' => 'E02004446',
        '4HE' => 'E02004446',
        '4HF' => 'E02004446',
        '4HG' => 'E02004446',
        '4HH' => 'E02004446',
        '4HJ' => 'E02004446',
        '4HL' => 'E02004446',
        '4HN' => 'E02004446',
        '4HP' => 'E02004446',
        '4HQ' => 'E02004446',
        '4HR' => 'E02004446',
        '4HS' => 'E02004446',
        '4HT' => 'E02004446',
        '4HU' => 'E02004446',
        '4HW' => 'E02004446',
        '4HX' => 'E02004446',
        '4HY' => 'E02004446',
        '4HZ' => 'E02004446',
        '4JA' => 'E02004446',
        '4JB' => 'E02004446',
        '4JD' => 'E02004446',
        '4JE' => 'E02004446',
        '4JF' => 'E02004446',
        '4JG' => 'E02004446',
        '4JH' => 'E02004446',
        '4JJ' => 'E02004447',
        '4JL' => 'E02004447',
        '4JN' => 'E02004447',
        '4JP' => 'E02004447',
        '4JQ' => 'E02004447',
        '4JR' => 'E02004447',
        '4JS' => 'E02004447',
        '4JT' => 'E02004447',
        '4JU' => 'E02004446',
        '4JW' => 'E02004446',
        '4JX' => 'E02004447',
        '4JY' => 'E02004446',
        '4JZ' => 'E02004446',
        '4LA' => 'E02004446',
        '4LB' => 'E02004446',
        '4LD' => 'E02004446',
        '4LE' => 'E02004446',
        '4LF' => 'E02004446',
        '4LG' => 'E02004446',
        '4LH' => 'E02004446',
        '4LJ' => 'E02004446',
        '4LL' => 'E02004446',
        '4LN' => 'E02004446',
        '4LQ' => 'E02004446',
        '4LR' => 'E02004447',
        '4LS' => 'E02004446',
        '4LW' => 'E02004446',
        '4LX' => 'E02004446',
        '4LZ' => 'E02004446',
        '4NB' => 'E02004446',
        '4ND' => 'E02004446',
        '4NE' => 'E02004446',
        '4NG' => 'E02004446',
        '4NH' => 'E02004446',
        '4NJ' => 'E02004446',
        '4NL' => 'E02004446',
        '4NN' => 'E02004450',
        '4NP' => 'E02004446',
        '4NQ' => 'E02004446',
        '4NR' => 'E02004446',
        '4NT' => 'E02004446',
        '4NX' => 'E02004446',
        '4NZ' => 'E02004446',
        '4PA' => 'E02004446',
        '4PD' => 'E02004446',
        '4PE' => 'E02004446',
        '4PG' => 'E02004446',
        '4PH' => 'E02004446',
        '4PJ' => 'E02004446',
        '4PP' => 'E02004446',
        '4PQ' => 'E02004446',
        '4PR' => 'E02004446',
        '4PS' => 'E02004446',
        '4PT' => 'E02004446',
        '4PU' => 'E02004446',
        '4PW' => 'E02004446',
        '4PX' => 'E02004446',
        '4PY' => 'E02004446',
        '4PZ' => 'E02004446',
        '4QA' => 'E02004446',
        '4QB' => 'E02004446',
        '4QD' => 'E02004446',
        '4QE' => 'E02004446',
        '4QF' => 'E02004446',
        '4QG' => 'E02004446',
        '4QH' => 'E02004446',
        '4QJ' => 'E02004446',
        '4QL' => 'E02004446',
        '4QN' => 'E02004446',
        '4QP' => 'E02004446',
        '4QQ' => 'E02004446',
        '4QR' => 'E02004446',
        '4QS' => 'E02004446',
        '4QT' => 'E02004446',
        '4QW' => 'E02004446',
        '4QX' => 'E02004446',
        '4RA' => 'E02004446',
        '4RB' => 'E02004446',
        '4RD' => 'E02004446',
        '4RE' => 'E02004446',
        '4RG' => 'E02004446',
        '4RH' => 'E02004446',
        '4RJ' => 'E02004446',
        '4RL' => 'E02004446',
        '4RN' => 'E02004446',
        '4RP' => 'E02004446',
        '4RQ' => 'E02004446',
        '4RR' => 'E02004446',
        '4RS' => 'E02004446',
        '4RT' => 'E02004446',
        '4RU' => 'E02004446',
        '4RW' => 'E02004449',
        '4RX' => 'E02004446',
        '4RY' => 'E02004446',
        '4RZ' => 'E02004446',
        '4SA' => 'E02004446',
        '4SB' => 'E02004449',
        '4SE' => 'E02004446',
        '4SG' => 'E02004446',
        '4SH' => 'E02004446',
        '4SJ' => 'E02004446',
        '4SL' => 'E02004446',
        '4SN' => 'E02004446',
        '4SP' => 'E02004446',
        '4SQ' => 'E02004446',
        '4SR' => 'E02004446',
        '4ST' => 'E02004446',
        '4SW' => 'E02004446',
        '4SY' => 'E02004446',
        '4WA' => 'E02004449',
        '4WB' => 'E02004446',
        '4WE' => 'E02004446',
        '4WF' => 'E02004446',
        '4WN' => 'E02004449',
        '4WP' => 'E02004449',
        '4WQ' => 'E02004449',
        '4WR' => 'E02004449',
        '4WS' => 'E02004449',
        '4WT' => 'E02004449',
        '4WU' => 'E02004449',
        '4WW' => 'E02004449',
        '4WX' => 'E02004449',
        '4WY' => 'E02004449',
        '4WZ' => 'E02004449',
        '4XB' => 'E02004449',
        '4XZ' => 'E02004449',
        '4YX' => 'E02004449',
        '4YY' => 'E02004449',
        '4YZ' => 'E02004449',
        '9AA' => 'E02004449',
        '9AB' => 'E02004449',
        '9AD' => 'E02004449',
        '9AE' => 'E02004449',
        '9AF' => 'E02004449',
        '9AG' => 'E02004449',
        '9AH' => 'E02004449',
        '9AJ' => 'E02004449',
        '9AL' => 'E02004449',
        '9AN' => 'E02004449',
        '9AP' => 'E02004449',
        '9AQ' => 'E02004449',
        '9AR' => 'E02004449',
        '9AS' => 'E02004449',
        '9AT' => 'E02004449',
        '9AU' => 'E02004449',
        '9AW' => 'E02004449',
        '9AX' => 'E02004449',
        '9AY' => 'E02004449',
        '9AZ' => 'E02004449',
        '9BB' => 'E02004449',
        '9BD' => 'E02004449',
        '9BE' => 'E02004449',
        '9BF' => 'E02004449',
        '9BG' => 'E02004449',
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