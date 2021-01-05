<?php
require_once('./_private/bundle.php');
require_once(HEADER);
?>

<div id="shortlink">
    <form>
        <input type="text" name="url" value="URL">
        <img alt="" src="<?= HOME . '/assets/images/check.svg' ?>" />
    </form>
</div>
<div id="plan">
    <h3>Update now to get more links</h3>
    <div id="plan-slide">
        <div class="plan-item">
            <h3>Free</h3>
            <h1>0 $</h1>
            <h3>10 links</h3>
        </div>
        <div class="plan-item">
            <h3>Free</h3>
            <h1>0 $</h1>
            <h3>10 links</h3>
        </div>
        <div class="plan-item">
            <h3>Free</h3>
            <h1>0 $</h1>
            <h3>10 links</h3>
        </div>
    
    </div>
    
</div>

<?php
require_once(FOOTER);
