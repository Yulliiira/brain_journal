<?php

namespace App\Domain\Note\DTO;

class CategoryDTO
{
    /**
     * @param string $name
     * @param string $slug
     * @param int $user_id
     */
    public function  __construct(
        public string $name,
        public string $slug,
        public int $user_id,
    ){}
}