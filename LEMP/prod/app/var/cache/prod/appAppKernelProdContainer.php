<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJxBGrxL\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJxBGrxL/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerJxBGrxL.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerJxBGrxL\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerJxBGrxL\appAppKernelProdContainer([
    'container.build_hash' => 'JxBGrxL',
    'container.build_id' => '6cf0d14b',
    'container.build_time' => 1709934238,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJxBGrxL');