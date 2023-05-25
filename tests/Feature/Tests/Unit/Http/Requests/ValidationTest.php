<?php

namespace Tests\Unit\Http\Requests;

use Codeholic\Advertisement\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class StoreRequestTest extends TestCase
{
    public function testValidationRules()
    {
        $validator = Validator::make(
            [
                'title' => 'Lorem ipsum dolor sit amet',
            ],
            (new StoreRequest())->rules()
        );

        $this->assertTrue($validator->passes());

        $validator = Validator::make(
            [
                'title' => '',
            ],
            (new StoreRequest())->rules()
        );

        $this->assertFalse($validator->passes());
        $this->assertContains('The title field is required', $validator->errors()->all());
    }

    public function testValidationMessages()
    {
        $messages = (new StoreRequest())->messages();

        $this->assertEquals(
            'Заголовок не должен превышать 255 символов',
            Lang::get('validation.max.string', ['attribute' => 'title', 'max' => 255], 'en')
        );
        $this->assertEquals(
            'Заголовок не должен превышать 255 символов',
            $messages['title.max']
        );
    }
}
