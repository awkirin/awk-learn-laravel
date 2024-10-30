<?php
namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class ResourceService {
    static function destroy(string $resourceModel): void
    {
        if (!is_subclass_of($resourceModel, Model::class)) {
            throw new \InvalidArgumentException("Переданный класс не является моделью.");
        }
        $resourceModel->delete();
    }
}
