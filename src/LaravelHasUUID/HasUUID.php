<?php

/**
 * Laravel HasUUID
 *
 * Autogenerate UUIDs for your Models on create and set the route model binding key to uuid.
 * Also adds a fromUUID method to your Model.
 *
 * @author  Afaan Bilal
 * @link    https://afaan.dev
 * @link    https://packagist.org/packages/afaanbilal/laravel-has-uuid
 * @license MIT
 */

declare(strict_types=1);

namespace AfaanBilal\LaravelHasUUID;

use Ramsey\Uuid\Codec\TimestampFirstCombCodec;
use Ramsey\Uuid\Generator\CombGenerator;
use Ramsey\Uuid\UuidFactory;

trait HasUUID
{
    /**
     * Fill UUID on create.
     *
     * @return void
     */
    protected static function bootHasUUID(): void
    {
        static::creating(function ($model) {
            $model->uuid = $model->uuid ?? self::orderedUuid();
        });
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'uuid';
    }

    /**
     * Get the model using UUID.
     *
     * @param string $uuid
     *
     * @return ?static
     */
    public static function fromUUID($uuid): ?static
    {
        /** @var ?static */
        return static::where('uuid', $uuid)->first();
    }

    /**
     * Generate an ordered UUID.
     *
     * @return string
     */
    private static function orderedUuid(): string
    {
        $factory = new UuidFactory();

        $factory->setRandomGenerator(new CombGenerator($factory->getRandomGenerator(), $factory->getNumberConverter()));
        $factory->setCodec(new TimestampFirstCombCodec($factory->getUuidBuilder()));

        return $factory->uuid4()->toString();
    }
}
