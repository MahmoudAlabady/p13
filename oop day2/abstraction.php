<?php

// create , read   , update ,  delete 
// crud

abstract class crudOperations {
    public abstract function create();
    public abstract function read();
    public abstract function update();
    public abstract function delete();
}

class user extends crudOperations{
    public  function create(){
        echo "create user <br>";
    }
    public  function read(){
        echo "read user <br>";
    }
    public  function update(){
        echo "update user <br>";
    }
    public  function delete(){
        echo "delete user <br>";
    }
}


class product extends crudOperations {
    public  function create(){
        echo "create product <br>";
    }
    public  function read(){
        echo "read product <br>";
    }
    public  function update(){
        echo "update product <br>";
    }
    public  function delete(){
        echo "delete product <br>";
    }
}


class offers  extends crudOperations {
    public  function create(){
        echo "create offers <br>";
    }
    public  function read(){
        echo "read offers <br>";
    }
    public  function update(){
        echo "update offers <br>";
    }
    public  function delete(){
        echo "delete offers <br>";
    }
}