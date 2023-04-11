<?php

namespace App\Http\Controllers\Api\v1;

use App\Enums\UserTypesEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\QueryBuilder\QueryBuilder;
use App\Traits\ApiResponse;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param UserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(UserRequest $request)
    {
        $user = QueryBuilder::for(User::class)
            ->allowedIncludes(['roles', 'permissions'])
            ->allowedFilters(['name', 'email', 'phone'])
            ->paginate($request->per_page ?? 10)
            ->appends($request->all());
        return $this->respondSuccess(
            new UserCollection($user)
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $dataUser = $request->validated();
//        $dataUser['password'] = Hash::make($dataUser['password']);
        $user = new User();
//TODO add role add quyen

        if ($user->fill($dataUser)->save()) {
//            app(UserAddRoleAction::class)->execute($user);
            return $this->respondCreated(new UserResource($user));
        }
        return $this->respondError('Tao moi user that bai');

//        app(UserAddRoleAction::class)->execute();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(UserRequest $request, User $user)
    {
        return $this->respondSuccess(new UserResource($user));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request,User $user)
    {
        $dataUser = $request->validated();
        $dataUser['password'] = Hash::make($dataUser['password']);
        if ($user->fill($dataUser)->save()){
            return $this->respondSuccess(
                new UserResource($user)
            );
        }
        return $this->respondError('Loi cap nhat User');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRequest $request, User $user)
    {
        if ($user->delete()) {
            return $this->respondOk(__('trans.delete_success', ['resource', 'User '.$user->name]));
        }
        return $this->respondError(__('trans.delete_fail', ['resource', 'User '.$user->name]));
    }
    public function getUserType(UserRequest $request)
    {
        $types = collect(UserTypesEnum::toValues())->map(function($type){
            return (object) [
                'name' => __('trans.'.$type),
                'value' => $type,
            ];
        });
        return $this->respondSuccess($types);
    }
}
