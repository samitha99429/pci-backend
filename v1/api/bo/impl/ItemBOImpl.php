<?php

class ItemBOImpl implements ItemBO
{

    public function addItem(Item $i): bool
    {
        return true;
    }

    public function deleteItem($code): bool
    {
        return true;
    }

    public function searchItem($code)
    {
        // TODO: Implement searchItem() method.
    }

    public function updateItem(Item $i): bool
    {
        return true;
    }

    public function getAllItem(): array
    {
        return array();
    }
}