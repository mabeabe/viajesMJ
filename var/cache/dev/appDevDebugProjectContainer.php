<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXtjody5\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXtjody5/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXtjody5.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXtjody5\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXtjody5\appDevDebugProjectContainer();