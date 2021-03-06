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
final class W1V
{
    /**
     * @var array<string,string>
     */
    private const MAP = [
        '0AA' => 'E02000972',
        '0AB' => 'E02000977',
        '0AD' => 'E02000977',
        '0AE' => 'E02000972',
        '0AH' => 'E02000972',
        '0AJ' => 'E02000977',
        '0AL' => 'E02000977',
        '0AN' => 'E02000977',
        '0AP' => 'E02000977',
        '0AQ' => 'E02000977',
        '0AT' => 'E02000977',
        '0AU' => 'E02000977',
        '0AX' => 'E02000977',
        '0AY' => 'E02000977',
        '0BA' => 'E02000977',
        '0BB' => 'E02000977',
        '0BD' => 'E02000977',
        '0BE' => 'E02000977',
        '0BH' => 'E02000972',
        '0BJ' => 'E02000977',
        '0BL' => 'E02000977',
        '0BN' => 'E02000972',
        '0BP' => 'E02000977',
        '0BQ' => 'E02000977',
        '0BR' => 'E02000977',
        '0BS' => 'E02000977',
        '0BT' => 'E02000977',
        '0BU' => 'E02000977',
        '0BX' => 'E02000977',
        '0BY' => 'E02000977',
        '0DB' => 'E02000977',
        '0DH' => 'E02000977',
        '0DJ' => 'E02000972',
        '0DR' => 'E02000977',
        '0DS' => 'E02000972',
        '0DT' => 'E02000977',
        '0DY' => 'E02000977',
        '0EA' => 'E02000977',
        '0EB' => 'E02000977',
        '0ED' => 'E02000977',
        '0EE' => 'E02000972',
        '0EJ' => 'E02000977',
        '0EL' => 'E02000977',
        '0EN' => 'E02000977',
        '0ET' => 'E02000977',
        '0EU' => 'E02000977',
        '0HA' => 'E02000977',
        '0HB' => 'E02000972',
        '0HH' => 'E02000977',
        '0HJ' => 'E02000977',
        '0HL' => 'E02000977',
        '0HN' => 'E02000977',
        '0HQ' => 'E02000972',
        '0HR' => 'E02000972',
        '0HS' => 'E02000972',
        '0HU' => 'E02000977',
        '0HX' => 'E02000977',
        '0HY' => 'E02000977',
        '0JA' => 'E02000977',
        '0JB' => 'E02000977',
        '0JD' => 'E02000977',
        '0JE' => 'E02000977',
        '0JH' => 'E02000977',
        '0JJ' => 'E02000977',
        '0JL' => 'E02000977',
        '0JP' => 'E02000977',
        '0JQ' => 'E02000977',
        '0JU' => 'E02000972',
        '0JX' => 'E02000977',
        '0JY' => 'E02000972',
        '0LA' => 'E02000972',
        '0LB' => 'E02000977',
        '0LD' => 'E02000972',
        '0LE' => 'E02000977',
        '0LH' => 'E02000972',
        '0LJ' => 'E02000972',
        '0LL' => 'E02000977',
        '0LN' => 'E02000977',
        '0LP' => 'E02000972',
        '0LQ' => 'E02000972',
        '0LR' => 'E02000972',
        '0LS' => 'E02000977',
        '0LT' => 'E02000977',
        '0LX' => 'E02000977',
        '0LY' => 'E02000977',
        '0NL' => 'E02000972',
        '0NP' => 'E02000977',
        '0NQ' => 'E02000977',
        '0NS' => 'E02000972',
        '0NX' => 'E02000977',
        '0PB' => 'E02000977',
        '0PD' => 'E02000977',
        '0PE' => 'E02000972',
        '0PJ' => 'E02000972',
        '0PL' => 'E02000977',
        '0PN' => 'E02000977',
        '0PP' => 'E02000972',
        '0PQ' => 'E02000972',
        '0PR' => 'E02000977',
        '0PS' => 'E02000977',
        '0PT' => 'E02000972',
        '0PU' => 'E02000977',
        '0PX' => 'E02000977',
        '0PY' => 'E02000977',
        '0QB' => 'E02000977',
        '0QH' => 'E02000977',
        '0QJ' => 'E02000972',
        '0QP' => 'E02000977',
        '0QR' => 'E02000977',
        '0QX' => 'E02000977',
        '0QY' => 'E02000977',
        '0TB' => 'E02000977',
        '1AA' => 'E02000972',
        '1AB' => 'E02000972',
        '1AD' => 'E02000972',
        '1AF' => 'E02000972',
        '1BG' => 'E02000972',
        '1DA' => 'E02000972',
        '1DB' => 'E02000972',
        '1DD' => 'E02000972',
        '1DE' => 'E02000972',
        '1DF' => 'E02000972',
        '1DG' => 'E02000972',
        '1DJ' => 'E02000972',
        '1DL' => 'E02000972',
        '1EE' => 'E02000972',
        '1FA' => 'E02000972',
        '1FB' => 'E02000972',
        '1FD' => 'E02000972',
        '1FE' => 'E02000972',
        '1FF' => 'E02000972',
        '1FG' => 'E02000972',
        '1FH' => 'E02000972',
        '1FJ' => 'E02000972',
        '1FL' => 'E02000972',
        '1FN' => 'E02000972',
        '1FP' => 'E02000972',
        '1FQ' => 'E02000972',
        '1FR' => 'E02000972',
        '1FS' => 'E02000972',
        '1FT' => 'E02000972',
        '1FU' => 'E02000972',
        '1HA' => 'E02000972',
        '1HB' => 'E02000972',
        '1HD' => 'E02000972',
        '1HE' => 'E02000972',
        '1HF' => 'E02000972',
        '1HG' => 'E02000972',
        '1HH' => 'E02000972',
        '1HJ' => 'E02000972',
        '1HL' => 'E02000972',
        '1LA' => 'E02000972',
        '1LB' => 'E02000972',
        '1LD' => 'E02000972',
        '1LE' => 'E02000972',
        '1LF' => 'E02000972',
        '1LG' => 'E02000972',
        '1LH' => 'E02000972',
        '1LJ' => 'E02000972',
        '1LL' => 'E02000972',
        '1LN' => 'E02000972',
        '1LP' => 'E02000972',
        '1LQ' => 'E02000972',
        '1LR' => 'E02000972',
        '1LS' => 'E02000972',
        '1PA' => 'E02000972',
        '1PB' => 'E02000972',
        '1PD' => 'E02000972',
        '1PE' => 'E02000972',
        '1PF' => 'E02000972',
        '1PG' => 'E02000972',
        '1PH' => 'E02000972',
        '1PJ' => 'E02000972',
        '1PL' => 'E02000972',
        '1PN' => 'E02000972',
        '1PP' => 'E02000972',
        '1PQ' => 'E02000972',
        '2AA' => 'E02000972',
        '2AB' => 'E02000972',
        '2AD' => 'E02000972',
        '2AE' => 'E02000972',
        '2AH' => 'E02000972',
        '2AJ' => 'E02000972',
        '2AL' => 'E02000972',
        '2AN' => 'E02000972',
        '2AP' => 'E02000972',
        '2AQ' => 'E02000972',
        '2AR' => 'E02000972',
        '2AS' => 'E02000972',
        '2AT' => 'E02000972',
        '2AU' => 'E02000972',
        '2AX' => 'E02000972',
        '2AY' => 'E02000972',
        '2BA' => 'E02000972',
        '2BB' => 'E02000972',
        '2BD' => 'E02000972',
        '2BE' => 'E02000972',
        '2BG' => 'E02000972',
        '2BH' => 'E02000972',
        '2BN' => 'E02000972',
        '2BP' => 'E02000972',
        '2BQ' => 'E02000972',
        '2BR' => 'E02000972',
        '2BS' => 'E02000972',
        '2BT' => 'E02000972',
        '2DB' => 'E02000972',
        '2DD' => 'E02000972',
        '2DE' => 'E02000972',
        '2DH' => 'E02000972',
        '2DJ' => 'E02000972',
        '2DN' => 'E02000972',
        '2DP' => 'E02000972',
        '2DQ' => 'E02000972',
        '2DR' => 'E02000972',
        '2DS' => 'E02000972',
        '2DU' => 'E02000972',
        '2DX' => 'E02000972',
        '2DY' => 'E02000972',
        '2EA' => 'E02000972',
        '2EE' => 'E02000972',
        '2EH' => 'E02000972',
        '2EJ' => 'E02000972',
        '2EL' => 'E02000972',
        '2EQ' => 'E02000972',
        '2ER' => 'E02000972',
        '2ES' => 'E02000972',
        '2EU' => 'E02000972',
        '2HA' => 'E02000972',
        '2HD' => 'E02000972',
        '2HE' => 'E02000972',
        '2HH' => 'E02000972',
        '2HL' => 'E02000972',
        '2HN' => 'E02000972',
        '2HP' => 'E02000972',
        '2HQ' => 'E02000972',
        '2HR' => 'E02000972',
        '2HU' => 'E02000972',
        '2JA' => 'E02000972',
        '2JH' => 'E02000972',
        '2JL' => 'E02000972',
        '2JP' => 'E02000972',
        '2JU' => 'E02000972',
        '2LB' => 'E02000972',
        '2LD' => 'E02000972',
        '2LE' => 'E02000972',
        '2LH' => 'E02000972',
        '2LJ' => 'E02000972',
        '2LL' => 'E02000972',
        '2LN' => 'E02000972',
        '2LP' => 'E02000972',
        '2LQ' => 'E02000972',
        '2LS' => 'E02000972',
        '2LT' => 'E02000972',
        '2LX' => 'E02000972',
        '2NB' => 'E02000972',
        '2ND' => 'E02000972',
        '2NE' => 'E02000972',
        '2NN' => 'E02000972',
        '2NP' => 'E02000972',
        '2NR' => 'E02000972',
        '2NS' => 'E02000972',
        '2NX' => 'E02000972',
        '2PA' => 'E02000972',
        '2PB' => 'E02000972',
        '3AA' => 'E02000972',
        '3AB' => 'E02000972',
        '3AD' => 'E02000972',
        '3AE' => 'E02000972',
        '3AF' => 'E02000972',
        '3AG' => 'E02000972',
        '3AH' => 'E02000972',
        '3AJ' => 'E02000972',
        '3AL' => 'E02000972',
        '3AN' => 'E02000972',
        '3AP' => 'E02000972',
        '3AQ' => 'E02000972',
        '3AR' => 'E02000972',
        '3AS' => 'E02000972',
        '3AT' => 'E02000972',
        '3AU' => 'E02000972',
        '3AW' => 'E02000972',
        '3AX' => 'E02000972',
        '3DA' => 'E02000972',
        '3DB' => 'E02000972',
        '3DD' => 'E02000972',
        '3DE' => 'E02000972',
        '3DF' => 'E02000972',
        '3DG' => 'E02000972',
        '3FA' => 'E02000972',
        '3FB' => 'E02000972',
        '3FD' => 'E02000972',
        '3FE' => 'E02000972',
        '3FF' => 'E02000972',
        '3FG' => 'E02000972',
        '3FH' => 'E02000972',
        '3FJ' => 'E02000972',
        '3FL' => 'E02000972',
        '3FN' => 'E02000972',
        '3FP' => 'E02000972',
        '3HA' => 'E02000977',
        '3HB' => 'E02000977',
        '3HD' => 'E02000977',
        '3HE' => 'E02000977',
        '3HG' => 'E02000977',
        '3HH' => 'E02000977',
        '3HJ' => 'E02000977',
        '3HL' => 'E02000972',
        '3HN' => 'E02000972',
        '3HP' => 'E02000972',
        '3HQ' => 'E02000972',
        '3HR' => 'E02000972',
        '3HS' => 'E02000972',
        '3LA' => 'E02000972',
        '3LB' => 'E02000972',
        '3LD' => 'E02000972',
        '3LE' => 'E02000972',
        '3LF' => 'E02000972',
        '3PA' => 'E02000972',
        '3PB' => 'E02000972',
        '3PD' => 'E02000972',
        '3PE' => 'E02000972',
        '3PF' => 'E02000972',
        '3PG' => 'E02000972',
        '3PH' => 'E02000972',
        '3PJ' => 'E02000972',
        '3PL' => 'E02000972',
        '3PN' => 'E02000972',
        '3PP' => 'E02000972',
        '3RA' => 'E02000972',
        '3RB' => 'E02000972',
        '3RD' => 'E02000972',
        '3RE' => 'E02000972',
        '3RF' => 'E02000972',
        '3RG' => 'E02000972',
        '3RH' => 'E02000972',
        '3RP' => 'E02000972',
        '3RQ' => 'E02000972',
        '3RR' => 'E02000972',
        '3TA' => 'E02000972',
        '3TB' => 'E02000972',
        '3TD' => 'E02000972',
        '3TE' => 'E02000972',
        '3TF' => 'E02000972',
        '3TG' => 'E02000972',
        '3TH' => 'E02000972',
        '4AA' => 'E02000972',
        '4AB' => 'E02000972',
        '4AD' => 'E02000972',
        '4AE' => 'E02000972',
        '4AH' => 'E02000972',
        '4AJ' => 'E02000972',
        '4AL' => 'E02000972',
        '4AN' => 'E02000972',
        '4AP' => 'E02000972',
        '4AQ' => 'E02000972',
        '4AS' => 'E02000972',
        '4AT' => 'E02000972',
        '4AU' => 'E02000972',
        '4AX' => 'E02000972',
        '4AY' => 'E02000972',
        '4BA' => 'E02000972',
        '4BB' => 'E02000972',
        '4BD' => 'E02000972',
        '4BE' => 'E02000972',
        '4BH' => 'E02000972',
        '4BJ' => 'E02000977',
        '4BL' => 'E02000972',
        '4BN' => 'E02000972',
        '4BP' => 'E02000972',
        '4BQ' => 'E02000977',
        '4BR' => 'E02000972',
        '4BT' => 'E02000972',
        '4BU' => 'E02000972',
        '4BX' => 'E02000972',
        '4DA' => 'E02000972',
        '4DB' => 'E02000972',
        '4DJ' => 'E02000972',
        '4DN' => 'E02000972',
        '4DP' => 'E02000972',
        '4DQ' => 'E02000972',
        '4DR' => 'E02000972',
        '4DU' => 'E02000972',
        '4ED' => 'E02000972',
        '4EH' => 'E02000972',
        '4EJ' => 'E02000972',
        '4EL' => 'E02000972',
        '4EN' => 'E02000972',
        '4EP' => 'E02000972',
        '4ER' => 'E02000972',
        '4ET' => 'E02000972',
        '4HA' => 'E02000972',
        '4HB' => 'E02000972',
        '4HD' => 'E02000972',
        '4HH' => 'E02000972',
        '4HJ' => 'E02000972',
        '4HL' => 'E02000972',
        '4HN' => 'E02000972',
        '4HP' => 'E02000972',
        '4HQ' => 'E02000972',
        '4HS' => 'E02000972',
        '4HT' => 'E02000972',
        '4HX' => 'E02000972',
        '4JB' => 'E02000972',
        '4JD' => 'E02000972',
        '4JH' => 'E02000972',
        '4JJ' => 'E02000972',
        '4JL' => 'E02000972',
        '4JN' => 'E02000972',
        '4JP' => 'E02000972',
        '4JQ' => 'E02000972',
        '4JT' => 'E02000972',
        '4JX' => 'E02000977',
        '4JY' => 'E02000972',
        '4LA' => 'E02000972',
        '4LB' => 'E02000972',
        '4LE' => 'E02000972',
        '4LJ' => 'E02000972',
        '4LL' => 'E02000972',
        '4LN' => 'E02000972',
        '4LP' => 'E02000972',
        '4LQ' => 'E02000972',
        '4LR' => 'E02000972',
        '4LS' => 'E02000972',
        '4LT' => 'E02000972',
        '4LU' => 'E02000972',
        '4LX' => 'E02000972',
        '4LY' => 'E02000972',
        '4NA' => 'E02000972',
        '4NB' => 'E02000972',
        '4ND' => 'E02000972',
        '4NE' => 'E02000972',
        '4NH' => 'E02000972',
        '4NL' => 'E02000972',
        '4NN' => 'E02000972',
        '4NQ' => 'E02000972',
        '4NS' => 'E02000972',
        '4NU' => 'E02000972',
        '4NX' => 'E02000972',
        '4PA' => 'E02000972',
        '4PB' => 'E02000972',
        '4PE' => 'E02000972',
        '4PH' => 'E02000972',
        '4PJ' => 'E02000972',
        '4PL' => 'E02000972',
        '4PP' => 'E02000972',
        '4PQ' => 'E02000972',
        '4PS' => 'E02000972',
        '4PT' => 'E02000972',
        '4PU' => 'E02000977',
        '4QA' => 'E02000972',
        '4QB' => 'E02000972',
        '4QE' => 'E02000972',
        '5AA' => 'E02000972',
        '5AB' => 'E02000972',
        '5AD' => 'E02000972',
        '5AE' => 'E02000972',
        '5AF' => 'E02000972',
        '5AG' => 'E02000972',
        '5AH' => 'E02000972',
        '5AJ' => 'E02000972',
        '5AL' => 'E02000972',
        '5AN' => 'E02000972',
        '5AP' => 'E02000972',
        '5AW' => 'E02000972',
        '5DA' => 'E02000972',
        '5DB' => 'E02000972',
        '5DD' => 'E02000972',
        '5DE' => 'E02000972',
        '5DF' => 'E02000972',
        '5DG' => 'E02000972',
        '5DH' => 'E02000972',
        '5DQ' => 'E02000972',
        '5DS' => 'E02000972',
        '5EE' => 'E02000972',
        '5FA' => 'E02000972',
        '5FB' => 'E02000972',
        '5FD' => 'E02000972',
        '5FE' => 'E02000972',
        '5FF' => 'E02000972',
        '5FG' => 'E02000972',
        '5FH' => 'E02000972',
        '5FJ' => 'E02000972',
        '5FL' => 'E02000972',
        '5HA' => 'E02000972',
        '5HB' => 'E02000972',
        '5HD' => 'E02000972',
        '5HE' => 'E02000972',
        '5HF' => 'E02000972',
        '5HG' => 'E02000972',
        '5HH' => 'E02000972',
        '5HJ' => 'E02000972',
        '5HL' => 'E02000972',
        '5HN' => 'E02000972',
        '5HR' => 'E02000972',
        '5LA' => 'E02000972',
        '5LB' => 'E02000972',
        '5LD' => 'E02000972',
        '5LE' => 'E02000972',
        '5LF' => 'E02000972',
        '5LG' => 'E02000972',
        '5LH' => 'E02000972',
        '5LJ' => 'E02000972',
        '5LL' => 'E02000972',
        '5LN' => 'E02000972',
        '5LP' => 'E02000972',
        '5LQ' => 'E02000972',
        '5LR' => 'E02000972',
        '5LW' => 'E02000972',
        '5PA' => 'E02000972',
        '5PB' => 'E02000972',
        '5PD' => 'E02000972',
        '5PE' => 'E02000972',
        '5PF' => 'E02000972',
        '5PG' => 'E02000972',
        '5PH' => 'E02000972',
        '5PJ' => 'E02000972',
        '5PL' => 'E02000972',
        '5PN' => 'E02000972',
        '5RA' => 'E02000972',
        '5RB' => 'E02000972',
        '5RD' => 'E02000972',
        '5RE' => 'E02000972',
        '5RF' => 'E02000972',
        '5RG' => 'E02000972',
        '5RH' => 'E02000972',
        '5RJ' => 'E02000972',
        '5RL' => 'E02000972',
        '5RN' => 'E02000972',
        '5TA' => 'E02000972',
        '5TB' => 'E02000972',
        '5TD' => 'E02000972',
        '5TE' => 'E02000972',
        '5TF' => 'E02000972',
        '5TG' => 'E02000972',
        '5TH' => 'E02000972',
        '5TL' => 'E02000972',
        '5TN' => 'E02000972',
        '5TP' => 'E02000972',
        '5TQ' => 'E02000972',
        '5TR' => 'E02000972',
        '5TS' => 'E02000972',
        '5TT' => 'E02000972',
        '5TU' => 'E02000972',
        '5TW' => 'E02000972',
        '5TZ' => 'E02000972',
        '6AA' => 'E02000972',
        '6AB' => 'E02000972',
        '6AD' => 'E02000972',
        '6AE' => 'E02000972',
        '6AH' => 'E02000972',
        '6AJ' => 'E02000972',
        '6AL' => 'E02000972',
        '6AN' => 'E02000972',
        '6AP' => 'E02000972',
        '6AQ' => 'E02000972',
        '6AR' => 'E02000972',
        '6AS' => 'E02000972',
        '6AU' => 'E02000972',
        '6AX' => 'E02000972',
        '6AY' => 'E02000972',
        '6BA' => 'E02000972',
        '6BB' => 'E02000972',
        '6BD' => 'E02000972',
        '6BE' => 'E02000972',
        '6BH' => 'E02000972',
        '6BL' => 'E02000972',
        '6BN' => 'E02000972',
        '6BP' => 'E02000972',
        '6BQ' => 'E02000972',
        '6BS' => 'E02000972',
        '6BT' => 'E02000972',
        '6BU' => 'E02000972',
        '6BX' => 'E02000972',
        '6BY' => 'E02000972',
        '6DB' => 'E02000972',
        '6DD' => 'E02000972',
        '6DE' => 'E02000972',
        '6DJ' => 'E02000972',
        '6DN' => 'E02000972',
        '6DP' => 'E02000972',
        '6DQ' => 'E02000972',
        '6DT' => 'E02000972',
        '6DX' => 'E02000972',
        '6DY' => 'E02000972',
        '6EB' => 'E02000972',
        '6ED' => 'E02000972',
        '6EE' => 'E02000972',
        '6EH' => 'E02000972',
        '6EL' => 'E02000972',
        '6EN' => 'E02000972',
        '6EQ' => 'E02000972',
        '6ER' => 'E02000972',
        '6ET' => 'E02000972',
        '6EU' => 'E02000972',
        '6HA' => 'E02000972',
        '6HB' => 'E02000972',
        '6HD' => 'E02000972',
        '6HE' => 'E02000972',
        '6HH' => 'E02000972',
        '6HJ' => 'E02000972',
        '6HL' => 'E02000972',
        '6HN' => 'E02000972',
        '6HP' => 'E02000972',
        '6HQ' => 'E02000972',
        '6HS' => 'E02000972',
        '6HT' => 'E02000972',
        '6HU' => 'E02000972',
        '6HX' => 'E02000972',
        '6HY' => 'E02000972',
        '6JA' => 'E02000972',
        '6JB' => 'E02000972',
        '6JD' => 'E02000972',
        '6JE' => 'E02000972',
        '6JH' => 'E02000972',
        '6JJ' => 'E02000972',
        '6JL' => 'E02000972',
        '6JN' => 'E02000972',
        '6JP' => 'E02000972',
        '6JQ' => 'E02000972',
        '6JR' => 'E02000972',
        '6JS' => 'E02000972',
        '6JT' => 'E02000972',
        '6JU' => 'E02000972',
        '6JX' => 'E02000972',
        '6LA' => 'E02000972',
        '6LB' => 'E02000972',
        '6LE' => 'E02000972',
        '6LJ' => 'E02000972',
        '6LL' => 'E02000972',
        '6LP' => 'E02000972',
        '6LR' => 'E02000972',
        '6LT' => 'E02000972',
        '6LX' => 'E02000972',
        '6LY' => 'E02000972',
        '6NA' => 'E02000972',
        '6NB' => 'E02000972',
        '6NE' => 'E02000972',
        '6NJ' => 'E02000972',
        '6NL' => 'E02000972',
        '6NN' => 'E02000972',
        '6NP' => 'E02000972',
        '6NQ' => 'E02000972',
        '6NR' => 'E02000972',
        '6NS' => 'E02000972',
        '6NT' => 'E02000972',
        '6NX' => 'E02000972',
        '6NY' => 'E02000972',
        '6PA' => 'E02000972',
        '6PB' => 'E02000972',
        '6PE' => 'E02000972',
        '6PJ' => 'E02000972',
        '6PL' => 'E02000972',
        '6PQ' => 'E02000972',
        '6PR' => 'E02000972',
        '6PS' => 'E02000972',
        '6PU' => 'E02000972',
        '6QA' => 'E02000972',
        '6QB' => 'E02000972',
        '6QD' => 'E02000972',
        '6QE' => 'E02000972',
        '6QH' => 'E02000972',
        '6QJ' => 'E02000972',
        '6QL' => 'E02000972',
        '6QQ' => 'E02000972',
        '6QS' => 'E02000972',
        '6QU' => 'E02000972',
        '7AA' => 'E02000972',
        '7AB' => 'E02000972',
        '7AD' => 'E02000972',
        '7AE' => 'E02000972',
        '7AF' => 'E02000972',
        '7DA' => 'E02000972',
        '7DB' => 'E02000977',
        '7DD' => 'E02000977',
        '7DE' => 'E02000977',
        '7DF' => 'E02000977',
        '7DG' => 'E02000977',
        '7DH' => 'E02000977',
        '7DJ' => 'E02000977',
        '7DN' => 'E02000977',
        '7FA' => 'E02000977',
        '7FB' => 'E02000977',
        '7FD' => 'E02000977',
        '7FE' => 'E02000977',
        '7FF' => 'E02000977',
        '7FG' => 'E02000977',
        '7FH' => 'E02000977',
        '7FJ' => 'E02000977',
        '7FL' => 'E02000977',
        '7FN' => 'E02000977',
        '7FP' => 'E02000977',
        '7FQ' => 'E02000977',
        '7FR' => 'E02000977',
        '7FS' => 'E02000977',
        '7HA' => 'E02000972',
        '7HB' => 'E02000972',
        '7HD' => 'E02000972',
        '7HE' => 'E02000972',
        '7HF' => 'E02000972',
        '7HG' => 'E02000972',
        '7HH' => 'E02000972',
        '7HJ' => 'E02000972',
        '7HL' => 'E02000972',
        '7HN' => 'E02000972',
        '7HP' => 'E02000972',
        '7HQ' => 'E02000972',
        '7HR' => 'E02000972',
        '7HS' => 'E02000972',
        '7HT' => 'E02000972',
        '7HU' => 'E02000972',
        '7LA' => 'E02000977',
        '7LB' => 'E02000977',
        '7LD' => 'E02000977',
        '7LE' => 'E02000977',
        '7LF' => 'E02000977',
        '7LG' => 'E02000977',
        '7LH' => 'E02000977',
        '7LJ' => 'E02000977',
        '7LL' => 'E02000977',
        '7LN' => 'E02000977',
        '7LP' => 'E02000977',
        '7PA' => 'E02000972',
        '7PD' => 'E02000972',
        '7PE' => 'E02000972',
        '7PF' => 'E02000972',
        '7PG' => 'E02000972',
        '7PH' => 'E02000972',
        '7RA' => 'E02000972',
        '7RD' => 'E02000972',
        '7RE' => 'E02000972',
        '7RF' => 'E02000972',
        '7RG' => 'E02000972',
        '7RH' => 'E02000972',
        '7RJ' => 'E02000972',
        '7RL' => 'E02000972',
        '8AB' => 'E02000972',
        '8AH' => 'E02000972',
        '8AJ' => 'E02000972',
        '8AL' => 'E02000972',
        '8AN' => 'E02000977',
        '8AP' => 'E02000977',
        '8AR' => 'E02000972',
        '8AS' => 'E02000977',
        '8AT' => 'E02000972',
        '8AX' => 'E02000977',
        '8AY' => 'E02000972',
        '8BA' => 'E02000972',
        '8BB' => 'E02000972',
        '8BE' => 'E02000977',
        '8BH' => 'E02000972',
        '8BL' => 'E02000977',
        '8BP' => 'E02000972',
        '8BQ' => 'E02000972',
        '8BR' => 'E02000977',
        '8BS' => 'E02000977',
        '8BT' => 'E02000972',
        '8BU' => 'E02000972',
        '8BX' => 'E02000972',
        '8BY' => 'E02000972',
        '8DA' => 'E02000972',
        '8DD' => 'E02000977',
        '8DE' => 'E02000972',
        '8DH' => 'E02000977',
        '8DQ' => 'E02000972',
        '8DR' => 'E02000977',
        '8DT' => 'E02000977',
        '8DY' => 'E02000972',
        '8EA' => 'E02000972',
        '8EE' => 'E02000977',
        '8EJ' => 'E02000972',
        '8EL' => 'E02000977',
        '8ES' => 'E02000972',
        '8EX' => 'E02000972',
        '8HA' => 'E02000977',
        '8HB' => 'E02000977',
        '8HE' => 'E02000977',
        '8HH' => 'E02000977',
        '8HJ' => 'E02000977',
        '8HQ' => 'E02000972',
        '8HR' => 'E02000977',
        '8HS' => 'E02000977',
        '8HT' => 'E02000977',
        '8JA' => 'E02000972',
        '8JH' => 'E02000972',
        '8JJ' => 'E02000972',
        '8JL' => 'E02000972',
        '9AA' => 'E02000977',
        '9AB' => 'E02000977',
        '9AD' => 'E02000972',
        '9AE' => 'E02000972',
        '9AF' => 'E02000977',
        '9AG' => 'E02000972',
        '9AH' => 'E02000972',
        '9AJ' => 'E02000972',
        '9DA' => 'E02000977',
        '9DB' => 'E02000977',
        '9DD' => 'E02000977',
        '9DE' => 'E02000977',
        '9DF' => 'E02000977',
        '9DG' => 'E02000977',
        '9DH' => 'E02000977',
        '9DQ' => 'E02000977',
        '9FA' => 'E02000977',
        '9FB' => 'E02000977',
        '9FD' => 'E02000977',
        '9FE' => 'E02000977',
        '9FF' => 'E02000977',
        '9FG' => 'E02000977',
        '9FH' => 'E02000977',
        '9FJ' => 'E02000977',
        '9FL' => 'E02000977',
        '9FN' => 'E02000977',
        '9FQ' => 'E02000977',
        '9HA' => 'E02000977',
        '9HB' => 'E02000977',
        '9HD' => 'E02000977',
        '9HE' => 'E02000977',
        '9HF' => 'E02000977',
        '9HG' => 'E02000977',
        '9HH' => 'E02000977',
        '9HJ' => 'E02000977',
        '9HL' => 'E02000977',
        '9HN' => 'E02000977',
        '9LA' => 'E02000977',
        '9LB' => 'E02000977',
        '9LD' => 'E02000977',
        '9LE' => 'E02000977',
        '9LF' => 'E02000977',
        '9LG' => 'E02000977',
        '9PA' => 'E02000972',
        '9PB' => 'E02000972',
        '9PD' => 'E02000972',
        '9PE' => 'E02000972',
        '9PF' => 'E02000972',
        '9PH' => 'E02000972',
        '9RA' => 'E02000972',
        '9RB' => 'E02000972',
        '9RD' => 'E02000972',
        '9RE' => 'E02000972',
        '9RF' => 'E02000972',
        '9RG' => 'E02000972',
        '9RH' => 'E02000972',
        '9RJ' => 'E02000972',
        '9RL' => 'E02000972',
        '9RN' => 'E02000972',
        '9RP' => 'E02000972',
        '9RQ' => 'E02000972',
        '9RR' => 'E02000972',
        '9SG' => 'E02000977',
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
