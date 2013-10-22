<?php
/**
 * VersionTagExtension.php
 *
 * @copyright 2013 Maxwell Vandervelde
 * @license MIT <http://opensource.org/licenses/MIT>
 */

namespace Ink\VersionTagBundle\Twig;

use Ink\VersionTagBundle\Data\Provider\VersionProviderInterface;

use Twig_Extension as TwigExtension;

/**
 * Version Tag Extension
 *
 * Twig extension that sets an application version variable into templates.
 *
 * @author Maxwell Vandervelde <Max@MaxVandervelde.com>
 */
class VersionTagExtension extends TwigExtension
{
    /**
     * Version Data
     *
     * @var VersionProviderInterface Provider to get version information from
     */
    private $versionData;

    /**
     * Constructor
     *
     * @param VersionProviderInterface $versionData Provider to use for getting version
     *     information about the application.
     */
    public function __construct(VersionProviderInterface $versionData)
    {
        $this->versionData = $versionData;
    }

    /**
     * Returns a list of global variables to add to the existing list.
     *
     * @return array An array of global variables
     */
    public function getGlobals()
    {
        $applicationVersion = $this->versionData->getVersion();
        $versionString = null === $applicationVersion ? '' : $applicationVersion;

        return array(
            'application_version' => $versionString,
        );
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'ink_version_tag';
    }
}
