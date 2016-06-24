<?php

namespace Fazland\ElasticaBundle\Paginator;

use Fazland\ElasticaBundle\Transformer\ElasticaToModelTransformerInterface;
use Elastica\ResultSet;

/**
 * Partial transformed result set.
 */
class TransformedPartialResults extends RawPartialResults
{
    protected $transformer;

    /**
     * @param ResultSet                                                           $resultSet
     * @param \Fazland\ElasticaBundle\Transformer\ElasticaToModelTransformerInterface $transformer
     */
    public function __construct(ResultSet $resultSet, ElasticaToModelTransformerInterface $transformer)
    {
        parent::__construct($resultSet);

        $this->transformer = $transformer;
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {
        return $this->transformer->transform($this->resultSet->getResults());
    }
}
