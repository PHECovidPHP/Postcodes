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
final class SR3
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02001821',
        '1AB' => 'E02001812',
        '1AD' => 'E02001816',
        '1AE' => 'E02001812',
        '1AF' => 'E02001816',
        '1AG' => 'E02001816',
        '1AH' => 'E02001812',
        '1AJ' => 'E02001812',
        '1AL' => 'E02001812',
        '1AN' => 'E02001812',
        '1AP' => 'E02001812',
        '1AQ' => 'E02001816',
        '1AR' => 'E02001812',
        '1AS' => 'E02001817',
        '1AT' => 'E02001817',
        '1AU' => 'E02001817',
        '1AW' => 'E02001812',
        '1AX' => 'E02001817',
        '1AY' => 'E02001817',
        '1AZ' => 'E02001816',
        '1BA' => 'E02001816',
        '1BB' => 'E02001816',
        '1BD' => 'E02001816',
        '1BE' => 'E02001817',
        '1BF' => 'E02001817',
        '1BG' => 'E02001817',
        '1BH' => 'E02001816',
        '1BJ' => 'E02001816',
        '1BL' => 'E02001816',
        '1BN' => 'E02001816',
        '1BP' => 'E02001817',
        '1BQ' => 'E02001816',
        '1BS' => 'E02001817',
        '1BT' => 'E02001817',
        '1BU' => 'E02001817',
        '1BW' => 'E02001816',
        '1BX' => 'E02001817',
        '1BY' => 'E02001817',
        '1BZ' => 'E02001816',
        '1DA' => 'E02001817',
        '1DB' => 'E02001816',
        '1DD' => 'E02001816',
        '1DE' => 'E02001816',
        '1DF' => 'E02001816',
        '1DG' => 'E02001816',
        '1DH' => 'E02001817',
        '1DJ' => 'E02001816',
        '1DL' => 'E02001812',
        '1DN' => 'E02001812',
        '1DP' => 'E02001817',
        '1DQ' => 'E02001816',
        '1DR' => 'E02001817',
        '1DS' => 'E02001817',
        '1DT' => 'E02001817',
        '1DU' => 'E02001817',
        '1DW' => 'E02001817',
        '1DX' => 'E02001817',
        '1DY' => 'E02001817',
        '1DZ' => 'E02001817',
        '1EA' => 'E02001817',
        '1EB' => 'E02001816',
        '1ED' => 'E02001817',
        '1EE' => 'E02001817',
        '1EF' => 'E02001817',
        '1EG' => 'E02001817',
        '1EJ' => 'E02001817',
        '1EL' => 'E02001817',
        '1EN' => 'E02001817',
        '1EP' => 'E02001817',
        '1ER' => 'E02001817',
        '1ES' => 'E02001817',
        '1ET' => 'E02001817',
        '1EU' => 'E02001817',
        '1EW' => 'E02001817',
        '1EX' => 'E02001817',
        '1EY' => 'E02001817',
        '1EZ' => 'E02001817',
        '1FB' => 'E02001795',
        '1FD' => 'E02001795',
        '1FF' => 'E02001816',
        '1FG' => 'E02001816',
        '1FH' => 'E02001795',
        '1FJ' => 'E02001816',
        '1FL' => 'E02001817',
        '1FN' => 'E02001816',
        '1FP' => 'E02001795',
        '1FQ' => 'E02001795',
        '1FR' => 'E02001795',
        '1FS' => 'E02001795',
        '1FT' => 'E02001816',
        '1FW' => 'E02001816',
        '1HA' => 'E02001817',
        '1HB' => 'E02001817',
        '1HD' => 'E02001817',
        '1HE' => 'E02001817',
        '1HF' => 'E02001817',
        '1HG' => 'E02001817',
        '1HH' => 'E02001817',
        '1HJ' => 'E02001817',
        '1HL' => 'E02001817',
        '1HN' => 'E02001817',
        '1HP' => 'E02001817',
        '1HQ' => 'E02001817',
        '1HR' => 'E02001817',
        '1HS' => 'E02001817',
        '1HT' => 'E02001817',
        '1HU' => 'E02001817',
        '1HW' => 'E02001817',
        '1HX' => 'E02001817',
        '1HY' => 'E02001817',
        '1HZ' => 'E02001817',
        '1JA' => 'E02001817',
        '1JB' => 'E02001817',
        '1JD' => 'E02001817',
        '1JE' => 'E02001819',
        '1JF' => 'E02001819',
        '1JG' => 'E02001819',
        '1JH' => 'E02001817',
        '1JJ' => 'E02001817',
        '1JL' => 'E02001819',
        '1JN' => 'E02001816',
        '1JP' => 'E02001819',
        '1JQ' => 'E02001819',
        '1JR' => 'E02001819',
        '1JS' => 'E02001819',
        '1JT' => 'E02001819',
        '1JU' => 'E02001816',
        '1JW' => 'E02001819',
        '1JX' => 'E02001816',
        '1JY' => 'E02001816',
        '1JZ' => 'E02001817',
        '1LA' => 'E02001816',
        '1LB' => 'E02001817',
        '1LD' => 'E02001816',
        '1LE' => 'E02001816',
        '1LF' => 'E02001816',
        '1LG' => 'E02001816',
        '1LH' => 'E02001812',
        '1LL' => 'E02001812',
        '1LN' => 'E02001812',
        '1LP' => 'E02001812',
        '1LQ' => 'E02001819',
        '1LR' => 'E02001812',
        '1LS' => 'E02001812',
        '1LT' => 'E02001812',
        '1LU' => 'E02001812',
        '1LW' => 'E02001812',
        '1LX' => 'E02001812',
        '1LY' => 'E02001812',
        '1LZ' => 'E02001812',
        '1NA' => 'E02001812',
        '1NB' => 'E02001812',
        '1ND' => 'E02001812',
        '1NE' => 'E02001812',
        '1NF' => 'E02001812',
        '1NG' => 'E02001812',
        '1NH' => 'E02001812',
        '1NJ' => 'E02001812',
        '1NL' => 'E02001812',
        '1NN' => 'E02001812',
        '1NP' => 'E02001816',
        '1NQ' => 'E02001812',
        '1NR' => 'E02001812',
        '1NS' => 'E02001812',
        '1NT' => 'E02001812',
        '1NU' => 'E02001812',
        '1NW' => 'E02001816',
        '1NX' => 'E02001812',
        '1PA' => 'E02001812',
        '1PB' => 'E02001812',
        '1PD' => 'E02001816',
        '1PE' => 'E02001812',
        '1PF' => 'E02001812',
        '1PG' => 'E02001812',
        '1PH' => 'E02001812',
        '1PJ' => 'E02001812',
        '1PL' => 'E02001812',
        '1PN' => 'E02001812',
        '1PP' => 'E02001812',
        '1PQ' => 'E02001812',
        '1PR' => 'E02001812',
        '1PS' => 'E02001812',
        '1PT' => 'E02001812',
        '1PU' => 'E02001812',
        '1PW' => 'E02001812',
        '1PX' => 'E02001812',
        '1PY' => 'E02001812',
        '1PZ' => 'E02001812',
        '1QA' => 'E02001795',
        '1QE' => 'E02001813',
        '1QF' => 'E02001813',
        '1QG' => 'E02001813',
        '1QH' => 'E02001813',
        '1QJ' => 'E02001813',
        '1QL' => 'E02001813',
        '1QN' => 'E02001813',
        '1QP' => 'E02001813',
        '1QQ' => 'E02001813',
        '1QR' => 'E02001813',
        '1QS' => 'E02001813',
        '1QT' => 'E02001813',
        '1QU' => 'E02001813',
        '1QW' => 'E02001813',
        '1QY' => 'E02001813',
        '1QZ' => 'E02001813',
        '1RB' => 'E02001813',
        '1RD' => 'E02001813',
        '1RE' => 'E02001813',
        '1RF' => 'E02001813',
        '1RG' => 'E02001813',
        '1RH' => 'E02001813',
        '1RJ' => 'E02001813',
        '1RL' => 'E02001813',
        '1RN' => 'E02001813',
        '1RP' => 'E02001813',
        '1RQ' => 'E02001813',
        '1RW' => 'E02001813',
        '1RZ' => 'E02001812',
        '1SA' => 'E02001813',
        '1SB' => 'E02001813',
        '1SD' => 'E02001813',
        '1SE' => 'E02001813',
        '1SF' => 'E02001813',
        '1SG' => 'E02001813',
        '1SH' => 'E02001813',
        '1SJ' => 'E02001813',
        '1SL' => 'E02001813',
        '1SN' => 'E02001813',
        '1SP' => 'E02001813',
        '1SQ' => 'E02001813',
        '1SR' => 'E02001813',
        '1SS' => 'E02001813',
        '1ST' => 'E02001813',
        '1SU' => 'E02001813',
        '1SW' => 'E02001813',
        '1SX' => 'E02001813',
        '1SY' => 'E02001813',
        '1SZ' => 'E02001813',
        '1TA' => 'E02001813',
        '1TB' => 'E02001813',
        '1TD' => 'E02001813',
        '1TE' => 'E02001813',
        '1TF' => 'E02001813',
        '1TG' => 'E02001813',
        '1TH' => 'E02001813',
        '1TJ' => 'E02001813',
        '1TL' => 'E02001813',
        '1TN' => 'E02001812',
        '1TQ' => 'E02001813',
        '1TX' => 'E02001812',
        '1TY' => 'E02001812',
        '1TZ' => 'E02001812',
        '1UA' => 'E02001812',
        '1UB' => 'E02001812',
        '1UD' => 'E02001812',
        '1UE' => 'E02001812',
        '1UF' => 'E02001812',
        '1UG' => 'E02001812',
        '1UH' => 'E02001812',
        '1UJ' => 'E02001812',
        '1UL' => 'E02001812',
        '1UN' => 'E02001812',
        '1UP' => 'E02001812',
        '1UQ' => 'E02001812',
        '1UR' => 'E02001812',
        '1UT' => 'E02001812',
        '1UU' => 'E02001812',
        '1UW' => 'E02001812',
        '1UX' => 'E02001812',
        '1UY' => 'E02001812',
        '1WY' => 'E02001795',
        '1WZ' => 'E02001795',
        '1XD' => 'E02001812',
        '1XF' => 'E02001812',
        '1XG' => 'E02001812',
        '1XH' => 'E02001812',
        '1XJ' => 'E02001812',
        '1XL' => 'E02001812',
        '1XN' => 'E02001812',
        '1XP' => 'E02001812',
        '1XQ' => 'E02001812',
        '1XR' => 'E02001812',
        '1XS' => 'E02001812',
        '1XT' => 'E02001812',
        '1XU' => 'E02001812',
        '1XW' => 'E02001812',
        '1XX' => 'E02001801',
        '1XY' => 'E02001795',
        '1XZ' => 'E02001816',
        '1YA' => 'E02001812',
        '1YB' => 'E02001812',
        '1YD' => 'E02001812',
        '1YE' => 'E02001812',
        '1YF' => 'E02001812',
        '1YG' => 'E02001812',
        '1YH' => 'E02001812',
        '1YJ' => 'E02001812',
        '1YL' => 'E02001812',
        '1YN' => 'E02001812',
        '1YP' => 'E02001812',
        '1YQ' => 'E02001812',
        '1YR' => 'E02001812',
        '1YS' => 'E02001812',
        '1YT' => 'E02001812',
        '1YU' => 'E02001812',
        '1YW' => 'E02001812',
        '1YX' => 'E02001812',
        '1YY' => 'E02001812',
        '1YZ' => 'E02001812',
        '1ZZ' => 'E02001795',
        '2AA' => 'E02001817',
        '2AB' => 'E02001821',
        '2AD' => 'E02001817',
        '2AE' => 'E02001817',
        '2AF' => 'E02001817',
        '2AG' => 'E02001817',
        '2AH' => 'E02001817',
        '2AJ' => 'E02001817',
        '2AL' => 'E02001817',
        '2AN' => 'E02001817',
        '2AP' => 'E02001817',
        '2AQ' => 'E02001817',
        '2AR' => 'E02001817',
        '2AS' => 'E02001817',
        '2AT' => 'E02001817',
        '2AU' => 'E02001817',
        '2AW' => 'E02001817',
        '2AX' => 'E02001817',
        '2AY' => 'E02001817',
        '2AZ' => 'E02001817',
        '2BA' => 'E02001817',
        '2BB' => 'E02001817',
        '2BD' => 'E02001817',
        '2BE' => 'E02001817',
        '2BF' => 'E02001817',
        '2BG' => 'E02001817',
        '2BH' => 'E02001817',
        '2BJ' => 'E02001817',
        '2BL' => 'E02001817',
        '2BN' => 'E02001817',
        '2BP' => 'E02001817',
        '2BQ' => 'E02001817',
        '2BS' => 'E02001817',
        '2BT' => 'E02001817',
        '2BU' => 'E02001817',
        '2BW' => 'E02001817',
        '2BX' => 'E02001817',
        '2BY' => 'E02001817',
        '2BZ' => 'E02001821',
        '2DA' => 'E02001821',
        '2DB' => 'E02001821',
        '2DD' => 'E02001821',
        '2DE' => 'E02001817',
        '2DF' => 'E02001817',
        '2DG' => 'E02001817',
        '2DH' => 'E02001817',
        '2DJ' => 'E02001817',
        '2DL' => 'E02001817',
        '2DN' => 'E02001817',
        '2DP' => 'E02001817',
        '2DQ' => 'E02001817',
        '2DR' => 'E02001817',
        '2DS' => 'E02001817',
        '2DT' => 'E02001817',
        '2DU' => 'E02001817',
        '2DW' => 'E02001817',
        '2DX' => 'E02001817',
        '2DY' => 'E02001817',
        '2DZ' => 'E02001817',
        '2EA' => 'E02001817',
        '2EB' => 'E02001817',
        '2ED' => 'E02001817',
        '2EE' => 'E02001817',
        '2EF' => 'E02001817',
        '2EG' => 'E02001817',
        '2EH' => 'E02001817',
        '2EJ' => 'E02001817',
        '2EL' => 'E02001817',
        '2EN' => 'E02001817',
        '2EP' => 'E02001817',
        '2EQ' => 'E02001817',
        '2ER' => 'E02001817',
        '2ES' => 'E02001817',
        '2ET' => 'E02001817',
        '2EU' => 'E02001819',
        '2EW' => 'E02001817',
        '2EX' => 'E02001817',
        '2EY' => 'E02001817',
        '2EZ' => 'E02001817',
        '2FA' => 'E02001817',
        '2FB' => 'E02001817',
        '2FD' => 'E02001817',
        '2FE' => 'E02001817',
        '2FF' => 'E02001817',
        '2FG' => 'E02001817',
        '2FH' => 'E02001817',
        '2FJ' => 'E02001817',
        '2FL' => 'E02001817',
        '2FN' => 'E02001817',
        '2FR' => 'E02001819',
        '2FY' => 'E02001819',
        '2FZ' => 'E02001819',
        '2GB' => 'E02001819',
        '2GD' => 'E02001819',
        '2HA' => 'E02001817',
        '2HB' => 'E02001817',
        '2HD' => 'E02001817',
        '2HE' => 'E02001817',
        '2HF' => 'E02001817',
        '2HG' => 'E02001817',
        '2HH' => 'E02001817',
        '2HJ' => 'E02001817',
        '2HL' => 'E02001817',
        '2HN' => 'E02001817',
        '2HP' => 'E02001817',
        '2HQ' => 'E02001817',
        '2HR' => 'E02001819',
        '2HS' => 'E02001817',
        '2HT' => 'E02001817',
        '2HU' => 'E02001817',
        '2HW' => 'E02001819',
        '2HX' => 'E02001817',
        '2HY' => 'E02001817',
        '2HZ' => 'E02001817',
        '2JA' => 'E02001817',
        '2JB' => 'E02001817',
        '2JD' => 'E02001817',
        '2JE' => 'E02001817',
        '2JF' => 'E02001817',
        '2JG' => 'E02001817',
        '2JH' => 'E02001817',
        '2JJ' => 'E02001817',
        '2JL' => 'E02001817',
        '2JN' => 'E02001817',
        '2JP' => 'E02001817',
        '2JQ' => 'E02001817',
        '2JR' => 'E02001817',
        '2JS' => 'E02001817',
        '2JT' => 'E02001817',
        '2JU' => 'E02001817',
        '2JW' => 'E02001817',
        '2JX' => 'E02001817',
        '2JY' => 'E02001817',
        '2JZ' => 'E02001817',
        '2LA' => 'E02001817',
        '2LB' => 'E02001817',
        '2LD' => 'E02001817',
        '2LE' => 'E02001817',
        '2LF' => 'E02001817',
        '2LG' => 'E02001817',
        '2LH' => 'E02001817',
        '2LJ' => 'E02001817',
        '2LL' => 'E02001817',
        '2LN' => 'E02001817',
        '2LP' => 'E02001817',
        '2LQ' => 'E02001817',
        '2LR' => 'E02001817',
        '2LS' => 'E02001817',
        '2LT' => 'E02001817',
        '2LU' => 'E02001817',
        '2LW' => 'E02001817',
        '2LX' => 'E02001817',
        '2LY' => 'E02001817',
        '2LZ' => 'E02001817',
        '2NA' => 'E02001819',
        '2NB' => 'E02001819',
        '2ND' => 'E02001819',
        '2NE' => 'E02001819',
        '2NF' => 'E02001821',
        '2NH' => 'E02001821',
        '2NJ' => 'E02001821',
        '2NL' => 'E02001821',
        '2NN' => 'E02001821',
        '2NP' => 'E02001817',
        '2NQ' => 'E02001821',
        '2NR' => 'E02001817',
        '2NS' => 'E02001821',
        '2NT' => 'E02001821',
        '2NU' => 'E02001821',
        '2NW' => 'E02001817',
        '2NX' => 'E02001821',
        '2NY' => 'E02001821',
        '2NZ' => 'E02001821',
        '2PA' => 'E02001819',
        '2PB' => 'E02001821',
        '2PD' => 'E02001819',
        '2PE' => 'E02001819',
        '2PF' => 'E02001819',
        '2PG' => 'E02001819',
        '2PH' => 'E02001817',
        '2PJ' => 'E02001817',
        '2PL' => 'E02001817',
        '2PN' => 'E02001821',
        '2PQ' => 'E02001819',
        '2PR' => 'E02001825',
        '2PS' => 'E02001821',
        '2PT' => 'E02001821',
        '2PU' => 'E02001821',
        '2PW' => 'E02001821',
        '2PX' => 'E02001821',
        '2PY' => 'E02001821',
        '2PZ' => 'E02001821',
        '2QA' => 'E02001821',
        '2QB' => 'E02001821',
        '2QD' => 'E02001819',
        '2QE' => 'E02001819',
        '2QF' => 'E02001819',
        '2QG' => 'E02001819',
        '2QH' => 'E02001819',
        '2QJ' => 'E02001819',
        '2QL' => 'E02001819',
        '2QN' => 'E02001819',
        '2QP' => 'E02001819',
        '2QQ' => 'E02001819',
        '2QR' => 'E02001819',
        '2QS' => 'E02001819',
        '2QT' => 'E02001819',
        '2QU' => 'E02001819',
        '2QW' => 'E02001819',
        '2QX' => 'E02001819',
        '2QY' => 'E02001819',
        '2QZ' => 'E02001819',
        '2RA' => 'E02001819',
        '2RB' => 'E02001819',
        '2RD' => 'E02001819',
        '2RE' => 'E02001819',
        '2RF' => 'E02001819',
        '2RG' => 'E02001819',
        '2RH' => 'E02001819',
        '2RJ' => 'E02001819',
        '2RL' => 'E02001819',
        '2RN' => 'E02001819',
        '2RP' => 'E02001819',
        '2RQ' => 'E02001819',
        '2RR' => 'E02001819',
        '2RS' => 'E02001819',
        '2RT' => 'E02001821',
        '2RU' => 'E02001821',
        '2RW' => 'E02001819',
        '2RX' => 'E02001821',
        '2RY' => 'E02001821',
        '2RZ' => 'E02001821',
        '2SA' => 'E02001821',
        '2SB' => 'E02001821',
        '2SD' => 'E02001821',
        '2SE' => 'E02001821',
        '2SF' => 'E02001821',
        '2SG' => 'E02001821',
        '2SH' => 'E02001821',
        '2SJ' => 'E02001821',
        '2SL' => 'E02001821',
        '2SP' => 'E02001819',
        '2SQ' => 'E02001821',
        '2SR' => 'E02001819',
        '2SS' => 'E02001819',
        '2ST' => 'E02001819',
        '2SU' => 'E02001819',
        '2SW' => 'E02001819',
        '2SX' => 'E02001819',
        '2SY' => 'E02001819',
        '2SZ' => 'E02001819',
        '2TA' => 'E02001817',
        '2TB' => 'E02001817',
        '2TD' => 'E02001817',
        '2TE' => 'E02001817',
        '2TF' => 'E02001817',
        '2TG' => 'E02001817',
        '2TH' => 'E02001817',
        '2TJ' => 'E02001819',
        '2TL' => 'E02001819',
        '2TN' => 'E02001819',
        '2TP' => 'E02001821',
        '2TQ' => 'E02001817',
        '2TR' => 'E02001821',
        '2TS' => 'E02001821',
        '2TT' => 'E02001821',
        '2TU' => 'E02001821',
        '2TW' => 'E02001819',
        '2TX' => 'E02001821',
        '2TY' => 'E02001821',
        '2UA' => 'E02001821',
        '2UB' => 'E02001821',
        '2UD' => 'E02001821',
        '2UE' => 'E02001821',
        '2UF' => 'E02001821',
        '2UG' => 'E02001821',
        '2UH' => 'E02001821',
        '2UJ' => 'E02001821',
        '2UL' => 'E02001821',
        '2UN' => 'E02001821',
        '2UP' => 'E02001821',
        '2UQ' => 'E02001821',
        '2UR' => 'E02001821',
        '2UT' => 'E02001821',
        '2UU' => 'E02001821',
        '2UW' => 'E02001821',
        '2UX' => 'E02001821',
        '2UY' => 'E02001821',
        '2UZ' => 'E02001821',
        '2WD' => 'E02001817',
        '2WF' => 'E02001817',
        '2WG' => 'E02001817',
        '2WH' => 'E02001817',
        '2WJ' => 'E02001817',
        '2WL' => 'E02001817',
        '2WN' => 'E02001817',
        '2WT' => 'E02001795',
        '2WU' => 'E02001821',
        '2WW' => 'E02001821',
        '2WX' => 'E02001821',
        '2WY' => 'E02001795',
        '2WZ' => 'E02001821',
        '2XA' => 'E02001821',
        '2XB' => 'E02001821',
        '2XD' => 'E02001821',
        '2XE' => 'E02001821',
        '2XF' => 'E02001821',
        '2XG' => 'E02001821',
        '2XH' => 'E02001821',
        '2XJ' => 'E02001821',
        '2XL' => 'E02001821',
        '2XQ' => 'E02001821',
        '2XS' => 'E02001795',
        '2XT' => 'E02001821',
        '2XU' => 'E02001821',
        '2XW' => 'E02001795',
        '2XX' => 'E02001821',
        '2XY' => 'E02001821',
        '2XZ' => 'E02001821',
        '2YA' => 'E02001821',
        '2YB' => 'E02001821',
        '2YD' => 'E02001821',
        '2YE' => 'E02001821',
        '2YF' => 'E02001821',
        '2YG' => 'E02001821',
        '2YH' => 'E02001821',
        '2YJ' => 'E02001817',
        '2YL' => 'E02001817',
        '2YN' => 'E02001817',
        '2YP' => 'E02001817',
        '2YQ' => 'E02001795',
        '2YR' => 'E02001817',
        '2YS' => 'E02001817',
        '2YT' => 'E02001817',
        '2YU' => 'E02001817',
        '2YW' => 'E02001817',
        '2YX' => 'E02001821',
        '2YY' => 'E02001821',
        '2YZ' => 'E02001821',
        '2ZA' => 'E02001821',
        '2ZB' => 'E02001795',
        '3AA' => 'E02001816',
        '3AB' => 'E02001816',
        '3AD' => 'E02001816',
        '3AE' => 'E02001816',
        '3AF' => 'E02001816',
        '3AG' => 'E02001816',
        '3AH' => 'E02001816',
        '3AJ' => 'E02001816',
        '3AL' => 'E02001816',
        '3AN' => 'E02001816',
        '3AP' => 'E02001816',
        '3AQ' => 'E02001816',
        '3AR' => 'E02001816',
        '3AS' => 'E02001816',
        '3AT' => 'E02001816',
        '3AU' => 'E02001816',
        '3AW' => 'E02001816',
        '3AX' => 'E02001816',
        '3AY' => 'E02001816',
        '3AZ' => 'E02001816',
        '3BA' => 'E02001816',
        '3BB' => 'E02001816',
        '3BD' => 'E02001816',
        '3BE' => 'E02001819',
        '3BF' => 'E02001819',
        '3BG' => 'E02001816',
        '3BN' => 'E02001816',
        '3BP' => 'E02001816',
        '3BS' => 'E02001816',
        '3BT' => 'E02001816',
        '3BU' => 'E02001816',
        '3BW' => 'E02001816',
        '3BX' => 'E02001816',
        '3BY' => 'E02001816',
        '3BZ' => 'E02001816',
        '3DA' => 'E02001816',
        '3DB' => 'E02001816',
        '3DD' => 'E02001816',
        '3DE' => 'E02001816',
        '3DF' => 'E02001816',
        '3DG' => 'E02001816',
        '3DH' => 'E02001816',
        '3DJ' => 'E02001816',
        '3DL' => 'E02001816',
        '3DN' => 'E02001816',
        '3DP' => 'E02001816',
        '3DQ' => 'E02001816',
        '3DR' => 'E02001816',
        '3DS' => 'E02001816',
        '3DT' => 'E02001816',
        '3DW' => 'E02001816',
        '3DX' => 'E02001816',
        '3DY' => 'E02001816',
        '3DZ' => 'E02001816',
        '3EA' => 'E02001816',
        '3EB' => 'E02001816',
        '3ED' => 'E02001816',
        '3EE' => 'E02001816',
        '3EF' => 'E02001816',
        '3EG' => 'E02001816',
        '3EH' => 'E02001816',
        '3EJ' => 'E02001816',
        '3EL' => 'E02001816',
        '3EN' => 'E02001816',
        '3EP' => 'E02001816',
        '3EQ' => 'E02001816',
        '3ER' => 'E02001816',
        '3ES' => 'E02001816',
        '3ET' => 'E02001819',
        '3EU' => 'E02001816',
        '3EW' => 'E02001816',
        '3EX' => 'E02001816',
        '3EY' => 'E02001816',
        '3EZ' => 'E02001816',
        '3HA' => 'E02001816',
        '3HB' => 'E02001816',
        '3HD' => 'E02001816',
        '3HE' => 'E02001816',
        '3HF' => 'E02001816',
        '3HG' => 'E02001816',
        '3HH' => 'E02001816',
        '3HJ' => 'E02001816',
        '3HL' => 'E02001816',
        '3HN' => 'E02001816',
        '3HP' => 'E02001816',
        '3HQ' => 'E02001816',
        '3HR' => 'E02001816',
        '3HS' => 'E02001816',
        '3HT' => 'E02001816',
        '3HU' => 'E02001816',
        '3HX' => 'E02001816',
        '3HY' => 'E02001816',
        '3HZ' => 'E02001816',
        '3JA' => 'E02001819',
        '3JB' => 'E02001816',
        '3JD' => 'E02001819',
        '3JE' => 'E02001819',
        '3JF' => 'E02001816',
        '3JG' => 'E02001816',
        '3JH' => 'E02001819',
        '3JJ' => 'E02001819',
        '3JL' => 'E02001819',
        '3JN' => 'E02001816',
        '3JP' => 'E02001816',
        '3JQ' => 'E02001816',
        '3JR' => 'E02001816',
        '3JS' => 'E02001816',
        '3JT' => 'E02001816',
        '3JU' => 'E02001816',
        '3JW' => 'E02001816',
        '3JX' => 'E02001816',
        '3JY' => 'E02001816',
        '3JZ' => 'E02001816',
        '3LA' => 'E02001816',
        '3LB' => 'E02001816',
        '3LD' => 'E02001816',
        '3LE' => 'E02001816',
        '3LF' => 'E02001816',
        '3LG' => 'E02001816',
        '3LQ' => 'E02001816',
        '3LS' => 'E02001819',
        '3LT' => 'E02001819',
        '3LU' => 'E02001816',
        '3LX' => 'E02001816',
        '3LZ' => 'E02001816',
        '3NA' => 'E02001816',
        '3NB' => 'E02001816',
        '3ND' => 'E02001816',
        '3NE' => 'E02001816',
        '3NF' => 'E02001816',
        '3NG' => 'E02001813',
        '3NH' => 'E02001819',
        '3NJ' => 'E02001819',
        '3NL' => 'E02001819',
        '3NN' => 'E02001819',
        '3NP' => 'E02001819',
        '3NQ' => 'E02001819',
        '3NR' => 'E02001819',
        '3NS' => 'E02001819',
        '3NW' => 'E02001819',
        '3PE' => 'E02001819',
        '3PF' => 'E02001816',
        '3PG' => 'E02001819',
        '3PH' => 'E02001819',
        '3PJ' => 'E02001819',
        '3PL' => 'E02001819',
        '3PN' => 'E02001819',
        '3PP' => 'E02001819',
        '3PQ' => 'E02001819',
        '3PR' => 'E02001819',
        '3PS' => 'E02001819',
        '3PT' => 'E02001819',
        '3PU' => 'E02001819',
        '3PW' => 'E02001819',
        '3PX' => 'E02001819',
        '3PY' => 'E02001819',
        '3PZ' => 'E02001819',
        '3QA' => 'E02001819',
        '3QB' => 'E02001819',
        '3QD' => 'E02001819',
        '3QE' => 'E02001819',
        '3QF' => 'E02001819',
        '3QG' => 'E02001819',
        '3QH' => 'E02001819',
        '3QJ' => 'E02001819',
        '3QL' => 'E02001819',
        '3QN' => 'E02001819',
        '3QP' => 'E02001819',
        '3QQ' => 'E02001819',
        '3QW' => 'E02001819',
        '3RA' => 'E02001819',
        '3RB' => 'E02001819',
        '3RD' => 'E02001819',
        '3RE' => 'E02001819',
        '3RF' => 'E02001819',
        '3RG' => 'E02001819',
        '3RH' => 'E02001819',
        '3RJ' => 'E02001819',
        '3RL' => 'E02001819',
        '3RQ' => 'E02001819',
        '3RR' => 'E02001819',
        '3RS' => 'E02001819',
        '3RT' => 'E02001819',
        '3RU' => 'E02001819',
        '3RX' => 'E02001819',
        '3RY' => 'E02001819',
        '3RZ' => 'E02001819',
        '3SA' => 'E02001819',
        '3SB' => 'E02001819',
        '3SD' => 'E02001819',
        '3SE' => 'E02001819',
        '3SF' => 'E02001819',
        '3SG' => 'E02001819',
        '3SH' => 'E02001819',
        '3SJ' => 'E02001819',
        '3SL' => 'E02001819',
        '3SN' => 'E02001819',
        '3SQ' => 'E02001819',
        '3SW' => 'E02001819',
        '3SY' => 'E02001819',
        '3SZ' => 'E02001819',
        '3TA' => 'E02001819',
        '3TB' => 'E02001819',
        '3TD' => 'E02001819',
        '3TE' => 'E02001819',
        '3TF' => 'E02001819',
        '3TG' => 'E02001819',
        '3TH' => 'E02001819',
        '3TL' => 'E02001819',
        '3TN' => 'E02001819',
        '3TP' => 'E02001819',
        '3TQ' => 'E02001819',
        '3TR' => 'E02001819',
        '3TS' => 'E02001819',
        '3TW' => 'E02001819',
        '3US' => 'E02001795',
        '3UY' => 'E02001819',
        '3UZ' => 'E02001819',
        '3WJ' => 'E02001795',
        '3WL' => 'E02001795',
        '3WN' => 'E02001819',
        '3WP' => 'E02001819',
        '3WQ' => 'E02001795',
        '3WR' => 'E02001795',
        '3WS' => 'E02001795',
        '3WT' => 'E02001795',
        '3WU' => 'E02001795',
        '3WW' => 'E02001795',
        '3WX' => 'E02001795',
        '3WY' => 'E02001795',
        '3WZ' => 'E02001795',
        '3XA' => 'E02001819',
        '3XB' => 'E02001795',
        '3XD' => 'E02001819',
        '3XE' => 'E02001819',
        '3XF' => 'E02001819',
        '3XG' => 'E02001819',
        '3XH' => 'E02001795',
        '3XJ' => 'E02001819',
        '3XL' => 'E02001819',
        '3XN' => 'E02001819',
        '3XP' => 'E02001819',
        '3XQ' => 'E02001795',
        '3XR' => 'E02001819',
        '3XS' => 'E02001795',
        '3XT' => 'E02001795',
        '3XU' => 'E02001819',
        '3XW' => 'E02001819',
        '3XX' => 'E02001795',
        '3XY' => 'E02001819',
        '3XZ' => 'E02001795',
        '3YA' => 'E02001816',
        '3YB' => 'E02001816',
        '3YD' => 'E02001816',
        '3YE' => 'E02001816',
        '3YF' => 'E02001795',
        '3YG' => 'E02001819',
        '3YH' => 'E02001816',
        '3YJ' => 'E02001816',
        '3YL' => 'E02001795',
        '3YN' => 'E02001816',
        '3YP' => 'E02001795',
        '3YQ' => 'E02001816',
        '3YR' => 'E02001816',
        '3YS' => 'E02001816',
        '3YT' => 'E02001795',
        '3YU' => 'E02001795',
        '3YW' => 'E02001795',
        '3YX' => 'E02001819',
        '3YY' => 'E02001795',
        '3YZ' => 'E02001795',
        '3ZX' => 'E02001795',
        '3ZZ' => 'E02001795',
        '4AA' => 'E02001812',
        '4AD' => 'E02001808',
        '4AE' => 'E02001808',
        '4AF' => 'E02001808',
        '4AG' => 'E02001808',
        '4AH' => 'E02001808',
        '4AJ' => 'E02001813',
        '4AL' => 'E02001813',
        '4AN' => 'E02001813',
        '4AP' => 'E02001813',
        '4AQ' => 'E02001808',
        '4AR' => 'E02001813',
        '4AS' => 'E02001813',
        '4AT' => 'E02001813',
        '4AU' => 'E02001813',
        '4AW' => 'E02001813',
        '4AX' => 'E02001813',
        '4AY' => 'E02001813',
        '4AZ' => 'E02001813',
        '4BA' => 'E02001813',
        '4BB' => 'E02001813',
        '4BD' => 'E02001813',
        '4BE' => 'E02001813',
        '4BG' => 'E02001813',
        '4BH' => 'E02001813',
        '4BJ' => 'E02001813',
        '4BQ' => 'E02001813',
        '4BX' => 'E02001813',
        '4BY' => 'E02001813',
        '4DE' => 'E02001813',
        '4DF' => 'E02001813',
        '4DG' => 'E02001813',
        '4DH' => 'E02001813',
        '4DJ' => 'E02001813',
        '4DL' => 'E02001813',
        '4DN' => 'E02001813',
        '4DP' => 'E02001813',
        '4DQ' => 'E02001813',
        '4DR' => 'E02001813',
        '4DS' => 'E02001813',
        '4DT' => 'E02001813',
        '4DU' => 'E02001813',
        '4DW' => 'E02001813',
        '4DX' => 'E02001813',
        '4DY' => 'E02001813',
        '4DZ' => 'E02001813',
        '4EA' => 'E02001813',
        '4EB' => 'E02001813',
        '4ED' => 'E02001813',
        '4EE' => 'E02001813',
        '4EF' => 'E02001813',
        '4EG' => 'E02001813',
        '4EH' => 'E02001813',
        '4EJ' => 'E02001813',
        '4EL' => 'E02001813',
        '4EN' => 'E02001813',
        '4EP' => 'E02001813',
        '4EQ' => 'E02001813',
        '4ER' => 'E02001813',
        '4ES' => 'E02001813',
        '4ET' => 'E02001813',
        '4EU' => 'E02001813',
        '4EW' => 'E02001813',
        '4EX' => 'E02001813',
        '4EY' => 'E02001813',
        '4EZ' => 'E02001813',
        '4HA' => 'E02001813',
        '4HB' => 'E02001813',
        '4HD' => 'E02001813',
        '4HE' => 'E02001813',
        '4HF' => 'E02001813',
        '4HG' => 'E02001813',
        '4HP' => 'E02001813',
        '4HQ' => 'E02001795',
        '4HR' => 'E02001813',
        '4HS' => 'E02001813',
        '4HT' => 'E02001813',
        '4HU' => 'E02001813',
        '4HW' => 'E02001813',
        '4HX' => 'E02001813',
        '4HY' => 'E02001813',
        '4HZ' => 'E02001813',
        '4JA' => 'E02001813',
        '4JB' => 'E02001813',
        '4JD' => 'E02001813',
        '4JE' => 'E02001813',
        '4JF' => 'E02001813',
        '4JG' => 'E02001813',
        '4JH' => 'E02001813',
        '4JJ' => 'E02001813',
        '4JL' => 'E02001813',
        '4JN' => 'E02001813',
        '4JP' => 'E02001813',
        '4JQ' => 'E02001813',
        '4JR' => 'E02001813',
        '4JS' => 'E02001813',
        '4JT' => 'E02001813',
        '4JU' => 'E02001813',
        '4JW' => 'E02001813',
        '4JX' => 'E02001813',
        '4JY' => 'E02001813',
        '4JZ' => 'E02001813',
        '4LA' => 'E02001813',
        '4LB' => 'E02001813',
        '4LD' => 'E02001813',
        '4LE' => 'E02001813',
        '4LJ' => 'E02001813',
        '4LL' => 'E02001813',
        '4LN' => 'E02001813',
        '4LP' => 'E02001813',
        '4LR' => 'E02001813',
        '4LS' => 'E02001813',
        '4LT' => 'E02001813',
        '4LU' => 'E02001813',
        '4LW' => 'E02001813',
        '4LX' => 'E02001813',
        '4LY' => 'E02001813',
        '4LZ' => 'E02001813',
        '4NA' => 'E02001813',
        '4NB' => 'E02001813',
        '4ND' => 'E02001813',
        '4NE' => 'E02001813',
        '4NF' => 'E02001813',
        '4NG' => 'E02001813',
        '4NH' => 'E02001813',
        '4NJ' => 'E02001813',
        '4NL' => 'E02001813',
        '4NN' => 'E02001813',
        '4NP' => 'E02001813',
        '4NQ' => 'E02001813',
        '4NR' => 'E02001813',
        '4NS' => 'E02001813',
        '4NT' => 'E02001813',
        '4NU' => 'E02001813',
        '4NW' => 'E02001813',
        '4NX' => 'E02001813',
        '4PA' => 'E02001813',
        '4PB' => 'E02001813',
        '4PD' => 'E02001813',
        '4PE' => 'E02001813',
        '4PF' => 'E02001813',
        '4PG' => 'E02001813',
        '4PH' => 'E02001813',
        '4PJ' => 'E02001813',
        '4PL' => 'E02001813',
        '4PN' => 'E02001813',
        '4PP' => 'E02001813',
        '4PQ' => 'E02001813',
        '4PR' => 'E02001813',
        '4PS' => 'E02001813',
        '4PW' => 'E02001813',
        '4WX' => 'E02001795',
        '4WY' => 'E02001795',
        '4WZ' => 'E02001795',
        '4YR' => 'E02001795',
        '4YS' => 'E02001795',
        '4YT' => 'E02001813',
        '4YU' => 'E02001813',
        '4YW' => 'E02001819',
        '4YX' => 'E02001819',
        '4YY' => 'E02001813',
        '4YZ' => 'E02001819',
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
