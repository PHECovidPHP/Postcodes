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
final class SS1
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02003288',
        '1AB' => 'E02003293',
        '1AD' => 'E02003293',
        '1AE' => 'E02003293',
        '1AF' => 'E02003288',
        '1AG' => 'E02003293',
        '1AH' => 'E02003293',
        '1AJ' => 'E02003293',
        '1AL' => 'E02003293',
        '1AN' => 'E02003293',
        '1AP' => 'E02003293',
        '1AQ' => 'E02003288',
        '1AR' => 'E02003293',
        '1AS' => 'E02003293',
        '1AT' => 'E02003293',
        '1AU' => 'E02003293',
        '1AW' => 'E02003293',
        '1AX' => 'E02003288',
        '1AY' => 'E02003293',
        '1AZ' => 'E02003288',
        '1BA' => 'E02003288',
        '1BB' => 'E02003293',
        '1BD' => 'E02003293',
        '1BE' => 'E02003288',
        '1BF' => 'E02003293',
        '1BG' => 'E02003293',
        '1BH' => 'E02003293',
        '1BJ' => 'E02003293',
        '1BL' => 'E02003293',
        '1BN' => 'E02003293',
        '1BP' => 'E02003293',
        '1BQ' => 'E02003288',
        '1BS' => 'E02003288',
        '1BT' => 'E02003293',
        '1BU' => 'E02003293',
        '1BW' => 'E02003293',
        '1BX' => 'E02003293',
        '1BY' => 'E02003293',
        '1BZ' => 'E02003293',
        '1DA' => 'E02003293',
        '1DB' => 'E02003293',
        '1DD' => 'E02003293',
        '1DE' => 'E02003293',
        '1DF' => 'E02003293',
        '1DG' => 'E02003293',
        '1DH' => 'E02003293',
        '1DJ' => 'E02003293',
        '1DL' => 'E02003293',
        '1DN' => 'E02003293',
        '1DP' => 'E02003293',
        '1DQ' => 'E02003293',
        '1DR' => 'E02003293',
        '1DS' => 'E02003293',
        '1DT' => 'E02003293',
        '1DU' => 'E02003293',
        '1DW' => 'E02003293',
        '1DX' => 'E02003293',
        '1DY' => 'E02003293',
        '1DZ' => 'E02003293',
        '1EA' => 'E02003293',
        '1EB' => 'E02003293',
        '1ED' => 'E02003293',
        '1EE' => 'E02003293',
        '1EF' => 'E02003293',
        '1EG' => 'E02003293',
        '1EH' => 'E02003293',
        '1EJ' => 'E02003293',
        '1EL' => 'E02003293',
        '1EN' => 'E02003293',
        '1EP' => 'E02003293',
        '1EQ' => 'E02003293',
        '1ER' => 'E02003293',
        '1ES' => 'E02003293',
        '1ET' => 'E02003293',
        '1EU' => 'E02003293',
        '1EW' => 'E02003293',
        '1EX' => 'E02003293',
        '1EY' => 'E02003293',
        '1EZ' => 'E02003293',
        '1FA' => 'E02003293',
        '1FB' => 'E02003293',
        '1FD' => 'E02003293',
        '1FE' => 'E02003293',
        '1FF' => 'E02003293',
        '1FH' => 'E02003288',
        '1FL' => 'E02003293',
        '1FN' => 'E02003293',
        '1FP' => 'E02003293',
        '1FQ' => 'E02003293',
        '1FR' => 'E02003288',
        '1FS' => 'E02003293',
        '1FX' => 'E02003288',
        '1FZ' => 'E02003288',
        '1GL' => 'E02003293',
        '1HA' => 'E02003293',
        '1HB' => 'E02003293',
        '1HD' => 'E02003293',
        '1HE' => 'E02003293',
        '1HF' => 'E02003293',
        '1HG' => 'E02003293',
        '1HH' => 'E02003293',
        '1HJ' => 'E02003293',
        '1HL' => 'E02003288',
        '1HN' => 'E02003293',
        '1HP' => 'E02003293',
        '1HQ' => 'E02003293',
        '1HR' => 'E02003293',
        '1HS' => 'E02003293',
        '1HT' => 'E02003293',
        '1HU' => 'E02003288',
        '1HW' => 'E02003293',
        '1HX' => 'E02003288',
        '1HY' => 'E02003293',
        '1HZ' => 'E02003293',
        '1JA' => 'E02003293',
        '1JD' => 'E02003293',
        '1JE' => 'E02003293',
        '1JF' => 'E02003293',
        '1JG' => 'E02003293',
        '1JH' => 'E02003293',
        '1JJ' => 'E02003293',
        '1JL' => 'E02003293',
        '1JN' => 'E02003293',
        '1JP' => 'E02003293',
        '1JQ' => 'E02003293',
        '1JR' => 'E02003293',
        '1JS' => 'E02003293',
        '1JT' => 'E02003293',
        '1JU' => 'E02003293',
        '1JW' => 'E02003293',
        '1JX' => 'E02003293',
        '1JY' => 'E02003288',
        '1JZ' => 'E02003293',
        '1LA' => 'E02003293',
        '1LB' => 'E02003293',
        '1LD' => 'E02003293',
        '1LE' => 'E02003293',
        '1LF' => 'E02003293',
        '1LG' => 'E02003293',
        '1LH' => 'E02003293',
        '1LJ' => 'E02003293',
        '1LL' => 'E02003293',
        '1LN' => 'E02003293',
        '1LQ' => 'E02003293',
        '1LR' => 'E02003293',
        '1LS' => 'E02003293',
        '1LT' => 'E02003293',
        '1LU' => 'E02003293',
        '1LW' => 'E02003293',
        '1LX' => 'E02003293',
        '1LY' => 'E02003293',
        '1LZ' => 'E02003293',
        '1NA' => 'E02003293',
        '1NB' => 'E02003293',
        '1ND' => 'E02003293',
        '1NE' => 'E02003293',
        '1NF' => 'E02003293',
        '1NG' => 'E02003293',
        '1NH' => 'E02003293',
        '1NJ' => 'E02003293',
        '1NL' => 'E02003293',
        '1NN' => 'E02003293',
        '1NP' => 'E02003293',
        '1NQ' => 'E02003293',
        '1NR' => 'E02003293',
        '1NS' => 'E02003293',
        '1NT' => 'E02003293',
        '1NU' => 'E02003293',
        '1NW' => 'E02003293',
        '1NX' => 'E02003293',
        '1NY' => 'E02003293',
        '1NZ' => 'E02003288',
        '1PA' => 'E02003288',
        '1PB' => 'E02003293',
        '1PD' => 'E02003293',
        '1PE' => 'E02003288',
        '1PF' => 'E02003288',
        '1PG' => 'E02003293',
        '1PH' => 'E02003293',
        '1PJ' => 'E02003293',
        '1PL' => 'E02003288',
        '1PN' => 'E02003288',
        '1PP' => 'E02003288',
        '1PQ' => 'E02003293',
        '1PR' => 'E02003288',
        '1PS' => 'E02003293',
        '1PT' => 'E02003293',
        '1PU' => 'E02003293',
        '1PW' => 'E02003288',
        '1PX' => 'E02003293',
        '1PY' => 'E02003293',
        '1PZ' => 'E02003293',
        '1QA' => 'E02003293',
        '1QB' => 'E02003293',
        '1QD' => 'E02003293',
        '1QE' => 'E02003293',
        '1QF' => 'E02003288',
        '1QG' => 'E02003293',
        '1QH' => 'E02003293',
        '1QJ' => 'E02003293',
        '1QL' => 'E02003293',
        '1QQ' => 'E02003293',
        '1RA' => 'E02003293',
        '1RG' => 'E02003293',
        '1RJ' => 'E02003288',
        '1SJ' => 'E02003288',
        '1SS' => 'E02003293',
        '1ST' => 'E02003293',
        '1SX' => 'E02003293',
        '1SY' => 'E02003293',
        '1TE' => 'E02003288',
        '1TF' => 'E02003293',
        '1TG' => 'E02003288',
        '1TH' => 'E02003288',
        '1TJ' => 'E02003288',
        '1TL' => 'E02003288',
        '1TN' => 'E02003293',
        '1TQ' => 'E02003293',
        '1TS' => 'E02003293',
        '1TT' => 'E02003293',
        '1TW' => 'E02003288',
        '1WA' => 'E02003288',
        '1WB' => 'E02003288',
        '1WD' => 'E02003288',
        '1WE' => 'E02003288',
        '1WG' => 'E02003288',
        '1WH' => 'E02003288',
        '1WJ' => 'E02003288',
        '1WR' => 'E02003288',
        '1WS' => 'E02003288',
        '1WT' => 'E02003288',
        '1WU' => 'E02003288',
        '1WW' => 'E02003288',
        '1WX' => 'E02003288',
        '1WY' => 'E02003288',
        '1WZ' => 'E02003288',
        '1XE' => 'E02003288',
        '1YB' => 'E02003288',
        '1YY' => 'E02003288',
        '1YZ' => 'E02003288',
        '2AA' => 'E02003293',
        '2AB' => 'E02003288',
        '2AD' => 'E02003293',
        '2AE' => 'E02003292',
        '2AF' => 'E02003292',
        '2AG' => 'E02003292',
        '2AH' => 'E02003293',
        '2AJ' => 'E02003293',
        '2AL' => 'E02003293',
        '2AN' => 'E02003293',
        '2AP' => 'E02003293',
        '2AQ' => 'E02003292',
        '2AR' => 'E02003293',
        '2AS' => 'E02003293',
        '2AT' => 'E02003293',
        '2AU' => 'E02003293',
        '2AW' => 'E02003293',
        '2AX' => 'E02003293',
        '2AY' => 'E02003292',
        '2AZ' => 'E02003288',
        '2BA' => 'E02003293',
        '2BB' => 'E02003293',
        '2BD' => 'E02003293',
        '2BE' => 'E02003293',
        '2BF' => 'E02003288',
        '2BG' => 'E02003293',
        '2BH' => 'E02003293',
        '2BJ' => 'E02003293',
        '2BL' => 'E02003293',
        '2BN' => 'E02003293',
        '2BP' => 'E02003293',
        '2BQ' => 'E02003288',
        '2BS' => 'E02003293',
        '2BT' => 'E02003293',
        '2BU' => 'E02003293',
        '2BW' => 'E02003293',
        '2BX' => 'E02003293',
        '2BY' => 'E02003293',
        '2BZ' => 'E02003293',
        '2DA' => 'E02003294',
        '2DB' => 'E02003293',
        '2DD' => 'E02003293',
        '2DE' => 'E02003293',
        '2DF' => 'E02003292',
        '2DG' => 'E02003292',
        '2DH' => 'E02003288',
        '2DJ' => 'E02003292',
        '2DL' => 'E02003292',
        '2DN' => 'E02003292',
        '2DP' => 'E02003292',
        '2DQ' => 'E02003288',
        '2DR' => 'E02003292',
        '2DS' => 'E02003292',
        '2DT' => 'E02003292',
        '2DU' => 'E02003292',
        '2DW' => 'E02003292',
        '2DX' => 'E02003292',
        '2DY' => 'E02003292',
        '2DZ' => 'E02003292',
        '2EA' => 'E02003292',
        '2EB' => 'E02003292',
        '2ED' => 'E02003288',
        '2EE' => 'E02003292',
        '2EF' => 'E02003292',
        '2EG' => 'E02003292',
        '2EH' => 'E02003293',
        '2EJ' => 'E02003293',
        '2EL' => 'E02003292',
        '2EN' => 'E02003292',
        '2EP' => 'E02003292',
        '2EQ' => 'E02003293',
        '2ER' => 'E02003292',
        '2ES' => 'E02003292',
        '2ET' => 'E02003292',
        '2EU' => 'E02003292',
        '2EW' => 'E02003292',
        '2EX' => 'E02003288',
        '2EY' => 'E02003292',
        '2EZ' => 'E02003292',
        '2FA' => 'E02003288',
        '2FB' => 'E02003292',
        '2FD' => 'E02003293',
        '2FE' => 'E02003293',
        '2FF' => 'E02003293',
        '2FG' => 'E02003293',
        '2FH' => 'E02003293',
        '2FJ' => 'E02003292',
        '2FL' => 'E02003288',
        '2FN' => 'E02003288',
        '2FP' => 'E02003292',
        '2FQ' => 'E02003293',
        '2FR' => 'E02003294',
        '2FS' => 'E02003292',
        '2FT' => 'E02003292',
        '2FU' => 'E02003288',
        '2FW' => 'E02003292',
        '2FX' => 'E02003288',
        '2FY' => 'E02003292',
        '2FZ' => 'E02003288',
        '2GA' => 'E02003288',
        '2GB' => 'E02003292',
        '2GD' => 'E02003292',
        '2GE' => 'E02003288',
        '2GF' => 'E02003288',
        '2GG' => 'E02003293',
        '2GH' => 'E02003292',
        '2GJ' => 'E02003292',
        '2GL' => 'E02003293',
        '2GN' => 'E02003292',
        '2GP' => 'E02003288',
        '2GQ' => 'E02003292',
        '2GR' => 'E02003288',
        '2GT' => 'E02003293',
        '2GU' => 'E02003288',
        '2GW' => 'E02003292',
        '2GX' => 'E02003288',
        '2GY' => 'E02003288',
        '2GZ' => 'E02003288',
        '2HA' => 'E02003292',
        '2HB' => 'E02003292',
        '2HD' => 'E02003292',
        '2HE' => 'E02003292',
        '2HF' => 'E02003292',
        '2HG' => 'E02003292',
        '2HH' => 'E02003292',
        '2HJ' => 'E02003292',
        '2HL' => 'E02003292',
        '2HN' => 'E02003292',
        '2HP' => 'E02003292',
        '2HQ' => 'E02003292',
        '2HR' => 'E02003292',
        '2HS' => 'E02003292',
        '2HT' => 'E02003292',
        '2HU' => 'E02003292',
        '2HW' => 'E02003292',
        '2HX' => 'E02003292',
        '2HZ' => 'E02003292',
        '2JA' => 'E02003292',
        '2JB' => 'E02003292',
        '2JD' => 'E02003292',
        '2JE' => 'E02003293',
        '2JF' => 'E02003288',
        '2JG' => 'E02003292',
        '2JH' => 'E02003293',
        '2JJ' => 'E02003293',
        '2JL' => 'E02003293',
        '2JN' => 'E02003293',
        '2JP' => 'E02003293',
        '2JQ' => 'E02003293',
        '2JR' => 'E02003292',
        '2JS' => 'E02003293',
        '2JT' => 'E02003292',
        '2JU' => 'E02003293',
        '2JW' => 'E02003288',
        '2JX' => 'E02003293',
        '2JY' => 'E02003293',
        '2JZ' => 'E02003293',
        '2LA' => 'E02003292',
        '2LB' => 'E02003292',
        '2LD' => 'E02003288',
        '2LE' => 'E02003292',
        '2LG' => 'E02003293',
        '2LH' => 'E02003293',
        '2LJ' => 'E02003293',
        '2LL' => 'E02003292',
        '2LN' => 'E02003292',
        '2LP' => 'E02003288',
        '2LQ' => 'E02003293',
        '2LR' => 'E02003292',
        '2LS' => 'E02003292',
        '2LT' => 'E02003292',
        '2LU' => 'E02003293',
        '2LW' => 'E02003288',
        '2LX' => 'E02003293',
        '2LY' => 'E02003292',
        '2LZ' => 'E02003293',
        '2NA' => 'E02003292',
        '2NB' => 'E02003293',
        '2ND' => 'E02003293',
        '2NE' => 'E02003293',
        '2NF' => 'E02003292',
        '2NG' => 'E02003288',
        '2NH' => 'E02003287',
        '2NJ' => 'E02003287',
        '2NL' => 'E02003288',
        '2NN' => 'E02003288',
        '2NP' => 'E02003292',
        '2NQ' => 'E02003293',
        '2NR' => 'E02003292',
        '2NS' => 'E02003292',
        '2NT' => 'E02003292',
        '2NU' => 'E02003292',
        '2NW' => 'E02003288',
        '2NX' => 'E02003288',
        '2NY' => 'E02003288',
        '2NZ' => 'E02003288',
        '2PA' => 'E02003292',
        '2PB' => 'E02003292',
        '2PD' => 'E02003292',
        '2PE' => 'E02003292',
        '2PF' => 'E02003292',
        '2PG' => 'E02003292',
        '2PH' => 'E02003292',
        '2PJ' => 'E02003288',
        '2PL' => 'E02003292',
        '2PN' => 'E02003292',
        '2PP' => 'E02003287',
        '2PQ' => 'E02003292',
        '2PR' => 'E02003287',
        '2PS' => 'E02003287',
        '2PT' => 'E02003292',
        '2PU' => 'E02003292',
        '2PW' => 'E02003292',
        '2PX' => 'E02003288',
        '2PY' => 'E02003288',
        '2PZ' => 'E02003292',
        '2QA' => 'E02003292',
        '2QB' => 'E02003292',
        '2QD' => 'E02003292',
        '2QE' => 'E02003288',
        '2QF' => 'E02003287',
        '2QG' => 'E02003287',
        '2QH' => 'E02003287',
        '2QJ' => 'E02003287',
        '2QL' => 'E02003287',
        '2QN' => 'E02003287',
        '2QP' => 'E02003288',
        '2QQ' => 'E02003287',
        '2QR' => 'E02003287',
        '2QS' => 'E02003287',
        '2QT' => 'E02003292',
        '2QU' => 'E02003292',
        '2QW' => 'E02003287',
        '2QX' => 'E02003292',
        '2QY' => 'E02003292',
        '2QZ' => 'E02003292',
        '2RA' => 'E02003292',
        '2RB' => 'E02003292',
        '2RD' => 'E02003292',
        '2RE' => 'E02003292',
        '2RF' => 'E02003292',
        '2RG' => 'E02003292',
        '2RH' => 'E02003292',
        '2RJ' => 'E02003292',
        '2RL' => 'E02003292',
        '2RN' => 'E02003288',
        '2RP' => 'E02003292',
        '2RQ' => 'E02003292',
        '2RR' => 'E02003292',
        '2RS' => 'E02003292',
        '2RT' => 'E02003292',
        '2RU' => 'E02003292',
        '2RW' => 'E02003292',
        '2RX' => 'E02003292',
        '2RY' => 'E02003292',
        '2RZ' => 'E02003288',
        '2SA' => 'E02003292',
        '2SB' => 'E02003292',
        '2SD' => 'E02003292',
        '2SE' => 'E02003292',
        '2SF' => 'E02003294',
        '2SG' => 'E02003294',
        '2SH' => 'E02003294',
        '2SJ' => 'E02003294',
        '2SL' => 'E02003292',
        '2SN' => 'E02003292',
        '2SP' => 'E02003292',
        '2SQ' => 'E02003294',
        '2SR' => 'E02003292',
        '2SS' => 'E02003292',
        '2ST' => 'E02003292',
        '2SU' => 'E02003292',
        '2SW' => 'E02003292',
        '2SX' => 'E02003294',
        '2SY' => 'E02003294',
        '2SZ' => 'E02003294',
        '2TA' => 'E02003294',
        '2TB' => 'E02003294',
        '2TD' => 'E02003292',
        '2TE' => 'E02003292',
        '2TF' => 'E02003292',
        '2TG' => 'E02003294',
        '2TH' => 'E02003292',
        '2TJ' => 'E02003292',
        '2TL' => 'E02003292',
        '2TN' => 'E02003292',
        '2TP' => 'E02003292',
        '2TQ' => 'E02003294',
        '2TR' => 'E02003292',
        '2TS' => 'E02003292',
        '2TT' => 'E02003288',
        '2TU' => 'E02003292',
        '2TW' => 'E02003292',
        '2TX' => 'E02003292',
        '2TY' => 'E02003292',
        '2TZ' => 'E02003292',
        '2UA' => 'E02003294',
        '2UB' => 'E02003294',
        '2UD' => 'E02003294',
        '2UE' => 'E02003294',
        '2UF' => 'E02003294',
        '2UG' => 'E02003294',
        '2UH' => 'E02003294',
        '2UJ' => 'E02003294',
        '2UL' => 'E02003294',
        '2UN' => 'E02003294',
        '2UP' => 'E02003292',
        '2UQ' => 'E02003294',
        '2UR' => 'E02003292',
        '2US' => 'E02003288',
        '2UT' => 'E02003292',
        '2UU' => 'E02003294',
        '2UW' => 'E02003294',
        '2UX' => 'E02003292',
        '2UY' => 'E02003292',
        '2UZ' => 'E02003292',
        '2WA' => 'E02003288',
        '2WB' => 'E02003288',
        '2WD' => 'E02003288',
        '2WE' => 'E02003288',
        '2WF' => 'E02003288',
        '2WG' => 'E02003288',
        '2WH' => 'E02003288',
        '2WJ' => 'E02003288',
        '2WL' => 'E02003288',
        '2WN' => 'E02003288',
        '2WP' => 'E02003288',
        '2WQ' => 'E02003288',
        '2WR' => 'E02003288',
        '2WS' => 'E02003293',
        '2WT' => 'E02003288',
        '2WU' => 'E02003292',
        '2WW' => 'E02003292',
        '2WX' => 'E02003288',
        '2WY' => 'E02003288',
        '2WZ' => 'E02003288',
        '2XA' => 'E02003294',
        '2XB' => 'E02003294',
        '2XD' => 'E02003294',
        '2XE' => 'E02003294',
        '2XF' => 'E02003294',
        '2XG' => 'E02003294',
        '2XH' => 'E02003294',
        '2XJ' => 'E02003294',
        '2XL' => 'E02003294',
        '2XN' => 'E02003294',
        '2XP' => 'E02003294',
        '2XQ' => 'E02003294',
        '2XR' => 'E02003294',
        '2XS' => 'E02003294',
        '2XT' => 'E02003294',
        '2XU' => 'E02003294',
        '2XW' => 'E02003294',
        '2XX' => 'E02003287',
        '2XY' => 'E02003287',
        '2XZ' => 'E02003288',
        '2YA' => 'E02003294',
        '2YB' => 'E02003294',
        '2YD' => 'E02003294',
        '2YE' => 'E02003294',
        '2YF' => 'E02003294',
        '2YG' => 'E02003294',
        '2YH' => 'E02003294',
        '2YJ' => 'E02003294',
        '2YL' => 'E02003294',
        '2YN' => 'E02003294',
        '2YP' => 'E02003294',
        '2YQ' => 'E02003294',
        '2YR' => 'E02003294',
        '2YS' => 'E02003294',
        '2YT' => 'E02003294',
        '2YU' => 'E02003294',
        '2YW' => 'E02003294',
        '2YX' => 'E02003292',
        '2YY' => 'E02003292',
        '2YZ' => 'E02003292',
        '2ZA' => 'E02003288',
        '2ZB' => 'E02003288',
        '2ZD' => 'E02003288',
        '2ZE' => 'E02003288',
        '2ZF' => 'E02003288',
        '2ZG' => 'E02003292',
        '2ZH' => 'E02003288',
        '2ZJ' => 'E02003292',
        '2ZL' => 'E02003288',
        '2ZN' => 'E02003288',
        '2ZP' => 'E02003288',
        '2ZQ' => 'E02003288',
        '2ZR' => 'E02003288',
        '2ZS' => 'E02003292',
        '2ZT' => 'E02003288',
        '2ZU' => 'E02003292',
        '3AA' => 'E02003294',
        '3AB' => 'E02003294',
        '3AD' => 'E02003294',
        '3AE' => 'E02003294',
        '3AF' => 'E02003294',
        '3AG' => 'E02003294',
        '3AH' => 'E02003294',
        '3AJ' => 'E02003294',
        '3AL' => 'E02003294',
        '3AN' => 'E02003294',
        '3AP' => 'E02003294',
        '3AQ' => 'E02003294',
        '3AR' => 'E02003294',
        '3AS' => 'E02003294',
        '3AT' => 'E02003294',
        '3AU' => 'E02003294',
        '3AW' => 'E02003294',
        '3AX' => 'E02003294',
        '3AY' => 'E02003294',
        '3AZ' => 'E02003294',
        '3BA' => 'E02003294',
        '3BB' => 'E02003294',
        '3BD' => 'E02003294',
        '3BE' => 'E02003294',
        '3BF' => 'E02003288',
        '3BG' => 'E02003294',
        '3BH' => 'E02003294',
        '3BJ' => 'E02003294',
        '3BL' => 'E02003294',
        '3BN' => 'E02003294',
        '3BP' => 'E02003294',
        '3BQ' => 'E02003294',
        '3BS' => 'E02003294',
        '3BT' => 'E02003294',
        '3BU' => 'E02003288',
        '3BW' => 'E02003294',
        '3BX' => 'E02003294',
        '3BY' => 'E02003294',
        '3BZ' => 'E02003288',
        '3DA' => 'E02003294',
        '3DB' => 'E02003294',
        '3DD' => 'E02003294',
        '3DE' => 'E02003294',
        '3DF' => 'E02003294',
        '3DG' => 'E02003294',
        '3DH' => 'E02003294',
        '3DJ' => 'E02003294',
        '3DL' => 'E02003294',
        '3DN' => 'E02003294',
        '3DP' => 'E02003294',
        '3DQ' => 'E02003294',
        '3DR' => 'E02003294',
        '3DS' => 'E02003294',
        '3DT' => 'E02003294',
        '3DU' => 'E02003294',
        '3DW' => 'E02003294',
        '3DX' => 'E02003294',
        '3DY' => 'E02003294',
        '3DZ' => 'E02003294',
        '3EA' => 'E02003294',
        '3EB' => 'E02003294',
        '3ED' => 'E02003294',
        '3EE' => 'E02003294',
        '3EF' => 'E02003294',
        '3EG' => 'E02003294',
        '3EH' => 'E02003294',
        '3EJ' => 'E02003294',
        '3EL' => 'E02003294',
        '3EN' => 'E02003288',
        '3EP' => 'E02003294',
        '3EQ' => 'E02003294',
        '3ER' => 'E02003294',
        '3ES' => 'E02003294',
        '3ET' => 'E02003294',
        '3EU' => 'E02003294',
        '3EW' => 'E02003294',
        '3EX' => 'E02003294',
        '3EY' => 'E02003294',
        '3EZ' => 'E02003294',
        '3FB' => 'E02003294',
        '3FD' => 'E02003288',
        '3FE' => 'E02003288',
        '3FF' => 'E02003294',
        '3FG' => 'E02003288',
        '3FH' => 'E02003294',
        '3FJ' => 'E02003294',
        '3FL' => 'E02003294',
        '3FN' => 'E02003294',
        '3FP' => 'E02003294',
        '3FQ' => 'E02003288',
        '3FR' => 'E02003288',
        '3FS' => 'E02003288',
        '3FT' => 'E02003288',
        '3FW' => 'E02003294',
        '3FX' => 'E02003294',
        '3FY' => 'E02003288',
        '3FZ' => 'E02003288',
        '3GA' => 'E02003294',
        '3GB' => 'E02003288',
        '3GD' => 'E02003288',
        '3GE' => 'E02003288',
        '3GR' => 'E02003294',
        '3GW' => 'E02003288',
        '3HA' => 'E02003294',
        '3HB' => 'E02003294',
        '3HD' => 'E02003294',
        '3HE' => 'E02003294',
        '3HF' => 'E02003294',
        '3HG' => 'E02003294',
        '3HH' => 'E02003294',
        '3HJ' => 'E02003294',
        '3HL' => 'E02003294',
        '3HN' => 'E02003288',
        '3HP' => 'E02003294',
        '3HQ' => 'E02003294',
        '3HR' => 'E02003294',
        '3HS' => 'E02003288',
        '3HT' => 'E02003294',
        '3HU' => 'E02003294',
        '3HW' => 'E02003288',
        '3HX' => 'E02003294',
        '3HY' => 'E02003294',
        '3HZ' => 'E02003294',
        '3JA' => 'E02003294',
        '3JB' => 'E02003294',
        '3JD' => 'E02003294',
        '3JE' => 'E02003294',
        '3JF' => 'E02003294',
        '3JG' => 'E02003294',
        '3JH' => 'E02003294',
        '3JJ' => 'E02003294',
        '3JL' => 'E02003294',
        '3JN' => 'E02003294',
        '3JP' => 'E02003294',
        '3JQ' => 'E02003294',
        '3JR' => 'E02003294',
        '3JS' => 'E02003294',
        '3JT' => 'E02003294',
        '3JU' => 'E02003294',
        '3JW' => 'E02003294',
        '3JX' => 'E02003294',
        '3JY' => 'E02003294',
        '3JZ' => 'E02003294',
        '3LA' => 'E02003294',
        '3LB' => 'E02003294',
        '3LD' => 'E02003294',
        '3LE' => 'E02003294',
        '3LF' => 'E02003294',
        '3LG' => 'E02003294',
        '3LH' => 'E02003294',
        '3LJ' => 'E02003294',
        '3LL' => 'E02003294',
        '3LN' => 'E02003294',
        '3LP' => 'E02003294',
        '3LQ' => 'E02003294',
        '3LR' => 'E02003294',
        '3LS' => 'E02003288',
        '3LT' => 'E02003294',
        '3LU' => 'E02003294',
        '3LW' => 'E02003294',
        '3LX' => 'E02003295',
        '3LY' => 'E02003294',
        '3LZ' => 'E02003294',
        '3NA' => 'E02003295',
        '3NB' => 'E02003295',
        '3ND' => 'E02003295',
        '3NE' => 'E02003294',
        '3NF' => 'E02003294',
        '3NG' => 'E02003294',
        '3NH' => 'E02003294',
        '3NJ' => 'E02003294',
        '3NL' => 'E02003294',
        '3NN' => 'E02003294',
        '3NP' => 'E02003294',
        '3NQ' => 'E02003294',
        '3NR' => 'E02003294',
        '3NS' => 'E02003294',
        '3NT' => 'E02003295',
        '3NU' => 'E02003287',
        '3NW' => 'E02003294',
        '3NX' => 'E02003287',
        '3NY' => 'E02003287',
        '3NZ' => 'E02003295',
        '3PA' => 'E02003287',
        '3PB' => 'E02003287',
        '3PD' => 'E02003287',
        '3PE' => 'E02003287',
        '3PF' => 'E02003287',
        '3PG' => 'E02003287',
        '3PH' => 'E02003287',
        '3PJ' => 'E02003287',
        '3PL' => 'E02003287',
        '3PN' => 'E02003287',
        '3PP' => 'E02003287',
        '3PQ' => 'E02003287',
        '3PR' => 'E02003287',
        '3PS' => 'E02003287',
        '3PT' => 'E02003287',
        '3PU' => 'E02003287',
        '3PW' => 'E02003287',
        '3PX' => 'E02003287',
        '3PY' => 'E02003287',
        '3PZ' => 'E02003287',
        '3QA' => 'E02003287',
        '3QB' => 'E02003287',
        '3QD' => 'E02003287',
        '3QE' => 'E02003287',
        '3QF' => 'E02003287',
        '3QG' => 'E02003287',
        '3QH' => 'E02003287',
        '3QJ' => 'E02003288',
        '3QL' => 'E02003294',
        '3QN' => 'E02003294',
        '3QP' => 'E02003287',
        '3QQ' => 'E02003287',
        '3QR' => 'E02003287',
        '3QS' => 'E02003287',
        '3QT' => 'E02003287',
        '3QU' => 'E02003287',
        '3QW' => 'E02003287',
        '3QX' => 'E02003287',
        '3QY' => 'E02003287',
        '3QZ' => 'E02003287',
        '3RA' => 'E02003287',
        '3RB' => 'E02003287',
        '3RD' => 'E02003287',
        '3RE' => 'E02003294',
        '3RG' => 'E02003287',
        '3RH' => 'E02003287',
        '3RJ' => 'E02003287',
        '3RL' => 'E02003287',
        '3RN' => 'E02003287',
        '3RP' => 'E02003287',
        '3RQ' => 'E02003287',
        '3RR' => 'E02003287',
        '3RS' => 'E02003287',
        '3RT' => 'E02003287',
        '3RU' => 'E02003294',
        '3RW' => 'E02003287',
        '3RX' => 'E02003294',
        '3RY' => 'E02003288',
        '3SA' => 'E02003288',
        '3SB' => 'E02003287',
        '3SD' => 'E02003287',
        '3SE' => 'E02003287',
        '3SF' => 'E02003287',
        '3SG' => 'E02003287',
        '3SH' => 'E02003287',
        '3SJ' => 'E02003287',
        '3SL' => 'E02003287',
        '3SN' => 'E02003287',
        '3SP' => 'E02003287',
        '3SQ' => 'E02003287',
        '3SR' => 'E02003287',
        '3SS' => 'E02003287',
        '3ST' => 'E02003287',
        '3SU' => 'E02003287',
        '3SW' => 'E02003287',
        '3SX' => 'E02003287',
        '3SY' => 'E02003287',
        '3SZ' => 'E02003287',
        '3TA' => 'E02003287',
        '3TB' => 'E02003287',
        '3TD' => 'E02003287',
        '3TE' => 'E02003288',
        '3TG' => 'E02003288',
        '3TH' => 'E02003294',
        '3TP' => 'E02003288',
        '3TS' => 'E02003295',
        '3TT' => 'E02003295',
        '3TX' => 'E02003295',
        '3TY' => 'E02003295',
        '3TZ' => 'E02003295',
        '3UA' => 'E02003287',
        '3UB' => 'E02003287',
        '3UD' => 'E02003287',
        '3UE' => 'E02003294',
        '3WA' => 'E02003294',
        '3WB' => 'E02003294',
        '3WD' => 'E02003288',
        '3WE' => 'E02003288',
        '3WF' => 'E02003294',
        '3WG' => 'E02003288',
        '3WH' => 'E02003288',
        '3WQ' => 'E02003288',
        '3WR' => 'E02003294',
        '3WS' => 'E02003288',
        '3WT' => 'E02003288',
        '3WU' => 'E02003288',
        '3WW' => 'E02003288',
        '3WX' => 'E02003294',
        '3WY' => 'E02003288',
        '3WZ' => 'E02003288',
        '3YB' => 'E02003288',
        '3YQ' => 'E02003288',
        '3YR' => 'E02003288',
        '3YT' => 'E02003287',
        '3YZ' => 'E02003288',
        '9AA' => 'E02003288',
        '9AB' => 'E02003288',
        '9AD' => 'E02003288',
        '9AE' => 'E02003288',
        '9AF' => 'E02003288',
        '9AG' => 'E02003288',
        '9AH' => 'E02003288',
        '9AJ' => 'E02003288',
        '9AL' => 'E02003288',
        '9AN' => 'E02003288',
        '9AP' => 'E02003288',
        '9AQ' => 'E02003288',
        '9AR' => 'E02003288',
        '9AS' => 'E02003288',
        '9AT' => 'E02003288',
        '9AU' => 'E02003288',
        '9AW' => 'E02003288',
        '9AX' => 'E02003288',
        '9AY' => 'E02003288',
        '9AZ' => 'E02003288',
        '9BA' => 'E02003288',
        '9BB' => 'E02003288',
        '9BD' => 'E02003288',
        '9BE' => 'E02003288',
        '9BF' => 'E02003288',
        '9BG' => 'E02003288',
        '9BH' => 'E02003288',
        '9BJ' => 'E02003288',
        '9BL' => 'E02003288',
        '9BN' => 'E02003288',
        '9BP' => 'E02003288',
        '9BQ' => 'E02003288',
        '9BR' => 'E02003288',
        '9BS' => 'E02003288',
        '9BT' => 'E02003288',
        '9BU' => 'E02003288',
        '9BW' => 'E02003288',
        '9BX' => 'E02003288',
        '9BY' => 'E02003288',
        '9BZ' => 'E02003288',
        '9DA' => 'E02003288',
        '9DB' => 'E02003288',
        '9DD' => 'E02003288',
        '9DE' => 'E02003288',
        '9DF' => 'E02003288',
        '9DG' => 'E02003288',
        '9DH' => 'E02003288',
        '9DJ' => 'E02003288',
        '9DL' => 'E02003288',
        '9DN' => 'E02003288',
        '9DP' => 'E02003288',
        '9DQ' => 'E02003288',
        '9DR' => 'E02003288',
        '9DS' => 'E02003288',
        '9DT' => 'E02003288',
        '9DU' => 'E02003288',
        '9DW' => 'E02003288',
        '9DX' => 'E02003288',
        '9DY' => 'E02003288',
        '9DZ' => 'E02003288',
        '9EA' => 'E02003288',
        '9EB' => 'E02003288',
        '9ED' => 'E02003288',
        '9EE' => 'E02003288',
        '9EF' => 'E02003288',
        '9EG' => 'E02003288',
        '9EH' => 'E02003288',
        '9EJ' => 'E02003288',
        '9EL' => 'E02003288',
        '9EN' => 'E02003288',
        '9EP' => 'E02003288',
        '9EQ' => 'E02003288',
        '9ER' => 'E02003288',
        '9ES' => 'E02003288',
        '9ET' => 'E02003288',
        '9EU' => 'E02003288',
        '9EW' => 'E02003288',
        '9EX' => 'E02003288',
        '9EY' => 'E02003288',
        '9EZ' => 'E02003288',
        '9FA' => 'E02003288',
        '9FB' => 'E02003288',
        '9FD' => 'E02003288',
        '9FE' => 'E02003288',
        '9FF' => 'E02003288',
        '9FG' => 'E02003288',
        '9FH' => 'E02003288',
        '9FJ' => 'E02003288',
        '9FL' => 'E02003288',
        '9FN' => 'E02003288',
        '9FP' => 'E02003288',
        '9FQ' => 'E02003288',
        '9FR' => 'E02003288',
        '9FS' => 'E02003288',
        '9FT' => 'E02003288',
        '9FU' => 'E02003288',
        '9FW' => 'E02003288',
        '9FX' => 'E02003288',
        '9FY' => 'E02003288',
        '9FZ' => 'E02003288',
        '9GA' => 'E02003288',
        '9GB' => 'E02003288',
        '9GD' => 'E02003288',
        '9GE' => 'E02003288',
        '9GF' => 'E02003288',
        '9GG' => 'E02003288',
        '9GH' => 'E02003288',
        '9GJ' => 'E02003288',
        '9GL' => 'E02003288',
        '9GN' => 'E02003288',
        '9GP' => 'E02003288',
        '9GQ' => 'E02003288',
        '9GR' => 'E02003288',
        '9GS' => 'E02003288',
        '9GT' => 'E02003288',
        '9GU' => 'E02003288',
        '9GW' => 'E02003288',
        '9GX' => 'E02003288',
        '9GY' => 'E02003288',
        '9GZ' => 'E02003288',
        '9HA' => 'E02003288',
        '9HB' => 'E02003288',
        '9HD' => 'E02003288',
        '9HE' => 'E02003288',
        '9HF' => 'E02003288',
        '9HG' => 'E02003288',
        '9HH' => 'E02003288',
        '9HJ' => 'E02003288',
        '9HL' => 'E02003288',
        '9HN' => 'E02003288',
        '9HP' => 'E02003288',
        '9HQ' => 'E02003288',
        '9HR' => 'E02003288',
        '9HT' => 'E02003288',
        '9HU' => 'E02003288',
        '9HW' => 'E02003288',
        '9HX' => 'E02003288',
        '9HY' => 'E02003288',
        '9HZ' => 'E02003288',
        '9JA' => 'E02003288',
        '9JB' => 'E02003288',
        '9JD' => 'E02003288',
        '9JE' => 'E02003288',
        '9JF' => 'E02003288',
        '9JG' => 'E02003288',
        '9JH' => 'E02003288',
        '9JJ' => 'E02003288',
        '9JL' => 'E02003288',
        '9JN' => 'E02003288',
        '9JP' => 'E02003288',
        '9JQ' => 'E02003288',
        '9JR' => 'E02003288',
        '9JS' => 'E02003288',
        '9JT' => 'E02003288',
        '9JU' => 'E02003288',
        '9JW' => 'E02003288',
        '9JX' => 'E02003288',
        '9JY' => 'E02003288',
        '9JZ' => 'E02003288',
        '9LA' => 'E02003288',
        '9LB' => 'E02003288',
        '9LD' => 'E02003288',
        '9LE' => 'E02003288',
        '9LF' => 'E02003288',
        '9LG' => 'E02003288',
        '9LH' => 'E02003288',
        '9LJ' => 'E02003288',
        '9LL' => 'E02003288',
        '9LN' => 'E02003288',
        '9LP' => 'E02003288',
        '9LQ' => 'E02003288',
        '9LR' => 'E02003288',
        '9LS' => 'E02003288',
        '9LT' => 'E02003288',
        '9LU' => 'E02003288',
        '9LW' => 'E02003288',
        '9LX' => 'E02003288',
        '9LY' => 'E02003288',
        '9LZ' => 'E02003288',
        '9NA' => 'E02003288',
        '9NB' => 'E02003288',
        '9ND' => 'E02003288',
        '9NE' => 'E02003288',
        '9NF' => 'E02003288',
        '9NG' => 'E02003288',
        '9NH' => 'E02003288',
        '9NJ' => 'E02003288',
        '9NL' => 'E02003288',
        '9NN' => 'E02003288',
        '9NP' => 'E02003288',
        '9NQ' => 'E02003288',
        '9NR' => 'E02003288',
        '9NS' => 'E02003288',
        '9NT' => 'E02003288',
        '9NU' => 'E02003288',
        '9NW' => 'E02003288',
        '9NX' => 'E02003288',
        '9NY' => 'E02003288',
        '9NZ' => 'E02003288',
        '9PA' => 'E02003288',
        '9PB' => 'E02003288',
        '9PD' => 'E02003288',
        '9PE' => 'E02003288',
        '9PF' => 'E02003288',
        '9PG' => 'E02003288',
        '9PJ' => 'E02003288',
        '9PL' => 'E02003288',
        '9PN' => 'E02003288',
        '9PP' => 'E02003288',
        '9PQ' => 'E02003288',
        '9PR' => 'E02003288',
        '9PS' => 'E02003288',
        '9PT' => 'E02003288',
        '9PU' => 'E02003288',
        '9PW' => 'E02003288',
        '9PX' => 'E02003288',
        '9PY' => 'E02003288',
        '9PZ' => 'E02003288',
        '9QA' => 'E02003288',
        '9QB' => 'E02003288',
        '9QD' => 'E02003288',
        '9QE' => 'E02003288',
        '9QF' => 'E02003288',
        '9QG' => 'E02003288',
        '9QH' => 'E02003288',
        '9QJ' => 'E02003288',
        '9QL' => 'E02003288',
        '9QN' => 'E02003288',
        '9QP' => 'E02003288',
        '9QQ' => 'E02003288',
        '9QR' => 'E02003288',
        '9QS' => 'E02003288',
        '9QT' => 'E02003288',
        '9QU' => 'E02003288',
        '9QW' => 'E02003288',
        '9QX' => 'E02003288',
        '9QY' => 'E02003288',
        '9QZ' => 'E02003288',
        '9RA' => 'E02003288',
        '9RB' => 'E02003288',
        '9RD' => 'E02003288',
        '9RE' => 'E02003288',
        '9RF' => 'E02003288',
        '9RG' => 'E02003288',
        '9RH' => 'E02003288',
        '9RJ' => 'E02003288',
        '9RL' => 'E02003288',
        '9RN' => 'E02003288',
        '9RP' => 'E02003288',
        '9RQ' => 'E02003288',
        '9RR' => 'E02003288',
        '9RS' => 'E02003288',
        '9RT' => 'E02003288',
        '9RU' => 'E02003288',
        '9RW' => 'E02003288',
        '9RY' => 'E02003288',
        '9RZ' => 'E02003288',
        '9SA' => 'E02003288',
        '9SB' => 'E02003288',
        '9SD' => 'E02003288',
        '9SE' => 'E02003288',
        '9SF' => 'E02003288',
        '9SG' => 'E02003288',
        '9SH' => 'E02003288',
        '9SJ' => 'E02003288',
        '9SL' => 'E02003288',
        '9SN' => 'E02003288',
        '9SP' => 'E02003288',
        '9SQ' => 'E02003288',
        '9SR' => 'E02003288',
        '9SS' => 'E02003288',
        '9ST' => 'E02003288',
        '9SU' => 'E02003288',
        '9SW' => 'E02003288',
        '9SX' => 'E02003288',
        '9SY' => 'E02003288',
        '9SZ' => 'E02003288',
        '9TA' => 'E02003288',
        '9TB' => 'E02003288',
        '9TD' => 'E02003288',
        '9TE' => 'E02003288',
        '9TF' => 'E02003288',
        '9TG' => 'E02003288',
        '9TH' => 'E02003288',
        '9TJ' => 'E02003288',
        '9TL' => 'E02003288',
        '9TP' => 'E02003288',
        '9TQ' => 'E02003288',
        '9TR' => 'E02003288',
        '9TS' => 'E02003288',
        '9TT' => 'E02003288',
        '9TU' => 'E02003288',
        '9TW' => 'E02003288',
        '9TX' => 'E02003288',
        '9TY' => 'E02003288',
        '9TZ' => 'E02003288',
        '9UA' => 'E02003288',
        '9UB' => 'E02003288',
        '9UD' => 'E02003288',
        '9UE' => 'E02003288',
        '9UF' => 'E02003288',
        '9UG' => 'E02003288',
        '9UH' => 'E02003288',
        '9UJ' => 'E02003288',
        '9UL' => 'E02003288',
        '9UN' => 'E02003288',
        '9UP' => 'E02003288',
        '9UQ' => 'E02003288',
        '9UR' => 'E02003288',
        '9US' => 'E02003288',
        '9UT' => 'E02003288',
        '9UU' => 'E02003288',
        '9UW' => 'E02003288',
        '9UX' => 'E02003288',
        '9UY' => 'E02003288',
        '9UZ' => 'E02003288',
        '9WB' => 'E02003288',
        '9WD' => 'E02003288',
        '9WE' => 'E02003288',
        '9WF' => 'E02003288',
        '9WG' => 'E02003288',
        '9WH' => 'E02003288',
        '9WJ' => 'E02003288',
        '9WL' => 'E02003288',
        '9WN' => 'E02003288',
        '9WP' => 'E02003288',
        '9WQ' => 'E02003288',
        '9WR' => 'E02003288',
        '9WS' => 'E02003288',
        '9WT' => 'E02003288',
        '9WU' => 'E02003288',
        '9WW' => 'E02003288',
        '9WX' => 'E02003288',
        '9WY' => 'E02003288',
        '9WZ' => 'E02003288',
        '9XA' => 'E02003288',
        '9XB' => 'E02003288',
        '9XD' => 'E02003288',
        '9XE' => 'E02003288',
        '9XF' => 'E02003288',
        '9XG' => 'E02003288',
        '9XH' => 'E02003288',
        '9XJ' => 'E02003288',
        '9XL' => 'E02003288',
        '9XN' => 'E02003288',
        '9XP' => 'E02003288',
        '9XQ' => 'E02003288',
        '9XR' => 'E02003288',
        '9XT' => 'E02003288',
        '9XU' => 'E02003288',
        '9XW' => 'E02003288',
        '9XX' => 'E02003288',
        '9XZ' => 'E02003288',
        '9YA' => 'E02003288',
        '9YB' => 'E02003288',
        '9YD' => 'E02003288',
        '9YE' => 'E02003288',
        '9YF' => 'E02003288',
        '9YG' => 'E02003288',
        '9YH' => 'E02003288',
        '9YJ' => 'E02003288',
        '9YL' => 'E02003288',
        '9YN' => 'E02003288',
        '9YP' => 'E02003288',
        '9YQ' => 'E02003288',
        '9YR' => 'E02003288',
        '9YS' => 'E02003288',
        '9YT' => 'E02003288',
        '9YU' => 'E02003288',
        '9YW' => 'E02003288',
        '9YX' => 'E02003288',
        '9YY' => 'E02003288',
        '9YZ' => 'E02003288',
        '9ZY' => 'E02003288',
        '9ZZ' => 'E02003288',
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
