<?php
class testConstantSupportForArrayWithSelfReferenceInClass
{
    const A = 42;
    const B = 23;

    const C = [self::A, self::B];
}
