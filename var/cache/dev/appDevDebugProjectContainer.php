<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJrg2sk9\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJrg2sk9/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerJrg2sk9.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerJrg2sk9\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerJrg2sk9\appDevDebugProjectContainer([
    'container.build_hash' => 'Jrg2sk9',
    'container.build_id' => '0766c612',
    'container.build_time' => 1582634967,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJrg2sk9');
