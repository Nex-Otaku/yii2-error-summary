<?php

namespace NexOtaku\Yii2;

use yii\base\Model;

/**
 * Usage: $this->log('Order validation failed: ' . ErrorSummary::of($order));
 */
class ErrorSummary
{
    public static function of(Model $model): string
    {
        $lines = [];
        $errors = $model->getFirstErrors();

        foreach ($errors as $es) {
            $lines = array_merge($lines, (array)$es);
        }

        return implode("\n", $lines);
    }
}
