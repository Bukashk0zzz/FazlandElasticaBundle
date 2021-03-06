<?php

/**
 * This file is part of the FazlandElasticaBundle project.
 *
 * (c) Infinite Networks Pty Ltd <http://www.infinite.net.au>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fazland\ElasticaBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class TransformEvent extends Event
{
    /**
     * @Event("Fazland\ElasticaBundle\Event\TransformEvent")
     */
    const PRE_TRANSFORM = 'fazland_elastica.pre_transform';

    /**
     * @Event("Fazland\ElasticaBundle\Event\TransformEvent")
     */
    const POST_TRANSFORM = 'fazland_elastica.post_transform';

    /**
     * @var mixed
     */
    private $document;

    /**
     * @var array
     */
    private $fields;

    /**
     * @var mixed
     */
    private $object;

    /**
     * @param mixed $document
     * @param array $fields
     * @param mixed $object
     */
    public function __construct($document, array $fields, $object)
    {
        $this->document = $document;
        $this->fields = $fields;
        $this->object = $object;
    }

    /**
     * @return mixed
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param mixed $document
     */
    public function setDocument($document)
    {
        $this->document = $document;
    }
}
