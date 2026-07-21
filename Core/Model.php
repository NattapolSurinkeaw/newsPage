<?php

namespace Core;

use PDO;
use PDOException;

class Model
{
    protected static ?PDO $db = null;

    /**
     * ดึงตัวเชื่อมต่อ PDO (ใช้ Singleton เพื่อไม่ให้เชื่อมต่อซ้ำซ้อน)
     */
    public function Connect(): ?PDO
    {
        if (self::$db === null) {
            try {
                $conn = new PDO("mysql:host=" . config('host') . ";charset=utf8", config('user'), config('pass'));
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->exec("CREATE DATABASE IF NOT EXISTS " . config('db_name'));
                $conn->exec("USE " . config('db_name'));
                
                self::$db = $conn;
            } catch (PDOException $e) {
                dd($e->getMessage());
            }
        }
        return self::$db;
    }

    /**
     * Magic Method ช่วยให้เรียก Class::method() แบบ Static ได้สะดวก
     */
    public static function __callStatic($method, $args)
    {
        $instance = new static(); // สร้าง Object ของ Model ขึ้นมาอัตโนมัติ
        
        if (method_exists($instance, $method)) {
            return call_user_func_array([$instance, $method], $args);
        }

        throw new \Exception("Method {$method} does not exist in " . static::class);
    }

    /**
     * Helper สำหรับ Bind ค่าใน PDO แบบอัตโนมัติ (รองรับทั้งแบบ :key และตัวเลข)
     */
    private function bindValues($stmt, array $value)
    {
        foreach ($value as $key => $val) {
            if (is_int($key)) {
                $stmt->bindValue($key + 1, $val);
            } else {
                $param = (strpos($key, ':') === 0) ? $key : ":" . $key;
                $stmt->bindValue($param, $val);
            }
        }
    }

    public function SelectRow(string $sql, array $value = [], bool $fetch = false)
    {
        $conn = $this->Connect();
        $stmt = $conn->prepare($sql);
        
        if (!empty($value)) {
            $this->bindValues($stmt, $value);
        }

        if ($stmt->execute()) {
            return $fetch ? $stmt->fetch(PDO::FETCH_ASSOC) : $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;
    }

    public function InsertRow(string $sql, array $value = [], bool $LastID = false)
    {
        $conn = $this->Connect();
        $stmt = $conn->prepare($sql);

        if (!empty($value)) {
            $this->bindValues($stmt, $value);
        }

        if ($stmt->execute()) {
            return $LastID ? $conn->lastInsertId() : true;
        }
        return false;
    }

    public function UpdateRow(string $sql, array $value = []): bool
    {
        $conn = $this->Connect();
        $stmt = $conn->prepare($sql);

        if (!empty($value)) {
            $this->bindValues($stmt, $value);
        }

        return $stmt->execute();
    }

    public function DeleteRow(string $sql, array $value = []): bool
    {
        return $this->UpdateRow($sql, $value);
    }
}