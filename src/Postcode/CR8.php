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
final class CR8
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '1AA' => 'E02000230',
        '1AB' => 'E02000230',
        '1AD' => 'E02000230',
        '1AE' => 'E02000230',
        '1AF' => 'E02000230',
        '1AG' => 'E02000230',
        '1AH' => 'E02000230',
        '1AJ' => 'E02000230',
        '1AL' => 'E02000230',
        '1AN' => 'E02000230',
        '1AP' => 'E02000230',
        '1AQ' => 'E02000230',
        '1AR' => 'E02000230',
        '1AS' => 'E02000230',
        '1AT' => 'E02000230',
        '1AU' => 'E02000230',
        '1AW' => 'E02000230',
        '1AX' => 'E02000230',
        '1AY' => 'E02000233',
        '1AZ' => 'E02000233',
        '1BA' => 'E02000230',
        '1BB' => 'E02000230',
        '1BD' => 'E02000233',
        '1BE' => 'E02000230',
        '1BF' => 'E02000230',
        '1BG' => 'E02000233',
        '1BH' => 'E02000233',
        '1BJ' => 'E02000233',
        '1BL' => 'E02000230',
        '1BN' => 'E02000230',
        '1BP' => 'E02000230',
        '1BQ' => 'E02000233',
        '1BR' => 'E02000233',
        '1BS' => 'E02000233',
        '1BT' => 'E02000233',
        '1BU' => 'E02000233',
        '1BW' => 'E02000233',
        '1BX' => 'E02000233',
        '1BY' => 'E02000224',
        '1BZ' => 'E02000235',
        '1DA' => 'E02000230',
        '1DB' => 'E02000230',
        '1DD' => 'E02000230',
        '1DE' => 'E02000233',
        '1DF' => 'E02000233',
        '1DG' => 'E02000224',
        '1DH' => 'E02000230',
        '1DJ' => 'E02000230',
        '1DL' => 'E02000235',
        '1DN' => 'E02000235',
        '1DP' => 'E02000230',
        '1DQ' => 'E02000230',
        '1DR' => 'E02000224',
        '1DS' => 'E02000230',
        '1DT' => 'E02000235',
        '1DU' => 'E02000230',
        '1DW' => 'E02000230',
        '1DX' => 'E02000230',
        '1DY' => 'E02000230',
        '1DZ' => 'E02000230',
        '1EA' => 'E02000235',
        '1EB' => 'E02000235',
        '1ED' => 'E02000235',
        '1EE' => 'E02000235',
        '1EF' => 'E02000235',
        '1EG' => 'E02000235',
        '1EH' => 'E02000235',
        '1EJ' => 'E02000235',
        '1EL' => 'E02000235',
        '1EN' => 'E02000235',
        '1EP' => 'E02000235',
        '1EQ' => 'E02000235',
        '1ER' => 'E02000235',
        '1ES' => 'E02000235',
        '1ET' => 'E02000235',
        '1EU' => 'E02000235',
        '1EW' => 'E02000235',
        '1EX' => 'E02000235',
        '1EY' => 'E02000235',
        '1EZ' => 'E02000235',
        '1HA' => 'E02000224',
        '1HB' => 'E02000230',
        '1HD' => 'E02000230',
        '1HE' => 'E02000230',
        '1HF' => 'E02000230',
        '1HG' => 'E02000230',
        '1HH' => 'E02000230',
        '1HJ' => 'E02000230',
        '1HL' => 'E02000230',
        '1HN' => 'E02000235',
        '1HP' => 'E02000235',
        '1HQ' => 'E02000235',
        '1HR' => 'E02000235',
        '1HU' => 'E02000230',
        '1HW' => 'E02000230',
        '1HX' => 'E02000235',
        '1HY' => 'E02000235',
        '1HZ' => 'E02000235',
        '1JA' => 'E02000230',
        '1JB' => 'E02000230',
        '1JD' => 'E02000230',
        '1JE' => 'E02000230',
        '1JF' => 'E02000230',
        '1JG' => 'E02000230',
        '1JH' => 'E02000230',
        '1JJ' => 'E02000230',
        '1JL' => 'E02000230',
        '1JN' => 'E02000235',
        '1JP' => 'E02000235',
        '1JQ' => 'E02000235',
        '1JR' => 'E02000235',
        '1PR' => 'E02000224',
        '1QA' => 'E02000224',
        '1WA' => 'E02000224',
        '1WB' => 'E02000224',
        '1WD' => 'E02000224',
        '1WE' => 'E02000215',
        '1WF' => 'E02000224',
        '1WJ' => 'E02000224',
        '1WN' => 'E02000224',
        '1WP' => 'E02000224',
        '1WQ' => 'E02000224',
        '1WR' => 'E02000224',
        '1WS' => 'E02000224',
        '1WT' => 'E02000215',
        '1WU' => 'E02000224',
        '1WW' => 'E02000224',
        '1WX' => 'E02000224',
        '1WY' => 'E02000224',
        '1WZ' => 'E02000224',
        '1XA' => 'E02000224',
        '1XB' => 'E02000215',
        '1XD' => 'E02000230',
        '1XE' => 'E02000215',
        '1XF' => 'E02000230',
        '1XG' => 'E02000230',
        '1XH' => 'E02000230',
        '1XJ' => 'E02000230',
        '1XL' => 'E02000235',
        '1XN' => 'E02000230',
        '1XP' => 'E02000230',
        '1XQ' => 'E02000230',
        '1XR' => 'E02000215',
        '1XS' => 'E02000230',
        '1XT' => 'E02000224',
        '1XU' => 'E02000230',
        '1XW' => 'E02000230',
        '1XX' => 'E02000230',
        '1XY' => 'E02000230',
        '1XZ' => 'E02000230',
        '1YA' => 'E02000224',
        '1YB' => 'E02000224',
        '1YY' => 'E02000224',
        '1YZ' => 'E02000224',
        '1ZB' => 'E02000215',
        '1ZP' => 'E02000224',
        '1ZQ' => 'E02000215',
        '1ZR' => 'E02000230',
        '1ZS' => 'E02000224',
        '1ZT' => 'E02000230',
        '1ZU' => 'E02000230',
        '1ZX' => 'E02000215',
        '1ZY' => 'E02000230',
        '2AA' => 'E02000230',
        '2AB' => 'E02000230',
        '2AD' => 'E02000230',
        '2AE' => 'E02000230',
        '2AF' => 'E02000230',
        '2AG' => 'E02000230',
        '2AH' => 'E02000230',
        '2AJ' => 'E02000230',
        '2AL' => 'E02000230',
        '2AN' => 'E02000233',
        '2AP' => 'E02000230',
        '2AQ' => 'E02000224',
        '2AR' => 'E02000230',
        '2AS' => 'E02000230',
        '2AT' => 'E02000230',
        '2AU' => 'E02000230',
        '2AW' => 'E02000230',
        '2AX' => 'E02000230',
        '2AY' => 'E02000230',
        '2AZ' => 'E02000230',
        '2BA' => 'E02000224',
        '2BB' => 'E02000224',
        '2BD' => 'E02000230',
        '2BE' => 'E02000224',
        '2BF' => 'E02000230',
        '2BG' => 'E02000224',
        '2BH' => 'E02000230',
        '2BJ' => 'E02000224',
        '2BL' => 'E02000224',
        '2BN' => 'E02000230',
        '2BP' => 'E02000230',
        '2BQ' => 'E02000230',
        '2BR' => 'E02000230',
        '2BS' => 'E02000224',
        '2BT' => 'E02000224',
        '2BU' => 'E02000224',
        '2BW' => 'E02000224',
        '2BX' => 'E02000230',
        '2BY' => 'E02000230',
        '2BZ' => 'E02000230',
        '2DA' => 'E02000230',
        '2DB' => 'E02000230',
        '2DD' => 'E02000230',
        '2DE' => 'E02000233',
        '2DF' => 'E02000233',
        '2DG' => 'E02000233',
        '2DH' => 'E02000230',
        '2DJ' => 'E02000233',
        '2DL' => 'E02000233',
        '2DN' => 'E02000233',
        '2DP' => 'E02000233',
        '2DQ' => 'E02000233',
        '2DR' => 'E02000233',
        '2DS' => 'E02000233',
        '2DT' => 'E02000233',
        '2DU' => 'E02000233',
        '2DW' => 'E02000233',
        '2DX' => 'E02000233',
        '2DY' => 'E02000233',
        '2DZ' => 'E02000233',
        '2EA' => 'E02000230',
        '2EB' => 'E02000230',
        '2ED' => 'E02000230',
        '2EE' => 'E02000230',
        '2EF' => 'E02000230',
        '2EG' => 'E02000230',
        '2EH' => 'E02000230',
        '2EJ' => 'E02000230',
        '2EL' => 'E02000230',
        '2EN' => 'E02000230',
        '2EP' => 'E02000230',
        '2EQ' => 'E02000233',
        '2ER' => 'E02000230',
        '2ES' => 'E02000233',
        '2ET' => 'E02000230',
        '2EU' => 'E02000233',
        '2EW' => 'E02000230',
        '2EX' => 'E02000224',
        '2EY' => 'E02000230',
        '2EZ' => 'E02000230',
        '2FA' => 'E02000230',
        '2FB' => 'E02000230',
        '2FD' => 'E02000230',
        '2FE' => 'E02000230',
        '2FF' => 'E02000230',
        '2FG' => 'E02000230',
        '2FH' => 'E02000230',
        '2FL' => 'E02000230',
        '2FP' => 'E02000230',
        '2FQ' => 'E02000230',
        '2FR' => 'E02000230',
        '2FU' => 'E02000230',
        '2HA' => 'E02000230',
        '2HB' => 'E02000230',
        '2HD' => 'E02000230',
        '2HE' => 'E02000230',
        '2HF' => 'E02000230',
        '2HG' => 'E02000234',
        '2HH' => 'E02000230',
        '2HJ' => 'E02000234',
        '2HL' => 'E02000234',
        '2HN' => 'E02000234',
        '2HP' => 'E02000230',
        '2HQ' => 'E02000230',
        '2HR' => 'E02000230',
        '2HS' => 'E02000234',
        '2HT' => 'E02000234',
        '2HU' => 'E02000234',
        '2HW' => 'E02000230',
        '2HX' => 'E02000224',
        '2HY' => 'E02000233',
        '2HZ' => 'E02000233',
        '2JA' => 'E02000230',
        '2JB' => 'E02000230',
        '2JD' => 'E02000863',
        '2JE' => 'E02000863',
        '2JF' => 'E02000863',
        '2JG' => 'E02000230',
        '2JH' => 'E02000230',
        '2JJ' => 'E02000230',
        '2JL' => 'E02000230',
        '2JN' => 'E02000230',
        '2JP' => 'E02000230',
        '2JQ' => 'E02000230',
        '2JR' => 'E02000230',
        '2JS' => 'E02000863',
        '2JT' => 'E02000863',
        '2JU' => 'E02000230',
        '2JW' => 'E02000863',
        '2JX' => 'E02000230',
        '2JY' => 'E02000230',
        '2JZ' => 'E02000230',
        '2LA' => 'E02000230',
        '2LB' => 'E02000230',
        '2LD' => 'E02000230',
        '2LE' => 'E02000230',
        '2LF' => 'E02000230',
        '2LG' => 'E02000231',
        '2LH' => 'E02000230',
        '2LJ' => 'E02000231',
        '2LL' => 'E02000230',
        '2LN' => 'E02000230',
        '2LP' => 'E02000230',
        '2LQ' => 'E02000230',
        '2LR' => 'E02000230',
        '2LS' => 'E02000215',
        '2LT' => 'E02000230',
        '2LU' => 'E02000230',
        '2LW' => 'E02000230',
        '2LZ' => 'E02000230',
        '2NA' => 'E02000230',
        '2NB' => 'E02000230',
        '2ND' => 'E02000230',
        '2NE' => 'E02000230',
        '2NF' => 'E02000230',
        '2NG' => 'E02000230',
        '2NH' => 'E02000230',
        '2NJ' => 'E02000230',
        '2NL' => 'E02000230',
        '2NN' => 'E02000230',
        '2NP' => 'E02000230',
        '2NQ' => 'E02000230',
        '2NR' => 'E02000230',
        '2NS' => 'E02000230',
        '2NT' => 'E02000230',
        '2NU' => 'E02000230',
        '2NX' => 'E02000224',
        '2PA' => 'E02000230',
        '2PB' => 'E02000234',
        '2PD' => 'E02000230',
        '2PE' => 'E02000230',
        '2PF' => 'E02000233',
        '2PG' => 'E02000224',
        '2PH' => 'E02000230',
        '2PJ' => 'E02000230',
        '2PP' => 'E02000230',
        '2QA' => 'E02000230',
        '2QB' => 'E02000224',
        '2QD' => 'E02000230',
        '2QE' => 'E02000230',
        '2QF' => 'E02000230',
        '2QG' => 'E02000230',
        '2SD' => 'E02000233',
        '2SX' => 'E02000230',
        '2UD' => 'E02000230',
        '2UE' => 'E02000230',
        '2UH' => 'E02000230',
        '2UJ' => 'E02000230',
        '2UL' => 'E02000230',
        '2UN' => 'E02000230',
        '2UQ' => 'E02000224',
        '2UR' => 'E02000224',
        '2US' => 'E02000224',
        '2UT' => 'E02000224',
        '2UU' => 'E02000230',
        '2UW' => 'E02000224',
        '2UX' => 'E02000230',
        '2UY' => 'E02000230',
        '2WA' => 'E02000224',
        '2WB' => 'E02000224',
        '2WD' => 'E02000224',
        '2WE' => 'E02000215',
        '2WF' => 'E02000215',
        '2WG' => 'E02000215',
        '2WH' => 'E02000224',
        '2WJ' => 'E02000224',
        '2WL' => 'E02000224',
        '2WN' => 'E02000224',
        '2WP' => 'E02000224',
        '2WQ' => 'E02000224',
        '2WR' => 'E02000224',
        '2WS' => 'E02000215',
        '2WT' => 'E02000224',
        '2WU' => 'E02000224',
        '2WW' => 'E02000224',
        '2WX' => 'E02000224',
        '2WY' => 'E02000224',
        '2WZ' => 'E02000224',
        '2XA' => 'E02000230',
        '2XB' => 'E02000230',
        '2XD' => 'E02000230',
        '2XE' => 'E02000230',
        '2XG' => 'E02000234',
        '2XH' => 'E02000230',
        '2XJ' => 'E02000224',
        '2XL' => 'E02000230',
        '2XN' => 'E02000224',
        '2XP' => 'E02000230',
        '2XR' => 'E02000230',
        '2XS' => 'E02000230',
        '2XT' => 'E02000230',
        '2XU' => 'E02000215',
        '2XW' => 'E02000230',
        '2XX' => 'E02000230',
        '2XY' => 'E02000224',
        '2XZ' => 'E02000224',
        '2YA' => 'E02000224',
        '2YB' => 'E02000230',
        '2YD' => 'E02000230',
        '2YE' => 'E02000224',
        '2YF' => 'E02000230',
        '2YG' => 'E02000230',
        '2YH' => 'E02000230',
        '2YJ' => 'E02000230',
        '2YL' => 'E02000230',
        '2YN' => 'E02000230',
        '2YP' => 'E02000230',
        '2YQ' => 'E02000224',
        '2YR' => 'E02000230',
        '2YS' => 'E02000224',
        '2YT' => 'E02000224',
        '2YU' => 'E02000230',
        '2YW' => 'E02000230',
        '2YX' => 'E02000230',
        '2YY' => 'E02000230',
        '2YZ' => 'E02000230',
        '2ZA' => 'E02000215',
        '2ZB' => 'E02000215',
        '2ZD' => 'E02000215',
        '2ZE' => 'E02000215',
        '2ZF' => 'E02000230',
        '2ZG' => 'E02000230',
        '2ZH' => 'E02000224',
        '2ZJ' => 'E02000230',
        '2ZL' => 'E02000230',
        '2ZN' => 'E02000224',
        '2ZP' => 'E02000224',
        '2ZQ' => 'E02000224',
        '2ZR' => 'E02000230',
        '2ZS' => 'E02000230',
        '2ZT' => 'E02000215',
        '2ZU' => 'E02000230',
        '2ZW' => 'E02000224',
        '2ZX' => 'E02000230',
        '2ZY' => 'E02000224',
        '2ZZ' => 'E02000215',
        '3AA' => 'E02000231',
        '3AB' => 'E02000231',
        '3AD' => 'E02000231',
        '3AE' => 'E02000231',
        '3AF' => 'E02000231',
        '3AG' => 'E02000231',
        '3AH' => 'E02000231',
        '3AJ' => 'E02000231',
        '3AL' => 'E02000231',
        '3AN' => 'E02000231',
        '3AP' => 'E02000231',
        '3AQ' => 'E02000231',
        '3AR' => 'E02000231',
        '3AS' => 'E02000231',
        '3AT' => 'E02000231',
        '3AU' => 'E02000231',
        '3AW' => 'E02000231',
        '3AX' => 'E02000231',
        '3AY' => 'E02000231',
        '3AZ' => 'E02000224',
        '3BA' => 'E02000231',
        '3BB' => 'E02000231',
        '3BD' => 'E02000231',
        '3BE' => 'E02000231',
        '3BF' => 'E02000231',
        '3BG' => 'E02000231',
        '3BH' => 'E02000231',
        '3BJ' => 'E02000231',
        '3BL' => 'E02000231',
        '3BN' => 'E02000231',
        '3BP' => 'E02000231',
        '3BQ' => 'E02000231',
        '3BR' => 'E02000231',
        '3BW' => 'E02000231',
        '3DA' => 'E02000231',
        '3DB' => 'E02000231',
        '3DD' => 'E02000231',
        '3DE' => 'E02000231',
        '3DF' => 'E02000231',
        '3DG' => 'E02000231',
        '3DH' => 'E02000231',
        '3DJ' => 'E02000231',
        '3DL' => 'E02000231',
        '3DN' => 'E02000231',
        '3DR' => 'E02000224',
        '3DX' => 'E02000224',
        '3EA' => 'E02000230',
        '3EB' => 'E02000231',
        '3ED' => 'E02000230',
        '3EE' => 'E02000230',
        '3EF' => 'E02000230',
        '3EG' => 'E02000230',
        '3EH' => 'E02000230',
        '3EJ' => 'E02000231',
        '3EL' => 'E02000231',
        '3EN' => 'E02000230',
        '3EP' => 'E02000230',
        '3ER' => 'E02000230',
        '3HA' => 'E02000231',
        '3HB' => 'E02000231',
        '3HE' => 'E02000231',
        '3HF' => 'E02000231',
        '3HG' => 'E02000231',
        '3HJ' => 'E02000231',
        '3HL' => 'E02000231',
        '3HN' => 'E02000231',
        '3HP' => 'E02000231',
        '3HQ' => 'E02000231',
        '3HR' => 'E02000231',
        '3HW' => 'E02000231',
        '3JA' => 'E02000230',
        '3JB' => 'E02000231',
        '3JD' => 'E02000863',
        '3JE' => 'E02000231',
        '3JF' => 'E02000231',
        '3JG' => 'E02000231',
        '3JH' => 'E02000231',
        '3JJ' => 'E02000231',
        '3JL' => 'E02000231',
        '3LA' => 'E02000231',
        '3LB' => 'E02000231',
        '3LD' => 'E02000231',
        '3LE' => 'E02000231',
        '3LF' => 'E02000231',
        '3LG' => 'E02000231',
        '3LH' => 'E02000231',
        '3LJ' => 'E02000231',
        '3LL' => 'E02000231',
        '3LN' => 'E02000231',
        '3LP' => 'E02000231',
        '3LQ' => 'E02000231',
        '3LR' => 'E02000231',
        '3NA' => 'E02000231',
        '3NB' => 'E02000231',
        '3ND' => 'E02000231',
        '3NE' => 'E02000231',
        '3NF' => 'E02000231',
        '3NG' => 'E02000231',
        '3NH' => 'E02000231',
        '3NJ' => 'E02000231',
        '3NL' => 'E02000231',
        '3NN' => 'E02000231',
        '3NP' => 'E02000231',
        '3NQ' => 'E02000231',
        '3NR' => 'E02000231',
        '3NS' => 'E02000231',
        '3PA' => 'E02000863',
        '3PB' => 'E02000863',
        '3PD' => 'E02000231',
        '3PE' => 'E02000863',
        '3PF' => 'E02000863',
        '3PG' => 'E02000231',
        '3PH' => 'E02000863',
        '3PJ' => 'E02000231',
        '3PL' => 'E02000863',
        '3PN' => 'E02000863',
        '3PP' => 'E02000231',
        '3PQ' => 'E02000231',
        '3PR' => 'E02000863',
        '3PS' => 'E02000231',
        '3PT' => 'E02000863',
        '3PU' => 'E02000863',
        '3PW' => 'E02000231',
        '3PX' => 'E02000231',
        '3PY' => 'E02000863',
        '3PZ' => 'E02000231',
        '3QA' => 'E02000230',
        '3QB' => 'E02000230',
        '3QD' => 'E02000230',
        '3QE' => 'E02000231',
        '3QF' => 'E02000863',
        '3QG' => 'E02000863',
        '3QJ' => 'E02000863',
        '3QL' => 'E02000863',
        '3QN' => 'E02000231',
        '3QP' => 'E02000231',
        '3QQ' => 'E02000231',
        '3QR' => 'E02000863',
        '3QS' => 'E02000863',
        '3QT' => 'E02000863',
        '3QU' => 'E02000863',
        '3QW' => 'E02000863',
        '3QX' => 'E02000231',
        '3QY' => 'E02000230',
        '3WA' => 'E02000224',
        '3WB' => 'E02000215',
        '3WD' => 'E02000224',
        '3WE' => 'E02000224',
        '3WF' => 'E02000224',
        '3WG' => 'E02000224',
        '3WJ' => 'E02000215',
        '3WN' => 'E02000224',
        '3WP' => 'E02000224',
        '3WQ' => 'E02000215',
        '3WR' => 'E02000224',
        '3WS' => 'E02000224',
        '3WT' => 'E02000224',
        '3WU' => 'E02000224',
        '3WW' => 'E02000224',
        '3WX' => 'E02000224',
        '3WY' => 'E02000224',
        '3WZ' => 'E02000215',
        '3XG' => 'E02000224',
        '3XZ' => 'E02000224',
        '3YB' => 'E02000215',
        '3YF' => 'E02000224',
        '3YG' => 'E02000231',
        '3YH' => 'E02000230',
        '3YL' => 'E02000215',
        '3YN' => 'E02000215',
        '3YP' => 'E02000863',
        '3YQ' => 'E02000231',
        '3YR' => 'E02000221',
        '3YS' => 'E02000224',
        '3YT' => 'E02000224',
        '3YU' => 'E02000231',
        '3YW' => 'E02000215',
        '3YX' => 'E02000215',
        '3YY' => 'E02000224',
        '3YZ' => 'E02000224',
        '3ZA' => 'E02000224',
        '3ZB' => 'E02000224',
        '3ZF' => 'E02000224',
        '3ZH' => 'E02000224',
        '3ZJ' => 'E02000215',
        '3ZL' => 'E02000231',
        '3ZN' => 'E02000231',
        '3ZP' => 'E02000224',
        '3ZQ' => 'E02000231',
        '3ZR' => 'E02000231',
        '3ZS' => 'E02000224',
        '3ZT' => 'E02000231',
        '3ZU' => 'E02000231',
        '3ZW' => 'E02000231',
        '3ZY' => 'E02000224',
        '4AA' => 'E02000234',
        '4AB' => 'E02000231',
        '4AD' => 'E02000234',
        '4AE' => 'E02000234',
        '4AF' => 'E02000233',
        '4AG' => 'E02000234',
        '4AH' => 'E02000234',
        '4AJ' => 'E02000234',
        '4AL' => 'E02000233',
        '4AN' => 'E02000233',
        '4AP' => 'E02000233',
        '4AQ' => 'E02000233',
        '4AR' => 'E02000233',
        '4AS' => 'E02000224',
        '4AT' => 'E02000234',
        '4AU' => 'E02000233',
        '4AW' => 'E02000233',
        '4AX' => 'E02000233',
        '4AY' => 'E02000233',
        '4AZ' => 'E02000233',
        '4BA' => 'E02000233',
        '4BB' => 'E02000233',
        '4BD' => 'E02000215',
        '4BE' => 'E02000233',
        '4BF' => 'E02000233',
        '4BG' => 'E02000233',
        '4BH' => 'E02000233',
        '4BJ' => 'E02000233',
        '4BL' => 'E02000233',
        '4BN' => 'E02000233',
        '4BP' => 'E02000233',
        '4BQ' => 'E02000233',
        '4BR' => 'E02000233',
        '4BS' => 'E02000234',
        '4BT' => 'E02000233',
        '4BU' => 'E02000233',
        '4BW' => 'E02000233',
        '4BX' => 'E02000233',
        '4BY' => 'E02000233',
        '4BZ' => 'E02000233',
        '4DA' => 'E02000231',
        '4DB' => 'E02000231',
        '4DD' => 'E02000234',
        '4DE' => 'E02000234',
        '4DF' => 'E02000234',
        '4DG' => 'E02000234',
        '4DH' => 'E02000234',
        '4DJ' => 'E02000234',
        '4DL' => 'E02000234',
        '4DN' => 'E02000234',
        '4DP' => 'E02000234',
        '4DQ' => 'E02000234',
        '4DR' => 'E02000234',
        '4DS' => 'E02000234',
        '4DT' => 'E02000234',
        '4DU' => 'E02000230',
        '4DW' => 'E02000234',
        '4DX' => 'E02000234',
        '4DY' => 'E02000234',
        '4DZ' => 'E02000230',
        '4EA' => 'E02000234',
        '4EB' => 'E02000234',
        '4ED' => 'E02000234',
        '4EE' => 'E02000234',
        '4EF' => 'E02000234',
        '4EG' => 'E02000234',
        '4EH' => 'E02000234',
        '4EJ' => 'E02000234',
        '4EL' => 'E02000234',
        '4EN' => 'E02000234',
        '4EP' => 'E02000234',
        '4EQ' => 'E02000234',
        '4ER' => 'E02000234',
        '4ES' => 'E02000234',
        '4ET' => 'E02000224',
        '4EU' => 'E02000234',
        '4EW' => 'E02000234',
        '4EX' => 'E02000231',
        '4EY' => 'E02000231',
        '4EZ' => 'E02000234',
        '4FA' => 'E02000234',
        '4FB' => 'E02000231',
        '4FD' => 'E02000224',
        '4HA' => 'E02000231',
        '4HB' => 'E02000231',
        '4HD' => 'E02000234',
        '4HE' => 'E02000234',
        '4HF' => 'E02000234',
        '4HG' => 'E02000234',
        '4HH' => 'E02000234',
        '4HJ' => 'E02000234',
        '4HL' => 'E02000234',
        '4HN' => 'E02000234',
        '4HP' => 'E02000234',
        '4HQ' => 'E02000224',
        '4HR' => 'E02000215',
        '4HS' => 'E02000234',
        '4HU' => 'E02000215',
        '4HX' => 'E02000215',
        '4JA' => 'E02000234',
        '4JB' => 'E02000231',
        '4JD' => 'E02000231',
        '4JE' => 'E02000231',
        '4JF' => 'E02000231',
        '4JG' => 'E02000231',
        '4JJ' => 'E02000231',
        '4LA' => 'E02000231',
        '4LB' => 'E02000231',
        '4LE' => 'E02000231',
        '4LF' => 'E02000231',
        '4LG' => 'E02000231',
        '4LH' => 'E02000231',
        '4LJ' => 'E02000231',
        '4LL' => 'E02000231',
        '4LN' => 'E02000231',
        '4LP' => 'E02000231',
        '4LQ' => 'E02000231',
        '4LR' => 'E02000231',
        '4NA' => 'E02000231',
        '4NB' => 'E02000231',
        '4ND' => 'E02000231',
        '4NE' => 'E02000231',
        '4NF' => 'E02000231',
        '4NG' => 'E02000231',
        '4NH' => 'E02000231',
        '4NJ' => 'E02000231',
        '4NZ' => 'E02000215',
        '4TB' => 'E02000234',
        '4WA' => 'E02000224',
        '4WB' => 'E02000231',
        '4WD' => 'E02000215',
        '4WF' => 'E02000224',
        '4WG' => 'E02000224',
        '4WH' => 'E02000224',
        '4WJ' => 'E02000224',
        '4WL' => 'E02000224',
        '4WN' => 'E02000224',
        '4WP' => 'E02000224',
        '4WQ' => 'E02000224',
        '4WR' => 'E02000224',
        '4WS' => 'E02000224',
        '4WT' => 'E02000224',
        '4WU' => 'E02000224',
        '4WW' => 'E02000224',
        '4WX' => 'E02000224',
        '4WY' => 'E02000231',
        '4WZ' => 'E02000224',
        '4XA' => 'E02000231',
        '4XB' => 'E02000224',
        '4YA' => 'E02000224',
        '4YB' => 'E02000215',
        '4YE' => 'E02000234',
        '4YF' => 'E02000224',
        '4YH' => 'E02000234',
        '4YJ' => 'E02000224',
        '4YL' => 'E02000215',
        '4YN' => 'E02000231',
        '4YW' => 'E02000234',
        '4ZQ' => 'E02000231',
        '4ZR' => 'E02000234',
        '4ZS' => 'E02000234',
        '4ZT' => 'E02000234',
        '4ZU' => 'E02000224',
        '4ZX' => 'E02000224',
        '4ZY' => 'E02000215',
        '5AA' => 'E02000233',
        '5AB' => 'E02000235',
        '5AD' => 'E02000235',
        '5AE' => 'E02000235',
        '5AF' => 'E02000235',
        '5AG' => 'E02000233',
        '5AH' => 'E02000235',
        '5AJ' => 'E02000235',
        '5AL' => 'E02000233',
        '5AN' => 'E02000235',
        '5AP' => 'E02000233',
        '5AQ' => 'E02000233',
        '5AR' => 'E02000233',
        '5AS' => 'E02000233',
        '5AT' => 'E02006429',
        '5AU' => 'E02000235',
        '5AW' => 'E02000235',
        '5AX' => 'E02000235',
        '5AY' => 'E02000235',
        '5AZ' => 'E02000235',
        '5BA' => 'E02000235',
        '5BB' => 'E02000235',
        '5BD' => 'E02000235',
        '5BE' => 'E02000235',
        '5BF' => 'E02000235',
        '5BG' => 'E02000235',
        '5BH' => 'E02000235',
        '5BJ' => 'E02000235',
        '5BL' => 'E02000235',
        '5BN' => 'E02000235',
        '5BP' => 'E02000235',
        '5BQ' => 'E02000235',
        '5BR' => 'E02000235',
        '5BS' => 'E02000235',
        '5BT' => 'E02000235',
        '5BU' => 'E02000235',
        '5BW' => 'E02000235',
        '5BX' => 'E02000234',
        '5BY' => 'E02000235',
        '5BZ' => 'E02000235',
        '5DA' => 'E02000233',
        '5DB' => 'E02000235',
        '5DD' => 'E02000235',
        '5DE' => 'E02000233',
        '5DF' => 'E02000235',
        '5DG' => 'E02000235',
        '5DH' => 'E02000235',
        '5DJ' => 'E02000235',
        '5DL' => 'E02000235',
        '5DN' => 'E02000235',
        '5DP' => 'E02000235',
        '5DQ' => 'E02000235',
        '5DR' => 'E02000235',
        '5DS' => 'E02000233',
        '5DT' => 'E02000233',
        '5DU' => 'E02000235',
        '5DW' => 'E02000235',
        '5DX' => 'E02000235',
        '5DY' => 'E02000233',
        '5DZ' => 'E02000233',
        '5EA' => 'E02000235',
        '5EB' => 'E02000235',
        '5ED' => 'E02000235',
        '5EE' => 'E02000235',
        '5EF' => 'E02000235',
        '5EG' => 'E02000235',
        '5EH' => 'E02000235',
        '5EJ' => 'E02000235',
        '5EL' => 'E02000235',
        '5EN' => 'E02000235',
        '5EP' => 'E02000237',
        '5EQ' => 'E02006430',
        '5ER' => 'E02006430',
        '5ES' => 'E02000235',
        '5ET' => 'E02000235',
        '5EU' => 'E02000235',
        '5EW' => 'E02000235',
        '5EX' => 'E02000235',
        '5EY' => 'E02000235',
        '5EZ' => 'E02000235',
        '5FA' => 'E02000215',
        '5FB' => 'E02000215',
        '5FD' => 'E02000215',
        '5FE' => 'E02000233',
        '5FF' => 'E02000233',
        '5FG' => 'E02000235',
        '5FH' => 'E02006429',
        '5FJ' => 'E02006429',
        '5FL' => 'E02006429',
        '5FN' => 'E02006429',
        '5GA' => 'E02000233',
        '5GB' => 'E02000235',
        '5GD' => 'E02000235',
        '5GE' => 'E02000235',
        '5GF' => 'E02006430',
        '5GG' => 'E02006430',
        '5GH' => 'E02006430',
        '5GJ' => 'E02006430',
        '5GL' => 'E02006430',
        '5GN' => 'E02006430',
        '5GP' => 'E02006430',
        '5GQ' => 'E02000235',
        '5GR' => 'E02000235',
        '5GX' => 'E02000235',
        '5GZ' => 'E02000233',
        '5HA' => 'E02000235',
        '5HB' => 'E02000235',
        '5HD' => 'E02000235',
        '5HE' => 'E02000235',
        '5HF' => 'E02000235',
        '5HG' => 'E02000235',
        '5HH' => 'E02000235',
        '5HJ' => 'E02000235',
        '5HL' => 'E02000235',
        '5HN' => 'E02000235',
        '5HP' => 'E02000235',
        '5HQ' => 'E02000235',
        '5HR' => 'E02000235',
        '5HS' => 'E02000235',
        '5HT' => 'E02000235',
        '5HU' => 'E02000235',
        '5HW' => 'E02000235',
        '5HX' => 'E02000235',
        '5HY' => 'E02000235',
        '5HZ' => 'E02000235',
        '5JA' => 'E02000235',
        '5JB' => 'E02000233',
        '5JD' => 'E02000233',
        '5JE' => 'E02000233',
        '5JF' => 'E02000233',
        '5JG' => 'E02000235',
        '5JH' => 'E02000235',
        '5JJ' => 'E02000235',
        '5JL' => 'E02000235',
        '5JN' => 'E02000233',
        '5JP' => 'E02000233',
        '5JQ' => 'E02000233',
        '5JR' => 'E02000235',
        '5JS' => 'E02000233',
        '5JT' => 'E02000233',
        '5JU' => 'E02000233',
        '5JW' => 'E02000235',
        '5JX' => 'E02000235',
        '5JY' => 'E02000235',
        '5JZ' => 'E02000235',
        '5LA' => 'E02000233',
        '5LB' => 'E02000233',
        '5LD' => 'E02000233',
        '5LE' => 'E02000233',
        '5LF' => 'E02000233',
        '5LG' => 'E02000233',
        '5LH' => 'E02000233',
        '5LJ' => 'E02000233',
        '5LL' => 'E02000233',
        '5LN' => 'E02000233',
        '5LP' => 'E02000233',
        '5LQ' => 'E02000233',
        '5LR' => 'E02000233',
        '5LS' => 'E02000234',
        '5LT' => 'E02000233',
        '5LU' => 'E02000233',
        '5LW' => 'E02000233',
        '5LX' => 'E02000234',
        '5LY' => 'E02000233',
        '5LZ' => 'E02000233',
        '5NA' => 'E02000233',
        '5NB' => 'E02000233',
        '5ND' => 'E02000233',
        '5NE' => 'E02000233',
        '5NF' => 'E02000233',
        '5NG' => 'E02000233',
        '5NH' => 'E02000233',
        '5NJ' => 'E02000233',
        '5NL' => 'E02000233',
        '5NN' => 'E02000233',
        '5NP' => 'E02000233',
        '5NQ' => 'E02000233',
        '5NR' => 'E02000233',
        '5NS' => 'E02000233',
        '5NT' => 'E02000233',
        '5NU' => 'E02000233',
        '5NW' => 'E02000233',
        '5NX' => 'E02000235',
        '5NY' => 'E02000233',
        '5NZ' => 'E02000233',
        '5PA' => 'E02000235',
        '5PB' => 'E02000224',
        '5PD' => 'E02000235',
        '5PE' => 'E02000233',
        '5PJ' => 'E02000224',
        '5QE' => 'E02000224',
        '5RE' => 'E02000224',
        '5RL' => 'E02000224',
        '5SH' => 'E02000235',
        '5SN' => 'E02000224',
        '5TD' => 'E02000224',
        '5UA' => 'E02000224',
        '5UP' => 'E02000215',
        '5UR' => 'E02000235',
        '5WA' => 'E02000215',
        '5WB' => 'E02000224',
        '5WD' => 'E02000224',
        '5WE' => 'E02000224',
        '5WH' => 'E02000224',
        '5WR' => 'E02000224',
        '5WS' => 'E02000224',
        '5WT' => 'E02000224',
        '5WU' => 'E02000224',
        '5WW' => 'E02000224',
        '5WX' => 'E02000224',
        '5WY' => 'E02000224',
        '5WZ' => 'E02000224',
        '5XA' => 'E02000224',
        '5XL' => 'E02000224',
        '5YA' => 'E02000235',
        '5YB' => 'E02000233',
        '5YD' => 'E02000235',
        '5YE' => 'E02000235',
        '5YF' => 'E02000224',
        '5YG' => 'E02006430',
        '5YH' => 'E02000215',
        '5YJ' => 'E02000235',
        '5YL' => 'E02000233',
        '5YN' => 'E02000235',
        '5YP' => 'E02000224',
        '5YQ' => 'E02000215',
        '5YR' => 'E02000224',
        '5YS' => 'E02000233',
        '5YT' => 'E02000224',
        '5YU' => 'E02000235',
        '5YW' => 'E02000215',
        '5YX' => 'E02000215',
        '5YY' => 'E02000235',
        '5YZ' => 'E02000233',
        '5ZB' => 'E02000224',
        '5ZG' => 'E02000224',
        '5ZH' => 'E02000215',
        '5ZJ' => 'E02000224',
        '5ZL' => 'E02000235',
        '5ZN' => 'E02000215',
        '5ZP' => 'E02000235',
        '5ZQ' => 'E02000235',
        '5ZR' => 'E02000235',
        '5ZS' => 'E02000235',
        '5ZT' => 'E02000235',
        '5ZU' => 'E02000235',
        '5ZW' => 'E02000235',
        '5ZX' => 'E02000224',
        '9AA' => 'E02000224',
        '9AD' => 'E02000224',
        '9AF' => 'E02000224',
        '9AH' => 'E02000224',
        '9AJ' => 'E02000224',
        '9AL' => 'E02000224',
        '9AN' => 'E02000224',
        '9AP' => 'E02000224',
        '9AQ' => 'E02000224',
        '9AR' => 'E02000224',
        '9AS' => 'E02000224',
        '9AT' => 'E02000224',
        '9AU' => 'E02000224',
        '9AX' => 'E02000224',
        '9AZ' => 'E02000224',
        '9BB' => 'E02000224',
        '9BD' => 'E02000224',
        '9BF' => 'E02000224',
        '9BG' => 'E02000224',
        '9BH' => 'E02000224',
        '9BJ' => 'E02000224',
        '9BL' => 'E02000224',
        '9BN' => 'E02000224',
        '9BP' => 'E02000224',
        '9BQ' => 'E02000224',
        '9BR' => 'E02000224',
        '9BS' => 'E02000224',
        '9BT' => 'E02000224',
        '9BU' => 'E02000224',
        '9BW' => 'E02000224',
        '9BX' => 'E02000224',
        '9BY' => 'E02000224',
        '9BZ' => 'E02000224',
        '9DA' => 'E02000224',
        '9DB' => 'E02000224',
        '9DD' => 'E02000224',
        '9DE' => 'E02000224',
        '9DF' => 'E02000224',
        '9DG' => 'E02000224',
        '9DH' => 'E02000224',
        '9DJ' => 'E02000224',
        '9DL' => 'E02000224',
        '9DN' => 'E02000224',
        '9DP' => 'E02000224',
        '9DQ' => 'E02000224',
        '9DR' => 'E02000224',
        '9DS' => 'E02000224',
        '9DT' => 'E02000224',
        '9DU' => 'E02000224',
        '9DW' => 'E02000224',
        '9DX' => 'E02000224',
        '9DY' => 'E02000224',
        '9DZ' => 'E02000224',
        '9EA' => 'E02000224',
        '9EB' => 'E02000224',
        '9ED' => 'E02000224',
        '9EE' => 'E02000224',
        '9EF' => 'E02000224',
        '9EG' => 'E02000224',
        '9EJ' => 'E02000224',
        '9EL' => 'E02000224',
        '9EN' => 'E02000224',
        '9EP' => 'E02000224',
        '9EQ' => 'E02000224',
        '9ER' => 'E02000224',
        '9ES' => 'E02000224',
        '9ET' => 'E02000224',
        '9EU' => 'E02000224',
        '9EW' => 'E02000224',
        '9ZZ' => 'E02000224',
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
