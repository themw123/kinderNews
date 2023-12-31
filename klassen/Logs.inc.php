<?php


class Logs
{

    private static $errors = array();
    private static $messages = array();
    private static $success = array();


    public static function addError($error)
    {
        self::$errors[] = $error;
    }
    public static function addMessage($message)
    {
        self::$messages[] = $message;
    }

    public static function addSuccess($success)
    {
        self::$success[] = $success;
    }

    public static function getFirstError()
    {
        if (!empty(self::$errors)) {
            return self::$errors[0];
        } else {
            return null;
        }
    }

    public static function getFirstMessage()
    {
        if (!empty(self::$messages)) {
            return self::$messages[0];
        } else {
            return null;
        }
    }

    public static function getSuccess()
    {
        return self::$success;
    }


    public static function jsonLogs()
    {
        //fehler bzw messages von news holen bzw übersetzen an json übergeben
        $art = null;
        $text = null;
        $json_response = null;

        //nur aktuellste success behalten
        if (self::$success != null) {
            self::$success = array_slice(self::$success, -1);
        }

        if (self::$errors != null || self::$messages != null || self::$success != null) {
            if (self::$errors != null) {
                $art = "error";
                foreach (self::$errors as $error) {
                    $text = $text . $error;
                }
            } else if (self::$messages != null) {
                $art = "message";
                foreach (self::$messages as $message) {
                    $text = $text . $message;
                }
            } else if (self::$success != null) {
                $art = "success";
                foreach (self::$success as $success) {
                    $text = $text . $success;
                }
            }
        }
        $response = array(
            "art" => $art,
            "text" => $text
        );
        $json_response = json_encode($response);

        echo $json_response;
        //wichtig, da sonnst über index.php gegangen wird und der zusätztlich zur response das html drangehangen wird
        die();
    }

    public static function cloudflare()
    {
        $response = array(
            "art" => "message",
            "text" => "Synchronisation läuft im Hintergrund. Cloudflare lässt keine Rückmeldung zu."
        );
        $json_response = json_encode($response);

        echo $json_response;

        sleep(2);

        die();
    }
}
