<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerA4EPyHn\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerA4EPyHn/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerA4EPyHn.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerA4EPyHn\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerA4EPyHn\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'A4EPyHn',
    'container.build_id' => 'b2b2ec27',
    'container.build_time' => 1553679350,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerA4EPyHn');
