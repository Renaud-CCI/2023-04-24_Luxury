<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJN64tKX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJN64tKX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJN64tKX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJN64tKX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJN64tKX\App_KernelDevDebugContainer([
    'container.build_hash' => 'JN64tKX',
    'container.build_id' => '827784de',
    'container.build_time' => 1683806109,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJN64tKX');
