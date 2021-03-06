<?php

namespace QueryMaker\Contracts;

interface QueryMaker
{
    function insert(mixed $useId, mixed ...$data) : bool;
    function select(int $firstRecordPosition, int $recordsPerPage) : array;
    function selectOne(int $id) : array;
    function update(int $id, mixed ...$data) : bool;
    function delete(int $id) : bool;
}
