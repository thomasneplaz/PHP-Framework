<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQqpbyg7\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQqpbyg7/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerQqpbyg7.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerQqpbyg7\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerQqpbyg7\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Qqpbyg7',
    'container.build_id' => '846f1435',
    'container.build_time' => 1529418919,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerQqpbyg7');
