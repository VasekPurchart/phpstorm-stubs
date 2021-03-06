<?php


namespace StubTests\Parsers\Visitors;


use StubTests\Model\StubsContainer;

class CoreStubASTVisitor extends ASTVisitor
{
    public function __construct(StubsContainer $stubs)
    {
        parent::__construct($stubs);
        $this->isStubCore = true;
    }
}