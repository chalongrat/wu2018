<?php

use PHPUnit\Framework\TestCase;

final class AITest extends TestCase
{
    public function testGender_Male(): void
    {
        $result = AI::getGender('สวัสดีครับ');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }

    public function testGender_Female(): void
    {
        $result = AI::getGender('สวัสดีค่ะ');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }

    public function testWordPositive(): void
    {
        $result = AI::getGender('สวัสดี');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }

    public function testWordNatural(): void
    {
        $result = AI::getGender('นาย');
        $expected_result = 'Natural';
        $this->assertEquals($expected_result, $result);
    }

    public function testWordNegative(): void
    {
        $result = AI::getGender('มึง');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }

    public function testRude_Word(): void
    {
        $result = AI::getGender('แม่ง');
        $expected_result = 'Rudeword';
        $this->assertEquals($expected_result, $result);
    }

    public function testLanguesTH(): void
    {
        $result = AI::getGender('ไทย');
        $expected_result = 'TH';
        $this->assertEquals($expected_result, $result);
    }

    public function testLanguesEN(): void
    {
        $result = AI::getGender('English');
        $expected_result = 'EN';
        $this->assertEquals($expected_result, $result);
    }
}