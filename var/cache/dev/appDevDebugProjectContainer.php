<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXjd2qx9\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXjd2qx9/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXjd2qx9.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXjd2qx9\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXjd2qx9\appDevDebugProjectContainer([
    'container.build_hash' => 'Xjd2qx9',
    'container.build_id' => '816f956a',
    'container.build_time' => 1582459594,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXjd2qx9');
