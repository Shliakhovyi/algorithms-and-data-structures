<?php

class MyCustomException extends Exception {

}
class MyCustomException2 extends Exception {

}

function test1() {
    if(false) {
        throw new MyCustomException("Error from function 1");
    }

    return 5;
}

function test2() {
    if(true) {
        throw new Exception("Error from function 2");
    }

    return 5 + test1();
}


try {
    echo test2();
} catch (MyCustomException2 $e) {
    echo "My custom Error2: ".$e->getMessage();
} catch (MyCustomException1 $e) {
    echo "My custom Error1: ".$e->getMessage();
} catch (Exception $e) {
    echo "Main Error: ".$e->getMessage();
}





