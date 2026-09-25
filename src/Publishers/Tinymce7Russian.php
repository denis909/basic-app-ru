<?php

namespace Denis909\BasicAppRu\Publishers;

use BasicApp\Core\Publisher;

class Tinymce7Russian extends Publisher
{
    protected $source = __DIR__ . '/../../assets/tinymce7';

    protected $destination = FCPATH . 'assets/tinymce7';

    public function publish(): bool
    {
        if (!is_dir(FCPATH . 'assets/tinymce7'))
        {
            return false; // установка не требуется
        }

        return parent::publish();
    }
}