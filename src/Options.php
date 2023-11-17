<?php

namespace Wjbecker\ConnectwiseApiClient;

trait Options
{
    private int $pageSize = 25;
    private string $conditions = '';

    public function withOptions(array $options = []): static
    {
        foreach ($options as $option => $value) {
            $this->$option = $value;
        }

        return $this;
    }
}
