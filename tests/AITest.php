<?php

use PHPUnit\Framework\TestCase;

final class AITest extends TestCase
{
    public function testGender_Male(): void
    {
        $result = AI::getGender('man');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }
}

final class AITest extends TestCase
{
    public function testGender_Male(): void
    {
        $result = AI::getGender('girl');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }
}