<?php

declare(strict_types=1);

namespace Prokl\DtoMapperBundle\Services;

use AutoMapperPlus\Exception\UnregisteredMappingException;

/**
 * Interface MapperInterface
 * @package Prokl\DtoMapperBundle\Services
 */
interface MapperInterface
{
    /**
     * @param array|object        $source      Исходник.
     * @param array|object|string $destination Назначение.
     *
     * @return array|mixed|object|null
     * @throws UnregisteredMappingException
     */
    public function convert($source, $destination);

    /**
     * @param iterable $sources     Исходник.
     * @param string   $destination Назначение.
     *
     * @return iterable
     */
    public function convertCollection(iterable $sources, string $destination): iterable;
}
