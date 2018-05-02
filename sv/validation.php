<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute måste accepteras.',
    'active_url'           => ':attribute är inte en giltig URL.',
    'after'                => ':attribute måste vara ett datum efter :date.',
    'after_or_equal'       => ':attribute måste vara ett datum efter eller lika med :date.',
    'alpha'                => ':attribute får bara innehålla bokstäver.',
    'alpha_dash'           => ':attribute får bara innehålla bokstäver, siffror och bindestreck.',
    'alpha_num'            => ':attribute får bara innehålla bokstäver och siffror.',
    'array'                => ':attribute måste vara en array.',
    'before'               => ':attribute måste vara ett datum före :date.',
    'before_or_equal'      => ':attribute måste vara ett datum före eller lika med :date.',
    'between'              => [
        'numeric' => ':attribute måste ha mellan :min och :max.',
        'file'    => ':attribute måste ha mellan :min och :max kilobytes.',
        'string'  => ':attribute måste ha mellan :min och :max tecken.',
        'array'   => ':attribute måste ha mellan :min och :max objekt.',
    ],
    'boolean'              => ':attribute fältet måste vara sant eller falskt.',
    'confirmed'            => ':attribute bekräftelsen matchar inte.',
    'date'                 => ':attribute är inte ett giltigt datum.',
    'date_format'          => ':attribute matchar inte formatet :format.',
    'different'            => ':attribute och :other måste vara annorlunda.',
    'digits'               => ':attribute måste vara :digits digits.',
    'digits_between'       => ':attribute måste vara mellan :min och :max.',
    'dimensions'           => ':attribute har ogiltiga bilddimensioner.',
    'distinct'             => ':attribute fältet har ett duplikatvärde.',
    'email'                => ':attribute måste vara en giltig e-postadress.',
    'exists'               => 'Det valda :attribute är ogiltig.',
    'file'                 => ':attribute måste vara en fil.',
    'filled'               => ':attribute fältet måste ha ett värde.',
    'image'                => ':attribute måste vara en bild.',
    'in'                   => 'Det valda :attribute är ogiltigt.',
    'in_array'             => ':attribute fältet finns inte i :other.',
    'integer'              => ':attribute måste vara ett heltal.',
    'ip'                   => ':attribute måste vara en giltig IP-adress.',
    'ipv4'                 => ':attribute måste vara en giltig IPv4-adress.',
    'ipv6'                 => ':attribute måste vara en giltig IPv6-adress.',
    'json'                 => ':attribute måste vara en giltig JSON-sträng.',
    'max'                  => [
        'numeric' => ':attribute får inte vara större än :max.',
        'file'    => ':attribute får inte vara större än :max kilobytes.',
        'string'  => ':attribute får inte vara större än :max tecken.',
        'array'   => ':attribute får inte vara större än :max objekt.',
    ],
    'mimes'                => ':attribute måste vara en fil av typen: :values.',
    'mimetypes'            => ':attribute måste vara en fil av typen: :values.',
    'min'                  => [
        'numeric' => ':attribute måste ha minst :min.',
        'file'    => ':attribute måste ha minst :min kilobytes.',
        'string'  => ':attribute måste ha minst :min tecken.',
        'array'   => ':attribute måste ha minst :min objekt.',
    ],
    'not_in'               => 'Det valda :attribute är ogiltigt.',
    'numeric'              => ':attribute måste vara en siffra.',
    'present'              => ':attribute fält måste vara närvarande.',
    'regex'                => ':attribute formatet är ogiltigt.',
    'required'             => ':attribute fältet är obligatoriskt.',
    'required_if'          => ':attribute fältet krävs när :other är :value.',
    'required_unless'      => ':attribute fältet krävs om inte :other är i :values.',
    'required_with'        => ':attribute fältet krävs när :values är närvarande.',
    'required_with_all'    => ':attribute fältet krävs när :values är närvarande.',
    'required_without'     => ':attribute fältet krävs när :values är inte närvarande.',
    'required_without_all' => ':attribute fältet krävs när ingen av :values är närvarande.',
    'same'                 => ':attribute och :other måste matcha.',
    'size'                 => [
        'numeric' => ':attribute måste vara :size.',
        'file'    => ':attribute måste vara :size kilobytes.',
        'string'  => ':attribute måste vara :size tecken.',
        'array'   => ':attribute måste innehålla :size objekt.',
    ],
    'string'               => ':attribute måste vara en sträng.',
    'timezone'             => ':attribute måste vara en giltig zon.',
    'unique'               => ':attribute har redan blivit tagen.',
    'uploaded'             => ':attribute misslyckades med att ladda upp.',
    'url'                  => ':attribute formatet är ogiltigt.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
