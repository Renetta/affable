<?php
    if(!empty($_GET['file'])) {
        $fileName = basename($_GET['file']);
        $filePath = 'assets/' . $fileName;

        if(!empty($fileName) && file_exists($filePath)) {
            //headers
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$filename");
            header("Content-type:application/pdf");

            readfile($filePath);
            exit;
        } else {
            echo "Company Profile is updating";
        }
    } else {
        echo "Company Profile is updating";
    }
?>