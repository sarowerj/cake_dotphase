<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="action_msg message success">
    <h3>Success</h3>
    <?= $message ?>
</div>


<script type="text/javascript">
    $('.action_msg').click(function () {
        $(this).fadeOut('slow');
    });
</script>