<?php
/**
 * CoolMS2 CLDR Module (http://www.coolms.com/)
 *
 * @link      http://github.com/coolms/cldr for the canonical source repository
 * @copyright Copyright (c) 2006-2015 Altgraphic, ALC (http://www.altgraphic.com)
 * @license   http://www.coolms.com/license/new-bsd New BSD License
 * @author    Dmitry Popov <d.popov@altgraphic.com>
 */

namespace CmsCldr\Mapping;

interface CountryInterface extends RegionInterface
{
    /**
     * @return string
     */
    public function getAlpha2Code();

    /**
     * @return string
     */
    public function getAlpha3Code();

    /**
     * @return RegionInterface
     */
    public function getRegion();

    /**
     * @return SubdivisionInterface[]
     */
    public function getSubdivisions();
}
