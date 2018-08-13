<?php

interface Options
{
    /**
     * @return string
     */
    public function getError();

    /**
     * @return array
     */
    public function toArray();
}
