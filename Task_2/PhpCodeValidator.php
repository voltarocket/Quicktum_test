<?php

class PhpCodeValidator {
    private $code;

    public function __construct(string $code) {
        $this->code = $code;
    }

    public function isValid(): bool {
        $stack = [];
        $length = strlen($this->code);

        for ($i = 0; $i < $length; $i++) {
            $char = $this->code[$i];

            if ($char === '{') {
                array_push($stack, '{');
            } elseif ($char === '}') {
                if (empty($stack)) {
                    return false; // Закрывающая скобка без открывающей
                }
                array_pop($stack);
            }
        }

        return empty($stack); // Все открытые скобки должны быть закрыты
    }
}

// Пример использования
$validator = new PhpCodeValidator("{{lajkdhf{adfa}{}adfasdfadf{}}}");
echo $validator->isValid() ?