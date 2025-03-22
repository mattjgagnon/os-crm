<?php

namespace OSCRM\Domain\Contact;

class FullName
{
    public function __construct(private string $fullName)
    {
        $this->fullName = trim($this->replaceAllDoubleSpacesWithSingle($this->fullName));
    }

    public function get(): string
    {
        return $this->fullName;
    }

    private function replaceAllDoubleSpacesWithSingle(string $str): string
    {
        return preg_replace('/ {2,}/', ' ', $str);
    }
}
