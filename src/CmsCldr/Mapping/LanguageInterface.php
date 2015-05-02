<?php
/**
 * CoolMS2 CLDR module (http://www.coolms.com/)
 *
 * @link      http://github.com/coolms/cldr for the canonical source repository
 * @copyright Copyright (c) 2006-2015 Altgraphic, ALC (http://www.altgraphic.com)
 * @license   http://www.coolms.com/license/new-bsd New BSD License
 * @author    Dmitry Popov <d.popov@altgraphic.com>
 */

namespace CmsCldr\Mapping;

use CmsCommon\Mapping\Common\IdentifiableInterface,
    CmsCommon\Mapping\Common\NameableInterface;

interface LanguageInterface extends IdentifiableInterface, NameableInterface
{
    /**
     * @param string $code
     */
    public function setIso6391($code);

    /**
     * @return string
     */
    public function getIso6391();

    /**
     * @param string $code
     */
    public function setIso6392($code);

    /**
     * @return string
     */
    public function getIso6392();

    /**
     * @param string $code
     */
    public function setIso6393($code);

    /**
     * @return string
     */
    public function getIso6393();

    /**
     * @return string
     */
    public function getIsoCode();

    /**
     * @param string $numberCode
     */
    public function setNumberCode($numberCode);

    /**
     * @return string
     */
    public function getNumberCode();

    /**
     * @param ScriptInterface $script
     */
    public function setScript(ScriptInterface $script);

    /**
     * @return ScriptInterface
     */
    public function getScript();

    /**
     * @param array|\Traversable $locales
     */
    public function setLocales($locales);

    /**
     * @param array|\Traversable $locales
     */
    public function addLocales($locales);

    /**
     * @param \CmsLocale\Mapping\LocaleInterface $locale
     */
    public function addLocale(\CmsLocale\Mapping\LocaleInterface $locale);

    /**
     * @param array|\Traversable $locales
     */
    public function removeLocales($locales);

    /**
     * @param \CmsLocale\Mapping\LocaleInterface $locale
     */
    public function removeLocale(\CmsLocale\Mapping\LocaleInterface $locale);

    /**
     * Removes all locales
     */
    public function clearLocales();

    /**
     * @return Collection
     */
    public function getLocales();
}
