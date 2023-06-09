<?php

namespace Codeholic\Advertisement\Http\Requests;


use App\Core\Http\Requests\CoreFormRequest;
use App\Http\Requests\Params\UpdateRequestParams;


class UpdateRequest extends CoreFormRequest
{
    protected string $params = UpdateRequestParams::class;

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.max' => __('Заголовок не должен превышать :max символов'),
        ];
    }
}
