<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY1rmveu\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY1rmveu/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerY1rmveu.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerY1rmveu\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerY1rmveu\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Y1rmveu',
    'container.build_id' => 'fb0a2b9d',
    'container.build_time' => 1529401423,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerY1rmveu');
