<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9XrTcxs\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9XrTcxs/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9XrTcxs.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9XrTcxs\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9XrTcxs\App_KernelDevDebugContainer([
    'container.build_hash' => '9XrTcxs',
    'container.build_id' => 'f425f9cf',
    'container.build_time' => 1695150442,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9XrTcxs');
