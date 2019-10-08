<?php


abstract class AbstractEmployee
{

    protected function openIDE($name)
    {
        echo sprintf("[%s] Open %s...\n", \spl_object_id($this), $name);
    }

}