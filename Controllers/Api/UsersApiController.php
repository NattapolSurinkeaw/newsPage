<?php

namespace Controllers\Api;

use Core\BaseController;
use Models\Users;

class UsersApiController extends BaseController
{
    public function index()
    {
        $Method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

        switch ($Method) {
            case 'GET':
                return $this->list();

            case 'POST':
                return $this->create();

            default:
                return $this->methodNotAllowed();
        }
    }

    public function show($id)
    {
        $Method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

        switch ($Method) {
            case 'GET':
                $User = Users::getUserById((int) $id);
                if (!$User) {
                    return $this->jsonResponse(['message' => 'User not found'], 404);
                }
                return $this->jsonResponse($User);

            case 'PUT':
            case 'PATCH':
                return $this->update((int) $id);

            case 'DELETE':
                return $this->delete((int) $id);

            default:
                return $this->methodNotAllowed();
        }
    }

    private function list()
    {
        $Users = Users::getUsers();
        return $this->jsonResponse([
            'count' => is_array($Users) ? count($Users) : 0,
            'data'  => $Users ?: [],
        ]);
    }

    private function create()
    {
        $Payload = $this->getPayload();
        $Name    = trim((string) ($Payload['name']  ?? ''));
        $Email   = trim((string) ($Payload['email'] ?? ''));
        $Pass    = (string) ($Payload['password'] ?? '');

        if ($Name === '' || $Email === '' || $Pass === '') {
            return $this->jsonResponse([
                'message' => 'name, email and password are required',
            ], 422);
        }

        $Hash = password_hash($Pass, PASSWORD_BCRYPT);

        $ID = Users::createUser([
            'name'      => $Name,
            'email'     => $Email,
            'password'  => $Hash,
            'is_active' => 1,
        ]);

        return $this->jsonResponse([
            'id'      => $ID,
            'name'    => $Name,
            'email'   => $Email,
        ], 201);
    }

    private function update(int $id)
    {
        $User = Users::getUserById($id);
        if (!$User) {
            return $this->jsonResponse(['message' => 'User not found'], 404);
        }

        $Payload = $this->getPayload();
        $Data    = [];

        if (isset($Payload['name'])) {
            $Data['name'] = trim((string) $Payload['name']);
        }
        if (isset($Payload['email'])) {
            $Data['email'] = trim((string) $Payload['email']);
        }
        if (isset($Payload['password']) && $Payload['password'] !== '') {
            $Data['password'] = password_hash((string) $Payload['password'], PASSWORD_BCRYPT);
        }
        if (isset($Payload['is_active'])) {
            $Data['is_active'] = (int) $Payload['is_active'];
        }

        if (empty($Data)) {
            return $this->jsonResponse(['message' => 'No fields to update'], 422);
        }

        $Data['id'] = $id;

        $Updated = Users::updateUser($id, $Data);

        return $this->jsonResponse([
            'updated' => (bool) $Updated,
            'data'    => Users::getUserById($id),
        ]);
    }

    private function delete(int $id)
    {
        $User = Users::getUserById($id);
        if (!$User) {
            return $this->jsonResponse(['message' => 'User not found'], 404);
        }

        $Deleted = Users::deleteUser($id);

        return $this->jsonResponse(['deleted' => (bool) $Deleted]);
    }

    private function getPayload(): array
    {
        $ContentType = $_SERVER['CONTENT_TYPE'] ?? $_SERVER['HTTP_CONTENT_TYPE'] ?? '';
        $Raw         = file_get_contents('php://input') ?: '';

        if (stripos($ContentType, 'application/json') !== false && $Raw !== '') {
            $Decoded = json_decode($Raw, true);
            if (is_array($Decoded)) {
                return $Decoded;
            }
        }

        if (!empty($_POST)) {
            return $_POST;
        }

        if ($Raw !== '') {
            parse_str($Raw, $Parsed);
            if (is_array($Parsed)) {
                return $Parsed;
            }
        }

        return [];
    }

    private function jsonResponse(array $data, int $status = 200)
    {
        if (!headers_sent()) {
            http_response_code($status);
            header('Content-Type: application/json; charset=utf-8');
            header('X-Powered-By: newsPage-API');
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        exit();
    }

    private function methodNotAllowed()
    {
        return $this->jsonResponse(['message' => 'Method not allowed'], 405);
    }
}
