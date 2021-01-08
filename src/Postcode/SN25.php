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
final class SN25
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AB' => 'E02006848',
        '1AD' => 'E02006847',
        '1AE' => 'E02003215',
        '1AF' => 'E02003223',
        '1AG' => 'E02003234',
        '1AH' => 'E02006848',
        '1AJ' => 'E02006847',
        '1AL' => 'E02006848',
        '1AN' => 'E02006848',
        '1AP' => 'E02006848',
        '1AQ' => 'E02003234',
        '1AR' => 'E02006848',
        '1AS' => 'E02006849',
        '1AY' => 'E02006847',
        '1AZ' => 'E02006847',
        '1BA' => 'E02003234',
        '1BB' => 'E02006848',
        '1BD' => 'E02006847',
        '1BE' => 'E02006848',
        '1BF' => 'E02006848',
        '1BG' => 'E02006847',
        '1BH' => 'E02006848',
        '1BJ' => 'E02006848',
        '1BL' => 'E02006848',
        '1BN' => 'E02006848',
        '1BP' => 'E02006847',
        '1BQ' => 'E02006848',
        '1BS' => 'E02006848',
        '1BT' => 'E02006848',
        '1BU' => 'E02006848',
        '1BW' => 'E02006848',
        '1BX' => 'E02006848',
        '1BY' => 'E02006848',
        '1BZ' => 'E02006848',
        '1FA' => 'E02006847',
        '1FB' => 'E02006847',
        '1FD' => 'E02006847',
        '1FH' => 'E02006847',
        '1HT' => 'E02003215',
        '1HU' => 'E02003215',
        '1HX' => 'E02003215',
        '1HY' => 'E02003215',
        '1HZ' => 'E02003215',
        '1JA' => 'E02003215',
        '1JB' => 'E02003215',
        '1JD' => 'E02003215',
        '1JE' => 'E02003215',
        '1JF' => 'E02006847',
        '1JP' => 'E02003215',
        '1JQ' => 'E02003215',
        '1JX' => 'E02003223',
        '1PD' => 'E02003215',
        '1PE' => 'E02003215',
        '1PN' => 'E02003215',
        '1PS' => 'E02006849',
        '1PT' => 'E02003215',
        '1PU' => 'E02003215',
        '1PW' => 'E02003215',
        '1PX' => 'E02003215',
        '1PY' => 'E02006848',
        '1PZ' => 'E02006847',
        '1QA' => 'E02006849',
        '1QB' => 'E02006847',
        '1QD' => 'E02006848',
        '1QE' => 'E02006848',
        '1QF' => 'E02006848',
        '1QG' => 'E02006848',
        '1QH' => 'E02003215',
        '1QJ' => 'E02003215',
        '1QL' => 'E02003215',
        '1QN' => 'E02003215',
        '1QP' => 'E02003215',
        '1QQ' => 'E02003215',
        '1QR' => 'E02003215',
        '1QS' => 'E02003215',
        '1QT' => 'E02003215',
        '1QU' => 'E02003215',
        '1QW' => 'E02003215',
        '1QX' => 'E02003215',
        '1QY' => 'E02003215',
        '1QZ' => 'E02006848',
        '1RA' => 'E02003215',
        '1RB' => 'E02006847',
        '1RD' => 'E02006847',
        '1RE' => 'E02006847',
        '1RF' => 'E02006848',
        '1RG' => 'E02006848',
        '1RH' => 'E02003215',
        '1RJ' => 'E02003215',
        '1RL' => 'E02003215',
        '1RN' => 'E02003215',
        '1RP' => 'E02003215',
        '1RQ' => 'E02003215',
        '1RR' => 'E02003215',
        '1RS' => 'E02003215',
        '1RT' => 'E02003215',
        '1RU' => 'E02003215',
        '1RW' => 'E02003215',
        '1RX' => 'E02003215',
        '1RY' => 'E02003215',
        '1RZ' => 'E02003215',
        '1SA' => 'E02003215',
        '1SB' => 'E02003215',
        '1SD' => 'E02003215',
        '1SE' => 'E02003215',
        '1SF' => 'E02006848',
        '1SG' => 'E02003215',
        '1SH' => 'E02003215',
        '1SJ' => 'E02003215',
        '1SL' => 'E02006848',
        '1SN' => 'E02003215',
        '1SP' => 'E02006848',
        '1SQ' => 'E02003215',
        '1SR' => 'E02006848',
        '1SS' => 'E02006848',
        '1ST' => 'E02006848',
        '1SU' => 'E02006848',
        '1SW' => 'E02006848',
        '1SX' => 'E02006848',
        '1SY' => 'E02006848',
        '1SZ' => 'E02006848',
        '1TA' => 'E02006848',
        '1TB' => 'E02006847',
        '1TD' => 'E02006847',
        '1TE' => 'E02006847',
        '1TF' => 'E02006848',
        '1TG' => 'E02006848',
        '1TH' => 'E02006849',
        '1TJ' => 'E02006848',
        '1TL' => 'E02006848',
        '1TN' => 'E02006849',
        '1TP' => 'E02006848',
        '1TQ' => 'E02006848',
        '1TR' => 'E02006848',
        '1TS' => 'E02006848',
        '1TT' => 'E02006848',
        '1TU' => 'E02006848',
        '1TW' => 'E02006848',
        '1TX' => 'E02006848',
        '1TY' => 'E02006848',
        '1TZ' => 'E02006848',
        '1UA' => 'E02006848',
        '1UB' => 'E02003223',
        '1UD' => 'E02006847',
        '1UE' => 'E02006848',
        '1UF' => 'E02006847',
        '1UG' => 'E02006848',
        '1UH' => 'E02006848',
        '1UJ' => 'E02003215',
        '1UL' => 'E02003223',
        '1UN' => 'E02003215',
        '1UP' => 'E02006849',
        '1UQ' => 'E02006847',
        '1UR' => 'E02006849',
        '1US' => 'E02006848',
        '1UT' => 'E02006847',
        '1UU' => 'E02006849',
        '1UW' => 'E02003215',
        '1UX' => 'E02006849',
        '1UY' => 'E02006849',
        '1UZ' => 'E02006847',
        '1WA' => 'E02006847',
        '1WB' => 'E02006847',
        '1WD' => 'E02006847',
        '1WE' => 'E02003234',
        '1WF' => 'E02003223',
        '1WG' => 'E02006847',
        '1WH' => 'E02006847',
        '1WJ' => 'E02006847',
        '1WL' => 'E02006847',
        '1WN' => 'E02006847',
        '1WP' => 'E02006847',
        '1WQ' => 'E02006847',
        '1WR' => 'E02006847',
        '1WS' => 'E02003223',
        '1WT' => 'E02006847',
        '1WU' => 'E02006847',
        '1WX' => 'E02003223',
        '1WZ' => 'E02006847',
        '1XA' => 'E02006847',
        '1XB' => 'E02006847',
        '1XD' => 'E02006847',
        '1XE' => 'E02006848',
        '1XF' => 'E02006847',
        '1XG' => 'E02006847',
        '1XH' => 'E02006847',
        '1XJ' => 'E02006847',
        '1XX' => 'E02006847',
        '1XY' => 'E02003223',
        '1XZ' => 'E02003223',
        '1ZN' => 'E02006847',
        '1ZQ' => 'E02003223',
        '1ZX' => 'E02003215',
        '2AA' => 'E02006847',
        '2AB' => 'E02006847',
        '2AD' => 'E02006847',
        '2AE' => 'E02006847',
        '2AF' => 'E02006847',
        '2AG' => 'E02006847',
        '2AH' => 'E02006847',
        '2AJ' => 'E02006847',
        '2AL' => 'E02006847',
        '2AN' => 'E02006847',
        '2AP' => 'E02006847',
        '2AR' => 'E02006847',
        '2AS' => 'E02006847',
        '2AT' => 'E02006847',
        '2AU' => 'E02006848',
        '2AW' => 'E02006847',
        '2AX' => 'E02006847',
        '2AY' => 'E02006848',
        '2AZ' => 'E02006847',
        '2BA' => 'E02003223',
        '2BB' => 'E02003223',
        '2BD' => 'E02006847',
        '2BE' => 'E02006847',
        '2BF' => 'E02006847',
        '2BG' => 'E02006847',
        '2BH' => 'E02006848',
        '2BJ' => 'E02006848',
        '2BL' => 'E02006848',
        '2BN' => 'E02006848',
        '2BP' => 'E02006847',
        '2BQ' => 'E02006847',
        '2BS' => 'E02006847',
        '2BT' => 'E02006847',
        '2BU' => 'E02006847',
        '2BW' => 'E02006847',
        '2BX' => 'E02006847',
        '2BY' => 'E02006847',
        '2BZ' => 'E02006847',
        '2DA' => 'E02006646',
        '2DB' => 'E02006848',
        '2DD' => 'E02006848',
        '2DE' => 'E02006847',
        '2DF' => 'E02006847',
        '2DG' => 'E02006847',
        '2DH' => 'E02006848',
        '2DJ' => 'E02006847',
        '2DL' => 'E02006847',
        '2DN' => 'E02006849',
        '2DP' => 'E02006849',
        '2DQ' => 'E02006848',
        '2DR' => 'E02006849',
        '2DS' => 'E02006849',
        '2DT' => 'E02006849',
        '2DU' => 'E02006849',
        '2DW' => 'E02006849',
        '2DX' => 'E02006849',
        '2DY' => 'E02003219',
        '2DZ' => 'E02006847',
        '2EA' => 'E02006848',
        '2EB' => 'E02006848',
        '2ED' => 'E02006848',
        '2EE' => 'E02006849',
        '2EF' => 'E02006847',
        '2EG' => 'E02006848',
        '2EH' => 'E02006849',
        '2EJ' => 'E02006849',
        '2EL' => 'E02006848',
        '2EN' => 'E02006848',
        '2EP' => 'E02006848',
        '2EQ' => 'E02006848',
        '2ER' => 'E02006848',
        '2ES' => 'E02006848',
        '2ET' => 'E02006848',
        '2EU' => 'E02006848',
        '2EW' => 'E02006848',
        '2EX' => 'E02006848',
        '2EY' => 'E02006849',
        '2EZ' => 'E02006847',
        '2FA' => 'E02006848',
        '2FB' => 'E02006849',
        '2FD' => 'E02006848',
        '2FE' => 'E02006848',
        '2FF' => 'E02006849',
        '2FG' => 'E02006849',
        '2FH' => 'E02006849',
        '2FJ' => 'E02006849',
        '2FL' => 'E02006849',
        '2FN' => 'E02006849',
        '2FP' => 'E02006848',
        '2FQ' => 'E02006849',
        '2FR' => 'E02006848',
        '2FS' => 'E02006848',
        '2FT' => 'E02006848',
        '2FU' => 'E02006847',
        '2FW' => 'E02006848',
        '2FX' => 'E02006848',
        '2FY' => 'E02006848',
        '2GA' => 'E02006848',
        '2GB' => 'E02006848',
        '2GD' => 'E02006848',
        '2GE' => 'E02006848',
        '2GF' => 'E02006848',
        '2GG' => 'E02006848',
        '2GH' => 'E02006848',
        '2GJ' => 'E02006848',
        '2GL' => 'E02006848',
        '2GN' => 'E02006848',
        '2GP' => 'E02006848',
        '2GQ' => 'E02006848',
        '2GR' => 'E02006848',
        '2GS' => 'E02006848',
        '2GT' => 'E02006848',
        '2GU' => 'E02006848',
        '2GW' => 'E02006848',
        '2GX' => 'E02006848',
        '2GY' => 'E02006848',
        '2GZ' => 'E02006848',
        '2HA' => 'E02006848',
        '2HB' => 'E02006848',
        '2HD' => 'E02006848',
        '2HE' => 'E02006848',
        '2HF' => 'E02006849',
        '2HG' => 'E02006848',
        '2HH' => 'E02006849',
        '2HJ' => 'E02006848',
        '2HL' => 'E02006847',
        '2HN' => 'E02006847',
        '2HP' => 'E02006847',
        '2HQ' => 'E02006849',
        '2HR' => 'E02006847',
        '2HS' => 'E02006847',
        '2HT' => 'E02006847',
        '2HU' => 'E02006847',
        '2HW' => 'E02006847',
        '2HX' => 'E02006847',
        '2HY' => 'E02006847',
        '2HZ' => 'E02006847',
        '2JA' => 'E02006847',
        '2JB' => 'E02006847',
        '2JD' => 'E02006847',
        '2JE' => 'E02006847',
        '2JF' => 'E02006847',
        '2JG' => 'E02006847',
        '2JH' => 'E02006847',
        '2JJ' => 'E02006847',
        '2JL' => 'E02006847',
        '2JN' => 'E02006847',
        '2JP' => 'E02006847',
        '2JQ' => 'E02006847',
        '2JR' => 'E02006847',
        '2JS' => 'E02006847',
        '2JT' => 'E02006847',
        '2JU' => 'E02006847',
        '2JW' => 'E02006847',
        '2JX' => 'E02006847',
        '2JY' => 'E02006847',
        '2JZ' => 'E02006847',
        '2LA' => 'E02006847',
        '2LB' => 'E02006847',
        '2LD' => 'E02006847',
        '2LE' => 'E02006847',
        '2LF' => 'E02006847',
        '2LG' => 'E02006847',
        '2LH' => 'E02006847',
        '2LJ' => 'E02006847',
        '2LL' => 'E02006847',
        '2LN' => 'E02006847',
        '2LP' => 'E02006847',
        '2LQ' => 'E02006847',
        '2LR' => 'E02006848',
        '2LS' => 'E02006848',
        '2LT' => 'E02006848',
        '2LU' => 'E02006848',
        '2LW' => 'E02006847',
        '2LX' => 'E02006847',
        '2LY' => 'E02006847',
        '2LZ' => 'E02006847',
        '2NA' => 'E02006849',
        '2NB' => 'E02006847',
        '2ND' => 'E02006848',
        '2NE' => 'E02006847',
        '2NF' => 'E02006847',
        '2NG' => 'E02006848',
        '2NH' => 'E02006848',
        '2NJ' => 'E02006848',
        '2NL' => 'E02006849',
        '2NN' => 'E02006847',
        '2NP' => 'E02006847',
        '2NQ' => 'E02006847',
        '2NR' => 'E02006848',
        '2NS' => 'E02006848',
        '2NT' => 'E02006848',
        '2NU' => 'E02006848',
        '2NW' => 'E02006848',
        '2NX' => 'E02006848',
        '2NY' => 'E02006848',
        '2NZ' => 'E02006847',
        '2PA' => 'E02006847',
        '2PB' => 'E02006848',
        '2PD' => 'E02006848',
        '2PE' => 'E02006849',
        '2PF' => 'E02006848',
        '2PG' => 'E02006848',
        '2PH' => 'E02006848',
        '2PJ' => 'E02006848',
        '2PL' => 'E02006848',
        '2PN' => 'E02006847',
        '2PP' => 'E02003219',
        '2PQ' => 'E02006848',
        '2PR' => 'E02006848',
        '2PS' => 'E02003219',
        '2PT' => 'E02003219',
        '2PU' => 'E02003219',
        '2PW' => 'E02003219',
        '2PX' => 'E02003219',
        '2PY' => 'E02003219',
        '2PZ' => 'E02003219',
        '2QA' => 'E02003219',
        '2QB' => 'E02003219',
        '2QD' => 'E02003219',
        '2QE' => 'E02003219',
        '2QF' => 'E02003219',
        '2QG' => 'E02003219',
        '2QH' => 'E02003219',
        '2QJ' => 'E02003219',
        '2QL' => 'E02003219',
        '2QN' => 'E02003219',
        '2QP' => 'E02003219',
        '2QQ' => 'E02003219',
        '2QR' => 'E02003219',
        '2QS' => 'E02003219',
        '2QT' => 'E02003219',
        '2QU' => 'E02003219',
        '2QW' => 'E02003219',
        '2QX' => 'E02003219',
        '2QY' => 'E02006848',
        '2QZ' => 'E02006849',
        '2RA' => 'E02003219',
        '2RB' => 'E02003219',
        '2RD' => 'E02003219',
        '2RE' => 'E02003219',
        '2RF' => 'E02003219',
        '2RG' => 'E02003219',
        '2RH' => 'E02003219',
        '2RJ' => 'E02003219',
        '2RL' => 'E02003219',
        '2RN' => 'E02003219',
        '2RP' => 'E02003219',
        '2RQ' => 'E02003219',
        '2RR' => 'E02003219',
        '2RS' => 'E02003219',
        '2RT' => 'E02003219',
        '2RU' => 'E02003219',
        '2RW' => 'E02003219',
        '2RX' => 'E02003219',
        '2RY' => 'E02003219',
        '2RZ' => 'E02003219',
        '2SA' => 'E02003219',
        '2SB' => 'E02003219',
        '2SD' => 'E02003219',
        '2SE' => 'E02003219',
        '2SF' => 'E02003219',
        '2SG' => 'E02003219',
        '2SH' => 'E02003219',
        '2SJ' => 'E02003219',
        '2SL' => 'E02003219',
        '2SN' => 'E02003219',
        '2SP' => 'E02003219',
        '2SQ' => 'E02003219',
        '2SR' => 'E02003219',
        '2SS' => 'E02003219',
        '2ST' => 'E02003219',
        '2SU' => 'E02003219',
        '2SW' => 'E02003219',
        '2SX' => 'E02003219',
        '2SY' => 'E02003219',
        '2SZ' => 'E02003219',
        '2TA' => 'E02003219',
        '2TB' => 'E02003219',
        '2TD' => 'E02003219',
        '2TE' => 'E02003219',
        '2TF' => 'E02003219',
        '2TG' => 'E02003219',
        '2TH' => 'E02003219',
        '2TJ' => 'E02003219',
        '2TL' => 'E02003219',
        '2TN' => 'E02003219',
        '2TP' => 'E02003219',
        '2TS' => 'E02003219',
        '2TT' => 'E02003219',
        '2TU' => 'E02003219',
        '2TW' => 'E02003219',
        '2TX' => 'E02003219',
        '2TY' => 'E02003219',
        '2TZ' => 'E02003219',
        '2UA' => 'E02003219',
        '2UB' => 'E02003219',
        '2UD' => 'E02003219',
        '2UE' => 'E02003219',
        '2UF' => 'E02003219',
        '2UG' => 'E02003219',
        '2UH' => 'E02003219',
        '2UJ' => 'E02003219',
        '2UL' => 'E02003219',
        '2UP' => 'E02003219',
        '2UQ' => 'E02003219',
        '2US' => 'E02003219',
        '2UT' => 'E02003219',
        '2UW' => 'E02003219',
        '2WA' => 'E02003223',
        '2WE' => 'E02003219',
        '2WF' => 'E02003219',
        '2ZJ' => 'E02003223',
        '2ZQ' => 'E02003223',
        '2ZX' => 'E02003223',
        '3AA' => 'E02003214',
        '3AB' => 'E02003214',
        '3AD' => 'E02003214',
        '3AE' => 'E02003217',
        '3AF' => 'E02003217',
        '3AG' => 'E02003214',
        '3AH' => 'E02003214',
        '3AJ' => 'E02003214',
        '3AL' => 'E02003214',
        '3AN' => 'E02003218',
        '3AQ' => 'E02003214',
        '3AS' => 'E02003218',
        '3AT' => 'E02003214',
        '3AU' => 'E02003214',
        '3AW' => 'E02003218',
        '3AX' => 'E02003214',
        '3AY' => 'E02003214',
        '3AZ' => 'E02003214',
        '3BA' => 'E02003214',
        '3BB' => 'E02003223',
        '3BD' => 'E02003217',
        '3BE' => 'E02003214',
        '3BG' => 'E02003218',
        '3BH' => 'E02003218',
        '3BJ' => 'E02003218',
        '3BL' => 'E02003218',
        '3BN' => 'E02003217',
        '3BP' => 'E02003217',
        '3BQ' => 'E02003218',
        '3BS' => 'E02003218',
        '3BT' => 'E02003217',
        '3BU' => 'E02003218',
        '3BW' => 'E02003217',
        '3BX' => 'E02003218',
        '3BY' => 'E02003218',
        '3BZ' => 'E02003218',
        '3DA' => 'E02003217',
        '3DB' => 'E02003218',
        '3DD' => 'E02003218',
        '3DE' => 'E02003217',
        '3DF' => 'E02003217',
        '3DG' => 'E02003217',
        '3DH' => 'E02003217',
        '3DJ' => 'E02003217',
        '3DL' => 'E02003217',
        '3DN' => 'E02003217',
        '3DP' => 'E02003217',
        '3DQ' => 'E02003217',
        '3DR' => 'E02003217',
        '3DS' => 'E02003217',
        '3DT' => 'E02003217',
        '3DU' => 'E02003217',
        '3DW' => 'E02003217',
        '3DX' => 'E02003217',
        '3DY' => 'E02003217',
        '3DZ' => 'E02003217',
        '3EA' => 'E02003217',
        '3EB' => 'E02003217',
        '3ED' => 'E02003217',
        '3EE' => 'E02003217',
        '3EF' => 'E02003217',
        '3EG' => 'E02003217',
        '3EH' => 'E02003217',
        '3EL' => 'E02003217',
        '3EN' => 'E02003217',
        '3EP' => 'E02003217',
        '3ER' => 'E02003217',
        '3ES' => 'E02003217',
        '3ET' => 'E02003217',
        '3EU' => 'E02003217',
        '3EW' => 'E02003217',
        '3EX' => 'E02003217',
        '3EY' => 'E02003217',
        '3EZ' => 'E02003217',
        '3HA' => 'E02003217',
        '3HB' => 'E02003217',
        '3HD' => 'E02003217',
        '3HE' => 'E02003217',
        '3HF' => 'E02003217',
        '3HG' => 'E02003217',
        '3HH' => 'E02003217',
        '3HJ' => 'E02003217',
        '3HL' => 'E02003217',
        '3HN' => 'E02003217',
        '3HP' => 'E02003217',
        '3HQ' => 'E02003217',
        '3HR' => 'E02003217',
        '3HW' => 'E02003217',
        '3HX' => 'E02003215',
        '3HZ' => 'E02003217',
        '3JE' => 'E02003215',
        '3JF' => 'E02006847',
        '3JG' => 'E02006849',
        '3JH' => 'E02003217',
        '3JJ' => 'E02003217',
        '3JL' => 'E02003217',
        '3JN' => 'E02003217',
        '3JQ' => 'E02003215',
        '3JU' => 'E02003215',
        '3JW' => 'E02003217',
        '3LA' => 'E02003215',
        '3LB' => 'E02003215',
        '3LD' => 'E02003215',
        '3LE' => 'E02003215',
        '3LF' => 'E02003215',
        '3LG' => 'E02003215',
        '3LH' => 'E02003215',
        '3LJ' => 'E02003215',
        '3LL' => 'E02003215',
        '3LN' => 'E02003215',
        '3LP' => 'E02003215',
        '3LQ' => 'E02003215',
        '3LR' => 'E02003215',
        '3LS' => 'E02003215',
        '3LT' => 'E02003215',
        '3LU' => 'E02003215',
        '3LW' => 'E02003215',
        '3LX' => 'E02003215',
        '3LY' => 'E02003215',
        '3LZ' => 'E02003215',
        '3NA' => 'E02003215',
        '3NB' => 'E02003215',
        '3ND' => 'E02003215',
        '3NE' => 'E02003215',
        '3NF' => 'E02003215',
        '3NG' => 'E02003215',
        '3NP' => 'E02003215',
        '3NR' => 'E02003215',
        '3NS' => 'E02003215',
        '3NT' => 'E02003215',
        '3NU' => 'E02003215',
        '3NW' => 'E02003215',
        '3NX' => 'E02003215',
        '3NY' => 'E02003215',
        '3NZ' => 'E02003215',
        '3PA' => 'E02003215',
        '3PB' => 'E02003215',
        '3PF' => 'E02003215',
        '3PG' => 'E02003215',
        '3PH' => 'E02003215',
        '3PJ' => 'E02003215',
        '3PL' => 'E02003215',
        '3PP' => 'E02003215',
        '3PQ' => 'E02003215',
        '3PR' => 'E02003215',
        '3PS' => 'E02003215',
        '3PY' => 'E02003215',
        '3PZ' => 'E02003215',
        '3QA' => 'E02003215',
        '3QB' => 'E02003215',
        '3QD' => 'E02003215',
        '3QE' => 'E02003215',
        '3QF' => 'E02003215',
        '3QG' => 'E02003215',
        '3QZ' => 'E02003218',
        '3SL' => 'E02003217',
        '3SN' => 'E02003234',
        '3ST' => 'E02003214',
        '3SU' => 'E02003218',
        '3TG' => 'E02006849',
        '3TH' => 'E02006849',
        '3UJ' => 'E02003215',
        '3WA' => 'E02003223',
        '3WB' => 'E02003223',
        '3WD' => 'E02006849',
        '3WG' => 'E02006849',
        '3WT' => 'E02003223',
        '3WU' => 'E02003223',
        '3WX' => 'E02003223',
        '3WZ' => 'E02006849',
        '3XZ' => 'E02003223',
        '3YZ' => 'E02003223',
        '3ZE' => 'E02003218',
        '3ZQ' => 'E02003234',
        '3ZU' => 'E02003223',
        '3ZX' => 'E02003234',
        '4AA' => 'E02006849',
        '4AB' => 'E02006849',
        '4AD' => 'E02006849',
        '4AE' => 'E02006849',
        '4AF' => 'E02006849',
        '4AG' => 'E02006849',
        '4AH' => 'E02006849',
        '4AJ' => 'E02003234',
        '4AL' => 'E02003234',
        '4AN' => 'E02006849',
        '4AP' => 'E02006849',
        '4AQ' => 'E02006849',
        '4AR' => 'E02003234',
        '4AS' => 'E02006849',
        '4AT' => 'E02006849',
        '4AU' => 'E02006849',
        '4AZ' => 'E02006849',
        '4BA' => 'E02003234',
        '4BB' => 'E02003234',
        '4BD' => 'E02003234',
        '4BE' => 'E02003234',
        '4BF' => 'E02003234',
        '4BG' => 'E02006849',
        '4BH' => 'E02006848',
        '4BJ' => 'E02006848',
        '4BL' => 'E02006848',
        '4BQ' => 'E02006849',
        '4BU' => 'E02006848',
        '4BY' => 'E02006848',
        '4BZ' => 'E02006848',
        '4DF' => 'E02006849',
        '4DL' => 'E02006849',
        '4DN' => 'E02006849',
        '4DP' => 'E02006849',
        '4DR' => 'E02006849',
        '4DS' => 'E02006849',
        '4DT' => 'E02006849',
        '4DU' => 'E02006849',
        '4DW' => 'E02006849',
        '4DY' => 'E02006849',
        '4DZ' => 'E02006849',
        '4EA' => 'E02006849',
        '4EB' => 'E02006849',
        '4ED' => 'E02006849',
        '4EE' => 'E02006849',
        '4EF' => 'E02006849',
        '4EG' => 'E02006849',
        '4EH' => 'E02006849',
        '4EJ' => 'E02006849',
        '4EL' => 'E02006849',
        '4EN' => 'E02006849',
        '4EP' => 'E02006849',
        '4EQ' => 'E02006849',
        '4ER' => 'E02006849',
        '4ES' => 'E02006849',
        '4FA' => 'E02006849',
        '4FB' => 'E02006849',
        '4FD' => 'E02006849',
        '4FJ' => 'E02003215',
        '4FL' => 'E02003215',
        '4FN' => 'E02003215',
        '4FP' => 'E02006849',
        '4FR' => 'E02006849',
        '4FS' => 'E02003217',
        '4FT' => 'E02006849',
        '4FW' => 'E02006849',
        '4FX' => 'E02006849',
        '4FY' => 'E02006849',
        '4FZ' => 'E02006849',
        '4GA' => 'E02006849',
        '4GB' => 'E02006849',
        '4GD' => 'E02006849',
        '4GE' => 'E02006849',
        '4GF' => 'E02006849',
        '4GG' => 'E02006849',
        '4GH' => 'E02006849',
        '4GJ' => 'E02006849',
        '4GL' => 'E02006849',
        '4GN' => 'E02006849',
        '4GP' => 'E02006849',
        '4GQ' => 'E02006849',
        '4GR' => 'E02006849',
        '4GS' => 'E02006849',
        '4GT' => 'E02006849',
        '4GU' => 'E02006849',
        '4GW' => 'E02006849',
        '4GX' => 'E02006849',
        '4GY' => 'E02006849',
        '4GZ' => 'E02006849',
        '4HA' => 'E02003234',
        '4JY' => 'E02006849',
        '4QA' => 'E02003234',
        '4QN' => 'E02003234',
        '4QS' => 'E02003234',
        '4RA' => 'E02003234',
        '4RF' => 'E02006849',
        '4RG' => 'E02006849',
        '4RH' => 'E02003234',
        '4RJ' => 'E02003234',
        '4RQ' => 'E02003234',
        '4RX' => 'E02003234',
        '4RZ' => 'E02003234',
        '4SJ' => 'E02003234',
        '4SN' => 'E02003234',
        '4SQ' => 'E02003234',
        '4SX' => 'E02003234',
        '4SZ' => 'E02003234',
        '4TA' => 'E02006849',
        '4TB' => 'E02006849',
        '4TG' => 'E02006849',
        '4TJ' => 'E02006849',
        '4TL' => 'E02006849',
        '4TN' => 'E02006849',
        '4TP' => 'E02006849',
        '4TQ' => 'E02006849',
        '4TR' => 'E02006849',
        '4TS' => 'E02003215',
        '4TT' => 'E02003215',
        '4TU' => 'E02006849',
        '4TW' => 'E02006849',
        '4TX' => 'E02006849',
        '4TY' => 'E02006849',
        '4TZ' => 'E02006849',
        '4UA' => 'E02006849',
        '4UB' => 'E02006849',
        '4UD' => 'E02006849',
        '4UE' => 'E02006849',
        '4UF' => 'E02003215',
        '4UG' => 'E02003215',
        '4UH' => 'E02003234',
        '4UJ' => 'E02003215',
        '4UL' => 'E02003215',
        '4UN' => 'E02003234',
        '4UQ' => 'E02006849',
        '4UR' => 'E02003234',
        '4UW' => 'E02003234',
        '4UX' => 'E02003234',
        '4UY' => 'E02003234',
        '4UZ' => 'E02003234',
        '4WA' => 'E02006849',
        '4WB' => 'E02006849',
        '4WD' => 'E02006849',
        '4WE' => 'E02006849',
        '4WF' => 'E02006849',
        '4WG' => 'E02006849',
        '4WH' => 'E02006849',
        '4WJ' => 'E02006849',
        '4WL' => 'E02006849',
        '4WN' => 'E02006849',
        '4WP' => 'E02006849',
        '4WQ' => 'E02006849',
        '4WR' => 'E02006849',
        '4WS' => 'E02006849',
        '4WT' => 'E02006849',
        '4WU' => 'E02006849',
        '4WX' => 'E02003215',
        '4WZ' => 'E02003215',
        '4XA' => 'E02006849',
        '4XB' => 'E02006849',
        '4XD' => 'E02006849',
        '4XE' => 'E02006849',
        '4XF' => 'E02006849',
        '4XG' => 'E02006849',
        '4XH' => 'E02006849',
        '4XJ' => 'E02006849',
        '4XL' => 'E02006849',
        '4XN' => 'E02006849',
        '4XP' => 'E02006849',
        '4XQ' => 'E02006849',
        '4XR' => 'E02006849',
        '4XS' => 'E02006849',
        '4XT' => 'E02006849',
        '4XU' => 'E02006849',
        '4XW' => 'E02006849',
        '4XX' => 'E02006849',
        '4XY' => 'E02006849',
        '4XZ' => 'E02006849',
        '4YA' => 'E02006849',
        '4YB' => 'E02006849',
        '4YD' => 'E02006849',
        '4YE' => 'E02006849',
        '4YF' => 'E02006849',
        '4YG' => 'E02006849',
        '4YH' => 'E02006849',
        '4YJ' => 'E02006849',
        '4YL' => 'E02006849',
        '4YN' => 'E02006849',
        '4YP' => 'E02006849',
        '4YQ' => 'E02006849',
        '4YR' => 'E02006849',
        '4YS' => 'E02006849',
        '4YT' => 'E02006849',
        '4YU' => 'E02006849',
        '4YW' => 'E02006849',
        '4YX' => 'E02006849',
        '4YY' => 'E02006849',
        '4YZ' => 'E02006849',
        '4ZA' => 'E02003215',
        '4ZB' => 'E02003215',
        '4ZD' => 'E02006849',
        '4ZE' => 'E02006849',
        '4ZF' => 'E02006849',
        '4ZG' => 'E02006849',
        '4ZH' => 'E02006849',
        '4ZJ' => 'E02006849',
        '4ZL' => 'E02003234',
        '4ZN' => 'E02006849',
        '4ZP' => 'E02006849',
        '4ZQ' => 'E02006849',
        '4ZR' => 'E02006849',
        '4ZS' => 'E02003234',
        '4ZT' => 'E02003234',
        '4ZU' => 'E02003234',
        '4ZW' => 'E02006849',
        '4ZY' => 'E02003215',
        '4ZZ' => 'E02003215',
        '5AE' => 'E02003219',
        '5AH' => 'E02003219',
        '5AJ' => 'E02003219',
        '5AL' => 'E02003219',
        '5AN' => 'E02003219',
        '5AW' => 'E02003219',
        '5AX' => 'E02003219',
        '5AY' => 'E02003219',
        '5AZ' => 'E02003219',
        '5BB' => 'E02003219',
        '5BE' => 'E02003219',
        '5BF' => 'E02003219',
        '5BG' => 'E02003219',
        '5BH' => 'E02003234',
        '5BQ' => 'E02003219',
        '5DL' => 'E02003219',
        '5DN' => 'E02003219',
        '5QQ' => 'E02003223',
        '5WA' => 'E02003234',
        '5WJ' => 'E02003234',
        '5WR' => 'E02003234',
        '5WS' => 'E02003234',
        '5WT' => 'E02003234',
        '5WU' => 'E02003234',
        '5WZ' => 'E02003234',
        '6AB' => 'E02003216',
        '6PA' => 'E02003216',
        '6PB' => 'E02003216',
        '6PD' => 'E02003216',
        '6PG' => 'E02003216',
        '6SF' => 'E02003216',
        '6SG' => 'E02003216',
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
