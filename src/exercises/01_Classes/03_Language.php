<?php
/**
 * PHP knows different visibility levels.
 * There are: private, public and protected.
 * You can understand them best if you have classes that extend (inheritance) a base-class.
 * That's why there are two classes in this example.
 */
class Language {
    private $isExecutable = true;
    protected $isCompiled = true;
    public $name = "";

    public function getIsExecutable() {
        return $this->isExecutable;
    }

    public function getIsCompiled() {
        return $this->isCompiled;
    }
}

/*
 * Your task will be to override the values isCompiled with false and name with `PHP`.
 * The private visibility won't allow us to override isExecutable inside of PHPLang. This class doesn't have access on this method.
 * But the other two can be changed since protected allows the base class and all childs to read, edit the value and public allows everyone to manipulate the value.
 */
class PHPLang extends Language {
    //TODO Override mentioned attributes
}

?>
