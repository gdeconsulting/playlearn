<?php
/**
 * Created by PhpStorm.
 * User: gilles
 * Date: 9/11/14
 * Time: 01:58
 */

namespace Gde\Math\Question\Level\One;


class Generator {

    const OPERATOR = '+';
    const MIN_VALUE = 0;
    const MAX_VALUE = 10;

    private $term1;
    private $term2;

    private $question;

    public function getQuestion($forceNew = false)
    {
        if (!$this->question) {
            $this->term1 = rand(self::MIN_VALUE, self::MAX_VALUE);
            $this->term2 = rand(self::MIN_VALUE, self::MAX_VALUE);
            $this->question = $this->term1 . ' '.self::OPERATOR.' ' . $this->term2;
        }

        return $this->question;
    }

} 