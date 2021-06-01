<?php

namespace Prokl\DtoMapperBundle;

use Prokl\DtoMapperBundle\DependencyInjection\DtoMapperExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class DtoMapperBundle
 * @package Prokl\DtoMapperBundle
 *
 * @since 26.02.2021
 */
class DtoMapperBundle extends Bundle
{
   /**
   * @inheritDoc
   */
    public function getContainerExtension()
    {
        if ($this->extension === null) {
            $this->extension = new DtoMapperExtension();
        }

        return $this->extension;
    }
}
