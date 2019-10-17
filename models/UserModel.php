<?php

namespace App\Models;

    use App\Core\Model;

    class UserModel extends Model
    {
        public function getByEmail(string $email) 
        {
            $sql = 'SELECT email FROM user WHERE email = ?;';
            $prep = $this->getConnection()->prepare($sql);
            $res = $prep->execute([$email]);

            $emails = [];
            if($res)
            {
                $emails = $prep->fetch(\PDO::FETCH_OBJ);
            }
            return $emails;
        }

        public function getByUsername(string $username)
        {
            $sql = 'SELECT username FROM user WHERE username = ?;';
            $prep = $this->getConnection()->prepare($sql);
            $res = $prep->execute([$username]);

            $usernames = [];
            if($res)
            {
                $usernames = $prep->fetch(\PDO::FETCH_OBJ);
            }
            return $usernames;
        }

        public function getByPassword(string $password)
        {
            $sql = 'SELECT password_hash FROM user WHERE password_hash = ?;';
            $prep = $this->getConnection()->prepare($sql);
            $res = $prep->execute([$password]);

            $passwords = [];
            if($res)
            {
                $passwords = $prep->fetch(\PDO::FETCH_OBJ);
            }
            return $passwords;
        }

        public function getByUserId(int $id)
        {
            $sql = 'SELECT * FROM  user WHERE  user_id = ?;';
            $prep = $this->getConnection()->prepare($sql);
            $res = $prep->execute([$id]);

            $item = NULL;
            if($res)
            {
                $item = $prep->fetch(\PDO::FETCH_OBJ);
            }
            return $item;
        }
    }