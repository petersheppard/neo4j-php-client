<?php

namespace GraphAware\Neo4j\Client;

use GraphAware\Common\Transaction\TransactionInterface;

interface SessionInterface
{
    /**
     * @param string      $statement
     * @param array       $parameters
     * @param null|string $tag
     *
     * @return \GraphAware\Common\Result\Result
     */
    public function run($statement, array $parameters = [], $tag = null);

    public function close();

    /**
     * @return TransactionInterface
     */
    public function transaction();

    /**
     * @param string|null $query
     * @param array       $parameters
     * @param string|null $tag
     *
     * @return PipelineInterface
     */
    public function createPipeline($query = null, array $parameters = array(), $tag = null);
}
