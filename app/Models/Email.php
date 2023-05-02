<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{

    public static function imapOpen($password, $inbox = '{imap.beget.com:993/imap/ssl}INBOX', $email = 'info@prospekt-parts.com')
    {
        $imap = imap_open($inbox, $email, $password);
        return $imap;
    }

    public static function getCount()
    {
        $imap = self::imapOpen(config('app.e_pass'));
        $new = imap_search($imap, 'UNSEEN', SE_UID); 
        return $new == 0 ? '' : count($new);
    }

    public static function structure_encoding($encoding, $msg_body)
    { 
        switch((int) $encoding)
        { 
            case 4: $body = imap_qprint($msg_body); 
                break; 
            case 3: $body = imap_base64($msg_body); 
                break; 
            case 2: $body = imap_binary($msg_body); 
                break; 
            case 1: $body = imap_8bit($msg_body); 
                break; 
            case 0: $body = $msg_body; 
                break; 
            default: 
                $body = '';
        } 
        return $body; 
    }

}
