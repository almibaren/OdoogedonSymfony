<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXP8fbFh\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXP8fbFh/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXP8fbFh.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXP8fbFh\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXP8fbFh\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'XP8fbFh',
    'container.build_id' => '4d8445b4',
    'container.build_time' => 1547632323,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXP8fbFh');