<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMRWSVdn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMRWSVdn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMRWSVdn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMRWSVdn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMRWSVdn\App_KernelDevDebugContainer([
    'container.build_hash' => 'MRWSVdn',
    'container.build_id' => '35342aff',
    'container.build_time' => 1681374714,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMRWSVdn');