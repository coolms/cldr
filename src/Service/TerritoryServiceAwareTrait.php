<?php
/**
 * CoolMS2 CLDR Module (http://www.coolms.com/)
 *
 * @link      http://github.com/coolms/cldr for the canonical source repository
 * @copyright Copyright (c) 2006-2015 Altgraphic, ALC (http://www.altgraphic.com)
 * @license   http://www.coolms.com/license/new-bsd New BSD License
 * @author    Dmitry Popov <d.popov@altgraphic.com>
 */

namespace CmsCldr\Service;

use CmsCommon\Service\DomainServiceInterface;

trait TerritoryServiceAwareTrait
{
    /**
     * @var DomainServiceInterface
     */
    protected $territoryService;

    /**
     * @return DomainServiceInterface
     */
    public function getTerritoryService()
    {
        return $this->territoryService;
    }

    /**
     * @param DomainServiceInterface $service
     * @return self
     */
    public function setTerritoryService(DomainServiceInterface $service)
    {
        $this->territoryService = $service;
        return $this;
    }
}
