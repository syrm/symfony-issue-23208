<?php

namespace AppBundle\ExpressionLanguage;

use Symfony\Component\ExpressionLanguage\ExpressionFunction;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;

class ExpressionLanguageProvider implements ExpressionFunctionProviderInterface
{
    public function getFunctions()
    {
        return array(
            new ExpressionFunction('test', function ($input) {
                return $input;
            }, function (array $values) {
                return true;
            }),
        );
    }
}
