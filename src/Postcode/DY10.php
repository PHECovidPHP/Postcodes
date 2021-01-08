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
final class DY10
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02006770',
        '1AB' => 'E02006770',
        '1AD' => 'E02006770',
        '1AE' => 'E02006770',
        '1AF' => 'E02006770',
        '1AG' => 'E02006768',
        '1AH' => 'E02006770',
        '1AJ' => 'E02006770',
        '1AL' => 'E02006770',
        '1AN' => 'E02006770',
        '1AP' => 'E02006770',
        '1AQ' => 'E02006770',
        '1AR' => 'E02006770',
        '1AS' => 'E02006770',
        '1AT' => 'E02006768',
        '1AU' => 'E02006770',
        '1AW' => 'E02006770',
        '1AX' => 'E02006770',
        '1AY' => 'E02006770',
        '1AZ' => 'E02006770',
        '1BA' => 'E02006770',
        '1BB' => 'E02006770',
        '1BD' => 'E02006770',
        '1BE' => 'E02006770',
        '1BF' => 'E02006770',
        '1BG' => 'E02006770',
        '1BH' => 'E02006770',
        '1BJ' => 'E02006770',
        '1BL' => 'E02006770',
        '1BN' => 'E02006770',
        '1BP' => 'E02006770',
        '1BQ' => 'E02006770',
        '1BS' => 'E02006770',
        '1BT' => 'E02006770',
        '1BU' => 'E02006770',
        '1BW' => 'E02006770',
        '1BX' => 'E02006770',
        '1BY' => 'E02006770',
        '1BZ' => 'E02006770',
        '1DA' => 'E02006770',
        '1DB' => 'E02006770',
        '1DD' => 'E02006770',
        '1DE' => 'E02006770',
        '1DF' => 'E02006770',
        '1DH' => 'E02006770',
        '1DN' => 'E02006770',
        '1DT' => 'E02002036',
        '1EA' => 'E02006770',
        '1EB' => 'E02006770',
        '1ED' => 'E02006770',
        '1EE' => 'E02006770',
        '1EF' => 'E02006770',
        '1EH' => 'E02006770',
        '1EJ' => 'E02006770',
        '1EL' => 'E02006770',
        '1EN' => 'E02006770',
        '1EP' => 'E02006770',
        '1EQ' => 'E02006770',
        '1ER' => 'E02006770',
        '1ES' => 'E02006770',
        '1EW' => 'E02006770',
        '1EZ' => 'E02006770',
        '1HA' => 'E02006770',
        '1HB' => 'E02006776',
        '1HD' => 'E02006770',
        '1HE' => 'E02006770',
        '1HF' => 'E02006768',
        '1HG' => 'E02006770',
        '1HH' => 'E02006770',
        '1HJ' => 'E02006770',
        '1HL' => 'E02006770',
        '1HN' => 'E02006770',
        '1HP' => 'E02006770',
        '1HQ' => 'E02006776',
        '1HR' => 'E02006770',
        '1HS' => 'E02006776',
        '1HT' => 'E02006776',
        '1HU' => 'E02006776',
        '1HW' => 'E02006770',
        '1HX' => 'E02006776',
        '1HY' => 'E02006776',
        '1HZ' => 'E02006776',
        '1JA' => 'E02006770',
        '1JB' => 'E02006776',
        '1JD' => 'E02006776',
        '1JE' => 'E02006776',
        '1JF' => 'E02006770',
        '1JG' => 'E02006770',
        '1JH' => 'E02006770',
        '1JJ' => 'E02006776',
        '1JL' => 'E02006770',
        '1JN' => 'E02006770',
        '1JP' => 'E02006776',
        '1JR' => 'E02006776',
        '1JS' => 'E02006776',
        '1JT' => 'E02006776',
        '1JW' => 'E02006776',
        '1JX' => 'E02006776',
        '1JY' => 'E02006770',
        '1JZ' => 'E02006776',
        '1LA' => 'E02006770',
        '1LB' => 'E02006776',
        '1LD' => 'E02006770',
        '1LE' => 'E02006770',
        '1LF' => 'E02006770',
        '1LG' => 'E02006776',
        '1LH' => 'E02006776',
        '1LJ' => 'E02006776',
        '1LL' => 'E02006776',
        '1LN' => 'E02006776',
        '1LP' => 'E02006776',
        '1LQ' => 'E02006776',
        '1LR' => 'E02006776',
        '1LS' => 'E02006776',
        '1LT' => 'E02006770',
        '1LU' => 'E02006770',
        '1LW' => 'E02006776',
        '1LX' => 'E02006770',
        '1LY' => 'E02006770',
        '1LZ' => 'E02006770',
        '1NA' => 'E02006770',
        '1NB' => 'E02006770',
        '1ND' => 'E02006770',
        '1NE' => 'E02006770',
        '1NF' => 'E02006770',
        '1NG' => 'E02006770',
        '1NH' => 'E02006770',
        '1NJ' => 'E02006770',
        '1NL' => 'E02006770',
        '1NN' => 'E02006776',
        '1NP' => 'E02006776',
        '1NQ' => 'E02006770',
        '1NR' => 'E02006776',
        '1NS' => 'E02006776',
        '1NT' => 'E02006776',
        '1NU' => 'E02006776',
        '1NW' => 'E02006776',
        '1NX' => 'E02006770',
        '1NY' => 'E02006770',
        '1NZ' => 'E02006770',
        '1PA' => 'E02006770',
        '1PB' => 'E02006770',
        '1PD' => 'E02006770',
        '1PE' => 'E02006770',
        '1PF' => 'E02006770',
        '1PG' => 'E02006770',
        '1PH' => 'E02006770',
        '1PJ' => 'E02006770',
        '1PL' => 'E02006770',
        '1PN' => 'E02006773',
        '1PP' => 'E02006770',
        '1PQ' => 'E02006770',
        '1PR' => 'E02006769',
        '1PS' => 'E02006770',
        '1PT' => 'E02006770',
        '1PU' => 'E02006769',
        '1PW' => 'E02006770',
        '1PX' => 'E02006770',
        '1PY' => 'E02006770',
        '1PZ' => 'E02006770',
        '1QA' => 'E02006770',
        '1QB' => 'E02006770',
        '1QD' => 'E02006773',
        '1QE' => 'E02006770',
        '1QG' => 'E02006770',
        '1QH' => 'E02006770',
        '1QJ' => 'E02006770',
        '1QL' => 'E02006770',
        '1QN' => 'E02006770',
        '1QP' => 'E02006770',
        '1QQ' => 'E02006770',
        '1QR' => 'E02006770',
        '1QT' => 'E02006770',
        '1QU' => 'E02006770',
        '1QX' => 'E02006770',
        '1QY' => 'E02006773',
        '1QZ' => 'E02006770',
        '1RB' => 'E02006770',
        '1RD' => 'E02006770',
        '1RL' => 'E02006769',
        '1RN' => 'E02006769',
        '1RP' => 'E02006769',
        '1RR' => 'E02006770',
        '1RS' => 'E02006769',
        '1RT' => 'E02006769',
        '1RW' => 'E02006769',
        '1RZ' => 'E02006769',
        '1SA' => 'E02006770',
        '1SB' => 'E02006770',
        '1SD' => 'E02006773',
        '1SE' => 'E02006770',
        '1SF' => 'E02006773',
        '1SG' => 'E02006773',
        '1SH' => 'E02006773',
        '1SJ' => 'E02006773',
        '1SL' => 'E02006773',
        '1SN' => 'E02006773',
        '1SP' => 'E02006773',
        '1SQ' => 'E02006773',
        '1SR' => 'E02006773',
        '1SS' => 'E02006773',
        '1ST' => 'E02006769',
        '1SU' => 'E02006773',
        '1SW' => 'E02006770',
        '1SX' => 'E02006773',
        '1SY' => 'E02006773',
        '1SZ' => 'E02006773',
        '1TA' => 'E02006769',
        '1TB' => 'E02006769',
        '1TE' => 'E02006769',
        '1TF' => 'E02006769',
        '1TH' => 'E02006773',
        '1TJ' => 'E02006769',
        '1TL' => 'E02006773',
        '1TN' => 'E02006773',
        '1TP' => 'E02006773',
        '1TR' => 'E02006769',
        '1TT' => 'E02006770',
        '1TW' => 'E02006773',
        '1UA' => 'E02006770',
        '1UB' => 'E02006773',
        '1UD' => 'E02006773',
        '1UE' => 'E02006773',
        '1UF' => 'E02006773',
        '1UG' => 'E02006773',
        '1UQ' => 'E02006773',
        '1UR' => 'E02006773',
        '1UT' => 'E02006773',
        '1UW' => 'E02006768',
        '1UX' => 'E02006768',
        '1UY' => 'E02006773',
        '1UZ' => 'E02006773',
        '1WA' => 'E02006770',
        '1WB' => 'E02006770',
        '1WD' => 'E02006768',
        '1WE' => 'E02006768',
        '1WF' => 'E02006768',
        '1WG' => 'E02006768',
        '1WH' => 'E02006768',
        '1WJ' => 'E02006770',
        '1WL' => 'E02006768',
        '1WN' => 'E02006768',
        '1WP' => 'E02006768',
        '1WQ' => 'E02006770',
        '1WR' => 'E02006770',
        '1WS' => 'E02006770',
        '1WT' => 'E02006770',
        '1WU' => 'E02006768',
        '1WW' => 'E02006768',
        '1WX' => 'E02006770',
        '1WY' => 'E02006770',
        '1WZ' => 'E02006768',
        '1XA' => 'E02006773',
        '1XB' => 'E02006773',
        '1XD' => 'E02006773',
        '1XE' => 'E02006773',
        '1XF' => 'E02006773',
        '1XG' => 'E02006773',
        '1XH' => 'E02006773',
        '1XJ' => 'E02006773',
        '1XL' => 'E02006776',
        '1XN' => 'E02006773',
        '1XP' => 'E02006776',
        '1XQ' => 'E02006776',
        '1XR' => 'E02006773',
        '1XS' => 'E02006776',
        '1XT' => 'E02006773',
        '1XU' => 'E02006768',
        '1XW' => 'E02006776',
        '1XY' => 'E02006768',
        '1XZ' => 'E02006768',
        '1YA' => 'E02006776',
        '1YB' => 'E02006776',
        '1YD' => 'E02006776',
        '1YE' => 'E02006776',
        '1YF' => 'E02006776',
        '1YG' => 'E02006776',
        '1YH' => 'E02006776',
        '1YJ' => 'E02006776',
        '1YL' => 'E02006768',
        '1YN' => 'E02006776',
        '1YP' => 'E02006776',
        '1YQ' => 'E02006768',
        '1YR' => 'E02006776',
        '1YS' => 'E02006770',
        '1YT' => 'E02006768',
        '1YU' => 'E02006776',
        '1YW' => 'E02006770',
        '1YX' => 'E02006770',
        '1YY' => 'E02006768',
        '1YZ' => 'E02006776',
        '1ZA' => 'E02006770',
        '1ZD' => 'E02006768',
        '1ZF' => 'E02006768',
        '1ZG' => 'E02006768',
        '1ZH' => 'E02006768',
        '1ZJ' => 'E02006768',
        '1ZL' => 'E02006768',
        '1ZQ' => 'E02006770',
        '1ZS' => 'E02006776',
        '1ZT' => 'E02006770',
        '1ZU' => 'E02006768',
        '1ZX' => 'E02006768',
        '1ZY' => 'E02006770',
        '1ZZ' => 'E02006768',
        '2AA' => 'E02006770',
        '2AB' => 'E02006769',
        '2AD' => 'E02006770',
        '2AE' => 'E02006770',
        '2AF' => 'E02006770',
        '2AG' => 'E02006770',
        '2AH' => 'E02006770',
        '2AJ' => 'E02006770',
        '2AL' => 'E02006770',
        '2AN' => 'E02006770',
        '2AP' => 'E02006770',
        '2AQ' => 'E02006770',
        '2AR' => 'E02006770',
        '2AS' => 'E02006770',
        '2AT' => 'E02006770',
        '2AU' => 'E02006770',
        '2AW' => 'E02006770',
        '2AX' => 'E02006770',
        '2AY' => 'E02006770',
        '2AZ' => 'E02006770',
        '2BA' => 'E02006770',
        '2BB' => 'E02006769',
        '2BD' => 'E02006770',
        '2BE' => 'E02006770',
        '2BF' => 'E02006770',
        '2BG' => 'E02006770',
        '2BH' => 'E02006770',
        '2BJ' => 'E02006769',
        '2BL' => 'E02006770',
        '2BN' => 'E02006770',
        '2BP' => 'E02006770',
        '2BQ' => 'E02006770',
        '2BS' => 'E02006769',
        '2BT' => 'E02006769',
        '2BU' => 'E02006769',
        '2BW' => 'E02006768',
        '2BX' => 'E02006769',
        '2BY' => 'E02006769',
        '2BZ' => 'E02006769',
        '2DA' => 'E02006769',
        '2DB' => 'E02006769',
        '2DD' => 'E02006769',
        '2DE' => 'E02006770',
        '2DF' => 'E02006769',
        '2DG' => 'E02006770',
        '2DH' => 'E02006770',
        '2DJ' => 'E02006770',
        '2DL' => 'E02006770',
        '2DN' => 'E02006770',
        '2DP' => 'E02006770',
        '2DQ' => 'E02006770',
        '2DR' => 'E02006770',
        '2DS' => 'E02006770',
        '2DT' => 'E02006769',
        '2DU' => 'E02006770',
        '2DW' => 'E02006770',
        '2DX' => 'E02006770',
        '2DY' => 'E02006770',
        '2DZ' => 'E02006770',
        '2EA' => 'E02006770',
        '2EB' => 'E02006769',
        '2ED' => 'E02006770',
        '2EE' => 'E02006770',
        '2EF' => 'E02006770',
        '2EG' => 'E02006770',
        '2EH' => 'E02006770',
        '2EJ' => 'E02006770',
        '2EL' => 'E02006770',
        '2EN' => 'E02006770',
        '2EP' => 'E02006770',
        '2EQ' => 'E02006770',
        '2ER' => 'E02006770',
        '2ES' => 'E02006770',
        '2ET' => 'E02006770',
        '2EU' => 'E02006770',
        '2EW' => 'E02006770',
        '2EX' => 'E02006770',
        '2EY' => 'E02006770',
        '2EZ' => 'E02006770',
        '2FA' => 'E02006770',
        '2FB' => 'E02006770',
        '2GA' => 'E02006770',
        '2GB' => 'E02006770',
        '2GD' => 'E02006770',
        '2GE' => 'E02006770',
        '2GF' => 'E02006770',
        '2HA' => 'E02006770',
        '2HB' => 'E02006770',
        '2HD' => 'E02006770',
        '2HE' => 'E02006770',
        '2HF' => 'E02006770',
        '2HG' => 'E02006770',
        '2HJ' => 'E02006770',
        '2HL' => 'E02006770',
        '2HN' => 'E02006770',
        '2HP' => 'E02006770',
        '2HQ' => 'E02006770',
        '2HR' => 'E02006770',
        '2HS' => 'E02006770',
        '2HT' => 'E02006770',
        '2HU' => 'E02006770',
        '2HW' => 'E02006770',
        '2JA' => 'E02006770',
        '2JB' => 'E02006770',
        '2JD' => 'E02006770',
        '2JE' => 'E02006770',
        '2JG' => 'E02006770',
        '2JH' => 'E02006770',
        '2JJ' => 'E02006770',
        '2JL' => 'E02006770',
        '2JN' => 'E02006770',
        '2JP' => 'E02006770',
        '2JQ' => 'E02006772',
        '2JR' => 'E02006768',
        '2JS' => 'E02006770',
        '2JT' => 'E02006770',
        '2JU' => 'E02006770',
        '2JW' => 'E02006770',
        '2JX' => 'E02006770',
        '2JY' => 'E02006770',
        '2JZ' => 'E02006769',
        '2LA' => 'E02006770',
        '2LB' => 'E02006770',
        '2LD' => 'E02006770',
        '2LE' => 'E02006770',
        '2LF' => 'E02006770',
        '2LG' => 'E02006770',
        '2LH' => 'E02006770',
        '2LJ' => 'E02006770',
        '2LL' => 'E02006770',
        '2LN' => 'E02006770',
        '2LP' => 'E02006770',
        '2LQ' => 'E02006770',
        '2LR' => 'E02006770',
        '2LS' => 'E02006770',
        '2LT' => 'E02006770',
        '2LU' => 'E02006770',
        '2LW' => 'E02006770',
        '2LX' => 'E02006770',
        '2LY' => 'E02006770',
        '2LZ' => 'E02006770',
        '2NA' => 'E02006770',
        '2NB' => 'E02006770',
        '2ND' => 'E02006770',
        '2NE' => 'E02006770',
        '2NF' => 'E02006770',
        '2NG' => 'E02006770',
        '2NH' => 'E02006770',
        '2NJ' => 'E02006770',
        '2NL' => 'E02006770',
        '2NN' => 'E02006770',
        '2NP' => 'E02006770',
        '2NQ' => 'E02006770',
        '2NR' => 'E02006770',
        '2NS' => 'E02006770',
        '2NT' => 'E02006770',
        '2NU' => 'E02006770',
        '2NW' => 'E02006770',
        '2NX' => 'E02006767',
        '2NY' => 'E02006767',
        '2NZ' => 'E02006770',
        '2PA' => 'E02006770',
        '2PB' => 'E02006770',
        '2PD' => 'E02006770',
        '2PE' => 'E02006770',
        '2PF' => 'E02006770',
        '2PG' => 'E02006770',
        '2PH' => 'E02006767',
        '2PJ' => 'E02006770',
        '2PL' => 'E02006770',
        '2PN' => 'E02006770',
        '2PP' => 'E02006770',
        '2PQ' => 'E02006770',
        '2PR' => 'E02006770',
        '2PS' => 'E02006770',
        '2PT' => 'E02006770',
        '2PU' => 'E02006770',
        '2PX' => 'E02006770',
        '2PY' => 'E02006770',
        '2PZ' => 'E02006770',
        '2QA' => 'E02006770',
        '2QB' => 'E02006770',
        '2QD' => 'E02006770',
        '2QE' => 'E02006770',
        '2QF' => 'E02006769',
        '2QG' => 'E02006770',
        '2QH' => 'E02006770',
        '2QJ' => 'E02006770',
        '2QL' => 'E02006770',
        '2QN' => 'E02006769',
        '2QP' => 'E02006770',
        '2QQ' => 'E02006770',
        '2QR' => 'E02006770',
        '2QS' => 'E02006770',
        '2QT' => 'E02006770',
        '2QU' => 'E02006770',
        '2QW' => 'E02006770',
        '2QX' => 'E02006769',
        '2QY' => 'E02006769',
        '2QZ' => 'E02006769',
        '2RA' => 'E02006770',
        '2RB' => 'E02006770',
        '2RD' => 'E02006770',
        '2RE' => 'E02006769',
        '2RF' => 'E02006769',
        '2RG' => 'E02006769',
        '2RH' => 'E02006769',
        '2RJ' => 'E02006769',
        '2RL' => 'E02006769',
        '2RN' => 'E02006769',
        '2RP' => 'E02006770',
        '2RQ' => 'E02006769',
        '2RR' => 'E02006769',
        '2RS' => 'E02006769',
        '2RT' => 'E02006769',
        '2RU' => 'E02006769',
        '2RW' => 'E02006770',
        '2RX' => 'E02006769',
        '2RY' => 'E02006769',
        '2RZ' => 'E02006769',
        '2SA' => 'E02006769',
        '2SB' => 'E02006769',
        '2SD' => 'E02006769',
        '2SE' => 'E02006769',
        '2SF' => 'E02006769',
        '2SH' => 'E02006769',
        '2SJ' => 'E02006769',
        '2SL' => 'E02006769',
        '2SN' => 'E02006769',
        '2SP' => 'E02006769',
        '2SR' => 'E02006769',
        '2SS' => 'E02006769',
        '2ST' => 'E02006769',
        '2SU' => 'E02006769',
        '2SW' => 'E02006769',
        '2SX' => 'E02006769',
        '2SY' => 'E02006769',
        '2SZ' => 'E02006769',
        '2TA' => 'E02006769',
        '2TB' => 'E02006769',
        '2TE' => 'E02006768',
        '2TF' => 'E02006768',
        '2TG' => 'E02006768',
        '2TH' => 'E02006769',
        '2TJ' => 'E02006769',
        '2TL' => 'E02006769',
        '2TN' => 'E02006769',
        '2TP' => 'E02006769',
        '2TQ' => 'E02006769',
        '2TR' => 'E02006769',
        '2TS' => 'E02006769',
        '2TT' => 'E02006769',
        '2TU' => 'E02006769',
        '2TW' => 'E02006769',
        '2TX' => 'E02006769',
        '2TY' => 'E02006769',
        '2TZ' => 'E02006769',
        '2UA' => 'E02006769',
        '2UB' => 'E02006769',
        '2UD' => 'E02006769',
        '2UE' => 'E02006769',
        '2UF' => 'E02006769',
        '2UG' => 'E02006768',
        '2UH' => 'E02006770',
        '2UJ' => 'E02006769',
        '2UL' => 'E02006769',
        '2UN' => 'E02006769',
        '2UP' => 'E02006769',
        '2UQ' => 'E02006769',
        '2UR' => 'E02006769',
        '2US' => 'E02006768',
        '2UT' => 'E02006769',
        '2UU' => 'E02006769',
        '2UW' => 'E02006768',
        '2UX' => 'E02006769',
        '2UY' => 'E02006769',
        '2UZ' => 'E02006769',
        '2WD' => 'E02006770',
        '2WE' => 'E02006770',
        '2WF' => 'E02006768',
        '2WG' => 'E02006770',
        '2WH' => 'E02006770',
        '2WJ' => 'E02006768',
        '2WL' => 'E02006768',
        '2WN' => 'E02006768',
        '2WP' => 'E02006768',
        '2WQ' => 'E02006770',
        '2WR' => 'E02006770',
        '2WS' => 'E02006768',
        '2WT' => 'E02006768',
        '2WU' => 'E02006768',
        '2WW' => 'E02006768',
        '2WX' => 'E02006768',
        '2WY' => 'E02006770',
        '2WZ' => 'E02006770',
        '2XA' => 'E02006769',
        '2XB' => 'E02006769',
        '2XD' => 'E02006769',
        '2XE' => 'E02006769',
        '2XF' => 'E02006768',
        '2XG' => 'E02006769',
        '2XH' => 'E02006769',
        '2XJ' => 'E02006769',
        '2XL' => 'E02006769',
        '2XN' => 'E02006769',
        '2XQ' => 'E02006769',
        '2XR' => 'E02006769',
        '2XS' => 'E02006769',
        '2XT' => 'E02006770',
        '2XU' => 'E02006770',
        '2XW' => 'E02006769',
        '2XX' => 'E02006770',
        '2XY' => 'E02006770',
        '2XZ' => 'E02006770',
        '2YA' => 'E02006770',
        '2YB' => 'E02006770',
        '2YD' => 'E02006770',
        '2YE' => 'E02006770',
        '2YF' => 'E02006770',
        '2YG' => 'E02006770',
        '2YH' => 'E02006770',
        '2YJ' => 'E02006769',
        '2YL' => 'E02006769',
        '2YN' => 'E02006769',
        '2YP' => 'E02006769',
        '2YQ' => 'E02006770',
        '2YR' => 'E02006769',
        '2YS' => 'E02006769',
        '2YT' => 'E02006769',
        '2YU' => 'E02006769',
        '2YW' => 'E02006769',
        '2YX' => 'E02006767',
        '2YY' => 'E02006767',
        '2YZ' => 'E02006769',
        '2ZA' => 'E02006770',
        '2ZB' => 'E02006768',
        '2ZD' => 'E02006768',
        '2ZE' => 'E02006770',
        '2ZF' => 'E02006768',
        '2ZG' => 'E02006770',
        '2ZH' => 'E02006770',
        '2ZJ' => 'E02006770',
        '2ZL' => 'E02006770',
        '2ZN' => 'E02006768',
        '2ZQ' => 'E02006768',
        '2ZR' => 'E02006768',
        '2ZS' => 'E02006770',
        '2ZT' => 'E02006770',
        '2ZU' => 'E02006768',
        '2ZX' => 'E02006770',
        '2ZY' => 'E02006768',
        '2ZZ' => 'E02006770',
        '3AA' => 'E02006769',
        '3AB' => 'E02006769',
        '3AD' => 'E02006773',
        '3AE' => 'E02006769',
        '3AF' => 'E02006769',
        '3AG' => 'E02006773',
        '3AH' => 'E02006773',
        '3AJ' => 'E02006773',
        '3AL' => 'E02006773',
        '3AN' => 'E02006773',
        '3AP' => 'E02006773',
        '3AQ' => 'E02006773',
        '3AR' => 'E02006773',
        '3AS' => 'E02006773',
        '3AT' => 'E02006773',
        '3AU' => 'E02006773',
        '3AW' => 'E02006773',
        '3AX' => 'E02006773',
        '3AY' => 'E02006773',
        '3AZ' => 'E02006773',
        '3BA' => 'E02006773',
        '3BB' => 'E02006773',
        '3BD' => 'E02006773',
        '3BE' => 'E02006773',
        '3BF' => 'E02006769',
        '3BG' => 'E02006773',
        '3BH' => 'E02006773',
        '3BJ' => 'E02006773',
        '3BL' => 'E02006773',
        '3BN' => 'E02006773',
        '3BP' => 'E02006773',
        '3BQ' => 'E02006773',
        '3BS' => 'E02006773',
        '3BT' => 'E02006773',
        '3BU' => 'E02006773',
        '3BW' => 'E02006773',
        '3BX' => 'E02006773',
        '3BY' => 'E02006767',
        '3BZ' => 'E02006773',
        '3DA' => 'E02006773',
        '3DB' => 'E02006773',
        '3DD' => 'E02006773',
        '3DE' => 'E02006767',
        '3DF' => 'E02006768',
        '3DG' => 'E02006773',
        '3DH' => 'E02006773',
        '3DJ' => 'E02006773',
        '3DL' => 'E02006773',
        '3DN' => 'E02006773',
        '3DP' => 'E02006773',
        '3DQ' => 'E02006773',
        '3DR' => 'E02006773',
        '3DS' => 'E02006773',
        '3DT' => 'E02006773',
        '3DU' => 'E02006773',
        '3DW' => 'E02006773',
        '3DX' => 'E02006773',
        '3DY' => 'E02006773',
        '3DZ' => 'E02006767',
        '3EA' => 'E02006773',
        '3EB' => 'E02006773',
        '3ED' => 'E02006773',
        '3EE' => 'E02006773',
        '3EF' => 'E02006773',
        '3EG' => 'E02006773',
        '3EH' => 'E02006773',
        '3EJ' => 'E02006773',
        '3EL' => 'E02006773',
        '3EN' => 'E02006773',
        '3EP' => 'E02006773',
        '3EQ' => 'E02006773',
        '3ER' => 'E02006773',
        '3ES' => 'E02006773',
        '3ET' => 'E02006773',
        '3EU' => 'E02006773',
        '3EW' => 'E02006773',
        '3EX' => 'E02006773',
        '3EY' => 'E02006773',
        '3EZ' => 'E02006773',
        '3GA' => 'E02006767',
        '3HA' => 'E02006773',
        '3HB' => 'E02006773',
        '3HD' => 'E02006773',
        '3HF' => 'E02006773',
        '3HG' => 'E02006773',
        '3HH' => 'E02006773',
        '3HJ' => 'E02006773',
        '3HL' => 'E02006773',
        '3HN' => 'E02006773',
        '3HP' => 'E02006773',
        '3HR' => 'E02006773',
        '3HS' => 'E02006773',
        '3HT' => 'E02006773',
        '3HU' => 'E02006773',
        '3HW' => 'E02006773',
        '3JA' => 'E02006767',
        '3JB' => 'E02006767',
        '3JD' => 'E02006767',
        '3JE' => 'E02006767',
        '3JF' => 'E02006767',
        '3JG' => 'E02006767',
        '3JH' => 'E02006767',
        '3JJ' => 'E02006767',
        '3JL' => 'E02006767',
        '3JN' => 'E02006767',
        '3JP' => 'E02006767',
        '3JQ' => 'E02006767',
        '3JR' => 'E02006767',
        '3JS' => 'E02006767',
        '3JT' => 'E02006767',
        '3JU' => 'E02006767',
        '3JW' => 'E02006767',
        '3JX' => 'E02006767',
        '3JY' => 'E02006767',
        '3JZ' => 'E02006767',
        '3LA' => 'E02006767',
        '3LB' => 'E02006767',
        '3LD' => 'E02006767',
        '3LE' => 'E02006767',
        '3LF' => 'E02006767',
        '3LG' => 'E02006767',
        '3LH' => 'E02006767',
        '3LJ' => 'E02006767',
        '3LL' => 'E02006767',
        '3LN' => 'E02006767',
        '3LP' => 'E02006696',
        '3LQ' => 'E02006767',
        '3LR' => 'E02006696',
        '3LS' => 'E02006767',
        '3LT' => 'E02006767',
        '3LU' => 'E02006767',
        '3LX' => 'E02006767',
        '3LY' => 'E02006767',
        '3LZ' => 'E02006767',
        '3NA' => 'E02006767',
        '3NB' => 'E02006767',
        '3ND' => 'E02006767',
        '3NE' => 'E02006767',
        '3NF' => 'E02006767',
        '3NG' => 'E02006767',
        '3NH' => 'E02006767',
        '3NJ' => 'E02006767',
        '3NL' => 'E02006767',
        '3NN' => 'E02006767',
        '3NP' => 'E02006767',
        '3NQ' => 'E02006767',
        '3NR' => 'E02006767',
        '3NS' => 'E02006767',
        '3NT' => 'E02006767',
        '3NU' => 'E02006767',
        '3NX' => 'E02006767',
        '3NY' => 'E02006767',
        '3NZ' => 'E02006767',
        '3PA' => 'E02006187',
        '3PB' => 'E02006187',
        '3PD' => 'E02006187',
        '3PE' => 'E02006767',
        '3PG' => 'E02006769',
        '3PH' => 'E02006767',
        '3PJ' => 'E02006769',
        '3PL' => 'E02006767',
        '3PN' => 'E02006767',
        '3PP' => 'E02006767',
        '3PQ' => 'E02006769',
        '3PR' => 'E02006767',
        '3PS' => 'E02006767',
        '3PT' => 'E02006767',
        '3PU' => 'E02006767',
        '3PX' => 'E02006767',
        '3PY' => 'E02006767',
        '3PZ' => 'E02006767',
        '3QA' => 'E02006767',
        '3QB' => 'E02006767',
        '3QD' => 'E02006767',
        '3QE' => 'E02006767',
        '3QJ' => 'E02006769',
        '3QN' => 'E02006773',
        '3QP' => 'E02006773',
        '3QR' => 'E02006773',
        '3QS' => 'E02006773',
        '3QT' => 'E02006773',
        '3QU' => 'E02006773',
        '3QW' => 'E02006773',
        '3QX' => 'E02006773',
        '3QY' => 'E02006773',
        '3QZ' => 'E02006773',
        '3RA' => 'E02006767',
        '3RB' => 'E02006767',
        '3RD' => 'E02006767',
        '3RE' => 'E02006767',
        '3RG' => 'E02006767',
        '3RH' => 'E02006767',
        '3RJ' => 'E02006767',
        '3RL' => 'E02006767',
        '3RN' => 'E02006767',
        '3RP' => 'E02006767',
        '3RQ' => 'E02006770',
        '3RR' => 'E02006767',
        '3RS' => 'E02006767',
        '3RT' => 'E02006767',
        '3RU' => 'E02006767',
        '3RW' => 'E02006767',
        '3RX' => 'E02006767',
        '3RY' => 'E02006767',
        '3RZ' => 'E02006767',
        '3SA' => 'E02006767',
        '3SB' => 'E02006767',
        '3SD' => 'E02006767',
        '3SH' => 'E02006767',
        '3SJ' => 'E02006767',
        '3SL' => 'E02006769',
        '3SW' => 'E02006768',
        '3SX' => 'E02006768',
        '3SY' => 'E02006768',
        '3SZ' => 'E02006768',
        '3TA' => 'E02006767',
        '3TB' => 'E02006767',
        '3TD' => 'E02006767',
        '3TE' => 'E02006767',
        '3TF' => 'E02006767',
        '3TG' => 'E02006767',
        '3TH' => 'E02006767',
        '3TJ' => 'E02006767',
        '3TL' => 'E02006767',
        '3TN' => 'E02006767',
        '3TP' => 'E02006767',
        '3TQ' => 'E02006767',
        '3TR' => 'E02006767',
        '3TS' => 'E02006767',
        '3TT' => 'E02006767',
        '3TU' => 'E02006767',
        '3TW' => 'E02006767',
        '3TX' => 'E02006767',
        '3TY' => 'E02006767',
        '3TZ' => 'E02006768',
        '3UA' => 'E02006767',
        '3UB' => 'E02006767',
        '3UD' => 'E02006767',
        '3UE' => 'E02006767',
        '3UF' => 'E02006767',
        '3UG' => 'E02006767',
        '3UH' => 'E02006767',
        '3UJ' => 'E02006767',
        '3UL' => 'E02006767',
        '3UN' => 'E02006767',
        '3UP' => 'E02006767',
        '3UQ' => 'E02006767',
        '3UR' => 'E02006767',
        '3US' => 'E02006767',
        '3UT' => 'E02006768',
        '3UU' => 'E02006770',
        '3UW' => 'E02006767',
        '3UX' => 'E02006769',
        '3UY' => 'E02006769',
        '3UZ' => 'E02006768',
        '3WA' => 'E02006770',
        '3WB' => 'E02006768',
        '3WD' => 'E02006768',
        '3WE' => 'E02006768',
        '3WF' => 'E02006770',
        '3WG' => 'E02006768',
        '3WH' => 'E02006768',
        '3WJ' => 'E02006768',
        '3WL' => 'E02006770',
        '3WN' => 'E02006768',
        '3WP' => 'E02006770',
        '3WQ' => 'E02006768',
        '3WR' => 'E02006768',
        '3WS' => 'E02006770',
        '3WT' => 'E02006768',
        '3WU' => 'E02006770',
        '3WW' => 'E02006768',
        '3WX' => 'E02006770',
        '3WZ' => 'E02006768',
        '3XA' => 'E02006773',
        '3XB' => 'E02006773',
        '3XD' => 'E02006773',
        '3XE' => 'E02006773',
        '3XF' => 'E02006773',
        '3XG' => 'E02006773',
        '3XH' => 'E02006773',
        '3XJ' => 'E02006773',
        '3XL' => 'E02006773',
        '3XN' => 'E02006773',
        '3XP' => 'E02006773',
        '3XQ' => 'E02006773',
        '3XR' => 'E02006773',
        '3XS' => 'E02006773',
        '3XT' => 'E02006773',
        '3XU' => 'E02006773',
        '3XW' => 'E02006773',
        '3XX' => 'E02006773',
        '3XY' => 'E02006773',
        '3XZ' => 'E02006773',
        '3YA' => 'E02006773',
        '3YB' => 'E02006773',
        '3YD' => 'E02006773',
        '3YE' => 'E02006773',
        '3YF' => 'E02006773',
        '3YG' => 'E02006773',
        '3YH' => 'E02006773',
        '3YJ' => 'E02006773',
        '3YL' => 'E02006773',
        '3YN' => 'E02006773',
        '3YP' => 'E02006773',
        '3YQ' => 'E02006773',
        '3YR' => 'E02006773',
        '3YS' => 'E02006773',
        '3YT' => 'E02006773',
        '3YU' => 'E02006773',
        '3YW' => 'E02006773',
        '3YX' => 'E02006773',
        '3YY' => 'E02006773',
        '3YZ' => 'E02006773',
        '3ZA' => 'E02006770',
        '3ZB' => 'E02006770',
        '3ZD' => 'E02006769',
        '3ZE' => 'E02006770',
        '3ZF' => 'E02006770',
        '3ZG' => 'E02006770',
        '3ZH' => 'E02006770',
        '3ZJ' => 'E02006768',
        '3ZL' => 'E02006769',
        '3ZN' => 'E02006768',
        '3ZQ' => 'E02006768',
        '3ZR' => 'E02006770',
        '3ZS' => 'E02006770',
        '3ZT' => 'E02006770',
        '3ZU' => 'E02006768',
        '3ZX' => 'E02006770',
        '3ZY' => 'E02006770',
        '3ZZ' => 'E02006768',
        '4AA' => 'E02006773',
        '4AB' => 'E02006773',
        '4AD' => 'E02006768',
        '4AE' => 'E02006773',
        '4AF' => 'E02006773',
        '4AG' => 'E02006773',
        '4AH' => 'E02006776',
        '4AJ' => 'E02006767',
        '4AL' => 'E02006773',
        '4AN' => 'E02006767',
        '4AP' => 'E02006767',
        '4AQ' => 'E02006773',
        '4AR' => 'E02006767',
        '4AS' => 'E02006767',
        '4AT' => 'E02006767',
        '4AU' => 'E02006767',
        '4AW' => 'E02006767',
        '4AX' => 'E02006767',
        '4AY' => 'E02006767',
        '4AZ' => 'E02006767',
        '4BA' => 'E02006767',
        '4BB' => 'E02006767',
        '4BD' => 'E02006767',
        '4BE' => 'E02006767',
        '4BF' => 'E02006767',
        '4BG' => 'E02006767',
        '4BH' => 'E02006767',
        '4BJ' => 'E02006767',
        '4BL' => 'E02006767',
        '4BN' => 'E02006773',
        '4BP' => 'E02006767',
        '4BQ' => 'E02006767',
        '4BS' => 'E02006767',
        '4BT' => 'E02006767',
        '4BU' => 'E02006767',
        '4BW' => 'E02006773',
        '4BX' => 'E02006767',
        '4BY' => 'E02006767',
        '4BZ' => 'E02006767',
        '4DA' => 'E02006767',
        '4DB' => 'E02006767',
        '4DD' => 'E02006767',
        '4DE' => 'E02006767',
        '4DF' => 'E02006767',
        '4DG' => 'E02006776',
        '4DH' => 'E02006767',
        '4DJ' => 'E02006767',
        '4DL' => 'E02006767',
        '4DN' => 'E02006767',
        '4DP' => 'E02006767',
        '4DQ' => 'E02006776',
        '4DR' => 'E02006767',
        '4DS' => 'E02006767',
        '4DT' => 'E02006767',
        '4DU' => 'E02006767',
        '4DW' => 'E02006767',
        '4DX' => 'E02006767',
        '4DY' => 'E02006767',
        '4DZ' => 'E02006776',
        '4EA' => 'E02006767',
        '4EB' => 'E02006767',
        '4ED' => 'E02006767',
        '4EE' => 'E02006776',
        '4EF' => 'E02006776',
        '4EG' => 'E02006776',
        '4EH' => 'E02006748',
        '4EJ' => 'E02006748',
        '4EL' => 'E02006748',
        '4EN' => 'E02006776',
        '4EP' => 'E02006748',
        '4EQ' => 'E02006776',
        '4ER' => 'E02006748',
        '4ES' => 'E02006767',
        '4ET' => 'E02006776',
        '4EU' => 'E02006748',
        '4EW' => 'E02006748',
        '4EX' => 'E02006776',
        '4EY' => 'E02006776',
        '4EZ' => 'E02006748',
        '4FB' => 'E02006767',
        '4GU' => 'E02006768',
        '4GX' => 'E02006770',
        '4GY' => 'E02006776',
        '4GZ' => 'E02006776',
        '4HA' => 'E02006748',
        '4HB' => 'E02006748',
        '4HD' => 'E02006748',
        '4HE' => 'E02006748',
        '4HF' => 'E02006776',
        '4HG' => 'E02006776',
        '4HH' => 'E02006776',
        '4HJ' => 'E02006776',
        '4HL' => 'E02006776',
        '4HN' => 'E02006776',
        '4HP' => 'E02006748',
        '4HQ' => 'E02006776',
        '4HR' => 'E02006767',
        '4HS' => 'E02006767',
        '4HT' => 'E02006748',
        '4HU' => 'E02006748',
        '4HW' => 'E02006776',
        '4HX' => 'E02006748',
        '4HY' => 'E02006748',
        '4HZ' => 'E02006776',
        '4JA' => 'E02006748',
        '4JB' => 'E02006748',
        '4JD' => 'E02006748',
        '4JE' => 'E02006748',
        '4JF' => 'E02006776',
        '4JG' => 'E02006776',
        '4JH' => 'E02006748',
        '4JJ' => 'E02006776',
        '4JL' => 'E02006776',
        '4JN' => 'E02006776',
        '4JP' => 'E02006776',
        '4JQ' => 'E02006776',
        '4JR' => 'E02006776',
        '4JS' => 'E02006776',
        '4JT' => 'E02006776',
        '4JU' => 'E02006776',
        '4JW' => 'E02006776',
        '4JX' => 'E02006776',
        '4JY' => 'E02006776',
        '4JZ' => 'E02006776',
        '4LA' => 'E02006767',
        '4LB' => 'E02006767',
        '4LD' => 'E02006767',
        '4LE' => 'E02006767',
        '4LF' => 'E02006767',
        '4LG' => 'E02006767',
        '4LH' => 'E02006767',
        '4LJ' => 'E02006767',
        '4LL' => 'E02006767',
        '4LN' => 'E02006767',
        '4LP' => 'E02006767',
        '4LQ' => 'E02006767',
        '4LR' => 'E02006767',
        '4LS' => 'E02006767',
        '4LT' => 'E02006767',
        '4LU' => 'E02006767',
        '4LW' => 'E02006767',
        '4LX' => 'E02006767',
        '4LY' => 'E02006767',
        '4LZ' => 'E02006767',
        '4NA' => 'E02006767',
        '4NB' => 'E02006767',
        '4ND' => 'E02006767',
        '4NE' => 'E02006767',
        '4NF' => 'E02006767',
        '4NG' => 'E02006767',
        '4NH' => 'E02006767',
        '4NJ' => 'E02006767',
        '4NL' => 'E02006767',
        '4NN' => 'E02006767',
        '4NP' => 'E02006767',
        '4NQ' => 'E02006767',
        '4NR' => 'E02006767',
        '4NS' => 'E02006767',
        '4NT' => 'E02006767',
        '4NU' => 'E02006767',
        '4NW' => 'E02006767',
        '4NX' => 'E02006767',
        '4NY' => 'E02006767',
        '4NZ' => 'E02006767',
        '4PA' => 'E02006767',
        '4PB' => 'E02006767',
        '4PD' => 'E02006767',
        '4PE' => 'E02006767',
        '4PF' => 'E02006767',
        '4PG' => 'E02006767',
        '4PH' => 'E02006767',
        '4PJ' => 'E02006767',
        '4PL' => 'E02006767',
        '4PN' => 'E02006767',
        '4PP' => 'E02006767',
        '4PR' => 'E02006767',
        '4PS' => 'E02006767',
        '4PT' => 'E02006767',
        '4PU' => 'E02006767',
        '4PW' => 'E02006767',
        '4PX' => 'E02006767',
        '4PY' => 'E02006767',
        '4PZ' => 'E02006767',
        '4QA' => 'E02006767',
        '4QB' => 'E02006767',
        '4QD' => 'E02006767',
        '4QE' => 'E02006767',
        '4QF' => 'E02006767',
        '4QG' => 'E02006767',
        '4QH' => 'E02006767',
        '4QJ' => 'E02006767',
        '4QL' => 'E02006767',
        '4QN' => 'E02006767',
        '4QP' => 'E02006767',
        '4QQ' => 'E02006767',
        '4QR' => 'E02006767',
        '4QS' => 'E02006767',
        '4QT' => 'E02006767',
        '4QU' => 'E02006767',
        '4QW' => 'E02006767',
        '4QX' => 'E02006767',
        '4QZ' => 'E02006767',
        '4RA' => 'E02006767',
        '4RB' => 'E02006767',
        '4RD' => 'E02006767',
        '4RE' => 'E02006767',
        '4RF' => 'E02006767',
        '4RG' => 'E02006767',
        '4RH' => 'E02006767',
        '4RP' => 'E02006776',
        '4RQ' => 'E02006767',
        '4RR' => 'E02006776',
        '4RS' => 'E02006767',
        '4RT' => 'E02006776',
        '4RU' => 'E02006776',
        '4RW' => 'E02006767',
        '4RX' => 'E02006776',
        '4RY' => 'E02006776',
        '4RZ' => 'E02006776',
        '4SA' => 'E02006767',
        '4SB' => 'E02006767',
        '4SD' => 'E02006767',
        '4SE' => 'E02006767',
        '4SF' => 'E02006767',
        '4SG' => 'E02006767',
        '4SH' => 'E02006767',
        '4SJ' => 'E02006767',
        '4SL' => 'E02006767',
        '4SN' => 'E02006767',
        '4SP' => 'E02006767',
        '4SQ' => 'E02006767',
        '4SS' => 'E02006776',
        '4ST' => 'E02006776',
        '4SX' => 'E02006776',
        '4SY' => 'E02006776',
        '4SZ' => 'E02006776',
        '4TA' => 'E02006776',
        '4TB' => 'E02006776',
        '4TD' => 'E02006776',
        '4TE' => 'E02006776',
        '4TF' => 'E02006776',
        '4TG' => 'E02006776',
        '4TH' => 'E02006776',
        '4TJ' => 'E02006776',
        '4TL' => 'E02006776',
        '4TN' => 'E02006776',
        '4TP' => 'E02006776',
        '4TQ' => 'E02006776',
        '4TR' => 'E02006776',
        '4TS' => 'E02006776',
        '4TT' => 'E02006776',
        '4TU' => 'E02006776',
        '4TW' => 'E02006776',
        '4TY' => 'E02006776',
        '4TZ' => 'E02006776',
        '4UA' => 'E02006776',
        '4UB' => 'E02006776',
        '4UD' => 'E02006776',
        '4UE' => 'E02006776',
        '4UF' => 'E02006776',
        '4UG' => 'E02006776',
        '4UH' => 'E02006776',
        '4UJ' => 'E02006776',
        '4UL' => 'E02006776',
        '4UN' => 'E02006776',
        '4WA' => 'E02006768',
        '4WB' => 'E02006768',
        '4WT' => 'E02006768',
        '4WU' => 'E02006768',
        '4WW' => 'E02006768',
        '4WX' => 'E02006768',
        '4WY' => 'E02006768',
        '4WZ' => 'E02006768',
        '4XA' => 'E02006770',
        '4XD' => 'E02006776',
        '4XE' => 'E02006770',
        '4XG' => 'E02006770',
        '4XH' => 'E02006776',
        '4XJ' => 'E02006770',
        '4XL' => 'E02006770',
        '4XN' => 'E02006776',
        '4XP' => 'E02006770',
        '4XQ' => 'E02006776',
        '4XR' => 'E02006776',
        '4XS' => 'E02006770',
        '4XT' => 'E02006768',
        '4XU' => 'E02006770',
        '4XW' => 'E02006768',
        '4XX' => 'E02006768',
        '4XY' => 'E02006768',
        '4XZ' => 'E02006770',
        '4YA' => 'E02006776',
        '4YB' => 'E02006768',
        '4YD' => 'E02006776',
        '4YE' => 'E02006776',
        '4YF' => 'E02006768',
        '4YG' => 'E02006776',
        '4YJ' => 'E02006776',
        '4YL' => 'E02006776',
        '4YN' => 'E02006776',
        '4YP' => 'E02006768',
        '4YQ' => 'E02006776',
        '4YR' => 'E02006770',
        '4YS' => 'E02006776',
        '4YT' => 'E02006768',
        '4YU' => 'E02006776',
        '4YW' => 'E02006776',
        '4YX' => 'E02006776',
        '4YY' => 'E02006768',
        '4YZ' => 'E02006776',
        '4ZB' => 'E02006770',
        '4ZT' => 'E02006768',
        '4ZZ' => 'E02006768',
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
