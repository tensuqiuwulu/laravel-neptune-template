<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Services\Users\UsersService;

class UsersApiController extends Controller
{
  protected $usersService;

  public function __construct()
  {
    $this->usersService = new UsersService();
  }

  public function getUsers()
  {
    $mssg = $this->usersService->getUsers();
    return response()->json([
      'message' => $mssg,
    ]);
  }
}
