<?php
/**
 * VersionProvider.php
 *
 * @copyright 2013 Maxwell Vandervelde
 * @license MIT <http://opensource.org/licenses/MIT>
 */

namespace Ink\VersionTagBundle\Data\Provider;

use Symfony\Component\HttpKernel\Kernel;

/**
 * Version Provider
 *
 * Class provides the version information of the application.
 *
 * @author Maxwell Vandervelde <Max@MaxVandervelde.com>
 */
class VersionProvider implements VersionProviderInterface
{
    /**
     * @var string The location of the version file to read from
     */
    private $versionFile;

    /**
     * Constructor
     *
     * @param string $versionFile (optional) The location of the version file
     *     to read from if it exists
     */
    public function __construct($versionFile)
    {
        $this->versionFile = $versionFile;
    }

    /**
     * Get Version
     *
     * Gets the application version string or null if none is set
     *
     * @return string|null
     */
    public function getVersion()
    {
        $contents = @file_get_contents($this->versionFile);

        if (false === $contents) {
            return null;
        }

        return $contents;
    }
}
