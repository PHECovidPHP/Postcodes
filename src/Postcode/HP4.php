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
final class HP4
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02004869',
        '1AB' => 'E02004869',
        '1AD' => 'E02004869',
        '1AE' => 'E02004869',
        '1AF' => 'E02004869',
        '1AG' => 'E02004864',
        '1AH' => 'E02004864',
        '1AJ' => 'E02004869',
        '1AL' => 'E02004869',
        '1AN' => 'E02004869',
        '1AP' => 'E02004869',
        '1AQ' => 'E02004864',
        '1AR' => 'E02004867',
        '1AS' => 'E02004868',
        '1AT' => 'E02004867',
        '1AU' => 'E02004869',
        '1AW' => 'E02004869',
        '1AX' => 'E02004861',
        '1AY' => 'E02004869',
        '1AZ' => 'E02004864',
        '1BA' => 'E02004869',
        '1BB' => 'E02004864',
        '1BD' => 'E02004869',
        '1BE' => 'E02004864',
        '1BF' => 'E02004864',
        '1BG' => 'E02004869',
        '1BH' => 'E02004861',
        '1BJ' => 'E02004864',
        '1BL' => 'E02004864',
        '1BN' => 'E02004869',
        '1BP' => 'E02004864',
        '1BQ' => 'E02004869',
        '1BS' => 'E02004864',
        '1BT' => 'E02004864',
        '1BU' => 'E02004864',
        '1BW' => 'E02004869',
        '1BX' => 'E02004864',
        '1BY' => 'E02004864',
        '1BZ' => 'E02004864',
        '1DA' => 'E02004864',
        '1DB' => 'E02004867',
        '1DD' => 'E02004867',
        '1DE' => 'E02004867',
        '1DF' => 'E02004867',
        '1DG' => 'E02004867',
        '1DH' => 'E02004864',
        '1DJ' => 'E02004867',
        '1DL' => 'E02004867',
        '1DN' => 'E02004867',
        '1DP' => 'E02004867',
        '1DQ' => 'E02004867',
        '1DR' => 'E02004864',
        '1DS' => 'E02004864',
        '1DT' => 'E02004864',
        '1DU' => 'E02004864',
        '1DW' => 'E02004867',
        '1DX' => 'E02004864',
        '1DY' => 'E02004864',
        '1DZ' => 'E02004864',
        '1EA' => 'E02004864',
        '1EB' => 'E02004864',
        '1ED' => 'E02004864',
        '1EE' => 'E02004864',
        '1EF' => 'E02004864',
        '1EG' => 'E02004864',
        '1EH' => 'E02004864',
        '1EJ' => 'E02004867',
        '1EL' => 'E02004867',
        '1EN' => 'E02004861',
        '1EP' => 'E02004864',
        '1EQ' => 'E02004867',
        '1ER' => 'E02004864',
        '1ES' => 'E02004864',
        '1ET' => 'E02004864',
        '1EU' => 'E02004864',
        '1EW' => 'E02004864',
        '1EX' => 'E02004864',
        '1EY' => 'E02004864',
        '1EZ' => 'E02004864',
        '1FA' => 'E02004864',
        '1FB' => 'E02004867',
        '1FD' => 'E02004869',
        '1FE' => 'E02004867',
        '1FF' => 'E02004867',
        '1FG' => 'E02004867',
        '1FH' => 'E02004867',
        '1FJ' => 'E02004867',
        '1FL' => 'E02004867',
        '1FN' => 'E02004864',
        '1FP' => 'E02004867',
        '1FQ' => 'E02004864',
        '1FR' => 'E02003660',
        '1GE' => 'E02004864',
        '1HA' => 'E02004864',
        '1HB' => 'E02004864',
        '1HD' => 'E02004864',
        '1HE' => 'E02004864',
        '1HF' => 'E02004864',
        '1HG' => 'E02004864',
        '1HH' => 'E02004864',
        '1HJ' => 'E02004864',
        '1HL' => 'E02004867',
        '1HN' => 'E02004864',
        '1HP' => 'E02004864',
        '1HQ' => 'E02004864',
        '1HR' => 'E02004864',
        '1HS' => 'E02004864',
        '1HT' => 'E02004864',
        '1HU' => 'E02004867',
        '1HW' => 'E02004864',
        '1HX' => 'E02004864',
        '1HY' => 'E02004864',
        '1HZ' => 'E02004864',
        '1JA' => 'E02004864',
        '1JB' => 'E02004864',
        '1JD' => 'E02004864',
        '1JE' => 'E02004864',
        '1JF' => 'E02004864',
        '1JG' => 'E02004864',
        '1JH' => 'E02004864',
        '1JJ' => 'E02004864',
        '1JL' => 'E02004864',
        '1JN' => 'E02004864',
        '1JP' => 'E02004864',
        '1JQ' => 'E02004864',
        '1JR' => 'E02004864',
        '1JS' => 'E02004864',
        '1JT' => 'E02004861',
        '1JU' => 'E02004864',
        '1JW' => 'E02004864',
        '1JX' => 'E02004864',
        '1JY' => 'E02004864',
        '1JZ' => 'E02004864',
        '1LA' => 'E02004861',
        '1LB' => 'E02004861',
        '1LD' => 'E02004861',
        '1LE' => 'E02004861',
        '1LF' => 'E02004861',
        '1LG' => 'E02004864',
        '1LH' => 'E02004864',
        '1LJ' => 'E02004864',
        '1LL' => 'E02004861',
        '1LN' => 'E02004861',
        '1LP' => 'E02004861',
        '1LQ' => 'E02004861',
        '1LR' => 'E02004861',
        '1LS' => 'E02004861',
        '1LT' => 'E02004859',
        '1LU' => 'E02004861',
        '1LW' => 'E02004861',
        '1LX' => 'E02004859',
        '1LY' => 'E02004861',
        '1LZ' => 'E02004861',
        '1NA' => 'E02004861',
        '1NB' => 'E02004861',
        '1ND' => 'E02004861',
        '1NE' => 'E02004861',
        '1NF' => 'E02003660',
        '1NG' => 'E02004861',
        '1NH' => 'E02004861',
        '1NJ' => 'E02004861',
        '1NL' => 'E02004861',
        '1NN' => 'E02004861',
        '1NP' => 'E02004861',
        '1NQ' => 'E02004861',
        '1NR' => 'E02004861',
        '1NS' => 'E02004861',
        '1NT' => 'E02004861',
        '1NU' => 'E02004861',
        '1NW' => 'E02004861',
        '1NX' => 'E02004861',
        '1NY' => 'E02004861',
        '1NZ' => 'E02004861',
        '1PA' => 'E02004861',
        '1PB' => 'E02004861',
        '1PD' => 'E02004861',
        '1PE' => 'E02004861',
        '1PF' => 'E02004861',
        '1PG' => 'E02004861',
        '1PH' => 'E02004861',
        '1PJ' => 'E02004861',
        '1PL' => 'E02004861',
        '1PN' => 'E02004861',
        '1PP' => 'E02004861',
        '1PQ' => 'E02004861',
        '1PR' => 'E02004861',
        '1PS' => 'E02004861',
        '1PT' => 'E02004861',
        '1PU' => 'E02004861',
        '1PW' => 'E02004861',
        '1PX' => 'E02004861',
        '1PY' => 'E02004861',
        '1PZ' => 'E02004861',
        '1QA' => 'E02004864',
        '1QB' => 'E02004864',
        '1QD' => 'E02004861',
        '1QE' => 'E02004861',
        '1QF' => 'E02004861',
        '1QG' => 'E02004861',
        '1QH' => 'E02004861',
        '1QJ' => 'E02004861',
        '1QL' => 'E02004861',
        '1QN' => 'E02004861',
        '1QP' => 'E02004861',
        '1QQ' => 'E02004861',
        '1QR' => 'E02003650',
        '1QS' => 'E02004861',
        '1QT' => 'E02004861',
        '1QU' => 'E02003660',
        '1QW' => 'E02004861',
        '1QX' => 'E02003660',
        '1QY' => 'E02003660',
        '1QZ' => 'E02003660',
        '1RA' => 'E02004861',
        '1RB' => 'E02004861',
        '1RD' => 'E02003660',
        '1RE' => 'E02003660',
        '1RF' => 'E02003660',
        '1RG' => 'E02003660',
        '1RH' => 'E02003660',
        '1RJ' => 'E02003660',
        '1RL' => 'E02003660',
        '1RN' => 'E02003660',
        '1RP' => 'E02003660',
        '1RQ' => 'E02003660',
        '1RR' => 'E02003660',
        '1RS' => 'E02003660',
        '1RT' => 'E02003660',
        '1RU' => 'E02004861',
        '1RW' => 'E02003660',
        '1RX' => 'E02003660',
        '1RY' => 'E02003660',
        '1RZ' => 'E02003660',
        '1SA' => 'E02004864',
        '1SB' => 'E02004864',
        '1SD' => 'E02004864',
        '1SE' => 'E02004864',
        '1SF' => 'E02004864',
        '1SH' => 'E02004864',
        '1SJ' => 'E02004861',
        '1SL' => 'E02004864',
        '1SN' => 'E02004864',
        '1SS' => 'E02004864',
        '1ST' => 'E02004864',
        '1SU' => 'E02004861',
        '1SW' => 'E02004864',
        '1SX' => 'E02004867',
        '1SY' => 'E02004867',
        '1SZ' => 'E02004868',
        '1TA' => 'E02004864',
        '1TB' => 'E02004864',
        '1TD' => 'E02004864',
        '1TE' => 'E02004864',
        '1TF' => 'E02004864',
        '1TH' => 'E02004864',
        '1TJ' => 'E02004864',
        '1TL' => 'E02004864',
        '1TP' => 'E02004861',
        '1TT' => 'E02004861',
        '1TU' => 'E02004864',
        '1UA' => 'E02004861',
        '1UB' => 'E02004861',
        '1UH' => 'E02004861',
        '1UJ' => 'E02004864',
        '1UL' => 'E02004864',
        '1UR' => 'E02004864',
        '1US' => 'E02004861',
        '1UT' => 'E02004864',
        '1UU' => 'E02004861',
        '1UX' => 'E02004864',
        '1WA' => 'E02004864',
        '1WB' => 'E02004864',
        '1WD' => 'E02004864',
        '1WE' => 'E02004864',
        '1WF' => 'E02004864',
        '1WG' => 'E02004864',
        '1WH' => 'E02004864',
        '1WJ' => 'E02004864',
        '1WL' => 'E02004864',
        '1WN' => 'E02004864',
        '1WP' => 'E02004864',
        '1WQ' => 'E02004864',
        '1WR' => 'E02004868',
        '1WS' => 'E02004864',
        '1WT' => 'E02004864',
        '1WU' => 'E02004864',
        '1WW' => 'E02004864',
        '1WX' => 'E02004864',
        '1WY' => 'E02004868',
        '1WZ' => 'E02004864',
        '1XA' => 'E02004861',
        '1XB' => 'E02004861',
        '1XD' => 'E02004867',
        '1XE' => 'E02004864',
        '1XG' => 'E02004864',
        '1XH' => 'E02004864',
        '1XJ' => 'E02004864',
        '1XN' => 'E02004864',
        '1XP' => 'E02004864',
        '1XQ' => 'E02004864',
        '1XY' => 'E02004864',
        '1XZ' => 'E02004864',
        '1YH' => 'E02004864',
        '1YJ' => 'E02004864',
        '1YL' => 'E02004864',
        '1YP' => 'E02004868',
        '1YR' => 'E02004864',
        '1YS' => 'E02004864',
        '1YU' => 'E02004864',
        '1ZJ' => 'E02004864',
        '1ZN' => 'E02004868',
        '1ZQ' => 'E02004864',
        '1ZR' => 'E02004864',
        '1ZU' => 'E02004864',
        '1ZX' => 'E02004864',
        '1ZZ' => 'E02004864',
        '2AA' => 'E02004864',
        '2AB' => 'E02004864',
        '2AD' => 'E02004864',
        '2AE' => 'E02004864',
        '2AF' => 'E02004864',
        '2AG' => 'E02004864',
        '2AH' => 'E02004864',
        '2AJ' => 'E02004864',
        '2AL' => 'E02004864',
        '2AN' => 'E02004864',
        '2AP' => 'E02004864',
        '2AQ' => 'E02004864',
        '2AR' => 'E02004864',
        '2AS' => 'E02004864',
        '2AT' => 'E02004864',
        '2AU' => 'E02004864',
        '2AW' => 'E02004864',
        '2AX' => 'E02004864',
        '2AY' => 'E02004869',
        '2AZ' => 'E02004864',
        '2BA' => 'E02004864',
        '2BB' => 'E02004864',
        '2BD' => 'E02004864',
        '2BE' => 'E02004864',
        '2BF' => 'E02004864',
        '2BG' => 'E02004864',
        '2BH' => 'E02004864',
        '2BJ' => 'E02004864',
        '2BL' => 'E02004864',
        '2BN' => 'E02004864',
        '2BP' => 'E02004864',
        '2BQ' => 'E02004864',
        '2BS' => 'E02004864',
        '2BT' => 'E02004869',
        '2BU' => 'E02004864',
        '2BW' => 'E02004864',
        '2BX' => 'E02004869',
        '2BY' => 'E02004864',
        '2BZ' => 'E02004869',
        '2DA' => 'E02004869',
        '2DB' => 'E02004864',
        '2DD' => 'E02004869',
        '2DE' => 'E02004869',
        '2DF' => 'E02004869',
        '2DG' => 'E02004869',
        '2DH' => 'E02004869',
        '2DJ' => 'E02004869',
        '2DL' => 'E02004864',
        '2DN' => 'E02004869',
        '2DP' => 'E02004869',
        '2DQ' => 'E02004869',
        '2DR' => 'E02004869',
        '2DS' => 'E02004869',
        '2DT' => 'E02004864',
        '2DU' => 'E02004869',
        '2DW' => 'E02004864',
        '2DX' => 'E02004864',
        '2DY' => 'E02004864',
        '2DZ' => 'E02004864',
        '2EA' => 'E02004864',
        '2EB' => 'E02004864',
        '2ED' => 'E02004864',
        '2EE' => 'E02004864',
        '2EF' => 'E02004864',
        '2EG' => 'E02004864',
        '2EH' => 'E02004864',
        '2EJ' => 'E02004864',
        '2EL' => 'E02004864',
        '2EN' => 'E02004864',
        '2EP' => 'E02004864',
        '2EQ' => 'E02004864',
        '2ER' => 'E02004864',
        '2ES' => 'E02004864',
        '2ET' => 'E02004864',
        '2EU' => 'E02004864',
        '2EW' => 'E02004864',
        '2EX' => 'E02004864',
        '2EY' => 'E02004864',
        '2EZ' => 'E02004864',
        '2FA' => 'E02004864',
        '2FB' => 'E02004864',
        '2FD' => 'E02004864',
        '2FE' => 'E02004864',
        '2FF' => 'E02004864',
        '2FG' => 'E02004869',
        '2FH' => 'E02004864',
        '2FJ' => 'E02004864',
        '2FL' => 'E02004864',
        '2FN' => 'E02004864',
        '2FP' => 'E02004864',
        '2FQ' => 'E02004869',
        '2FR' => 'E02004864',
        '2FS' => 'E02004864',
        '2FT' => 'E02004864',
        '2FU' => 'E02004864',
        '2FW' => 'E02004864',
        '2FX' => 'E02004864',
        '2FY' => 'E02004869',
        '2FZ' => 'E02004864',
        '2GA' => 'E02004864',
        '2GB' => 'E02004864',
        '2GD' => 'E02004861',
        '2GE' => 'E02004869',
        '2GF' => 'E02004864',
        '2GP' => 'E02004864',
        '2GR' => 'E02004864',
        '2GS' => 'E02004864',
        '2GT' => 'E02004864',
        '2GU' => 'E02004864',
        '2GW' => 'E02004864',
        '2GX' => 'E02004864',
        '2GY' => 'E02004864',
        '2GZ' => 'E02004864',
        '2HA' => 'E02004864',
        '2HB' => 'E02004869',
        '2HD' => 'E02004864',
        '2HE' => 'E02004864',
        '2HF' => 'E02004864',
        '2HG' => 'E02004869',
        '2HH' => 'E02004869',
        '2HJ' => 'E02004869',
        '2HL' => 'E02004869',
        '2HN' => 'E02004869',
        '2HP' => 'E02004869',
        '2HQ' => 'E02004869',
        '2HR' => 'E02004869',
        '2HS' => 'E02004869',
        '2HT' => 'E02004869',
        '2HU' => 'E02004869',
        '2HW' => 'E02004869',
        '2HX' => 'E02004869',
        '2HY' => 'E02004869',
        '2HZ' => 'E02004869',
        '2JA' => 'E02004864',
        '2JB' => 'E02004869',
        '2JD' => 'E02004869',
        '2JE' => 'E02004864',
        '2JF' => 'E02004869',
        '2JG' => 'E02004869',
        '2JH' => 'E02004869',
        '2JJ' => 'E02004869',
        '2JL' => 'E02004869',
        '2JN' => 'E02004869',
        '2JP' => 'E02004869',
        '2JQ' => 'E02004869',
        '2JR' => 'E02004869',
        '2JS' => 'E02004869',
        '2JT' => 'E02004869',
        '2JU' => 'E02004864',
        '2JW' => 'E02004869',
        '2JZ' => 'E02004869',
        '2LA' => 'E02004869',
        '2LB' => 'E02004869',
        '2LD' => 'E02004869',
        '2LE' => 'E02004869',
        '2LF' => 'E02004869',
        '2LG' => 'E02004869',
        '2LH' => 'E02004869',
        '2LJ' => 'E02004869',
        '2LL' => 'E02004869',
        '2LN' => 'E02004869',
        '2LP' => 'E02004869',
        '2LQ' => 'E02004869',
        '2LR' => 'E02004869',
        '2LS' => 'E02004869',
        '2LT' => 'E02004864',
        '2LU' => 'E02004864',
        '2LW' => 'E02004869',
        '2LX' => 'E02004869',
        '2LZ' => 'E02004869',
        '2NA' => 'E02004864',
        '2NB' => 'E02004864',
        '2ND' => 'E02004869',
        '2NE' => 'E02004869',
        '2NF' => 'E02004869',
        '2NG' => 'E02004864',
        '2NH' => 'E02004869',
        '2NJ' => 'E02004869',
        '2NL' => 'E02004869',
        '2NN' => 'E02004869',
        '2NP' => 'E02004869',
        '2NQ' => 'E02004869',
        '2NR' => 'E02004869',
        '2NS' => 'E02004864',
        '2NT' => 'E02004864',
        '2NU' => 'E02004869',
        '2NW' => 'E02004869',
        '2NX' => 'E02004869',
        '2NY' => 'E02004869',
        '2NZ' => 'E02004864',
        '2PA' => 'E02004864',
        '2PB' => 'E02004864',
        '2PD' => 'E02004864',
        '2PE' => 'E02004864',
        '2PF' => 'E02004864',
        '2PG' => 'E02004864',
        '2PH' => 'E02004864',
        '2PJ' => 'E02004864',
        '2PL' => 'E02004864',
        '2PN' => 'E02004864',
        '2PP' => 'E02004864',
        '2PQ' => 'E02004864',
        '2PR' => 'E02004864',
        '2PS' => 'E02004864',
        '2PT' => 'E02004864',
        '2PU' => 'E02004864',
        '2PW' => 'E02004864',
        '2PX' => 'E02004861',
        '2PY' => 'E02004864',
        '2PZ' => 'E02004864',
        '2QA' => 'E02004861',
        '2QB' => 'E02004864',
        '2QD' => 'E02004864',
        '2QE' => 'E02004864',
        '2QF' => 'E02004861',
        '2QG' => 'E02004861',
        '2QH' => 'E02004861',
        '2QJ' => 'E02004861',
        '2QL' => 'E02004861',
        '2QN' => 'E02004861',
        '2QP' => 'E02004861',
        '2QQ' => 'E02004861',
        '2QR' => 'E02004861',
        '2QS' => 'E02004861',
        '2QT' => 'E02004861',
        '2QU' => 'E02004861',
        '2QW' => 'E02004861',
        '2QX' => 'E02004861',
        '2QY' => 'E02004861',
        '2QZ' => 'E02004861',
        '2RA' => 'E02004861',
        '2RB' => 'E02004861',
        '2RD' => 'E02004861',
        '2RE' => 'E02004861',
        '2RF' => 'E02004861',
        '2RG' => 'E02004861',
        '2RH' => 'E02004861',
        '2RJ' => 'E02004861',
        '2RL' => 'E02004861',
        '2RN' => 'E02004861',
        '2RP' => 'E02004869',
        '2RQ' => 'E02004861',
        '2RR' => 'E02004869',
        '2RS' => 'E02004861',
        '2RT' => 'E02004861',
        '2RU' => 'E02004864',
        '2RW' => 'E02004864',
        '2RX' => 'E02004861',
        '2RY' => 'E02004861',
        '2RZ' => 'E02004861',
        '2SA' => 'E02004864',
        '2SB' => 'E02004861',
        '2SD' => 'E02004861',
        '2SE' => 'E02004861',
        '2SF' => 'E02004861',
        '2SG' => 'E02004861',
        '2SH' => 'E02004861',
        '2SJ' => 'E02004861',
        '2SL' => 'E02004861',
        '2SN' => 'E02004861',
        '2SP' => 'E02004861',
        '2SQ' => 'E02004861',
        '2SR' => 'E02004864',
        '2SS' => 'E02004864',
        '2ST' => 'E02004869',
        '2SU' => 'E02004869',
        '2SW' => 'E02004864',
        '2SX' => 'E02003676',
        '2SY' => 'E02003676',
        '2SZ' => 'E02004869',
        '2TA' => 'E02004861',
        '2TB' => 'E02004866',
        '2TD' => 'E02004861',
        '2TE' => 'E02004861',
        '2TF' => 'E02004861',
        '2TG' => 'E02004861',
        '2TH' => 'E02004864',
        '2TJ' => 'E02004864',
        '2TL' => 'E02004864',
        '2TN' => 'E02004869',
        '2TP' => 'E02004869',
        '2TR' => 'E02004864',
        '2TS' => 'E02004864',
        '2TT' => 'E02004864',
        '2TU' => 'E02004864',
        '2TW' => 'E02004869',
        '2TX' => 'E02004869',
        '2TY' => 'E02004869',
        '2TZ' => 'E02004864',
        '2UA' => 'E02004864',
        '2UB' => 'E02004864',
        '2UD' => 'E02004864',
        '2UG' => 'E02004864',
        '2UH' => 'E02004864',
        '2UJ' => 'E02004864',
        '2UL' => 'E02004864',
        '2UN' => 'E02004864',
        '2UP' => 'E02004864',
        '2UQ' => 'E02004864',
        '2UR' => 'E02004864',
        '2US' => 'E02004864',
        '2UT' => 'E02004864',
        '2UU' => 'E02004864',
        '2UW' => 'E02004864',
        '2UX' => 'E02004864',
        '2UY' => 'E02004864',
        '2UZ' => 'E02004864',
        '2WA' => 'E02004864',
        '2WB' => 'E02004864',
        '2WD' => 'E02004864',
        '2WE' => 'E02004864',
        '2WF' => 'E02004864',
        '2WG' => 'E02004864',
        '2WH' => 'E02004864',
        '2WJ' => 'E02004864',
        '2WL' => 'E02004864',
        '2WN' => 'E02004864',
        '2WP' => 'E02004864',
        '2WQ' => 'E02004864',
        '2WR' => 'E02004864',
        '2WS' => 'E02004864',
        '2WT' => 'E02004864',
        '2WU' => 'E02004864',
        '2WW' => 'E02004864',
        '2WX' => 'E02004864',
        '2WY' => 'E02004864',
        '2WZ' => 'E02004864',
        '2XA' => 'E02004864',
        '2XB' => 'E02004864',
        '2XD' => 'E02004864',
        '2XE' => 'E02004864',
        '2XF' => 'E02004864',
        '2XG' => 'E02004864',
        '2XH' => 'E02004864',
        '2XJ' => 'E02004864',
        '2XL' => 'E02004864',
        '2XN' => 'E02004864',
        '2XP' => 'E02004864',
        '2XQ' => 'E02004864',
        '2XR' => 'E02004864',
        '2XS' => 'E02004864',
        '2XT' => 'E02004864',
        '2XU' => 'E02004864',
        '2XW' => 'E02004864',
        '2XX' => 'E02004864',
        '2XY' => 'E02004864',
        '2XZ' => 'E02004864',
        '2YA' => 'E02004864',
        '2YB' => 'E02004864',
        '2YD' => 'E02004864',
        '2YE' => 'E02004864',
        '2YF' => 'E02004864',
        '2YG' => 'E02004864',
        '2YH' => 'E02004864',
        '2YJ' => 'E02004864',
        '2YL' => 'E02004864',
        '2YN' => 'E02004864',
        '2YP' => 'E02004864',
        '2YR' => 'E02004864',
        '2YS' => 'E02004864',
        '2YT' => 'E02004869',
        '2YU' => 'E02004869',
        '2YX' => 'E02004864',
        '2YY' => 'E02004864',
        '2ZG' => 'E02004864',
        '2ZH' => 'E02004864',
        '2ZL' => 'E02004864',
        '2ZN' => 'E02004864',
        '2ZP' => 'E02004864',
        '2ZQ' => 'E02004864',
        '2ZR' => 'E02004864',
        '2ZU' => 'E02004864',
        '2ZW' => 'E02004864',
        '2ZX' => 'E02004864',
        '3AA' => 'E02004869',
        '3AB' => 'E02004869',
        '3AD' => 'E02004869',
        '3AE' => 'E02004869',
        '3AF' => 'E02004869',
        '3AG' => 'E02004869',
        '3AH' => 'E02004869',
        '3AJ' => 'E02004869',
        '3AL' => 'E02004869',
        '3AN' => 'E02004869',
        '3AP' => 'E02004864',
        '3AQ' => 'E02004867',
        '3AR' => 'E02004867',
        '3AS' => 'E02004869',
        '3AT' => 'E02004864',
        '3AU' => 'E02004867',
        '3AW' => 'E02004869',
        '3AX' => 'E02004867',
        '3AY' => 'E02004869',
        '3AZ' => 'E02004869',
        '3BA' => 'E02004864',
        '3BB' => 'E02004867',
        '3BD' => 'E02004869',
        '3BE' => 'E02004864',
        '3BF' => 'E02004867',
        '3BG' => 'E02004869',
        '3BH' => 'E02004869',
        '3BJ' => 'E02004867',
        '3BL' => 'E02004867',
        '3BN' => 'E02004867',
        '3BP' => 'E02004867',
        '3BQ' => 'E02004869',
        '3BS' => 'E02004867',
        '3BT' => 'E02004869',
        '3BU' => 'E02004867',
        '3BW' => 'E02004867',
        '3BX' => 'E02004867',
        '3BY' => 'E02004869',
        '3BZ' => 'E02004869',
        '3DA' => 'E02004869',
        '3DB' => 'E02004869',
        '3DD' => 'E02004869',
        '3DE' => 'E02004869',
        '3DF' => 'E02004869',
        '3DG' => 'E02004869',
        '3DH' => 'E02004869',
        '3DJ' => 'E02004869',
        '3DL' => 'E02004864',
        '3DN' => 'E02004869',
        '3DP' => 'E02004867',
        '3DQ' => 'E02004869',
        '3DR' => 'E02004869',
        '3DS' => 'E02004869',
        '3DT' => 'E02004869',
        '3DU' => 'E02004869',
        '3DW' => 'E02004869',
        '3DX' => 'E02004869',
        '3DY' => 'E02004869',
        '3DZ' => 'E02004869',
        '3EA' => 'E02004869',
        '3EB' => 'E02004867',
        '3ED' => 'E02004869',
        '3EE' => 'E02004869',
        '3EF' => 'E02004869',
        '3EG' => 'E02004869',
        '3EH' => 'E02004867',
        '3EJ' => 'E02004869',
        '3EL' => 'E02004869',
        '3EN' => 'E02004869',
        '3EP' => 'E02004869',
        '3EQ' => 'E02004869',
        '3ER' => 'E02004861',
        '3ES' => 'E02004869',
        '3ET' => 'E02004869',
        '3EU' => 'E02004869',
        '3EW' => 'E02004869',
        '3EX' => 'E02004869',
        '3EY' => 'E02004869',
        '3EZ' => 'E02004869',
        '3FA' => 'E02004864',
        '3FB' => 'E02004869',
        '3FD' => 'E02004864',
        '3FE' => 'E02004864',
        '3FG' => 'E02004864',
        '3FH' => 'E02004864',
        '3FJ' => 'E02004867',
        '3FL' => 'E02004864',
        '3FN' => 'E02004861',
        '3FP' => 'E02004864',
        '3FQ' => 'E02004867',
        '3FR' => 'E02004867',
        '3FS' => 'E02004869',
        '3FT' => 'E02004864',
        '3FU' => 'E02004869',
        '3FW' => 'E02004869',
        '3FX' => 'E02004867',
        '3FY' => 'E02004867',
        '3FZ' => 'E02004864',
        '3GA' => 'E02004864',
        '3GB' => 'E02004867',
        '3GD' => 'E02004864',
        '3GE' => 'E02004864',
        '3GF' => 'E02004864',
        '3GG' => 'E02004864',
        '3GH' => 'E02004864',
        '3GJ' => 'E02004864',
        '3GL' => 'E02004864',
        '3GN' => 'E02004864',
        '3GP' => 'E02004864',
        '3GQ' => 'E02004864',
        '3GR' => 'E02004867',
        '3GS' => 'E02004864',
        '3GT' => 'E02004867',
        '3GU' => 'E02004864',
        '3GW' => 'E02004861',
        '3GX' => 'E02004864',
        '3GY' => 'E02004861',
        '3GZ' => 'E02004864',
        '3HA' => 'E02004869',
        '3HB' => 'E02004869',
        '3HD' => 'E02004869',
        '3HE' => 'E02004864',
        '3HF' => 'E02004869',
        '3HG' => 'E02004869',
        '3HH' => 'E02004869',
        '3HJ' => 'E02004869',
        '3HL' => 'E02004869',
        '3HN' => 'E02004861',
        '3HP' => 'E02004867',
        '3HQ' => 'E02004869',
        '3HR' => 'E02004867',
        '3HS' => 'E02004864',
        '3HT' => 'E02004867',
        '3HU' => 'E02004867',
        '3HW' => 'E02004867',
        '3HX' => 'E02004867',
        '3HY' => 'E02004867',
        '3HZ' => 'E02004869',
        '3JA' => 'E02004867',
        '3JB' => 'E02004867',
        '3JD' => 'E02004867',
        '3JE' => 'E02004867',
        '3JF' => 'E02004867',
        '3JG' => 'E02004867',
        '3JH' => 'E02004867',
        '3JJ' => 'E02004867',
        '3JL' => 'E02004867',
        '3JN' => 'E02004867',
        '3JP' => 'E02004867',
        '3JQ' => 'E02004867',
        '3JR' => 'E02004867',
        '3JS' => 'E02004867',
        '3JT' => 'E02004867',
        '3JU' => 'E02004867',
        '3JW' => 'E02004867',
        '3JX' => 'E02004867',
        '3JY' => 'E02004867',
        '3JZ' => 'E02004867',
        '3LA' => 'E02004867',
        '3LB' => 'E02004867',
        '3LD' => 'E02004867',
        '3LE' => 'E02004867',
        '3LF' => 'E02004867',
        '3LG' => 'E02004867',
        '3LH' => 'E02004867',
        '3LJ' => 'E02004867',
        '3LL' => 'E02004867',
        '3LN' => 'E02004867',
        '3LP' => 'E02004867',
        '3LQ' => 'E02004867',
        '3LR' => 'E02004867',
        '3LS' => 'E02004867',
        '3LT' => 'E02004867',
        '3LU' => 'E02004867',
        '3LW' => 'E02004867',
        '3LX' => 'E02004867',
        '3LY' => 'E02004867',
        '3LZ' => 'E02004867',
        '3NA' => 'E02004867',
        '3NB' => 'E02004867',
        '3ND' => 'E02004867',
        '3NE' => 'E02004867',
        '3NF' => 'E02004867',
        '3NG' => 'E02004867',
        '3NH' => 'E02004867',
        '3NJ' => 'E02004867',
        '3NL' => 'E02004867',
        '3NN' => 'E02004867',
        '3NP' => 'E02004867',
        '3NQ' => 'E02004867',
        '3NR' => 'E02004867',
        '3NS' => 'E02004867',
        '3NT' => 'E02004867',
        '3NU' => 'E02004867',
        '3NW' => 'E02004867',
        '3NX' => 'E02004867',
        '3NY' => 'E02004867',
        '3NZ' => 'E02004867',
        '3PA' => 'E02004867',
        '3PB' => 'E02004861',
        '3PD' => 'E02004867',
        '3PE' => 'E02004867',
        '3PF' => 'E02004867',
        '3PG' => 'E02004867',
        '3PH' => 'E02004867',
        '3PJ' => 'E02004867',
        '3PL' => 'E02004867',
        '3PN' => 'E02004867',
        '3PP' => 'E02004867',
        '3PQ' => 'E02004867',
        '3PR' => 'E02004867',
        '3PS' => 'E02004867',
        '3PT' => 'E02004867',
        '3PU' => 'E02004867',
        '3PW' => 'E02004867',
        '3PX' => 'E02004867',
        '3PY' => 'E02004867',
        '3PZ' => 'E02004867',
        '3QA' => 'E02004867',
        '3QB' => 'E02004867',
        '3QD' => 'E02004867',
        '3QE' => 'E02004861',
        '3QF' => 'E02004861',
        '3QG' => 'E02004867',
        '3QH' => 'E02004861',
        '3QJ' => 'E02004867',
        '3QL' => 'E02004861',
        '3QN' => 'E02004861',
        '3QP' => 'E02004861',
        '3QQ' => 'E02004867',
        '3QR' => 'E02004861',
        '3QS' => 'E02004861',
        '3QT' => 'E02004861',
        '3QU' => 'E02004861',
        '3QW' => 'E02004861',
        '3QX' => 'E02004861',
        '3QY' => 'E02004861',
        '3QZ' => 'E02004861',
        '3RA' => 'E02004861',
        '3RB' => 'E02004861',
        '3RD' => 'E02004861',
        '3RE' => 'E02004861',
        '3RF' => 'E02004861',
        '3RG' => 'E02004861',
        '3RH' => 'E02004861',
        '3RJ' => 'E02004861',
        '3RL' => 'E02004861',
        '3RN' => 'E02004861',
        '3RP' => 'E02004861',
        '3RQ' => 'E02004861',
        '3RR' => 'E02004861',
        '3RS' => 'E02004861',
        '3RT' => 'E02004861',
        '3RU' => 'E02004861',
        '3RW' => 'E02004861',
        '3RX' => 'E02004861',
        '3RY' => 'E02004861',
        '3RZ' => 'E02004861',
        '3SA' => 'E02004864',
        '3SB' => 'E02004861',
        '3SD' => 'E02004861',
        '3SE' => 'E02004861',
        '3SF' => 'E02004861',
        '3SG' => 'E02004861',
        '3SH' => 'E02004861',
        '3SJ' => 'E02004861',
        '3SL' => 'E02004861',
        '3SN' => 'E02004861',
        '3SP' => 'E02004861',
        '3SQ' => 'E02004861',
        '3SR' => 'E02004861',
        '3SS' => 'E02004861',
        '3ST' => 'E02004861',
        '3SU' => 'E02004861',
        '3SW' => 'E02004861',
        '3SX' => 'E02004861',
        '3SY' => 'E02004861',
        '3SZ' => 'E02004861',
        '3TA' => 'E02004861',
        '3TB' => 'E02004861',
        '3TD' => 'E02004861',
        '3TE' => 'E02004861',
        '3TF' => 'E02004861',
        '3TG' => 'E02004861',
        '3TH' => 'E02004861',
        '3TJ' => 'E02004864',
        '3TL' => 'E02004861',
        '3TN' => 'E02004867',
        '3TP' => 'E02004867',
        '3TQ' => 'E02004861',
        '3TR' => 'E02004861',
        '3TS' => 'E02004861',
        '3TT' => 'E02004861',
        '3TU' => 'E02004861',
        '3TW' => 'E02004864',
        '3TX' => 'E02004861',
        '3TY' => 'E02004861',
        '3TZ' => 'E02004859',
        '3UA' => 'E02004861',
        '3UB' => 'E02003676',
        '3UD' => 'E02004859',
        '3UE' => 'E02003676',
        '3UF' => 'E02004859',
        '3UG' => 'E02004867',
        '3UH' => 'E02004864',
        '3UJ' => 'E02004861',
        '3UL' => 'E02004867',
        '3UN' => 'E02004869',
        '3UP' => 'E02004861',
        '3UQ' => 'E02004861',
        '3UR' => 'E02004867',
        '3US' => 'E02004867',
        '3UT' => 'E02004867',
        '3UU' => 'E02004867',
        '3UW' => 'E02004864',
        '3UX' => 'E02004861',
        '3UY' => 'E02004864',
        '3UZ' => 'E02004864',
        '3WA' => 'E02004864',
        '3WB' => 'E02004864',
        '3WD' => 'E02004864',
        '3WE' => 'E02004864',
        '3WF' => 'E02004864',
        '3WG' => 'E02004864',
        '3WH' => 'E02004864',
        '3WJ' => 'E02004864',
        '3WL' => 'E02004864',
        '3WN' => 'E02004864',
        '3WP' => 'E02004864',
        '3WQ' => 'E02004864',
        '3WR' => 'E02004864',
        '3WS' => 'E02004864',
        '3WT' => 'E02004864',
        '3WU' => 'E02004864',
        '3WW' => 'E02004864',
        '3WX' => 'E02004864',
        '3WY' => 'E02004864',
        '3WZ' => 'E02004864',
        '3XA' => 'E02004861',
        '3XB' => 'E02004861',
        '3XD' => 'E02004861',
        '3XE' => 'E02004861',
        '3XF' => 'E02004864',
        '3XG' => 'E02004861',
        '3XH' => 'E02004861',
        '3XJ' => 'E02004861',
        '3XL' => 'E02004861',
        '3XN' => 'E02004861',
        '3XP' => 'E02004861',
        '3XQ' => 'E02004864',
        '3XR' => 'E02004861',
        '3XS' => 'E02004864',
        '3XT' => 'E02004861',
        '3XU' => 'E02004864',
        '3XW' => 'E02004864',
        '3XX' => 'E02004861',
        '3XY' => 'E02004867',
        '3XZ' => 'E02004867',
        '3YA' => 'E02004861',
        '3YB' => 'E02004867',
        '3YD' => 'E02004861',
        '3YE' => 'E02004867',
        '3YF' => 'E02004867',
        '3YG' => 'E02004864',
        '3YH' => 'E02004867',
        '3YJ' => 'E02004867',
        '3YL' => 'E02004869',
        '3YN' => 'E02004864',
        '3YP' => 'E02004869',
        '3YQ' => 'E02004864',
        '3YR' => 'E02004864',
        '3YS' => 'E02004867',
        '3YT' => 'E02004861',
        '3YU' => 'E02004861',
        '3YW' => 'E02004864',
        '3YX' => 'E02004861',
        '3YY' => 'E02004861',
        '3YZ' => 'E02004861',
        '3ZA' => 'E02004864',
        '3ZB' => 'E02004864',
        '3ZD' => 'E02004864',
        '3ZE' => 'E02004867',
        '3ZF' => 'E02004864',
        '3ZG' => 'E02004861',
        '3ZH' => 'E02004864',
        '3ZJ' => 'E02004864',
        '3ZL' => 'E02004864',
        '3ZN' => 'E02004864',
        '3ZP' => 'E02004864',
        '3ZQ' => 'E02004864',
        '3ZR' => 'E02004864',
        '3ZU' => 'E02004864',
        '3ZW' => 'E02004864',
        '9AA' => 'E02004864',
        '9AB' => 'E02004864',
        '9AD' => 'E02004864',
        '9AE' => 'E02004864',
        '9AF' => 'E02004864',
        '9AG' => 'E02004864',
        '9AH' => 'E02004864',
        '9AJ' => 'E02004864',
        '9AL' => 'E02004864',
        '9AP' => 'E02004864',
        '9AR' => 'E02004864',
        '9AS' => 'E02004864',
        '9AT' => 'E02004864',
        '9AU' => 'E02004864',
        '9AW' => 'E02004864',
        '9AX' => 'E02004864',
        '9AY' => 'E02004864',
        '9AZ' => 'E02004864',
        '9BA' => 'E02004864',
        '9BB' => 'E02004864',
        '9BD' => 'E02004864',
        '9BE' => 'E02004864',
        '9BF' => 'E02004864',
        '9BG' => 'E02004864',
        '9BH' => 'E02004864',
        '9BJ' => 'E02004864',
        '9BL' => 'E02004864',
        '9BN' => 'E02004864',
        '9BP' => 'E02004864',
        '9BQ' => 'E02004864',
        '9BR' => 'E02004864',
        '9BS' => 'E02004864',
        '9BT' => 'E02004864',
        '9BU' => 'E02004864',
        '9BW' => 'E02004864',
        '9BX' => 'E02004864',
        '9BY' => 'E02004864',
        '9BZ' => 'E02004864',
        '9DA' => 'E02004864',
        '9DB' => 'E02004864',
        '9DD' => 'E02004864',
        '9DE' => 'E02004864',
        '9DF' => 'E02004864',
        '9DG' => 'E02004864',
        '9DH' => 'E02004864',
        '9DJ' => 'E02004864',
        '9DL' => 'E02004864',
        '9DN' => 'E02004864',
        '9DP' => 'E02004864',
        '9DQ' => 'E02004864',
        '9DR' => 'E02004864',
        '9DS' => 'E02004864',
        '9DT' => 'E02004864',
        '9DU' => 'E02004864',
        '9DW' => 'E02004864',
        '9DX' => 'E02004864',
        '9DY' => 'E02004864',
        '9DZ' => 'E02004864',
        '9EA' => 'E02004864',
        '9EB' => 'E02004864',
        '9ED' => 'E02004864',
        '9EE' => 'E02004864',
        '9EF' => 'E02004864',
        '9EG' => 'E02004864',
        '9EH' => 'E02004864',
        '9EJ' => 'E02004864',
        '9EL' => 'E02004864',
        '9EN' => 'E02004864',
        '9EP' => 'E02004864',
        '9EQ' => 'E02004864',
        '9ER' => 'E02004864',
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
