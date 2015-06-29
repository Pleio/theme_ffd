<?php
class ElggCafe extends ElggObject {
    const SUBTYPE = 'cafe';

    /**
     * Intialize the ElggQuestion class
     *
     * @return void
     */
    protected function initializeAttributes() {
        parent::initializeAttributes();
        $this->attributes['subtype'] = self::SUBTYPE;
    }
}