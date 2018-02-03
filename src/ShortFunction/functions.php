<?php

declare(strict_types=1);

namespace ShortFunction;

function f(string ...$args): callable {
    $code = \array_pop($args);

    return eval(\sprintf(
        'return function (%s) { return %s; };',
        \implode(', ', $args),
        \rtrim($code, ';')
    ));
}
