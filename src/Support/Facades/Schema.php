<?php

declare(strict_types=1);

namespace Tpetry\PostgresqlEnhanced\Support\Facades;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Schema as BaseSchema;

/**
 * @method static void createExtension(string $name)
 * @method static void createExtensionIfNotExists(string $name)
 * @method static void createRecursiveView(string $name, Builder|string $query, array $columns)
 * @method static void createRecursiveViewOrReplace(string $name, Builder|string $query, array $columns)
 * @method static void createView(string $name, Builder|string $query)
 * @method static void createViewOrReplace(string $name, Builder|string $query)
 * @method static void dropExtension(string ...$name)
 * @method static void dropExtensionIfExists(string ...$name)
 * @method static void dropView(string ...$name)
 * @method static void dropViewIfExists(string ...$name)
 */
class Schema extends BaseSchema
{
}