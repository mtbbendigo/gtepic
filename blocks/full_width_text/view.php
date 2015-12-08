<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<div class="row">
    <div class="large-12 columns">
        <div class="block-container">
            <div class="content-container">
            <?php
                if(!empty($field_1_textbox_text))
                {
                    echo('<div class="row">');
                        echo('<div class="large-12 columns">');
                            echo('<div class="document-text"><div class="article-title">');
                                echo htmlentities($field_1_textbox_text, ENT_QUOTES, APP_CHARSET);
                            echo('</div></div>');
                        echo('</div>');
                    echo('</div>');
                }
                if(!empty($field_2_wysiwyg_content))
                {
                    echo('<div class="row">');
                        echo('<div class="large-12 columns">');
                            echo('<div class="document-text">');
                            	echo('<div class="white-text">');
                                	echo $field_2_wysiwyg_content;
                                echo('</div>');
                            echo('</div>');
                        echo('</div>');
                    echo('</div>');
                }
            ?>
            </div>
        </div>
    </div>
</div>
<div class="spacer"></div>


