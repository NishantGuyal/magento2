<?php

declare(strict_types=1);

namespace Nishant\Cmodule\Api\Data;

interface PopupInterface
{
    public function getPopupId(): int;

    public function setPopupId(int $popupId);

    public function getName(): string;

    public function setName(string $name);

    public function getContent(): string;

    public function setContent(string $content);

    public function getCreatedAt(): string;

    public function setCreatedAt(string $createdAt);

    public function getPopupTimeout(): int;

    public function setPopupTimeout(int $popupTimeout);
}
