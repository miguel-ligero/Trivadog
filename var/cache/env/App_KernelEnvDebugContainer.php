<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW2jyB2W\App_KernelEnvDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW2jyB2W/App_KernelEnvDebugContainer.php') {
    touch(__DIR__.'/ContainerW2jyB2W.legacy');

    return;
}

if (!\class_exists(App_KernelEnvDebugContainer::class, false)) {
    \class_alias(\ContainerW2jyB2W\App_KernelEnvDebugContainer::class, App_KernelEnvDebugContainer::class, false);
}

return new \ContainerW2jyB2W\App_KernelEnvDebugContainer([
    'container.build_hash' => 'W2jyB2W',
    'container.build_id' => '87b52d6c',
    'container.build_time' => 1613139687,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW2jyB2W');
