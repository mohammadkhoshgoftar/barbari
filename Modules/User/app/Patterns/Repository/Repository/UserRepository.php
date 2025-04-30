<?php

namespace Modules\User\app\Patterns\Repository\Repository;

use App\Models\User;
use Modules\Core\app\Patterns\Repository\Interface\CrudRepositoryInterface;
use Modules\Message\app\Http\Resources\Template\TemplateCollection;
use Modules\Message\app\Http\Resources\Template\TemplateResource;
use Illuminate\Support\Facades\Response;
use function Symfony\Component\Translation\t;

class UserRepository implements CrudRepositoryInterface
{
    private User $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function getItemById($id)
    {
        return $this->model->where('id', $id)->firstOrFail();
    }

    public function index()
    {
        try {
            $model = $this->model->paginate(Request()->per_page <= 30 ? Request()->per_page : 30);
            return new TemplateCollection($model);
        } catch (\Exception $exception) {
            $message = $exception->getMessage();
            return Response::error($message);
        }
    }

    public function storeToDb($validatedData): bool
    {
        try {
            if (isset($validatedData['role_id'])) {
                $roll_id = $validatedData['role_id'];
            }
            unset($validatedData['role_id']);
            $user = $this->model->create($validatedData);
            $user->roles()->sync($roll_id);
            return true;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function updateToDb($validatedData, $id): bool
    {
        try {
            $user = $this->model->find($id);
            if (isset($validatedData['role_id'])) {
                $user->roles()->sync($validatedData['role_id']);
            }
            unset($validatedData['role_id']);
            $user->update($validatedData);
            return true;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function show($id)
    {
        try {
            $model = $this->model->findOrFail($id);
            $res = new TemplateResource($model);
            return Response::success(data: $res);
        } catch (\Exception $exception) {
            return Response::error($exception->getMessage());
        }
    }

    public function deleteToDb($id): bool
    {
        try {
            $model = $this->model->find($id);
            if ($model) {
                $model->delete();
                return true;
            } else {
                return false;
            }
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function changePassword($id, $newPassword): bool
    {
        try {
            $user = $this->getItemById($id);
            if (!$user) {
                return false;
            }
            $user->password = $newPassword;
            $user->save();
            return true;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function searchInProducts($name)
    {
        $res = $this->model->where('name', 'like', '%' . $name . '%')->get();
        $data = [];
        foreach ($res as $item) {
            $data[] = [
                'id' => $item->id,
                'name' => $item->name,
                'mobile' => $item->mobile,
            ];
        }
        return $data;
    }
}
