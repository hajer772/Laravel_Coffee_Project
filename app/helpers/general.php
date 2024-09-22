<?php

use App\Models\Permission;

const PAGINATION_COUNT = 10;

function successResponse($data = [], $message = "", $status = 200)
{
    return response()->json(
        [
            "status" => $status,
            "message" => $message,
            "data" => $data,
        ],
        $status
    );
}

function failureResponse($data = [], $message = "", $status = 400)
{
    return response()->json(
        [
            "status" => $status,
            "message" => $message,
            "data" => $data,
        ],
        $status
    );
}

function formatDate($model)
{
    return date("d/m/Y - h:i A", strtotime($model));
}

function permissionName()
{
    $permissions = Permission::all();
    $data = [];
    foreach ($permissions as $permission) {
        $data[] = $permission->name;
    }
    return implode("|", $data);
}

function settings()
{
    $setting = \App\Models\Setting::first();
    if ($setting) {
        return $setting;
    }
    return "";
}
