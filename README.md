Version Tag Bundle
==================

This bundle provides a quick way to include a version number in your application
that is read from a file.

Installation
------------

You can install Haphazard through composer:

    composer.phar require ink/version-tag-bundle

Configuration
-------------

To use this bundle, you will need to register it with the app kernel:

    $bundles = array(
        // ...
        new Ink\VersionTagBundle\InkVersionTagBundle(),
    );

You will also need to specify a file from which to read your application's
version string from.

in app/config/config.yml:

    ink_version_tag:
        file_location: %kernel.root_dir%/../VERSION
