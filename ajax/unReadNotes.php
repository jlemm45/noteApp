<?php
/**
 * Created by PhpStorm.
 * User: Jaden
 * Date: 2/12/16
 * Time: 9:47 PM
 */

use app\models\note;

$note = new note();

if($note->unReadNotes() == 1) {
    echo 'yes';
}
else {
    echo 'no';
}