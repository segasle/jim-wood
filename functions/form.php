<?php
/**
 * Created by PhpStorm.
 * User: sergejslepenkov
 * Date: 2019-08-07
 * Time: 19:47
 */
if (isset($_FILES['file'])) {
    $update = 'ads_img/';
    $file = $_FILES['file']['name'];
    $update_file = $update . $file;
    if (!file_exists($update_file)) {
        if (is_uploaded_file($_FILES['file']['tmp_name'])) {
            if ($_FILES['file']['size'] > 1024 * 3 * 1024) {
                echo '<div class="errors">Файл должен быть не больше 3 МБ</div>';
            } else {
                $ext = pathinfo($update_file, PATHINFO_EXTENSION);
                $allow = array('jpeg', 'jpg', 'png');
                if (in_array($ext, $allow)) {
                    if (move_uploaded_file($_FILES['file']['tmp_name'], $update_file)) {
                        $result = do_query("SELECT COUNT(*) as count FROM `ads` WHERE `title` = '{$data['title']}'");
                        $result = $result->fetch_object();
                        if (empty($result->count)) {
                            $wer = do_query("INSERT INTO `ads` (`vaul`,`title`, `price`,  `text`, `photo`, `author_id` ) VALUES ('{$data['value']}','{$data['title']}','{$data['price']}', '{$data['text']}','{$file}','{$_SESSION['email']}'')");
                            if (!empty($wer)) {
                                echo '<div class="go">Успешно подано</div>';
                            } else {
                                echo '<div class="errors">Такая запись уже есть</div>';
                            }
                        }
                    }
                }
            }
        }
    }
}