<?php


use GraphAware\Neo4j\Client\ClientBuilder;

$client = ClientBuilder::create()
    ->addConnection('default', 'http://neo4j:stage@localhost:7678') // Example for HTTP connection configuration (port is optional)
    ->build();
