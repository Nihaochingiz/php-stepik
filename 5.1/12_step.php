<?php

class Counter {
    public static int $count = 0;

    public static function increment(): int {
            self::$count += 1;
            return self::$count;
    }
}

echo Counter::increment();
echo Counter::increment();
echo Counter::increment();