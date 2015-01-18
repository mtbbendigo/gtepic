<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<ul class="pricing-table">
    <li class="title">
    <?php  if (!empty($field_1_textbox_text)): ?>
        <?php  echo htmlentities($field_1_textbox_text, ENT_QUOTES, APP_CHARSET); ?>
    <?php  endif; ?>
    </li>
    <li class="price">
    <?php  if (!empty($field_2_textbox_text)): ?>
        <?php  echo htmlentities($field_2_textbox_text, ENT_QUOTES, APP_CHARSET); ?>
    <?php  endif; ?>
    </li>
    <li class="description">
    <?php  if (!empty($field_3_textbox_text)): ?>
        <?php  echo htmlentities($field_3_textbox_text, ENT_QUOTES, APP_CHARSET); ?>
    <?php  endif; ?>
    </li>

    <?php  if (!empty($field_4_textbox_text)){
        echo '<li class="bullet-item">';
        echo htmlentities($field_4_textbox_text, ENT_QUOTES, APP_CHARSET);
        echo '</li>';
    }
    ?>

    <?php  if (!empty($field_5_textbox_text)) {
        echo '<li class="bullet-item">';
        echo htmlentities($field_5_textbox_text, ENT_QUOTES, APP_CHARSET);
        echo '</li>';
    }
    ?>

    <?php  if (!empty($field_6_textbox_text)){
        echo '<li class="bullet-item">';
        echo htmlentities($field_6_textbox_text, ENT_QUOTES, APP_CHARSET);
        echo '</li>';
    } ?>

    <?php  if (!empty($field_7_textbox_text)){
        echo '<li class="bullet-item">';
        echo htmlentities($field_7_textbox_text, ENT_QUOTES, APP_CHARSET);
        echo '</li>';
    }
    ?>

    <?php  if (!empty($field_8_textbox_text)){
        echo '<li class="bullet-item">';
        echo htmlentities($field_8_textbox_text, ENT_QUOTES, APP_CHARSET);
        echo '</li>';
    }
    ?>

    <?php  if (!empty($field_9_textbox_text)){
        echo '<li class="bullet-item">';
        echo htmlentities($field_9_textbox_text, ENT_QUOTES, APP_CHARSET);
        echo '</li>';
    }
    ?>

    <?php  if (!empty($field_10_textbox_text)){
        echo '<li class="bullet-item">';
        echo htmlentities($field_10_textbox_text, ENT_QUOTES, APP_CHARSET);
        echo '</li>';
    }
    ?>

    <?php  if (!empty($field_11_textbox_text)){
        echo '<li class="bullet-item">';
        echo htmlentities($field_11_textbox_text, ENT_QUOTES, APP_CHARSET);
        echo '</li>';
    }
    ?>

    <?php  if (!empty($field_12_textbox_text)){
        echo '<li class="bullet-item">';
        echo htmlentities($field_12_textbox_text, ENT_QUOTES, APP_CHARSET);
        echo '</li>';
    }

    ?>
    <li class="cta-button">
    <?php  if (!empty($field_13_link_url)) {
        $link_url = $this->controller->valid_url($field_13_link_url);
        $link_text = empty($field_13_link_text) ? $field_13_link_url : htmlentities($field_13_link_text, ENT_QUOTES, APP_CHARSET);
        echo '<a href="'.$link_url.'" class="button">'.$link_text.'</a>';
    }
    ?>
    </li>
</ul>


